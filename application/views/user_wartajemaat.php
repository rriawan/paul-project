<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
	<div class="container">

		<ol>
			<li><a href="<?=base_url('/')?>">Home</a></li>
			<li>Warta Jemaat</li>
		</ol>
	</div>
</section>
<main id="main">

	<section id="about" class="blog">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-12 entries">
					<article class="entry entry-single">
						<div class="table-responsive mailbox-messages">
							<table class="table table-hover" id="datatable" style="width:100%">
								<thead>
									<tr>
										<th>Judul</th>
										<th>Dokumen Warta Jemaat</th>
										<th>Tanggal</th>
									</tr>
								</thead>
								<tbody id="select">

								</tbody>
							</table>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
</main>

<script>
	$(document).ready(function () {
		// $('.pickdate').each(function () {
		// 	$(this).datepicker({
		// 		format: 'yyyy-mm-dd',
		// 		autoclose: true,
		// 		todayHighlight: true
		// 	});
		// });

		//-------------
		var table;
		table = $('#datatable').DataTable({
			"ordering": true,
			"searching": true,
			"paging": true,
			"info": false,
			"retrieve": true,
			"ajax": {
				"url": "<?= base_url('WartaJemaat/listData')?>",
				"type": "GET",
				"data": function (data) {

				}
			},
		});
		//---------------------
	});
</script>