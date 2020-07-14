<?php View::header() ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Danh sách lớp học</h1>
			<a href="http://mvc.local/?controller=class&action=create" class="btn btn-primary">Add new class</a>
			<br><br>
			<form action="" method="GET" class="form-inline" role="form">
			
				<div class="form-group">
					<label class="sr-only" for="">Class name</label>
					<input type="text" name="classname" class="form-control" id="" value="<?= GetRequest::get('classname')?>" placeholder="Enter class name">
				</div>	
				<button type="submit" class="btn btn-primary">Search</button>
			</form>

			<table class="table table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Classname</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($classes as $class) : ?>
					<tr>
						<td><?= $class['id']; ?></td>
						<td><?= $class['classname']; ?></td>
						<td>
							<a href="http://mvc.local/?controller=class&action=destroy&id=<?= $class['id'] ?>" class="btn btn-danger btn-delete">Delete</a>
							<a href="http://mvc.local/?controller=class&action=edit&id=<?= $class['id'] ?>" class="btn btn-primary">Edit</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<?php $paginateC ?>
		</div>
	</div>
</div>


<script>
	$(document).ready(function() {
		$('.btn-delete').click(function(event) {
			let isDelete = confirm('Bạn có muốn xóa bản ghi này hay không ?');
			if (!isDelete) {
				event.preventDefault();
			}
		});
	});
</script>

<?php View::footer() ?>