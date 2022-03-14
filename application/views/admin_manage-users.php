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
									<td><?= $row->Name ?></td>
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
