<?php

include "connection.php";

$id = $_GET['id'];
$del = mysqli_query($con,"delete from meal where id ='$id'");

if($del)
{
    mysqli_close($con);
    header("location:edit.php");
    exit;
}
else
{
    echo"Error deleting record";
}
?>