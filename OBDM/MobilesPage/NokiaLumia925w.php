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
		  if($pn!="Nokia Lumia 925(black)")
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../MENU/Nokia.php" title="Nokia">Nokia</a> / <a href="#" title="Nokia Lumia 925">Nokia Lumia 925</a><br />
			<br /><br />
			<img src="../css/images/Mobile/nklumiaw9250.jpeg" name="Main" width="219" height="400" align="left" id="Main"/>
			<div class="effect2"> <span class="style10"><u>Nokia Lumia 925 (White)</u></span>
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
			  &nbsp;&nbsp;<img src="../css/images/Mobile/nklumiaw9250.jpeg" height="142" width="74" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;
                     <img src="../css/images/Mobile/nklumiaw9251.jpeg" height="140" width="77" onmousemove="showT(src)" />&nbsp;&nbsp;&nbsp;
					 <img src="../css/images/Mobile/nklumiaw9254.jpeg" height="138" width="77" onmousemove="showT(src)" />&nbsp;&nbsp;&nbsp;
					  <img src="../css/images/Mobile/nklumiaw9252.jpeg" height="138" width="77" onmousemove="showT(src)" />&nbsp;&nbsp;&nbsp;
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
			      <span class="style12">Specifications of Nokia Lumia 925 (White)</span>
	
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
      <td width="292">Brand</td>
      <td width="552">Nokia</td>
    </tr>
    <tr>
      <td>Model Name</td>
      <td>Lumia</td>
    </tr>
    <tr>
      <td>Model ID</td>
      <td>Lumia 925</td>
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
      <td>Document   Viewer, Document Editor, Pushmail  (Microsoft Exchange ActiveSync),   Excel, PDF, Word, OneNote, Powerpoint, Adobe Reader, Office 365, Outlook</td>
    </tr>
    <tr>
      <td>Call Features</td>
      <td>Conference Call, Hands Free, Loudspeaker, Call Divert</td>
    </tr>
    <tr>
      <td>Handset Color</td>
      <td>White</td>
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
      <td width="292">Operating Freq</td>
      <td width="552">GSM - 850, 900, 1800, 1900; UMTS - 2100</td>
    </tr>
    <tr>
      <td>OS</td>
      <td>Windows Phone 8</td>
    </tr>
    <tr>
      <td>Processor</td>
      <td>1.5 GHz Qualcomm Snapdragon S4, Dual Core</td>
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
      <td width="293">Type</td>
      <td width="556">AMOLED</td>
    </tr>
    <tr>
      <td>Size</td>
      <td>4.5 Inches</td>
    </tr>
    <tr>
      <td>Resolution</td>
      <td>WXGA, 1280 x 768 Pixels</td>
    </tr>
    <tr>
      <td>Color</td>
      <td>16 M</td>
    </tr>
    <tr>
      <td>Other Display Features</td>
      <td>Super-sensitive   Touch, Corning Gorilla Glass 2, Wide Viewing Angle, Refresh Rate 60 Hz,   Sculpted Glass, Nokia Glance Screen, Lumia Color Profile, Brightness   Control, Sunlight Readability Enhancements</td>
    </tr>  </tbody>
       </table>
					
					
					<br /><br />
                    <table width="871" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Camera</span></th>
                        </tr>
                       <tr>
      <td width="291">Primary Camera</td>
      <td width="559">Yes, 8.7 Megapixel</td>
    </tr>
    <tr>
      <td>Secondary Camera</td>
      <td>Yes, 1.2 Megapixel</td>
    </tr>
    <tr>
      <td>Flash</td>
      <td>Dual LED</td>
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
      <td>Auto   Focus, Two-stage Capture Key, Carl Zeiss Tessar Lens, Flash Modes,   Touch Focus, Exposure Compensation, Auto and Manual Exposure, Auto and   Manual White Balance, Face Recognition, Full Screen Viewfinder,   Geo-tagging, Optical Image Stabilization, Backsi, Image Editor</td>
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
      <td width="559">70.6x129x8.5 mm</td>
    </tr>
    <tr>
      <td>Weight</td>
      <td>139 g</td>
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
      <td width="558">2000 mAh</td>
    </tr>
    <tr>
      <td>Talk Time</td>
      <td>18 hrs (2G), 12 hrs (3G)</td>
    </tr>
    <tr>
      <td>Standby Time</td>
      <td>432 hrs (2G), 440 hrs (3G)</td>
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
      <td width="292">Internal</td>
      <td width="559">16 GB</td>
    </tr>
    <tr>
      <td>Memory</td>
      <td>1 GB RAM</td>
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
      <td width="292">Internet Features</td>
      <td width="559">Email</td>
    </tr>
    <tr>
      <td>Preinstalled Browser</td>
      <td>Internet Explorer 10</td>
    </tr>
    <tr>
      <td>EDGE</td>
      <td>Yes, 236.8 kbps</td>
    </tr>
    <tr>
      <td>3G</td>
      <td>Yes, 42.2 Mbps HSDPA; 5.76 Mbps HSUPA</td>
    </tr>
    <tr>
      <td>Wifi</td>
      <td>Yes, 802.11 a/b/g/n</td>
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
      <td>A-GPS, GLONASS, with HERE Maps</td>
    </tr>
    <tr>
      <td>Bluetooth</td>
      <td>Yes, v3, Supported Profiles (A2DP 1.2, AVRCP 1.4, PBAP 1.1, OPP 1.1, HFP 1.5)</td>
    </tr>
    <tr>
      <td>Audio Jack</td>
      <td>3.5 mm</td>
    </tr>
    <tr>
      <td>DLNA</td>
      <td>Yes</td>
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
      <td width="293">Music Player</td>
      <td width="559">Yes, Supports MP3</td>
    </tr>
    <tr>
      <td>Video Player</td>
      <td>Yes, Supports AVC, AVI, 3GP, MOV, MPEG-4, H.264, H.263, WMV, MP4, 3G2, M4V, Full HD</td>
    </tr>
    <tr>
      <td>FM</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Sound Enhancement</td>
      <td>Noise Cancellation</td>
    </tr>
    <tr>
      <td>Ringtone</td>
      <td>MP3</td>
    </tr>          </tbody>
       </table>
					
					
					
                  <br /><br />
                    <table width="875" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Other Features</span></th>
					    </tr>
                     <tr>
      <td width="292">Call Memory</td>
      <td width="562">Yes</td>
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
      <td>Gyroscope, Ambient Light Sensor, Magnetometer, Accelerometer, Proximity Sensor</td>
    </tr>
    <tr>
      <td>Additional Features</td>
      <td>Wi-Fi   Security, NFC Support, SkyDrive, Free Cloud Storage: 7 GB, Calculator,   Clock, Calendar, Alarm, Reminders, To-do List, OneNote, Games,   Text-to-speech, MMS Enabled, Unified MMS and SMS Editor, Call Waiting,   HD Audio, Data Encryption, Remote Device Locking via Internet, NFC   Support, Firmware Update, Remote Wipe of User Data via Internet, Device   Lock, Application Sandboxing and Integrity Check, Mobile Tracker,   Browser Integrated Anti-phishing, Flickr, PhotoBeamer, Automatic Photo   Upload to Web Services, Cinemagraph, Audio and Video Streaming, Cloud   Music Offline Playback, Graphical Equalizer, Voice and Audio Recording,   Video White Balance Modes, Video Zoom, Voice Recognition, Voice Mail,   DRM Support, Voice Input</td>
    </tr>
    <tr>
      <td>Important Apps</td>
      <td>Mac   Companion App, Google Talk, Twitter, LinkedIn, Windows Live Messenger,   WhatsApp, Yahoo Messenger, Skype, Instant Messaging, Facebook, Gmail,   Hotmail, YouTube, Nokia Mail</td>
    </tr> </tbody>
       </table>
					
					
                  <br /><br />
                    <table width="875" cellspacing="5">
                      <tbody>
                        <tr>
                         <th colspan="2" align="justify"><span class="style13">Warranty</span></th>
                        </tr>
                       <tr>
      <td width="292">Warranty Summary</td>
      <td width="562">1 year manufacturer warranty for Phone and 6 months warranty for in the box accessories</td>
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