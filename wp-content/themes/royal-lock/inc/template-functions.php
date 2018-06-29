<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package royal-lock
 */

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function royal_lock_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'royal_lock_pingback_header' );


show_admin_bar( false );

function rlog( $var ) {
	error_log( print_r( $var, TRUE) );
	return;
}

