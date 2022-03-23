<div class="card-body p-0">
	<div class="mailbox-read-info">
		<h5>Last Update By : <?=$renunganharian->UpdateBy?></h5>
		<h6>Last Update
			<span class="mailbox-read-time float-right"><?=$renunganharian->UpdateDate?></span></h6>
	</div>
	<form action="<?= base_url('admin/RenunganHarian/saveRenungan') ?>" method="POST">
		
		<div class="mailbox-read-message">
			<input type="hidden" id="id" name="id" value="<?=$renunganharian->id?>">
      <input type="hidden" id="updateby" name="updateby" value="<?=$this->session->userdata('Username');?>">
			<textarea class="form-control" name="renungan" id="message"
				rows="10"><?=$renunganharian->Renungan?></textarea>
		</div>
		<div class="row">
			<div class="col-12">
				<button class="btn btn-primary btn-block" type="submit">Save</button>
			</div>
		</div>
	</form>

</div>