<!DOCTYPE html>
<html lang="en">
<!-- header, css, meta data, plugins, dll -->
<?php require_once('head.php') ?>
<!-- /header -->

<body class="hold-transition sidebar-mini layout-fixed layout-footer-fixed layout-navbar-fixed">
	<div class="wrapper">
		<!-- navbar top, layout fixed -->
		<?php require_once('navbar.php')?>
		<!-- /navbar -->

		<!-- sidebar left, layout fixed -->
		<?php require_once('sidebar.php') ?>
		<!-- /sidebar -->

		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Fixed Layout</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item"><a href="#">Layout</a></li>
								<li class="breadcrumb-item active">Fixed Layout</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<!-- /.container-fluid -->
			<!-- Main content -->
			<section class="content">
				<?php
        if($content){
          $this->load->view($content);
        }
        ?>
			</section>
			<!-- /.content -->
		</div>
		<?php require_once('footer.php') ?>
		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- js plugin, jquery, dll-->
	<?php require_once('js-plugins.php')?>
	<!-- / js -->
</body>

</html>