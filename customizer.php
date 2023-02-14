<?php
/**
 * Blog Customizer.
 */
function blog_customize_register( $wp_customize ) {
	$wp_customize->add_panel('blog_settings', array(
		'title'=>__('Blog Settings'),
		'description'=>'',
		'priority'=>10,
	));
	
  $wp_customize->add_section('blog_colors', array(
	'title'=> 'color',
	'panel'=>'blog_settings',
  ));

  $wp_customize->add_setting('blog_body_bg_color', array(
	'type' => 'theme_mod', // or 'option'
	'capability' => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
	'default' => '#2ca358',
	'transport' => 'refresh', // or postMessage
	'sanitize_callback' => 'sanitize_hex_color',
  ));
  
  $wp_customize->add_control('blog_body_bg_color', array(
	'label'=>__('Menu Background'),
	'type'=>'color',
	'section'=>'blog_colors'
  ));
}
add_action('customize_register','blog_customize_register');