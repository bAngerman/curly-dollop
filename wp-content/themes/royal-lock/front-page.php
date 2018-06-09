<?php
/**
 * The Front Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package royal-lock
 */

get_header();

/**
 * About Section
 */
get_template_part( 'template-parts/tmpl', 'about' );

/**
 * Services Summary Section
 */
get_template_part( 'template-parts/tmpl', 'services' );

/**
 * Services Tabs Section
 */
get_template_part( 'template-parts/tmpl', 'sections' );

/**
 * Contact Section
 */
get_template_part( 'template-parts/tmpl', 'contact' );


get_footer();