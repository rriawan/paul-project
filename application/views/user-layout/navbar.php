<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
	<div class="container d-flex align-items-center">
		<h1 class="logo me-auto"><a href="<?=base_url()?>">Presento<span>.</span></a></h1>
		<!-- Uncomment below if you prefer to use an image logo -->
		<!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

		<nav id="navbar" class="navbar order-last order-lg-0">
			<ul>
				<li><a class="nav-link scrollto <?php if($active_uri == "home"){echo 'active';}?>" href="<?=base_url('/')?>">Home</a></li>
				<li><a class="nav-link scrollto" href="#about">About</a></li>
				<li><a class="nav-link scrollto" href="#services">Services</a></li>
				<li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
				<li><a class="nav-link scrollto" href="#team">Team</a></li>
				<li><a href="<?=base_url('ContactUs')?>" class="<?php if($active_uri == "kontakkami"){echo 'active';}?>">Kontak</a></li>
				<!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
				<?php 
					$is_admin = $this->session->userdata('IsAdmin');
					$is_login = $this->session->userdata('is_login');
					$fullname = $this->session->userdata('Name');
					if($is_admin == false && $is_login == true){?>
				<li class="dropdown"><a href="#"><span><?= $fullname ?></span> <i class="bi bi-chevron-down"></i></a>
					<ul>
						<li><a href="#">User Profile</a></li>
						<li><a href="<?= base_url('Login/Logout')?>">Logout</a></li>
					</ul>
				</li>
				<?php } else {?>
				<li><a href="<?= base_url('Login')?>">Login</a></li>
				<?php }?>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->
	</div>
</header><!-- End Header -->