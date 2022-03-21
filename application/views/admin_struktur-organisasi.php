<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card card-primary card-outline">
				<div class="card-header">
					<h3 class="card-title">Struktur Organisasi</h3>
          <button class="btn btn-sm btn-primary float-right">Add Struktur Organisasi</button>
				</div>
				<div class="card-body p-1">
					<div class="table-responsive mailbox-messages">
						<table class="table table-hover table-striped" id="tbl-strukturorganisasi">
							<thead>
								<tr>
									<th>NAMA</th>
									<th>ORGANISASI</th>
									<th>JABATAN</th>
									<th>NO TELP</th>
									<th>URL FOTO</th>
                  <th></th>
								</tr>
							</thead>
							<tbody id="select-strukturorganisasi">

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>  
	</div>  
	<div class="row">
		<div class="col-12">
			<div class="card card-primary card-outline">
				<div class="card-header">
					<h3 class="card-title">Struktur Seksi Dewan</h3>
          <button class="btn btn-sm btn-primary float-right">Add Seksi Dewan</button>
				</div>
				<div class="card-body p-1">
					<div class="table-responsive mailbox-messages">
						<table class="table table-hover table-striped" id="tbl-seksidewan">
							<thead>
								<tr>
									<th>NAMA</th>
									<!-- <th>ORGANISASI</th> -->
									<th>DEWAN</th>
									<th>SEKSI</th>
									<th>JABATAN</th>
									<th>NO TELP</th>
									<th>URL FOTO</th>
                  <th></th>
								</tr>
							</thead>
							<tbody id="select-seksidewan">

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
    // window.location = "<?=base_url('admin/StrukturOrganisasi')?>";

	});
	$(document).ready(function () {
		var table;
		table = $('#tbl-strukturorganisasi').DataTable({
			"ordering": false,
			"searching": false,
			"paging": true,
			"info": false,
			"retrieve": true,
			"ajax": {
				"url": "<?= base_url('admin/StrukturOrganisasi/listStruktur')?>",
				"type": "GET",
				"data": function (data) {

				}
			},
		});
		table = $('#tbl-seksidewan').DataTable({
			"ordering": false,
			"searching": false,
			"paging": true,
			"info": false,
			"retrieve": true,
			"ajax": {
				"url": "<?= base_url('admin/StrukturOrganisasi/listSeksiDewan')?>",
				"type": "GET",
				"data": function (data) {

				}
			},
		});
		// $('#select').on('click', '.edit-news', function () {
		// 	var ItemID = $(this).attr("ItemID");
		// 	$.ajax({
		// 		url: "<?=base_url('admin/WartaTerkini/ModalWartaTerkini');?>",
		// 		method: 'POST',
		// 		data: {
		// 			ItemID: ItemID,
		// 		},

		// 		success: function (data) {
		// 			$("#modalId").modal({
		// 				backdrop: 'static',
		// 				keyboard: false,
		// 			});
		// 			$("#modalId").modal("show");
		// 			$('#modalIsi').html(data);
		// 			document.getElementById("modalTitle").innerHTML = 'Detail Warta Terkini';
		// 		}
		// 	});
		// });
	});
</script>