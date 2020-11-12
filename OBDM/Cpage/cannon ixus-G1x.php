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
		  $Barg=$_SESSION['barg'];
		  $_SESSION['pname']=$pn;
		  if($pn!="Canon PowerShot G1x")
		  header("Location: http://localhost/OBDM/CMENU/canon.php");
		  
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../CMENU/canon.php" title="Canon">Canon</a> / <a href="#" title="  Canon PowerShot G1 X Point & Shoot">   Canon PowerShot G1 X Point & Shoot</a>
			<br /><br />
					<img src="../css/images/camera/cannongx1.jpeg" name="Main" width="277" height="225" align="left" id="Main"/>
					
		  <div class="effect2"> <span class="style10"><u> Canon PowerShot G1 X Point & Shoot  </u></span>
					<br/>
					<br /><br/><br />
					<p>
					
				<strong>2 Years Canon India Warranty and Free Transit Insurance.</strong>				  
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
			  &nbsp;&nbsp;<img src="../css/images/camera/cannongx3.jpeg" height="142" width="122" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;<img src="../css/images/camera/cannongx2.jpeg" width="123" height="146" onmousemove="showT(src)"/>&nbsp;&nbsp;&nbsp;
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
			      <span class="style12">Specifications of Canon PowerShot G1 X Point & Shoot    </span>
	
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
      <td width="550">Battery Pack, Battery Charger, Interface Cable, User Manual and Warranty Card, Solution Disk, Strap</td>
    </tr>
	
	 
    <tr>
      <td>Brand</td>
      <td>Canon</td>
    </tr>
    <tr>
      <td>Type</td>
      <td>Point & Shoot</td>
    </tr>
    <tr>
      <td>Color</td>
      <td>blue</td>
    </tr>
    <tr>
      <td>Model ID</td>
      <td>G1 X</td>
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
      <td width="551">534 g (including Battery and Memory Card), 492 g (Camera Body)</td>
    </tr>
    <tr>
      <td>Dimensions</td>
      <td>116.7 (W) x 80.5 (H) x 64.7 (D) mm</td>
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
      <td width="558">14.3 Megapixels</td>
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
      <td width="555">4x</td>
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
      <td width="561">TFT Color LCD</td>
    </tr>
	 <tr>
      <td>LCD Screen Size</td>
      <td> 	3 inch&nbsp;</td>
    </tr>
	 <tr>
      <td>Image Display Resolution</td>
      <td> 	922,000 dots</td>
    </tr>
	 <tr>
      <td>Video Display Resolution</td>
      <td>1920 x 1080, 24 fps</td>
    </tr>
	 <tr>
      <td>Supported Aspect Ratio</td>
      <td> 	4:03</td>
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
      <td width="558">Compact Power Adapter CA-PS700 (Included with Adapter Kit ACK-DC80)</td>
    </tr>
    <tr>
      <td>Battery Type</td>
      <td>NB-10L Li-ion Rechargeable Battery</td>
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
      <td width="559"> 	TTL</td>
    </tr>
    <tr>
      <td>Manual Focus</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Focal Length</td>
      <td> 	15.1 (W) - 60.4 (T) mm (35 mm Equivalent to 28 (W) mm - 112 (T) mm)</td>
    </tr>
	<tr>
      <td>Color Filter</td>
      <td>Primary (RGB) Color Filter</td>
    </tr>
                      </tbody>
       </table>
					
					
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
      <td> 	SD / SDHC / SDXC</td>
    </tr>
    <tr>
      <td>Operating System</td>
      <td>Windows 7 SP1, Windows Vista SP2, Windows XP SP3, MAC OS X 10.6, MAC OS X 10.7</td>
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
      <td width="292">Image Stabilizer</td>
      <td width="559"> 	Lens-shift</td>
    </tr>
                       <tr>
      <td width="292">Audio Formats</td>
      <td width="559">Linear PCM (2 Channel Stereo)</td>
    </tr>
    <tr>
      <td>Image Sizing</td>
      <td>4352 x 2448 (L) (16:9)</td>
    </tr>
    <tr>
      <td>Video Format</td>
      <td>MOV, H.264</td>
    </tr>
    <tr>
      <td>Image Format</td>
      <td>JPEG, Exif 2.3, RAW (14bit, CR2 Canon Original)</td>
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
      <td> 	50 cm - 7.0 m (W), 1.0 - 3.1 m (T)</td>
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
      <td width="563">Auto, ISO 100, 125, 160, 200, 250, 320, 400, 500, 640, 800, 1000, 1250, 1600, 2000, 2500, 3200, 4000, 5000, 6400, 8000, 10000, 12800</td>
    </tr>
    <tr>
      <td>Additional Features</td>
      <td>DIGIC 5 Processor, Real-image Zoom Viewfinder (with Dioptric Adjustment), Brightness Adjustment (5 Levels, Quick-bright LCD), Vari Angle (Opening Angle: 175Deg, Rotational Angle: 270Deg), Control System: Continuous AF, Servo AF, Servo AE, Manual Focus, AF Frame: Face AiAF, Center, Tracking AF, FlexiZone, Exposure Compensation: 3 stops in increments of 1/3 stop, Aperture Type: Iris, Hotshoe, Image Sizing: (16:9) Large: 4352 x 2448, Medium 1: 3072 x 1728, Medium 2: 1920 x 1080, Small: 640 x 360, (3:2) Large: 4352 x 2904, Medium 1: 3072 x 2048, Medium 2: 1600 x 1064, Small: 640 x 424, (4:3) Large: 4352 x 2904, Medium 1: 3072 x 2048, Medium 2: 1600 x 1064, Small: 640 x 424, RAW: 4352 x 3264, (1:1) Large: 3264 x 3264, Medium 1: 2304 x 2304, Medium 2: 1200 x 1200, Small: 480 x 480, (4:5) Large: 2608 x 3264, Medium 1: 1840 x 2304, Medium 2: 960 x 1200, Small: 384 x 480, iFrame Movie: 1280 x 720, 30fps, Miniature Effect: 1280 x 720, 640 x 480, 1920 x 1080, 24 fps 1280 x 720, 30 fps, 640 x 480, 30 fps, Interface: Analog Audio Output (Stereo), Lens Construction: 2 Double-sided Aspherical UA Elements, 1 Double-sided Aspherical Element, AF System: AiAF (Face Detection, 9-point), 1-point AF (Fixed Centre or Face Select and Track), AF Point selection: Manual Selection using FlexiZone AF/AE, Size (Normal, Small), AF Lock: On or Off Selectable, AF Assist Beam, Closest Focusing Distance: 20 cm (W) from Front of Lens in Macro, AE Lock, AEB: 1/3 - 2 EV in stop of 1/3 increments, Colour Matrix Type: sRGB, Dioptre Correction, Manual Power Adjustment: 3 Levels with Internal Flash (up to 19 Levels with external EX Speedlites 270EX and 430EX II,10 22 Levels with 580EX II), Second Curtain Synchronisation,External Flash: E-TTL with EX Series Speedlites, Macro Twin Lite MT-24EX, Macro Ring Lite MR-14EX, Shooting Mode in Movie: Smart Auto (21 Scenes Detected), Standard, Program AE, Portrait, Landscape, Beach, Underwater, Foliage, Snow, Fireworks, Nostalgic, Fish-eye Effect, Miniature Effect, Monochrome, Super Vivid, Poster Effect, Color Accent, Color Swap, iFrame Movie, Photo Effects: My Colors (My Colors Off, Vivid, Neutral, Sepia, Black and White, Positive Film, Lighter Skin Tone, Darker Skin Tone, Vivid Blue, Vivid Green, Vivid Red, Custom Color), Drive Modes: Single, Continuous, Continuous with AF, Self-Timer, Compression: Fine, Normal, Recording Pixels: (Full HD) 1920 x 1080, 24 fps, (HD) 1280 x 720, 30 fps, (L) 640 x 480, 30 fps, Miniature Effect (HD, L) 6fps, 3fps, 1.5 fps, iFrame Movie (HD), Movie Length: (Full HD and HD) Up to 4 GB or 29 min 59 sec, (L and M) Up to 4 GB or 1 Hour, Red-eye Correction, Intelligent Orientation Sensor, Live Histogram, Playback Zoom: 2x - 10x, Menu Languages: English, German, French, Dutch, Danish, Finnish, Italian, Norwegian, Swedish, Spanish, Simplified Chinese, Chinese (traditional), Japanese, Russian, Portuguese, Korean, Greek, Polish, Czech, Hungarian, Turkish, Thai, Arabic, Ukrainian, Romanian, Farsi, Hindi, Operating System: Windows 7 SP1, Vista SP2, XP SP3, Mac OS X v10.5 10.6 (Intel Processor Required), Battery Life: 250 Shots, 420 min Playback, Operating Environment: 0 - 40DegC, Humidity: 10 - 90 %</td>
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
      <td>Smart Auto (32 Scenes Detected), Program AE, Shutter Priority AE, Aperture Priority AE, Manual, Custom (2 Modes), SCN (Movie Digest, Portrait, Landscape, Kids and Pets, Sports, Smart Shutter (Smile, Wink Self-timer, Face Self-Timer), High-speed Burst HQ, Handheld Night Scene, Beach, Underwater, Foliage, Snow, Fireworks, Stitch Assist), Creative Filter (High Dynamic Range, Nostalgic, Fish-eye Effect, Miniature Effect, Toy Camera Effect, Monochrome, Super Vivid, Poster Effect, Color Accent, Color Swap), Movie</td>
    </tr>
    <tr>
      <td>Metering</td>
      <td>Evaluative, Center Weighted Average, Spot</td>
    </tr>
    <tr>
      <td>HDMI</td>
      <td>HDMI Out</td>
    </tr>
	
	 <tr>
      <td>Red Eye Reduction</td>
      <td> 	Yes</td>
    </tr>
	 <tr>
      <td>Continuous Shots</td>
      <td> 1.9 shots/sec (P Mode), Approx. 4.5 shots/sec (High-Speed Burst HQ mode)</td>
    </tr>
	 <tr>
      <td>White Balancing</td>
      <td>Auto, Day Light, Cloudy, Tungsten, Fluorescent, Fluorescent H, Flash, Underwater, Custom 1, Custom 2</td>
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
      <td width="560">2 year Canon India Warranty and Free Transit Insurance.</td>
    </tr>
                      </tbody>
       </table>
                    <p>&nbsp;</p>
					
					
	  </div>
</div>
	</div></div>
				
		<div id="footer">
			<div class="shell">
				<p class="bottom-menu"><a href="#" title="Home">Home</a><span>|</span><a href="#" title="Special Offers">Special Offers</a><span>|</span><a href="#" title="Log In">Log In</a><span>|</span><a href="#" title="Account">Account</a><span>|</span><a href="#" title="Basket">Basket</a><span>|</span><a href="#" title="Checkout">Checkout</a><span>|</span><a href="#" title="Contact">Contact</a></p>
				<p>Copyright &copy; PC Store 2013. Design by: <a href="http://css-free-templates.com/" title="CSS Free Templates">CSS-Free-Templates</a>. All Rights Reserved. </p>
				<div class="cl">&nbsp;</div>
			</div>
		</div>
		<!-- End Footer -->
	</div>
	<!-- End Wrapper -->
</body>
</html>