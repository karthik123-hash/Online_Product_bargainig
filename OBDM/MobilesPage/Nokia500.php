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
		  if($pn!="Nokia 500")
		  header("Location: http://localhost/OBDM/Menu/Nokia.php");
		  
	?>
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
					<li><a href="register.php" title="SIGN UP">&nbsp;Sign Up &nbsp;</a></li>
					<li><a href="login.php" title="Log In">&nbsp;Log In&nbsp;</a></li>
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../MENU/Nokia.php" title="Nokia">Nokia</a> / <a href="Nokia500.php" title="Nokia 500">Nokia 500</a><br />
			<br /><br />
					<img src="../css/images/Mobile/nkfivehund0.jpeg" name="Main" width="205" height="400" align="left" id="Main"/>
					
		  <div class="effect2"> <span class="style10"><u>Nokia 500 (White)</u></span>
					<br/><br /><br/><br />
					<p>
					
				<strong>1 year manufacturer warranty for Phone and 6 months warranty for in the box accessories Nokia India Warranty and Free Transit                      Insurance.</strong>				  
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
							<span class="style17">				            
				            <?php 
						if($Barg!="0")
						echo $Barg; ?>
						</span>
				              <br />
					        <br />				
				            
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
					
			  &nbsp;&nbsp;<img src="../css/images/Mobile/nkfivehund0.jpeg" height="142" width="69" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;
                     <img src="../css/images/Mobile/nkfivehund1.jpeg" height="146" width="71" onmousemove="showT(src)" />&nbsp;&nbsp;&nbsp;
					 
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
			      <span class="style12">Specifications of Nokia 500 (White)</span>
	
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
      <td width="289">In Sales Package</td>
      <td width="555">Handset, Battery, Charger, Headset, Data Cable, Quick Guide, Product Info Guide, 2 Spare Back Covers</td>
    </tr>
    <tr >
      <td>Brand</td>
      <td>Nokia</td>
    </tr>
    <tr>
      <td>Model ID</td>
      <td>500</td>
    </tr>
    <tr>
      <td>Form</td>
      <td>Bar</td>
    </tr>
    <tr>
      <td>SIM Type</td>
      <td>Single SIM, GSM</td>
    </tr>
    <tr>
      <td>Touch Screen</td>
      <td>Yes, Capacitive</td>
    </tr>
    <tr>
      <td>Keypad</td>
      <td>No</td>
    </tr>
    <tr>
      <td>Business Features</td>
      <td>Document Viewer, Pushmail</td>
    </tr>
    <tr>
      <td>Call Features</td>
      <td>Conference Call, Speed Dialing, Loudspeaker, Call Divert</td>
    </tr>
    <tr>
      <td>Handset Color</td>
      <td>White</td>
    </tr>
	                  </tbody>
       </table>
					
					
		            <br /><br />
                    <table width="865" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Platform</span></th>
                        </tr>
                       <tr>
      <td width="294">Operating Freq</td>
      <td width="550">GSM - 850, 900, 1800, 1900; UMTS - 2100</td>
    </tr>
    <tr>
      <td>OS</td>
      <td>Symbian (Anna)</td>
    </tr>
    <tr>
      <td>Java</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Processor</td>
      <td>1 GHz ARM11</td>
    </tr>
    <tr>
      <td>Graphics</td>
      <td>OpenVG 1.1</td>
    </tr>
                      </tbody>
       </table>
					
					
					<br /><br />
                    <table width="870" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style15">Display</span></th>
                        </tr>
                      <tr>
      <td>Type</td>
      <td>TFT</td>
    </tr>
    <tr>
      <td>Size</td>
      <td>3.2 Inches</td>
    </tr>
    <tr>
      <td>Resolution</td>
      <td>nHD, 640 x 360 Pixels</td>
    </tr>
    <tr>
      <td>Color</td>
      <td>16 M</td>
    </tr>
                      </tbody>
       </table>
					
					
					<br /><br />
                    <table width="871" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Camera</span></th>
                        </tr>
                        <tr>
      <td width="293">Primary Camera</td>
      <td width="557">Yes, 5 Megapixel</td>
    </tr>
    <tr>
      <td>Secondary Camera</td>
      <td>No</td>
    </tr>
    <tr>
      <td>Video Recording</td>
      <td>Yes, 640 x 480, 15 fps</td>
    </tr>
    <tr>
      <td>Zoom</td>
      <td>Digital Zoom - 4x</td>
    </tr>
    <tr>
      <td>Other Camera Features</td>
      <td>Full Focus, Geo-tagging, Self-timer, Image Editor</td>
    </tr>
                      </tbody>
       </table>
                    
					
					<br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Dimensions</span></th>
                        </tr>
                     <tr>
      <td width="292">Size</td>
      <td width="559">53.8x111.3x14.1 mm</td>
    </tr>
    <tr>
      <td>Weight</td>
      <td>93 g</td>
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
      <td width="292">Type</td>
      <td width="559">Li-Ion, 1110 mAh</td>
    </tr>
    <tr>
      <td>Talk Time</td>
      <td>7 hrs (2G), 5 hrs (3G)</td>
    </tr>
    <tr>
      <td>Standby Time</td>
      <td>500 hrs (2G), 455 hrs (3G)</td>
    </tr>
                      </tbody>
       </table>
					
					
                   <br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Memory and Storage</span></th>
                        </tr>
                         <tr>
      <td width="293">Internal</td>
      <td width="558">2 GB</td>
    </tr>
    <tr>
      <td>Expandable Memory</td>
      <td>microSD, upto 32 GB</td>
    </tr>
    <tr>
      <td>Memory</td>
      <td>256 MB RAM, 512 MB ROM</td>
    </tr>
                      </tbody>
       </table>
					
					
                  <br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Internet &amp; Connectivity</span></th>
                        </tr>
                       <tr>
      <td width="293">Internet Features</td>
      <td width="558">Email</td>
    </tr>
    <tr>
      <td>Preinstalled Browser</td>
      <td>WAP 2.0</td>
    </tr>
    <tr>
      <td>GPRS</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>EDGE</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>3G</td>
      <td>Yes, 14.4 Mbps HSDPA; 5.76 Mbps HSUPA</td>
    </tr>
    <tr>
      <td>Wifi</td>
      <td>Yes, 802.11 b/g</td>
    </tr>
    <tr>
      <td>WAP</td>
      <td>Yes, v2</td>
    </tr>
    <tr>
      <td>USB Connectivity</td>
      <td>Yes, micro USB, v2</td>
    </tr>
    <tr>
      <td>Navigation Technology</td>
      <td>A-GPS, with Nokia Maps</td>
    </tr>
    <tr>
      <td>Bluetooth</td>
      <td>Yes, v2.1, Supported Profiles (A2DP, AVRCP 1.0, BIP, DUN, FTP, GAP, GOEP, HFP, HSP, OPP, PBAP 1.0, SAP, SDP, SPP 1.0, EDR)</td>
    </tr>
    <tr>
      <td>Audio Jack</td>
      <td>3.5 mm</td>
    </tr>
                      </tbody>
       </table>
					
					
					
                   <br /><br />
                    <table width="873" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Multimedia</span></th>
                        </tr>
                       <tr>
      <td width="294">Music Player</td>
      <td width="558">Yes, Supports MP3, eAAC</td>
    </tr>
    <tr>
      <td>Video Player</td>
      <td>Yes, Supports MP4, H.263, H.264</td>
    </tr>
    <tr>
      <td>FM</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Ringtone</td>
      <td>MP3</td>
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
      <td width="291">SAR Value</td>
      <td width="563">1.18 W/Kg</td>
    </tr>
    <tr>
      <td>Call Memory</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>SMS Memory</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Phone Book Memory</td>
      <td>Practically Unlimited</td>
    </tr>
    <tr>
      <td>Sensors</td>
      <td>Accelerometer, Proximity Sensor, Ambient Light Sensor, Digital Compass</td>
    </tr>
    <tr>
      <td>Additional Features </td>
      <td>Flight   Mode, FOTA Firmware, FOTI Firmware, MMS Enabled, Audio Equalizer, Audio   and Video Streaming, Audio Recorder, Live TV (Operator Dependent),   Voice Input</td>
    </tr>
    <tr>
      <td>Important Apps</td>
      <td>Instant Messaging, Facebook, Twitter, YouTube</td>
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
      <td width="293">Warranty Summary</td>
      <td width="561">1 year manufacturer warranty for Phone and 6 months warranty for in the box accessories</td>
    </tr>
                      </tbody>
       </table>
                    <p>&nbsp;</p>
					
					
	  </div>
</div>
	</div></div>
				
	<!-- Begin Footer -->
		<div class="cl">&nbsp;</div>
		<div id="footer">
			<div class="shell">
				<p class="bottom-menu"> 
				<a href="../Main/Main.php" title="Home"> Home </a> 
				<span>|</span> 
			<a href="register.php" title="Sign Up">Sign Up</a><span>|</span>
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