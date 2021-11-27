
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
    


    <title>Butchery</title>
    <link rel="icon" href="../Munchies.jpg">
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
          <a class = "cartIcon" href="../Shopping%20Cart.php">
            <img src="../cartfinal-removebg-preview.png" alt="Cart" 
            style="width: 40px; height:40px;" /></a>
        </div>
      </nav>
    </div>

<!-- PRODUCT DESCRIPTION -->
<div class="div1">
  <h1 class="h1">BUTCHERY</h1>
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
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                  <div class="card">
                      <a href="Product Description/sirloin steak.php"><img class="item-pic"
                                                                           src="https://thumbs.dreamstime.com/b/raw-meat-beef-steak-green-rustic-table-raw-meat-beef-steak-green-rustic-table-background-164197668.jpg"
                                                                           class="card-img-top" alt="..."></a>
                      <div class="card-body">
                          <h5 class="card-title" id="sirloin" ><a href="Product Description/sirloin steak.php" style="color:black">Sirloin Steak</h5></a>
                          <p class="card-text ">1 steak (approx. 300 g) <br> <br> <br> approx. <span class="cost">$8.53</span>
                              / unit <br> <span class="gram">$2.84 / 100 G</span></p>
                          <a href="#" class="btn btn-dark">ADD TO CART</a>
                      </div>
                  </div>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                  <div class="card">
                      <a href="Product Description/Chicken breast.php"><img class="item-pic"
                                                                            src="https://post.healthline.com/wp-content/uploads/2020/09/2375-Raw_Chicken-1296x728-header-1200x628.jpg"
                                                                            class="card-img-top" alt="..."></a>
                      <div class="card-body">
                          <h5 class="card-title" id="chicken"><a href="Product Description/Chicken breast.php" style="color:black">Chicken Breast</h5></a>
                          <p class="card-text ">1 breast (approx. 200 g) <br> <br> <br> approx. <span class="cost">$3.96</span>
                              / unit <br> <span class="gram">$1.98 / 100 G</span></p>
                          <a href="#" class="btn btn-dark">ADD TO CART</a>
                      </div>
                  </div>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                  <div class="card">
                      <a href="Product Description/Pork chops.php"><img class="item-pic"
                                                                        src="https://www.bowrivermeatmarket.ca/wp-content/uploads/2019/06/porkchops.jpg"
                                                                        class="card-img-top" alt="..."></a>
                      <div class="card-body">
                          <h5 class="card-title" id="pork"><a href="Product Description/Pork chops.php" style="color:black">Pork Chops</h5></a>
                          <p class="card-text "> 6 pork chops (approx. 800g)<br> <br> <br> approx. <span class="cost">$9.69</span>/
                              pack <br> <span class="gram">$1.21 / 100 G</span></p>
                          <a href="#" class="btn btn-dark">ADD TO CART</a>
                      </div>
                  </div>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                  <div class="card">
                      <a href="Product Description/Italian sausages.php"><img class="item-pic"
                                                                              src="https://assets.bonappetit.com/photos/57ad3d4c53e63daf11a4dd38/16:9/w_1280,c_limit/spicy-italian-sausage.jpg"
                                                                              class="card-img-top apples" alt="..."></a>
                      <div class="card-body">
                          <h5 class="card-title" id="sausage"><a href="Product Description/Italian sausages.php" style="color:black">Italian Sausages</h5></a>
                          <p class="card-text ">4 sausages (approx. 370 g) <br> <br> <br> approx. <span class="cost">$5.70</span>
                              / pack <br> <span class="gram">$1.54 / 100 G</span></p>
                          <a href="#" class="btn btn-dark">ADD TO CART</a>
                      </div>
                  </div>
              </div>


          </div>
      </div>

  </div>
</div>
</body>
</html>