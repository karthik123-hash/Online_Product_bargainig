<?php
 error_reporting(E_ALL ^ E_NOTICE);     //      To erase the Notice because the variables below first used in this scope
session_start();
$flag=$_SESSION['logged'];
if(strcmp($flag,'yes')!=0)
{
	header("Location: http://localhost/OBDM/Main/login.php");
}
else 
{
	header("Location: http://localhost/OBDM/Main/account.php");
} 
?>