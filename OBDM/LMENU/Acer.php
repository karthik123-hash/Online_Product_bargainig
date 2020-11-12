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
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="Acer.php" title="Acer">Acer</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>ACER LAPTOPS</u></span></div>
		
		<!-- End Navigation -->
		<!-- Begin Slider -->
		<!-- End Slider -->
        <!-- Begin Main -->
	
				<div class="shell">
				
<div id="content">
					
<div id="products" class="effect2">
		
	
			
			<div class="product">			
			<form id="myform2" name="myform2" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform2').submit();" 
	        title="Acer Aspire E1-571G"><br /><br /><img src="../css/images/laptop/A21.jpg"    width="180"  height="182" />										      		
			<input type="hidden" name="mob" value="Acer Aspire E1-571G"  class="blink" />
			<span class="number">Acer Aspire E1-571G</span><strong>Intel Core i5</strong>, 15.6 inch<strong>, Black</strong></a>							
			</form>				
			</div>	
					
					
			<div class="product">			
			<form id="myform3" name="myform3" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform3').submit();" 
	        title="Acer Aspire E1-571G-BT"><br /><br /><img src="../css/images/laptop/A2.jpg"    width="180"  height="182" />										      		
			<input type="hidden" name="mob" value="Acer Aspire E1-571G-BT"  class="blink" />
			<span class="number">Acer Aspire E1-571G-BT</span><strong>Intel Core i3</strong>, 15.6 inch<strong>, Black</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform4" name="myform4" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform4').submit();" 
	        title="Acer Aspire S7-391C Ultrabook"><br /><br /><img src="../css/images/laptop/A51.jpg"  width="180"  height="182" />										      		
			<input type="hidden" name="mob" value="Acer Aspire S7-391C Ultrabook"  class="blink" />
			<span class="number">Acer Aspire S7-391C Ultrabook</span><strong>Intel Core i5</strong>, 13.3 inch<strong>, White</strong></a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform5" name="myform5" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform5').submit();" 
	        title="Acer Aspire V3-571G"><br /><br /><img src="../css/images/laptop/Avv71.jpg"  width="180"  height="182" />	
			
			<input type="hidden" name="mob" value="Acer Aspire V3-571G"  class="blink" />
			<span class="number">Acer Aspire V3-571G</span><strong>Intel Core i3</strong>, 15.6 inch<strong>, Midnight Black</strong></a>						
			</form>				
			</div>	
							
					<br />		
							<!--<div class="cl">&nbsp;</div>-->
				<div class="product">			
			<form id="myform6" name="myform6" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform6').submit();" 
	        title="Acer Aspire V5 571P"><br /><br /><img src="../css/images/laptop/Avv81.jpg"  width="180"  height="182" />										      		<input type="hidden" name="mob" value="Acer Aspire V5 571P"  class="blink" />
			<span class="number">Acer Aspire V5 571P</span><strong>Intel Core i5</strong>, 15.6 inch<strong>, Silver</strong></a>							
			</form>				
			</div>	
							
		
							
							
				<div class="product">			
			<form id="myform8" name="myform8" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform8').submit();" 
	        title="Acer Aspire V5-471"><br /><br /><img src="../css/images/laptop/AVV61.jpg"  width="180"  height="182" />	
			<input type="hidden" name="mob" value="Acer Aspire V5-471"  class="blink" />
			<span class="number">Acer Aspire V5-471</span><strong>Intel Core i3</strong>, 14 inch<strong>, Silver</strong></a>							
			</form>				
			</div>	
			
			
			<div class="product">			
			<form id="myform9" name="myform9" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform9').submit();" 
	        title="Acer Aspire V5-471P"><br /><br /><img src="../css/images/laptop/Avv41.jpg"  width="180"  height="182" />
			<input type="hidden" name="mob" value="Acer Aspire V5-471P"  class="blink" />
			<span class="number">Acer Aspire V5-471P</span><strong>Intel Core i3</strong>, 14 inch<strong>, Misty Silver</strong></a>							
			</form>				
			</div>
			
					
			<div class="product">
   			<form id="myform10" name="myform10" action="../Calculate.php" method="post" >
			<a  href="javascript:void()" onclick="document.getElementById('myform10').submit();" 
	 		 title="Acer Aspire V5-571"><br /><br /><img src="../css/images/laptop/Av51.jpg" width="180"  height="182" />
	  		<input type="hidden" name="mob" value="Acer Aspire V5-571"  class="blink" />
			<span class="number" >Acer Aspire V5-571</span><strong>Intel Core i5</strong>,15.6 inch<strong>, Glossy Black</strong></a>							
			</form>				
			</div>		
			
				
					
					
			<div class="product">			
			<form id="myform12" name="myform12" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform12').submit();" 
	        title="Acer Gateway NE56R"><br /><br /><img src="../css/images/laptop/Avv91.jpg"   width="180"  height="182" />										      		
			<input type="hidden" name="mob" value="Acer Gateway NE56R"  class="blink" />
			<span class="number">Acer Gateway NE56R</span><strong>Pentium Dual Core</strong>,15.6 inch<strong>, Black</strong></a>							
			</form>				
			</div>		
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
		
			
			
			
							
							
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