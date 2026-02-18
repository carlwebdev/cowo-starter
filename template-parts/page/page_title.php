<?php
/*
 * PAGE TITLE (h1)
 * 
 * <h1 class="page_title_dynamic io_fadein_below"><?php the_title(); ?></h1>
 * 
 */ 
?>  
<h1 class="page_title_dynamic io_fadein_below">
<?php
  // Get the ID of the page set as the "Posts page"
  $page_for_posts_id = get_option('page_for_posts');
  // // // echo $page_for_posts_id; // ok, the id is 11, and it's correct
  // Check if there is a "Posts page" set and get its ID
  // case 1 = PAGE FOR POSTS
  // if ( $page_for_posts_id ) : // old, before chekcing for more conditionals so that theis loop here is only ebetered relaly in the page for posts 
  if ( is_home() && $page_for_posts_id ) : // THIS SYNTAHX WAS THE ONLY CHANGE NEEDED, is_hoe checks for theindex page, and the page_for_posts_id is the id of the page set as the posts page, so it's perfect
    $page_title = get_the_title( $page_for_posts_id ); // STEP 1 - RETRIEVE THE PAGE TITLE OF THE DEFAULT POSTS PAGE
    // REPO OPTIONS: News, Posts, Community, Blog, Articles, Stories, Journal, Updates, Insights + [Category Name]
    // TOKILL: NEWS - not dynamic, why ??? - bacause it just aint... name for the page with all the posts - i have that in wp eimeo or whatver !!!! -->
    // AND IT'S MULTILINGUAL, PERFECT


    // add otpisn for is_serach Serch ersults for $s 
    ?>
      <?php echo $page_title; ?>
  <?php else: ?>
    <?php the_title(); ?>
  <?php endif; ?>
</h1>