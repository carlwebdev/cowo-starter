<?php 
// PAGE CONTENT END
get_template_part('template-parts/page/page_content_end');
// FOOTER
get_template_part('template-parts/footer/site-footer');
// PAGE END
get_template_part('template-parts/page/page_end');
?> 
<?php wp_footer(); ?>
<?php 
// SCRIPTS
include get_template_directory() . '/inc/scripts.php'; 
// CREDITS
include get_template_directory() . '/inc/credits.php'; 
?>    
</body>
</html>