<div class="col-sm-12">
	<div class="card card-primary card-outline">
		<div class="card-body">
			<form class="form-horizontal" id="submit">
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">DEWAN</label>
					<div class="col-sm-9">
						<select name="dewanList" id="dewanList" class="form-control mt-2 text-dark dewanList">
							<option value="0">- Pilih Dewan -</option>
							<?php
							foreach($listDewan as $row_dewan){								
								echo "<option value=".$row_dewan->id_dewan.">".$row_dewan->nama_dewan."</option>";
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">NAMA SEKSI</label>
					<div class="col-sm-9">
						<input type="text" id="seksi" name="seksi" class="form-control"
							placeholder="Nama Seksi">
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

		var nama_seksi = $('#seksi').val();
		var id_dewan = $('#dewanList').val();
		if (nama_seksi == "") {
			alert("Nama Seksi harus diisi!");
		} else if(id_dewan == ""||id_dewan==0){
			alert("Kategori Dewan Harus Dipilih!")
		} else {
			$.ajax({
				url: '<?php echo base_url('admin/Organisasi/insertSeksi') ?>',
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