<?php

$paged=get_query_var('paged')?get_query_var('paged'):1;
$args=array(
    'paged' => $paged,
    'post_type'=>'testimonials',
 

);

@$loop=new WP_Query( $args );

if(@$loop->have_posts()){
    while( @$loop->have_posts() ) { @$loop->the_post(); ?>

             <div class="item">
                    <div class="slider-content">
                       <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                    </div>
                </div>  
                    

    <?php

}}

?>