<?php

function enqueue_load_fa() {
  wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa');  
  

/* load css */
function load_stylesheets()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');
  
  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('style');
  
  
  wp_register_style('style-media-queries', get_template_directory_uri() . '/css/media-queries.css', array(), false, 'all');
  wp_enqueue_style('style-media-queries');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

/* load js */
function load_js()
{
  wp_register_script('jqueryjs', get_template_directory_uri() . '/js/jquery-3.6.0.js', '', 1, true);
  wp_enqueue_script('jqueryjs'); 
  
  wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', '', 1, true);
  wp_enqueue_script('bootstrapjs');
  
  wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
  wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'load_js');

/* adding nav */
add_theme_support('menus');

//register_nav_menus(
//  
//  array (
//    'top-menu' => __('Top Menu', 'theme'),
//    'footer-menu' => __('Footer Menu', 'theme'),
//    
//  )
//  
//)
//  
  
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  




?>
