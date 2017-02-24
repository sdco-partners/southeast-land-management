<?php
/** 
 * Functions
 *
 * Smart functions for slmgmgt
 *
 * @link https://github.com/sdco-partners/southeast-land-management
 *
 * @package SLMGMT
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

	/* Define Variables  */
	$GLOBALS['url'] = get_template_directory_uri();



	/* Add Styles, Fonts, and Javascript */


	function my_enqueue_style() {

		//<script type="text/javascript" src="//fast.fonts.net/jsapi/8cd2f97e-4a17-4a9f-8e26-eaa420c86031.js"></script>

	 //  wp_enqueue_script('cloud.typography', 'https://fast.fonts.net/jsapi/8cd2f97e-4a17-4a9f-8e26-eaa420c86031.js');
		// wp_enqueue_style('styles', $GLOBALS['url'].'/prod/styles.css');

		// wp_enqueue_script('scripts-min', $GLOBALS['url'].'/prod/scripts-min.js', array('jquery'), '1.0.0', true);

  }

  add_action( 'wp_enqueue_scripts', 'my_enqueue_style' );

  // add_theme_support( 'post-thumbnails' );

  add_action('get_header', 'remove_admin_login_header');

  function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }
  

  /**
  * isMobile
  *
  * returns true/false if there is a match for browser. 
  */

  function isMobile() {
    return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackbe‌​rry|iemobile|bolt|bo‌​ost|cricket|docomo|f‌​one|hiptop|mini|oper‌​a mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|‌​webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	}

?>