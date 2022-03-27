<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
	<div class="container">

		<ol>
			<li><a href="<?=base_url('/')?>">Home</a></li>
			<li>About</li>
		</ol>
		<!-- <h2>Contact Us</h2> -->

	</div>
</section><!-- End Breadcrumbs -->
<!-- ======= Contact Section ======= -->
<main id="main">

	<section id="about" class="blog">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-12 entries">
					<?php 
					
					foreach($profileGereja as $data){
					?>
					<article class="entry entry-single">
						<div class="entry-img">
							<img src="<?=base_url()?>img-folder/<?=$data->img_url?>" alt="" class="img-fluid">
						</div>
						<h2 class="entry-title">
							<?=$data->Judul?>
						</h2>
						<div class="entry-meta">
							<?php 
								// $date = new DateTime($data->UpdateDate);
								// $dateformat = $date->format('d-M-Y'); 
							?>
							<!-- <ul>
 								<li class="d-flex align-items-center"><i class="bi bi-person"></i> <?=$renunganHarian->Name?></li>
 								<li class="d-flex align-items-center"><i class="bi bi-clock"></i> <?=$dateformat?></li>
 							</ul> -->
						</div>
						<div class="entry-content">
							<div class="testimonial-wrap">
								<div class="testimonial-item">
									<p>
										<?= nl2br($data->Rincian) ?>
									</p>
								</div>
							</div>
						</div>
					</article>
					<?php }?>
				</div>
			</div>
		</div>
	</section>
</main>