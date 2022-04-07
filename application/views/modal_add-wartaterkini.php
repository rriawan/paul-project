<div class="col-sm-12">
	<div class="card card-primary card-outline">
		<div class="card-body p-0">
			<div class="mailbox-read-info">
				<h5>Create By : <?=$this->session->userdata('Name')?></h5>
			</div>
			<form action="<?= base_url('admin/WartaTerkini/insertWartaTerkini') ?>" method="POST">

				<div class="mailbox-read-message">
					<input type="hidden" id="updateby" name="updateby" value="<?=$this->session->userdata('Username');?>">
					<textarea class="form-control" name="message" id="message" rows="10"
						placeholder="Insert Text Warta Terkini"></textarea>
				</div>
				<div class="row">
					<div class="col-12">
						<button class="btn btn-primary btn-block" type="submit">Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
