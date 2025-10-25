/*
 *
 * DARK MODE - head script, to prevenT FOUC
 * 
 */ 
// 1 - this script check if there is anythiong stpored - located up here to avoid fouc !!! as n dashbiard, there is a lot of fouc there - tets thsi chjanegtehre prior to conutinginhere !
// 2 - the other script in the footer, checks if the user has a dark mode preference defined
// script fr dark modeinvoked in head - why isnt it nvoked in dashbiad site ?? adding to includes hconfig head file 
// obs,habia tb un script include ?!?! js 
// MODE TOGGLE - PACE MINIMAL SCRIPT IN THE HEAD TO MINIMIZE THE FOUC - YES, NICE WORK, IT AVOIDS THE FLASH OF THEME CHANGE 
(function() {
// Check for saved theme or system preference
var savedTheme = localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
document.documentElement.setAttribute('data-theme', savedTheme);
})();