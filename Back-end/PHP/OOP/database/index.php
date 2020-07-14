<?php
include ('./database.php');

$db = new Database;
// $connection = $db->connect();

// $sql = "SELECT * from users WHERE username = 'an'";

// $results = $connection->query($sql);

// if ($results->num_rows > 0) {
//     echo "Có user";
// } else {
//     echo "Không có user nào trong CSDL";
// }

$tableName = 'users';
$data = [
    'username' => 'Nguyen Van A',
    'password' => '123456789',
    'gender' => 1,
    'address' => "TP HO CHI MINH",
    'created_at' => date('Y-m-d H:i:s'),
];

// $db->insert($tableName, $data);
$db->update($tableName, $data, 1);
$db->delete($tableName, 5);

// UPDATE users SET username = 'Nguyen Van A',... WHERE id = 1
