<?php
    /**
     * this template reprsent the Comments
     * @package Tornado Wordpress
    */
?>

<?php // Security Call
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');
    //===== if there's a password =====//
	if (!empty($post->post_password)) {
        //===== and it doesn't match the cookie =====//
        if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {
            echo '<div class="alert danger">' . __( 'This article is protected by password: Please enter a word to open comments','tornado' ) . '</div>';
			return;
		}
	}
	/* This variable is for alternating comment background */
	$oddClass = 'comment-odd';
?>

<?php if ($comments) : foreach ($comments as $comment) : ?>
<!-- Comment Block -->
<div class="comment-block <?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
    <?php if ($comment->comment_approved == '0') : ?>
    <p class="danger-color"><?php echo __('Please wait for your comment to be approved.','tornado'); ?></p>
    <?php endif; ?>
    <!-- Comment Content -->
    <?php comment_text(); ?>
    <h3 class="auther"><img src="https://via.placeholder.com/150x150" alt=""> <?php comment_author_link() ?></h3>
    <!-- Hidden Comment Time -->
    <p class="hidden">
        <?php comment_date('F jS, Y') ?> at <?php comment_time() ?> (<a href="#comment-<?php comment_ID() ?>" title="">#</a>) 
        <?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?>
    </p>
</div>

<?php //===== Event Comment Class ======//
    $oddClass = ( empty( $oddClass ) ) ? 'comment-even' : '';
    /*===== End Loop =====*/
    endforeach; 
//====== if No Comments ======//
else : 
    //===== If comments are open, but there are no comments =====//
    if ('open' == $post->comment_status) :
    echo '<div class="alert danger">' . __( 'no Comments Yet.','tornado' ) . '</div>';
    endif;
endif; 
?>

<!-- Comments Form -->
<?php if ('open' == $post->comment_status) : ?>
<div class="primary-block">
    <!-- Title -->
    <h3 class="head ti-comment-bubble"><?php echo __('Add a Comment','tornado'); ?></h3>
    <!-- Form -->
    <?php /*====== if Need Login =====*/ if ( get_option('comment_registration') && !$user_ID ) : ?>
    <div class="alert danger"><?php echo __( 'You have to login for posting comments','tornado' ); ?>
        <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>"><b><?php echo __('Login','tornado'); ?></b></a>
    </div>
    <?php else : /*====== if no Need for Login =====*/ ?>
    <form class="form-ui comment-form row" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
        <!-- Username -->
        <?php if ( $user_ID ) : ?>
            <div class="col-12">
                <div class="alert"><b><?php echo __('You are currently logged in as ') . $user_identity; ?></b></div>
            </div>
        <?php else : ?>
        <!-- Name -->
        <div class="col-12 col-m-6">
            <input type="text" name="author" value="<?php echo $comment_author; ?>" placeholder="<?php echo __('Full Name','tornado'); ?>" tabindex="1" <?php if ($req) echo "required"; ?>/>
        </div>
        <!-- Email -->
        <div class="col-12 col-m-6">
            <input type="email" name="email" value="<?php echo $comment_author_email; ?>" placeholder="<?php echo __('Email Address','tornado'); ?>" tabindex="2" <?php if ($req) echo "required"; ?>/>
        </div>
        <?php endif; //====== end if User ID =====// ?>
        <!-- Comment -->
        <div class="col-12 clear-after">
            <textarea name="comment" placeholder="<?php echo __('Leave Your Comment Here','tornado'); ?>"></textarea>
            <input name="submit" type="submit" tabindex="5" value="<?php echo __('Submit Comment','tornado'); ?>"  class="btn primary float-end"/>
            <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
            <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
            <?php do_action('comment_form', $post->ID); ?>
        </div>
    </form>
    <!-- // Form -->
    <?php endif; //====== end if Need Login =====// ?>
</div>
<?php endif; //=== end if Comments Open End ====// ?>
