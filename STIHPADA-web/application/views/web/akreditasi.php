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
                        AKREDITASI BAN-PT
                    </h1>
                    <p>“Tanpa sasaran dan rencana meraihnya, Anda seperti kapal yang berlayar tanpa tujuan.”</p>
                    <p>- Fitzhugh Dodson</p>
                    <div class="link-nav">
                        <span class="box">
                            <a href="index.html">Home </a>
                            <i class="lnr lnr-arrow-right"></i>
                            <a href="#">Tentang Kami</a>
                            <i class="lnr lnr-arrow-right"></i>
                            <a href="tujuan-dan-sasaran.html">Tujuan dan Sasaran Institusi</a>
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
                                <img class="img-fluid rounded mx-auto d-block" src="<?= base_url("assets/img/akredts2.jpg")?>"
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
                            <h3 class="mt-20 mb-20">AKREDITASI BAN-PT</h3>
                            <p><strong>Status Terakreditasi dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT)
                                    dengan Peringkat B (Baik)</strong></p>

                            <p><strong>Akreditasi Institusi : SK. No : 769/SK/BAN-PT/Akred/PT/VII/2015 peringkat
                                    B&nbsp;</strong></p>

                            <p><strong><a
                                        href="https://drive.google.com/open?id=0B_FfSgRdMfHvdDZOb0VFSHE5cC1qdU00WW9GaFJiUGhXNUkw">Download
                                        here</a></strong></p>

                            <p><strong>Akreditasi Program Studi S1 Ilmu Hukum : SK. NOMOR :
                                    3023/SK/BAN-PT/Akred/S/XI/2018&nbsp;peringkat B&nbsp;</strong></p>

                            <p><strong><a
                                        href="https://drive.google.com/file/d/1p2HBxMsxi_TWfbhNstsZXW9LHd4iC2L2/view?usp=sharing">Download
                                        here</a></strong></p>

                            <br>
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