
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <title>Orders | Fashion_Club </title>
</head>
<body>
<?php
if(isset($_POST['submitDeleteBtn'])){
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"fashion_club");
    $key=$_POST['KeyToDelete'];

    $check=mysqli_query($connection,"select * from order_record where orderid='$key'") or die("not found".mysqli_error($connection));
    if(mysqli_num_rows($check)>0){
        mysqli_query($connection,"delete from order_record where orderid='$key'");
    }
    else{
       echo "Not found";
    }
}
?>
<table class="content-table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Username</th>
                <th>Product ID</th>
                <th>Amount(1N)</th>
                <th>Size</th>
                <th>Quantity</th>
                <th>Date</th>
                <th>Tick to delete</th>
                <th>Delete</th>
                <th>Get Bill</th>
            </tr>
        </thead>

    <?PHP
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"fashion_club");

    ?>
    <?PHP
    $query=mysqli_query($connection,"select * from order_record");
   

    while($row=mysqli_fetch_array($query)){
        ?>

      
        <tbody>
            <tr>
                <form action="" method="post" role="form">
                <td><?PHP echo $row["orderid"];?></td>
                <td><?PHP echo $row["username"];?></td>
                <td><?PHP echo $row["productid"];?></td>
                <td><?PHP echo $row["amount"];?></td>
                <td><?PHP echo $row["size"];?></td>
                <td><?PHP echo $row["qty"];?></td>
                <td><?PHP echo $row["order_date"];?></td>
                <td>
                    <input type="checkbox" name="KeyToDelete" value="<?php echo $row["orderid"];?>" required>
                </td>
                <td class="btn">
                    <input type="submit" name="submitDeleteBtn"  value="Delete" required>
                </td>
                <td>
                <a href="bill.php? unam=<?php echo $row['username']?>&id=<?php echo $row['orderid']?> &price=<?php echo $row['amount']?>&size=<?php echo $row['size']?>&qty=<?php echo $row['qty']?>&date=<?php echo $row['order_date']?>" class="btn">GET BILL</a>
                </td>
    
                </form>
            </tr>
    
        </tbody>
        <?php
    }
    ?>
    </table>
    
    


</body>
</html>