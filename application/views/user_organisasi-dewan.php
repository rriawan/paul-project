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
$grouped_types = array();

foreach($dataSeksi as $type){
    // add any number of fields here
    $grouped_types[$type['id_seksi']][] = array('Nama'=>$type['Nama'],'nama_jabatan'=>$type['nama_jabatan']);  

}

ksort($grouped_types);
print_r($grouped_types);
foreach($grouped_types as $key=>$value){
    echo "Another ".$key."\n";
    foreach($value as $k=>$v){
       foreach($v as $g=>$r){
           echo $g." : ".$r.",";
       }
        echo "\n";
    }
    echo "\n";
}
?>
<!-- <?php
foreach($dataSeksi as $key => $value){ ?>
	<section id="testimonials" class="testimonials">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h4>Struktur Organisasi <?= $value->nama_seksi?></h4>
			</div>
			<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
				<div class="swiper-wrapper">
				<?php 
					foreach ($value as $values)
					{?>
					<div class="swiper-slide">
						<div class="testimonial-wrap">
							<div class="testimonial-item">
								<img src="<?=base_url()?>temp-folder/<?=$values->img_url?>" class="testimonial-img" alt="">
								<h3><?=$values->Nama?></h3>
								<h4><?=$values->nama_jabatan?></h4>
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
}
?> -->
	

</main>