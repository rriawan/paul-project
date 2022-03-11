<!DOCTYPE html>
<html lang="en">
<?php require_once('head.php') ?>

<body>
	<?php require_once('navbar.php') ?>
	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">
		<div class="container" data-aos="zoom-out" data-aos-delay="100">
			<div class="row">
				<div class="col-xl-6">
					<h1>Bettter digital experience with Presento</h1>
					<h2>We are team of talented designers making websites with Bootstrap</h2>
					<a href="#about" class="btn-get-started scrollto">Get Started</a>
				</div>
			</div>
		</div>
	</section><!-- End Hero -->
	<?php
    if($content){
      $this->load->view($content);
    }
  ?>

	<?php require_once('footer.php') ;?>
	<?php require_once('js-plugin.php') ;?>

</body>

</html>