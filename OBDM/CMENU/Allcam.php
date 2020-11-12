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
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="Allcam.php" title="Camera">Camera</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>Latest CAMERAS</u></span></div>
		
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
	  title="Cannon IXUS 125"><br /><br /><img src="../css/images/camera/cannon1251.jpeg" width="172" height="180" />
	  <input type="hidden" name="mob" value="Cannon IXUS 125"  class="blink" />
	<span class="number">Cannon IXUS 125</span><strong>16.1 Megapixels</strong>,<strong>3 inch</strong></a>						  
	</form>
	 </div>
			
			<div class="product">			
			<form id="myform1" name="myform1" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform1').submit();" 
	        title="Cannon IXUS 255"><br /><br /><img src="../css/images/camera/cannon2551.jpeg"  width="173" height="182" />										      		
			<input type="hidden" name="mob" value="Cannon IXUS 255"  class="blink" />
			<span class="number">Cannon IXUS 255</span><strong>3 inch</strong>,<strong>10x</strong></a>							
			</form>				
			</div>	
					
			<div class="product">			
			<form id="myform2" name="myform2" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform2').submit();" 
	        title="Cannon IXUS 500"><br /><br /><img src="../css/images/camera/cannon2.jpeg"   width="182" height="182" />										      		
			<input type="hidden" name="mob" value="Cannon IXUS 500"  class="blink" />
			<span class="number">Cannon IXUS 500</span><strong>10.1 Megapixels</strong>,<strong>12x</strong> </a>							
			</form>				
			</div>	
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
				<div class="product">			
			<form id="myform3" name="myform3" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform3').submit();" 
	        title="Cannon IXUS 510"><br /><br /><img src="../css/images/camera/cannon5101.jpeg" width="172" height="182" />										      		
			<input type="hidden" name="mob" value="Cannon IXUS 510"  class="blink" />
			<span class="number">Cannon IXUS 510</span><strong>10.1 Megapixels</strong>, <strong>12x</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product last">			
			<form id="myform4" name="myform4" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform4').submit();" 
	        title="Canon PowerShot A 2200"><br /><br /><img src="../css/images/camera/cannon22001.jpeg" width="188" height="180" />										      		
			<input type="hidden" name="mob" value="Canon PowerShot A 2200"  class="blink" />
			<span class="number">Canon PowerShot A 2200</span><strong>14.1 Megapixels</strong>,<strong>4x</strong> </a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform5" name="myform5" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform5').submit();" 
	        title="Canon PowerShot A 2300"><br /><br /><img src="../css/images/camera/cannon23001.jpeg"  width="169" height="182" />										      		
			<input type="hidden" name="mob" value="Canon PowerShot A 2300"  class="blink" />
			<span class="number">Canon PowerShot A 2300</span><strong>16.0 Megapixels</strong>, <strong>5x</strong></a>							
			</form>				
			</div>	
							
							
							<!--<div class="cl">&nbsp;</div>-->
				<div class="product">			
			<form id="myform6" name="myform6" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform6').submit();" 
	        title="Canon PowerShot G1x"><br /><br /><img src="../css/images/camera/cannongx1.jpeg" width="173" height="182" />										      		
			<input type="hidden" name="mob" value="Canon PowerShot G1x"  class="blink" />
			<span class="number">Canon PowerShot G1x</span><strong>14.3 Megapixels</strong>,<strong>4x</strong> </a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform7" name="myform7" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform7').submit();" 
	        title="Fujifilm F660EXR"><br /><br /><img src="../css/images/camera/fujifilm-f6601.jpeg"  width="168" height="182" />										      		
			<input type="hidden" name="mob" value="Fujifilm F660EXR"  class="blink" />
			<span class="number"> Fujifilm F660EXR </span><strong>16.0 Megapixels</strong>,<strong>15x</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform8" name="myform8" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform8').submit();" 
	        title="Fujifilm Finepix JX 420"><br /><br /><img src="../css/images/camera/fujifilm-finepix-jx-4201.jpeg"  width="172" height="182" />		
			<input type="hidden" name="mob" value="Fujifilm Finepix JX 420"  class="blink" />
			<span class="number"> Fujifilm Finepix JX 420</span><strong>16.0 Megapixels</strong>,<strong>5x</strong></a>							
			</form>				
			</div>	
			
			
			<div class="product">			
			<form id="myform9" name="myform9" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform9').submit();" 
	        title="Fujifilm FinePix X20"><br /><br />
			<img src="../css/images/camera/fujifilm-finepix-x20-mirrorless.jpeg" width="178" height="182" />
			<input type="hidden" name="mob" value="Fujifilm FinePix X20"  class="blink" />
			<span class="number">Fujifilm FinePix X20</span><strong>12.0 Megapixels</strong>,<strong>Mirrorless</strong></a>							
			</form>				
			</div>	
			
			
			<div class="product">
   <form id="myform10" name="myform10" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform10').submit();" 
	  title="Fujifilm AX550"><br /><br />
	<img src="../css/images/camera/fujifilmax5001.jpeg" width="173" height="181" />
	<input type="hidden" name="mob" value="Fujifilm AX550"  class="blink" />
	<span class="number" >Fujifilm AX550</span><strong>16.0 Megapixels</strong>,<strong>Point & Shoot,5x</strong>		    </a>						  
	</form>
	 </div>
			
			<div class="product">			
			<form id="myform11" name="myform11" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform11').submit();" 
	        title="Fujifilm X100S"><br /><br /><img src="../css/images/camera/fujifilm-x100s-mirrorless1.jpeg" width="174" height="182" />										
			<input type="hidden" name="mob" value="Fujifilm X100S"  class="blink" />
			<span class="number">Fujifilm X100S Mirrorless</span><strong>16.3 Megapixels</strong>,<strong>4x</strong></a>							
			</form>				
			</div>	
					
					
			<div class="product">			
			<form id="myform12" name="myform12" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform12').submit();" 
	        title="Nikon Coolpix L27"><br /><br /><img src="../css/images/camera/nikon1271.jpeg"   width="175" height="182" />										      		
			<input type="hidden" name="mob" value="Nikon Coolpix L27"  class="blink" />
			<span class="number">Nikon Coolpix L27</span><strong>16.1 Megapixels</strong></a>							
			</form>				
			</div>	
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
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
							
							
				<div class="product">			
			<form id="myform15" name="myform15" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform15').submit();" 
	        title="Nikon Coolpix P520"><br /><br /><img src="../css/images/camera/nikonp520.jpeg" width="177" height="182" />										      		
			<input type="hidden" name="mob" value="Nikon Coolpix P520"  class="blink" />
			<span class="number">Nikon Coolpix P520</span><strong>18.1 Megapixels</strong>,<strong>Point & Shoot</strong></a>							
			</form>				
			</div>	
							
							
							<!--<div class="cl">&nbsp;</div>-->
				<div class="product">			
			<form id="myform16" name="myform16" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform16').submit();" 
	        title="Nikon Coolpix S5200"><br /><br /><img src="../css/images/camera/nikons52001.jpeg"  width="170" height="182" />										      		
			<input type="hidden" name="mob" value="Nikon Coolpix S5200"  class="blink" />
			<span class="number">Nikon Coolpix S5200</span><strong>16.0 Megapixels</strong><strong>Point & Shoot</strong> </a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform17" name="myform17" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform17').submit();" 
	        title=" Panasonic DMC-GF2"><br /><br /><img src="../css/images/camera/panasonic-dmc-gf3-mirrorless1.jpeg" width="169" height="182" />										      		
			<input type="hidden" name="mob" value="Panasonic DMC-GF2"  class="blink" />
			<span class="number">Panasonic DMC-GF2</span><strong>12.10 Megapixels</strong>,<strong>Point & Shoot</strong></a></a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform18" name="myform18" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform18').submit();" 
	        title="Panasonic Lumix DMC-FH2"><br /><br /><img src="../css/images/camera/panasonic-lumix-dmc-fh21.jpeg"  width="172" height="182" />										      		
			<input type="hidden" name="mob" value="Panasonic Lumix DMC-FH2"  class="blink" />
			<span class="number">Panasonic Lumix DMC-FH2 </span><strong>12.10 Megapixels,Point & Shoot</strong></a>							
			</form>				
			</div>	
			
			
			<div class="product">			
			<form id="myform19" name="myform19" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform19').submit();" 
	        title="Panasonic Lumix DMC-FP7"><br /><br /><img src="../css/images/camera/panasonic-dmc-fp71.jpeg" width="173" height="182" />										      		
			<input type="hidden" name="mob" value="Panasonic Lumix DMC-FP7"  class="blink" />
			<span class="number">Panasonic Lumix DMC-FP7</span><strong>16.1 Megapixels,Point & Shoot</strong></a>							
			</form>				
			</div>	
			
			
			<div class="product">
   <form id="myform20" name="myform20" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform20').submit();" 
	  title="Panasonic Lumix DMC-FP1"><br /><br /><img src="../css/images/camera/panasonic-fp1-point-shoot1.jpeg" width="171" height="182" />
	  <input type="hidden" name="mob" value="Panasonic Lumix DMC-FP1"  class="blink" />
	<span class="number" >Panasonic Lumix DMC-FP1</span><strong>12.10 Megapixels</strong>,<strong>Mirrorless</strong>		    </a>						  
	</form>
	 </div>
			
			<div class="product">			
			<form id="myform21" name="myform21" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform21').submit();" 
	        title="Panasonic Lumix DMC-LS6"><br /><br />
			<img src="../css/images/camera/panasonic-lumix-dmc-ls6-point-shoot-400x400-imaddcazgdz6c2sw.jpeg" width="174" height="182" />										
			<input type="hidden" name="mob" value="Panasonic Lumix DMC-LS6"  class="blink" />
			<span class="number">Panasonic Lumix DMC-LS6</span><strong>14.1 Megapixels</strong>,<strong>Point & Shoot</strong></a>							
			</form>				
			</div>	
					
					
			<div class="product">			
			<form id="myform22" name="myform22" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform22').submit();" 
	        title="Sony Cyber-shot DSC-H90"><br /><br />
			<img src="../css/images/camera/sony-dsc-h90-400x400-imad8yeqahmpyzz3.jpeg"   width="176" height="182" />										      		
			<input type="hidden" name="mob" value="Sony Cyber-shot DSC-H90"  class="blink" />
			<span class="number">Sony Cyber-shot DSC-H90</span><strong>16.1 Megapixels,16x,Point & Shoot</strong></a>							
			</form>				
			</div>	
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
				<div class="product">			
			<form id="myform23" name="myform23" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform23').submit();" 
	        title="Sony Cyber-shot DSC-RX1"><br /><br /><img src="../css/images/camera/sony-cybershot-dsc-rx1-mirrorless-400x400-imadjhhxdqvjqjnr.jpeg"   width="187" height="182" />										      		
			<input type="hidden" name="mob" value="Sony Cyber-shot DSC-RX1"  class="blink" />
			<span class="number">Sony Cyber-shot DSC-RX1</span><strong>24.3 Megapixels</strong>, <strong>Mirrorless</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product last">			
			<form id="myform24" name="myform24" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform24').submit();" 
	        title="Sony Cyber-shot DSC-S5000"><br /><br /><img src="../css/images/camera/sony-cyber-shot-dsc-s5000-1.jpeg"  width="174" height="182" />										      		
			<input type="hidden" name="mob" value="Sony Cyber-shot DSC-S5000"  class="blink" />
			<span class="number">Sony Cyber-shot DSC-S5000</span><strong>14.1 Megapixels,Point & Shoot</strong></a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform25" name="myform25" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform25').submit();" 
	        title="Sony Cyber-shot DSC-W730"><br /><br /><img src="../css/images/camera/sony-cybershot-dsc-w730-1.jpeg"  width="178" height="182" />										      		
			<input type="hidden" name="mob" value="Sony Cyber-shot DSC-W730"  class="blink" />
			<span class="number">Sony Cyber-shot DSC-W730</span><strong>16.1 Megapixels</strong>, <strong>Point & Shoot</strong><strong>8x</strong></a>							
			</form>				
			</div>	
							
							
							<!--<div class="cl">&nbsp;</div>-->
				<div class="product">			
			<form id="myform26" name="myform26" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform26').submit();" 
	        title="Sony Cyber-shot DSC-WX7"><br /><br /><img src="../css/images/camera/sony-cybershot-dsc-wx200-1.jpeg"  width="177" height="182" />										      		
			<input type="hidden" name="mob" value="Sony Cyber-shot DSC-WX7"  class="blink" />
			<span class="number">Sony Cyber-shot DSC-WX7</span><strong>16.2 Megapixels</strong>16.2 Megapixels<strong>Point & Shoot</strong> </a>							
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