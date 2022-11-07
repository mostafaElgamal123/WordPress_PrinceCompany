<?php
/**
 * Template Name: about-comp
 * this template for displaying 404 pages (not found)
 * @package Tornado Wordpress
 * @subpackage Developing Starter Template
 * @since Tornado UI Starter 1.0
*/
?>

<!-- Head Tag -->
<?php get_header(); ?>
<!-- Header -->
<?php get_template_part('inc/template-parts/components/header'); ?>
    <!-- End Header -->
 
     <!-- Start Breadcrumb -->
     <div class="breadcrumb primary tx-uppercase" data-src="<?php echo get_option('background_logo');?>" data-gradient="linear-gradient(rgba(0, 0, 0, .8), rgba(0, 0, 0, 0.5))">
        <div class="container">
            <a href="<?php echo the_permalink() ?>" class="page-mane"><?php the_title() ?></a>           
        </div>
    </div>
    <!-- End Breadcrumb -->


    <!-- Start About Page -->
    <div class="page-content about-page">

        <section class="container">
            <div class="row pt50 pb50">
                <!-- Start Image Responsive Element -->
                <div class="col-12 col-m-6 col-l-5 about-img">
                    <!-- Image Responsive Element -->
                    <div class="responsive-element" data-src="<?php echo esc_url(get_post_meta($post->ID, 'aw_custom_image', true)); ?>"></div>
                </div>
                <!-- End Image Responsive Element -->

                <!-- Start About Block -->
                <div class="col-12 col-m-6 col-l-7 about-block">
                    <div class="about-content">
                        <h3><?php echo get_post_meta($post->ID, 'wporg_meta_key1', true); ?></h3>
                        <p><?php echo get_post_meta($post->ID, 'wporg_meta_key2', true); ?></p>
                    </div>
                </div>
                <!-- End About Block -->

            </div>          
        </section>

        <section class="light-bg">
            <div class="container">
                <div class="row row-reverse pt50 pb50">
                    <!-- Start Image Responsive Element -->
                    <div class="col-12 col-m-6 col-l-5 about-img">
                        <!-- Image Responsive Element -->
                        <div class="responsive-element" data-src="<?php echo esc_url(get_post_meta($post->ID, 'aw_custom_image1', true)); ?>"></div>
                    </div>
                    <!-- End Image Responsive Element -->
    
                    <!-- Start About Block -->
                    <div class="col-12 col-m-6 col-l-7 about-block">
                        <div class="about-content">
                            <h3><?php echo get_post_meta($post->ID, 'wporg_meta_key4', true); ?></h3>
                            <p><?php echo get_post_meta($post->ID, 'wporg_meta_key5', true); ?></p>
                        </div>
                    </div>
                    <!-- End About Block -->
    
                </div>
                <!-- End Row -->
            </div>
        </section>

        <!-- Start certificate Slider -->
        <section class="certificate-slider container tx-align-center pt50 pb50">
            <h2 class="section-title"><?php echo get_option('testimony_keywords');?></h2>
            <div class="hero-slider">
    
            <?php get_template_part('/inc/template-parts/vendor/testimonials','about'); ?>


            </div>

        </section>
        <!-- End certificate Slider -->
    </div>
    <!-- End About Page -->



  <!-- Custom Footer --> 
  <?php get_template_part('inc/template-parts/components/footer'); ?>
<!-- Footer -->
<?php get_footer(); ?> 