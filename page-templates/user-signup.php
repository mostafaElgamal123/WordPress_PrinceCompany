<?php
/**
 * Template Name: Signup
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
<div class="container-xl page-content max720">
    <!-- Dynamic Page Head & Breadcumbs -->
    <?php get_template_part('inc/template-parts/components/breadcumb'); ?>

    <!-- Register -->
    <div class="login-block">
        <div class="content-box">
            <img src="<?php echo $logo; ?>" alt="" class="logo-image">
            <hr class="divider" />
            <h2><?php the_title(); ?></h2>
            <hr class="divider" />
            <!-- Validation -->
            <?php
                //====== Get User ID =======//
                global $wpdb, $user_ID;
                //====== Errors Messages =======//
                $errors = array();
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    //==== Check First Name and Lastname ===//
                    $first_name = esc_sql($_REQUEST['first_name']);
                    $last_name = esc_sql($_REQUEST['last_name']);
                    if(empty($first_name)) {
                        //==== Username is Empty ===//
                        $errors['first_name'] = pll__('الاسم الاول مطلوب يرجي كتابه الاسم الاول','tornado');
                    } elseif (empty($last_name)) {
                        //==== Username is Empty ===//
                        $errors['last_name'] = pll__('الاسم الاخير مطلوب يرجي كتابه الاسم الاخير','tornado');
                    }
                    //==== Check Username ===//
                    $username = esc_sql($_REQUEST['username']);
                    if (strpos($username, ' ') !== false) {
                        //==== Username Have Space ===//
                        $errors['username'] = pll__('خطأ فى اسم المستخدم لا يسمح بوجود مسافات','tornado');
                    } elseif(empty($username)) {
                        //==== Username is Empty ===//
                        $errors['username'] = pll__('اسم المستخدم مطلوب يرجي كتابه اسم المستخدم','tornado');
                    } elseif(username_exists($username)) {
                        //==== Username is Exist ===//
                        $errors['username'] = pll__('اسم المستخدم موجود بالفعل يرجي اختيار اسم مستخدم اخر.','tornado');
                    }

                    //======= Check Email =======//
                    $email = esc_sql($_REQUEST['email']);
                    if(!is_email($email)) {
                        //==== Email is Empty ===//
                        $errors['email'] = pll__('البريد الالكتروني غير صحيح يرجي كتابه بريد الكتروني صحيح','tornado');
                    } elseif(email_exists($email)) {
                        //==== Check Email Exist ===//
                        $errors['email'] = pll__('البريد الالكتروني موجود بالفعل يرجي كتابه بريد الكتروني اخر.','tornado');
                    }

                    //======= Check Password =======//
                    if(0 === preg_match("/.{8,}/", $_POST['password'])) {
                        $errors['password'] = pll__('خطأ كلمة المرور يجب ان تكون اكثر من 8 حروف وارقام','tornado');
                    } elseif(0 !== strcmp($_POST['password'], $_POST['password_confirmation'])) {
                        //======= Check Password Confirmation =======//
                        $errors['password_confirmation'] = pll__('كلمة المرور غير متطابقه يرجي التأكد من كلمة المرور.','tornado');
                    }

                    //======= Check Terms =======// 
                    if(!isset($_POST['terms'])||$_POST['terms'] != "Yes") {  
                        $errors['terms'] = Pll__('يجب الاطلاع والموافقه على شروط وقوانين سياسة الاستخدام','tornado');  
                    }

                    //======= Complete the Registeration =======// 
                    if(0 === count($errors) ) {
                        $new_user_data = array(
                            'user_login' => $username,
                            'user_nicename' => $username,
                            'user_pass' => $_POST['password'],
                            'user_email' => $email,
                            'first_name' => $first_name,
                            'last_name' => $last_name,
                            'display_name' => $first_name .' '. $last_name,
                        );
                        $new_user_id = wp_insert_user($new_user_data);
                        // $new_user_id = wp_create_user( $username, $password, $email );
                        // You could do all manner of other things here like send an email to the user, etc. I leave that to you.  
                        $success = 1;  
                    }
                }
                //====== Print Errors Messages =======//
                if (is_array($errors) && count($errors) > 0) {
                    foreach($errors as $error) {
                        echo '<div class="alert danger">'.$error.'</div>';
                    }
                } elseif (count($errors) === 0 && isset($success)) {
                    echo '<div class="alert success">'.pll__('لقد تم تسجيل عضويتك بنجاح يمكنك تسجيل الدخول الان.','tornado').'</div>';
                }
            ?>
            <!-- Form -->
            <form class="form-ui row" id="wp_signup_form" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                <!-- First Name -->
                <div class="col-12 col-m-6">
                    <label><?php echo pll__('الاسم الاول','tornado');?></label>
                    <input type="text" placeholder="<?php echo pll__('الاسم الاول','tornado');?>" name="first_name">
                </div>

                <!-- Last Name -->
                <div class="col-12 col-m-6">
                    <label><?php echo pll__('الاسم الاخير','tornado');?></label>
                    <input type="text" placeholder="<?php echo pll__('الاسم الاخير','tornado');?>" name="last_name">
                </div>

                <!-- Username -->
                <div class="col-12 col-m-6">
                    <label><?php echo pll__('اسم المستخدم','tornado');?></label>
                    <input type="text" placeholder="<?php echo pll__('اسم المستخدم','tornado');?>" name="username" id="username">
                </div>

                <!-- Email Address -->
                <div class="col-12 col-m-6">
                    <label><?php echo pll__('البريد الالكتروني','tornado');?></label>
                    <input type="text" placeholder="<?php echo pll__('البريد الالكتروني','tornado');?>" name="email" id="email">
                </div>

                <!-- Password -->
                <div class="col-12 col-m-6">
                    <label><?php echo pll__('كلمة المرور','tornado');?></label>
                    <input type="password" placeholder="<?php echo pll__('كلمة مرور الحساب','tornado');?>" name="password" id="password">
                </div>
                
                <!-- Confirm Password -->
                <div class="col-12 col-m-6">
                    <label><?php echo pll__('تأكيد كلمة المرور','tornado');?></label>
                    <input type="password" placeholder="<?php echo pll__('تأكيد كلمة المرور','tornado');?>" name="password_confirmation" id="password_confirmation">
                </div>

                <!-- Group -->
                <div class="col-12 clear-after">
                    <!-- Checkbox -->
                    <label class="checkbox">
                        <input name="terms" id="terms" type="checkbox" value="Yes" checked>
                        <span class="ti-checkmark"><?php echo pll__('الموافقه على', 'tornado');?> <a href="<?php echo get_privacy_policy_url();?>"><?php echo pll__('الشروط والاحكام وسياسات الخصوصيه', 'tornado');?></a> <?php echo pll__('الخاصه بموقع الشركة', 'tornado');?></span>
                    </label>
                    <!-- Button -->
                    <input type="submit" id="submitbtn" name="submit" value="<?php echo pll__('انشاء الحساب','tornado'); ?>" class="btn primary block-lvl round-corner">
                </div>
                <!-- // Group -->
            </form>
            <!-- // Form -->
        </div>
    </div>
    <!-- // Register -->
</div>
<!-- // Page Content -->

<!-- Custom Footer --> 
<?php get_template_part('inc/template-parts/components/footer'); ?>
<!-- Footer -->
<?php get_footer(); ?> 