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
  <div class="container-inner bg-l-gray">
    <div class="container faqs-outer">
      <?php if( get_field('faqs_heading', 'options') ) : ?>
        <h3><?php the_field('faqs_heading', 'options'); ?></h3>
        <select name="faq" id="faq" class="custom-select">

          <?php 
          $idx = 0;
          while ( have_rows('faqs', 'options') ) : the_row() ?>
            <?php while ( have_rows('faq') ) : the_row(); ?>
                <option value="<?php the_sub_field('question'); ?>" <?php if($idx === 0) { echo 'selected'; } ?>><?php the_sub_field('question'); ?></option>
                <?php if ( $idx === 0 ) {
                  $a = get_sub_field('answer');
                } ?>
            <?php 
            $idx++;
            endwhile; ?>
            
          <?php endwhile; ?>
        </select>
          <div id="faq-answer"><?php echo $a; ?></div>
      <?php endif; ?>
    </div>
  </div>
</div>