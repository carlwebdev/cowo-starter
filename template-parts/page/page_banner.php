<?php
/*
 * PAGE BANNER
*/
?>
<?php
/*

1) CERAT AN INCLUDE FOR THE HERO BANNER, AS IT CAN BE RUED, JUST FETAURED IMAGE & PAGE TOIT EETC .. 
2) FIX IT UP INSIDE ALL GODD & NICE 


 * UNDER CONSTRUCTION  - HERO / PAGE BANNER
 */
?>

<?php /*?>1 - COPY ALL OF THIS INTO WP_WIMOE & WOP_COWOWO   <?php */?>
  
  <?php
  // https://developer.wordpress.org/reference/functions/has_post_thumbnail/  
  // Must be inside a loop.
  /* 
  if ( has_post_thumbnail() ) {
      the_post_thumbnail();
  }
  else {
      echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
          . '/images/thumbnail-default.jpg" />';
  }
  */
  ?>
    
    
  
  <?php /* if ( has_post_thumbnail() ) { ?>
    
  <?php } else { ?>
    
  <?php } */ ?> 



<section class="background">
<div class="wrapper full flush">
<?php
  // Get the ID of the page set as the "Posts page"
  $page_for_posts_id = get_option('page_for_posts');
  // echo $page_for_posts_id; // ok, the id is 11, and it's correct
  // Check if there is a "Posts page" set and get its ID


  // case 1 = PAGE FOR POSTS
  // if ( $page_for_posts_id ) : // old, before chekcing for more conditionals so that theis loop here is only ebetered relaly in the page for posts 
  if ( is_home() && $page_for_posts_id ) : // THIS SYNTAHX WAS THE ONLY CHANGE NEEDED, is_hoe checks for theindex page, and the page_for_posts_id is the id of the page set as the posts page, so it's perfect
    /*
    // Display the title of the "Posts page"
    $page_title = get_the_title( $page_for_posts_id );
    echo '<h1 class="page-title">' . $page_title . '</h1>';
    */
    // echo 'inside'; // ok, it's inside
    // Display the featured image of the "Posts page"
    if ( has_post_thumbnail( $page_for_posts_id ) ) :
      /*
      // echo '<div class="page-featured-image">';
      // echo get_the_post_thumbnail( $page_for_posts_id, 'full' ); // You can use 'thumbnail', 'medium', 'large', 'full' or any custom size
      // echo get_the_post_thumbnail_url( $page_for_posts_id, 'full' ); // _url !! TIMMY!
      // echo '</div>';
      */

       // Display the title of the "Posts page"
       $page_title = get_the_title( $page_for_posts_id ); // THIS CAN BE OUTOSE, AS SHWON ABOVE
       // echo '<h1 class="page-title">' . $page_title . '</h1>';
      ?>

      <div class="page_banner" style="background-image: url('<?php echo get_the_post_thumbnail_url( $page_for_posts_id, 'full' ); // You can use 'thumbnail', 'medium', 'large', 'full' or any custom size; ?>');">
        <div class="text io_fadein_below">
          <h1><?php // the_title(); ?><?php echo $page_title; // AND IT'S MULTILINGUAL, PERFECT ?></h1>
        </div>
      </div> <!-- /hero_banner --> 

    <?php else: // DONE, CHATGPT DID OT ... faltaria el else con dummy image but unnecssary for now ?>

      <?php /*
        <div class="image" style="background-image: url('<?php echo $dev_img_random; ?>');"></div> <!-- /image --> 
      */ ?>

    <?php
    endif; // Closing the nested if-else 
    ?>
  <?php else: // not th epage for posts, so the general case is here: ?>

    <?php /*
    <div class="image" style="background-image: url('<?php echo $dev_img_random; ?>');"></div> <!-- /image --> 
    */ ?>




    <?php
      // SRC = https://developer.wordpress.org/reference/functions/has_post_thumbnail/
      // Must be inside a loop.
      if ( has_post_thumbnail() ) {
        // the_post_thumbnail();
      ?>
        <div class="page_banner" style="background-image: url('<?php the_post_thumbnail_url('post-img-thumb-golden'); ?>')";>
            <!--<img src="<?php the_post_thumbnail_url('post-img-thumb-staff'); ?>" alt="">-->
            <!--<img src="<?php the_post_thumbnail_url('post-img-thumb-golden'); ?>" alt="">-->
            <!-- -->
            <div class="text io_fadein_below">
              <h1><?php the_title(); ?></h1>
            </div>
            
            <!-- <h1><?php the_title(); ?></h1> -->

        </div> <!-- /image --> 
      <?php
      }
      else {
          // echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
              // . '/images/thumbnail-default.jpg" />';
      ?>
      <div class="image case-no-image"></div> <!-- /image --> 
      <?php
      }
      ?>


  <?php
  endif;
  ?>
</div> <!-- /wrapper -->  
</section>