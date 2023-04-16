<?php
session_start();

    include("connection.php");
    //include("function2.php");

   
if($_SERVER['REQUEST_METHOD'] == "POST")
{

    //something was posted
    $food = $_POST['food'];
    $price = $_POST['price'];
   

    if(!empty($food) && !empty($price) && is_numeric($price))
    {
          //save to database 
          $query = "insert into meal (food,price) values ('$food','$price')";
          mysqli_query($con, $query);

          header("Location: adminhome.php");
          die;
    }else
      {
          echo "PLEASE ENTER VALID INFORMATION !!";
      }
}
?>


<! DOCTYPE html >
<html>
<head>
<style>
  body {background-color: powderblue;}
</style>
  <title >ONLINE MESS(STUDENT CAFETERIA)</title>
  <style="background-color: pinkpowder;"></style>
  <style>
    .footer{
      position: fixed;
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

  </style>

</head>

<body>
<div class="menu-bar">
<ul>  
  <li><a href="face.php" class="button" style="color: darkred;font-size: 30px;" style="float: top-left;">START</a></li>
  <!--<li><a href="menu.php" class="button" style="color: darkred;font-size: 30px;"style="float: top-right;">MENU</a></li>--->
  <li><a href="edit.php" class="button" style="color: darkred;font-size: 30px;" style="float: top-left;">UPDATE</a></li>
  <li><a href="view.php" class="button" style="color: darkred;font-size: 30px;" style="float: top-left;">VIEW</a></li>
  <li><a href="logout1.php" class="button" style="color: red;font-size: 30px;" style="float: top-left;">Logout</a></li>

  </ul>
</div>

  <!-- Hello, <//?php echo $name['name'];?>-->

  <h1 style="color: red;text-align: center;"> WELCOME IN OUR ONLINE STUDENT</h1>
  <h1 style="color: red;text-align: center;">CAFETERIA </h1>

  
  <hr style="color:red;padding: 1px;width: 50%;height: 1px;background-color: green;">

  <form style="text-align: center; margin: 5px;padding:5px;olor: sky-blue;" method="POST">
  <div> 
  <h2 style="text-align: center;width: 100%"> Place new Menu </h2>
     FOOD <input type="text" name="food" class="input-box" placeholder="available meal"><br><br>
     PRICE <input type="price" name="price" class="input-box" placeholder="current price"><br><br>
     <button type="submit" class="signup-btn">SUBMIT FOOD </button>
     
     <!---<button onclick ="sendbtn()" id="sendbtn" style="text-align: center;font-size: 24px">SUBMIT FOOD</button>
</p> 

      <p id="demo"></p>

      <script>
        function sendbtn() {

          var txt;
          if (confirm("Do you what to submit ??")) {
            txt =" you have submited the order ! ";
          }else{
            txt =" you canceled the order!!";
          }
        }

        document.getElementById("demo").inne
        rHTML = txt;
      </script>

  </p>--->
  </div>
  
  </form>
 <!-- <p style="color: blue;text-align: center;"> View in a comrade mode <a href="face1.php" style="color: red;" >COMRADE HOME PAGE</a> </p>-->
     
</body>
</html>