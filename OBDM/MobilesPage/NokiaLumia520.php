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
		  if($pn!="Nokia Lumia 520")
		  header("Location: http://localhost/OBDM/Menu/Nokia.php");
		  
	?>
    <style type="text/css">
<!--
.style16 {font-size: 14}
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
	
	  
				
		<div class="effect1">  
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../MENU/Nokia.php" title="Nokia">Nokia</a> / <a href="#" title="Nokia Lumia 520">Nokia Lumia 520</a><br />
			<br /><br />
			<img src="../css/images/Mobile/nklumia5200.jpeg" name="Main" width="214" height="400" align="left" id="Main"/>
			<div class="effect2"> <span class="style10"><u>Nokia Lumia 520 (Black)</u></span>
					<br/><br /><br/><br />
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
			  &nbsp;&nbsp;<img src="../css/images/Mobile/nklumia5200.jpeg" height="142" width="74" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;
                     <img src="../css/images/Mobile/nklumia5201.jpeg" height="146" width="77" onmousemove="showT(src)" />&nbsp;&nbsp;&nbsp;
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
	  </div>
			      <span class="style12">Specifications of Nokia Lumia 520 (Black)</span>
	
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
		                  <th colspan="2" align="justify"><span class="style13">GENERAL FEATURES</span></th>
	                    </tr>
                        <tr>
      <td width="291">In Sales Package</td>
      <td width="553">Handset, Charger (AC-20), Headset (WH-108), Battery (BL-5J), Data Cable (CA-189CD), Quick Guide</td>
    </tr>
    <tr>
      <td>Brand</td>
      <td>Nokia</td>
    </tr>
    <tr>
      <td>Model Name</td>
      <td>Lumia</td>
    </tr>
    <tr>
      <td>Model ID</td>
      <td>520</td>
    </tr>
    <tr>
      <td>Form</td>
      <td>Bar</td>
    </tr>
    <tr>
      <td>SIM Size</td>
      <td>Micro SIM</td>
    </tr>
    <tr>
      <td>SIM Type</td>
      <td>Single SIM, GSM</td>
    </tr>
    <tr>
      <td>Touch Screen</td>
      <td>Yes, Capacitive</td>
    </tr>
    <tr>
      <td>Business Features</td>
      <td>Document   Viewer, Pushmail  (Mail for Exchange, Active Sync), Adobe Acrobat   Reader, Office (PDF, Excel, Word, Powerpoint, OneNote), SkyDrive Storage   for Documents and Notes</td>
    </tr>
    <tr>
      <td>Call Features</td>
      <td>Conference Call, Hands Free, Loudspeaker, Call Divert</td>
    </tr>
    <tr>
      <td>Handset Color</td>
      <td>Black</td>
    </tr>
	                  </tbody>
       </table>
					
					
		            <br /><br />
                    <table width="865" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Platform</span></th>
                        </tr>
      <tr>
      <td width="293">Operating Freq</td>
      <td width="551">GSM - 850, 900, 1800, 1900; UMTS - 2100</td>
    </tr>
    <tr>
      <td>OS</td>
      <td>Windows Phone 8</td>
    </tr>
    <tr>
      <td>Processor</td>
      <td>1 GHz Qualcomm Snapdragon S4, Dual Core</td>
    </tr>
                      </tbody>
       </table>
					
					
					<br /><br />
                    <table width="870" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style15">Display</span></th>
                        </tr>
                       <tr>
      <td width="291">Type</td>
      <td width="558">LCD</td>
    </tr>
    <tr>
      <td>Size</td>
      <td>4 Inches</td>
    </tr>
    <tr>
      <td>Resolution</td>
      <td>WVGA, 800 x 480 Pixels</td>
    </tr>
    <tr>
      <td>Color</td>
      <td>16 M</td>
    </tr>
    <tr>
      <td>Other Display Features</td>
      <td>IPS Display, Orientation Sensor</td>
    </tr>     </tbody>
       </table>
					
					
					<br /><br />
                    <table width="871" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Camera</span></th>
                        </tr>
                       <tr>
      <td width="292">Primary Camera</td>
      <td width="558">Yes, 5 Megapixel</td>
    </tr>
    <tr>
      <td>Video Recording</td>
      <td>Yes, 720 x 1280, 30 fps</td>
    </tr>
    <tr>
      <td>HD Recording</td>
      <td>HD</td>
    </tr>
    <tr>
      <td>Zoom</td>
      <td>Digital Zoom - 4x</td>
    </tr>
    <tr>
      <td>Other Camera Features</td>
      <td>Cinemagraph,   Smart Shoot, Panorama, Auto Focus, Touch Focus, Landscape Orientation,   Auto and Manual Exposure, Auto and Manual White Balance, Active Toolbar,   Full Screen View Finder, Geo-tagging, Automatic Photo Upload to Web   Services, Digital Camera Add-ons: Cinemagraph Lens, Bing Vision, Smart   Shoot Lens, Panorama Lens, Capture Modes, Scene Modes, White Balance   Modes, Light Sensitivity, Image Editor</td>
    </tr>
                      </tbody>
       </table>
                    
					
					<br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Dimensions</span></th>
                        </tr>
                     <tr>
      <td width="292">Size</td>
      <td width="559">64x119.9x9.9 mm</td>
    </tr>
    <tr>
      <td>Weight</td>
      <td>124 g</td>
    </tr>
                      </tbody>
       </table>
                    
					
					<br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Battery</span></th>
                        </tr>
                       <tr>
      <td width="293">Type</td>
      <td width="558">1430 mAh</td>
    </tr>
    <tr>
      <td>Talk Time</td>
      <td>14 hrs (2G), 9 hrs (3G)</td>
    </tr>
    <tr>
      <td>Standby Time</td>
      <td>360 hrs (3G)</td>
    </tr>
                      </tbody>
       </table>
					
					
                   <br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Memory and Storage</span></th>
                        </tr>
                         <tr>
      <td width="291">Internal</td>
      <td width="560">Mass Memory: 8 GB</td>
    </tr>
    <tr>
      <td>Expandable Memory</td>
      <td>microSD, upto 64 GB</td>
    </tr>
    <tr>
      <td>Memory</td>
      <td>512 MB RAM</td>
    </tr>
                      </tbody>
       </table>
					
					
                  <br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Internet &amp; Connectivity</span></th>
                        </tr>
                      <tr>
      <td width="293">Internet Features</td>
      <td width="558">Email</td>
    </tr>
    <tr>
      <td>Preinstalled Browser</td>
      <td>Internet Explorer 10</td>
    </tr>
    <tr>
      <td>GPRS</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>EDGE</td>
      <td>Yes, 236.8 kbps</td>
    </tr>
    <tr>
      <td>3G</td>
      <td>Yes, 21.1 Mbps HSDPA; 5.76 Mbps HSUPA</td>
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
      <td>A-GPS, GLONASS, with Nokia Maps</td>
    </tr>
    <tr>
      <td>Bluetooth</td>
      <td>Yes, v3, Supported Profiles (OPP 1.1, PBAP 1.0, HFP 1.5, A2DP 1.2, AVRCP 1.4)</td>
    </tr>
    <tr>
      <td>Audio Jack</td>
      <td>3.5 mm</td>
    </tr>
                      </tbody>
       </table>
					
					
					
                   <br /><br />
                    <table width="873" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Multimedia</span></th>
                        </tr>
                 <tr>
      <td width="292">Music Player</td>
      <td width="560">Yes, Supports MP3, eAAC+</td>
    </tr>
    <tr>
      <td>Video Player</td>
      <td>Yes, Supports 3GP, M4V, H.263, AVI, MOV, 3G2, H.264, AVC, WMV 9, VC-1, 3GPP, MP4, ASF, HD</td>
    </tr>
    <tr>
      <td>Sound Enhancement</td>
      <td>Noise Cancellation, 2 Microphones</td>
    </tr>
                      </tbody>
       </table>
					
					
					
                  <br /><br />
                    <table width="875" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Other Features</span></th>
					    </tr>
                      <tr>
      <td width="293">Call Memory</td>
      <td width="561">Yes</td>
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
      <td>Ambient Light Sensor, Accelerometer</td>
    </tr>
    <tr>
      <td>Additional Features</td>
      <td>Micro   SIM, Wi-Fi Security, Calculator, Clock, Alarm, Calendar, Games, Lync   (Corporate IM), MMS Enabled, Call Forwarding, Call Waiting, Lost Device   Tracking, Browser Integrated Anti-phishing, Device Lock, Device   Passcode, Online Back Up and Restore, Audio Streaming, Audio Recording   (Mono), Internet Radio, Video Streaming, Voice Recognition, Free Cloud   Storage: 7 GB, Text-to-speech Message Reader, Distribution Lists for   Messaging, Conversational Chat Style SMS, Firmware Update, Remote   Security Policy Enforcement, Data Encryption
        <p> Instrutction to Open   the Back Cover: Opening of the back cover should start from bottom-left   corner, press the back of the cover until it snaps into place </p>
        <p> Notice: please ensure your finger does not press the side key when placing back cover </p>
        <p> After placing the back cover, please check volume key, power key and camera key are not pushed down., Voice Input</p></td>
    </tr>
    <tr>
      <td>Important Apps</td>
      <td>Mac   Companion App, Windows 8 Companion App, Hot Mail, Yahoo Mail, Gmail,   Outlook Mobile, Nokia Mail, Twitter, Facebook, LinkedIn, Windows Live   Messenger, Skype, Instant Messaging, Voice Mail</td>
    </tr>     </tbody>
       </table>
					
					
                  <br /><br />
                    <table width="875" cellspacing="5">
                      <tbody>
                        <tr>
                         <th colspan="2" align="justify"><span class="style13">Warranty</span></th>
                        </tr>
                       <tr>
      <td width="294">Warranty Summary</td>
      <td width="560">1 year manufacturer warranty for Phone and 6 months warranty for in the box accessories</td>
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