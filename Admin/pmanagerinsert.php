
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Product Manager Insert| Fashion_Club</title>
</head>
<body>
 
 <?php
  $connection=mysqli_connect("localhost","root","");
  $db=mysqli_select_db($connection,"fashion_club");
 
?>  

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pid = $_POST['pid'];
    $qty = $_POST['qty'];
    $brand = $_POST['brand'];
    $result="";
    
  
    if ($pid == "" || $qty == ""|| $brand == "")
     {
        echo "Empty fields not allowed";
      } 
      else {
  
        $query = "insert into product_manager(product_id , qty , brand) values('$pid','$qty','$brand')";
        $result = $connection->query($query);
      }
        if ($result) {
          echo "Data inserted Sucessfully!";
        }
       
    }
    mysqli_close($connection);
 
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <h1> Product Stock Details</h1>
                <form action="" method="post">
                    <label for="pid"> Product ID:</label>
                    <input type="number" name="pid"> <br><br>

                    <label for="qty">Quantity:</label>
                    <input type="number" name="qty"><br><br>

                    <label for="brand"> Brand Name:</label>
                    <input type="text" name="brand"><br><br>

                    <input type="submit" value="Insert" class="btn">

                    <div class="btn"><a href="Pmanageradmin.php">Database</a></div>
                </form>
        </div>
    </div>
</div>
</body>
</html>


