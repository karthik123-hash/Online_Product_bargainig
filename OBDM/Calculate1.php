
<?php
 error_reporting(E_ALL ^ E_NOTICE);     //      To erase the Notice because the variables below first used in this scope
session_start();
$cdate=date("Y-m-d");
$_SESSION['lag']="0";
$pname=$_SESSION['pname'];
$_SESSION['pname1']=$pname; // keeping the product name in other variable only if he bargains for next page
$uprice=$_POST['uname2'];// price set by the user
$lname=$_SESSION['logname'];//name of the customer
$flag=$_SESSION['logged']; // logged or not
$Price=$_SESSION['Price'];// Price without any addings    A
$sprice=$_SESSION['sprice'];// Actual+ Margin+ Rate       S
$APrice=$_SESSION['oprice'];// Actual Price + Margin      Z
$_SESSION['bill']="false";  // to check that whether it came from calc or not
$_SESSION['uprice']="0";
if($flag!="yes")
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
mysql_query("DELETE FROM history WHERE Date!='$cdate'");


$ht = mysql_query("SELECT * FROM history where PName='$pname' and Uname='$lname' and Count='3'");
if(mysql_num_rows($ht)==0) 
{
 	$ht1 = mysql_query("SELECT * FROM history where PName='$pname' and Uname='$lname' and Count='2' ");
	if(mysql_num_rows($ht1)==0) 
	{
		$ht2 = mysql_query("SELECT * FROM history where PName='$pname' and Uname='$lname' and Count='1' ");
		if(mysql_num_rows($ht2)==0) 
		{
			if($uprice<=$sprice && $uprice>=$APrice)
			{
			 $_SESSION['barg']="0";
			 $_SESSION['bill']="true";
				$_SESSION['uprice']=$uprice;
				$np1=$uprice;
				$sql= mysql_query("INSERT INTO history (UName,PName,Date,Count,UPrice,NPrice)
                  		VALUES   ('$lname','$pname','$cdate','1','$uprice','$np1')");
 				   header("Location:http://localhost/OBDM/Main/order.php");
				die();
				//deal
				/*  for(i= )
				      small=i;
				      for(j=i+1; )
					     if(a[small]>a[j]
						    small=j
							
					temp=a[i]
					a[i]=a[small] 
					a[small]=temp this will store small at first */
			}
			else if($uprice < ($Price-(0.05*$Price)))
			{
			$_SESSION['barg']="Deal is Not Possible Your Price Which is Too Low";
				echo "<script type='text/javascript'>history.back();
					</script>";
				//deal is not possible
				die();
			}
			else if($uprice > $sprice)
			{
			$_SESSION['barg']="Deal is Not Possible Your Price is Too High";
			echo "<script type='text/javascript'>history.back();
					</script>";
				die();
				//deal is not possible
			}
			else if($uprice >($Price-(0.05*$Price)) && $uprice<$APrice)
			{
			 $p1=ceil(($APrice-$uprice)/2);
			 $np1=$APrice+$p1;
			 $_SESSION['cprice']=$np1;
			 $sql= mysql_query("INSERT INTO history (UName,PName,Date,Count,UPrice,NPrice)
                  		VALUES   ('$lname','$pname','$cdate','1','$uprice','$np1')");
			
			$_SESSION['barg']="Deal is Not Possible !.. Try This Price... One Attempt Left";
			echo "<script type='text/javascript'>history.back();
					</script>";
				die();
				// new price
				
		    }
			die();
		
		}
		else
		{
			
			while($row = mysql_fetch_array($ht2))
			{
				$uprice1=$row['UPrice'];
				$nprice1=$row['NPrice'];
			}
			
			if($uprice>=$APrice && ( $uprice<=$nprice1 || $uprice <$sprice))
			{
			$_SESSION['bill']="true";
			 $_SESSION['barg']="0";
				$_SESSION['uprice']=$uprice;
				$np2=$uprice;
				mysql_query("Update  history set Count='2' , NPrice='$np2' where UName='$lname'  and                PName='$pname'  and Date='$cdate' and Count='1'");
				 header("Location:http://localhost/OBDM/Main/order.php");
				die();
				//deal
			}
			/*else if($uprice==$nprice1)
			{
				$np2=$nprice1;
			 	$_SESSION['cprice']=$nprice1;
			 	mysql_query("Update  history set Count='2' , NPrice='$np2' where UName='$lname'  and                PName='$pname'  and Date='$cdate' and Count='1'");
			 	$_SESSION['barg']="Deal is Not Possible !.. Try This Price...final Attempt";
			echo "<script type='text/javascript'>history.back();
					</script>";
				die();
				//new price to the user
			}*/
			
			else if($uprice==$uprice1 && $uprice<$APrice)
			{
			 	$p2=($APrice-$uprice)/2;
			 	$np2=$APrice+$p2;
			 	$_SESSION['cprice']=$np2;
			 	mysql_query("Update  history set Count='2' , NPrice='$np2' where UName='$lname' and PName='$pname'  and Date='$cdate' and Count='1'");
			 	$_SESSION['barg']="Deal is Not Possible !.. Try This Price...final Attempt";
			echo "<script type='text/javascript'>history.back();
					</script>";
				die();
				//new price to the user
			}
			
			else if($uprice >($Price-(0.05*$Price)) && $uprice<$APrice)
			{
			 $p1=ceil(($APrice-$uprice)/3);
			 $np2=$APrice+$p1;
			 $_SESSION['cprice']=$np2;
			 mysql_query("Update  history set Count='2' , NPrice='$np2' where UName='$lname' and  PName='$pname'  and Date='$cdate' and Count='1'");
			
			$_SESSION['barg']="Deal is Not Possible !.. Try This Price....final Attempt";
			echo "<script type='text/javascript'>history.back();
					</script>";
				die();
			//new price
				
		    }
			
			else if($uprice < ($Price-(0.05*$Price)))
			{
			$_SESSION['barg']="Deal is Not Possible Your Price Which is Too Low";
				echo "<script type='text/javascript'>history.back();
					</script>";
				//deal is not possible
				die();
			}
			else if($uprice > $sprice)
			{
			$_SESSION['barg']="Deal is Not Possible Your Price Which is Too High";
			echo "<script type='text/javascript'>history.back();
					</script>";
				die();
				//deal is not possible
			}
			else if($uprice <=$Price)
			{
			$_SESSION['barg']="Deal is Not Possible Your Price Which is Too Low";
				echo "<script type='text/javascript'>history.back();
					</script>";
				//deal is not possible
				die();
			}
			
		} 
	}
	else
	{
		mysql_query("Update  history set Count='3' where UName='$lname'  and  PName='$pname'  and Date='$cdate' and        Count='2'");
		while($row = mysql_fetch_array($ht1))
		{
			$np3=$row['NPrice'];
		}
		if($uprice>=$APrice && $uprice<=$sprice )
		{
		$_SESSION['bill']="true";
		$_SESSION['barg']="0";
			$_SESSION['uprice']=$uprice;
			$np3=$uprice;
			mysql_query("Update  history set Count='3' , NPrice='$np3' where UName='$lname'  and  PName='$pname'            and Date='$cdate' and Count='2'");
 			 header("Location:http://localhost/OBDM/Main/order.php");
			die();
			//deal
		}
		mysql_query("Update  history set Count='3' , NPrice='$np3' where UName='$lname'  and  PName='$pname'        and Date='$cdate' and Count='2'");
		$_SESSION['cprice']="Sorry Try Tomorrow";
		$_SESSION['barg']="Sorry ! Your bargain is Closed to This Product Today.. Try Tommorrow";
		echo "<script type='text/javascript'>history.back();
					</script>";
		die();
	} 
} 
else 
{
	$_SESSION['barg']="Sorry ! Your bargain is Closed to This Product Today.. Try  Tommorrow";
		echo "<script type='text/javascript'>history.back();
					</script>";
	$_SESSION['cprice']="Sorry Try Tomorrow";
	die();
    //header('Location: ' . $_SERVER['HTTP_REFERER']);
}


mysql_close($con);

?>
