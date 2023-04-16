<?php

include "connection.php";

$id = $_GET['id'];
$order = mysqli_query($con,"insert into order_food where id ='$id'");

if($order)
{
    mysqli_close($con);
    header("location:lorder.php");
    exit;
    echo "food ordered successfull";
    
}
else
{
    echo"Error ordering food";
}
?>