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
		  if($pn!="Micromax Canvas2 A110")
		  header("Location: http://localhost/OBDM/Menu/Micromax.php");
		  
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../MENU/Micromax.php" title="Micormax">Micromax</a> / <a href="#" title="Micromax Canvas 2 A110">Micromax Canvas 2 A110</a><br />
			<br /><br />
					<img src="../css/images/Mobile/mmcanvas2Aone0.jpeg" name="Main" width="191" height="380" align="left" id="Main"/>
					
		  <div class="effect2"> <span class="style10"><u>Micromax Canvas 2 A110 (White)</u></span>
					<br/>
					<br /><br/><br />
					<p>
					
				<strong>1 year manufacturer warranty for Phone and 6 months warranty for in the box accessories Micromax India Warranty and Free Transit Insurance</strong>				  
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
			  &nbsp;&nbsp;<img src="../css/images/Mobile/mmcanvas2Aone0.jpeg" height="142" width="69" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;
                     <img src="../css/images/Mobile/mmcanvas2Aone1.jpeg" height="146" width="71" onmousemove="showT(src)" />
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
			      <span class="style12">Specifications of Micromax Canvas 2 A110  (White)</span>
	
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
      <td width="290">In Sales Package</td>
      <td width="554">Battery, Handset, Charger, User Manual, Earphone, Warranty Card, USB Cable</td>
    </tr>
    <tr>
      <td>Brand</td>
      <td>Micromax</td>
    </tr>
    <tr>
      <td>Model Name</td>
      <td>Canvas 2</td>
    </tr>
    <tr>
      <td>Model ID</td>
      <td>A110</td>
    </tr>
    <tr>
      <td>Form</td>
      <td>Bar</td>
    </tr>
    <tr>
      <td>SIM Type</td>
      <td>Dual SIM, GSM + GSM</td>
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
      <td>Loudspeaker</td>
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
      <td width="552">GSM - 900, 1800; UMTS - 2100</td>
    </tr>
    <tr>
      <td>OS</td>
      <td>Android v4 (Ice Cream Sandwich)</td>
    </tr>
    <tr>
      <td>Java</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Processor</td>
      <td>1 GHz, Dual Core</td>
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
      <td>5 Inches</td>
    </tr>
    <tr>
      <td>Resolution</td>
      <td>FWVGA, 854 x 480 Pixels</td>
    </tr>
    <tr>
      <td>Color</td>
      <td>16 M</td>
    </tr>
    <tr>
      <td>Other Display Features</td>
      <td>Vivid Display, Touch Sensitive Controls, 5 Point Multi-touch, AGC Sodaline Screen Protection, IPS Display</td>
    </tr>
                      </tbody>
       </table>
					
					
					<br /><br />
                    <table width="871" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Camera</span></th>
                        </tr>
                         <tr>
      <td width="292">Primary Camera</td>
      <td width="558">Yes, 8 Megapixel</td>
    </tr>
    <tr>
      <td>Secondary Camera</td>
      <td>Yes, 0.3 Megapixel</td>
    </tr>
    <tr>
      <td>Flash</td>
      <td>Dual LED</td>
    </tr>
    <tr>
      <td>Video Recording</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Zoom</td>
      <td>Digital Zoom - 4x</td>
    </tr>
    <tr>
      <td>Other Camera Features</td>
      <td>Night Mode, Auto Focus, Geo-tagging, Touch Focus, Face Detection</td>
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
      <td width="559">76.5x147x9.7 mm</td>
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
      <td width="292">Type</td>
      <td width="559">Li-Ion, 2000 mAh</td>
    </tr>
    <tr>
      <td>Talk Time</td>
      <td>5 hrs (2G)</td>
    </tr>
    <tr>
      <td>Standby Time</td>
      <td>180 hrs (2G)</td>
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
      <td width="560">2 GB</td>
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
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Internet &amp; Connectivity</span></th>
                        </tr>
                       <tr>
      <td width="291">Internet Features</td>
      <td width="560">Email</td>
    </tr>
    <tr>
      <td>Preinstalled Browser</td>
      <td>Android, WAP</td>
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
      <td>Yes</td>
    </tr>
    <tr>
      <td>Wifi</td>
      <td>Yes, 802.11 b/g/n</td>
    </tr>
    <tr>
      <td>WAP</td>
      <td>Yes</td>
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
      <td>A-GPS, with Google Maps</td>
    </tr>
    <tr>
      <td>Bluetooth</td>
      <td>Yes, v3, Supported Profiles (A2DP)</td>
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
      <td width="291">Music Player</td>
      <td width="561">Yes, Supports MP3, WAV</td>
    </tr>
    <tr>
      <td>Video Player</td>
      <td>Yes, Supports MP4, H.264, 3GP, H.263</td>
    </tr>
    <tr>
      <td>Ringtone</td>
      <td>MP3, WAV</td>
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
      <td width="290">Call Memory</td>
      <td width="564">Yes</td>
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
      <td>Proximity Sensor, Accelerometer, Gravity Sensor</td>
    </tr>
    <tr>
      <td>Additional Features</td>
      <td>Games, Rich Multimedia Technology, Intuitive Text Input and Spell Check, Enhanced Application, Voice Input</td>
    </tr>
    <tr>
      <td>Important Apps</td>
      <td>Facebook, Mi Zone, Mi Store, Mi Buddy, Gmail, Google Play Store, Google, Instant Messaging, Yahoo News, Bookmarks</td>
    </tr>
                      </tbody>
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