<div class="col-sm-12">
	<!-- <div class="table-responsive"> -->
		<table id="datatable" class="table table-bordered table-striped" style="width: 100%;">
			<thead>
				<tr>
					<th><strong>Action</strong></th>
					<th><strong>Name</strong></th>
					<th><strong>Username</strong></th>
				</tr>
			</thead>
			<tbody id="select">

			</tbody>
		</table>
		<!-- /.table -->
	<!-- </div> -->
</div>

<script type="text/javascript">
	$(document).ready(function () {
		var table;
		table = $('#datatable').DataTable({
			"ordering": false,
			"searching": true,
			"paging": true,
			"info": false,
			"retrieve": true,
			"ajax": {
				"url": "<?= base_url('admin/KontakPengurus/getDataAdd')?>",
				"type": "POST",
				"data": function (data) {}
			},
		});

		$('#select').on('click', '.add-admin', function () {
			var ItemID = $(this).attr("ItemID");
			$.ajax({
				url: "<?=base_url('admin/KontakPengurus/addNewPengurus');?>",
				method: 'POST',
				data: {
					ItemID: ItemID,
				},

				success: function (data) {
					Swal.fire('Sukses Menambahkan Pengurus', '', 'info')
						.then(function () {
							window.location = "<?=base_url('admin/KontakPengurus')?>";
						});
				}
			});
		});
	});
</script>