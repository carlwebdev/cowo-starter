<?php 
/* 
 *
 * page.php_not anuympore
 * THIS IS THE "DEFAULT TEMPLATE"
 *
 */ 
?>
<?php if ( !defined('ABSPATH')) exit; ?>
<?php get_header(); ?>


<?php /*?><aside class="grid leftbar">
<?php include 'submenu.php'; ?>
</aside><?php */?>


<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<?php
/*
 * PAGE BASICS, THE ARTICLE, VS SECTION.... 
 */ 
?>
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



<?php /*?>
<section id="content_not" class="grid two-col">
<article id="article" <?php post_class(); ?>>

<h1 class=""><?php the_title(); ?></h1>
<h2 class=""><?php the_title(); ?></h2>

<div class="the_content">    
  <?php the_content(); ?>
</div>    

</article>
</section>
<?php */?>


<?php /*?>
<section id="content" class="grid full-col">

  <h1 class=""><?php the_title(); ?></h1>
  <h2 class=""><?php the_title(); ?></h2>


  <article id="article" <?php post_class(); ?>>

    <h1 class=""><?php the_title(); ?></h1>
    <h2 class=""><?php the_title(); ?></h2>

    <?php the_content(); ?>
  </article>
  
</section>
<?php */?>


<?php /*?><section id="content" class="grid full-col">
<article id="article" <?php post_class(); ?>>
<?php the_content(); ?>
</article>
</section><?php */?>




<?php endwhile; endif; ?>
<?php get_footer(); ?>