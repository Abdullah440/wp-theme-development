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

class SimpleContactForm{
    public function __construct(){
        //Create and register custom post type "simple_contact_form"

        add_action('init', array($this, 'create_custom_post_type'));
        
        //Add assets (JS, CSS and etc)
        add_action('wp_enqueue_scripts', array($this, 'load_assets'));


    }

    public function create_custom_post_type(){
        // echo "<script>alert('Loaded!!!')</script>";
        $args = array(
            'public' => true,
            'has_archive'=> true,
            'support'=> array('title'),
            'exclude_from_search'=> true,
            'publicly_queryable'=> false,
            'capability'=> 'manage_option',
            'labels'=> array(
                'name' => 'Contact Form',
                'singular_name' => 'Contact Form Entry',
            ),
            'menu_icon' => 'dashicons-media-text',

        );

        register_post_type('simple_contact_form', $args);

    }

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
            plugin_dir_url( __FILE__ ).'js/contact-form-style.js',
            array('jquery'),
            1,
            true
        );
    }
}

new SimpleContactForm;

?>