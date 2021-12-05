<?php
session_start();
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
  <link rel="stylesheet" href="../CSS/backStore.css">
  <link rel="stylesheet" type="text/css" href="../CSS/style aisle.css" />
  <link rel="stylesheet" href="../CSS/bootstrap.css">
  <link rel="stylesheet" href="../CSS/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/bootstrap.min.css.map">
  <script src="../js/bootstrap.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

  <title>Back Store - MUNCHIES Market</title>

</head>

<body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <div class="container-fluid pb-5">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="../../Home.html">
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
          echo "<a  style=\"color:white\" href=\"php functions/signOut.php\"> | Sign Out</a>";
        } else {
          echo "<span style=\"color:white\">Hello Guest User</span>";
        }

        ?>
        <a class="cartIcon" href="../../Shopping%20Cart.php"><img src="../../cartfinal-removebg-preview.png" alt="Cart" style="width: 40px; height:40px;"></a>
      </div>
    </nav>
  </div>
  <br>
  <br />
  <h1 style="text-align: center; margin-top: 20px;">Order Manager</h1>
  <div class="container">

    <div class="row">
      <div class="col-2">

        <a class="btn btn-success" href="editOrder.php">Add Orders</a>
      </div>

      <!--        --><?php
                      //        session_start();
                      //        if (isset($_SESSION['message'])) {
                      //            
                      ?>
      <!--            <div class="alert alert-info text-center" style="margin-top:20px;">-->
      <!--                --><?php //echo $_SESSION['message']; 
                              ?>
      <!--            </div>-->
      <!--            --><?php
                          //
                          //            unset($_SESSION['message']);
                          //        }
                          //        
                          ?>

    </div>

    <div class="row">
      <div class="col-12">
        <?php
        session_start();
        if (isset($_SESSION['message'])) {
        ?>
          <div class="alert alert-info text-center" style="margin-top:20px;">
            <?php echo $_SESSION['message']; ?>
          </div>
        <?php

          unset($_SESSION['message']);
        }
        ?>
        <table class="table table-striped">
          <thead>
            <tr>
            <tr>
              <!--              <th scope="col">Sr No.</th>-->
              <th scope="col">Order No</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Email</th>
              <th scope="col">Contact</th>
              <th scope="col">Address</th>
              <th scope="col">Item</th>
              <th scope="col">Quantity</th>
              <th scope="col">Bill</th>
              <!--              <th scope="col"> Edit</th>-->
              <!--              <th scope="col">Delete</th>-->
            </tr>
            </tr>
          </thead>
          <!--            --------------------------- >start-->
          <tbody>
            <?php
            //load xml file
            $xml = simplexml_load_file('../../Database/orderlist.xml');

            foreach ($xml->order as $row) {
            ?>
              <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->First_Name; ?></td>
                <td><?php echo $row->Last_Name; ?></td>
                <td><?php echo $row->Email; ?></td>
                <td><?php echo $row->Contact; ?></td>
                <td><?php echo $row->Address; ?></td>
                <td><?php echo $row->products; ?></td>
                <td><?php echo $row->Quantity; ?></td>
                <td><?php echo $row->totalprice; ?></td>

                <td>
                  <a href="#edit_<?php echo $row->id; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                  <a href="#delete_<?php echo $row->id; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </td>
                <?php include('edit_delete_modal.php'); ?>
              </tr>
            <?php
            }

            ?>
          </tbody>



          <!--          <tbody>-->
          <!--            <tr>-->
          <!--              <th scope="row">1</th>-->
          <!--              <th>O122B</th>-->
          <!--              <td>Alison</td>-->
          <!--              <td>Floyd</td>-->
          <!--              <td>alisonfloyd@gmail.com</td>-->
          <!--              <td>+6137650987</td>-->
          <!--              <td>24 Harley Street</td>-->
          <!--              <td>French Baguettes	</td>-->
          <!--              <td>10</td>-->
          <!--              <td>$10.00</td>-->
          <!--              <td>-->
          <!--                <a href="editOrder.php" class="fa fa-edit"></a>-->
          <!--              </td>-->
          <!--              <td>-->
          <!--                <a class="fa fa-trash"></a>-->
          <!--              </td>-->
          <!--            </tr>-->
          <!--            <tr>-->
          <!--              <th scope="row">1</th>-->
          <!--              <th>O123B</th>-->
          <!--              <td>John</td>-->
          <!--              <td>Carter</td>-->
          <!--              <td>johncarter@gmail.com</td>-->
          <!--              <td>+5149561408</td>-->
          <!--              <td>545 Charest Street</td>-->
          <!--              <td>Rye Bread	</td>-->
          <!--              <td>3</td>-->
          <!--              <td>$13.65</td>-->
          <!--              <td>-->
          <!--                <a href="editOrder.php" class="fa fa-edit"></a>-->
          <!--              </td>-->
          <!--              <td>-->
          <!--                <a class="fa fa-trash"></a>-->
          <!--              </td>-->
          <!--            </tr>-->
          <!---->
          <!--            <tr>-->
          <!--              <th scope="row">1</th>-->
          <!--              <th>O124B</th>-->
          <!--              <td>Bryan</td>-->
          <!--              <td>Green</td>-->
          <!--              <td>b.green123@yahoo.com</td>-->
          <!--              <td>+3059806170</td>-->
          <!--              <td>2120 Collin Street</td>-->
          <!--              <td>Challah Bread	</td>-->
          <!--              <td>5</td>-->
          <!--              <td>$17.50</td>-->
          <!--              <td>-->
          <!--                <a href="editOrder.php" class="fa fa-edit"></a>-->
          <!--              </td>-->
          <!--              <td>-->
          <!--                <a class="fa fa-trash"></a>-->
          <!--              </td>-->
          <!--            </tr>-->
          <!---->
          <!--          </tbody>-->

        </table>
      </div>

    </div>

  </div>
</body>

</html>