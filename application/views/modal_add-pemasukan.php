<div class="col-sm-12">
	<div class="card card-primary card-outline">
		<div class="card-body">
			<form class="form-horizontal" id="submit" enctype="multipart/form-data">
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Tanggal</label>
					<div class="col-sm-9">
						<div class="input-group input-group-joined">
							<input id="tanggal" name="tanggal" class="form-control pickdate" type="text"
								placeholder="Pilih Tanggal Pemasukan / Pengeluaran" autocomplete="off">
							<span class="input-group-text">
								<i class="far fa-calendar"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Bukti Bayar</label>
					<div class="col-sm-9">
						<input type="file" id="pdf_file" name="pdf_file">
						<p>Jenis file : PDF, JPG, JPEG, PNG</p>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Uraian</label>
					<div class="col-sm-9">
						<input id="uraian" name="uraian" type="text" class="form-control"
							placeholder="Keterangan Pemasukan / Pengeluaran" autocomplete="off">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Penerimaan</label>
					<div class="col-sm-9">
						<input id="penerimaan" name="penerimaan" type="text" class="form-control" placeholder="Nominal Pemasukan"
							autocomplete="off">
						<!-- <input id="neraca-val" name="neraca-val" value="<?= number_format($dataById->Nominal,2) ?>"
							class="form-control number" type="text" placeholder="Nilai Nominal" autocomplete="off"> -->
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Pengeluaran</label>
					<div class="col-sm-9">
						<input id="pengeluaran" name="pengeluaran" type="text" class="form-control"
							placeholder="Nominal Pengeluaran" autocomplete="off">
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
		$('.pickdate').each(function () {
			$(this).datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true,
				todayHighlight: true
			});
		});
		//input number
		var penerimaan = document.getElementById('penerimaan');
		var pengeluaran = document.getElementById('pengeluaran');
    penerimaan.addEventListener('keyup', function() {
      var val = this.value;
      val = val.replace(/[^0-9\.]/g,'');
      
      if(val != "") {
        valArr = val.split('.');
        valArr[0] = (parseInt(valArr[0],10)).toLocaleString();
        val = valArr.join('.');
      }      
      this.value = val;
    });

		pengeluaran.addEventListener('keyup', function() {
      var val = this.value;
      val = val.replace(/[^0-9\.]/g,'');
      
      if(val != "") {
        valArr = val.split('.');
        valArr[0] = (parseInt(valArr[0],10)).toLocaleString();
        val = valArr.join('.');
      }      
      this.value = val;
    });

	});
	$('#submit').submit(function (e) {
		e.preventDefault();

		var tanggal = $('#tanggal').val();
		var pdf_file = $('#pdf_file').val();
		var uraian = $('#uraian').val();
		var penerimaan = $('#penerimaan').val();
		var pengeluaran = $('#pengeluaran').val();

		if (tanggal == "") {
			alert("Tanggal Harus Diisi!");
		} else if (pdf_file == "") {
			alert("Dokumen Harus Dipilih!");
		} else if (uraian == "") {
			alert("Uraian Harus Diisi!");
		} else if (penerimaan == "") {
			alert("Nominal Penerimaan Harus Diisi!");
		} else if (pengeluaran == "") {
			alert("Nominal Pengeluaran Harus Diisi!");
		} else {
			$.ajax({
				url: "<?php echo base_url('admin/Dashboard/insertData') ?>",
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