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
		  $_SESSION['pname']=$pn;
		  if($pn!="HP CQ20001L")
		  header("Location: http://localhost/OBDM/DMENU/HP.php");
		  
	?>
    <style type="text/css">
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
			<a href="#" title="Home">Home</a> / <a href="#" title="Sony">HP</a> / <a href="#" title="Sony Xperia E">HpCompaq</a><br />
			<br /><br />
			<img id="Main" src="../css/images/desktop/HP-Compaq-Presario-CQ2000IL.jpg" height="380" width="350" align="left"/>
		  <div class="effect2"> <span class="style10"><u>HP Compaq Presario CQ2000IL</u></span><br/>
					<br /><br/><br />
					<p>
					
				<strong>1 Year HP Warranty and Free Transit Insurance. </strong><br />  
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
					   <font class="style10">	 Rs.</font>
					    <input type="text" name="uname2" value="<?php echo $cn;?>" title="your price" class="style10"  />
					    <br />
					    <br />	<br />				
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
						
						
			  &nbsp;&nbsp;<img src="../css/images/desktop/HP-Compaq-Presario-CQ2000IL.JPG" height="120" width="120" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;
			  <img src="../css/images/desktop/HP-Compaq-Presario-CQ2000IL_a.jpg" height="120" width="120" onmousemove="showT(src)" />
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
      <span class="style12">Specifications of HP Compaq Presario CQ2000IL</span></div>
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
                          <td>Compaq Presario CQ2000IL</td>
                        </tr>
                        <tr>
                          <td>Series</td>
                          <td>Compaq</td>
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
                          <td>Intel Atom 230 </td>
                        </tr>
                        <tr>
                          <td>Chipset</td>
                          <td>Intel 945GC Chipset</td>
                        </tr>
                        <tr>
                          <td height="17">Processor Brand</td>
                          <td>Intel</td>
                        </tr>
                        <tr>
                          <td>Processor Speed</td>
                          <td>1600</td>
                        </tr>
                        <tr>
                          <td>Operating System</td>
                          <td>Linux</td>
                        </tr>
                        <tr>
                          <td>Processor Model</td>
                          <td> Presario CQ2000IL</td>
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
                          <td width="556">1 GB </td>
                        </tr>
                        <tr>
                          <td>Memory Detail</td>
                          <td> 1 GB-DDR2 </td>
                        </tr>
                         <tr>
                          <td>Memory Slots</td>
                          <td> SO-DIMM</td>
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
                          <td>LED Display</td>
                        </tr>
						
						<tr>
                          <td>Touchscreen Support </td>
                          <td>No</td>
                        </tr>
                        <tr>
                          <td>Other Display Features</td>
                          <td>Anti-glare Display</td>
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
                          <td width="557"> Intel GMA 950</td>
                        </tr>
						<tr>
						<td>Graphic Card Type </td>
						<td>Integrated </td>
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
                          <td width="558">1.3 megapixel</td>
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
                          <td width="559">160</td>
                        </tr>
						<tr>
						<td>Storage Interface</td>
						<td>SATA II </td>
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
                          <td width="557">Intel GMA 950 </td>
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
                          <td width="559">22X DVDRW</td>
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
                          <td width="557">4 Hi-Speed USB 2.0 ports </td>
                        </tr>
						 <tr>
                          <td>eSATA</td>
                          <td>YES</td>
                        </tr>
                        <tr>
                          <td>HDMI</td>
                          <td>YES</td>
                        </tr>
                        <tr>
                          <td>Memory Card Reader</td>
                          <td>4-in-1 card Reader</td>
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
                          <td> 	1000 BASE-TX/100BASE-TX/10BASE-T x 1</td>
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
                          <td width="557"> Optical mouse</td>
                        </tr>
                        </tr>
                        <tr>
                          <td>Keyboard</td>
                          <td>Compaq PS2 KB</td>
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
                          <td width="563">1 Year  Warranty.</td>
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