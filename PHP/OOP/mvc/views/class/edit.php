<?php View::header() ?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form action="http://mvc.local/?controller=class&action=update" method="POST" role="form">
				<legend>Edit class <?= $class['classname'] ?></legend>
				<input type="hidden" name="_id" value="<?= $class['id'] ?>">
				<div class="form-group">
					<label for="">Classname</label>
					<input type="text" name="classname" class="form-control" id="" value="<?= $class['classname'] ?>" placeholder="Nhập tên lớp">
				</div>
				<button type="submit" class="btn btn-primary">Update</button>
			</form>
		</div>
	</div>
</div>
<?php View::footer() ?>