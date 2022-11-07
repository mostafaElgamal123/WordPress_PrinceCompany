<?php
/**
 * Template Name: Page With Container
 * this template reprsent the Custom Pages
 * @package Tornado Wordpress
 * @subpackage Developing Starter Template
 * @since Tornado UI Starter 1.0
*/
//======= Exit if Try to Access Directly =======//
defined('ABSPATH') || exit;
?>

<!-- Head Tag -->
<?php get_header(); ?>
<!-- Custom Header -->
<?php get_template_part('inc/template-parts/custom','header'); ?>
<!-- Custom Header -->
<?php get_template_part('inc/template-parts/custom','breadcumb'); ?>
<!-- Page Content -->
<div class="container page-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>
<!-- Custom Footer --> 
<?php get_template_part('inc/template-parts/custom','footer'); ?>
<!-- Footer -->
<?php get_footer(); ?> 