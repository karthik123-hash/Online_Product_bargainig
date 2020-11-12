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
		  if($pn!="Canon PowerShot A 2300")
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../CMENU/canon.php" title="Canon">Canon</a> / <a href="#" title=" Canon PowerShot A2300 Point & Shoot
(Black)">  Canon PowerShot A2300 Point & Shoot
(Black)</a>
			<br /><br />
					<img src="../css/images/camera/cannon23001.jpeg"name="Main" width="277" height="225" align="left" id="Main"/>
					
		  <div class="effect2"> <span class="style10"><u> Canon PowerShot A2300 Point & Shoot
(Black)</u></span>
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
			  &nbsp;&nbsp;<img src="../css/images/camera/cannon23003.jpeg" height="142" width="114" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;<img src="../css/images/camera/cannon23002.jpeg" width="110" height="146" onmousemove="showT(src)"/>&nbsp;&nbsp;&nbsp;
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
      <td width="550">User Manual, 4 GB Memory Card, Battery Charger with Rechargeable Lithium Batteries, USB Cable, Camera Pouch (Inside the Box)</td>
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
      <td>Black</td>
    </tr>
    <tr>
      <td>Model ID</td>
      <td> 	A2300</td>
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
      <td width="551">109 g (Camera Body Only), 125 g (with Battery and Memory Card)</td>
    </tr>
    <tr>
      <td height="12">Dimensions</td>
      <td>94.4 (W) x 54.2 (H) x 20.1 (D) mm</td>
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
      <td width="561">TFT Color (Wide Viewing Angle)</td>
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
      <td>1280 x 720 (30 fps)</td>
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
      <td width="558">Power Adapter CA-DC 10 (Included with AC Adapter Kit ACK-DC90)</td>
    </tr>
    <tr>
      <td>Battery Type</td>
      <td>Li-ion Rechargeable Battery</td>
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
      <td> 	5.0 (W) - 25.0 (T) mm (35 mm Equivalent to 28 (W) - 140 (T) mm)&nbsp;</td>
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
      <td width="559">Linear PCM (2 Channel Monaural)</td>
    </tr>
    <tr>
      <td>Image Sizing</td>
      <td>4608 x 3456 (L)</td>
    </tr>
    <tr>
      <td>Video Format</td>
      <td>MOV, H.264</td>
    </tr>
    <tr>
      <td>Image Format</td>
      <td>JPEG, EXIF 2.3, DCF, DPOF</td>
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
      <td> 	0.5 - 3.0 m (W), 1.0 - 2.0 m (T)&nbsp;</td>
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
      <td width="563">Auto, ISO 100, 200, 400, 800, 1600</td>
    </tr>
    <tr>
      <td>Additional Features</td>
      <td>DIGIC 4 Imaging Processor, Optical Viewfinder, 5 Levels Brightness Adjustment, AF Frame: Face AiAF, Tracking AF, Center, Exposure Compensation ( 2 Stops in increment of 1/3 Stop, Circular Aperture Type, Recording Specifications: Alkaline 200 Shorts, NiMH 450 Shorts, File Format: Design Rule for Camera File System, DPOF (Version 1.1) Compliant, Operating Temperature: 0° C - 40° C, Operating Humidity: 10% - 90%</td>
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
      <td>Auto, Program, Live View Control, Digital IS, Portrait, Face Self-timer, Low Light, Fish-eye Effect, Miniature Effect, Toy Camera Effect, Monochrome, Super Vivid, Poster Effect, Snow, Fireworks, Long Shutter, Discreet, iFrame Movie</td>
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
      <td>Yes, 0.8 fps (P Mode), 2.8 fps (Low Light Mode)</td>
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