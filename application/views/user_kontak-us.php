<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
	<div class="container">

		<ol>
			<li><a href="<?=base_url('/')?>">Home</a></li>
			<li>Blog</li>
		</ol>
		<h2>Blog</h2>

	</div>
</section><!-- End Breadcrumbs -->
<!-- ======= Contact Section ======= -->
<main id="main">

	<section id="contact" class="contact">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Hubungi Kami</h2>
				<p>Kami menerima kritik maupun saran untuk kemajuan layanan yang lebih baik lagi kedepannya</p>
			</div>
			<div class="row" data-aos="fade-up" data-aos-delay="100">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-md-12">
							<div class="info-box">
								<i class="bx bx-map"></i>
								<h3>Our Address</h3>
								<p>A108 Adam Street, New York, NY 535022</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="info-box mt-4">
								<i class="bx bx-envelope"></i>
								<h3>Email Us</h3>
								<p>info@example.com<br>contact@example.com</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="info-box mt-4">
								<i class="bx bx-phone-call"></i>
								<h3>Call Us</h3>
								<p>+1 5589 55488 55<br>+1 6678 254445 41</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<!-- <form action="<?=base_url('ContactUs/CreateMessage')?>" method="POST" role="form" class="php-email-form"> -->
					<div class="php-email-form">
						<?php 
            $readonly="";
            $val_name="";
            $val_email="";
            $session =$this->session->userdata('is_login'); 
            if(empty($session)){
              $val_name = "";
              $val_email = "";
              $readonly = "readonly";
              $msg = "Mohon Login untuk melanjutkan memberikan input kritik / saran";
              $btn_type = base_url('Login');
            }else{
              $val_name = $userinfo->Name;
              $val_email = $userinfo->Email;
              $readonly = "";
              $msg="Message";
            }
            ?>
						<div class="row">
							<div class="col form-group">
								<input value="<?= $val_name?>" type="text" class="form-control" name="name" id="name"
									placeholder="Your Name" readonly>
							</div>
							<div class="col form-group">
								<input value="<?= $val_email ?>" type="email" class="form-control" name="email" id="email"
									placeholder="Your Email" readonly>
							</div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
								<?= $readonly ?>>
						</div>
						<div class="form-group">
							<textarea class="form-control" name="message" id="message" rows="5" placeholder="<?= $msg; ?>"
								<?= $readonly;?>></textarea>
						</div>
						
						<div class="text-center">
							<?php 
              if(empty($session)) { ?>
							<a href="<?= base_url('Login')?>">
								<button type="button" class="btn btn-danger">Login</button>
							</a>
							<?php } else { ?>
							<button type="button" class="btn btn-danger" id="btn-submit">Send Message</button>
							<?php } ?>
						</div>
					<!-- </form> -->
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Contact Section -->
</main>

<script>
	$(document).ready(function () {
		$("#btn-submit").click(function () {
			var subject = $('#subject').val();
			var message = $('#message').val();
			if(subject == "") {
				Swal.fire('Mohon Isi Subject Terlebih Dahulu!', '', 'warning')
			}else if(message == ""){
				Swal.fire('Input Kritik / Saran pada kolom Message!', '', 'warning')
			}else {
				$.ajax({
					type: "POST",
					url: '<?= base_url('ContactUs/CreateMessage')?>',
					data: {subject: subject, message:message},
					beforeSend: function () {},
					success: function (data) {
						Swal.fire('Kritik / Saran sukses dirikim!', '', 'info')
							.then(function () {
								window.location = "<?=base_url('ContactUs')?>";
							});
					}
				});
			}			
		});
	});
</script>