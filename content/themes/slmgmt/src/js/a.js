/**
*
* A is for Airplane
*
*/

$j = jQuery.noConflict();
var uri = window.location.pathname
var home = "/southeast-land-management/"

$j(document).ready(function(){

  
  albert.pickRandomSlide();

  $j( '#hamburger' ).on('click', function(e){
    e.preventDefault();
		open();
  })

	$j( '#close' ).on('click', function(e){
	  e.preventDefault();
		close();
	})

  $j( '#albert-down' ).on('click', scrollDown);
  
  $j( '#click-about' ).on('click', function(e){
    if (uri === home ) {
      console.log('default prevented', uri, home);
      e.preventDefault();
    }
    console.log('defaulted', uri, home);
  	scrollDown();
  	close();
  });

});
