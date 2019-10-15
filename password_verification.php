<?php
session_start();
include('conn.php');
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	
	/*echo $email."<br>";
	echo $pass."<br>";
	*/
	
	
	$email=mysqli_real_escape_string($conn,check($_POST['email']));//escapes special characters in a string for use in an SQL statement.
	$pass=mysqli_real_escape_string($conn,check($_POST['pass']));
	
	$hashpassword=password_hash($pass,PASSWORD_DEFAULT);
	if(empty($email) || empty($pass))
	{
		header("location:login.php?error=Fill all details");
	}
	else
	{
			$sql="SELECT * FROM hms WHERE email='$email'";
			$result=mysqli_query($conn,$sql);
			$resultCheck=mysqli_fetch_assoc($result);
			if($resultCheck<1)
			{
				header("location:login.php?error=email is not registered");
			}
			else
			{
				if(!password_verify($pass,$resultCheck['password']))
				{
					header("location:login.php?error=password is wrong");
				}
				else
				{
					$_SESSION['name']=$resultCheck['name'];
					header("location:loginsuccess.php?error=login success");
				}
				
			}				
	}			
	
}
else
{
	header("location:login.php");
}

function check($data)
{
	$data=htmlspecialchars($data);
	$data=stripslashes($data);
	$data=trim($data);
	return $data;
}
