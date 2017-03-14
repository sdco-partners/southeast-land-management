/**
*
* slideOutNav
*
* Functionality for Navigation slider
*/

var open = function(){
	$j( '#nav' ).fadeOut(250);
  $j( '#slide-menu' )
    .fadeIn(150)
    .animate({
			right: '0px'
		},500);
}

var close = function() {
	$j( '#slide-menu' )
	  .animate({
	  	right: '-100vw'
	  })
    .fadeOut(250);
  $j( '#nav' ).fadeIn(250);
}