<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<!-- Default box -->
			<div class="form-group row">
				<div class="col-12">
					<div class="col-2 float-right">
						<button class="btn btn-primary btn-block btn-add">
							<span class="float-left"><i class="far fa-id-badge"></i></span>&nbsp;Add New
						</button>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">List Kontak Pengurus</h3>
				</div>
				<div class="card-body p-0">
					<table class="table table-striped projects">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Phone Number</th>
								<th>Manage</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach($listpengurus as $row){?>
							<tr>
								<td><?= $row->Name ?> </td>
								<td><?= $row->Email ?> </td>
								<td><?= $row->PhoneNumber ?> </td>
								<td class="project-actions">
									<a class="btn btn-primary btn-sm" href="#">
										<i class="fas fa-folder">
										</i>
										View
									</a>
									<a class="btn btn-info btn-sm" href="#">
										<i class="fas fa-pencil-alt">
										</i>
										Edit
									</a>
									<a class="btn btn-danger btn-sm" href="#">
										<i class="fas fa-trash">
										</i>
										Delete
									</a>
								</td>
							</tr>
							<?php
							}
							?>

						</tbody>
					</table>
				</div>
			</div>
			<!-- /.card -->
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
<script type="text/javascript">
	$('.close').click(function () {
		$('#modalId').modal("hide");
	});

	$('.btn-add').click(function () {
		var aksi = 'Add New Pengurus';
		$.ajax({
			url: "<?=base_url('admin/KontakPengurus/showModalAdd');?>",
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