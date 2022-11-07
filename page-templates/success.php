<?php
/**
 * this template for displaying 404 pages (not found)
 * @package Tornado Wordpress
 * @subpackage Developing Starter Template
 * @since Tornado UI Starter 1.0
 * Template Name: Success Page
*/
?>

<!-- Head Tag -->
<?php get_header(); ?>
<!-- Header -->
<?php get_template_part('inc/template-parts/custom','header'); ?>
<!-- Page Content -->
<div class="success-page">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo-success.png" alt="error-404">
    <h2>لقد تم ارسالة طلبك بنجاح</h2>
    <a href="<?php echo home_url();?>" class="btn secondary round-corner">العودة للرئيسية</a>
</div>
<!-- Custom Footer --> 
<?php get_template_part('inc/template-parts/custom','footer'); ?>
<!-- Footer -->
<?php get_footer(); ?> 