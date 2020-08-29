<?php

$host = 'localhost';
$username = 'root';
$password = '';

$connection = new mysqli($host, $username, $password);

if ($connection->connect_error) {
    die('Connect Failed! Check your credential');
}

echo "Connect success";

$sql = 'CREATE DATABASE dev1909';

if ($connection->query($sql) === true) {
    echo "Create database successfully";
} else {
    echo "Create database failed" . $connection->error;
}
