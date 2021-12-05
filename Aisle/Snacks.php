<?php
session_start();
ob_start();
include("../php functions/cart.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../CSS/style aisle.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Snacks</title>
    <link rel="icon" href="../Munchies.jpg">
    <!-- <link rel="icon" href="../../Metadata/icon.svg"> -->
    <style>
        .list-group {
            margin-bottom: 20%;
        }

        .btn {
            width: 10rem;
            text-align: center;
            font-size: 0.9rem;
            position: relative;
            left: 0.2px;
            margin-top: 3rem;
        }
    </style>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <div class="container-fluid pb-5">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="../index.php">
                <img src="https://cdn.dribbble.com/users/6509578/screenshots/15442655/media/25c9f235821b698efae9b157e88dc827.jpg" height="50" width="80" />
                <p class="logo" style="display: inline">
                    <span class="logo-sub">MUNCHIES</span>Market
                </p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <button class="dropbtn">
                            Aisle
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="FruitsAndVegetables.php">Fruits and vegetables</a>
                            <a class="dropdown-item" href="Beverages.php">Beverages</a>
                            <a class="dropdown-item" href="Bakery.php">Bakery</a>
                            <a class="dropdown-item" href="Frozen.php">Frozen</a>
                            <a class="dropdown-item" href="Butchery.php">Butchery</a>
                            <a class="dropdown-item" href="Seafood.php">Seafood</a>
                            <a class="dropdown-item" href="Snacks.php">Snacks</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../p7-p12/backstore/backStore.php">Back Store Page</a>

                    </li>
                </ul>
            </div>
            <div>
                <?php

                if (isset($_SESSION['first'])) {
                    echo "<span style=\"color:white\">Hello " . $_SESSION['first'] . " </span>";
                    echo "<a  style=\"color:white\" href=\"php functions/signOut.php\"> | Sign Out</a>";
                } else {
                    echo "<span style=\"color:white\">Hello Guest User</span>";
                }

                ?>
                <a class="cartIcon" href="../Shopping%20Cart.php"><img src="../cartfinal-removebg-preview.png" alt="Cart" style="width: 40px; height:40px;"></a>
            </div>
        </nav>
    </div>

    <!-- PRODUCT DESCRIPTION -->
    <div class="div1">
        <h1 class="h1">SNACKS</h1>
    </div>

    <div class="container-fluid ">
        <div class="row">
            <div class="sidebar col-md-2">
                <ul class="list-group list-group-flush">
                    <li class="categories">CATEGORIES</li>
                    <li class="hr">
                        <hr>
                    </li>
                    <a href="FruitsAndVegetables.php">
                        <li class="list-group-item">Fruits and Vegetables</li>
                    </a>
                    <a href="Beverages.php">
                        <li class="list-group-item">Beverages</li>
                    </a>
                    <a href="Bakery.php">
                        <li class="list-group-item">Bakery</li>
                    </a>
                    <a href="Frozen.php">
                        <li class="list-group-item">Frozen</li>
                    </a>
                    <a href="Butchery.php">
                        <li class="list-group-item">Butchery</li>
                    </a>
                    <a href="Seafood.php">
                        <li class="list-group-item">Seafood</li>
                    </a>
                    <a href="Snacks.php">
                        <li class="list-group-item">Snacks</li>
                    </a>

                </ul>

            </div>

            <div class="main-content col-md-10">
            <form action="Snacks.php" method="get">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <a href="Product Description/Chips.php"><img class="item-pic" src="https://s-i.huffpost.com/gen/1401075/images/o-POTATO-CHIPS-facebook.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="Product Description/Chips.php" style="color:black">Chips</h5></a>
                                <p class="card-text ">1 Bag of Chips (approx. 250g) <br> <br> <br> approx. <span class="cost">$2.99</span>
                                    / bag <br> <span class="gram">$2.99 / 250g</span></p>
                                    <button class="btn btn-dark" name="productName" value="Chips" type="submit">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <a href="Product Description/Chocolate.php"><img class="item-pic" src="https://uknow.uky.edu/sites/default/files/styles/facebook/public/chocolate%20cadies%20assortment%20(1280x853).jpg?itok=H6LqJmiT" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="Product Description/Chocolate.php" style="color:black">Chocolate</h5></a>
                                <p class="card-text ">1 Box of Varied Chocolates (approx. 0.5lb) <br> <br> <br> approx. <span class="cost">$18.99</span>
                                    / box <br> <span class="gram">$18.99 / 0.5lb</span></p>
                                    <button class="btn btn-dark" name="productName" value="Chocolate" type="submit">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <a href="Product Description/Candy.php"><img class="item-pic" src="https://assets.bonappetit.com/photos/5a833c4b668fb87d44d15fc3/16:9/w_1280,c_limit/museum-of-candy-opening-in-nyc.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="Product Description/Candy.php" style="color:black">Candy</h5></a>
                                <p class="card-text "> 1 bag of varied candies (approx. 1lb)<br> <br> <br> approx. <span class="cost">$11.99</span>/
                                    bag <br> <span class="gram">$11.99/ 1lb</span></p>
                                    <button class="btn btn-dark" name="productName" value="Candy" type="submit">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <a href="Product Description/Pretzels.php"><img class="item-pic" src="https://2.bp.blogspot.com/-83qPJ9IX-r0/UBhLAXS5XoI/AAAAAAAAAd8/3hFeyaPk-uw/s1600/100_9879.jpg" class="card-img-top apples" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="Product Description/Pretzels.php" style="color:black">Pretzels</h5></a>
                                <p class="card-text ">1 Bag of Pretzels (approx. 1lb) <br> <br> <br> approx. <span class="cost">$3.99</span>
                                    / bag <br> <span class="gram">$3.99/ 1lb</span></p>
                                    <button class="btn btn-dark" name="productName" value="Pretzel" type="submit">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <a href="Product Description/RiceCakes.php"><img class="item-pic" src="https://post.healthline.com/wp-content/uploads/2020/08/are-rice-cakes-healthy-1200x628-facebook-1200x628.jpg" class="card-img-top apples" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="Product Description/RiceCakes.php" style="color:black">Rice Cakes</h5></a>
                                <p class="card-text ">1 Bag of Rice Cakes (approx. 300g) <br> <br> <br> approx. <span class="cost">$4.99</span>
                                    / bag <br> <span class="gram">$4.99 / 300g</span></p>
                                    <button class="btn btn-dark" name="productName" value="Rice Cakes" type="submit">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <a href="Product Description/Brownies.php"><img class="item-pic" src="https://kirbiecravings.com/wp-content/uploads/2019/05/keto-avocado-brownies-13.jpg" class="card-img-top apples" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="Product Description/Brownies.php" style="color:black">Brownies</h5></a>
                                <p class="card-text ">1 Box of Brownies (approx. 2lb) <br> <br> <br> approx. <span class="cost">$9.99</span>
                                    / box <br> <span class="gram">$8.99 / 2lb</span></p>
                                    <button class="btn btn-dark" name="productName" value="Brownies" type="submit">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <a href="Product Description/Cookies.php"><img class="item-pic" src="https://www.tasteofhome.com/wp-content/uploads/2017/11/shutterstock_389576623-1.jpg" class="card-img-top apples" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="Product Description/Cookies.php" style="color:black">Cookies</h5></a>
                                <p class="card-text ">1 Box of Cookies (approx. 1.5lb) <br> <br> <br> approx. <span class="cost">$4.99</span>
                                    / box <br> <span class="gram">$4.99 / 1.5lb</span></p>
                                    <button class="btn btn-dark" name="productName" value="Cookies" type="submit">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <a href="Product Description/Muffins.php"><img class="item-pic" src="https://sparkpeo.hs.llnwd.net/e2/guid/Banana-Chocolate-Chip-Muffins/651c890a-7eb6-4092-a1ae-6b841101b6d9.jpg" class="card-img-top apples" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="Product Description/Muffins.php" style="color:black">Muffins</h5></a>
                                <p class="card-text ">1 Box Muffins (approx. 3lb) <br> <br> <br> approx. <span class="cost">$9.99</span>
                                    / box <br> <span class="gram">$9.99 / 3lb</span></p>
                                    <button class="btn btn-dark" name="productName" value="Muffins" type="submit">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>

        </div>
    </div>
    <?php
if(isset($_GET['productName'])){
  addToCart();
  
 
}

?>
</body>