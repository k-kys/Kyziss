<?php

$numA = $_POST['numa'];
$numB = $_POST['numb'];
$operator = $_POST['operator'];
$result = null;
if ($operator == '+') {
    $result = $numA + $numB;
} elseif ($operator == '-') {
    $result = $numA - $numB;
} elseif ($operator == '*') {
    $result = $numA * $numB;
} elseif ($operator == '/') {
    $result = $numA / $numB;
}

echo 'Result is: ' . $result;
