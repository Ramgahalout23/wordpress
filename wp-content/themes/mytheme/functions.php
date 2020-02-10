<?php
function html2wp_theme_setup(){

    add_theme_support('custom-logo');


    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_image_size('home-featured',680,400,array('center','center'));
    add_image_size('single-post',580,272,array('center','center'));

    add_theme_support('automatic-feed-links');

    register_nav_menus(array(
        'primary'    =>  __('primary Menu','html2wp')
    ));

    }
add_action('after_setup_theme','html2wp_theme_setup');




function html2wp_scripts(){

wp_enqueue_style('style', get_stylesheet_uri( ));

wp_enqueue_script('jquery');

wp_enqueue_script('html2wp-browser',get_template_directory_uri().'/assets/js/browser.min.js');

wp_enqueue_script('html2wp-browser',get_template_directory_uri().'/assets/js/breakpoints.min.js');

wp_enqueue_script('html2wp-browser',get_template_directory_uri().'/assets/js/util.js');

wp_enqueue_script('html2wp-browser',get_template_directory_uri().'/assets/js/main.js');


}
add_action('wp_enqueue_scripts','html2wp_scripts');

function html2wp_widgets_init()
{

register_sidebar(array(
    'name' => __('Primary Sidebar', 'html2wp'),
    'id' => 'main-sidebar', // unique-sidebar-id
    'description' => 'Main sidebar on Right side',
    'class' => '',
    'before_widget' => '<section id="%1$s" class="box %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<header> <h3 class="widgettitle">',
    'after_title' => '</h3></header>',
));

register_sidebar(array(
    'name' => __('Footer Widget 1', 'html2wp'),
    'id' => 'footer-1', // unique-sidebar-id
    'description' => '',
    'class' => '',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<header><h2 class="widgettitle">',
    'after_title' => '</h2></header>',
));

register_sidebar(array(
    'name' => __('Footer Widget 2', 'html2wp'),
    'id' => 'footer-2', // unique-sidebar-id
    'description' => '',
    'class' => '',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<header><h2 class="widgettitle">',
    'after_title' => '</h2></header>',
));


    register_sidebar(array(
        'name' => __('Footer Widget 3', 'html2wp'),
        'id' => 'footer-3', // unique-sidebar-id
        'description' => '',
        'class' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h2 class="widgettitle">',
        'after_title' => '</h2></header>',
    ));

}

add_action('widgets_init', 'html2wp_widgets_init');

//cutom post type
require get_template_directory().'/inc/portfolio.php';
