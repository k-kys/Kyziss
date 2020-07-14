<?php 

class View 
{
	
	public static function header()
	{
		include 'D:/xampp/htdocs/Kyziss/OOPs/mvc/views/partials/header.php';
	}

	public static function footer()
	{
		include 'D:/xampp/htdocs/Kyziss/OOPs/mvc/views/partials/footer.php';
	}

	public static function alert()
	{
		include 'D:/xampp/htdocs/Kyziss/OOPs/mvc/views/partials/alert.php';
	}

	public static function render($path)
	{
		$path = str_replace('.', '/', $path);
		include 'D:/xampp/htdocs/Kyziss/OOPs/mvc/views/' . $path . '.php';
		FormData::destroy();
	}
}

 ?>