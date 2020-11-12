<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>PC-Store  World near to yoU</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="../css/images/favicon.ico"/>
	<link rel="stylesheet" href="../css/main.css" type="text/css" media="all" />
	<?php  
	      error_reporting(E_ALL ^ E_NOTICE);     //      To erase the Notice because the variables below first used in this scope
	      session_start(); 
		  $_SESSION['lag']="0";
		  $flag=$_SESSION['logged']; //to check logged or not
		  $lname=$_SESSION['logname'];  // his name to display
		  $_SESSION['barg']="0";
		
	?>
	<script src="../css/js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="../css/js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="../css/js/functions.js" type="text/javascript" charset="utf-8"></script>
    <style type="text/css">
<!--
.style4 {color: #000000}
.style8 {
	color: #000000;
	font-size: 50px;
	font-weight: bold;
	
}
-->
    </style>
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Search -->
		<div id="top">
			<div class="shell">
				
				<div class="cl"></div>
			</div>
		</div>
		<!-- End Search -->
		<!-- Begin Header -->
	  <div id="header" class="shell">
	    <h1 id="logo">
	    <h2 class="style8"><strong>PCStore</h2>
		<div id="log" align="right">
		
		<?php 
		if($flag=="yes")
		{ 
		echo "<input type='text' value='logged in as $lname'  class='blink' disabled='disabled'/><a href='logout.php'>logout</a>";
		}
		?>
		</div>
	    <p class="style8">&nbsp;</p><br />
	    </h1>
	  </div>
		<!-- End Header -->
		<!-- Begin Navigation -->
		<div id="navigation">
			<div class="shell">
				<ul>
					<li><a href="Main.php" title="Home">Home</a></li>
					<li><a href="register.php" title="SIGN UP">&nbsp;Sign Up &nbsp;</a></li>
					<li><a href="login.php" title="Log In">&nbsp;Log In&nbsp;</a></li>
					<li><a href="accheck.php" title="Account">Account</a>
					</li><li><a href="Contact.php" title="Contact">Contact</a></li>
					</li><li><a href="Pcstore.php" title="About us">About US</a></li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
		</div>
		<!-- End Navigation -->
		<!-- Begin Slider -->
		<div id="slider">
			<div class="slider-outer">
				<div class="slider-inner shell">
					<!-- Begin Slider Items -->
					
					<ul class="slider-items">
						
						<li>
							<img src="../css/images/slide-img1.jpg"  alt="Slide Image 1" />
							<div class="slide-entry">
								<h3 class="style4">Desktops </h3>
								<h3>Collection of different company products </h3>
								<p>Companies such as Acer, HP, Lenovo, Dell etc., are available on our                                   kart go through it....</p>
						  </div>
							<a href="../DMENU/AllDesktop.php" class="more" title="View More">View More</a>
						</li>
						
						<li>
							<img src="../css/images/bg04.jpg" alt="Slide Image 4" />
							<div class="slide-entry">
								<h3 class="style4">Mobiles & PDA's </h3>
								<h3>Collection of different company products </h3>
								<p>Companies such as Nokia, Sony, Samsung, HTC etc., are available on our                                   kart go through it....</p>
							</div>
							<a href="../MENU/Allmob.php" class="more" title="View More">View More</a>
						</li>
						
						<li>
							<img src="../css/images/bg07.jpg" alt="Slide Image 2" />
							<div class="slide-entry">
								<h3 class="style4">Laptops & NoteBooks </h3>
								<h3>Collection of different company products </h3>
								<p>Companies such as Acer, HP, Lenovo, Dell etc., are available on our                                   kart go through it....</p>
							</div>
							<a href="../LMENU/AllLaptops.php" class="more" title="View More">View More</a>
						</li>
						
						<li>
							<img src="../css/images/bg20.jpg" alt="Slide Image 5" />
							<div class="slide-entry">
								<h3 class="style4">Camera</h3>
								<h3>Collection of different company products </h3>
								<p>Companies such as Apple, Nikon, Sony, Fugifilm etc., are available on our                                   kart go through it....</p>
							</div>
							<a href="../CMENU/Allcam.php" class="more" title="View More">View More</a>
						</li>
						<li>
							<img src="../css/images/bg08.jpg" alt="Slide Image 3" />
							<div class="slide-entry">
							<h3 class="style4">Components and Softwares </h3>
								<h3>Collection of computer perepherals and softwares </h3>
								<p>Products such as Harddisk, pendrive, Keyboards, Mouse, Antiviruses                                   etc., are available on our kart go through it....</p>
							</div>
							<a href="../MENU/Softwares.php" class="more" title="View More">View More</a>
						</li>
					</ul>
					<!-- End Slider Items -->
					<div class="cl">&nbsp;</div>
					<div class="slider-controls">
						
					</div>
				</div>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		<!-- End Slider -->
		<!-- Begin Main -->
		<div id="main">
			<!-- Begin Inner -->
			<div class="inner">
				<div class="shell">
					<!-- Begin Left Sidebar -->
					<div id="left-sidebar" class="sidebar">
						<ul>
							<li class="widget">
								<h2>Categories</h2>
								<div class="widget-entry">
									<ul>
									<li><a href="../DMENU/AllDesktop.php" title="Desktops"><span>Desktops</span></a></li>
									<li><a href="../LMENU/AllLaptops.php" title="Laptops &amp; Notebooks"><span>Laptops &amp; Notebooks</span></a></li>
									<li><a href="../MENU/Softwares.php" title="Software"><span>Software</span></a></li>
									<li><a href="../MENU/Allmob.php" title="Phones &amp; PDAs"><span>Phones &amp; PDAs</span></a></li>
									<li><a href="../CMENU/Allcam.php" title="Cameras"><span>Cameras</span></a></li>
									<li class="last"><a href="../MENU/Mp3.php" title="MP3 Players"><span>MP3 Players</span></a></li>
									</ul>
								</div>
							</li>
							<li class="widget">
								<h2>Information</h2>
								<div class="widget-entry">
									<ul>
										<li><a href="Pcstore.php" title="About Us"><span>About Us</span></a></li>
										
										<li><a href="Condition.php" title="Terms &amp; Conditions"><span>Terms &amp; Conditions</span></a></li>
										<li><a href="Contact.php" title="Contact Us"><span>Contact Us</span></a></li>
										
									</ul>
								</div>
							</li>
							<li class="widget select-widget">
								<h2>Brands</h2>
								<div class="widget-entry">
									<div class="selectbox">
										<span class="currentItem">--- <span>Please Select</span> ---</span>
										<div class="list">
											<ul>
											
												<li class="active"><a href="../MENU/Sony.php" title="Sony">Sony</a></li>
												<li><a href="../MENU/Samsung.php" title="Samsung">Samsung</a></li>
												<li><a href="../MENU/Micromax.php" title="Micromax">Micromax</a></li>
												<li><a href="../MENU/Nokia.php" title="Nokia">Nokia</a></li>
											</ul>
										</div>
										<select>
											<option value="option" selected="selected">Please Select</option>
											<option value="option1">Brand 1</option>
											<option value="option2">Brand 2</option>
											<option value="option3">Brand 3</option>
										</select>
									</div>
									<div class="cl">&nbsp;</div>
								</div>
							</li>
						</ul>
					</div>
					<!-- End Sidebar -->
					<!-- Begin Content -->
					<div id="content">
						<!-- Begin Post -->
						<div class="post">
							<h2>Welcome to PCStore<span class="title-bottom">&nbsp;</span></h2>
							<p>This in an online shopping site where you can make your bargain for any product available in our site and we assure you will be given the right bargain price for your product...   </p>
						</div>
						<!-- End Post -->
						<!-- Begin Products -->
						<div id="products">
							<h2>Latest Products<span class="title-bottom">&nbsp;</span></h2>
							
							<div class="product">
   							<form id="myform" name="myform" action="../Calculate.php" method="post" >
									<a  href="javascript:void()" onclick="document.getElementById('myform').submit();" 
	 								title="Nokia 500"><br /><br /><img src="../css/images/Mobile/nkfivehund0.jpeg"  width="115" height="185" />
	 								<input type="hidden" name="mob" value="Nokia 500"  class="blink" />
									<span class="number" >Nokia 500</span><strong>3.2 Inches</strong>,<strong>Single SIM, GSM</strong></a>						  								</form>
						  </div>
							 
							<div class="product">			
							<form id="myform1" name="myform1" action="../Calculate.php" method="post" >				
							 <a  href="javascript:void()" onclick="document.getElementById('myform1').submit();" 
	        				 title="Micromax Canvas2 A110"><br /><br /><img src="../css/images/Mobile/mmcanvas2Aone0.jpeg" width="115" height="185" />										      						 <input type="hidden" name="mob" value="Micromax Canvas2 A110"  class="blink" />
							 <span class="number">Micromax Canvas2 A110</span><strong>1.2 GHz, Dual Core Processor </strong></a>							
							</form>				
							</div>	
							
							
					<div class="product last">
   					<form id="myform3" name="myform3" action="../Calculate.php" method="post" >
						<a  href="javascript:void()" onclick="document.getElementById('myform3').submit();" 
	  					title="Sony Experia M"><br /><br /><img src="../css/images/Mobile/sonyem0.jpeg"  width="115" height="185" />
	  					<input type="hidden" name="mob" value="Sony Experia M"  class="blink" />
						<span class="number" >Sony Experia M</span><strong>1 GHz Qualcomm Dual Core </strong> </a>						  
					</form>
	 				</div>
	 
	 
							<div class="cl">&nbsp;</div>
							<div class="product">	
							<form id="myform4" name="myform4" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform4').submit();" 
	        title="Canon PowerShot A 2200"><br /><br /><img src="../css/images/camera/cannon22001.jpeg" width="160" height="150" />										      		
			<input type="hidden" name="mob" value="Canon PowerShot A 2200"  class="blink" />
			<span class="number">Canon PowerShot A 2200</span><strong>14.1 Megapixels</strong>,<strong>4x</strong> </a>
			</form>							
			</div>
							
							
			<div class="product">			
			  <form id="myform2" name="myform2" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform2').submit();" 
	  title="Fujifilm AX550"><br /><br />
	<img src="../css/images/camera/fujifilmax5001.jpeg" width="163" height="151" />
	<input type="hidden" name="mob" value="Fujifilm AX550"  class="blink" />
	<span class="number" >Fujifilm AX550</span><strong>16.0 Megapixels</strong>,<strong>Point & Shoot,5x</strong>		    </a>						  
	</form>	
							</div>
							
							<div class="product last">		
							<form id="myform13" name="myform13" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform13').submit();" 
	        title="Nikon Coolpix L610"><br /><br /><img src="../css/images/camera/nikonL6101.jpeg"   width="160" height="150" />										      		
			<input type="hidden" name="mob" value="Nikon Coolpix L610"  class="blink" />
			<span class="number">Nikon Coolpix L610</span><strong>16.1 Megapixels</strong>, <strong>Point & Shoot</strong></a>							
			</form>				
							</div>
							
							
							<div class="cl">&nbsp;</div>
							
							<div class="product">			
							<form id="myform6" name="myform6" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform6').submit();" 
	        title="Acer Aspire V5 571P"><br /><br /><img src="../css/images/laptop/Avv81.jpg"  width="170"  height="152" />										      		<input type="hidden" name="mob" value="Acer Aspire V5 571P"  class="blink" />
			<span class="number">Acer Aspire V5 571P</span><strong>Core i5</strong>, 15.6 inch<strong>, Silver</strong></a>							
			</form>					
							</div>
							
							<div class="product">			
							<form id="myform22" name="myform22" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform22').submit();" 
	        title="Dell Inspiron 14R 5421 "><br /><br /><img src="../css/images/laptop/del3_1.jpg"   width="170"  height="152" />										      		<input type="hidden" name="mob" value="Dell Inspiron 14R 5421"  class="blink" />
			<span class="number">Dell Inspiron 14R 5421 </span><strong>Intel Core i3</strong>,14 inch<strong>, Peacock Blue</strong></a>
			</form>	
							</div>
							
							
							<div class="product last">			
						  <form id="myform38" name="myform38" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform38').submit();" 
	  title="HP Envy 4-1201TX"><br /><br /><img src="../css/images/laptop/hp8_1.jpg"  width="170"  height="152" />
	  <input type="hidden" name="mob" value="HP Envy 4-1201TX"  class="blink" />
	<span class="number" >HP Envy 4-1201TX</span><strong>Intel Core i5</strong>,14 inch<strong>,2 Ghz</strong></a>
			</form>				
							</div>
							
							
							<div class="cl">&nbsp;</div>
							
							
							<div class="product">			
							<form id="myform58" name="myform58" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform58').submit();" 
	        title="Dell Vastro 270"><br /><br /><img src="../css/images/desktop/dell-vostro-270_b.jpg"  width="167" height="162" />										      		
			<input type="hidden" name="mob" value="Dell Vastro 270"  class="blink" />
			<span class="number">Dell Vastro 270</span><strong>3rd Generation Intel Core i3-3220 Processor</strong>,<strong> 18.5 Inches</strong></a>							
			</form>			
							</div>
							
							<div class="product">			
								<form id="myform67" name="myform67" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform67').submit();" 
	        title="HCL AD1V0028"><br /><br /><img src="../css/images/desktop/hcl-beanstalk-ad1v0028.jpg"  width="167" height="162" />										      		
			<input type="hidden" name="mob" value="HCL AD1V0028"  class="blink" />
			<span class="number">HCL AD1V0028</span><strong>Core i3 (2nd Generation)</strong><strong> 18.5 inches</strong> </a>							
			</form>				
							</div>
							
							
							<div class="product last">			
						 <form id="myform81" name="myform81" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform81').submit();" 
	  title="Lenovo C200"><br /><br /><img src="../css/images/desktop/C200_b.jpeg"  width="167" height="162" />
	 
	  <input type="hidden" name="mob" value="Lenovo C200"  class="blink" />
	<span class="number" >Lenovo C200</span><strong>Atom Dual Core(ist generation),18.5 Inches</strong> </a>						  
	</form>			
							</div>
							<div class="cl">&nbsp;</div>
						</div>
						<!-- End Products -->
					</div>
					<!-- End Content -->
					<!-- Begin Right Sidebar -->
					<div id="right-sidebar" class="sidebar">
						<ul>
							<li class="widget products-box">
								<h2>Bestsellers</h2>
								<div class="widget-entry">
									<ul>
							<li>
							<form id="myform316" name="myform316" action="../Calculate.php" method="post" >
							<a  href="javascript:void()" onclick="document.getElementById('myform316').submit();" title="Sony Experia M">
										<input type="hidden" name="mob" value="Sony Experia M"  class="blink" />
										<img src="../css/images/Mobile/sonyem0.jpeg" alt="Product Side Image 1" height="80" width="20"/>
										<span class="info">
										<span class="title">Sony Experia M</span>
										<span class=""><span>1 GHz Qualcomm Dual Core</span>
										</span>
										<span class="cl">&nbsp;</span>
										</a>	<br />											  
							</form>
							</li>
										
										
							<li>	
							
			<form id="myform361" name="myform361" action="../Calculate.php" method="post" >
			<a  href="javascript:void()" onclick="document.getElementById('myform361').submit();" title="Canon PowerShot A 2300">
			<input type="hidden" name="mob" value="Canon PowerShot A 2300"  class="blink" />
			<img src="../css/images/camera/cannon23001.jpeg" alt="Product Side Image 1" height="80" width="20"/>
			<span class="info">
			<span class="title">Canon PowerShot A 2300</span>
			<span class=""><span>16.0 Megapixels, 5x</span>
			</span>
			<span class="cl">&nbsp;</span>
			</a>		<br />											  
							</form>
							</li>
										
										
										
							<li>
							<form id="myform136" name="myform136" action="../Calculate.php" method="post" >
							<a  href="javascript:void()" onclick="document.getElementById('myform136').submit();" title="Sony Experia P">
										<input type="hidden" name="mob" value="Sony Experia P"  class="blink" />
										<img src="../css/images/Mobile/sonyep0.jpeg"  alt="Product Side Image 1" height="80" width="20"/>
										<span class="info">
										<span class="title">Sony Experia P</span>
										<span class=""><span>4 Inches, 8 Megapixel</span>
										</span>
										<span class="cl">&nbsp;</span>
										</a>	<br />												  
							</form>
							</li>
							
							
							<li>	
							<form id="myform326" name="myform326" action="../Calculate.php" method="post" >
							<a  href="javascript:void()" onclick="document.getElementById('myform326').submit();" title="Dell OptiPlex 390">
										<input type="hidden" name="mob" value="Dell OptiPlex 390"  class="blink" />
										<img src="../css/images/desktop/dell_OptiPlex_390_a.jpg"  alt="Product Side Image 1" height="70" width="100"/>
										<span class="info">
										<span class="title">Dell OptiPlex 390</span>
										<span class=""><span>Intel Core i3-2100, 17 Inches</span>
										</span>
										<span class="cl">&nbsp;</span>
										</a>	<br />												  
							</form>
							</li>
							
							
							<li>
							<form id="myform236" name="myform236" action="../Calculate.php" method="post" >
							<a  href="javascript:void()" onclick="document.getElementById('myform236').submit();" title="Dell Inspiron 15 3521">
										<input type="hidden" name="mob" value="Dell Inspiron 15 3521"  class="blink" />
										<img src="../css/images/laptop/del5_1.jpg" alt="Product Side Image 1" height="60" width="20"/>
										<span class="info">
										<span class="title">Dell Inspiron 15 3521</span>
										<span class=""><span>Intel Core i3,15.6 inch</span>
										</span>
										<span class="cl">&nbsp;</span>
										</a>	<br />												  
							</form>
							</li>
							
							
							<li>
				
							
						<form id="myform362" name="myform362" action="../Calculate.php" method="post" >
							<a  href="javascript:void()" onclick="document.getElementById('myform362').submit();" title="Sony Cyber-shot DSC-H90">
										<input type="hidden" name="mob" value="Sony Cyber-shot DSC-H90"  class="blink" />
										<img src="../css/images/camera/sony-dsc-h90-400x400-imad8yeqahmpyzz3.jpeg"  alt="Product Side Image 1" height="80" width="20"/>
										<span class="info">
										<span class="title">Sony Cyber-shot DSC-H90</span>
										<span class=""><span>16.1 Megapixels,16x</span>
										</span>
										<span class="cl">&nbsp;</span>
										</a>	<br />												  
							</form>
							</li>
							
							<li>
							
							<form id="myform336" name="myform336" action="../Calculate.php" method="post" >
							<a  href="javascript:void()" onclick="document.getElementById('myform336').submit();" title="Dell Inspiron 660">
										<input type="hidden" name="mob" value="Dell Inspiron 660"  class="blink" />
										<img src="../css/images/desktop/dell-inspiron-660s_a.jpg" alt="Product Side Image 1" height="80" width="20"/>
										<span class="info">
										<span class="title">Dell Inspiron 660</span>
										<span class=""><span>2nd Generation Intel Core i3</span>
										</span>
										<span class="cl">&nbsp;</span>
										</a>	<br />												  
							</form>
							</li>
										
							<li>
					
							
							<form id="myform363" name="myform363" action="../Calculate.php" method="post" >
							<a  href="javascript:void()" onclick="document.getElementById('myform363').submit();" title="HP 2000-2201TU">
										<input type="hidden" name="mob" value="HP 2000-2201TU"  class="blink" />
										<img src="../css/images/laptop/hp7_1.jpg" alt="Product Side Image 1" height="70" width="20"/>
										<span class="info">
										<span class="title">HP 2000-2201TU</span>
										<span class=""><span>Intel Core i3,15.6 inch</span>
										</span>
										<span class="cl">&nbsp;</span>
										</a>		<br />											  
							</form>
							</li>
							
							<li>
				
							<form id="myform436" name="myform436" action="../Calculate.php" method="post" >
							<a  href="javascript:void()" onclick="document.getElementById('myform436').submit();" title="Panasonic DMC-GF2">
										<input type="hidden" name="mob" value="Panasonic DMC-GF2"  class="blink" />
										<img src="../css/images/camera/panasonic-dmc-gf3-mirrorless1.jpeg" alt="Product Side Image 1" height="80" width="20"/>
										<span class="info">
										<span class="title">Panasonic DMC-GF2</span>
										<span class=""><span>12.10 Megapixels</span>
										</span>
										<span class="cl">&nbsp;</span>
										</a>		<br />											  
							</form>
							</li>
										
							<li>
							<form id="myform346" name="myform346" action="../Calculate.php" method="post" >
							<a  href="javascript:void()" onclick="document.getElementById('myform346').submit();" title="Samsung Galaxy S4 I950">
										<input type="hidden" name="mob" value="Samsung Galaxy S4 I950"  class="blink" />
										<img src="../css/images/Mobile/ssgalaxys4i95000.jpeg" alt="Product Side Image 1" height="80" width="20"/>
										<span class="info">
										<span class="title">Samsung Galaxy S4 I950</span>
										<span class=""><span>1.6GHz Quad + 1.2GHz Quad</span>
										</span>
										<span class="cl">&nbsp;</span>
										</a>		<br />											  
							</form>
							</li>
									</ul>
									<div class="cl">&nbsp;</div>
								</div>
							</li>
						</ul>
					</div>
					<!-- End Sidebar -->
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- End Inner -->
		</div>
		<!-- End Main -->
		<!-- Begin Footer -->
		<div id="footer">
			<div class="shell">
				<p class="bottom-menu">
				<a href="Main.php" title="Home">Home</a><span>|</span>
				<a href="register.php" title="Sign Up">Sign Up</a><span>|</span>
				<a href="login.php" title="Log In">Log In</a><span>|</span>
				<a href="accheck.php" title="Account">Account</a><span>|</span>
				<a href="Contact.php" title="Contact">Contact</a><span>|</span>
				<a href="Pcstore.php" title="About us">About US</a>
				</p>
				
				<p>Copyright &copy; PC Store 2012. Design by: <a href="Pcstore.php" title="PC Store">PC Store Developers</a>. All Rights Reserved. </p>
				<div class="cl">&nbsp;</div>
			</div>
		</div>
		<!-- End Footer -->
	</div>
	<!-- End Wrapper -->
</body>
</html>