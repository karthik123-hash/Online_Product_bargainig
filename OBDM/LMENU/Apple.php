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
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="Apple.php" title="Apple">Apple</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>Apple Laptops</u></span></div>
		
		<!-- End Navigation -->
		<!-- Begin Slider -->
		<!-- End Slider -->
        <!-- Begin Main -->
	
				<div class="shell">
				
<div id="content">
					
<div id="products" class="effect2">

<div class="product last">			
			<form id="myform14" name="myform14" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform14').submit();" 
	        title="Apple MacBook Pro Mac "><br /><br /><img src="../css/images/laptop/apl4.jpeg"   width="180"  height="182" />										      		
			<input type="hidden" name="mob" value="Apple MacBook Pro Mac"  class="blink" />
			<span class="number">Apple MacBook Pro Mac</span><strong>Intel Core i7</strong>,15 inch<strong>, Silver</strong></a>
			</form>				
			</div>	
							
							
							
							<!--<div class="cl">&nbsp;</div>-->
				<div class="product">			
			<form id="myform16" name="myform16" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform16').submit();" 
	        title="Apple MacBook Pro Mac MD662HN/A"><br /><br /><img src="../css/images/laptop/apl8_1.jpeg"  width="180"  height="182" />										      		
			<input type="hidden" name="mob" value="Apple MacBook Pro Mac MD103HN/A"  class="blink" />
			<span class="number">Apple MacBook Pro Mac MD103HN/A</span><strong>Intel Core i5</strong>,13 inch<strong>, Silver</strong></a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform17" name="myform17" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform17').submit();" 
	        title=" Apple MD102HN/A MacBook Pro"><br /><br /><img src="../css/images/laptop/apl6_1.jpeg"  width="180"  height="182" />										      		
			<input type="hidden" name="mob" value="Apple MD102HN/A MacBook Pro"  class="blink" />
			<span class="number">Apple MD102HN/A MacBook Pro</span><strong>Intel Core i7</strong>,13 inch<strong>, Silver</strong></a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform18" name="myform18" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform18').submit();" 
	        title="Apple MD212HN/A MacBook Pro"><br /><br /><img src="../css/images/laptop/apl51.jpeg"  width="180"  height="182" />										      		
			<input type="hidden" name="mob" value="Apple MD212HN/A MacBook Pro"  class="blink" />
			<span class="number">Apple MD212HN/A MacBook Pro </span><strong>Intel Core i5</strong>,13 inch<strong>, Silver</strong></a>
			</form>				
			</div>	
			
			
			<div class="product">			
			<form id="myform19" name="myform19" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform19').submit();" 
	        title="Apple MD711HN/A MacBook Air"><br /><br /><img src="../css/images/laptop/md711_1.jpg"  width="180"  height="182" />										    
	  		<input type="hidden" name="mob" value="Apple MD711HN/A MacBook Air"  class="blink" />
			<span class="number">Apple MD711HN/A MacBook Air</span><strong>Intel Core i5</strong>,11 inch<strong>, Silver</strong></a>
			</form>				
			</div>	
			
			
			<div class="product">
   <form id="myform20" name="myform20" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform20').submit();" 
	  title="Apple MD761HN/A MacBook Air"><br /><br /><img src="../css/images/laptop/MD760HN_1.jpg" width="180"  height="182" />
	  <input type="hidden" name="mob" value="Apple MD761HN/A MacBook Air"  class="blink" />
	<span class="number" >Apple MD761HN/A MacBook Air</span><strong>Intel Core i5</strong>,13 inch<strong>, Silver</strong></a>
			</form>				
			</div>	
			
			<div class="product">			
			<form id="myform21" name="myform21" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform21').submit();" 
	        title="Apple ME664HNA MacBook Pro"><br /><br /><img src="../css/images/laptop/ME664HNA_1.jpg" width="180"  height="182" />										
			<input type="hidden" name="mob" value="Apple ME664HNA MacBook Pro"  class="blink" />
			<span class="number">Apple ME664HNA MacBook Pro</span><strong>Intel Core i5</strong>,13 inch<strong>, Silver</strong></a>
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