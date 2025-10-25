<?php 
// SCRIPTS - should this be before or after wp_footer() ?? - AFTER
?> 

<?php
 /*
  * SIDEBAR AKA SCRIPTS
  */ 
// include get_template_directory() . '/components/footer.php'; 
?>
<?php /*?><script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ga.js"></script><?php */?>
<?php /*?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script><?php */?>

<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>

<?php 
// UI - base
?> 
<script src="<?php bloginfo('template_url'); ?>/assets/js/scripts.js"></script> <?php /*?>EMPTY FOR NOW<?php */?>
<script src="<?php bloginfo('template_url'); ?>/assets/js/ui_header_height.js"></script> <?php /*?>TODO - CHECK IF IT GLITCHES, AND IF YES, THEN FIX IT - OBS, NOT IMEPLEMTED IN THIS THEME YET !!!<?php */?> 
<script src="<?php bloginfo('template_url'); ?>/assets/js/ui_header.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/ui_texts.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/ui_scroll.js"></script>
<script src='<?php bloginfo('template_url'); ?>/assets/js/intersection-observer.js'></script>






<script>
// WOW, JS PARALLAX EFFECT IN 1MINUTE - wil try to do with css scrol anaimatiosn, but still, this is heavy!  
/*
document.addEventListener('scroll', function() {
    const scrolled = window.scrollY;
    const pageHero = document.querySelector('.page_hero');
    pageHero.style.backgroundPositionY = -(scrolled * 0.5) + 'px';
});
*/
/* */
document.addEventListener('scroll', function() {
    const scrolled = window.scrollY;
    const pageHero = document.querySelector('.page_hero');
    const speed = 0.5; // Adjust this value to change the speed of the parallax effect / IT'S A PERFECT SPEED
    // const speed = 0.8; 
    // const speed = 0.3; 
    pageHero.style.backgroundPositionY = -(scrolled * speed) + 'px';
});

// HACK SOLUTION FOR THE HEADER HEIGHT
/*
// Force scroll to the top of the page on load
window.addEventListener('load', function() {
    window.scrollTo(0, 0);
});
*/
// Force scroll to the top of the page on DOMContentLoaded
document.addEventListener('DOMContentLoaded', function() {
    window.scrollTo(0, 0);
});

</script> 






<?php 
// UI - MOVED TO ROOT FOLDER AND MAYBE RENAMED FIEL AS ui_ 
?> 
<script src="<?php bloginfo('template_url'); ?>/assets/js/ui_gridlist.js"></script>
<?php 
// LIGHT/DARK MODE TOGGLE - - - THIS WAS COMMENTED FOR SOME REASON
?>
<script src="<?php bloginfo('template_url'); ?>/assets/js/dark-mode.js"></script> 