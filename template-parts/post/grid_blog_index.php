<?php 
 /*
  * GRID - BLOG - INDEX (STANDALONE CASE)
  */
 ?> 
<?php if (have_posts()) : ?>
  <div class="grid_blog">	
  <?php
    while (have_posts()) : the_post();
      get_template_part('template-parts/post/card_blog'); // CARD - BLOG
    endwhile;  
    ?>
  </div> <!-- /grid_blog -->  
<?php endif; ?>