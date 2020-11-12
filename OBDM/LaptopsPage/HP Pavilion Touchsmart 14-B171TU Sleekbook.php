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
		  if($pn!="HP Pavilion Touchsmart 14-B171TU Sleekbook")
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../LMENU/HP.php" title="HP">HP</a> / <a href="../LaptopsPage/HP Pavilion Touchsmart 14-B171TU Sleekbook.php" title="HP">HP Pavilion&nbsp;Touchsmart&nbsp;14-B171TU&nbsp;Sleekbook</a><br />
			<br /><br />
					<img id="Main" src="../css/images/laptop/hp20_1.jpg" height="280" width="300" align="left"/>
					
		  <div class="effect2"> <span class="style10"><u> HP Pavilion&nbsp;Touchsmart&nbsp;14-B171TU&nbsp;Sleekbook</u></span><br/>
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
			  &nbsp;&nbsp;<img src="../css/images/laptop/hp20_2.jpg" height="200" width="130" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;
                     <img src="css/images/laptop/hp20_3.jpg" height="200" width="200" onmousemove="showT(src)" />
					  &nbsp;&nbsp;&nbsp;
                     <img src="css/images/laptop/hp20_4.jpg" height="150" width="200" onmousemove="showT(src)" />
									 
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
      <h2>Specifications of HP PAVILION TOUCHSMART 14-B171TU SLEEKBOOK&nbsp;(Imprint Sparkling Black)</h2>
      </strong></div>
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
                          <td width="549">Pavilion</td>
                        </tr>
                        <tr>
                          <td>Lifestyle</td>
                          <td>Everyday Use </td>
                        </tr>
                        <tr>
                          <td>Color</td>
                          <td>Imprint Sparkling Black</td>
                        </tr>
                        <tr>
                          <td>Part Number</td>
                          <td>D9H68PA</td>
                        </tr>
                        <tr>
                          <td>Model ID</td>
                          <td>14-B171TU</td>
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
                          <td width="551">Pentium Dual Core (2nd Generation)</td>
                        </tr>
                        <tr>
                          <td>Variant</td>
                          <td>987</td>
                        </tr>
                        <tr>
                          <td>Brand</td>
                          <td>Intel</td>
                        </tr>
                        <tr>
                          <td>Clock Speed</td>
                          <td>1.5 GHz</td>
                        </tr>
						<tr>
                          <td>Cache</td>
                          <td>2 MB</td>
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
                          <td width="297">Expandable Memory</td>
                          <td width="552">Upto 8 GB</td>
                        </tr>
                        <tr>
                          <td width="297">Memory Slots</td>
                          <td width="552">2 (Unused Slot - 0)</td>
                        </tr>
                        <tr>
                          <td>System Memory</td>
                          <td>4 GB DDR3</td>
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
                          <td width="296">RPM</td>
                          <td width="554">5400</td>
                        </tr>
                        <tr>
                          <td>HDD Capacity</td>
                          <td>500 GB </td>
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
                          <td width="297">Optical Drive</td>
                          <td width="554">Not Available </td>
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
                          <td width="297">Operating System</td>
                          <td width="554">Windows 8</td>
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
                          <td width="297">Screen Size</td>
                          <td width="554">14 inch</td>
                        </tr>
						<tr>
                          <td width="297">Resolution</td>
                          <td width="554">1366 x 768 Pixel</td>
                        </tr>
                        <tr>
                          <td>Screen Type</td>
                          <td>HD&nbsp;BrightView&nbsp;LED Backlit Display with Multi-touch Enabled</td>
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
                          <td width="297">Graphic Processor</td>
                          <td width="554">Intel HD Graphics</td>
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
                          <td width="297">Web Camera</td>
                          <td width="555">HP&nbsp;TrueVision&nbsp;HD Webcam</td>
                        </tr>
                        <tr>
                          <td>Pointer Device</td>
                          <td>TouchPad&nbsp;with Multi-Touch Gesture Support (Pinch and Scroll)</td>
                        </tr>
                        <tr>
                          <td>Keyboard</td>
                          <td> Island Keyboard</td>
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
                          <td width="298">Speakers</td>
                          <td width="556">Altec&nbsp;Lansing Speakers</td>
                        </tr>
                        <tr>
                          <td>Internal Mic</td>
                          <td>Digital Microphone</td>
                        </tr> 
						<tr>
                          <td>Sound</td>
                          <td>HD Audio, Dolby Advanced Audio v2, Stereo Speakers</td>
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
                          <td width="298">Ethernet</td>
                          <td width="556">10/100</td>
                        </tr>
                        <tr>
                          <td width="298">Wireless LAN</td>
                          <td width="556">IEEE 802.11b/g/n</td>
                        </tr>
                        <tr>
                          <td>Bluetooth</td>
                          <td>v4.0</td>
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
                          <td width="297">Battery Backup</td>
                          <td width="557">Upto 3 hours</td>
                        </tr>
                        </tr>
                        <tr>
                          <td>Power Supply</td>
                          <td>65 W AC Adapter</td>
                        </tr>
                        <tr>
                          <td>Battery Cell</td>
                          <td>4 cell</td>
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
                          <td width="297">USB Port</td>
                          <td width="557">1 x USB 2.0, 2 x USB 3.0</td>
                        </tr>
                         <tr>
                          <td width="297">Mic In</td>
                          <td width="557">Yes</td>
                        </tr> 
                        <tr>
                          <td width="297">RJ45 LAN</td>
                          <td width="557">Yes</td>
                        </tr>
						<tr>
                          <td width="297">VGA Port</td>
                          <td width="557">Yes</td>
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
                         <th colspan="2" align="justify"><span class="style13">SECURITY</span></th>
                        </tr>
                        <tr>
                          <td width="297">Lock Port</td>
                          <td width="557">Kensington Lock Slot</td>
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
                          <td width="297">Dimension</td>
                          <td width="557">346.96 x 237.99 x 21.08 mm</td>
                        </tr>
						<tr>
                          <td width="297">Weight</td>
                          <td width="557">2 kg </td>
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
                          <td width="297">Warranty Summary</td>
                          <td width="557">1 Year Accidental Damage Protection (ADP)</td>
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