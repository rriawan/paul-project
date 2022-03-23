<div class="col-sm-12">
	<div class="card card-primary card-outline">
		<div class="card-body">
			<form class="form-horizontal" id="submit" enctype="multipart/form-data">
				<!-- <div class="form-group row">
					<label class="col-sm-3 col-form-label">Tanggal</label>
					<div class="col-sm-9">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
							</div>
							<input id="tanggal" name="tanggal" type="text" class="form-control" data-inputmask-alias="datetime"
								data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
						</div>
					</div>
				</div> -->
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Judul</label>
					<div class="col-sm-9">
						<input id="judul" name="judul" type="text" class="form-control" placeholder="Judul Warta Jemaat"
							autocomplete="off">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">PDF Doc</label>
					<div class="col-sm-9">
						<input type="file" id="pdf_file" name="pdf_file">
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
		$('#datemask').inputmask('dd/mm/yyyy', {
			'placeholder': 'dd/mm/yyyy'
		})
		$('[data-mask]').inputmask()
	});
	$('#submit').submit(function (e) {
		e.preventDefault();

		// var tgl = $('#tanggal').val();
		var judul = $('#judul').val();
		var pdf_file = $('#pdf_file').val();

		if (judul == "") {
			alert("Judul Harus Dipilih!");
		} else if (pdf_file == "") {
			alert("Dewan Harus Dipilih!");
		} else {
			$.ajax({
				url: "<?php echo base_url('admin/WartaJemaat/uploadWarta') ?>",
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