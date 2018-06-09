<?php
/**
 * Front Page services summary section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package royal-lock
 */

if( have_rows('services_list') ): ?>
  <section id="services">
    <h2><?php echo the_field('services_heading') ?></h3>
    <ul>

    <?php while ( have_rows('services_list') ) : the_row(); ?>
      <li><?php the_sub_field('service') ?></li>
    <?php endwhile; ?>

    </ul>
  </section>
<?php endif; ?>