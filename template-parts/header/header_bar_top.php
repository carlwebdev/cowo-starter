<?php 
/*
 * HEADER BAR TOP
 */
?>
<div class="header_bar_top">


    <?php /*?> <?php */?>         
    <div class="wp_searchBox"><?php get_search_form(); ?></div> <!-- /wp_searchBox --> 
    

    <?php 
    /*  
    <div class="m_language"><span class="material-symbols-outlined">search</span></div> <!-- /m_language SELECTOR -->
    <div class="m_language"><span class="material-symbols-outlined">language</span></div> <!-- /m_language SELECTOR -->
    */
    ?>
    
    <?php 
    // HEADER - SOCIAL
    include get_template_directory() . '/components/template/header/header_social.php'; 
    ?>

</div> <!-- /header_bar_top -->