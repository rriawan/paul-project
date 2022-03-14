<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<!-- Default box -->
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">DataTable with default features</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="item-list" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Username</th>
								<th>Email</th>
								<th>Phone Number</th>
								<th>Active</th>
								<th>Create At</th>
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
									<a href="#" data-toggle="modal" data-target="#modal-default">
										<strong><?= $row->Name ?></strong>
									</a>
								</td>
								<td><?= $row->Username ?></td>
								<td><?= $row->Email ?></td>
								<td><?= $row->PhoneNumber ?></td>
								<td><?= $row->IsActive ?></td>
								<td><?= $row->CreateAt ?></td>
							</tr>
							<?php } ?>
						</tbody>

					</table>
				</div>
				<!-- /.card-body -->

			</div>
			<!-- /.card -->
		</div>
	</div>
</div>
<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Default Modal</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>One fine body&hellip;</p>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>