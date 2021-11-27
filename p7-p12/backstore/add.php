<?php
session_start();



if (isset($_POST['add'])) {
    //open xml file
    $orderlist = simplexml_load_file("../../Database/orderlist.xml");
//    $orderlist = simplexml_load_file('../Da');


    $order = $orderlist->addChild('order');
    $order->addChild('id', $_POST['id']);
    $order->addChild('First_Name', $_POST['FN']);
    $order->addChild('Last_Name', $_POST['LN']);
    $order->addChild('Email', $_POST['EM']);
    $order->addChild('Contact', $_POST['PH']);
    $order->addChild('Address', $_POST['AD']);
    $order->addChild('products', $_POST['IT']);
    $order->addChild('Quantity', $_POST['Q']);
    $order->addChild('totalprice', $_POST['BL']);

    file_put_contents('/Users/minaawadalla/Desktop/Concordia/SOEN 287 - Pope Shenouda /Assignment/Team-SOEN 287/SOEN-287/Database/orderlist.xml', $orderlist->asXML());
    $_SESSION['message'] = 'Order added successfully';
    header('location: Orders.php');

    }
    else{


        echo "<script>
            window.location.href='Orders.php';
            </script>";
    $_SESSION['message'] = 'Fill up add form first';
    }
?>

