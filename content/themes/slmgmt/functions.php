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

  include 'config.php';

  /* Define Variables  */
  $GLOBALS['url'] = get_template_directory_uri();
  $GLOBALS['root'] = 'http://10.1.10.96/southeast-land-management/';
  $GLOBALS['docpath'] = $_SERVER['DOCUMENT_ROOT'].'/southeast-land-management';



  /* Add Styles, Fonts, and Javascript */


  function my_enqueue_style() {
    
    wp_enqueue_style('typography', 'https://cloud.typography.com/778678/7975772/css/fonts.css');

    wp_enqueue_style('webtype', 'http://cloud.webtype.com/css/c7d7a6d5-4e15-4b27-bbae-3849f98e1ac4.css');

    wp_enqueue_style('styles', $GLOBALS['url'].'/prod/styles.css');
    
    wp_enqueue_script('underscore', $GLOBALS['url'].'/prod/underscore.js', array('jquery'), '1.0.0', true);
    
    wp_enqueue_script('scripts-min', $GLOBALS['url'].'/prod/scripts-min.js', array('jquery'), '1.0.0', true);

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

  add_filter( 'wp_mail_from', function($email) {
    return 'contact@slmgmt.com';
  });

 add_filter( 'wp_mail_from_name', function($name) {
    return 'Southeast Land Management';
  });
 
  /**
  *
  * emailForm
  *
  * sends out email
  */

  function emailForm($name, $email, $message) {
    $email_to = 'asif@sdcopartners.com';
    $email_subject = 'New Inquiry';
    $email_message = '<strong>New message from ' . $name . ' at ' . $email .'</strong>'  . '<p>' . $message . '</p>';
    $email_message = str_replace('\n.', '\n..', $email_message);

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'From: ' . $email;

    $send = wp_mail($email_to, $email_subject, $email_message, $headers);

    if (!$send) {
      throw new Exception('Send failed');
    }
    return $send;
  }


?>