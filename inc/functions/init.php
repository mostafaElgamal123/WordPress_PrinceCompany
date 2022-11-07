<?php
    /**
     * Tornado Theme Initials
     * @package Tornado Wordpress
     * Setup theme defaults and registers support for various WordPress features.
     * 
     * Note that tornado_setup function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     * 
     * ========> Reference by Comments <=======
     * 00 - Translation Support
     * 01 - Register Menu's Locations
     * 02 - Enable Page Title.
     * 03 - Enable Post Thumbnails Image.
     * 04 - Enable RSS feed links
     * 05 - Support HTML5 Syntax
     * 06 - Support selective refresh for widgets
     * 07 - Support Gutenberg Wide Images
     * 08 - Jetpack Infinite Scroll.
     * 09 - Jetpack Infinite Scroll Custom render.
     * 10 - Jetpack Responsive Videos.
     * 11 - Jetpack Content Options.
     * 12 - Declear WooCommerce Support
     * 14 - Default Theme Options
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;

    if (!function_exists('tornado_setup') ) :
        function tornado_setup() {
            //====== Translation Support ======//
            load_theme_textdomain( 'tornado', get_template_directory() . '/languages' );

            //======== Register Menu's Locations ========//
            register_nav_menus( array(
                'main-menu' => 'Header Main Menu',
                'sidebar-menu' => 'Sidebar Menu',
            ));
            register_nav_menus( array(
                'Site-Map' => 'Site Map footer',
            ));
            register_nav_menus( array(
                'Links-site' => 'Links site footer',
               
            ));
            register_nav_menus( array(
                'language' => 'languages',
               
            ));

            //=====> Enable Page Title. <=====//
            add_theme_support('title-tag'); 

            //=====> Enable Post Thumbnails Image. <=====//
            add_theme_support( 'post-thumbnails' );

            //=====> Enable RSS feed links <=====//
            add_theme_support( 'automatic-feed-links' );

            //=====> Support HTML5 Syntax <=====//
            add_theme_support('html5', array(
                'comment-list',
                'comment-form',
                'search-form',
                'gallery',
                'caption',
                'search-form',
                'style',
                'script',
            ));

            //=====> Support selective refresh for widgets <=====//
            add_theme_support( 'customize-selective-refresh-widgets' );

            //=====> Support Gutenberg Wide Images <=====//
            add_theme_support('align-wide');

            //======> Jetpack Infinite Scroll. <=====//
            add_theme_support('infinite-scroll',
                array(
                    'container' => 'main',
                    'render'    => 'tornado_infinite_scroll_render',
                    'footer'    => 'page',
                )
            );

            //======> Jetpack Infinite Scroll Custom render <=====//
            function tornado_infinite_scroll_render() {
                while ( have_posts() ) {
                    the_post();
                    get_template_part( 'template-parts/blogs/blog', 'block' );
                }
            }

            //======> Jetpack Responsive Videos. <=====//
            add_theme_support( 'jetpack-responsive-videos' );

            //======> Jetpack Content Options. <=====//
            add_theme_support('jetpack-content-options',
                array(
                    'post-details' => array(
                        'stylesheet' => 'tornado-style',
                        'date'       => '.post-date',
                        'categories' => '.post-cats',
                        'tags'       => '.post-tags',
                        'author'     => '.post-author',
                        'comment'    => '.comments-link',
                    ),

                    'featured-images' => array(
                        'archive' => true,
                        'post'    => true,
                        'page'    => true,
                    ),
                )
            );

            //=====> Declear WooCommerce Support <=====//
            // add_theme_support('woocommerce');
        }
    endif;

    add_action( 'after_setup_theme', 'tornado_setup' );

    //=====> Default Theme Options <=====//
    if (!function_exists('tornado_default') ) :
        function tornado_default() {
            //=====> Default Meta Options <=====//
            if(!get_option('meta_keywords')) : update_option('meta_keywords', 'كلمة , مفتاحية , تجريبية , Tornado UI'); endif;
            if(!get_option('meta_graph_cover')) : update_option('meta_graph_cover', get_template_directory_uri() . '/screenshot.png'); endif;
            if(!get_option('meta_copyrights')) : update_option('meta_copyrights', 'جميع الحقوق محفوظة لــ Tornado UI'); endif;

            //=====> Default Logo <=====//
            if(!get_option('theme_logo')) : update_option('theme_logo', get_template_directory_uri() . '/dist/img/logo.png' ); endif;
            if(!get_option('theme_logo_white')) : update_option('theme_logo_white', get_template_directory_uri() . '/dist/img/logo-white.png' ); endif;

            //=====> Default Colors Options <=====//
            if(!get_option('body_background')) { update_option('body_background', '#f4f6f9'); }
            if(!get_option('primary_color')) { update_option('primary_color', '#4166d6'); }
            if(!get_option('primary_hover')) { update_option('primary_hover', '#2e4dc9'); }
            if(!get_option('primary_reverse')) { update_option('primary_reverse', '#FFFFFF'); }
            if(!get_option('secondary_color')) { update_option('secondary_color', '#dd9a35'); }
            if(!get_option('secondary_hover')) { update_option('secondary_hover', '#e99415'); }
            if(!get_option('secondary_reverse')) { update_option('secondary_reverse', '#1c1c1c'); }
            if(!get_option('headlines_color')) { update_option('headlines_color', '#1c1c1c'); }
            if(!get_option('typography_color')) { update_option('typography_color', '#555555'); }
        }
    endif;

    add_action( 'after_setup_theme', 'tornado_default' );
?>