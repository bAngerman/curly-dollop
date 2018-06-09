<?php
/**
 * Front Page sections
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package royal-lock
 */

if( have_rows('home_sections') ): ?>
  <section class="info">
  <?php while ( have_rows('home_sections') ) : the_row(); ?>
    <div class="info-section">  
      <h2><?php the_sub_field('section_heading'); ?></h3>
      <p><?php the_sub_field('section_description'); ?></p>
      <a href="<?php the_sub_field('location'); ?>"><?php the_sub_field('link_text'); ?></a>
    </div>
  <?php endwhile; ?>
  </section>
<?php endif; ?>