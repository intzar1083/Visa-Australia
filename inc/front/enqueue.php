<?php

function visaaustralia_style(){
  
  //  Time Variable
  $ver  = JU_DEV_MODE ? time() : false;
  
  //  URI Variable
  $uri  = get_theme_file_uri();
  
  //  Add Register Style Sheets
  wp_register_style("google-fonts", "https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&family=Roboto+Slab:wght@400;500;600&display=swap", [], $ver);
  wp_register_style("accordion-css", $uri . "/css/accordion.css", [], $ver);
  wp_register_style("main-css", get_stylesheet_uri(), [], $ver);

  //  Add Enqueue Style Sheets
  wp_enqueue_style("google-fonts");
  wp_enqueue_style("accordion-css");
  wp_enqueue_style("main-css");

  // Add Register scripts
  wp_register_script( 'readMore-js', $uri . '/js/readMoreJS.min.js', [], "1.1.0", true );
  wp_register_script( 'app', $uri . '/js/app.js', [], false, true );

  // Add Enqueue scripts
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'readMore-js' );
  wp_enqueue_script( 'app' );
}