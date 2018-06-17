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
  <div class="container">
    <div class="row">


      <?php if( have_rows('services_list') ): ?>
        <section id="services" class="col-12">
          <div class="service-item">
            <h2><?php echo the_field('services_heading') ?></h3>
            <?php $total_rows = count( get_field('services_list') ); ?>
            <?php while ( have_rows('services_list') ) : the_row(); ?>
            
            <?php
            $service_image = get_sub_field('service_image'); 

            if ( !empty($service_image) ) : ?>
              <img class="logo" src="<?php echo $service_image['url']; ?>" alt="<?php echo $service_image['alt']; ?>">
            <?php endif; ?>
              <h3><?php the_sub_field('service_name') ?></h3>
              <p><?php the_sub_field('service_description') ?></p>
            <?php if ( $total_rows !== get_row_index() ) : ?>
              <div class="sep"></div>
            <?php endif; ?>
            <?php endwhile; ?>
          </div>
        </section>
      <?php endif; ?>
    </div>
  </div>
</div>