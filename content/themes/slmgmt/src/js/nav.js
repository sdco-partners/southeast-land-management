/**
*
* slideOutNav
*
* Functionality for Navigation slider
*/

$j( '#hamburger' ).on('click', function(e){
  e.preventDefault();
	$j( '#nav' ).fadeOut(250);
  $j( '#slide-menu' )
    .fadeIn(150)
    .animate({
			right: '0px'
		},500);
})

$j( '#close' ).on('click', function(e){
  e.preventDefault();
	$j( '#slide-menu' )
	  .animate({
	  	right: '-80vw'
	  })
    .fadeOut(250);
  $j( '#nav' ).fadeIn(250);
})