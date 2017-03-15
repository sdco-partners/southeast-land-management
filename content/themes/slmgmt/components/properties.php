<?php
  /**
  * Section =>  About
  */ 
?>
<div>

<?php 
  $args = array(
     'taxonomy' => 'market',
     'hide_empty' => false          
  );

  $markets = get_terms( $args );
  foreach ( $markets as $market ) :

?> 

    <h1><?php echo $market->name; ?></h1>
    <ul>

	  <?php 
	    $sub_args = array(
	    	'post_type' => 'properties',
	    	'posts_per_page' => -1,
	    	'tax_query' => array(
	    		array(
		    		'taxonomy' => 'market',
		    		'field' => 'slug',
		    		'terms' => $market->slug,
	    		),
    		),
	    );

	    $listings = new WP_Query( $sub_args );

	    if ( $listings->have_posts() ) : while( $listings->have_posts() ) : $listings->the_post();
	  ?>

      <li class='show'><?php the_title(); ?>
        <ul class='hide'>
	        <li>
	          <span>Acres:</span> <?php echo get_field('marker_acres'); ?>
	        </li>
	        <li>
	         <span>Parcel:</span> <?php echo get_field('marker_parcel'); ?>
	        </li>
	        <li>
	          <span>County:</span> <?php echo get_field('marker_county'); ?>
	        </li>
	        <li>
	          <span>Street:</span> <?php echo get_field('marker_street'); ?>
	        </li>
	        <li>
	          <span>Broker:</span> <?php echo get_field('marker_broker'); ?>
	         </li>
        </ul>
			</li>
	  <?php  

		  endwhile;endif;
		?>

    </ul>

<?php  
  endforeach;
?>



</div>