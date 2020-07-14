<?php
include_once ('./models/Model.php');

class Student extends Model {
    
    protected $tableName = 'students';

    public function paginateStudent($name, $limit, $offset)
    {
        $connection = $this->connect();

        $sql = "SELECT * FROM {$this->tableName} WHERE name like '%{$name}%' LIMIT {$limit} OFFSET {$offset}";
        $result = $connection->query($sql);
        $records = [];
        while ($record = $result->fetch_assoc()) {
            $records[] = $record;
        }

        return $records;
    }

    public function countStudent($name)
    {
        $sql = "SELECT count(*) as total FROM {$this->tableName} WHERE name like '%{$name}%'";
        $connect = $this->connect();
        $result = $connect->query($sql);

        return $result->fetch_assoc()['total'];
    }
}

