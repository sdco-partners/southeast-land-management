/**
*
* SliderBradley
*
* Functionality for text slider Bradley
*/

function highlightText(){
	  var current = $j( '.list' ).children().removeAttr('style');
		$j( '#li-' + sliderBradley.counter ).children().css('color', '#EF4136');
}

var sliderBradley = Object.create(Slider);


sliderBradley.parent = '#writeups';
sliderBradley.children = '#wu';
sliderBradley.$ = jQuery.noConflict();
sliderBradley.duration = 1000;

sliderBradley.start(4000, highlightText);

$j( "#arrow-right" ).on('click', function(){
  sliderBradley.next(highlightText);
})

$j( "#arrow-left" ).on('click', function(){
	sliderBradley.prev(highlightText);
})

$j('.list').on('click', function(e){
	e.preventDefault();
	var current = $j(this).attr('id').split('-');
	sliderBradley.counter = current[1];
  sliderBradley.moveSlide();

	console.log('manual override of counter: ', sliderBradley.counter);

})