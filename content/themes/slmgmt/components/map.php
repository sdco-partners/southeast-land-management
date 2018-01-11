<?php
/**
* Section =>  Map
*/ 


// Create Map Data JSON 
$url_query = $_SERVER['QUERY_STRING'];
$map_data = array();
if ( $url_query ){
    $city = explode('=', $url_query);

    $args = array( 
        'post_type' => 'properties', 
        'posts_per_page' => -1,  
        'tax_query' => array(
            array(
                'taxonomy' => 'market',
                'field' => 'slug',
                'terms' => $city[1],
            ),
        ),
    );
    echo "<script>console.log('query string:', '". $url_query ."');</script>";
    echo "<script>console.log('city selected:', '". $city[1] ."');</script>";
} else {
    $args = array( 
        'post_type' => 'properties', 
        'posts_per_page' => -1  
    );

}
$map_query = new WP_Query( $args );

$count = 0;
if ( $map_query->have_posts() ) : 
    while ( $map_query->have_posts() ) : 
        $map_query->the_post();

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
            'broker' => get_field('marker_broker'),
            'url' => get_field('marker_broker_link'),
            'post_id' => get_the_id(),
        );

        $map_data[] = $data_row;
        $count++; 
    endwhile; 
endif;

$JSON_encode = json_encode($map_data);
echo "<script>";
echo "var mapData = " . $JSON_encode . ";";
echo "</script>";

/* OLD METHOD */
// Used 
// $path = $GLOBALS['docpath'].'/content/themes/slmgmt/prod/mapData.json';
// $map_data_file = fopen( $path, 'w+');
// fwrite($map_data_file, $JSON_encode) or die('Cannot write map data');
// fclose($map_data_file); 
/* --- */
?>

    <div id="google-map"></div>

<script defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo $GLOBALS['maps']; ?>&callback=initMap"></script>