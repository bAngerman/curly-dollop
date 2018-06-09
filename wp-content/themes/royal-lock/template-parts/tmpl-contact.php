<?php
/**
 * Front page contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package royal-lock
 */

global $global_meta;

//TODO: object data the address

if( get_field('contact_heading') ) : ?>
  <section class="contact">
    <div class="address">
      <h4><?php the_field('contact_heading'); ?></h4>
      <div class="googlemap"><?php the_field('map'); ?></div>
      <p><?php the_field('store_address', 'options'); ?></p>
    </div>
  </section>
  <section class="contact-us">
    <p>Contact</p>
  </section>
<?php endif; ?>