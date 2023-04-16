<?php
//order button
 include 'connection.php'
 $amount = 0;
 $date = date("Y-m-d");

 //$checkbox = $_POST['checkbox[]'];
 //$result = mysqli_query("select * from meal where p_id=".$p_id);

 
 if(isset($_POST['order'])){
     $checkbox = $_POST['checkbox[]'];

    
     $countCheck = count($_POST['checkbox[]']);
     $amount = 0;
     for($i=0;$i<$countCheck;$i++){
         $p_id = $checkbox[$i];
         $qty = $_POST["".$p_id.""];

         $result = mysqli_query("select * from meal where p_id=".$p_id);

         while ($row = mysqli_fetch_array($result)){
             if($p_id = isset($_POST["".$p_id.""])){
                 $amount += $row['price'] * $qty;

             }
         }
     }
 
 }
 
 
 mysqli_query("insert into 'order_food'(status, customerID, date, amount) values ('in Process','1','".$date."', ".$amount.")");
 $id = mysqli_insert_id();

 if(isset($_POST['order'])){
     $checkbox = $_POST['checkbox'];
     $countCheck = count($_POST['checkbox']);
     for($i=0;$i<$countCheck;$i++){
         $p_id = $checkbox[$i];
         $qty = $_POST["".$p_id.""];
         mysqli_query("insert into ofood(orderID, p_id, quantity) values(".$id",".$p_id.",".$qty.")");
     }
 }

header("location: order-summary.php?orderid=".$id."");

?>   