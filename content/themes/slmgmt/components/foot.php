<?php
  /**
  * Section =>  Foot
  */ 

?>

<div id="addresses">
  <div class="col-1">
    <h1>
      Charlotte
    </h1>
    <address>
      2820 Selwyn Avenue, Suite 500<br>
      Charlotte, NC 28209<br>
      704-334-3212
    </address>
  </div>
  <div class="col-2">
    <h1>
      Charleston
    </h1>
    <address>
      345 Freshfields Drive, Suite 210<br>
      Johns Island, SC 29455<br>
      843-768-9111
    </address>
  </div>
</div>
<div id="contact">
  <div id="email">
    <?php echo file_get_contents($GLOBALS['url']."/assets/mail.svg"); ?>
  </div>
  <div id="terms">
    <p>Private Policy</p>
    <p>Terms of use</p>
  </div>
</div>