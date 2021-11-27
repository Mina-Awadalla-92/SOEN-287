<?php
include "connectDB.php";

if (isset($_GET['deleteId'])) {
    $id = $_GET['deleteId'];
    $sql = "delete from products where id=$id";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        header('location: backStore.php');
    } else {
        die(mysqli_error($connection));
    }
}
