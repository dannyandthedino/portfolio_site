<?php
/*
Template Name: Portfolio_Page
*/
?>

<?php get_header(); ?>


	<div class="portfolio_wrap">
    
			
    <?php $args = array (

                'post_type' => 'portfolio',

                'posts_per_page' => '-1'

                );

                query_posts( $args );

                ?>      
            
   <?php if (have_posts()) : ?>
            
            <ul class="portfolio_grid_wrap">
	
					<?php while (have_posts()) : the_post(); ?>        
            
            
          
          <li>
            

            <?php 
              $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
            ?>

              <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">




<a href="<?php the_permalink(); ?>" rel="group" title="<?php echo get('portfolio_title'); ?>"> <?php the_post_thumbnail('thumbnail'); ?></a>
            
          </li>

        <?php endwhile; ?>

      </ul>

    <?php else : ?>
      <h1>This must not be the page that you're looking for...</h1>
      <p>Move along...</p>
    <?php endif; ?>

    <?php wp_reset_query(); ?>









<?php get_footer(); ?>