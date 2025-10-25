<?php
/*
 * CONFIG - SCRIPTS (Development (not minified) VS Production (minified))
 */ 
?>


<!-- USAR IFS DE PHP CON SERVER SIDE STUFF PARA ACTIVAR DESACTIVAR SCRIPTS SEGUN SEA NECESARIO !!! -->
<!-- detallar geeranlidad de lso scripts, y ponerlos segun init.js con seccioenes de windoww load, docuemte ready, para ajax etc -->
<!-- TEST VALIDATE HTML 5 DOCTYPE, AND ADD MODERNIZR, and htmlshiv, etc etcetc ETC, test test test -->
<?php /* 
JavaScript at the bottom for fast page loading
Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary
*/ ?>


<!-- -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


<!-- <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script> -->


<!--
<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
-->
<!--
<script type="text/javascript" src="https://canhon.cowowo.website/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
-->


<?php
/*
 * ..fallbacks and things...
 */ 
?>

<?php /*?><script src="js/lib/selectivizr-1.0.2/selectivizr-min.js"></script>
<script src="js/lib/css3-mediaqueries.js"></script><?php */?>

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="assets/js/lib/selectivizr-min.js"></script>
<![endif]-->
<?php /*?>CSS3 MEDIA QUERIES (FOR INTERNET EXPLORER till 8 etc<?php */?>
<?php /*?><script src="js/lib/css3-mediaqueries.js"></script><?php */?>







<?php 
/*
 * Google Analytics
 * 
 * GOAL: WISH TO ADD THE CODE AS PHP VARIABLE FOMR CONFIG.PHP FILE, 
BUT DUNNO IF THE JS SNIPPET WILL READ IT IF IT'S IN AN EXTERNAL (JS) FILE
BUT COULD TURN IT INTO AN EXTERNAL PHP FIEL, WITH THE SCROT TAGS IN THERE... 
 */
?>
<script src="js/trackers/ga.js"></script>











<?php 
/* 
 * scripts for nav is_current - reuqire php variables, so must be here or in another php fiel called fomr here 
 */ 
?> 


<?php 
/*
 *
 * SITE BASICS
 * SITE NAVIGATION (CURRENT PAGE)
 *
 *
 */
?>

<?php /*?>SITE NAVIGATION (CURRENT PAGE)<?php */?>
<?php /*?>TODO - BUILD NAV CURRENT SYSTEM, SOMEHOW ... LO DE BOLD, KNOW HOW TO MAKE IT ... <?php */?>

<?php /*?>SITE NAVIGATION (CURRENT PAGE)

build the nav current ssytem, as external file o r config section, wher escripts are aplied en base a page li clas snme . esto ya lo monté en algun lado, cjnet or cowow or algo, anyways, just rebuiild it here again ...
<?php */?>


<!-- todo - 1- - re-build ciurrent nav section, using page name index variable, and asi asisign is-cuurret class, al imn the config file somewher -->

<!-- and later change form order to class name in the li !!!!!!!!!!!!! 

i had this in cjnet, also with the swipe actions !!!! remmeber that fucntionality !!! - and cleanu the script there as itl prolly be to overbos e... s


-->
<script>
// cowo_nav ... scripts_nav ...
  
$(document).ready(function(){  
<?php if($pagename == $pagename_products) { ?>
  // NAV #1
  $('nav.main li:nth-of-type(1) a').addClass('is_current');
<?php } elseif($pagename == $pagename_pricing) { ?>
  // NAV #1
  $('nav.main li:nth-of-type(2) a').addClass('is_current');  
<?php } elseif($pagename == $pagename_services) { ?>
  // NAV #2
  $('nav.main li:nth-of-type(3) a').addClass('is_current'); 
<?php } elseif($pagename == $pagename_blog) { ?>
  // NAV #3
  $('nav.main li:nth-of-type(4) a').addClass('is_current');
<?php } elseif($pagename == $pagename_about) { ?>
  // NAV #4
  $('nav.main li:nth-of-type(5) a').addClass('is_current');
<?php } elseif($pagename == $pagename_contact) { ?>
  // NAV #5
  $('nav.main li:nth-of-type(6) a').addClass('is_current');
<?php } ?>
});
</script>













<?php 
/*
 * POPUP COOKIES - MY CODE
 */ 
?>
<?php /*?><?php */?>
<script src="js/custom/cowo_cookies.js"></script> 



<?php 
/*
 * PRIORITY: LOW(EST)
 *
 * THIS CAN BE LOADED AS LATE AS POSSIBLE TOO, AS IT'S A POPUP THAT HAS TO BE SHOWN AFTER COMPLETE PAGE LOAD ANYWAYS
 *
 * POPUP COOKIES
 */
?>

<script>	
  
  // THIS EXIST HERE AND THEN ALSO AS A SEPARATE FILE - CHECK WHIAT IS BEING CALLED, AND FAVOUR THE EXTERNA L FILE - SO EVERYTHING IS INLUDED IN SEPARATE FILES / COMPONENTS ... 
  // LO QUE CAMBIA ES EL CLAS SNAME - SO GET THE BEST OPTOION & MAKE IT WPORK, WITH LOWERCASE SNAKE CASE OR WHATVER ... KEBAB CAS..E ??
  
	/*
 * COOKIES "popup/modal" - mover a website scripts, RENAME AS ...
 */
/* 1º aparece el modal de cookies, con delay, desde abajo */
$(document).ready(function(){		
	$('.modal_leydecookies').delay(1000).animate({
			bottom: '+=200' // los 200 que he escondido, por ejemplo
	},2000, 'swing'); 
});					
/* 2º se cierra el modal de cookies, con delay corto, hacia abajo */ 
$(document).ready(function(){
  $(".modal_leydecookies li:first-of-type a").click(function(){		
		// $(".leydecookies").hide(0);
		$('.modal_leydecookies').delay(300).animate({
				bottom: '-=200' // los 200 que he escondido, por ejemplo
		},1000, 'swing'); 	
  });
});
</script> 









<?php 
/*
 * BASICS 
 */ 
?>

<script src="js/custom/cowo_index.js"></script> <?php /*?>TODO - NOT DOING ANYTHING<?php */?> 



<script src="js/custom/cowo_tabs.js"></script>
<?php /*?><script src="js/custom/cowo_dropdown.js"></script><?php */?>
<script src="js/custom/cowo_dropdown - previous.js"></script>

<script src="js/custom/cowo_accordion.js"></script>

<script src="js/custom/cowo_accordion_vallenato.js"></script>

<script src="js/custom/cowo_gridlist.js"></script>



<?php /*?>
<script src="js/custom/cowo_tabs.js"></script>
<script src="js/custom/cowo_accordion.js"></script>
<script src="js/custom/cowo_dropdown.js"></script>
<?php */?>



<?php /*?>name_name - same in script, sass partial - and html php component... <?php */?>



<?php /*?><script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script><?php */?>



<?php /*?>THS COULD BE A PHP INCLUDE... FOR SIMPLICITY... and also for easy of copy & paste between projects , which is the whole idea <?php */?>












<?php 
/* 
 * HEADER - "RESIZE HEADER ON SCROLL"
 *
 * thi when cominbined with headroom.js .. maybe im not claling it right, yet, gloabal scss cjeck !!!
 * LAYOUT - HEADER
 * PLUGIN - HEADER - "resize header on scroll" aka "do whatver to whetever when whatever"
 */
?>
<?php include('js/components/resize_header_on_scroll.php'); // !!! CAN BE SOLVED BY CSS SCROLL DRIVEN ANIMATIONS (KP VIDEO)?>

<?php 
/* 
 * LAYOUT
 * HeadRoom.js 
 */
?>
<?php include('js/components/headroom.php'); ?>

<?php 
/* 
 * LAYOUT
 * Masonry.js
 */ 
?>
<?php include('js/components/masonry.php'); ?>

<?php 
/* 
 * UI MEDIA
 * PLUGIN - SLICK - SLIDER & CAROUSEL
 */
?>
<?php include('js/components/slick.php'); ?>

<?php 
/* 
 * UI MEDIA
 * jQuery Plugin - RWD - Videos - FitVids.js - OBSOLETE NOWADAYS
 */ 
?>
<?php include('js/components/fitvids.php'); // !!! ?>


<?php 
/*
 * jQuery Plugin - RWD - Lightbox
 */
?>
<?php include('js/components/lightboxme.php'); ?>


<? 
/* 
 * UI - Mmenu - Side menu
 */ 
?>
<script src="js/plugins/mmenu/jquery.mmenu.min.all.js"></script>
<script>
	$(function() {
		$('nav#menu').mmenu(); // select what should be the side menu
	});
</script> 	






<?php 
/* 
 * UI - base
 */ 
?> 
<script src="js/scripts.js"></script> <?php /*?>EMPTY FOR NOW<?php */?>
<script src="js/ui_header.js"></script>
<script src="js/ui_texts.js"></script>
<script src="js/ui_scroll.js"></script>

<!-- WTF REPES !!! -->

<script src="js/custom/cowo_tabs.js"></script>
<script src="js/custom/cowo_accordion.js"></script>
<script src="js/custom/cowo_dropdown.js"></script>


<?php /*?>jQuery UI - Accordion<?php */?>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
$(function() {
	$( "#accordionxx" ).accordion();
});
</script>   



<?php 
/*
 * PRIORITY: LOW(EST)
 *
 * THIS CAN BE LOADED AS LATE AS POSSIBLE, SO I PUT IT AT THE END 
 *
 * Plugin - Mailgo
 * https://mailgo.dev/docs/installation#cdn
 *
 * This plugin is activated on mailto: & tel: anchors
 */
?>
<script src="https://cdn.jsdelivr.net/npm/mailgo@0.9.18/dist/mailgo.min.js"></script>