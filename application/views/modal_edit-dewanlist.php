<div class="col-sm-12">
	<div class="card card-primary card-outline">
		<div class="card-body">
			<form class="form-horizontal" id="submit">
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">NAMA</label>
					<div class="col-sm-9">
						<input value="<?=$dataById->id_dewan?>" type="hidden" id="id_dewan" name="id_dewan">
						<input value="<?=$dataById->nama_dewan?>" type="text" id="dewan" name="dewan" class="form-control"
							placeholder="Nama Dewan">
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

		var nama_dewan = $('#dewan').val();
	
		if (nama_dewan == "") {
			alert("Nama Dewan harus diisi!");
		} else {
			$.ajax({
				url: '<?php echo base_url('admin/Organisasi/updateDewan') ?>',
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