








jQuery(function($){
    $('body').on('click', '.aw_upload_image_button', function(e){
        e.preventDefault();
  
        var button = $(this),
        aw_uploader = wp.media({
            title: 'Custom image',
            library : {
                uploadedTo : wp.media.view.settings.post.id,
                type : 'image'
            },
            button: {
                text: 'Use this image'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('#aw_custom_image').val(attachment.url);
        })
        .open();
    });
});


jQuery(function($){
    $('body').on('click', '.aw_upload_image_button1', function(e){
        e.preventDefault();
  
        var button = $(this),
        aw_uploader = wp.media({
            title: 'Custom image1',
            library : {
                uploadedTo : wp.media.view.settings.post.id,
                type : 'image'
            },
            button: {
                text: 'Use this image1'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('#aw_custom_image1').val(attachment.url);
        })
        .open();
    });
});


jQuery(function($){
    $('body').on('click', '.aw_upload_image_button2', function(e){
        e.preventDefault();
  
        var button = $(this),
        aw_uploader = wp.media({
            title: 'Custom image2',
            library : {
                uploadedTo : wp.media.view.settings.post.id,
                type : 'image'
            },
            button: {
                text: 'Use this image1'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('#aw_custom_image2').val(attachment.url);
        })
        .open();
    });
});

jQuery(function($){
    $('body').on('click', '.aw_upload_image_button_us', function(e){
        e.preventDefault();
  
        var button = $(this),
        aw_uploader = wp.media({
            title: 'Custom image',
            library : {
                uploadedTo : wp.media.view.settings.post.id,
                type : 'image'
            },
            button: {
                text: 'Use this image '
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('#about_us_key').val(attachment.url);
        })
        .open();
    });
});




































