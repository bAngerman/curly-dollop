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

		<div id="top" class="banner" <?php if( get_field('header_background') ) : ?> style="background-image:url('<?php the_field('header_background'); ?>');"<?php endif; ?>>
			<?php 
			
			$logo = get_field('site_logo', 'options'); 

			if ( !empty($logo) ) : ?>
				<img class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
			<?php endif; ?>
			<h1><?php the_field('site_name', 'options'); ?></h1>
			<?php 
			$btn1 = get_field('header_button_1');
			$btn2 = get_field('header_button_2');
			if( $btn1 ) : ?>
				<a href="<?php echo $btn1['link_location']; ?>"><?php echo $btn1['link_text']; ?></a>
			<?php endif; ?>
			<?php if ( $btn2 ) : ?>
				<a href="<?php echo $btn2['link_location']; ?>"><?php echo $btn2['link_text']; ?></a>
			<?php endif; ?>
		</div>
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="main-menu" aria-expanded="false"><?php esc_html_e( 'Main Menu', 'royal-lock' ); ?></button>
			<?php
			wp_nav_menu( array(
				'main-menu' => 'main-navigation',
			) );
			?>
		</nav><!-- #site-navigation -->
		<div id="content" class="site-content">
