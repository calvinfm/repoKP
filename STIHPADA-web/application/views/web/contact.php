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
					<h1 class="text-white mt-50">
						KANTOR HUKUM POLIS ABDI HUKUM STIHPADA
					</h1>
					<div class="link-nav">
						<span class="box">
							<a href="<?= base_url('home')?>">Home </a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="contact.html">Contact</a>
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
								<img class="img-fluid rounded mx-auto d-block" src="<?= base_url('assets/img/kantor_polis.jpg')?>"
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
							<h3 class="mt-20 mb-20">KANTOR HUKUM POLIS ABDI HUKUM STIHPADA</h3>
							<p>Kantor Hukum Polis Abdi Hukum STIHPADA didirikan sebagai salah satu sarana pengabdian
								kepada masyarakat dan kantor hukum yang menyediakan jasa layanan hukum. Terakreditasi
								oleh Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia. Menyediakan jasa hukum
								penyelesaian sengketa hukum pidana, perdata, tata usaha negara, agama, militer dan
								gugatan konstitusi ke Mahkamah Konstitusi.</p>
							<h4>Susunan Pengurus Kantor Hukum Polis Abdi Hukum STIHPADA</h4>
							<br>
							<table class="table">
								<thead>
									<tr>
										<th scope="col">No.</th>
										<th scope="col">Jabatan</th>
										<th scope="col">Nama</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Dewan Pembina</td>
										<td>Dr.H.Firman Freaddy Busroh,SH,M.Hum
											<br>
											Dr.Hj.Jauhariah,SH,MM,MH
											<br>
											Dr.Hj.Rianda Riviyusnita,SH,M.Kn
										</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Ketua</td>
										<td>Redho Junaidi,SH</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Sekretaris</td>
										<td>Dr.Marsudi Utoyo,SH,MH</td>
									</tr>
									<tr>
										<th scope="row">4</th>
										<td>Bendahara</td>
										<td>Hj.Fatria Khairo,STP,SH,MH</td>
									</tr>
									<tr>
										<th scope="row">5</th>
										<td>Advokat</td>
										<td> Dr.Derry Angling Kusuma,SH,M.Hum
											<br>
											Dr.H.Yuli Asmara Triputra,SH,M.Hum
											<br>
											Evi Oktarina,SH,MH
											<br>
											Liza Deshaini,SH,MH
											<br>
											Hendri,SH,M.Hum
											<br>
											Tobi Haryadi,SH,MH
											<br>
											Husnaini,SE,SH,MH
											<br>
											Redhi Setiadi,SH
											<br>
											M.Azdy Farmozy,SH
											<br>
											Jurnalis,SH
											<br>
											Sukma Wijaya,SH
											<br>
											Kinaria Apriani,SH,MH
											<br>
											Etal Pargas,SH
											<br>
											Mulyadi M.Yusuf,SH
											<br>
											Salman Farisi,SH
											<br>
											Hendri Umar Adi Kusuma,SH
										</td>
									</tr>
									<tr>
										<th scope="row">6</th>
										<td>Para Legal</td>
										<td>Maulana Oktaviano
											<br>
											Gonhar,SH
											<br>
											Rizky Yanto
											<br>
											Rivera
											<br>
											Adi Dwijaya Saputra
											<br>
											Yogi Juniardi
											<br>
											Priyandi,SH
											<br>
											Agus Saputra
											<br>
											Rahmad Adi Pratama
											<br>
											Ari Ardian Iska
										</td>
									</tr>
								</tbody>
							</table>
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