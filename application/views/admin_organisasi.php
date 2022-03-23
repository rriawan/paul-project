<div class="container-fluid">
	<div class="row">
		<div class="col-6">
			<div class="card card-primary card-outline">
				<div class="card-header">
					<h3 class="card-title">Organisasi</h3>
          <button class="btn btn-sm btn-primary float-right" id="add-organisasi">Add Organisasi</button>
				</div>
				<div class="card-body p-1">
					<div class="table-responsive mailbox-messages">
						<table class="table table-hover table-striped" id="tbl-organisasi">
							<thead>
								<tr>
									<th>Nama Organisasi</th>
                  <th></th>
								</tr>
							</thead>
							<tbody id="select-organisasi">

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
    <div class="col-6">
			<div class="card card-primary card-outline">
				<div class="card-header">
					<h3 class="card-title">Dewan</h3>
          <button class="btn btn-sm btn-primary float-right" id="add-dewan">Add Dewan</button>
				</div>
				<div class="card-body p-1">
					<div class="table-responsive mailbox-messages">
						<table class="table table-hover table-striped" id="tbl-dewan">
							<thead>
								<tr>
									<th>Nama Dewan</th>
                  <th></th>
								</tr>
							</thead>
							<tbody id="select-dewan">

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
    
	</div>  
  <div class="row">
    <div class="col-6">
			<div class="card card-primary card-outline">
				<div class="card-header">
					<h3 class="card-title">Seksi</h3>
          <button class="btn btn-sm btn-primary float-right" id="add-seksi">Add Seksi</button>
				</div>
				<div class="card-body p-1">
					<div class="table-responsive mailbox-messages">
						<table class="table table-hover table-striped" id="tbl-seksi">
							<thead>
								<tr>
									<th>Nama Dewan</th>
                  <th>Nama Seksi</th>
                  <th></th>
								</tr>
							</thead>
							<tbody id="select-seksi">

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
    <div class="col-6">
			<div class="card card-primary card-outline">
				<div class="card-header">
					<h3 class="card-title">Jabatan</h3>
          <button class="btn btn-sm btn-primary float-right" id="add-jabatan">Add Jabatan</button>
				</div>
				<div class="card-body p-1">
					<div class="table-responsive mailbox-messages">
						<table class="table table-hover table-striped" id="tbl-jabatan">
							<thead>
								<tr>
									<th>Nama Jabatan</th>
                  <th></th>
								</tr>
							</thead>
							<tbody id="select-jabatan">

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
  </div>
</div>
<div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalTitle"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="modalIsi">

				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$('.close').click(function () {
		$('#modalId').modal("hide");
    window.location = "<?=base_url('admin/Organisasi')?>";

	});
	$(document).ready(function () {
		var table;
		table = $('#tbl-organisasi').DataTable({
			"ordering": false,
			"searching": false,
			"paging": true,
			"info": false,
			"retrieve": true,
			"ajax": {
				"url": "<?= base_url('admin/Organisasi/listOrganisasi')?>",
				"type": "GET",
				"data": function (data) {

				}
			},
		});
    table = $('#tbl-dewan').DataTable({
			"ordering": false,
			"searching": false,
			"paging": true,
			"info": false,
			"retrieve": true,
			"ajax": {
				"url": "<?= base_url('admin/Organisasi/listDewan')?>",
				"type": "GET",
				"data": function (data) {

				}
			},
		});
    table = $('#tbl-seksi').DataTable({
			"ordering": false,
			"searching": false,
			"paging": true,
			"info": false,
			"retrieve": true,
			"ajax": {
				"url": "<?= base_url('admin/Organisasi/listSeksi')?>",
				"type": "GET",
				"data": function (data) {

				}
			},
		});
    table = $('#tbl-jabatan').DataTable({
			"ordering": false,
			"searching": false,
			"paging": true,
			"info": false,
			"retrieve": true,
			"ajax": {
				"url": "<?= base_url('admin/Organisasi/listJabatan')?>",
				"type": "GET",
				"data": function (data) {

				}
			},
		});

		$('#add-organisasi').click(function () {
			var aksi = 'Add List Organisasi';
			$.ajax({
				url: "<?=base_url('admin/Organisasi/showModalAddOrg');?>",
				method: 'post',
				data: {
					aksi: aksi
				},

				success: function (data) {
					$("#modalId").modal({
						backdrop: 'static',
						keyboard: false,
					});
					$("#modalId").modal("show");
					$("#modalIsi").html(data);
					document.getElementById("modalTitle").innerHTML = aksi;
				}
			});
		});
		$('#select-organisasi').on('click', '.edit-news', function () {
			var IdOrganisasi = $(this).attr("IdOrganisasi");
			$.ajax({
				url: "<?=base_url('admin/Organisasi/showModalEditOrg');?>",
				method: 'POST',
				data: {
					IdOrganisasi: IdOrganisasi,
				},

				success: function (data) {
					$("#modalId").modal({
						backdrop: 'static',
						keyboard: false,
					});
					$("#modalId").modal("show");
					$('#modalIsi').html(data);
					document.getElementById("modalTitle").innerHTML = 'Edit Organisasi List';
				}
			});
		});

		$('#add-dewan').click(function () {
			var aksi = 'Add List Dewan';
			$.ajax({
				url: "<?=base_url('admin/Organisasi/showModalAddDewan');?>",
				method: 'post',
				data: {
					aksi: aksi
				},

				success: function (data) {
					$("#modalId").modal({
						backdrop: 'static',
						keyboard: false,
					});
					$("#modalId").modal("show");
					$("#modalIsi").html(data);
					document.getElementById("modalTitle").innerHTML = aksi;
				}
			});
		});
		$('#select-dewan').on('click', '.edit-news', function () {
			var IdDewan = $(this).attr("IdDewan");
			$.ajax({
				url: "<?=base_url('admin/Organisasi/showModalEditDewan');?>",
				method: 'POST',
				data: {
					IdDewan:IdDewan,
				},

				success: function (data) {
					$("#modalId").modal({
						backdrop: 'static',
						keyboard: false,
					});
					$("#modalId").modal("show");
					$('#modalIsi').html(data);
					document.getElementById("modalTitle").innerHTML = 'Edit Dewan List';
				}
			});
		});
		$('#add-seksi').click(function () {
			var aksi = 'Add List Seksi';
			$.ajax({
				url: "<?=base_url('admin/Organisasi/showModalAddSeksi');?>",
				method: 'post',
				data: {
					aksi: aksi
				},

				success: function (data) {
					$("#modalId").modal({
						backdrop: 'static',
						keyboard: false,
					});
					$("#modalId").modal("show");
					$("#modalIsi").html(data);
					document.getElementById("modalTitle").innerHTML = aksi;
				}
			});
		});
		$('#select-seksi').on('click', '.edit-news', function () {
			var IdSeksi = $(this).attr("IdSeksi");
			$.ajax({
				url: "<?=base_url('admin/Organisasi/showModalEditSeksi');?>",
				method: 'POST',
				data: {
					IdSeksi:IdSeksi,
				},

				success: function (data) {
					$("#modalId").modal({
						backdrop: 'static',
						keyboard: false,
					});
					$("#modalId").modal("show");
					$('#modalIsi').html(data);
					document.getElementById("modalTitle").innerHTML = 'Edit Seksi List';
				}
			});
		});
		$('#add-jabatan').click(function () {
			var aksi = 'Add List Jabatan';
			$.ajax({
				url: "<?=base_url('admin/Organisasi/showModalAddJabatan');?>",
				method: 'post',
				data: {
					aksi: aksi
				},

				success: function (data) {
					$("#modalId").modal({
						backdrop: 'static',
						keyboard: false,
					});
					$("#modalId").modal("show");
					$("#modalIsi").html(data);
					document.getElementById("modalTitle").innerHTML = aksi;
				}
			});
		});
		$('#select-jabatan').on('click', '.edit-news', function () {
			var IdJabatan = $(this).attr("IdJabatan");
			$.ajax({
				url: "<?=base_url('admin/Organisasi/showModalEditJabatan');?>",
				method: 'POST',
				data: {
					IdJabatan: IdJabatan,
				},

				success: function (data) {
					$("#modalId").modal({
						backdrop: 'static',
						keyboard: false,
					});
					$("#modalId").modal("show");
					$('#modalIsi').html(data);
					document.getElementById("modalTitle").innerHTML = 'Edit Jabatan List';
				}
			});
		});
	});
</script>