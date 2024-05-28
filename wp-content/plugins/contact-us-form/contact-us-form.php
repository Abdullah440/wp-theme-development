<?php
/**
* Plugin Name: Contact Form
* Plugin_URI: https://www.your-site.com/
* Description: Contact us form submit and fetch details (Develop for learning purpose)
* Version: 0.1
* Author: Abdullah Bhatti
* Author_URI: https://www.your-site.com/
**/

// Security Layer
if(!defined('ABSPATH')){
    echo "access denied!";
    exit;
}
if(!class_exists('SimpleContactForm')){
    class SimpleContactForm{
        public function __construct(){
            //Create and register custom post type "simple_contact_form"
            // add_action('init', array($this, 'create_custom_post_type'));
            
            define('MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ));
            require_once( MY_PLUGIN_PATH . '/vendor/autoload.php');

        }

        public function initialize(){
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
                <strong><?=ucfirst($key)?></strong>: <?=$value[0]?><br>
            <?php }
        }
        public function create_submission_page(){
            $labels = array(
                'name' => 'Submissions',
                'singular_name' => 'Submission',
            );
        
            $args = array(
                'label' => 'Submissions',
                'public' => true,
                'has_archive' => true,
                'show_in_rest' => true,
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

            $admin_name = get_bloginfo('name');
            $admin_email = get_bloginfo('admin_email');
            $sender_name = $params['name'];

            $headers = [];
            $headers[] = "From:{$admin_name} <{$admin_email}>";
            $headers[] = "Reply-to: {$sender_name} <{$params['email']}>";
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
                $message.= '<strong>'.ucfirst($label) . ':</strong>'. $value . '</br>';
                add_post_meta($post_id, $label, $value);
            }
            
            return new WP_REST_Response('Thank you for email', 200);


            // // SEND EMAIL
            // if($post_id){
                // wp_mail($admin_email, $subject, $message, $headers);
                //     return new WP_REST_Response('Thank you for email', 200);
            //}
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
                plugin_dir_url( __FILE__ ).'css/contact-form-style.css',
                array(),
                '1.0',
                'all'
            );

            wp_enqueue_script(
                'contact-form-style',
                plugin_dir_url( __FILE__ ).'js/contact-form-javascript.js',
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