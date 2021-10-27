<?php
/*

The template for displaying all single posts and attachments

 */
?>

<?php get_header(); ?>

<?php the_post(); ?>

<!-- Start Section -- Single-post 
      The Loop used to display the single post--> 
<section class="post-center columns">
    <div class=" shadow single-post single-post-rectangle entry">
        <h3><?php the_title(); ?></h3>
        <article class="single-post-content entry">  
            <?php the_post_thumbnail(); ?> 
            <div class="post-gallery">      
            <?php the_content(); ?> </div>  
            <?php the_tags(); ?>
        </article>
<!-- End Section -- Single-post -->  


<!-- Start Navigation --> 
<div class="pagination">
                        <?php generatePagination($paged, $new_Query); ?>
                    </div>    
<!-- End Navigation --> 

    </div>
</section>

<!-- Start Section7 -- Parallax -->
<section id="section7" class="parallax parallax-bg5">
   <div class="parallax-content"></div>
</section>
<!-- End Section7 -- Parallax -->

<?php get_footer(); ?>