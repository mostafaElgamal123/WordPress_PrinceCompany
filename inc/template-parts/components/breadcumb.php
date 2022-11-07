<?php
    /**
     * Tornado Theme - Breadcrumb Component for Yoast SEO
     * @package Tornado Wordpress
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;
?>

<!-- H1 for SEO -->
<h1 class="hidden">
    <?php bloginfo('name'); ?> | 
    <?php if ( !is_home() && !is_front_page() ) { echo wp_title(); } else { echo bloginfo('description'); } ?>
</h1>

<!-- Breadcrumb -->
<?php the_breadcrumb(); ?>
