<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gutenbergtheme
 */

get_header(); ?>

	<main id="primary" class="site-main">

		<?php
			$sidebar_show = get_post_meta( $post->ID, 'page_sidebar_show', true);
			if($sidebar_show == "yes"): ?>
			<div class="page-container">
				<div class="page-row">
					<div class="page-col">
						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</div>
					<div class="sidebar-col">
						<div class="sidebar-widget-wrap">
							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-widget')) ?>
						</div>
					</div>
				</div>
			</div>
		<?php else: ?>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		<?php endif; ?>
	</main><!-- #primary -->

<?php
get_footer();
