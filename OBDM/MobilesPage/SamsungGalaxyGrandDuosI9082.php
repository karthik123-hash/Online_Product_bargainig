<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<title>PC-Store  A BarGaining WorlD</title>
	
	
	<link rel="shortcut icon" href="../css/images/favicon.ico" />
	<link rel="stylesheet" href="../css/Mobpage.css" type="text/css" media="all" />
	<?php 
	 error_reporting(E_ALL ^ E_NOTICE);     //      To erase the Notice because the variables below first used in this scope
	session_start(); 
		  $pn=$_SESSION['pn'];
		  $sp=$_SESSION['sprice'];
		  $cn=$_SESSION['cprice'];
		  $flag=$_SESSION['logged']; //to check logged or not
		  $lname=$_SESSION['logname'];  // his name to display
		  $_SESSION['pname']=$pn;
		  $Barg=$_SESSION['barg'];
		  if($pn!="Samsung Galaxy Grand Duos I9082")
		  header("Location: http://localhost/OBDM/Menu/Samsung.php");
		  
	?>
    <style type="text/css">
<!--
.style16 {font-size: 14}
-->
    </style></head>
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
		echo "<input type='text' value='logged in as $lname'  class='blink' disabled='disabled'/><a href='../Main/logout.php'>logout</a>";
		}
		?>
		</div>
	    <p class="style8">&nbsp;</p>
	    </h1>
	  </div>
	
		<!-- End Header -->
		<!-- Begin Navigation -->
		<div id="navigation">
			<div class="shell">
				<ul>
					<li><a href="../Main/Main.php" title="Home">Home</a></li>
				<li><a href="register.php" title="SIGN UP">&nbsp;Sign Up &nbsp;</a></li>
					<li><a href="login.php" title="Log In">&nbsp;Log In&nbsp;</a></li>
					<li><a href="../Main/accheck.php" title="Account">Account</a>
					</li><li><a href="../Main/Contact.php" title="Contact">Contact</a></li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
		</div>
		<!-- End Navigation -->
		<!-- Begin Slider -->
		<!-- End Slider -->
        <!-- Begin Main -->


<div class="effect1">�
<a href="../Main/Main.php" title="Home">Home</a> / <a href="../MENU/Samsung.php" title="Samsung">Samsung</a> / <a title="Samsung Galaxy Grand Duos I9082">Samsung Galaxy Grand Duos I9082 </a><br />
<br /><br />
<img src="../css/images/Mobile/ssgalaxygrandduosi90820.jpeg" name="Main" width="217" height="422" align="left" id="Main"/>
<div class="effect2"> <span class="style10"><u>Samsung Galaxy Grand Duos I9082(Elegant White)</u></span>
					<br/>
					<br /><br/><br />
					<p>
					
				<strong>1 year manufacturer warranty for Phone and 6 months warranty for in the box accessories Sony India Warranty and Free Transit                      Insurance.</strong>				  
					  <br />  <br />
							<form id="myforms" name="myforms" action="../Calculate1.php" method="post" >		
					<div id="log" >
				      <p><br />
			          <span class="style12"><strong>Our Price Inclusive of All Tax</strong></span><br />                      
				      <br />
                      <p><font class="style10">	 Rs.</font>
                        <input name="price" type="text" disabled="disabled" class="style10"  title="PRICE" value=" <?php echo $cn;?>"/>
                      </p>
				      <br />
					  <span class="style12"><strong>Set Your Price To Bargain</strong></span><br />
			            <br /></div>
					    <font class="style10">	 Rs.</font>
					    <input type="text" name="uname2" value="<?php echo $cn;?>" title="your price" class="style10"  />
					        <br />	
				            <br />
							<span class="style17">				            
				            <?php 
						if($Barg!="0")
						echo $Barg; ?>
						</span>
				              <br />
					        <br />					
						<div id="buy">
						 <input class="buy-button" type="submit" value=" Buy Now " />
					    </div>  <br /><br /><br />
						</p>
						</form>
			  &nbsp;&nbsp;<img src="../css/images/Mobile/ssgalaxygrandduosi90820.jpeg" height="142" width="74" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;
			  		 <img src="../css/images/Mobile/ssgalaxygrandduosi90821.jpeg" height="142" width="74" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;
					 <img src="../css/images/Mobile/ssgalaxygrandduosi90824.jpeg" height="142" width="74" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;
                     
                     <script type="text/javascript">
                    function showT(image)
                    {
                     document.getElementById('Main').setAttribute('src',image ) 
                    }
                     </script>
                     <br />
                     <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      </p>
			  <br /><br />
    </div>
			      <span class="style12">Specifications of Samsung Galaxy Grand Duos I9082(Elegant White)</span>
	
  </div>
				    <br />
				    <br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<!-- Begin Content -->
<!-- End Content -->
<!-- Begin Right Sidebar -->
<div class="effect">
<table width="865" cellspacing="5">
<tbody>
<tr>
<th colspan="2" align="justify"><p class="style13">GENERAL FEATURES</p></th>
</tr>
      <tr>
      <td width="292">In Sales Package</td>
      <td width="552">Battery, Headset, Data Cable, Flipcover, Handset, Charger</td>
    </tr>
    <tr>
      <td>Brand</td>
      <td>Samsung</td>
    </tr>
    <tr>
      <td>Model Name</td>
      <td>Galaxy Grand</td>
    </tr>
    <tr>
      <td>Model ID</td>
      <td>I9082</td>
    </tr>
    <tr>
      <td>Form</td>
      <td>Bar</td>
    </tr>
    <tr>
      <td>SIM Type</td>
      <td>Dual SIM, GSM + GSM, (Dual Standby)</td>
    </tr>
    <tr>
      <td>Touch Screen</td>
      <td>Yes, Capacitive</td>
    </tr>
    <tr>
      <td>Business Features</td>
      <td>Document Viewer, Pushmail</td>
    </tr>
    <tr>
      <td>Call Features</td>
      <td>Conference Call, Speed Dialing, Hands Free, Loudspeaker, Call Divert</td>
    </tr>
    <tr>
      <td>Handset Color</td>
      <td>Elegant White</td>
    </tr>
</tbody>
</table> 



<br /><br />
<table width="865" cellspacing="5">
<tbody>
<tr>
<th colspan="2" align="justify"><span class="style13">Platform</span> </th>
</tr>
<tr>
      <td width="291">Operating Freq</td>
      <td width="553">GSM - 850, 900, 1800, 1900; UMTS - 2100</td>
    </tr>
    <tr>
      <td>OS</td>
      <td>Android v4.1 (Jelly Bean)</td>
    </tr>
    <tr>
      <td>User Interface</td>
      <td>TouchWiz 4.0</td>
    </tr>
    <tr>
      <td>Java</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Processor</td>
      <td>1.2 GHz, Dual Core</td>
    </tr>
</tbody>
</table>




<br /><br />
<table width="865" cellspacing="5">
<tbody>
<tr>
<th colspan="2" align="justify"><p class="style13">Display</p></th>
</tr>
<tr>
      <td width="292">Type</td>
      <td width="552">TFT</td>
    </tr>
    <tr>
      <td>Size</td>
      <td>5 Inches</td>
    </tr>
    <tr>
      <td>Resolution</td>
      <td>WVGA, 480 x 800 Pixels</td>
    </tr>
    <tr>
      <td>Color</td>
      <td>16 M</td>
    </tr>
    <tr>
      <td>Other Display Features</td>
      <td>Multi-touch</td>
    </tr>
</tbody>
</table>
<br />
<br />



<table width="864" cellspacing="5">
<tbody>
<tr>
<th colspan="2" align="justify"><p class="style13">Camera</p></th>
</tr>
 <tr>
      <td width="293">Primary Camera</td>
      <td width="550">Yes, 8 Megapixel</td>
    </tr>
    <tr>
      <td>Secondary Camera</td>
      <td>Yes, 2 Megapixel</td>
    </tr>
    <tr>
      <td>Flash</td>
      <td>LED</td>
    </tr>
    <tr>
      <td>Video Recording</td>
      <td>Yes, 1920 x 1080, 30 fps</td>
    </tr>
    <tr>
      <td>HD Recording</td>
      <td>HD, Full HD</td>
    </tr>
    <tr>
      <td>Zoom</td>
      <td>Digital Zoom - 4x</td>
    </tr>
    <tr>
      <td>Other Camera Features</td>
      <td>Auto   Focus, Geo-tagging, Touch Focus, Face and Smile Detection, Image   Stabilization, Shot Mode (Single, Panorama, Smile Shot, HDR, Beauty,   Share shot, Buddy Photo Share), Image Editor</td>
    </tr></tbody>
</table>
<br />
<br />
<table width="865" cellspacing="5">
<tbody>
<tr>
<th colspan="2" align="justify"><p class="style13">Dimensions</p></th>
</tr>
 <tr>
      <td width="293">Size</td>
      <td width="551">76.8x143.5x9.6 mm</td>
    </tr>
    <tr>
      <td>Weight</td>
      <td>161 g</td>
    </tr>
</tbody>
</table>
<br />
<br />
<table width="865" cellspacing="5">
<tbody>
<tr>
<th colspan="2" align="justify"><p class="style13">Battery</p></th>
</tr>
  <tr>
      <td width="294">Type</td>
      <td width="550">Li-Ion, 2100 mAh</td>
    </tr>
    <tr>
      <td>Talk Time</td>
      <td>10 hrs (3G)</td>
    </tr>
    <tr>
      <td>Standby Time</td>
      <td>440 hrs (3G)</td>
    </tr>
</tbody>
</table>
<br />
<br />
<table width="865" cellspacing="5">
<tbody>
<tr>
<th colspan="2" align="justify"><p class="style13">Memory and Storage</p></th>
</tr>
  <tr>
      <td width="292">Internal</td>
      <td width="552">8 GB</td>
    </tr>
    <tr>
      <td>Expandable Memory</td>
      <td>microSD, upto 64 GB</td>
    </tr>
    <tr>
      <td>Memory</td>
      <td>1 GB RAM</td>
    </tr></tbody>
</table>
<br />
<br />
<table width="866" cellspacing="5">
<tbody>
<tr>
<th colspan="2" align="justify"><p class="style13">Internet &amp; Connectivity</p></th>
</tr>
 <tr>
      <td width="292">Internet Features</td>
      <td width="553">Email</td>
    </tr>
    <tr>
      <td>Preinstalled Browser</td>
      <td>Android</td>
    </tr>
    <tr>
      <td>GPRS</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>EDGE</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>3G</td>
      <td>Yes, 21 Mbps HSDPA; 5.76 Mbps HSUPA</td>
    </tr>
    <tr>
      <td>Wifi</td>
      <td>Yes, 802.11 b/g/n</td>
    </tr>
    <tr>
      <td>USB Connectivity</td>
      <td>Yes, micro USB, v2</td>
    </tr>
    <tr>
      <td>Tethering</td>
      <td>Wi-fi Hotspot</td>
    </tr>
    <tr>
      <td>Navigation Technology</td>
      <td>A-GPS, GLONASS, with Google Maps</td>
    </tr>
    <tr>
      <td>Bluetooth</td>
      <td>Yes, v4, Supported Profiles (A2DP, AVRCP, OPP, SAP, HID, PBAP, HFP, GAP, SPP, PBA)</td>
    </tr>
    <tr>
      <td>Audio Jack</td>
      <td>3.5 mm</td>
    </tr>
</tbody>
</table>
<br />
<br />
<table width="866" cellspacing="5">
<tbody>
<tr>
<th colspan="2" align="justify"><p class="style13">Multimedia</p></th>
</tr>
   <tr>
      <td width="293">Music Player</td>
      <td width="552">Yes, Supports MP3, eAAC+, FLAC, WAV</td>
    </tr>
    <tr>
      <td>Video Player</td>
      <td>Yes, Supports H.263, WMV, H.264, MP4, Full HD</td>
    </tr>
    <tr>
      <td>FM</td>
      <td>Yes, with Recording</td>
    </tr>
    <tr>
      <td>Ringtone</td>
      <td>128 Polyphonic, MP3, WAV</td>
    </tr>
</tbody>
</table>
<br />
<br />
<table width="867" cellspacing="5">
<tbody>
<tr>
<th colspan="2" align="justify"><p class="style13">Other Features</p></th>
</tr>
 <tr>
      <td width="291">SAR Value</td>
      <td width="555">0.316 W/Kg</td>
    </tr>
    <tr>
      <td>Call Memory</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>SMS Memory</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Phone Book Memory</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Sensors</td>
      <td>Proximity Sensor, Accelerometer, Compass, Gyro Sensor</td>
    </tr>
    <tr>
      <td>Additional Features</td>
      <td>Predictive   Text Input, Calendar, MMS Enabled, Mini SIM, Clock, Calculator, Call   Barring, Call Waiting, Offline Mode, Own Number Indication, Voice Input</td>
    </tr>
    <tr>
      <td>Important Apps</td>
      <td>Google, Gmail, YouTube, Google Talk, Picasa, Instant Messaging</td>
    </tr>
</tbody>
</table>
<br />
<br />
<table width="867" cellspacing="5">
<tbody>
<tr>
<th colspan="2" align="justify"><p class="style13">Warranty</p></th>
</tr>
  <tr>
      <td width="289">Warranty Summary</td>
      <td width="557">1 year manufacturer warranty for Phone and 6 months warranty for in the box accessories</td>
    </tr>
</tbody>
</table>
<p>&nbsp;</p>


</div>
</div>
</div></div>

	<!-- Begin Footer -->
		<div class="cl">&nbsp;</div>
		<div id="footer">
			<div class="shell">
				<p class="bottom-menu"> 
				<a href="../Main/Main.php" title="Home"> Home </a> 
				<span>|</span> 
				<a href="register.php" title="Sign Up">Sign Up</a><span>|</span>
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
