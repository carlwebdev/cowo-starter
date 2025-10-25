<?php if ( !defined('ABSPATH')) exit; ?>
<?php
if ( function_exists('register_sidebar') )
register_sidebars(4, array(
'before_widget' => '<div class="widget-wrapper">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
?>