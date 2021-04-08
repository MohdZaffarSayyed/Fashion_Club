<?php
$uname=$_GET['username'];
if($uname==null){
    header('Location:main.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style4.css">
    <title>Free To Ask</title>
</head>
<body>
<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"fashion_club");

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $doubt=$_POST['doubt'];
      $username=$uname;
      $result="";

   if ($uname=="" || $doubt=="")
     {
        echo "Empty fields not allowed";
      } 
   else{
      
          $query = "insert into contact(username,query) values('$username','$doubt')" or die("not connected").mysqli_error();
          $result = $connection->query($query);
      }
      if ($result) {
        echo "Your Query Regsitered Sucessfully! will try to rectify it ASAP";
      }
      else{
          echo "Something went wrong! Please try again";
      }
       
    }
    mysqli_close($connection);
 
?>
<div class="container-fluid">
    <div class="row" >
        <div class="col-lg-4">
                  <h1>Feel Free To Contact Us</h1>
                <form action="" method="post">
                  <label for="username">Username:</label>
                  <input type="text" value="<?php echo $uname?>" required><br><br>

                  <label for="doubt">Write here:</label>
                  <textarea name="doubt" id="" cols="100" rows="10" required></textarea>
                    <br><br>


                    <input type="submit" value="Submit" class="btn">

                </form>
        </div>
    </div>
</div>


</body>
</html>


