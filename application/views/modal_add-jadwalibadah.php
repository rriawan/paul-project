<div class="col-sm-12">
	<div class="card card-primary card-outline">
		<div class="card-body">
			<form class="form-horizontal" id="submit" enctype="multipart/form-data">
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Jenis Jadwal</label>
					<div class="col-sm-9">
						<select name="jenisjadwal" id="jenisjadwal" class="form-control mt-2 text-dark">
							<option value="0">- Pilih Jenis Jadwal -</option>
							<?php
							foreach($listJenis as $row){								
								echo "<option value=".$row->id_jenis.">".$row->keterangan_jenis."</option>";
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Nama Ibadah</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="nama_jadwal" name="nama_jadwal" placeholder="Nama Ibadah" autocomplete="off">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Hari</label>
					<div class="col-sm-9">
						<select name="hari" id="hari" class="form-control mt-2 text-dark">
							<option value="0">- Pilih Hari -</option>
							<option value="Minggu">Minggu</option>
							<option value="Senin">Senin</option>
							<option value="Selasa">Selasa</option>
							<option value="Rabu">Rabu</option>
							<option value="Kamis">Kamis</option>
							<option value="Jumat">Jumat</option>
							<option value="Sabtu">Sabtu</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Keterangan</label>
					<div class="col-sm-9">
						<textarea class="form-control" name="keterangan" id="keterangan" rows="5"></textarea>
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

		var jenisjadwal = $('#jenisjadwal').val();
		var nama_jadwal = $('#nama_jadwal').val();
		var hari = $('#hari').val();
		var keterangan = $('#keterangan').val();

		if (jenisjadwal == "0" || jenisjadwal == "") {
			alert("Mohon Pilih Jenis Jadwal!");
		} else if (nama_jadwal == "") {
			alert("Nama Jadwal Ibadah Harus Diisi!");
		} else if (hari == "" || hari == "0") {
			alert("Hari harus dipilih!");
		} else if (keterangan == "") {
			alert("Keterangan Harus Diisi!");
		} else {
			$.ajax({
				url: "<?php echo base_url('admin/JadwalIbadah/insertData') ?>",
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