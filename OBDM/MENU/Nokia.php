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
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="Nokia.php" title="Nokia">Nokia</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>Nokia MOBILES</u></span></div>
		
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
	  title="Nokia 500"><br /><br /><img src="../css/images/Mobile/nkfivehund0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Nokia 500"  class="blink" />
	<span class="number" >Nokia 500</span><strong>3.2 Inches</strong>,<strong>Single SIM, GSM</strong></a>						  
	</form>
	 </div>
			
			<div class="product">			
			<form id="myform1" name="myform1" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform1').submit();" 
	        title="Nokia Asha 210"><br /><br /><img src="../css/images/Mobile/nkasha2ten0.jpeg"  width="115" height="182" />										      		
			<input type="hidden" name="mob" value="Nokia Asha 210"  class="blink" />
			<span class="number">Nokia Asha 210</span><strong>2 Megapixel</strong>,<strong>2.4 Inches</strong></a>							
			</form>				
			</div>	
					
			<div class="product">			
			<form id="myform2" name="myform2" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform2').submit();" 
	        title="Nokia Asha 303"><br /><br /><img src="../css/images/Mobile/nkasha30three0.jpeg"   width="115" height="182" />										      		
			<input type="hidden" name="mob" value="Nokia Asha 303"  class="blink" />
			<span class="number">Nokia Asha 303</span><strong>1 GHz</strong> Processor </a>							
			</form>				
			</div>	
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
				<div class="product">			
			<form id="myform3" name="myform3" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform3').submit();" 
	        title="Nokia Asha 311(grey)"><br /><br /><img src="../css/images/Mobile/nkasha31one0.jpeg"    width="115" height="182" />										      		
			<input type="hidden" name="mob" value="Nokia Asha 311(grey)"  class="blink" />
			<span class="number">Nokia Asha 311(grey)</span><strong>3.2 Megapixel</strong>, <strong>3 Inches</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product last">			
			<form id="myform4" name="myform4" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform4').submit();" 
	        title="Nokia Asha 311(red)"><br /><br /><img src="../css/images/Mobile/nkasha31oner0.jpeg"  width="115" height="182" />										      		
			<input type="hidden" name="mob" value="Nokia Asha 311(red)"  class="blink" />
			<span class="number">Nokia Asha 311(red)</span>3 .2 Megapixel, 3 Inches </a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform5" name="myform5" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform5').submit();" 
	        title="Nokia Asha 501"><br /><br /><img src="../css/images/Mobile/nkasha50one0.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Nokia Asha 501"  class="blink" />
			<span class="number">Nokia Asha 501</span><strong>Dual SIM</strong>, <strong>3 Inches</strong></a>							
			</form>				
			</div>	
							
							
							<!--<div class="cl">&nbsp;</div>-->
				<div class="product">			
			<form id="myform6" name="myform6" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform6').submit();" 
	        title="Nokia Lumia 520"><br /><br /><img src="../css/images/Mobile/nklumia5200.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Nokia Lumia 520"  class="blink" />
			<span class="number">Nokia Lumia 520</span><strong>1 GHz </strong>Dual Core,,<strong>4 Inches</strong> </a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform7" name="myform7" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform7').submit();" 
	        title="Nokia Lumia 820"><br /><br /><img src="../css/images/Mobile/nklumia8200.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Nokia Lumia 820"  class="blink" />
			<span class="number">Nokia Lumia 820</span><strong>1.5 GHz</strong> Dual Core, <strong>4.3 Inches</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform8" name="myform8" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform8').submit();" 
	        title="Nokia Lumia 925(black)"><br /><br /><img src="../css/images/Mobile/nklumia9250.jpeg"  width="115" height="182" />		<input type="hidden" name="mob" value="Nokia Lumia 925(black)"  class="blink" />
			<span class="number">Nokia Lumia 925(black)</span><strong>1.5 GHz</strong> Dual Core, <strong> 8.7 Megapixel</strong></a>							
			</form>				
			</div>	
			
			
			<div class="product">			
			<form id="myform9" name="myform9" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform9').submit();" 
	        title="Nokia Lumia 925(white)"><br /><br /><img src="../css/images/Mobile/nklumiaw9252.jpeg"  width="115" height="182" /><input type="hidden" name="mob" value="Nokia Lumia 925(white)"  class="blink" />
			<span class="number">Nokia Lumia 925(white)</span><strong>1.5 GHz</strong> Dual Core, <strong>8.7 Megapixel</strong></a>							
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