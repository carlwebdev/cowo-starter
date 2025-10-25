<?php
/* 
 * OBS - index.php - Is the default "Posts" page
 */
/*
 * index.php
 * 
 * a) posts page
 * b) search results
 *
 * c) ... wc pages ...
 */ 
?>
<?php if ( !defined('ABSPATH')) exit; ?>
<?php get_header(); ?>

<?php /*?><div class="m_htmleditor">	
  <h2>cowoTheme</h2>
  <p>Esta Web utiliza cookies propias y de terceros para ofrecerle una mejor experiencia y servicio. Al navegar o utilizar nuestros servicios el usuario acepta el uso que hacemos de las cookies. Sin embargo, el usuario tiene la opción de impedir la generación de cookies y la eliminación de las mismas mediante la selección de la correspondiente opción en su Navegador. En caso de bloquear el uso de cookies en su navegador es posible que algunos servicios o funcionalidades de la página Web no estén disponibles.</p>
  <h3>Reasons why</h3>
  <ul>
    <li>Información estadística del uso de la web.</li>
    <li>El formato de la web preferente en el acceso desde dispositivos móviles.</li>
  </ul>
</div> <!-- /m_htmleditor --><?php */?>

<?php /*?>
CHANGE THE HOEPAGE, TO PAGE HOME
AND THEN DEFINE THE PAGE FOR BLOG, AND NAME IT BLOG, NOT, ITS GOONNA BE THE INDEX...
INDEX - FOR BLOG... 
HAY QUE ESPCIFICAR QUE EL HOME SEA EL HOME DEFAULT...
<?php */?>


<?php /*?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php endwhile; endif; ?>
<?php */?>

<?php 
// PAGE BANNER (obs, has index file trick !)
// // // // // // include get_template_directory() . '/components/template/page/page_banner.php'; 
?>

<?php
// PAGE BACKGROUNDS START
include get_template_directory() . '/components/template/page/page_backgrounds_start.php';  
?>  

<section class="background pb4">  
  <div class="frame">	

    <?php 
    // PAGE TITLE
    // include get_template_directory() . '/components/template/page/page_title.php'; 
    ?>


    <?php 
    // GRID - BLOG - INDEX (STANDALONE CASE)
    // // // include get_template_directory() . '/components/post_types/blog/grid_blog_index.php'; // OBS  -here the args f the quewry come from above.
    ?>  
    





        <?php 
        // https://www.wpbeginner.com/wp-themes/how-to-show-the-current-taxonomy-title-url-and-more-in-wordpress/
        $term = get_queried_object();  // hmmm, rings a bell
        echo $term->name; // will show the name
        // echo $term->taxonomy; // will show the taxonomy
        // echo $term->slug; // will show taxonomy slug - NICE !!! - AND THEN USE THIS IN THE ARGS BELOW !!!!
        ?> 

          <?php
          $args = array(
          // 'post_type' => 'post', 
          'paged' => $paged, // vip to decalre this , i guess  / didnt do anything, test the refresh permalinks again ... 
          // 'category_name' => '',
          'category_name' => $term->slug, // ???????????? DOES THIS WORK ????? SEQUENTIAQLLY, ERGO NO TNEEDDED FO RFIST LEVEL ?!?! 
          // 'posts_per_page' => '6', // YES - tets - guess here must define sth in order to get a apagination ... 
          'posts_per_page' => '3',
          ); 
          // Custom query.
          $query = new WP_Query( $args );
          if ($query->have_posts()) : ?>

            <div class="grid_blog case_not_fullwidth___NOT">	
              <?php while ($query->have_posts()) : $query->the_post();?>

                <?php 
                // CARD - BLOG
                get_template_part('template-parts/post/card_blog');
                ?>   

              <?php endwhile; ?>  
            </div> <!-- /grid_blog --> 

          <?php endif; ?> 

          <?php 
          // PAGINATION         
          get_template_part('template-parts/nav/pagination');
          ?> 












  </div> <!-- /frame -->
</section>   

<?php
// PAGE BACKGROUNDS END
include get_template_directory() . '/components/template/page/page_backgrounds_end.php';  
?>  

<?php get_footer(); ?>