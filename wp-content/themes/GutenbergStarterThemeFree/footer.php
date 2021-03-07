<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutenbergtheme
 */

?>

<footer class="site-footer">
	<div class="footer-inner">
		<?php if(is_active_sidebar('footer-widget')): ?>
			<div class="footer-top">
				<div class="footer-row">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget')) ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="footer-bot">
			<div class="footer-row">
				<div class="footer-social">
					<?php $social_twitter = get_theme_mod('social_twitter');
						if (!empty($social_twitter)) { ?>
							<a href="<?php echo $social_twitter; ?>" target="_blank">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
					<?php } ?>
					<?php $social_facebook = get_theme_mod('social_facebook');
						if (!empty($social_facebook)) { ?>
							<a href="<?php echo $social_facebook; ?>" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
					<?php } ?>
					<?php $social_google = get_theme_mod('social_google');
						if (!empty($social_google)) { ?>
							<a href="<?php echo $value1; ?>" target="_blank">
								<i class="fa fa-google-plus" aria-hidden="true"></i>
							</a>
					<?php } ?>
					<?php $social_instagram = get_theme_mod('social_instagram');
						if (!empty($social_instagram)) { ?>
							<a href="<?php echo $social_instagram; ?>" target="_blank">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
					<?php } ?>
					<?php $social_pinterest = get_theme_mod('social_pinterest');
						if (!empty($social_pinterest)) { ?>
							<a href="<?php echo $social_pinterest; ?>" target="_blank">
								<i class="fa fa-pinterest" aria-hidden="true"></i>
							</a>
					<?php } ?>
					<?php $social_vimeo = get_theme_mod('social_vimeo');
						if (!empty($social_vimeo)) { ?>
							<a href="<?php echo $social_vimeo; ?>" target="_blank">
								<i class="fa fa-vimeo" aria-hidden="true"></i>
							</a>
					<?php } ?>
					<?php $social_youtube = get_theme_mod('social_youtube');
						if (!empty($social_youtube)) { ?>
							<a href="<?php echo $social_youtube; ?>" target="_blank">
								<i class="fa fa-youtube" aria-hidden="true"></i>
							</a>
					<?php } ?>
					<?php $social_linkedin = get_theme_mod('social_linkedin');
						if (!empty($social_linkedin)) { ?>
							<a href="<?php echo $social_linkedin; ?>" target="_blank">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</a>
					<?php } ?>
				</div>
				<div class="footer-copyright"><?php echo get_theme_mod('footer_copyright'); ?></div><div>
				<div class="author-credits">
								 <a href="<?php echo esc_url('https://dessign.net/'); ?>"><?php esc_html_e('WordPress Gutenberg'); ?></a>
							</div>
							
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
