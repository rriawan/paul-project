<section class="breadcrumbs">
	<div class="container">
		<ol>
			<li><a href="<?=base_url('/')?>">Home</a></li>
			<li>Struktur Organisasi</li>
		</ol>
	</div>
</section>
<main id="main">

	<section id="testimonials" class="testimonials">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Struktur Organisasi <?=$dataHead?></h2>
			</div>
			<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
				<div class="swiper-wrapper">
					<?php 
					foreach ($dataDewan as $data)
					{?>
					<div class="swiper-slide">
						<div class="testimonial-wrap">
							<div class="testimonial-item">
								<img src="<?=base_url()?>temp-folder/<?=$data->img_url?>" class="testimonial-img" alt="">
								<h3><?=$data->Nama?></h3>
								<h4><?=$data->nama_jabatan?></h4>
							</div>
						</div>
					</div>
					<?php 
					}?>
				</div>
				<div class="swiper-pagination"></div>
			</div>

		</div>
	</section>
<?php
$data = array();
foreach ($dataSeksi as $row) {
	$data[$row['nama_seksi']][] = $row; 
}  
 foreach($data as $key => $rows) {
?>
<section id="testimonials" class="testimonials">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h4>Struktur Organisasi <?=$key?></h4>
			</div>
			<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
				<div class="swiper-wrapper">
					<?php
					foreach($rows as $row) {?>
						<div class="swiper-slide">
						<div class="testimonial-wrap">
							<div class="testimonial-item">
								<img src="<?=base_url()?>temp-folder/<?=$row['img_url']?>" class="testimonial-img" alt="">
								<h3><?=$row['Nama']?></h3>
								<h4><?=$row['nama_jabatan']?></h4>
							</div>
						</div>
					</div>
					<?php
					}
					?>
					
				</div>
				<div class="swiper-pagination"></div>
			</div>

		</div>
	</section>
<?php
}
?>

</main>