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
		  if($pn!="Fujifilm FinePix X20")
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../CMENU/fujifilm.php" title="Fujifilm">Fujifilm</a> / <a href="#" title="Fujifilm FinePix X20">Fujifilm FinePix X20</a><br />
			<br /><br />
					<img src="../css/images/camera/fujifilm-finepix-x20-mirrorless1.jpeg" name="Main" width="274" height="181" align="left" id="Main"/>
					
		  <div class="effect2"> <span class="style10"><u> Fujifilm FinePix X20 Mirrorless
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
			  &nbsp;&nbsp;<img src="../css/images/camera/fujifilm-finepix-x20-mirrorless2.jpeg" height="108" width="132" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;<img src="../css/images/camera/fujifilm-finepix-x20-mirrorless3.jpeg" width="142" height="102" onmousemove="showT(src)"/>&nbsp;&nbsp;&nbsp;
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
			      <span class="style12">Specifications of Fujifilm FinePix X20 Mirrorless (Black) </span>
	
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
      <td> 	X20</td>
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
      <td width="551">333 g (without Battery and Memory Card), 353 g (with Battery and Memory Card)</td>
    </tr>
    <tr>
      <td height="12">Dimensions</td>
      <td> 	117.0 (W) x 69.6 (H) x 56.8 (D) mm</td>
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
      <td width="558">12.0 Megapixels</td>
    </tr>
	 <tr>
      <td height="12">Other Resolution</td>
      <td>Recorded Pixels Large: 4:3 Aspect Ratio 4000 x 3000, 3:2 Aspect Ratio 4000 x 2664, 16:9 Aspect Ratio 4000 x 2248, 1:1 Aspect Ratio 2992 x 2992, Medium: 4:3 Aspect Ratio 2816 x 2112, 3:2 Aspect Ratio 2816 x 1864, 16:9 Aspect Ratio 2816 x 1584, 1:1 Aspect Ratio 2112 x 2112, Small: 4:3 Aspect Ratio 2048 x 1536, 3:2 Aspect Ratio 2048 x 1360, 16:9 Aspect Ratio 1920 x 1080, 1:1 Aspect Ratio 1536 x 1536, Movie Recording: 1920 x 1080 / 1280 x 720 (60 fps) / 640 x 480 (30 fps) with Stereo Sound</td>
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
      <td>Fujinon Aspherical Lens</td>
    </tr>
	<tr>
      <td>Manual Focus</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Focal Length</td>
      <td> 	7.1 - 28.4 mm (35 mm Equivalent to 28 - 112 mm)</td>
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
      <td> 	Windows 8 / Windows 7 / Windows Vista / Windows XP</td>
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
      <td>4000 x 3000 (L)</td>
    </tr>
    <tr>
      <td>Video Format</td>
      <td> 	MOV, H.264</td>
    </tr>
    <tr>
      <td>Image Format</td>
      <td> 	JPEG, EXIF 2.3, DCF, DPOF, RAW JPEG, RAW</td>
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
      <td width="560"> 	Red-eye Removal OFF: (Auto, Forced Flash, Suppressed Flash, Slow Sync), Red-eye Removal ON: Red-eye Reduction Auto, Red-eye Reduction with Forced Flash, Suppressed Flash, Red-eye Reduction with Slow Sync</td>
    </tr>
    <tr>
      <td>Flash Range</td>
      <td> 	0.3 - 7.0 m (W), 0.5 m - 5.0 m (T)</td>
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
      <td width="563">Auto (Control Available upto ISO 3200), ISO 100 , 200, 250, 320, 400, 500, 640, 800, 1000, 1250, 1600, 2000, 2500, 3200, 4000, 5000, 6400, 12800 (Standard Output Sensitivity)</td>
    </tr>
    <tr>
      <td>Additional Features</td>
      <td>Lens Constitution: 11 Elements in 9 Groups, Focus Distance (Normal: 50 cm (W) - 80 cm (T), Super Macro: 1.0 cm - 1.0 m), Exposure Mode (Programmed AE, Aperture Priority AE, Shutter Priority AE, Manual), Exposure Compensation: -2.0 EV - .0 EV in Increments of 1/3 EV, Auto Bracketing: 1/3 EV, 2/3 EV, 1 EV, Film Simulation Bracketing: Any 3 Type of Film Simulation Selectable, Dynamic Range Bracketing: 100%, 200%, 400%, ISO Sensitivity Bracketing: 1/3 EV, 2/3 EV, 1 EV, Focus Mode (Single AF, Continuous AF, MF, Intelligent Hybrid AF (TTL Contrast AF / TTL Phase Detection AF), AF Assist Illuminator Available, AF Frame Selection, Multi, Area, Tracking), Hot Shoe, Silent Mode, Operating Temperature: 0° C - 40° C, Operating Humidity: 10% - 80%</td>
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
      <td>TTL 256 Zones Metering, Multi, Spot, Average</td>
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
      <td>Yes, 12 fps (Super High), 9 fps (High Size), 6 fps (Middle), 3 fps (Low)</td>
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