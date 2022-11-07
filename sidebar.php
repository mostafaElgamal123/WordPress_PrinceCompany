<?php
    /**
     * this template for displaying Sidebars
     * @package Tornado Wordpress
    */
?>

<div class="col-12 col-m-4 col-l-3">
    <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'blog-sidebar' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
        <p><?php echo __('Sidebar is not ativated','tornado'); ?></p>
    <?php endif; ?>
</div>