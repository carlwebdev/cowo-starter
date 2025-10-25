<?php if ( !defined('ABSPATH')) exit; ?>
<?php
/*
Template Name: Home
*/ 
get_header(); ?>
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
// PAGE HERO
include get_template_directory() . '/components/template/page/page_hero.php';  // cerate also page_hero.php ads a common gernealty out of the box !!
?>

<?php 
// PAGE BANNER - OBS VS SECTION BANNER  AS THE IMAGE MUST BE EXPLICITED... 
// include get_template_directory() . '/components/template/page/page_banner.php';  // cerate also page_hero.php ads a common gernealty out of the box !!
?>


<?php
// PAGE BACKGROUNDS START
include get_template_directory() . '/components/template/page/page_backgrounds_start.php';  
?>  



<?php
// PAGE - MAIN CONTENT
?>
<section class="dev_hide___NOT background padding_3_4___NOT accent__NOT pb4">  
    <div class="frame wide_NOT">

		<?php
		// PAGE - TITLE
		// include get_template_directory() . '/components/template/page/page_title.php'; 
		?>
		<?php
		// NEW - HGROUP
		$hgroup_title = 'A little something about us';
		$hgroup_text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
		include get_template_directory() . '/components/template/page/page_hgroup.php'; // obs h1 vs h2... _h1, _h2, _3 i prou // loop: hgroup, cta, hero
		?>
		<?php
		// SECTION LINK (URL & TEXT)
		// $section_title = 'Section Link - URL & Text';
		$section_link_url = 'https://www.example.com'; // & target etc
		$section_link_label = 'Give Me More!';
		$section_link_text = 'We will show you what is right';
		include get_template_directory() . '/components/template/section/section_link.php'; 
		?>


  </div> <!-- /frame -->     
</section>  






  <section class="background pb4">
    <div class="frame medium">	
      
      <?php
      // PAGE TITLE
      // include get_template_directory() . '/components/template/page/page_title.php'; 
      ?>

      <?php
      // THE CONTENT
      ?> 
      <section id="the_content">
          <div class="m_htmleditor">	
            <?php the_content(); ?>
          </div> <!-- /m_htmleditor -->
      </section>
      
    </div> <!-- /frame -->
  </section>
  
  
  
  
  
<section class="background pb4">
  <div class="frame">	

			<?php 
			// SECTION - TITLE (H2)
      // $section_title = '(Recent) All Posts';  // [(Recent) All Posts] // [NEWS - NAME OF BLOG POSTS PAGE DYNAMICALLY]
      $section_title = 'Updates'; // Recent Posts
			include get_template_directory() . '/components/template/section/section_title.php'; 
			?>

      <?php 
      // GRID - BLOG - INDEX (STANDALONE CASE)
      // include get_template_directory() . '/components/post_types/blog/grid_blog_index.php'; 
      include get_template_directory() . '/components/post_types/blog/grid_blog.php'; 
      ?>  

  </div> <!-- /frame -->
</section>


<!--
  test AS THIS HER EBELOW WANT WORKING, (THE OTHER HOMEPAGE ISSUE WAS FIXED WITH PLUGINS REMOVED) THEN TRY TO UPADTE THE WP INSTAL MANUALLY, 
  INSETAD OF USINGTT EHE ONBOARD SYSTEM WHICH OBVISOUSLY DIDNT WORK CORRECTLY
-->


  
  <section class="dev_hide background pb4">
    <div class="frame">	
  
			<?php 
			// SECTION - TITLE (H2)
      $section_title = 'About';  // [About]
			include get_template_directory() . '/components/template/section/section_title.php'; 
			?>

    </div> <!-- /frame -->
  </section>

  
  
  <section class="dev_hide background pb4">
    <div class="frame">	
 
			<?php 
			// SECTION - TITLE (H2)
			// section_title = get_field( 'titulo_actividades' );
      $section_title = 'Contact';  // [Contact]
			include get_template_directory() . '/components/template/section/section_title.php'; 
			?>
    
    </div> <!-- /frame -->
  </section>
  
  

<?php
// PAGE BACKGROUNDS END
include get_template_directory() . '/components/template/page/page_backgrounds_end.php';  
?>  

<?php get_footer(); ?>