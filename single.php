<?php if ( !defined('ABSPATH')) exit; ?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php
// PAGE BACKGROUNDS START
get_template_part('template-parts/page/page_backgrounds_start');
// PAGE BANNER
get_template_part('template-parts/page/page_banner');
?>

<?php
/*
 * PAGE CONTENT
 */ 
?>
<section class="background pb4">
  <div class="frame">	

    <!-- <h1 class="tittel___NOT"><?php the_title(); ?></h1> -->
    <?php
    // PAGE TITLE - - ??? - -  -title needs a generic page header hero title section...
    include get_template_directory() . '/components/template/page/page_title.php'; 
    ?>

    <?php
    // EIMOE IMAGE.PHP !!!
    // include get_template_directory() . '/template-parts/image.php'; 
    ?>
    
    <div class="m_htmleditor">	
      <?php the_content(); ?>
    </div> <!-- /m_htmleditor -->


      <?php
      // POSTS NAV (Prev / Next)
      get_template_part('template-parts/nav/post_nav');
      ?>   

</div> <!-- /frame -->
</section>

<?php
// PAGE BACKGROUNDS END
get_template_part('template-parts/page/page_backgrounds_end');
?>  


<?php /*
<!-- NICE, OF COURSE, TO HAVE A SIIDEBAR IN THE SINGLE, JUST AS I HAVE IN INFOOOD !!! AND PROLLY ALSO IN WP_EIMEO, BUT FUCK IT HERE FOR NOW  -->
<div class="wrapper clearfix">
<aside class="grid leftbar">
<?php include 'sidebar-1.php';?>
</aside>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<section id="content" class="grid two-col">
<article id="article" <?php post_class(); ?>>
<h1 class="tittel"><?php the_title(); ?></h1>
<?php the_content(); ?>
</article>
</section>
<?php endwhile; endif; ?>
*/ ?>


<?php endwhile; endif; ?>
<?php get_footer(); ?>
