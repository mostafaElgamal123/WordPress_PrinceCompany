<?php
    /**
     * Tornado Custom Post Types
     * @package Tornado Wordpress
     * Registering Custom Posts Types or Custom Content Modules.
     * 
     * ========> Reference by Comments <=======
     * 01 - Blog Post Type
     * 02 - Slider Post Type
     * 02 - Services Post Type
     * 03 - Projects Post Type
     * 04 - Portfolio Post Type
     * 05 - Products Post Type
     * 06 - Testimonials Post Type
     * 07 - Partners Post Type
     * 08 - F.A.Q Post Type
     * 09 - Multimedia Post Type
     * 10 - Custom Taxonomy Categories
    */
    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;

    //======> Blog Post Type <======//
    function blog_cpt() {
        //===== CPT Options ====//
        $args = array(
            'label'         => __('Blog', 'tornado'),
            'name'          => 'post',
            'singular_name' => 'post',
            'menu_position' => 3,
            'menu_icon'     => 'dashicons-format-aside',
            'public'        => true,
            'has_archive'   => true,
            'show_in_rest'  => true,
            'supports'      => array( 'title', 'editor' , 'excerpt', 'thumbnail', 'revisions'),
            'taxonomies'    => array('tag','category'),
        );

        register_post_type('post', $args);
    }
    add_action( 'init', 'blog_cpt' );
    //======> Slider Post Type <======//
    function slider_cpt() {
        //===== CPT Options ====//
        $args = array(
            'label'         => __('Main Slider', 'tornado'),
            'name'          => 'main-slider',
            'singular_name' => 'main-slider',
            'menu_position' => 3,
            'menu_icon'     => 'dashicons-align-wide',
            'public'        => true,
            'has_archive'   => true,
            'show_in_rest'  => true,
            'supports'      => array( 'title', 'editor' , 'excerpt', 'thumbnail', 'revisions'),
        );

        register_post_type('main-slider', $args);
    }
    add_action( 'init', 'slider_cpt' );
    //======> Services Post Type <======//
    function services_cpt() {
        //===== CPT Options ====//
        $args = array(
            'label'         => __('Services', 'tornado'),
            'name'          => 'services',
            'singular_name' => 'services',
            'menu_position' => 3,
            'menu_icon'     => 'dashicons-superhero-alt',
            'public'        => true,
            'has_archive'   => true,
            'show_in_rest'  => true,
            'supports'      => array( 'title', 'editor' , 'excerpt', 'thumbnail', 'revisions'),
            'taxonomies'    => array('categories'),
        );

        register_post_type('services', $args);
    }
    add_action( 'init', 'services_cpt' );
    //======> Projects Post Type <======//
    function projects_cpt() {
        //===== CPT Options ====//
        $args = array(
            'label'         => __('Projects', 'tornado'),
            'name'          => 'projects',
            'singular_name' => 'projects',
            'menu_position' => 3,
            'menu_icon'     => 'dashicons-book-alt',
            'public'        => true,
            'has_archive'   => true,
            'show_in_rest'  => true,
            'supports'      => array( 'title', 'editor' , 'excerpt', 'thumbnail', 'revisions'),
            'taxonomies'    => array('categories'),
        );

        register_post_type('projects', $args);
    }
    
    
    //======> Portfolio Post Type <======//
    function portfolio_cpt() {
        //===== CPT Options ====//
        $args = array(
            'label'         => __('Portfolio', 'tornado'),
            'name'          => 'portfolio',
            'singular_name' => 'portfolio',
            'menu_position' => 3,
            'menu_icon'     => 'dashicons-awards',
            'public'        => true,
            'has_archive'   => true,
            'show_in_rest'  => true,
            'supports'      => array( 'title', 'editor' , 'excerpt', 'thumbnail', 'revisions'),
            'taxonomies'    => array('categories'),
        );

        register_post_type('portfolio', $args);
    }

    //======> Products Post Type <======//
    function products_cpt() {
        //===== CPT Options ====//
        $args = array(
            'label'         => __('Products', 'tornado'),
            'name'          => 'products',
            'singular_name' => 'products',
            'menu_position' => 3,
            'menu_icon'     => 'dashicons-cart',
            'public'        => true,
            'has_archive'   => true,
            'show_in_rest'  => true,
            'supports'      => array( 'title', 'editor' , 'excerpt', 'thumbnail', 'revisions'),
            'taxonomies'    => array('categories'),
        );

        register_post_type('products', $args);
    }

    //======> Testimonials Post Type <======//
    function testimonials_cpt() {
        //===== CPT Options ====//
        $args = array(
            'label'         => __('Testimonials', 'tornado'),
            'name'          => 'testimonials',
            'singular_name' => 'testimonials',
            'menu_position' => 3,
            'menu_icon'     => 'dashicons-money',
            'public'        => true,
            'has_archive'   => true,
            'show_in_rest'  => true,
            'supports'      => array( 'title', 'editor' , 'excerpt', 'thumbnail', 'revisions'),
        );

        register_post_type('testimonials', $args);
    }
    add_action( 'init', 'testimonials_cpt' );
    //======> Partners Post Type <======//
    function partners_cpt() {
        //===== CPT Options ====//
        $args = array(
            'label'         => __('Partners', 'tornado'),
            'name'          => 'partners',
            'singular_name' => 'partners',
            'menu_position' => 3,
            'menu_icon'     => 'dashicons-businessman',
            'public'        => true,
            'has_archive'   => true,
            'show_in_rest'  => true,
            'supports'      => array( 'title', 'editor' , 'excerpt', 'thumbnail', 'revisions'),
        );

        register_post_type('partners', $args);
    }

    //======> F.A.Q Post Type <======//
    function faq_cpt() {
        //===== CPT Options ====//
        $args = array(
            'label'         => __('F.A.Q', 'tornado'),
            'name'          => 'faq',
            'singular_name' => 'faq',
            'menu_position' => 3,
            'menu_icon'     => 'dashicons-lightbulb',
            'public'        => true,
            'has_archive'   => true,
            'show_in_rest'  => true,
            'supports'      => array( 'title', 'editor' , 'excerpt', 'thumbnail', 'revisions'),
            'taxonomies'    => array('categories'),
        );

        register_post_type('faq', $args);
    }

    //======> Multimedia Post Type <======//
    function multimedia_cpt() {
        //===== CPT Options ====//
        $args = array(
            'label'         => __('Multimedia', 'tornado'),
            'name'          => 'multimedia',
            'singular_name' => 'multimedia',
            'menu_position' => 3,
            'menu_icon'     => 'dashicons-cover-image',
            'public'        => true,
            'has_archive'   => true,
            'show_in_rest'  => true,
            'supports'      => array( 'title', 'editor' , 'excerpt', 'thumbnail', 'revisions'),
            'taxonomies'    => array('categories'),
        );

        register_post_type('multimedia', $args);
    }

    //======> Hooking Custom Post Types <======//
    if (get_option('blog_type') == 1)         : add_action( 'init', 'blog_cpt' ); endif;         //===> Blog Post Type
    if (get_option('slider_type') == 1)       : add_action( 'init', 'slider_cpt' ); endif;       //===> Services Post Type
    if (get_option('services_type') == 1)     : add_action( 'init', 'services_cpt' ); endif;     //===> Services Post Type
    if (get_option('projects_type') == 1)     : add_action( 'init', 'projects_cpt' ); endif;     //===> Projects Post Type
    if (get_option('portfolio_type') == 1)    : add_action( 'init', 'portfolio_cpt' ); endif;    //===> Portfolio Post Type
    if (get_option('products_type') == 1)     : add_action( 'init', 'products_cpt' ); endif;     //===> Products Post Type
    if (get_option('testimonials_type') == 1) : add_action( 'init', 'testimonials_cpt' ); endif; //===> Testimonials Post Type
    if (get_option('partners_type') == 1)     : add_action( 'init', 'partners_cpt' ); endif;     //===> Partners Post Type
    if (get_option('faq_type') == 1)          : add_action( 'init', 'faq_cpt' ); endif;          //===> F.A.Q Post Type
    if (get_option('multimedia_type') == 1)   : add_action( 'init', 'multimedia_cpt' ); endif;   //===> Multimedia Post Type

    //======> Custom Categories Taxonomy <======//
	function categories_tax() {
		//===== Taxonomies Options ====//
		$args = array(
			'label'             => __('Categories', 'tornado'),
            'rewrite'           => array('slug' => 'categories' ),
            'public'            => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'query_var'         => true,
		);

		register_taxonomy ('categories', array('services','projects', 'portfolio', 'products', 'testimonials', 'partners', 'faq', 'multimedia'), $args );
    }

	//==== Hooking The Custom Taxonomies ====//
    add_action( 'init', 'categories_tax', 0 );

    function categorie_services_tax() {
		//===== Taxonomies Options ====//
		$args = array(
			'label'             => __('Categories-services', 'tornado'),
            'rewrite'           => array('slug' => 'Categories-services' ),
            'public'            => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'query_var'         => true,
		);

		register_taxonomy ('Categories-services', array( 'services'), $args );
    }

	//==== Hooking The Custom Taxonomies ====//
	add_action( 'init', 'categorie_services_tax', 0 );
    


?>