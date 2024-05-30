<?php
/**
* Plugin Name: Contact Form
* Plugin_URI: https://www.your-site.com/
* Description: Contact us form submit and fetch details (Develop for learning purpose)
* Version: 0.1
* Author: Abdullah Bhatti
* Author URI: https://www.linkedin.com/in/abdullahbhatti
**/

// Security Layer
if(!defined('ABSPATH')){
    echo "you cannot be here!";
    exit;
}
if(!class_exists('SimpleContactForm')){
    class SimpleContactForm{
        public function __construct(){
            //Create and register custom post type "simple_contact_form"
            // add_action('init', array($this, 'create_custom_post_type'));
            
            define('MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ));
            define('MY_PLUGIN_URL', plugin_dir_url( __FILE__ ));
            require_once( MY_PLUGIN_PATH . '/vendor/autoload.php');

        }

        public function initialize(){
            //Utilites
            include_once MY_PLUGIN_PATH.'/includes/utilities.php';
            
            include_once MY_PLUGIN_PATH.'/includes/options-page.php';

            //Create submission page
            add_action('init', array($this, 'create_submission_page'));

            //load assets
            add_action('wp_enqueue_scripts', array($this, 'load_assets'));

            //Add short code
            add_shortcode('contact-form', array($this, 'load_shortcode'));
            
            // register REST API
            add_action('rest_api_init', array($this, 'register_rest_api'));

            //add meta boxes
            add_action('add_meta_boxes', array($this, 'create_meta_box'));

            //add filter for columns
            add_filter('manage_submission_posts_columns', array($this, 'custom_submission_columns'));

            //add action for fill submission columns
            add_action('manage_submission_posts_custom_column', array($this,'fill_submission_columns'), 10, 2);

            //setup search
            add_action('admin_init', array($this, 'setup_search'));
        }

        public function setup_search(){
            global $typenow;

            if($typenow == 'submission'){
                add_filter('posts_search', array($this, 'submission_search_override'), 10, 2);
            }

        }

        //callback function for search_setup
        public function submission_search_override($search, $query){
            
            global $wpdb;

                if($query->is_main_query() && !empty($query->query['s'])){
                    $sql = "
                        or exists(
                            select * from {$wpdb->postmeta} where post_id={$wpdb->posts}.ID
                            and meta_key in ('name', 'email', 'phone')
                            and meta_value like %s
                        )
                    ";
                    $like = '%' . $wpdb->esc_like($query->query['s']) . '%';

                    $search = preg_replace("#\({$wpdb->posts}.post_title LIKE [^)]+\)\K#",
                    $wpdb->prepare($sql, $like), $search);
                }

            return $search;
        }

        public function fill_submission_columns($column, $post_id){
            switch ($column) {
                case 'name':
                    echo get_post_meta($post_id, 'name', true);
                    break;
                case 'phone':
                    echo get_post_meta($post_id, 'phone', true);
                    break;
                case 'email':
                    echo get_post_meta($post_id, 'email', true);
                    break;
                case 'message':
                    echo get_post_meta($post_id, 'message', true);
                    break;
                
                default:
                    echo 'no data';
                    break;
            }
        }

        public function custom_submission_columns($columns){
            $columns = array(
                'cb' => $columns['cb'],
                'name' => __('Name', 'contact-plugin'),
                'email' => __('Email', 'contact-plugin'),
                'phone' => __('Phone', 'contact-plugin'),
                'message' => __('Message', 'contact-plugin'),
            );
            return $columns;

        }

        public function create_meta_box(){

            add_meta_box('custom_contact_box', 'Submission', array($this, 'display_submission'), 'submission');

        }

        public function display_submission(){
            $post_id = get_the_ID();
            $post_metadata = get_post_meta($post_id);

            // echo "<h1>".get_post_meta($post_id, 'name', true)."</h1>";
            echo '<strong> Date / Time: ' . get_the_date( 'Y-m-d D (H:i) ', $post_id ).'</strong><hr>';


            unset($post_metadata['_edit_lock']);
            foreach ($post_metadata as $key => $value) {?>
                <strong><?=esc_html(ucfirst($key))?></strong>: <?=esc_html($value[0])?><br>
            <?php }
        }

        public function create_submission_page(){
            $labels = array(
                'name' => 'Submissions',
                'singular_name' => 'Submission',
                'edit_item' => 'View Submission'
            );
        
            $args = array(
                'label' => 'Submissions',
                'public' => true,
                'has_archive' => true,
                'menu_position' => 40,
                'show_in_rest' => true,
                'publicly_queryable' => false,
                // 'supports' => ['custom-fields'],
                'supports' => false,
                'menu_icon' => 'dashicons-media-text',
                'labels' => $labels,
                'capability_type' => 'post',
                'capabilities' => [ 'create_posts' => false, 'update_post' => false],
                'map_meta_cap' => true
            );
        
            register_post_type('submission', $args);
        }

        public function load_shortcode(){
            include MY_PLUGIN_PATH.'includes/template/contact-form-html.php';
        }
        
        public function register_rest_api(){
            // sample address: site.com/wp-json/contact-us-form/v1/send-email
            register_rest_route('contact-us-form/v1', 'send-email',
                array(
                    'methods' => 'POST',
                    'callback' => array($this, 'handle_contact_form')
                )
            );
        }
    
        public function handle_contact_form($request){
            $params = $request->get_params();
            if(!wp_verify_nonce( $params['_wpnonce'], 'wp_rest')){
            // if(true){
                return new WP_REST_Response('Message not sent', 422);
            }
            unset($params['_wpnonce']);
            unset($params['_wp_http_referer']);
            $headers = [];
            
            $sender_name = sanitize_text_field($params['name']);
            $email = sanitize_email($params['email']);

            $admin_email = get_bloginfo('admin_email');
            $admin_name = get_bloginfo('name');

            $recipient_email = get_plugin_options('contact_form_recipients');

            if(!$recipient_email){
                $recipient_email = $admin_email;
            }

            

            $headers[] = "From:{$admin_name} <{$admin_email}>";
            $headers[] = "Reply-to: {$sender_name} <{$email}>";
            $headers[] = "Content-Type:text/html";


            $subject = "New Enquiry from {$sender_name}";

            $message = '';
            $message .= "<h4>Message has been sent from {$sender_name}</h4> </br>";

            $post_id = wp_insert_post([
                'post_title' => $sender_name,
                'post_type' => 'submission',
                'post_status' => 'Publish',

            ]);

            foreach($params as $label => $value){
                switch ($label) {
                    case 'name':
                        $value = add_post_meta($post_id, $label, sanitize_text_field($value));
                        break;
                    case 'email':
                        $value = add_post_meta($post_id, $label, sanitize_email($value));
                        break;
                    case 'phone':
                        $value = add_post_meta($post_id, $label, sanitize_text_field($value));
                        break;
                    case 'message':
                        $value = add_post_meta($post_id, $label, sanitize_textarea_field($value));
                        break;
                }

                $message.= '<strong>'.ucfirst($label) . ':</strong>'. $value . '</br>';

            }

            
            $success_message = get_plugin_options('contact_form_confirmation_message');
            if(!$success_message){
                $success_message = "Thank You! for contacting us";
            }else{
                $success_message = str_replace('{name}', $params['name'], $success_message);
            }
            
            // return new WP_REST_Response($success_message, 200);


            // SEND EMAIL
            if($post_id){
                wp_mail($recipient_email, $subject, $message, $headers);
                return new WP_REST_Response($success_message, 200);

            }
        }

        // public function create_custom_post_type(){
            //     $args = array(
            //         'public' => true,
            //         'has_archive'=> true,
            //         'labels'=> array(
            //             'name' => 'Contact Form',
            //             'singular_name' => 'Contact Form Entry',
            //         ),
            //         'support'=> array('title'),
            //         'exclude_from_search'=> true,
            //         'publicly_queryable'=> false,
            //         'capability'=> 'manage_option',
            //         'menu_icon' => 'dashicons-media-text',
            //     );
            //     register_post_type('simple_contact_form', $args);

        // }

        public function load_assets(){
            error_log('Loading assets'); // Debug message

            wp_enqueue_style(
                'contact-form-style',
                MY_PLUGIN_URL.'css/contact-form-style.css',
                array(),
                '1.0',
                'all'
            );

            wp_enqueue_script(
                'contact-form-style',
                MY_PLUGIN_URL.'js/contact-form-javascript.js',
                array('jquery'),
                1,
                true
            );
        }



    }
    
    add_action('plugins_loaded', function() {
        $simpleContactForm = new SimpleContactForm;
        $simpleContactForm->initialize();
    });
}

?>