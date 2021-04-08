
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Insert | Fashion_Club</title>
</head>
<body>
 
 <?php
  $connection=mysqli_connect("localhost","root","");
  $db=mysqli_select_db($connection,"fashion_club");
 
?>  

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pid = $_POST['pid'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $pname = $_POST['pname'];
    $result="";
    
  
    if ($pid == "" || $price == ""|| $img == ""|| $pname == "")
     {
        echo "Empty fields not allowed";
      } 
      else {
  
        $query = "insert into products(id , price , image ,pname) values('$pid','$price','$img','$pname')";
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
            <h1>Insert Product Details</h1>
                <form action="" method="post">
                    <label for="pid"> Product ID:</label>
                    <input type="number" name="pid"> <br><br>

                    <label for="price">Price:</label>
                    <input type="text" name="price"><br><br>

                    <label for="img">Image Directory:</label>
                    <input type="text"  name="img" placeholder="foldername/image.jpg"><br><br>

                    <label for="pname"> Product Name:</label>
                    <input type="text" name="pname"><br><br>

                    <input type="submit" value="submit" class="btn">

                    <div class="btn"><a href="Padmin.php">Database</a></div>
                </form>
        </div>
    </div>
</div>
</body>
</html>


