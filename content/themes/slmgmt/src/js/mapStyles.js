/**
*
* Map Styles
*
* Style object for Google Maps API
*/

var mapStyles = [
	{
	  elementType: 'geometry', 
	  stylers: [{color: '#5B6267'}]
	},{
	  elementType: 'labels.text.stroke', 
	  stylers: [{visibility: 'off'}]
	},{
	  elementType: 'labels.text.fill', 
	  stylers: [{color: '#ffffff'}]
	},{
	  featureType: 'administrative.province',
	  elementType: 'geometry',
	  stylers: [{color: '#283038'}]
	},{
	  featureType: 'administrative.locality',
	  elementType: 'labels.text.fill',
	  stylers: [{visibility: 'off'}]
	},{
	  featureType: 'poi',
	  elementType: 'labels.text.fill',
	  stylers: [{visibility: 'off'}]
	},{
	  featureType: 'poi.park',
	  elementType: 'geometry',
	  stylers: [{visibility: 'off'}]
	},{
	  featureType: 'poi.park',
	  elementType: 'labels.text.fill',
	  stylers: [{color: '#6b9a76'}]
	},{
	  featureType: 'road',
	  elementType: 'geometry',
	  stylers: [{color: '#494B59'}]
	},{
	  featureType: 'road',
	  elementType: 'geometry.stroke',
	  stylers: [{visibility: 'off'}]
	},{
	  featureType: 'road',
	  elementType: 'labels.text.fill',
	  stylers: [{visibility: 'off'}]
	},{
	  featureType: 'road.highway',
	  elementType: 'geometry',
	  stylers: [{color: '#283038'}]
	},{
	  featureType: 'road.highway',
	  elementType: 'geometry.stroke',
	  stylers: [{visibility: 'off'}]
	},{
	  featureType: 'road.highway',
	  elementType: 'labels.text.fill',
	  stylers: [{color: '#f3d19c'}]
	},{
	  featureType: 'road',
	  elementType: 'labels',
	  stylers: [{visibility: 'off'}]
	},{
	  featureType: 'transit',
	  elementType: 'geometry',
	  stylers: [{color: '#2f3948'}]
	},{
	  featureType: 'transit.station',
	  elementType: 'labels.text.fill',
	  stylers: [{color: '#d59563'}]
	},{
	  featureType: 'water',
	  elementType: 'geometry',
	  stylers: [{color: '#283038'}]
	},{
	  featureType: 'water',
	  elementType: 'labels.text.fill',
	  stylers: [{color: '#ffffff'}]
	},{
	  featureType: 'water',
	  elementType: 'labels.text.stroke',
	  stylers: [{color: '#17263c'}]
	}
];