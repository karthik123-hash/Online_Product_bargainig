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
		  if($pn!="Panasonic Lumix DMC-LS6")
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../CMENU/panasonic.php" title="Panasonic">Panasonic</a> / <a href="#" title="Panasonic Lumix DMC-LS6">Panasonic Lumix DMC-LS6</a><br />
			<br /><br />
					<img src="../css/images/camera/panasonic-lumix-dmc-ls6-point-shoot-400x400-imaddcazgdz6c2sw.jpeg" height="181" align="left" id="Main"/>
					
		  <div class="effect2"> <span class="style10"><u> Panasonic Lumix DMC-LS6 Point & Shoot
(Black)</u></span>
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
			  &nbsp;&nbsp;<img src="../css/images/camera/panasonic-lumix-dmc-ls6-point-shoot-400x400-imaddcaz6qqykkzv.jpeg" height="108" width="132" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;<img src="../css/images/camera/panasonic-lumix-dmc-ls6-point-shoot-400x400-imaddcazqqsafufh.jpeg" width="142" height="102" onmousemove="showT(src)"/>&nbsp;&nbsp;&nbsp;
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
			      <span class="style12">Specifications of Panasonic Lumix DMC-LS6 Point & Shoot (Black) </span>
	
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
      <td width="550"> 	2 Rechargeable Batteries, USB Cord, CD-ROM</td>
    </tr>
	
	 
    <tr>
      <td>Brand</td>
      <td> 	Panasonic</td>
    </tr>
    <tr>
      <td>Type</td>
      <td> 	Point & Shoot</td>
    </tr>
    <tr>
      <td>Color</td>
      <td> 	Black</td>
    </tr>
    <tr>
      <td>Model ID</td>
      <td> 	DMC-LS6</td>
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
      <td width="551">125 g (without Battery and SD Memory Card), 172 g (with Battery and SD Memory Card)</td>
    </tr>
    <tr>
      <td height="12">Dimensions</td>
      <td> 	96.5 (W) x 62 (H) x 27.2 (D) mm</td>
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
      <td width="558">14.1 Megapixels</td>
    </tr>
	
      <tr>
      <td width="291">Other Resolution</td>
      <td width="558">4:3 Aspect Ratio: 4320 x 3240 (14 M), 3648 x 2736 (10 M EZ), 2560 x 1920 (5 M EZ), 2048 x 1536 (3 M EZ), 640 x 480 (0.3 M EZ), 3:2 Aspect Ratio: 4320 x 2880 (12.5 M), 16:9 Aspect Ratio: 4320 x 2432 (10.5 M)</td>
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
      <td> 	2.7 inch</td>
    </tr>
	 <tr>
      <td>Image Display Resolution</td>
      <td> 	230,000 dots</td>
    </tr>
	 <tr>
      <td>Video Display Resolution</td>
      <td>1280 x 720, 30 fps</td>
    </tr>
	 <tr>
      <td>Supported Aspect Ratio</td>
      <td> 	4:3, 3:2, 16:9</td>
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
      <td width="558"> 	3.2 V</td>
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
      <td width="559"> 	TTL Contrast Detection</td>
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
      <td> 	4.7 - 23.5 mm (35 mm Equivalent to 26 - 130 mm)</td>
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
      <td> 	10 MB</td>
    </tr>
    <tr>
      <td>Operating System</td>
      <td>Windows 7, Windows Vista, Windows XP, MAC OS X</td>
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
      <td> 	4320 x 3240 (14 M)</td>
    </tr>
    <tr>
      <td>Video Format</td>
      <td> 	Quick Time Motion JPEG</td>
    </tr>
    <tr>
      <td>Image Format</td>
      <td> 	JPEG, (DCF, EXIF 2.3)</td>
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
      <td width="560">Auto, Auto with Red-eye Reduction, Forced On, Forced On with Red-eye Reduction, Slow Sync with Red-eye Reduction, Forced Off</td>
    </tr>
    <tr>
      <td>Flash Range</td>
      <td> 	0.6 - 4.6 m (W, ISO Auto), 0.6 - 2.0 m (T, ISO Auto)</td>
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
      <td width="563">Auto, 100, 200, 400, 800, 1600, High Sensitivity Mode (ISO 1600 - 6400)</td>
    </tr>
    <tr>
      <td>Additional Features</td>
      <td>Aperture (F 2.8 / 7.9 (W), F 6.5 / 18.4 (T)), Extra Optical Zoom (6x (4:3 / 10 M), 8.5x (4:3 / 5 M), 10.5x (4:3 / Under 3 M)), Lens Construction: 7 Elements in 5 Groups, 5 Aspherical Lenses, 8 Aspherical Surfaces, Focusing Area Normal (15 (W) cm, 60 (T) cm), Normal Focus, AF Metering (Face / 9-area / 1-area), Still Image Scene Mode (Portrait, Self Portrait, Scenery, Panorama Assist, Sports, Night Portrait, Night Scenery, Food, Party, Baby, Sunset, High Sensitivity, Fireworks, Beach, Snow), Motion Picture Recording (VGA: 640 x 480, 30 fps (Motion JPEG), QVGA: 320 x 240, 30 fps (Motion JPEG)), Exposure Program AE, Exposure Compensation: 2 EV in Increment of 1/3 EV Step, Color Mode Standard, Black and White, Sepia, Vivid (Normal, Video), Playback Mode (Normal Playback, Slide Show, Category Selection), Thumbnails (12, 30 Thumbnails), Zoomed Playback, Copy, Text Stamp, PictBridge Support (Single, Multi, All), Field of View (Approx 100%, Wide-viewing Angle), Mono Speaker, Battery Life (160 Pictures (CIPA Standard), 320 Pictures (CIPA Standard with Optional Ni-MH AA Battery (1950 mAh))), Digital Dedicated Jack (8 Pin) Terminal, Tripod Mount, Included Software (Photo Fun Studio 6.0, Adobe Reader), Digital Video Capture, Audio Capture, Exif Print Support, 720p HD Movie Recording, Text Stamp, Scene Detection Technology, In-camera Red-Eye Removal, Resizing an Image, Intelligent Scene Selector, Direct Print, Motorized Drive Zoom Adjustment, Built-in Lens Shield</td>
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
      <td>intelligent Auto, Normal Picture, SCN, Motion Picture</td>
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
      <td>Yes, 0.8 fps (Full Resolution Image)</td>
    </tr>
	 <tr>
      <td>White Balancing</td>
      <td>  	Auto, Daylight, Cloudy, Shade, Incandescent, White Set</td>
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