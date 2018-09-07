<?php
/**
 * Front Page sections
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package royal-lock
 */
?>

<div class="container-outer bg-sections">
  <div class="container-inner" <?php if( get_field('sections_background') ) : ?> style="background-image:url('<?php $wpImg = wp_get_attachment_image_src( get_field('sections_background'), 'large'); echo $wpImg[0]; ?>');"<?php endif; ?>>
    <div class="container">
      <section class="info row">
      <?php if( have_rows('home_sections') ): ?>
      <?php while ( have_rows('home_sections') ) : the_row(); ?>
        <div class="info-section-outer col-12 col-md-6 col-lg-5">
          <div class="info-section">
            <h2><?php the_sub_field('section_heading'); ?></h3>
            <p><?php the_sub_field('section_description'); ?></p>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
      </section>
    </div>
  </div>
</div>

