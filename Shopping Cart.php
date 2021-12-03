<!doctype html>
<html lang="en">
  <head>
    <title> Shopping Cart </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="Munchies.jpg">
    <link rel="stylesheet" type="text/css" href="CSS/style aisle.css"/>
    <link rel="stylesheet" type="text/css" href="CSS/cart.css"/>
    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script type="text/javascript" src="../SOEN-287/js/cart.js"> </script>

</head>
<body onload ="onLoad()">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <div class="container-fluid nav">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <a class="navbar-brand"  href="index.php">
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="dropbtn">
                            Aisle
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="Aisle\FruitsAndVegetables.html">Fruits and vegetables</a>
                            <a class="dropdown-item" href="Aisle\Beverages.html">Beverages</a>
                            <a class="dropdown-item" href="Aisle\Bakery.html">Bakery</a>
                            <a class="dropdown-item" href="Aisle/Frozen.php">Frozen</a>
                            <a class="dropdown-item" href="Aisle\Butchery.html">Butchery</a>
                            <a class="dropdown-item" href="Aisle\Seafood.html">Seafood</a>
                            <a class="dropdown-item" href="Aisle/Snacks.php">Snacks</a>
                        </div>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link" href="Aisle\login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="p7-p12/backstore/backStore.php">Back Store Page</a>
                    </li>
                </ul>
            </div>
            <div>
                <a class = "cartIcon" href="Shopping Cart.php"><img src="cartfinal-removebg-preview.png" alt="Cart" style="width: 40px; height:40px;"  ></a>
              </div>
        </nav>
    </div>
     
    
     <!-- SHOPPING CART -->
     <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 items-list">
                <div class="cart">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr >
                                    <th scope="col"class="text-white">Product</th>
                                    <th scope="col"class="text-white">Price</th>
                                    <th scope="col"class="text-white">Quantity</th>
                                    <th scope="col"class="text-white">Total</th>
                                </tr>
                            </thead>
                            <div class="product-display-div">
                                <tbody class = "addedProducts">
                            <tr >
                                <td>
                                    <img src="https://images.unsplash.com/photo-1616684000067-36952fde56ec?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1528&q=80"alt=" ;">
                                    <p>Kiwis</p>
                                </td>
                                <td>
                                    <h6>$5.45/pack</h6>
                                </td>
                                <td>
                                    <input type="number"  class="shoppinginput"  value="1" min="0">
    
                                </td>
                                <td>
                                    <span>$</span><output class = "itemPrice" >5.45</output>    
                                    <button type="button" class="btn btn-dark btn1 remove"> Remove</button> 
                                </td>     
                            </tr>
                            <tr >
                                <td>
                                    <img src="https://cdn.pixabay.com/photo/2018/04/08/14/46/red-bull-3301415_1280.jpg"alt=" ;">
                                    <p>Red Bull</p>
                                </td>
                                <td>
                                    <h6>$3.69/Bottle</h6>
                                </td>
                                <td>
                                    <input type="number" class="shoppinginput" value="1" min="0">
    
                                </td>
                                <td>
                                     <span>$</span><output class = "itemPrice">3.69</output>  
                                    <button type="button" class="btn btn-dark btn1 remove"> Remove</button> &nbsp
                                </td> 
                            </tr>
                            <tr >
                                <td>
                                    <img src="https://images.unsplash.com/photo-1620921568790-c1cf8984624c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1074&q=80"alt=" ;">
                                    <p>Brioche Bread</p>                         
                                </td>
                                <td>
                                    <h6>$3.75/unit</h6>
                                </td>
                                <td>
                                    <input type="number"  class="shoppinginput" value="1" min="0">
    
                                </td>
                                <td>
                                     <span>$</span><output class = "itemPrice">3.75</output>  
                                    <button type="button" class="btn btn-dark btn1 remove"> Remove</button> &nbsp
                                </td> 
                            </tr>
                            <tr >
                                <td>
                                    <img src="https://assets.bonappetit.com/photos/57ad3d4c53e63daf11a4dd38/16:9/w_1280,c_limit/spicy-italian-sausage.jpg"alt=" ;">
                                    <p>Italian Sausages</p>
                                </td>
                                <td>
                                    <h6>$1.54/100 G</h6>
                                </td>
                                <td>
                                    <input type="number"  class="shoppinginput"  value="1" min="0">
                                </td>
                                <td>
                                     <span>$</span><output class = "itemPrice" >1.54</output>
                                    <button type="button" class="btn btn-dark btn1 remove"> Remove</button> &nbsp 
                                 </td>
                            </tr>
                            <tr >
                                <td>
                                     <img src="https://www.washingtonpost.com/rf/image_982w/2010-2019/WashingtonPost/2020/08/13/Food/Images/v-howto-lobster_029.JPG"alt=" ;">
                                    <p>Lobster</p>
                                </td>
                                <td>
                                    <h6>$29.99/lb</h6>
                                </td>
                                <td>
                                    <input type="number" id="Lobster" class="shoppinginput" value="1" min="0">
                                </td>
                                <td>
                                     <span>$</span><output class = "itemPrice">29.99</output>
                                    <button type="button" class="btn btn-dark btn1 remove"> Remove</button> &nbsp 
                                 </td>
                            </tr>
                            <tr >
                                <td>
                                    <img src="https://uknow.uky.edu/sites/default/files/styles/facebook/public/chocolate%20cadies%20assortment%20(1280x853).jpg?itok=H6LqJmiT"alt=" ;">
                                    <p>Chocolate</p>
                         
                                </td>
                                <td>
                                    <h6>$18.99/Bag</h6>
                                </td>
                                <td>
                                    <input type="number"  class="shoppinginput" value="1" min="0" >
                                </td>
                                <td>
                                     <span>$</span><output class = "itemPrice" id="Chocolate_total" >18.99</output>
                                    <button type="button" class="btn btn-dark btn1 remove"> Remove</button> &nbsp 
                                 </td>
                                 
                            </tr>
                           
    
                        </tbody>
                    </div>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 total">
                <div class="checkout">
                    <ul>
                        <li># OF ITEMS
                            <span>
                                <output  id="numOfItems" >7</output>
                            </span>
                         </li>
                        <li>subtotal
                            <span>
                                 <span>$</span><output  id="grandtotalfruitss" >71.36</output>
                            </span>
                         </li>
                         
                        <li>QST
                            <span>
                                 <span>$</span><output  id="QST" >3.57</output>
                            </span>
                        </li>
                        <li class="GST">GST
                            <span>
                                 <span>$</span><output  id="GST" >7.12</output>
                            </span>
                        </li>
                        <li class="cart-total">Total
                            <span>
                                 <span>$</span><output id="Total_Tax" >82.06</output>     
                            </span>
                        </li>
                        <!-- <li>
                            <input type="button" value="Calculate Total cost" onclick="afterTax(); QST(); GST();" />
                        </li> -->
                    </ul>
                    <a href="#"class="proceed-btn">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <script type="text/javascript" src="js/cart.js"> </script>
    <script type="text/javascript">
   ;
         </script>
</body>
