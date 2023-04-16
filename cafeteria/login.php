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

    if(!empty($user_name) && !empty($email) && !is_numeric($user_name) && !($password)< 4)
    {
          //read from database
    $password = md5($password);
      $query = "select * from users where user_name = '$user_name' limit 1";
      $result = mysqli_query($con, $query);

      if($result)
      {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['user_name'] === $user_name && $user_data['password'] === $password && $user_data['email'] === $email)
                {
                  $check = password_verify( $password, $hashedPasswordFromDatabase);
                  $_SESSION['user_id'] = $user_data['user_id'];
                  header("Location: face1.php");
                  die;
                }
            }
      }else
      echo "PLEASE ENTER VALID INFORMATION !!";
        
    }else
    {
      echo "PLEASE ENTER DESIRED INFORMATION !!";
    }
}
?>

<! DOCTYPE html >
<html>
<head>
  <title>login</title>

  
  <link rel="stylesheet" href="style1.css">

   </head>
 <body>
   <h1> log in page   </h1>
   
  
   <div class="sign-up-form">
     <img src="user-b.png">
      <h1> Log in </h1>
         <form action="login.php" method="post">

            <input type="text" name="user_name" class="input-box" placeholder="UserName" required>
            <input type="email" name="email" class="input-box" placeholder="Email" required>
            <input type="password" name="password" class="input-box" placeholder="Password" required>

            <button type="submit" class="signup-btn">Log in </button>
            <p>To creat an account ? <a href="face.php" style="color: red;fontsize: 36px;">Sign Up</a></p>


         </form>
   </div>

 </body>
</html>