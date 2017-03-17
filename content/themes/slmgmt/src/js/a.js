/**
*
* A is for Airplane
*
*/

$j = jQuery.noConflict();
var uri = window.location.pathname
var home = "/southeast-land-management/"

$j(document).ready(function(){

  // Runs main homepage image functionality
  albert.pickRandomSlide();
  
  $j( '#albert-down' ).on('click', scrollDown);

  // Runs navigation bar
  $j( '#hamburger' ).on('click', function(e){
    e.preventDefault();
    open();
  })

  $j( '#close' ).on('click', function(e){
    e.preventDefault();
    close();
  })
 
  $j( '#click-about' ).on('click', function(e){
    if (uri === home ) {
      console.log('default prevented', uri, home);
      e.preventDefault();
    }
    console.log('defaulted', uri, home);
  	scrollDown();
  	close();
  });
  
  // Runs form functionality
  $j( 'form' ).on('submit', function(e){
    e.preventDefault();
    submitForm();
  })


});
