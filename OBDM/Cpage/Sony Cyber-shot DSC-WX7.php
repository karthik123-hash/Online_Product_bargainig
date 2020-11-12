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
		  if($pn!="Sony Cyber-shot DSC-WX7")
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../CMENU/sony.php" title="Sony">Sony</a> / <a href="#" title="Sony Cyber-shot DSC-WX7">Sony Cyber-shot DSC-WX7</a><br />
			<br /><br />
					<img src="../css/images/camera/sony-cybershot-dsc-wx200-1.jpeg" name="Main" width="289" height="207" align="left" id="Main"/>
					
		  <div class="effect2"> <span class="style10"><u> Sony Cyber-shot DSC-WX7 Point & Shoot </u></span>
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
			  &nbsp;&nbsp;<img src="../css/images/camera/sony-cybershot-dsc-wx200-2.jpeg" height="110" width="129" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;<img src="../css/images/camera/sony-cybershot-dsc-wx200-3.jpeg" width="120" height="105" onmousemove="showT(src)"/>&nbsp;&nbsp;&nbsp;
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
			      <span class="style12"> Specifications of Sony Cyber-shot DSC-WX7 Point & Shoot (Black) </span>
	
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
             <td width="550">Battery, USB Charger, USB Cable, Power Cord, Wrist Strap.</td>
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
             <td>Cybershot DSC-WX7</td>
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
      <td width="551">103 g (Body), 120 g (with Accessories)</td>
    </tr>
    <tr>
      <td>Dimensions</td>
      <td>92.2 (W) x 51.9 (H) x 19.1 (D) mm</td>
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
      <td width="558">16.2 Megapixels</td>
    </tr>
    <tr>
      <td>Other Resolution</td>
      <td>3648 x 2736, 2592 x 1944</td>
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
      <td>20x</td>
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
      <td width="561">Clear Photo LCD Plus</td>
    </tr>
	 <tr>
      <td>LCD Screen Size</td>
      <td> 	2.8 inch&nbsp;</td>
    </tr>
	 <tr>
      <td>Image Display Resolution</td>
      <td> 	460,800 dots</td>
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
      <td width="559">iAuto (W: Approx. 5cm to Infinity, T: Approx. 100cm to Infinity)</td>
    </tr>
    <tr>
      <td>Lens Type</td>
      <td> Carl Zeiss Vario-Tessar</td>
    </tr>
    <tr>
      <td>Focal Length</td>
      <td>4.5 - 22.5mm (25 - 125mm)</td>
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
      <td width="559">Hi-speed USB 2.0 </td>
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
      <td>SD / SDHC / SDXC / Stick Duo / Stick PRO Duo / Stick PRO Duo (High Speed) / Stick PRO-HG Duo</td>
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
      <td width="292">Audio Formats</td>
      <td width="559"> 	MP3</td>
    </tr>
    <tr>
      <td>Image Sizing</td>
      <td> 	4608 x 3456 (16 M)</td>
    </tr>
    <tr>
      <td>Video Format</td>
      <td> AVCHD / MPEG4</td>
    </tr>
    <tr>
      <td>Image Format</td>
      <td> 	JPEG</td>
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
      <td width="560"> Multi-point AF (9 points) / Center-weighted AF / Spot AF</td>
    </tr>
    <tr>
      <td>Flash Range</td>
      <td> 0.05 - 5.3 m (W), 1.0 - 2.2 m (T)</td>
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
      <td width="555">iAuto (2 - 1/1,600) / Program Auto (1 - 1/1,600)</td>
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
      <td width="563">Auto / 100 / 200 / 400 / 800 / 1600 / 3200</td>
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
      <td>Intelligent Auto, Easy Shooting, Program Auto, Movie Mode, Panorama, Scene Selection, Picture Effect, Manual Exposure</td>
    </tr>
    <tr>
      <td>Metering</td>
      <td> 	Multi Pattern, Center Weighted, Spot</td>
    </tr>
    <tr>
      <td>Aperture Range</td>
      <td>iAuto (F2.6 - F8.0) / Program Auto (F2.6 - F8.0)</td>
    </tr>
	
	 <tr>
      <td>Red Eye Reduction</td>
      <td> 	Yes</td>
    </tr>
	 <tr>
      <td>Picture Angle</td>
      <td>25mm wide angle</td>
    </tr>
	 <tr>
      <td>White Balancing</td>
      <td>Auto, Daylight, Cloudy, Fluorescent, Incandescent, Flash, One Push, One Push Set</td>
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