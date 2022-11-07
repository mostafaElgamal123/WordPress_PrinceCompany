<?php
/**
 * Template Name: Restore Password
 * this template for displaying category, tag, taxonomy, author, or date
 * @package Tornado Wordpress
 * @subpackage Developing Starter Template
 * @since Tornado UI Starter 1.0
*/
    //===============> Get Logo <==============//
    $logo = get_option('theme_logo');
    //==========> if Loged in Go to Home <==========//
    if (is_user_logged_in()) {
        $redirect = site_url();
        wp_safe_redirect($redirect);
    }
?>
<!-- Head Tag -->
<?php get_header(); ?>
<!-- Header -->
<?php get_template_part('inc/template-parts/components/header'); ?>

<!-- Page Content -->
<div class="container-xl page-content max640">
    <!-- Dynamic Page Head & Breadcumbs -->
    <?php get_template_part('inc/template-parts/components/breadcumb'); ?>

    <!-- Reset Password -->
    <div class="login-block">
        <div class="content-box">
            <hr class="divider" />
            <h2><?php the_title(); ?></h2>
            <hr class="divider" />
            <!-- Form -->
            <form id="lostpasswordform" action="<?php echo wp_lostpassword_url(); ?>" method="post" class="form-ui clear-after">
                <!-- Input -->
                <p class="tx-align-center"><?php echo pll__('لاسترداد الحساب الخاص بك يرجي كتابة <strong>اسم المستخدم او البريد الالكتروني</strong> الخاص بالحساب وسيتم ارسال رابط الى <strong>بريدك الالكتروني</strong> لتعيين كلمة مرور جديدة','tornado') ?></p>
                <input type="text" name="user_login" id="user_login" placeholder="<?php echo pll__('اسم المستخدم او البريد الالكتروني','tornado');?>">
                <!-- Button -->
                <input type="submit" value="استرداد الحساب" class="btn primary block-lvl round-corner" name="submit">
            </form>
            <!-- // Form -->
        </div>
    </div>
    <!-- // Reset Password -->
</div>
<!-- // Page Content -->

<!-- Custom Footer --> 
<?php get_template_part('inc/template-parts/components/footer'); ?>
<!-- Footer -->
<?php get_footer(); ?> 