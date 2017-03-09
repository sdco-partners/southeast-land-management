<?php
  /**
  * Section =>  About
  */ 
?>

<div class="image"></div>
<div class="copy">
  <p class=""><?php echo the_field('bio_copy', 2); ?></p>
  <a href="<?php echo the_field('bio_link', 2); ?>">
    <?php echo the_field('bio_cta', 2); ?>
  </a>
</div>
