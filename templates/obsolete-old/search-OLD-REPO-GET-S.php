<?php if ( !defined('ABSPATH')) exit; ?>
<?php get_header(); ?>

<?php 
/*
 * index.php
 * 
 * a) posts page
 * b) search results
 *
 * c) ... wc pages ...
 */ 
?>




<?php /*?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php endwhile; endif; ?>
<?php */?>


<?php /*?>
TODO - 
also ad dlink to bakc to posts ....
in a nice ui box with options bar, nice, under the header, to the right, dashboardey kinda thing .
<?php */?>



<?php
// // // if ( is_search() ) {
  // add external search form (Google, Yahoo, Bing...)
  // echo 'hello';
// // // }
?>




<?php /*?>PAGE USED FOR - 1) RESULTS & 2) BLOG<?php */?>
<?php 
// CASE = SEARCH RESULTS - 2 OPTIONS ...
// // // if (isset($_GET["s"])) { // also, if is search !!!!!!!!!!
// if ( is_search() ) { // CASE - RESULTS 
?>



<section class="bgWhite">
  
  
  <div class="frame">
    <div class="page_title"><h1>SEARCH RESULTS</h1></div>
  </div> <!-- /frame -->
  
  
	<?php
  $args = array(
  // 'category_name' => '',
  'posts_per_page' => '',
	's' => $_GET["s"],
  ); 
  // Custom query.
  $query = new WP_Query( $args );
  if ($query->have_posts()) : ?>
  
  <div class="frame">
    <div class="w_listResults">
      
    <?php while ($query->have_posts()) : $query->the_post();?>
      <div class="item">
        <div class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
        <div class="text"><?php echo the_excerpt();?></div> 
        <?php /*?><div class="readMore"><a href="<?php the_permalink() ?>">Les mer</a></div> <?php */?>                    
      </div> <!-- /item -->   
    <?php endwhile; ?>  
      
    </div> <!-- /w_listResults --> 
  </div> <!-- /frame -->
  
  <?php endif; ?> 
</section>    
  



<?php // // // } else { // CASE - NOT RESULTS - LIST OF POSTS, EC // CASE NOT RESULT, aka BLOG ?>


<?php // // // } // END ?>




<?php get_footer(); ?>