# Online-Real-Time-Hotel

1.1 Introduction
Online student cafeteria is a system that enables students to access student cafeteria online through their gadget by viewing the menu available each time. A student is just required to register in the online cafeteria by providing their names, email and registration number.one sets a password to remember, to ensure security of the system. After registering, one can view or check the current menu. if satisfied by the menu one can decide to place an order for their meal and take them at the physical student cafeteria. The cafeteria manager is supposed to be registered within the system to update menu and remove any food from the menu in case it is no longer available. The manager can view the ordered food and update prices in case need arises. The cafeteria is easily accessible and reduces time to walk a long distance to the physical cafeteria to just look the meal there.
1.2 Background
Student cafeteria has been operating just manually and not embedded in the online service. Menu is physically written on a wooden board where students comes to check and view the current available food. One my walk all the way from manyotta hostels just to come and check the prepared food ,somedays you my walk long distance hungry and expecting to eat food in the cafeteria just to come and find that no available food at the moment or meet that it is only ugali and beans left and at a time you may met the meal you dislikes thus ending up staying hungry .
This system will save time of moving from one place to the physical student cafeteria through accessing it online. With the online student cafeteria one can view the ready prepared food in the cafeteria and decides if one is satisfied with it. One can proceed and place an order online for the meal of their choice and collect it in the physical cafeteria.
It will save the café manager the burden of writing the available food and rubbing it when it no longer available, it will save the chalks or improve the
pg. 6
café service into digital through availability of online service as according to the current world everything is available online
It will also enable one to order and fetch meal later avoiding the situation where one misses the food since he/she was in class and could not manage to be in the physical café earlier.
1.3 Objectives
The objectives of online student cafeteria are:
❖ To make student cafeteria service accessible online
❖ To ensure the café is within the current technology
❖ To make it possible to make order online
❖ To make it easy for student to access it at their comfort
❖ To ensure good management and operation in touch of a button
❖ To reduce time spent in moving long distance just to view which meal is prepared
❖ To ensure students can view current meal available before making order
2.0 Purpose scope and applicability
2.1 Purpose
The purpose of this project it to provide online service for the student cafeteria ,this will enable students(comrades ) to access it any time and from their comfort .it will ease the need to move to the physical café to see the physical menu since through their phones or laptops they will be able to access the online cafeteria and even place some order there .
Other purposes are:
▪ It will modify the cafeteria to suit the current technology and generation.
▪ It will store the information of running the cafeteria in the database for reference.
▪ Ease the café managers from the tedious manual work.
▪ It will enable student to place their order online and collect their preserved food afterwards.
pg. 7
2.2 Scope
The aim of this system is to modify the physical cafeteria to suite the current market and offer online service as everything now is done online. Student are supposed to create account with the online mess to enable them to access it. Student details and information are stored in the database which is the center of the information. This enables things to be simplified and considerably
pg. 8
quickened, making the jobs of those involved easier. It supports the current process but centralizes it and makes it possible for decisions to be made in an easier way.
From the end user perspective, Online Student Cafeteria System consists of two functional elements;
1. Customer transaction module
2. Employee transaction module
Customer transaction module
An enhanced automized system is developed to maintain customer operation features. Features include;
➢ Creation of an account
➢ Viewing of menu
➢ Ordering food
➢ Viewing the services offered and giving feedback
Employee transaction module
An enhanced automized system is developed to maintain café manager’s operation features. Features include;
➢ Creating of account
➢ Insert the current food menu
➢ Update the food menu
➢ Delete food from the menu.
2.3 Applicability
This system can be used to improve the running of student cafeteria by inserting this technology of online services
It can also be adapted and be used in hotels and restaurants’.it can also be modified to suite many companies, industries and business selling their product online.
pg. 9
3.0 Survey of technologies
To develop a web based online student cafeteria, I used the following tools to develop and design the system;
i. PHP
ii. MYSQL
iii. XAMP as my server
Some of the reasons I used the above tools are;
PHP: Is widely used general purpose scripting language that is especially suited for Web development and can be embedded into HTML.
It’s an open source for web development so I had some php files that are related to the database
MYSQL: This is the most popular open-source database system. The data in MYSQL is stored in database objects called tables.
A table is a collection of related data entries and it consists of columns and rows.
XAMP: XAMP is also a free and open source cross platform web-server solution stack page, consisting mainly of Apache HTTP server, MYSQL database and interpreters for scripts written in PHP and Perl programming languages
TECHNOLOGIES
The technologies that are necessary to build the dynamic web application are;
Client script
A client script is a program that is embedded in a webpage. The code is interpreted by the browser, which provides interactive experience for end user. I used HTML as it was easier to understand.
Server script
A server script is a program embedded in a webpage that is located in the server side. The code is interpreted by server software and it plays a key role in dynamic web application. The webpage containing server script is also called Active Server Page (ASP)file. Server script is never sent to a client machine directly; instead, it dynamically generates HTML and client script that are sent back to browser. I used php to write the server script.
4.0 Conceptual model
The conceptual models are used to produce a model for the system describing the operations that can be performed on the system and the allowable sequences of these operations. I used Data Flow Diagrams and entity relationship model to show the model operation of the online student cafeteria system.
Data flow diagram
pg. 10
This is a graphical tool used to describe and analyse movements of data through a system. The transformation of data from input to output, may be described logically and independently of physical components associated with the system. It shows the flow of data
4.1 SYSTEM DESIGN
4.2 BASIC MODULES SCHEMA DESIGN
For the system to run it should have sign up module, log in module and the index page which is my home page.
This is the codes for the:
Sign up page <?php session_start(); include("connection.php"); include("function.php");
pg. 11
if($_SERVER['REQUEST_METHOD'] == "POST") { //something was posted $reg_num = $_POST['reg_num']; $email = $_POST['email']; $password = $_POST['password']; if(!empty($reg_num) && !empty($email) && !empty($password) && !$password < 4) { //save to database $user_id = random_num(20); $password = md5($password);//harshing(password encrypting) $query = "insert into users (user_id,reg_num,email,password) values ('$user_id','$reg_num','$email','$password')"; mysqli_query($con, $query); header("Location: login.php"); die; }else { echo "PLEASE ENTER VALID INFORMATION !!"; } } ?> <! DOCTYPE html > <html> <head> <title> online mess</title> <link rel="stylesheet" href="style1.css"> </head> <body> <h1> Start up page </h1> <div class="sign-up-form"> <img src="user-b.png"> <h1> Sign up</h1> <form method="post">
pg. 12
<input type="text" name="reg_num" class="input-box" placeholder="Reg Number" required> <input type="email" name="email" class="input-box" placeholder="Email" required> <input type="password" name="password" class="input-box" placeholder="Password" required> <p> <span><input type="checkbox" required></span>i agree to the terms and conditions of the services </p> <button type="submit" class="signup-btn">Sign up </button> <p> Do you have an account ? <a href="login.php" style="color: red;fontsize: 36px;">Log in</a></p> <p style="color: blue;"> FOR AN ADMIN CLICK HERE =<a href="admin.php" style="color: pink;fontsize: 40px;">ADMIN</a></p> </form> </div> </body> </html>
Log in page : <?php session_start(); include("connection.php"); include("function.php"); if($_SERVER['REQUEST_METHOD'] == "POST") { //something was posted $reg_num = $_POST['reg_num']; $email = $_POST['email']; $password = $_POST['password']; if(!empty($reg_num) && !empty($email) && !($password)< 4) { //read from database $password = md5($password); $query = "select * from users where reg_num = '$reg_num' limit 1"; $result = mysqli_query($con, $query); if($result) {
pg. 13
if($result && mysqli_num_rows($result) > 0) { $user_data = mysqli_fetch_assoc($result); if($user_data['reg_num'] === $reg_num && $user_data['password'] === $password && $user_data['email'] === $email) { $check = password_verify( $password, $hashedPasswordFromDatabase); $_SESSION['user_id'] = $user_data['user_id']; header("Location: face1.php"); die; }else echo "WRONG REGISTRATION NUMBER !!"; "OR "; "WRONG PASSWORD !!! TRY AGAIN "; } }else echo "PLEASE ENTER VALID INFORMATION !!"; }else { echo "PLEASE ENTER DESIRED INFORMATION !!"; } } ?> <! DOCTYPE html > <html> <head> <title>login</title> <link rel="stylesheet" href="style1.css"> </head> <body> <h1> log in page </h1> <div class="sign-up-form"> <img src="user-b.png"> <h1> Log in </h1> <form action="login.php" method="post">
pg. 14
<input type="text" name="reg_num" class="input-box" placeholder="Reg Number" required> <input type="email" name="email" class="input-box" placeholder="Email" required> <input type="password" name="password" class="input-box" placeholder="Password" required> <button type="submit" class="signup-btn">Log in </button> <p>To creat an account ? <a href="face.php" style="color: red;fontsize: 36px;">Sign Up</a></p> </form> </div> </body> </html>
Home page (index page); <?php session_start(); include("connection.php"); include("function.php"); $user_data = check_login($con); ?> <! DOCTYPE html > <html> <head> <title >ONLINE MESS(STUDENT CAFETERIA)</title> <link rel="stylesheet" type="text/css" href="style.css"> </head> <body> <div class="menu-bar"> <ul> <li><a href="lmenu.php" style="color: white;font-size: 26px;">MENU</a></li> <li><a href="about.php" style="color: white;font-size: 26px;"style="float: top-right;">ABOUT</a></li> <li><a href="service.php" style="color: white;font-size: 26px;"style="float: top-right;">SERVICES</a></li>
pg. 15
<li><a href="logout.php" style="color: red;font-size: 20px;" style="float: right;">logout</a></li> </ul> </div> <marquee bgcolor=red direction=right align=bottom behavior=alternate color=blue>HELLO DEAR COMRADE WELCOME</marquee> <br> <div class="slideshow-container"> <div class="mySlides fade"> <div class="numbertext">1/4</div> <img src="images/IMG_20210609_071755_352.jpg" style="width:100%; height:70%"> <div class="text"><h2 style="color: white;text-align: center;position: relative;"> <h1 style="color: blue;text-align: center;font-style: 'Anton',sans-serif;"><b> WELCOME IN OUR ONLINE STUDENT CAFETERIA</h1> </div> </div> <div class="mySlides fade"> <div class="numbertext">2/4</div> <img src="images/IMG_20210702_123836_532c.jpg" style="width:100%; height:70%"> <div class="text"style="color: blue;"><b><u>OPENING TIME</u> </h2><br> <h3 style="color: blue;text-align: center;"> Monday --> Sunday = 6:00am - 8:00pm</h3></div> </div> <div class="mySlides fade"> <div class="numbertext">3/4</div> <img src="images/IMG_20210702_074932_204.jpg" style="width:100%; height:70%"> <div class="text"><h1 style="color: blue;text-align: center;">OUR MESS </h1><br></div> </div> <div class="mySlides fade"> <div class="numbertext">4/4</div> <img src="images/IMG_20210609_071755_352.jpg" style="width:100%; height:70%"> <div class="text"><h1 style="color: blue;text-align: center;">LET'S CIRCULATE COINS HERE</div> </div>
pg. 16
</div> <br> <div style="text-align:center"> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> </div> <script> var slideIndex = 0; showSlides(); function showSlides(){ var i; var slides = document.getElementsByClassName("mySlides"); var dots = document.getElementsByClassName("dot"); for (i = 0; i < slides.length; i++) { slides[i].style.display = "none"; } slideIndex++ if(slideIndex > slides.length) {slideIndex = 1} for(i = 0; i < dots.length; i++){ dots[i].className = dots[i].className.replace("active",""); } slides[slideIndex-1].style.display = "block"; dots[slideIndex-1].classname += "active"; setTimeout(showSlides, 3000);//change image every 3 seconds } </script> <div class="footer"> Muranga University of Technology online student cafeteria [MESS]. Developed and created by Engineer Hillary Muchui<br> @copyright<a href="prince.php"> Mr Prince Hillary </a>-All rights Reserved. </div> </body> </html>
Codes for the admin(cafeteria manager) side :
pg. 17
To enable the café manager to insert food and price in the menu I used this; <?php session_start(); include("connection.php"); //include("function2.php"); if($_SERVER['REQUEST_METHOD'] == "POST") { //something was posted $food = $_POST['food']; $price = $_POST['price']; if(!empty($food) && !empty($price) && is_numeric($price)) { //save to database $query = "insert into meal (food,price) values ('$food','$price')"; mysqli_query($con, $query); header("Location: adminhome.php"); die; }else { echo "PLEASE ENTER VALID INFORMATION !!"; } } ?> <! DOCTYPE html > <html> <head> <style> body {background-color: powderblue;} </style> <title >ONLINE MESS(STUDENT CAFETERIA)</title> <link rel="stylesheet" type="text/css" href="style.css"> </head> <body> <div class="menu-bar"> <ul>
