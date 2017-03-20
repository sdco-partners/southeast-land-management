<?php
/** 
 * Mail
 *
 * File for Mail function
 *
 * @link https://github.com/sdco-partners/southeast-land-management
 *
 * @package SLMGMT
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */
  
  require_once('../../../wordpress/wp-load.php');

  $errors = array();
  $data = array();


  // error logging
  if ( empty( $_POST['name'] ) )
    $errors['name'] = 'Name is required.';

  if ( empty( $_POST['email'] ) )
    $errors['email'] = 'Email is required.';

  if ( empty( $_POST['message'] ) )
    $errors['message'] = 'Please include a message.';

  // if errors ...
  if ( !empty($errors) ) {
    $data['success'] = false;
    $data['errors'] = $errors;
    $data['message'] = print_r(error_get_last());

  // on success ...
  } else {
    
    $data['message'] = 'Message Sent';

    try {
      $data['success'] = emailForm( sanitize_text_field($_POST['name']), sanitize_email($_POST['email']), sanitize_text_field($_POST['message']) );
    } catch ( Exception $e ) {
      $data['exceptions'] = $e->getMessage();
    }
  }
  
  echo json_encode($data);
  
?>

