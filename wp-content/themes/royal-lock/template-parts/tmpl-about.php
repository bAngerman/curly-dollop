<?php
/**
 * Front Page about section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package royal-lock
 */
?>
<div class="container-outer">
  <div class="container-inner bg-white">
    <div class="container">
      <div class="row">

        <?php if ( get_field('about_heading') ) : ?>

        <section id="about" class="col-12">
          <h2><?php the_field('about_heading'); ?></h3>
          <p><?php the_field('about_content'); ?></p>
          <?php $about_link = get_field('about_link'); 
          if ( $about_link ) : ?>
          <a href="<?php echo $about_link['about_link_location']; ?>"><?php echo $about_link['about_link_text']; ?></a>
          <?php endif; ?>
        </section>

        <?php endif; ?>
      </div>
    </div>
  </div>
</div>