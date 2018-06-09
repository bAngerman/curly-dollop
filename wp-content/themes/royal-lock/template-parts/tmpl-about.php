<?php
/**
 * Front Page about section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package royal-lock
 */

if ( get_field('about_heading') ) : ?>

<section id="about">
  <h2><?php echo the_field('about_heading'); ?></h3>
  <p><?php echo the_field('about_content'); ?></p>
</section>

<?php endif; ?>