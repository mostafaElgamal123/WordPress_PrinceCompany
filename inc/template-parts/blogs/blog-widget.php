<?php
    /**
     * Tornado Theme - Blog Small Widget Block Design Component
     * @package Tornado Wordpress
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;
?>

<!-- Widget Post -->
<div class="widget-post">
    <a href="<?php the_permalink(); ?>" data-src="<?php thumbnail_link('https://via.placeholder.com/570x310'); ?>" title="<?php the_title(); ?>"></a>
    <div class="info">
        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
        <h4><?php get_category_name(); ?></h4>
    </div>
</div>
<!-- // Widget Post -->