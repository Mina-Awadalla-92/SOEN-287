<?php
session_start();
ob_start();
include "connectDB.php";
if (!$_SESSION['admin']) {
  header("Location: ../../adminAuthorization.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="../CSS/style aisle.css" />
  <link rel="stylesheet" href="../CSS/bootstrap.css">
  <link rel="stylesheet" href="../CSS/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/bootstrap.min.css.map">
  <script src="../js/bootstrap.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../CSS/backStore.css">
  <title>Back Store - MUNCHIES Market</title>

</head>

<body>


  <div class="container-fluid pb-5">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="../../index.php">
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
            <a class="nav-link" href="../../index.php">Home</a>
          </li>

          <li class="nav-item dropdown">
            <button class="dropbtn">
              Aisle
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="../../Aisle/FruitsAndVegetables.php">Fruits and vegetables</a>
              <a class="dropdown-item" href="../../Aisle/Beverages.php">Beverages</a>
              <a class="dropdown-item" href="../../Aisle/Bakery.php">Bakery</a>
              <a class="dropdown-item" href="../../Aisle/Frozen.php">Frozen</a>
              <a class="dropdown-item" href="../../Aisle/Butchery.php">Butchery</a>
              <a class="dropdown-item" href="../../Aisle/Seafood.php">Seafood</a>
              <a class="dropdown-item" href="../../Aisle/Snacks.php">Snacks</a>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="../../Aisle/login.php">Login</a>
          </li>


          <li class="nav-item dropdown">
            <button class="dropbtn">
              BackStore
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="Orders.php">Orders</a>
              <a class="dropdown-item" href="Users.php">Users</a>
              <a class="dropdown-item" href="backStore.php">Products</a>
            </div>
          </li>
        </ul>
      </div>
      <div>
        <?php

        if (isset($_SESSION['first'])) {
          echo "<span style=\"color:white\">Hello " . $_SESSION['first'] . " </span>";
          echo "<a  style=\"color:white\" href=\"php functions/signOut.php\">Sign Out</a>";
        } else {
          echo "<span style=\"color:white\">Hello Guest User</span>";
        }

        ?>
        <a class="cartIcon" href="../../Shopping Cart.php"><img src="../../cartfinal-removebg-preview.png" alt="Cart" style="width: 40px; height:40px;"></a>
      </div>
    </nav>
  </div>

  <br>
  <div class="container">
    <div class="row">
      <div class="col-2">
        <a class="btn btn-success" href="AddProduct.php">Add Product</a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table table-striped">
          <thead>
            <tr>
            <tr>
              <th scope="col">Sr No.</th>
              <th scope="col">Image</th>
              <th scope="col">Product</th>
              <th scope="col">In Stock</th>
              <th scope="col">Price</th>
              <th scope="col"> Edit</th>
              <th scope="col">Delete</th>
            </tr>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "Select * from products";
            $result = mysqli_query($connection, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $image = $row['image'];
                $title = $row['title'];
                $description = $row['description'];
                $quantity = $row['quantity'];
                $price = $row['price'];
                echo ' 
                <tr>
                <th scope="row">' . $id . '</th>
                <td><img src="https://images.unsplash.com/photo-1597079910443-60c43fc4f729?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" style="width: 50px; height: 50px;" /> </td>
                <td>' . $title . '</td>
                <td>' . $quantity . '</td>
                <td>' . $price . '$ / ' . $title . '</td>
                <td>
                  <a href="updateProduct.php?updateId=' . $id . '" class="fa fa-edit "></a>
                </td>
                <td>
                  <a href="deleteProduct.php?deleteId=' . $id . '" class="fa fa-trash"></a>
                </td>
              </tr>
                ';
              }
            }
            ?>
            <!-- <tr>
              <th scope="row">1</th>
              <td><img src="https://images.unsplash.com/photo-1597079910443-60c43fc4f729?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" style="width: 50px; height: 50px;" /> </td>
              <td>French Baguettes</td>
              <td>20</td>
              <td>$1.00 / Baguette</td>
              <td>
                <a href="AddProduct.php" class="fa fa-edit"></a>
              </td>
              <td>
                <a href="AddProduct.php" class="fa fa-trash"></a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1472&q=80.jpg" style="width: 50px; height: 50px;" /> </td>
              <td>Rye Bread</td>
              <td>10</td>
              <td>$4.55 / Loaf</td>
              <td>
                <a class="fa fa-edit"></a>
              </td>
              <td>
                <a class="fa fa-trash"></a>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><img src="https://images.unsplash.com/photo-1585478259715-876a6a81fc08?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" style="width: 50px; height: 50px;" /> </td>
              <td>Sourdough Bread</td>
              <td>100</td>
              <td>$6.96 / Loaf</td>
              <td>
                <a class="fa fa-edit"></a>
              </td>
              <td>
                <a class="fa fa-trash"></a>
              </td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td><img src="https://images.unsplash.com/photo-1609970957077-6baa39b4a749?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" style="width: 50px; height: 50px;" /> </td>
              <td>Challah Bread</td>
              <td>50</td>
              <td>$3.50 / Loaf</td>
              <td>
                <a class="fa fa-edit"></a>
              </td>
              <td>
                <a class="fa fa-trash"></a>
              </td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td><img src="https://images.unsplash.com/photo-1585445490387-f47934b73b54?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" style="width: 50px; height: 50px;" /> </td>
              <td>Bagels</td>
              <td>0</td>
              <td>$1.55 / Bagel</td>
              <td>
                <a class="fa fa-edit"></a>
              </td>
              <td>
                <a class="fa fa-trash"></a>
              </td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td><img src="https://images.unsplash.com/photo-1565181917578-a87c12e04ff7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1536&q=80" style="width: 50px; height: 50px;" /> </td>
              <td>Whole Wheat Bread</td>
              <td>567</td>
              <td>$3.25 / Loaf</td>
              <td>
                <a class="fa fa-edit"></a>
              </td>
              <td>
                <a class="fa fa-trash"></a>
              </td>
            </tr> -->
          </tbody>
        </table>
      </div>

    </div>

  </div>



</body>

</html>