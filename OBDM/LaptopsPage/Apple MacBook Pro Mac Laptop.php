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
		  if($pn!="Apple MacBook Pro Mac")
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
			<a href="../Main/Main.php" title="Home">Home</a> / <a href="../LMENU/Apple.php" title="Apple">Apple</a> / <a href="../LaptopsPage/Apple MacBook Pro Mac Laptop.php" title="Acer Aspire E1-571G-BT Laptop(Black)">Apple MacBook Pro Mac Laptop(Silver)</a><br />
			<br /><br />
					<img id="Main" src="../css/images/laptop/apl4.jpeg" height="280" width="300" align="left"/>
					
		  <div class="effect2"> <span class="style10"><u>Apple MacBook Pro Mac Laptop (Silver)</u></span>
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
			  &nbsp;&nbsp;
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
		      </p><br />
	  </div>
			      <h2>Specifications of APPLE MACBOOK PRO MAC Laptop(Silver)</h2>
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
                          <td width="549">Magsafe&nbsp;2 Power Adapter</td>
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
                          <td>MC976HN/A</td>
                        </tr>
                        <tr>
                          <td>Model ID</td>
                          <td>MC976HN/A</td>
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
                          <td width="551">Intel Core i7 (2nd Generation)</td>
                        </tr>
                        <tr>
                          <td>Brand</td>
                          <td>Intel</td>
                        </tr>
                        <tr>
                          <td>Clock Speed</td>
                          <td>2.6 GHz</td>
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
                          <td width="558">512GB</td>
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
                          <td width="558">Mac OS X Lion</td>
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
                          <td width="559">15 inch</td>
                        </tr>
                        <tr>
                          <td>Screen Type</td>
                          <td>LED-backlit Glossy widescreen Display</td>
                        </tr>
						<tr>
                          <td>Resolution</td>
                          <td>1440 x 900 pixel</td>
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
                          <td width="559">Stereo speakers</td>
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
                          <td width="562">10/100/1000BASE-T Gigabit Ethernet</td>
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
                          <td>85W MagSafe 2 Power Adapter</td>
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
                          <td width="559">2.56 kg</td>
                        </tr>
                        <tr>
                          <td>Dimension</td>
                          <td>364 * 249 * 24 mm</td>
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
                         <th colspan="2" align="justify"><span class="style13">Warranty</span></th>
                        </tr>
                        <tr>
                          <td width="291">Warranty Summary</td>
                          <td width="563">1 Year Warranty</td>
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