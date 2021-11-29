
<?php
      session_start();
 
      
      if(isset($_REQUEST['signUp'])){
        
        $xml = new DOMDocument("1.0","UTF-8");
        $xml -> load("Database/user.xml");

        $rootTag = $xml -> getElementsByTagName("Users")->item(0);
        $userTag = $xml -> createElement('user');

        $nameTag = $xml -> createElement('firstName',  $_POST['firstName']);
        $lNameTag = $xml -> createElement('lastName', $_POST['lastName']);
        $addresTag = $xml -> createElement('address', $_POST['address']);
        $cityTag = $xml -> createElement('city', $_POST['city']);
        $provTag = $xml -> createElement('province', $_POST['province']);
        $postalTag = $xml -> createElement('postalCode', $_POST['postalCode']);
        $emailTag = $xml -> createElement('email', $_POST['email']);
        $passwrodTag = $xml -> createElement('password', $_POST['password']);
        
        $userTag -> appendChild($nameTag);
        $userTag -> appendChild($lNameTag);
        $userTag -> appendChild($addresTag);
        $userTag -> appendChild($cityTag);
        $userTag -> appendChild($provTag);
        $userTag -> appendChild($postalTag);
        $userTag -> appendChild($emailTag);
        $userTag -> appendChild($passwrodTag);
        
        $rootTag -> appendChild($userTag);

        echo ($_POST['firstName']);
        echo $xml->save("Database/user.xml");
      }
      ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../CSS/style aisle.css"/>
    
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../CSS/login.css">
   <a rel="icon" href="../Munchies.jpg">
    <!-- <link rel="icon" href="../../Metadata/icon.svg"> -->
 
</head>
<body>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        

  <div class="container-fluid pb-5">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="../Home.html">
        <img src="https://cdn.dribbble.com/users/6509578/screenshots/15442655/media/25c9f235821b698efae9b157e88dc827.jpg" height="50" width="80" />
        <p class="logo" style="display: inline">
          <span class="logo-sub">MUNCHIES</span>Market
        </p>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavbar"
        >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../Home.html">Home</a>
          </li>

          <li class="nav-item dropdown">
            <button class="dropbtn" style= margin:0;>
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
            <a
              class="nav-link"
              href="../p7-p12/backstore/backStore.php"
              >Back Store Page</a>
       
          </li>
        </ul>
      </div>
      <div>
        <a class = "cartIcon" href="../Shopping%20Cart.php"><img src="../cartfinal-removebg-preview.png" alt="Cart" style="width: 40px; height:40px;"  ></a>
      </div>
    </nav>
  </div>
  
  <div class="login">
    <div class= "login-text" >Sign Up</div >
      <br><br><br>
      <div>
       
      </div>
      
     
     <div class="textboxSignup">
      <form action="signuppage.php" , method = "POST"> 
        <input type="firstName" placeholder = "First Name" name="firstName"><br>
        <input type="lastName" placeholder = "Last Name" action="" name="lastName"><br>
        <input type="address" placeholder = "Street Address" action="" name="address"><br>
        <input type="city" placeholder = "City" action="" name="city"><br>
        <input type="province" placeholder = "State or Province" action=""name="province" ><br>
        <input type="postalCode" placeholder = "Postal Code" action="" name="postalCode"><br>
        <input type="email" placeholder = "E-mail" action="" name="email"><br>
        <input type="password" placeholder = "Password" action="" name="password"><br>

    <div class = "buttons">
      <button class = "signUp" type = "submit" name="signUp">Sign Up</button>
      <button class = "reset">Reset</button>

      </form>
  
      </div>

      <div class="dont">
        Already have an account? <a id="signup" href="login.php"> Login here!</a>
    </div>
      </div>
      
  

</body>

<footer>
  <p class ="copyRight"> &copy MUNCHIES Team 2021 </p>
</footer>
</html>