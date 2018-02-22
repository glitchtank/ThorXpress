<?php
function landingpagebuilder_enqueue_styles() {
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'landingpagebuilder-child-style',
      get_stylesheet_directory_uri() . '/style.css',
      array( $parent_style ),
      wp_get_theme()->get('Version')
      );
  }
  add_action( 'wp_enqueue_scripts', 'landingpagebuilder_enqueue_styles' );

  require_once( get_stylesheet_directory() . '/inc/custom-header.php' );

/*******************************
New 
 *******************************/
function landingpagebuilder_custom_logo_setup() {
  $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
  add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'landingpagebuilder_custom_logo_setup' );

add_theme_support( 'custom-logo' );


/*******************************
 Remove what we don't use anymore 
 *******************************/
 function landingpagebuilder_general_hideaway() {
  unregister_sidebar( 'header_widget_right' );
  remove_action('admin_menu', 'apppage_register_backend');
}
add_action('wp_loaded', 'landingpagebuilder_general_hideaway', 9);


function landingpagebuilder_customizer_hideaway($wp_customize) {
  $wp_customize->remove_control('header_widget_titles');
  $wp_customize->remove_control('header_widget_text');
  $wp_customize->remove_section('apppage_button');
  $wp_customize->remove_control('header_widget_link');
}
add_action( 'customize_register', 'landingpagebuilder_customizer_hideaway', 9999 );

