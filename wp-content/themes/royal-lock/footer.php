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
		<footer class="footer" <?php if( get_field('footer_background') ) : ?> style="background-image:url('<?php $wpImg = wp_get_attachment_image_src( get_field('footer_background'), 'large'); echo $wpImg[0]; ?>');"<?php endif; ?>>
			<div class="site-info">
			<?php $logo = get_field('site_logo', 'options'); 

			if ( !empty($logo) ) : ?>
				<a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></a>
			<?php endif; ?>
			<div class="copy">
				<p>Copyright <?php echo date('Y'); ?> <b>Royal Lock &amp; Key</b></p>
			</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
	
	<script type="text/javascript">
		var lat = Number(document.getElementById('googlemap').dataset.lat),
				lng = Number(document.getElementById('googlemap').dataset.lng),
				center = {lat: lat, lng: lng};
		
		function initMap() {

			var map = new google.maps.Map(document.getElementById('googlemap'), {
				center: center,
				zoom: 14
			});

			var marker = new google.maps.Marker({position: center, map: map, title: 'Royal Lock & Key'});
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4OgQYeO-aaXoBnbYs6hcwtxhlRWc9Xto&callback=initMap" async defer></script>
	</body>
</html>
