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
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="Allmob.php" title="Mobiles">Mobiles</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>Latest Mobile Collection</u></span></div>
		
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
			
			
			<div class="product">
   <form id="myform10" name="myform10" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform10').submit();" 
	  title="Micromax Aisha A52"><br /><br /><img src="../css/images/Mobile/mmaishaa0.jpeg" width="115" height="182" />
	  <input type="hidden" name="mob" value="Micromax Aisha A52"  class="blink" />
	<span class="number" >Micromax Aisha A52</span><strong>832 MHz ARM11 Processor</strong>,<strong>3.5 Inches TFT Screen</strong>		    </a>						  
	</form>
	 </div>
			
			<div class="product">			
			<form id="myform11" name="myform11" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform11').submit();" 
	        title="Micromax Bolt A27"><br /><br /><img src="../css/images/Mobile/mmbolta0.jpeg" width="115" height="182" />										
			<input type="hidden" name="mob" value="Micromax Bolt A27"  class="blink" />
			<span class="number">Micromax Bolt A27</span><strong>Android v4(IceCream Sandwich)</strong>,<strong>2 Megapixel</   strong></a>							
			</form>				
			</div>	
					
					
			<div class="product">			
			<form id="myform12" name="myform12" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform12').submit();" 
	        title="Micromax Canvas2 A110"><br /><br /><img src="../css/images/Mobile/mmcanvas2Aone0.jpeg"   width="115" height="182" />										      		
			<input type="hidden" name="mob" value="Micromax Canvas2 A110"  class="blink" />
			<span class="number">Micromax Canvas2 A110</span><strong>1.2 GHz, Dual Core Processor 5 Inches  8 Megapixel</strong></a>							
			</form>				
			</div>	
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
				<div class="product">			
			<form id="myform13" name="myform13" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform13').submit();" 
	        title="Micromax Canvas2 Plus A110Q"><br /><br /><img src="../css/images/Mobile/mmcanvas2plus0.jpeg"   width="115" height="182" />										      		
			<input type="hidden" name="mob" value="Micromax Canvas2 Plus A110Q"  class="blink" />
			<span class="number">Micromax Canvas2 Plus A110Q</span><strong>850 MHz Cortex-A9</strong>, <strong> 3 Megapixel</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product last">			
			<form id="myform14" name="myform14" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform14').submit();" 
	        title="Micromax Canvas Doodle A111"><br /><br /><img src="../css/images/Mobile/mmcanvasdoodlea0.jpeg"   width="115" height="182" />										      		
			<input type="hidden" name="mob" value="Micromax Canvas Doodle A111"  class="blink" />
			<span class="number">Micromax Canvas Doodle A111</span>1.6 GHz Cortex-A9, Quad Core , 8 Megapixel</a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform15" name="myform15" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform15').submit();" 
	        title="Micromax Canvas Fun A74"><br /><br /><img src="../css/images/Mobile/mmcanvasfuna0.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Micromax Canvas Fun A74"  class="blink" />
			<span class="number">Micromax Canvas Fun A74</span><strong>Dual SIM</strong>, <strong>4.8 Inches</strong><strong>Android v4 (Ice Cream Sandwich)</strong></a>							
			</form>				
			</div>	
							
							
							<!--<div class="cl">&nbsp;</div>-->
				<div class="product">			
			<form id="myform16" name="myform16" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform16').submit();" 
	        title="Micromax Canvas HD A116"><br /><br /><img src="../css/images/Mobile/mmcanvasHDa0.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Micromax Canvas HD A116"  class="blink" />
			<span class="number">Micromax Canvas HD A116</span><strong>1.6GHz Quad + 1.2GHz Quad</strong>16 GB Internal<strong> 13 Megapixel</strong> </a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform17" name="myform17" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform17').submit();" 
	        title=" Micromax Canvas Music A88"><br /><br /><img src="../css/images/Mobile/mmcanvasmusica0.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Micromax Canvas Music A88"  class="blink" />
			<span class="number">Micromax Canvas Music A88</span><strong>1 GHz Cortex-A5 Processor, 4 Inches ,  5 Megapixel</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform18" name="myform18" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform18').submit();" 
	        title="Micromax Canvas Viva A72"><br /><br /><img src="../css/images/Mobile/mmcanvasvivaa0.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Micromax Canvas Viva A72"  class="blink" />
			<span class="number">Micromax Canvas Viva A72s </span><strong>1 GHz Cortex-A5 Processor, 4 Inches , 5 Megapixel</strong></a>							
			</form>				
			</div>	
			
			
			<div class="product">			
			<form id="myform19" name="myform19" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform19').submit();" 
	        title="Micromax Smarty 4.3 A65"><br /><br /><img src="../css/images/Mobile/mmsmartya0.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Micromax Smarty 4.3 A65"  class="blink" />
			<span class="number">Micromax Smarty 4.3 A65</span><strong>Windows Phone 7.5 ,5 Megapixel</strong></a>							
			</form>				
			</div>	
			
			
			<div class="product">
   <form id="myform20" name="myform20" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform20').submit();" 
	  title="Samsung Galaxy Ace S5830i"><br /><br /><img src="../css/images/Mobile/ssaces5830i0.jpeg" width="115" height="182" />
	  <input type="hidden" name="mob" value="Samsung Galaxy Ace S5830i"  class="blink" />
	<span class="number" >Samsung Galaxy Ace S5830i</span><strong>832 MHz ARM11 Processor</strong>,<strong>3.5 Inches TFT Screen</strong>		    </a>						  
	</form>
	 </div>
			
			<div class="product">			
			<form id="myform21" name="myform21" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform21').submit();" 
	        title="Samsung Galaxy Chat B5330"><br /><br /><img src="../css/images/Mobile/ssgalaxychatb53300.jpeg" width="115" height="182" />										
			<input type="hidden" name="mob" value="Samsung Galaxy Chat B5330"  class="blink" />
			<span class="number">Samsung Galaxy Chat B5330</span><strong>Android v4(IceCream Sandwich)</strong>,<strong>2 Megapixel</   strong></a>							
			</form>				
			</div>	
					
					
			<div class="product">			
			<form id="myform22" name="myform22" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform22').submit();" 
	        title="Samsung Galaxy Grand Duos I9082"><br /><br /><img src="../css/images/Mobile/ssgalaxygrandduosi90820.jpeg"   width="115" height="182" />										      		
			<input type="hidden" name="mob" value="Samsung Galaxy Grand Duos I9082"  class="blink" />
			<span class="number">Samsung Galaxy Grand Duos I9082</span><strong>1.2 GHz, Dual Core Processor 5 Inches  8 Megapixel</strong></a>							
			</form>				
			</div>	
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
				<div class="product">			
			<form id="myform23" name="myform23" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform23').submit();" 
	        title="Samsung Galaxy Music Duos S6012"><br /><br /><img src="../css/images/Mobile/ssgalaxymusicduoss60120.jpeg"   width="115" height="182" />										      		
			<input type="hidden" name="mob" value="Samsung Galaxy Music Duos S6012"  class="blink" />
			<span class="number">Samsung Galaxy Music Duos S6012</span><strong>850 MHz Cortex-A9</strong>, <strong> 3 Megapixel</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product last">			
			<form id="myform24" name="myform24" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform24').submit();" 
	        title="Samsung Galaxy Note 2 N7100"><br /><br /><img src="../css/images/Mobile/ssgalaxynote2n71002.jpeg"   width="115" height="182" />										      		
			<input type="hidden" name="mob" value="Samsung Galaxy Note 2 N7100"  class="blink" />
			<span class="number">Samsung Galaxy Note 2 N7100</span>1.6 GHz Cortex-A9, Quad Core , 8 Megapixel</a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform25" name="myform25" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform25').submit();" 
	        title="Samsung Galaxy S3"><br /><br /><img src="../css/images/Mobile/ssgalaxys30.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Samsung Galaxy S3"  class="blink" />
			<span class="number">Samsung Galaxy S3</span><strong>Dual SIM</strong>, <strong>4.8 Inches</strong><strong>Android v4 (Ice Cream Sandwich)</strong></a>							
			</form>				
			</div>	
							
							
							<!--<div class="cl">&nbsp;</div>-->
				<div class="product">			
			<form id="myform26" name="myform26" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform26').submit();" 
	        title="Samsung Galaxy S4 I950"><br /><br /><img src="../css/images/Mobile/ssgalaxys4i95000.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Samsung Galaxy S4 I950"  class="blink" />
			<span class="number">Samsung Galaxy S4 I950</span><strong>1.6GHz Quad + 1.2GHz Quad</strong>16 GB Internal<strong> 13 Megapixel</strong> </a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform27" name="myform27" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform27').submit();" 
	        title=" Samsung Galaxy S Duos S7562"><br /><br /><img src="../css/images/Mobile/ssgalaxysduoss7562w0.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Samsung Galaxy S Duos S7562"  class="blink" />
			<span class="number"> Samsung Galaxy S Duos S7562</span><strong>1 GHz Cortex-A5 Processor, 4 Inches ,  5 Megapixel</strong></a>							
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform28" name="myform28" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform28').submit();" 
	        title="Samsung Galaxy S Duos S7562(BLACK)"><br /><br /><img src="../css/images/Mobile/ssgalaxysduoss75620.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Samsung Galaxy S Duos S7562(BLACK)"  class="blink" />
			<span class="number">Samsung Galaxy S Duos S7562(BLACK) </span><strong>1 GHz Cortex-A5 Processor, 4 Inches , 5 Megapixel</strong></a>							
			</form>				
			</div>	
			
			
			<div class="product">			
			<form id="myform29" name="myform29" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform29').submit();" 
	        title="Samsung Omnia M S7530"><br /><br /><img src="../css/images/Mobile/ssomnia0.jpeg"  width="115" height="182" />										      		<input type="hidden" name="mob" value="Samsung Omnia M S7530"  class="blink" />
			<span class="number">Samsung Omnia M S7530</span><strong>Windows Phone 7.5 ,5 Megapixel</strong></a>							
			</form>				
			</div>	
			
			
			
<div class="product">
   <form id="myform30" name="myform30" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform30').submit();" 
	  title="Sony Experia E"><br /><br /><img src="../css/images/Mobile/sonye0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia E"  class="blink" />
	<span class="number" >Sony Experia E</span><strong> 1 GHz Processor   </strong> &nbsp;, <strong>  3.2 Megapixel , Single SIM</strong></a>						  
	</form>
	 </div>

					
	    
			<div class="product">
   <form id="myform31" name="myform31" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform31').submit();" 
	  title="Sony Experia E Dual"><br /><br /><img src="../css/images/Mobile/sonyedual0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia E Dual"  class="blink" />
	<span class="number" >Sony Experia E Dual</span><strong>1 GHz Qualcomm Processor </strong>&nbsp;&nbsp;&nbsp;<strong>3.5 Inches, 3.2 Megapixel&nbsp;&nbsp;</strong></a>						  
	</form>
	 </div>
			
			
			
							
			
			<div class="product">
   <form id="myform32" name="myform32" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform32').submit();" 
	  title="Sony Experia GO"><br /><br /><img src="../css/images/Mobile/sonyego0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia GO"  class="blink" />
	<span class="number" >Sony Experia GO</span><strong>1 GHz Dual Core Processor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 Megapixel&nbsp;&nbsp;&nbsp;</strong></a>						  
	</form>
	 </div>
					
							
				
				
							<!-- <div class="cl">&nbsp;</div>*/  -->
			
			<div class="product">
   <form id="myform33" name="myform33" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform33').submit();" 
	  title="Sony Experia ION"><br /><br /><img src="../css/images/Mobile/sonyeion0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia ION"  class="blink" />
	<span class="number" >Sony Experia ION</span><strong>1.5 GHz Dual Core Processor &nbsp;4.6 Inches, 12 Megapixel</strong></a>						  
	</form>
	 </div>
							
				
				
							
			<div class="product">
   <form id="myform34" name="myform34" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform34').submit();" 
	  title="Sony Experia J"><br /><br /><img src="../css/images/Mobile/sonyej0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia J"  class="blink" />
	<span class="number" >Sony Experia J</span><strong>1 GHz Cortex-A5 Processor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Inches, 5 Megapixel&nbsp;&nbsp;&nbsp </strong> </a>						  
	</form>
	 </div>		
				
					
				<div class="product">
   <form id="myform35" name="myform35" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform35').submit();" 
	  title="Sony Experia L"><br /><br /><img src="../css/images/Mobile/sonyel0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia L"  class="blink" />
	<span class="number" >Sony Experia L</span><strong>1 GHz Qualcomm Dual Core &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4.3 Inches, 8 Megapixel&nbsp;&nbsp;&nbsp </strong> </a>						  
	</form>
	 </div>
	 
	 			
							<!--<div class="cl">&nbsp;</div>-->
		
					
				<div class="product">
   <form id="myform36" name="myform36" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform36').submit();" 
	  title="Sony Experia M"><br /><br /><img src="../css/images/Mobile/sonyem0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia M"  class="blink" />
	<span class="number" >Sony Experia M</span><strong>1 GHz Qualcomm Dual Core &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4 Inches, 5 Megapixel&nbsp;&nbsp;&nbsp </strong> </a>						  
	</form>
	 </div>
	 
	 		
					
					<div class="product">
   <form id="myform37" name="myform37" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform37').submit();" 
	  title="Sony Experia Miro"><br /><br /><img src="../css/images/Mobile/sonyemiro0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia Miro"  class="blink" />
	<span class="number" >Sony Experia Miro</span><strong>800 MHz Qualcomm Scorpion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.5 Inches, 5 Megapixel&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </strong> </a>						  
	</form>
	 </div>		
				
			
			<div class="product">
   <form id="myform38" name="myform38" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform38').submit();" 
	  title="Sony Experia Neo L"><br /><br /><img src="../css/images/Mobile/sonyeneo0.jpeg"  width="115" height="182" />
	  <input type="hidden" name="mob" value="Sony Experia Neo L"  class="blink" />
	<span class="number" >Sony Experia Neo L</span><strong>1 GHz Qualcomm Scorpion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4 Inches, 5 Megapixel&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </strong> </a>						  
	</form>
	 </div>
			
			
			
			
			
			<div class="product">
   <form id="myform39" name="myform39" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform39').submit();" 
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