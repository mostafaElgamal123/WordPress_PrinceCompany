<?php
    /**
     * Tornado Theme - Blog Block Design Component
     * @package Tornado Wordpress
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;
?>
<!-- Blog Block -->
<div class="col-12 col-m-6 col-l-4 blog-block">
    <div class="content-box">
        <!-- Image -->
        <a href="<?php the_permalink(); ?>" class="image" data-src="<?php if(has_post_thumbnail()){the_post_thumbnail_url();} ?>"></a>
        <!-- Content -->
        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
        <p><?php echo strip_tags(get_the_excerpt()); ?></p>
        <!-- Button -->
        <a href="<?php the_permalink(); ?>" class="btn small secondary"><?php echo pll__('قراءة المزيد','tornado'); ?></a>
    </div>
</div>