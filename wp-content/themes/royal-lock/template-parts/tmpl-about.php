<?php
/**
 * Front Page about section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package royal-lock
 */
?>
<div class="container-outer about">
  <div class="container-inner bg-offwhite" <?php if( get_field('about_background') ) : ?> style="background-image:url('<?php $wpImg = wp_get_attachment_image_src( get_field('about_background'), 'large'); echo $wpImg[0]; ?>');background-repeat:no-repeat;background-position:right;"<?php endif; ?>>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">

          <?php if ( get_field('about_heading') ) : ?>

          <section id="about">
            <h2><?php the_field('about_heading'); ?></h3>
            <p><?php the_field('about_content'); ?></p>
            <?php $about_link = get_field('about_link'); 
            if ( $about_link ) : ?>
            <a class="red" href="<?php echo $about_link['about_link_location']; ?>"><?php echo $about_link['about_link_text']; ?></a>
            <?php endif; ?>
          </section>

          <?php endif; ?>
        </div>
