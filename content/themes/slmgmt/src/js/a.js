/**
*
* A is for Airplane
*
*/

$j = jQuery.noConflict();

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
  	e.preventDefault();
  	scrollDown();
  	close();
  });

});
