<?php  get_header(); ?>


<div class="single_wrap">



			<div class="image_left">
            
            <?php query_posts ('category_name=portfolio');?>

<!-- display the queried posts if there are any -->
<?php if (have_posts()) : while (have_posts()) : the_post();?>


<div class="image_1">

   
<?php echo get_image('bunbury');?>
<?php echo get_image('image_2');?>
		<!--<?php echo get_image(‘bunbury’);?>-->
<!--<?php echo get_image('image_2');?>-->
  
</a>

  

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