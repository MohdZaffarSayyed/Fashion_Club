<?php
session_start();
$uname=$_SESSION['admin'];
if($uname==""){

    header('Location:adminlogin.php');
}
// else{
//     echo $uname;
// }
session_destroy();


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Login | Admin</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
                  <h1>Admin Pannel</h1>
               <p class="btn"><a href="userdata.php">UserData</a></p>
               <br>
               <p class="btn"><a href="Padmin.php">Product Details</a></p>
               <br>
               <p class="btn"><a href="Pinsert.php">Insert Products</a></p>
               <br>
               <p class="btn"><a href="Pmanageradmin.php">Products Stock</a></p>
               <br>
               <p class="btn"><a href="pmanagerinsert.php">Insert New Purchase</a></p>
               <br>
               <p class="btn"><a href="orderdata.php">Order Records</a></p>
               <br>
               <p class="btn"><a href="userdoubt.php">User Query</a></p>
        </div>
    </div>
</div>


</body>
</html>

 
