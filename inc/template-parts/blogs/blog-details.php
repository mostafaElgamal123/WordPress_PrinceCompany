<?php
    /**
     * Tornado Theme - Blog Content Design Component
     * @package Tornado Wordpress
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;
    //==== Track the Views Count =====//
    setPostViews(get_the_ID());
    //===== Get Categories List Data
    $posts_categories = get_categories('taxonomy=category&post_type=surgical');
?>

<!-- Blog Details -->
<div class="primary-block" itemscope itemtype="http://schema.org/Article">
    <!-- Information Head -->
    <div class="info-head">
        <!-- Post Info -->
        <div class="info">
            <span class="ti-calendar"><?php echo __('Posted on'); the_date('d M Y'); ?></span>
            <span class="ti-comment-alt-dots"><?php comments_number( __('no comments'), __('one comment'), '% ' . __('comments') ); ?></span>
            <span class="ti-eye"><?php echo getPostViews(get_the_ID()) . __('view'); ?> </span>
        </div>
        <!-- Share -->
        <div class="social">
            <span><?php echo __('share'); ?></span>
            <a href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>" data-action="share/whatsapp/share" class="icon-btn tooltip ti-whatsapp" target="_blank" title="<?php echo pll__('مشاركة عبر الواتس اب','tornado');?>"></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="icon-btn tooltip ti-facebook" target="_blank" title="<?php echo pll__('مشاركة على الفيس بوك','tornado');?>"></a>
            <a href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>" class="icon-btn tooltip ti-twitter" target="_blank" title="<?php echo pll__('مشاركة على تويتر','tornado');?>" data-size="large"></a>
            <a href="https://www.linkedin.com/shareArticle?mini=false&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php the_excerpt(); ?>&source=<?php the_title(); ?>" class="icon-btn tooltip ti-linkedin" target="_blank" title="<?php echo pll__('مشاركة على لينكد إن','tornado');?>"></a>
        </div>
    </div>
    <!-- Blog Cover -->
    <img src="<?php the_field('custom-image');?>" alt="<?php the_title(); ?>" class="cover-image">
    <!-- Rich Content -->
    <div class="rich-content">
        <h2 itemprop="headline" class="post-headline"><?php the_title(); ?></h2>
        <!-- Page Content -->
        <?php the_content(); ?>
    </div>
    <?php get_template_part('inc/template-parts/blogs/blog','schema'); ?>
</div>