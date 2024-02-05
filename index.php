<?php
session_start();

include("connection.php");
include("connection.php");


?>

<!DOCTYPE html>
<html>
<head>
    
  <title> Home </title>

<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<a href="logout.php">Logout</a>

<ul>
  <li><img align='center' src="images/Logo.png" width="45" height="45"/></li>
  <li><a class="active" href="Home.html">Home</a></li>
  <li><a href="menu.html">Menu</a></li>
  <li><a href="Locations.html">Locations</a></li>
  <li><a href="Contact Us.html">Contact Us</a></li>
  <li><a href="Reservation.html">Reservation</a></li>
 <li>  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> </li>
 <li>
  <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>
 </li>
</ul>

<img src="Images/aljawad-restaurant.png"  style="width:100%;min-height:350px;max-height:600px;"/>

<section class="about-us">
  <article>
      <p style="font-size:40px;"><b> About Us </b></p>
      <p>
        AlJawad is a family-style resturant where you can come and indulge in our wide vareity of 
        appetizers, salads, meats, sandwiches, deserts, and beverages. We're dedicated to giving you 
        the very best of every food with a great focus on customer service and uniqueness. AlJawad has 
        come a long way from its beginnings in 1992. We now serve customers in several locations around Lebanon 
        and are thrilled to be the go-to spot for many customers.
      </p>
      <p> 
        We hope you enjoy our resturant and food as much as we enjoy serving you. If you have any 
        questions or comments, please don't hesitate to <a href="Contact Us.html">contact us</a>.
      </p>
  </article>
</section>

<div class="slideshow" style="width:100%; height:auto;">
  <img class="mySlides" src="Images/aljawad-slideshow1.png" style="width:100%">
  <img class="mySlides" src="Images/aljawad-slideshow2.png" style="width:100%">
  <img class="mySlides" src="Images/aljawad-slideshow3.png" style="width:100%">
  <img class="mySlides" src="Images/aljawad-slideshow4.png" style="width:100%">
</div>

<script>
  var myIndex = 0;
  carousel();
  
  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); 
  }
<footer class="container padding-32 theme-d1 center">
  <h4><b>Follow Us</b></h4>
  <a class="button large red" href="https://www.facebook.com/aljawadlb/" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="button large red" href="https://www.twitter.com" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="button large red" href="https://www.google.com" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="button large red" href="https://instagram.com/aljawadrestaurant?utm_medium=copy_link" title="Instagram"><i class="fa fa-instagram"></i></a>
  <h6>Made by Arwa, Eiad</h6>
</footer>

</body>
</html>