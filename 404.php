<?php if ( !defined('ABSPATH')) exit; ?>
<?php get_header(); ?>



<?php
// PAGE BACKGROUNDS START
include get_template_directory() . '/components/template/page/page_backgrounds_start.php';  
?>  



<?php /*?>
TEXT COPIED FOMR NORWEIGIAN'S WEBSIET
Not Found
Most likely causes:<br>
<br>
There might be a typing error in the address<br>
If you clicked on a link, it may be out of date
<?php */?>



<?php /*?>
<div class="frame">	

  <div class="m_htmleditor">	
    <?php // the_content(); ?>
    <p>Go to <a href="<?php echo esc_url( home_url( '/' ) ); ?>/" title="Home">Home</a>.</p>
  </div> <!-- /m_htmleditor -->
  
  <div class="m_htmleditor">	
    <h2>Page not found</h2>
    <p>Esta Web utiliza cookies propias y de terceros para ofrecerle una mejor experiencia y servicio. Al navegar o utilizar nuestros servicios el usuario acepta el uso que hacemos de las cookies. Sin embargo, el usuario tiene la opción de impedir la generación de cookies y la eliminación de las mismas mediante la selección de la correspondiente opción en su Navegador. En caso de bloquear el uso de cookies en su navegador es posible que algunos servicios o funcionalidades de la página Web no estén disponibles.</p>
    <h3>Reasons why</h3>
    <ul>
      <li>Información estadística del uso de la web.</li>
      <li>El formato de la web preferente en el acceso desde dispositivos móviles.</li>
    </ul>
  </div> <!-- /m_htmleditor -->

</div> <!-- /frame -->
<?php */?>


<section class="background padding_bottom___NOT___ padding-3__NOT___">
<div class="frame">


  <div class="page_title">
    <?php /*?><?php the_title(); ?> // <?php */?>
  <h1>Error 404 - Page not found</h1>
  </div>

  <!-- hgroup.a_page-title VS _section_tirle -->

  <div class="m_htmleditor">	
    <p>Most likely causes:</p>
    <ul>
      <li>There might be a typing error in the address</li>
      <li>If you clicked on a link, it may be out of date</li>
    </ul>
    <p>Go (Return) to (the) 
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Homepage">homepage</a>.
    </p>

  </div> <!-- /m_htmleditor -->
  
</div> <!-- /frame -->  
</section> 



<?php /*?><div class="wrapper clearfix"><?php */?>
<?php /*?><section id="content" class="grid full-col">
<article id="article-<?php the_ID(); ?>" <?php post_class(); ?>>
<h1 class="post-title">Error 404 - Page not found.</h1>
<p>Go to <a href="<?php echo esc_url( home_url( '/' ) ); ?>/" title="Home">Home</a>.</p>
</article>
</section><?php */?>


<?php
// PAGE BACKGROUNDS END
include get_template_directory() . '/components/template/page/page_backgrounds_end.php';  
?>  

<?php get_footer(); ?>