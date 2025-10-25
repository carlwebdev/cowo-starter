/*
 * Header - Height - JavaScript

// FIEL - javascript.js - for just js things, not jq
*/
// not being used yet here in { eurolab }, as it wasnt being used in wp_cowowo - it actually came fomr egiptlogia.online blankslate version .. 
// JS function to retrieve (header)#header height and set it as a CSS custom property, in order to use it in the (main)#content padding-top .. .aaaah nice, but I was referiing to use it to calc the hero banner image thingee...
(function() {
    // Function to set the CSS custom property
    function setHeaderHeight() {
        // const header = document.getElementById('header#header'); // OBS! - header#header !!! check in wp_cowow, once i retro-implement thsi there !!!
        const header = document.getElementById('header'); // works, but doesnt work with ID, wtf !!! needed!
        // MIGHT HAVE TO DO #HEADE A SECAS, O QUIZAS BY ID HEADER = #HEADER !! AAAH !!!
        if (header) {
            const headerHeight = header.offsetHeight;
            document.documentElement.style.setProperty('--header-height', `${headerHeight}px`);
            // alert(headerHeight); // Alert the header height
        }
        // alert('Hello World !');
    }

    // Event listeners for load, resize, and scroll
    window.addEventListener('load', setHeaderHeight);
    window.addEventListener('resize', setHeaderHeight);
    window.addEventListener('scroll', setHeaderHeight);

    // Initial call to set the custom property
    setHeaderHeight();
})();