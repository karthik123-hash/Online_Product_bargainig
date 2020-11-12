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
		  if($pn!="Nikon Coolpix L610")
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../CMENU/nikon.php" title="Nikon">Nikon</a> / <a href="#" title="Nikon Coolpix L610">Nikon Coolpix L610</a><br />
			<br /><br />
					<img src="../css/images/camera/nikonL6101.jpeg" name="Main" width="274" height="205" align="left" id="Main"/>
					
		  <div class="effect2"> <span class="style10"><u>  Nikon Coolpix L610 Point & Shoot
(Silver)</u></span>
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
			  &nbsp;&nbsp;<img src="../css/images/camera/nikonL6103.jpeg" height="124" width="122" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;<img src="../css/images/camera/nikonL6202.jpeg" width="127" height="120" onmousemove="showT(src)"/>&nbsp;&nbsp;&nbsp;
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
			      <span class="style12">Specifications of Nikon Coolpix L610 Point & Shoot (Silver) </span>
	
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
      <td width="550">Audio Video Cable EG-CP16, Reference Manual CD, View NX 2 CD, Camera Strap, LR6 / L40 (AA-size) Alkaline Batteries x 2, USB Cable UC-E6</td>
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
      <td> 	Silver</td>
    </tr>
    <tr>
      <td>Model ID</td>
      <td>L610</td>
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
      <td width="551">240 g (Including Battery and SD Memory Card)</td>
    </tr>
    <tr>
      <td height="12">Dimensions</td>
      <td>108.0 (W) x 68.4 (H) x 34.1 (D) mm</td>
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
      <td width="558">16.1 Megapixels</td>
    </tr>
	 <tr>
      <td height="12">Other Resolution</td>
      <td>16 Megapixel (High) (4608 x 3456) (Fine), 16 Megapixel (4608 x 3456), 8 Megapixel (3264 x 2448), 4 Megapixel (2272 x 1704), 2 Megapixel (1600 x 1200), VGA (640 x 480), 16:9 Aspect Ratio (4608 x 2592)</td>
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
      <td width="555">5x</td>
    </tr>
    <tr>
      <td>Digital Zoom</td>
      <td> 	4x</td>
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
      <td width="561"> 	TFT LCD with Anti-reflection Coating</td>
    </tr>
	 <tr>
      <td>LCD Screen Size</td>
      <td> 	3 inch</td>
    </tr>
	 <tr>
      <td>Image Display Resolution</td>
      <td>460,000 dots</td>
    </tr>
	 <tr>
      <td>Video Display Resolution</td>
      <td> 	1920 x 1080, 30 fps</td>
    </tr>
	 <tr>
      <td>Supported Aspect Ratio</td>
      <td> 	16:9, 4:3</td>
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
      <td> 	AA Alkaline Battery</td>
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
      <td> 	4.5 - 63.0 mm (35 mm Equivalent to 25 - 350 mm)</td>
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
      <td width="559"> 	WAV, AAC Stereo</td>
    </tr>
    <tr>
      <td>Image Sizing</td>
      <td>4608 x 3456 (16 M)</td>
    </tr>
    <tr>
      <td>Video Format</td>
      <td> 	MOV, MPEG-4 AVC, H.264</td>
    </tr>
    <tr>
      <td>Image Format</td>
      <td> 	JPEG, EXIF 2.3, DCF, DPOF, MPF</td>
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
      <td> 	0.5 - 6.0 m (W), 1.5 - 3.2 m (T)</td>
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
      <td width="563"> 	ISO 125 - 1600, ISO 3200 (Available in Auto Mode)</td>
    </tr>
    <tr>
      <td>Additional Features</td>
      <td>16.0 Million Effective Pixels Superior Low-light Performance, Lens Construction: 11 Elements in 10 Groups (2 ED Lens Element), Digital Zoom Magnification Upto 2x (Angle of View Equivalent Approx: 700 mm Lens in 35 mm (135) Format), Motion Blur Reduction (Motion Detection), Focus Range (Approx: 50 cm (W) to Infinity, Approx: 1.0 m (T) to Infinity, Macro Mode: Approx 10 cm to Infinity, Focus-area Selection (Center, Face Detection, Target Finding AF), Monitor (5 Level Brightness Adjustment), Frame Coverage (Shooting Mode): Approx: 96% Horizontal and 96% Vertical (Compared to Actual Image), Frame Coverage (Playback Mode): Approx: 96% Horizontal and 96% Vertical (Compared to Actual Image), Continuous Shooting: Single (Default Setting), Continuous (About 4 Images 1.9 fps (4608 x 3456), BSS (Best Shot Selector), Multi-shot 16, Movie (HD 1080p (Fine) Default Setting: 1920 x 1080, 30 fps, HD 1080p: 1920 x 1080, 30 fps, HD 720p: 1280 x 720, 30 fps, VGA: 640 x 480, 30 fps, HS 240 fps: 320 x 240, HS 120 fps: 640 x 48, HS 60 fps: 1280 x 720, HS 15 fps: 1920 x 1080, Wind Noise Reduction, Exposure Control (-2.0 - .0 EV in increment of 1/3 EV), Shutter Mechanical and CMOS Electronic Shutter, Speed (4 sec Fireworks Show Scene Mode), Electronically-controlled ND Filter (-2 AV) Selection Aperture, Flash Control (TTL Auto Flash with Monitor Preflashes), Data Transfer Protocol (MTP, PTP), HDMI Output (Auto, 480p, 720p, and 1080i), Input / Output Terminal (Digital Input / Output (USB), HDMI Mini Connector (Type C) (HDMI Output)), Battery Life Still Pictures 120 Shots when Using Alkaline Batteries, 470 Shots when Using Lithium Batteries, 330 Shots when Using EN-MH2 Batteries, Tripod Socket (1/4 (ISO 1222)), Temperature 0° C - 40° C, Humidity 85% or Less (Condensation), Smart Portrait System, 19 Optimized Scene Modes, Eye-Fi Card Support, Supported Batteries (Alkaline, Lithium-ion, Ni-MH)</td>
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
      <td>Easy Auto, Scene (Portrait, Landscape, Sports, Night Portrait, Party / Indoor, Beach, Snow, Sunset, Dusk / Dawn, Night Landscape, Close-up, Food, Museum, Fireworks Show, Black and White Copy, Back Lighting, Easy Panorama, Pet Portrait, 3D Photography), Special Effects, Smart Portrait, Auto</td>
    </tr>
    <tr>
      <td>Metering</td>
      <td>256 Segment Matrix, Center Weighted (Digital Zoom Less than 2x), Spot (Digital Zoom 2x)</td>
    </tr>
    <tr>
      <td>HDMI</td>
      <td>mini HDMI </td>
    </tr>
	
	 <tr>
      <td>Red Eye Reduction</td>
      <td> 	Yes</td>
    </tr>
	 <tr>
      <td>Continuous Shots</td>
      <td> 	Yes, 1.9 fps</td>
    </tr>
	 <tr>
      <td>White Balancing</td>
      <td>Auto, Day Light, Cloudy, Tungsten, Fluorescent, Fluorescent H, Custom</td>
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