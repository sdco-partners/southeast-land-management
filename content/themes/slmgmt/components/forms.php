<?php
  /**
  * Section => Forms
  */ 
  

?>

<form>
	<input id="f-fullname" type="text" placeholder="Name" name="name" required>
	<input id="f-email" type="email" placeholder="Email" name="email" required>
	<textarea id="f-notes" type="message" name="message" placeholder="Notes" rows="10" cols="30"></textarea>
	<input id="f-submit" type="submit" value="submit">
</form>
<div id="onSubmit">
	<h1>Inquiry Sent</h1>
</div>
