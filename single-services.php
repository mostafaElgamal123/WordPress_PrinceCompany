<?php
    /**
     * Template Name: Default single-services
     * this template for displaying single-services for any of this pages single.php or page.php
     * @package Tornado Wordpress
    */
?>

<!-- Head Tag -->
<?php get_header(); ?>
<!-- Header -->
<?php get_template_part('inc/template-parts/components/header'); ?>

    <!-- Start Breadcrumb -->
    <section class="breadcrumb primary tx-uppercase" data-src="<?php echo get_option('background_logo');?>"
        data-gradient="linear-gradient(rgba(0, 0, 0, .8), rgba(0, 0, 0, 0.5))">
        <div class="container">
            <a href="<?php the_permalink() ?>" class="page-mane"><?php the_title() ?></a>
        </div>
    </section>
    <!-- End Breadcrumb -->


    <!-- Start Blog_Details Page -->
    <div class="page-content blog-details-page pt50">
        <div class="container">
            <div class="blog-details-block">
                <div class="blog-img responsive-element" data-src="<?php echo get_the_post_thumbnail_url() ?>"></div>
                <!-- Start privacy-block -->
                <div class="rich-content blog-details-content">
                    <h3><?php echo the_title() ?></h3>
                    <?php echo get_the_content() ?>
                </div>
                <!-- End privacy-block -->
                <div class="blog-details-footer">
                    <div class="date">
                        <h6 class="ti-calendar-clock">تاريخ النشر  :  <?php echo get_the_date(); ?></h6>
                    </div>
                    <div class="share-block">
                        <span>مشاركة المقال</span>
                        <div class="social-btns">
                            <a href="<?php echo get_option('linkedin_url');?>" class="btn round-corner tiny ti-linkedin linkedin-bg"></a>
                            <a href="<?php echo get_option('twitter_url');?>" class="btn round-corner tiny ti-twitter twitter-bg"></a>
                            <a href="<?php echo get_option('facebook_url');?>" class="btn round-corner tiny ti-facebook facebook-bg"></a>
                            <a href="<?php echo get_option('snapchat_url');?>" class="btn round-corner tiny ti-snapchat snapchat-bg"></a>
                            <a href="<?php echo get_option('instagram_url');?>" class="btn round-corner tiny ti-instagram instagram-bg"></a>
                        </div>
                    </div>
                </div>
            </div>
   <!-- Start contact -->
   <section class="contact pt50 pb50">
                <div class="container">
                    <div class="row">
                    <div class="col-12 col-m-8 contact-form">
                        <h2 class="section-title"><?php echo get_option('message_keywords');?></h2>
                        
                        <?php echo do_shortcode('[contact-form-7 id="54" title="contact-us-form" html_class="form-ui row"]'); ?>
                       
                    </div>
                    <div class="col-12 col-m-4 contact-details">
                        <div class="details-list tx-align-center mb20">
                            <h2 class="sec-title">  <?php echo pll__('تواصل معنا ','forntend');?></h2>
                            <ul>
                                <li class="ti-phone"><?php echo get_option('phone_number');?></li>
                                <li class="ti-mail"><?php echo get_option('contact_email');?></li>
                                <li class="ti-phone"><?php echo get_option('phone_number_2nd');?></li>
                                <li class="ti-mail"><?php echo get_option('contact_email_2nd');?></li>
                                <li class="ti-map-marker"><?php echo get_option('branch_address');?></li>
                            </ul>
                        </div>
                        <div class="responsive-element map">
                        <?php echo get_option('map_embed');?>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <!-- End contact -->
        </div>
    </div>
    <!-- End Blog_Details Page -->

<!-- Custom Footer --> 
<?php get_template_part('inc/template-parts/components/footer'); ?>
<!-- Footer -->
<?php get_footer(); ?>