 <?php
session_start();
$uname=$_SESSION['user_name'];
if($uname==""){

    header('Location:login.php');
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
    <title>Fashion_Club | Digital world of fashion for Men</title>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
    <div class="container">
    <div class="navbar">
       <div class="logo">
           <img src="images/logo.jpg" alt="logo" width="125px">
       </div>
       <nav>
           <ul>
               <li><a href="main.php">HOME</a></li>
               <li><a href="product.php?username=<?PHP echo $uname?>">PRODUCT</a></li>
               <li><a href="#aboutus">ABOUT</a></li>
               <li><a href="contact.php?username=<?PHP echo $uname?>">CONTACT</a></li>
               <li><a href="regestration.php">ACCOUNT</a></li>
               <li><a href="http://localhost/WordGame/mainpage.php">PLAY GAME</a></li>

           </ul>
           <img src="images/cart.png" width="30px" height="30px">
       </nav>
   </div>
   <div class="row">
       <div class="col-2">
            <h1>Awesome Looks! <br>with the latest trends</h1>
            <p>Come on generations, lets be the part of trending world. <br>
                Get unique looks with best quality. 
            </p>
            <a href="product.php?username=<?PHP echo $uname?>" class="explode">Ready To Explode &#9818;</a>
       </div>
       <div class="col-2">
            <img src="images/image1.png" alt="">
       </div>
   </div>
    </div>
    </div>
   
    <!-- Products Categories -->
    <div class="categories">
        <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="images/category-1.jpg" width="120px" height="450px" alt="">
            </div>
            <div class="col-3">
            <img src="images/category-2.jpg" width="120px" height="450px" alt="">
            </div>
            <div class="col-3">
            <img src="images/category-3.jpg" width="120px" height="450px" alt="">
            </div>
        </div>
        </div>
        
    </div>
    <div class="categories">
        <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="images/category-4.jpg" width="120px" height="450px" alt="">
            </div>
            <div class="col-3">
            <img src="images/category-5.jpg" width="120px" height="450px" alt="">
            </div>
            <div class="col-3">
            <img src="images/category-6.jpg" width="120px" height="450px" alt="">
            </div>
        </div>
        </div>
        
    </div>
    
    <?PHP
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"fashion_club");

    ?>
    
    <?PHP
    $res=mysqli_query($connection,"select * from products where id=100");
    $row=mysqli_fetch_array($res);

    $res1=mysqli_query($connection,"select * from products where id=101");
    $row1=mysqli_fetch_array($res1);

    $res2=mysqli_query($connection,"select * from products where id=102");
    $row2=mysqli_fetch_array($res2);

    $res3=mysqli_query($connection,"select * from products where id=103");
    $row3=mysqli_fetch_array($res3);

    $res4=mysqli_query($connection,"select * from products where id=104");
    $row4=mysqli_fetch_array($res4);

    $res5=mysqli_query($connection,"select * from products where id=105");
    $row5=mysqli_fetch_array($res5);

    $res6=mysqli_query($connection,"select * from products where id=106");
    $row6=mysqli_fetch_array($res6);

    $res7=mysqli_query($connection,"select * from products where id=107");
    $row7=mysqli_fetch_array($res7);

    $res8=mysqli_query($connection,"select * from products where id=108");
    $row8=mysqli_fetch_array($res8);

    $res9=mysqli_query($connection,"select * from products where id=109");
    $row9=mysqli_fetch_array($res9);

    $res10=mysqli_query($connection,"select * from products where id=110");
    $row10=mysqli_fetch_array($res10);

    $res11=mysqli_query($connection,"select * from products where id=111");
    $row11=mysqli_fetch_array($res11);

    $res12=mysqli_query($connection,"select * from products where id=112");
    $row12=mysqli_fetch_array($res12);

    $res13=mysqli_query($connection,"select * from products where id=113");
    $row13=mysqli_fetch_array($res13);

    $res14=mysqli_query($connection,"select * from products where id=114");
    $row14=mysqli_fetch_array($res14);

    $res15=mysqli_query($connection,"select * from products where id=115");
    $row15=mysqli_fetch_array($res15);

    $res16=mysqli_query($connection,"select * from products where id=116");
    $row16=mysqli_fetch_array($res16);
    ?>

    <!-- Trending Shirts -->
    <div class="small-container">
    <div class="title">
    <h2>Trending Shirts &#9832;</h2>
    </div>
    <div class="row">
        <div class="col-4">
       
            <img src="<?PHP echo $row1["image"]?>" height="380px" alt="">
            <h4><?PHP echo $row1["pname"];?></h4>
            <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            </div>
            <p><?PHP echo "₹";echo $row1["price"];echo "/-";?></p>
        </div>
        <div class="col-4">
        <img src="<?PHP echo $row2["image"]?>" height="380px" alt="">
            <h4><?PHP echo $row2["pname"];?></h4>
            <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            </div>
            <p><?PHP echo "₹";echo $row2["price"];echo "/-";?></p>
        </div>
        <div class="col-4">
        <img src="<?PHP echo $row3["image"]?>" height="380px" alt="">
            <h4><?PHP echo $row3["pname"];?></h4>
            <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            </div>
            <p><?PHP echo "₹";echo $row3["price"];echo "/-";?></p>
        </div>
        <div class="col-4">
        <img src="<?PHP echo $row4["image"]?>" height="380px" alt="">
            <h4><?PHP echo $row4["pname"];?></h4>
            <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            </div>
            <p><?PHP echo "₹";echo $row4["price"];echo "/-";?></p>
        </div>
    </div>
</div>

  
    
<!-- Trending T-shirts -->
<div class="small-container">
        <div class="title">
        <h2>Trending T-shirts &#9832;</h2>
        </div>
        <div class="row">
            <div class="col-4">
            <img src="<?PHP echo $row5["image"]?>" height="380px" alt="">
            <h4><?PHP echo $row5["pname"];?></h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <p><?PHP echo "₹";echo $row5["price"];echo "/-";?></p>
            </div>
            <div class="col-4">
            <img src="<?PHP echo $row6["image"]?>" height="380px" alt="">
            <h4><?PHP echo $row6["pname"];?></h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                </div>
                <p><?PHP echo "₹";echo $row6["price"];echo "/-";?></p>
            </div>
            <div class="col-4">
            <img src="<?PHP echo $row7["image"]?>" height="380px" alt="">
            <h4><?PHP echo $row7["pname"];?></h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                </div>
                <p><?PHP echo "₹";echo $row7["price"];echo "/-";?></p>
            </div>
            <div class="col-4">
            <img src="<?PHP echo $row8["image"]?>" height="380px" alt="">
            <h4><?PHP echo $row8["pname"];?></h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                </div>
                <p><?PHP echo "₹";echo $row8["price"];echo "/-";?></p>
            </div>
        </div>
    </div>



    <!-- Trending Casual Pants -->
    <div class="small-container">
        <div class="title">
        <h2>Trending Casual Pants &#9832;</h2>
        </div>
        <div class="row">
            <div class="col-4">
            <img src="<?PHP echo $row9["image"]?>" height="380px" alt="">
            <h4><?PHP echo $row9["pname"];?></h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <p><?PHP echo "₹";echo $row9["price"];echo "/-";?></p>
            </div>
            <div class="col-4">
            <img src="<?PHP echo $row10["image"]?>" height="380px" alt="">
            <h4><?PHP echo $row10["pname"];?></h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                </div>
                <p><?PHP echo "₹";echo $row10["price"];echo "/-";?></p>
            </div>
            <div class="col-4">
            <img src="<?PHP echo $row11["image"]?>" height="380px" alt="">
            <h4><?PHP echo $row11["pname"];?></h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                </div>
                <p><?PHP echo "₹";echo $row11["price"];echo "/-";?></p>
            </div>
            <div class="col-4">
            <img src="<?PHP echo $row12["image"]?>" height="380px" alt="">
            <h4><?PHP echo $row12["pname"];?></h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
                </div>
                <p><?PHP echo "₹";echo $row12["price"];echo "/-";?></p>
            </div>
        </div>
    </div>


    <!-- Top In Order -->
     <div class="small-container">
        <div class="title">
        <h2>Top In Order List &#9832;</h2>
        </div>
        <div class="row">
            <div class="col-4">
            <img src="<?PHP echo $row13["image"]?>" height="380px" alt="">
            <h4><?PHP echo $row13["pname"];?></h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <p><?PHP echo "₹";echo $row13["price"];echo "/-";?></p>
            </div>
            <div class="col-4">
            <img src="<?PHP echo $row14["image"]?>" height="380px" alt="">
            <h4><?PHP echo $row14["pname"];?></h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <p><?PHP echo "₹";echo $row14["price"];echo "/-";?></p>
            </div>
            <div class="col-4">
            <img src="<?PHP echo $row15["image"]?>" height="380px" alt="">
            <h4><?PHP echo $row15["pname"];?></h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                </div>
                <p><?PHP echo "₹";echo $row15["price"];echo "/-";?></p>
            </div>
            <div class="col-4">
            <img src="<?PHP echo $row16["image"]?>" height="380px" alt="">
            <h4><?PHP echo $row16["pname"];?></h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                </div>
                <p><?PHP echo "₹";echo $row16["price"];echo "/-";?></p>
            </div>
        </div>
    </div>

    <!-- Deal of the day -->
    <div class="deal">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                <img src="<?PHP echo $row["image"]?>"class="deal-img">
                    <!-- <img src="images/deal.png" class="deal-img"> -->
                </div>
                <div class="col-2">
                    <h2>Deal Of The Day</h2>
                    <h1><?PHP echo $row["pname"];?></h1>
                    </br> <br><p><?PHP echo "₹";echo $row["price"];echo "/-";?></p> 
                    <div class="explode"style="background:red"><a href="pdisplay.php?id=<?PHP echo $row['id']?>&username=<?PHP echo $uname?>">BUY</a></div>
                    
                </div>
            </div>
        </div>
    </div>
  
    <!-- Brand Associated -->
    <div class="brand">
    <h3>Major Brands Associated</h3>
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/brand1.png" height="80px"  >
                </div>
                <div class="col-5">
                    <img src="images/brand2.png" height="80px"  >
                </div>
                <div class="col-5">
                    <img src="images/brand3.png" height="80px"  >
                </div>
                <div class="col-5">
                    <img src="images/brand4.png" height="80px" >
                </div>
                <div class="col-5">
                    <img src="images/brand5.png" height="80px">
                </div>
                
            </div>
        </div>
    </div>

    <!-- Footer -->
<div class="footer">
    <a name="aboutus"></a>
    <div class="container">
        <div class="row">
           <div class="footer-col-1">
                <img src="images/logo.jpg" alt="logo" width="125px">
                 <p>The best suiting site for men, trending styles with best price </br>Fast delievery service also with a option of trial and exchange within 7 days  </p>
           </div>
           <div class="footer-col-2">
                <h3>Follow us</h3>
                <ul>
                     <li><i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp;&nbsp;Fashion_Club</li>
                </ul>
                <ul>
                     <li><i class="fa fa-twitter-square" aria-hidden="true"></i>&nbsp;&nbsp;@Fashion_Club</li>
                </ul>
                <ul>
                     <li><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;ContactFC@gmail.com</li>
                </ul>
                <ul>
                     <li><i class="fa fa-phone-square" aria-hidden="true"></i></i>&nbsp;&nbsp;+91 9999999999</li>
                </ul>
           </div>

        </div>
        <hr>
        <div class="copyright"><i class="fa fa-copyright" aria-hidden="true"></i>&nbsp;&nbsp;Copyright-2020 <br> All rights reserved. Designed by Mohd. Zaffar Sayyed</div>
    </div>
</div>
   
</body>
</html>