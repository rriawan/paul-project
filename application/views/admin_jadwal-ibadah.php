<div class="container-fluid">
	<div class="row">
		<div class="col-3">
			<div class="card card-primary card-outline">
				<div class="card-header">
					<h3 class="card-title">JENIS JADWAL IBADAH</h3>
					<button class="btn btn-info float-right" type="button" id="btn-addjenis">Add Data</button>
				</div>
				<div class="card-body p-1">
					<div class="table-responsive mailbox-messages">
						<table class="table table-hover table-stripped" id="tbl-jenis" style="width:100%">
							<thead>
								<tr>
									<th>Jenis Jadwal</th>									
								</tr>
							</thead>
							<tbody id="select-jenis">

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-9">
			<div class="card card-primary card-outline">
				<div class="card-header">
					<h3 class="card-title">JADWAL IBADAH</h3>
					<button class="btn btn-info float-right" type="button" id="btn-addjadwal">Add Jadwal</button>
				</div>
				<div class="card-body p-1">
					<div class="table-responsive mailbox-messages">
						<table class="table table-hover table-stripped" id="tbl-jadwal" style="width:100%">
							<thead>
								<tr>
									<th>Jenis Jadwal</th>
									<th>Nama Jadwal</th>
									<th>Hari</th>
									<th>Keterangan</th>
									<th>Update By</th>
									<th>Update Date</th>
									<th></th>
								</tr>
							</thead>
							<tbody id="select-jadwal">

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
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
		window.location = "<?=base_url('admin/JadwalIbadah')?>";
	});
	$(document).ready(function () {
		//-------------
		var table;
		table = $('#tbl-jenis').DataTable({
			"ordering": false,
			"searching": false,
			"paging": false,
			"info": false,
			"retrieve": true,
			"ajax": {
				"url": "<?= base_url('admin/JadwalIbadah/jenisJadwal')?>",
				"type": "GET",
				"data": function (data) {

				}
			},
		});
		table = $('#tbl-jadwal').DataTable({
			"ordering": true,
			"searching": true,
			"paging": true,
			"info": false,
			"retrieve": true,
			"ajax": {
				"url": "<?= base_url('admin/JadwalIbadah/listJadwal')?>",
				"type": "GET",
				"data": function (data) {

				}
			},
		});
		//---------------------
	});
	$('#btn-addjenis').click(function () {
		var aksi = 'Add Jenis Jadwal';
		$.ajax({
			url: "<?=base_url('admin/JadwalIbadah/modalAddJenis');?>",
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

	$('#select-jenis').on('click', '.edit-news', function () {
		var id_jenis = $(this).attr("id_jenis");
		$.ajax({
			url: "<?=base_url('admin/JadwalIbadah/modalEditJenis');?>",
			method: 'POST',
			data: {
				id_jenis: id_jenis,
			},

			success: function (data) {
				$("#modalId").modal({
					backdrop: 'static',
					keyboard: false,
				});
				$("#modalId").modal("show");
				$('#modalIsi').html(data);
				document.getElementById("modalTitle").innerHTML = 'Jenis Jadwal';
			}
		});
	});

	$('#btn-addjadwal').click(function () {
		var aksi = 'Add Jadwal Ibadah';
		$.ajax({
			url: "<?=base_url('admin/JadwalIbadah/showModalAdd');?>",
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
	$('#select-jadwal').on('click', '.edit-news', function () {
		var id_jadwal = $(this).attr("id_jadwal");
		$.ajax({
			url: "<?=base_url('admin/JadwalIbadah/showModalEdit');?>",
			method: 'POST',
			data: {
				id_jadwal: id_jadwal,
			},

			success: function (data) {
				$("#modalId").modal({
					backdrop: 'static',
					keyboard: false,
				});
				$("#modalId").modal("show");
				$('#modalIsi').html(data);
				document.getElementById("modalTitle").innerHTML = 'Edit Jadwal Ibadah';
			}
		});
	});
</script>