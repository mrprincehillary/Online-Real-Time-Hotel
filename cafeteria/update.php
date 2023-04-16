<?php

include "connection.php";
$id = $_GET['id'];
$qry = mysqli_query($con,"select * from meal where id='$id'");
$data = mysqli_fetch_array($qry);

if(isset($_POST['update']))
{
    $food = $_POST['food'];
    $price = $_POST['price'];

    $edit = mysqli_query($con,"update meal set food='$food',price='$price'where id='$id'");

    if($con)
    {
        mysqli_close($con);
        header("location:edit.php");
        exit;
    }
    else
    {
        echo mysqli_error();
    }
}
?>
<style>
  body {background-color: pink;}
</style>
<h3>Update Data</h3>

<form method="POST" style="text-align: center;background-color: blue;padding:5px;">
  <input type="text"name="food"value="<?php echo $data['food'] ?>"placeholder="Enter Food"Required>
  <input type="price"name="price"value="<?php echo $data['price'] ?>"placeholder="Enter Price"Required>
  <input type="submit" name="update"value="Update">
     