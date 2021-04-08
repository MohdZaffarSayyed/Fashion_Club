<?php
$oid=$_GET['id'];
$usr=$_GET['unam'];
$price=$_GET['price'];
$size=$_GET['size'];
$qty=$_GET['qty'];
$date=$_GET['date'];
// echo "Today is " . date("d/m/Y") . "<br>";
 $total=$price*$qty;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style3.css">
    <title>Bill | Fashion_Club </title>
</head>
<body>
<div class="container">
    <div class="header">
        <img src="logo.jpg" height="100px">
        <div class="date">
            <h2>DATE:<?php echo $date ?></h2>
        </div>
       
    </div>
    <div class="content">
            <h1>THE FASHION CLUB</h1>
    </div>
    <div class="box">
            <table>
                <thead>
                    <th>USERNAME</th>
                    <th>ORDER ID</th>
                    <th>SIZE</th>
                    <th>QTY</th>
                    <th>PRICE</th>
                </thead>
                <tbody>
                    <td><?php echo $usr?></td>
                    <td><?php echo $oid?></td>
                    <td><?php echo $size?></td>
                    <td><?php echo $qty?></td>
                    <td><?php echo $price?></td>
                </tbody>
                <td colspan="5" class="total">Total:&nbsp;<?php echo $total?> RS</td>
            </table>
    </div>
</div>
</body>
</html>