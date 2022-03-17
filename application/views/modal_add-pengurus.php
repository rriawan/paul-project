<div class="table-responsive mailbox-messages">
	<table id="datatable" class="table table-striped text-nowrap">
		<thead>
			<tr>
				<th><strong>#</strong></th>
				<th><strong>Name</strong></th>
				<th><strong>Username</strong></th>
			</tr>
		</thead>
		<tbody id="select">
			<!-- <tr>
				<td>
					<div class="icheck-primary">
						<input type="checkbox" value="" id="check1">
						<label for="check1"></label>
					</div>
				</td>
				<td class="mailbox-name">Alexander Pierce</a></td>
				<td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
				</td>
				<td class="mailbox-attachment"></td>
				<td class="mailbox-date">5 mins ago</td>
			</tr> -->

		</tbody>
	</table>
	<!-- /.table -->
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
					alert("Sukses Menambahkan Pengurus");
					// document.getElementById("modalTitle").innerHTML = aksi;
          window.location.reload();     
        }
			});
		});
	});
</script>