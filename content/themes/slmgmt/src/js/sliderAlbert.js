/**
*
* SliderAlbert
*
* Functionality for Slider Albert 
*/

var sliderAlbert ={}
sliderAlbert.counter = 1;
sliderAlbert.clicked = false;
sliderAlbert.slideFxn = function(time, count){
  
  // Define vocab
  var totalImages = $j( '#sldr-albert' ).children().length;
  var firstPosition = $j( '#sa-1' ).position().left;

  // If count is within image range, account for indent image and use to move left
  if ( this.counter <= totalImages && this.counter > 0 ) {
    
  	var nextSlide = $j( '#sa-' + this.counter );
  	var nextPosition = nextSlide.position().left;
  	var moveTo = nextPosition - firstPosition;

  	$j( '#sldr-albert' ).animate({
      scrollLeft: moveTo
  	}, time );

  	// Else it's end of Slider, reset to initial
  } else {
    this.counter = 1;
    $j( '#sldr-albert' ).animate({
    	scrollLeft: 0
    }, time );
  }
}


/**
* Autoplay Slider
* 
* Automatically moving slider 
*/

var autoSlide = function(){
  // If not clicked
  if ( !sliderAlbert.clicked ) {
    // Call Slide function
    sliderAlbert.counter++
    sliderAlbert.slideFxn(2000);

    // Recursively call Autoplay
    setTimeout(autoSlide, 10000);

  // Else, check back in 10 seconds.  
  } else  {
    setTimeout(autoSlide, 10000);
  }
}

// Trigger Function
if( $j( '#sldr-albert' ).length ) {
  setTimeout(autoSlide, 4000);
  
}

