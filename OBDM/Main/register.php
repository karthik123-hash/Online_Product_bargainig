<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>PC-Store  A BarGaining WorlD</title>
	
	<link rel="shortcut icon" href="../css/images/favicon.ico"/>
	<link rel="stylesheet" href="../css/regs.css" type="text/css" media="all" />
    <style type="text/css">
<!--
.style18 {font-size: 60px}
.style23 {
	color: #FF0000;
	font-size: 36px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.style24 {
	font-size: 20px;
	font-weight: bold;
	color: #FF0000;
}
.style25 {font-size: 14px}
-->
    </style>
</head>
<body>
<?php 
		 error_reporting(E_ALL ^ E_NOTICE);     //      To erase the Notice because the variables below first used in this scope
	      session_start(); 
		  $lag=$_SESSION['lag'];
		
		  ?>
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
		<!-- End Navigation -->
		<!-- Begin Slider -->
		<!-- End Slider -->
        <!-- Begin Main -->
        
					
					
					<div class="container">
	<section id="content">
		<form name="log_pc" action="registered.php" onsubmit="return validateForm();" method="post">
		  <h1>Register Here</h1>
			<div>
				<input type="text" name="UserName" placeholder="Username" required="" id="username" />
			</div>
			<div>
				<p>&nbsp;</p>
				<p>
				  <input type="password" name="Passwordz1" placeholder="Password" required="" id="password" />
			  </p>
				<p>
				  <input type="password" name="Passwordz2" placeholder="Confirm Password" required="" id="password" />
				</p>
				<p>
				  <input type="text" name="mail" placeholder="e-mail" required="" id="Mail" />
</p>
				<p>
				  <input type="text" name="Phone" placeholder="Mobile No" required="" id="Passwordz3" />
				</p>
			</div>
			<span class="style17">				            
				            <?php 
						if($lag!="0"&&$lag!="Sorry !  User Name or Password Mismatch ..!!")
						echo $lag; ?>
						</span>
			<div>
				<input type="submit"  name="bt" value="Register" onclick="validateForm()" />
		</form>
		<!-- form -->
		
	</section></div>
	<script>
function validateForm()
{

var u=document.forms["log_pc"]["UserName"].value;
var p=document.forms["log_pc"]["Passwordz1"].value;
var p1=document.forms["log_pc"]["Passwordz2"].value;
var m=document.forms["log_pc"]["mail"].value;
var mob=document.forms["log_pc"]["Phone"].value;
var atpos=m.indexOf("@");
var dotpos=m.lastIndexOf(".");
if(u!="" && p!="" && p1!="" &&  m!="" && mob!="" )
{
  
  		  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=m.length)
  		  {
  			alert("Not a valid e-mail address.....!");
  			return false;
  		  }
		  else if(isNaN(mob)|| mob.indexOf(" ")!=-1)
		  {
              alert("Enter Proper Phone Number.....!");
			  return false;
		  }
          else if(mob.length < 10 )
		  {
               alert("enter 10 digit mobilenumber.....!"); 
			   return false;
          }
          else if (mob.charAt(0)!="9" && mob.charAt(0)!="8" && mob.charAt(0)!="7")
		  {
               alert("phone no should start with 9 or 8 or 7.....!");
                return false;
          }
		  else if(p!=p1)
		  {
		        alert("Pasword Didnt Match...! ");
                return false;
		  }	
}

}
</script>
<!-- container -->
					
					
					
					
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
					
				
					<!-- Begin Content -->
					<!-- End Content -->
					<!-- Begin Right Sidebar -->
	</div>
	</div></div>
		<div align="left"><br/>		
		  <pre>                                      
              		  <span class="style23">CAUTION</span><br />
		  
    <span class="style24"><u>Please Go through the following Rules Before U Bargain..</u></span>
		  
		        <span class="style25">
	1) First of all we'll provide or fix a price to 
	    
	   ur wished product. If ur willing to  buy the 
	   
	   product for that price then the deal is done.
		          
		          
	2) If You are  not  willing  to  pay specified 
	
	   amount you can  set youre own price and buy.
		          
	   And if we are ready  to provide the product
	   
	   for your your price then your deal  is done.
		          
		          
        3) And if we are not ready to provide the product
		
           for your price, Then we'll provide one more
		
           price to buy that product.
		          
		          
        4) So There is Only Two Chances will be  provided 
           
           to bargain on one Product. If You are bargained 
		   
           twice on a product then You are not allowed to  
		   
           bargain on that product for that day.
          </span>  </div>
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