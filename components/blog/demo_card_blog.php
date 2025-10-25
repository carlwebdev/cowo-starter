<?php 
 /*
  * DEMO - - - CARD - BLOG
  */
 ?> 
<div class="card_blog">


  <div class="image">	<?php /*?>USE PICTURE TAG INSETAD.. BUT LINK ??? OUTSID EOR INSIEDE ?? HMMMM .... <?php */?>

  <picture>
    <?php /*?><img src="<?php echo $demo_img ?>"><?php */?>
    <img src="<?php echo $demo_img ?>" alt="">
    <?php // the_post_thumbnail('post-img-thumb-medium'); ?>
  </picture>


  </div> <!-- /image -->


  <div class="info">	

    <div class="title">
      <a href="">
        <?php /*?><h2>Title Of the Post</h2><?php */?>
        <?php /*?><h4>Title Of the Post</h4><?php */?>
        Title Of the Post
      </a>          
    </div> <!-- /title --> 

    <div class="text">text</div> <!-- /text --> 

    <div class="link">link</div> <!-- /link -->  

  </div> <!-- /info -->   

</div> <!-- /card_blog -->