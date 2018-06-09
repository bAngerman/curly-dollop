<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package royal-lock
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<script>document.body.style.opacity="0";</script>
	<div id="page" class="site">

		<div id="top" class="banner"  <?php if( get_field('header_background') ) : ?> style="background-image:url('<?php the_field('header_background'); ?>');"<?php endif; ?>>
			<?php the_field('logo', 'options'); ?>
		</div>
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'royal-lock' ); ?></button>
			<?php
			wp_nav_menu( array(
				'main-menu' => 'main-navigation',
			) );
			?>
		</nav><!-- #site-navigation -->
		<div id="content" class="site-content">
