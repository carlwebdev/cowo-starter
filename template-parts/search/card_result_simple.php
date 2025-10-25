<?php 
/*
 * PHP
 * Card - Result - Simple
 */
?>
<div class="card_result_simple">	

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

  </div> <!-- /category --> 

  <div class="title">
    <a href="<?php the_permalink() ?>">
      <?php /*?><?php the_post_thumbnail('post-img-thumb-medium'); ?><?php */?>
      <?php /*?><?php the_post_thumbnail('post-img-thumb-full'); ?><?php */?>
      <?php /*?><?php the_post_thumbnail('post-img-thumb-4-3'); ?><?php */?>
      <?php the_title(); ?>
      <?php /*?>What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry<?php */?>
    </a>          
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

  <!-- <div class="readMore"><a href="<?php the_permalink() ?>">Les mer</a></div> -->

</div> <!-- /card_result -->