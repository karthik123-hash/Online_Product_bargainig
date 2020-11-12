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
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="canon.php" title="Canon">Canon</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>Canon 	cameras</u></span></div>
		
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
	  title="Cannon IXUS 125"><br /><br /><img src="../css/images/camera/cannon1251.jpeg" width="172" height="180" />
	  <input type="hidden" name="mob" value="Cannon IXUS 125"  class="blink" />
	<span class="number">Cannon IXUS 125</span><strong>16.1 Megapixels</strong>,<strong>3 inch</strong></a>						  
	</form>
	 </div>
			
			<div class="product">			
			<form id="myform1" name="myform1" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform1').submit();" 
	        title="Cannon IXUS 255"><br /><br /><img src="../css/images/camera/cannon2551.jpeg"  width="173" height="182" />										      		
			<input type="hidden" name="mob" value="Cannon IXUS 255"  class="blink" />
			<span class="number">Cannon IXUS 255</span><strong>3 inch</strong>,<strong>10x</strong></a>							
			</form>				
			</div>	
					
					
			<div class="product">			
			<form id="myform2" name="myform2" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform2').submit();" 
	        title="Cannon IXUS 500"><br /><br /><img src="../css/images/camera/cannon2.jpeg"   width="182" height="182" />										      		
			<input type="hidden" name="mob" value="Cannon IXUS 500"  class="blink" />
			<span class="number">Cannon IXUS 500</span><strong>10.1 Megapixels</strong>,<strong>12x</strong> </a>							
			</form>				
			</div>		
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
			<div class="product last">			
			<form id="myform3" name="myform3" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform3').submit();" 
	        title="Cannon IXUS 510"><br /><br /><img src="../css/images/camera/cannon5101.jpeg" width="172" height="182" />										      		
			<input type="hidden" name="mob" value="Cannon IXUS 510"  class="blink" />
			<span class="number">Cannon IXUS 500</span><strong>10.1 Megapixels</strong>, <strong>12x</strong></a>							
			</form>				
			</div>	
							
							
							
				<div class="product">			
			<form id="myform4" name="myform4" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform4').submit();" 
	        title="Canon PowerShot A 2200"><br /><br /><img src="../css/images/camera/cannon22001.jpeg" width="188" height="180" />										      		
			<input type="hidden" name="mob" value="Canon PowerShot A 2200"  class="blink" />
			<span class="number">Canon PowerShot A 2200</span><strong>14.1 Megapixels</strong>,<strong>4x</strong> </a>
			</form>				
			</div>	
							
				<div class="product">			
			<form id="myform5" name="myform5" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform5').submit();" 
	        title="Canon PowerShot A 2300"><br /><br /><img src="../css/images/camera/cannon23001.jpeg"  width="169" height="182" />										      		
			<input type="hidden" name="mob" value="Canon PowerShot A 2300"  class="blink" />
			<span class="number">Canon PowerShot A 2300</span><strong>16.0 Megapixels</strong>, <strong>5x</strong></a>							
			</form>				
			</div>	
			<div class="product">			
			<form id="myform6" name="myform6" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform6').submit();" 
	        title="Canon PowerShot G1x"><br /><br /><img src="../css/images/camera/cannongx1.jpeg" width="173" height="182" />										      		
			<input type="hidden" name="mob" value="Canon PowerShot G1x"  class="blink" />
			<span class="number">Canon PowerShot G1x</span><strong>14.3 Megapixels</strong>,<strong>4x</strong> </a>							
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