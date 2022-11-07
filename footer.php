<?php
    /**
     * this template for displaying footer closers
     * @package Tornado Wordpress
    */
?>
    <!-- Thanks Redirect -->
    <?php $homeUrl = home_url(); ?>
    <script>
        var home_url = '<?php echo $homeUrl; ?>';
        const thanksRedirect = () => {
            if(pageDirection == 'ltr') window.location = home_url+'/thanks/';
            if(pageDirection == 'rtl') window.location = home_url+'/شكرا/';
        }

        document.addEventListener( 'wpcf7mailsent', function( event ) {
            thanksRedirect();
        }, false );
    </script>
    <!-- // Thanks Redirect -->

    <!-- Custom Footer Code -->
    <?php echo get_option('footer_code'); ?>
    <!-- Required JS Files -->
    <?php wp_footer(); ?>
</body>
</html>