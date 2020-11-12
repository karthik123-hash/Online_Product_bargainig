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
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="HP.php" title="HP">HP</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>HP Laptops</u></span></div>
		
		<!-- End Navigation -->
		<!-- Begin Slider -->
		<!-- End Slider -->
        <!-- Begin Main -->
	
				<div class="shell">
				
<div id="content">
					
<div id="products" class="effect2">

					
				
							
			<div class="product">
   <form id="myform34" name="myform34" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform34').submit();" 
	  title="HP 450"><br /><br /><img src="../css/images/laptop/hp1_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP 450"  class="blink" />
	<span class="number" >HP 450</span><strong>Intel Core i5</strong>,14 inch<strong>, Grey</strong></a>
			</form>				
			</div>	
				
					
				<div class="product">
   <form id="myform35" name="myform35" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform35').submit();" 
	  title="HP 2000-2201TU"><br /><br /><img src="../css/images/laptop/hp7_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP 2000-2201TU"  class="blink" />
	<span class="number" >HP 2000-2201TU</span><strong>Intel Core i3</strong>,15.6 inch<strong>, Glossy Imprint Black Licorice</strong></a>
			</form>				
			</div>	
	 
	 			
							<!--<div class="cl">&nbsp;</div>-->
		
					
				<div class="product">
   <form id="myform36" name="myform36" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform36').submit();" 
	  title="HP 2000-2313TU"><br /><br /><img src="../css/images/laptop/hp5_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP 2000-2313TU"  class="blink" />
	<span class="number" >HP 2000-2313TU</span><strong>Intel Core i5</strong>,14 inch<strong>, Black</strong></a>
			</form>				
			</div>	
	 
	 		
					
				
			
			<div class="product">
   <form id="myform38" name="myform38" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform38').submit();" 
	  title="HP Envy 4-1201TX"><br /><br /><img src="../css/images/laptop/hp8_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Envy 4-1201TX"  class="blink" />
	<span class="number" >HP Envy 4-1201TX</span><strong>Intel Core i5</strong>,14 inch<strong>, Aluminium Finish Midnight Black With Soft Touch Ruby Red Vertical Brushing Pattern</strong></a>
			</form>				
			</div>	
			
			
			
			
			
			<div class="product">
   <form id="myform39" name="myform39" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform39').submit();" 
	  title="HP Envy M6-1214TX"><br /><br /><img src="../css/images/laptop/hp9_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Envy M6-1214TX"  class="blink" />
	<span class="number" >HP Envy M6-1214TX</span><strong>Intel Core i5</strong>,15.6 inch<strong>, Aluminium Finish Natural Silver</strong></a>
			</form>				
			</div>	
			
			
			
			<div class="product">
   <form id="myform41" name="myform41" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform41').submit();" 
	  title="HP Envy&nbsp;Spectre&nbsp;XT 13-2001TU&nbsp;Ultrabook"><br /><br /><img src="../css/images/laptop/hp11_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Envy Spectre XT 13-2001TU Ultrabook"  class="blink" />
	<span class="number" >HP Envy&nbsp;Spectre&nbsp;XT 13-2001TU&nbsp;Ultrabook</span><strong>Intel Core i5</strong>,13.3 inch<strong>, Brushed Aluminium In Ano Silver Color</strong></a>
			</form>				
			</div>	
			
			<div class="product">
   <form id="myform42" name="myform42" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform42').submit();" 
	  title="HP Envy&nbsp;TouchSmart&nbsp;15-J001TX"><br /><br /><img src="../css/images/laptop/hp12_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Envy TouchSmart 15-J001TX"  class="blink" />
	<span class="number" >HP Envy&nbsp;TouchSmart&nbsp;15-J001TX</span><strong>Intel Core i7</strong>,15.6 inch<strong>, Glass Fiber With Silky Soft Touch Aluminium Finish Natural Silver</strong></a>
			</form>				
			</div>	
			
			<div class="product">
   <form id="myform43" name="myform43" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform43').submit();" 
	  title="HP Pavilion 14-B157TU&nbsp;Sleekbook"><br /><br /><img src="../css/images/laptop/hp14_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Pavilion 14-B157TU Sleekbook"  class="blink" />
	<span class="number" >HP Pavilion 14-B157TU&nbsp;Sleekbook</span><strong>Intel Core i3</strong>,14 inch<strong>, Imprint Sparkling Black</strong></a>
			</form>				
			</div>	
			
			<div class="product">
   <form id="myform44" name="myform44" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform44').submit();" 
	  title="HP Pavilion 15-B003TU&nbsp;Sleekbook"><br /><br /><img src="../css/images/laptop/hp15_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Pavilion 15-B003TU Sleekbook"  class="blink" />
	<span class="number" >HP Pavilion 15-B003TU&nbsp;Sleekbook</span><strong>Pentium Dual Core</strong>,15.6 inch<strong>, Imprint Sparkling Black</strong></a>
			</form>				
			</div>	
			
			<div class="product">
   <form id="myform45" name="myform45" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform45').submit();" 
	  title="HP Pavilion 15-e001AX Notebook"><br /><br /><img src="../css/images/laptop/hp13_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Pavilion 15-e001AX Notebook"  class="blink" />
	<span class="number" >HP Pavilion 15-e001AX Notebook</span><strong>APU Quad Core A10</strong>,15.6 inch<strong>, Metallic Black</strong></a>
			</form>				
			</div>	
			
				
			
			<div class="product">
   <form id="myform46" name="myform46" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform46').submit();" 
	  title="HP Pavilion G6-2222TU"><br /><br /><img src="../css/images/laptop/hp18_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Pavilion G6-2222TU"  class="blink" />
	<span class="number" >HP Pavilion G6-2222TU</span><strong>Intel Core i3</strong>,15.6 inch<strong>, Imprint Sparkling Black</strong></a>
			</form>				
			</div>	
			
			<div class="product">
   <form id="myform47" name="myform47" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform47').submit();" 
	  title="HP Pavilion G6-2236TX"><br /><br /><img src="../css/images/laptop/hp17_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Pavilion G6-2236TX"  class="blink" />
	<span class="number" >HP Pavilion G6-2236TX</span><strong>Intel Core i7</strong>,15.6 inch<strong>, Imprint Linen White Color With Modern Mesh Pattern</strong></a>
			</form>				
			</div>
			
			<div class="product">
   <form id="myform48" name="myform48" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform48').submit();" 
	  title="HP Pavilion G6-2302AX"><br /><br /><img src="../css/images/laptop/hp19_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Pavilion G6-2302AX"  class="blink" />
	<span class="number" >HP Pavilion G6-2302AX</span><strong>APU Dual Core A4</strong>,15.6 inch<strong>, Imprint Sparkling Black</strong></a>
			</form>				
			</div>	
			
			<div class="product">
   <form id="myform49" name="myform49" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform49').submit();" 
	  title="HP Pavilion G6-2309TU"><br /><br /><img src="../css/images/laptop/hp16_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Pavilion G6-2309TU"  class="blink" />
	<span class="number" >HP Pavilion G6-2309TU</span><strong>Intel Core i5</strong>,15.6 inch<strong>, Imprint Sparkling Black</strong></a>
			</form>				
			</div>
			
			
			
			<div class="product">
   <form id="myform51" name="myform51" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform51').submit();" 
	  title="HP Pavilion&nbsp;Touchsmart&nbsp;14-B172TX&nbsp;Sleekbook"><br /><br /><img src="../css/images/laptop/hp21_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Pavilion Touchsmart 14-B172TX Sleekbook"  class="blink" />
	<span class="number" >HP Pavilion&nbsp;Touchsmart&nbsp;14-B172TX&nbsp;Sleekbook</span><strong>Intel Core i5</strong>,14 inch<strong>, Imprint Sparkling Black</strong></a>
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