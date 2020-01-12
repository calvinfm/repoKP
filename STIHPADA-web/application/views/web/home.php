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
	<section class="home-banner-area relative">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-8 col-md-12 title-index">
					<h1 class="wow fadeIn" data-wow-duration="4s">E-Journal Sekolah Tinggi Ilmu Hukum <br> Sumpah Pemuda
					</h1>
					<p class="text-white">
						Dalam rangka ikut serta berpartisipasi mencerdaskan kehidupan bangsa dan di dorong pengadaan
						sumber daya manusia dalam bidang ilmu hukum, mempunyai keterampilan dan berkualitas guna
						menghadapi tantangan zaman modern, termotivasilah mendirikan Sekolah Tinggi Ilmu Hukum.
					</p>

					<div class="input-wrap">
						<form action="" class="form-box d-flex justify-content-between">
							<input type="text" placeholder="Search E-Journal, Authors " class="form-control"
								name="username">
							<button type="submit" class="btn search-btn">Search</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->


	<!-- Start About Area -->
	<section class="about-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-5 col-md-6 about-left">
					<img class="img-fluid" src="<?= base_url('assets/img/about.jpg')?>" alt="">
				</div>
				<div class="offset-lg-1 col-lg-6 offset-md-0 col-md-12 about-right">
					<h1>
						SEJARAH STIHPADA
					</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							Dalam rangka ikut serta berpartisipasi mencerdaskan kehidupan bangsa dan di dorong pengadaan
							sumber daya manusia dalam bidang ilmu hukum, mempunyai keterampilan dan berkualitas guna
							menghadapi tantangan zaman modern, termotivasilah mendirikan Sekolah Tinggi Ilmu Hukum.
							<br><br>
							Lembaga ini dinamakan Sekolah Tinggi Ilmu Hukum Sumpah Pemuda (STIHPADA). Maksud diberi nama
							Sumpah Pemuda adalah untuk selalu mengenang tekad pemuda pemudi yang membentuk persatuan dan
							kesatuan bangsa berjuang untuk mencapai kemerdekaan. Mewarisi semangat juang pemuda pemudi
							ini didirikan Sekolah Tinggi Ilmu Hukum Sumpah Pemuda ini.
						</p>
					</div>
					<a href="<?= base_url('tentang/sejarah')?>" class="primary-btn">Lihat Selengkapnya </a>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->
	
	<?php $this->load->view("web/_partials/_footer.php")?>

	<!-- Start Footer Area -->
	
	<!-- End Footer Area -->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#"></a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	
	<?php $this->load->view("web/_partials/_js.php")?>
</body>

</html>