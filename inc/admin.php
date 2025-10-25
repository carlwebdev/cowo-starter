<?php if ( !defined('ABSPATH')) exit; ?>
<?php

// Remove stuff from WP Header
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
add_filter( 'pre_comment_content', 'wp_specialchars' );

// Switches default core markup for search form, comment form, and comments
// to output valid HTML5.
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

/*
* This theme supports all available post formats by default.
* See http://codex.wordpress.org/Post_Formats
*/
add_theme_support( 'post-formats', array('aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video') );

function twentyten_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'twentyten_remove_recent_comments_style' );

/*function remove_woo_commerce_generator_tag()
{
    remove_action('wp_head',array($GLOBALS['woocommerce'], 'generator'));
}
add_action('get_header','remove_woo_commerce_generator_tag');
*/

// Turn on/off RSS
//add_theme_support('automatic-feed-links');
remove_action( 'wp_head', 'feed_links' );
remove_action( 'wp_head', 'feed_links_extra', 3 );



// Admin login logo
function eimoe_logo()  
{  
    echo '<style type="text/css">#login h1 a { background-image:url(http://www.cowowo.cat/assets/img/logos/logo_cowowo.png) !important; background-size: 274px 63px !important; width: 274px !important; }</style>';
}  
add_action('login_head',  'eimoe_logo');

// Link 
function eimoe_min_link(){
return ('http://www.cowowo.cat/');
}
add_filter('login_headerurl', 'eimoe_min_link');

// Admin footer
function remove_footer_admin ()  
{  
    echo '<span id="footer-thankyou">Creat per <a href="http://www.cowowo.cat/" target="_blank">COWOWO</a></span>';  
}  
add_filter('admin_footer_text', 'remove_footer_admin');

// Remove things from admin
/*
if ( !current_user_can( 'edit_users' ) ) {
  add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
  add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
}*/

function remove_dashboard_widgets(){
  global$wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); 
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

// Update only for admin.
/* if ( !current_user_can( 'edit_users' ) ) {
 add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
 add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
 add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );
}*/

?>