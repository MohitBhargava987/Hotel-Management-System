<html>
<form action="echosignup.php" method="post">
<link rel="stylesheet" type="text/css" href="style.css">
<?php
	
	if(isset($_GET['error']))
	{
		echo "<span style='color: red;font-size:30px'>".$_GET['error']."</span><br>";
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


<h1> Sign Up details</h1>
<div id="Sign-In"> 
<fieldset>	

<legend style="font-size:20px;"> USER PERSONAL INFORMATION</legend><br><br>

<label style="font-size:20px;">Enter your firstname</label><br>
<input type="text" name="fname" placeholder="First Name" style="width:300px;font-size:20px;"><br>

<label style="font-size:20px;">Enter your lastname</label><br>
<input type="text" name="lname"  placeholder="Last Name" style="width:300px;font-size:20px;"><br>

<label style="font-size:20px;">Enter your email </label><br>
<input type="email" name="email"  placeholder="Email" style="width:300px;font-size:20px;"><br>
<label style="font-size:20px;">Enter your password</label><br>
<input type="password" name="password" placeholder="Password" style="width:300px;font-size:20px;"><br>
<label style="font-size:20px;">Confirm your password</label><br>
<input type="password" name="cpassword" placeholder="Confirm Password" style="width:300px;font-size:20px;"><br>
<label style="font-size:20px;">Date of Birth</label><br>
			<div class="form-group">
            <div class="row">
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="day" id="expiry-month" style="font-size:20px;">
                <option>Date</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				
			  </select>
            
            
              <select class="form-control col-sm-2" name="month" id="expiry-month" style="font-size:20px;">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
          
            
              <select class="form-control" name="year" style="font-size:20px;">
			  <option>Year</option>
			  	<option value="94">1994</option> 
                <option value="95">1995</option>
                <option value="96">1996</option>
                <option value="97">1997</option>
                <option value="98">1998</option>
                <option value="99">1999</option>
                <option value="00">2000</option>
			  	<option value="1">2001</option> 
                <option value="2">2002</option>
                <option value="3">2003</option>
                <option value="4">2004</option>
                <option value="5">2005</option>
                <option value="6">2006</option>
                <option value="7">2007</option>
				<option value="8">2008</option> 
                <option value="9">2009</option>
                <option value="10">2010</option>
                <option value="11">2011</option>
                <option value="12">2012</option>
                <option value="13">2013</option>
                <option value="14">2014</option>
			    <option value="15">2015</option> 
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
              </select>
            </div>
          </div>

<label style="font-size:20px;">Enter your phone number</label><br>
<input type="text" name="phone" placeholder="Number" style="width:300px;font-size:20px;" ><br><br>
<input id="button" type="submit" name="Submit" value="Sign-up"><br>
<label style="font-size:40px;">Already a member:</label><br>
<a href="login.php" style="font-size:40px;">login here</a>
</fieldset>
</form>
</html>