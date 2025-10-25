<?php if ( !defined('ABSPATH')) exit; ?>
<?php
/*
Template Name: Contact
*/
get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php 
// PAGE BANNER
get_template_part('template-parts/page/page_banner');
?>

<?php
// PAGE BACKGROUNDS START
include get_template_directory() . '/components/template/page/page_backgrounds_start.php';  
?>  

  <?php
  // SECTION - PAGE_DEFAULT_CONTENT.PHP
  include get_template_directory() . '/components/template/page/page_default_content.php';  
  ?> 


  <?php
  /*
  * SECTION
  */ 
  ?>
  <section class="background pb4">
    <div class="frame">	


      <?php
      get_template_part('template-parts/components/atoms/social'); 
      ?>


      <?php 
      // SECTION - TITLE
      $section_title = 'SECTION TITLE';
      include get_template_directory() . '/components/template/section/section_title.php'; 
      ?>
      <?php 
      // DEMO - - - GRID - BLOG
      include get_template_directory() . '/components/blog/demo_grid_blog.php'; 
      ?>

    </div> <!-- /frame -->
  </section>



<?php
// PAGE BACKGROUNDS END
include get_template_directory() . '/components/template/page/page_backgrounds_end.php';  
?>  



<?php /*?>
CONTACT ÀGE, NEEDS THE FOMR, BUT ALSO THE GEENRIC CONTACT DETAILS, LIKE ADRESS, EMAIL , TELEPHONE NUMBER, AND SOCIAL MENID LINKS, AND MAYBE EVENB THE MAICLHIMP SUBSCRIBE ETC<br />

OR CERATE ANOTHER PAGE FOR MAILCHIMP SUBSCRIBE TO NEWSLETTER...
<?php */?>

<?php /*?><h1 class="pageTitle"><?php the_title(); ?></h1>

<?php /*?><section id="content" class="grid full-col">
<article id="article" <?php post_class(); ?>>
<?php the_content(); ?>
</article>
</section><?php */?>

<?php endwhile; endif; ?>
<?php get_footer(); ?>