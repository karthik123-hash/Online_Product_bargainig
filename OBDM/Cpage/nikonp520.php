<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>PC-Store  A BarGaining WorlD</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="../css/Mobpage.css" type="text/css" media="all" />
	<?php 
		 error_reporting(E_ALL ^ E_NOTICE);     //      To erase the Notice because the variables below first used in this scope
	      session_start(); 
		  $pn=$_SESSION['pn'];
		  $sp=$_SESSION['sprice'];
		  $cn=$_SESSION['cprice'];
		  $flag=$_SESSION['logged']; //to check logged or not
		  $lname=$_SESSION['logname'];  // his name to display
		  $Barg=$_SESSION['barg'];
		  $_SESSION['pname']=$pn;
		  if($pn!="Nikon Coolpix P520")
		  header("Location: http://localhost/OBDM/CMENU/nikon.php");
		  
	?>
    <style type="text/css">
	.style17 {
	font-size: 24px;
	color: #FF6633;
	}
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
					<li><a href="../Main/Offer.php" title="Special Offers">Special Offers</a></li>
					<li><a href="../Main/login.php" title="Log In">Log In</a></li>
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../CMENU/nikon.php" title="Nikon">Nikon</a> / <a href="#" title="Nikon Coolpix P520">Nikon Coolpix P520</a><br />
			<br /><br />
					<img src="../css/images/camera/nikonp520.jpeg" name="Main" width="274" height="205" align="left" id="Main"/>
					
		  <div class="effect2"> <span class="style10"><u>  Nikon Coolpix P520 Advance Point and shoot
(Black)</u></span>
					<br/>
					<br /><br/><br />
					<p>
					
				<strong>2 year Nikon India Warranty and Free Transit Insurance.</strong>				  
					  <br />  <br />
					<div id="log" >
				      <p><br />
			          <span class="style12"><strong>Our Price Inclusive of All Tax</strong></span><br />                      
				      <br />
                      <p><font class="style10">	 Rs.</font>
                        <input name="price" type="text" disabled="disabled" class="style10"  title="PRICE" value="<?php echo $cn;?>"/>
                      </p>
				      <br />
					  <span class="style12"><strong>Set Your Price To Bargain</strong></span><br />
			            <br /></div>
						<form id="myform" name="myform" action="../Calculate1.php" onsubmit="return disp_confirm();" method="post" >	
					     <p><font class="style10">	 Rs.</font>
						   <input type="text" name="uname2" value="<?php echo $cn; ?>" title="your price" class="style10" />
						    <br />	
				            <br />
							<span class="style12 style17">				            
				            <?php 
						if($Barg!="0")
						echo $Barg; ?>
						</span>
				            <br />
					        <br />		
						</p> 						
						<div id="buy">
						 <input class="buy-button" type="submit" value=" Buy Now " onclick="disp_confirm()" />

					    </div>  <br /><br /><br />
						</p>
	                      </form>
						  <script>
function disp_confirm()
{

var u=document.forms["myform"]["uname2"].value;
if(isNaN(u) || u=="")
{
              alert("Enter Proper Amount.....!");
			  return false;
}
else
{
	var r=confirm("ARE U SURE WANT Buy !");
 	if (r==false)
    	return false;
	else return true;
}
}
</script>
			  &nbsp;&nbsp;<img src="../css/images/camera/nikonp5203.jpeg" height="124" width="132" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;<img src="../css/images/camera/nikonp5202.jpeg" width="127" height="120" onmousemove="showT(src)"/>&nbsp;&nbsp;&nbsp;
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
			      <span class="style12">Specifications of Nikon Coolpix L820 Point & Shoot (Black) </span>
	
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
      <td width="294">IN THE BOX</td>
      <td width="550">Charging AC Adapter EH-69P, Lens Cap LC-CP24 (with cord), Camera Strap, ViewNX 2 CD, Audio Video Cable EG-CP16, Rechargeable Li-ion Battery EN-EL5 (with terminal cover), USB Cable UC-E6</td>
    </tr>
	
	 
    <tr>
      <td>Brand</td>
      <td>Nikon</td>
    </tr>
    <tr>
      <td>Type</td>
      <td>Point & Shoot</td>
    </tr>
    <tr>
      <td>Color</td>
      <td>Black</td>
    </tr>
    <tr>
      <td>Model ID</td>
      <td> 	P520</td>
    </tr>
    
	                  </tbody>
       </table>
					
					
		            <br /><br />
                    <table width="865" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Dimension</span></th>
                        </tr>
                       <tr>
      <td width="293">Weight</td>
      <td width="551">550 g (with Battery and SD Memory Card)</td>
    </tr>
    <tr>
      <td height="12">Dimensions</td>
      <td>125.2 (W) x 84.1 (H) x 101.6 (D) mm</td>
    </tr>
   
                      </tbody>
       </table>
					
					
					<br /><br />
                    <table width="870" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify">Pixels</th>
                        </tr>
                   <tr>
      <td width="291">Optical Sensor Resolution (in MegaPixel)</td>
      <td width="558">18.1 Megapixels</td>
    </tr>
	 <tr>
      <td height="12">Other Resolution</td>
      <td>Image Size: 3264 x 2448 (8 M), 2272 x 1704 (4 M), 1600 x 1200 (2 M), VGA 640 x 480, 16:9 Aspect Ratio: 4864 x 2736 (13 M), 16:9 Aspect Ratio: 1920 x 1080 (2 M), 3:2 Aspect Ratio: 4896 x 3264, 1:1 Aspect Ratio 3672 x 3672, Movie: 1080 / 30p, 1920 x 1080 / 16:9 / 30 fps, 1080 / 25p, 1920 x 1080 / 16:9 / 25 fps, 1080 / 30p, 1920 x 1080 / 16:9 / 30 fps, 1080 / 25p, 1920 x 1080 / 16:9 / 25 fps, 1080 / 60i, 1920 x 1080 / 16:9 / 60 fps, 1080 / 50i, 1920 x 1080 / 16:9 / 50 fps, 720 / 30p, 1280 x 720 / 16:9 / 30 fps, 720 / 25p: 1280 x 720 / 16:9 / 25 fps, iFrame 540 / 30p: 960 x 540 / 16:9 / 30 fps, iFrame 540 / 25p: 960 x 540 / 16:9 / 25 fps, 480 / 30p: 640 x 480 / 4:3 / 30 fps, 480 / 25p: 640 x 480 / 4:3 / 25 fps, HS 480 / 4x: 640 x 480 / 4:3, HS 720 / 2x: 1280 x 720 / 16:9, HS 1080 / 0.5x: 1920 x 1080 / 16:9</td>
    </tr>
   
  
      
    
                      </tbody>
       </table>
					
					
					<br /><br />
                    <table width="871" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Zoom</span></th>
                        </tr>
                        <tr>
      <td width="295">Optical Zooma</td>
      <td width="555"> 	42x</td>
    </tr>
    <tr>
      <td>Digital Zoom</td>
      <td> 	2x</td>
    </tr>
                          </tbody>
       </table>
                    
					
					<br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">LCD</span></th>
                        </tr>
                     <tr>
      <td width="290">LCD Display</td>
      <td width="561">TFT LCD Monitor with Anti-reflection Coating</td>
    </tr>
	 <tr>
      <td>LCD Screen Size</td>
      <td> 	3.2 inch</td>
    </tr>
	 <tr>
      <td>Image Display Resolution</td>
      <td>921,000 dots</td>
    </tr>
	 <tr>
      <td>Video Display Resolution</td>
      <td> 	1920 x 1080, 30 fps</td>
    </tr>
	 <tr>
      <td>Supported Aspect Ratio</td>
      <td> 	4:3, 16:9, 1:1</td>
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
      <td width="293">Power Supply</td>
      <td width="558"> 	AC Adapter EH-65A</td>
    </tr>
    <tr>
      <td>Battery Type</td>
      <td> 	Li-ion Rechargeable Battery</td>
    </tr>
    </tbody>
       </table>
					
					
                   <br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Lens</span></th>
                        </tr>
    <tr>
      <td width="292">Auto Focus</td>
      <td width="559"> 	Contrast Detect AF</td>
    </tr>
    <tr>
      <td>Manual Focus</td>
      <td>NIKKOR Lens</td>
    </tr>
    <tr>
      <td>Focal Length</td>
      <td> 	4.3 - 180 mm (35 mm Equivalent to 24 - 1000 mm)</td>
    </tr>
	
                      </tbody>
       </table>s
					
					
                  <br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Interface</span></th>
                        </tr>
                       <tr>
      <td width="292">USB Cable</td>
      <td width="559">Hi-speed USB</td>
    </tr>
    <tr>
      <td>PictBridge</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Audio Video Interface</td>
      <td>Audio / Video Output (NTSC, PAL)</td>
    </tr>
	</tbody>
	</table>
	  <br /><br />
                    <table width="872" cellspacing="5">
					 <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Media and Software</span></th>
                        </tr>
                       <tr>
      <td width="292">Upgradeable Memory</td>
      <td width="559"> 	Yes</td>
    </tr>
    <tr>
      <td>Memory Card Type</td>
      <td>SD / SDHC / SDXC</td>
    </tr>
    <tr>
      <td>Operating System</td>
      <td>Windows XP SP2, Windows XP SP3, Windows Vista, Windows XP SP1, Mac OS X v10.5 - Mac OS X v10.6</td>
    </tr>
	
	</tbody>
	</table>
	 <br /><br />
                    <table width="872" cellspacing="5">
					 <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Image</span></th>
                        </tr>
                       <tr>
      <td width="292">Audio Formats</td>
      <td width="559">WAV, AAC</td>
    </tr>
    <tr>
      <td>Image Sizing</td>
      <td> 	4896 x 3672 (18 M)</td>
    </tr>
    <tr>
      <td>Video Format</td>
      <td>MOV, H.264 / MPEG-4 AVC</td>
    </tr>
    <tr>
      <td>Image Format</td>
      <td> 	JPEG, MPO, DCF, EXIF 2.3, DPOF, MPF</td>
    </tr>
    <tr>
      <td>Face Detection</td>
      <td>Yes</td>
    </tr>
    
                      </tbody>
       </table>
					
					
					
                   <br /><br />
                    <table width="873" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Flash</span></th>
                        </tr>
                        <tr>
      <td width="292">Flash Modes</td>
      <td width="560">Auto, On, Slow Sync, Off</td>
    </tr>
    <tr>
      <td>Flash Range</td>
      <td> 	0.5 - 8.0 m (W), 1.5 - 4.5 m (T)</td>
    </tr>
    <tr>
      <td>Built in Flash</td>
      <td>Yes</td>
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
      <td width="291">ISO Rating</td>
      <td width="563"> 	ISO 80 - 3200, ISO 3200</td>
    </tr>
    <tr>
      <td>Additional Features</td>
      <td>Motion Blur Reduction Motion Detection, EXPEED C2 Image-processing Engine, Coolpix Picture Control, Scene Auto Selector, Wireless Mobile Adapter Support, Wi-Fi Compatible, Auto HDR Mode, Easy Panorama 360° / 180°, 3D Shooting Mode, Customizable Function Button, Mode Dial, Subject Tracking AF, 19 Optimized Scene Modes, Full HD 1080 / 60i (or 50i) Movie Recording, Back-illuminated 18 MP CMOS Sensor EXPEED C2 Processor to Deliver Clear Shots, Lens Construction: 14 Elements in 10 Groups (4 ED Lens Elements), Focus-area Selection: Face Priority, Auto (9-area Automatic Selection), Center (Wide, Normal), Manual with 99 Focus Areas, Subject Tracking, Target Finding AF, Electronic Viewfinder: 0.5 cm Equivalent LCD with Diopter Adjustment Function (-4 to m-1), Frame Coverage Shooting Mode: 100% Horizontal and 100% Vertical (Compared to Actual Picture), Frame Coverage Playback Mode: 100% Horizontal and 100% Vertical (Compared to Actual Picture), 5-level Brightness Adjustment, Vari-angle TFT LCD, Exposure Control: Programmed Auto, Shutter Priority Auto, Aperture-priority Auto, Manual, Exposure Bracketing, Exposure Compensation: -2.0 EV - .0 EV in increments of 1/3 EV, Shutter Mechanical and CMOS Electronic Shutter, Electronically-controlled 6-blade Iris Diaphragm Aperture, Aperture Range: 10 Steps of 1/3 EV (W) Auto, Manual Mode, Flash Control: TTL Auto Flash with Monitor Preflashes, Flash Exposure Compensation: -2 EV - EV in increment of 1/3 EV, Data Transfer Protocol: MTP, PTP, HDMI Output: Auto, 480p, 720p, and 1080i, 1575.42 MHz GPS Receiver Frequency (C/A Code), Geodetic 84 System WGS, 1/4 inch Tripod Socket, Temperature: 0 - 40° C, Humidity: 85%, Powerful Wide-angle to Super-telephoto Coverage</td>
    </tr>
    <tr>
      <td>Self Timer</td>
      <td>Yes, 2 and 10 sec</td>
    </tr>
    <tr>
      <td>Face Detection</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Shooting Modes</td>
      <td>Auto, Scene (Scene Auto Selector, Portrait, Sports, Night Portrait, Party / Indoor, Beach, Snow, Sunset, Dusk / Dawn, Close-up, Food, Museum, Fireworks Show, Black and White Copy, Panorama, Pet Portrait, 3D Photography), Night Landscape, Landscape, Backlighting, Special Effects, User Settings, Program, Smart, Manual</td>
    </tr>
    <tr>
      <td>Metering</td>
      <td>256 Segment Matrix, Center Weighted (Digital Zoom Less than 2x), Spot (Digital Zoom 2x)</td>
    </tr>
    <tr>
      <td>HDMI</td>
      <td> 	Type C, Mini HDMI Output </td>
    </tr>
	
	 <tr>
      <td>Red Eye Reduction</td>
      <td> 	Yes</td>
    </tr>
	 <tr>
      <td>Continuous Shots</td>
      <td> 	Yes, 7 Shots at 7 fps</td>
    </tr>
	 <tr>
      <td>White Balancing</td>
      <td> 	Auto 1, Auto 2, Cloudy, Daylight, Flash, Fluorescent, Incandescent, Preset Manual</td>
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
      <td width="294">Warranty Summary</td>
      <td width="560">2 year Nikon India Warranty and Free Transit Insurance.</td>
    </tr>
                      </tbody>
       </table>
                    <p>&nbsp;</p>
					
					
	  </div>
</div>
	</div></div>
				
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