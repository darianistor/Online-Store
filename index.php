<?php


session_start();

include("connection.php");
include("functions.php"); 

$user_data = check_login($con);

?>



<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="icon" href="images/logol.png">
    <meta charset="UTF-8">
    <title>Home</title>
    
    <link rel="stylesheet" href="css/styles_apiwp.css">

    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>

 
<style>
  body {
  background-image: url("images/bcmenu11.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
</head>

<div class="top">
  <div class="container">
  <div class="row"> 
<div class="col-md-6">
<ul class="navigation">
 <li><a href="index.php">Home</a></li>
  <li><a href="quiz_game.html">Quiz Game</a></li>
  <li><a href="gallery.html">Gallery</a></li>
  <li><a href="menu.php">Menu</a></li>
  <li><a href="mycart.php"><IMG SRC="images/cart.gif" style="width: 80px; height: 60px; position: absolute; right: 0%;"></a></li>
 
 <a href="logout.php">Logout</a>
Hello, <?php echo $user_data['user_name']; ?>


</ul>
</div>
</div>
</div>
</div>



<div class="slideshow-container">

<div class="mySlides fade">
   <div class="numbertext">1 / 3</div>
  <img src="images/img1.png" style="width: 1000px; height: 500px;">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/principal2.png" style="width: 1000px; height: 500px;">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/principal3.jpg" style="width: 1000px; height: 500px;">
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<h1>You can order your favourite food and wait for it enriching your culinary knowledge by giving our game quiz.</h1>
<br>
<h2>FUSHION COLOR is the place for you </h2>

<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #333;
   color: white;
   text-align: center;
}
</style>

<div class="footer"> 
<section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Subscribe for a <span>10% Discount</span></h2>
                        <p>until June 20</p>
                    </div>
                </div>
                
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="newsletter.php" method="post">
                            <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>

</body>
</html>