/**
*
* submitForm
*
* Handles ajax request to server
*/


var submitForm = function(event) {
   
  var formData = {
   'name': $j( 'input[name=name]' ).val(),
   'email': $j( 'input[name=email]' ).val(),
   'message': $j( 'textarea[name=message]' ).val()
  };

  $j.ajax({
    type: 'POST',
    url: '../content/themes/slmgmt/mail.php',
    data: formData,
    dataType: 'json',
    encode: true
  })
  .done(function(data) {
  	console.log('successfully submitted', data);
  })
  .fail(function(err) {
    console.log('error with submission', err )
  })


}