<?php

//
//	Add Common Features
//

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

//
//	Add Dynamic Page Titles
//

add_theme_support('title-tag');


require_once get_template_directory() . '/navWalker.php';

//
//	Register Nav Menus
//

function register_menus()
{
    register_nav_menus(
        [
            'main-menu' => __(' Main Menu '),
            'mobile-menu' => __(' Mobile Menu '),
            'footer-menu' => __(' Footer Menu ')
        ]
    );
}

add_action('init', 'register_menus');

function enqueue_scripts_and_styles()
{
    wp_enqueue_style('bootstrap5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrapIcons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css');
    wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/css/reset.css');
    wp_enqueue_style('master', get_stylesheet_directory_uri() . '/css/master.css');
    wp_enqueue_style('ada', get_stylesheet_directory_uri() . '/css/ada.css');
    wp_enqueue_style('slickcss', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', '', false);
    wp_enqueue_script('slickjs', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), true);
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts_and_styles');

function get_custom_logo_url()
{
    $custom_logo_id = get_theme_mod('custom_logo');
    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
    return $image[0];
}
