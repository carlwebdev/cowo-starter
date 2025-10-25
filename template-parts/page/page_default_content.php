<?php
/*
 * whole section - PAGE DEFAULT CONTENT: page title + the_content 
 */ 
?>  
<?php
  /* PAGE_DEFAULT_CONTENT.PHP
  * PAGE - MAIN CONTENT - page title + the content, as is  - amke tyh icnlude., so it exists as a concpet ... here & inphabuous, thugh not use in phabuus .. 
  */ 
  ?>
  <section class="background pb4">
  <div class="frame">	

    <?php
    // PAGE TITLE - - ??? - -  -title needs a generic page header hero title section...
    include get_template_directory() . '/components/template/page/page_title.php'; 
    ?>

    <?php
    // PAGE - THE CONTENT
    ?>
    <div class="m_htmleditor">	
      <?php the_content(); ?>
    </div> <!-- /m_htmleditor -->

  </div> <!-- /frame -->
  </section>