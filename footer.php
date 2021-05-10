<?php
  $footer_logo                = get_field("footer_logo", "option");
  $footer_title_1             = get_field("footer_title_1", "option");
  $footer_title_2             = get_field("footer_title_2", "option");
  $footer_title_3             = get_field("footer_title_3", "option");
  $facebook_profile_link      = get_field("facebook_profile_link", "option");
  $instagram_profile_link     = get_field("instagram_profile_link", "option");
  $twitter_profile_link       = get_field("twitter_profile_link", "option");
  $you_tube_play_profile_link = get_field("you_tube_play_profile_link", "option");
  $footer_contact_info_link   = get_field("footer_contact_info_link", "option");
  $copy_right_1               = get_field("copy_right_1", "option");
  $copy_right_2               = get_field("copy_right_2", "option");
?>
<footer class="site-footer">
  <div class="container">
    <div class="width-handle">
      <div class="upper-footer">
        <div class="d-flex items-center">
          <div class="logo">
            <a href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php echo $footer_logo["url"];?>" alt="<?php echo $footer_logo["title"];?>"/>
            </a>
          </div> <!-- .logo -->
          <ul class="social-menu">
            <li>
              <a target="_blank" href="<?php echo $facebook_profile_link; ?>">
                <img src="<?php echo get_template_directory_uri() . "/img/facebook.svg"?>" alt="Facebook Icon">
              </a>
            </li>
            <li>
              <a target="_blank" href="<?php echo $istagram_profile_link; ?>">
                <img src="<?php echo get_template_directory_uri() . "/img/instagram.svg"?>" alt="Istagram Icon">
              </a>
            </li>
            <li>
              <a target="_blank" href="<?php echo $twitter_profile_link; ?>">
                <img src="<?php echo get_template_directory_uri() . "/img/twitter.svg"?>" alt="Twitter Icon">
              </a>
            </li>
            <li>
              <a target="_blank" href="<?php echo $you_tube_play_profile_link; ?>">
                <img src="<?php echo get_template_directory_uri() . "/img/youtube.svg"?>" alt="Youtube Icon">
              </a>
            </li>
          </ul>
        </div>
      </div> <!-- .upper-footer -->
      <div class="lower-footer">
        <div class="d-flex">
          <div class="col-1-4">
            <h3 class="footer-title"><?php echo $footer_title_1;?></h3>
            <?php
              if(have_rows("footer_contact_links",'option')){
                while(have_rows("footer_contact_links",'option')){
                  the_row();
                  $name         = get_sub_field("name", "option");
                  $phone_number = get_sub_field("phone_number", "option"); 
                  ?>
                    <div class="d-flex items-center">
                      <p class="name">
                        <?php echo $name . "+"; ?>
                      </p> <!-- .name -->
                      <p class="phone-number">
                        <?php echo $phone_number; ?>
                      </p> <!-- .phone-number -->    
                    </div>
                  <?php
                }
              }
            ?>
            <a class="footer-contact-info-link" target="<?php echo $footer_contact_info_link["target"]; ?>" href="<?php echo $footer_contact_info_link["url"]; ?>"><?php echo $footer_contact_info_link["title"]; ?></a>
          </div>
          <div class="col-1-4">
          <h4 class="footer-title"><?php echo $footer_title_2; ?></h4>
            <?php
              if(has_nav_menu("footer-navigation")){
                wp_nav_menu([
                  "theme_location"  =>  "footer-navigation",
                  "container"       =>  "nav",
                  "container_class" =>  "secoundary-menu"
                ]);
              }
            ?>
          </div>
          <div class="col-1-2">
          <h4 class="footer-title"><?php echo $footer_title_3; ?></h4>
            <?php
              if(has_nav_menu("footer-links")){
                wp_nav_menu([
                  "theme_location"  =>  "footer-links",
                  "container"       =>  false,
                  "menu_class"      =>  "footer-links d-flex flex-wrap"
                ]);
              }
            ?>
          </div>
        </div>
      </div> <!-- .lower-footer -->
    </div>
  </div>
</footer>
<div class="copyright-bar">
  <div class="container">
    <div class="width-handle">
      <div class="d-flex s-b-w items-center">
        <p class="copyright"><?php echo $copy_right_1;?></p>
        <p class="copyright"><?php echo $copy_right_2;?></p>
      </div>
    </div>
  </div>
</div> <!-- .copyright-bar -->
<?php wp_footer(); ?>
</body>
</html>