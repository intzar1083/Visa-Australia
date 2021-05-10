<?php

// Setup
define( "JU_DEV_MODE", true);

// Includes
include( get_theme_file_path( "/inc/front/enqueue.php" ));
include( get_theme_file_path( "/inc/acf.php" ));
include( get_theme_file_path( "/inc/setup.php" ));
include( get_theme_file_path( "/inc/post_types.php" ));

// Hooks
add_action( "wp_enqueue_scripts", "visaaustralia_style");
add_action( "after_setup_theme", "visaaustralia_setup_theme" );
add_action( 'init', "visaaustralia_post_types" );