<?php 
  get_header();

   // Hero Section
   $hero_span              = get_field("hero_span", "option");
   $hero_title             = get_field("hero_title", "option");

   // Floating Banner Section
  $floating_title         = get_field("floating_title", "option");

  //  Cta Banner Section
  $cta_background_image  = get_field("cta_background_image", "option");
  $cta_span               = get_field("cta_span", "option");
  $cta_title              = get_field("cta_title", "option");
  $cta_button             = get_field("cta_button", "option");
?>

<!-- Section Hero -->
<div class="hero">
  <div class="hero-bg" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>); ">
  <div class="container">
    <div class="hero-content">
      <span class="hero-span"><?php echo $hero_span; ?></span>
      <h1 class="hero-title"><?php echo $hero_title; ?></h1>
    </div> <!-- .hero-content -->
  </div> <!-- .container -->
  </div> <!-- .Hero-Bg -->
</div> <!-- .Hero -->
<div class="hero-bg-solid"></div> <!-- .hero-bg-solid -->

<!-- Floating Banner Section-->
<section class="floating-banner">
  <div class="floating-content">
    <h2 class="floating-title">
      <?php echo $floating_title;?>
    </h2> <!-- .floating-title -->
  </div> <!-- .floating-content -->
</section> <!-- .floating-banner -->

<!-- Visa Posts Section -->
<?php
  if(have_posts()){
    while(have_posts()){
      the_post();
?>
<section class="visa-single-posts">
  <div class="container">
    <div class="width-handle">
      <div class="visa-single-post">
        <div class="visa-single-post-content">
          <h3 class="visa-single-post-title"><?php the_title();?></h3>
          <div class="visa-post-text">
            <?php the_content();?>
          </div> <!-- .visa-single-post-text -->
        </div> <!-- .visa-single-post-content -->
      </div> <!-- .visa-single-post -->
    </div> <!-- .width-handle -->
  </div>
</section> <!-- .visa-single-posts -->
<?php
    }
  }
?>

<!-- Cta Banner Section -->
<section class="cta-banner" style="background-image: url(<?php echo $cta_background_image["url"];?>); ">
  <div class="container">
    <div class="width-handle">
      <div class="cta-box">
        <div class="cta-content"> 
          <span class="cta-span"><?php echo $cta_span;?></span>
          <h3 class="cta-title">
            <?php echo $cta_title;?>
          </h3> <!-- .cta-title -->
        </div> <!-- .cta-content -->
        <div class="btn-bg-solid">
          <a target="<?php echo $cta_button["target"]; ?>" href="<?php echo $cta_button["url"]; ?>" class="cta-btn">
            <div class="d-flex items-center">
              <?php echo $cta_button["title"]; ?> <img src="<?php echo get_template_directory_uri() . "/img/large-arrow.svg"?>" alt="Arrow Img">
            </div>
          </a> <!-- .cta-btn -->
        </div> <!-- .btn-bg-solid -->
      </div> <!-- .cta-box -->
    </div> <!-- .width-handle -->
  </div>
</section> <!-- .cta-banner -->
<?php get_footer(); ?>