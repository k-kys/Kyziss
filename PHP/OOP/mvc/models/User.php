<?php
include_once './models/Model.php';

class User extends Model {
    protected $tableName = 'users';

    public function login($username, $password)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE username = '{$username}' AND password = '{$password}'";
        //unique
        $connect = $this->connect();
        $result = $connect->query($sql);
        if (!$result->num_rows) {
            return false;
        }

        return $result->fetch_assoc();
    }
}
