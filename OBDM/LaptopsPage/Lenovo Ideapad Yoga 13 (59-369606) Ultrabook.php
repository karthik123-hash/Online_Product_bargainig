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
		  if($pn!="Lenovo Ideapad Yoga 13 (59-369606) Ultrabook")
		 header("Location: http://localhost/OBDM/LMENU/Lenovo.php");
		  
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../LMENU/Lenovo.php" title="Dell">Lenovo</a> / <a href="../LaptopsPage/Lenovo Ideapad Yoga 13 (59-369606) Ultrabook.php" title="Dell">Lenovo&nbsp;Ideapad&nbsp;Yoga 13 (59-369606)&nbsp;Ultrabook</a><br />
			<br /><br />
					<img id="Main" src="../css/images/laptop/len7_2.jpg" height="280" width="300" align="left"/>
					
		  <div class="effect2"> <span class="style10"><u> Lenovo&nbsp;Ideapad&nbsp;Yoga 13 (59-369606)&nbsp;Ultrabook</u></span><br/>
					<br /><br/><br />
					<p>
					
				<strong>1 Year Warranty Lenovo India Warranty and Free Transit Insurance.</strong>
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
			  &nbsp;&nbsp;<img src="../css/images/laptop/len7_1.jpg" height="180" width="200" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;
                     <img src="../css/images/laptop/len7_3.jpg" height="180" width="200" onmousemove="showT(src)" />
					 &nbsp;&nbsp;&nbsp;
                     <img src="../css/images/laptop/len7_4.jpg" height="180" width="200" onmousemove="showT(src)" />
					 &nbsp;&nbsp;&nbsp;
                     <img src="../css/images/laptop/len7_5.jpg" height="150" width="190" onmousemove="showT(src)" />
														 
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
      <h2>Specifications of LENOVO IDEAPAD YOGA 13 (59-369606) ULTRABOOK&nbsp;(Razor Grey)</h2>
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
                          <td width="549">Lenovo</td>
                        </tr>
						<tr>
                          <td width="295">Series</td>
                          <td width="549">Yoga 13 </td>
                        </tr>
                        <tr>
                          <td>Lifestyle</td>
                          <td>Everyday Use </td>
                        </tr>
                        <tr>
                          <td>Color</td>
                          <td>Razor Grey </td>
                        </tr>
                        <tr>
                          <td>Part Number</td>
                          <td>59-369606</td>
                        </tr>
                        <tr>
                          <td>Model ID</td>
                          <td>Yoga 13/59-369606</td>
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
                          <td width="551">Core i3 (2nd Generation)</td>
                        </tr>
                        <tr>
                          <td>Variant</td>
                          <td>3537U</td>
                        </tr>
                        <tr>
                          <td>Brand</td>
                          <td>Intel</td>
                        </tr>
                        <tr>
                          <td>Clock Speed</td>
                          <td>2 GHz with Turbo Boost&nbsp;Upto&nbsp;3.1 GHz</td>
                        </tr>
						<tr>
                          <td>Cache</td>
                          <td>4 MB</td>
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
                          <td width="552">1 (Unused Slot - 0)</td>
                        </tr>
                        <tr>
                          <td>System Memory</td>
                          <td>8 GB DDR3</td>
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
                          <td>256 GB SSD</td>
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
                          <td width="554">Windows 8 </td>
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
                          <td width="554">13.3 inch</td>
                        </tr>
						<tr>
                          <td width="297">Resolution</td>
                          <td width="554">1600 x 900 Pixel</td>
                        </tr>
                        <tr>
                          <td>Screen Type</td>
                          <td>HD Plus IPS Display with 360 Degree Foldable and 10 Point Multi-touch Display</td>
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
                          <td width="554">Intel HD Graphics 4000</td>
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
                          <td width="555">0.3 Megapixel 720p HD Webcam</td>
                        </tr>
                        <tr>
                          <td>Pointer Device</td>
                          <td>Touchpad</td>
                        </tr>
                        <tr>
                          <td>Keyboard</td>
                          <td>AccuType&nbsp;Keyboard</td>
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
                          <td width="556">Built-in Speakers</td>
                        </tr>
                        <tr>
                          <td>Sound</td>
                          <td>2 x 1 W Speakers, Stereo Speakers</td>
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
                          <td width="557">Upto 6 hours</td>
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
                          <td width="557">1 x USB 2.0, 1 x USB 3.0</td>
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
                          <td>Yes</td>
                        </tr>
						<tr>
                          <td>Multi Card Slot</td>
                          <td>3-in-1 Card Reader</td>
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
                          <td width="557">333.4 x 224.8 x 16.9 mm</td>
                        </tr>
						<tr>
                          <td width="297">Weight</td>
                          <td width="557">1.54 kg</td>
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
                          <td width="557">1 Year Onsite and Accidental Damage Protection (ADP)</td>
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