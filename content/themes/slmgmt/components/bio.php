<?php
  /**
  * Section =>  About
  */ 
  
  // Variables
  $img = get_field('bio_image', 2);
?>

<div class="image" alt="<?php echo $img['alt']; ?>"
  style="background-image: url(<?php echo $img['url']; ?>)">
</div>
<div class="copy">
  <p class=""><?php the_field('bio_copy', 2); ?></p>
  <a href="<?php the_field('bio_link', 2); ?>">
    <?php the_field('bio_cta', 2); ?>
  </a>
</div>
