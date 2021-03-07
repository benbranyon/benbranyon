<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

							get_template_part( 'template-parts/content', get_post_type() );

							

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

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation( array(
						'prev_text' => '← %title',
						'next_text' => '%title →',
					) );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

		<?php endif; ?>
	</main><!-- #primary -->








	<main id="primary" class="site-main">


	</main><!-- #primary -->

<?php
get_footer();
