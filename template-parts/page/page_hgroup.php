<?php
/*
 * PAGE - hgroup aka page_title
 */ 
?>  
<hgroup>
  <?php
  // PAGE - TITLE - - ??? - -  -title needs a generic page header hero title section...
  // include get_template_directory() . '/components/template/page/page_title.php'; 
  ?>

  <h1 class="page_title_dynamic___NOT io_fadein_below">
  <?php
    $page_for_posts_id = get_option('page_for_posts');
    if ( is_home() && $page_for_posts_id ) :
      $page_title = get_the_title( $page_for_posts_id ); 
      ?>
        <?php echo $page_title; ?>
    <?php else: ?>
      <?php // the_title(); ?>
      <?php // echo $hgroup_title ?>
      <?php if($hgroup_title!="") { ?>
        <?php echo $hgroup_title ?>
      <?php } else { ?>
        <?php the_title(); ?>
      <?php } ?>
    <?php endif; ?>
  </h1>
  <p><?php echo $hgroup_text; ?></p>
</hgroup>