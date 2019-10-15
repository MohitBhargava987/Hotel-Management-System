<!DOCTYPE HTML> 

<html> 
<head> <title>Login</title> 

<link rel="stylesheet" type="text/css" href="style.css">
</head>
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
<h1>Login</h1>
<div id="Sign-In"> 
<fieldset style="width:30%">
<legend style="font-size:20px;">LOG-IN HERE</legend> 
<form action="password_verification.php" method="post">
<?php
if(isset($_GET['error']))
{
	echo "<span style='color:red;font-size:30px;'>".$_GET['error']."</span><br>";
}
?>
<label style="font-size:20px;">Email</label> <br>
<input type="email" name="email" size="40" placeholder="Email" style="width:300px;font-size:20px;"><br>
<label style="font-size:20px;">Password</label> <br>
<input type="password" name="pass" size="40"  placeholder="Password" style="width:300px;font-size:20px;"><br><br>
<input id="button" type="submit" name="submit" value="Log-In"> 
</form>
</fieldset>
</div>
</body>
</html>