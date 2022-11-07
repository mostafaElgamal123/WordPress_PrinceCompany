<?php
    /**
     * Tornado Theme Custom Breadcrumb
     * @package Tornado Wordpress
     * Creating Custom Options for Easy Theme and Design Control.
     * 
     * ========> Reference by Comments <=======
     * 00 - Breadcrumb Function
     * 01 - First Link -> Home Page
     * 02 - get Category
     * 03 - get Archive
     * 04 - get Single Post or Page
     * 05 - get Page as Posts List
     * 
    */
    //==========> Breadcrumb Function <==========//
    function the_breadcrumb($custom_class) {
        $seprator = '>';
        //==========> if Not Home Page <==========//
        if (!is_front_page()) {
            echo '<div class="breadcrumb '.$custom_class.'">';
                //==========> Create First Link <==========//
                echo '<a href="'.get_option('home').'">'.bloginfo('name').'</a>';
                //==========> get Category <==========//
                if (is_category() || is_single()) {
                    echo '<span>'.the_category('title_li=').'</span>';
                //==========> get Archive  <==========//
                } elseif (is_archive() || is_single()) {
                    if ( is_day() ) {
                        echo '<span>';
                            printf( __( '%s', 'tornado' ),get_the_date());
                        echo '</span>';
                    } elseif ( is_month() ) {
                        echo '<span>';
                            printf( __( '%s', 'tornado' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'tornado' ) ) );
                        echo '</span>';
                    } elseif ( is_year() ) {
                        echo '<span>';
                            printf( __( '%s', 'tornado' ), get_the_date( _x( 'Y', 'yearly archives date format', 'tornado' ) ) );
                        echo '</span>';
                    } else {
                        echo '<span>'.the_title().'</span>';
                    }
                }
                //==========> get Single Post or Page  <==========//
                if (is_single() || is_page()) {
                    echo '<span>'.the_title().'</span>';
                }
                //==========> get Page as Posts List  <==========//
                if (is_home()){
                    global $post;
                    $page_for_posts_id = get_option('page_for_posts');
                    if ( $page_for_posts_id ) { 
                        $post = get_page($page_for_posts_id);
                        setup_postdata($post);
                        echo '<span>'.the_title().'</span>';
                        rewind_posts();
                    }
                }
            echo '</div>';
        }
    }
?>