<?php
/**
 * gutenbergtheme Theme Customizer
 *
 * @package Gutenbergtheme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gutenbergtheme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'gutenbergtheme_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'gutenbergtheme_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'gutenbergtheme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function gutenbergtheme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function gutenbergtheme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gutenbergtheme_customize_preview_js() {
	wp_enqueue_script( 'gutenbergtheme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'gutenbergtheme_customize_preview_js' );

function options_customize_register( $wp_customize ) {

	

	$wp_customize->add_section( 'footer_section' , array(
		'title'      => 'Footer',
		'priority'   => 135,
	));

		$wp_customize->add_setting( 'footer_background', array(
			'default'     => '#000000',
			'sanitize_callback'	=> 'esc_attr',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background', array(
			'label'   => 'Footer Background',
			'section' => 'footer_section',
			'settings'   => 'footer_background',
		)));

		$wp_customize->add_setting( 'footer_text_color', array(
			'default'        => '#FFFFFF',
			'sanitize_callback'	=> 'esc_attr',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_color', array(
			'label'   => 'Footer Text Color',
			'section' => 'footer_section',
			'settings'   => 'footer_text_color',
		)));

		$wp_customize->add_setting( 'footer_copyright', array(
			'default'        => '',
			'sanitize_callback'	=> 'esc_attr',
		));

		$wp_customize->add_control( 'footer_copyright', array(
			'label'   => 'Footer Copyright',
			'section' => 'footer_section',
			'settings'   => 'footer_copyright',
			'type'    => 'text',
			'priority' => 3
		));

		
	$wp_customize->add_section( 'social_section' , array(
		'title'      => 'Social',
		'priority'   => 135,
	));

		$wp_customize->add_setting( 'social_twitter', array(
			'default'        => '',
			'sanitize_callback'	=> 'esc_attr',
		));

		$wp_customize->add_control( 'social_twitter', array(
			'label'   => 'Twitter',
			'section' => 'social_section',
			'settings'   => 'social_twitter',
			'type'    => 'text',
			'priority' => 3
		));

		$wp_customize->add_setting( 'social_facebook', array(
			'default'        => '',
			'sanitize_callback'	=> 'esc_attr',
		));

		$wp_customize->add_control( 'social_facebook', array(
			'label'   => 'Facebook',
			'section' => 'social_section',
			'settings'   => 'social_facebook',
			'type'    => 'text',
			'priority' => 3
		));

		$wp_customize->add_setting( 'social_google', array(
			'default'        => '',
			'sanitize_callback'	=> 'esc_attr',
		));

		$wp_customize->add_control( 'social_google', array(
			'label'   => 'Google +',
			'section' => 'social_section',
			'settings'   => 'social_google',
			'type'    => 'text',
			'priority' => 3
		));

		$wp_customize->add_setting( 'social_instagram', array(
			'default'        => '',
			'sanitize_callback'	=> 'esc_attr',
		));

		$wp_customize->add_control( 'social_instagram', array(
			'label'   => 'Instagram',
			'section' => 'social_section',
			'settings'   => 'social_instagram',
			'type'    => 'text',
			'priority' => 3
		));

		$wp_customize->add_setting( 'social_pinterest', array(
			'default'        => '',
			'sanitize_callback'	=> 'esc_attr',
		));

		$wp_customize->add_control( 'social_pinterest', array(
			'label'   => 'Pinterest',
			'section' => 'social_section',
			'settings'   => 'social_pinterest',
			'type'    => 'text',
			'priority' => 3
		));

		$wp_customize->add_setting( 'social_vimeo', array(
			'default'        => '',
			'sanitize_callback'	=> 'esc_attr',
		));

		$wp_customize->add_control( 'social_vimeo', array(
			'label'   => 'Vimeo',
			'section' => 'social_section',
			'settings'   => 'social_vimeo',
			'type'    => 'text',
			'priority' => 3
		));	

		$wp_customize->add_setting( 'social_youtube', array(
			'default'        => '',
			'sanitize_callback'	=> 'esc_attr',
		));

		$wp_customize->add_control( 'social_youtube', array(
			'label'   => 'Youtube',
			'section' => 'social_section',
			'settings'   => 'social_youtube',
			'type'    => 'text',
			'priority' => 3
		));	

		$wp_customize->add_setting( 'social_linkedin', array(
			'default'        => '',
			'sanitize_callback'	=> 'esc_attr',
		));

		$wp_customize->add_control( 'social_linkedin', array(
			'label'   => 'LinkedIn',
			'section' => 'social_section',
			'settings'   => 'social_linkedin',
			'type'    => 'text',
			'priority' => 3
		));	

}

add_action( 'customize_register', 'options_customize_register' );



function gutenbergtheme_elements_style() { ?>
<style>
	<?php $header_background = get_theme_mod('header_background');
	if (!empty($header_background)): ?>
		.header-bg{background: <?php echo $header_background; ?>;}
	<?php endif; ?>
	<?php $header_background_opacity = get_theme_mod('header_background_opacity');
	if (!empty($header_background_opacity)): ?>
		.header-bg{opacity: <?php echo $header_background_opacity; ?>;}
	<?php endif; ?>
	<?php $header_text_color = get_theme_mod('header_text_color');
	if (!empty($header_text_color)): ?>
		.site-header{color: <?php echo $header_text_color; ?>;}
		.toggle-menu span,.toggle-menu span:after,.toggle-menu span:before{background: <?php echo $header_text_color; ?>;}
	<?php endif; ?>
	<?php $header_dropdown_background = get_theme_mod('header_dropdown_background');
	if (!empty($header_dropdown_background)): ?>
		.main-navigation ul ul{background: <?php echo $header_dropdown_background; ?>;}
	<?php endif; ?>
	<?php $footer_background = get_theme_mod('footer_background');
	if (!empty($footer_background)): ?>
		.site-footer{background: <?php echo $footer_background; ?>;}
	<?php endif; ?>
	<?php $footer_text_color = get_theme_mod('footer_text_color');
	if (!empty($footer_text_color)): ?>
		.site-footer{color: <?php echo $footer_text_color; ?>;}
	<?php endif; ?>
</style>

<?php }

add_action( 'wp_head', 'gutenbergtheme_elements_style' );

function gutenbergtheme_header_classes( $classes ) {
    global $post;
 		$header_fixed = get_theme_mod('header_fixed');
 		$absolute_header = get_post_meta( $post->ID, 'page_absolute_header', true);
    if($header_fixed == "yes") {
        $classes[] = 'fixed-header';
    }
    if($absolute_header == "yes") {
        $classes[] = 'absolute-header';
    }     
    return $classes;
     
}

add_filter( 'body_class','gutenbergtheme_header_classes' );