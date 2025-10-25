<?php 
/*
 * PHP
 * Card - Blog
 */
?>

<?php /*?>
<div class="item">
  <div class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
  <div class="text"><?php echo the_excerpt();?></div> 
  <div class="readMore"><a href="<?php the_permalink() ?>">Les mer</a></div>                     
</div> <!-- /item -->  
<?php */?>

<div class="card_result">	

  <?php /*?>2 SCENARIOS FOR IMAGE  <?php */?> 
  <?php /*?>SRC: https://developer.wordpress.org/reference/functions/has_post_thumbnail/ <?php */?> 
  <?php if(has_post_thumbnail()) { ?>
    <?php /*?>HAS IMAGE<?php */?>
    <div class="image" style="background-image: url('<?php the_post_thumbnail_url('post-img-thumb-4-3'); ?>');"> <?php /*?>TODO - PROLLY CHANGE THE IMAGE SIZE HERE ...<?php */?>	
      <?php /*?><?php the_post_thumbnail_url('post-img-thumb-full'); ?><?php */?>
      <?php // the_post_thumbnail('post-img-thumb-medium'); ?>
      <?php /*?><img src="<?php the_post_thumbnail('post-img-thumb-medium'); ?>"><?php */?>
      <?php /*?><img src="<?php the_post_thumbnail_url('post-img-thumb-medium'); ?>"><?php */?>
      <?php /*?><img src="<?php the_post_thumbnail_url('post-img-thumb-16-9'); ?>"><?php */?>

      <a href="<?php the_permalink() ?>">
        <?php /*?><img src="<?php the_post_thumbnail_url('post-img-thumb-4-3'); ?>" alt="<?php the_title(); ?>"><?php */?> <?php /*?>WORK IN PROGRESS - TODO - DEV img not alt filled in or declared.... outline dev error messag ecolro !!!<?php */?>
      </a>

    </div> <!-- /image -->
  <?php } else { ?>  
    <?php /*?>DOES NOT HAVE IMAGE<?php */?>
    <div class="image case-no-image"></div>
  <?php } ?>  


  <div class="info">	
    
    <div class="category">
      <?php /*?>Print / link the<?php */?> <!-- Category Name (NOT YET) -->
      <!-- Print the Category --> 
      <!--- and then also make sure taht wp_eimoe & wp_cowo already have this built into them !!!-->
      <!-- copy fomr moss -  -->

      <?php 
      // https://developer.wordpress.org/reference/functions/get_the_category/  

      // Show the First Category Name Only      
      $categories = get_the_category();
      if ( ! empty( $categories ) ) {
          // echo esc_html( $categories[0]->name );   
      }      

      // Make the first category link to the category page:
      $categories = get_the_category();
      if ( ! empty( $categories ) ) {
          echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>'; // y lo senlaces url category van doirectament, claro !!!
      }      
      ?>
    </div> <!-- /title --> 

    <div class="title">
      <a href="<?php the_permalink() ?>">
        <?php /*?><?php the_post_thumbnail('post-img-thumb-medium'); ?><?php */?>
        <?php /*?><?php the_post_thumbnail('post-img-thumb-full'); ?><?php */?>
        <?php /*?><?php the_post_thumbnail('post-img-thumb-4-3'); ?><?php */?>
        <?php the_title(); ?>
        <?php /*?>What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry<?php */?>
      </a>          
    </div> <!-- /title --> 

    <div class="specs"> 
      <div class="author">Posted by <?php the_author(); ?></div>
      <div class="date"><?php the_date(); ?></div>
    </div> <!-- /title --> 

    <div class="text">
    <?php // the_content(); ?> <?php /*?>VS EXCERPT ETC !!!  <?php */?>
    <?php // the_excerpt(); ?> <?php /*?>VS EXCERPT ETC !!!  <?php */?>
    <?php /*?>TODO - ADD REAL TEXT, EXCERPT OR SNIPPET DE THE CONETNT ETC <?php */?>
    <?php if(get_the_content()!='') { ?>
      <?php the_content(); ?>
    <?php } else { ?> 
        What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?
    <?php } ?> 
    </div> <!-- /text --> 

    <div class="link VS_readmore">
      <a href="<?php the_permalink() ?>">Read more</a> 
    </div> <!-- /link -->  

  </div> <!-- /info --> 
  
  
  
</div> <!-- /card_result -->