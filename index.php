<?php include("header.php"); ?>

<body>
    <div id="page-wrapper">
        <header id="nav-wrapper" class="clearfix">
            <nav id="nav">
                <div id="logo">
                    <img src="images/logo.png" border="0px" alt="Kennedale Logo" />
                </div>  
              <?=nav_list();?>
            </nav><!--end nav-->
        </header><!--end nav wrapper-->

        <div id="header-bg">
            <!-- Slider [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ]  
             [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ]  --> 
            <div id="slider-wrapper" class="clearfix">
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
                    </div><!--end slides-->
                </div><!--end slider-->
            </div><!--end slider wrapper-->
        </div><!--end header-bg-->

        <!-- Three Column Pattern [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ]  
             [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ]  --> 

        <div id="three-column-callouts" class="inner clearfix">                
            <div id="column1" class="one-third gutter">
                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/column1-placeholder.jpg"><img src="images/column1-placeholder.jpg" style="width:100%" /></a>
            </div><!--end 1-->
                
            <div id="column2" class="one-third gutter">
                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/column2-placeholder.jpg"><img src="images/column2-placeholder.jpg" style="width:100%"/></a>
            </div><!--end 2-->
                
                <div id="column3" class="one-third gutter clearfix">
                    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/column3-placeholder.jpg">  <img src="images/column3-placeholder.jpg"  style="width:100%" /></a>
                </div><!--end 3-->

            <div id="one-column-content">
                <img src="images/one-column.jpg" />
            </div>
        </div><!--end three-column-callouts-->

            <!-- Footer [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ]  
                 [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ] [ * ]  --> 
        <?php include("footer.php"); ?>