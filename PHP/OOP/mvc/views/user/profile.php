<?php View::header() ?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php View::alert() ?>
			<form action="<?= Url::to('?controller=user&action=postProfile') ?>" method="POST" role="form" enctype="multipart/form-data">
				<legend>Update Profile</legend>
			
				<div class="form-group">
					<label for="">Address</label>
					<input type="text" class="form-control" value="<?= $userLogin['address'] ?>" name="address" id="address" >
				</div>

				<div class="form-group">
					<label for="">Gender</label>
					<div class="radio">
						<label>
							<input type="radio" name="gender" <?= $userLogin['gender'] == 1 ? 'checked' : '' ?> value="1">
							Male
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="gender" <?= $userLogin['gender'] == 2 ? 'checked' : '' ?> value="2">
							Female
						</label>
					</div>
				</div>
			
				<div class="form-group">
					<label for="">Avatar</label>
					<input type="file" class="form-control" name="avatar" id="avatar" >
				</div>
			
				<button type="button" id="btn-update" class="btn btn-primary">Update</button>
			</form>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$("#btn-update").click(function() {
			let address = $("#address").val();
			let gender = $("input[name=gender]:checked").val();
			let formData = new FormData;
			formData.append('address', address);
			formData.append('gender', gender);
			formData.append('avatar', $('#avatar')[0].files[0]);

			$.ajax({
				url: '<?= Url::to('?controller=user&action=postProfile') ?>',
				type: 'POST',
				dataType: 'json',
				data: formData,
				contentType: false,
				processData: false
			})
			.done(function(result) {
				console.log(result);
				if (result.success) {
					alert('Cập nhật profile thành công')
				}
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		})
	});
</script>


<?php View::footer() ?>

