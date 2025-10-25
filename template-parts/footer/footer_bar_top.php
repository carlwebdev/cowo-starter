<?php 
/*
 * FOOTER BAR TOP
 */
?>
<div class="footer_bar_top">
  <?php /*?>SOURCE - https://wordpress.stackexchange.com/questions/206703/the-proper-way-to-include-require-php-files-in-wordpress<?php */?>
  <?php 
  //  FOOTER - MENU  
  // include get_template_directory() . '/includes/menus/menu-footer.php'; 
  // include get_template_directory() . '/inc/menus/menu-footer.php'; // rename as footer-navigation / header-navigation / - mobile etc 
  get_template_part('template-parts/nav/menu-footer');
  ?>
  <?php 
  //  FOOTER - SCROLLTOTOP 
  get_template_part('template-parts/footer/footer_scrolltotop');
  ?>
</div> <!-- /footer_bar_top -->