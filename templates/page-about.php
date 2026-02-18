<?php if ( !defined('ABSPATH')) exit; ?>
<?php
/*
Template Name: About
*/
get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php
// PAGE BACKGROUNDS START
get_template_part('template-parts/page/page_backgrounds_start');
// PAGE BANNER
get_template_part('template-parts/page/page_banner');
?>

<?php
// PAGE - MAIN CONTENT
?>
<section class="dev_hide___NOT background padding_3_4___NOT accent__NOT pb4">  
    <div class="frame wide_NOT">

		<?php
		// PAGE - TITLE - - ??? - -  -title needs a generic page header hero title section...
		// include get_template_directory() . '/components/template/page/page_title.php'; 
		?>
		<?php
		// NEW - HGROUP
		$hgroup_title = 'A little something about us';
		// $hgroup_title = '';
		// $hgroup_title = ''; / doesnt really requier if isset, as else goes to the_title() anyway
		$hgroup_text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
		include get_template_directory() . '/components/template/page/page_hgroup.php'; // obs h1 vs h2... _h1, _h2, _3 i prou // loop: hgroup, cta, hero
		?>
		<?php
		// SECTION LINK - URL & TEXT
		// $section_title = 'Section Link - URL & Text';
		// $section_url = 'https://www.google.com'; // & target etc
		$section_link_url = 'https://www.example.com'; // & target etc
		$section_link_label = 'Give Me More!';
		$section_link_text = 'We will show you what is right';
		include get_template_directory() . '/components/template/section/section_link.php'; 
		?>


  </div> <!-- /frame -->     
</section>  


  <?php
  /*
  * PAGE - MAIN CONTENT
  */ 
  ?>
  <section class="background pb4">
    <div class="frame medium">	

      <?php
      // TEST - SUBMENU
      // include get_template_directory() . '/inc/menus/submenu.php'; 
      get_template_part('template-parts/nav/submenu');
      ?>    

    <?php
    // PAGE TITLE H1
    get_template_part('template-parts/page/page_title');
    // PAGE CONTENT
    get_template_part('template-parts/page/page_content');
    ?>

    </div> <!-- /frame -->
  </section>




  <?php
  /*
  * SECTION
  */ 
  ?>
  <section class="background pb4" style="display:none;">
    <div class="frame">	

      <?php
      // SECTION - TITLE
      $section_title = 'SECTION TITLE';
      get_template_part('template-parts/section/section_title');
      ?>

      <?php 
      // DEMO - - - GRID - BLOG
      include get_template_directory() . '/components/blog/demo_grid_blog.php'; 
      ?>

    </div> <!-- /frame -->
  </section>



<?php
// PAGE BACKGROUNDS END
get_template_part('template-parts/page/page_backgrounds_end');
?>  

<?php endwhile; endif; ?>
<?php get_footer(); ?>