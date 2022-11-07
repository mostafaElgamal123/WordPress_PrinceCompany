<?php 
    /**
     * Tornado Theme Assets
     * @package Tornado Wordpress
     * Including Tornado UI Theme Assets CSS/JS Files
     * 
     * ========> Reference by Comments <=======
     * 00 - Register CSS Files
     * 02 - Register Javascript Files
     * 03 - Gutenberg Assets
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;

    //======== Register CSS Files ========//
    function tornado_css() {
        wp_enqueue_style('tornado-icon', get_template_directory_uri() . '/dist/css/tornado-icons.css', false , NULL , 'all'); 
        //=== RTL CSS ===//
        if (is_rtl()) {
            wp_enqueue_style('tornado-rtl', get_template_directory_uri() . '/dist/css/tornado-rtl.css', false , NULL , 'all'); 
        } 
        //=== LTR CSS ===//
        else { wp_enqueue_style('tornado', get_template_directory_uri() . '/dist/css/tornado.css', false , NULL , 'all'); }
    };

    //======== Register Javascript Files ========//
    function tornado_js() {
        // Include Tornado JS File
        wp_enqueue_script('tornado_js', get_template_directory_uri() . '/dist/js/tornado.min.js', false , NULL , true);
    };

    //==== Run Assets Files By Gutenberg Hooks ====//
    add_action ('enqueue_block_assets','tornado_css');
    add_action ('enqueue_block_assets','tornado_js');

    //==== Gutenberg Assets ====//
    function gutenberg_tornado() {
        // Include Blocks JS
        wp_enqueue_script('tornado_admin_js', get_template_directory_uri() . '/dist/js/tornado.react.js' , array( 'wp-blocks', 'wp-element' ) , NULL , true);
        // Include Blocks CSS
        wp_enqueue_style('tornado_admin_css', get_template_directory_uri() . '/dist/css/gutenburg.css', false , NULL , 'all');
    }

    //==== Hook Gutenberg assets ====//
    add_action( 'enqueue_block_editor_assets', 'gutenberg_tornado' );
?>