<?php 

    

function royal_lock_scripts() {

  $ajax_localization = array(
    'ajax_url' => admin_url( 'admin-ajax.php' )
  );

  /**
   * SCRIPTS
   */
  // jQuery
  // wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-slim.min.js', false, null, false );
  wp_dequeue_script('jquery');

  wp_enqueue_script( 'zepto', get_template_directory_uri() . '/js/zepto.min.js', false, null, false );

  // bootstrap stuff
  // wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/js/popper.min.js', false, null, false );
  // wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'zepto', 'popper_js' ), null, false );

  


  /**
   * STYLES
   */
  // bootstrap css
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', false, null, false );

  // fontawesome 
  wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fonts/css/fontawesome-all.min.css', false, null, false );

  // custom styles
  wp_enqueue_style( 'royal_lock_style', get_template_directory_uri() . '/build/styles.min.css', false, null, false );
  
  // custom js
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/build/scriptsHome.bundle.js', array( 'zepto' ), null, false );
  wp_localize_script( 'scripts', 'ajaxscript', $ajax_localization );

}
add_action( 'wp_enqueue_scripts', 'royal_lock_scripts', 10 );


function return_ajax($return) {
  if ( wp_doing_ajax() ) {
      echo json_encode($return);
      wp_die();
  } else {
      return $return;
      wp_die();
  }
}

add_action( 'wp_ajax_nopriv_get_faq', 'get_faq' );
add_action( 'wp_ajax_get_faq', 'get_faq' );
function get_faq() {

  $faqQuestion = $_POST['faq'];
  while ( have_rows('faqs', 'options') ) {
    the_row();
    while ( have_rows('faq') ) {
      the_row();
      if ( $faqQuestion == get_sub_field('question') ) {
        return return_ajax( get_sub_field('answer') );
      } 
    }
  }
  wp_die();
}


