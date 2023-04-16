<?php
session_start();

    include("connection.php");
    include("function.php");

 $user_data = check_login($con);

?>

<! DOCTYPE html >
<html>
<head>
  <title >ONLINE MESS(STUDENT CAFETERIA)</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    .footer{
      position: movable;
      left: 10px;
      bottom: 0px;
      right: 10px;
      width:100%;
      background-color:forestgreen;
      color: white;
      text-align: center;
     }
      .menu-bar
      {
        top: 0px;
        background-color: forestgreen;
        text-align: center;
      }
      .menu-bar ul
      {
        display: inline-flex;
        list-style: none;
        color: #fff;
      }
      .menu-bar ul li
      {
        width: 120px;
        margin: 15px;
        padding: 15px;
        

      }
      .menu-bar ul li a
      {
        text-decoration: none;
        color: #fff;

      }
      .active, .menu-bar ul li a:hover
      {
        background-color: #2bab0d;
        border-radius: 3px;

      }
      .sub-menu-1
      {
        display: none;
      }
      .menu-bar ul li:hover .sub-menu-1
      {
        display: block;
        position: absolute;
        background-color: rgb(0,100,0);
        margin-top: 15px;
        margin-left: -15px;

      }
      .menu-bar ul li:hover .sub-menu-1 ul
      {
        display: block;
        margin: 10px;
      }/*
      .menu-bar ul li:hover .sub-menu-1 ul li 
      {
         width: 150px;
         padding: 10px;
         border-bottom: 1px dotted #fff;
         /*background: transparent;
         border-radius: 0;
         text-align: left;


      }*/
      *{box-sizing: border-box;}
      body {font-family: verdana, sans-serif;}
      .mySlides {display: none;}
      img {vertical-align: middle;}
      img {size: cover;}


      .slideshow-container {
        max-width: 1500px;
        position: center;
        margin: 20px 20px;
        max-height: 900px;
      }
      .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom:8px;
        width: 100%;
        text-align: center;
      }
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }
      .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;

      }
      .active { background-color: #717171;}
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 2s;
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
      @media only screen and (max-width: 300px){
        .text {font-size: 11px}
      }

  </style>

</head>
<body>
  <div class="menu-bar">
<ul>  
      
      <li><a href="lmenu.php" style="color: white;font-size: 26px;">MENU</a></li>
      <li><a href="about.php" style="color: white;font-size: 26px;"style="float: top-right;">ABOUT</a></li>
      <li><a href="service.php" style="color: white;font-size: 26px;"style="float: top-right;">SERVICES</a></li>
      <!--<li><a href="#" style="color: white;font-size: 26px;"style="float: top-right;">USER DATA</a>-->
        <div class="sub-menu-1"> 
          <ul>
               <li><a href="#">View</a></li>
               <li><a href="#">Update</a></li>
          </ul>
        </div>
      </li>
      <li><a href="logout.php" style="color: red;font-size: 20px;" style="float: right;">logout</a></li>
</ul>
</div>
<marquee bgcolor=red direction=right align=bottom behavior=alternate color=blue>HELLO DEAR COMRADE WELCOME</marquee>
 <br>
  <!---Hello, /<?php //echo $user_data['user_name']; ?>--->

  <form>

          <!--<hr style="color:red;padding: 1px;width: 50%;height: 1px;background-color: green;"><br><br>

      <p>

        <h2 style="color: white;text-align: center;"><b><u>OPENING TIME</u> </h2><br>
        <h3 style="color: white;text-align: center;"> Monday --> <!--Sunday = 6:00am - 8:00pm</h3>-->

      <!--</p>
      <br><br>
          <h2 style="color: blue;text-align: center;font-size:x-large;">BREAKFAST =6:00am-8:00am </h2><br>
          <h3 style="color: blue;text-align: center;font-size:x-large;">LUNCH =11:30am-2:00pm <h/3><br><br>
          <h3 style="color: blue;text-align: center;font-size:x-large;">SUPPER =6:00pm-8:00pm </h3><br>
      
        </p>--->
  
    </form>
  <div class="slideshow-container">
    <div class="mySlides fade">
       <div class="numbertext">1/4</div>
       <img src="images/IMG_20210609_071755_352.jpg"
       style="width:100%; height:70%">
       <div class="text"><h2 style="color: white;text-align: center;position: relative;">
        <h1 style="color: blue;text-align: center;font-style: 'Anton',sans-serif;"><b> WELCOME IN OUR ONLINE STUDENT CAFETERIA</h1>
</div>
    </div>
    <div class="mySlides fade">
       <div class="numbertext">2/4</div>
       <img src="images/IMG_20210702_123836_532c.jpg"
       style="width:100%; height:70%">
       <div class="text"style="color: blue;"><b><u>OPENING TIME</u> </h2><br>
        <h3 style="color: blue;text-align: center;"> Monday --> Sunday = 6:00am - 8:00pm</h3></div>
    
    </div>
    <div class="mySlides fade">
       <div class="numbertext">3/4</div>
       <img src="images/IMG_20210702_074932_204.jpg"
       style="width:100%; height:70%">
       <div class="text"><h1 style="color: blue;text-align: center;">OUR MESS </h1><br></div>
    
    </div>

    <div class="mySlides fade">
       <div class="numbertext">4/4</div>
       <img src="images/IMG_20210609_071755_352.jpg"
       style="width:100%; height:70%">
       <div class="text"><h1 style="color: blue;text-align: center;">LET'S CIRCULATE COINS HERE</div>
    
    </div>


</div>
<br>

<div style="text-align:center">
   <span class="dot"></span>
   <span class="dot"></span>
   <span class="dot"></span>
   <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides(){
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
  
    for (i = 0; i < slides.length; i++)
    {
      slides[i].style.display = "none";
    }
    slideIndex++
    if(slideIndex > slides.length)
    {slideIndex = 1}
       for(i = 0; i < dots.length; i++){
         dots[i].className =
    dots[i].className.replace("active","");
       }
       slides[slideIndex-1].style.display = "block";
       dots[slideIndex-1].classname += "active";
       setTimeout(showSlides, 3000);//change image every 3 seconds
}
</script>

  <div class="footer">
  Muranga University of Technology online student cafeteria [MESS].
  Developed and created by Engineer Hillary Muchui<br>
  @copyright<a href="prince.php"> Mr Prince Hillary </a>-All rights Reserved.
  
  </div>

</body>
</html>