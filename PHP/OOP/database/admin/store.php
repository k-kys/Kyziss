<?php

include '../database.php';
include_once '../request.php';

$db = new Database;

$rq = new Request;
$rq->get($name);
$rq2->get($name);

$rq2 = new Request;
$rq3 = new Request;

$db->insert('users', [
    'username' => Request::get('username'),
    'password' => md5(Request::get('password')),
    'gender' => Request::get('gender'),
    'address' => Request::get('address'),
    'created_at' => date('Y-m-d H:i:s')
]);

echo "Insert to DB success";

// Hàm Tĩnh: Static function
// wrap


//Mô hình MVC! MODEL VIEW CONTROLLER

