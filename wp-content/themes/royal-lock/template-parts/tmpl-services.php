<?php
/**
 * Front Page services summary section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package royal-lock
 */
 ?>
<div class="container-outer">
  <div class="container-inner bg-l-gray">
    <div class="container">

      <?php if( have_rows('services_list') ): ?>
        <section id="services">
          <h2><?php echo the_field('services_heading') ?></h3>
          <?php $total_rows = count( get_field('services_list') ); ?>
          <div class="row justify-content-center">
            <?php while ( have_rows('services_list') ) : the_row(); ?>
              <?php if ( $total_rows+1 != get_row_index() && get_row_index() != 1 ) : ?>
                  <div class="sep"></div>
              <?php endif; ?>
              <div class="service-item col-12 col-md-6 col-lg-4">
                <div class="image-box">
                <?php
                $service_image = get_sub_field('service_image'); 
                $wpImg =  wp_get_attachment_image($service_image, 'large');
                if ( !empty($service_image) ) : ?>
                  <?php echo $wpImg; ?>
                <?php endif; ?>
                 
                </div>
                <h3><?php the_sub_field('service_name') ?></h3>
                <p><?php the_sub_field('service_description') ?></p>
              
              </div>
            <?php endwhile; ?>
          </div>
        </section>
      <?php endif; ?>
    </div>
  </div>
</div>