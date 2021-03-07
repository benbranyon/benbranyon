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

function landspeedr_add_google_fonts() {
	wp_enqueue_style( 'landsspeedr-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap', false );
}

add_action( 'wp_enqueue_scripts', 'landspeedr_add_google_fonts' );
