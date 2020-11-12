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
		  if($pn!="Panasonic Lumix DMC-FP1")
		  header("Location: http://localhost/OBDM/CMENU/panasonic.php");
		  
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../CMENU/panasonic.php" title="Panasonic">Panasonic</a> / <a href="#" title="Panasonic Lumix DMC-FP1">Panasonic Lumix DMC-FP1</a><br />
			<br /><br />
					<img src="../css/images/camera/panasonic-fp1-point-shoot1.jpeg" height="181" align="left" id="Main"/>
					
		  <div class="effect2"> <span class="style10"><u>  Panasonic Lumix DMC-FP1 Mirrorless
(with 14-42 mm Lens)</u></span>
					<br/>
					<br /><br/><br />
					<p>
					
				<strong>3 Years Panasonic India Warranty and Free Transit Insurance.</strong>				  
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
			  &nbsp;&nbsp;<img src="../css/images/camera/panasonic-fp1-point-shoot1.jpeg" height="108" width="132" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;<img src="../css/images/camera/panasonic-fp1-point-shoot-2.jpeg"width="142" height="102" onmousemove="showT(src)"/>&nbsp;&nbsp;&nbsp;
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
			      <span class="style12">Specifications of Panasonic Lumix DMC-GF3 Mirrorless (with 14-42 mm Lens) </span>
	
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
      <td width="550">Camera, Lens (14 - 42 mm), Rechargeable Battery, Charger, USB Cable, AV Cable, Strap, Software CD, User Manual</td>
    </tr>
	
	 
    <tr>
      <td>Brand</td>
      <td> 	Panasonic</td>
    </tr>
    <tr>
      <td>Type</td>
      <td> 	Mirrorless</td>
    </tr>
    <tr>
      <td>Color</td>
      <td> 	White</td>
    </tr>
    <tr>
      <td>Model ID</td>
      <td>DMC-GF3</td>
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
      <td width="551">222 g (Body Only), 264 g (SD Card, Battery, Body), 319 g (SD Card, Battery, H-H014 Lens)</td>
    </tr>
    <tr>
      <td height="12">Dimensions</td>
      <td> 	107.7 (W) x 67.1 (H) x 32.5 (D) mm</td>
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
      <td width="558">12.10 Megapixels</td>
    </tr>
	
      <tr>
      <td width="291">Other Resolution</td>
      <td width="558">4:3 Aspect Ratio: 2816 x 2112 (M), 2048 x 1536 (S), 1600 x 1200 (3D Lens in Micro Four Third System Standard), 3:2 Aspect Ratio: 4000 x 2672 (L), 2816 x 1880 (M), 2048 x 1360 (S), 1600 x 1064 (3D Lens in Micro Four Third System Standard), 16:9 Aspect Ratio: 4000 x 2248 (L), 2816 x 1584 (M), 1920 x 1080 (S), 1600 x 904 (3D Lens in Micro Four Third System Standard), 1:1 Aspect Ratio: 2992 x 2992 (L), 2112 x 2112 (M), 1504 x 1504 (S), 1440 x 1440 (3D Lens in Micro Four Third System Standard)</td>
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
      <td width="561">TFT LCD with Touch Panel</td>
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
      <td>4:3, 3:2, 16:9, 1:1</td>
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
      <td width="558"> 	7.2 V</td>
    </tr>
    <tr>
      <td>Battery Type</td>
      <td> 	Li-ion Battery</td>
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
      <td width="559"> 	Contrast AF System</td>
    </tr>
    <tr>
      <td>Lens Type</td>
      <td> 	Lumix G Vario</td>
    </tr>
	<tr>
      <td>Manual Focus</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Focal Length</td>
      <td>14 - 42 mm (35 mm Equivalent to 28 - 84 mm)</td>
    </tr>
	
                      </tbody>
       </table>
                    <br />
                    <br />
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
      <td> 	SD / SDHC / SDXC / Compatible with UHS-I</td>
    </tr>
	 <tr>
      <td>Inbuilt Memory</td>
      <td>26MB</td>
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
      <td width="559"> 	Linear PCM</td>
    </tr>
    <tr>
      <td>Image Sizing</td>
      <td>4000 x 3000 (4:3)</td>
    </tr>
    <tr>
      <td>Video Format</td>
      <td>AVCHD, QuickTime Motion JPEG</td>
    </tr>
    <tr>
      <td>Image Format</td>
      <td>JPEG, DCF, EXIF 2.3, RAW, MPO</td>
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
      <td width="560">Auto, Auto with Red-eye Reduction, Forced On, Forced On with Red-eye Reduction, Slow Sync, Slow Sync, Red-eye Reduction, Forced Off</td>
    </tr>
    <tr>
      <td>Flash Range</td>
      <td>1.0 - 3.4 m</td>
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
      <td width="563"> 	Auto, Intelligent ISO, 160, 200, 400, 800, 1600, 3200, 6400</td>
    </tr>
    <tr>
      <td>Additional Features</td>
      <td>Micro Four Third Lens Mount, 13.06 Total Megapixels, Image Quality: RAW, RAW, RAW, Fine, Standard / MPO (3D Lens in Micro Four Thirds Standard, Color Space: sRGB, Adobe RGB, AVCHD Continuous Recordable Time (Motion Images): 160 mins (SH with H-FS014042), 170 mins (SH with H-H014), AVCHD Actual Recordable Time (Motion Images): 130 mins (SH with H-FS014042), 150 mins (SH with H-H014), Focus Mode: AFS / AFC / MF, AF Mode: Face Detection, AF Tracking, 23-area Focusing, 1-area Focusing, Pinpoint, AF Detective Range: EV 0-18 (ISO 100 Equivalent), AF Assist Lamp, AF Lock, Other Focus: Quick AF, Continuous AF (During Motion Image Recording), AF, Touch Shutter, Touch MF, Assist, Metering Range: EV 0-18 (F2.0 Lens, ISO 100 Equivalent), Exposure Mode: Program AE, Aperture Priority, Shutter Priority AE, Manual, Exposure Compensation: B1 3 EV in increments of 1/3 EV, AE Lock, AE Bracket: B1 4/3 EV in increments of 1/3 or 2/3 EV Step (3,5 Frames), White Balance Adjustment: Blue / Amber Bias, Magenta / Green Bias, Color Temperature Setting: 2500-10000 K in 100 K, White Balance Bracket, Focal-panel Shutter Type, Shutter Speed: 1/16000-1/30 secs (NTSC), 1/16000-1/25 (PAL), Image Still Scene Mode: Portrait, Soft Skin, Scenery, Architecture, Sports, Peripheral Defocus, Flower, Food, Objects, Night Portrait, Night Scenery, Illuminations, Baby 1, 2, Pet, Party, Sunset, Movie Scene Mode: Portrait, Soft Skin, Scenery, Architecture, Sports, Flower, Food, Objects, Low-light, Party, Sunset, Creative Control: (Still Image and Motion Image), Expressive, Retro, High Key, Sepia, High Dynamic, Miniature, Synchronization Speed: 1/160 secs, Flash Synchronization: 1st Curtain Sync, 100% LCD Field of View, Monitor Adjustment: 7 Levels Brightness, 7 Levels Contrast and Saturation, 7 Levels Red Tint, 7 Levels Blue Tint, Extra Tele Conversion: 2x Still Image, 3.1x Motion Image (SH/H in AVCHD and HD/WVGA in Motion JPEG, 4.2x Still Image (VGA/QVGA in Motion JPEG), Playback Mode: Normal Playback, 30 Thumbnail Display, 12 Thumbnail Display, Calender Display, Zoomed Playback (16x), Slideshow (Duration and Effect is Selectable), Playback Mode (Normal, Picture, AVCHD, Motion JPEG Play, Category, Favorite), Title Edit, Text Stamp, Video Divide, Resize, Cropping, Aspect Conversion, Rotate, Rotate Display, Favorite, Print Set, Protect, Face Recognition Edit, Image Protection: Single, Multi, Single in Burst Group, Multi in Burst Group, Cancel, Image Erase: Single, Multi, All, Except Favorite, Monaural Speaker, Battery Life: 340 Images (with H-H014), Operating Temperature: 0°-40° C, 10%-80% Operating Humidity.</td>
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
      <td>Portrait, Soft Skin, Scenery, Architecture, Sports, Peripheral Defocus, Flower, Food, Objects, Night Portrait, Night Scenery, Illuminations, Baby 1, Baby 2, Pet, Party, Sunset</td>
    </tr>
    <tr>
      <td>Metering</td>
      <td> 	144-zone Multi-pattern, Intelligent Multiple, Center-weighted, Spot</td>
    </tr>
    <tr>
      <td>HDMI</td>
      <td> 	Type C, Mini HDMI</td>
    </tr>
	
	 <tr>
      <td>Red Eye Reduction</td>
      <td> 	Yes</td>
    </tr>
	 <tr>
      <td>Continuous Shots</td>
      <td> 	Yes, 3.8 fps (High), 2.8 fps (Medium with Live View), 2 fps (Low with Live View)</td>
    </tr>
	 <tr>
      <td>White Balancing</td>
      <td> Auto, Daylight, Cloudy, Shade, Halogen, Flash, White Set 1, White Set 2, Color Temperature Setting</td>
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
      <td width="560">3 year Panasonic India Warranty and Free Transit Insurance.</td>
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