<?php

class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $databaseName = 'dev1909';

    private $connection = null;

    public function connect()
    {
        $conn = new mysqli($this->host, $this->username, $this->password, $this->databaseName);
        if ($conn->connect_error) {
            die('Connect failed:' . $conn->connect_error);
        }

        $this->connection = $conn;
        return $this->connection;
    }

    public function insert($tableName, $data = [])
    {
        $columns = [];
        $values = [];
        foreach ($data as $key => $value) {
            $columns[] = $key;
            $values[] = "'" . $value . "'";
        }
        $columnsStr = implode(', ', $columns);
        $valuesStr = implode(',', $values);
        $sql = "INSERT INTO {$tableName} ({$columnsStr}) VALUES ({$valuesStr})";
        $connection = $this->connect();
        return $connection->query($sql);
    }

    public function update($tableName, $data = [], $id)
    {
        $sets = [];
        foreach ($data as $key => $value) {
            $sets[] = "{$key} = '{$value}'";
        }
        $setsStr = implode(', ', $sets);
        $sql = "UPDATE {$tableName} SET {$setsStr} WHERE id = $id";
        $connection = $this->connect();
        return $connection->query($sql);
    }

    public function delete($tableName, $id)
    {
        $sql = "DELETE FROM {$tableName} WHERE id = {$id}";
        $connect = $this->connect();
        return $connect->query($sql);
    }

}
