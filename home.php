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
      // GRID - BLOG - INDEX (STANDALONE CASE)
      // get_template_part('template-parts/post/grid_blog_index');
      // get_template_part('template-parts/section/section_link');
      ?>  

    <?php 
    // PAGE TITLE H1
	  get_template_part('template-parts/page/page_title'); 
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
          $query = new WP_Query( $args );
          if ($query->have_posts()) : ?>
            <div class="grid_blog case_not_fullwidth___NOT">	
              <?php 
			  	      while ($query->have_posts()) : $query->the_post(); 
                	get_template_part('template-parts/post/card_blog'); // CARD - BLOG
                endwhile; 
				      ?>  
            </div> <!-- /grid_blog --> 
          <?php endif; ?> 

          <?php 
          // PAGINATION         
          get_template_part('template-parts/nav/pagination', null, ['query' => $query]);
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
          $query = new WP_Query( $args );
          if ($query->have_posts()) : 
			while ($query->have_posts()) : $query->the_post(); 
				get_template_part('template-parts/post/card_blog_1'); // CARD - BLOG 1 
			endwhile; 
          endif; 
		  ?> 

          <?php
          $args = array(
          'posts_per_page' => '2',          
          'offset' => '1',
          ); 
          $query = new WP_Query( $args );
          if ($query->have_posts()) : 
              while ($query->have_posts()) : $query->the_post();              
                get_template_part('template-parts/post/card_blog_2'); // CARD - BLOG 2
              endwhile; 
		  endif; 
		  ?> 

      </div> <!-- /grid_blog_special --> 


		<?php
		$args = array(
		'posts_per_page' => '-1', // YES - tets - guess here must define sth in order to get a apagination ... 
		'offset' => '3',
		); 
		$query = new WP_Query( $args );
		if ($query->have_posts()) : ?>
		<div class="grid_blog case_not_fullwidth___NOT">	
			<?php 
			while ($query->have_posts()) : $query->the_post();					
				get_template_part('template-parts/post/card_blog'); // CARD - BLOG
			endwhile; 
			?>  
		</div> <!-- /grid_blog --> 
		<?php endif; ?> 


  </div> <!-- /frame -->
</section>   

<?php
// PAGE BACKGROUNDS END
include get_template_directory() . '/components/template/page/page_backgrounds_end.php';  
?>  
<?php get_footer(); ?>