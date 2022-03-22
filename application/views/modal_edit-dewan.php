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
						<input value="<?= $dataById->Nama ?>" type="text" id="nama" name="nama" class="form-control"
							placeholder="Nama Lengkap">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">DEWAN</label>
					<div class="col-sm-9">
						<select name="dewanList" id="dewanList" class="form-control mt-2 text-dark dewanList">
							<?php
							foreach($listDewan as $row_dewan){
								if($row_dewan->id_dewan == $dataById->id_dewan){
									$select_dewan = "selected";
								}else{
									$select_dewan = "";
								}
								echo "<option $select_dewan value=".$row_dewan->id_dewan.">".$row_dewan->nama_dewan."</option>";
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">SEKSI</label>
					<div class="col-sm-9">
						<select name="seksiList" id="seksiList" class="form-control mt-2 text-dark seksiList">
							<?php
							foreach($listSeksi as $row_seksi){
								if($row_seksi->id_seksi == $dataById->id_seksi){
									$select_seksi = "selected";
								}else{
									$select_seksi = "";
								}
								echo "<option $select_seksi value=".$row_seksi->id_seksi.">".$row_seksi->nama_seksi."</option>";
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">JABATAN</label>
					<div class="col-sm-9">
						<select name="jabatanList" id="jabatanList" class="form-control mt-2 text-dark jabatanList">
							<?php
							foreach($listJabatan as $row_jab){
								if($row_jab->id_jabatan == $dataById->id_jabatan){
									$select_jab = "selected";
								}else{
									$select_jab = "";
								}
								echo "<option $select_jab value=".$row_jab->id_jabatan.">".$row_jab->nama_jabatan."</option>";
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">NO TELP</label>
					<div class="col-sm-9">
						<input value="<?=$dataById->no_telp?>" type="text" id="no_telp" name="no_telp" class="form-control"
							placeholder="Nomor Telefon">
					</div>
				</div>
				<div class="form-group row">
					<input type="hidden" name="image_old" value="<?php echo $dataById->img_url;?>">
					<input type="hidden" name="id_seksidewan" id="id_seksidewan" value="<?php echo $dataById->id;?>">
					<label class="col-sm-3 col-form-label">FOTO</label>
					<div class="col-9">
						<input type="file" id="img_file" name="img_file">
						<p class="help-block">Max. 2MB</p>
						<!-- <div class="row">
							<img style="width:70px; height:85px;" src="<?=base_url()?>temp-folder/<?=$dataById->img_url?>" alt="">
						</div> -->
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
	$(document).ready(function () {

		$('#dewanList').change(function () {
			var id = $(this).val();
			$.ajax({
				url: "<?php echo base_url('admin/StrukturOrganisasi/getSub');?>",
				method: "POST",
				data: {
					id: id
				},
				async: true,
				dataType: 'json',
				success: function (data) {

					var html = '';
					var i;
					for (i = 0; i < data.length; i++) {
						html += '<option value=' + data[i].id_seksi + '>' + data[i].nama_seksi +
							'</option>';
					}
					$('#seksiList').html(html);

				}
			});
			return false;
		});

	});
	$('#submit').submit(function (e) {
		e.preventDefault();

		var nama = $('#nama').val();
		var dewan_id = $('#dewanList').val();
		var seksi_id = $('#seksiList').val();
		var jab_id = $('#jabatanList').val();
		var no_telp = $('#no_telp').val();
		var img = $('#img_file').val();
		if (nama == "") {
			alert("Nama harus diisi!");
		} else if (dewan_id == "0" || dewan_id == "") {
			alert("Dewan Harus Dipilih!");
		} else if (seksi_id == "0" || seksi_id == "") {
			alert("Dewan Harus Dipilih!");
		} else if (jab_id == "0" || jab_id == "") {
			alert("Jabatan harus dipilih!");
		} else if (no_telp == "") {
			alert("No Telp Harus Diisi!")
		} else {
			$.ajax({
				url: '<?php echo base_url('admin/StrukturOrganisasi/updateSeksiDewan') ?>',
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