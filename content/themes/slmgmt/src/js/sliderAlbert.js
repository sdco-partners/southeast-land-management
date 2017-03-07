/**
*
* SliderAlbert
*
* Functionality for image slider Albert 
*/

var sliderAlbert = Object.create(Slider);
sliderAlbert.parent = '#sldr-albert';
sliderAlbert.children = '#sa';
sliderAlbert.$ = jQuery.noConflict();

sliderAlbert.start(4000);

