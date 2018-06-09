<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package royal-lock
 */

?>

		</div><!-- #content -->
		<footer id="bottom" class="footer" <?php if( get_field('footer_background') ) : ?> style="background-image:url('<?php the_field('footer_background'); ?>');"<?php endif; ?>>
			<div class="site-info">
				<p>test</p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

	</body>
</html>
