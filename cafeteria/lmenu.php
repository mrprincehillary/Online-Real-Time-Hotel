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
          $query = "insert into order_food (food,price) values ('$food','$price')";
          mysqli_query($con, $query);

          header("Location: lmenu.php");
          die;
    }else
      {
          echo "PLEASE ENTER VALID INFORMATION !!";
      }
}
?>



<!DOCTYPE html>
<html>
<head>
<style>
  body {background-color: lightblue;}
</style>


   <title>LIVE  MENU</title>
   <style type="text/css">
    table{
        border-collapse: collapse;
        width: 80%;
        color: #d96459;
        font-family: monospace;
        font-size: 28px;
        text-align: center;
       }
   th{
       background-color: #d96459;
       color: white;
     }
   tr:nth-child(even) {background-color: #f2f2f2}
   </style>

</head>
<body>

<h1 style="color: blue;text-align: center;"> OUR MENU  </h1>

<h1 style="color: blue;text-align: center;">TODAY'S CURRENT MENU</h1>
<table>

<tr> 
   <th>Food</th>
   <th>Price</th>
</tr>
 <?php
     $conn = mysqli_connect("localhost","root","","login_sample_db");
     if ($conn-> connect_error){
       die("connection failed:". $conn-> connect_error);
     }

     $sql = "SELECT food,price from meal";
     $result = $conn-> query($sql);

        if($result-> num_rows > 0) {
          while ($row = $result-> fetch_assoc()) {
          echo "<tr><td>". $row["food"] ."</td><td>". $row["price"]."</td></tr>";
         }
          echo "</table>"; 
     }
     else{
       echo "OOPS !! We are sorry NO AVAILABLE FOOD ON THE MOMENT ";
      }
    $conn-> close();
 ?>
</table>
<!--
<form style="text-align: center; margin: 5px;padding:5px;olor: sky-blue;" method="POST">
  <div> 
   <h2 style="text-align: center;width: 100%"> Place your Order </h2>
     FOOD <input type="text" name="food" class="input-box" placeholder="meal ordered"><br><br>
     PRICE <input type="price" name="price" class="input-box" placeholder="current price"><br><br>
     <button type="submit" class="signup-btn">SUBMIT ORDER </button>
  </div>
</form>--->
<br>
<a href="face1.php" class="button" style="color: darkred;font-size: 30px;float: top-left;">Back</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="order.php" class="button" style="color: darkred;font-size: 40px;text-align: centre;">TO ORDER</a>
<p
      style="color: black;text-align: center;">
       Nice appetite<br>
       Thanks ,Welcome again<br>
       Incase of any suggestions to our service please feel free and communicate to us
     </p>
</body>
</html>