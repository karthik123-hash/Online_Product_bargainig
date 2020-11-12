<?php
 error_reporting(E_ALL ^ E_NOTICE);     //      To erase the Notice because the variables below first used in this scope
session_start();
$cdate=date("Y-m-d"); //current Date
$address=$_POST['address']; //address
$city=$_POST['city']; //city
$state=$_POST['state']; //state
$pin=$_POST['PIN']; // pin code
$qty=$_POST['qty'];// quantity
$pname=$_SESSION['pname1']; // product name
$lname=$_SESSION['logname'];//name of the customer
$flag=$_SESSION['logged']; // logged or not
$fprice=$_SESSION['uprice'];// cost
$bill=$_SESSION['bill']; // from order page 
$_SESSION['comp']="true"; // from ordered to bill page

$tot=$qty * $fprice;

$_SESSION['tot']=$tot;
if($flag!="yes" || $bill!="true"||$fprice=="" || $fprice=="0" )
{ 
header("Location:http://localhost/OBDM/Main/login.php");
die();
}

$con=mysql_connect("localhost","root","");
if(!$con)
{
die('Could not connect:' .mysql_error());
}
mysql_select_db("pcstore",$con);

$sql=mysql_query("INSERT INTO orders(PName,UName,Qty,Date,Price,Address,City,State,PIN,TOTAL)
                  VALUES('$pname','$lname','$qty','$cdate','$fprice','$address','$city','$state','$pin','$tot')");
				  echo $tot;
                  header("Location:http://localhost/OBDM/Main/bill.php");
mysql_close($con);
?>