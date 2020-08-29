<?php View::header() ?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form action="" method="POST" role="form">
				<legend>Phương trình bậc 2</legend>
			
				<div class="form-group">
					<label for="">A</label>
					<input type="text" class="form-control" id="soa" placeholder="Input field">
				</div>
			
				<div class="form-group">
					<label for="">B</label>
					<input type="text" class="form-control" id="sob" placeholder="Input field">
				</div>

				<div class="form-group">
					<label for="">C</label>
					<input type="text" class="form-control" id="soc" placeholder="Input field">
				</div>
			
				<button type="button" id="btn-calc" class="btn btn-primary">Calculate</button>
			</form>
		</div>
		<div class="col-md-6">
			<h2>Kết quả</h2>
			<div id="kq"></div>
			<img style="display: none;" src="https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif" alt="" id="img-loading">
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$("#btn-calc").click(function() {
			$("#img-loading").show();
			$("#kq").html('');
			let a = $("#soa").val();
			let b = $("#sob").val();
			let c = $("#soc").val();

			// sử dụng FormData
			$.ajax({
				url: '<?= Url::to('?controller=page&action=postPtb2') ?>',
				type: 'POST',
				dataType: 'json',
				data: {
					a: a,
					b: b,
					c: c
				},
			})
			.done(function(result) {
				let html = '';
				let soNghiem = result.so_nghiem;
				if (soNghiem == 0) {
					html = 'Phương trình vô nghiệm'
				} else if (soNghiem ==1) {
					html = 'Phương trình có nghiệm là : ' + result.nghiem[0]
				} else {
					html = 'Phương trình có 2 nghiệm là : ' + result.nghiem[0] + ' và ' + result.nghiem[1]
				}
				$("#kq").html(html);
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				$("#img-loading").hide();
			});
			
		});
	});
</script>

<?php View::footer() ?>