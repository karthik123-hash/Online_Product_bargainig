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
		  if($pn!="HP Envy TouchSmart 15-J001TX")
		    header("Location: http://localhost/OBDM/LMENU/HP.php");
	?>
    <style type="text/css">
<!--
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
		echo "<input type='text' value='logged in as $lname'  class='blink' disabled='disabled'/><a href='logout.php'>logout</a>";
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../LMENU/HP.php" title="HP">HP</a> / <a href="../LaptopsPage/HP Envy TouchSmart 15-J001TX.php" title="HP">HP Envy&nbsp;TouchSmart&nbsp;15-J001TX</a><br />
			<br /><br />
					<img id="Main" src="../css/images/laptop/hp12_1.jpg" height="280" width="300" align="left"/>
					
		  <div class="effect2"> <span class="style10"><u>HP Envy&nbsp;TouchSmart&nbsp;15-J001TX</u></span><br/>
					<br /><br/><br />
					<p>
					
				<strong>1 Year Warranty HP India Warranty and Free Transit Insurance.</strong>
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
			  &nbsp;&nbsp;<img src="../css/images/laptop/hp12_2.jpg" height="150" width="200" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;
                     <img src="../css/images/laptop/hp12_3.jpg" height="150" width="200" onmousemove="showT(src)" />
					 &nbsp;&nbsp;&nbsp;
                     <img src="../css/images/laptop/hp12_4.jpg" height="150" width="200" onmousemove="showT(src)" />
					 									 
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
      <strong>
      <h2>Specifications of HP ENVY TOUCHSMART 15-J001TX Laptop</h2>
      <br />
				    <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
					
				
					<!-- Begin Content -->
					<!-- End Content -->
					<!-- Begin Right Sidebar -->
	 </h2>
      </strong></div>
				    <div class="effect">
	 
	 				<table width="865" cellspacing="5">
					  <tbody>
		                <tr>
		                  <th colspan="2" align="justify"><span class="style13">IN THE BOX</span></th>
	                    </tr>
                        <tr>
                          <td width="295">Sales Package</td>
                          <td width="549">Laptop, Battery, AC Adapter, User Guide and Manuals</td>
                        </tr>
					  </tbody>
	   </table>
						
						<br /><br />
			        <table width="865" cellspacing="5">
		              <tbody>
		                <tr>
		                  <th colspan="2" align="justify"><span class="style13">GENERAL FEATURES</span></th>
	                    </tr>
                        <tr>
                          <td width="295">Brand</td>
                          <td width="549">HP</td>
                        </tr>
						<tr>
                          <td width="295">Series</td>
                          <td width="549">Envy</td>
                        </tr>
                        <tr>
                          <td>Lifestyle</td>
                          <td>Gaming</td>
                        </tr>
                        <tr>
                          <td>Color</td>
                          <td>Glass Fiber With Silky Soft Touch&nbsp;Aluminium&nbsp;Finish Natural Silver</td>
                        </tr>
                        <tr>
                          <td>Part Number</td>
                          <td>D9H44PA</td>
                        </tr>
                        <tr>
                          <td>Model ID</td>
                          <td>15-J001TX</td>
                        </tr>
                        
	                  </tbody>
       </table>
					
					
		            <br /><br />
                    <table width="865" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">PROCESSOR</span></th>
                        </tr>
                        <tr>
                          <td width="293">Processor</td>
                          <td width="551">Core i7 (4th Generation)</td>
                        </tr>
                        <tr>
                          <td>Variant</td>
                          <td>4700MQ</td>
                        </tr>
                        <tr>
                          <td>Brand</td>
                          <td>Intel</td>
                        </tr>
                        <tr>
                          <td>Clock Speed</td>
                          <td>2.4 GHz with Turbo Boost Technology&nbsp;Upto&nbsp;3.4 GHz</td>
                        </tr>
						<tr>
                          <td>Cache</td>
                          <td>6 MB</td>
                        </tr>
                      </tbody>
       </table>
					
					
					<br /><br />
                    <table width="870" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style15">MEMORY</span></th>
                        </tr>
						<tr>
                          <td width="293">Expandable Memory</td>
                          <td width="556">Upto 16 GB</td>
                        </tr>
						<tr>
                          <td width="293">Memory Slots</td>
                          <td width="556">2 (Unused Slot - 0)</td>
                        </tr>
						<tr>
                          <td width="293">System Memory</td>
                          <td width="556">8 GB DDR3</td>
                        </tr>
                        
                      </tbody>
       </table>
					
					
					<br /><br />
                    <table width="871" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">STORAGE</span></th>
                        </tr>
                        <tr>
                          <td width="295">Hardware Interface</td>
                          <td width="555">SATA</td>
                        </tr>
						 <tr>
                          <td width="295">RPM</td>
                          <td width="555">5400</td>
                        </tr>
                        <tr>
                          <td width="295">HDD Capacity</td>
                          <td width="555">1 TB </td>
                        </tr>
                       
                      </tbody>
       </table>
                    
					
					<br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">OPTICAL DISK DRIVE</span></th>
                        </tr>
                        <tr>
                          <td width="294">Optical Drive</td>
                          <td width="557">Not Available </td>
                        </tr>
					  </tbody>
       </table>
                    
					
					<br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">PLATFORM</span></th>
                        </tr>
                        <tr>
                          <td width="293">Operating System</td>
                          <td width="558">Windows 8 </td>
                        </tr>
                        <tr>
                          <td>System Architecture</td>
                          <td>64-bit</td>
                        </tr>
                        
                      </tbody>
       </table>
					
					
                   <br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">DISPLAY</span></th>
                        </tr>
                        <tr>
                          <td width="292">Screen Size</td>
                          <td width="559">15.6 inch</td>
                        </tr>
						<tr>
                          <td width="292">Resolution</td>
                          <td width="559">1920 x 1080 Pixel</td>
                        </tr>
                        <tr>
                          <td>Screen Type</td>
                          <td>FHD&nbsp;BrightView&nbsp;LED Backlit Display with Multi-touch</td>
                        </tr>
                      </tbody>
       </table>
					
					
                  <br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">GRAPHICS</span></th>
                        </tr>
                        <tr>
                          <td width="294">Dedicated Graphics Memory Type</td>
                          <td width="557">DDR3</td>
                        </tr>
						<tr>
                          <td width="294">Dedicated Graphics Memory Capacity</td>
                          <td width="557">2 GB</td>
                        </tr>
						<tr>
                          <td width="294">Graphic Processor</td>
                          <td width="557">NVIDIA GeForce GT 740M</td>
                        </tr>
						                       
                      </tbody>
       </table>
					
					
					
                   <br /><br />
                    <table width="873" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">INPUT</span></th>
                        </tr>
                        <tr>
                          <td width="293">Web Camera</td>
                          <td width="559">HP&nbsp;TrueVision&nbsp;HD Webcam</td>
                        </tr>
                        <tr>
                          <td>Pointer Device</td>
                          <td>HP&nbsp;Imagepad&nbsp;Supporting Multi-touch Gesture Support</td>
                        </tr>
                        <tr>
                          <td>Keyboard</td>
                          <td>Island Keyboard with Numeric Keypad</td>
                        </tr>
                      </tbody>
       </table>
	   
	     <br /><br />
                    <table width="875" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">AUDIO</span></th>
					    </tr>
                        <tr>
                          <td width="291">Speakers</td>
                          <td width="563">Beats Audio Speakers</td>
                        </tr>
                        <tr>
                          <td>Internal Mic</td>
                          <td>Dual Digital Microphone </td>
                        </tr>
						<tr>
                          <td>Sound</td>
                          <td>HD Audio, Speaker Bar, Quad Speakers with Two Internal Subwoofer</td>
                        </tr> 
						              
                      </tbody>
       </table>
					
					
					
                  <br /><br />
                    <table width="875" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">COMMUNICATION</span></th>
					    </tr>
						<tr>
                          <td width="291">Ethernet</td>
                          <td width="563">10/100/1000 GigabitLAN </td>
                        </tr>
                        <tr>
                          <td width="291">Wireless LAN</td>
                          <td width="563">IEEE 802.11b/g/n</td>
                        </tr>
                        <tr>
                          <td>Bluetooth</td>
                          <td>v4.0 </td>
                        </tr>
                      </tbody>
       </table>
	   
	     <br /><br />
                    <table width="875" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">POWER</span></th>
					    </tr>
                        <tr>
                          <td width="292">Battery Backup</td>
                          <td width="562">Upto 3 hours</td>
                        </tr>
                        </tr>
                        <tr>
                          <td>Power Supply</td>
                          <td>65 W AC Adapter</td>
                        </tr>
                        <tr>
                          <td>Battery Cell</td>
                          <td>6 cell</td>
                        </tr>
                                   
                       
                        
                      </tbody>
       </table>
					
					 <br /><br />
                    <table width="875" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">PORTS/SLOTS</span></th>
					    </tr>
						<tr>
                          <td width="295">USB Port</td>
                          <td width="559">4 x USB 3.0</td>
                        </tr>
                         <tr>
                          <td width="295">Mic In</td>
                          <td width="559">Yes</td>
                        </tr> 
                        <tr>
                          <td width="295">RJ45 LAN</td>
                          <td width="559">Yes</td>
                        </tr>
						<tr>
                          <td width="295">VGA Port</td>
                          <td width="559">Yes</td>
                        </tr>
                        <tr>
                          <td>HDMI Port</td>
                          <td>Yes, HDMI Port with HDCP Support</td>
                        </tr>
						<tr>
                          <td>Multi Card Slot</td>
                          <td>Yes</td>
                        </tr>                    
                        
                      </tbody>
       </table>
					
					 <br /><br />
                    <table width="875" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">MACHINE DIMENSIONS</span></th>
					    </tr>
                        <tr>
                          <td width="292">Dimension</td>
                          <td width="562">303.27 x 250.69 x 29.97 mm</td>
                        </tr>
						<tr>
                          <td width="292">Weight</td>
                          <td width="562">2.56 kg</td>
                        </tr>
                      </tbody>
       </table>
	   
	   <br /><br />
                    <table width="875" cellspacing="5">
                      <tbody>
                        <tr>
                         <th colspan="2" align="justify"><span class="style13">SECURITY</span></th>
                        </tr>
                        <tr>
                          <td width="291">Lock Port</td>
                          <td width="563"> Kensington Lock Slot</td>
                        </tr>
						<tr>
                          <td width="291">Fingerprint Sensor</td>
                          <td width="563">Yes</td>
                        </tr>
					  </tbody>
       </table>
                  <br /><br />
                   <table width="875" cellspacing="5">
                      <tbody>
                        <tr>
                         <th colspan="2" align="justify"><span class="style13">WARRANTY</span></th>
                        </tr>
                        <tr>
                          <td width="291">Warranty Summary</td>
                          <td width="563">1 Year Accidental Damage Protection (ADP)</td>
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