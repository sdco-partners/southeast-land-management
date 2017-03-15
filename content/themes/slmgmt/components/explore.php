<?php
  /**
  * Section =>  Explore
  */ 

  // add url query 
  esc_url( add_query_arg('market', '') );
  $args = array(
     'taxonomy' => 'market',
     'hide_empty' => false          
  );
?>
<h2>

	<?php
	  $markets = get_terms( $args );
    $total_count = count($markets);
    $count = 1;
	  foreach ( $markets as $market ) :
	?>
	    <a href="<?php echo $GLOBALS['root']?>/communities?market=<?php echo $market->slug;?>">
	      <?php echo $market->name;?>
	      	
	      </a>
	<?php  if( $count < $total_count ){
        echo ' / ';
	    }
	  $count++;endforeach; 
	?>

</h2>
<p>
  <a href="<?php echo GLOBALS['root'] ?>/about">
    Explore Our Community
  </a>
</p>