<?php 
include_once 'Session.php';

class FlashMessage
{
	private static $key = 'flash_message';
	// stric mode
	// 
	public static function __callStatic($name, $agrs)
	{
		$message = $agrs[0];
		return Session::set(self::$key, [
			'type' => $name, 
			'message' => $message
		]);
	}

	public static function hasMessage()
	{
		return Session::get(self::$key) != null;
	}

	public static function getType()
	{
		return Session::get(self::$key)['type'];
	}

	public static function getMessage()
	{
		return Session::get(self::$key)['message'];
	}

	public static function delete()
	{
		return Session::del(self::$key);
	}
}


// FlashMessage::success('Thêm mới sinh viên thành công');
 ?>