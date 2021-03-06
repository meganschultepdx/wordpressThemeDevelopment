<?php

// Load Stylesheets
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

//Load JavaScript
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');

//Theme Options

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//Menus

register_nav_menus(
    array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location',
  )
);


// Custom Image Sizes

add_image_size('blog-large', 900, 400, true);
add_image_size('blog-small', 300, 200, true);


// Register Sidebars

function my_sidebars()
{
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}
// hook that runs when WP loads and checks which widgets and sidebars are available
add_action('widgets_init', 'my_sidebars');

function my_first_post_type()
{
    $args = array(
        'labels' => array(
            'name' => 'Plants',
            'singular_name' => 'Plant'
        ),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-image',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        // 'rewrite' => array('slug' => 'my-plants'),
    );
    register_post_type('plants', $args);
}
add_action('init', 'my_first_post_type');

function my_first_taxonomy()
{
    $args = array(
        'labels' => array(
            'name' => 'Plants in My Yard',
            'singular_name' => 'Plant in My Yard'
        ),
        'public' => true,
        'hierarchical' => false,
    );

    register_taxonomy('Plants in My Yard', array('plants'), $args);
}
add_action('init', 'my_first_taxonomy');

function my_second_taxonomy()
{
    $args = array(
        'labels' => array(
            'name' => 'Plants I Want',
            'singular_name' => 'Plant I Want'
        ),
        'public' => true,
        'hierarchical' => false,
    );

    register_taxonomy('Plants I Want', array('plants'), $args);
}
add_action('init', 'my_second_taxonomy');
