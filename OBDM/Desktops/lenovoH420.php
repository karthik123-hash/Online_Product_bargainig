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
		  if($pn!="Lenovo H420")
		  header("Location: http://localhost/OBDM/DMENU/Lenovo.php");
		  
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
			<a href="#" title="Home">Home</a> / <a href="#" title="Sony">Lenovo</a> / <a href="#" title="Sony Xperia E">Lenovo Essential</a> H420 <br />
			<br /><br />
			<img id="Main" src="../css/images/desktop/H420.jpg" height="380" width="350" align="left"/>
			<div class="effect2"> <span class="style10"><u>Lenovo Essential H420(57-304283) </u></span><br/>
					<br /><br/><br />
					<p>
					
				<strong>1 year manufacturer warranty </strong><br />  
				<br />
				<form id="myforms" name="myforms" action="../Calculate1.php" method="post" >	
			  <div id="log" >
				      <p><br />
			          <span class="style12"><strong>Our Price Inclusive of All Tax</strong></span><br />                      
				      <br />
                      <p><font class="style10">	 Rs.</font>
					   <input name="price" type="text" disabled="disabled" class="style10"  title="PRICE" value=" <?php echo $sp;?>"/>

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
						
			  &nbsp;&nbsp;<img src="../css/images/desktop/H420.jpg" height="120" width="120" onmousemove="showT(src)"/> &nbsp;&nbsp;&nbsp;
			  <img src="../css/images/desktop/H420_a.jpg" width="120" onmousemove="showT(src)" />
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
      <span class="style12">Specifications of Lenovo H420(57-304283) </span></div>
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
                          <td width="549">Lenovo</td>
                        </tr>
                        <tr>
                          <td>Model Name </td>
                          <td>H420</td>
                        </tr>
                        <tr>
                          <td>Series</td>
                          <td>57-304283</td>
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
                          <td width="551">3 MB</td>
                        </tr>
                        <tr>
                          <td>Processor Name</td>
                          <td> Intel Second Generation Core i3 2120 </td>
                        </tr>
						 <tr>
                          <td>Chipset</td>
                          <td>H55</td>
                        </tr>
                        <tr>
                          <td height="17">Processor Brand</td>
                          <td>Intel</td>
                        </tr>
						<tr>
                          <td>Processor Frequency</td>
                          <td> 	3.3 GHz </td>
                        </tr>
                        <tr>
                          <td>Operating System</td>
                          <td>DOS </td>
                        </tr>
						
                      </tbody>
       </table>
					
					
					<br /><br />
					<table width="871" cellspacing="5">
                      <tbody>
                        <tr>
                          <th colspan="2" align="justify"><span class="style13">Memory</span></th>
                        </tr>
                        
                        <tr>
                          <td width="296">System Memory</td>
                          <td width="554"> 	2 GB </td>
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
                          <td>Display Type </td>
                          <td> LCD </td>
                       
                      </tbody>
       </table>
					<br /><br />					
                    <table width="872" cellspacing="5">
                      <tbody>
                        <tr>
                           <th colspan="2" align="justify"><span class="style13">Graphics</span></th>
                        </tr>
                        
                        <tr>
                          <td width="294">Graphic Card Type</td>
                          <td width="557">Dedicated </td>
                        </tr>
						<tr>
                          <td width="294"> Audio Card </td>
                          <td width="557">Yes</td>
                        </tr>
						<tr>
                          <td width="294"> Graphic Memory RAM</td>
                          <td width="557">Integrated Memory</td>
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
                          <td width="559">500 GB</td>
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
                          <td width="559">DVD + RW drive</td>
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
                          <td width="557"> 6 x USB 2.0, 1 x USB 3.0</td>
                        </tr>
                        </tr>
                        <tr>
                          <td>Network interface </td>
                          <td> 	Yes</td>
                        </tr>
						 <tr>
                          <td>HDMI</td>
                          <td> 	Yes</td>
                        </tr>
						 <tr>
                          <td>Memory Card Reader</td>
                          <td>6-in-1 card Reader</td>
                        </tr>
						 <tr>
                          <td>eSATA</td>
                          <td> 	Yes</td>
                        </tr>
                       
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
                          <td> 	 	10/100/1000M</td>
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
                          <td width="557"> 	Wired  Mouse</td>
                        </tr>
                        </tr>
                        <tr>
                          <td>Keyboard</td>
                          <td>Wired Keyboard</td>
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
                          <td width="291">Warranty </td>
                          <td width="563">1 Year Warranty </td>
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