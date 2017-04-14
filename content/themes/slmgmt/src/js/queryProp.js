/**
*
* queryProp
*
* Handles ajax request to DB
*/

var queryProp = function(id=0) {

	var formData = { 'prop': id }
  
  $j.ajax({
  	type: 'POST',
  	url: '../content/themes/ssp/investmetns_ajax.php',
  	data: formData,
  	dataType: 'json',
  	encode: true
  })
    .done(function(data) {
    	console.log('successfully submitted Property request', data);
    })
    .fail(function(err) {
    	console.log('error with Property submission', err);
    })
}
