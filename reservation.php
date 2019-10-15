<html>
<form action="echoreservation.php" method="post">
<link rel="stylesheet" type="text/css" href="style.css">
<?php
	
	if(isset($_GET['error']))
	{
		echo "<span style='color: red;font-size:30px;'>".$_GET['error']."</span><br>";
	}
	?>
	
<div id="header">
<a href="home.php" class="logo">
	<img src="./img/logo.png" alt="logo">
</a>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="gallery.php">Gallery</a></li>
  <li><a href="reservation.php">Reservation</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="signup.php">Signup</a></li>
  <li><a href="home.php">Logout</a></li>
</ul>

</div>
<body id="body">
<h1>Reservation</h1>

<div id="sign-In">
<fieldset>
<legend style="font-size:20px;">ENTER DETAILS</legend><br><br>
<label style="font-size:20px;">Enter your Name</label><br>
<input type="text" name="name" placeholder="Name" style="font-size:18px;"><br>
<label style="font-size:20px;">Enter your email </label><br>
<input type="email" name="email" placeholder="Email" style="font-size:18px;"><br>
<label style="font-size:20px;">Rooms required</label><br>
<div class="form-group">
            <div class="row">
            <div class="col-xs-4">
              <select class="form-control" name="room" style="font-size:18px;">		
			  
                <option style="font-size:20px;">No. of Rooms</option><br><br>
				<option style="font-size:20px;">1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>
			<label style="font-size:20px;">Members going to stay</label><br>			
            <div class="col-xs-6">
            <select class="form-control" name="member"style="font-size:18px;">
              <option style="font-size:20px;">No. of members</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div></div>
        </div>
		<label style="font-size:20px;">The Date of CHECK-IN</label><br>
		<div class="form-group">
            <div class="row">
            <div class="col-xs-4">
              <select class="form-control" name="day" style="font-size:18px;">
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
              <select class="form-control col-sm-2" name="month" style="font-size:18px;">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June(06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            
              <select class="form-control" name="year" style="font-size:18px;">
			  <option>Year</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
              </select>
            </div>
          </div>
        </div>
		
		<label style="font-size:20px">Service with Price(check <a href="gallery.php">gallery</a> for details)</label>
		<div class="form-group">
            <div class="row">
            <div class="col-xs-4">
				<select class="form-control" name="type"  style="font-size:18px;">
				<option>Price per Day</option>
                <option value="1250 IN">Type A with 1250 IN</option>
                <option value="1480 IN">Type B with 1480 IN</option>
                <option value="1650 IN">Type C with 1650 IN</option>
				</select>
				</div>
				</div>
				</div>
				<br>
		<input id="button" type="submit" name="Submit" value="Book"><br>
</fieldset>
</form>
</html>