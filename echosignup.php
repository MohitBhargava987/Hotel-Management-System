<?php
include('conn.php');
if(isset($_POST['Submit']))
{
	$fname=mysqli_real_escape_string($conn,check($_POST['fname']));//escapes special characters in a string for use in an SQL statement.
	$lname=mysqli_real_escape_string($conn,check($_POST['lname']));
	$email=mysqli_real_escape_string($conn,check($_POST['email']));
	$password=mysqli_real_escape_string($conn,check($_POST['password']));
	$cpassword=mysqli_real_escape_string($conn,check($_POST['cpassword']));
	$day=mysqli_real_escape_string($conn,$_POST['day']);
	$month=mysqli_real_escape_string($conn,$_POST['month']);
	$year=mysqli_real_escape_string($conn,$_POST['year']);
	$phone=mysqli_real_escape_string($conn,check($_POST['phone']));
	
	
	$hashpassword =password_hash($password,PASSWORD_DEFAULT);
	if(empty ($fname)|| empty ($lname)||empty($cpassword) ||empty ($phone) ||empty($email)||empty($day)||empty($month)||empty($year)||empty($phone))
	{
		header("location:signup.php?error= All fields are required");
	}
	else
	{
		if($cpassword!=$password)
		{
			header("location:signup.php?error=Passwords do not match");
		}
		else
		{	
			$name=$fname." ".$lname;
			$date=$day." ".$month." ".$year;
			$sql="INSERT into hms(id,username,email,password,phone,date) VALUES ('','$name','$email','$hashpassword','$phone','$date')";
			if(mysqli_query($conn,$sql))
			{
				header('location:home.php?error= Signup successful');
			}
			else
			{
					header('location:signup.php?error=Signup failed');
			}
			/*echo md5($password)."<br>";
			echo sha1($password)."<br>";
			echo password_hash($password,PASSWORD_DEFAULT)."<br>";*/
		
		}
	}	

}	

function check($data)
{
	$data =htmlspecialchars($data);//converts the special chars into html entities.
	$data =stripslashes($data);//removes the blackslashes from the user input.
	$data =trim($data);//removes the extra space ,new line etc.
	return $data;
}
?>