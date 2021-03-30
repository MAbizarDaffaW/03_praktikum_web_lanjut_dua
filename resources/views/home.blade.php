@extends('layouts.app')
@section('content')
			
			<div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link active">Pizza</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Salad</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Noodle</a></li>
					</ul>
				</nav>
			</div>

			<!-- Gallery -->
			<div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-pizza" class="tm-gallery-page">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/01.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Salad</h4>
								<p class="tm-gallery-description">salad sayur yang harga nya terjangkau</p>
								<p class="tm-gallery-price">Rp 16.000 / Rp25.0000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/02.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Pizza </h4>
								<p class="tm-gallery-description">pizza dengan topping bermavam-macam.Bahan asli dari Italia</p>
								<p class="tm-gallery-price">Rp 35.0000 / Rp 40.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Steak Ikan</h4>
								<p class="tm-gallery-description">Makanan cepat saji terdiri atas daging sapi yang dipanggang seperti sate kemudian diiris-iris ditambah dengan sayuran segar dan mayones, lalu dibalut dengan kulit tortila.</p>
								<p class="tm-gallery-price">Rp 20.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">kerikpik Udang</h4>
								<p class="tm-gallery-description">Kerupuk udang adalah kerupuk yang terbuat dari adonan tepung tapioka dan udang yang ditumbuk halus yang diberi bumbu rempah dan penambah rasa. Kerupuk udang berasal dari Sidoarjo. Biasanya udang yang digunakan adalah udang-udang kecil.</p>
								<p class="tm-gallery-price">Rp 12.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Bakso Bakar</h4>
								<p class="tm-gallery-description">Bakso bakar adalah sebuah jenis hidangan bakso yang dibuat dengan cara dibakar dan kemudian ditusuk memakai tusuk sate sebelum akhirnya diberi bumbu.Hidangan tersebut berasal dari kota Malang.</p>
								<p class="tm-gallery-price">Rp 10.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/06.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Pancake</h4>
								<p class="tm-gallery-description"> kue dadar yang dibuat dari terigu, telur ayam, gula dan susu. Bahan-bahan dicampur dengan air membentuk adonan kental yang digoreng di atas wajan datar yang diolesi sedikit minyak. Setelah matang, panekuk bisa dihidangkan sewaktu masih hangat atau setelah dingin. Kue ini dimakan dengan tambahan mentega dan sirup mapel, selai, atau madu. Selain itu, panekuk juga sering dimakan dengan keju, buah beri, dan irisan daging (bacon atau ham).</p>
								<p class="tm-gallery-price">Rp 20.000 / Rp 25.000 / Rp 36.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Salad Buah</h4>
								<p class="tm-gallery-description">Salad adalah merupakan sejenis makanan yang terdiri dari campuran sayur-sayuran atau buah-buahan . Salad dikategorikan sebagai makanan sehat karena dari komposisinya yang terdiri dari sayur dan buah-buahan kita dapat mengetahui bahwa salad adalah makanan yang banyak mengandung serat, nutrisi dan vitamin yang sangat bagus untuk menjaga kesehatan tubuh.</p>
								<p class="tm-gallery-price">Rp 15.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Dimsum</h4>
								<p class="tm-gallery-description">Dimsum terdiri dari berbagai macam penganan kecil-kecil yang biasanya merupakan makanan bersama teh. Orang Kanton sendiri sangat mementingkan acara minum teh yang disebut yamcha (Hanzi: 飲茶, hanyu pinyin: yincha).</p>
								<p class="tm-gallery-price">Rp15.000</p>
							</figcaption>
						</figure>
					</article>
				</div> <!-- gallery page 1 -->
				
				<!-- gallery page 2 -->
				<div id="tm-gallery-page-salad" class="tm-gallery-page hidden">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Keripik Udang</h4>
								<p class="tm-gallery-description">salad dengan tambahan toping keripik udang</p>
								<p class="tm-gallery-price">Rp 10.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Salad Sayur</h4>
								<p class="tm-gallery-description">salad sayur dengan berbagai macam sayur</p>
								<p class="tm-gallery-price">Rp 25.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title"> Salad Buah</h4>
								<p class="tm-gallery-description">Anda bisa memilih jenis buah apa saja untuk dijadikan salad</p>
								<p class="tm-gallery-price">Rp 15.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/01.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title"> Salad</h4>
								<p class="tm-gallery-description">Salad sayur yang harga nya terjangkau</p>
								<p class="tm-gallery-price">Rp 35.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Dimsum Siomay</h4>
								<p class="tm-gallery-description">dimsum yang berisikan daging ayam</p>
								<p class="tm-gallery-price">Rp 20.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">kerikpik Udang</h4>
								<p class="tm-gallery-description">Kerupuk udang adalah kerupuk yang terbuat dari adonan tepung tapioka dan udang yang ditumbuk halus yang diberi bumbu rempah dan penambah rasa. Kerupuk udang berasal dari Sidoarjo. Biasanya udang yang digunakan adalah udang-udang kecil.</p>
								<p class="tm-gallery-price">Rp 12.000</p>
							</figcaption>
						</figure>
					</article>
				</div> <!-- gallery page 2 -->
				
				<!-- gallery page 3 -->
				<div id="tm-gallery-page-noodle" class="tm-gallery-page hidden">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Dimsum Siomay</h4>
								<p class="tm-gallery-description">.dimsum yang berisikan daging ayam</p>
								<p class="tm-gallery-price">Rp 20.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">salads</h4>
								<p class="tm-gallery-description">Anda bisa memilih jenis buah apa saja untuk dijadikan salad .</p>
								<p class="tm-gallery-price">Rp 15.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/06.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Pancake</h4>
								<p class="tm-gallery-description">kue dadar yang dibuat dari terigu, telur ayam, gula dan susu. Bahan-bahan dicampur dengan air membentuk adonan kental yang digoreng di atas wajan datar yang diolesi sedikit minyak. Setelah matang, panekuk bisa dihidangkan sewaktu masih hangat atau setelah dingin. Kue ini dimakan dengan tambahan mentega dan sirup mapel, selai, atau madu. Selain itu, panekuk juga sering dimakan dengan keju, buah beri, dan irisan daging (bacon atau ham).</p>
								<p class="tm-gallery-price">Rp 20.000 / Rp 25.000 / Rp 36.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Bakso Bakar</h4>
								<p class="tm-gallery-description">Bakso bakar adalah sebuah jenis hidangan bakso yang dibuat dengan cara dibakar dan kemudian ditusuk memakai tusuk sate sebelum akhirnya diberi bumbu.Hidangan tersebut berasal dari kota Malang.</p>
								<p class="tm-gallery-price">Rp 10.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">kerikpik Udang</h4>
								<p class="tm-gallery-description">Kerupuk udang adalah kerupuk yang terbuat dari adonan tepung tapioka dan udang yang ditumbuk halus yang diberi bumbu rempah dan penambah rasa. Kerupuk udang berasal dari Sidoarjo. Biasanya udang yang digunakan adalah udang-udang kecil.</p>
								<p class="tm-gallery-price">Rp 12.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Steak Ikan</h4>
								<p class="tm-gallery-description">Makanan cepat saji terdiri atas daging sapi yang dipanggang seperti sate kemudian diiris-iris ditambah dengan sayuran segar dan mayones, lalu dibalut dengan kulit tortila.</p>
								<p class="tm-gallery-price">Rp 20.000</p>
							</figcaption>
						</figure>
					</article>

				</div> <!-- gallery page 3 -->
			</div>
			<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="img/img-01.jpg" alt="Image" class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<h4 class="tm-gallery-title">Maecenas nulla neque</h4>
							<p class="tm-mb-45">Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a rel="nofollow" href="https://templatemo.com/contact">talk to us</a> for additional permissions about our templates. Thank you.</p>
							<a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</main>
    @endsection