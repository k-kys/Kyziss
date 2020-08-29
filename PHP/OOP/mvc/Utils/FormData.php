<?php 
include_once './Utils/Session.php';
/**
 * 
 */
class FormData
{
	private static $key = 'form_data';
	
	public static function set($data)
	{
		Session::set(self::$key, $data);
	}

	public static function get($key)
	{
		$data = Session::get(self::$key);
		if (isset($data[$key])) {
			return $data[$key];
		}
		return null;
	}

	public static function destroy()
	{
		return Session::del(self::$key);
	}
}

 ?>