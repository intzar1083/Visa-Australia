<?php
  get_header();
// Template Name: FAQs 
?>
<?php
  // Hero Section
  $hero_background_image  = get_field("hero_background_image");
  $hero_span              = get_field("hero_span");
  $hero_title             = get_field("hero_title");
  
  // Floating Banner Section
  $floating_title         = get_field("floating_title");

  //  Cta Banner Section
  $cta_background_image   = get_field("cta_background_image");
  $cta_span               = get_field("cta_span");
  $cta_title              = get_field("cta_title");
  $cta_button             = get_field("cta_button");
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

<!-- Question Section -->
<section class="questions">
  <div class="container">
    <div class="width-handle">
    <div class="d-flex flex-wrap">
      <?php
        if(have_rows("question_again")){
          while(have_rows("question_again")){
            the_row();
            $question = get_sub_field("question");
            $answer   = get_sub_field("answer");
            ?>
              <div class="col-1-2">
                <div class="question-wrapper">
                  <h3 class="question">
                    <?php echo $question; ?>
                  </h3> <!-- .question -->
                  <p class="answer">
                    <?php echo $answer; ?>
                  </p> <!-- .answer -->
                </div> <!-- .question-wrapper -->
              </div>
            <?php
          }
        }
      ?>
    </div>
    </div>
  </div> <!-- .container-fluid -->
</section> <!-- .questions -->

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