/**
*
* Slider Prototype
*
* @param {parent}      :   Parent div wrapper that contains all wrapper
* @param {children}    :   Base name for child divs that contain each image
* @param {duration}    :   Interval between each slide animation
* @param {pauseTime}   :   Pause between runs of sliderFnc
* @param {selector}    :   change default '$' jQuery selector if using PHP
*
*/
  
var Slider = {
  parent: '',
  children: '',
  duration: 2000,
  pauseTime: 10000,
  selector: '$',
  counter: 1,
  clicked: false,
}

// Main slide engine
Slider.slideFxn = function(){

  // Define vocab
  var totalImages = $j( this.parent ).children().length;
  var firstPosition = $j( this.children + '-1' ).position().left;

  // If count is within image range, account for indent image and use to move left
  if ( this.counter <= totalImages && this.counter > 0 ) {
    
  	var nextSlide = $j( this.children + '-' + this.counter );
  	var nextPosition = nextSlide.position().left;
  	var moveTo = nextPosition - firstPosition;
  	this.$( this.parent ).animate({
      scrollLeft: moveTo
  	}, this.duration );

  	// Else it's end of Slider, reset to initial
  } else {
    this.counter = 1;
    this.$( parent ).animate({
    	scrollLeft: 0
    }, this.duration );
  }
}  

// Autoplay 
Slider.autoPlay = function(){

  // If not clicked
  if ( !this.clicked ) {
    // Call Slide function
    this.counter++
    this.slideFxn();

    // Recursively call Autoplay
    setTimeout(this.autoPlay.bind(this), this.pauseTime);

  // Else, check back in 10 seconds.  
  } else  {
    setTimeout(this.autoPlay.bind(this), this.pauseTime);
  }
}

// Triggers Slider
Slider.start = function(delay){
  if ( this.$( this.parent ).length ) {
    setTimeout(this.autoPlay(), delay);
  }
}

// Overrides autoplay and manually moves slide
Slider.moveSlide = function(){
	this.$( '#next' ).on( 'click', function(){
	  this.clicked = true;

	  // Call Slide function
	  this.slideFxn();
	  
	  // Reset clicked in 4 secs
	  setInterval(function(){
	    this.clicked = false;
	  }, 4000);

	});
}

// increases count
Slider.next = function(){
	  this.counter++;
	  this.moveSlide();
}

// decreases count
Slider.prev = function(){
  this.counter--;
  this.moveSlide();
}

