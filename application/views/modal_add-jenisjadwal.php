<div class="col-sm-12">
	<div class="card card-primary card-outline">
		<div class="card-body">
			<form class="form-horizontal" id="submit">
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Jenis Jadwal</label>
					<div class="col-sm-9">
						<input id="keterangan_jenis" name="keterangan_jenis" type="text" class="form-control" placeholder="Jenis Keterangan Ibadah"
							autocomplete="off">
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

		var keterangan_jenis = $('#keterangan_jenis').val();

		if (keterangan_jenis == "") {
			alert("Keterangan Jenis Ibadah Harus Diisi!");
		} else {
			$.ajax({
				url: "<?php echo base_url('admin/JadwalIbadah/insertJenis') ?>",
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