<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutenbergtheme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gutenbergtheme' ); ?></a>
		<header id="masthead" class="site-header">
			<div class="header-inner">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					endif;  ?>
					<div id="primary-menu-triger" class="toggle-menu">
						<span></span>
					</div>
				</div><!-- .site-branding -->
				<?php
					if ( has_nav_menu('menu-2')): ?>
					<div id="secondary-menu-triger" class="toggle-menu toggle-secondary-menu">
						<span></span>
					</div>
					<nav id="site-navigation" class="main-navigation main-navigation-w-secondary">
				<?php else: ?> 
					<nav id="site-navigation" class="main-navigation">
				<?php endif; ?>
					<?php
						if ( has_nav_menu( 'menu-1' ) ) {
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
					} ?> 
					<?php
						if ( has_nav_menu( 'menu-2' ) ): ?>
							<div class="mobile-secondary-nav">
								<?php wp_nav_menu( array(
									'theme_location' => 'menu-2',
									'menu_id'        => 'secondary-menu',
								) ); ?> 
							</div>
					<?php endif; ?>
				</nav><!-- #site-navigation -->

			</div>
			<div class="header-bg"></div>
		</header><!-- #masthead -->
		<?php
			if ( has_nav_menu('menu-2')): ?>
				<div class="secondary-menu-block">
					<div class="close-menu toggle-secondary-menu">X</div>
					<div class="secondary-menu-inner">
						<div class="secondary-menu-content">
							<?php 
								wp_nav_menu( array(
										'theme_location' => 'menu-2',
										'menu_id'        => 'secondary-menu',
									) );
							?>
						</div>
					</div>
				</div>
		<?php endif; ?> 