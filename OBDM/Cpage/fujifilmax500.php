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
		  if($pn!="Fujifilm AX550")
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../CMENU/fujifilm.php" title="Fujifilm">Fujifilm</a> / <a href="#" title="Fujifilm AX550">Fujifilm AX550</a><br />
			<br /><br />
					<img src="../css/images/camera/fujifilmax5001.jpeg" name="Main" width="274" height="181" align="left" id="Main"/>
					
		  <div class="effect2"> <span class="style10"><u> Fujifilm AX550 Point & Shoot
(Blue)</u></span>
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
			  &nbsp;&nbsp;<img src="../css/images/camera/fujifilm-ax500-2.jpeg" height="108" width="132" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;<img src="../css/images/camera/fujifilmax5001.jpeg" width="127" height="102" onmousemove="showT(src)"/>&nbsp;&nbsp;&nbsp;
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
			      <span class="style12">Specifications of Fujifilm AX550 Point & Shoot (Blue) </span>
	
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
      <td width="550">USB Cable, Camera, CD-ROM, 2x AA Type Alkaline Batteries, Hand Strap, Owner's Manual</td>
    </tr>
	
	 
    <tr>
      <td>Brand</td>
      <td>Fujifilm</td>
    </tr>
    <tr>
      <td>Type</td>
      <td>Point & Shoot</td>
    </tr>
    <tr>
      <td>Color</td>
      <td> 	Blue</td>
    </tr>
    <tr>
      <td>Model ID</td>
      <td> 	AX550</td>
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
      <td width="551"> 	119 g (without Battery)</td>
    </tr>
    <tr>
      <td height="12">Dimensions</td>
      <td>93.0 (W) x 60.2 (H) x 27.8 (D) mm</td>
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
      <td width="558">16.0 Megapixels</td>
    </tr>
	 <tr>
      <td height="12">Other Resolution</td>
      <td>4:3 Aspect Ratio: 4608 x 3440, 2304 x 1728, 3264 x 2448, 16:9 Aspect Ratio: 1920 x 1080, 3072 x 1728, 4608 x 2592, 3:2 Aspect Ratio: 4608 x 3072</td>
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
      <td width="555"> 	6x</td>
    </tr>
    <tr>
      <td>Digital Zoom</td>
      <td> 	7.2x</td>
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
      <td> 	2.7 inch</td>
    </tr>
	 <tr>
      <td>Image Display Resolution</td>
      <td>230,000 dots</td>
    </tr>
	 <tr>
      <td>Video Display Resolution</td>
      <td> 	1920 x 1080, 30 fps</td>
    </tr>
	 <tr>
      <td>Supported Aspect Ratio</td>
      <td> 	4:3, 16:9</td>
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
      <td> 	AA Battery</td>
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
      <td width="559"> 	TTL Contrast Detection</td>
    </tr>
    <tr>
      <td>Lens Type</td>
      <td> 	Fujinon</td>
    </tr>
	<tr>
      <td>Manual Focus</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Focal Length</td>
      <td> 	5.9 - 29.5 mm (35 mm Equivalent to 33 - 165 mm)</td>
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
      <td>SD / SDHC / SDXC</td>
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
      <td width="559">WAV, AAC</td>
    </tr>
    <tr>
      <td>Image Sizing</td>
      <td> 	4608 x 3456 (16 M)</td>
    </tr>
    <tr>
      <td>Video Format</td>
      <td>AVI (Motion JPEG)</td>
    </tr>
    <tr>
      <td>Image Format</td>
      <td> 	JPEG, EXIF 2.3</td>
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
      <td width="560">Red-eye Removal Off: Auto, Forced Flash, Suppressed Flash, Slow Sync, Red-eye Removal On: Red-eye Reduction Auto, Red-eye Reduction and Forced Flash, Suppressed Flash, Red-eye Reduction and Slow Sync</td>
    </tr>
    <tr>
      <td>Flash Range</td>
      <td> 	0.6 - 3.0 m (W), 0.6 - 2.0 m (T)</td>
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
      <td width="563"> 	Auto, ISO 64, 100, 200, 400, 800, 1600, 3200</td>
    </tr>
    <tr>
      <td>Additional Features</td>
      <td>Sound Wave Format: Monaural Sound, Constitution (8 Elements in 8 Groups), Exposure Mode: Programmed AE, Exposure Compensation (-2.0EV - .0 EV 1/3 EV Step), Focus Mode: Single AF , Continuous AF (SR AUTO, Movie), AF Frame Selection: Center, Tracking, Movie Recording: 1280 x 720 Pixels, 640 x 480 Pixels, 320 x 240 Pixels (30 fps) with Monaural Sound, Photography Functions: SR AUTO, Face Detection, Auto Red-eye Removal, Blink Detection, Framing Guideline, Automatic LCD Brightness Adjustment, Frame Number, Memory, Playback Functions: Face Detection, Photobook Assist, Image Search, Slide Show, Auto Red-eye Removal, Protect, Crop, Resize, Image Rotate, Mark for Upload, Multi-frame Playback (with Micro Thumbnail), Panorama, Favorite, Exif Print, Time Difference, Discharge Option for Rechargeable Ni-MH Batteries, Silent Mode, Operating Temperature: 0° C - 40° C, Operating Humidity 10% - 80%, Blink Detection, High Sensitivity in Low Light, Built-in Social Networking, Powerful in-camera Image Search</td>
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
      <td>SR Auto, Auto, P, Movie, Natural Light & with Flash, Natural Light, Portrait, Baby, Smile & Shoot, Landscape, Motion Panorama, Sport, Night, Night (Tripod), Fireworks, Sunset, Snow, Beach, Party, Flower, Text</td>
    </tr>
    <tr>
      <td>Metering</td>
      <td> 	TTL 256 Zones Metering</td>
    </tr>
    <tr>
      <td>HDMI</td>
      <td> 	Type D, Micro HDMI Output</td>
    </tr>
	
	 <tr>
      <td>Red Eye Reduction</td>
      <td> 	Yes</td>
    </tr>
	 <tr>
      <td>Continuous Shots</td>
      <td> 	Yes, 1.1 fps</td>
    </tr>
	 <tr>
      <td>White Balancing</td>
      <td>Fine, Shade, Fluorescent Light (Daylight), Fluorescent Light (Warm White), Fluorescent Light (Cool White), Incandescent Light</td>
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
      <td width="560">Fujifilim Digital camera products are covered with 2 Years Warranty, including only manufacturing defects and services, but not defects due to mishandling. Extended warranty is subject to dealer and not the company.</td>
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