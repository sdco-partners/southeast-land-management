<?php
  /**
  * Section =>  Map
  */ 

?>
<div id="google-map"></div>
<script>
  function initMap() {
    var uluru = {lat: 32, lng: -90};
    var icon = {
      url: "http://10.1.10.96/southeast-land-management/content/themes/slmgmt/assets/pin.svg",
      scaledSize: new google.maps.Size(50,75),
      origin: new google.maps.Point(0,-5),
      anchor: new google.maps.Point(0,0)
    }
      var contentString = '<div id="content">'+
        '<p class="info-window">Albemarle Road - Howell Road LLC</p>'+
        '<p class="info-window">Acres: 122.34  Parcel: ID 5524171342</p>'+
        '<p class="info-window">County: Cabarrus  Street: Howell Road</p>'+
        '<p class="info-window">Broker: NAI Southern Real Estate</p>'+
        '</div>';

    var map = new google.maps.Map(document.getElementById('google-map'), {
      zoom: 6,
      center: uluru,
      disableDoubleClickZoom: true,
      draggable: false,
      scrollwheel: false,
      panControl: false,
      mapTypeControl: false,
      streetViewControl: false,
      styles: [
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
          stylers: [{visibility: 'off'}]
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
      ]
    });
    var infowindow = new google.maps.InfoWindow({
      content: contentString,
      pixelOffset: new google.maps.Size(-13, 0)
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map,
      icon: icon
    });
    marker.addListener('click', function(){
      infowindow.open(map, marker)
    })
  }
</script>

<script async defer 
  src="https://maps.googleapis.com/maps/api/js?key=<?php echo $GLOBALS['maps']; ?>&callback=initMap">
</script>