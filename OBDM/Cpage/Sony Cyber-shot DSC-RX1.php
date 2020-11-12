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
		  if($pn!="Sony Cyber-shot DSC-RX1")
		  header("Location: http://localhost/OBDM/CMENU/sony.php");
		  
	?>
    <style type="text/css">
<!--
.style16 {font-size: 14}
.style17 {
	font-size: 24px;
	color: #FF6633;
	}
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../CMENU/sony.php" title="Sony">Sony</a> / <a href="#" title="Sony Cyber-shot DSC-RX1">Sony Cyber-shot DSC-RX1</a><br />
			<br /><br />
					<img src="../css/images/camera/sony-cybershot-dsc-rx1-mirrorless-400x400-imadjhhxdqvjqjnr.jpeg" name="Main" width="292" height="192" align="left" id="Main"/>
					
		  <div class="effect2"> <span class="style10"><u> Sony Cyber-shot DSC-RX1 Mirrorless
(Black)</u></span>
					<br/>
					<br /><br/><br />
					<p>
					
				<strong> 	3 year Sony India Warranty and Free Transit Insurance.</strong>				  
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
			  &nbsp;&nbsp;<img src="../css/images/camera/sony-cybershot-dsc-rx1-mirrorless-400x400-imadjhhxtdhknpwa.jpeg" height="110" width="135" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;<img src="../css/images/camera/sony-cybershot-dsc-rx1-mirrorless-400x400-imadjhhxrzewamqs.jpeg" width="130" height="105" onmousemove="showT(src)"/>&nbsp;&nbsp;&nbsp;
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
			      <span class="style12">Specifications of Sony Cyber-shot DSC-RX1 Mirrorless (Black) </span>
	
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
             <td width="550">Rechargeable Battery Pack NP-BG1, Battery Charger, AC Power Cord, Shoulder Strap, Multi USB Cable</td>
           </tr>
           <tr>
             <td>Brand</td>
             <td> 	Sony</td>
           </tr>
           <tr>
             <td>Type</td>
             <td> 	Mirrorless</td>
           </tr>
           <tr>
             <td>Color</td>
             <td> 	Black</td>
           </tr>
           <tr>
             <td>Model ID</td>
             <td> 	DSC-RX1</td>
           </tr>
         </tbody>
       </table>
	   <br />
	   <br />
                    <table width="865" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Dimension</span></th>
                        </tr>
                       <tr>
      <td width="293">Weight</td>
      <td width="551"> 	482 g (with Battery and Memory Stick), 453 g Weight (Body Only)</td>
    </tr>
    <tr>
      <td>Dimensions</td>
      <td> 	113.3 (W) x 65.4 (H) x 69.6 (D) mm</td>
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
      <td width="558">24.3 Megapixels</td>
    </tr>
    <tr>
      <td>Other Resolution</td>
      <td>Still Image Recording (10 M (3648 x 2736) 4:3 Mode, Sweep Panorama HR (10480 x 4096)), Movie Recording (AVCHD - 1920 x 1080 (24 M, FX), AVCHD - 1920 X 1080 (17 M, FH), AVC MP4 - VGA / 640 x 480 (3 M), VGA (640 x 480 / 30 fps))</td>
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
      <td width="561">Clear Photo TFT LCD</td>
    </tr>
	 <tr>
      <td>LCD Screen Size</td>
      <td> 	3 inch&nbsp;</td>
    </tr>
	 <tr>
      <td>Image Display Resolution</td>
      <td>1,228,800 dots</td>
    </tr>
	 <tr>
      <td>Video Display Resolution</td>
      <td> 	1920 x 1080</td>
    </tr>
	 <tr>
      <td>Supported Aspect Ratio</td>
      <td>4:3, 16:9</td>
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
      <td width="558">Compact Power Adapter CA-DC 10 (Included with AC Adapter Kit ACK-DC90)</td>
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
      <td width="559"> 	Center Weighted AF</td>
    </tr>
    <tr>
      <td>Lens Type</td>
      <td>Carl Zeiss Sonnar T</td>
    </tr>
    <tr>
      <td>Focal Length</td>
      <td> 	35 mm</td>
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
      <td> 	Audio / Video Output</td>
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
      <td>SD / SDHC / SDXC / microSD / microSDHC</td>
    </tr>
    <tr>
      <td>Operating System</td>
      <td> 	Windows 7</td>
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
      <td width="559"> 	MP3</td>
    </tr>
    <tr>
      <td>Image Sizing</td>
      <td> 	6000 x 4000 (24 M)</td>
    </tr>
    <tr>
      <td>Video Format</td>
      <td> 	AVCHD, H.264</td>
    </tr>
    <tr>
      <td>Image Format</td>
      <td> 	JPEG, RAW, RAW JPEG</td>
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
      <td width="560">Flash Off, Autoflash, Fill-flash, Slow Sync, Rear Sync, Wireless (with Optional Compliant Flash)</td>
    </tr>
    <tr>
      <td>Flash Range</td>
      <td> 	0.75 - 21.7 m (W), 43.4 m (ISO 25600)</td>
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
      <td width="563">ISO 102400, 50, 80, ISO Auto (100 - 25600), ISO 100 - 102400 (Multi frame NR), 64, 100 - 25600</td>
    </tr>
    <tr>
      <td>Additional Features</td>
      <td>Explore Creative Possibilities, Focal Length: Movie 16:9 (35 mm Equalient to 44 mm (SteadyShot On), 37 mm (SteadyShot Off)), Movie 4:3 (35 mm Equalient to 48 mm (SteadyShot On), 45 mm (SteadyShot Off)), Compact Camera with Full-frame Sensor, Explore Full Manual Control Photography, Full-frame Imaging, 35 mm F2 Prime Lens, Wide Sensitivity Range ISO 100 - 25600, Intuitive Manual Controls with Aperture and Focus Mode Dial, New Multi Interface Shoe Compatible with Optional Flash, 24.7 Megapixel Gross Pixels, Brightness Setting, Direct Manual Focus Mode, Multi-point AF Focus Mode, Spot AF Focus Mode, Flexible-spot AF Focus Mode, Flexible Spot AF (Tracking Focus) Focus Mode, Flexible Spot AF (Face Tracking Focus) Focus Mode, 3.0 EV, 1/3 EV Step Center-weighted Light Metering, 3.0 EV, 1/3 EV Step Exposure Compensation, Auto Focus Illuminator (Auto / Off), Auto / Off Face Detection Mode, Face Selection (Key, Selected-face Memory), 8 Maximum Detectable Faces, Auto / Level 1 - 5 Dynamic Range Optimiser, Scene Selection (Shutter Speed Priority, Aperture Priority, Manual Exposure, Night Scene, Landscape, SteadyShot (EIS (Blur Reduction) for Movie), Picture Effect (HDR Painting, Rich-tone Monochrome, Miniature, Toy Camera, Pop Color, Partial Color.</td>
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
      <td>Superior Auto, Intelligent Auto, Program Auto, Movie Mode, Panorama, Scene Selection, Picture Effect, Manual Exposure</td>
    </tr>
    <tr>
      <td>Metering</td>
      <td> 	Multi Pattern, Centre Weighted, Spot</td>
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
      <td>Yes, 5 fps</td>
    </tr>
	 <tr>
      <td>White Balancing</td>
      <td> 	Auto, Daylight, Shade, Cloudy, Incandescent, Flash</td>
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
      <td width="560"> 	3 year Sony India Warranty and Free Transit Insurance.</td>
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