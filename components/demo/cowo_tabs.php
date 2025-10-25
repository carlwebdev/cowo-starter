<? 
/*
 * cowo-Boilerplate
 * HTML / PHP
 * cowo-tabs
 */ 
?>
<div class="cowo-tabs">

	<?php /*?>1 - THE TABS MENU<?php */?>
  <div class="cowo-tabs-menu">
    <ul>
      <li><a href="#tab-1"><!--Tab 1--></a></li>
      <li><a href="#tab-2"><!--Tab 2--></a></li>
      <li><a href="#tab-3"><!--Tab 3--></a></li>
      <li><a href="#tab-4"><!--Tab 4--></a></li>
    </ul> 
  </div>
  
  <?php /*?>2 - THE TABS<?php */?>
  <div class="tab" id="tab-1">        
    <? include('components/dev/lorem/slipsum-2.php'); ?>	
    <? include('components/dev/lorem/slipsum-2.php'); ?>	
    <? include('components/dev/lorem/slipsum-2.php'); ?>	
  </div> <!-- /tab --> 
  <div class="tab" id="tab-2">
    <? include('components/dev/lorem/slipsum.php'); ?>
  </div> <!-- /tab --> 
  <div class="tab" id="tab-3">
    <? include('components/dev/lorem/slipsum-2.php'); ?>
  </div> <!-- /tab -->  
  <div class="tab" id="tab-4">
    <? include('components/dev/lorem/slipsum.php'); ?>
    </div> <!-- /tab -->              
</div> <!-- /cowo-tabs --> 


<?php /*?>OBS - ISSUES WHEN TAB CONTENTS ARE LONS, AND DIFFFERENT AMONGTS EACHOTHER...<?php */?>

