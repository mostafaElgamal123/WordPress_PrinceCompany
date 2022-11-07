<?php
    /**
     * Template Name: Blog
     * this template for displaying category, tag, taxonomy, author, or date
     * @package Tornado Wordpress
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
    <div class="page-content services-page pt50 pb30">
        <!-- Start Services -->
        <section class="services tx-align-center ">
            <div class="container">
            <div class="navigation-menu" data-id="main-menu">
                <ul>
                <?php get_template_part('/inc/template-parts/vendor/services','category'); ?>
                </ul>
            </div>
                <div class="row">
                    <!-- Start  COL -->
                    <?php get_template_part('/inc/template-parts/vendor/services','post'); ?>
                    <!-- End  COL -->
                </div>
                <!-- Pagination -->
                <?php
             $paged=get_query_var('paged')?get_query_var('paged'):1;
             $args=array(
                 'paged' => $paged,
                 'post_type'=>'services',
             );
             
             $loop=new WP_Query( $args );
                if (function_exists("pagination")) { pagination($loop); };
                wp_reset_postdata();
            
            ?>
            </div>
        </section>
        <!-- End Services -->

    </div>
    <!-- End About Page -->



   
  <!-- Custom Footer --> 
  <?php get_template_part('inc/template-parts/components/footer'); ?>
<!-- Footer -->
<?php get_footer(); ?> 
