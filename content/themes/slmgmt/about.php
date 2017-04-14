<?php
/*
 * Template Name: About
 */

  get_header(); 

  $img = get_field('explore_photo', 11);
?>

<!-- ==== Section: Medals ==== -->
<section id="medals">
  <?php get_template_part('components/medals'); ?>
</section>

<!-- ==== Section: Directory ==== -->
<section id="directory" id="melton">
  <?php get_template_part('components/directory'); ?>
</section>

<!-- ==== Section: Biography ==== -->
<section id="biography">
  <?php get_template_part('components/biography'); ?>
</section>

<!-- ==== Section: Explore ==== -->
<section id="explore"
  style="background-image: url(<?php echo $img['url']; ?>)">
  <?php // get_template_part('components/explore'); ?>
</section>


<?php get_footer();