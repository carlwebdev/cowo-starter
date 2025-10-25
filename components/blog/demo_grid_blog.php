<?php 
 /*
  * DEMO - - - GRID - BLOG  // obs, this is a demo versin !!!!!!!!!!!! not idyanmic !!!duuh 
  */
 ?>
<div class="grid_blog">	
  <?php for ($i = 1; $i <= 10; $i++) { ?>

    <?php 
     /*
      * DEMO - - - CARD - BLOG 
      */
     ?>
    <?php include get_template_directory() . '/components/blog/demo_card_blog.php'; ?>  

  <?php } ?>
</div> <!-- /grid_blog -->  