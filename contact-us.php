<?php
/**
 * Template Name: Contact-us
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
    <section class="breadcrumb primary tx-uppercase" data-src="<?php echo get_option('background_logo');?>"
        data-gradient="linear-gradient(rgba(0, 0, 0, .8), rgba(0, 0, 0, 0.5))">
        <div class="container">
            <a href="<?php echo the_permalink() ?>" class="page-mane"><?php the_title() ?></a>
        </div>
    </section>
    <!-- End Breadcrumb -->


    <!-- Start About Page -->
    <div class="page-content contact-page pt50 pb50">

        <!-- Start contact -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-m-8 contact-form">
                        <h2 class="section-title"> <?php echo get_option('message_keywords');?></h2>
                        
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
    <!-- End About Page -->



   
  <!-- Custom Footer --> 
<?php get_template_part('inc/template-parts/components/footer'); ?>
<!-- Footer -->
<?php get_footer(); ?> 
