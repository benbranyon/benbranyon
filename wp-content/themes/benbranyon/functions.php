<?php
/*This file is part of GutenbergStarterChild, GutenbergStarterThemeFree child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function GutenbergStarterChild_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parente2-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parente2-style' );
	    // loading child style
	    wp_register_style(
	      'childe2-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'childe2-style');
	    wp_enqueue_script( 'three', get_stylesheet_directory_uri() . '/js/libraries/three.min.js', array('jquery'), '20151215', true );
	    wp_enqueue_script( 'main', get_stylesheet_directory_uri() .'/js/main.js', array('three'));
	 }
}
add_action( 'wp_enqueue_scripts', 'GutenbergStarterChild_enqueue_child_styles' );

add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);

function add_type_attribute($tag, $handle, $src) {
    // if not your script, do nothing and return original $tag
    if ( 'main' !== $handle ) {
        return $tag;
    }
    // change the script tag by adding type="module" and return it.
    $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
    return $tag;
}

function benbranyon_add_google_fonts() {
	wp_enqueue_style( 'benbranyon-google-fonts', 'https://fonts.googleapis.com/css2?family=Russo+One&display=swap', false );
}

add_action( 'wp_enqueue_scripts', 'benbranyon_add_google_fonts' );
