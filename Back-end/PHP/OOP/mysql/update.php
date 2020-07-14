<?php

if (isset($_POST['username'])) {
    include 'connection.php';
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $id = $_POST['id'];
    $sql = "Update users set username = '{$username}', gender = $gender, address = '{$address}' WHERE id = $id";
    if ($connection->query($sql)) {
        echo "Update success";
    } else {
        echo "Update failed" . $connection->error;
    }
}
