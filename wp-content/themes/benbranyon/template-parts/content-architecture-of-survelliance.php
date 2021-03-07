<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gutenbergtheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="aos-landing">
		<h1 class="aos-landing-title"><img src="/wp-content/themes/GutenbergStarterChild/assets/images/AoS_Title_BioBlue.png" alt="Architecture of Surveillance"/></h1>
		<div class="aos-landing-subtitle">The information gathering environment</div>
		<div class="aos-landing__description">
			<p>
				Large amounts of information gathering by police departments is done through electronic surveillance equipment. This includes facial recognition, Stingrays, automatic license plate readers (ALPR), TrapWire, high definition cameras, body cameras, drones, CCTV, social media surveillance, and much more. Information collected by these surveillance tools criminalize a person’s daily lived experience. These programs inflict grave harm to communities. Please explore to learn more.
			</p>
		</div>
		<div class="aos-landing__nav">
			<a href="#" class="button">Infographic</a>
			<a href="/architecture-of-surveillance/" class="button">Immersive</a>
		</div>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'gutenbergtheme' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
