/**
*
* initMap
*
* Code to initiate and control Google Maps API
*/

function initMap() {
  
  // Define Vocab
	var content;
	var marker;
	var position;
	var bounds = new google.maps.LatLngBounds();
	var options = {
    zoom: 6,
    center: {lat: mapData[0]['lat'], lng: mapData[0]['long']},
    disableDoubleClickZoom: true,
    draggable: false,
    scrollwheel: false,
    panControl: false,
    mapTypeControl: false,
    streetViewControl: false,
    styles: mapStyles
  }
	var icon = {
	  url: "http://10.1.10.96/southeast-land-management/content/themes/slmgmt/assets/pin.png",
	  origin: new google.maps.Point(0,0),
	  anchor: new google.maps.Point(0,0)
	}
  
  // Initialize Map
  var map = new google.maps.Map(document.getElementById('google-map'), options);

  for (var i=0; i < mapData.length; i++) {
    
    // add position to the boundaries of map
    position = new google.maps.LatLng(mapData[i]['lat'],mapData[i]['long']);
    bounds.extend(position);
    
    // add infowindow to marker
	  content = new google.maps.InfoWindow({
	    content: mapData[i]['content'],
	    pixelOffset: new google.maps.Size(-13, 0)
	  });
     
    // add marker 
	  marker = new google.maps.Marker({
	    position: position,
	    map: map,
	    icon: icon
	  });

    // add click event to markers
	  google.maps.event.addListener(marker, 'click', (function(marker, i){
	  	return function() {
	  		content.setContent(content)
	  		content.open(map, marker);
	  	}
	  })(marker, i))
    
    // fit map to include all markers
    map.fitBounds(bounds);
  }

}
