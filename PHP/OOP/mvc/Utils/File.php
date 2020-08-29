<?php 

class File
{
	
	public static function upload(string $name, string $path = null, string $customFileName = null) : string
	{
		$filename = $_FILES[$name]['name'];
		$tmpArr = explode('.', $filename);
		$extension = array_pop($tmpArr);
		$newName = time() . ".{$extension}";
		if ($customFileName) {
			$newName = $customFileName;
		}
		$uploadPath = 'public/avatar/' . $newName;
		if ($path) {
			$uploadPath = $path . $newName;
		}
		$tmpPath = $_FILES[$name]['tmp_name'];
		move_uploaded_file($tmpPath, './' . $uploadPath);
		return $uploadPath;
		// $userModel = new User;
		// $userModel->update([
		// 	'avatar' => $uploadPath
		// ], Auth::id());
	}
}

 ?>