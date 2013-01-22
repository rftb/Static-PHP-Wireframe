<?php include("password_protect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Static Wireframe</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="css/global.css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    
    <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
    
    <script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.3"></script>
	<link rel="stylesheet" type="text/css" href="js/jquery.fancybox.css?v=2.1.2" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="js/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="js/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="js/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="js/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="js/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
    
    <script type="text/javascript" src="js/slides.min.jquery.js"></script>

<link rel="stylesheet" type="text/css" href="css/skins/tango/skin.css" />

<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel();
});

$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : true,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 177,
						height : 110
					}
				}
			});

</script>
<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
<script type="text/javascript" src="js/rssfeed.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	$('#zticker').rssfeed('http://www.cityofkennedale.com/support/newsflash.xml',{
		header: false,
		titletag: false,
		date: true,
		content: true
	}, function(e) {
		$.zazar.ticker({selector: '#zticker ul'});
	});

	
});

</script>

<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'images/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: false
			});
		});
	</script>

</head>

<body>

<div id="page-wrapper">

	<div id="nav-wrapper">
    
    
		 
           
    	<div id="nav">
        
        
        <div id="logo">
        	
        	<img src="images/logo.png" border="0px" alt="Kennedale Logo" />
           
            
        
        </div>	
       
        <ul>
        
        	<li><a href="index.php">Home</a></li>
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
    
    <div id="header-bg">
    
    	<div id="slider-wrapper">
    
            <div id="slider">
            
            <div id="slides">
				<div id="container">
		<div id="example">
			
			<div id="slides">
				<div class="slides_container">
					<a href="location.php"><img src="images/slider-img.jpg" width="1000px"  alt="Slide 1"></a>
					<a href="location.php"><img src="images/slider-img.jpg" width="1000px"  alt="Slide 1"></a>
                   <a href="location.php"><img src="images/slider-img.jpg" width="1000px"  alt="Slide 1"></a>
                   <a href="location.php"><img src="images/slider-img.jpg" width="1000px"  alt="Slide 1"></a>
				</div>
				<a href="#" class="prev"><img src="images/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="images/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
			</div>
		</div>
		  
	</div>
            
              
            
            </div><!--end slider-->
                      </div><!--end slider-->
            
		</div><!--end slider wrapper-->
        <div class="clear"></div>

        
          </div><!--end header-img-->
      
        <div id="three-column-callouts">
        
        	<div id="column1">
            
            	 <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/column1-placeholder.jpg"><img src="images/column1-placeholder.jpg" /></a>
            
            </div><!--end 1-->
            
                <div id="column2">
                
                 <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/column2-placeholder.jpg"><img src="images/column2-placeholder.jpg" /></a>
                	
                </div><!--end 2-->
            
            <div id="column3">
         
            	 <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/column3-placeholder.jpg">  <img src="images/column3-placeholder.jpg" /></a>
            
            </div><!--end 3-->
            
            <div class="clear"></div>
            
            <div id="one-column-content">
            
            <img src="images/one-column.jpg" />
            
            </div>
            
            
            
            </div><!--end content home-->
    
            
            <div class="clear"></div>
            
            
    
		<div id="footer-container">
        
        	<div id="footer">
            	
                <img src="images/logo.png" />
            	
                <ul>
                    
                	<li><a href="index.php">Home</a></li>
                    <li><a href="page1.php">Page1</a></li>
                    <li><a href="page2.php">Page2</a></li>
                    <li><a href="page3.php">Page3</a></li>
                    <li><a href="page4.php">Page4</a></li>
                    <li><a href="page5.php">Page5</a></li>
                    <li><a href="page6.php">Page6</a></li>
                    
               </ul>
                    
            
            
            </div><!--end footer-->
        
        
        </div><!--end footer-container-->


</div><!--end page-wrapper-->
</div><!--end page-wrapper-->


</body>
</html>
