<?php if ( !defined('ABSPATH')) exit; ?>
<?php
/*
Template Name: Fullscreen
*/ 
get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<div class="frame">
  <div class="page_title"><h1><?php the_title(); ?></h1></div>
</div> <!-- /frame -->

<div class="frame">	
  <div class="m_htmleditor">	
    <?php the_content(); ?>
  </div> <!-- /m_htmleditor -->
</div> <!-- /frame -->



<?php /*?><section id="content" class="grid full-col">
<article id="article" <?php post_class(); ?>>
<h1 class="tittel"><?php the_title(); ?></h1>
<?php the_content(); ?>
</article>
</section><?php */?>




<?php endwhile; endif; ?>
<?php get_footer(); ?>