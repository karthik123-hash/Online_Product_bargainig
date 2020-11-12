<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>PC-Store  A BarGaining WorlD</title>
	
	
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
		  if($pn!="Cannon IXUS 255")
		  header("Location: http://localhost/OBDM/CMENU/canon.php");
		  
	?>
    <style type="text/css">
	.style17 {
	font-size: 24px;
	color: #FF6633;
	}
<!--
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../CMENU/canon.php" title="Canon">Canon</a> / <a href="#" title="Canon IXUS 255 HS Point & Shoot">Canon IXUS 255 HS Point & Shoot</a><br />
			<br /><br />
					<img src="../css/images/camera/cannon2551.jpeg" name="Main" width="277" height="225" align="left" id="Main"/>
					
		  <div class="effect2"> <span class="style10"><u>  Canon IXUS 255 HS Point & Shoot
(Black)  </u></span>
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
			  &nbsp;&nbsp;<img src="../css/images/camera/cannon2552.jpeg" height="142" width="95" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;<img src="../css/images/camera/cannon2253.jpeg" width="102" height="146" onmousemove="showT(src)"/>&nbsp;&nbsp;&nbsp;
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
			      <span class="style12">Specifications of Canon Digital IXUS 500 HS Point & Shoot (Red)   </span>
	
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
      <td> 	Black</td>
    </tr>
    <tr>
      <td>Model ID</td>
      <td>IXUS 255 HS</td>
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
      <td width="551">144 g (with Batteries and Memory Card)</td>
    </tr>
    <tr>
      <td>Dimensions</td>
      <td>97.2 (W) x 56.4 (H) x 22.5 (D) mm</td>
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
      <td width="558">12.1 Megapixels</td>
    </tr>
    <tr>
      <td>Other Resolution</td>
      <td>Image Size: 4:3 Aspect Ratio 2816 x 2112 (M1), 1600 x 1200 (M2), 640 x 480 (S), 16:9 Aspect Ratio 4000 x 2248 (L), 2816 x 1584 (M1), 1920 x 1080 (M2), 640 x 360 (S), 3:2 Aspect Ratio 4000 x 2664 (L), 2816 x 1880 (M1), 1600 x 1064 (M2), 640 x 424 (S), 1:1 Aspect Ratio 2992 x 2992 (L), 2112 x 2112 (M1), 1200 x 1200 (M2), 480 x 480 (S), Resize in Playback (M2, S), Movies: 1920 x 1080, 24 fps, (HD) 1280 x 720, 30 fps, (L) 640 x 480, 30 fps, Super Slow Motion Movie (L) 640 x 480, 120 fps, (M) 320 x 240, 240 fps, Miniature Effect (HD, L) 6 fps, 3 fps, 1.5 fps</td>
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
      <td width="555"> 	10x</td>
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
      <td width="561">TFT PureColor II G LCD</td>
    </tr>
	 <tr>
      <td>LCD Screen Size</td>
      <td> 	3 inch&nbsp;</td>
    </tr>
	 <tr>
      <td>Image Display Resolution</td>
      <td> 	461,000 dots</td>
    </tr>
	 <tr>
      <td>Video Display Resolution</td>
      <td>1920 x 1080, 24 fps</td>
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
      <td width="558">Compact Power Adapter CA-DC 10 (Included with AC Adapter Kit ACK-DC90)</td>
    </tr>
    <tr>
      <td>Battery Type</td>
      <td>Li-ion Battery</td>
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
      <td>4.3 - 43.0 mm (35 mm Equivalent to 24 - 240 mm)</td>
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
	<tr>
      <td>Wifi</td>
      <td>yes</td>
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
      <td width="559">Linear PCM</td>
    </tr>
    <tr>
      <td>Image Sizing</td>
      <td>4000 x 3000 (L)</td>
    </tr>
    <tr>
      <td>Video Format</td>
      <td>MOV, H.264</td>
    </tr>
    <tr>
      <td>Image Format</td>
      <td>JPEG, EXIF 2.3, DCF, DPOF 1.1</td>
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
      <td> 	0.5 - 2.5 m (W), 1.0 - 1.5 m (T)</td>
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
      <td width="563"> 	Auto, 80, 100, 200, 400, 800, 1600, 3200, 6400</td>
    </tr>
    <tr>
      <td>Additional Features</td>
      <td>DIGIC 5 with iSAPS Technology, Lens Construction: 9 Elements in 7 Groups, Image Stabilisation: 3-stop (Canon Standard), Intelligent IS, AF System / Points (AiAF (Face Detection / 9-point), 1-point AF (Fixed to Centre), AF Modes (Single, Continuous (Auto Mode Only), Servo AF / AE, Tracking AF), AF Point Selection (Normal, Small), AF Lock (On / Off), AF Assist Beam), Exposure Compensation: 2 EV in increments of 1/3, 100% LCD Coverage, Brightness Adjustable, Quick-bright LCD, 1/2000 sec Slow Sync Speed, Flash Exposure Compensation, Face Detection FE, Smart Flash Exposure, Flash Exposure Lock, Drive Modes (Single, Continuous, Self-Timer), GPS Via Mobile, Intelligent Orientation Sensor, Histogram, 2x - 10x Playback Zoom, Computer / Other: Wi-Fi (IEEE802.11 b/g/n), (2.4 GHz Only), Operating Temperature: 0° C - 40° C, Humidity: 10% - 90%, 20x Zoom Plus, Face ID, High-speed Shooting, Creative Modes, HS System, Share Images Wirelessly, Energy Saving for More Shots (ECO Mode)</td>
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
      <td>Smart   Auto (58 Scenes Detected), Hybrid Auto, Program, Portrait, Smooth Skin,   Smart Shutter (Smile, Wink Self-Timer, FaceSelf-Timer), High-speed   Burst (3.0 MP), Handheld Night Scene, Fish-eye Effect, Miniature Effect,   Toy Camera Effect, Soft Focus, Monochrome, Super Vivid, Poster Effect,   Color Accent, Color Swap, Snow, Fireworks, Long Shutter, Stitch Assist</td>
    </tr>
    <tr>
      <td>Metering</td>
      <td>Evaluative, Center Weighted Average, Spot</td>
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
      <td> 	Yes, 2 fps in P Mode and 5.8 fps in High-speed Burst Mode</td>
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