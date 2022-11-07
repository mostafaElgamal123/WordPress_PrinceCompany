<?php
    /**
     * Tornado Theme - Lateast Blogs Loop Component for Widgets
     * @package Tornado Wordpress
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;
    /*==== Grap Query Data =====*/
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
    );
    $the_query = new WP_Query( $args );
    //==== Start Query =====//
    if ( $the_query->have_posts() ) : 
        //==== Grid Element ====//
        echo '<div class="widget-block">
        <!-- Title -->
        <h3 class="head ti-folder">' . pll__('Lateast Blogs', 'tornado') . '</h3>';
        //==== Loop Start ====//
        while ( $the_query->have_posts() ) : $the_query->the_post(); 
            //=== Get the Design Part ===//
            get_template_part('inc/template-parts/blogs/blog','widget');
        //==== End Loop =====//
        endwhile;
        //==== Grid Element Close ====//
        echo '</div>';
        wp_reset_postdata();
    //==== End Query =====//
    endif; 
?>