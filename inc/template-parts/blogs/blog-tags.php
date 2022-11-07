<?php
    /**
     * Tornado Theme - Blog Tags Links Component
     * @package Tornado Wordpress
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;
    if (the_tags()) :
?>
<!-- Tags -->
<div class="primary-block">
    <h3 class="head ti-tag"><?php echo pll__('الكلمات الدلالية'); ?></h3>
    <div class="tags clear-after">
        <?php the_tags(' ',' ',' '); ?>
    </div>
</div>
<?php endif; ?>