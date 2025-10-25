<?php
/*
 * PAGE HERO - issue with height etc !!!
*/
?>
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
      // Display the featured image of the "Posts page"
      if ( has_post_thumbnail( $page_for_posts_id ) ) :
        // Display the title of the "Posts page"
        $page_title = get_the_title( $page_for_posts_id ); // THIS CAN BE OUTOSE, AS SHWON ABOVE
        ?>

        <div class="page_hero" style="background-image: url('<?php echo get_the_post_thumbnail_url( $page_for_posts_id, 'full' ); // You can use 'thumbnail', 'medium', 'large', 'full' or any custom size; ?>');">
          <div class="text io_fadein_below">
            <h1><?php // the_title(); ?><?php echo $page_title; // AND IT'S MULTILINGUAL, PERFECT ?></h1>
          </div>
        </div> <!-- /hero_banner --> 

      <?php else: // DONE, CHATGPT DID OT ... faltaria el else con dummy image but unnecssary for now ?>

        <?php /*
          <div class="image" style="background-image: url('<?php echo $dev_img_random; ?>');"></div> <!-- /image --> 
        */ ?>
        <div class="image case-no-image"></div> <!-- /image --> 

      <?php
      endif; // Closing the nested if-else 
      ?>
    <?php else: // not th epage for posts, so the general case is here: ?>

      <?php
        if ( has_post_thumbnail() ) {
          // the_post_thumbnail();
        ?>
          <div class="page_hero" style="background-image: url('<?php the_post_thumbnail_url('post-img-thumb-golden'); ?>')";>
              <div class="text io_fadein_below">
                <h1><?php the_title(); ?></h1>
              </div>
          </div> <!-- /image --> 
        <?php
        }
        else {
            // echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
                // . '/images/thumbnail-default.jpg" />';
        ?>
        <div class="image case-no-image"></div> <!-- /image --> 
        <?php /*
          <div class="image" style="background-image: url('<?php echo $dev_img_random; ?>');"></div> <!-- /image --> 
        */ ?>      
        <?php
        }
        ?>

    <?php
    endif;
    ?>
  </div> <!-- /wrapper -->  
</section>



<script>
// WOW, JS PARALLAX EFFECT IN 1MINUTE - wil try to do with css scrol anaimatiosn, but still, this is heavy!  
/*
document.addEventListener('scroll', function() {
    const scrolled = window.scrollY;
    const pageHero = document.querySelector('.page_hero');
    pageHero.style.backgroundPositionY = -(scrolled * 0.5) + 'px';
});
*/
/*
document.addEventListener('scroll', function() {
    const scrolled = window.scrollY;
    const pageHero = document.querySelector('.page_hero');
    const speed = 0.5; // Adjust this value to change the speed of the parallax effect / IT'S A PERFECT SPEED
    // const speed = 0.8; 
    // const speed = 0.3; 
    pageHero.style.backgroundPositionY = -(scrolled * speed) + 'px';
});
*/
</script> 

<script>
/*
// Adjust the height of the page_hero based on the header height
function adjustHeroHeight() {
    const header = document.querySelector('header'); // Adjust the selector to match your header
    const pageHero = document.querySelector('.page_hero');
    const headerHeight = header.offsetHeight;
    const viewportHeight = window.innerHeight;
    pageHero.style.height = (viewportHeight - headerHeight) + 'px';
}

// Adjust the height on page load and on window resize
window.addEventListener('load', adjustHeroHeight);
window.addEventListener('resize', adjustHeroHeight);
*/
</script>


<script>
/*  
// WOW, JS PARALLAX EFFECT IN 1MINUTE - wil try to do with css scrol anaimatiosn, but still, this is heavy!  
document.addEventListener('scroll', function() {
    const scrolled = window.scrollY;
    const pageHero = document.querySelector('.page_hero');
    const speed = 0.5; // Adjust this value to change the speed of the parallax effect / IT'S A PERFECT SPEED
    pageHero.style.backgroundPositionY = -(scrolled * speed) + 'px';
});

// Adjust the height of the page_hero based on the header height
function adjustHeroHeight() {
    const header = document.querySelector('header'); // Adjust the selector to match your header
    const pageHero = document.querySelector('.page_hero');
    const headerHeight = header.offsetHeight;
    const viewportHeight = window.innerHeight;
    pageHero.style.height = `calc(100dvh - ${headerHeight}px)`;
}

// Adjust the height on page load and on window resize
window.addEventListener('load', adjustHeroHeight);
window.addEventListener('resize', adjustHeroHeight);
*/
</script>