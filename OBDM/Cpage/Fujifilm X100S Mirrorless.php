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
		  if($pn!="Fujifilm X100S")
		  header("Location: http://localhost/OBDM/CMENU/fujifilm.php");
		  
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../CMENU/fujifilm.php" title="Fujifilm">Fujifilm</a> / <a href="#" title="Fujifilm X100S">Fujifilm X100S</a><br />
			<br /><br />
					<img src="../css/images/camera/fujifilm-x100s-mirrorless1.jpeg" name="Main" width="274" height="181" align="left" id="Main"/>
					
		  <div class="effect2"> <span class="style10"><u>  Fujifilm X100S Mirrorless
(Black)</u></span>
					<br/>
					<br /><br/><br />
					<p>
					
				<strong>2 Years Fujifilm India Warranty and Free Transit Insurance. </strong>				  
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
			  &nbsp;&nbsp;<img src="../css/images/camera/fujifilm-x100s-mirrorless2.jpeg" height="108" width="132" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;<img src="../css/images/camera/fujifilm-x100s-mirrorless3.jpeg" width="142" height="102" onmousemove="showT(src)"/>&nbsp;&nbsp;&nbsp;
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
			      <span class="style12">Specifications of Fujifilm X100S Mirrorless (Black) </span>
	
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
      <td width="550">Camera, Rechargeable Battery, AC Power Adopter, Hand Strap, CD</td>
    </tr>
	
	 
    <tr>
      <td>Brand</td>
      <td>Fujifilm</td>
    </tr>
    <tr>
      <td>Type</td>
      <td>Mirrorless</td>
    </tr>
    <tr>
      <td>Color</td>
      <td> 	Black</td>
    </tr>
    <tr>
      <td>Model ID</td>
      <td>X100S</td>
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
      <td width="551">405 g (without Battery and Memory Card), 445 g (with Battery and Memory Card)</td>
    </tr>
    <tr>
      <td height="12">Dimensions</td>
      <td> 	126.5 (W) x 74.4 (H) x 53.9 (D) mm</td>
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
      <td width="558">16.3 Megapixels</td>
    </tr>
	 <tr>
      <td height="12">Other Resolution</td>
      <td>Still Image Large: 3:2 Aspect Ratio 4896 x 3264, 16:9 Aspect Ratio 4896 x 2760, 1:1 Aspect Ratio 3264 x 3264, Medium: 3:2 Aspect Ratio 3456 x 2304, 16:9 Aspect Ratio 3456 x 1944, 1:1 Aspect Ratio 2304 x 2304, Small: 3:2 Aspect Ratio 2496 x 1664, 16:9 Aspect Ratio 2496 x 1408, 1:1 Aspect Ratio 1664 x 1664, Movie Recording: 1920 x 1080p (60 fps / 30 fps)</td>
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
      <td width="555"> 	4x</td>
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
      <td width="561"> 	TFT Color LCD Monitor</td>
    </tr>
	 <tr>
      <td>LCD Screen Size</td>
      <td> 	2.8 inch</td>
    </tr>
	 <tr>
      <td>Image Display Resolution</td>
      <td> 	460,000 dots</td>
    </tr>
	 <tr>
      <td>Video Display Resolution</td>
      <td>1920 x 1080, 60 fps</td>
    </tr>
	 <tr>
      <td>Supported Aspect Ratio</td>
      <td> 	3:2, 4:3, 16:9, 1:1</td>
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
      <td width="558">CP-50 with AC Power Adapter AC-5VX (Sold Separately)</td>
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
      <td width="559"> 	TTL Contrast</td>
    </tr>
    <tr>
      <td>Lens Type</td>
      <td>Fujinon Single Focal Length Lens</td>
    </tr>
	<tr>
      <td>Manual Focus</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Focal Length</td>
      <td> 	35 mm Equivalent to 23 mm</td>
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
      <td> 	Windows 8, Windows 7 SP1, Windows Vista, Windows XP, Mac OS X 10.6 - 10.8</td>
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
      <td> 	4896 x 3264 (L)</td>
    </tr>
    <tr>
      <td>Video Format</td>
      <td> 	MOV, H.264</td>
    </tr>
    <tr>
      <td>Image Format</td>
      <td> 	JPEG, EXIF 2.3, RAW, RAW JPEG, DCF, DPOF</td>
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
      <td width="560">Red-eye Removal OFF (Auto, Forced Flash, Suppressed Flash, Slow Sync), Red-eye Removal ON (Red-eye Reduction Auto, Red-eye Reduction and Forced Flash, Suppressed Flash, Red-eye Reduction and Slow Sync)</td>
    </tr>
    <tr>
      <td>Flash Range</td>
      <td> 	0.5 - 9 m (ISO 1600)</td>
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
      <td width="563">Auto (Upto ISO 6400), Equivalent to ISO 200 - 6400 (Standard Output Sensitivity), Extended Output Sensitivity Equivalent ISO 100, 12800, 25600</td>
    </tr>
    <tr>
      <td>Additional Features</td>
      <td>Lens Construction: 8 Elements in 6 Groups (1 Aspherical Glass Molded Lens Included), 50 cm Focus Distance, Exposure Mode (Programmed AE, Shutter Priority AE, Aperture Priority AE, Manual Exposure), Exposure Compensation: -2.0 EV - .0 EV in increments of 1/3 EV, AE Bracketing: 1/3 EV, 2/3 EV, 1 EV, Film Simulation Bracketing: 3 Type of Film Simulation Selectable, Dynamic Range Bracketing: 100%, 200%, 400%, ISO Sensitivity Bracketing: 1/3 EV, 2/3 EV, 1 EV, Focus Mode (Single AF, Continuous AF / MF, Type (Intelligent Hybrid AF: TTL Phase Detection AF, AF Assist Illuminator, AF Frame Selection (Area / Multi)), Color Temperature Selection, Hot Shoe (Dedicated TTL Flash Compatible), Viewfinder (Hybrid Viewfinder, Optical Viewfinder (Reverse Galilean Viewfinder with Electronic Bright Frame Display, 0.5x Magnifications, 90% Coverage of Frame), 0.48 inch Electronic Viewfinder, 236,000 dots Color LCD Viewfinder, 100% Coverage of Viewing Area, 15 mm Eye-point, -2 - m-1 Diopter Adjustment, Built-in Eye Sensor, Playback Functions (RAW Conversion, Image Rotate, Photobook Assist, Erase Selected Frames, Image Search, Multi-frame Playback (with Micro Thumbnail), Slide Show, Mark for Upload, Protect, Crop, Resize, Panorama, Favorites, Other Functions (Exif Print, Time Difference, High Performance Mode, OVF Power Save Mode, Silent Mode, Shutter Sound Select), Operating Temperature: 0° C - 40° C, Operating Humidity: 10% - 80%</td>
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
      <td>SP: Portrait, Landscape, Sport, Night, Night (Tripod), Fireworks, Sunset, Snow, Beach, Party, Flower, Text, Mode Dial: Auto, Program, Small, Creative Auto, Panorama, SP1, SP2</td>
    </tr>
    <tr>
      <td>Metering</td>
      <td>TTL 256 Zones Metering, Spot, Multi, Average</td>
    </tr>
    <tr>
      <td>HDMI</td>
      <td> 	Mini HDMI</td>
    </tr>
	
	 <tr>
      <td>Red Eye Reduction</td>
      <td> 	Yes</td>
    </tr>
	 <tr>
      <td>Continuous Shots</td>
      <td>Yes, 6.0 fps</td>
    </tr>
	 <tr>
      <td>White Balancing</td>
      <td> 	Automatic Scene Recognition, Preset: Fine, Shade, Fluorescent Light (Daylight), Fluorescent Light (Warm White), Fluorescent Light (Cool White), Incandescent Light, Underwater, Custom</td>
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
      <td width="560"> 	2 year Fujifilm India Warranty and Free Transit Insurance.</td>
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