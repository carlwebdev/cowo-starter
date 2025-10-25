<?php /* <div class="togglebutton" data-toggle="#menuresponsive">≡</div> */ ?>
<nav id="menuresponsive">
<?php wp_nav_menu(array(
'container'       => '', // ?
// 'menu'       => 'footer-menu', // Desired menu. Accepts a menu ID, slug, name, or object
'menu'       => 'menu-footer', // Desired menu. Accepts a menu ID, slug, name, or object
'menu_class'      => 'menu', // the ul
'depth'           => 3, // ?
// 'theme_location'  => 'header-menu'
) // ?
);
?>
</nav>