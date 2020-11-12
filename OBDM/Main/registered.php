<?php
session_start();
$user=$_POST['UserName'];
$pass=$_POST['Passwordz1'];
$email=$_POST['mail'];
$mob=$_POST['Phone'];
$btn=$_POST['bt'];
if(strcmp($btn,'Register')==0)
{
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		die('Could not connect:' .mysql_error());
	}
	mysql_select_db("pcstore",$con);
	$result = mysql_query("SELECT * FROM register where UName='$user'");
	if(mysql_num_rows($result)!=0)
	{
	
					$lag="Sorry ! User Name already exists ..!!";
					$_SESSION['lag']=$lag;
					echo "<script type='text/javascript'>window.location='register.php';
					      </script>";
	}
	else
	{
			$result = mysql_query("SELECT * FROM register where Email='$email'");
			if(mysql_num_rows($result)!=0)
			{
					$lag="Sorry ! This Email already have an account ..!!";
					$_SESSION['lag']=$lag;
					echo "<script type='text/javascript'>window.location='register.php';
					      </script>";
			}	
			else
			{

					$sql="INSERT INTO register (UName, Password, Email,Phone)
                  					  VALUES   ('$user','$pass','$email','$mob')";
					$retval = mysql_query( $sql, $con);
					if (!$retval )
  					{
  						die('Error: ' . mysql_error());
  					}
    				else
					{
						$lag="LOGIN HERE.....Successfully Registered...";
						$_SESSION['lag']=$lag;
						echo "<script type='text/javascript'>
							  window.location='login.php';
							  </script>";
		      		}
	
			}
	}
}
else
{
header("Location: http://localhost/OBDM/Main/register.php");
}

mysql_close($con);
?>