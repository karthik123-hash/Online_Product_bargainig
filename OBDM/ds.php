<?php 
$cdate=date("Y-m-d");
$pname="Nokia 500";
$lname="Admin";
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('Could not connect:' .mysql_error());
}
mysql_select_db("pcstore",$con);
$ldate=date('Y-m-d', strtotime("-1 week"));
mysql_query("INSERT INTO history (UName,PName,Date,Count)
                  					  VALUES   ('$lname','$pname','$cdate','1')");

?>