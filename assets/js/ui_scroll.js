// ui_footer vs ui_scroll


/* 
 * Elevator.js !!!!!!!!!! - !!! ELEVATOR.js
 */ 


/* 
 * UI - scrollToTop // jg_scrollToTop
 */ 

/*cowo_scrolltotop<?php */
/*?>really just a script, and a class in the html no css, rellly..<?php */

$(".jq_trigger_scrolltotop").click(function() { // WAS jq_trigger_scroll // rename as jq_trigger_scrollToTop - so that it''s generic // jq_trigger_scrolltotop
    $('html, body').animate({
        // scrollTop: $("#demo_wrapper").offset().top
				scrollTop: 0
    }, 800);
});

$("[role=scrolltotop]").click(function() { // BUTTON
    $('html, body').animate({
        // scrollTop: $("#demo_wrapper").offset().top
				scrollTop: 0
    }, 800);
});



// and also prepare scrollToDiv - generic
/* 
SOURCE - http://webdesignerwall.com/tutorials/animated-scroll-to-top 
thers is the image show part and the scroll part, here i jusat have the scrooll part
*/
/* THERE IS A FALLBACK IMPLEMENTED ALREADY - WITH ANCHOR */
$(document).ready(function(){
	// scroll body to 0px on click
	$('.bottom a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800); // 800 ms
		return false;
	});
});






/* 
 * UI - SCROLL TO A SPECIFIC DIV (NON-TOP CASE) // jg_scrollToContent , jg_scrollToDiv
 */ 

/*
$(".jq_trigger_scroll").click(function() {
    $('html, body').animate({
        scrollTop: $("#demo_wrapper").offset().top
    }, 800);
});
*/