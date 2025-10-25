<?php 
/*
 * PHP
 * Header Dropdowns
 * Nav & Search + possibly also login .... & rofile, account, cart, mitilanguage, social media buttons, etec etcetece
 */
/*
- TODO - BUIDL DROPDOWN NAV SO THAT IT FILLS THE SCREEEN... AT LEASY AS OPTIONS !! SO YES, MAKE HEADER DROWDON SELECTOR, TO CHOOSET THE FOMRAT !!!! NICE !!! -->
- BUT FIRTS, NEED TO IMPLEMET THE HEADER SELDCTOR PROPERLY HERE IN infoOD !!!!
*/
?>


<?php 
/*
 * Header Dropdowns
 * CASE NAV(MOBILE)
 */
// menu mobile - 2 options, either convert fomr the desktop, or just have aplain new one !!! could be nice, o que ???
?>
<div class="header_dropdowns case-nav jgTarget_nav___NOT" role="target_nav">
  <div class="frame">  
    
    <div class="nav_mobile">
      <?php /// // // include get_template_directory() . '/menus/menu.php'; ?>
      <nav class="mobile">
        <?php // include "components/template/header/menu.php"; ?>  
      </nav>
    </div> <!-- /nav_mobile -->

    <?php 
    // HEADER NAV
    // include('components/template/header/header_nav.php'); 
    ?>
    <?php 
    // HEADER - MENU - NAV - este no xiste !!!
    // include get_template_directory() . '/includes/menus/menu.php'; 
    // get_template_part('template-parts/nav/menu');
    get_template_part('template-parts/nav/menu-header');
    ?>

  </div> <!-- /frame -->  
</div> <!-- /header_dropdowns -->   






<?php 
/*
 * Header Dropdowns
 * CASE SEARCH = SEARCH FORM
 */
?>
<div class="header_dropdowns case-search jgTarget_search" role="target_search"> 
  <div class="frame">  

    <div class="header_searchform">

        <?php 
        // SEARCH FORM
        get_template_part('template-parts/search/wp_form_search');
        ?>
        
    </div> <!-- /header_searchform -->  

  </div> <!-- /frame -->  
</div> <!-- /header_dropdowns -->   



<?php 
/*
 * Header Dropdowns - language selector
 */
?>
<div class="header_dropdowns case-language jgTarget_search___NOT" role="target_language"> 
  <div class="frame">  
    langauge !!!
  </div> <!-- /frame -->  
</div> <!-- /header_dropdowns -->  



<?php 
/*
 * Header Dropdowns - Profile
 */
?>
<div class="header_dropdowns case-profile___NOT jgTarget_search___NOT" role="target_profile"> 
  <div class="frame">  
    profile !!!
  </div> <!-- /frame -->  
</div> <!-- /header_dropdowns -->  

<?php 
/*
 * Header Dropdowns - Sher / Social
 */
?>
<div class="header_dropdowns case-share___NOT jgTarget_search___NOT" role="target_share"> 
  <div class="frame">  
      

      <!-- CREATE  AHEADER ICON FOR SHARE, AND THEN A DROPDOWN FOR SOCAL MEDI ALINKS, AND WHATOT, EMAIL TOO, TO UATO SEND EMAI LETC  -->

      <div class="social_header">

        <?php 
        include('components/atoms/list-social.php'); // THESE CLEAN LISTS SHULD COME FORM DYNAMC, OR DB OR SETTINSG FOLDER INSTAD... 
        
        
        ?>



      </div> <!-- / social_header -->
      
      

  </div> <!-- /frame -->  
</div> <!-- /header_dropdowns -->  







<?php 
/*
 * Header Dropdowns - Settings (contains several buttons)
 */
?>
<?php 
/*
<div class="header_dropdowns case-profile___NOT jgTarget_search___NOT" role="target_settings"> 
  <div class="frame">  


    <div class="header_buttons___NOT dev_buttons" style="justify-content:flex-end;">
      <?php 
      // dev buttons - the target !!
      // include get_template_directory() . '/components/template/header/dev_buttons.php'; // the list, not the wrapper
      ?>
    </div> <!-- /header_buttons -->

  </div> <!-- /frame -->  
</div> <!-- /header_dropdowns -->  
*/
?>