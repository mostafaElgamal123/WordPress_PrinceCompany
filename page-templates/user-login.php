<?php
/**
 * Template Name: Login
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
<div class="container-xl page-content max480">
    <!-- Dynamic Page Head & Breadcumbs -->
    <?php get_template_part('inc/template-parts/components/breadcumb'); ?>

    <?php
        //=========== Login Faild Message ==========//
        if (isset($_GET['login']) && $_GET['login'] == 'failed') {
            echo '<div classs="alert danger">'.pll__('لقد فشل تسجيل الدخول تأكد من ان البيانات صحيحة وحاول مرة اخري','tornado').'<a href="#" class="ti-close remove-item"></a></div>';
        } elseif (isset($_GET['login']) && $_GET['login'] == 'false')  {
            echo '<div classs="alert info">'.pll__('لقد تم تسجيل خروجك بنجاح نتمني ان نراك فى وقت لاحق.','tornado').'<a href="#" class="ti-close remove-item"></a></div>';
        } elseif (isset($_GET['username']) && $_GET['username'] == 'empty') {
            echo '<div classs="alert danger">'.pll__('لقد فشل تسجيل الدخول لقد تركت اسم المستخدم فارغ','tornado').'<a href="#" class="ti-close remove-item"></a></div>';
        } elseif (isset($_GET['password']) && $_GET['password'] == 'empty') {
            echo '<div classs="alert danger">'.pll__('لقد فشل تسجيل الدخول لقد تركت كلمة المرور فارغه','tornado').'<a href="#" class="ti-close remove-item"></a></div>';
        }
    ?>

    <!-- Login -->
    <div class="login-block">
        <div class="content-box">
            <img src="<?php echo $logo; ?>" alt="" class="logo-image">
            <hr class="divider" />
            <h2><?php the_title(); ?></h2>
            <hr class="divider" />
            <!-- Form -->
            <form class="form-ui clear-after" name="loginform" id="loginform" action="<?php echo wp_login_url( get_permalink() ); ?>" method="post">
                <!-- Input -->
                <label for="username"><?php echo pll__('اسم المستخدم','tornado') ?></label>
                <input type="text" placeholder="<?php echo pll__('اسم المستخدم او البريد الالكتروني','tornado');?>" name="log" id="user_login">
                <!-- Input -->
                <label for="password"><?php echo pll__('كلمة المرور','tornado') ?></label>
                <input type="password" placeholder="<?php echo pll__('كلمة مرور الحساب','tornado');?>" name="pwd" id="user_pass">
                <!-- Checkbox -->
                <label class="checkbox">
                    <input type="checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">
                    <span class="ti-checkmark"><?php echo pll__('تذكر حسابي','tornado');?></span>
                </label>
                <!-- Button -->
                <input type="submit" value="<?php echo pll__('تسجيل الدخول','tornado');?>" name="wp-submit" id="wp-submit" class="btn primary float-end round-corner">
                <!-- Link -->
                <a href="<?php echo get_page_link(230);?>" class="forget-link"><?php echo pll__('هل نسيت كلمة المرور ؟','tornado');?></a>
            </form>
            <!-- // Form -->
        </div>
    </div>
    <!-- // Login -->
</div>
<!-- // Page Content -->

<!-- Custom Footer --> 
<?php get_template_part('inc/template-parts/components/footer'); ?>
<!-- Footer -->
<?php get_footer(); ?> 