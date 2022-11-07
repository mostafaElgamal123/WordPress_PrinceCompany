
 <?php
 

 $categories=get_categories('taxonomy=Categories-services');
  

foreach($categories as $category)
{
    ?>
  
<li><a href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->name ?></a></li>
<?php



}
 
?>                          
                           
                           
                           
                           
                           
