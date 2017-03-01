<?php
/** 
 * Index
 *
 * The main template file
 *
 * @link https://github.com/sdco-partners/southeast-land-management
 *
 * @package SLMGMT
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

  get_header(); ?>

<!-- ==== Section: Main ==== -->
<section id="main">
  <?php get_template_part('components/main'); ?> 
</section>

<!-- ==== Section: Short Bio ==== -->
<section id="bio">
  <?php get_template_part('components/bio'); ?>    
</section>

<!-- ==== Section: Map ==== -->
<section id="map">
  <?php get_template_part('components/map'); ?>
</section>

<?php

  /**
  *  Console Logs
  * 
  * echo "<script>console.log('".$GLOBALS['maps'].", outputs map');</script>";
  */  


?>

<?php get_footer();