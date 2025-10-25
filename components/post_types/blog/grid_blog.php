<?php 
 /*
  * GRID - BLOG - INDEX (STANDALONE CASE) - not heer 
  */
 ?> 

<?php 
$args_blog_all = array(
  // 'post_type'		=> 'ansatte',
  // 'post_type'		=> 'posts',
  // default, coje lso post sdel blog - nice, for nyheter aka akytuielt section - firts blogm y lyuego ya vermeos si cpt etc 
  // 'post_type'		=> 'blog',
  // 'post_type'		=> 'post', // check si no rompe el layut tb 
  
  // 'post_type' => 'post',
  'posts_per_page' => '-1',
  // ORDER ??? 
  'order' => 'DESC',

  // 'category_name' => '',
	// EXCLUDE JOB LISTSINGS (AS NO IMAGE IN DESIGN... ID=6 
	/*
  'category__not_in' => array( 6 ), // array, not a string // ????
  */

); 
?>
<?php // if (have_posts()) : ?>
<?php
$query = new WP_Query( $args_blog_all );
if ($query->have_posts()) : ?>  
  <div class="grid_blog">	
  <?php // while (have_posts()) : the_post(); ?>
  <?php while ($query->have_posts()) : $query->the_post();?>
    <?php 
    // CARD - BLOG
    get_template_part('template-parts/post/card_blog');
    ?>  
  <?php // endwhile; endif; ?>
  <?php endwhile;  ?>
  </div> <!-- /grid_blog -->  
<?php endif; ?>