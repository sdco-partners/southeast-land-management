/**
*
* SliderAlbert
*
* Functionality for image slider Albert 
*/

// var sliderAlbert = Object.create(Slider);
// sliderAlbert.parent = '#sldr-albert';
// sliderAlbert.children = '#sa';
// sliderAlbert.$ = jQuery.noConflict();

// sliderAlbert.start(4000);


albert = {}


albert.scaleIn = function(random) {
	$j( '#sa-' + random ).fadeIn(1500, function(){
		$j( '#sa-' + random ).css({
			"transform": "scale(1.2)",
			"transition": "all 10s"
		}); 
	});
}

albert.pickRandomSlide = function(){
  var totalSlides = $j('.albert').length;
  var randomNumber = Math.floor((Math.random() * 4) + 1);
  this.scaleIn(randomNumber);
}

albert.scrollDown = function() {
	var bio = $j( '#bio' ).offset();
  $j( 'html, body' ).animate({
    "scrollTop": bio.top
  }, 'slow', 'swing');
}

$j( '#albert-down' ).on('click', albert.scrollDown);
