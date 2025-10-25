<?php
/* 
 * OBS - search.php - Is the default "Search Results" page/file
 */
?>
<?php if ( !defined('ABSPATH')) exit; ?>
<?php get_header(); ?>


<?php /*?>
TODO - 
also ad dlink to bakc to posts ....
in a nice ui box with options bar, nice, under the header, to the right, dashboardey kinda thing .
<?php */?>

<?php 
// PAGE BANNER - makes no sens in the search results page, so far, so good
// // // include get_template_directory() . '/components/template/page/page_banner.php'; // TODO
?>

<?php
// PAGE BACKGROUNDS START
// include get_template_directory() . '/components/template/page/page_backgrounds_start.php';  
get_template_part('template-parts/page/page_backgrounds_start');
?>  


  <section class="background pb4 bgWhite___NOT_S&D">
    <div class="frame medium">	


      <!-- <div class="page_title"><h1>[SEARCH RESULTS]</h1></div> --> 
      <h1 class="page_title_dynamic io_fadein_below"><?php // the_title(); ?>[Search Results]</h1>
      <?php
      /*
      * KD
      */ 
      // // // include get_template_directory() . '/components/wp_form_search.php'; 

      // TODO -  build a bar with serahc, filters, grd / list functonality, etc 

      // TODO - RENOMVE EL EXCERPT LENTH FUNCITN DE EIGIL, Y TRUCNAR COAS PO RCLAMP EC SI ACASO <!DOCTYPE html>

      // center the width , anrrower.. ceter the resukts, add the taskbar .. good name... :-) 
      ?> 

      <?php /*?> <?php */?>    
      
      


      



      <?php 
      // SEARCH FORM
      get_template_part('template-parts/search/wp_form_search');
      ?>


      <!-- 
      <br />
      <br />
      tasks: copy thinsg fomr wp_eimoe.<br />
      <br />

      grid_results
      <br />
      <?php // include get_template_directory() . '/components/sections/results/card_result.php'; ?>
      <br />
      msg no results
      <br />
      pagination !!!
      -->




        <!-- ISSUE WITH SWRAHC BOX FLOAT OR STH -->
        <br />
        <br />
        <br />









      <?php if ( have_posts() ) : ?>

        <div class="grid_results">	
          <?php while ( have_posts() ) : the_post(); ?>
            <?php 
            // SEARCH RESULTS - CARD
            get_template_part('template-parts/search/card_result');
            ?>
          <?php endwhile; ?>  
        </div> <!-- /grid_results --> 

      <?php else : ?> 
          <!--
          <section class="background pb4 bgWhite">
          <div class="frame medium">
          -->

            <?php 
            // SEARCH RESULTS - MSG NO RESULTS
            // MSG NO RESULTS  - mal possiocnado por ahoar, temp   
            get_template_part('template-parts/search/msg_no_results');
            ?>
            
            <!--
            </div>  
          </section>    
          -->
          
        <?php endif; ?>

    </div> <!-- /frame -->
  </section>
  
  




  <?php /*
  <div class="frame">
    <div class="w_listResults">
      <?php while ( have_posts() ) : the_post(); ?>
          <div class="item">
            <div class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
            <div class="text"><?php echo the_excerpt();?></div> 
            <!-- <div class="readMore"><a href="<?php the_permalink() ?>">Les mer</a></div> -->
          </div> <!-- /item -->  
      <?php endwhile; ?>
    </div> <!-- /w_listResults --> 
  </div> <!-- /frame -->
  */ ?>


<?php /*
<section class="background pb4">
  <div class="frame medium">


      <br>
      ALTERNATE LAYOUT - CHOOSE LAYOUT WITH THE THEME SETTINGS :-)
      <br>

      <!--  TESTNG THESE 2 LAYOUTS, TO CLEANUP BEFORE COPYING TO WP_COWOWO -->
      <div class="grid_results_simple">	
        <?php while ( have_posts() ) : the_post(); ?>
          <?php include get_template_directory() . '/components/wp/results/card_result_simple.php'; ?>
        <?php endwhile; ?>  
      </div> <!-- /grid_results --> 
            

  </div> <!-- /frame -->
  </section>  
  */ ?>





<?php
// PAGE BACKGROUNDS END
get_template_part('template-parts/page/page_backgrounds_end');
?>  

<?php get_footer(); ?>