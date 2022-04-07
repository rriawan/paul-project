<div class="col-sm-12">
	<div class="card card-primary card-outline">
		<div class="card-body p-0">
			<div class="mailbox-read-info">
				<h5>Create By : <?=$this->session->userdata('Name')?></h5>
			</div>
			<form action="<?= base_url('admin/RenunganHarian/insertNewRenungan') ?>" method="POST">
				<div class="mailbox-read-message">
					<input type="hidden" id="updateby" name="updateby" value="<?=$this->session->userdata('Username');?>">
					<textarea class="form-control" name="renungan" id="message"
						rows="10" placeholder="Insert Text Renungan Harian"></textarea>
				</div>
				<div class="row">
					<div class="col-12">
						<button class="btn btn-primary btn-block" type="submit">Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- <script>
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
</script> -->