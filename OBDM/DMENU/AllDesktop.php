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
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="AllDesktop.php" title="Desktops">Desktops</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>Latest Desktop Collection</u></span></div>
		
		<!-- End Navigation -->
		<!-- Begin Slider -->
		<!-- End Slider -->
        <!-- Begin Main -->
	
				<div class="shell">
				
<div id="content">
					
<div id="products" class="effect2">

					<!-- Dell desk tops -->

<div class="product">
   <form id="myform50" name="myform50" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform50').submit();" 
	  title="Dell Inspiron 518"><br /><br /><img src="../css/images/desktop/dell-inspiron-518_a.jpg" width="139" height="182" />
	  
	  <input type="hidden" name="mob" value="Dell Inspiron 518"  class="blink" />
	<span class="number" >Dell Inspiron 518</span><strong>Pentium dual-core processor E2200</strong>,<strong>18.5 Inches</strong>		    </a>						  
	</form>
	 </div>
			
			<div class="product">			
			<form id="myform51" name="myform51" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform51').submit();" 
	        title="Dell Inspiron 560"><br /><br /><img src="../css/images/desktop/Dell_Inspiron_560s.png" width="137" height="182" />										
			
			<input type="hidden" name="mob" value="Dell Inspiron 560"  class="blink" />
			<span class="number">Dell Inspiron 560</span><strong>Intel Dual Core E5700 </strong>,<strong>18 Inches</   strong></a>							
			</form>				
			</div>	
					
					
			<div class="product">			
			<form id="myform52" name="myform52" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform52').submit();" 
	        title="Dell Inspiron 620"><br /><br /><img src="../css/images/desktop/dell_inspiron_620s_a.jpg"   width="134" height="182" />										      		
			<input type="hidden" name="mob" value="Dell Inspiron 620"  class="blink" />
			<span class="number">Dell Inspiron 620</span><strong>2nd Generation Intel Core i3-2120 Processor</strong>,<strong> 18.5 inch Widescreen Flat Panel Monitor</strong></a>							
			</form>				
			</div>	
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
				<div class="product">			
			<form id="myform53" name="myform53" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform53').submit();" 
	        title="Dell Inspiron 660"><br /><br /><img src="../css/images/desktop/dell-inspiron-660s_a.jpg"   width="132" height="182" />										      		
			<input type="hidden" name="mob" value="Dell Inspiron 660"  class="blink" />
			<span class="number">Dell Inspiron 660</span><strong>2nd Generation Intel Core i3-2130 Processor </strong>, <strong>  18.5 inch</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product last">			
			<form id="myform54" name="myform54" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform54').submit();" 
	        title="Dell Inspiron 2320"><br /><br /><img src="../css/images/desktop/dell-inspiron-one-2320.jpg"  width="146" height="182" />										      		
			<input type="hidden" name="mob" value="Dell Inspiron 2320"  class="blink" />
			<span class="number">Dell Inspiron 2320</span><strong>2nd Generation Intel Core i3-2120 Processor</strong>, <strong>23 inches</strong></a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform55" name="myform55" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform55').submit();" 
	        title="Dell OptiPlex 390"><br /><br /><img src="../css/images/desktop/dell_OptiPlex_390_a.jpg"  width="139" height="182" />										      		
			<input type="hidden" name="mob" value="Dell OptiPlex 390"  class="blink" />
			<span class="number">Dell OptiPlex 390</span><strong>Intel Core i3-2100 </strong>, <strong>17 Inches</strong><strong>Android v4 (Ice Cream Sandwich)</strong></a>							
			</form>				
			</div>	
							
							
							<!--<div class="cl">&nbsp;</div>-->
				<div class="product">			
			<form id="myform56" name="myform56" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform56').submit();" 
	        title="Dell OptiPlex 990"><br /><br /><img src="../css/images/desktop/dell_OptiPlex_990.jpg"  width="134" height="182" />										      		
			<input type="hidden" name="mob" value="Dell OptiPlex 990"  class="blink" />
			<span class="number">Dell OptiPlex 990</span><strong>Intel Core i3-2100 </strong>17 inch</a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform57" name="myform57" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform57').submit();" 
	        title="Dell Vastro 260"><br /><br /><img src="../css/images/desktop/dell-vostro-260s.jpg" width="133" height="182" />										      		
			<input type="hidden" name="mob" value="Dell Vastro 260"  class="blink" />
			<span class="number">Dell Vastro 260</span><strong>Intel Pentium Processor G630</strong>>,<strong>18.5 inches</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform58" name="myform58" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform58').submit();" 
	        title="Dell Vastro 270"><br /><br /><img src="../css/images/desktop/dell-vostro-270_b.jpg"  width="137" height="182" />										      		
			<input type="hidden" name="mob" value="Dell Vastro 270"  class="blink" />
			<span class="number">Dell Vastro 270</span><strong>3rd Generation Intel Core i3-3220 Processor</strong>,<strong> 18.5 Inches</strong></a>							
			</form>				
			</div>	
			
			
			<div class="product">			
			<form id="myform59" name="myform59" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform59').submit();" 
	        title="Dell Vastro 360"><br /><br /><img src="../css/images/desktop/dell-vostro-360s_b.jpg"  width="137" height="182" />										      		
			<input type="hidden" name="mob" value="Dell Vastro 360"  class="blink" />
			<span class="number">Dell Vastro 360</span><strong>3rd Generation Intel Core i3-3220 Processor</strong> ,<strong>23 inches</strong></a>							
			</form>				
			</div>
			
				
			
				<div class="product">			
			<form id="myform60" name="myform60" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform60').submit();" 
	        title="Dell XPs 8500"><br /><br /><img src="../css/images/desktop/dell-xps-8500.jpg"  width="136" height="182" />										      		
			<input type="hidden" name="mob" value="Dell XPs 8500"  class="blink" />
			<span class="number">Dell XPs 8500</span><strong>2nd Generation Intel Core i7-2600 Processor</strong>,<strong>Dell IN1930 18.5 Inches </strong></a>							
			</form>				
			</div>
			
							
						<!-- HCL desktops -->
						
						<div class="product">
   <form id="myform61" name="myform61" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform61').submit();" 
	  title="HCL ACF0012"><br /><br /><img src="../css/images/desktop/Hcl-Ezeebee-AC2F0012.jpg" width="143" height="182" />
	 
	 <input type="hidden" name="mob" value="HCL ACF0012"  class="blink" />
	<span class="number" >HCL ACF0012</span><strong>Intel PDC G630</strong>,<strong>18 Inches</strong>		    </a>						  
	</form>
	 </div>
			
			<div class="product">			
			<form id="myform62" name="myform62" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform62').submit();" 
	        title="HCL AC2V0140"><br /><br /><img src="../css/images/desktop/HCL-Ezeebee-AC2V0140_a.jpg" width="135" height="182" />										
			
			<input type="hidden" name="mob" value="HCL AC2V0140"  class="blink" />
			<span class="number">HCL AC2V0140</span><strong>Intel E7500</strong>,<strong>18.5 inches</   strong></a>							
			</form>				
			</div>	
					
					
			<div class="product">			
			<form id="myform63" name="myform63" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform63').submit();" 
	        title="HCL AC2V0157"><br /><br /><img src="../css/images/desktop/HCL-Ezeebee-AC2V0157_a.jpg" width="133" height="182" />										      		
			<input type="hidden" name="mob" value="HCL AC2V0157"  class="blink" />
			<span class="number">HCL AC2V0157 	</span><strong>Intel i3 2120, 18.5 Inches</strong></a>							
			</form>				
			</div>	
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
				<div class="product">			
			<form id="myform64" name="myform64" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform64').submit();" 
	        title="HCL AC2V0177"><br /><br /><img src="../css/images/desktop/HCL-Ezeebee-AC2V0177.jpeg"   width="134" height="182" />										      		
			<input type="hidden" name="mob" value="HCL AC2V0177"  class="blink" />
			<span class="number">HCL AC2V0177</span><strong>2nd Generation Core i3 2120</strong>, <strong> 18.5 inches</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product last">			
			<form id="myform65" name="myform65" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform65').submit();" 
	        title="HCL AC2V0181"><br /><br /><img src="../css/images/desktop/HCL-Ezeebee-AC2V0181.jpg"  width="146" height="182" />										      		
			<input type="hidden" name="mob" value="HCL AC2V0181"  class="blink" />
			<span class="number">HCL AC2V0181</span><strong>Intel E7500</strong>,<strong>18.5 inches</strong></a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform66" name="myform66" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform66').submit();" 
	        title="HCL AD1V0027"><br /><br /><img src="../css/images/desktop/hcl-Beanstalk-AD1V0027_a.jpeg"  width="141" height="182" />										      		
			<input type="hidden" name="mob" value="HCL AD1V0027"  class="blink" />
			<span class="number">HCL AD1V0027</span><strong>Pentium Dual Core (2nd Generation)</strong>, <strong>18.5 Inches</strong></a>							
			</form>				
			</div>	
							
							
							<!--<div class="cl">&nbsp;</div>-->
				<div class="product">			
			<form id="myform67" name="myform67" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform67').submit();" 
	        title="HCL AD1V0028"><br /><br /><img src="../css/images/desktop/hcl-beanstalk-ad1v0028.jpg"  width="138" height="182" />										      		
			<input type="hidden" name="mob" value="HCL AD1V0028"  class="blink" />
			<span class="number">HCL AD1V0028</span><strong>Core i3 (2nd Generation)</strong><strong> 18.5 inches</strong> </a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform68" name="myform68" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform68').submit();" 
	        title="HCL AD1V0030"><br /><br /><img src="../css/images/desktop/HCL-Beanstalk-AD1V0030_a.jpeg"  width="136" height="182" />										      		
			<input type="hidden" name="mob" value="HCL AD1V0030"  class="blink" />
			<span class="number">HCL AD1V0030</span><strong>Core i3 (2nd Generation) ,  18.5 inches</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform69" name="myform69" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform69').submit();" 
	        title="HCL Lyfe"><br /><br /><img src="../css/images/desktop/hcl-beanstalk-lyfe-4998_b.jpg"  width="135" height="182" />										      		
			<input type="hidden" name="mob" value="HCL Lyfe"  class="blink" />
			<span class="number">HCL Lyfe</span><strong>Intel Pentium Dual Core 820 , 22 inches</strong></a>							
			</form>				
			</div>	
			
						
						<!-- HP desktops -->	
						
						<div class="product">
   <form id="myform70" name="myform70" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform70').submit();" 
	  title="HP Brazo 18"><br /><br /><img src="../css/images/desktop/HP-Brazo-18-1101.jpg" width="135" height="182" />
	  
	  <input type="hidden" name="mob" value="HP Brazo 18"  class="blink" />
	<span class="number" >HP Brazo 18</span><strong>APU Dual Core</strong>,<strong>18.5 Inches </strong>		    </a>						  
	</form>
	 </div>
	 
	 
			
			<div class="product">			
			<form id="myform71" name="myform71" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform71').submit();" 
	        title="HP CQ20001L"><br /><br /><img src="../css/images/desktop/HP-Compaq-Presario-CQ2000IL.jpg" width="139" height="182" />										
			
			<input type="hidden" name="mob" value="HP CQ20001L"  class="blink" />
			<span class="number">HP CQ20001L</span><strong>Intel Atom 230</strong>,<strong>18.5 inches</   strong></a>							
			</form>				
			</div>	
					
					
			<div class="product">			
			<form id="myform72" name="myform72" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform72').submit();" 
	        title="HP DreamScreen"><br /><br />
			<input type="hidden" name="mob" value="HP DreamScreen"  class="blink" />
			<img src="../css/images/desktop/hp-dreamscreen.jpeg"   width="132" height="182" /><span class="number">HP DreamScreen</span><strong>Atom Dual Core (1st Generation), 18.5 inches</strong></a>							
			</form>				
			</div>	
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
				<div class="product">			
			<form id="myform73" name="myform73" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform73').submit();" 
	        title="HP Envy"><br /><br /><img src="../css/images/desktop/hp-Envy-23.jpg"   width="134" height="182" />										      					
			<input type="hidden" name="mob" value="HP Envy"  class="blink" />
			<span class="number">HP Envy</span><strong>Core i5 (3rd Generation)9</strong>, <strong> 23 inches</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product last">			
			<form id="myform74" name="myform74" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform4').submit();" 
	        title="HP Omni 105"><br /><br /><img src="../css/images/desktop/HP-Omni-105-5520.jpg"   width="143" height="182" />										      		
			<input type="hidden" name="mob" value="HP Omni 105"  class="blink" />
			<span class="number">HP Omni 105</span>Pentium Dual Core (2nd Generation) , 20 Inches</a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform75" name="myform75" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform75').submit();" 
	        title="HP SG33401L"><br /><br /><img src="../css/images/desktop/Hp_presario-sg3340il_a.jpg"  width="142" height="182" />										      		
			<input type="hidden" name="mob" value="HP SG33401L"  class="blink" />
			<span class="number">HP SG33401L</span><strong>Pentium Dual Core Processor E2160</strong>, <strong>18.5 Inches</strong></a>							
			</form>				
			</div>	
							
							
						<!-- Lenovo desktops -->	
						
						
<div class="product">
   <form id="myform76" name="myform76" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform76').submit();" 
	  title="Lenovo C320"><br /><br /><img src="../css/images/desktop/c320(57-307840)_a.jpeg"  width="139" height="182" />
	 
	  <input type="hidden" name="mob" value="Lenovo C320"  class="blink" />
	<span class="number" >Lenovo C320</span><strong> Pentium Dual Core(2nd generation)   </strong> , <strong> 20 inches</strong></a>						  
	</form>
	 </div>

					
	    
			<div class="product">
   <form id="myform77" name="myform77" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform77').submit();" 
	  title="Lenovo A720"><br /><br /><img src="../css/images/desktop/a720-57-306177.jpeg"  width="138" height="182" />
	  
	  <input type="hidden" name="mob" value="Lenovo A720"  class="blink" />
	<span class="number" >Lenovo A720</span><strong>Core i5(3rd generation) </strong>&nbsp;&nbsp;&nbsp;<strong>27 Inches</strong></a>						  
	</form>
	 </div>
			
			
			
							
			
			<div class="product">
   <form id="myform78" name="myform78" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform78').submit();" 
	  title="Lenovo B320"><br /><br /><img src="../css/images/desktop/Idea_c320_a.jpg"  width="143" height="182" />
	  
	  <input type="hidden" name="mob" value="Lenovo B320"  class="blink" />
	<span class="number" >Lenovo B320</span><strong>Pentium Dual Core (2nd Generation),20 inches;</strong></a>						  
	</form>
	 </div>
					
							
				
				
							<!-- <div class="cl">&nbsp;</div>*/  -->
			
			<div class="product">
   <form id="myform79" name="myform79" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform79').submit();" 
	  title="Lenovo B320_a"><br /><br /><img src="../css/images/desktop/b320-57307776-a.jpeg"  width="136" height="182" />
	  
	  <input type="hidden" name="mob" value="Lenovo B320_a"  class="blink" />
	<span class="number" >Lenovo B320_a</span><strong>Pentium Dual Core (2nd Generation)</strong>,<strong> 21.5 inches</strong></a>						  
	</form>
	 </div>
							
				
				
							
			<div class="product">
   <form id="myform80" name="myform80" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform80').submit();" 
	  title="Lenovo B320_b"><br /><br /><img src="../css/images/desktop/b320-57-307778.jpeg"  width="136" height="182" />
	 
	  <input type="hidden" name="mob" value="Lenovo B320_b"  class="blink" />
	<span class="number" >Lenovo B320_b</span><strong>Pentium Dual Core (2nd Generation) &nbsp,20 Inches</strong> </a>						  
	</form>
	 </div>		
				
					
				<div class="product">
   <form id="myform81" name="myform81" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform81').submit();" 
	  title="Lenovo C200"><br /><br /><img src="../css/images/desktop/C200_b.jpeg"  width="135" height="182" />
	 
	  <input type="hidden" name="mob" value="Lenovo C200"  class="blink" />
	<span class="number" >Lenovo C200</span><strong>Atom Dual Core(ist generation),18.5 Inches</strong> </a>						  
	</form>
	 </div>
	 
	 			
							<!--<div class="cl">&nbsp;</div>-->
		
					
				<div class="product">
   <form id="myform82" name="myform82" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform82').submit();" 
	  title="Lenovo C240"><br /><br /><img src="../css/images/desktop/C240_c.jpg"  width="134" height="182" />
	 
	  <input type="hidden" name="mob" value="Lenovo C240"  class="blink" />
	<span class="number" >Lenovo C240</span><strong>Celeron Dual Core,18.5 inches</strong> </a>						  
	</form>
	 </div>
	 
	 		
					
					<div class="product">
   <form id="myform83" name="myform83" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform83').submit();" 
	  title="Lenovo C320"><br /><br /><img src="../css/images/desktop/C320_(57307109).jpeg"width="136" height="182" />
	
	  <input type="hidden" name="mob" value="Lenovo C320"  class="blink" />
	<span class="number" >Lenovo C320</span><strong>Core i3(2nd generation) </strong> <strong> 18.5 inches</strong></a>						  
	</form>
	 </div>		
				
			
			<div class="product">
   <form id="myform84" name="myform84" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform84').submit();" 
	  title="Lenovo C340"><br /><br /><img src="../css/images/desktop/c340-57-310129-a.jpeg"  width="142" height="182" />
	 
	  <input type="hidden" name="mob" value="Lenovo C340"  class="blink" />
	<span class="number" >Lenovo C340</span><strong>Core i3(3rd generation),20 inches </strong> </a>						  
	</form>
	 </div>
			
			
			
			
			
			<div class="product">
   <form id="myform85" name="myform85" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform85').submit();" 
	  title="Lenovo C440"><br /><br /><img src="../css/images/desktop/c440 all.jpg"  width="142" height="182" />
	  
	  <input type="hidden" name="mob" value="Lenovo C440"  class="blink" />
	<span class="number" >Lenovo C440</span><strong>Core i5(3rd generation) </strong>21.5 inches</strong></a>						  
	</form>
	 </div>		
	 
	 
	 
	<div class="product">
   <form id="myform86" name="myform86" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform86').submit();" 
	  title="Lenovo Essential C200"><br /><br /><img src="../css/images/desktop/C200_c.jpeg"  width="143" height="182" />
	  
	  <input type="hidden" name="mob" value="Lenovo Essential C200"  class="blink" />
	<span class="number" >Lenovo Essential C200</span><strong>Atom Dual Core(ist generation)</strong><strong> 18.5 inches</strong></a>						  
	</form>
	 </div>		
	 
	 
	 <div class="product">
   <form id="myform87" name="myform87" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform87').submit();" 
	  title="Lenovo H410"><br /><br /><img src="../css/images/desktop/H410.jpg"  width="143" height="182" />
	  
	  <input type="hidden" name="mob" value="Lenovo H410"  class="blink" />
	<span class="number" >Lenovo H410</span><strong>1 GHz U8500, Dual Core </strong><strong> 18.5 inches</strong></a>						  
	</form>
	 </div>	
	 
	 
	 
	 <div class="product">
   <form id="myform88" name="myform88" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform88').submit();" 
	  title="Lenovo H420"><br /><br /><img src="../css/images/desktop/H420.jpg"  width="143" height="182" />
	  
	  <input type="hidden" name="mob" value="Lenovo H420"  class="blink" />
	<span class="number" >Lenovo H420</span><strong>Intel Second Generation Core i3 2120 </strong><strong>18.5 Inches</strong></a>						  
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