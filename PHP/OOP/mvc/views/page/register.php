<?php View::header() ?>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-push-3">
			<?php View::alert() ?>
			<form action="http://mvc.local/?controller=user&action=store" method="POST" role="form">
				<legend>Register User</legend>
			
				<div class="form-group">
					<label for="">Username</label>
					<input type="text" class="form-control" name="username" id="" value="<?= FormData::get('username') ?>" placeholder="Input Username">
				</div>
			
				<div class="form-group">
					<label for="">Password</label>
					<input type="text" class="form-control" name="password" id="" value="<?= FormData::get('password') ?>" placeholder="Input Password">
				</div>

				<div class="form-group">
					<label for="">Gender</label>
					<div class="radio">
						<label>
							<input type="radio" name="gender" id="inputGender" value="1" <?= FormData::get('gender') == 1 ? 'checked' : '' ?>>
							Male
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="gender" id="inputGender" value="2" <?= FormData::get('gender') == 2 ? 'checked' : '' ?>>
							Female
						</label>
					</div>
				</div>

				<div class="form-group">
					<label for="">Address</label>
					<input type="text" class="form-control" name="address" id="" value="<?= FormData::get('address') ?>" placeholder="Input Address">
				</div>

				<div class="form-group">
					<label for="">Role</label>
					<input type="text" class="form-control" name="role" id="" value="<?= FormData::get('role') ?>" placeholder="Input Role">
				</div>
			
				<button type="submit" class="btn btn-success">Register</button>
			</form>
		</div>
	</div>
</div>
<?php View::footer() ?>