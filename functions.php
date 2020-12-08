<?php
function portfolio_theme_support(){
    //Adds dynamic title tag support
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'portfolio_theme_support');

function portfolio_menus(){
    $locations = array(
        'primary' => "Desktop Primary Menu",
        'mobile' => "Mobile Menu",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
}

add_action('init','portfolio_menus');

function wpb_adding_scripts() {

    if( is_front_page() ) {
    wp_enqueue_script('scroll-down', get_template_directory_uri() .'/assets/js/scroll-down.js','','1.1', true);
    wp_enqueue_script('scroll-down');
 }
    wp_register_script('scroll-button', get_template_directory_uri() . '/assets/js/to-top-button.js','','1.1', true);
    wp_register_script('mobile-menu', get_template_directory_uri() . '/assets/js/slidepanel.js','','1.1', true);
    wp_enqueue_script('scroll-button');
    wp_enqueue_script('mobile-menu');
    }

    add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  

function portfolio_register_styles(){
    wp_register_style('main-style', get_template_directory_uri() . "/assets/css/style.css", array(), $version, 'all');
    wp_register_style('variables', get_template_directory_uri() . "/assets/css/variables.css", array(), $version, 'all');
    wp_register_style('front-page', get_template_directory_uri() . "/assets/css/front-page.css", array(), $version, 'all');
    wp_register_style('posts', get_template_directory_uri() . "/assets/css/posts.css", array(), $version, 'all');

    wp_enqueue_style('variables');
    wp_enqueue_style('main-style');

    if ( is_front_page() ) {
        wp_enqueue_style('front-page');
    }
    wp_enqueue_style('posts');
}

add_action( 'wp_enqueue_scripts', 'portfolio_register_styles');

add_filter( 'big_image_size_threshold', '__return_false' ); 


/*
function google_jquery() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.10.2');
        wp_enqueue_script('jquery');
    }
}
    add_action('init', 'google_jquery');*/
?>