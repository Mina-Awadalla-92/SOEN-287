<?php
$connection = new mysqli('localhost', 'root', '', 'munchies');
if (!$connection) {
    die(mysqli_error($connection));
}
