<?php

function check_login($con)
{

    if(isset($_SESSION['name']))
    {
       
        $id = $_SESSION['name'];
        $query = "select * from admin where name = '$name' limit 1 ";
        
        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
 
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location: login.php");
    die;
}