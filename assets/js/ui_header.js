/* - - - COPIED FOMR INFOOOD (LESS COMPLEX THAN WP EIMOE SCENARIO ) - - - - - -- - 
 + HEADER - DROPDOWNS SITUATION - SCRIPT_HEADER_DROPDOWNS
 */
// HEADER - DROPDOWN - NAV   
// // // $(document).ready(function(){	
	// // // $('.jgTrigger_nav').click(function(){  // TODO - MAKE IT A BUTTON !!!!!!!!!!!!!!!!!!!!!!!!!!!!
    
    /* 
    $('body').toggleClass('noscroll'); // TEST 
    
    
    $('.searchicon').removeClass('is-active'); // TEST 
    // $('.navicon').addClass('is-active'); // TEST 
    $('.navicon').toggleClass('is-active'); // TEST 
    
    // $('.jgTarget_search').slideUp(200); // TEST 
    $('.jgTarget_search').slideUp(0); // TEST 
		// $('.jgTarget_nav').slideToggle(200); 
		$('.jgTarget_nav').slideToggle(100); 
    */
    
    // // // $('.jgTarget_nav').slideToggle(100); 
    
	// // // });
// // // });






/* 
 * UI - HEADER OPTIONS
 */
$(document).ready(function(){	
	// $('.button[role=trigger_nav]').click(function(){ // GOAL IS TO MAKE A GENERIC BUTTON - OBS, PONIA .button y no button a secas !! timmy !!!
  // $('button[role=trigger_nav]').click(function(){ // GOAL IS TO MAKE A GENERIC BUTTON - OBS, PONIA .button y no button a secas !! timmy !!!
  $('[role=trigger_nav]').click(function(){ 
    // $('div[role=target_nav]').slideToggle(100); // creo que este era el issue,. el target con role... 
    $('[role=target_nav]').slideToggle(100);
    // $('.header_dropdowns.case-nav').slideToggle(100); / /NOW WORKED AHGAIN
    // $(this).hide(100);
	});
});

/*
$(document).ready(function(){	
	$('header').click(function(){ // GOAL IS TO MAKE A GENERIC BUTTON
    // $('div[role=target_nav]').slideToggle(100); // creo que este era el issue,. el target con role... 
    // $('.header_dropdowns.case-nav').slideToggle(100);
    $(this).hide(100); // WORKS
	});
});
*/



$(document).ready(function(){	
  $('[role=trigger_search]').click(function(){     
    $('[role=target_search]').slideToggle(100);
	});
});
$(document).ready(function(){	
  $('[role=trigger_language]').click(function(){     
    $('[role=target_language]').slideToggle(100);
	});
});
$(document).ready(function(){	
  $('[role=trigger_profile]').click(function(){     
    $('[role=target_profile]').slideToggle(100);
	});
});
$(document).ready(function(){	
  $('[role=trigger_share]').click(function(){     
    $('[role=target_share]').slideToggle(100);
	});
});
$(document).ready(function(){	
  $('[role=trigger_settings]').click(function(){     
    $('[role=target_settings]').slideToggle(100);
	});
});







// BUTTON ACTIONS (NOT DROPDOWNS, LIKE FDARK MODE TOGGLE...

/*
// FULLSCREEN TOGGLE
$(document).ready(function() {
  $('[role=trigger_fullscreen]').click(function() {
      if (document.fullscreenElement) {
          document.exitFullscreen();
      } else {
          document.documentElement.requestFullscreen();
      }
  });
});
*/

// FULLSCREEN TOGGLE - now actually toggling the icon as well !
$(document).ready(function() {
  $('[role=trigger_fullscreen]').click(function() {
      if (document.fullscreenElement) {
          document.exitFullscreen();
          $('[role=trigger_fullscreen] span').text('fullscreen');
      } else {
          document.documentElement.requestFullscreen();
          $('[role=trigger_fullscreen] span').text('fullscreen_exit');
      }
  });

  $(document).on('fullscreenchange', function() {
      if (document.fullscreenElement) {
          $('[role=trigger_fullscreen] span').text('fullscreen_exit');
      } else {
          $('[role=trigger_fullscreen] span').text('fullscreen');
      }
  });
});




// DISABEL ALL CSS - FOR ACCESIBILITY CHEKCS
$(document).ready(function() {
  $('[role=trigger_css]').click(function() {
      $('link[rel=stylesheet], style').remove(); // Remove all stylesheets and style tags
  });
});



// js/jq to disable the viewport meta tag- RESPONISVE, SO THAT DESKTOP SITE CAN VBE SEEN (AND SCREENHOTETD ) ON MOBIEL !!!
/*
$(document).ready(function() {
  function createViewportMeta(content) {
      const meta = $('<meta>', {
          name: 'viewport',
          content: content
      });
      $('head').append(meta);
      return meta;
  }

  function toggleViewportMeta() {
      let meta = $('meta[name="viewport"]');

      if (meta.length === 0) {
          meta = createViewportMeta('width=device-width, initial-scale=1');
      } else {
          if (meta.attr('content') === 'width=device-width, initial-scale=1') {
              // meta.attr('content', 'width=1024'); // TESTING WIDTH
              meta.attr('content', 'width=1920');
          } else {
              meta.attr('content', 'width=device-width, initial-scale=1');
          }
      }
  }
  
  $('[role=trigger_responsive]').on('click', function() {
      toggleViewportMeta();
  });
});
*/
// VERSION 2 - CHEKCING FIRTS IF THERE ALREADY IS A META VIEWPORT TAG, SO WE DONT HAVE TO CLICK 2 TIMES FOR THE TAG TO BE REMOVED.
$(document).ready(function() {
  function toggleViewportMeta() {
      let meta = $('meta[name="viewport"]');

      if (meta.length === 0) {
          console.error('No viewport meta tag found!');
          return;
      }

      // Toggle the content of the existing meta tag
      if (meta.attr('content') === 'width=device-width, initial-scale=1') {
          meta.attr('content', 'width=1920');
      } else {
          meta.attr('content', 'width=device-width, initial-scale=1');
      }
  }

  $('[role=trigger_responsive]').on('click', function() {
      toggleViewportMeta();
  });
});





// NEW, BUIDING IN WP_COWOW, TO LATER TRANSFER INTO Cb WHEN i MOVE SETTINGS RELATED THINGEES INTO THE SETTINSG DROPDOWNS THAT I HAVE RO BUILD !!!

// (CSS) DEBUGGING . ADDS A CLASS MODIFIER TO THE BODY TAG, SO THAT ALL ITEMS HAVE AN OUTLINE
$(document).ready(function() {
    $('[role=trigger_debugging]').click(function() {
        $('body').toggleClass("debugging");
    });
});
