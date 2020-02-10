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

function add_theme_scripts() {
    
    
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/plugin.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script('html2wp-browser',get_template_directory_uri().'/assets/js/main.js');
}
//remove_action('wp_head', 'add_theme_scripts');
add_action('wp_footer', 'add_theme_scripts', 5);


function header_part($wp_customize){
   $wp_customize->add_section('header_part-section',array(
         'title' =>'Header area'

   )); 

   $wp_customize->add_setting('header_part-headline',array(
    'default' => 'Enter your heading !'
   ));

  
   $wp_customize->add_control(new WP_Customize_Control($wp_customize,'header_part-control'

   ,array(

            'label'      => __( 'Headline', 'mytheme' ),
            'section' =>'header_part-section',
            'settings'=>'header_part-headline',
            'type' => 'textarea'
   )));
   
   $wp_customize->add_setting('header_part-headline1',array(
    'default' => 'Enter your heading1 !'
   ));

  
   $wp_customize->add_control(new WP_Customize_Control($wp_customize,'header_part-control1'

   ,array(

            'label'      => __( 'Headline1', 'mytheme1' ),
            'section' =>'header_part-section',
            'settings'=>'header_part-headline1'
   )));

  


}
add_action( 'customize_register', 'header_part' );




