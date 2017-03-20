/**
*
* submitForm
*
* Handles ajax request to server
*/


var submitForm = function(event) {
   
  var formData = {
   'name': _.escape( $j( 'input[name=name]' ).val() ),
   'email': _.escape( $j( 'input[name=email]' ).val() ),
   'message': _.escape( $j( 'textarea[name=message]' ).val() )
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
  	$j( '#forms' ).append('<h3 id="onSubmit">Inquiry Submitted! We will be in touch shortly!</h3>')
    
    setTimeout(function(){
      $j( '#onSubmit' ).remove();
    }, 2500);
  })
  .fail(function(err) {
    console.log('error with submission', err );
    $j( '#forms' ).append('<h3 id="onSubmit">Sorry, we ran into an error. Please try again!</h3>')

    setTimeout(function(){
      $j( '#onSubmit' ).remove();
    }, 2500);

  })
  .always(function(){
    $j( 'input[name=name]' ).val('');
    $j( 'input[name=email]' ).val('');
    $j( 'textarea[name=message]' ).val('');
  }) 


}