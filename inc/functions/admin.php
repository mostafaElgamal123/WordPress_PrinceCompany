<?php
    /**
     * Tornado Theme Custom Options Pages
     * @package Tornado Wordpress
     * Creating Custom Options for Easy Theme and Design Control.
     * 
     * ========> Reference by Comments <=======
     * 00 - Pages Render Functions Files
     * 01 - Theme Options
     * 02 - Theme Menus Options
     * 03 - Admin CSS Include
     * 04 - Admin JS Include
     * 05 - Design Options
     * 
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;
    
    //========> Pages Render Functions Files <=======//
    include( dirname(__FILE__) . '/admin/theme-options.php' );

    function tornado_options_pages () {
        //========> Theme Options <=======//
        add_menu_page(
            //===> Page Title
            __('Theme Options', 'tornado'),
            //===> Menu Item
            __('Theme Options', 'tornado'),
            //===> Capability
            'manage_options',
            //===> Menu Slug
            'theme-options',
            //===> Page Render Function
            'theme_options_render',
            //===> Menu Icon Path
            get_template_directory_uri() . '/inc/functions/admin/img/menu-icon.png',
            //===> Menu Position
            59
        );

        //========> Theme Menus Options <=======//
        add_submenu_page (
            'theme-options',
            __('Menus Settings', 'tornado' ),
            __('Menus Settings', 'tornado' ),
            'manage_options',
            'nav-menus.php',
            'dashicons-menu',
            1
        );
    }

    add_action( 'admin_menu', 'tornado_options_pages');

    //========> Admin CSS Include <=======//
    function tornado_admin_css() {
        //=== Tornado Icons CSS ===//
        wp_enqueue_style('tornado-icon', get_template_directory_uri() . '/dist/css/tornado-icons.css', false , NULL , 'all'); 
        //=== Admin CSS ===//
        wp_enqueue_style('tornado-admin-css', get_template_directory_uri() . '/dist/css/theme-options.css', false , NULL , 'all');
        wp_enqueue_style('admin-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap', false , NULL , 'all');
        //=== Code Mirror CSS ===//
        wp_enqueue_style('codemirror-style', 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.35.0/codemirror.css', false , NULL , 'all');
        wp_enqueue_style('codemirror-theme', 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.54.0/theme/xq-light.min.css', false , NULL , 'all');
        //==== Slim Select =====//
        wp_enqueue_style('slimselect-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.26.0/slimselect.min.css', false , NULL , 'all');
        
    };

    //======== Register Javascript Files ========//
    function tornado_admin_js() {
        //=====> Include Media Uploader JS <=====//
        wp_enqueue_media();
        wp_enqueue_script('media-uploader');
        //=== Color Picker ===//
        wp_enqueue_script('vanilla-picker', 'https://unpkg.com/vanilla-picker@2', false , NULL , true);
    };

    //==== Run Assets Files By Gutenberg Hooks ====//
    add_action ('admin_enqueue_scripts','tornado_admin_css');
    add_action ('admin_enqueue_scripts','tornado_admin_js');
?>

<?php
    //==== Design Options ====//
    function design_options() {
        if (get_option('colors_palette') == 1 || get_option('google_fonts') == 1) :
?>
    <script>
        var tornadoCheck = setInterval(() => {
            if (window.Tornado) {
                //====> Options Objects <====//
                var designColors = {},
                    designFonts  = {};
                //====> Colors <====//
                <?php if (get_option('colors_palette') == 1) : ?>
                    designColors = {
                        //====> Body Background <====//
                        background : '<?php echo get_option('body_background'); ?>',
                        //====> Primary Color <====//
                        primary        : '<?php echo get_option('primary_color'); ?>',
                        primaryHover   : '<?php echo get_option('primary_hover'); ?>',
                        primaryReverse : '<?php echo get_option('primary_reverse'); ?>',
                        //====> Secondary Color <====//
                        secondary        : '<?php echo get_option('secondary_color'); ?>',
                        secondaryHover   : '<?php echo get_option('secondary_hover'); ?>',
                        secondaryReverse : '<?php echo get_option('secondary_reverse'); ?>',
                        //====> Typography Colors <====//
                        headlines    : '<?php echo get_option('headlines_color'); ?>',
                        typography   : '<?php echo get_option('typography_color'); ?>',
                    }
                <?php endif; ?>
                //====> Font Options <====//
                <?php if (get_option('google_fonts') == 1) : ?>
                    designFonts : {
                        //===> Fonts Families <===//
                        primary   : `'<?php echo get_option('primary_font'); ?>'`, //===> Headlines Font Family
                        secondary : `'<?php echo get_option('secondary_font'); ?>'`, //===> Normal Text Font Family
                        include   : [//===> Fonts CSS Urls
                            'https://fonts.googleapis.com/css?family=<?php echo get_option('primary_font'); ?>:wght@<?php echo get_option('normal_weight'); ?>,<?php echo get_option('medium_weight'); ?>,<?php echo get_option('strong_weight'); ?>',
                            'https://fonts.googleapis.com/css?family=<?php echo get_option('secondary_font'); ?>:wght@<?php echo get_option('normal_weight'); ?>,<?php echo get_option('medium_weight'); ?>,<?php echo get_option('strong_weight'); ?>'
                        ],
                        //===> Font Sizes <===//
                        size       : '<?php echo get_option('base_l_size'); ?>',  //===> Font Size in Large Screens
                        sizeMedium : '<?php echo get_option('base_m_size'); ?>',  //===> Font Size in Medium Screens
                        sizeSmall  : '<?php echo get_option('base_s_size'); ?>',  //===> Font Size in Small Screens
                        lineHeight : '<?php echo get_option('base_line_height'); ?>', //===> Default Line Height
                        //===> Font Weights <===//
                        normalWeight : '<?php echo get_option('normal_weight'); ?>', //===> Normal Font Weight
                        mediumWeight : '<?php echo get_option('medium_weight'); ?>', //===> Medium Font Weight
                        strongWeight : '<?php echo get_option('strong_weight'); ?>', //===> Bold Font Weight
                         
                        //===> RTL Fonts <===//
                        rtl : {
                            //===> Fonts Families <===//
                            primary   : `'<?php echo get_option('primary_font_rtl'); ?>'`, //===> Headlines Font Family
                            secondary : `'<?php echo get_option('secondary_font_rtl'); ?>'`, //===> Normal Text Font Family
                            include   : [//===> Fonts CSS Urls
                                'https://fonts.googleapis.com/css?family=<?php echo get_option('primary_font_rtl'); ?>:wght@<?php echo get_option('normal_weight'); ?>,<?php echo get_option('medium_weight'); ?>,<?php echo get_option('strong_weight'); ?>',
                                'https://fonts.googleapis.com/css?family=<?php echo get_option('secondary_font_rtl'); ?>:wght@<?php echo get_option('normal_weight'); ?>,<?php echo get_option('medium_weight'); ?>,<?php echo get_option('strong_weight'); ?>'
                            ],
                        }
                    },
                <?php endif; ?>
                //====> Set Design Options <====//
                window.Tornado.design({
                    colors : designColors,
                    font   : designFonts,
                });
                //====> Clear Time Loop <====//
                clearInterval(tornadoCheck);
            }
        }, 500);
    </script>
<?php
    endif; }
    add_action('wp_footer', 'design_options', 20);
?>