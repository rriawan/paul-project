<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card card-primary card-outline">
				<div class="card-header">
					<h3 class="card-title">Kritik dan Saran dari Pengguna</h3>
				</div>
				<div class="card-body p-1">
					<div class="table-responsive mailbox-messages">
						<table class="table table-hover table-striped" id="datatable">
							<thead>
								<tr>
									<th>From</th>
									<th></th>
									<th>Message</th>
									<th>Date</th>
									<th>Read By</th>
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
    window.location = "<?=base_url('admin/SaranPengguna')?>";

	});
	$(document).ready(function () {
		var table;
		table = $('#datatable').DataTable({
			"ordering": false,
			"searching": true,
			"paging": true,
			"info": false,
			"retrieve": true,
			"ajax": {
				"url": "<?= base_url('admin/SaranPengguna/getListSaran')?>",
				"type": "GET",
				"data": function (data) {

				}
			},
		});

		$('#select').on('click', '.btn-read', function () {
			var ItemID = $(this).attr("ItemID");
			$.ajax({
				url: "<?=base_url('admin/SaranPengguna/ReadMessage');?>",
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
					document.getElementById("modalTitle").innerHTML = 'Message';
				}
			});
		});
	});
</script>