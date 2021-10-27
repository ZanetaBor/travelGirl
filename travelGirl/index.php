<?
/*

Template Name: Main Page
The main template file
 
*/
?>

<?php get_header('home'); ?>

<!-- Start Section2 -- Floating-box -->
<section id="section2">
   <!--  Start the Loop
            Include the floating box -->
   <?php 
      if(have_posts()) : 
         while(have_posts()) : the_post(); 
            the_content(); 
         endwhile; 
      endif;  
      wp_reset_query();
   ?> 
</section>  
<!-- End Section2 -- Floating-box -->

<!-- Start Section -- Parallax -->
<section class="parallax parallax-bg2">
   <div class="parallax-content"></div>
</section>
<!-- End Section -- Parallax -->

<!-- Start Section3 -- About us -->       
<section id="section3">
   <div class="post-center">
      <div class="wrapper">
         <div class = "square-image">
            <h2>Kim jesteśmy</h2>
            <div class = "">
            <img src="http://localhost:8888/ministronka/trap/wp-content/uploads/2021/10/firma.png"></div>
         </div>

         <div class = "square shadow">
            <p class="square-p">
            Przeglądałam strony internetowe.....<br>       których treść nie miała sensu.<br>Sklepy internetowe.....<br>       z których nie wynikało co sprzedają lub oferują.<br>Witryny.....<br>       nieczytelne, bez logiki, toporne.</p><p>Zastanawiałam się, czemu po ciężkim i trudnym dniu, dalej nie mogę odpoczywać... czemu internet krzyczy, jest chaotyczny, męczy wzrok.</p> 
            <ul class="about-list">
               <li>Proste……</li>
               <li>Krótkie…..</li>
               <li>Na temat……</li>
               <li>Czytelne……</li><li>Eleganckie.....</li>
            </ul> 
            <p>Tym właśnie jest nasza firma.</p>
         </div>
      </div> 
      <div class="wrapper"><p class="text">Tworzymy, bo lubimy. Każdy projekt traktujemy jako indywidualne zadanie stworzenia czegoś pięknego. Uwielbiamy się uczyć, szukamy nowinek i śledzimy nowe technologie, żeby Twoja strona była jeszcze lepsza, jeszcze szybsza i bardziej konkurencyjna. Budujemy od podstaw - po dokładnym omówieniu potrzeb i wymagań klienta, przedstawiamy wstępny projekt. Po akceptacji kontynuujemy zlecenie. Nie posiadamy stałej siedziby firmy. Postanowiliśmy pracować zdalnie. Nie chcemy tracić czasu na dojazdy do biura, ponieważ zależy nam, żeby Twoje zlecenie zostało wykonane jak najszybciej.<span class="unique-about">Zespół MiniApp</span></p></div>
   </div>
</section>
<!-- End Section3 -- About us --> 

<!-- Start Section -- Parallax -->
<section class="parallax parallax-bg2">
   <div class="parallax-content"></div>
</section>
<!-- End Section -- Parallax -->

<!-- Start Section4 -- What we offer -->
<section id="section4">
   <?Php get_template_part ( 'page', 'PriceList'); ?>         
</section> 
<!-- End Section4 -- What we offer -->

<!-- Start Section -- Parallax -->
<section class="parallax parallax-bg2">
   <div class="parallax-content"></div>
</section>
<!-- End Section -- Parallax -->

<!-- Start Section5 -- Portfolio 
      The Loop used to display newest portfolio posts--> 
<section id="section5" class="newest-post">
      <div class="wrapper post-center newest-post">
         <h2>Portfolio</h2>
         <?php 
            $porfolio_query = new WP_Query(array(
               'posts_per_page'  => 10,
               'orderby'          => 'post_date',
               'order'           => 'ASC',
               'post_type'       => 'portfolio',
               'post_status'     => 'publish'
            )); ?>
            <div class="tiles">  
               <?php 
               if($porfolio_query->have_posts()) :
                  while($porfolio_query->have_posts()) :
                     $porfolio_query->the_post(); ?>
                     <section <?php post_class('entry'); ?>>
                        <a class="tile-link" href="<?php the_permalink(); ?>">
                           <?php the_post_thumbnail(); ?> 
                           <!-- <h5><?php the_title(); ?></h5> -->
                           <p class="tile-text"><?php the_excerpt_max_charlength(250); ?></p>
                        </a>
                     </section>
                  <?php endwhile; ?> 
            </div>
               <?php endif; 
               wp_reset_query();?>
      </div>
</section>
<!-- End Section5 -- Portfolio --> 

<!-- Start Section -- Parallax -->
<section class="parallax parallax-bg3">
   <div class="parallax-content"></div>
</section>
<!-- End Section -- Parallax -->

<!-- Start Section6 -- Newest-post 
      The Loop used to display newest posts--> 
<section id="section6" class="newest-post">
      <div class="wrapper post-center newest-post">
         <h2>Najnowsze posty</h2>
         <?php 
            $new_Query = new WP_Query(array(
               'posts_per_page'  => 4,
               'orerby'          => 'post_date',
               'order'           => 'DESC',
               'post_status'     => 'publish'
            )); ?>
            <div class="tiles">  
               <?php 
               if($new_Query->have_posts()) :
                  while($new_Query->have_posts()) :
                     $new_Query->the_post(); ?>
                     <section <?php post_class('entry'); ?>>
                        <a class="tile-link" href="<?php the_permalink(); ?>"><div class="size-post-thumbnail-post"><?php the_post_thumbnail(); ?></div>
                           <h4><?php the_title(); ?></h4>
                           <p class="tile-text tile-text-post"><?php the_excerpt_max_charlength(250); ?></p>
                        </a>
                     </section>
                  <?php endwhile; ?> 
            </div>
            <a class="all-posts-link" href="<?php echo home_url() . '/blog/' ?>">Wszystkie posty</a>
               <?php endif; 
               wp_reset_query();?>
      </div>
</section>
<!-- End Section6 -- Newest-post --> 

<!-- Start Section -- Parallax -->
<section class="parallax parallax-bg5">
   <div class="parallax-content"></div>
</section>
<!-- End Section -- Parallax -->


<?php get_footer(); ?>
      