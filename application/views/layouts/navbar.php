<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
	</ul>
	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<i class="far fa-user-circle"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
				<a href="#" class="dropdown-item">
					<i class="fas fa-user-cog"></i> Change Password
				</a>
				<div class="dropdown-divider"></div>
				<a href="<?= base_url('Login/Logout')?>" class="dropdown-item">
					<i class="fas fa-sign-out-alt"></i> Sign Out
				</a>
			</div>
		</li>
	</ul>
</nav>