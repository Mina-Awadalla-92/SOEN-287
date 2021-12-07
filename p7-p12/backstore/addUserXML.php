<?php
session_start();

if (isset($_POST['add'])) {
    //open xml file
    $Users = simplexml_load_file("../../Database/user.xml");


    $user = $Users->addChild('user');
    $user->addChild('id', $_POST['id']);
    $user->addChild('firstName', $_POST['FN']);
    $user->addChild('lastName', $_POST['LN']);
    $user->addChild('contact', $_POST['CN']);
    $user->addChild('address', $_POST['AD']);
    $user->addChild('city', $_POST['CT']);
    $user->addChild('province', $_POST['PR']);
    $user->addChild('postalCode', $_POST['PC']);
    $user->addChild('email', $_POST['EM']);
    $user->addChild('password', $_POST['PW']);
    $user->addChild('cart', "");


    file_put_contents('../../Database/user.xml', $Users->asXML());
    $_SESSION['message'] = 'user added successfully';
    header('location: Users.php');

    }
    else{


        echo "<script>
            window.location.href='Users.php';
            </script>";
    $_SESSION['message'] = 'Fill up add form first';
    }
?>

