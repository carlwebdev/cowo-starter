<?php 
 /*
  * CARD - BLOG
  */
 ?> 
<div class="card_blog">	

  <?php /*?>USE PICTURE TAG INSETAD.. BUT LINK ??? OUTSID EOR INSIEDE ?? HMMMM .... <?php */?>
  <?php /*?>
  <div class="image">	
    <picture>
      <!--
      <img src="<?php echo $demo_img ?>">
      <img src="<?php echo $demo_img ?>" alt="">
      -->
      <?php the_post_thumbnail('post-img-thumb-medium'); ?>
    </picture>
  </div> <!-- /image -->
  <?php */?>

  <picture>
    <?php /*?><img src="<?php echo $demo_img ?>"><?php */?>
    <?php /*?><img src="<?php echo $demo_img ?>" alt=""><?php */?>
    <?php the_post_thumbnail('post-img-thumb-medium'); ?>
  </picture>
  
  

  <div class="info">	


    <div class="category"> <!-- AL TH SLATER COPIED FOM WP_EMO, T PRINT CATEGORY, BUT ,UST PRINT THEM ALL, NOT JSUT HE PRIMARY CATEGRY ??  -->
      
      
      
      
      <!--
      this shoudl just be an include, for get_category / ies _poss (as in default posts, blog) 
      -->
      
      
      
      <?php /*?>Print / link the<?php */?> <!-- Category Name (NOT YET) -->
      
      <!-- Print the Category --> <!--- and then also make sure taht wp_eimoe & wp_cowo already have this built into them !!!-->
      <!-- copy fomr moss -  -->
      
      <?php 
      // https://developer.wordpress.org/reference/functions/get_the_category/  
      /*  
      // Show the First Category Name Only      
      $categories = get_the_category();
      if ( ! empty( $categories ) ) {
          // echo esc_html( $categories[0]->name );   
      }      
      */  
      // Make the first category link to the category page:
      $categories = get_the_category();
      if ( ! empty( $categories ) ) {
          echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>'; // y lo senlaces url category van doirectament, claro !!!
      }      
      ?>
      
      <?php /*?>
      <br>
      <br>
      <br>

      <!-- CHATGPT - list all categories of a post, clickable -->
      
      <?php
      // CHATGPT - list all categories of a post, clickable 


        // Get the categories for a post
        $categories = get_the_category();

        if ( ! empty( $categories ) ) {
            echo '<ul class="post-categories">';
            foreach ( $categories as $category ) {
                echo '<li style="display:inline-block;"><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . esc_attr( $category->name ) . '">' . esc_html( $category->name ) . '</a></li>';
            }
            echo '</ul>';
        }
        ?>

      <br>
      <br>
      <br>

      <?php
      // CHATGPT - list all categories of a post, clickable - in coma separated fomrat

      // Get the categories for a post
      $categories = get_the_category();

      if ( ! empty( $categories ) ) {
          $category_links = array();
          foreach ( $categories as $category ) {
              $category_links[] = '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . esc_attr( $category->name ) . '">' . esc_html( $category->name ) . '</a>';
          }
          echo implode( ', ', $category_links );
      }
      ?>

      <?*/ ?>


    </div> <!-- /title -->
    
    









  <?php /*?>
    <div class="title">
      <a href="<?php the_permalink() ?>">
        <!--
        <h2><?php the_title(); ?></h2>
        <h4><?php the_title(); ?></h4>
        -->
        <?php the_title(); ?>
      </a>          
    </div> <!-- /title --> 
    <?php */?>

    <h3>
      <a href="<?php the_permalink() ?>">
        <?php /*?><h2><?php the_title(); ?></h2><?php */?>
        <?php /*?><h4><?php the_title(); ?></h4><?php */?>
        <?php the_title(); ?>
      </a>          
    </h3>
    
    
    <div class="text"><?php the_excerpt(); ?></div> <!-- /text --> 


    <div class="tags"> 
      <?php the_tags( '<ul class="tags"><li>', '</li><li>', '</li></ul>' ); ?>
    </div> <!-- /title -->
    
    
    <div class="link"><a href="<?php the_permalink() ?>" title="Read More"><!-- link - Les mer - -->Read more</a></div> <!-- /link -->  

  </div> <!-- /info -->   

</div> <!-- /card_blog -->