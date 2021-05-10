<?php
  
  //Template Name: About Us
  get_header();

  // Hero Section
  $hero_background_image  = get_field("hero_background_image");
  $hero_span              = get_field("hero_span");
  $hero_title             = get_field("hero_title");

  // Floating Banner Section
  $floating_title         = get_field("floating_title");
  $floating_text          = get_field("floating_text");

  //  Our Team Section
  $team_intro_span        = get_field("team_intro_span");
  $team_intro_title       = get_field("team_intro_title");
  $team_intro_text        = get_field("team_intro_text");
  $team_intro_button      = get_field("team_intro_button");

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

<!-- Floating Banner -->
<section class="floating-banner">
  <div class="floating-content">
    <h2 class="floating-title">
      <?php echo $floating_title;?>
    </h2> <!-- .floating-title -->
    <p class="floating-text">
      <?php echo $floating_text;?>
    </p> <!-- .floating-text -->
  </div> <!-- .floating-content -->
</section> <!-- .floating-banner -->

<!-- Section Our Team -->
<section class="our-team">
  <div class="container">
    <div class="width-handle">
      <div class="d-flex s-b-w">
        <div class="col-40">
          <div class="team-intro">
            <span class="team-intro-span"><?php echo $team_intro_span;?></span>
            <h3 class="team-intro-title">
              <?php echo $team_intro_title;?>
            </h3> <!-- .team-intro-title -->
            <p class="team-intro-text">
              <?php echo $team_intro_text;?>
            </p> <!-- .team-intro-text -->
            <a target="<?php echo $team_intro_button["target"];?>" href="<?php echo $team_intro_button["urlt"];?>" class="team-intro-btn">
              <?php echo $team_intro_button["title"];?> <img src="<?php echo get_template_directory_uri() . "/img/small-right-arrow.svg"?>" alt="Arrow Img">
            </a> <!-- .team-intro-btn -->
          </div> <!-- .team-intro -->
        </div>
        <div class="col-57">
          <?php
            if(have_rows("team")){
              while(have_rows("team")){
                the_row();
                $member_photo       = get_sub_field("member_photo");
                $member_name        = get_sub_field("member_name");
                $member_designation = get_sub_field("member_designation");
                $member_bio         = get_sub_field("member_bio");
                ?>
                <div class="team">
                <div class="member-photo">
                  <img src="<?php echo $member_photo["url"];?>"  alt="<?php echo $member_photo["title"];?>">
                </div> <!-- .member-photo -->
                  <div class="member-content">
                    <h3 class="member-name">
                      <?php echo $member_name; ?>
                    </h3> <!-- .member-name -->
                    <p class="member-designation">
                      <?php echo $member_designation; ?>
                    </p> <!-- .member-designation -->
                    <div class='member-bio'>
                      <p><?php echo $member_bio; ?></p>
                    </div> <!-- .member-bio -->
                  </div> <!-- .member-content -->
                </div> <!-- .team -->
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
            <div class="d-flex items-center">
              <?php echo $cta_button["title"]; ?> <img src="<?php echo get_template_directory_uri() . "/img/large-arrow.svg"?>" alt="Arrow Img">
            </div>
          </a> <!-- .cta-btn -->
        </div> <!-- .btn-bg-solid -->
      </div> <!-- .cta-box -->
    </div> <!-- .width-handle -->
  </div>
</section> <!-- .cta-banner -->
<?php get_footer();?>