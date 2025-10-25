<?php if ( !defined('ABSPATH')) exit; ?>
<?php

// Include Rel on galleries.
add_filter('wp_get_attachment_link', 'rc_add_rel_attribute');
function rc_add_rel_attribute($link) {
	global $post;
	return str_replace('<a href', '<a rel="galleri" href', $link);
}

// Set global size
global $content_width;
	if (!isset($content_width))
$content_width = 1180;

// Post-thumbnail support
if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1600, 500, true );
add_image_size( 'post-img-thumb-small', 273, 273, true );
add_image_size( 'post-img-thumb-medium',575, 359, true );
}


/*
// Excerpt length
function eimoe_excerpt_length($length) {
	return 7;
}
add_filter('excerpt_length', 'eimoe_excerpt_length');
*/


/*
if( !is_admin()){
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"), false, '1.11.1');
	wp_enqueue_script('jquery');
}
*/

// Registrer WP menu
register_nav_menus(array(
	'header-menu'      => __('Hovedmeny')
	)
);

// fix WPNAV from div to ul
function eimoe_wp_page_menu ($page_markup) {
preg_match('/^<div class=\"([a-z0-9-_]+)\">/i', $page_markup, $matches);
	$divclass = $matches[1];
	$replace = array('<div class="'.$divclass.'">', '</div>');
	$new_markup = str_replace($replace, '', $page_markup);
	$new_markup = preg_replace('/^<ul>/i', '<ul class="'.$divclass.'">', $new_markup);
	return $new_markup; }
add_filter('wp_page_menu', 'eimoe_wp_page_menu');

// List sub pages for menu
if(!function_exists('get_post_top_ancestor_id')){

function get_post_top_ancestor_id(){
    global $post;
    
    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    
    return $post->ID;
}}

// Make a read more link
function eimoe_read_more() {
	return ' <a href="' . get_permalink() . '">' . __('') . '</a>';
}

// Remove "[...]" at the end of an excerpt.
function eimoe_auto_excerpt_more($more) {
    return '' . eimoe_read_more();
}
add_filter('excerpt_more', 'eimoe_auto_excerpt_more');

// Read more in custom posts
function eimoe_custom_excerpt_more($output) {
	if (has_excerpt() && !is_attachment()) {
	$output .= eimoe_read_more();
    }
    return $output;
}
add_filter('get_the_excerpt', 'eimoe_custom_excerpt_more');

// Remove inline styles in WP Gallery
function eimoe_remove_gallery_css($css) {
    return preg_replace("#<style type='text/css'>(.*?)</style>#s", '', $css);
}
add_filter('gallery_style', 'eimoe_remove_gallery_css');


// ????????????
// Remove WPML css to make own
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);





// functions_cms.php

/*
 * GENERAL
 */
// ADD EXCERPT TO PAGES - https://www.wpbeginner.com/plugins/add-excerpts-to-your-pages-in-wordpress/
add_post_type_support( 'page', 'excerpt' );

// Ensure excerpt is enabled for posts
// add_post_type_support( 'post', 'excerpt' ); / /not tested her eyer, just pasted, now testing in phabulous.


/*
// DEV & DEBUG
// https://stackoverflow.com/questions/32801036/wordpress-is-not-using-home-php-and-instead-index-php-for-posts-page
// I used the following code(in functions.php) to display which template the page was using:
function show_template() {
	global $template;
	if ( current_user_can('administrator') ) {
	   print_r("<div class='template-name' style='padding: 5px; border: 3px solid red; background-color: #FFFFFF; position: fixed; bottom: 0; left: 0;'>$template</div>");
	}
 }   
*/




?>