<?php

abstract class Model {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $databaseName = 'dev1909';
    protected $tableName;

    private $connection = null;

    protected function connect()
    {
        $conn = new mysqli($this->host, $this->username, $this->password, $this->databaseName);
        if ($conn->connect_error) {
            die('Connect failed:' . $conn->connect_error);
        }

        $this->connection = $conn;
        return $this->connection;
    }

    public function all()
    {
        $connection = $this->connect();

        $sql = "SELECT * FROM {$this->tableName}";
        $result = $connection->query($sql);
        $students = [];
        while ($student = $result->fetch_assoc()) {
            $students[] = $student;
        }

        return $students;
    }

    public function insert($data = [])
    {
        $columns = [];
        $values = [];
        foreach ($data as $key => $value) {
            $columns[] = $key;
            $values[] = "'" . $value . "'";
        }
        // $columns[] = 'created_at';
        // $columns[] = 'updated_at';
        // $values[] = "'" . date('Y-m-d H:i:s') . "'";
        // $values[] = "'" . date('Y-m-d H:i:s') . "'";
        $columnsStr = implode(', ', $columns);
        $valuesStr = implode(',', $values);
        $sql = "INSERT INTO {$this->tableName} ({$columnsStr}) VALUES ({$valuesStr})";
        $connection = $this->connect();
        if ($connection->query($sql)) {
            return true;
        } else {
            echo "Đã có lỗi xảy ra" . $connection->error;
        }
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE id = {$id}";
        $connect = $this->connect();
        $result = $connect->query($sql);
        if ($result->num_rows == 0) {
            return null;
        }
        return $result->fetch_assoc();
    }

    public function update($data = [], $id)
    {
        $sets = [];
        foreach ($data as $key => $value) {
            $sets[] = "{$key} = '{$value}'";
        }
        $setsStr = implode(', ', $sets);
        $sql = "UPDATE {$this->tableName} SET {$setsStr} WHERE id = $id";
        $connection = $this->connect();
        return $connection->query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM {$this->tableName} WHERE id = {$id}";
        $connect = $this->connect();
        return $connect->query($sql);
    }

    public function paginate($limit, $offset)
    {
        $connection = $this->connect();

        $sql = "SELECT * FROM {$this->tableName} LIMIT {$limit} OFFSET {$offset}";
        $result = $connection->query($sql);
        $records = [];
        while ($record = $result->fetch_assoc()) {
            $records[] = $record;
        }

        return $records;
    }

    public function count()
    {
        $sql = "SELECT count(*) as total FROM {$this->tableName}";
        $connect = $this->connect();
        $result = $connect->query($sql);

        return $result->fetch_assoc()['total'];
    }

}
