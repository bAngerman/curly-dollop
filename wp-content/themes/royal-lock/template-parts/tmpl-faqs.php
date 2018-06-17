<?php
/**
 * Front Page faqs section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package royal-lock
 */
?>
<div class="container-outer">
  <div class="container">
    <?php if( get_field('faqs_heading', 'options') ) : ?>
      <h3><?php echo the_field('faqs_heading', 'options') ?></h3>
      <div id="faqs" class="carousel slide" data-ride="carousel" data-interval="10000">
        <div class="carousel-inner">
          <?php $idx = 1; ?>
          <?php while ( have_rows('faqs', 'options') ) : the_row() ?>
            
            <?php while ( have_rows('faq') ) : the_row() ?>
              <div class="carousel-item <?php if ($idx === 1) { echo "active"; } ?>">
                <h4><?php the_sub_field('question'); ?></h4>
                <p><?php the_sub_field('answer') ?></p>
              </div>
              <?php $idx++; ?>
            <?php endwhile; ?>
          <?php endwhile; ?>
        </div>
        <a class="carousel-control carousel-control-prev" href="#faqs" role="button" data-slide="prev">
          <span class="carousel-control carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control carousel-control-next" href="#faqs" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <?php endif; ?>
  </div>
</div>