<?php
  get_header();
  // Template Name: Testimonials

  // Hero Section
  $hero_background_image      = get_field("hero_background_image");
  $hero_span                  = get_field("hero_span");
  $hero_title                 = get_field("hero_title");

  // Floating Banner Section
  $floating_title             = get_field("floating_title");
  $floating_text              = get_field("floating_text");

  //  Clients Full information Section  One
  $client_full_deatail_text1  = get_field("client_full_deatail_text1");
  $client_insert_name1        = get_field("client_insert_name1");

  //  Clients Full information Section Two
  $client_full_deatail_text2  = get_field("client_full_deatail_text2");
  $client_insert_name2        = get_field("client_insert_name2");

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

<!-- Floating Banner -->
<section class="floating-banner">
  <div class="floating-content">
    <h2 class="floating-title">
      <?php echo $floating_title;?>
    </h2> <!-- .floating-title -->
  </div> <!-- .floating-content -->
</section> <!-- .floating-banner -->

<!-- Clients Short information Section -->
<section class="clients-short-information">
  <div class="container">
    <div class="width-handle">
      <div class="d-flex flex-wrap">
        <?php
          if(have_rows("client_information_data1")){
            while(have_rows("client_information_data1")){
              the_row();
              $client_data_text1   = get_sub_field("client_data_text1");
              $client_insert_name1 = get_sub_field("client_insert_name1");
              ?>
                <div class="col-1-2">
                  <div class="client-data-wrapper">
                    <h3 class="client-deatail-text">
                      <?php echo $client_data_text1; ?>
                    </h3> <!-- .client-deatail-text -->
                    <p class="client-insert-name">
                      <?php echo $client_insert_name1; ?>
                    </p> <!-- .client-insert-name -->
                  </div> <!-- .client-data-wrapper -->
                </div>
              <?php
            }
          }
        ?>
      </div>
    </div>
  </div> <!-- .container -->
</section> <!-- .clients-short-information -->

<!-- Clients Full information Section -->
<section class="clients-full-information">
  <div class="container">
    <div class="width-handle">
      <div class="client-full-deatails-wrapper">
        <h3 class="client-full-deatail-text">
          <?php echo $client_full_deatail_text1;?>
        </h3> <!-- .client-full-deatail-text -->
        <p class="client-insert-name">
          <?php echo $client_insert_name1; ?>
        </p> <!-- .client-insert-name -->
      </div> <!-- .client-full-deatails -->
    </div>
  </div> <!-- .container -->
</section> <!-- .clients-full-information -->

<!-- Clients Short information Section -->
<section class="clients-short-information">
  <div class="container">
    <div class="width-handle">
      <div class="d-flex flex-wrap">
        <?php
          if(have_rows("client_information_data2")){
            while(have_rows("client_information_data2")){
              the_row();
              $client_data_text2   = get_sub_field("client_data_text2");
              $client_insert_name2 = get_sub_field("client_insert_name2");
              ?>
                <div class="col-1-2">
                  <div class="client-data-wrapper">
                    <h3 class="client-deatail-text">
                      <?php echo $client_data_text2; ?>
                    </h3> <!-- .client-deatail-text -->
                    <p class="client-insert-name">
                      <?php echo $client_insert_name2; ?>
                    </p> <!-- .client-insert-name -->
                  </div> <!-- .client-data-wrapper -->
                </div>
              <?php
            }
          }
        ?>
      </div>
    </div>
  </div> <!-- .container -->
</section> <!-- .clients-short-information -->

<!-- Clients Short information Section -->
<section class="clients-short-information">
  <div class="container">
    <div class="width-handle">
      <div class="d-flex flex-wrap">
        <div class="col-1-2">
          <div class="client-full-deatails-wrapper2">
            <h3 class="client-full-deatail-text">
              <?php echo $client_full_deatail_text2;?>
            </h3> <!-- .client-full-deatail-text -->
            <p class="client-insert-name">
              <?php echo $client_insert_name2; ?>
            </p> <!-- .client-insert-name -->
          </div> <!-- .client-full-deatails-wrapper2 -->
        </div>
        <div class="col-1-2">
          <div class="d-flex flex-column">
            <?php
              if(have_rows("client_information_data3")){
                while(have_rows("client_information_data3")){
                  the_row();
                  $client_data_text3   = get_sub_field("client_data_text3");
                  $client_insert_name3 = get_sub_field("client_insert_name3");
                  ?>
                    <div class="col-1-2 no-margin">
                      <div class="client-data-wrapper3">
                        <h3 class="client-deatail-text">
                          <?php echo $client_data_text3; ?>
                        </h3> <!-- .client-deatail-text -->
                        <p class="client-insert-name">
                          <?php echo $client_insert_name3; ?>
                        </p> <!-- .client-insert-name -->
                      </div> <!-- .client-data-wrapper3 -->
                    </div>
                  <?php
                }
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .container -->
</section> <!-- .clients-short-information -->

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