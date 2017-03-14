<?php
  /**
  * Section =>  Directory
  */ 
  
  // Variables
  $count = 1;

  // Start Custom Post Type Loop
  $loop = new WP_Query( array( 'post_type' => 'directory', 'posts_per_page' => -1, 'order' => 'ASC' ) );
  while ( $loop->have_posts() ) : $loop->the_post();
?>

<div class="list" id="li-<?php echo $count; ?>">
	<h2 class="li-<?php echo $count; ?>"><?php the_title(); ?></h2>
	<p class="li-<?php echo $count; ?>"><?php the_field('dir_title'); ?></p>
</div>
<?php $count++; endwhile; wp_reset_query(); ?>