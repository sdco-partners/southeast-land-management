/**
*
* initMap
*
* Starts Async read file
*/

var initMap = function() {
  
  // Define Variables
  var mapDataLoc = window.location.origin + '/southeast-land-management/content/themes/slmgmt/prod/mapData.json';

  getMapData(mapDataLoc, plotMapData);
   
}


/**
*
* getMapData
*
* Ajax call to read json file and callback to start process
*/

var getMapData = function(location, callback){

  $j.ajax({
    'url': location,
    'dataType': 'json',
    'success': function(data) {
      console.log('Successfully retrieved map data', data)
      callback(data);
    },
    'fail': function(err) {
      console.log('Map data was not found', err);
    }
  });
}


/**
*
* plotMapData
*
* Takes Ajax async callback, feteches data and builds
*/

var plotMapData = function (mapData) {

  // Define Variables
  var position;
  var marker;
  var bounds = new google.maps.LatLngBounds();
  var content = new google.maps.InfoWindow(), marker, i;
  var pinImgLoc = window.location.origin + "/southeast-land-management/content/themes/slmgmt/assets/pin.png";
  var options = {
    zoom: 6,
    center: {lat: 35.243094, lng: -80.604347},
    disableDoubleClickZoom: true,
    draggable: true,
    scrollwheel: false,
    panControl: false,
    mapTypeControl: false,
    streetViewControl: false,
    styles: mapStyles
  }

  
  // Initialize Map
  var map = new google.maps.Map(document.getElementById('google-map'), options);
  
  var icon = {
    url: pinImgLoc,
    origin: new google.maps.Point(0,0),
    anchor: new google.maps.Point(0,42)
  }
  
  for (var i=0; i < mapData.length; i++) {
    
    // add position to the boundaries of map
    var position = new google.maps.LatLng(mapData[i]['lat'],mapData[i]['long']);
    bounds.extend(position);
     
    // add marker 
    var marker = new google.maps.Marker({
      position: position,
      map: map,
      icon: icon
    });

    // add click event to markers
    google.maps.event.addListener(marker, 'click', (function(marker, i){
      return function() {
        content.setContent(mapData[i]['content']);
        content.open(map, marker);
      }
    })(marker, i))
    
    // fit map to include all markers
    map.fitBounds(bounds);
  }
  
}
