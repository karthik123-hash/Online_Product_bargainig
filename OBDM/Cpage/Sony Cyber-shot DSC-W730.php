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
		  if($pn!="Sony Cyber-shot DSC-W730")
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../CMENU/sony.php" title="Sony">Sony</a> / <a href="#" title="Sony Cyber-shot DSC-W730">Sony Cyber-shot DSC-W730</a><br />
			<br /><br />
					<img src="../css/images/camera/sony-cybershot-dsc-w730-1.jpeg" name="Main" width="289" height="207" align="left" id="Main"/>
					
		  <div class="effect2"> <span class="style10"><u> Sony Cyber-shot DSC-W730 Point & Shoot
(Black)</u></span>
					<br/>
					<br /><br/><br />
					<p>
					
				<strong> 	2 year Sony India Warranty and Free Transit Insurance.</strong>				  
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
			  &nbsp;&nbsp;<img src="../css/images/camera/sony-cybershot-dsc-w730-2.jpeg" height="110" width="129" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;<img src="../css/images/camera/sony-cybershot-dsc-w730-3.jpeg" width="120" height="105" onmousemove="showT(src)"/>&nbsp;&nbsp;&nbsp;
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
			      <span class="style12"> Specifications of Sony Cyber-shot DSC-W730 Point & Shoot (Black) </span>
	
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
             <td width="550">Wrist Strap, Instruction Manual, AC Adaptor (AC-UB10), Multi USB Cable, Battery (NP-BN)</td>
           </tr>
           <tr>
             <td>Brand</td>
             <td> 	Sony</td>
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
             <td>DSC-W730</td>
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
      <td width="551">122 g (with Battery and Meomry Card), 106 g (Body Only)</td>
    </tr>
    <tr>
      <td>Dimensions</td>
      <td>93.1 (W) x 52.3 (H) x 22.5 (D) mm</td>
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
      <td>Other Resolution</td>
      <td>Image Recording: 4:3 Aspect Ratio: 3648 x 2736 (10 M), 2592 x 1944 (5 M), VGA 640 x 480, 16:9 Aspect Ratio: 1920 x 1080 (2 M), 4608 x 2592 (12 M), Sweep Panorama 360 (11520 x 1080), Sweep Panorama Wide (7152 x 1080 / 4912 x 1920), Sweep Panorama Standard (4912 x 1080 / 3424 x 1920), VGA (640 x 480 / 30 fps), STD (1280 720 / 30 fps), Fine (1280 720 / 30 fps)</td>
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
      <td width="555">8x</td>
    </tr>
    <tr>
      <td>Digital Zoom</td>
      <td>32x</td>
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
      <td> 	2.7 inch&nbsp;</td>
    </tr>
	 <tr>
      <td>Image Display Resolution</td>
      <td> 230,400 dots</td>
    </tr>
	 <tr>
      <td>Video Display Resolution</td>
      <td> 1920 x 1080</td>
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
      <td width="558">AC 100 - 240 V, 50/60 Hz, Output: DC 5 V</td>
    </tr>
    <tr>
      <td>Battery Type</td>
      <td> 	Li-ion  RechargeableBattery</td>
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
      <td width="559">Center Weighted AF</td>
    </tr>
    <tr>
      <td>Lens Type</td>
      <td>Carl Zeiss Vario-Tessar 8</td>
    </tr>
    <tr>
      <td>Focal Length</td>
      <td> 4.5 - 36 mm (35 mm Equivalent to 28 - 224 mm)</td>
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
      <td>Microphone</td>
      <td>Mono</td>
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
      <td>SD / SDHC / Stick Duo (Still Image / Movies) / Stick PRO Duo (Still Image / Movies) / Stick PRO Duo (High Speed), Memory Stick PRO HG Duo / Stick Micro / Stick Micro (Mark2) / Micro SD / Micro SDHC</td>
    </tr>
    <tr>
      <td>Inbuilt Memory</td>
      <td>27 MB</td>
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
      <td> 	4608 x 3456 (16 M)</td>
    </tr>
    <tr>
      <td>Video Format</td>
      <td>H.264</td>
    </tr>
    <tr>
      <td>Image Format</td>
      <td> 	JPEG, DCF, DPOF</td>
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
      <td width="560"> Auto, Flash On, Slow Sync, Flash Off, Advanced Flash</td>
    </tr>
    <tr>
      <td>Flash Range</td>
      <td>0.3 - 2.8 m (W), 1.5 - 2 m (T)</td>
    </tr>
    <tr>
      <td>Built in Flash</td>
      <td>Yes</td>
    </tr>
                      </tbody>
       </table>
					<br /><br />
                    <table width="871" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Shutter Speed</span></th>
                        </tr>
                        <tr>
      <td width="295">Minimum Shutter Speed</td>
      <td width="555">2 sec</td>
    </tr>
	<tr>
	<td>Maximum Shutter Speed</td>
	<td>1/1600 sec</td>
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
      <td width="563">Auto, 80, 100, 200, 400, 800, 1600, 3200</td>
    </tr>
    <tr>
      <td>Additional Features</td>
      <td>16.4 Megapixels Gross Pixels, BIONZ Imaging Processor, Still Image 16:9 35 mm Equivalent Focal Length 28 - 224 mm, Still Image 4:3 35 mm Equivalent Focal Length 25 - 200 mm, Movie 16:9 35 mm Equivalent Focal Length 28 - 224 mm (SteadyShot Standard), Movie 4:3 35 mm Equivalent Focal Length 34 - 272 mm (SteadyShot Standard), 34 - 381 mm (SteadyShot Active), Precision Digital Zoom: Still Image: 32x / 10 M, 10x / 5 M, 14x / VGA, 57x / 2M, 16:9 Aspect Ratio 19x, Focus Mode (Multi-Point AF, Center Weighted AF, Flexible Spot AF (Tracking Focus), Flexible Spot AF (Face Tracking Focus), Exposure Compensation: 2.0 EV in increments of 1/3 EV, Flash Range: ISO 3200: 5.3 m (W) / 3.3 m (T), Auto Macro, Auto Focus Illuminator (Auto / Off), 8 Face Detection, Dynamic Range Optimiser (Standard / Off / Plus), Scene Selection (High Sensitivity, Night Scene, Night Portrait, Soft Snap, Landscape, Beach, Snow, Gourmet, Pet, Soft Skin, Fireworks), Picture Effect (Toy Camera, Pop Color, Partial Color, Soft High-key), InCamera Guide, Smile Shutter, Grid Line, Retouch Trimming, Retouch Unsharp Masking, Beauty Effect, Date View, Slide Show with Music, 1.5 sec Start-up Time, 0.3 sec Shooting Time Lag, 0.017 sec Shutter Release Time Lag, 2.8 sec Shooting Interval, Burst Speed (Maximum): 1 fps (100 Shots), Burst Interval (Minimum): 1.0 sec (3 Shots, 3,4,10), Smart Zoom: 10x / 10 M, 14x / 5M, VGA 57x, Playback Slide Show (Video Out SD, Movie, Effects Simple / Nostalgic / Stylish / Active, Music 4 Tunes), Download Music, Automatic Image Rotation, USB Connection (Mass Storage, PTP / MTP), Tripod Receptacle, Automatically Selects the Best Mode for Shooting Situation, Create Beautiful Portraits with In-camera Retouching, Transform Ordinary Shots into Beautiful Scenes</td>
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
      <td>Intelligent Auto, Easy Shooting, Program Auto, Movie Mode, Panorama, Scene Selection, Picture Effect</td>
    </tr>
	<tr>
	<td>Delete function</td>
	<td>Yes</td>
	</tr>
    <tr>
      <td>Metering</td>
      <td> 	Multi Pattern, Center Weighted, Spot</td>
    </tr>
	<tr>
	<td>Macro Mode</td>
	<td>Yes, 5 cm (W) - 150 cm (T)</td>
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
      <td> 	Yes,100 Shots at 1 fps</td>
    </tr>
	 <tr>
      <td>White Balancing</td>
      <td>Auto, Daylight, Cloudy, Fluorescent, Incandescent, Flash, One Push, One Push Set</td>
    </tr>
	<tr>
	<td>Supported Languages</td>
	<td>19</td>
	</tr>
	<tr>
	<td>Aperture Range</td>
	<td>F3.3 - F8.0 (W)</td>
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
      <td width="560"> 	2 year Sony India Warranty and Free Transit Insurance.</td>
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