<div class="col-sm-12">
	<div class="card card-primary card-outline">
		<div class="card-body">
			<form class="form-horizontal" id="submit" enctype="multipart/form-data">
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Image</label>
					<div class="col-sm-9">
						<input type="file" id="img_file" name="img_file">
						<p>Jenis file : JPG, JPEG, PNG</p>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Judul</label>
					<div class="col-sm-9">
						<input id="judul" name="judul" type="text" class="form-control" placeholder="Judul Profile"
							autocomplete="off">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Rincian Sejarah</label>
					<div class="col-sm-9">
						<textarea class="form-control" name="rincian" id="rincian" rows="10"></textarea>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-12">
						<button type="submit" class="btn btn-primary btn-block float-right">
							<strong><i class="far fa-save"></i>&nbsp;SAVE</strong>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	$('#submit').submit(function (e) {
		e.preventDefault();

		var judul = $('#judul').val();
		var rincian = $('#rincian').val();

		if (judul == "") {
			alert("Judul Harus Diisi!");
		} else if (rincian == "") {
			alert("Rincian Harus Diisi!");
		} else {
			$.ajax({
				url: "<?php echo base_url('admin/ProfileGereja/insertData') ?>",
				type: "post",
				data: new FormData(this),
				processData: false,
				contentType: false,
				cache: false,
				async: false,
				success: function (data) {
					// console.log(data);
					window.location.reload();
				}
			});
		}
	});
</script>