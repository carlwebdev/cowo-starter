<?php 
 /*
  * GRID - BLOG - INDEX (STANDALONE CASE)
  */
 ?> 
<?php if (have_posts()) : ?>
  <div class="grid_blog">	
  <?php while (have_posts()) : the_post(); ?>

    <?php 
     /*
      * CARD - BLOG
      */
     include get_template_directory() . '/components/post_types/blog/card_blog.php'; 
     ?>  

  <?php // endwhile; endif; ?>
  <?php endwhile;  ?>
  </div> <!-- /grid_blog -->  
<?php endif; ?>