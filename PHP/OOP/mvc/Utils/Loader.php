<?php 

class Loader 
{
	
	public static function model($modelName)
	{
		include_once './models/' . $modelName . '.php';
	}
}

 ?>