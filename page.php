<?php
    /**
     * Template Name: Default Pages
     * this template reprsent the Custom Pages
     * @package Tornado Wordpress
    */
?>

<!-- Head Tag -->
<?php get_header(); ?>
<!-- Custom Header -->
<?php get_template_part('inc/template-parts/components/header'); ?>
<!-- Page Content -->
<div class="container page-content">
    <!-- Content -->
    <?php 
        //====== if Have Post Content =======//
        if (have_posts()) : 
            while (have_posts()) : the_post();
                //======> Blog Details <==========//
                get_template_part('inc/template-parts/blogs/blog','details');
            //====== End if Have Post Content =======//
            endwhile; 
        endif;
    ?>
    <!-- // Content -->
</div>
<!-- // Page Content -->

<!-- Custom Footer --> 
<?php get_template_part('inc/template-parts/components/footer'); ?>
<!-- Footer -->
<?php get_footer(); ?> 