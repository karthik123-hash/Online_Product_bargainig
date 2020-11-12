<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>PC-Store  A BarGaining WorlD</title>
	
	
	<link rel="shortcut icon" href="../css/images/favicon.ico" />
	<link rel="stylesheet" href="../css/Mobpage.css" type="text/css" media="all" />
	<?php 
		 //error_reporting(E_ALL ^ E_NOTICE);     //      To erase the Notice because the variables below first used in this scope
	      session_start(); 
		  $cdate=date("Y-m-d");
		  $pname=$_SESSION['pname1'];
		  $flag=$_SESSION['logged']; //to check logged or not
		  $lname=$_SESSION['logname'];  // his name to display
		  $comp=$_SESSION['comp'];
		  $fprice=$_SESSION['uprice']
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
		if($flag=="yes"&& $comp="true")
		{ 
		echo "<input type='text' value='logged in as $lname'  class='blink' disabled='disabled'/><a href='../Main/logout.php'>logout</a>";
		}
		else
		{
		header("Location:http://localhost/OBDM/Main/login.php");
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

	<?php
	
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
	die('Could not connect:' .mysql_error());
	}
	mysql_select_db("pcstore",$con);
	$result=mysql_query("SELECT * FROM register where UName='$lname'");
	  while($row = mysql_fetch_array($result))
		{
		$Email=$row['Email'];
		
		$Phone=$row['Phone'];
		}

	?>
	  
				
		
		  <p><br />
		    
		    
<span class="style12"><font><center></center></span>
<span class="style12"><font><center>PC STORE</center></span> <br />
<span class="style12"><font><center>Inland Arcade</center></span> <br />
<span class="style12"><center>Bejai Post</center> </span><br />
<span class="style12"><center>Mangalore - 575004 </center></span></p>
		  
	
				    <br />
				    <br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
			
					<!-- Begin Content -->
					<!-- End Content -->
					<!-- Begin Right Sidebar -->
	 <div class="effect3">
			        <table  width="965" cellspacing="20">
		              <tbody>
                         <tr>
      <th width="300" align="left">Customer Name : <?php echo $lname ?> </th>
      <th width="100" align="left">Company Phone &nbsp;
	  : 0824-25556662,25556663</th>
    </tr>
    <tr >
      <th width="300"  align="left">Email Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  : <?php echo $Email ?> </th>
	  <th width="100" align="left">Company email &nbsp;&nbsp;
	  : pcstore@gmail.com</th>
    </tr>
    <tr>
      <th width="300" align="left">Phone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  : <?php echo $Phone ?> </th>
    </tr>
    
	                  </tbody>
       </table>
				
					
		          
                    <p>&nbsp;</p>
					
					
					
					<?php
	
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
	die('Could not connect:' .mysql_error());
	}
	mysql_select_db("pcstore",$con);
	$result1=mysql_query("SELECT * FROM orders where UName='$lname' and PName='$pname' and Date='$cdate' and Price='$fprice'");
	if(mysql_num_rows($result1)>=2) 
	{
		while($row1 = mysql_fetch_array($result1))
		{
		$qty=$row1['Qty'];
		$add=$row1['Address'];
		$city=$row1['City'];
		$state=$row1['State'];
		$pin=$row1['PIN'];
		$tot=$row1['TOTAL'];
		}
	}
	else
	{
	  while($row1 = mysql_fetch_array($result1))
		{
		$qty=$row1['Qty'];
		$add=$row1['Address'];
		$city=$row1['City'];
		$state=$row1['State'];
		$pin=$row1['PIN'];
		$tot=$row1['TOTAL'];
		}
	}

	?>
					
	
			<hr size="3%" width="90%"/>	<br />
			  <table width="1065" cellspacing="20">
			  <tr>
			  <th><u>Product Name</th>
			  <th><u>Quantity</th>
			  <th><u>Date of Purchase</th>
			  <th><u>Amount Payable</th>
			  <th><u>Delivery Address</th>
              </tr>
			  <tr>
			  <th> <?php echo $pname ?> </th>
			  <th> <?php echo $qty ?> </th>
			  <th> <?php echo $cdate ?> </th>
			  <th> <?php echo $tot ?> </th>
			  <th> <?php echo " $add, $city, $state-$pin"; ?> </th>
              </tr>
			  </table>
			<br /><br /><br />	<br /><br />	<br /><br />	
			</div>
			</div>
			</div>
			</div>
	
	<!-- Begin Footer -->
		<div class="cl">&nbsp;</div>
		<div id="footer">
			<div class="shell">
				<p class="bottom-menu"> 
				<a href="../Main/Main.php" title="Home"> Home </a> 
				<span>|</span> 
				<a href="register.php" title="Sign Up">Sign Up</a>
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
	 <?php  mysql_close($con); ?>
</body>
</html>