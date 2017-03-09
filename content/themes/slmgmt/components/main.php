<?php
  /**
  * Section =>  Main
  */ 
?>

<h1><?php echo the_field('main_header', 2); ?></h1>
<h2><?php echo the_field('main_tagline', 2); ?></h2>
<div class="arrow down" id="albert-down">
  <?php echo file_get_contents($GLOBALS['url']."/assets/arrow.svg"); ?>
</div>
<div id="sldr-albert">
  <?php 
  //Variables
  $count =1;
  
  if( have_rows( 'main_image_slider', 2) ) : 
    while ( have_rows( 'main_image_slider', 2) ) : the_row(); ?>

      <div id="sa-<?php echo $count; ?>" class="albert"></div>

      <?php $count++;
    endwhile;
  endif; ?>
</div>