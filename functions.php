<?php


function portfolio_theme_support(){
    //Adds dynamic title tag support
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'portfolio_theme_support');

function portfolio_menus(){

    $locations = array(
        'primary' => "Desktop Primary Menu",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init','portfolio_menus');

function portfolio_register_styles(){

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('portfolio-theme', get_template_directory_uri() . "/style.css", array(), $version, 'all');

}

add_action( 'wp_enqueue_scripts', 'portfolio_register_styles');

?>
