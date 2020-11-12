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
		  if($pn!="HP Brazo 18")
		  header("Location: http://localhost/OBDM/DMENU/HP.php");
		  
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../DMENU/HP.php" title="HP">HP</a> / <a href="#" title="HP-BRAZO">Hpbrazo</a><br />
			<br /><br />
			<img id="Main" src="../css/images/desktop/HP-Brazo-18-1101.jpg" height="380" width="350" align="left"/>
		  <div class="effect2"> <span class="style10"><u>HP Brazo 18-1101IX All-in-One</u></span><br/>
					<br /><br/><br />
					<p>
					
				<strong>3 Year HP Warranty and Free Transit Insurance. </strong><br />  
				<br />
				<form id="myforms" name="myforms" action="../Calculate1.php" method="post" >
			  <div id="log" >
				      <p><br />
			          <span class="style12"><strong>Our Price Inclusive of All Tax</strong></span><br />                      
				      <br />
                      <p><font class="style10">	 Rs.</font>
					 <input name="price" type="text" disabled="disabled" class="style10"  title="PRICE" value=" <?php echo $cn;?>"/>

					  </p>
				      <br />
					  <span class="style12"><strong>Set Your Price To Bargain</strong></span><br />
			            <br /></div>
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
						 <input class="buy-button" type="submit" value=" Buy Now " />
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
						
						
			  &nbsp;&nbsp;<img src="../css/images/desktop/HP-Brazo-18-1101.jpg" height="120" width="120" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;
			  <img src="../css/images/desktop/HP-Brazo-18-1101_a.jpg" height="120" width="120" onmousemove="showT(src)" />
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
      <span class="style12">Specifications of HP Brazo 18-1101IX</span></div>
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
                          <td width="295">Brand</td>
                          <td width="549">HP</td>
                        </tr>
                        <tr>
                          <td>Model Name </td>
                          <td>18-1101ix</td>
                        </tr>
                        <tr>
                          <td>Series</td>
                          <td>18 Series</td>
                        </tr>  
						<tr>
						<td>Part Number</td>
						<td>H4J17AA</td>
						</tr>                                                
                                              
                      </tbody>
       </table>
					
					
		            <br /><br />
		            <table width="865" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">System features</span></th>
                        </tr>
                        <tr>
                          <td width="293">Cache Memory </td>
                          <td width="551">1 MB</td>
                        </tr>
                        <tr>
                          <td height="17">Processor Name</td>
                          <td>APU Dual Core </td>
                        </tr>
                        <tr>
                          <td>Chipset</td>
                          <td>A75</td>
                        </tr>
                        <tr>
                          <td height="17">Processor Brand</td>
                          <td>AMD</td>
                        </tr>
                        <tr>
                          <td>Processor Frequency </td>
                          <td>1.4GHz</td>
                        </tr>
                        <tr>
                          <td>Operating System</td>
                          <td>Ubuntu</td>
                        </tr>
                        <tr>
                          <td>Processor Model</td>
                          <td> E1-1200 </td>
                        </tr>
                      </tbody>
                    </table>
		            <br />
		            <br />
					<table width="871" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Memory</span></th>
                        </tr>
                        <tr>
                          <td width="294"> System Memory</td>
                          <td width="556">2 GB DDR3 </td>
                        </tr>
                        <tr>
                          <td>Memory Detail</td>
                          <td>2 GB x 1 </td>
                        </tr>
                         <tr>
                          <td>Memory Slots</td>
                          <td>2 x DDR3 SO-DIMM slots</td>
                        </tr>
                         <tr>
                          <td>Memory Speed</td>
                          <td>1066 MT/s</td>
                        </tr>
						 <tr>
                          <td>Expandable Memory</td>
                          <td> 	Upto 8 GB</td>
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
                          <td width="294">Display Size</td>
                          <td width="555">18.5 Inches</td>
                        </tr>
                        <tr>
                          <td>HD</td>
                          <td>Yes</td>
                        </tr>
                        <tr>
                          <td>Display Type </td>
                          <td>HD LED Display</td>
                        </tr>
						
						<tr>
                          <td>Display Resolution </td>
                          <td>1366 x 768 Pixel</td>
                        </tr>
                        <tr>
                          <td>Other Display Features</td>
                          <td>Anti-glare Display,Widescreen, Brightness: 200 nits, Aspect Ratio: 16:9</td>
                        </tr>
                      </tbody>
       </table>
					
					
					<br /><br />
                    
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Graphics</span></th>
                        </tr>
                        <tr>
                          <td width="294">Integrated Graphic Processor</td>
                          <td width="557"> AMD Radeon HD 7310 Graphics</td>
                        </tr>
						<tr>
						<td>Graphic Card Type </td>
						<td>Integrated</td>
						</tr>
                      </tbody>
       </table>
                    
					
					<br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">WebCam</span></th>
                        </tr>
                        <tr>
                          <td width="293">Sensor Resolution</td>
                          <td width="558">HD Webcam megapixel</td>
                        </tr>
						<tr>
                          <td>Video Size</td>
                          <td>1280 x 720 Pixel</td>
                        </tr>
                        <tr>
                          <td>Built-in WebCam</td>
                          <td>Yes</td>
                        </tr>
                        
                      </tbody>
       </table>
					
					
                   <br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Storage</span></th>
                        </tr>
                        <tr>
                          <td width="292">hard Drive</td>
                          <td width="559">500 GB </td>
                        </tr>
						<tr>
						<td>Storage Interface</td>
						<td>SATA II </td>
						</tr>	
						<tr>
						<td>Reading speed</td>
						<td>7200 RPM </td>
						</tr>						
                                               
                      </tbody>
       </table>
					
					
                  <br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Audio</span></th>
                        </tr>
                        <tr>
                          <td width="294">Other Audio Features</td>
                          <td width="557">Integrated Stereo Speakers </td>
                        </tr>
						<tr>
						<td>Built-in Microphone</td>
						<td>Yes</td>
						</tr>                                                
                      </tbody>
       </table>
					
					
					
                   <br /><br />
                    <table width="873" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Optical Drive</span></th>
                        </tr>
                        <tr>
                          <td width="293">Drive Type </td>
                          <td width="559">Slim Tray SuperMulti DVD Writer</td>
                        </tr>
						<tr>                 
                            <td> Maximum Read speed</td>
							<td> DVD: DVD-ROM (SL)-8x, DVD-ROM (DL)-6x, DVD+RW (SL)-8x, DVD-RW (SL)-6x, DVD-RAM-5x, CD: CD-ROM-24x, CD-R-24x, CD-RW-24x                            </td>
							</tr>
							<tr>
							 <td>Maximum Write speed</td>
							  <td>DVD: DVD-R (SL)-8x, DVD-R (DL)-6x, DVD-RW (SL)-6x, DVD-RAM-5x, CD: CD-RW-24x  </td>
							</tr>        
                      </tbody>
       </table>
					
					 <br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Power</span></th>
                        </tr>
                        <tr>
                          <td width="294">Power Input</td>
                          <td width="557">  	100 - 240 V</td>
                        </tr>
						<tr>
						<td>Power Consumption</td>
						<td>150 W</td>
						</tr>                                                
                      </tbody>
       </table>
	   
					
                  <br /><br />
                    <table width="875" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Connectivity</span></th>
					    </tr>
                        <tr>
                          <td width="297">USB</td>
                          <td width="557">USB 3.0 x 2 (Side), USB 2.0 x 4 (Rear) </td>
                        </tr>
						<tr>
						<td>Memory Stick Slot</td>
						<td>xD Picture Card, Memory Stick, Secure Digital High Capacity (SDHC), Memory Stick Pro, Multimedia Card, Secure Digital (SD)</td>
						</tr>
						 <tr>
                          <td>Headphone Jack</td>
                          <td>YES</td>
                        </tr>
                        <tr>
                          <td>Microphone Jack</td>
                          <td>YES</td>
                        </tr>
                        <tr>
                          <td>Memory Card Reader</td>
                          <td>6-in-1 card Reader</td>
                        </tr>
						<tr>
						
                      </tbody>
       </table>
					
					
					<br /><br />
                    <table width="875" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Network</span></th>
					    </tr>
                        <tr>
                          <td width="297">Wireless</td>
                          <td width="557"> 	IEEE 802.11b/g/n</td>
                        </tr>
                        </tr>
                        <tr>
                          <td>Ethernet</td>
                          <td>10/100 LAN</td>
                        </tr>
                        
                      </tbody>
       </table>
	   <br /><br />
                    <table width="875" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Input Devices</span></th>
					    </tr>
                        <tr>
                          <td width="297">Mouse</td>
                          <td width="557"> Wired mouse  </td>
                        </tr>
                        </tr>
                        <tr>
                          <td>Keyboard</td>
                          <td>Wired Keyboard </td>
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
                          <td width="291">Warranty Summary</td>
                          <td width="563">3 year onsite  Warranty.</td>
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
       
	   <!-- End Wrapper -->
</body>
</html>