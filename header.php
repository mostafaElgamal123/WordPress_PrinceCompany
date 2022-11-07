<?php
    /**
     * this template for displaying Head Tag
     * @package Tornado Wordpress
    */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required Meta Tags -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="language" content="<?php echo bloginfo('language');?>">
    <meta http-equiv="x-ua-compatible" content="IE=edge"> <!-- charset="<?php echo bloginfo('charset');?>" -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Keywords in Home Page --> 
    <?php if ( is_home() || is_front_page() ) { ?>
    <meta name="keywords" content="<?php echo pll__(get_option('meta_keywords'),'tornado'); ?>" />
    <?php }?>
    <!-- Open Graph Images Meta Tags -->
    <meta property="og:image" content="<?php echo get_option('meta_graph_cover'); ?>" />
    <meta name="twitter:image" content="<?php echo get_option('meta_graph_cover'); ?>">
    <meta name="facebook:image" content="<?php echo get_option('meta_graph_cover'); ?>"/>
    <!-- Other Meta Tags -->
    <meta name="robots" content="index, follow" />
    <meta name="copyright" content="<?php echo pll__(get_option('meta_copyrights'),'tornado'); ?>">
    <?php wp_head(); ?>
    <!-- Website Main Structure Data -->
    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "<?php bloginfo('name'); ?>",
        "alternateName": "<?php if ( !is_home() && !is_front_page() ) { echo wp_title(); } else { echo bloginfo('description'); } ?>",
        "url": "<?php echo site_url();?>",
        "contactPoint" : [{
            "@type": "ContactPoint",
            "telephone": "<?php echo get_option('phone_number');?>",
            "contactType": "customer service"
        },{
            "@type": "ContactPoint",
            "telephone": "<?php echo get_option('phone_number_2nd');?>",
            "contactType": "technical support"
        },{
            "@type": "ContactPoint",
            "telephone": "<?php echo get_option('phone_number');?>",
            "contactType": "Sales"
        }]
    }</script>
    <!-- Website Rating Data -->
    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Product",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "9.4",
            "reviewCount": "7354"
        },
        "description": "<?php if ( !is_home() && !is_front_page() ) { echo wp_title(); } else { echo bloginfo('description'); } ?>",
        "name": "<?php bloginfo('name'); ?>",
        "image": "<?php echo get_option('meta_graph_cover'); ?>"
    }</script>
    <!-- Custom Header Code -->
    <?php echo get_option('header_code'); ?>
</head>
<body>
    <!-- Custom Body Code -->
    <?php echo get_option('body_code_start'); ?>