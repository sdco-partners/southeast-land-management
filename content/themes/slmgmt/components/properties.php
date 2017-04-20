<?php
  /**
  * Section =>  About
  */ 

?>
<?php if ( $_SERVER['QUERY_STRING'] ) : ?>
<h1 id="key">
  <a class="market" href="<?php echo $GLOBALS['root']; ?>/properties" target="_self">
	  &larr; Back To Full Map
	</a>
</h1>
<?php endif; ?>
<div>
<?php 
  $args = array(
     'taxonomy' => 'market',
     'hide_empty' => false          
  );

  $markets = get_terms( $args );
  $count = 0;
  foreach ( $markets as $market ) :

?> 

    <h1>
      <a class="market" target="_self" alt="<?php echo $market->slug;?>"
      href="<?php echo $GLOBALS['root']?>/properties?market=<?php echo $market->slug;?>">
        <?php echo $market->name; ?>
      </a>
    </h1>
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

      <li class='show' id="<?php echo get_the_id(); ?>"><?php the_title(); ?></li>
	  <?php  

		  $count++;endwhile;endif;
		?>

    </ul>

<?php  
  endforeach;
?>



</div>