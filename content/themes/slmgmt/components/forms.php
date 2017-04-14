<?php
  /**
  * Section => Forms
  */ 
  

?>

  <?php do_shortcode('[contact-form-7 id="107" title="Inquiries"]'); ?>
<form>
	<input id="f-fullname" type="text" placeholder="Name" name="name" required>
	<input id="f-email" type="email" placeholder="Email" name="email" required>
	<textarea id="f-notes" type="message" name="message" placeholder="Notes" rows="10" cols="30"></textarea>
	<input id="f-submit" type="submit" value="submit">
</form>
