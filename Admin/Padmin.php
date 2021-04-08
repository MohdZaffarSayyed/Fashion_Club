
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <title>Product Admin </title>
</head>
<body>
<?php
if(isset($_POST['submitDeleteBtn'])){
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"fashion_club");
    $key=$_POST['KeyToDelete'];

    $check=mysqli_query($connection,"select * from products where id=$key") or die("not found".mysqli_error($connection));
    if(mysqli_num_rows($check)>0){
        mysqli_query($connection,"delete from products where id=$key");
    }
    else{
       echo "Not found";
    }
}
?>
<table class="content-table">
        <thead>
            <tr>
                <th>Product_ID</th>
                <th>Price</th>
                <th>Image_Directory</th>
                <th>Product_Name</th>
                <th>Tick To Delete</th>
                <th>Delete</th>
            </tr>
        </thead>

    <?PHP
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"fashion_club");

    ?>
    <?PHP
    $query=mysqli_query($connection,"select * from products");
   

    while($row=mysqli_fetch_array($query)){
        ?>

      
        <tbody>
            <tr>
                <form action="" method="post" role="form">
                <td><?PHP echo $row["id"];?></td>
                <td><?PHP echo $row["price"];?></td>
                <td><?PHP echo $row["image"];?></td>
                <td><?PHP echo $row["pname"];?></td>
                <td>
                    <input type="checkbox" name="KeyToDelete" value="<?php echo $row["id"];?>" required>
                </td>
                <td class="btn">
                    <input type="submit" name="submitDeleteBtn"  value="Delete" required>
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