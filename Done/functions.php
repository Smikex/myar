<?php
function ficus_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_register_script('min', get_template_directory_uri() . '/js/scripts.min.js');
    wp_enqueue_script('min');

    wp_register_script('base', get_template_directory_uri() . '/js/common.js');
    wp_enqueue_script('base');
}
add_action('wp_enqueue_scripts', 'ficus_scripts');

add_theme_support('menus');

function ea_acf_options_page()
{
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'title' => 'Site Options',
            'capability' => 'manage_options',
        ));
    }
}
add_action('init', 'ea_acf_options_page');

// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
// 		Custom Menus
// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

add_theme_support( 'menus' );

//
// New Post Type
//


add_action('init', 'services_register');  

function services_register() {
    $args = array(
        'label' => 'Services',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'rewrite' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
        'taxonomies'  => array( 'category', 'post_tag' )
    );

    register_post_type( 'services' , $args );
}

add_action('init', 'portfolio_register');  

function portfolio_register() {
    $args = array(
        'label' => 'Portfolio',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'rewrite' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
  
    );

    register_post_type( 'portfolio' , $args );
}

add_theme_support('post-thumbnails');



// add_action( 'init', 'create_taxonomies' );



// function create_taxonomies(){
//     $labels = array(
// 		'name' => _x( 'Clents', 'taxonomy general name' ),
// 		'singular_name' => _x( 'Clent', 'taxonomy singular name' ),
// 		'menu_name' => __( 'Clent' ),
// 	);
// register_taxonomy('client', 'portfolio',array(
//     'hierarchical' => false,
//     'labels' => $labels,
//     'show_ui' => true,
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'client' ),
// ));
// $labels1 = array(
//     'name' => _x( 'Skills', 'taxonomy general name' ),
//     'singular_name' => _x( 'Skill', 'taxonomy singular name' ),
//     'menu_name' => __( 'Skill' ),
// );
// register_taxonomy('skills', 'portfolio',array(
// 'hierarchical' => false,
// 'labels' => $labels1,
// 'show_ui' => true,
// 'query_var' => true,
// 'rewrite' => array( 'slug' => 'skills' ),
// ));





// }