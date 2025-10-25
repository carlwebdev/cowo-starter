<?php
/* 
 * OBS - home.php - Is the master "Posts" page, for the main , then the categories & archives use the index.php fiel  - so use hoem.php for a lnewspaoper layotu situation !!!
 */
?>
<?php if ( !defined('ABSPATH')) exit; ?>
<?php get_header(); ?>

<?php /*?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php endwhile; endif; ?>
<?php */?>

<?php
// PAGE BACKGROUNDS START
include get_template_directory() . '/components/template/page/page_backgrounds_start.php';  
?>  

<?php 
// PAGE BANNER (obs, has index file trick !) - now inisde so sc rol snap
include get_template_directory() . '/components/template/page/page_banner.php'; 
?>

<section class="background pb4">  
  <div class="frame">	
  
    <?php 
    // PAGE TITLE
    // include get_template_directory() . '/components/template/page/page_title.php'; 
    ?>

    <?php 
    // GRID - BLOG - INDEX (STANDALONE CASE)
    // include get_template_directory() . '/components/post_types/blog/grid_blog_index.php'; 
    ?>  




        <?php 
        // https://www.wpbeginner.com/wp-themes/how-to-show-the-current-taxonomy-title-url-and-more-in-wordpress/
        /*
        $term = get_queried_object();  // hmmm, rings a bell
        echo $term->name; // will show the name
        */
        // echo $term->taxonomy; // will show the taxonomy
        // echo $term->slug; // will show taxonomy slug - NICE !!! - AND THEN USE THIS IN THE ARGS BELOW !!!!
        ?> 



          <?php

// 1) Get current page (works on static front pages and archives)
$paged = max( 1, (int) get_query_var('paged'), (int) get_query_var('page') );


// 2) Build the custom query (use ints, not strings)
          $args = array(
          // 'post_type' => 'post', 
          'paged' => $paged, // vip to decalre this , i guess  / didnt do anything, test the refresh permalinks again ... 
          // 'category_name' => '',
          /*
          'category_name' => $term->slug, // ???????????? DOES THIS WORK ????? SEQUENTIAQLLY, ERGO NO TNEEDDED FO RFIST LEVEL ?!?! 
          */
          // 'posts_per_page' => '6', // YES - tets - guess here must define sth in order to get a apagination ... 
          'posts_per_page' => 6,
          // 'posts_per_page' => '-1',
          ); 
          // Custom query.
          $query = new WP_Query( $args );
          if ($query->have_posts()) : ?>

            <div class="grid_blog case_not_fullwidth___NOT">	
              <?php while ($query->have_posts()) : $query->the_post();?>

                <?php 
                // CARD - BLOG
                get_template_part('template-parts/post/card_blog');
                ?>  

              <?php endwhile; ?>  
            </div> <!-- /grid_blog --> 

          <?php endif; ?> 

          <?php 
          // PAGINATION         
          // include get_template_directory() . '/components/wordpress/pagination.php'; 
          // include get_template_directory() . '/components/wp/pagination.php'; 
          
          // get_template_part('template-parts/nav/pagination'); // HMM, NOT WORING !?

          // get_template_part('template-parts/components/pagination', null, ['query' => $q]);
          get_template_part('template-parts/nav/pagination', null, ['query' => $query]);
          // note - When you switched from include to get_template_part(), your pagination template lost access to a local $query variable.
          ?> 









    
  </div> <!-- /frame -->
</section>   














<section class="background pb4">  
  <div class="frame">	
  




      <div class="grid_blog_special">

          <?php
          $args = array(
          'posts_per_page' => '1',
          ); 
          // Custom query.
          $query = new WP_Query( $args );
          if ($query->have_posts()) : ?>
              <?php while ($query->have_posts()) : $query->the_post();?>
                <?php 
                // CARD - BLOG
                include get_template_directory() . '/components/post_types/blog/card_blog_1.php'; 
                ?>  
              <?php endwhile; ?>  
          <?php endif; ?> 




          <?php
          $args = array(
          'posts_per_page' => '2',          
          'offset' => '1',
          ); 
          // Custom query.
          $query = new WP_Query( $args );
          if ($query->have_posts()) : ?>
              <?php while ($query->have_posts()) : $query->the_post();?>
                <?php 
                // CARD - BLOG
                include get_template_directory() . '/components/post_types/blog/card_blog_2.php'; 
                ?>  
              <?php endwhile; ?>  
            

          <?php endif; ?> 

    

      </div> <!-- /grid_blog_special --> 





  


          <?php
          $args = array(
          'posts_per_page' => '-1', // YES - tets - guess here must define sth in order to get a apagination ... 
          // 'posts_per_page' => '-1',
          // offset => 3, // 1 + 2
          'offset' => '3', // 1 + 2
          ); 
          // Custom query.
          $query = new WP_Query( $args );
          if ($query->have_posts()) : ?>

            <div class="grid_blog case_not_fullwidth___NOT">	
              <?php while ($query->have_posts()) : $query->the_post();?>

                <?php 
                // CARD - BLOG
                include get_template_directory() . '/components/post_types/blog/card_blog.php'; 
                ?>  

              <?php endwhile; ?>  
            </div> <!-- /grid_blog --> 

          <?php endif; ?> 

    












  </div> <!-- /frame -->
</section>   






<?php
// PAGE BACKGROUNDS END
include get_template_directory() . '/components/template/page/page_backgrounds_end.php';  
?>  

<?php get_footer(); ?>