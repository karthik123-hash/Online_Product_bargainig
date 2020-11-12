<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>PC-Store  A BarGaining WorlD</title>
	
	<link rel="shortcut icon" href="../css/images/favicon.ico"/>
	<link rel="stylesheet" href="../css/logs.css" type="text/css" media="all" />
	<?php  
	      error_reporting(E_ALL ^ E_NOTICE);     //      To erase the Notice because the variables below first used in this scope
	      session_start(); 
		  $flag=$_SESSION['logged']; //to check logged or not
		  $lname=$_SESSION['logname']; 
    ?>
</head>
<body>
	<!-- Begin Wrapper -->
<div id="wrapper">
		<!-- Begin Search -->
	  <div id="search">
			<div class="shell">
			  <div class="cl">&nbsp;</div>
		</div>
	  </div>
		<!-- End Search -->
		<!-- Begin Header -->
	  <div id="header" class="shell">
		  
	    <h2 class="style8"><strong><br />
        </h2>
	    <h2 class="style8">&nbsp;</h2>
	    <h2 class="style18">PCStore</h2>
		<div id="log" align="right">
		<?php 
		if($flag=="yes")
		{ 
		echo "<input type='text' value='logged in as $lname'  class='blink' disabled='disabled'/><a href='logout.php'>logout</a>";
		}
		else
		{
			header("Location: http://localhost/OBDM/Main/login.php");
		}
		?>
		</div>
	    <p class="style8">&nbsp;</p>
	    <p class="style8">&nbsp;</p>
	    </h1>
	  </div>
		<!-- End Header -->
		<!-- Begin Navigation -->
		<div id="navigation">
		  <div class="shell">
				<ul>
					<li><a href="Main.php" title="Home">Home</a></li>
					<li><a href="register.php" title="SIGN UP">&nbsp;Sign Up &nbsp;</a></li>
					<li><a href="login.php" title="Log In">Log In</a></li>
					<li><a href="accheck.php" title="Account">Account</a>
					</li><li><a href="Contact.php" title="Contact">Contact</a></li>
				</ul>
				<div class="cl">&nbsp;</div>
		  </div>
		</div>
	<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p align="right"><span class="style20">Welcome To PC Store ,</span><span class="style21"><?php echo $lname; ?></span>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 </p>
	      <br /><br /><br />
<div class="tabs">

		   <?php  
		 $con=mysql_connect("localhost","root","");
		 if(!$con)
		 {
			die('Could not connect:' .mysql_error());
		 }
		 mysql_select_db("pcstore",$con);
		 $rs = mysql_query("SELECT * FROM register where UName='$lname' ");
		 while($r=mysql_fetch_array($rs))
		 {
		   $mail=$r["Email"];
		   $phone=$r["Phone"];
		 } 
		$result = mysql_query("SELECT * FROM orders where UName='$lname'");
		
		echo  "<table cellspacing='30'>
			  <tr>
			  <th><u>Product Name</th>
			  <th><u>Quantity</th>
			  <th><u>Date of Purchase</th>
			  <th><u>Amount Payable</th>
			  <th><u>Delivery Address</th>
			  <th><u>Status of The Product</th>
              </tr>";
	  	$cdate=date("Y-m-d");
       while($row = mysql_fetch_array($result))
		{
		$DD=$row['ID'];
		echo "<form name='$DD' action='delete.php' method='post'>";
		echo "<tr>";
		echo "<input type='hidden' name='id' value='$DD'/>";
		echo "<th>" . $row['PName'] . "</th>";
		echo "<th>" . $row['Qty'] . "</th>";
		echo "<th>" . $row['Date'] . "</th>";
		echo "<th>" . $row['TOTAL'] . "</th>";
		echo "<th>" . $row['Address'] . ", " . $row['City'] . ", " . $row['State'] . " Pin-" . $row['PIN'] . "</th>";
		$dt=$row["Date"];
		if(strcmp($cdate,$dt)==0)
		echo  "<th><input type='submit' value='Cancel Order'></th>";
		else
		echo "<th> Processed </th>";
		echo "";
		echo  "</tr>";
			echo "</form>";
		}
	
		echo "</table>";
	
		mysql_close($con);
		?>

		  <!-- End Navigation -->
		  <!-- Begin Slider -->
		  <!-- End Slider -->
          <!-- Begin Main -->
          <!-- container -->

<!-- Begin Content -->
<!-- End Content -->
<!-- Begin Right Sidebar -->
               
</div>
	</div></div>
	<p>&nbsp;</p>
	<div class="cl">&nbsp;</div>
	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		<div id="footer">
			<div class="shell">
				<p class="bottom-menu">
				<a href="Main.php" title="Home">Home</a><span>|</span>
				<a href="register.php" title="Sign Up">Sign Up</a><span>|</span>
				<a href="login.php" title="Log In">Log In</a><span>|</span>
				<a href="accheck.php" title="Account">Account</a><span>|</span>
				<a href="Contact.php" title="Contact">Contact</a></p>
				<p>Copyright &copy; PC Store 2012. Design by: <a href="Pcstore.php" title="PC Store">PC Store Developers</a>. All Rights Reserved. </p>
				<div class="cl">&nbsp;</div>
			</div>
		</div>
		<!-- End Footer -->
	</div>
	<!-- End Wrapper -->
</body>
</html>