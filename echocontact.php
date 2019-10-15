<?php
include('conn.php');
if(isset($_POST['Send']))
{
	$name=mysqli_real_escape_string($conn,check($_POST['name']));
	$email=mysqli_real_escape_string($conn,check($_POST['email']));
	$phone=mysqli_real_escape_string($conn,check($_POST['phone1']));
	$message=mysqli_real_escape_string($conn,check($_POST['message']));
	
	

	if(empty ($name)|| empty($phone) ||empty($email)||empty($message))
	{
		header("location:contact.php?error= All fields are required");
	}
	else
	{
			$sql="INSERT into hms2(id,name,email,phone,message) VALUES ('','$name','$email','$phone','$message')";
			if(mysqli_query($conn,$sql))
			{
				header('location:home.php?error=Thankyou! for your message,we will get back to you soon.');
			}
			else
			{
					header('contact:contact.php?error=Message not sent');
			}
		
	}
}	

	

function check($data)
{
	$data =htmlspecialchars($data);
	$data =stripslashes($data);
	$data =trim($data);
	return $data;
}
?>