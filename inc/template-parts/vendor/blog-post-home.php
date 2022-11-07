<?php

$paged=get_query_var('paged')?get_query_var('paged'):1;
$args=array(
    'paged' => $paged,
    'post_type'=>'post',
    'posts_per_page' => 4
 

);

@$loop=new WP_Query( $args );

if(@$loop->have_posts()){
    while( @$loop->have_posts() ) { @$loop->the_post(); ?>
   
                 <!-- Start  COL -->
                 <div class="col-12 col-m-6 mb30">
                        <div class="primary-block">
                            <a class="responsive-element img" data-src="<?php echo get_the_post_thumbnail_url() ?>"></a>
                            <div class="content">
                                <a href="<?php echo the_permalink() ?>">
                                    <h3><?php echo the_title() ?></h3>
                                </a>
                                <?php echo get_the_excerpt() ?> 
                            </div>
                        </div>
                    </div>
                    <!-- End  COL -->        
                    

    <?php

}}

?>