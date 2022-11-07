<?php
    /**
     * Tornado functions and definitions
     * @link https://developer.wordpress.org/themes/basics/theme-functions/
     * @package Tornado Wordpress
     * 
     * ========> Reference by Comments <=======
     * 00 - Theme Initials
     * 01 - Setting Page
     * 02 - Custom Post Types
     * 03 - Assets Register
     * 04 - Preformance Speed Cleanup
     * 05 - Editor Register
     * 06 - Register Widgets Area
     * 07 - Admin Menu Optimizer
     * 08 - Stop Generating Image Sizes
     * 09 - Thumbnails Link
     * 10 - Get Category Name
     * 11 - Pagination
     * 12 - Track Posts Views Counter
     * 13 - Set Posts Views Counter
     * 14 - Allow Blank Searchs
     * 15 - Contact 7 Structure Edits
     * 16 - Disable Contact 7 CSS/JS
     * 17 - Contact 7 Dynamic Data Passing
     * 18 - Check Polylang
     * 19 - WP Default Features Filtering
     * 20 - Include Breadcrumb Function
     * 
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;

    //======== Debug Mode ========//
    error_reporting(E_ALL);

    //====== Theme Version =======//
    if (!defined('_S_VERSION')) {
        //=====> Replace the version number of the theme on each release.
        define( '_S_VERSION', '1.0.0' );
    }

    //==== Theme Initials ====//
    include( dirname(__FILE__) . '/inc/functions/init.php' );

    //==== Setting Page ====//
    include( dirname(__FILE__) . '/inc/functions/admin.php' );

    //==== Custom Post Types ====//
    include( dirname(__FILE__) . '/inc/functions/custom-post-types.php' );

    //==== Assets Register ====//
    include( dirname(__FILE__) . '/inc/functions/theme-assets.php' );

    //==== Preformance Speed Cleanup ====//
    include( dirname(__FILE__) . '/inc/functions/preformance.php' );
        //==== custom-metabbox ====//
        include( dirname(__FILE__) . '/inc/functions/custom-metabbox.php' );

    //==== Editor Register ====//
    //include( dirname(__FILE__) . '/src/php/gutenberg.php' );

    //===== Register Widgets Area =====//
    function tornado_widgets_init() {
        //======== Blog Sidebar Widget ==========//
        register_sidebar(
            array(
                'name'          => esc_html__('Blog Sidebar', 'tornado'),
                'id'            => 'blog-sidebar',
                'description'   => esc_html__( 'Add widgets here.', 'tornado' ),
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '',
                'after_title'   => '',
            )
        );
    }

    add_action( 'widgets_init', 'tornado_widgets_init' );

    //========= Admin Menu Optimizer ========//
    function admin_menu_optimizer(){ 
        //====> Posts
        remove_menu_page( 'edit.php' );
        //====> Dashboard
        // remove_menu_page( 'index.php' );
        //====> Media
        remove_menu_page( 'upload.php' );
        //====> Comments
        remove_menu_page( 'edit-comments.php' );
        //====> Appearance
        // remove_menu_page( 'themes.php' );
        //====> Plugins
        // remove_menu_page( 'plugins.php' );
        //====> Tools
        // remove_menu_page( 'tools.php' );
        //====> Advanced Custom Fields
        // remove_menu_page('edit.php?post_type=acf-field-group');
    }

    add_action( 'admin_menu', 'admin_menu_optimizer' );

    //==== Stop Generating Image Sizes ====//
    function add_image_insert_override($sizes){
        unset( $sizes['thumbnail']);
        unset( $sizes['medium']);
        unset( $sizes['large']);
        return $sizes;
    }

    add_filter('intermediate_image_sizes_advanced', 'add_image_insert_override' );

    /*======= Thumbnails Link =======*/
    function thumbnail_link($placholder) {
        if (has_post_thumbnail()) {
            return the_post_thumbnail_url();
        } else {
            return $placholder;
        }
    }
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

    /*======= Get Category Name =======*/
    function get_category_name() {
        foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; }
    }

    /*======= Pagination ========*/
    function pagination($loop) {
        $pages = paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $loop->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?page=%#%',
            'show_all'     => false,
            'type'         => 'array',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i></i> %1$s', __( 'Previous Page' ) ),
            'next_text'    => sprintf( '%1$s <i></i>', __( 'Next Page' ) ),
        ));

        if( is_array( $pages ) ) {
            echo '<ul class="pagination separate tx-align-center">';
            foreach ( $pages as $page ) {
                if (strpos($page, 'current') !== false) {
                    $page = str_replace("span", "a", $page);
                    echo "<li class='active'>$page</li>";
                } else {
                    echo "<li>$page</li>";
                }
            }
            echo '</ul>';
        }
    }

    //======== Track Posts Views Counter ========//
    function getPostViews($postID){
        
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if ($count=='') {
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0 ";
        }
        return $count . ' ';
    }

    //======== Set Posts Views Counter ========//
    function setPostViews($postID) {
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if ($count=='') {
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        } else {
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }

    //====== Allow Blank Searchs ========//
    function SearchFilter($query) {
        // If 's' request variable is set but empty
        if (isset($_GET['s']) && empty($_GET['s']) && $query->is_main_query()){
            $query->is_search = true;
            $query->is_home = false;
        }
        return $query;
    }

    add_filter('pre_get_posts','SearchFilter');

    //===== Contact 7 Structure Edits =====//
    add_filter('wpcf7_form_elements', function($content) {
        $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
        return $content;
    });

    add_filter('wpcf7_autop_or_not', '__return_false');

    //======== Disable Contact 7 CSS/JS ========//
    // add_filter( 'wpcf7_load_js', '__return_false' );
    add_filter( 'wpcf7_load_css', '__return_false' );

    //===== Contact 7 Dynamic Data Passing =====//
    add_filter( 'shortcode_atts_wpcf7', 'page_title_input_attribute', 10, 3 );
    function page_title_input_attribute( $out, $pairs, $atts ) {
        $my_attr = 'page-title';
        if ( isset($atts[$my_attr]) ) { $out[$my_attr] = $atts[$my_attr]; }
        return $out;
    }

    add_filter( 'shortcode_atts_wpcf7', 'subject_title_input_attribute', 10, 3 );
    function subject_title_input_attribute( $out, $pairs, $atts ) {
        $my_attr = 'subject-title';
        if ( isset($atts[$my_attr]) ) { $out[$my_attr] = $atts[$my_attr]; }
        return $out;
    }

    //========= Check Polylang ========//
    if (!function_exists('pll__')) {
        function pll__($string,$domain) {
           return __($string,$domain);
        }
    }

    //===== WP Default Features Filtering =====//
    remove_filter('the_excerpt', 'wpautop'); //=====> Excrept Return Text Only
    //=====> Remove Adding Extra Views
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

    //==== Include Breadcrumb Function ====//
    include( dirname(__FILE__) . '/inc/functions/breadcrumb.php' );
?>