<?php
    /**
     * Tornado Theme - Custom Footer Component
     * @package Tornado Wordpress
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;
?>


    <!-- Start Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row pb15">
                <div class="col-12 col-m-5">
                        <h4 class="footer-head"><?php echo get_option('meta_title_footer');?></h4>
                        <p><?php echo get_option('meta_content_footer');?></p>
                </div>

                <div class="col-6 col-s-4 col-m-2">
                    <h4 class="footer-head">  <?php echo get_option('footer_title1');?></h4>
                    <?php echo wp_nav_menu(array(
                'menu' => 'Site-Map',
                'theme_location' => 'Site-Map',
                'container' => false,
                'container_class' => false,
            ));?>
                </div>

                <div class="col-6 col-s-4 col-m-2">
                    <h4 class="footer-head">  <?php echo get_option('footer_title2');?></h4>
                    <?php echo wp_nav_menu(array(
                'menu' => 'Links-site',
                'theme_location' => 'Links-site',
                'container' => false,
                'container_class' => false,
            ));?>
                </div>

                <div class="col-12 col-s-4 col-m-3 contact-footer">
                    <h4 class="footer-head">    <?php echo get_option('footer_title3');?></h4>
                    <ul>
                        <li class="ti-phone"><?php echo get_option('phone_number');?></li>
                        <li class="ti-mail"><?php echo get_option('contact_email');?></li>
                        <li class="ti-map-marker"><?php echo get_option('branch_address');?></li>
                    </ul>
                    <div class="social-media">
                    <a href="https://wa.me/<?php echo get_option('whatsapp_number');?>" class="btn ti-whatsapp"></a>
                    <a href="<?php echo get_option('facebook_url');?>" class="btn ti-facebook"></a>
                    <a href="<?php echo get_option('twitter_url');?>" class="btn ti-twitter"></a>
                    <a href="<?php echo get_option('instagram_url');?>" class="btn ti-instagram"></a>
                    <a href="<?php echo get_option('linkedin_url');?>" class="btn ti-linkedin"></a>
                    </div>

                </div>

            </div>
        </div>
        <!-- copy -->
        <div class="copy">
            <div class="container">
<!-- Copyrights -->
<?php echo pll__(get_option('meta_copyrights'),'tornado'); ?>
<!-- // Copyrights -->          
      <a href="https://www.mahacode.com/" class=""><span>تصميم وتطوير</span> <img src="<?php echo get_option('theme_logo_white');?>" alt=""></a>
            </div>
        </div>
        <!-- End copy -->
    </footer>
    <!-- End Footer -->
   