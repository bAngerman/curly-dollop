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
<?php while ( have_rows('home_sections') ) : the_row(); ?>
<div class="container-outer bg-sections">
  <div class="container-inner">
    <div class="container">
      <section class="info row justify-content-center">
        <div class="info-section-outer col-12 col-md-9 col-lg-7" <?php if( get_sub_field('background') ) : ?> style="background-image:url('<?php $wpImg = wp_get_attachment_image_src( get_sub_field('background'), 'large'); echo $wpImg[0]; ?>');"<?php endif; ?>>
          <div class="info-section">
            <h2><?php the_sub_field('section_heading'); ?></h3>
            <p><?php the_sub_field('section_description'); ?></p>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
