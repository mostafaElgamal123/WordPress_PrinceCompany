<?php
    /**
     * Tornado Theme - Custom Header Component
     * @package Tornado Wordpress
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;
?>
<div class="top-nav"></div>
<!-- Main Header -->
<header class="tornado-header" >
    <div class="container">
        <!-- Logo -->
        <a href="<?php echo site_url();?>" class="logo"> <img src="<?php echo get_option('theme_logo');?>" alt="<?php echo bloginfo('name');?>"> </a>
        <!-- Navigation Menu -->

        <div class="navigation-menu" data-id="main-menu">
            <?php echo wp_nav_menu(array(
                'menu' => 'main-menu',
                'theme_location' => 'main-menu',
                'container' => false,
                'container_class' => false,
            ));?>
        </div>
         <!-- Action Buttons -->
         <div class="action-btns">
                <div class="social-media">
                
                    <a href="https://wa.me/<?php echo get_option('whatsapp_number');?>" class="btn ti-whatsapp"></a>
                    <a href="<?php echo get_option('facebook_url');?>" class="btn ti-facebook"></a>
                    <a href="<?php echo get_option('twitter_url');?>" class="btn ti-twitter"></a>
                    <a href="<?php echo get_option('instagram_url');?>" class="btn ti-instagram"></a>
                    <a href="<?php echo get_option('linkedin_url');?>" class="btn ti-linkedin"></a>

                    <?php  $transls=pll_the_languages(array( 'raw' => 1,
                  
                )); 
               
                    
                    foreach( $transls as  $transl){
                        if(pll_current_language()!=$transl['slug']){
                            ?>

                        <a href="<?php echo $transl['url'] ?>" class="btn tooltip-bottom ti-google-translate" data-title="<?php echo $transl['slug'] ?>"></a>

                            <?php
                        }

                    }
                     ?>
                     
                  



                </div>
                <!-- Main Menu Mobile Button -->
                <a href="" class="menu-btn icon-btn ti-menu-round" title="<?php echo pll__('القائمة الرئيسية','tornado');?>" data-id="main-menu"></a>
            </div>
    </div>
</header>
<!-- // Main Header -->