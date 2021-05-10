<?php 
  get_header();

  $id = get_option('page_for_posts');
  $hero_background_image = get_field('hero_background_image', $id);
  $hero_span  = get_field('hero_span', $id);
  $hero_title = get_field('hero_title', $id);
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

<!-- Visa Posts Section -->
<section class="visa-posts">
  <div class="visa-posts-white-space">
    <div class="container">
      <div class="d-flex flex-wrap">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();
              ?>
                <div class="col-1-2">
                  <div class="visa-post">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail();?>
                    </a>
                    <div class="visa-post-content">
                      <a href="<?php the_permalink(); ?>">
                        <h3 class="visa-post-title"><?php the_title();?></h3>
                      </a>
                      <p class="visa-post-text">
                        <?php echo wp_trim_words(get_the_content(), 50) ;?>
                      </p> <!-- .visa-post-text -->
                      <a class="read-more-btn" href="<?php the_permalink();?>">
                        <div class="d-flex items-center">
                          Read More <img src="<?php echo get_template_directory_uri() . "/img/small-right-arrow.svg"?>" alt="Arrow Img">
                        </div>
                       </a>
                    </div> <!-- .visa-post-content -->
                  </div> <!-- .visa-post -->
                </div>
              <?php
            }
          }
        ?>
      </div>
    </div>
  </div> <!-- .visa-posts-white-space -->
</section> <!-- .visa-posts -->
<?php get_footer(); ?>