<?php

$paged=get_query_var('paged')?get_query_var('paged'):1;
$args=array(
    'paged' => $paged,
    'post_type'=>'services',
    'posts_per_page' => 4
 

);

@$loop=new WP_Query( $args );

if(@$loop->have_posts()){
    while( @$loop->have_posts() ) { @$loop->the_post(); ?>

    <!-- Start  COL -->
    <div class="col-12 col-s-6 col-m-4 col-l-3 mb30">
                        <div class="primary-block">
                            <a class="responsive-element img" data-src="<?php echo get_the_post_thumbnail_url() ?>"></a>
                            <a href="<?php echo the_permalink() ?>">
                                <h3><?php echo the_title() ?></h3>
                            </a>
                        </div>
                    </div>
                   
                    <!-- End  COL -->     
                    

    <?php

}}

?>