<?php
session_start();

    include("connection.php");
    include("function.php");

   
if($_SERVER['REQUEST_METHOD'] == "POST")
{

    //something was posted
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($email) && !empty($password) && !is_numeric($user_name) && !$password < 4)
    {
          //save to database 
          $user_id = random_num(20);
          $password = md5($password);//harshing(password encrypting)
          $query = "insert into users (user_id,user_name,email,password) values ('$user_id','$user_name','$email','$password')";
          mysqli_query($con, $query);

          header("Location: login.php");
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
  <title> online mess</title>

  
  <link rel="stylesheet" href="style1.css">

</head>
<body>
  <h1> Start up page  </h1>
  
  
  <div class="sign-up-form">
    <img src="user-b.png">
  <h1> Sign up</h1>
  <form method="post">

<input type="text" name="user_name" class="input-box" placeholder="User Name" required>
<input type="email" name="email" class="input-box" placeholder="Email" required>
<input type="password" name="password" class="input-box" placeholder="Password" required>
<p> <span><input type="checkbox" required></span>i agree to the terms and conditions of the services </p>
<button type="submit" class="signup-btn">Sign up </button>
<p> Do you have an account ? <a href="login.php" style="color: red;fontsize: 36px;">Log in</a></p>

<p style="color: blue;"> FOR AN ADMIN CLICK HERE =<a href="admin.php" style="color: pink;fontsize: 40px;">ADMIN</a></p>


  </form>
   </div>

</body>
</html>