<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>PC-Store  World near to yoU</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="../css/images/favicon.ico" />
	<?php 
		 error_reporting(E_ALL ^ E_NOTICE);     //      To erase the Notice because the variables below first used in this scope
	      session_start(); 
		  $flag=$_SESSION['logged']; //to check logged or not
		  $lname=$_SESSION['logname'];  // his name to display
		$_SESSION['barg']="0";
		  
	?>
	<link rel="stylesheet" href="../css/Mobilemenu.css" type="text/css" media="all" />
	
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
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="sony.php" title="Sony">Sony</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>Sony CAMERAS</u></span></div>
		
		<!-- End Navigation -->
		<!-- Begin Slider -->
		<!-- End Slider -->
        <!-- Begin Main -->
	
				<div class="shell">
				
<div id="content">
					
<div id="products" class="effect2">
			
			<div class="product">			
			<form id="myform22" name="myform22" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform22').submit();" 
	        title="Sony Cyber-shot DSC-H90"><br /><br /><img src="../css/images/camera/sony-dsc-h90-400x400-imad8yeqahmpyzz3.jpeg"   width="176" height="182" />										      		
			<input type="hidden" name="mob" value="Sony Cyber-shot DSC-H90"  class="blink" />
			<span class="number">Sony Cyber-shot DSC-H90</span><strong>16.1 Megapixels,16x,Point & Shoot</strong></a>							
			</form>				
			</div>	
			
				<div class="product">			
			<form id="myform23" name="myform23" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform23').submit();" 
	        title="Sony Cyber-shot DSC-RX1"><br /><br /><img src="../css/images/camera/sony-cybershot-dsc-rx1-mirrorless-400x400-imadjhhxdqvjqjnr.jpeg"   width="187" height="182" />										      		
			<input type="hidden" name="mob" value="Sony Cyber-shot DSC-RX1"  class="blink" />
			<span class="number">Sony Cyber-shot DSC-RX1</span><strong>24.3 Megapixels</strong>, <strong>Mirrorless</strong></a>							
			</form>				
			</div>	
					
				<div class="product last">			
			<form id="myform24" name="myform24" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform24').submit();" 
	        title="Sony Cyber-shot DSC-S5000"><br /><br /><img src="../css/images/camera/sony-cyber-shot-dsc-s5000-1.jpeg"  width="174" height="182" />										      		
			<input type="hidden" name="mob" value="Sony Cyber-shot DSC-S5000"  class="blink" />
			<span class="number">Sony Cyber-shot DSC-S5000</span><strong>14.1 Megapixels,Point & Shoot</strong></a>
			</form>				
			</div>	
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
				
			<div class="product">			
			<form id="myform25" name="myform25" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform25').submit();" 
	        title="Sony Cyber-shot DSC-W730"><br /><br /><img src="../css/images/camera/sony-cybershot-dsc-w730-1.jpeg"  width="178" height="182" />										      		
			<input type="hidden" name="mob" value="Sony Cyber-shot DSC-W730"  class="blink" />
			<span class="number">Sony Cyber-shot DSC-W730</span><strong>16.1 Megapixels</strong>, <strong>Point & Shoot</strong><strong>8x</strong></a>							
			</form>				
			</div>	
							
							
							
				<div class="product">			
			<form id="myform26" name="myform26" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform26').submit();" 
	        title="Sony Cyber-shot DSC-WX7"><br /><br /><img src="../css/images/camera/sony-cybershot-dsc-wx200-1.jpeg"  width="177" height="182" />										      		
			<input type="hidden" name="mob" value="Sony Cyber-shot DSC-WX7"  class="blink" />
			<span class="number">Sony Cyber-shot DSC-WX7</span><strong>16.2 Megapixels</strong>16.2 Megapixels<strong>Point & Shoot</strong> </a>							
			</form>				
			</div>	
		
						
				
				
				
				
				
				
				
				
				
				
				
				
						
</div>
<!-- End Products -->		  	
</div>
	   <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		 <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

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