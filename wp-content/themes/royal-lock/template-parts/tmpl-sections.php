<?php
/**
 * Front Page sections
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package royal-lock
 */
?>


<?php if( have_rows('home_sections') ): ?>

<div class="container-outer">
  <div class="container">
    <section class="info row">
    <?php while ( have_rows('home_sections') ) : the_row(); ?>
      <div class="info-section-outer col-12" <?php if( get_sub_field('background') ) : ?> style="background-image:url('<?php the_sub_field('background'); ?>');"<?php endif; ?>>
        <div class="info-section">
          <h2><?php the_sub_field('section_heading'); ?></h3>
          <p><?php the_sub_field('section_description'); ?></p>
          <a href="<?php the_sub_field('location'); ?>"><?php the_sub_field('link_text'); ?></a>
        </div>
      </div>
    <?php endwhile; ?>
    </section>
  <?php endif; ?>
  </div>
</div>