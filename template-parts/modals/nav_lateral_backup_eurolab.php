<?php
  /*
   * NAV - LATERAL
   */ 
?>    

<nav id="lateral">
  <ul>

      <?php /*
      <?php
      // PAGE LINK - DYNAMIC & MULTILINGUAL
      // Assume $page_id is the ID of the page you want to link to in the default language
      $page_id = 40; // 31 = ID of page "Cursos" in Spanish (Main language)
      // Use WPML to get the ID of the translated page, if it exists
      $translated_page_id = apply_filters('wpml_object_id', $page_id, 'page', true);
      // Use get_permalink() to get the URL of the translated page
      $page_link = get_permalink($translated_page_id);
      // Use get_the_title() to get the title of the translated page
      $page_title = get_the_title($translated_page_id);
      // Echo out the link with the page title as the link text
      ?>
      <li>
        <a href="<?php echo esc_url($page_link); ?>">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/services/eurolab-proteccion-solar.png">
          <?php echo esc_html($page_title); ?>
        </a>
      </li>
      */ ?>  



<?php
// PAGE LINKS - NOW WITH ARRAY (OF PAGE IDS)
// DYNAMIC & MULTILINGUAL

// Assume $page_ids is an array of IDs of the pages you want to link to in the default language
$page_ids = array(40, 49, 69, 102, 112, 132); // Replace with your actual page IDs - These are the 6 page ids in main language (Spanish)

/*
// Assume $icon_paths is an array of paths to the icon images corresponding to the pages
$icon_paths = array( // OBS, NOT REALLY USING ICON PATH AS SUCH, BUT IOCN NAME... GOOD ENOUGH FOR NOW, I CAN ALWAY CHANGE THE VARIABLE NAME IN THE FUTURE

  // 'path/to/icon1.png',
  // 'path/to/icon2.png',
  // 'path/to/icon3.png' 

  'eurolab-proteccion-solar.png',
  'eurolab-test-de-eficacia.png',
  'eurolab-test-de-uso.png',
  'eurolab-irritacion-dermica.png', // WOW COPILOT !!!
  'eurolab-microbiologia.png',
  'eurolab-quimica.png'
); // Replace with your actual icon paths
*/

// Assume $icon_names is an array of names of the icon images corresponding to the pages
$icon_names = array(
  /*
  'icon1.png',
  'icon2.png',
  'icon3.png'
  */
  'eurolab-proteccion-solar.png',
  'eurolab-test-de-eficacia.png',
  'eurolab-test-de-uso.png',
  'eurolab-irritacion-dermica.png', // WOW COPILOT !!!
  'eurolab-microbiologia.png',
  'eurolab-quimica.png'
); // Replace with your actual icon names


// Define the base path for the icons
// $base_icon_path = 'path/to/icons/'; // Replace with your actual base path
$base_icon_path = esc_url( get_template_directory_uri() ).'/assets/img/icons/services/'; 


/*
// Ensure both arrays have the same length
if (count($page_ids) !== count($icon_paths)) {
  echo 'Error: The number of page IDs and icon paths must be the same.';
  return;
}
*/

// Ensure both arrays have the same length
if (count($page_ids) !== count($icon_names)) {
  echo 'Error: The number of page IDs and icon names must be the same.';
  return;
}


// foreach ($page_ids as $page_id) {
foreach ($page_ids as $index => $page_id) {  
    // Use WPML to get the ID of the translated page, if it exists
    $translated_page_id = apply_filters('wpml_object_id', $page_id, 'page', true);

    // Use get_permalink() to get the URL of the translated page
    $page_link = get_permalink($translated_page_id);

    // Use get_the_title() to get the title of the translated page
    $page_title = get_the_title($translated_page_id);
    /*
    // Get the featured image ID
    $featured_image_id = get_post_thumbnail_id($translated_page_id);

    // Get the URL of the featured image
    $featured_image_url = wp_get_attachment_image_src($featured_image_id, 'full')[0];
    */

    /*
    // Get the corresponding icon path
    $icon_path = $icon_paths[$index];
    */

    // Get the corresponding icon path
    $icon_path = $base_icon_path . $icon_names[$index];
    
    
    // Echo out the link with the page title as the link text
    
    ?>
    <?php /*
    <div class="page-link-block">
        <a class="" href="<?php echo esc_url($page_link); ?>"><?php echo esc_html($page_title); ?></a>
        <a class="" href="<?php echo esc_url($page_link); ?>">
            <img src="<?php echo esc_url($featured_image_url); ?>" alt="<?php echo esc_attr($page_title); ?>">
        </a>
    </div>
    */ ?>
    <li>
      <a href="<?php echo esc_url($page_link); ?>">
        <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/services/eurolab-proteccion-solar.png"> -->
        <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/services/<?php echo esc_url($icon_path); ?>"> -->
        <img src="<?php echo esc_url($icon_path); ?>">
        <?php echo esc_html($page_title); ?><!-- (<?php echo esc_url($icon_path); ?>) -->
      </a>
    </li> 
  <?php
  }
  ?>








    <?php /*
    <li><a href="">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/services/eurolab-proteccion-solar.png">
      [Protección solar]
    </a></li>
    <li><a href="">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/services/eurolab-test-de-eficacia.png">
      [Test de Eficacia]
    </a></li>
    <li><a href="">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/services/eurolab-test-de-uso.png">
      [Test de Uso]
    </a></li>
    <li><a href="">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/services/eurolab-irritacion-dermica.png">
      [Irritación dérmica]
    </a></li>
    <li><a href="">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/services/eurolab-microbiologia.png">
      [Microbiología]
    </a></li>
    <li><a href="">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/services/eurolab-quimica.png">
      [Química]
    </a></li> 
    */ ?>
    
  </ul>
</nav>