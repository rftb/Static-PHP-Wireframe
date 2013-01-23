<?php include("header.php"); ?>
<body>
  <nav id="nav-wrapper" class="clearfix">
      <div id="nav">
          <div id="logo">
              <a href="/"><img src="<?=$url?>images/logo.png" border="0px" alt="$co_name" /></a>
          </div>  
        <?=nav_list();?>
      </div><!--end nav-->
  </nav><!--end nav wrapper-->

  <header id="header-bg-int">    
    <div id="header-img-container">
      <div id="header-img">          
          <img src="images/interior-header.jpg" alt="" />
      </div><!--end slider-->
    </div><!--end slider wrapper-->

    <div id="header-int">
      <h1>Page 2</h1>
    </div><!--end statistics home-->
  </header><!--end header-img-->

<div id="int-content">
  <div id="main-int-copy"> 
    
    <h2>Lorem ipsum dolor sit amet</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus non velit mattis mattis. Vestibulum bibendum suscipit faucibus. Cras pharetra, tortor non ultrices gravida, felis velit sagittis massa, vel tincidunt leo dolor vitae nunc. Nulla non velit et enim tincidunt rhoncus. Phasellus eleifend mollis dignissim. Donec tincidunt viverra enim at imperdiet. Vivamus semper diam vitae enim feugiat egestas. Morbi sollicitudin rutrum justo hendrerit commodo. Sed sit amet erat ante. Sed venenatis laoreet pellentesque.</p>
    
    <h2>Lorem ipsum dolor sit amet</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus non velit mattis mattis. Vestibulum bibendum suscipit faucibus. Cras pharetra, tortor non ultrices gravida, felis velit sagittis massa, vel tincidunt leo dolor vitae nunc. Nulla non velit et enim tincidunt rhoncus. Phasellus eleifend mollis dignissim. Donec tincidunt viverra enim at imperdiet. Vivamus semper diam vitae enim feugiat egestas. Morbi sollicitudin rutrum justo hendrerit commodo. Sed sit amet erat ante. Sed venenatis laoreet pellentesque.</p>
  
  </div>  <!--end main int copy-->

    <?php include("sidebar.php"); ?>
  <div class="clear"></div>
</div><!--end content-->
<?php include("footer.php"); ?>