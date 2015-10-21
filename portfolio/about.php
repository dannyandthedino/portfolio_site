<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>


<div class="about_wrap">



			<div class="image_left">
            <img src="http://placehold.it/600x800">
            </div>
            
            <div class="right">
            <h1> ABOUT ME</h1>
			<?php query_posts('category_name=about');?>
                <!--loop starts here-->
    <!-- start of the loop -->
    
    <?php $args = array (

'post_type' => 'about',

'posts_per_page' => '-1'

);

query_posts( $args );

?>

    
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!--  page or post title -->
        <?php the_title(); ?>
        <?php the_content(); ?>
        <?php endwhile; else : ?>
 
        <h1>Not Found</h1>
        <p>Sorry but you haven't posted anything, silly!</p>
        <?php endif;?>
        </div>
        
    <!-- real end of the loop -->









  
  
</div>
<!-- /#wrap -->


<?php get_footer(); ?>