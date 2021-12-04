<?php
session_start();
include("../php functions/backstore.php");
include("../php functions/userLogin.php");
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
  <link rel="stylesheet" href="../CSS/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Login</title>

  <a rel="icon" href="../Munchies.jpg">
    <!-- <link rel="icon" href="../../Metadata/icon.svg"> -->
    <style>
      .alert {
        margin: auto;
        margin-bottom: 5px;
        font-size: 25px;
        text-align: center;
        color: red;
        border: 3px solid red;
        width: 400px;
        background-color: pink;
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
            <button class="dropbtn" style=margin:0;>
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
          echo "<a  style=\"color:white\" href=\"php functions/signOut.php\">Sign Out</a>";
        } else {
          echo "<span style=\"color:white\">Hello Guest User</span>";
        }

        ?>
        <a class="cartIcon" href="../Shopping%20Cart.php"><img src="../cartfinal-removebg-preview.png" alt="Cart" style="width: 40px; height:40px;"></a>
      </div>
    </nav>
  </div>




  <div class="login">
    <div class="login-text">Login</div>
    <br><br><br>
    <div>
      <img id="image1" src="../Munchies.jpg" alt="logo">
    </div>

    <div class="textboxSignup">


      <?php
      if (isset($_SESSION['accExist']) && $_SESSION['accExist'] == true) {
        echo "<h3 style=\"color:#FF2750\">The email you previously tried to sign in with already exists</h3>";
      }

      checkEandP();
      ?>


      <div>
        <form action="login.php" method="POST">
          <input type="email" placeholder="E-mail" name="email">
          <input type="password" placeholder="Password" name="password">
      </div>
      <div class="buttons">
        <button class="loginbutton" type="submit" name="login">Submit</button>
        <button class="forget">Forget Password</button>
      </div>
      </form>

      <div class="dont">
        Don't have an account? <a id="signup" href="signuppage.php"> Sign up here!</a>
      </div>
    </div>


</body>

<footer>
  <p class="copyRight"> &copy MUNCHIES Team 2021 </p>
</footer>

</html>