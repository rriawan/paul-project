<div class="card card-primary card-outline">
	<div class="card-header">
		<h3 class="card-title">Detail Pesan</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body p-0">
		<div class="mailbox-read-info">
			<h5><?=$msgdetail->Subject?></h5>
			<h6>From: <?=$msgdetail->Name?>
				<span class="mailbox-read-time float-right"><?=$msgdetail->CreateDate?></span></h6>
		</div>
		<!-- /.mailbox-read-info -->
		<!-- <div class="mailbox-controls with-border text-center">
			<div class="btn-group">
				<button type="button" class="btn btn-default btn-sm" data-container="body" title="Delete">
					<i class="far fa-trash-alt"></i>
				</button>
				<button type="button" class="btn btn-default btn-sm" data-container="body" title="Reply">
					<i class="fas fa-reply"></i>
				</button>
				<button type="button" class="btn btn-default btn-sm" data-container="body" title="Forward">
					<i class="fas fa-share"></i>
				</button>
			</div>
			<button type="button" class="btn btn-default btn-sm" title="Print">
				<i class="fas fa-print"></i>
			</button>
		</div> -->
		<div class="mailbox-read-message">
			<p><?=$msgdetail->Message?></p>			
		</div>
		<!-- /.mailbox-read-message -->
	</div>
	
	<!-- /.card-footer -->
</div>