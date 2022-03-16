<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Manage Users</h3>
				</div>
				<div class="card-body table-responsive p-0">
					<table id="item-list" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Username</th>
								<th>Email</th>
								<th>Phone Number</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($listUser as $row){
								if($row->IsActive == 1){
									$row->IsActive = "Active";
								}else{
									$row->IsActive = "Non - Active";
								}
								?>
							<tr>
								<td>
									<a href="#" class="showdata" data-toggle="tooltip" title="Edit Data User" ID="<?= $row->Username ?>"										>
										<strong><?= $row->Name ?></strong>
									</a>
								</td>
								<td><?= $row->Username ?></td>
								<td><?= $row->Email ?></td>
								<td><?= $row->PhoneNumber ?></td>
								<td><?= $row->IsActive ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
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
<script type="text/javascript">
	$('.close').click(function () {
		$('#modalId').modal("hide");
	});

	$('.showdata').click(function () {
		var ID = $(this).attr("ID");
		$.ajax({
			url: "<?php echo base_url('admin/ManageUsers/showDetail');?>",
			method: 'post',
			data: {
				ID: ID
			},
			success: function (data) {
				$("#modalId").modal({
					backdrop: 'static',
					keyboard: false,
				});
				$("#modalId").modal("show");
				$('#modalIsi').html(data);
				document.getElementById("modalTitle").innerHTML = 'Setting User';
			}
		});
	});
</script>