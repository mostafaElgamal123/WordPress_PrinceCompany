<?php
    /**
     * Template Name: success page
     * this template for displaying 404 pages (not found)
     * @package Tornado Wordpress
    */
?>


<!-- Head Tag -->
<?php get_header(); ?>
<!-- Header -->
<?php get_template_part('inc/template-parts/components/header'); ?>
<!-- Page Content -->
    <!-- Start Breadcrumb -->
    <section class="breadcrumb primary tx-uppercase" data-src="<?php echo get_option('background_logo');?>"
        data-gradient="linear-gradient(rgba(0, 0, 0, .8), rgba(0, 0, 0, 0.5))">
        <div class="container">
            <a href="<?php the_permalink() ?>" class="page-mane"><?php the_title() ?></a>
        </div>
    </section>
    <!-- End Breadcrumb -->


    <!-- Start success Page -->
    <div class="page-content success-page">
        <img src="img/logo-2.png" alt="">
        <p>لقد تم ارسال طلبك بنجاح</p>
        <a href="<?php echo site_url() ?>" class="btn primary round-corner">العودة للرئيسية</a>
    </div>
    <!-- End success Page -->
<!-- Custom Footer --> 
<?php get_template_part('inc/template-parts/components/footer'); ?>
<!-- Footer -->
<?php get_footer(); ?> 