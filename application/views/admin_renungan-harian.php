<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card card-primary card-outline">
				<div class="card-header">
					<h3 class="card-title">Renungan Harian</h3>
					<button class="btn btn-info float-right" type="button" id="btn-addNew">Add Data</button>
				</div>
				<div class="card-body p-1">
					<div class="table-responsive mailbox-messages">
						<table class="table table-hover table-striped" id="datatable" style="width: 100%;">
							<thead>
								<tr>
									<th>Text Renungan</th>
									<th>Update Date</th>
									<th>Update By</th>
                  <th></th>
								</tr>
							</thead>
							<tbody id="select">

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
    window.location = "<?=base_url('admin/RenunganHarian')?>";

	});
	$(document).ready(function () {
		var table;
		table = $('#datatable').DataTable({
			"ordering": false,
			"searching": false,
			"paging": false,
			"info": false,
			"retrieve": true,
			"ajax": {
				"url": "<?= base_url('admin/RenunganHarian/getRenunganHarian')?>",
				"type": "GET",
				"data": function (data) {

				}
			},
		});

		$('#select').on('click', '.edit-news', function () {
			var ItemID = $(this).attr("ItemID");
			$.ajax({
				url: "<?=base_url('admin/RenunganHarian/showModalRenungan');?>",
				method: 'POST',
				data: {
					ItemID: ItemID,
				},

				success: function (data) {
					$("#modalId").modal({
						backdrop: 'static',
						keyboard: false,
					});
					$("#modalId").modal("show");
					$('#modalIsi').html(data);
					document.getElementById("modalTitle").innerHTML = 'Detail Renungan Harian';
				}
			});
		});
	});
	$('#btn-addNew').click(function () {
		var aksi = 'Add Renungan Harian';
		$.ajax({
			url: "<?=base_url('admin/RenunganHarian/showModalAdd');?>",
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
</script>