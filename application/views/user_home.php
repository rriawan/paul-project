<style>
#hero .btn-get-started2 {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 30px;
  border-radius: 4px;
  transition: 0.5s;
  margin-top: 30px;
  color: #fff;
  background: #ff8100;
  border: 2px solid #ff8100;
}
#hero .btn-get-started2:hover {
  background: transparent;
  border-color: #fff;
}
</style>

<!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">
 	<div class="container" data-aos="zoom-out" data-aos-delay="100">
 		<div class="row">
 			<div class="col-xl-6">
 				<h1>HKBP Dame - Resort Duri</h1>
 				<!-- <h2>We are team of talented designers making websites with Bootstrap</h2> -->
 				<a href="#wartaterkini" class="btn-get-started scrollto">Warta Terkini</a>
 				<a href="#renunganharian" class="btn-get-started2 scrollto">Renungan Harian</a>
 			</div>
 		</div>
 	</div>
 </section><!-- End Hero -->
 <main id="main">

 <section id="wartaterkini" class="about section-bg">
 		<div class="container" data-aos="fade-up">
 			<div class="row no-gutters">
 				<div class="content col-xl-12 d-flex align-items-stretch">
 					<div class="content">
 						<h3>Warta Terkini</h3>
 						<?= nl2br($wartaterkini->PesanWartaTerkini) ?>
 					</div>
 				</div> 				
 			</div>
 		</div>
 	</section> 	

 	<section id="renunganharian" class="blog">
 		<div class="container" data-aos="fade-up">
 			<div class="row">
 				<div class="col-lg-12 entries">
 					<article class="entry entry-single">
 						<h2 class="entry-title">
 							Renungan Harian
 						</h2>
 						<div class="entry-meta">
 							<?php 
								$date = new DateTime($renunganHarian->UpdateDate);
								$dateformat = $date->format('d-M-Y'); 
							?>
 							<ul>
 								<li class="d-flex align-items-center"><i class="bi bi-person"></i> <?=$renunganHarian->Name?></li>
 								<li class="d-flex align-items-center"><i class="bi bi-clock"></i> <?=$dateformat?></li>
 							</ul>
 						</div>
 						<div class="entry-content">
 							<div class="testimonial-wrap">
 								<div class="testimonial-item">
 									<p>
 										<i class="bx bxs-quote-alt-left quote-icon-left"></i>
 										<?= nl2br($renunganHarian->Renungan) ?>
 										<i class="bx bxs-quote-alt-right quote-icon-right"></i>
 									</p>
 								</div>
 							</div>							
 							<!-- <blockquote>
 								<p>
 									<?=nl2br($renunganHarian->Renungan)?>
 								</p>
 							</blockquote> -->
 						</div>
 					</article>
 				</div>
 			</div>
 		</div>
 	</section>


 </main><!-- End #main -->