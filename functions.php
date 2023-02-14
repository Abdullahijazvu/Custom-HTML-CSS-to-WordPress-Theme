<?php
/*
Functions file
*/

function blog_theme_setup(){

  add_theme_support('custom-logo');

  add_theme_support('title-tag');

  add_theme_support('post-thumbnails');

  add_image_size('home-featured', 640, 300, array('center','center'));
  add_image_size('post-img', 740, 400, array('center','center'));

  add_theme_support('automatic-feed-links');

  add_theme_support('html5', array(
    'comment-list','comment-form','serach-form','gallery','caption'
  ));

  register_nav_menus(
    array(
      'primary' => __( 'Primary Menu', 'blog')
     )
   );

}

add_action('after_setup_theme', 'blog_theme_setup');

function blog_theme_scripts(){
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('bootstrap-css', get_template_directory_uri(). '/assets/bootstrap/css/bootstrap.min.css');
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js');
}
add_action('wp_enqueue_scripts', 'blog_theme_scripts');

function blog_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Primary Sidebar', 'blog' ),
    'id'            => 'main-sidebar',
    'description'   => 'Main Sidebar on Right side',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Footer Widget Bottom', 'blog' ),
    'id'            => 'footer-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
}
add_action('widgets_init', 'blog_widgets_init');

function wpdocs_custom_excerpt_length( $length ) {
	return 60;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//Include Customizer
//require get_template_directory() .'/customizer.php';

