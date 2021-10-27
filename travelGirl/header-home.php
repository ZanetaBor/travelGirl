<?php
/**
 * @package WordPress
 * @subpackage Travel Girl
 * @since Travel Girl 2.0
 * 
 * Website Header Template
 * Created by Ministronka
 * 
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset') ?>" />
   <meta name="viewport" content="width=device-width initial-scale=1, maximum-scale=1" />
   <?php if(is_search()):?>
            <meta name="robots" content="noindex, nofollow" />
   <?php endif; ?>

   <title>  
      <?php if(is_archive()) {
               echo ucfirst(trim(wp_title('', false))) . '-';
      } else
      if(!(is_404()) && (is_single()) || (is_page())) {
         $title=wp_title('', false);
         if(!empty($title)) {
         echo $title . '-';
      }
      } else 
      if(is_404()) {
         echo 'Strona, którą wybrałeś nie istnieje';
      }
      if(is_home()) {
         bloginfo('name');
         echo '-';
         bloginfo('description');
      } else {
         echo bloginfo('name');
      }
      ?>
   </title>

   <!-- Stylesheet -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
   <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

   <!-- jQuery -->
   <script src="<?php echo TRAVELGIRL_THEME_URL ?>js/script.js"></script>
   
   <!-- pingback -->
   <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

   <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.gstatic.com"> 
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600&family=Libre+Baskerville:ital,wght@0,700;1,400&display=swap" rel="stylesheet">

   <!-- Cookie -->
   <script src="http://cookiealert.sruu.pl/CookieAlert-latest.min.js"></script>
   <script>
   CookieAlert.init({
      style: 'light',
      position: 'bottom',
      opacity: '0.5',
      displayTime: 15000,
      cookiePolicy: 'http://jakwylaczyccookie.pl/',
      text: 'Serwis Ministronka wykorzystuje pliki cookies w celach gromadzenia anonimowych informacji statystycznych. Korzystając z witryny wyrażają Państwo zgodę na ich zapis oraz akceptują Państwo <a href="<?php echo home_url() . '/polityka-prywatnosci/' ?>">Politykę prywatności </a> strony internetowej Ministronka.'
   });
   </script>

   <?php wp_head() ?>
</head>

<body <?php body_class()?>>

   <!-- Start Page -->

   <!-- Start Header -->
   <header>

      <!-- Start Logo  -->
      <div class="logo-link">
         <a href="<?php echo esc_url(home_url('/'));?>"><img src="http://localhost:8888/ministronka/trap/wp-content/uploads/2021/10/mini_app_square_white.png" alt="Ministronka"></a>
      </div>
      <!-- End Logo  -->

      <!-- Start Title -->  
      <!-- <h1><?php echo get_bloginfo('name') ?></h1> -->
      <!-- End Title -->

      <!-- Start Contact -- info -->
      <div class="contact-info-area">
         <div></div> 
         <div class="infobox"><a href="mailto:zaneta@zaneta">zaneta@zaneta</a></div>
         <div class="infobox"></div>
        
         <!-- Start Search form -->

         <?php $search = getQuerySingleParam('s'); ?>

         <form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo("url"); ?>">
            <p class="search-all">
               <input type="text" placeholder="szukaj" value="<?php echo $search ?>" name="s" id="s" />
               <input type="submit" id="searchsubmit" value="" />
            </p>
         </form>     

         <!-- End Search form -->
      </div>
      <!-- End Contact -- info -->   

      <!-- Start Navigation -->
      <div class="navigation-bar">
         <nav><?php wp_nav_menu(array('name' => 'Main menu'
            )); ?>
            </nav>
      </div>
      <!-- End Navigation -->
   </header>
   <!-- End Header -->
            
   <!-- Start Section1 -- Parallax -->
   <section id="section1" class="parallax parallax-bg1"><div class="parallax-content"></div>
   </section>
   <!-- End Section1 -- Parallax -->

  
   
 