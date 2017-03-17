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

  // on success ...
  } else {
    $data['success'] = true;
    $data['message'] = 'Success!';
    
    function emailForm() {
      $email_to = 'asif@sdcopartners.com';
      $email_subject = 'New Inquiry from ' . $_POST['name'];
      $email_message = '<strong>New message from ' . $_POST['name'] . ' at ' . $_POST['email'] .'</strong>'  . '<p>' . $_POST['message'] . '</p>';
      $email_message = str_replace('\n.', '\n..', $email_message);

      $headers[] = 'MIME-Version: 1.0';
      $headers[] = 'Content-type: text/html; charset=iso-8859-1';
      $headers[] = 'From: ' . $_POST['email'];

      mail($email_to, $email_subject, $email_message, implode("\r\n", $headers));
    }

    emailForm();
  }
  
  echo json_encode($data);
  
?>

