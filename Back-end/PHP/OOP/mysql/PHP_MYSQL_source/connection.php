<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'dev1909';

$connection = new mysqli($host, $username, $password, $dbName);

if ($connection->connect_error) {
    die('Can\'t not connect to database');
}
