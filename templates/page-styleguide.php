<?php if ( !defined('ABSPATH')) exit; ?>
<?php
/*
Template Name: Styleguide
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
get_template_part('template-parts/page/page_backgrounds_start');
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
		$hgroup_title = 'Styleguide Test';
		// $hgroup_title = '';
		// $hgroup_title = ''; / doesnt really requier if isset, as else goes to the_title() anyway
		$hgroup_text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
		// include get_template_directory() . '/components/template/page/page_hgroup.php'; // obs h1 vs h2... _h1, _h2, _3 i prou // loop: hgroup, cta, hero
		get_template_part('template-parts/page/page_hgroup');
		?>
		<?php
		// SECTION LINK - URL & TEXT
		// $section_title = 'Section Link - URL & Text';
		// $section_url = 'https://www.google.com'; // & target etc
		$section_link_url = 'https://www.example.com'; // & target etc
		$section_link_label = 'Give Me More!';
		$section_link_text = 'We will show you what is right';
		get_template_part('template-parts/section/section_link');
		?>
		<?php
		// PAGE - THE CONTENT 
		?>
		<div class="m_htmleditor">	
			<?php the_content(); ?>
		</div> <!-- /m_htmleditor -->

  </div> <!-- /frame -->     
</section>  





	<?php 
    /*
     * HTHML Editor - WYSIWYG Output
     */
    ?>
    <section class="background padding_3_4___NOT accent__NOT pb4">  
      <div class="frame wide_NOT">
 
		<?php
		// SECTION - TITLE
		$section_title = 'HTHML Editor - WYSIWYG Output';
		include get_template_directory() . '/components/template/section/section_title.php'; 
		?>   

        <?php 
		// DEMO - - - GRID - BLOG
		include get_template_directory() . '/components/demo/cowo_htmleditor.php'; 
		?>
    
      </div> <!-- /frame -->     
    </section>  









<?php 
/*
 * TABLES
 */
?>
<section class="background test___KILL padding_2___NOT pb4">  
  <div class="frame">        

    <?php
    // SECTION - TITLE
    $section_title = 'Table(s)';
    include get_template_directory() . '/components/template/section/section_title.php'; 
    ?>     

	<?php 
	// TODO - table through css grid spans todos seguidos trick de css tricks
	include get_template_directory() . '/components/demo/cowo_tables.php'; 
	?>
    
  </div>    
</section> 





     
<?php 
/*
 * FORMS
 */
?>
<section class="background padding_2 test_not"> 
	<div class="frame">        

		<?php
		// SECTION - TITLE
		$section_title = 'Forms';
		include get_template_directory() . '/components/template/section/section_title.php'; 
		?>           

		<?php 
		/*
		* DEMO - - - GRID - BLOG
		*/
		include get_template_directory() . '/components/demo/cowo_forms.php'; 
		?>
		
	</div> <!-- /frame -->     
</section>   








<?php 
/*
 * GRID LIST
 */
?>
<section class="background padding_2___NOT test_NOT pb4"> 
	<div class="frame">        

		<?php
		// SECTION - TITLE
		$section_title = 'Grid vs List '; // make this with material icons, and all to the right...
		include get_template_directory() . '/components/template/section/section_title.php'; 
		?>           

		<?php 
		/*
		* DEMO - - - GRID-LIST
		*/
		include get_template_directory() . '/components/demo/cowo_gridlist.php'; 
		?>
		
	</div> <!-- /frame -->     
</section>   







<?php
/*
 * SECTION
 */ 
?>
<!-- <section class="background" style="display:none;"> -->
<section class="background">
  <div class="frame">	

    <?php
    // SECTION - TITLE
    $section_title = 'SECTION TITLE';
    // include get_template_directory() . '/components/template/section/section_title.php'; 
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