<?php






function wporg_add_custom_box()
{
    global $post;
 if ( 'about-company.php' == get_page_template_slug( $post->ID )) {
        add_meta_box(
            'wporg_box_id',           // Unique ID
            'Custom Meta',  // Box title
            'wporg_custom_box_html',  // Content callback, must be of type callable
            'page',                 // Post type
        );
    
}}
add_action('add_meta_boxes_page', 'wporg_add_custom_box');







function wporg_custom_box_html($post)
{
    $meta_key = 'second_featured_img';
    get_post_meta($post->ID, $meta_key, true);
   
   ?>
    <div id="wporg_field">
       <h3>Upload img </h3>
       <table>
        <tr>
            <td><a href="#" class="aw_upload_image_button button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="aw_custom_image" id="aw_custom_image" value="<?php echo esc_url(get_post_meta($post->ID, 'aw_custom_image', true)); ?>" style="width:500px;" /></td>
        </tr>
    </table>
        <h3>enter title</h3>
        <input style="width:100%;" type="text" name="wporg_meta_key1" id="wporg_meta_key1" value="<?php echo get_post_meta($post->ID, 'wporg_meta_key1', true); ?>">
        <h3>enter content</h3>
        <textarea style="width:100%;" type="text" name="wporg_meta_key2" cols="30" rows="10" id="wporg_meta_key2" value="<?php echo get_post_meta($post->ID, 'wporg_meta_key2', true); ?>"><?php echo get_post_meta($post->ID, 'wporg_meta_key2', true); ?></textarea>
       <h1>add new</h1>
       <h3>Upload img </h3>
       <table>
        <tr>
            <td><a href="#" class="aw_upload_image_button1 button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="aw_custom_image1" id="aw_custom_image1" value="<?php echo esc_url(get_post_meta($post->ID, 'aw_custom_image1', true)); ?>" style="width:500px;" /></td>
        </tr>
    </table>
    
       
        <h3>enter title</h3>
        <input style="width:100%;" type="text" name="wporg_meta_key4" id="wporg_meta_key1" value="<?php echo get_post_meta($post->ID, 'wporg_meta_key4', true); ?>">
        <h3>enter content</h3>
        <textarea style="width:100%;" type="text" name="wporg_meta_key5" cols="30" rows="10" id="wporg_meta_key2" value="<?php echo get_post_meta($post->ID, 'wporg_meta_key5', true); ?>"><?php echo get_post_meta($post->ID, 'wporg_meta_key5', true); ?></textarea>
      

    </div>
  
    <?php
}

function wporg_save_postdata($post_id)
{
    
       
        
        @update_post_meta(
            $post_id,
            'wporg_meta_key1',
         
            $_POST['wporg_meta_key1']
        );
        @update_post_meta(
            $post_id,
            'wporg_meta_key2',
         
            $_POST['wporg_meta_key2']
        );
        @update_post_meta(
            $post_id,
            'wporg_meta_key3',
         
            $_POST['wporg_meta_key3']
        );
        @update_post_meta(
            $post_id,
            'wporg_meta_key2',
         
            $_POST['wporg_meta_key2']
        );
        @update_post_meta(
            $post_id,
            'wporg_meta_key4',
         
            $_POST['wporg_meta_key4']
        );
        @update_post_meta(
            $post_id,
            'wporg_meta_key5',
         
            $_POST['wporg_meta_key5']
        );
    return $post_id;
    
}
add_action('save_post', 'wporg_save_postdata');





?>




<?php
function aw_save_postdata($post_id)
{
    
        @update_post_meta(
            $post_id,
            'aw_custom_image',
            $_POST['aw_custom_image']
        );
    
   
        @update_post_meta(
            $post_id,
            'aw_custom_image1',
            $_POST['aw_custom_image1']
        );
    
    
}
add_action('save_post', 'aw_save_postdata');




function forntend() {
    if ( ! did_action( 'wp_enqueue_media' ) ) {
        wp_enqueue_media();
    }
    wp_enqueue_script('forntend_admin', get_template_directory_uri() . '/dist/js/javajava.js', array('jquery'), null,);
};

add_action ('admin_enqueue_scripts','forntend');







////////////////////////////////////////////////////add meta for home//////////////////////////////////////

function home_add_custom_box()
{
    global $post;
 if ('index.php' == get_page_template_slug( $post->ID )) {
        add_meta_box(
            'home_box_id',           // Unique ID
            'Our previous work',  // Box title
            'home_custom_box_html',  // Content callback, must be of type callable
            'page',                 // Post type
        );
    
}}
add_action('add_meta_boxes_page', 'home_add_custom_box');







function home_custom_box_html($post)
{
   
   ?>
        <h3>enter title</h3>
        <input style="width:100%;" type="text" name="home_meta_key" id="home_meta_key" value="<?php echo get_post_meta($post->ID, 'home_meta_key', true); ?>">
        <h3>enter content</h3>
        <textarea style="width:100%;" type="text" name="home_meta_content" cols="30" rows="10" id="home_meta_content" value="<?php echo get_post_meta($post->ID, 'home_meta_content', true); ?>"><?php echo get_post_meta($post->ID, 'home_meta_content', true); ?></textarea>
       
    <?php
}

function home_save_postdata($post_id)
{
    
       
        
        @update_post_meta(
            $post_id,
            'home_meta_key',
         
            $_POST['home_meta_key']
        );
        @update_post_meta(
            $post_id,
            'home_meta_content',
         
            $_POST['home_meta_content']
        );
       
  
}
add_action('save_post', 'home_save_postdata');

