<?php if ( !defined('ABSPATH')) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="light"> <?php /* The <?php language_attributes(); ?> is specific to WordPress, and is used to set the language attribute in the HTML tag. */ ?>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0">
<title><?php wp_title('–', true, 'right'); ?><?php bloginfo('name'); ?></title>
<?php
// ASSETS
include get_template_directory() . '/inc/assets.php';  
?>  
<script src="<?php bloginfo('template_url'); ?>/assets/js/dark-mode-head.js"></script> 
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
// PAGE START
get_template_part('template-parts/page/page_start');
// SITE HEADER
get_template_part('template-parts/header/site-header');
// PAGE CONTENT START
get_template_part('template-parts/page/page_content_start');
?>  