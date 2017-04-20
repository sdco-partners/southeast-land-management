<?php
  /**
  * Section =>  Explore
  */ 

  // Variables
  $args = array(
     'taxonomy' => 'market',
     'hide_empty' => false          
  );
  $markets = get_terms( $args );
  $total_count = count($markets);
  $count = 1;
?>
<h2>
  <?php foreach ( $markets as $market ) : ?>
	    <a href="<?php echo $GLOBALS['root']?>/communities?market=<?php echo $market->slug;?>">
	      <?php echo $market->name;?>	
      </a>
	    <?php if( $count < $total_count ){
        echo ' / ';
	    }
	  $count++;endforeach; ?>
</h2>
<p>
  <a href="<?php echo $GLOBALS['root'] ?>/properties">
    Explore Our Properties
  </a>
</p>