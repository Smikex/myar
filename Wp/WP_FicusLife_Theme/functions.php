<?php
function ficus_scripts() {
wp_enqueue_style( 'style', get_stylesheet_uri() );

// wp_register_script( 'jq', get_template_directory_uri() . '/js/jquery-3.3.1.js' );
// wp_enqueue_script( 'jq' );

wp_register_script( 'min', get_template_directory_uri() . '/js/scripts.min.js' );
wp_enqueue_script( 'min' );

wp_register_script( 'base', get_template_directory_uri() . '/js/common.js' );
wp_enqueue_script( 'base' );
}
add_action('wp_enqueue_scripts','ficus_scripts');

add_theme_support( 'menus' );


function ea_acf_options_page() {
	if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( array(
	'title'      => 'Site Options',
	'capability' => 'manage_options',
	) );
	}
	}
	add_action( 'init', 'ea_acf_options_page' );