<?
/*

Template Name: Archives-potfolio
The template for displaying Archive pages for potfolio

*/
?>

<?php get_header(); ?>

<!-- Start Section -- Archive-portfolio -->
<section>
    <div class="wrapper post-center post-archive">
        <h2>Portfolio</h2>
    </div>
        <?php
            $porfolio_query = new WP_Query(array(
                'posts_per_page'  => 100,
                'orderby'          => 'post_date',
                'order'           => 'DESC',
                'post_type'       => 'portfolio',
                'post_status'     => 'publish'
            )); ?>

<!-- The Loop used to display all posts--> 
    <div class="wrapper"> 
    <?php  if($porfolio_query->have_posts()) :
            while($porfolio_query->have_posts()) : $porfolio_query->the_post();
                ?>
                    <section <?php post_class('entry', 'portfolio-post'); ?>>
                    <a class="tile-link single-post-archive" href="<?php the_permalink(); ?>">  
                        <?php the_post_thumbnail(); ?> 
                        <!-- <h5><?php the_title(); ?></h5> -->
                        <p class="tile-text"><?php the_excerpt_max_charlength(250); ?> </p>
                    </a>
                    </section>
                <?php endwhile; ?>
        <?php endif; ?>
    </div> 
    </div>
</section>

<!-- Start Section7 -- Parallax -->
<section id="section7" class="parallax parallax-bg5">
   <div class="parallax-content"></div>
</section>
<!-- End Section7 -- Parallax -->

<?php get_footer(); ?>