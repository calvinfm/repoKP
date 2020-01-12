<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<?php $this->load->view("web/_partials/_1head.php")?>
    <title>SEKOLAH TINGGI ILMU HUKUM SUMPAH PEMUDA - STIHPADA</title>
    <?php $this->load->view("web/_partials/_head.php")?>
</head>

<body>

	<!-- Start Header Area -->
	<?php $this->load->view("web/_partials/_header.php")?>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						SEJARAH STIHPADA
					</h1>
					<p>“Orang boleh pandai setinggi langit, tapi selama ia tak menulis, ia akan hilang di dalam
						masyarakat dan dari sejarah.”</p>
					<p>- Pramoedya Ananta Toer, House of Glass</p>
					<div class="link-nav">
						<span class="box">
							<a href="<?= base_url("home")?>">Home </a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="#">Tentang Kami</a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="sejarah-stihpada.html">Sejarah STIHPADA</a>
						</span>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- End Banner Area -->

	<!-- Start post-content Area -->
	<section class="post-content-area single-post-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 posts-list">
					<div class="single-post row">
						<div class="col-lg-12">
							<div class="feature-img">
								<img class="img-fluid rounded mx-auto d-block" src="<?= base_url("assets/img/about.jpg")?>"
									style="max-width: 800px;" alt="">
							</div>
						</div>
						<div class="col-lg-3  col-md-3 meta-details">
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Administrator</a> <span
										class="lnr lnr-user"></span></p>
								<p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php $mydate=getdate();
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]"; ?></a> <span
										class="lnr lnr-calendar-full"></span></p>
								<!-- <p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span
										class="lnr lnr-eye"></span></p> -->
								<ul class="social-links col-lg-12 col-md-12 col-6">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-github"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<h3 class="mt-20 mb-20">SEJARAH STIHPADA</h3>
							<p class="excert">
								Dalam rangka ikut serta berpartisipasi mencerdaskan kehidupan bangsa dan di dorong
								pengadaan sumber daya manusia dalam bidang ilmu hukum, mempunyai keterampilan dan
								berkualitas guna menghadapi tantangan zaman modern, termotivasilah mendirikan Sekolah
								Tinggi Ilmu Hukum.
								Lembaga ini dinamakan Sekolah Tinggi Ilmu Hukum Sumpah Pemuda (STIHPADA). Maksud diberi
								nama Sumpah Pemuda adalah untuk selalu mengenang tekad pemuda pemudi yang membentuk
								persatuan dan kesatuan bangsa berjuang untuk mencapai kemerdekaan. Mewarisi semangat
								juang pemuda pemudi ini didirikan Sekolah Tinggi Ilmu Hukum Sumpah Pemuda ini.</p>
							<p>
								Ditinjau dari tersedianya lembaga pendidikan tinggi dihubungkan dengan banyaknya Sekolah
								Menengah Umumn di lingkup wilayah Sumatera Selatan dan belum adanya lembaga pendidikan
								tinggi yang mengkhususkan diri kepada program studi ilmu hukum, maka atas dasar
								pemikiran itulah berdiri Sekolah Tinggi Ilmu Hukum Sumpah Pemuda ini.
								STIHPADA didirikan atas prakarsa dari (Alm) Prof. H. Abu Daud Busroh, SH, yang merupakan
								salah satu tokoh masyarakat, pendekar hukum dan akademisi hukum yang ternama baik
								ditingkat daerah maupun Nasional.
							</p>
							<p>Beliau sangat concern terhadap penegakan hukum di
								indonesia. Oleh karen itu merupakan sumbangsihna kepada negara dan bangsa untuk
								melahirkan insan-insan intelektual yang memiliki wawasan dan keimanan sesuai dengan
								nilai-nilai Pancasila. STIHPADA didirikan berdasarkan Akta Pendirian No. 88 tgl. 28
								Oktober 1994 Jo. No. 24 tanggal 10 Nopember 1995 dihadapan Notaris Fauzi, SH. Dengan
								berbekal tekad, semangat dan pengorbanan materi, beliau mendirikan STIHPADA.
								Karena kecintaan beliau terhadap STIHPADA, beliau memiliki wasiat dimana pada ahir
								riwayatnya beliau minta dimakamkan di STIHPADA. Saat ini makam beliau berada di sebelah
								masjid Al-Busyra, yang artinya Kebahagiaan Dunia Akhirat.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End post-content Area -->

	<!-- Start Footer Area -->
	<?php $this->load->view("web/_partials/_footer.php")?>
	<!-- End Footer Area -->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#"></a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	
	<?php $this->load->view("web/_partials/_js.php")?>
</body>

</html>