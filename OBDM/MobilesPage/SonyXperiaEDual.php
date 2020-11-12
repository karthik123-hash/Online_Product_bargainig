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
		  if($pn!="Sony Experia E Dual")
		 header("Location: http://localhost/OBDM/Menu/Sony.php");
		  
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../MENU/Sony.php" title="Sony">Sony</a> / <a href="#" title="Sony Xperia E Dual">Sony Xperia E Dual</a>
			<br /><br />
					<img id="Main" src="../css/images/Mobile/sonyedual0.jpeg" height="380" width="172" align="left"/>
					
		  <div class="effect2"> <span class="style10"><u>Sony Xperia E DUAL  (<strong>Champagne</strong>)</u></span>
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
			  &nbsp;&nbsp;<img src="../css/images/Mobile/sonyedual0.jpeg" height="142" width="69" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;
                     <img src="../css/images/Mobile/sonyedual3.jpeg" height="143" width="71" onmousemove="showT(src)" />
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
		        <span class="style12">Specifications of Sony Xperia E  Dual (<strong>Champagne</strong>)</span>                   </div>
				    <br />
				    <br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
					
				
					<!-- Begin Content -->
					<!-- End Content -->
					<!-- Begin Right Sidebar -->
	 <div class="effect">
			        <table width="861" cellspacing="5">
		              <tbody>
		                <tr>
		                  <th colspan="2" align="justify"><span class="style13">GENERAL FEATURES</span></th>
	                    </tr>
                        <tr>
                          <td width="291"><strong>Brand</strong></td>
                          <td width="549"><strong>Sony</strong></td>
                        </tr>
                        <tr>
                          <td><strong>Model ID</strong></td>
                          <td><strong>Xperia E Dual</strong></td>
                        </tr>
                        <tr>
                          <td><strong>Form</strong></td>
                          <td><strong>Bar</strong></td>
                        </tr>
                        <tr>
                          <td><strong>SIM Size</strong></td>
                          <td><strong>Mini SIM</strong></td>
                        </tr>
                        <tr>
                          <td><strong>SIM Type</strong></td>
                          <td><strong>Dual SIM, GSM + GSM</strong></td>
                        </tr>
                        <tr>
                          <td><strong>Touch Screen</strong></td>
                          <td><strong>Yes, Capacitive</strong></td>
                        </tr>
                        <tr>
                          <td><strong>Business Features</strong></td>
                          <td><strong>Pushmail  (Mail for Exchange, ActiveSync)</strong></td>
                        </tr>
                        <tr>
                          <td><strong>Call Features</strong></td>
                          <td><strong>Conference Call, Loudspeaker, Call Divert</strong></td>
                        </tr>
                        <tr>
                          <td><strong>Handset Color</strong></td>
                          <td><strong>Champagne</strong></td>
                        </tr>
	                  </tbody>
       </table>
					
					
		            <br /><br />
                    <table width="861" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Platform</span></th>
                        </tr>
                        <tr>
                          <td width="292"><strong>Operating Freq</strong></td>
                          <td width="548"><strong>GSM - 850, 900, 1800, 1900; UMTS - 2100</strong></td>
                        </tr>
                        <tr>
                          <td><strong>OS</strong></td>
                          <td><strong>Android v4 (Ice Cream Sandwich), Upgradable to v4.1 (Jelly Bean)</strong></td>
                        </tr>
                        <tr>
                          <td><strong>User Interface</strong></td>
                          <td><strong>Timescape</strong></td>
                        </tr>
                        <tr>
                          <td><strong>Processor</strong></td>
                          <td><strong>1 GHz Qualcomm Snapdragon</strong></td>
                        </tr>
                      </tbody>
       </table>
					
					
					<br /><br />
                    <table width="862" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style15">Display</span></th>
                        </tr>
                        <tr>
                          <td width="292"><strong>Type</strong></td>
                          <td width="549"><strong>TFT</strong></td>
                        </tr>
                        <tr>
                          <td><strong>Size</strong></td>
                          <td><strong>3.5 Inches</strong></td>
                        </tr>
                        <tr>
                          <td><strong>Resolution</strong></td>
                          <td><strong>HVGA, 320 x 480 Pixels</strong></td>
                        </tr>
                        <tr>
                          <td><strong>Color</strong></td>
                          <td><strong>262 K</strong></td>
                        </tr>
                        <tr>
                          <td><strong>Other Display Features</strong></td>
                          <td><strong>Pinch-to-Zoom, Multi-touch (Upto 2 Fingers Supported), Auto Rotate, Scratch Resistant, Gesture Input</strong></td>
                        </tr>
                      </tbody>
       </table>
					
					
					<br /><br />
                    <table width="861" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Camera</span></th>
                        </tr>
                        <tr>
                          <td width="292"><strong>Primary Camera</strong></td>
                          <td width="548"><strong>Yes, 3.2 Megapixel</strong></td>
                        </tr>
                        <tr>
                          <td><strong>Video Recording</strong></td>
                          <td><strong>Yes, 640 x 480</strong></td>
                        </tr>
                        <tr>
                          <td><strong>Zoom</strong></td>
                          <td><strong>Digital Zoom - 4x</strong></td>
                        </tr>
                        <tr>
                          <td><strong>Other Camera Features</strong></td>
                          <td><strong>Geo-tagging, Self Timer, Touch Capture, Auto Focus, Night Scene, Sports, White Balance, Album, Image Editor</strong></td>
                        </tr>
                      </tbody>
       </table>
                    
					
					<br /><br />
                    <table width="863" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Dimensions</span></th>
                        </tr>
                        <tr>
                          <td width="292">Size</td>
                          <td width="550">11x113.5x61.8 mm</td>
                        </tr>
                        <tr>
                          <td>Weight</td>
                          <td>115.7 g</td>
                        </tr>
                      </tbody>
       </table>
                    
					
					<br /><br />
                    <table width="863" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Battery</span></th>
                        </tr>
                        <tr>
                          <td>Type</td>
                          <td>1530 mAh</td>
                        </tr>
                        <tr>
                          <td>Talk Time</td>
                          <td>6 hrs (2G), 6 hrs (3G)</td>
                        </tr>
                        <tr>
                          <td>Standby Time</td>
                          <td>530 hrs (2G), 530 hrs (3G)</td>
                        </tr>
                      </tbody>
       </table>
					
					
                   <br /><br />
                    <table width="862" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Memory and Storage</span></th>
                        </tr>
                        <tr>
                          <td width="291">Internal</td>
                          <td width="550">4 GB</td>
                        </tr>
                        <tr>
                          <td>Expandable Memory</td>
                          <td>microSD, upto 32 GB</td>
                        </tr>
                        <tr>
                          <td>Memory</td>
                          <td>512 MB RAM</td>
                        </tr>
                      </tbody>
       </table>
					
					
                  <br /><br />
                    <table width="863" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Internet &amp; Connectivity</span></th>
                        </tr>
                        <tr>
                          <td width="292">Internet Features</td>
                          <td width="550">Email</td>
                        </tr>
                        <tr>
                          <td>Preinstalled Browser</td>
                          <td>Android</td>
                        </tr>
                        <tr>
                          <td>GPRS</td>
                          <td>Yes, 86 kbps</td>
                        </tr>
                        <tr>
                          <td>EDGE</td>
                          <td>Yes, 237 kbps</td>
                        </tr>
                        <tr>
                          <td>3G</td>
                          <td>Yes, 7.2 Mbps HSDPA</td>
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
                          <td>USB, Wi-fi Hotspot</td>
                        </tr>
                        <tr>
                          <td>Navigation Technology</td>
                          <td>A-GPS, with Google Maps</td>
                        </tr>
                        <tr>
                          <td>Bluetooth</td>
                          <td>Yes, v2.1, Supported Profiles (EDR, PAP 1.0, HFP 1.5, OPP 1.2, A2DP 1.2, AVRCP 1.3, HSP 1.2)</td>
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
                    <table width="863" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Multimedia</span></th>
                        </tr>
                        <tr>
                          <td width="291">Music Player</td>
                          <td width="551">Yes, Supports eAAC+, WAV, MIDI, MP3</td>
                        </tr>
                        <tr>
                          <td>Video Player</td>
                          <td>Yes, Supports H.263, 3GPP, MP4, H.264, AMR</td>
                        </tr>
                        <tr>
                          <td>FM</td>
                          <td>Yes</td>
                        </tr>
                        <tr>
                          <td>Sound Enhancement</td>
                          <td>3D Surround Sound, xLOUD Technology, 2 Mic Noise Suppression</td>
                        </tr>
                      </tbody>
       </table>
					
					
					
                  <br /><br />
                    <table width="864" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Other Features</span></th>
                        </tr>
                        <tr>
                          <td width="292">Call Memory</td>
                          <td width="551">Yes</td>
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
                          <td>Ambient Light Sensor, Accelerometer, Proximity Sensor</td>
                        </tr>
                        <tr>
                          <td>Additional Features</td>
                          <td>MMS   Enabled, Predictive Text Input, Handwriting Recognition, HD Voice, 3D   Games, Motion Gaming, Audio and Video Streaming, Alarm, Flight Mode,   Calculator, Calendar, E-Manual, Setup Wizard, Media Go, DRM, Walkman   Application, Data Roaming, Barring Calls, Multiple Windows, Auto-filling   Text, SensMe Channel, Clock, Data Monitoring and Usage Control,   PlayNow, TrackID Music Recognition, Voice Input</td>
                        </tr>
                        <tr>
                          <td>Important Apps</td>
                          <td>Google   Talk, Facebook, Instant Messaging, Gmail, Bookmarks, Google Play,   Google, Google Voice, NeoReader Barcode Scanner, YouTube, Widgets, News   and Weather Forecasts</td>
                        </tr>
                      </tbody>
       </table>
					
					
                  <br /><br />
                    <table width="865" cellspacing="5">
                      <tbody>
                        <tr>
                         <th colspan="2" align="justify"><span class="style13">Warranty</span></th>
                        </tr>
                        <tr>
                          <td width="291">Warranty Summary</td>
                          <td width="553">1 year manufacturer warranty for Phone and 6 months warranty for in the box accessories</td>
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