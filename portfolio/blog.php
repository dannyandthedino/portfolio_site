<?php
/*
Template Name: Blog_Page
*/
?>

<?php get_header(); ?>

<!-- div for the main content -->
<div class="blog_wrap">
<h1> BLOG PAGE</h1>
<!-- start of the loop -->
<!-- wrap around a DIV if you are going to have multiple posts on a page - e.g. archive page -->

<?php $args = array (

'post_type' => '',

'posts_per_page' => '-1'

);

query_posts( $args );

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="blog-post">
    <h5 class="post_date"><?php echo get_the_date()?></h5>
    <h1 class="entry-title"><?php the_title(); ?></h1>
    
    <?php the_content();?>

</div>

<?php endwhile; else : ?>
    <!-- end the loop -->
    <!-- OOPS - you don't have any posts -->
    <h1>Not Found</h1>
    <p>Sorry but you didn't put any posts!</p>
<?php endif;?>
    <!-- real end of the loop -->

</div>

<?php get_footer(); ?>