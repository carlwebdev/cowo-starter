<?php 
/* 
 *
 * page.php
 * THIS IS THE "DEFAULT TEMPLATE"
 *
 */ 
?>
<?php if ( !defined('ABSPATH')) exit; ?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>







  <?php /*?> 
  build a generci contact module system
  
  make a 2 colum susyetem, for text to the let, and fomr to he right
  
  and add socme social icons...
  
  also add social icons to header, and to footer - using teh same list  perhaps... <?php */?>
  <?php /*?>	<br />
  title needs a generic page header hero title section...<br />
  <br /><?php */?>


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
* PAGE - MAIN CONTENT - - - PAGE BASICS, THE ARTICLE, VS SECTION.... 
*/ 
?>
<section class="background pb4">
  <div class="frame">	
    <?php
    // PAGE TITLE H1
    get_template_part('template-parts/page/page_title');
    // PAGE CONTENT
    get_template_part('template-parts/page/page_content');
    ?>
  </div> <!-- /frame -->
</section>




<?php
// PAGE BACKGROUNDS END
include get_template_directory() . '/components/template/page/page_backgrounds_end.php';  
?>  

<?php endwhile; endif; ?>
<?php get_footer(); ?>