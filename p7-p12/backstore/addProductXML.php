<?php
session_start();



if (isset($_POST['add'])) {
    //open xml file
    $productList = simplexml_load_file("../../Database/products.xml");


    $product = $productList->addChild('product');
    $product->addChild('id', $_POST['id']);
    $product->addChild('name', $_POST['name']);
    $product->addChild('img', $_POST['image']);
    $product->addChild('available', $_POST['stock']);
    $product->addChild('price', $_POST['price']);


    file_put_contents('../../Database/products.xml', $productList->asXML());
    $_SESSION['message'] = 'Product added successfully';
    header('location: backStore.php');

    }
    else{


        echo "<script>
            window.location.href='backStore.php';
            </script>";
    $_SESSION['message'] = 'Fill up add form first';
    }
?>

