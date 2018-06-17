<?php
/**
 * Front page contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package royal-lock
 */

//TODO: object data the address
?>

<div class="container-outer">
  <div class="container">
    <div class="row">

    <?php if( get_field('contact_heading') ) : ?>
      <section id="contact" class="col-12 col-md-5">
        <div class="address">
          <h4><?php the_field('contact_heading'); ?></h4>
          <div class="googlemap"><?php the_field('map'); ?></div>
          <p><?php the_field('store_address', 'option'); ?></p>
        </div>
      </section>
      <section class="contact-us col-12 col-md-7">
        <p>Contact form</p>
      </section>
    <?php endif; ?>
    </div>
  </div>
</div>