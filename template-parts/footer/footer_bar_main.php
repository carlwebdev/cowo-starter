<?php 
/*
 * FOOTER BAR MAIN
 */
?>
<div class="footer_bar_main">

  <?php 
  // FOOTER - MAILTO
  get_template_part('template-parts/footer/footer_mailto');
  ?>

  <div class="footer_social">
    <?php 
    // FOOTER - SOCIAL // SOCIAL ICONS HERE WITH FLEX, BUT CENTERED...
    get_template_part('template-parts/components/atoms/social'); // TOD - ADD HEER THE ARG FOR THE PARENT WRAPPER CLASS !!!! NICE !!!
    ?>
  </div> <!-- /footer_social -->

  <?php /*?><div class="slogan"><h2><span>a custom WordPress theme</span> <span>by <a href="http://cowowo.cat/" target="_blank">@cowowo</a></span></h2></div> <?php */?>

</div> <!-- /footer_bar_main -->