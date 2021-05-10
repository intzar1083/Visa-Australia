<?php

  get_header();

  // Hero Section
  $hero_background_image            = get_field("hero_background_image");
  $hero_title                       = get_field("hero_title");

  //  About Us Section
  $about_us_image                   = get_field("about_us_image");
  $cta_span                         = get_field("cta_span");
  $cta_title                        = get_field("cta_title");
  $cta_button                       = get_field("cta_button");
  $about_us_span                    = get_field("about_us_span");
  $about_us_title                   = get_field("about_us_title");
  $about_us_text                    = get_field("about_us_text");
  $about_us_button                  = get_field("about_us_button");

  //  Home Testimonials Section
  $home_testimoial_span             = get_field("home_testimoial_span");
  $home_testimoial_title            = get_field("home_testimoial_title");
  $home_testimoial_text             = get_field("home_testimoial_text");
  $home_testimonial_see_more_button = get_field("home_testimonial_see_more_button");
  $testimonial_image                = get_field("testimonial_image");
  $testimonial_name                 = get_field("testimonial_name");
  $testimonial_question             = get_field("testimonial_question");
?>

<!-- Section Hero -->
<div class="hero">
  <div class="hero-bg" style="background-image: url(<?php echo $hero_background_image["url"]; ?>); ">
  <div class="container">
    <div class="hero-content">
      <span class="title hero-title"><?php echo $hero_title; ?></span>
      <h1 class="hero-descripion"><?php echo $hero_text; ?></h1>
    </div> <!-- .hero-content -->
  </div> <!-- .container -->
  </div> <!-- .Hero-Bg -->
</div> <!-- .Hero -->
<div class="hero-bg-solid"></div> <!-- .hero-bg-solid -->

<!-- Home About Section -->
<section class="home-about">
  <div class="d-flex items-center">
    <div class="home-about-img-container">
      <img src="<?php echo $about_us_image["url"]; ?>" alt="<?php echo $about_us_image["title"]; ?>">
    </div> <!-- .home-about-img-container -->
    <div class="home-about-content-container">
      <div class="cta-box">
        <div class="cta-content"> 
          <span class="cta-span"><?php echo $cta_span;?></span>
          <h3 class="cta-title">
            <?php echo $cta_title;?>
          </h3> <!-- .cta-title -->
        </div> <!-- .cta-content -->
        <div class="btn-bg-solid">
          <a target="<?php echo $cta_button["target"]; ?>" href="<?php echo $cta_button["url"]; ?>" class="cta-btn">
            <?php echo $cta_button["title"]; ?> <img src="<?php echo get_template_directory_uri() . "/img/large-right-arrow.svg"?>" alt="Arrow Img">
          </a> <!-- .cta-btn -->
        </div> <!-- .btn-bg-solid -->
      </div> <!-- .cta-box -->
      <div class="home-about-content">
      <span class="about-span"><?php echo $about_us_span; ?></span>
        <h3 class="about-title">
        <?php echo $about_us_title; ?>
        </h3> <!-- .about-title --> 
        <p class="about-text">
        <?php echo $about_us_text; ?>
        </p> <!-- .about-text -->
        <a target="<?php echo $about_us_button["target"]; ?>" href="<?php echo $about_us_button["url"]; ?>" class="about-us-btn">
          <?php echo $about_us_button["title"]; ?> <img src="<?php echo get_template_directory_uri() . "/img/arrow-pointing-to-right.svg"?>" alt="">
        </a> <!-- .about-us-btn -->
      </div> <!-- .home-about-content -->
    </div> <!-- .home-about-content-container -->
  </div>
</section> <!-- .home-about -->

<!-- Home Testimonials -->
<section class="home-testimonials">
  <div class="container">
    <div class="width-handle">
      <div class="d-flex items-center">
        <div class="col-1-2">
          <div class="home-testimonial-content">
            <span class="testimonial-span"><?php echo $home_testimoial_span; ?></span>
              <h3 class="testimonial-title">
              <?php echo $home_testimoial_title; ?>
              </h3> <!-- .testimonial-title --> 
              <p class="testimonial-text">
              <?php echo $home_testimoial_text; ?>
              </p> <!-- .testimonial-text -->
              <a target="<?php echo $home_testimonial_see_more_button["target"]; ?>" href="<?php echo $home_testimonial_see_more_button["url"]; ?>" class="testimonial-see-more-btn">
              <?php echo $home_testimonial_see_more_button["title"]; ?>
               <img src="<?php echo get_template_directory_uri() . "/img/small-right-arrow.svg"?>" alt="">
            </a>  <!-- .testimonial-see-more-btn -->
            </div> <!-- .home-about-content -->
          </div>
        <div class="col-1-2">
        <div class="home-testimonial-question-content">
          <div class="d-flex items-center">
            <img class="home-testimonial-img" src="<?php echo $testimonial_image["url"]; ?>" alt="<?php echo $testimonial_image["title"]; ?>">
            <h3 class="home-testimonial-deatail">
              <?php echo $testimonial_question;?>
            </h3> <!-- .home-testimonial-deatail -->
          </div>
          <p class="home-testimonial-insert-name">
              <?php echo $testimonial_name;?> <img src="<?php echo get_template_directory_uri() . "/img/black-arrow.png"?>" alt="">
            </p>
            <a target="<?php echo $home_testimonial_see_more_button["target"]; ?>" href="<?php echo $home_testimonial_see_more_button["url"]; ?>" class="testimonial-see-more-btn">
              <?php echo $home_testimonial_see_more_button["title"]; ?>
               <img src="<?php echo get_template_directory_uri() . "/img/small-right-arrow.svg" ?>" alt="">
            </a> <!-- .testimonial-see-more-btn -->
        </div> <!-- .home-testimonial-question-content -->
        </div>
      </div>
    </div>
  </div>
</section> <!-- .home-testimonials -->
<?php get_footer();?>