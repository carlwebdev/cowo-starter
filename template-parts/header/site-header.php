<?php
/*
 * HEADER
 */
?>

<!--
<header id="header">
  <div class="wrapper">
    <div id="logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ; ?>">
    <?php /*?><img class="svgyes" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.svg" width="389" height="100" alt="" />
    <img class="svgno" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" width="389" height="100" alt="" /><?php */?>
    
    <?php /*?><img class="svgyes" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logos/LOGO_COWOWO_B.png" width="389" height="100" alt="" /><?php */?>
    <img class="svgyes" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logos/LOGO_COWOWO_B.png"/>
    
    </a>
    </div>
    <?php include 'menu.php'; ?>
  </div>
</header>
-->

<header id="header">

 <div class="frame wide">
    <div class="inner">
    
      <?php       
        // HEADER BAR TOP
        // get_template_part('template-parts/header/header_bar_top');
        // HEADER BAR MAIN
        get_template_part('template-parts/header/header_bar_main');
        // HEADER BAR BOTTOM
        // get_template_part('template-parts/header/header_bar_bottom');
      ?>
      
    </div> <!-- /inner -->
  </div> <!-- /frame -->  
     
  <?php
  // HEADER DROPDOWNS - shouldbnt thsi be outsdie ?? hmm o no 
  get_template_part('template-parts/header/header_dropdowns');
  ?>

</header>




<?php
// MODAL - NAV - LATERAL  -this could be moved to header.php ?????????????????????????????????? YES, DO IT
get_template_part('template-parts/modals/nav_lateral');
?>