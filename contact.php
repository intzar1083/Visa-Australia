<?php
  
  //Template Name: Contact Us
  get_header();

  // Hero Section
  $hero_background_image      = get_field("hero_background_image");
  $hero_span                  = get_field("hero_span");
  $hero_title                 = get_field("hero_title");

  // Floating Banner Section
  $floating_title             = get_field("floating_title");
  $floating_text              = get_field("floating_text");

  //  Contact Us Section
  $form_title                 = get_field("form_title");
  $site_link_alpha            = get_field("site_link_alpha");
  $site_link                  = get_field("site_link");
  $contact_number_alpha       = get_field("contact_number_alpha");
  $contact_number             = get_field("contact_number");
  $input_description          = get_field("input_description");
  $contact_form_short_code    = get_field("contact_form_short_code");

  //  Location Map Section
  $location_title             = get_field("location_title");

  //  Cta Banner Section
  $cta_background_image       = get_field("cta_background_image");
  $cta_span                   = get_field("cta_span");
  $cta_title                  = get_field("cta_title");
  $cta_button                 = get_field("cta_button");
?>

<!-- Section Hero -->
<div class="hero">
  <div class="hero-bg" style="background-image: url(<?php echo $hero_background_image["url"]; ?>); ">
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

<!-- Contact Us Section -->
<section class="contact-us">
  <div class="container">
    <div class="width-handle">
      <div class="d-flex s-b-w">
        <div class="col-40">
          <div class="contact-form">
            <h2 class="form-title">
              <?php echo $form_title; ?>
            </h2> <!-- .form-title -->
            <a target="<?php echo $site_link["target"]; ?>" href="<?php echo $site_link["url"]; ?>" class="site-link">
              <p class="alpha"><?php echo $site_link_alpha;?></p><?php echo $site_link["title"]; ?>
            </a>
            <p class="contact-number">
              <span class="alpha"><?php echo $contact_number_alpha; ?></span> <?php echo $contact_number; ?>
            </p>
            <div class="input-wrapper">
              <p class="input-description">
                <?php echo $input_description;?>
              </p> <!-- .input-description -->
              <?php echo do_shortcode($contact_form_short_code) ; ?>
            </div> <!-- .input-wrapper -->
            </p> <!-- .team-intro-text -->
          </div> <!-- .contact-form -->
        </div>
        <div class="col-57">
          <?php
            if(have_rows("location_content")){
              while(have_rows("location_content")){
                the_row();
                $location_map             = get_sub_field("location_map");
                $location_name            = get_sub_field("location_name");
                $location_adress_alpha    = get_sub_field("location_adress_alpha");
                $location_adress          = get_sub_field("location_adress");
                $location_site_link_alpha = get_sub_field("location_site_link_alpha");
                $location_site_link       = get_sub_field("location_site_link");
                $location_number_alpha    = get_sub_field("location_number_alpha"); 
                $location_number          = get_sub_field("location_number");
                ?>
                <section class="location">
                <h2 class="location-title"><?php echo $location_title;?></h2>
                  <div class="location-map">
                    <?php echo $location_map;?>
                  </div> <!-- .location_map -->
                  <div class="location-content">
                    <h3 class="location-name">
                      <?php echo $location_name; ?>
                    </h3> <!-- .location-name -->
                    <p class="location-address">
                      <span class="alpha"><?php echo $location_adress_alpha; ?></span><?php echo $location_adress; ?>
                    </p> <!-- .location-address -->
                    <a class="location-site-link" target="<?php echo $location_site_link["target"]; ?>" href="<?php echo $location_site_link["url"]; ?>">
                      <p class="alpha"><?php echo $location_site_link_alpha;?></p><?php echo $location_site_link["title"]; ?>
                    </a>
                    <p class="location-number">
                    <span class="alpha"><?php echo $location_number_alpha; ?></span><?php echo $location_number; ?>
                    </p> <!-- .location-number -->
                  </div> <!-- .location-content -->
                </section> <!-- .location -->
                <?php
              }
            }
          ?>
        </div>
      </div>
    </div>
  </div> <!-- .container -->
</section> <!-- .our-team -->

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
            <?php echo $cta_button["title"]; ?> <img src="<?php echo get_template_directory_uri() . "/img/large-arrow.svg"?>" alt="Arrow Img">
          </a> <!-- .cta-btn -->
        </div> <!-- .btn-bg-solid -->
      </div> <!-- .cta-box -->
    </div> <!-- .width-handle -->
  </div>
</section> <!-- .cta-banner -->
<?php get_footer();?>