<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="#" class="brand-link">
		<img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
			class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?= $this->session->userdata('Name') ;?></a>
			</div>
		</div>

		<!-- SidebarSearch Form -->
		<!-- <div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div> -->

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="<?= base_url('admin/Dashboard')?>"
						class="nav-link <?php if($active_uri=="dashboard"){echo 'active';}?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						&nbsp;Dashboard
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/ProfileGereja')?>"
						class="nav-link <?php if($active_uri=="profilegereja"){echo 'active';}?>">
						<i class="nav-icon fas fa-church"></i>
						&nbsp;Profile Gereja
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/JadwalIbadah')?>"
						class="nav-link <?php if($active_uri=="jadwalibadah"){echo 'active';}?>">
						<i class="nav-icon fas fa-clipboard-list"></i>
						&nbsp;Jadwal Ibadah
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/ManageUsers')?>"
						class="nav-link <?php if($active_uri == "manageuser"){echo 'active';}?>">
						<i class="nav-icon fas fa-users"></i>
						&nbsp;User Management
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/KontakPengurus')?>"
						class="nav-link <?php if($active_uri == "kontakpengurus"){echo 'active';}?>">
						<i class="nav-icon fas fa-user-shield"></i>
						&nbsp;Kontak Pengurus
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/SaranPengguna')?>"
						class="nav-link <?php if($active_uri == "saranpengguna"){echo 'active';}?>">
						<i class="nav-icon far fa-comment-dots"></i>
						&nbsp;Saran Pengguna
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/WartaTerkini')?>"
						class="nav-link <?php if($active_uri == "wartaterkini"){echo 'active';}?>">
						<i class="nav-icon far fa-newspaper"></i>
						&nbsp;Warta Terkini
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/WartaJemaat')?>"
						class="nav-link <?php if($active_uri == "wartajemaat"){echo 'active';}?>">
						<i class="nav-icon far fa-file-alt"></i>
						&nbsp;Warta Jemaat
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/RenunganHarian')?>"
						class="nav-link <?php if($active_uri == "renunganharian"){echo 'active';}?>">
						<i class="nav-icon far fa-newspaper"></i>
						&nbsp;Renungan Harian
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/Organisasi')?>"
						class="nav-link <?php if($active_uri == "organisasi"){echo 'active';}?>">
						<i class="nav-icon fas fa-sitemap"></i>
						&nbsp;Komponen Organisasi
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/StrukturOrganisasi')?>"
						class="nav-link <?php if($active_uri == "strukturorganisasi"){echo 'active';}?>">
						<i class="nav-icon fas fa-users"></i>
						&nbsp;Struktur Organisasi
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->

	<!-- <div class="sidebar-custom">
		<a href="#" class="btn btn-link"><i class="fas fa-cogs"></i></a>
		<a href="#" class="btn btn-secondary hide-on-collapse pos-right">Help</a>
	</div> -->
	<!-- /.sidebar-custom -->
</aside>