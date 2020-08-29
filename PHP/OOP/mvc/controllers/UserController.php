<?php 
Loader::model('User');

class UserController
{
	

	public function store()
	{
		// $pass = PostRequest::only(['password']);
		// dd($pass);
		$data = PostRequest::only(['username','password','gender','address','role']);
		
		dd($data);
		$userModel = new User;
		$userModel->insert($data);
		FlashMessage::success('Tạo tài khoản người dùng thành công');
		Redirect::to('http://mvc.local/?controller=page&action=register');

	}
	
	public function changePassword()
	{
		View::render('user.change-pass');
	}

	public function postChangePassword()
	{
		$validator = new Validator(PostRequest::all(),[
			'old_password' => 'required|minlength:3', 
			'new_password' => 'required',
			'retype_password' => 'required'
		], [
			'old_password.required' => 'Mật khẩu cũ không được để trống',
			'old_password.minlength' => 'Mật khẩu cũ tối thiểu 3 ký tự',
			'new_password.required' => 'Mật khẩu mới không được để trống',
			'retype_password.required' => 'Nhập lại mật khẩu mới không được để trống'
		]);

		if ($validator->fail()) {
			FlashMessage::danger($validator->error());
			return Redirect::to('http://mvc.local/?controller=user&action=changePassword');
		}

		$userModel = new User;
		$currentUser = $userModel->getById(Auth::id());
		$currentPass = $currentUser['password'];

		$oldPassword = PostRequest::get('old_password');
		$newPassword = PostRequest::get('new_password');
		$retypePassword = PostRequest::get('retype_password');

		if ($currentPass !== md5($oldPassword)) {
			FlashMessage::danger('Mật khẩu cũ không chính xác');
			return Redirect::to('http://mvc.local/?controller=user&action=changePassword');
		}

		if ($newPassword != $retypePassword) {
			FlashMessage::danger('Mật khẩu mới không khớp');
			return Redirect::to('http://mvc.local/?controller=user&action=changePassword');
		}

		$userModel->update([
			'password' => md5($newPassword)
		], Auth::id());
		FlashMessage::success('Đổi mật khẩu thành công');
		return Redirect::to('http://mvc.local/');
	}

	public function profile()
	{
		$id = Auth::id();
		$userModel = new User;
		$userLogin = $userModel->getById($id);
		include ('./views/user/profile.php');
		// View::render('user.profile');
	}

	public function postProfile()
	{
		// $filename = $_FILES['avatar']['name'];
		// $tmpArr = explode('.', $filename);
		// $extension = array_pop($tmpArr);
		// $newName = time() . ".{$extension}";
		// $uploadPath = 'public/avatar/' . $newName;
		// $tmpPath = $_FILES['avatar']['tmp_name'];
		// move_uploaded_file($tmpPath, './' . $uploadPath);

		// $userModel = new User;
		// $userModel->update([
		// 	'avatar' => $uploadPath
		// ], Auth::id());
		$data = PostRequest::only(['address','gender']);
		$filename = $_FILES['avatar']['name'];
		if ($filename) {
			$uploadPath = File::upload('avatar');
			$data['avatar'] = $uploadPath;
		}

		$userModel = new User;
		$userModel->update($data,Auth::id());
		FlashMessage::success('Saved');
		echo json_encode([
			'success' => true,
			'message' => 'Cập nhật Profile thành công'
		]);
		// return Redirect::to(BASE_URL . '?controller=user&action=profile');
	}
}


 ?>