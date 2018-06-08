<?php 



function royal_lock_scripts() {

	wp_enqueue_script( 'royal-lock-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
  wp_enqueue_script( 'royal-lock-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

 
  wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, false );
  
  // custom js
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/build/scripts.bundle.js' );

  // custom styles
  wp_enqueue_style( 'royal-lock-style', get_template_directory_uri() . '/build/styles.min.css', false, null, false);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'royal_lock_scripts', 10, 0 );

function deferred_styles() {
	wp_enqueue_style( 'meta-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'deferred_styles', 99, 0 );