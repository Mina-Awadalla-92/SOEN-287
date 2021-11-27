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
    <title>Beverages</title>
    <link
            rel="icon" href="../Munchies.jpg">
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
                    <a
                            class="nav-link"
                            href="ProductList.html"
                    >Back Store Page</a>

                </li>
            </ul>
        </div>
        <div>
            <a class = "cartIcon" href="../Shopping%20Cart.php"><img src="../cartfinal-removebg-preview.png" alt="Cart" style="width: 40px; height:40px;"  ></a>
          </div>
    </nav>
</div>

<!-- PRODUCT DESCRIPTION -->
<div class="div1">
    <h1 class="h1">FROZEN</h1>
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
                        <a href="Product Description/Ice Cream.php"><img class="item-pic"
                                                                         src="https://static-assets.boxed.com/1527886610321.jpg"
                                                                         class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="Product Description/Ice Cream.php" style="color:black">Ice Cream</h5></a>
                            <p class="card-text ">1 Box of Ice Cream (approx. 1lb) <br> <br> <br> approx. <span class="cost">$8.00</span>
                                / box <br> <span class="gram">$8.00 / Box</span></p>
                            <a href="#" class="btn btn-dark">ADD TO CART</a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                    <div class="card">
                        <a href="Product Description/Pogo.php"><img class="item-pic"
                                                                    src="https://images.chickadvisor.com/item/40271/375/i/pogos.jpg?ic=1"
                                                                    class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="Product Description/Pogo.php" style="color:black">Pogo</h5></a>
                            <p class="card-text ">1 Box of Pogo's (approx. 1.5Kg) <br> <br> <br> approx. <span class="cost">$8.99</span>
                                / box <br> <span class="gram">$8.99 / box</span></p>
                            <a href="#" class="btn btn-dark">ADD TO CART</a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                    <div class="card">
                        <a href="Product Description/French Fries.php"><img class="item-pic"
                                                                            src="https://www.emenacpackaging.com/wp-content/uploads/2019/04/4-168.jpg"
                                                                            class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="Product Description/French Fries.php" style="color:black">French Fries</h5></a>
                            <p class="card-text "> 1 Box of French Fries (approx. 12.5 Kg)<br> <br> <br> approx. <span class="cost">$13.99</span>/
                                box <br> <span class="gram">$13.99 / box</span></p>
                            <a href="#" class="btn btn-dark">ADD TO CART</a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                    <div class="card">
                        <a href="Product Description/Eggos.php"><img class="item-pic"
                                                                     src="https://target.scene7.com/is/image/Target/GUEST_3fcb9390-f290-4059-bbb5-36f9cfad7026?wid=488&hei=488&fmt=pjpeg"
                                                                     class="card-img-top apples" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="Product Description/Eggos.php" style="color:black">Eggos</h5></a>
                            <p class="card-text ">1 Box of Eggos (approx. 1 Kg) <br> <br> <br> approx. <span class="cost">$7.00</span>
                                / box <br> <span class="gram">$7.00 / box</span></p>
                            <a href="#" class="btn btn-dark">ADD TO CART</a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                    <div class="card">
                        <a href="Product Description/Popsicles.php"><img class="item-pic"
                                                                         src="https://images.squarespace-cdn.com/content/5175ca67e4b06533f73d4a14/1368218112096-NS7EA3TL0ES5GRKH8G18/popsicle+box.jpg?format=1000w&content-type=image%2Fjpeg"
                                                                         class="card-img-top apples" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="Product Description/Popsicles.php" style="color:black">Popsicles</h5></a>
                            <p class="card-text ">1 Box of Popsicles (approx. 0.5lb) <br> <br> <br> approx. <span class="cost">$3.99</span>
                                / box <br> <span class="gram">$3.99 / box</span></p>
                            <a href="#" class="btn btn-dark">ADD TO CART</a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                    <div class="card">
                        <a href="Product Description/Bagged Ice.php"><img class="item-pic"
                                                                          src="https://cdnimg.webstaurantstore.com/images/products/extra_large/202123/1114724.jpg"
                                                                          class="card-img-top apples" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="Product Description/Bagged Ice.php" style="color:black">Bagged Ice</h5></a>
                            <p class="card-text ">1 Bag of Ice (approx. 5Kg) <br> <br> <br> approx. <span class="cost">$0.99</span>
                                / bag <br> <span class="gram">$0.99 / bag</span></p>
                            <a href="#" class="btn btn-dark">ADD TO CART</a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                    <div class="card">
                        <a href="Product Description/Pizza.php"><img class="item-pic"
                                                                     src="https://i5.walmartimages.com/asr/7563f7de-725d-41a3-b610-c439082efd2f_1.d8c62c0b49810e07c1994458d7a6eaaf.jpeg"
                                                                     class="card-img-top apples" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="Product Description/Pizza.php" style="color:black">Pizza</h5></a>
                            <p class="card-text ">1 Pizza (approx. 1lb) <br> <br> <br> approx. <span class="cost">$11.99</span>
                                / pizza <br> <span class="gram">$11.99 / pizza</span></p>
                            <a href="#" class="btn btn-dark">ADD TO CART</a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                    <div class="card">
                        <a href="Product Description/Chicken Nuggets.php"><img class="item-pic"
                                                                               src="https://i5.walmartimages.com/asr/c99dd5fe-34ba-4a25-b6e2-8f4f42df996b_3.98384eae2bacba1ca2d052153be52d27.png"
                                                                               class="card-img-top apples" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="Product Description/Chicken Nuggets.php" style="color:black">Chicken Nuggets</h5></a>
                            <p class="card-text ">1 Box of Chicken Nuggets (approx. 2lb) <br> <br> <br> approx. <span class="cost">$7.95</span>
                                / box <br> <span class="gram">$7.95 / box</span></p>
                            <a href="#" class="btn btn-dark">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>