<?php

include 'connection.php';//creat a connection

$query = "select * from meal";//$query as a string,stores the sql query
$result = mysqli_query($con,$query);
//this is an error handling code
if($result === FALSE){
    die(mysqli_error());
}
?>
<! DOCTYPE html >
<html>
<head>
  <title>live order</title>
  <style>
  body {background-color: lightgreen;}
</style>
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

   input
   {
    color: blue;
    width: 40%;
    padding: 10px;
    border-radius: 20px;
    font-size: 24px;
    margin: 10px 0;
    border: 2px;
    outline: none;
    cursor: pointer;
    text-align: center;
    background-color: grey;
   }
   </style>
</head>
<h1 style="color: blue;text-align: center;"> ORDER </h1>

<h1 style="color: blue;text-align: center;">CURRENT MEAL AVAILABLE</h1><br>
<h1 style="color: blue;text-align: center;">Mark the food in the check box to Order</h1>
<form method="post" action="orderB.php">
<table width='900'>

  <tr>  
    
    <th><h3>Food</h3></th>
    <th><h3>Price(Ksh)</h3></th>
    <th><h3>Quantity</h3></th>
    <th><h3>Mark</h3></th> 
 </tr>
 <?php
  while($menu = mysqli_fetch_array($result)){
 ?>
     <tr>
            
            <td><?=$menu['food']; ?></td>
            <td><?=$menu['price']; ?></td>
            <td><input type="text" name="<?=$menu['p_id']; ?>"placeholder="Quantity" style="text-align: center"/></td>
            <td><input type="checkbox" name="checkbox[]" value="<?=$menu['p_id'];?>"/></td>
     </tr>
        
 <?php 
 }
 ?>
 </table><br>
<a href="lmenu.php" style="font-size: 26px;"style="float: top-right;">BACK</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<input type='submit' class='input' value='SUBMIT YOUR ORDER' name='order' />
</html>
