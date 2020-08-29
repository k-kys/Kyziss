<?php 

class Redirect
{
	
	public static function to($url)
	{
		return header("Location: {$url}");
	}
}

 ?>