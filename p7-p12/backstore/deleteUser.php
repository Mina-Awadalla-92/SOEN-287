<?php
include "connectDB.php";

if (isset($_GET['deleteId'])) {
    $id = $_GET['deleteId'];
    $sql = "delete from users where id=$id";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        header('location: Users.php');
    } else {
        die(mysqli_error($connection));
    }
}
