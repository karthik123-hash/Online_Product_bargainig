<?php
 error_reporting(E_ALL ^ E_NOTICE);     //      To erase the Notice because the variables below first used in this scope
session_start();
$flag=$_SESSION['logged'];
$cdate=date("Y-m-d");
$id=$_POST['id']; 
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('Could not connect:' .mysql_error());
}
mysql_select_db("pcstore",$con);
// keeping the product name in other variable only if he bargains for next page
if($flag=="yes")
{ 
	mysql_query("delete from orders where ID='$id'");
	echo "<script type='text/javascript'>history.back();
		  </script>";
}
else
{
	header("Location: http://localhost/OBDM/Main/login.php");
}


?>