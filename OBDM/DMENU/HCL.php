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
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="HCL.php" title="HCL">HCL</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>HCL Desktops</u></span></div>
		
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
	  title="HCL ACF0012"><br /><br /><img src="../css/images/desktop/Hcl-Ezeebee-AC2F0012.jpg" width="137" height="182" />
	 
	 <input type="hidden" name="mob" value="HCL ACF0012"  class="blink" />
	<span class="number" >HCL ACF0012</span><strong>Intel PDC G630</strong>,<strong>18 Inches</strong>		    </a>						  
	</form>
	 </div>
			
			<div class="product">			
			<form id="myform1" name="myform1" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform1').submit();" 
	        title="HCL AC2V0140"><br /><br /><img src="../css/images/desktop/HCL-Ezeebee-AC2V0140_a.jpg" width="135" height="182" />										
			
			<input type="hidden" name="mob" value="HCL AC2V0140"  class="blink" />
			<span class="number">HCL AC2V0140</span><strong>Intel E7500</strong>,<strong>18.5 inches</   strong></a>							
			</form>				
			</div>	
					
					
			<div class="product">			
			<form id="myform2" name="myform2" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform2').submit();" 
	        title="HCL AC2V0157"><br /><br /><img src="../css/images/desktop/HCL-Ezeebee-AC2V0157_a.jpg" width="135" height="182" />										      		
			<input type="hidden" name="mob" value="HCL AC2V0157"  class="blink" />
			<span class="number">HCL AC2V0157 	</span><strong>Intel i3 2120, 18.5 Inches</strong></a>							
			</form>				
			</div>	
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
				<div class="product">			
			<form id="myform3" name="myform3" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform3').submit();" 
	        title="HCL AC2V0177"><br /><br /><img src="../css/images/desktop/HCL-Ezeebee-AC2V0177.jpeg"   width="135" height="182" />										      		
			<input type="hidden" name="mob" value="HCL AC2V0177"  class="blink" />
			<span class="number">HCL AC2V0177</span><strong>2nd Generation Core i3 2120</strong>, <strong> 18.5 inches</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product last">			
			<form id="myform4" name="myform4" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform4').submit();" 
	        title="HCL AC2V0181"><br /><br /><img src="../css/images/desktop/HCL-Ezeebee-AC2V0181.jpg"  width="133" height="182" />										      		
			<input type="hidden" name="mob" value="HCL AC2V0181"  class="blink" />
			<span class="number">HCL AC2V0181</span><strong>Intel E7500</strong>,<strong>18.5 inches</strong></a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform5" name="myform5" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform5').submit();" 
	        title="HCL AD1V0027"><br /><br /><img src="../css/images/desktop/hcl-Beanstalk-AD1V0027_a.jpeg"  width="115" height="182" />										      		
			<input type="hidden" name="mob" value="HCL AD1V0027"  class="blink" />
			<span class="number">HCL AD1V0027</span><strong>Pentium Dual Core (2nd Generation)</strong>, <strong>18.5 Inches</strong></a>							
			</form>				
			</div>	
							
							
							<!--<div class="cl">&nbsp;</div>-->
				<div class="product">			
			<form id="myform6" name="myform6" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform6').submit();" 
	        title="HCL AD1V0028"><br /><br /><img src="../css/images/desktop/hcl-beanstalk-ad1v0028.jpg"  width="141" height="182" />										      		
			<input type="hidden" name="mob" value="HCL AD1V0028"  class="blink" />
			<span class="number">HCL AD1V0028</span><strong>Core i3 (2nd Generation)</strong><strong> 18.5 inches</strong> </a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform7" name="myform7" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform7').submit();" 
	        title="HCL AD1V0030"><br /><br /><img src="../css/images/desktop/HCL-Beanstalk-AD1V0030_a.jpeg"  width="142" height="182" />										      		
			<input type="hidden" name="mob" value="HCL AD1V0030"  class="blink" />
			<span class="number">HCL AD1V0030</span><strong>Core i3 (2nd Generation) ,  18.5 inches</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform8" name="myform8" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform8').submit();" 
	        title="HCL Lyfe"><br /><br /><img src="../css/images/desktop/hcl-beanstalk-lyfe-4998_b.jpg"  width="137" height="182" />										      		
			<input type="hidden" name="mob" value="HCL Lyfe"  class="blink" />
			<span class="number">HCL Lyfe</span><strong>Intel Pentium Dual Core 820 , 22 inches</strong></a>							
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