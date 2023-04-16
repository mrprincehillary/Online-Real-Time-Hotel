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
       echo "0 result";
      }
    $conn-> close();
 ?>