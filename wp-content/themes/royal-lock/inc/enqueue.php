<?php 



function royal_lock_scripts() {

  /**
   * SCRIPTS
   */
  // jQuery
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-slim.min.js', false, null, false );

  // bootstrap stuff
  wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/js/popper.min.js', false, null, false );
  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery', 'popper_js' ), null, false );

  // custom js
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/build/scriptsHome.bundle.js', array( 'jquery', 'bootstrap_js' ), null, false );

  /**
   * STYLES
   */
  // bootstrap css
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', false, null, false );

  // custom styles
  wp_enqueue_style( 'royal_lock_style', get_template_directory_uri() . '/build/styles.min.css', false, null, false );
  
}
add_action( 'wp_enqueue_scripts', 'royal_lock_scripts', 10, 0 );
