<?php
session_start();
$user=$_POST['UserName'];
$pass=$_POST['Passwordz'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('Could not connect:' .mysql_error());
}
mysql_select_db("pcstore",$con);
$result = mysql_query("SELECT * FROM register where UName='$user' and Password='$pass'");

if(mysql_num_rows($result)!=0)
{
$_SESSION['logged']="yes";
$_SESSION['logname']=$user;
header("Location: http://localhost/OBDM/Main/Main.php");
}
else if(mysql_num_rows($result)==0) 
{
$lag="Sorry !  User Name or Password Mismatch ..!!";
$_SESSION['lag']=$lag;
	 /*echo "<script type='text/javascript'>alert('Sorry !  User Name or Password Mismatch');
	  window.location='login.php';
	  </script>";
	  //include("login.php");*/
	  header("Location: http://localhost/OBDM/Main/login.php");
	 
} 

mysql_close($con);
?>