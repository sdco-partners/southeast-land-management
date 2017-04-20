/**
*
* A is for Airplane
*
*/

var $j = jQuery.noConflict();
var uri = window.location.pathname
var home = "/southeast-land-management/"

$j(document).ready(function(){

  // Runs main homepage image functionality
  albert.pickRandomSlide();
  
  $j( '#albert-down' ).on('click', function(e){
    e.preventDefault();
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
  
  // Runs scroll down function
  $j( '#click-about' ).on('click', function(e){
    if (uri === home ) {
      e.preventDefault();
    }
  	scroll('bio');
  	close();
  });
  
  // Runs google maps marker trigger
  $j( '.show').on('click', function(e){
    e.preventDefault();
    var id = $j(this).attr('id')
    google.maps.event.trigger(markers[id], 'click');
    scroll('map');
  })


});
