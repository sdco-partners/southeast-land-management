<?php
  /**
  * Section =>  Map
  */ 
  

  // Create Map Data JSON 
  $map_data = array();
  $args = array( 'post_type' => 'properties', 'posts_per_page' => -1  );
  $map_query = new WP_Query( $args );
  $count = 1;
  

  if ( $map_query->have_posts() ) : while ( $map_query->have_posts() ) : $map_query->the_post();
      
      $coordinates = get_field('marker_points');
      $data_row = array(
      	'lat' => $coordinates['lat'],
      	'long' => $coordinates['lng'],
      	'market' => get_field('marker_market'),
      	'title' => get_the_title(),
      	'acres' => get_field('marker_acres'),
      	'parcel' => get_field('marker_parcel'),
      	'county' => get_field('marker_county'),
      	'street' => get_field('marker_street'),
      	'broker' => get_field('marker_broker')
      );

    $map_data[] = $data_row;
    $count++; endwhile; endif;



  $JSON_encode = json_encode($map_data);

  $path = $_SERVER['DOCUMENT_ROOT'].'/southeast-land-management/content/themes/slmgmt/prod/mapData.json';
  $map_data_file = fopen( $path, 'w+');
  fwrite($map_data_file, $JSON_encode) or die('Cannot write map data');
  fclose($map_data_file);


?>
<div id="google-map"></div>



<script defer 
  src="https://maps.googleapis.com/maps/api/js?key=<?php echo $GLOBALS['maps']; ?>&callback=initMap">
</script>