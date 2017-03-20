/**
*
* SliderAlbert
*
* Functionality for image slider Albert 
*/


var scroll = function(element) {
	var element = $j( '#' + element ).offset();
  $j( 'html, body' ).animate({
    "scrollTop": element.top
  }, 'slow', 'swing');
}

