<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
		<title>PC-Store  World near to yoU</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="../css/images/favicon.ico" />
	<link rel="stylesheet" href="../css/Mobilemenu.css" type="text/css" media="all" />
		<?php 
		 error_reporting(E_ALL ^ E_NOTICE);     //      To erase the Notice because the variables below first used in this scope
	      session_start(); 
		  $flag=$_SESSION['logged']; //to check logged or not
		  $lname=$_SESSION['logname'];  // his name to display
		$_SESSION['barg']="0";
		  
	?>
    <style type="text/css">
<!--
.style17 {
	color: #9933CC;
	font-size: x-large;
	font-weight: bold;
}
-->
    </style>
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Green bar-->
	  <div id="top">
			<div class="shell">
				
				<div class="cl">&nbsp;</div>
			</div>
	  </div>
		<!-- End green bar-->
		<!-- Begin Header -->
	
	  <div id="header" class="shell">
		  
	    <h2 class="style8"><strong><br />PCStore</h2>
		
		<div id="log" align="right">
		<?php 
		if($flag=="yes")
		{ 
		echo "<input type='text' value='logged in as $lname'  class='blink' disabled='disabled' onclick='logout.php'/><a href='../Main/logout.php'>logout</a>";
		}
		?>
		
		</div>
	    <p class="style8">&nbsp;</p>
	    <p class="style8">&nbsp;</p>
		
	  </div>
		<!-- End Header -->
		<!-- Begin Navigation -->
<div id="navigation">
			<div class="shell">
				<ul>
					<li><a href="../Main/Main.php" title="Home">Home</a></li>
					<li><a href="../Main/Offer.php" title="Special Offers">Special Offers</a></li>
					<li><a href="../Main/login.php" title="Log In">Log In</a></li>
					<li><a href="../Main/accheck.php" title="Account">Account</a>
					</li><li><a href="../Main/Contact.php" title="Contact">Contact</a></li>
				</ul>
				<div class="cl">&nbsp;</div>
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="Samsung.php" title="Samsung">Samsung</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>SAMSUNG MOBILES</u></span></div>
		
		<!-- End Navigation -->
		<!-- Begin Slider -->
		<!-- End Slider -->
        <!-- Begin Main -->
	
				<div class="shell">
				
<div id="content">
					
<div id="products" class="effect2">

	<div class="product">
   <form id="myform" name="myform" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform').submit();" 
	  title="Samsung Galaxy Ace S5830i"><br /><br /><img src="../css/images/Mobile/ssaces5830i0.jpeg" width="115" height="182" />
	  <input type="hidden" name="mob" value="Samsung Galaxy Ace S5830i"  class="blink" />
	<span class="number" >Samsung Galaxy Ace S5830i</span><strong>832 MHz ARM11 Processor</strong>,<strong>3.5 Inches TFT Screen</strong>		    </a>						  
	</form>
	 </div>
			
			<div class="product">			
			<form id="myform1" name="myform1" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform1').submit();" 
	        title="Samsung Galaxy Chat B5330"><br /><br /><img src="../css/images/Mobile/ssgalaxychatb53300.jpeg" width="115" height="182" />										
			<input type="hidden" name="mob" value="Samsung Galaxy Chat B5330"  class="blink" />
			<span class="number">Samsung Galaxy Chat B5330</span><strong>Android v4(IceCream Sandwich)</strong>,<strong>2 Megapixel</   strong></a>							
			</form>				
			</div>	
					
					
			<div class="product">			
			<form id="myform2" name="myform2" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform2').submit();" 
	        title="Samsung Galaxy Grand Duos I9082"><br /><br /><img src="../css/images/Mobile/ssgalaxygrandduosi90820.jpeg"   width="115" height="182" />										      		
			<input type="hidden" name="mob" value="Samsung Galaxy Grand Duos I9082"  class="blink" />
			<span class="number">Samsung Galaxy Grand Duos I9082</span><strong>1.2 GHz, Dual Core Processor 5 Inches  8 Megapixel</strong></a>							
			</form>				
			</div>	
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
				<div class="product">			
			<form id="myform3" name="myform3" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform3').submit();" 
	        title="Samsung Galaxy Music Duos S6012"><br /><br /><img src="../css/images/Mobile/ssgalaxymusicduoss60120.jpeg"   width="115" height="182" />										      		
			<input type="hidden" name="mob" value="Samsung Galaxy Music Duos S6012"  class="blink" />
			<span class="number">Samsung Galaxy Music Duos S6012</span><strong>850 MHz Cortex-A9</strong>, <strong> 3 Megapixel</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product last">			
			<form id="myform4" name="myform4" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform4').submit();" 
	        title="Samsung Galaxy Note 2 N7100"><br /><br /><img src="../css/images/Mobile/ssgalaxynote2n71002.jpeg"   width="115" height="182" />										      		
			<input type="hidden" name="mob" value="Samsung Galaxy Note 2 N7100"  class="blink" />
			<span class="number">Samsung Galaxy Note 2 N7100</span>1.6 GHz Cortex-A9, Quad Core , 8 Megapixel</a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform5" name="myform5" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform5').submit();" 
	        title="Samsung Galaxy S3"><br /><br /><img src="../css/images/Mobile/ssgalaxys30.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Samsung Galaxy S3"  class="blink" />
			<span class="number">Samsung Galaxy S3</span><strong>Dual SIM</strong>, <strong>4.8 Inches</strong><strong>Android v4 (Ice Cream Sandwich)</strong></a>							
			</form>				
			</div>	
							
							
							<!--<div class="cl">&nbsp;</div>-->
				<div class="product">			
			<form id="myform6" name="myform6" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform6').submit();" 
	        title="Samsung Galaxy S4 I950"><br /><br /><img src="../css/images/Mobile/ssgalaxys4i95000.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Samsung Galaxy S4 I950"  class="blink" />
			<span class="number">Samsung Galaxy S4 I950</span><strong>1.6GHz Quad + 1.2GHz Quad</strong>16 GB Internal<strong> 13 Megapixel</strong> </a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform7" name="myform7" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform7').submit();" 
	        title=" Samsung Galaxy S Duos S7562"><br /><br /><img src="../css/images/Mobile/ssgalaxysduoss7562w0.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Samsung Galaxy S Duos S7562"  class="blink" />
			<span class="number"> Samsung Galaxy S Duos S7562</span><strong>1 GHz Cortex-A5 Processor, 4 Inches ,  5 Megapixel</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform8" name="myform8" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform8').submit();" 
	        title="Samsung Galaxy S Duos S7562(BLACK)"><br /><br /><img src="../css/images/Mobile/ssgalaxysduoss75620.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Samsung Galaxy S Duos S7562(BLACK)"  class="blink" />
			<span class="number">Samsung Galaxy S Duos S7562(BLACK) </span><strong>1 GHz Cortex-A5 Processor, 4 Inches , 5 Megapixel</strong></a>							
			</form>				
			</div>	
			
			
			<div class="product">			
			<form id="myform9" name="myform9" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform9').submit();" 
	        title="Samsung Omnia M S7530"><br /><br /><img src="../css/images/Mobile/ssomnia0.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Samsung Omnia M S7530"  class="blink" />
			<span class="number">Samsung Omnia M S7530</span><strong>Windows Phone 7.5 ,5 Megapixel</strong></a>							
			</form>				
			</div>	
			
			
			
							
							
</div>
<!-- End Products -->		  	
</div>
	   

		
		<!-- Begin Footer -->
		<div class="cl">&nbsp;</div>
		<div id="footer">
			<div class="shell">
				<p class="bottom-menu"> 
				<a href="../Main/Main.php" title="Home"> Home </a> 
				<span>|</span> 
				<a href="../Main/Offer.php" title="Special Offers">Special Offers</a>
				<span>|</span>
				<a href="../Main/login.php" title="Log In">Log In</a>
				<span>|</span>
				<a href="../Main/accheck.php" title="Account">Account</a>
				<span>|</span>
				<a href="../Main/Contact.php" title="Contact">Contact</a> 
				</p>
				<p >
				Copyright &copy; PC Store 2013. All Rights Reserved. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				<div > &nbsp; </div>
			    </div>
	   </div>
		<!-- End Footer -->
       </div>
	   <!-- End Wrapper -->
</body>
</html>