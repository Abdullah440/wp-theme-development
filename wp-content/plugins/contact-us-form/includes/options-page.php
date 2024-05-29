<?php
// Security Layer
if(!defined('ABSPATH')){
    echo "you cannot be here!";
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('after_setup_theme', 'load_carbon_fields');
add_action('carbon_fields_register_fields', 'create_option_page');


function load_carbon_fields(){

    \Carbon_Fields\Carbon_Fields::boot();

}

function create_option_page(){
    Container::make( 'theme_options', __('Contact Form') )
    ->set_icon('dashicons-phone')
    ->add_fields( array(
        Field::make( 'checkbox', 'contact_form_active', 'Active' ),
        Field::make( 'text', 'contact_form_recipients', __('Recepients Email'))->set_attribute( 'placeholder', 'Enter email, you will receive emails' ),
        Field::make( 'text', 'contact_form_confirmation_message', __('Confirmation Message'))->set_attribute( 'placeholder', 'After submit message to your clients' ),
    ) );
}