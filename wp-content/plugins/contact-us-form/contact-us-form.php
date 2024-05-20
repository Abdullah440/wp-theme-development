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

        add_action('init', array($this, 'create_custom_post_type'));

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
}

new SimpleContactForm;

?>