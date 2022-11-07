<?php
    /**
     * Tornado Theme Preformance Hacks
     * @package Tornado Wordpress
     * Disable Useless Wordpress Default Files and Features 
     * 
     * ========> Reference by Comments <=======
     * 00 - Clean JS Scripts Tags Attribute
     * 01 - Clean Default Head Tag Files for Preformance and Security
     * 02 - Remove WP Embed Scripts
     * 03 - Remove Gutenberg Default CSS
     * 04 - Removing Rich Content inline Styles
     * 05 - Disable asset versioning
     * 06 - Remove Admin Bar Inline CSS
     * 07 - Remove jQuery Migrate
     * 
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;

    //======== Clean JS Scripts Tags Attribute ======//
    add_filter('style_loader_tag', 'remove_type_attr', 10, 2);
    add_filter('script_loader_tag', 'remove_type_attr', 10, 2);

    function remove_type_attr($tag, $handle) {
        return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
    }

    //======== Clean Default Head Tag Files for Preformance and Security ========//
    function clean_head() {
        //====> Removing (RSD) Link [Remove it if integrate services like flicker exists]
        remove_action('wp_head', 'rsd_link');
        //====> Removing "Windows Live Writer" link for Editing Shortcut
        remove_action('wp_head', 'wlwmanifest_link');
        //====> Remove "WordPress version" tag
        remove_action('wp_head', 'wp_generator');
        //====> hide WordPress version from RSS
        add_filter('the_generator', '__return_false');
        //====> Remove RSS Feed for Comments
        add_filter('feed_links_show_comments_feed', '__return_false');
        //====> Remove Gallery Inline Styling
        add_filter( 'use_default_gallery_style', '__return_false' );
        //====== Remove Emoji Scripts and Styles ======//
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        remove_action( 'admin_print_styles', 'print_emoji_styles' );	
        remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
        remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
        remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
        //====> Remove from TinyMCE
        add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
        //====== Remove WP Embed Scripts ======//
        remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
    }

    if(!is_admin()) {
        add_action( 'init', 'clean_head' );
    }
    
    //====== Remove WP Embed Scripts ======// 
    // function deregister_wp_embed() {wp_deregister_script( 'wp-embed' );}
    // add_action( 'wp_footer','deregister_wp_embed');

    //====== Remove Gutenberg Default CSS ======// 
    function wps_deregister_blocks() { wp_dequeue_style( 'wp-block-library' ); }
    add_action( 'wp_print_styles', 'wps_deregister_blocks', 100 );

    //====== Remove Comments Default CSS ======//
    function remove_recent_comments_style() {
        global $wp_widget_factory;
        remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
    }
    add_action('widgets_init', 'remove_recent_comments_style');

    //====== Removing Rich Content inline Styles ======//
    add_filter('the_content', function( $content ){
        $content = preg_replace('/ style=("|\')(.*?)("|\')/','',$content);
        return $content;
    }, 20);
    
    //====== Disable asset versioning ======//
    function remove_query_strings() {
        if(!is_admin()) {
            add_filter('script_loader_src', 'remove_query_strings_split', 15);
            add_filter('style_loader_src', 'remove_query_strings_split', 15);
        }
     }
     
    function remove_query_strings_split($src){
        $output = preg_split("/(&ver|\?ver)/", $src);
        return $output[0];
     }

    add_action('init', 'remove_query_strings');

    //======= Remove Admin Bar Inline CSS =======//
    add_action('get_header', 'remove_admin_login_header');
    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }

    //======= Remove jQuery Migrate =======//
    function remove_jquery_migrate( $scripts ) {
        if (!is_admin() && isset($scripts->registered['jquery'])) {
             $script = $scripts->registered['jquery'];
            if ($script->deps) { 
                // Check whether the script has any dependencies
                $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
            }
        }
    }

    add_action( 'wp_default_scripts', 'remove_jquery_migrate' );
?>