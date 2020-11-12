<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>PC-Store  A BarGaining WorlD</title>
	
	<link rel="shortcut icon" href="../css/images/favicon.ico"/>
	<link rel="stylesheet" href="../css/order.css" type="text/css" media="all" />
    <style type="text/css">
<!--
.style26 {
	font-size: 18px;
	font-weight: bold;
}
.style25 {
	font-size: 16px;
	font-weight: bold;
	color:#000000;
}
-->
    </style>
</head>
<?php
 error_reporting(E_ALL ^ E_NOTICE);     //      To erase the Notice because the variables below first used in this scope
session_start();
$pname=$_SESSION['pname1'];
$lname=$_SESSION['logname'];//name of the customer
$flag=$_SESSION['logged']; // logged or not
$fprice=$_SESSION['uprice'];
$done=$_SESSION['bill'];
if($flag!="yes"&&$done!="true" || $fprice=="0")
{ 
header("Location:http://localhost/OBDM/Main/login.php");
die();
}
?>
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
	    <p align="right">
		<?php 
		if($flag=="yes")
		{ 
		echo "logged in as $lname &nbsp;&nbsp;&nbsp;&nbsp; <a href='logout.php'>logout</a>";
		}
		?>
	    <p class="style8">&nbsp;</p><br />
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
		<!-- End Navigation -->
		<!-- Begin Slider -->
		<!-- End Slider -->
        <!-- Begin Main -->
        
					
					
					<div class="order">
	<section id="content">
<form name="billing" action="ordered.php" onsubmit="return validateForm();" method="post">
		  <h1>Shipping Details</h1>
		  <div class="order1">
			
			
			<p align="justify" class="style26">Addresss :</p>
			&nbsp;
			<p align="justify" class="style26">
			  <textarea 	name="address" 
							id="styled" 
							onblur="setbg('white')"
							class="style25"
							required=""
							placeholder="Shipping Address"
							onfocus="setbg('#D8D8D8');" 
							></textarea>
		    </p>
			&nbsp;
			
			
			
			<p align="justify" class="style26">City : </p>
			&nbsp;
			<p align="justify" class="style26">
			  <select name="city">
        		<option > Mangalore </option>
       			<option>Udupi</option>
        		<option>Bagalkot </option>
				<option>Bangalore</option>
				<option>Belgaum</option>
				<option>Chickmagalur</option>
				<option>Davanagere</option>
				<option>Gadag</option>
				<option>Mysore</option>
				<option>Tumkur</option>
    		  </select>
			</p>
			&nbsp;
			
			
			
			
			<p align="justify" class="style26">State : </p>
			&nbsp;
			<p align="justify" class="style26">
			 <select name="state">
        		<option > Karnataka</option>   		
    		  </select>
			</p>
			&nbsp;
			
			
			
			
			
			<p align="justify" class="style26">PIN : </p>
			&nbsp;
			<p align="justify" class="style26">
			<input type="text" 	name="PIN" 
								placeholder="PIN" 
								required="" 
								class="style25"
								id="pin" 
								onfocus="setbg1('#D8D8D8');" 
								onblur="setbg1('white')"/>
			</p>
			&nbsp;	
			
			
			<p align="justify" class="style26">
			<input 	name="Pname" type="text" disabled="disabled" class="style25" 
								id="Pname" 
								onfocus="this.value=''; setbg1('#D8D8D8');" 
								onblur="setbg1('white')"
								value="<?php echo $pname; ?>" />
			 
			 QTY
			 <select name="qty" id="qty" onchange="total()">
        		<option value="1">1</option>
       			<option value="2">2</option>
        		<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
    		  </select>
			  
			  
			   Price
			   <input 			type="text" 
			   					name="Amount" 
								disabled="disabled" class="style25" 
								id="Amount" 
								onfocus="setbg1('#D8D8D8');" 
								onblur="setbg1('white')"
								value="<?php echo $fprice; ?>" />
			  
			  
			   Total
			   <input 			type="text"
			   					name="Tot" 
								disabled="disabled" 
								class="style25"
								id="Tot" 
								onfocus="setbg1('#D8D8D8');" 
								onblur="setbg1('white')"
								value="<?php echo $fprice; ?>" />
			   
			 
		</p>
				
				
				
				<p align="center">
				<input type="submit"  name="bt" value="Proceed" onclick="validateForm()" />
		</form>
		<!-- form -->
	</section>
					</div>
<script>

function setbg(color)
{
document.getElementById("styled").style.background=color
}

function setbg1(color)
{
document.getElementById("pin").style.background=color
}

function validateForm()
{
var pin=document.forms["billing"]["pin"].value;

  		 
		  if(isNaN(pin))
		  {
              alert("Enter Proper PIN CODE.....!");
			  return false;
		  }
          else if(pin.length < 6 )
		  {
               alert("Enter Proper PIN CODE.....!"); 
			   return false;
          }

}

function total()
{    
    var qty=parseInt(document.forms["billing"]["qty"].value);
	var price=parseInt(document.forms["billing"]["Amount"].value);
    document.getElementById("Tot").value=qty * price;
	//document.write(price*qty);
}
</script>
<!-- container -->
					
					
					
					
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   			
					<!-- Begin Content -->
					<!-- End Content -->
					<!-- Begin Right Sidebar -->
	</div>
	</div></div>
		
		<p>&nbsp;</p>
	<div class="cl">&nbsp;</div>
		<div id="footer">
			<div class="shell">
				<p class="bottom-menu">
				<a href="Main.php" title="Home">Home</a>
				<span>|</span>
				<a href="register.php" title="Sign Up">Sign Up</a>
				<span>|</span>
				<a href="login.php" title="Log In">Log In</a>
				<span>|</span>
				<a href="accheck.php" title="Account">Account</a>
				<span>|</span>
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