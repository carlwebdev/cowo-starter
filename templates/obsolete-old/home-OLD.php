<?php if ( !defined('ABSPATH')) exit; ?>
<?php

get_header(); ?>
<p>This is home.php (Shown in the news page, blog page, aka index.php !! et f !!) </p>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div style="display:none;">

<?php
/*
 * THE TITLE
 */ 
?>
<div class="frame">	  
  
  <div class="page_title">
    <h1><?php the_title(); ?></h1>
  </div>
  
</div> <!-- /frame -->  


<?php
/*
 * THE CONTENT .... 
 */ 
?> 
<section id="the_content">
  <div class="frame">	
    
    <div class="m_htmleditor">	
      <?php the_content(); ?>
    </div> <!-- /m_htmleditor -->
    
  </div> <!-- /frame -->
</section>

<?php /*?><div class="grid full-col">
<div id="content">
<article id="article" <?php post_class(); ?>>
<div class="wrapper clearfix">
<?php the_content(); ?>
</div>
</article>
</div><?php */?>

<?php endwhile; endif; ?>
<?php /*?>BLOG POSTS HAVE TO BE OUTSIDE THE GENERIC PHP CLAUSE, AS I ALREADY KNOW<?php */?>


</div>






<?php /*?>build the news system, ya que ya lo necesitaré para mjmus ..<?php */?>



<?php 
/* 
 * BACKGROUNDS - START
 */
?>
<div class="backgrounds">	


  
  <section class="background">
    <div class="frame">	

      
      <?php
      /*
       * THE TITLE
       */ 
      ?> 
      <div class="page_title">
        <h1><?php the_title(); ?></h1>
      </div>



      <?php
      /*
       * THE CONTENT
       */ 
      ?> 
      <section id="the_content">

          <div class="m_htmleditor">	
            <?php the_content(); ?>
          </div> <!-- /m_htmleditor -->

      </section>

      
    </div> <!-- /frame -->
  </section>
  
  
  
  
  
  <?php 
  /* 
   * SECTION - TITLE
   */
  ?>
  <?php /*?>  
  <div class="frame">	
    <div class="section_title">
      <h2><?php the_title(); ?>[NEWS - NAME OF BLOG POSTS PAGE DYNAMICALLY]</h2>
    </div>
  </div> <!-- /frame -->  
  <?php */?>

  
  
  <section class="background">
    <div class="frame">	

      <?php 
      /* 
       * SECTION - TITLE
       */
      ?>    
      <div class="section_title">
        <h2>[SECTION TITLE] - 1</h2>
      </div>

<!--
  test AS THIS HER EBELOW WANT WORKING, (THE OTHER HOMEPAGE ISSUE WAS FIXED WITH PLUGINS REMOVED) THEN TRY TO UPADTE THE WP INSTAL MANUALLY, INSETAD OF USINGTT EHE ONBOARD SYSTEM WHICH OBVISOUSLY DIDNT WORK CORRECTLY
-->
      
      
      <?php 
       /*
        * DEMO - - - GRID - BLOG
        */
       ?>
      <?php include get_template_directory() . '/components/blog/demo_grid_blog.php'; ?>

    </div> <!-- /frame -->
  </section>

  
  
  <section class="background">
    <div class="frame">	

      <?php 
      /* 
       * SECTION - TITLE
       */
      ?>    

      
      <?php 
       /*
        * DEMO - - - GRID - BLOG
        */
       ?>
      <?php include get_template_directory() . '/components/blog/demo_grid_blog.php'; ?>

    </div> <!-- /frame -->
  </section>
  
  
  <section class="background">
    <div class="frame">	

      <?php 
      /* 
       * SECTION - TITLE
       */
      ?>    

      <?php 
       /*
        * DEMO - - - GRID - BLOG
        */
       ?>
      <?php include get_template_directory() . '/components/blog/demo_grid_blog.php'; ?>

    </div> <!-- /frame -->
  </section>
  
  
  

<?php 
/* 
 * BACKGROUNDS - END
 */
?>
</div> <!-- /backgrounds -->









<?php /*?>
<div class="wrapper bloggen clearfix">
<h1>Latest news</h1>
<ul>
<?php
query_posts('posts_per_page=6');
if (have_posts()) : ?>
<?php $c = 0;while (have_posts()) : the_post(); $c++;
if( $c == 3) {
	$style = 'one_three last';
	$c = 0;
}
else $style='one_three';
?>
<li id="article-<?php the_ID(); ?>" <?php post_class($style); ?>>
<a href="<?php the_permalink() ?>">
<?php the_post_thumbnail('post-img-thumb-medium'); ?>
<h2><?php the_title(); ?></h2>
</a>
</li>
<?php endwhile; endif; ?>
</ul>
</div>

<?php */?>




<?php get_footer(); ?>