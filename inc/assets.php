<?php 
// ASSETS
?> 
<?php
  // FAVICON // PERSONALIZE THIS, FOR COWOWO BRANDING AS A START !!! 
  include get_template_directory() . '/inc/favicon.php';  
?>  
<?php 
// CSS - this here below is the best way for now, remove verison after production perhaps ??? yes, so it stauy in cache
?>
<?php /*?><link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/style/css/global.css" media="all" /><?php */?>  <?php /*?>Scout<?php */?>
<?php /*?><link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/style/scss/global.css" media="all" /><?php */?> <?php /*?>Watch Sass<?php */?>
<?php /*?><link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/style/scss/global.css?ver=<?php echo rand(111,999)?>" media="all" /><?php */?>  <?php /*?>path can be edited for map (and also for css file !) ! - Watch Sass with .css.map ! :-)<?php */?>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/style/css/global.css?ver=<?php echo rand(111,999)?>" media="all" /><?php /*?>path can be edited for map (and also for css file !) ! - Watch Sass with .css.map ! :-)<?php */?>
<?php 
// ICONS
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<?php // include get_template_directory() . '/includes/variables.php'; ?>    

<?php 
/*
 * ICONS - BOXICONS - - - AS A WIDGET !!!!!!!!!!!!!
 * other icons, for social media icons, like fa, but boxicons, for now - start by using for social media only . lkater we'l see if changing the mdi or not ..
 */
?>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>