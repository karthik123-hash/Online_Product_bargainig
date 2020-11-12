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
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="Sony.php" title="Sony">Sony</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>SONY MOBILES</u></span></div>
		
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
	  title="Sony Experia E"><br /><br /><img src="../css/images/Mobile/sonye0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia E"  class="blink" />
	<span class="number" >Sony Experia E</span><strong> 1 GHz Processor   </strong> &nbsp;, <strong>  3.2 Megapixel , Single SIM</strong></a>						  
	</form>
	 </div>

					
	    
			<div class="product">
   <form id="myform1" name="myform1" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform1').submit();" 
	  title="Sony Experia E Dual"><br /><br /><img src="../css/images/Mobile/sonyedual0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia E Dual"  class="blink" />
	<span class="number" >Sony Experia E Dual</span><strong>1 GHz Qualcomm Processor </strong>&nbsp;&nbsp;&nbsp;<strong>3.5 Inches, 3.2 Megapixel&nbsp;&nbsp;</strong></a>						  
	</form>
	 </div>
			
			
			
							
			
			<div class="product">
   <form id="myform2" name="myform2" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform2').submit();" 
	  title="Sony Experia GO"><br /><br /><img src="../css/images/Mobile/sonyego0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia GO"  class="blink" />
	<span class="number" >Sony Experia GO</span><strong>1 GHz Dual Core Processor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 Megapixel&nbsp;&nbsp;&nbsp;</strong></a>						  
	</form>
	 </div>
					
							
				
				
							<!-- <div class="cl">&nbsp;</div>*/  -->
			
			<div class="product">
   <form id="myform3" name="myform3" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform3').submit();" 
	  title="Sony Experia ION"><br /><br /><img src="../css/images/Mobile/sonyeion0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia ION"  class="blink" />
	<span class="number" >Sony Experia ION</span><strong>1.5 GHz Dual Core Processor &nbsp;4.6 Inches, 12 Megapixel</strong></a>						  
	</form>
	 </div>
							
				
				
							
			<div class="product">
   <form id="myform4" name="myform4" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform4').submit();" 
	  title="Sony Experia J"><br /><br /><img src="../css/images/Mobile/sonyej0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia J"  class="blink" />
	<span class="number" >Sony Experia J</span><strong>1 GHz Cortex-A5 Processor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Inches, 5 Megapixel&nbsp;&nbsp;&nbsp </strong> </a>						  
	</form>
	 </div>		
				
					
				<div class="product">
   <form id="myform5" name="myform5" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform5').submit();" 
	  title="Sony Experia L"><br /><br /><img src="../css/images/Mobile/sonyel0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia L"  class="blink" />
	<span class="number" >Sony Experia L</span><strong>1 GHz Qualcomm Dual Core &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4.3 Inches, 8 Megapixel&nbsp;&nbsp;&nbsp </strong> </a>						  
	</form>
	 </div>
	 
	 			
							<!--<div class="cl">&nbsp;</div>-->
		
					
				<div class="product">
   <form id="myform6" name="myform6" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform6').submit();" 
	  title="Sony Experia M"><br /><br /><img src="../css/images/Mobile/sonyem0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia M"  class="blink" />
	<span class="number" >Sony Experia M</span><strong>1 GHz Qualcomm Dual Core &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4 Inches, 5 Megapixel&nbsp;&nbsp;&nbsp </strong> </a>						  
	</form>
	 </div>
	 
	 		
					
					<div class="product">
   <form id="myform7" name="myform7" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform7').submit();" 
	  title="Sony Experia Miro"><br /><br /><img src="../css/images/Mobile/sonyemiro0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia Miro"  class="blink" />
	<span class="number" >Sony Experia Miro</span><strong>800 MHz Qualcomm Scorpion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.5 Inches, 5 Megapixel&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </strong> </a>						  
	</form>
	 </div>		
				
			
			<div class="product">
   <form id="myform8" name="myform8" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform8').submit();" 
	  title="Sony Experia Neo L"><br /><br /><img src="../css/images/Mobile/sonyeneo0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia Neo L"  class="blink" />
	<span class="number" >Sony Experia Neo L</span><strong>1 GHz Qualcomm Scorpion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4 Inches, 5 Megapixel&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </strong> </a>						  
	</form>
	 </div>
			
			
			
			
			
			<div class="product">
   <form id="myform9" name="myform9" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform9').submit();" 
	  title="Sony Experia P"><br /><br /><img src="../css/images/Mobile/sonyep0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia P"  class="blink" />
	<span class="number" >Sony Experia P</span><strong>1 GHz U8500, Dual Core </strong>&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>4 Inches, 8 Megapixel&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</strong></a>						  
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