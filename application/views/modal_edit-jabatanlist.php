<div class="col-sm-12">
	<div class="card card-primary card-outline">
		<div class="card-body">
			<form class="form-horizontal" id="submit">
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">NAMA</label>
					<div class="col-sm-9">
						<input value="<?=$dataById->id_jabatan?>" type="hidden" id="id_jabatan" name="id_jabatan">
						<input value="<?=$dataById->nama_jabatan?>" type="text" id="jabatan" name="jabatan" class="form-control"
							placeholder="Nama Jabatan">
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

		var nama_jab = $('#jabatan').val();
	
		if (nama_jab == "") {
			alert("Nama Organisasi harus diisi!");
		} else {
			$.ajax({
				url: '<?php echo base_url('admin/Organisasi/updateJabatan') ?>',
				type: "post",
				data: new FormData(this),
				processData: false,
				contentType: false,
				cache: false,
				async: false,
				success: function (data) {
					window.location.reload();
				}
			});
		}

	});
</script>