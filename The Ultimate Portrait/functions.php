<?php

add_filter('style_loader_tag', 'codeless_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'codeless_remove_type_attr', 10, 2);
add_filter('autoptimize_html_after_minify', 'codeless_remove_type_attr', 10, 2);
function codeless_remove_type_attr($tag, $handle)
{
    return preg_replace("/type=['\"]text\/(javascript|css)['\"]/", '', $tag);
}

// add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

// function special_nav_class ($classes, $item) {
//     if (in_array('current-menu-item', $classes) ){
//         $classes[] = 'active ';
//     }
//     return $classes;
// }

function load_stylesheets(){
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');

  wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), false, 'all');
  wp_enqueue_style('flexslider');

  wp_register_style('slick', get_template_directory_uri() . '/css/slick.css', array(), false, 'all');
  wp_enqueue_style('slick');

  wp_register_style('slicktheme', get_template_directory_uri() . '/css/slick-theme.css', array(), false, 'all');
  wp_enqueue_style('slicktheme');

  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('style');



  wp_register_style('navigation_style', get_template_directory_uri() . '/navigation.css', array(), false, 'all');
  wp_enqueue_style('navigation_style');

  wp_register_style('contact_popup', get_template_directory_uri() . '/contact_popup.css', array(), false, 'all');
  wp_enqueue_style('contact_popup');

  wp_register_style('home_style', get_template_directory_uri() . '/home.css', array(), false, 'all');
  wp_enqueue_style('home_style');

  wp_register_style('navigation_style', get_template_directory_uri() . '/navigation.css', array(), false, 'all');
  wp_enqueue_style('navigation_style');

  wp_register_style('portraits_style', get_template_directory_uri() . '/portraits.css', array(), false, 'all');
  wp_enqueue_style('portraits_style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery(){
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.0.min.js', '', 1, true);
  add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');


function loadjs(){
  wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '', 1, true);
  wp_enqueue_script('customjs');

  wp_register_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', '', 1, true);
  wp_enqueue_script('flexslider');

  wp_register_script('slick', get_template_directory_uri() . '/js/slick.min.js', '', 1, true);
  wp_enqueue_script('slick');
}
add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');

add_theme_support('post-thumbnails');

register_nav_menus(
  array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
  )
);

function remove_menus() {
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', 'remove_menus' );

add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);
add_image_size('slider', 721, 828, true);

// Add Custom Template File
include_once( get_stylesheet_directory() . '/wpforms-custom-templates.php' );
