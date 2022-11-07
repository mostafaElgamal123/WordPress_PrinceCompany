<?php
    /**
     * Tornado Theme - Blog Categories List Design Component
     * @package Tornado Wordpress
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;
?>
<!-- Widget Block -->
<div class="widget-block">
    <h3 class="head ti-filing"><?php echo pll__('Blog Categories', 'tornado') ?></h3>
    <ul class="links">
        <?php foreach ($categories as $category) : ?>
        <li><a href="<?php echo get_category_link($category->cat_ID); ?>" class="ti-folder-bookmark" title="<?php echo $category->name; ?>"><?php echo $category->name; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
<!-- // Widget Block -->