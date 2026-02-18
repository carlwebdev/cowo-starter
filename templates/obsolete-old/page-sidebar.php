<?php if ( !defined('ABSPATH')) exit; ?>
<?php
/*
Template Name: Sidebar
*/ 
get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php 
// PAGE BANNER
include get_template_directory() . '/components/template/page/page_banner.php'; 
?>

<?php
// PAGE BACKGROUNDS START
include get_template_directory() . '/components/template/page/page_backgrounds_start.php';  
?>  

<?php
/*
 * PAGE BASICS, THE ARTICLE, VS SECTION.... 
 */ 
?>
<section class="background pb4">
<div class="frame">	
  
  <?php
  // PAGE TITLE
  include get_template_directory() . '/components/template/page/page_title.php'; 
  ?>
  
  <?php
  /*
   * PAGE CONTENT
   */ 
  ?>
  <div class="m_htmleditor">	
    <?php the_content(); ?>
  </div> <!-- /m_htmleditor -->

</div> <!-- /frame -->
</section>










<?php
// al ths copie omr wp eimo, to make a main & asid sisbear sistauotio, for al the filteres, and then rutn taht siebar into dropdown or accorden filterss, sth nice ui / ux !!!
/* 
 * PAGE LAYOUT 
 *
 * INDEX - NORMAL SIDEBAR LAYOUT WITH BLOG POSTS & ALTERNATIVELY WITH SEARCH RESULTS 
 *
 * PAGE USED FOR - 1) RESULTS & 2) BLOG
 */
?>
<section class="pb4 padding-2___NOT">
  <div class="frame">	
   
    <div class="layout_page_blog">




    <div class="sidebar">

      <?php /*?>      
        SIDEBAR MAGICS !!!!!!!!!!!

        - TODO - AAAH DO THE TRICK OF STICKY AND THEN UNSTIKLY !!! FINALLY A GOOD USAGE CASE !!!!!!!!!!!!!!!!!!!

        - TODO - 
        1  hide or delkete the widgets tha ar enot needed, ay estan en wp_:eimeo enayways 
        2 - reoderanr lo que hay
        mirar css classes.... renams thsi as sidebar _wp vs sidebar _wc ...

      <?php */?>

      <?php /*?>    
      TODO - SIDEBAR
      TODO - AAAH DO THE TRICK OF STICKY AND THEN UNSTIKLY !!! FINALLY A GOOD USAGE CASE !!!!!!!!!!!!!!!!!!!

      TODO - 
      1  hide or delkete the widgets tha ar enot needed, ay estan en wp_:eimeo enayways 
      2 - reoderanr lo que hay
      mirar css classes.... renams thsi as sidebar _wp vs sidebar _wc ...
      <?php */?>    

      <?php
      if(is_active_sidebar('blog-sidebar')){
      dynamic_sidebar('blog-sidebar');
      }
      ?>



<pre>
Tasks:
1) Search within this CPT
2) Markets
3) Offering type
4) etc
</pre>




      
      <?php /*?> copied tal cual dfomr header dropdowns, must fix ital over !!! <?php */?>         
      <?php /*?> <div class="wp_form_search"><?php get_search_form(); ?></div> <!-- /wp_searchBox --> <?php */?> 
      <?php // include get_template_directory() . '/components/wordpress/wp_form_search.php'; ?>
      <?php include get_template_directory() . '/components/wp/wp_form_search.php'; ?>



      </div> <!-- /sidebar --> 






        <div class="PLACEHOLDER_WRAPPER">  

          <!-- 
          OBS, BUILDING THE DMEO PAGE WUISNG ORGANISATION REGISTRY AT TEH EMENT:
          -->


      


              <div class="grid_logos">
                  <?php 
                  // PHP for loop
                  for ($i = 0; $i <= 23; $i++) {
                  // echo '<div class="item">' . $items[$i] . '</div>';
                  ?>

                    <div class="card_logo">
                      <img src="<?php echo $demo_img; ?>">
                      <h3>Insert Title Here, but longer</h3>
                    </div> <!-- /card_tri_selector -->

                  <?php } ?>
              </div> <!-- /tri_selector -->
            

           





          <?php
          $args = array(

          /*
          'posts_per_page'   => 32,
          'paged' => $paged,
            'post_type' => 'post', // THIS IS BY DEFAUKLT, SO IT ISN'T REALLY NECESSARY, BUT ALWAYS NICE TO KNOW 
          'category_name' => 'restaurants,bares'
          */  
          'paged' => $paged, // vip to decalre this , i guess  / didnt do anything, test the refresh permalinks again ... 

          // 'category_name' => '',
          'posts_per_page' => '6', // YES - tets - guess here must define sth in order to get a apagination ... 
            
          // todo  get the category here if its mentined !!!!!!!!! - copy system fomr infood...
            
          // EXCLUDE CATEGORIES FOMR THE ARSG/QUERY  
          // EXCLUDE JOB LISTSINGS (AS NO IMAGE IN DESIGN... ID=6 
          // 'category__not_in' => array( 6 ), // array, not a string / CAN EXCLUDE POST TYPES HERE, NICE, LIKE EXCLUDE THE ANSATTE FOR EXAMPLE  - - test it !!!!!!!!!

            
          /*
          this pagination number must match the one in the cms , here: (and now tetsing to dleete the numbe rin the cms altogether ... but stys at 1.. )
          http://cowoserver/wp_eimoe/wp-admin/options-reading.php
          */            

          // // 'post_type' => 'post',  // test when launching empty query 
          // // // // // 'paged' => $paged, // ??? vip to decalre this , i guess  / didnt do anything, test the refresh permalinks again ... 

          //'category_name' => 'nyheter',  
          // 'paged' => $paged, // tets if this si needed for query not ewmpty fue to isseu...  
          //'posts_per_page' => '2', // YES - tets - guess here must define sth in order to get a apagination ...   
            
            
            
          'category_name' => $term->slug, // ???????????? DOES THIS WORK ????? SEQUENTIAQLLY, ERGO NO TNEEDDED FO RFIST LEVEL ?!?!
            
            
            
            
          ); 
          // Custom query.
          $query = new WP_Query( $args );
          if ($query->have_posts()) : ?>

            <div class="grid_blog case_not_fullwidth">	
              <?php while ($query->have_posts()) : $query->the_post();?>
                <?php include get_template_directory() . '/components/sections/blog/card_blog.php'; ?>
              <?php endwhile; ?>  
            </div> <!-- /grid_blog --> 

          <?php endif; ?> 

          <?php 
          /*
           * PAGINATION         
           */
          ?>  
          <?php include get_template_directory() . '/components/wordpress/pagination.php'; ?> 



  


        </div> <!-- /PLACEHOLDER_WRAPPER --> 
    </div> <!-- /layout_page_blog -->  
  
  </div> <!-- /frame -->
</section>














<?php
// PAGE BACKGROUNDS END
include get_template_directory() . '/components/template/page/page_backgrounds_end.php';  
?>  


<?php endwhile; endif; ?>
<?php get_footer(); ?>