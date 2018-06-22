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
		<footer class="footer" <?php if( get_field('footer_background') ) : ?> style="background-image:url('<?php the_field('footer_background'); ?>');"<?php endif; ?>>
			<div class="site-info">
			<?php $logo = get_field('site_logo', 'options'); 

			if ( !empty($logo) ) : ?>
				<a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></a>
			<?php endif; ?>
			<div class="copy">
				<p>Copright <?php echo date('Y'); ?> <b>Royal Lock &amp; Key<b></p>
			</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

	</body>
</html>
