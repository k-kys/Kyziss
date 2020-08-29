<?php View::header() ?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form action="http://mvc.local/?controller=class&action=store" method="POST" role="form">
				<legend>Add new Class</legend>

			  	<div class="form-group">
			      <label for="">Classname</label>
			      <input type="text" class="form-control" name="classname" id="" placeholder="Nhập tên lớp">
			    </div>
			    
			  <button type="submit" class="btn btn-success">Add</button>
			</form>
		</div>
	</div>
</div>

<?php View::footer() ?>