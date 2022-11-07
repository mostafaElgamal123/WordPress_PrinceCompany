<?php
    /**
     * Template Name: Home Page
     * this template reprsent the Home Page
     * @package Tornado Wordpress
    */
?>

<!-- Head Tag -->
<?php get_header(); $pos=$post->ID ?>
<!-- Header -->
<?php get_template_part('inc/template-parts/components/header1'); ?>
<!-- H1 for SEO -->
<h1 class="hidden">
    <?php bloginfo('name'); ?> | 
    <?php if ( !is_home() && !is_front_page() ) { echo wp_title(); } else { echo bloginfo('description'); } ?>
</h1>

 <!-- Start Main Slider -->
 <section class="main-slider">
        <div class="hero-slider">
        <?php get_template_part('/inc/template-parts/vendor/main','slider'); ?>
        </div>
    </section>
    <!-- End Main Slider -->

    <!-- Start About -->
    <section class="about tx-align-center pt50 pb50">
        <div class="about-content container">
            <h2 class="section-title"><?php echo get_post_meta($pos, 'home_meta_key', true); ?></h2>
            <p>
            <?php echo get_post_meta($pos, 'home_meta_content', true); ?>
            </p>
        </div>
    </section>
    <!-- End About -->

    <!-- Start Services -->
    <section class="services light-bg tx-align-center pt50 pb30">
        <div class="container">
            <h2 class="section-title"> <?php echo get_option('services_keywords');?></h2>
            <div class="row">
                <!-- Start  COL -->
                <?php get_template_part('/inc/template-parts/vendor/services-post','home'); ?>
                <!-- End  COL -->
            </div>
        </div>
    </section>
    <!-- End Services -->

    <!-- Start Blog -->
    <section class="blog pt50 pb30">
        <div class="container">
            <h2 class="section-title tx-align-center"> <?php echo get_option('blog_keywords');?></h2>
            <div class="row">
                <!-- Start  COL -->
                <?php get_template_part('/inc/template-parts/vendor/blog-post','home'); ?>
                <!-- End  COL -->
            </div>
        </div>
    </section>
    <!-- End Blog -->

    <!-- Start contact -->
    <section class="contact light-bg pt50 pb50">
                <div class="container small-width">
                    <div class="row">
                    <div class="col-12 col-m-8 contact-form">
                        <h2 class="section-title">  <?php echo get_option('message_keywords');?></h2>
                        
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

<!-- Custom Footer --> 
<?php get_template_part('inc/template-parts/components/footer'); ?>
<!-- Footer -->
<?php get_footer(); ?> 