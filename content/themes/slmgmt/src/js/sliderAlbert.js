/**
*
* SliderAlbert
*
* Functionality for image slider Albert 
*/


albert = {}


albert.scaleIn = function(random) {
	$j( '#sa-' + random ).fadeIn(1500, function(){
		$j( '#sa-' + random ).css({
			// "transform": "scale(1.4)",
			"transform-origin": "1cm 3px",
			"transition": "all 10s"
		}); 
	});
}

albert.pickRandomSlide = function(){
  var totalSlides = $j('.albert').length;
  var randomNumber = Math.floor((Math.random() * 4) + 1);
  this.scaleIn(randomNumber);
}
