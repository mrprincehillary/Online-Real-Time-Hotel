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
              //read from database
        
          $query = "select * from admin where name = '$name' limit 1";
          $result = mysqli_query($con, $query);

          if($result)
          {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['name'] === $name && $user_data['password'] === $password && $user_data['email'] === $email)
                    {
                      $_SESSION['user_id'] = $user_data['user_id'];
                      header("Location: adminhome.php");
                      die;
                    }
                }
          }
          echo "PLEASE ENTER VALID INFORMATION !!";
            
        }else
        {
          echo "PLEASE ENTER VALID INFORMATION !!";
        }
    }
?>



<! DOCTYPE html >
<html>
<head>
  <title>admin login</title>

  
  <link rel="stylesheet" href="style2.css">

</head>
<body>
  <h1 style="color: forestgreen;text-align: center"> WELCOME IN OUR CAFETERIA </h1>
  
  
  <div class="sign-up-form">
    <img src="user-b.png">
  <h1> Log in </h1>
  <form method="post">

<input type="name" name="name" class="input-box" placeholder="User Name" required>
<input type="email" name="email" class="input-box" placeholder="Email" required>
<input type="password" name="password" class="input-box" placeholder="Password" required>

<button type="submit" class="signup-btn">Log in </button>
<p> To creat an account ? <a href="adminsignup.php" style="color: red;fontsize: 36px;">Sign up</a></p>


  </form>
   </div>

</body>
</html>