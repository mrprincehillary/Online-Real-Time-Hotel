<?php
session_start();

include("connection.php");
//include("function1.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{

//something was posted
$name = $_POST['name'];
$regNo = $_POST['regNo'];
$checkbox = $_POST['food'];
for ($i=0; $i<sizeof($checkbox); $i++){
  $query="insert into ordered (food) values ('".$checkbox[$i]. "')";

}
if(!empty($name) && !empty($regNo))
{
      //save to database 
      $query = "insert into ordered (Name,regNo,food) values ('$name','$regNo','$checkbox')";
      mysqli_query($con, $query);

      header("Location: order.php");
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
  <style>
  body {background-color: lightblue;}
</style>
  <title>order</title>
</head>
<body>

  <h1 style="text-align: center;"> MENU </h1>
  <h2 style="text-align: center;"> Tick the available FOOD to order:</h2>

  <a href="lmenu.php" class="button" style="-webkit-appearance: button;
  -moz-appearance: button;
  appearance: button;

  text-decoration: none;
  color: initial; float: left;font-size: 20px;">BACK</a>

<hr style="color: orange;width: 50%;height:2px;">
<form method="post">
  <p style="display: block; text-align: center;">
 1.    Boiled rice = Ksh15<input type="checkbox" name="food" value="rice" style="align-content: center;"><br><br>
 2.    Ugali = Ksh10<input type="checkbox" name='food[]' value="ugali" style="align-content: center;"><br><br>
 3.    Njahi = Ksh15<input type="checkbox" name='food[]' value="njahi" style="align-content: center;"><br><br>
 4.    Beans = Ksh15<input type="checkbox" name='food[]' value="beans" style="align-content: center;"><br><br>
 5.    Ndegu = Ksh10<input type="checkbox" name='food[]' value="ndegu" style="align-content: center;"><br><br>
 6.    Githeri = Ksh15<input type="checkbox" name='food[]' value="githeri" style="align-content: center;"><br><br>
 7.    Sukuma = Ksh10<input type="checkbox" name='food[]' value="sukuma" style="align-content: center;"><br><br>
 8.    Cabbage = Ksh5<input type="checkbox" name='food[]' value="cabbage" style="align-content: center;"><br><br>
 9.    Chapati = Ksh10<input type="checkbox" name='food[]' value="chapati" style="align-content: center;"><br><br>
 10.   Beef = Ksh30<input type="checkbox" name='food[]' value="beef" style="align-content: center;"><br><br>
    

    <p style="color: green;text-align: center;">Enjoy free cold , clean safe drinking water on our tables </p>
    <hr style="color: orange;width: 30%;height:2px;">
    <p>

<input type="name" name="name" class="input-box" placeholder="Enter your Name" required>
<input type="regNo" name="regNo" class="input-box" placeholder="Enter your Reg NO:" required>
   
    
  </p>
  <p style="text-align;">
<!--<button onclick ="sendbtn()" id="sendbtn" style="text-align: center;font-size: 24px">SUBMIT ORDER</button>---->
<button type="submit" class="signup-btn">SUBMIT ORDER </button>
</p> 
</form>
      <!--<p id="demo"></p>

      <script>
        function sendbtn() {

          var txt;
          if (confirm("Do you what to submit ??")) {
            txt =" you have submited the order ! ";
          }else{
            txt =" you canceled the order!!";
          }
        }

        document.getElementById("demo").inne
        rHTML = txt;
      </script>

  </p>--->
  </p>

</body>
</html>