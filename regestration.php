<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Login | Register</title>
</head>
<body>
<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"fashion_club");

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $address = $_POST['address'];
      $result="";

   if ($username=="" || $password =="" || $email=="" || $mobile=="" || $address=="")
     {
        echo "Empty fields not allowed";
      } 
   else{
      
          $query = "insert into user(username,password,email,mobile,address) values('$username','$password','$email','$mobile','$address')" or die("not connected").mysqli_error();
          $result = $connection->query($query);
      }
      if ($result) {
        echo "Registered Sucessfully!";
      }
      else{
          echo "This username has been used, try with some other username or try using the alphabets and numbers only";
      }
       
    }
    mysqli_close($connection);
 
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
                  <h1>Register</h1>
                <form action="" method="post">
                  <label for="username">Username:</label>
                  <input type="text" name="username" required><br><br>

                  <label for="password">Password:</label>
                  <input type="password" name="password" required><br><br>

                  <label for="email">Email:</label>
                  <input type="email" name="email" required><br><br>

                  <label for="address">Contact Number:</label>
                  <input type="number" name="mobile" maxlength="10" required><br><br>

                  <label for="mobile">Address:</label>
                  <input type="textbox" name="address" required><br><br>

                    <br><br>


                    <input type="submit" value="Register" class="btn">

                    <div class="btn"><a href="login.php">Login</a></div>
                </form>
        </div>
    </div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($){
    $("input[mobile]").attr("maxlength", "10");
});
</script>

</body>
</html>


