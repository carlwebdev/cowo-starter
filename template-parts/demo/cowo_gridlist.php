<? 
/*
 * cowo-Boilerplate
 * Built by cowowo.cat
 * Project: 
 * Component: Cookies (section)
 * Filename: cookies.php
 */
?>
<div class="ui_gridlist">

  <div class="ui_gridlist_menu">
		<ul>
   	 	<li><button class="list">List View</button></li>
      <li><button class="grid">Grid View</button></li>	
      <?php /*?>TODO - ADD SEVERAK TYPES OF VISUALIZATUONS (LIKE IN POCKET, list, card, magazine, article)<?php */?>
		</ul>
  </div> <!-- /cowo-gridlist-menu -->
  
  <div class="ui_gridlist_items">
    <ul class="is-list"> <?php /*?>ARBITRARY STARTING POINT<?php */?>
			<?php for ($x = 0; $x <= 10; $x++) { ?>
				<li><!--Item 1--></li>
			<?php } ?>
    </ul>
  </div> <!-- /cowo-gridlist-items -->
  
</div> <!-- /cowo-gridlist -->