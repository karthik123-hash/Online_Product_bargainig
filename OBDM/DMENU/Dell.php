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
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="Dell.php" title="Dell">Dell</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>Dell Desktops</u></span></div>
		
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
	  title="Dell Inspiron 518"><br /><br /><img src="../css/images/desktop/dell-inspiron-518_a.jpg" width="140" height="182" />
	  
	  <input type="hidden" name="mob" value="Dell Inspiron 518"  class="blink" />
	<span class="number" >Dell Inspiron 518</span><strong>Pentium dual-core processor E2200</strong>,<strong>18.5 Inches</strong>		    </a>						  
	</form>
	 </div>
			
			<div class="product">			
			<form id="myform1" name="myform1" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform1').submit();" 
	        title="Dell Inspiron 560"><br /><br /><img src="../css/images/desktop/Dell_Inspiron_560s.png" width="141" height="182" />										
			
			<input type="hidden" name="mob" value="Dell Inspiron 560"  class="blink" />
			<span class="number">Dell Inspiron 560</span><strong>Intel Dual Core E5700 </strong>,<strong>18 Inches</   strong></a>							
			</form>				
			</div>	
					
					
			<div class="product">			
			<form id="myform2" name="myform2" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform2').submit();" 
	        title="Dell Inspiron 620"><br /><br /><img src="../css/images/desktop/dell_inspiron_620s_a.jpg"   width="138" height="182" />										      		
			<input type="hidden" name="mob" value="Dell Inspiron 620"  class="blink" />
			<span class="number">Dell Inspiron 620</span><strong>2nd Generation Intel Core i3-2120 Processor</strong>,<strong> 18.5 inch Widescreen Flat Panel Monitor</strong></a>							
			</form>				
			</div>	
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
				<div class="product">			
			<form id="myform3" name="myform3" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform3').submit();" 
	        title="Dell Inspiron 660"><br /><br /><img src="../css/images/desktop/dell-inspiron-660s_a.jpg"   width="134" height="182" />										      		
			<input type="hidden" name="mob" value="Dell Inspiron 660"  class="blink" />
			<span class="number">Dell Inspiron 660</span><strong>2nd Generation Intel Core i3-2130 Processor </strong>, <strong>  18.5 inch</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product last">			
			<form id="myform4" name="myform4" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform4').submit();" 
	        title="Dell Inspiron 2320"><br /><br /><img src="../css/images/desktop/dell-inspiron-one-2320.jpg"  width="135" height="161" />										      		
			<input type="hidden" name="mob" value="Dell Inspiron 2320"  class="blink" />
			<span class="number">Dell Inspiron 2320</span><strong>2nd Generation Intel Core i3-2120 Processor</strong>, <strong>23 inches</strong></a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform5" name="myform5" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform5').submit();" 
	        title="Dell OptiPlex 390"><br /><br /><img src="../css/images/desktop/dell_OptiPlex_390_a.jpg"  width="136" height="182" />										      		
			<input type="hidden" name="mob" value="Dell OptiPlex 390"  class="blink" />
			<span class="number">Dell OptiPlex 390</span><strong>Intel Core i3-2100 </strong>, <strong>17 Inches</strong><strong>Android v4 (Ice Cream Sandwich)</strong></a>							
			</form>				
			</div>	
							
							
							<!--<div class="cl">&nbsp;</div>-->
				<div class="product">			
			<form id="myform6" name="myform6" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform6').submit();" 
	        title="Dell OptiPlex 990"><br /><br /><img src="../css/images/desktop/dell_OptiPlex_990.jpg"  width="134" height="182" />										      		
			<input type="hidden" name="mob" value="Dell OptiPlex 990"  class="blink" />
			<span class="number">Dell OptiPlex 990</span><strong>Intel Core i3-2100 </strong>17 inch</a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform7" name="myform7" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform7').submit();" 
	        title="Dell Vastro 260"><br /><br /><img src="../css/images/desktop/dell-vostro-260s.jpg" width="141" height="182" />										      		
			<input type="hidden" name="mob" value="Dell Vastro 260"  class="blink" />
			<span class="number">Dell Vastro 260</span><strong>Intel Pentium Processor G630</strong>>,<strong>18.5 inches</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform8" name="myform8" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform8').submit();" 
	        title="Dell Vastro 270"><br /><br /><img src="../css/images/desktop/dell-vostro-270_b.jpg"  width="136" height="182" />										      		
			<input type="hidden" name="mob" value="Dell Vastro 270"  class="blink" />
			<span class="number">Dell Vastro 270</span><strong>3rd Generation Intel Core i3-3220 Processor</strong>,<strong> 18.5 Inches</strong></a>							
			</form>				
			</div>	
			
			
			<div class="product">			
			<form id="myform9" name="myform9" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform9').submit();" 
	        title="Dell Vastro 360"><br /><br /><img src="../css/images/desktop/dell-vostro-360s_b.jpg"  width="138" height="182" />										      		
			<input type="hidden" name="mob" value="Dell Vastro 360"  class="blink" />
			<span class="number">Dell Vastro 360</span><strong>3rd Generation Intel Core i3-3220 Processor</strong> ,<strong>23 inches</strong></a>							
			</form>				
			</div>
			
				
			
				<div class="product">			
			<form id="myform10" name="myform10" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform10').submit();" 
	        title="Dell XPs 8500"><br /><br /><img src="../css/images/desktop/dell-xps-8500.jpg"  width="135" height="182" />										      		
			<input type="hidden" name="mob" value="Dell XPs 8500"  class="blink" />
			<span class="number">Dell XPs 8500</span><strong>2nd Generation Intel Core i7-2600 Processor</strong>,<strong>Dell IN1930 18.5 Inches </strong></a>							
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