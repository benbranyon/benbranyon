<?php 
/*
Template Name: Architecture of Surveillance Landing
Template Post Type: page
*/

get_header();?>

	<main id="primary" class="site-main">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'architecture-of-survelliance' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
	</main><!-- #primary -->

<?php get_footer(); ?>