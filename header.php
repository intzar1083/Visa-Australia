<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
  $header_logo    = get_field("header_logo", "option");
  $select_country = get_field("select_country", "option");
  $search_title   = get_field("search_title", "option");
  $search_icon    = get_field("search_icon", "option");
?>

<header class="site-header">
  <div class="container-fluid">
    <div class="d-flex items-center">
      <?php
        if($header_logo){
          ?>
            <div class="logo">
              <a href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo $header_logo["url"];?>" alt="<?php echo $header_logo["title"];?>"/>
              </a>
            </div> <!-- .logo -->
          <?php
        }
      ?>
      <?php
        if( has_nav_menu( "header-navigation" ) ){
          wp_nav_menu(array(
            "theme_location"  =>  "header-navigation",
            "container"       =>  "nav",
            "container_class" =>  "navigation"
          ));
        }
      ?>
      <div class="search-country-wrapper">
        <div class="d-flex items-center">
          <div class="select-language">
            <?php echo do_shortcode($select_country); ?>
          </div> <!-- .select-language -->
          <p class="search-title">
            <?php echo $search_title;?>   
          </p> <!-- .search-title -->
          <button class="search-btn">
            <img src="<?php echo get_template_directory_uri() ."/img/magnifying-glass.png" ?>" alt="">
          </button> <!-- .search-btn -->
          <div class="burger">
            <div class="menu-burger">
          
            </div> <!-- .menu-burger -->
          </div>
        </div>
      </div> <!-- .search-country-wrapper -->
    </div> <!-- .d-flex -->
  </div> <!-- .container-fluid -->
</header>
<div class="sub-menu-overlay d-none"></div>