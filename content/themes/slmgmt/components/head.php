<?php
  /**
  * Section =>  Head
  */ 

?>

<div id="nav">
  <h1 id="nav-name">
  	<a href="<?php echo $GLOBALS['root']; ?>">Southeast Land Management</a>
  </h1>
  <a href="" id="hamburger">
    <?php echo file_get_contents($GLOBALS['url']."/assets/hamburger.svg"); ?>
  </a>
</div>
<div id="slide-menu">
  <ul>
    <li><a href="<?php echo $GLOBALS['url']; ?>/about">About</a></li>
    <li><a href="<?php echo $GLOBALS['url']; ?>/communities">Communities</a></li>
    <li><a href="<?php echo $GLOBALS['url']; ?>/contact">Contact</a></li>
  </ul>
  <div id="close">
    <?php echo file_get_contents($GLOBALS['url']."/assets/close.svg"); ?>
  </div>
</div>