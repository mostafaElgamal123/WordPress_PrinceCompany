<?php
    /**
     * Tornado Theme - Options Tab
     * @package Tornado Wordpress
    */
    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;
?>

<!-- Page Head -->
<div class="page-head">
    <h1><?php echo __('General Settings','tornado'); ?></h1>
</div>

<!-- Panel Block -->
<div class="options-panel">
    <!-- Panel Title -->
    <h2 class="panel-title"><?php echo __('Meta Options','tornado'); ?></h2>
    <!-- Grid -->
    <div class="row no-gutter">
        <!-- Control Item -->
        <div class="control-item col-12 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="meta_keywords"><?php echo __('SEO Keywords','tornado'); ?></label>
                <input type="text" name="meta_keywords" placeholder="<?php echo pll__('SEO Keywords','tornado'); ?>" value="<?php echo pll__(get_option('meta_keywords'),'tornado'); ?>">
            </div>
            <div class="content-box">
                <label for="services_keywords"><?php echo __('SEO services','tornado'); ?></label>
                <input type="text" name="services_keywords" placeholder="<?php echo pll__('SEO services','tornado'); ?>" value="<?php echo pll__(get_option('services_keywords'),'tornado'); ?>">
            </div>
            <div class="content-box">
                <label for="blog_keywords"><?php echo __('SEO blog','tornado'); ?></label>
                <input type="text" name="blog_keywords" placeholder="<?php echo pll__('SEO blog','tornado'); ?>" value="<?php echo pll__(get_option('blog_keywords'),'tornado'); ?>">
            </div>
            <div class="content-box">
                <label for="testimony_keywords"><?php echo __('SEO testimony','tornado'); ?></label>
                <input type="text" name="testimony_keywords" placeholder="<?php echo pll__('SEO testimony','tornado'); ?>" value="<?php echo pll__(get_option('testimony_keywords'),'tornado'); ?>">
            </div>
            <div class="content-box">
                <label for="message_keywords"><?php echo __('Send us a message','tornado'); ?></label>
                <input type="text" name="message_keywords" placeholder="<?php echo pll__('Send us a message','tornado'); ?>" value="<?php echo pll__(get_option('message_keywords'),'tornado'); ?>">
            </div>
            <!-- Another Input -->
            <div class="content-box">
                <label for="meta_copyrights"><?php echo __('Footer Copyrights','tornado'); ?></label>
                <input type="text" name="meta_copyrights" placeholder="<?php echo pll__('Footer Copyrights','tornado'); ?>" value="<?php echo pll__(get_option('meta_copyrights'),'tornado'); ?>">
            </div>
             <!-- Another Input -->
             <div class="content-box">
                <label for="meta_title_footer"><?php echo __('about us','tornado'); ?></label>
                <input type="text" name="meta_title_footer" placeholder="<?php echo pll__('title','tornado'); ?>" value="<?php echo pll__(get_option('meta_title_footer'),'tornado'); ?>">
                <label for="meta_content_footer"><?php echo __('content','tornado'); ?></label>
                <textarea name="meta_content_footer" placeholder="<?php echo pll__('content','tornado'); ?>" value="<?php echo pll__(get_option('meta_content_footer'),'tornado'); ?>"><?php echo pll__(get_option('meta_content_footer'),'tornado'); ?></textarea>
            
            </div>
        </div>
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box align-between align-center-y">
                <label for="background_logo"><?php echo __('background Logo','tornado'); ?></label>
                <!-- Image Uploader -->  
                <div class="media-uploader-control iconic">
                    <?php 
                        if (!get_option('background_logo')) {
                            $background_value = 'https://via.placeholder.com/320x50?text=PLACEHOLDER';
                        } else {
                            $background_value = get_option('background_logo');
                        }
                    ?>
                    <!-- Image Input -->
                    <input type="hidden" name="background_logo" class="uploader-input" value="<?php echo $background_value; ?>">
                    <!-- Image Preview and Button -->
                    <img src="<?php echo $background_value; ?>" alt="" class="image-prev">
                    <button type="button" class="uploader-btn button button-primary ti-play-work-up"></button>
                </div>
                <!-- // Image Uploader -->  
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="meta_graph_cover"><?php echo __('Open Graph Cover','tornado'); ?></label>
                <!-- Image Uploader -->  
                <div class="media-uploader-control col-5">
                    <?php 
                        if (!get_option('meta_graph_cover')) {
                            $opengraph_value = 'https://via.placeholder.com/320x50?text=PLACEHOLDER';
                        } else {
                            $opengraph_value = get_option('meta_graph_cover');
                        }
                    ?>
                    <!-- Image Input -->
                    <input type="hidden" name="meta_graph_cover" class="uploader-input" value="<?php echo $opengraph_value; ?>" placeholder="<?php echo __('Image URL','tornado'); ?>">
                    <!-- Image Preview and Button -->
                    <img src="<?php echo $opengraph_value; ?>" alt="" class="image-prev">
                    <input type="button" class="uploader-btn button button-primary" value="<?php echo __('Upload Image', 'tornado'); ?>">
                </div>
                <!-- // Image Uploader -->
            </div>
        </div>
        <!-- // Control Item -->
    </div>
    <!-- // Grid -->
</div>
<div class="options-panel">
    <!-- Panel Title -->
    <h2 class="panel-title"><?php echo __('Meta footer','tornado'); ?></h2>
    <!-- Grid -->
    <div class="row no-gutter">
        <!-- Control Item -->
        <div class="control-item col-12 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="footer_title1"><?php echo __('footer title1','tornado'); ?></label>
                <input type="text" name="footer_title1" placeholder="<?php echo pll__('footer title1','tornado'); ?>" value="<?php echo pll__(get_option('footer_title1'),'tornado'); ?>">
            </div>
            <div class="content-box">
                <label for="footer_title2"><?php echo __('footer title2','tornado'); ?></label>
                <input type="text" name="footer_title2" placeholder="<?php echo pll__('footer title2','tornado'); ?>" value="<?php echo pll__(get_option('footer_title2'),'tornado'); ?>">
            </div>
            <div class="content-box">
                <label for="footer_title3"><?php echo __('footer title3','tornado'); ?></label>
                <input type="text" name="footer_title3" placeholder="<?php echo pll__('footer title3','tornado'); ?>" value="<?php echo pll__(get_option('footer_title3'),'tornado'); ?>">
            </div>
        
        </div>
     
        <!-- Control Item -->
      
        <!-- // Control Item -->
    </div>
    <!-- // Grid -->
</div>
<!-- // Panel Block -->

<!-- Panel Block -->
<div class="options-panel">
    <!-- Panel Title -->
    <h2 class="panel-title"><?php echo __('Custom Codes','tornado'); ?></h2>
    <!-- Grid -->
    <div class="row no-gutter">
        <!-- Control Item -->
        <div class="control-item col-12 col-l-12 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="header_code">
                    <?php echo __('Header Code','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('this code will be added before </head> closing tag','tornado'); ?>"></span>
                </label>
                <div class="control-wraper">
                    <textarea name="header_code" class="ltr h120" id="codemirror-1"><?php echo esc_html__(get_option('header_code')); ?></textarea>
                </div>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-12 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="body_code_start">
                    <?php echo __('Body Code','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('this code will be added after <body> opening tag','tornado'); ?>"></span>
                </label>
                <div class="control-wraper">
                    <textarea name="body_code_start" class="ltr h120" id="codemirror-2"><?php echo esc_html__(get_option('body_code_start')); ?></textarea>
                </div>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-12 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="footer_code">
                    <?php echo __('Footer Code','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('this code will be added before </body> closing tag','tornado'); ?>"></span>
                </label>
                <div class="control-wraper">
                    <textarea name="footer_code" class="ltr h120" id="codemirror-3"><?php echo esc_html__(get_option('footer_code')); ?></textarea>
                </div>
            </div>
        </div>
        <!-- // Control Item -->
    </div>
    <!-- // Grid -->
</div>
<!-- // Panel Block -->

<!-- Code Mirror -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        'use strict';
        /*============ Select Code Mirror Elements ==============*/
        var editor_el1 = document.querySelector('#codemirror-1'),
            editor_el2 = document.querySelector('#codemirror-2'),
            editor_el3 = document.querySelector('#codemirror-3'),
            editors_options = {
                lineNumbers: true,
                theme: 'xq-light',
                styleActiveLine: true,
                htmlMode:true,
                mode:'htmlmixed',
                matchClosing:true,
                lineWrapping:true,
                autoCloseBrackets: true,
                autoCloseTags: true,
            }
        /*============ Init Code Editors ==============*/
        var editor_1 = CodeMirror.fromTextArea(editor_el1,editors_options),
            editor_2 = CodeMirror.fromTextArea(editor_el2,editors_options),
            editor_3 = CodeMirror.fromTextArea(editor_el3,editors_options);
    });
</script>