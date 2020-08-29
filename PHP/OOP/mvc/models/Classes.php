<?php 
include_once 'D:/xampp/htdocs/Kyziss/OOPs/mvc/models/Model.php';

class Classes extends Model
{
	protected $tableName = 'classes';

	public function paginateClass($classname, $limit, $offset)
	{
		$connection = $this->connect();

		$sql = "SELECT * FROM {$this->tableName} WHERE classname LIKE '%{$classname}%' LIMIT {$limit} OFFSET {$offset}";
		$result = $connection->query($sql);
		$records = [];
		while ($record = $result->fetch_assoc()) {
			$records[] = $record;
		}

		return $records;
	}

	public function countClass($classname)
	{
		$sql = "SELECT count(*) as total FROM {$this->tableName} WHERE classname LIKE '%{$classname}%'";
		$connect = $this->connect();
		$result = $connect->query($sql);

		return $result->fetch_assoc()['total'];
	}
}

 ?>