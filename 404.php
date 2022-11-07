<?php
    /**
     * Template Name: Error 404
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
            <a href="<?php the_permalink() ?>" class="page-mane">  <?php the_title() ?> </a>
        </div>
    </section>
    <!-- End Breadcrumb -->


    <!-- Start Error Page -->
    <div class="page-content error-page">
        <p>404</p>
        <p>الصفحة المطلوبة غير موجودة</p>
        <a href="<?php echo site_url() ?>" class="btn primary round-corner">العودة للرئيسية</a>
    </div>
    <!-- End Error Page -->
<!-- Custom Footer --> 
<?php get_template_part('inc/template-parts/components/footer'); ?>
<!-- Footer -->
<?php get_footer(); ?> 