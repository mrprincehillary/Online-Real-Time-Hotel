<?php
session_start();

    include("connection.php");
    include("function1.php");

   
if($_SERVER['REQUEST_METHOD'] == "POST")
{

    //something was posted
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($name) && !empty($email) && is_numeric($password))
    {
          //save to database 
          $query = "insert into admin (name,email,password) values ('$name','$email','$password')";
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
  <title> admin sign up</title>

  
  <link rel="stylesheet" href="style2.css">

</head>
<body>
  <h1 style="color: forestgreen;text-align: center"> CREAT AN ACCOUNT HERE </h1>
  
  
  <div class="sign-up-form">
    <img src="user-b.png">
  <h1> Sign up</h1>
  <form method="post"action="adminsignup.php">

<input type="name" name="name"class="input-box" placeholder="User Name">
<input type="email" name="email"class="input-box" placeholder="Email">
<input type="password" name="password"class="input-box" placeholder="Password">
<p> <span><input type="checkbox"></span>i agree to the terms and conditions of the services </p>
<button type="submit" class="signup-btn">Sign up </button>
<p> Do you have an account ? <a href="admin.php" style="color: red;fontsize: 36px;">Log in</a></p>


  </form>
   </div>

</body>
</html>