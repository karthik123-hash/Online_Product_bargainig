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
				<div><br /><br />&nbsp;&nbsp;&nbsp; <a href="../Main/Main.php" title="Home">Home</a> / <a href="AllLaptops.php" title="Laptop">Laptops</a><br /><br /><br /></div>
			</div>
	         <span class="style17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <u>Laptop Collections</u></span></div>
		
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
	 	 title="Acer"><br /><br /><img src="../css/images/laptop/A1.jpg"  width="180"  height="182" />
	  	<input type="hidden" name="mob" value="Acer Aspire E1-571G-BT"  class="blink" />
		<span class="number" >Acer Aspire E1-571G-BT</span><strong>Core i3 </strong>,15.6 inch<strong>,Glossy Black</strong></a>						  		</form>
	 </div>
			
								
			<div class="product">			
			<form id="myform2" name="myform2" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform2').submit();" 
	        title="Acer Aspire E1-571G"><br /><br /><img src="../css/images/laptop/A21.jpg"    width="180"  height="182" />										      		
			<input type="hidden" name="mob" value="Acer Aspire E1-571G"  class="blink" />
			<span class="number">Acer Aspire E1-571G</span><strong>Core i5</strong>, 15.6 inch<strong>, Black</strong></a>							
			</form>				
			</div>	
					
							
							<!-- <div class="cl">&nbsp;</div>*/  -->
			
							
							
				<div class="product">			
			<form id="myform4" name="myform4" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform4').submit();" 
	        title="Acer Aspire S7-391C Ultrabook"><br /><br /><img src="../css/images/laptop/A51.jpg"  width="180"  height="182" />										      		
			<input type="hidden" name="mob" value="Acer Aspire S7-391C Ultrabook"  class="blink" />
			<span class="number">Acer Aspire S7-391C Ultrabook</span><strong>Core i5</strong>, 13.3 inch<strong>, White</strong></a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform5" name="myform5" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform5').submit();" 
	        title="Acer Aspire V3-571G"><br /><br /><img src="../css/images/laptop/Avv71.jpg"  width="180"  height="182" />										      		<input type="hidden" name="mob" value="Acer Aspire V3-571G"  class="blink" />
			<span class="number">Acer Aspire V3-571G</span><strong>Core i3</strong>, 15.6 inch<strong>, Midnight Black</strong></a>						
			</form>				
			</div>	
							
					<br />		
							<!--<div class="cl">&nbsp;</div>-->
				<div class="product">			
			<form id="myform6" name="myform6" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform6').submit();" 
	        title="Acer Aspire V5 571P"><br /><br /><img src="../css/images/laptop/Avv81.jpg"  width="180"  height="182" />										      		<input type="hidden" name="mob" value="Acer Aspire V5 571P"  class="blink" />
			<span class="number">Acer Aspire V5 571P</span><strong>Core i5</strong>, 15.6 inch<strong>, Silver</strong></a>							
			</form>				
			</div>	
							
							
				
							
							
				<div class="product">			
			<form id="myform8" name="myform8" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform8').submit();" 
	        title="Acer Aspire V5-471"><br /><br /><img src="../css/images/laptop/AVV61.jpg"  width="180"  height="182" />	
			<input type="hidden" name="mob" value="Acer Aspire V5-471"  class="blink" />
			<span class="number">Acer Aspire V5-471</span><strong>Core i3</strong>, 14 inch<strong>, Silver</strong></a>							
			</form>				
			</div>	
			
			
			<div class="product">			
			<form id="myform9" name="myform9" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform9').submit();" 
	        title="Acer Aspire V5-471P"><br /><br /><img src="../css/images/laptop/Avv41.jpg"  width="180"  height="182" />
			<input type="hidden" name="mob" value="Acer Aspire V5-471P"  class="blink" />
			<span class="number">Acer Aspire V5-471P</span><strong>Core i3</strong>, 14 inch<strong>, Misty Silver</strong></a>							
			</form>				
			</div>
			
					
			<div class="product">
   			<form id="myform10" name="myform10" action="../Calculate.php" method="post" >
			<a  href="javascript:void()" onclick="document.getElementById('myform10').submit();" 
	 		 title="Acer Aspire V5-571"><br /><br /><img src="../css/images/laptop/Av51.jpg" width="180"  height="182" />
	  		<input type="hidden" name="mob" value="Acer Aspire V5-571"  class="blink" />
			<span class="number" >Acer Aspire V5-571</span><strong>Core i5</strong>,15.6 inch<strong>, Glossy Black</strong></a>							
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
							
							
			<div class="product">			
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
	        title="Apple MacBook Pro Mac MD662HN/A"><br /><br /><img src="../css/images/laptop/apl8_1.jpeg"  width="180"  height="182" />										      		<input type="hidden" name="mob" value="Apple MacBook Pro Mac MD103HN/A"  class="blink" />
			<span class="number">Apple MacBook Pro Mac MD103HN/A</span><strong>Intel Core i5</strong>,13 inch<strong>, Silver</strong></a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform17" name="myform17" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform17').submit();" 
	        title=" Apple MD102HN/A MacBook Pro"><br /><br /><img src="../css/images/laptop/apl6_1.jpeg"  width="180"  height="182" />										      		<input type="hidden" name="mob" value="Apple MD102HN/A MacBook Pro"  class="blink" />
			<span class="number">Apple MD102HN/A MacBook Pro</span><strong>Intel Core i7</strong>,13 inch<strong>, Silver</strong></a>
			</form>				
			</div>	
							
							
				<div class="product">			
			<form id="myform18" name="myform18" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform18').submit();" 
	        title="Apple MD212HN/A MacBook Pro"><br /><br /><img src="../css/images/laptop/apl51.jpeg"  width="180"  height="182" />										      		<input type="hidden" name="mob" value="Apple MD212HN/A MacBook Pro"  class="blink" />
			<span class="number">Apple MD212HN/A MacBook Pro </span><strong>Intel Core i5</strong>,13 inch<strong>, Silver</strong></a>
			</form>				
			</div>	
			
			
			<div class="product">			
			<form id="myform19" name="myform19" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform19').submit();" 
	        title="Apple MD711HN/A MacBook Air"><br /><br /><img src="../css/images/laptop/md711_1.jpg"  width="180"  height="182" />										      		<input type="hidden" name="mob" value="Apple MD711HN/A MacBook Air"  class="blink" />
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
							
							
				
							
							
				<div class="product">			
			<form id="myform25" name="myform25" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform25').submit();" 
	        title="Dell Inspiron 15 3521"><br /><br /><img src="../css/images/laptop/del4_1.jpg"  width="180"  height="182" />										      		<input type="hidden" name="mob" value="Dell Inspiron 15 3521"  class="blink" />
			<span class="number">Dell Inspiron 15 3521</span><strong>Intel Core i5</strong>,14 inch<strong>, Black</strong></a>
			</form>				
			</div>	
							
							
							<!--<div class="cl">&nbsp;</div>-->
				<div class="product">			
			<form id="myform26" name="myform26" action="../Calculate.php" method="post" >				
			<a  href="javascript:void()" onclick="document.getElementById('myform26').submit();" 
	        title="Dell Inspiron 15 3521"><br /><br /><img src="../css/images/laptop/del5_1.jpg"  width="180"  height="182" />										      		<input type="hidden" name="mob" value="Dell Inspiron 15 3521"  class="blink" />
			<span class="number">Dell Inspiron 15 3521</span><strong>Intel Core i3</strong>,15.6 inch<strong>, Black</strong></a>
			</form>				
			</div>	
							
							
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
					
							
				
				
							<!-- <div class="cl">&nbsp;</div>*/  -->
			
				
				
							
			<div class="product">
   <form id="myform34" name="myform34" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform34').submit();" 
	  title="HP 450"><br /><br /><img src="../css/images/laptop/hp1_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP 450"  class="blink" />
	<span class="number" >HP 450</span><strong>Intel Core i5</strong>,14 inch<strong>, Grey</strong></a>
			</form>				
			</div>	
				
					
				<div class="product">
   <form id="myform35" name="myform35" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform35').submit();" 
	  title="HP 2000-2201TU"><br /><br /><img src="../css/images/laptop/hp7_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP 2000-2201TU"  class="blink" />
	<span class="number" >HP 2000-2201TU</span><strong>Intel Core i3</strong>,15.6 inch<strong>, Glossy Imprint Black Licorice</strong></a>
			</form>				
			</div>	
	 
	 			
							<!--<div class="cl">&nbsp;</div>-->
		
					
				<div class="product">
   <form id="myform36" name="myform36" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform36').submit();" 
	  title="HP 2000-2313TU"><br /><br /><img src="../css/images/laptop/hp5_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP 2000-2313TU"  class="blink" />
	<span class="number" >HP 2000-2313TU</span><strong>Intel Core i5</strong>,14 inch<strong>, Black</strong></a>
			</form>				
			</div>	
	 
	 		
			
				
			
			<div class="product">
   <form id="myform38" name="myform38" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform38').submit();" 
	  title="HP Envy 4-1201TX"><br /><br /><img src="../css/images/laptop/hp8_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Envy 4-1201TX"  class="blink" />
	<span class="number" >HP Envy 4-1201TX</span><strong>Intel Core i5</strong>,14 inch<strong>, Aluminium Finish Midnight Black With Soft Touch Ruby Red Vertical Brushing Pattern</strong></a>
			</form>				
			</div>	
			
			
			
			
			
			<div class="product">
   <form id="myform39" name="myform39" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform39').submit();" 
	  title="HP Envy M6-1214TX"><br /><br /><img src="../css/images/laptop/hp9_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Envy M6-1214TX"  class="blink" />
	<span class="number" >HP Envy M6-1214TX</span><strong>Intel Core i5</strong>,15.6 inch<strong>, Aluminium Finish Natural Silver</strong></a>
			</form>				
			</div>	
			
			
			
			<div class="product">
   <form id="myform41" name="myform41" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform41').submit();" 
	  title="HP Envy&nbsp;Spectre&nbsp;XT 13-2001TU&nbsp;Ultrabook"><br /><br /><img src="../css/images/laptop/hp11_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Envy Spectre XT 13-2001TU Ultrabook"  class="blink" />
	<span class="number" >HP Envy&nbsp;Spectre&nbsp;XT 13-2001TU&nbsp;Ultrabook</span><strong>Intel Core i5</strong>,13.3 inch<strong>, Brushed Aluminium In Ano Silver Color</strong></a>
			</form>				
			</div>	
			
			<div class="product">
   <form id="myform42" name="myform42" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform42').submit();" 
	  title="HP Envy&nbsp;TouchSmart&nbsp;15-J001TX"><br /><br /><img src="../css/images/laptop/hp12_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Envy TouchSmart 15-J001TX"  class="blink" />
	<span class="number" >HP Envy&nbsp;TouchSmart&nbsp;15-J001TX</span><strong>Intel Core i7</strong>,15.6 inch<strong>, Glass Fiber With Silky Soft Touch Aluminium Finish Natural Silver</strong></a>
			</form>				
			</div>	
			
			<div class="product">
   <form id="myform43" name="myform43" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform43').submit();" 
	  title="HP Pavilion 14-B157TU&nbsp;Sleekbook"><br /><br /><img src="../css/images/laptop/hp14_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Pavilion 14-B157TU Sleekbook"  class="blink" />
	<span class="number" >HP Pavilion 14-B157TU&nbsp;Sleekbook</span><strong>Intel Core i3</strong>,14 inch<strong>, Imprint Sparkling Black</strong></a>
			</form>				
			</div>	
			
			<div class="product">
   <form id="myform44" name="myform44" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform44').submit();" 
	  title="HP Pavilion 15-B003TU&nbsp;Sleekbook"><br /><br /><img src="../css/images/laptop/hp15_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Pavilion 15-B003TU Sleekbook"  class="blink" />
	<span class="number" >HP Pavilion 15-B003TU&nbsp;Sleekbook</span><strong>Pentium Dual Core</strong>,15.6 inch<strong>, Imprint Sparkling Black</strong></a>
			</form>				
			</div>	
			
			<div class="product">
   <form id="myform45" name="myform45" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform45').submit();" 
	  title="HP Pavilion 15-e001AX Notebook"><br /><br /><img src="../css/images/laptop/hp13_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Pavilion 15-e001AX Notebook"  class="blink" />
	<span class="number" >HP Pavilion 15-e001AX Notebook</span><strong>APU Quad Core A10</strong>,15.6 inch<strong>, Metallic Black</strong></a>
			</form>				
			</div>	
			
				
			
			<div class="product">
   <form id="myform46" name="myform46" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform46').submit();" 
	  title="HP Pavilion G6-2222TU"><br /><br /><img src="../css/images/laptop/hp18_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Pavilion G6-2222TU"  class="blink" />
	<span class="number" >HP Pavilion G6-2222TU</span><strong>Intel Core i3</strong>,15.6 inch<strong>, Imprint Sparkling Black</strong></a>
			</form>				
			</div>	
			
			<div class="product">
   <form id="myform47" name="myform47" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform47').submit();" 
	  title="HP Pavilion G6-2236TX"><br /><br /><img src="../css/images/laptop/hp17_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Pavilion G6-2236TX"  class="blink" />
	<span class="number" >HP Pavilion G6-2236TX</span><strong>Intel Core i7</strong>,15.6 inch<strong>, Imprint Linen White Color With Modern Mesh Pattern</strong></a>
			</form>				
			</div>
			
			<div class="product">
   <form id="myform48" name="myform48" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform48').submit();" 
	  title="HP Pavilion G6-2302AX"><br /><br /><img src="../css/images/laptop/hp19_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Pavilion G6-2302AX"  class="blink" />
	<span class="number" >HP Pavilion G6-2302AX</span><strong>APU Dual Core A4</strong>,15.6 inch<strong>, Imprint Sparkling Black</strong></a>
			</form>				
			</div>	
			
			<div class="product">
   <form id="myform49" name="myform49" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform49').submit();" 
	  title="HP Pavilion G6-2309TU"><br /><br /><img src="../css/images/laptop/hp16_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Pavilion G6-2309TU"  class="blink" />
	<span class="number" >HP Pavilion G6-2309TU</span><strong>Intel Core i5</strong>,15.6 inch<strong>, Imprint Sparkling Black</strong></a>
			</form>				
			</div>
			
			
			
			<div class="product">
   <form id="myform51" name="myform51" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform51').submit();" 
	  title="HP Pavilion&nbsp;Touchsmart&nbsp;14-B172TX&nbsp;Sleekbook"><br /><br /><img src="../css/images/laptop/hp21_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="HP Pavilion Touchsmart 14-B172TX Sleekbook"  class="blink" />
	<span class="number" >HP Pavilion&nbsp;Touchsmart&nbsp;14-B172TX&nbsp;Sleekbook</span><strong>Intel Core i5</strong>,14 inch<strong>, Imprint Sparkling Black</strong></a>
			</form>				
			</div>
			
			<div class="product">
   <form id="myform52" name="myform52" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform52').submit();" 
	  title="Lenovo Essential B490 (59-349110)"><br /><br /><img src="../css/images/laptop/len1_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Lenovo Essential B490 (59-349110)"  class="blink" />
	<span class="number" >Lenovo Essential B490 (59-349110)</span><strong>Intel Core i5</strong>,14 inch<strong>, Black</strong></a>
			</form>				
			</div>
			
			<div class="product">
   <form id="myform53" name="myform53" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform53').submit();" 
	  title="Lenovo Essential G500s (59-388254)"><br /><br /><img src="../css/images/laptop/len2_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Lenovo Essential G500s (59-388254)"  class="blink" />
	<span class="number" >Lenovo Essential G500s (59-388254)</span><strong>Core i5</strong>,15.6 inch<strong>, Black</strong></a>
			</form>				
			</div>
			
			
					
						
			<div class="product">
   <form id="myform56" name="myform56" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform56').submit();" 
	  title="Lenovo&nbsp;Ideapad&nbsp;S400 (59-340453)"><br /><br /><img src="../css/images/laptop/len6_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Lenovo Ideapad S400 (59-340453))"  class="blink" />
	<span class="number" >Lenovo&nbsp;Ideapad&nbsp;S400 (59-340453)</span><strong>Intel Core i3</strong>,14 inch<strong>, Silver Grey</strong></a>
			</form>				
			</div>
			
			
			
			<div class="product">
   <form id="myform58" name="myform58" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform58').submit();" 
	  title="Lenovo&nbsp;Ideapad&nbsp;Yoga 13 (59-369597)&nbsp;Ultrabook"><br /><br /><img src="../css/images/laptop/len9_3.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Lenovo Ideapad Yoga 13 (59-369597) Ultrabook"  class="blink" />
	<span class="number" >Lenovo&nbsp;Ideapad&nbsp;Yoga 13 (59-369597)&nbsp;Ultrabook</span><strong>Intel Core i5</strong>,13.3 inch<strong>, Silver Grey</strong></a>
			</form>				
			</div>
			
			
			
			<div class="product">
   <form id="myform60" name="myform60" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform60').submit();" 
	  title="Lenovo&nbsp;Ideapad&nbsp;Z500 (59-380480)"><br /><br /><img src="../css/images/laptop/len10_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Lenovo Ideapad Z500 (59-380480)"  class="blink" />
	<span class="number" >Lenovo&nbsp;Ideapad&nbsp;Z500 (59-380480)</span><strong>Intel Core i5</strong>,15.6 inch<strong>, Dark Chocolate</strong></a>
			</form>				
			</div>
			
			
			<div class="product">
   <form id="myform62" name="myform62" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform62').submit();" 
	  title="Lenovo ThinkPad T430 (2349O92)"><br /><br /><img src="../css/images/laptop/len12_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Lenovo ThinkPad T430 (2349O92)"  class="blink" />
	<span class="number" >Lenovo ThinkPad T430 (2349O92)</span><strong>Intel Core i5</strong>,14.1 inch<strong>, Black</strong></a>
			</form>				
			</div>
			
			<div class="product">
   <form id="myform61" name="myform61" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform61').submit();" 
	  title="Lenovo&nbsp;Ideapad&nbsp;Z580 (59-347567)"><br /><br /><img src="../css/images/laptop/len11_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Lenovo Ideapad Z580 (59-347567))"  class="blink" />
	<span class="number" >Lenovo&nbsp;Ideapad&nbsp;Z580 (59-347567)</span><strong>Intel Core i3</strong>,15.6 inch<strong>, Metallic Grey</strong></a>
			</form>				
			</div>
			
			
			<div class="product">
   <form id="myform63" name="myform63" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform63').submit();" 
	  title="Sony VAIO E14133"><br /><br /><img src="../css/images/laptop/sn1_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Sony VAIO E14133"  class="blink" />
	<span class="number" >Sony VAIO E14133</span><strong>Intel Core i3</strong>,14 inch<strong>, White</strong></a>
			</form>				
			</div>
			
			<div class="product">
   <form id="myform64" name="myform64" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform64').submit();" 
	  title="Sony VAIO E15137"><br /><br /><img src="../css/images/laptop/sn2_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Sony VAIO E15137"  class="blink" />
	<span class="number" >Sony VAIO E15137</span><strong>Intel Core i5</strong>,15.5 inch<strong>, Black</strong></a>
			</form>				
			</div>
			
			<div class="product">
   <form id="myform65" name="myform65" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform65').submit();" 
	  title="Sony VAIO Fit 14E F14212SN/W"><br /><br /><img src="../css/images/laptop/sn5_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Sony VAIO Fit 14E F14212SN/W"  class="blink" />
	<span class="number" >Sony VAIO Fit 14E F14212SN/W</span><strong>Intel Core i3</strong>,14 inch<strong>, White</strong></a>
			</form>				
			</div>
			
			<div class="product">
   <form id="myform66" name="myform66" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform66').submit();" 
	  title="Sony VAIO Fit&nbsp;15 F15A15SN/B"><br /><br /><img src="../css/images/laptop/sn4_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Sony VAIO Fit 15 F15A15SN/B"  class="blink" />
	<span class="number" >Sony VAIO Fit&nbsp;15 F15A15SN/B</span><strong>Intel Core i7</strong>,15.5 inch<strong>, Black</strong></a>
			</form>				
			</div>
			
			<div class="product">
   <form id="myform67" name="myform67" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform67').submit();" 
	  title="Sony VAIO Fit 15E F15213SN/W"><br /><br /><img src="../css/images/laptop/sn6_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Sony VAIO Fit 15E F15213SN/W"  class="blink" />
	<span class="number" >Sony VAIO Fit 15E F15213SN/W</span><strong>Intel Core i3</strong>,15.5 inch<strong>, White</strong></a>
			</form>				
			</div>
			
			<div class="product">
   <form id="myform68" name="myform68" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform68').submit();" 
	  title="Sony VAIO Fit 15E F15218SN/B"><br /><br /><img src="../css/images/laptop/sn7_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Sony VAIO Fit 15E F15218SN/B"  class="blink" />
	<span class="number" >Sony VAIO Fit 15E F15218SN/B</span><strong>Intel Core i5</strong>,15.5 inch<strong>, Black</strong></a>
			</form>				
			</div>
			
			
			<div class="product">
   <form id="myform69" name="myform69" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform69').submit();" 
	  title="Sony VAIO Fit 15E F15218SN/W"><br /><br /><img src="../css/images/laptop/sn8_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Sony VAIO Fit 15E F15218SN/W"  class="blink" />
	<span class="number" >Sony VAIO Fit 15E F15218SN/W</span><strong>Intel Core i5</strong>,15.5 inch<strong>, White</strong></a>
			</form>				
			</div>
			
			
						
			
			<div class="product">
   <form id="myform71" name="myform71" action="../Calculate.php" method="post" >
	<a  href="javascript:void()" onclick="document.getElementById('myform71').submit();" 
	  title="Sony VAIO E15137"><br /><br /><img src="../css/images/laptop/sn2_1.jpg"  width="180"  height="182" />
	  <input type="hidden" name="mob" value="Sony VAIO E15137"  class="blink" />
	<span class="number" >Sony VAIO E15137</span><strong>Intel Core i5</strong>,15.5 inch<strong>, Black</strong></a>
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