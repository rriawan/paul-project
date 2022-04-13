<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
	<div class="container d-flex align-items-center">
		<h1 class="logo me-auto"><a href="<?=base_url()?>">HKBP DAME<span>.</span></a></h1>
		<!-- Uncomment below if you prefer to use an image logo -->
		<!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->
		<nav id="navbar" class="navbar order-last order-lg-0">
			<ul>
				<li>
					<a class="nav-link scrollto <?php if($active_uri == "home"){echo 'active';}?>"
						href="<?=base_url('/')?>">Home</a>
				</li>
				<li>
					<a href="<?=base_url('About')?>" class="<?php if($active_uri == "about"){echo 'active';}?>">About</a>
				</li>
				<li class="dropdown">
					<a class="<?php if($active_uri == "organisasi"){echo 'active';}?>" href="#">
						<span>Struktur Organisasi</span> <i class="bi bi-chevron-down"></i>
					</a>
					<ul>
						<li>
							<a class="<?php if($active_sub == "pendeta"){echo 'active';}?>"
								href="<?=base_url('Organisasi/getPendeta')?>">Pendeta</a>
						</li>
						<li>
							<a class="<?php if($active_sub == "fungsionaris"){echo 'active';}?>"
								href="<?=base_url('Organisasi/getFungsionaris')?>">Fungsionaris</a>
						</li>
						<li class="dropdown">
							<a href="#"><span>Dewan</span> <i class="bi bi-chevron-right"></i></a>
							<ul>
								<li><a class="<?php if($active_sub == "koinonia"){echo 'active';}?>" href="<?=base_url('Organisasi/getKoinonia')?>">Koinonia</a></li>
								<li><a class="<?php if($active_sub == "marturia"){echo 'active';}?>" href="<?=base_url('Organisasi/getMarturia')?>">Marturia</a></li>
								<li><a class="<?php if($active_sub == "diakonia"){echo 'active';}?>" href="<?=base_url('Organisasi/getDiakonia')?>">Diakonia</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="<?php if($active_uri == "infogereja"){echo 'active';}?>">
					<span>Info Gereja</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
						<li><a href="<?= base_url('WartaJemaat')?>" class="<?php if($active_sub == "wartajemaat"){echo 'active';}?>">Warta Jemaat</a></li>
						<li><a href="<?= base_url('JadwalIbadah')?>" class="<?php if($active_sub == "jadwalibadah"){echo 'active';}?>">Jadwal Ibadah</a></li>
					</ul>
				</li>
				<li><a href="<?=base_url('ContactUs')?>" class="<?php if($active_uri == "kontakkami"){echo 'active';}?>">Contact
						Us</a></li>
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
		</nav>
	</div>
</header>