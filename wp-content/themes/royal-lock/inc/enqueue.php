<?php 



function royal_lock_scripts() {

  /**
   * SCRIPTS
   */
  // jQuery
  wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, false );

  // bootstrap stuff
  wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), null, false );
  wp_enqueue_script( 'popper-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery, popper' ), null, false );

  // custom js
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/build/scriptsHome.bundle.js' );

  /**
   * STYLES
   */
  // bootstrap css
  wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', false, null, false );

  // custom styles
  wp_enqueue_style( 'royal-lock-style', get_template_directory_uri() . '/build/styles.min.css', false, null, false );
  
}
add_action( 'wp_enqueue_scripts', 'royal_lock_scripts', 10, 0 );

function deferred_styles() {
	wp_enqueue_style( 'meta-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'deferred_styles', 99, 0 );