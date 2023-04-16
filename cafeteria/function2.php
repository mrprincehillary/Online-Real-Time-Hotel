<?php

function check_login($con)
{

    if(isset($_SESSION['food']))
    {
       
        $id = $_SESSION['food'];
        $query = "select * from food where food = '$food' limit 1 ";
        
        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
 
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location: adminhome.php");
    die;
}