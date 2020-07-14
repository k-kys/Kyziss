<?php View::header() ?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php View::alert() ?>
			<form action="http://mvc.local/?controller=user&action=postChangePassword" method="POST" role="form">
				<legend>Change Password</legend>
			
				<div class="form-group">
					<label for="">Mật khẩu cũ</label>
					<input type="password" name="old_password" class="form-control" id="" placeholder="Nhập mật khẩu cũ">
				</div>
			
				<div class="form-group">
					<label for="">Mật khẩu mới</label>
					<input type="password" name="new_password" class="form-control" id="" placeholder="Nhập mật khẩu mới">
				</div>

				<div class="form-group">
					<label for="">Nhập lại mật khẩu mới</label>
					<input type="password" name="retype_password" class="form-control" id="" placeholder="Nhập lại mật khẩu mới">
				</div>
			
				<button type="submit" class="btn btn-primary">Change</button>
			</form>
		</div>
	</div>
</div>
<?php View::footer() ?>