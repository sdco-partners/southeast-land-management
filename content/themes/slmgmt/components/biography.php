<?php
  /**
  * Section =>  Biography
  */ 
?>

<div id="arrow-left">
	<?php echo file_get_contents($GLOBALS['url'].'/assets/arrow.svg') ?>	
</div>

<div id="writeups">

	<?php
	  // Variables
	  $count = 1;

	  // Start Custom Post Type Loop
	  $loop = new WP_Query( array( 'post_type' => 'directory', 'posts_per_page' => -1, 'order' => 'ASC' ) );
	  while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<div class="writeup" id="wu-<?php echo $count; ?>">
			<p><?php the_content(); ?></p>
		</div>

	<?php $count++; endwhile; wp_reset_query(); ?>
	
</div>

<div id="arrow-right">
  <?php echo file_get_contents($GLOBALS['url'].'/assets/arrow.svg') ?>	
</div>