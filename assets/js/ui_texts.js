
// LINKS - añadir target blank a los enlaces dentro de la seccion links
/*
$(document).ready(function(){
  $('.grid a').attr('target', '_blank');
  $('.article a').attr('target', '_blank');
});
*/




/* 
 * URL MANIPULATION - GENERIC TEST - HREF MUST BE FILLED IN FOR THIS TO WORK
 */ 
// https://stackoverflow.com/questions/7901679/jquery-add-target-blank-for-outgoing-link
	
// https://www.geeksforgeeks.org/how-to-add-target_blank-to-a-link-using-jquery/	
$('.m_htmleditor a').attr('target', '_blank'); 	
// https://pointjupiter.com/what-noopener-noreferrer-nofollow-explained/	
// noopener, noreferrer, and nofollow	
// $('.m_htmleditor a').attr('rel', 'noopener'); 
// $('.m_htmleditor a').attr('rel', 'noreferrer'); // cannot be separate 
$('.m_htmleditor a').attr('rel', 'noopener noreferrer nofollow'); // FOLLOW COULD BE OK IN THIS CASE, FOR KLOUT
// $('.m_htmleditor a').attr('rel', 'noopener noreferrer'); // FOLLOW COULD BE OK IN THIS CASE, FOR KLOUT - (DE EPIC WEBSITE)
	


