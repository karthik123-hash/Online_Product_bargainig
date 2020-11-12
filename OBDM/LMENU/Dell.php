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
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="Dell.php" title="Dell">Dell</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>Dell Laptops</u></span></div>
		
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
	        title="Dell Inspiron 14R 5421 "><br /><br /><img src="../css/images/laptop/del3_1.jpg"   width="180"  height="182" />										      		<input type="hidden" name="mob" value="Dell Inspiron 14R 5421"  class="blink" />
			<span class="number">Dell Inspiron 14R 5421 </span><strong>Intel Core i3</strong>,14 inch<strong>, Peacock Blue</strong></a>
			</form>				
			</div>	
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
			<div class="product">			
			<form id="myform23" name="myform23" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform23').submit();" 
	        title="Dell Alienware M14X R2"><br /><br /><img src="../css/images/laptop/del1_1.jpg"   width="180"  height="182" />										      		<input type="hidden" name="mob" value="Dell Alienware M14X R2"  class="blink" />
			<span class="number">Dell Alienware M14X R2</span><strong>Intel Core i7</strong>,14 inch<strong>, Black</strong></a>
			</form>				
			</div>	
							
							
				<div class="product last">			
			<form id="myform25" name="myform25" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform25').submit();" 
	        title="Dell Inspirion 14 3421"><br /><br /><img src="../css/images/laptop/del2_1.jpg"   width="180"  height="182" />										      		
			<input type="hidden" name="mob" value="Dell Inspirion 14 3421"  class="blink" />
			<span class="number">Dell Inspirion 14 3421</span><strong>Intel Core i5</strong>,14 inch<strong>, Black</strong></a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform26" name="myform26" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform26').submit();" 
	        title="Dell Inspiron 15 3521"><br /><br /><img src="../css/images/laptop/del4_1.jpg"  width="180"  height="182" />										      		<input type="hidden" name="mob" value="Dell Inspiron 15 3521"  class="blink" />
			<span class="number">Dell Inspiron 15 3521</span><strong>Intel Core i5</strong>,14 inch<strong>, Black</strong></a>
			</form>				
			</div>	
							
							
							<!--<div class="cl">&nbsp;</div>-->
							
							
				<div class="product">			
			<form id="myform27" name="myform27" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform27').submit();" 
	        title=" Dell Inspiron 15R 5521"><br /><br /><img src="../css/images/laptop/del6_1.jpg"  width="180"  height="182" />										      		<input type="hidden" name="mob" value="Dell Inspiron 15R 5521"  class="blink" />
			<span class="number"> Dell Inspiron 15R 5521</span><strong>Intel Core i7</strong>,15.6 inch<strong>, Silver</strong></a>
			</form>				
			</div>	
							
							
		
			
			
			<div class="product">			
			<form id="myform29" name="myform29" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform29').submit();" 
	        title="Dell&nbsp;Vostro&nbsp;2420"><br /><br /><img src="../css/images/laptop/del9_1.jpg"  width="180"  height="182" />										      		<input type="hidden" name="mob" value="Dell Vostro 2420"  class="blink" />
			<span class="number">Dell&nbsp;Vostro&nbsp;2420</span><strong>Intel Core i5</strong>,14 inch<strong>, Grey</strong></a>
			</form>				
			</div>	
			
			
			
<div class="product">
   <form id="myform30" name="myform30" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform30').submit();" 
	  title="Dell&nbsp;Vostro&nbsp;2520"><br /><br /><img src="../css/images/laptop/del10_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Dell Vostro 2520"  class="blink" />
	<span class="number" >Dell&nbsp;Vostro&nbsp;2520</span><strong>Intel Core i3</strong>,15.6 inch<strong>, Grey</strong></a>
			</form>				
			</div>	

					
	    
			<div class="product">
   <form id="myform31" name="myform31" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform31').submit();" 
	  title="Dell&nbsp;Vostro&nbsp;3560"><br /><br /><img src="../css/images/laptop/del11_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Dell Vostro 3560"  class="blink" />
	<span class="number" >Dell&nbsp;Vostro&nbsp;3560</span><strong>Intel Core i5</strong>,15.6 inch<strong>, Silver</strong></a>
			</form>				
			</div>	
			
			
			
							
			
			<div class="product">
   <form id="myform32" name="myform32" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform32').submit();" 
	  title="Dell XPS 13"><br /><br /><img src="../css/images/laptop/del12_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Dell XPS 13"  class="blink" />
	<span class="number" >Dell XPS 13</span><strong>Intel Core i7</strong>,13.3 inch<strong>, Aluminium Silver</strong></a>
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