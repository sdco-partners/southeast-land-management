<?php
/**
 * Header
 *
 * Contains header assets.
 *
 * @link https://github.com/sdco-partners/southeast-land-management
 *
 * @package SLMGMT
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<script type="text/javascript">
	document.documentElement.setAttribute("data-browser", navigator.userAgent);
</script>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- ==== Section: Header ==== -->
<header>
  <?php get_template_part('components/head'); ?>
</header>
