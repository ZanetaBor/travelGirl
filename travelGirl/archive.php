<?
/*

Template Name: Archives
The template for displaying Archive pages

*/
?>

<?php get_header(); ?>

<section class="post-archive">
    <div class="wrapper post-center post-archive">
        <h2>Wszystkie posty</h2>

<!-- Search form --> 
        <!-- <form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo("url"); ?>">
            <label class="screen-reader-text" for="s">Szukaj:</label>
            <input type="text" value="" name="s" id="s" />
            <input type="submit" id="searchsubmit" value="Szukaj" /> 
        </form>    -->
<!-- Search form  -->

        <?php
           
 
            $new_Query = new WP_Query(array(
                'posts_per_page'  => 2,
                'orerby'          => 'post_date',
                'order'           => 'DESC',
                'post_status'     => 'publish',
                'paged' => '$paged',
            )); ?>

<!-- The Loop used to display all posts--> 
        <div class="tiles"> 
        <?php  if($new_Query->have_posts()) :
                while($new_Query->have_posts()) : $new_Query->the_post();
                    ?>
                     <section <?php post_class('entry'); ?>>
                        <a class="tile-link single-post-archive" href="<?php the_permalink(); ?>"><div class="size-post-thumbnail-post"> <?php the_post_thumbnail(); ?> </div>
                            <h4><?php the_title(); ?></h4>
                            <p class="tile-text tile-text-post"><?php the_excerpt_max_charlength(250); ?> </p>
                        </a>
                     </section>
                     
                  <?php endwhile; ?>
            <?php endif;
             
            wp_reset_query($new_Query);?>
        </div> 
        <div class="pagination">
                        <?php 
                        generatePagination($paged, $new_Query); ?>
                    </div>
    </div>
</section>

<!-- Start Section7 -- Parallax -->
<section id="section7" class="parallax parallax-bg5">
   <div class="parallax-content"></div>
</section>
<!-- End Section7 -- Parallax -->

<?php get_footer(); ?>