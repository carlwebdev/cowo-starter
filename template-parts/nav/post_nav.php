<?php 
/*
 * PHP
 * WORDPRESS POST NAV - POSTS NAV (Prev / Next)
 */
?>
<div class="post_nav case-hero___NOT">
  

  <div class="left"> 
    <?php /*?><?php previous_post_link( '%link', '<span>' . _x( '←', 'Previous post link' ) . '</span> Previous' ); ?><?php */?>
    <?php previous_post_link( '%link', '<span>' . _x( '<img src="'.get_bloginfo('template_url').'/assets/img/icons/ui/svg/batch_2_Arrow.svg" alt="" />', 'Previous post link' ) . '</span> <span>Previous</span>' ); ?> <?php /*?>Anterior <?php */?>       
  </div> <!-- /left -->
  <div class="right">
    <?php /*?><?php next_post_link( '%link', 'Next <span>' . _x( '→', 'Next post link' ) . '</span>' ); ?><?php */?>
    <?php next_post_link( '%link', '<span>Next</span> <span>' . _x( '<img src="'.get_bloginfo('template_url').'/assets/img/icons/ui/svg/batch_2_Arrow.svg" alt="" />', 'Next post link' ) . '</span>' ); ?> <?php /*?>Siguiente <?php */?>       
  </div> <!-- /right -->       
</div> <!-- /post_nav -->





<?php /*?>

FROM MUS, PERO AUQI YA HABAI LO DEL AS IMAGENES .. HMM


<div class="postNav">
  <div class="left"> 
    <?php previous_post_link( '%link', '<span>' . _x( '<img src="'.get_bloginfo('template_url').'/assets/img/icons/ui/icon-prev.png" />', 'Previous post link' ) . '</span> <span>Anterior</span>' ); ?>
  </div> <!-- /left -->
  <div class="right">
    <?php next_post_link( '%link', '<span>Siguiente</span> <span>' . _x( '<img src="'.get_bloginfo('template_url').'/assets/img/icons/ui/icon-next.png" />', 'Next post link' ) . '</span>' ); ?>
  </div> <!-- /right -->          
</div> <!-- /postNav -->

<?php */?>