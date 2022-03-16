<form method="post" id="form" action="<?=base_url('admin/ManageUsers/saveChange') ;?>">
	<div class="form-group row">
		<input type="text" class="form-control" value="<?=$userdetail->IsActive ?>" name="isaktive-temp" id="isaktive-temp">

		<div class="col-sm-3 mt-1">
			<label><strong>NAME</strong></label>
		</div>
		<div class="col-sm-9">
			<input type="text" class="form-control" value="<?=$userdetail->Name?>" readonly>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-3 mt-1">
			<label><strong>USERNAME</strong></label>
		</div>
		<div class="col-sm-9">
			<input id="username" name="username" type="text" class="form-control" value="<?=$userdetail->Username;?>"
				readonly>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-3 mt-1">
			<label><strong>STATUS</strong></label>
		</div>
		<div class="col-sm-9">
			<div class="form-group">
				<div class="custom-control custom-radio">
					<input class="custom-control-input" type="radio" id="statActive" name="isactive" value="1"
						<?= $userdetail->IsActive == 1 ? "checked" : ""; ?>>
					<label for="statActive" class="custom-control-label">Active</label>
				</div>
				<div class="custom-control custom-radio">
					<input class="custom-control-input" type="radio" id="statNonActive" name="isactive" value="0"
						<?= $userdetail->IsActive == 0 ? "checked" : ""; ?>>
					<label for="statNonActive" class="custom-control-label">Non-Active</label>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-3 mt-1">
			<label><strong>RESET PASSWORD</strong></label>
		</div>
		<div class="col-sm-6">
			<div class="row">
				<button type="button" class="btn btn-block btn-outline-warning reset-btn">
					<i class="far fa-sync"></i>&nbsp;Set Default Password
				</button>
			</div>
			<div class="row">
				<label class="text-primary">Default Password : password</label>
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-12">
			<div class="col-3 float-right">
				<button class="btn btn-outline-success btn-block">
					<i class="far fa-save"></i>&nbsp;Save
				</button>
			</div>
		</div>
	</div>

</form>
<script>
	$('.close').click(function () {
		$('#modalId').modal("hide");
	});
	$(document).ready(function () {
		$('input[type=radio][name=isactive]').change(function () {
			if (this.value == '1') {
				$('#isaktive-temp').val(1);
			} else if (this.value == '0') {
				$('#isaktive-temp').val(0);
			}
		});

		$('.reset-btn').click(function (e) {
			e.preventDefault();

			var username = $('#username').val();
			var isactive = $('#isactive-temp').val();
			$.ajax({
				url: "<?php echo base_url('admin/ManageUsers/resetPassword');?>",
				method: 'post',
				data: {
					username: username, isactive:isactive
				},
				success: function (data) {
					alert("sukses rubah password");
				}
			});
		});
	});
</script>