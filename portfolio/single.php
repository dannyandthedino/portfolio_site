<?php  get_header(); ?>








<?php

while ( have_posts() ) : the_post();

  if ( in_category('portfolio') ) {

    get_template_part( 'content', 'portfolio' );

  } elseif ( in_category('blog') ) {

    get_template_part( 'content', 'blog' );

  } else {

    get_template_part( 'content' );

  } 

endwhile; // end of the loop.

?>












































<!--<div class="single_wrap">



			<div class="image_left">
            
            <?php query_posts ('post_type=portfolio');?>

<!-- display the queried posts if there are any -->
<?php if (have_posts()) : while (have_posts()) : the_post();?>


<div class="image_1">

   
<?php the_field('img_1');?>

  

  

</div>

<!-- now you can end your loop -->
<?php endwhile; endif; ?>
               
             </div>

            
            
            
            
           
            
            <div class="right">
            <h1><?php single_post_title( 'Current post: ' ); ?></h1>
            <p><?php echo get('description'); ?></p>

			<?php echo get_permalink(); ?>
</div>

</div>
<!-- /#wrap -->


<?php get_footer(); ?>