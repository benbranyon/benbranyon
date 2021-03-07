<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Gutenbergtheme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function gutenbergtheme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'gutenbergtheme_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function gutenbergtheme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'gutenbergtheme_pingback_header' );


function sidebar_show_box() {
    add_meta_box( 
        'sidebar-show',
        'Show Sidebar',
        'sidebar_show_callback',
        array('post', 'page'),
        'side',
        'default'
    );
}

add_action( 'add_meta_boxes', 'sidebar_show_box' );

function sidebar_show_callback($post)
{
    wp_nonce_field( 'sidebar_show_field_nonce', 'sidebar_show_noncename' );
    $saved = get_post_meta( $post->ID, 'page_sidebar_show', true);
    if( !$saved )
        $saved = 'default';

    $fields = array(
        'yes'       => __('Yes', 'gutenbergtheme'),
        'default'   => __('No', 'gutenbergtheme'),
    );

    foreach($fields as $key => $label)
    {
        printf(
            '<input type="radio" name="page_sidebar_show" value="%1$s" id="page_sidebar_show[%1$s]" %3$s />'.
            '<label for="page_sidebar_show[%1$s]"> %2$s ' .
            '</label><br>',
            esc_attr($key),
            esc_html($label),
            checked($saved, $key, false)
        );
    }
}

function sidebar_show_save_postdata( $post_id ) 
{
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        return;

    if ( isset($_POST['sidebar_show_noncename']) && !wp_verify_nonce( $_POST['sidebar_show_noncename'], 'sidebar_show_field_nonce' ) )
        return;

    if ( isset($_POST['page_sidebar_show']) && $_POST['page_sidebar_show'] != "" ){
          update_post_meta( $post_id, 'page_sidebar_show', $_POST['page_sidebar_show'] );
    } 
}

add_action( 'save_post', 'sidebar_show_save_postdata' );

function absolute_header_box() {
    add_meta_box( 
        'absolute-header',
        'Absolute Header',
        'absolute_header_callback',
        array('post', 'page'),
        'side',
        'default'
    );
}

add_action( 'add_meta_boxes', 'absolute_header_box' );

function absolute_header_callback($post)
{
    wp_nonce_field( 'absolute_header_field_nonce', 'absolute_header_noncename' );
    $saved = get_post_meta( $post->ID, 'page_absolute_header', true);
    if( !$saved )
        $saved = 'default';

    $fields = array(
        'yes'       => __('Yes', 'gutenbergtheme'),
        'default'   => __('No', 'gutenbergtheme'),
    );

    foreach($fields as $key => $label)
    {
        printf(
            '<input type="radio" name="page_absolute_header" value="%1$s" id="page_absolute_header[%1$s]" %3$s />'.
            '<label for="page_absolute_header[%1$s]"> %2$s ' .
            '</label><br>',
            esc_attr($key),
            esc_html($label),
            checked($saved, $key, false)
        );
    }
}

function absolute_header_save_postdata( $post_id ) 
{
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        return;

    if ( isset($_POST['absolute_header_noncename']) && !wp_verify_nonce( $_POST['absolute_header_noncename'], 'absolute_header_field_nonce' ) )
        return;

    if ( isset($_POST['page_absolute_header']) && $_POST['page_absolute_header'] != "" ){
          update_post_meta( $post_id, 'page_absolute_header', $_POST['page_absolute_header'] );
    } 
}

add_action( 'save_post', 'absolute_header_save_postdata' );