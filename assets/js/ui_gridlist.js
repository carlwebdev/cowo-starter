/*
 * cowo-Boilerplate
 * Script - jQuery
 * cowo-gridlist
 * ui_gridlist
 */
$(document).ready(function(){

	// OBS . INITIAL STATE - PRIOR TO INTERACTION/INTERACTIVITY!
	// inital state arbitraralit, where in list mode, so show the list butto as active as a starting pint..
	// $('.cowo-gridlist ul').removeClass('is-grid').addClass('is-list');
	/*
	$('.ui_gridlist ul').removeClass('is-grid').addClass('is-list'); // already doen in html // PRECAUTION
	*/
	$('button.list').addClass('is-active'); // new initial state


	$('button').click(function() {

		// remove is active form all buttons
		// add is active to the clicked button
		/* */
		$('button').removeClass('is-active');
		$(this).addClass('is-active');
		
		
		if ($(this).hasClass('grid')) {
			// $('.cowo-gridlist ul').removeClass('is-list').addClass('is-grid');
			$('.ui_gridlist ul').removeClass('is-list').addClass('is-grid');
		}
		else if($(this).hasClass('list')) {
			// $('.cowo-gridlist ul').removeClass('is-grid').addClass('is-list');
			$('.ui_gridlist ul').removeClass('is-grid').addClass('is-list');
		}
	});
});	
