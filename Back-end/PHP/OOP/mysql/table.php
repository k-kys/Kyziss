<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'dev1909';

$connection = new mysqli($host, $username, $password, $dbName);

if ($connection->connect_error) {
    die('Connect Failed');
}

echo "Connect success";

$sql = "CREATE TABLE users (
    id integer auto_increment primary key,
    username varchar(255),
    password varchar(255),
    gender tinyint default 0,
    address varchar(255),
    created_at datetime
)";

if ($connection->query($sql) === true) {
    echo "Create table success";
} else {
    echo "Create table failed:" . $connection->error;
}
