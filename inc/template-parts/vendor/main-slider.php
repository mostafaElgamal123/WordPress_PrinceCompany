<?php

$paged=get_query_var('paged')?get_query_var('paged'):1;
$args=array(
    'paged' => $paged,
    'post_type'=>'main-slider',
 

);

@$loop=new WP_Query( $args );

if(@$loop->have_posts()){
    while( @$loop->have_posts() ) { @$loop->the_post(); ?>

<div class="item" data-src="<?php echo get_the_post_thumbnail_url() ?>"
                data-gradient="linear-gradient(rgba(0, 0, 0, .8), rgba(0, 0, 0, 0.5))">
                <div class="slider-content">
                    <h1><?php echo the_title() ?></h1>
                    <?php echo get_the_excerpt() ?>
                </div>
            </div>    
                    

    <?php

}}

?>