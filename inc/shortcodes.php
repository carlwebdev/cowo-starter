<?php if ( !defined('ABSPATH')) exit; ?>
<?php

function eimoe_background( $atts, $content = null ) {
   return '</div><div class="fullscreen"><div class="wrapper content clearfix">' . do_shortcode($content) . '</div></div><div class="wrapper clearfix">';
}
add_shortcode('background', 'eimoe_background');

function eimoe_background_u_wrapper( $atts, $content = null ) {
   return '</div><div class="fullscreen">' . do_shortcode($content) . '</div><div class="wrapper clearfix">';
}
add_shortcode('background_u_wrapper', 'eimoe_background_u_wrapper');


function eimoe_video( $atts, $content = null ) {
   return '<div class="videoWrapper">' . do_shortcode($content) . '</div>';
}
add_shortcode('video', 'eimoe_video');

function clear_func( $atts ){
 return '<div class="clear"></div>';
}
add_shortcode( 'clear', 'clear_func' );

function eimoe_center( $atts, $content = null ) {
   return '<div class="center">' . do_shortcode($content) . '</div>';
}
add_shortcode('center', 'eimoe_center');


function eimoe_one_three( $atts, $content = null ) {
   return '<div class="one_three">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_three', 'eimoe_one_three');

function eimoe_one_three_last( $atts, $content = null ) {
   return '<div class="one_three last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_three_last', 'eimoe_one_three_last');

function eimoe_two_three( $atts, $content = null ) {
   return '<div class="two_three">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_three', 'eimoe_two_three');

function eimoe_two_three_last( $atts, $content = null ) {
   return '<div class="two_three last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('two_three_last', 'eimoe_two_three_last');

function eimoe_one_two( $atts, $content = null ) {
   return '<div class="one_two">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_two', 'eimoe_one_two');

function eimoe_one_two_last( $atts, $content = null ) {
   return '<div class="one_two last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_two_last', 'eimoe_one_two_last');

function eimoe_one_four( $atts, $content = null ) {
   return '<div class="one_four">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_four', 'eimoe_one_four');

function eimoe_one_four_last( $atts, $content = null ) {
   return '<div class="one_four last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_four_last', 'eimoe_one_four_last');

function eimoe_three_four( $atts, $content = null ) {
   return '<div class="three_four">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_four', 'eimoe_three_four');

function eimoe_three_four_last( $atts, $content = null ) {
   return '<div class="three_four last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('three_four_last', 'eimoe_three_four_last');

function eimoe_one_five( $atts, $content = null ) {
   return '<div class="one_five">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_five', 'eimoe_one_five');

function eimoe_one_five_last( $atts, $content = null ) {
   return '<div class="one_five last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_five_last', 'eimoe_one_five_last');

function eimoe_two_five( $atts, $content = null ) {
   return '<div class="two_five">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_five', 'eimoe_two_five');

function eimoe_two_five_last( $atts, $content = null ) {
   return '<div class="two_five last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('two_five_last', 'eimoe_two_five_last');

function eimoe_three_five( $atts, $content = null ) {
   return '<div class="three_five">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_five', 'eimoe_three_five');

function eimoe_three_five_last( $atts, $content = null ) {
   return '<div class="three_five last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('three_five_last', 'eimoe_three_five_last');

function eimoe_four_five( $atts, $content = null ) {
   return '<div class="four_five">' . do_shortcode($content) . '</div>';
}
add_shortcode('four_five', 'eimoe_four_five');

function eimoe_four_five_last( $atts, $content = null ) {
   return '<div class="four_five last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('four_five_last', 'eimoe_four_five_last');

function eimoe_one_six( $atts, $content = null ) {
   return '<div class="one_six">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_six', 'eimoe_one_six');

function eimoe_one_six_last( $atts, $content = null ) {
   return '<div class="one_six last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_six_last', 'eimoe_one_six_last');

function eimoe_five_six( $atts, $content = null ) {
   return '<div class="five_six">' . do_shortcode($content) . '</div>';
}
add_shortcode('five_six', 'eimoe_five_six');

function eimoe_five_six_last( $atts, $content = null ) {
   return '<div class="five_six last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('five_six_last', 'eimoe_five_six_last');

function eimoe_formatter($content) {
	$new_content = '';

	/* Matches the contents and the open and closing tags */
	$pattern_full = '{(\[raw\].*?\[/raw\])}is';

	/* Matches just the contents */
	$pattern_contents = '{\[raw\](.*?)\[/raw\]}is';

	/* Divide content into pieces */
	$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

	/* Loop over pieces */
	foreach ($pieces as $piece) {
		/* Look for presence of the shortcode */
		if (preg_match($pattern_contents, $piece, $matches)) {

			/* Append to content (no formatting) */
			$new_content .= $matches[1];
		} else {

			/* Format and append to content */
			$new_content .= wptexturize(wpautop($piece));
		}
	}

	return $new_content;
}

// Remove the 2 main auto-formatters
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');

// Before displaying for viewing, apply this function
add_filter('the_content', 'eimoe_formatter', 99);
add_filter('widget_text', 'eimoe_formatter', 99);

//Long posts should require a higher limit, see http://core.trac.wordpress.org/ticket/8553
@ini_set('pcre.backtrack_limit', 500000);

?>