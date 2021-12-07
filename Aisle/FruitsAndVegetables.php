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
  <link rel="stylesheet" href="bs5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Fruits & Vegetables</title>
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
  <script src="../js/Aisle.js">

  </script>
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
    <h1 class="h1">FRUITS & VEGETABLES</h1>
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
            <li class="list-group-item">Fruits & Vegetables</li>
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
      <form action="FruitsAndVegetables.php" method="get">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
              
                <div class="card">
                <a href="Product Description/apples.php"><img class="item-pic" src="https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1374&q=80" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <h5 class="card-title"><a  href="Product Description/apples.php" style="color:black"><span>Red Apples</span> </h5></a>
                  <p class="card-text ">5 Apples (Around 910 grams) <br> <br> <br> approx. <span class="cost">$2.36</span>
                    / pack <br> <span class="gram"></span></p>
                 <button class="btn btn-dark" name="productName" value="Red apples" type="submit">ADD TO CART</button>
                </div>
                <?php
                
                ?>
              
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/bananas.php"><img class="item-pic" src="https://images.unsplash.com/photo-1543218024-57a70143c369?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=735&q=80" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/bananas.php" style="color:black">Bananas</h5></a>
                <p class="card-text ">5 Bananas (approx. 590 g) <br> <br> <br> approx. <span class="cost">$3.57</span>
                  /pack <br> <span class="gram"></span></p>
                  <button class="btn btn-dark" name="productName" value="Bananas" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/kiwis.php"><img class="item-pic" src="https://images.unsplash.com/photo-1616684000067-36952fde56ec?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1528&q=80" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/kiwis.php" style="color:black">Kiwis</h5></a>
                <p class="card-text "> 5 Kiwis (approx. 345)<br> <br> <br> approx. <span class="cost">$5.45</span>/pack <br> <span class="gram"></span></p>
                <button class="btn btn-dark" name="productName" value="Kiwis" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/oranges.php"><img class="item-pic" src="https://images.unsplash.com/photo-1611080626919-7cf5a9dbab5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80" class="card-img-top apples" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/oranges.php" style="color:black">Oranges</h5></a>
                <p class="card-text ">5 Oranges (approx. 770 g) <br> <br> <br> approx. <span class="cost">$5.70</span>
                  / pack <br> <span class="gram"></span></p>
                  <button class="btn btn-dark" name="productName" value="Oranges" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/cucumber.php"><img class="item-pic" src="https://images.unsplash.com/photo-1580294672675-91afc00ee7b3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/cucumber.php" style="color:black">Cucumber</h5></a>
                <p class="card-text ">1 Cucumber (approx. 99 g)<br> <br> <br> approx. <span class="cost">$0.98</span>/
                  unit <br> <span class="gram"></span></p>
                  <button class="btn btn-dark" name="productName" value="Cucumber" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/carrots.php"><img class="item-pic" src="https://images.unsplash.com/photo-1447175008436-054170c2e979?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1599&q=80" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/carrots.php" style="color:black">Carrots</h5></a>
                <p class="card-text ">5 Carrots (approx. 78 g/Carrot)<br> <br> <br> approx. <span class="cost">$3.45</span>/
                  pack <br> <span class="gram"></span></p>
                  <button class="btn btn-dark" name="productName" value="Carrots" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/brocolli.php"><img class="item-pic" src="https://post.healthline.com/wp-content/uploads/2020/09/benefits-of-broccoli-1200x628-facebook-1200x628.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/brocolli.php" style="color:black">Brocolli</h5></a>
                <p class="card-text ">Brocolli (approx. 148 g/brocolli)<br> <br> <br> approx. <span class="cost">$5.67</span>/
                  pack <br> <span class="gram"></span></p>
                  <button class="btn btn-dark" name="productName" value="Brocolli" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/corn.php"><img class="item-pic" src="https://images.unsplash.com/photo-1551754655-cd27e38d2076?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/corn.php" style="color:black">Corn</h5></a>
                <p class="card-text ">Corn (approx. 129 g/Corn cob)<br> <br> <br> approx. <span class="cost">$1.22</span>/
                  unit <br> <span class="gram"></span></p>
                  <button class="btn btn-dark" name="productName" value="Corn" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
      <?php


?>
        
    </div>
  </div>
  <?php 
  ?>
</body>
<?php
if(isset($_GET['productName'])){
  addToCart();
  
 
}

?>