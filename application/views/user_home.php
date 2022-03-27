 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">
 	<div class="container" data-aos="zoom-out" data-aos-delay="100">
 		<div class="row">
 			<div class="col-xl-6">
 				<h1>HKBP Dame - Resort Duri</h1>
 				<!-- <h2>We are team of talented designers making websites with Bootstrap</h2> -->
 				<a href="#wartaterkini" class="btn-get-started scrollto">Warta Terkini</a>
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

 	<section id="blog" class="blog">
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

 	<section id="services" class="services section-bg ">
 		<div class="container" data-aos="fade-up">

 			<div class="section-title">
 				<h2>Services</h2>
 				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
 					consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
 			</div>

 			<div class="row">
 				<div class="col-md-6">
 					<div class="icon-box" data-aos="fade-up" data-aos-delay="100">
 						<i class="bi bi-briefcase"></i>
 						<h4><a href="#">Lorem Ipsum</a></h4>
 						<p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
 							non provident</p>
 					</div>
 				</div>
 				<div class="col-md-6 mt-4 mt-md-0">
 					<div class="icon-box" data-aos="fade-up" data-aos-delay="200">
 						<i class="bi bi-card-checklist"></i>
 						<h4><a href="#">Dolor Sitema</a></h4>
 						<p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad
 							limino ata</p>
 					</div>
 				</div>
 				<div class="col-md-6 mt-4 mt-md-0">
 					<div class="icon-box" data-aos="fade-up" data-aos-delay="300">
 						<i class="bi bi-bar-chart"></i>
 						<h4><a href="#">Sed ut perspiciatis</a></h4>
 						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
 						</p>
 					</div>
 				</div>
 				<div class="col-md-6 mt-4 mt-md-0">
 					<div class="icon-box" data-aos="fade-up" data-aos-delay="400">
 						<i class="bi bi-binoculars"></i>
 						<h4><a href="#">Nemo Enim</a></h4>
 						<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
 							laborum</p>
 					</div>
 				</div>
 				<div class="col-md-6 mt-4 mt-md-0">
 					<div class="icon-box" data-aos="fade-up" data-aos-delay="500">
 						<i class="bi bi-brightness-high"></i>
 						<h4><a href="#">Magni Dolore</a></h4>
 						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
 							deleniti atque</p>
 					</div>
 				</div>
 				<div class="col-md-6 mt-4 mt-md-0">
 					<div class="icon-box" data-aos="fade-up" data-aos-delay="600">
 						<i class="bi bi-calendar4-week"></i>
 						<h4><a href="#">Eiusmod Tempor</a></h4>
 						<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
 							eligendi</p>
 					</div>
 				</div>
 			</div>

 		</div>
 	</section><!-- End Services Section -->

 	<!-- ======= Portfolio Section ======= -->
 	<section id="portfolio" class="portfolio">
 		<div class="container" data-aos="fade-up">

 			<div class="section-title">
 				<h2>Portfolio</h2>
 				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
 					consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
 			</div>

 			<div class="row" data-aos="fade-up" data-aos-delay="100">
 				<div class="col-lg-12 d-flex justify-content-center">
 					<ul id="portfolio-flters">
 						<li data-filter="*" class="filter-active">All</li>
 						<li data-filter=".filter-app">App</li>
 						<li data-filter=".filter-card">Card</li>
 						<li data-filter=".filter-web">Web</li>
 					</ul>
 				</div>
 			</div>

 			<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

 				<div class="col-lg-4 col-md-6 portfolio-item filter-app">
 					<div class="portfolio-wrap">
 						<img src="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
 						<div class="portfolio-info">
 							<h4>App 1</h4>
 							<p>App</p>
 							<div class="portfolio-links">
 								<a href="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-1.jpg"
 									data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
 										class="bx bx-plus"></i></a>
 								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
 							</div>
 						</div>
 					</div>
 				</div>

 				<div class="col-lg-4 col-md-6 portfolio-item filter-web">
 					<div class="portfolio-wrap">
 						<img src="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
 						<div class="portfolio-info">
 							<h4>Web 3</h4>
 							<p>Web</p>
 							<div class="portfolio-links">
 								<a href="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-2.jpg"
 									data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
 										class="bx bx-plus"></i></a>
 								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
 							</div>
 						</div>
 					</div>
 				</div>

 				<div class="col-lg-4 col-md-6 portfolio-item filter-app">
 					<div class="portfolio-wrap">
 						<img src="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
 						<div class="portfolio-info">
 							<h4>App 2</h4>
 							<p>App</p>
 							<div class="portfolio-links">
 								<a href="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-3.jpg"
 									data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i
 										class="bx bx-plus"></i></a>
 								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
 							</div>
 						</div>
 					</div>
 				</div>

 				<div class="col-lg-4 col-md-6 portfolio-item filter-card">
 					<div class="portfolio-wrap">
 						<img src="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
 						<div class="portfolio-info">
 							<h4>Card 2</h4>
 							<p>Card</p>
 							<div class="portfolio-links">
 								<a href="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-4.jpg"
 									data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
 										class="bx bx-plus"></i></a>
 								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
 							</div>
 						</div>
 					</div>
 				</div>

 				<div class="col-lg-4 col-md-6 portfolio-item filter-web">
 					<div class="portfolio-wrap">
 						<img src="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
 						<div class="portfolio-info">
 							<h4>Web 2</h4>
 							<p>Web</p>
 							<div class="portfolio-links">
 								<a href="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-5.jpg"
 									data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i
 										class="bx bx-plus"></i></a>
 								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
 							</div>
 						</div>
 					</div>
 				</div>

 				<div class="col-lg-4 col-md-6 portfolio-item filter-app">
 					<div class="portfolio-wrap">
 						<img src="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
 						<div class="portfolio-info">
 							<h4>App 3</h4>
 							<p>App</p>
 							<div class="portfolio-links">
 								<a href="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-6.jpg"
 									data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i
 										class="bx bx-plus"></i></a>
 								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
 							</div>
 						</div>
 					</div>
 				</div>

 				<div class="col-lg-4 col-md-6 portfolio-item filter-card">
 					<div class="portfolio-wrap">
 						<img src="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
 						<div class="portfolio-info">
 							<h4>Card 1</h4>
 							<p>Card</p>
 							<div class="portfolio-links">
 								<a href="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-7.jpg"
 									data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i
 										class="bx bx-plus"></i></a>
 								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
 							</div>
 						</div>
 					</div>
 				</div>

 				<div class="col-lg-4 col-md-6 portfolio-item filter-card">
 					<div class="portfolio-wrap">
 						<img src="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
 						<div class="portfolio-info">
 							<h4>Card 3</h4>
 							<p>Card</p>
 							<div class="portfolio-links">
 								<a href="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-8.jpg"
 									data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i
 										class="bx bx-plus"></i></a>
 								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
 							</div>
 						</div>
 					</div>
 				</div>

 				<div class="col-lg-4 col-md-6 portfolio-item filter-web">
 					<div class="portfolio-wrap">
 						<img src="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
 						<div class="portfolio-info">
 							<h4>Web 3</h4>
 							<p>Web</p>
 							<div class="portfolio-links">
 								<a href="<?=base_url()?>landing_page/assets/img/portfolio/portfolio-9.jpg"
 									data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
 										class="bx bx-plus"></i></a>
 								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
 							</div>
 						</div>
 					</div>
 				</div>

 			</div>

 		</div>
 	</section><!-- End Portfolio Section -->

 	<!-- ======= Testimonials Section ======= -->
 	<section id="testimonials" class="testimonials">
 		<div class="container" data-aos="fade-up">
 			<div class="section-title">
 				<h2>Struktur Organisasi</h2>
 				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
 					consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
 			</div>

 			<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
 				<div class="swiper-wrapper">

 					<div class="swiper-slide">
 						<div class="testimonial-wrap">
 							<div class="testimonial-item">
 								<img src="<?=base_url()?>landing_page/assets/img/testimonials/testimonials-1.jpg"
 									class="testimonial-img" alt="">
 								<h3>Saul Goodman</h3>
 								<h4>Ceo &amp; Founder</h4>
 								<p>
 									<i class="bx bxs-quote-alt-left quote-icon-left"></i>
 									Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
 									Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
 									<i class="bx bxs-quote-alt-right quote-icon-right"></i>
 								</p>
 							</div>
 						</div>
 					</div><!-- End testimonial item -->

 					<div class="swiper-slide">
 						<div class="testimonial-wrap">
 							<div class="testimonial-item">
 								<img src="<?=base_url()?>landing_page/assets/img/testimonials/testimonials-2.jpg"
 									class="testimonial-img" alt="">
 								<h3>Sara Wilsson</h3>
 								<h4>Designer</h4>
 								<p>
 									<i class="bx bxs-quote-alt-left quote-icon-left"></i>
 									Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
 									quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
 									<i class="bx bxs-quote-alt-right quote-icon-right"></i>
 								</p>
 							</div>
 						</div>
 					</div><!-- End testimonial item -->

 					<div class="swiper-slide">
 						<div class="testimonial-wrap">
 							<div class="testimonial-item">
 								<img src="<?=base_url()?>landing_page/assets/img/testimonials/testimonials-3.jpg"
 									class="testimonial-img" alt="">
 								<h3>Jena Karlis</h3>
 								<h4>Store Owner</h4>
 								<p>
 									<i class="bx bxs-quote-alt-left quote-icon-left"></i>
 									Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
 									tempor labore quem eram duis noster aute amet eram fore quis sint minim.
 									<i class="bx bxs-quote-alt-right quote-icon-right"></i>
 								</p>
 							</div>
 						</div>
 					</div><!-- End testimonial item -->





 				</div>
 				<div class="swiper-pagination"></div>
 			</div>

 		</div>
 	</section><!-- End Testimonials Section -->

 	<!-- ======= Pricing Section ======= -->
 	<section id="pricing" class="pricing section-bg">
 		<div class="container" data-aos="fade-up">

 			<div class="section-title">
 				<h2>Pricing</h2>
 				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
 					consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
 			</div>

 			<div class="row">

 				<div class="col-lg-4 col-md-6">
 					<div class="box" data-aos="fade-up" data-aos-delay="100">
 						<h3>Free</h3>
 						<h4><sup>$</sup>0<span> / month</span></h4>
 						<ul>
 							<li>Aida dere</li>
 							<li>Nec feugiat nisl</li>
 							<li>Nulla at volutpat dola</li>
 							<li class="na">Pharetra massa</li>
 							<li class="na">Massa ultricies mi</li>
 						</ul>
 						<div class="btn-wrap">
 							<a href="#" class="btn-buy">Buy Now</a>
 						</div>
 					</div>
 				</div>

 				<div class="col-lg-4 col-md-6 mt-4 mt-md-0">
 					<div class="box featured" data-aos="fade-up" data-aos-delay="200">
 						<h3>Business</h3>
 						<h4><sup>$</sup>19<span> / month</span></h4>
 						<ul>
 							<li>Aida dere</li>
 							<li>Nec feugiat nisl</li>
 							<li>Nulla at volutpat dola</li>
 							<li>Pharetra massa</li>
 							<li class="na">Massa ultricies mi</li>
 						</ul>
 						<div class="btn-wrap">
 							<a href="#" class="btn-buy">Buy Now</a>
 						</div>
 					</div>
 				</div>

 				<div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
 					<div class="box" data-aos="fade-up" data-aos-delay="300">
 						<h3>Developer</h3>
 						<h4><sup>$</sup>29<span> / month</span></h4>
 						<ul>
 							<li>Aida dere</li>
 							<li>Nec feugiat nisl</li>
 							<li>Nulla at volutpat dola</li>
 							<li>Pharetra massa</li>
 							<li>Massa ultricies mi</li>
 						</ul>
 						<div class="btn-wrap">
 							<a href="#" class="btn-buy">Buy Now</a>
 						</div>
 					</div>
 				</div>

 			</div>

 		</div>
 	</section><!-- End Pricing Section -->

 	<!-- ======= Frequently Asked Questions Section ======= -->
 	<section id="faq" class="faq">
 		<div class="container" data-aos="fade-up">

 			<div class="section-title">
 				<h2>Frequently Asked Questions</h2>
 			</div>

 			<ul class="faq-list accordion" data-aos="fade-up">

 				<li>
 					<a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Non consectetur a erat nam at lectus
 						urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
 					<div id="faq1" class="collapse" data-bs-parent=".faq-list">
 						<p>
 							Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur
 							gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
 						</p>
 					</div>
 				</li>

 				<li>
 					<a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim
 						nunc faucibus a pellentesque? <i class="bx bx-chevron-down icon-show"></i><i
 							class="bx bx-x icon-close"></i></a>
 					<div id="faq2" class="collapse" data-bs-parent=".faq-list">
 						<p>
 							Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
 							donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit
 							ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
 						</p>
 					</div>
 				</li>

 				<li>
 					<a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing
 						elit pellentesque habitant morbi? <i class="bx bx-chevron-down icon-show"></i><i
 							class="bx bx-x icon-close"></i></a>
 					<div id="faq3" class="collapse" data-bs-parent=".faq-list">
 						<p>
 							Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum
 							integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt.
 							Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
 						</p>
 					</div>
 				</li>

 				<li>
 					<a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam
 						eleifend mi in nulla? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
 					<div id="faq4" class="collapse" data-bs-parent=".faq-list">
 						<p>
 							Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
 							donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit
 							ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
 						</p>
 					</div>
 				</li>

 				<li>
 					<a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Tempus quam pellentesque nec nam
 						aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i
 							class="bx bx-x icon-close"></i></a>
 					<div id="faq5" class="collapse" data-bs-parent=".faq-list">
 						<p>
 							Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc
 							vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus
 							gravida quis blandit turpis cursus in
 						</p>
 					</div>
 				</li>

 				<li>
 					<a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">Tortor vitae purus faucibus ornare.
 						Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i
 							class="bx bx-x icon-close"></i></a>
 					<div id="faq6" class="collapse" data-bs-parent=".faq-list">
 						<p>
 							Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc
 							vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus
 							in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla
 							phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
 						</p>
 					</div>
 				</li>

 			</ul>

 		</div>
 	</section><!-- End Frequently Asked Questions Section -->

 	<!-- ======= Team Section ======= -->
 	<section id="team" class="team section-bg">
 		<div class="container" data-aos="fade-up">

 			<div class="section-title">
 				<h2>Team</h2>
 				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
 					consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
 			</div>

 			<div class="row">

 				<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
 					<div class="member" data-aos="fade-up" data-aos-delay="100">
 						<div class="member-img">
 							<img src="<?=base_url()?>landing_page/assets/img/team/team-1.jpg" class="img-fluid" alt="">
 							<div class="social">
 								<a href=""><i class="bi bi-twitter"></i></a>
 								<a href=""><i class="bi bi-facebook"></i></a>
 								<a href=""><i class="bi bi-instagram"></i></a>
 								<a href=""><i class="bi bi-linkedin"></i></a>
 							</div>
 						</div>
 						<div class="member-info">
 							<h4>Walter White</h4>
 							<span>Chief Executive Officer</span>
 						</div>
 					</div>
 				</div>

 				<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
 					<div class="member" data-aos="fade-up" data-aos-delay="200">
 						<div class="member-img">
 							<img src="<?=base_url()?>landing_page/assets/img/team/team-2.jpg" class="img-fluid" alt="">
 							<div class="social">
 								<a href=""><i class="bi bi-twitter"></i></a>
 								<a href=""><i class="bi bi-facebook"></i></a>
 								<a href=""><i class="bi bi-instagram"></i></a>
 								<a href=""><i class="bi bi-linkedin"></i></a>
 							</div>
 						</div>
 						<div class="member-info">
 							<h4>Sarah Jhonson</h4>
 							<span>Product Manager</span>
 						</div>
 					</div>
 				</div>

 				<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
 					<div class="member" data-aos="fade-up" data-aos-delay="300">
 						<div class="member-img">
 							<img src="<?=base_url()?>landing_page/assets/img/team/team-3.jpg" class="img-fluid" alt="">
 							<div class="social">
 								<a href=""><i class="bi bi-twitter"></i></a>
 								<a href=""><i class="bi bi-facebook"></i></a>
 								<a href=""><i class="bi bi-instagram"></i></a>
 								<a href=""><i class="bi bi-linkedin"></i></a>
 							</div>
 						</div>
 						<div class="member-info">
 							<h4>William Anderson</h4>
 							<span>CTO</span>
 						</div>
 					</div>
 				</div>

 				<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
 					<div class="member" data-aos="fade-up" data-aos-delay="400">
 						<div class="member-img">
 							<img src="<?=base_url()?>landing_page/assets/img/team/team-4.jpg" class="img-fluid" alt="">
 							<div class="social">
 								<a href=""><i class="bi bi-twitter"></i></a>
 								<a href=""><i class="bi bi-facebook"></i></a>
 								<a href=""><i class="bi bi-instagram"></i></a>
 								<a href=""><i class="bi bi-linkedin"></i></a>
 							</div>
 						</div>
 						<div class="member-info">
 							<h4>Amanda Jepson</h4>
 							<span>Accountant</span>
 						</div>
 					</div>
 				</div>

 			</div>

 		</div>
 	</section><!-- End Team Section -->



 </main><!-- End #main -->