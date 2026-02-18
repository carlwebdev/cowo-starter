<?php 
/*
 * HEADER BAR MAIN
 */
?>
<div class="header_bar_main">

  <?php 
  // HEADER - LOGO
  get_template_part('template-parts/header/header_logo');
  ?>
  
  <?php 
  // HEADER - MENU - NAV
  get_template_part('template-parts/nav/menu-header');
  ?>

  <div class="header_options_temp">

    <?php 
    // HEADER OPTIONS
    get_template_part('template-parts/header/header_options'); 
    // DEV OPTIONS
    // get_template_part('template-parts/header/dev_options');

    // DEV buttons ..
    // get_template_part('template-parts/header/dev_buttons');
    
    // HEADER - SOCIAL
    get_template_part('template-parts/header/header_social');
    ?>
  
  </div> <!-- /header_options_temp -->

</div> <!-- /header_bar_main -->