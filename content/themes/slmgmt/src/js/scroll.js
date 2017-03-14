/**
*
* SliderAlbert
*
* Functionality for image slider Albert 
*/


var scrollDown = function() {
	var bio = $j( '#bio' ).offset();
  $j( 'html, body' ).animate({
    "scrollTop": bio.top
  }, 'slow', 'swing');
}

