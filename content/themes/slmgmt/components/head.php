<?php
  /**
  * Section =>  Head
  */ 

?>

<div id="nav">
  <h1 id="nav-name">
    <a href="<?php echo $GLOBALS['root']; ?>">Southeast Land Management
    <span>a south street partners company</span></a>
  </h1>
  <a href="" id="hamburger">
    <?php echo file_get_contents($GLOBALS['url']."/assets/hamburger.svg"); ?>
  </a>
</div>
<div id="slide-menu">
  <ul>
    <li><a href="<?php echo $GLOBALS['root']; ?>/#bio" id="click-about">About</a></li>
    <li><a href="<?php echo $GLOBALS['root']; ?>/properties">Properties</a></li>
    <li><a href="<?php echo $GLOBALS['root']; ?>/contact">Contact</a></li>
  </ul>
  <div id="close">
    <?php echo file_get_contents($GLOBALS['url']."/assets/close.svg"); ?>
  </div>
</div>