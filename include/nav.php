<?php

$page = basename($_SERVER['SCRIPT_NAME']);


?>

<nav class="menu">
        <div>
            <img src="asset/images/logo.png" alt="">
        </div>
       <div>
        <ul id="menu2">
            <li><a href="index.php" class="<?php if($page == 'index.php'){echo 'active';} ?>">Home</a></li>
            <li><a href="portfolio.php"  class="<?php if($page == 'portfolio.php'){echo 'active';} ?>">Portfolio</a></li>
            <li><a href="pricing.php"  class="<?php if($page == 'pricing.php'){echo 'active';} ?>">Pricing</a></li>
            <li><a href="about.php"  class="<?php if($page == 'about.php'){echo 'active';} ?>">About</a></li>
            <li><a href="contact.php"  class="<?php if($page == 'contact.php'){echo 'active';} ?>">Contact</a></li>
        </ul>
       </div>
      <div class="main">
        <i class="fa-solid fa-bars" id="menu-icon"></i>
      </div>
    </nav>