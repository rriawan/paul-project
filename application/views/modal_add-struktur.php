<div class="col-sm-12">
	<div class="card card-primary card-outline">
		<!-- <div class="card-header"> -->
		<!-- <h3 class="card-title">Tambahkan</h3> -->
		<!-- </div> -->
		<div class="card-body">
			<form class="form-horizontal" id="submit" enctype="multipart/form-data">
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">NAMA</label>
					<div class="col-sm-9">
						<input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">ORGANISASI</label>
					<div class="col-sm-9">
						<!-- <input type="text" id="org-temp" name="org-temp"> -->
						<select name="organisasiList" id="organisasiList" class="form-control mt-2 text-dark organisasiList">
							<option value="0">- Pilih Organisasi -</option>
							<?php
              foreach($listOrganisasi as $row_org){
                echo "<option value=".$row_org->id_organisasi.">".$row_org->nama_organisasi."</option>";
              }?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">JABATAN</label>
					<div class="col-sm-9">
						<!-- <input type="text" id="jab-temp" name="jab-temp"> -->
						<select name="jabatanList" id="jabatanList" class="form-control mt-2 text-dark jabatanList">
							<option value="0">- Pilih Jabatan -</option>
							<?php
              foreach($listJabatan as $row_jab){
                echo "<option value=".$row_jab->id_jabatan.">".$row_jab->nama_jabatan."</option>";
              }?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">NO TELP</label>
					<div class="col-sm-9">
						<input type="text" id="no_telp" name="no_telp" class="form-control" placeholder="Nomor Telefon">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">FOTO</label>
					<div class="col-9">
						<input type="file" id="img_file" name="img_file">
						<p class="help-block">Max. 2MB</p>
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
	// $("#jabatanList").change(function () {
	// 	var jabId = $(this).val();
	// 	$('#jab-temp').val(jabId);
	// });
	// $("#organisasiList").change(function () {
	// 	var orgId = $(this).val();
	// 	$('#org-temp').val(orgId);
	// });
	$('#submit').submit(function (e) {
		e.preventDefault();

		var nama = $('#nama').val();
		var org_id = $('#organisasiList').val();
		var jab_id = $('#jabatanList').val();
		var no_telp = $('#no_telp').val();
		var img = $('#img_file').val();
		if (nama == "") {
			alert("Nama harus diisi!");
		} else if (org_id == "0" || org_id == "") {
			alert("Organisasi Harus Dipilih!");
		} else if (jab_id == "0" || jab_id == "") {
			alert("Jabatan harus dipilih!");
		} else if(no_telp == ""){
			alert("No Telp Harus Diisi!")
		} else if(img == ""){
			alert("Foto Harus Dipilih!");
		} else {
			$.ajax({
				url: '<?php echo base_url('admin/StrukturOrganisasi/insertStruktur') ?>',
				type: "post",
				data: new FormData(this),
				processData: false,
				contentType: false,
				cache: false,
				async: false,
				success: function (data) {
					alert(data);
				}
			});
		}

	});
</script>