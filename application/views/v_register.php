<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?></title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
	<!-- Sweet Alert-->
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	<!-- Toastr -->
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/toastr/toastr.min.css">


</head>

<body class="hold-transition register-page">
	<div class="register-box">
		<div class="register-logo">
			<a href="#"><b>Admin</b>LTE</a>
		</div>

		<div class="card">
			<div class="card-body register-card-body">
				<p class="login-box-msg">Register a new membership</p>

				<!-- <form action="<?= base_url('Register/CreateAccount'); ?>" method="post"> -->
					
					<div class="input-group mb-3">
						<input id="name" name="name" type="text" class="form-control" placeholder="Full name">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input id="username" name="username" type="text" class="form-control" placeholder="Username">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input id="email" name="email" type="email" class="form-control" placeholder="Email">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input id="phonenumber" name="phonenumber" type="text" class="form-control" placeholder="Phone Number">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-mobile-alt"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input id="password" name="password" type="password" class="form-control" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input id="confirm-pass" name="confirm-pass" type="password" class="form-control"
							placeholder="Verify password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<button type="button" class="btn btn-primary btn-block btn-save">Register</button>
					</div>
				<!-- </form> -->
			</div>
			<!-- /.form-box -->
		</div><!-- /.card -->
	</div>
	<!-- /.register-box -->

	<!-- jQuery -->
	<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
	<!-- SweetAlert2 -->
	<script src="<?=base_url()?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
	<!-- Toastr -->
	<script src="<?=base_url()?>assets/plugins/toastr/toastr.min.js"></script>

	<!-- alert if username taken -->
	<!-- <?php 
		if($this->session->flashdata('usernameTaken')){?>
		<script>
			$(function () {
				var Toast = Swal.mixin({
					toast: true,
					position: 'center',
					showConfirmButton: false,
					timer: 3000
				});
				Toast.fire({
					position: 'center',
					icon: 'error',
					title: '<?= $this->session->flashdata('usernameTaken'); ?>',
					showConfirmButton: false,
					timer: 2000
				});
			});
		</script>
	<?php }?> -->
	<!--end alert username taken -->

	<script type="text/javascript">
	$(function() {
			var Toast = Swal.mixin({
				toast: true,
				position: 'center',
				showConfirmButton: false,
				timer: 3000
			});
		$('.btn-save').click(function(){ 
			var name = $('#name').val();
			var username = $('#username').val();
			var email = $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password = $('#password').val();
			var confirm_pass = $('#confirm-pass').val();
			
			if(name == ""){
				Toast.fire({
					icon: 'error',
					title: 'Fullname Harus Diisi!',
					showConfirmButton: false,
					timer: 3000
				});
			}else if(username == ""){
				Toast.fire({
					icon: 'error',
					title: 'Username Harus Diisi!',
					showConfirmButton: false,
					timer: 3000
				});
			}else if (email == ""){
				Toast.fire({
					icon: 'error',
					title: 'Email Harus Diisi!',
					showConfirmButton: false,
					timer: 3000
				});
			}else if (phonenumber == ""){
				Toast.fire({
					icon: 'error',
					title: 'Phone Number Harus Diisi!',
					showConfirmButton: false,
					timer: 3000
				});
			}else if(password==""){
				Toast.fire({
					icon: 'error',
					title: 'Password Harus Diisi!',
					showConfirmButton: false,
					timer: 3000
				});
			}else if (confirm_pass == ""){
				Toast.fire({
					icon: 'error',
					title: 'Verify Password Harus Diisi!',
					showConfirmButton: false,
					timer: 3000
				});
			}else if(password != confirm_pass){
				Toast.fire({
					icon: 'error',
					title: 'Password dan Verify Password Harus Sama!',
					showConfirmButton: false,
					timer: 3000
				})
			} else {
					$.ajax({
					type: 'POST',
					url: '<?php echo base_url('Register/CreateAccount')?>',
					data : { name:name, username:username, email:email, phonenumber:phonenumber, password:password},
					// cache : false,
					success: function(){
						
					  window.location.reload();
					}
				});
			}      
		});
	});
</script>

<?php if ($this->session->flashdata('usernameTaken')){ ?>
<script>
	Swal.fire({
		icon: 'error',
		title: '<?php echo $this->session->flashdata('usernameTaken') ?>',
		showConfirmButton: false,
		timer: 3000
	})
</script>
<?php } else if ($this->session->flashdata('successRegister')){?>
<script>
	Swal.fire({
		icon: 'success',
		title: '<?php echo $this->session->flashdata('successRegister');?>',
		showConfirmButton: false,
		timer: 3000
	})
</script>
<?php } ?>
	
</body>

</html>