 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>

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

<body>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/hotel1.jpg"width="965" height="400">
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/hotel2.jpg" width="965" height="400">
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/hotel3.jpg"width="965" height="400">
 
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var s = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < s.length; i++) {
       s[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > s.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    s[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); 
}

</script>

<article>
  <h1>Comfortable Rooms</h1>
  <img src="img/hotel10.jpg"width="240" height="150">
  <img src="img/hotel11.jpg"width="240" height="150">
  <img src="img/hotel12.jpg"width="240" height="150">
  <img src="img/hotel13.jpg"width="240" height="150"><br><br>
  <img src="img/hotel14.jpg"width="240" height="150">
  <img src="img/hotel15.jpg"width="240" height="150">
  <img src="img/hotel16.jpg"width="240" height="150">
  <img src="img/hotel17.jpg"width="240" height="150">
  <p style="font-size:17px;">This budget hotel provides the best of accommodation with personalized range of services. The Kings Hotel boasts of the best rooms in Jalandhar with state-of-the-art amenities to complement your stay. In our rooms, we offer you the comfort and luxury you have always dreamt of, and that too at the price which doesn’t dent your pocket..</p>
  </article>

	<article>
  <h1>Dining</h1>
  <img src="img/hotel8.jpg"width="480" height="300">
  <img src="img/hotel9.jpg"width="480" height="300">

  <p style="font-size:17px;">If you are a food freak looking to try various sumptuous dishes, we have a multi-cuisine restaurant for you.The Kings Hotel houses one of the best restaurants in Jalandhar,serving a wide spread of lip-smacking dishes that will certainly take your taste buds on a culinary voyage.</p>
  </article>
<div class="column" style="background-color:#666;">
<h1>Price Details</h1>
<article style="font-size:17.5px;">
<ol style="font-size:17px;">
<li>Type A with service of accomodation and refundable till five days after reservation::Cost-1250 IN</li>
<li>Type B with service of accomodation,refundable till five days after reservation and Breakfast::Cost-1480 IN</li>
<li>Type C with service of accomodation,refundable till five days after reservation,Breakfast and Pay at Hotel available::Cost-1650 IN</li></article>
</div>
</body>

</html>