<html>
<form action="echocontact.php" method="post">
<link rel="stylesheet" type="text/css" href="style.css">
<?php
	
	if(isset($_GET['error']))
	{
		echo "<span style='color: red; font-size:30px;'>".$_GET['error']."</span><br>";
	}
?>

<div id="header">
<a href="home.php" class="logo">
	<img src="./img/logo.png" alt="logo">
</a>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="gallery.php">Gallery</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="signup.php">Signup</a></li>
  <li><a href="login.php">Login</a></li>
</ul>

</div>

<body id="body">
<h1>Write to us</h1>
<div id="Sign-In"> 

<fieldset>
<legend>Enter Details</legend>
<label style="text;">Enter your Name</label><br>
<input type="text" name="name" placeholder="NAME" style="width:300px;font-size:20px;"><br>
<label>Enter your email </label><br>
<input type="email" name="email" placeholder="EMAIL" style="width:300px;font-size:20px;"><br>
<label>Enter your Phone number </label><br>
<input type="phone" name="phone1" placeholder="PHONE" style="width:300px;font-size:20px;"><br>
<label>Write your Message </label><br>
<textarea type="text" name="message" placeholder="MESSAGE" style="height:200px;font-size:20px;"></textarea><br>

<input id="button" type="submit" name="Send" value="Send"><br>

</fieldset>
</form>
</html>