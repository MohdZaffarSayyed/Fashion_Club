<?php
SESSION_START();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Login | Register</title>
</head>
<body>
 <?php
 error_reporting(0);
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"fashion_club");

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $result="";

   if ($username=="" || $password =="")
     {
        echo "Empty fields not allowed";
      } 
   else{
      
          $query = "SELECT * from user where username='$username' and password='$password'"; 
          $result=mysqli_query($connection,$query);
          $row=mysqli_fetch_array($result);
            if($row!=null){
                echo " You Have Successfully Logged in";
                $_SESSION['user_name']=$username;
                header('Location: main.php');
            
            }
            else{
                echo " You Have Entered Incorrect username or Password";
                
            }
      }
     
       
    }
    mysqli_close($connection);
 
?> 
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
                  <h1>Login</h1>
                <form action="" method="post">
                  <label for="username">Username:</label>
                  <input type="text" name="username" required><br><br>

                  <label for="password">Password:</label>
                  <input type="password" name="password" required><br><br>

                    <br><br>


                    <input type="submit" value="Login" class="btn">

                    <div class="btn"><a href="regestration.php">Register</a></div>
                </form>
        </div>
    </div>
</div>


</body>
</html>

 
