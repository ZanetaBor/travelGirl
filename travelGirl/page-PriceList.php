<?
/*

Template Name: Page-PriceList
The template for displaying page for "what we offer"

*/
?>

<?php get_header(); ?>

<!-- Start Section -- Parallax -->
<section class="parallax parallax-bg2">
   <div class="parallax-content"></div>
</section>
<!-- End Section -- Parallax -->

<section id="section4">
   <div class="post-center">
      <div class="wrapper">
         
         <?php $offer_query = new WP_Query(array( 'pagename' => 'Oferta - projekt i tworzenie stron internetowych')); ?>

         <?php  
         if(is_front_page()) { 
            global $more;
            if($offer_query->have_posts()) : 
            while($offer_query->have_posts()) : $offer_query->the_post(); ?>
               <section <?php post_class('entry'); ?>>
               <?php 
               $more = 0;
               the_content(); 
            endwhile;  
         endif;  
         wp_reset_query(); ?>
         <a class="all-posts-link" href="<?php echo home_url() . '/oferta-projekt-i-tworzenie-stron-internetowych/' ?>">Przejdź do cennika</a>
      </div>
   </div> 
</section> 
<?php
      } 
   else {  ?>
      <h1><?php wp_title(); ?></h1> 
    <?php  if($offer_query->have_posts()) : 
         while($offer_query->have_posts()) : $offer_query->the_post(); ?>
         <section <?php post_class('entry'); ?>>
         <?php the_content(); 
         endwhile; 
         endif;  
      wp_reset_query();
      ?> 
      </div>
   </div> 
</section>
 
<?php get_footer(); }?>