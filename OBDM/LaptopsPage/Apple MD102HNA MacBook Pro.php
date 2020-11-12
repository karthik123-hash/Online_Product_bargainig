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
		  if($pn!="Apple MD102HN/A MacBook Pro")
		  header("Location: http://localhost/OBDM/LMENU/Apple.php");
		  
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../LMENU/Apple.php" title="Acer">Apple</a> / <a href="../LaptopsPage/Apple MD102HN/A MacBook Pro.php" title="Acer Aspire E1-571G-BT Laptop(Black)">Apple MD102HN/A MacBook Pro(Silver)</a><br />
			<br /><br />
					<img id="Main" src="../css/images/laptop/apl6_1.jpeg" height="280" width="300" align="left"/>
					
		  <div class="effect2"> <span class="style10"><u>Apple MD102HN/A MacBook Pro (Silver)</u></span>
			<br/>
					<br /><br/><br />
					<p>
					
				<strong>1 Year Warranty Apple India Warranty and Free Transit Insurance.</strong>
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
			  &nbsp;&nbsp;<img src="../css/images/laptop/apl6_2.jpeg" height="100" width="280" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;
			  &nbsp;&nbsp;<img src="../css/images/laptop/apl6_1.jpeg" height="100" width="280" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;
                    
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
			      <h2>Specifications of APPLE MD102HN/A MACBOOK PRO  (Silver)</h2>
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
		                  <th colspan="2" align="justify"><span class="style13">IN THE BOX</span></th>
	                    </tr>
                        <tr>
                          <td width="295">Sales Package</td>
                          <td width="549">MacBook Pro, Power Adapter, AC Wall Plug, Power Cord</td>
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
                          <td width="549">Apple</td>
                        </tr>
                        <tr>
                          <td>Model Name</td>
                          <td>MacBook Pro </td>
                        </tr>
                        <tr>
                          <td>Series</td>
                          <td>Mac</td>
                        </tr>
                       <tr>
                          <td>Color</td>
                          <td>Silver</td>
                        </tr>
                        <tr>
                          <td>Part Number</td>
                          <td>MC102HN/A</td>
                        </tr>
                        <tr>
                          <td>Model ID</td>
                          <td>MD102HN/A</td>
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
                          <td width="551">Core i7 (3rd Generation)</td>
                        </tr>
                        <tr>
                          <td>Brand</td>
                          <td>Intel</td>
                        </tr>
                        <tr>
                          <td>Clock Speed</td>
                          <td>2.9 GHz with Turbo Boost Technology&nbsp;Upto&nbsp;3.6 GHz</td>
                        </tr>
						
                      </tbody>
       </table>
					
					
					<br /><br />
                    <table width="870" cellspacing="5">
                      <tbody>
					  <tr>
                          <th colspan="2" align="justify"><span class="style13">MEMORY</span></th>
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
                          <td width="292">HDD Capacity</td>
                          <td width="558">750 GB</td>
                        </tr>
						<tr>
                          <td width="292">RPM</td>
                          <td width="558">5400</td>
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
                          <td width="558">Mac OS X Mountain Lion</td>
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
                          <td width="559">13 inch</td>
                        </tr>
                        <tr>
                          <td>Screen Type</td>
                          <td>Retina Display</td>
                        </tr>
						<tr>
                          <td>Resolution</td>
                          <td>2560 * 1600   pixel</td>
                        </tr>
                      </tbody>
       </table>
					
					
                  <br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">GRAPHICS</span></th>
                        </tr>
                        
                      <td width="296">Graphic Processor</td>
                          <td width="555">Intel HD Graphics 4000</td>
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
                          <td width="559">720p FaceTime HD camera</td>
						  </tr>
						  <tr>
                          <td width="293">Pointer Device</td>
                          <td width="559">Multi-touch Trackpad</td>
						  </tr>
						   <tr>
                          <td width="293">Keyboard</td>
                          <td width="559">Full-size Backlit Keyboard</td>
						  </tr>
                      </tbody>
       </table>
					
					<br /><br />
                    <table width="873" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">AUDIO</span></th>
                        </tr>
                        <tr>
                          <td width="293">Speakers</td>
                          <td width="559">Yes</td>
						  </tr>
						  <tr>
                          <td width="293">Internal Mic</td>
                          <td width="559">Omnidirectional Microphone</td>
						  </tr>
						  <tr>
                          <td width="293">Sound</td>
                          <td width="559">Stereo Speakers with Subwoofer</td>
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
                          <td width="292">Ethernet</td>
                          <td width="562"> Gigabit Ethernet</td>
                        </tr>
                        </tr>
                        <tr>
                          <td>Wireless LAN</td>
                          <td>IEEE 802.11a/b/g</td>
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
                          <td width="292">Battery Backup</td>
                          <td width="562">Upto 7 hours</td>
                        </tr>
                        </tr>
                        <tr>
                          <td>Power Supply</td>
                          <td>60W MagSafe Power Adapter</td>
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
                          <td width="292">USB Port</td>
                          <td width="562">2 x USB 3.0</td>
                        </tr>
						<tr>
                          <td width="292">Firewire&nbsp;Port</td>
                          <td width="562">Yes</td>
                        </tr>
						<tr>
                          <td width="292">Multi Card Slot</td>
                          <td width="562">Yes</td>
                        </tr>
						<tr>
                          <td width="292">Other Ports</td>
                          <td width="562">1 x Headphone Port, 1 x Thunderbolt Port</td>
                        </tr>
                      </tbody>
       </table>
	   
	   <br /><br />
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">MACHINE DIMENSIONS</span></th>
                        </tr>
                        <tr>
                          <td width="292">Weight</td>
                          <td width="559">2.06 kg</td>
                        </tr>
                        <tr>
                          <td>Dimension</td>
                          <td>325 * 227 * 24.1  mm</td>
                        </tr>
						<tr>
                          <td>Color</td>
                          <td>Silver</td>
                        </tr>
                      </tbody>
       </table>
	            <br /><br />
                    <table width="875" cellspacing="5">
                      <tbody>
                        <tr>
                         <th colspan="2" align="justify"><span class="style13">Security</span></th>
                        </tr>
                        <tr>
                          <td width="291">Lock Port</td>
                          <td width="563">Kensington Lock Slot</td>
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
                          <td width="563">1 Year International Carry In Warranty</td>
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