<?php
/**
 * Template Name: Contact
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
<!-- Page Content -->
<div class="page-content container">
    <?php get_template_part('inc/template-parts/components/breadcumb'); ?>
    <!-- Grid -->
    <div class="row">
        <!-- info Block -->
        <div class="info-block col-12 col-m-6 col-l-4">
            <div class="content-box">
                <i class="ti-mail"></i>
                <div class="info">
                    <h4><?php echo get_option('contact_email');?></h4>
                    <h4><?php echo get_option('contact_email_2nd');?></h4>
                </div>
            </div>
        </div>
        <!-- info Block -->
        <div class="info-block col-12 col-m-6 col-l-4">
            <div class="content-box">
                <i class="ti-phone"></i>
                <div class="info">
                    <h4><?php echo get_option('phone_number');?></h4>
                    <h4><?php echo get_option('phone_number_2nd');?></h4>
                </div>
            </div>
        </div>
        <!-- info Block -->
        <div class="info-block col-12 col-m-6 col-l-4">
            <div class="content-box">
                <i class="ti-map-marker"></i>
                <div class="info">
                    <h4><?php echo pll__(get_option('branch_address'),'tornado'); ?></h4>
                </div>
            </div>
        </div>
        <!-- Map -->
        <div class="col-12 col-m-4 col-l-5">
            <div class="responsive-element map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13918.261898157856!2d31.2282952!3d29.295084049999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1589454535007!5m2!1sar!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <!-- Form -->
        <div class="col-12 col-m-8 col-l-7">
            <div class="contact-form form-ui">
                <h2><?php echo pll__('ارسال رسالة','tornado');?></h2>
                <?php echo do_shortcode('[contact-form-7 id="7"]'); ?>
            </div>
        </div>
    </div>
    <!-- // Grid -->
</div>
<!-- Custom Footer --> 
<?php get_template_part('inc/template-parts/components/footer'); ?>
<!-- Footer -->
<?php get_footer(); ?> 