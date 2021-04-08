<?php
$productid=$_GET['id'];
$uname=$_GET['username'];

if($productid==null && $uname==null){
    header('Location:main.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="prdlstyle.css">
    <title>Best Buy Fashion_Club </title>
</head>
<body>
<?php
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"fashion_club");

   
   
      
          $query = "SELECT * FROM products where id='$productid' "; 
          $result=mysqli_query($connection,$query);
          $row=mysqli_fetch_array($result);
          
      
   

 
?>

<div class="container">
    <div class="box">
        <div class="col1">
        <img src="<?php echo $row['image']?>" height="380px">
        </div>
        <div class="col2">
                 <h1>Your Product</h1>
                <form action="" method="post">
                  <label for="orderid">Order ID:</label>
                  <input type="text" name="orderid" value="<?php echo $uname.rand(0,1000)?>" readonly><br><br>

                  <label for="username">Username:</label>
                  <input type="text" name="username" value="<?php echo $uname?>" readonly><br><br>

                  <label for="qty">Quantity:</label>
                  <input type="number" name="qty" min="1" required><br><br>

                  <label for="size">Select Size:</label>
                  <input type="size" name="size" placeholder="S/M/L/XL/XXL" required><br><br>

                    <br><br>


                    <input type="submit" name="submit"value="Pay-<?php echo $row['price']?>/-" class="explode"></a>                 
                 </form>
        </div>
    </div>
</div>

<?php

     if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
      $orderid=$_POST['orderid'];
      $username = $uname;
      $pid=$productid;
      $price=$row['price'];
      $qty=$_POST['qty'];
      $size=$_POST['size'];
      $date   = date('Y/m/d');
      
      $result2="";

   if ($orderid=="" || $username =="" || $pid=="" || $price=="" || $qty=="" || $size=="")
     {
        echo "not working";
      }
     else{
      
          $query2 = "insert into order_record(orderid, username, productid, amount, size,qty,order_date) values('$orderid','$username',$pid,$price,'$size',$qty,'$date')" or die("not connected").mysqli_error();
          $result2 = $connection->query($query2);
      }
      if ($result2) {
        echo "Order recorded Sucessfully!";
      }
      else{
          echo "failed try again!";
      }
       
    }
    mysqli_close($connection);
 
?> 
</body>
</html>