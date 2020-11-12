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
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="fujifilm.php" title="Fujifilm">Fujifilm</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>Fujifilm CAMERAS</u></span></div>
		
		<!-- End Navigation -->
		<!-- Begin Slider -->
		<!-- End Slider -->
        <!-- Begin Main -->
	
				<div class="shell">
				
<div id="content">
					
<div id="products" class="effect2">
	<div class="product">			
			<form id="myform7" name="myform7" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform7').submit();" 
	        title="Fujifilm F660EXR"><br /><br /><img src="../css/images/camera/fujifilm-f6601.jpeg"  width="168" height="182" />										      		
			<input type="hidden" name="mob" value="Fujifilm F660EXR"  class="blink" />
			<span class="number"> Fujifilm F660EXR </span><strong>16.0 Megapixels</strong>,<strong>15x</strong></a>							
			</form>				
			</div>	
			
				<div class="product">			
			<form id="myform8" name="myform8" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform8').submit();" 
	        title="Fujifilm Finepix JX 420"><br /><br /><img src="../css/images/camera/fujifilm-finepix-jx-4201.jpeg"  width="172" height="182" />		
			<input type="hidden" name="mob" value="Fujifilm Finepix JX 420"  class="blink" />
			<span class="number"> Fujifilm Finepix JX 420</span><strong>16.0 Megapixels</strong>,<strong>5x</strong></a>							
			</form>				
			</div>	
					
				<div class="product">			
			<form id="myform9" name="myform9" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform9').submit();" 
	        title="Fujifilm FinePix X20"><br /><br />
			<img src="../css/images/camera/fujifilm-finepix-x20-mirrorless.jpeg" width="178" height="182" />
			<input type="hidden" name="mob" value="Fujifilm FinePix X20"  class="blink" />
			<span class="number">Fujifilm FinePix X20</span><strong>12.0 Megapixels</strong>,<strong>Mirrorless</strong></a>							
			</form>				
			</div>		
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
				<div class="product">
   <form id="myform10" name="myform10" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform10').submit();" 
	  title="Fujifilm AX550"><br /><br />
	<img src="../css/images/camera/fujifilmax5001.jpeg" width="173" height="181" />
	<input type="hidden" name="mob" value="Fujifilm AX550"  class="blink" />
	<span class="number" >Fujifilm AX550</span><strong>16.0 Megapixels</strong>,<strong>Point & Shoot,5x</strong>		    </a>						  
	</form>
	 </div>
							
							
							
				<div class="product">			
			<form id="myform11" name="myform11" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform11').submit();" 
	        title="Fujifilm X100S Mirrorless"><br /><br /><img src="../css/images/camera/fujifilm-x100s-mirrorless1.jpeg" width="174" height="182" />										
			<input type="hidden" name="mob" value="Fujifilm X100S"  class="blink" />
			<span class="number">Fujifilm X100S Mirrorless</span><strong>16.3 Megapixels</strong>,<strong>4x</strong></a>							
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