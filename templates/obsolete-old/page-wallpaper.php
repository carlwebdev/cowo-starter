<?php if ( !defined('ABSPATH')) exit; ?>
<?php
/*
Template Name: Wallpaper
*/ 
get_header(); ?>

<div id="wallpaper"></div>
<script>
$("#wallpaper").backstretch([
<?php echo get_post_meta($post->ID, 'wallpaper', true); ?>
], {duration: 3600, fade: 950});
</script>
<div class="wrapper clearfix">
<aside class="grid leftbar">
<?php include 'submenu.php'; ?>
</aside>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<section id="content" class="grid two-col">
<article id="article" <?php post_class(); ?>>
<h1 class="tittel"><?php the_title(); ?></h1>
<?php the_content(); ?>
</article>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>