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
  
  $j( '#albert-down' ).on('click', function(){
    scroll('bio');
  });

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
      e.preventDefault();
    }
  	scroll('bio');
  	close();
  });
  
  // Runs form functionality
  $j( 'form' ).on('submit', function(e){
    e.preventDefault();
    submitForm();
  })

  $j( '.show').on('click', function(e){
    e.preventDefault();
    var id = $j(this).attr('id')
    google.maps.event.trigger(markers[id], 'click');
    scroll('map');
  })


});
