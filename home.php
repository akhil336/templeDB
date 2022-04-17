<?php
 
  include('connect.php');
 
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="css/custdash.css">
  <link rel='stylesheet' href='css/main.css'>
  <link rel="stylesheet" href="css/dash.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>

</head>

<body>    
    <div class="header">
      <p class="logo">TEMPLE MANAGEMENT SYSTEM</p>
      <div class="header-right">
        <a class="active" href="index.php">Logout</a>
      </div>
    </div>
  
 
  <div style="height: 100%;">
  <a href="home.php" class="tablink" style="width: 25%;">Home</a>
  <a href="seva.php" class="tablink" style="width: 25%;">Seva</a>
  <a href="donation.php" class="tablink" style="width: 25%;">Donation</a>
  <a href="stay.php" class="tablink" style="width: 25%;">Stay</a>

<br><br>
<br><br>
<div class="slideshow-container">
<center>
<div class="mySlides fade">
  
  <img src="https://live.staticflickr.com/6167/6172109198_caa2863baf_b.jpg" style="width:70%">
  
</div>

<div class="mySlides fade">
  
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Chamundeshwari_Temple_Mysore.jpg/1200px-Chamundeshwari_Temple_Mysore.jpg" style="width:45%">
 
</div>

<div class="mySlides fade">
  
  <img src="https://images.squarespace-cdn.com/content/v1/5a9fd56f266c0787b01e18d4/1528730986518-G2QTPYG7DVTYJ5N4RO9Q/17038811266_b95cdd7e18_z.jpg" style="width:80%">
  
</div>
</center>
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
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 3 seconds
}
</script>

    
    
</body>
</html>