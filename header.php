<?php 
include("password_protect.php"); 
include("inc/functions.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Static Wireframe</title>

<link rel="stylesheet" type="text/css" href="styles.css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="http://www.kevinleary.net/wp-samples/js/jquery.url.js"></script>

<script type="text/javascript" src="js/rssfeed.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	$('#rssfeed').rssfeed('http://www.cityofkennedale.com/support/newsflash.xml');
});
</script>

<script type="text/javascript">
$(function(){
	$page = jQuery.url.attr("file");
	if(!$page) {
		$page = 'index.html';
	}
	$('#navigation li a').each(function(){
		var $href = $(this).attr('href');
		if ( ($href == $page) || ($href == '') ) {
			$(this).addClass('on');
		} else {
			$(this).removeClass('on');
		}
	});
});
</script>
</head>

<body>

<div id="page-wrapper">

	<div id="nav-wrapper">
    
    
		 
           
    	<div id="nav">
        
        
       <div id="logo">
        	
        	<a href="index.php"><img src="images/logo.png" alt="Logo" border="0px" /></a>
           
       </div>	
       
        <ul id="navigation">
        
        	<li><a href="index.php" class="primary-nav">Home</a></li>
            <li><a href="page1.php">Page1</a></li>
            <li><a href="page2.php">Page2</a></li>
            <li><a href="page3.php">Page3</a></li>
            <li><a href="page4.php">Page4</a></li>
            <li><a href="page5.php">Page5</a></li>
            <li><a href="page6.php">Page6</a></li>
         
         </ul>
        
        </div><!--end nav-->
    
    </div><!--end nav wrapper-->
    
   <div class="clear"></div>
    
   