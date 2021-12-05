<?php
session_start();
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
  <title>Beverages</title>
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
    <h1 class="h1">BEVERAGES</h1>
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
      <form action="Beverages.php" method="get">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/water.php"><img class="item-pic" src="https://www.factsaboutbpa.org/wp-content/uploads/2017/09/waterbottles.png" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"> <a href="Product Description/water.php" style="color:black">Munchies Water</h5></a>
                <p class="card-text ">1 Munchies Water (approx. 500mL) <br> <br> <br> approx. <span class="cost">$2.49</span>
                  / Bottle <br> <span class="gram">$2.49 / 500mL</span></p>
                  <button class="btn btn-dark" name="productName" value="Munchies Water" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/coca.php"><img class="item-pic" src="https://images.unsplash.com/photo-1624797375978-8c2f746bdd3a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGNvbGF8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"> <a href="Product Description/coca.php" style="color:black">Coca Cola</h5></a>
                <p class="card-text ">1 Coca Cola (approx. 330mL) <br> <br> <br> approx. <span class="cost">$1.69</span>
                  / Bottle <br> <span class="gram">$1.69 / 330mL</span></p>
                  <button class="btn btn-dark" name="productName" value="Coca Cola" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/7up.php"><img class="item-pic" src="https://images.unsplash.com/photo-1622766815178-641bef2b4630?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1519&q=80" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"> <a href="Product Description/7up.php" style="color:black">7Up</h5></a>
                <p class="card-text "> 1 7Up (approx. 330mL)<br> <br> <br> approx. <span class="cost">$1.59</span>/
                  Bottle <br> <span class="gram">$1.59 / 330mL</span></p>
                  <button class="btn btn-dark" name="productName" value="7Up" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/monster.php"><img class="item-pic" src="https://images.unsplash.com/photo-1551870573-6f5e93e660fd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" class="card-img-top apples" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"> <a href="Product Description/monster.php" style="color:black">Monster</h5></a>
                <p class="card-text ">1 Monster (approx. 550mL) <br> <br> <br> approx. <span class="cost">$4.70</span>
                  / Bottle <br> <span class="gram">$4.70 / 550mL</span></p>
                  <button class="btn btn-dark" name="productName" value="Monster" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/redbull.php"><img class="item-pic" src="https://cdn.pixabay.com/photo/2018/04/08/14/46/red-bull-3301415_1280.jpg" class="card-img-top apples" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"> <a href="Product Description/redbull.php" style="color:black">Red Bull</h5></a>
                <p class="card-text ">1 Red Bull (approx. 250mL) <br> <br> <br> approx. <span class="cost">$3.69</span>
                  / Bottle <br> <span class="gram">$3.69 / 250mL</span></p>
                  <button class="btn btn-dark" name="productName" value="Red Bull" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/fanta.php"><img class="item-pic" src="https://st.depositphotos.com/2121815/4264/i/600/depositphotos_42646321-stock-photo-can-of-fanta-drink-on.jpg" class="card-img-top apples" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/fanta.php" style="color:black">Fanta </h5></a>
                <p class="card-text ">1 Fanta (approx. 330mL) <br> <br> <br> approx. <span class="cost">$1.49</span>
                  / Bottle <br> <span class="gram">$1.49 / 330mL</span></p>
                  <button class="btn btn-dark" name="productName" value="Fanta" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/orangejuice.php"><img class="item-pic" src="https://www.packagingstrategies.com/ext/resources/Issues/June/July2012/Laura_uploads/Tropicana540.jpg?1559144132" class="card-img-top apples" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/orangejuice.php" style="color:black">Orange Juice</h5></a>
                <p class="card-text ">1 Orange Juice (approx. 750mL) <br> <br> <br> approx. <span class="cost">$2.89</span>
                  / Bottle <br> <span class="gram">$2.89 / 750mL</span></p>
                  <button class="btn btn-dark" name="productName" value="Orange Juice" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/canadadry.php"><img class="item-pic" src="https://preview.free3d.com/img/2020/01/2279683203843229623/civw902w-900.jpg" class="card-img-top apples" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/canadadry.php" style="color:black">Canada Dry</h5></a>
                <p class="card-text ">1 Canada Dry (approx. 330mL) <br> <br> <br> approx. <span class="cost">$1.59</span>
                  / Bottle <br> <span class="gram">$1.59 / 330mL</span></p>
                  <button class="btn btn-dark" name="productName" value="Canada Dry" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <form>
    </div>
  </div>
</body>