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

<div class="container-outer contact">
  <div class="container-inner bg-l-gray">
    <div class="container">
      <div class="row d-center">
      <?php if( get_field('contact_heading') ) : ?>
        <section id="contact" class="col-12 col-md-5">
          <div class="address">
            <h3><?php the_field('contact_heading'); ?></h3>
            <div id="googlemap" data-lat="<?php the_field('lat'); ?>" data-lng="<?php the_field('lng'); ?>"></div>
            <?php while( have_rows('store_address', 'option')) : the_row() ?>
              <div itemscope itemtype="http://schema.org/LocalBusiness">
                <h1 itemprop="name">Royal Lock &amp; Key</h1>
                <span class="location" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                  <p>
                    <span itemprop="streetAddress"><?php the_sub_field('address_line_one'); ?></span>
                    <span><span itemprop="addressLocality"><?php the_sub_field('city'); ?></span>, <span itemprop="addressRegion"><?php the_sub_field('province'); ?></span></span>
                    <span itemprop="postalCode"><?php the_sub_field('postal_code'); ?></span>
                  </p>
                </span>
                <span itemprop="telephone">
                  <a class="phone" href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a>
                </span>
                <div itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
                  <meta itemprop="latitude" content="<?php the_field('lat'); ?>" />
                  <meta itemprop="longitude" content="<?php the_field('lng'); ?>" />
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </section>
        <section class="contact-us col-12 col-md-5 offset-md-2">
          <h3>Get in touch with us:</h3>
          <?php echo do_shortcode('[contact-form-7 id="128"]'); ?>
        </section>
      <?php endif; ?>
      </div>
    </div>
  </div>
</div>