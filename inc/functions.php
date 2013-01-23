<?php 

// Create the function, so you can use it
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}



function nav_list() { ?>
          <ul>
            <li><a href="<?=$url?>page1.php">Page1</a></li>
            <li><a href="<?=$url?>page2.php">Page2</a></li>
            <li><a href="<?=$url?>page3.php">Page3</a></li>
            <li><a href="<?=$url?>page4.php">Page4</a></li>
            <li><a href="<?=$url?>page5.php">Page5</a></li>
            <li><a href="<?=$url?>page6.php">Page6</a></li>
         </ul>
<? }
