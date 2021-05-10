<?php

function visaaustralia_setup_theme(){
  add_theme_support( "title-tag" );
  add_theme_support( "post-thumbnails" );
  add_theme_support( "Menus" );

  //  Add Register Menus
  register_nav_menu( "header-navigation", __( "Header Menu", "Visaaustralia") );
  register_nav_menu( "footer-navigation", __( "Footer Menu", "Visaaustralia") );
  register_nav_menu( "footer-links", __( "Footer Links", "Visaaustralia") );
}