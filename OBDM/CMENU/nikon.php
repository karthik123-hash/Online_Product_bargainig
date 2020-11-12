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
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="nikon.php" title="Nikon">Nikon</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>Nikon CAMERAS</u></span></div>
		
		<!-- End Navigation -->
		<!-- Begin Slider -->
		<!-- End Slider -->
        <!-- Begin Main -->
	
				<div class="shell">
				
<div id="content">
					
<div id="products" class="effect2">
			
			<div class="product">			
			<form id="myform12" name="myform12" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform12').submit();" 
	        title="Nikon Coolpix L27"><br /><br /><img src="../css/images/camera/nikon1271.jpeg"   width="175" height="182" />										      		
			<input type="hidden" name="mob" value="Nikon Coolpix L27"  class="blink" />
			<span class="number">Nikon Coolpix L27</span><strong>16.1 Megapixels</strong></a>							
			</form>				
			</div>	
			
				<div class="product">			
			<form id="myform13" name="myform13" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform13').submit();" 
	        title="Nikon Coolpix L610"><br /><br /><img src="../css/images/camera/nikonL6101.jpeg"   width="178" height="182" />										      		
			<input type="hidden" name="mob" value="Nikon Coolpix L610"  class="blink" />
			<span class="number">Nikon Coolpix L610</span><strong>16.1 Megapixels</strong>, <strong>Point & Shoot</strong></a>							
			</form>				
			</div>	
					
				<div class="product last">			
			<form id="myform14" name="myform14" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform14').submit();" 
	        title="Nikon Coolpix L820"><br /><br /><img src="../css/images/camera/nikon8201.jpeg"   width="174" height="182" />										      		
			<input type="hidden" name="mob" value="Nikon Coolpix L820"  class="blink" />
			<span class="number">Nikon Coolpix L820</span>16.1 Megapixels,<strong>Point & Shoot</strong></a>
			</form>				
			</div>		
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
				<div class="product">			
			<form id="myform15" name="myform15" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform15').submit();" 
	        title="Nikon Coolpix P520"><br /><br /><img src="../css/images/camera/nikonp520.jpeg" width="177" height="182" />										      		
			<input type="hidden" name="mob" value="Nikon Coolpix P520"  class="blink" />
			<span class="number">Nikon Coolpix P520</span><strong>18.1 Megapixels</strong>,<strong>Point & Shoot</strong></a>							
			</form>				
			</div>	
							
							
							
				<div class="product">			
			<form id="myform16" name="myform16" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform16').submit();" 
	        title="Nikon Coolpix S5200"><br /><br /><img src="../css/images/camera/nikons52001.jpeg"  width="170" height="182" />										      		
			<input type="hidden" name="mob" value="Nikon Coolpix S5200"  class="blink" />
			<span class="number">Nikon Coolpix S5200</span><strong>16.0 Megapixels</strong><strong>Point & Shoot</strong> </a>							
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