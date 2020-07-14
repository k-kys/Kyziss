<?php

$username = $_POST['username'];
$password = $_POST['password'];
if ($username == 'admin' && $password == '123456') {
    echo "Login success";
} else {
    echo "Login Fail";
}
