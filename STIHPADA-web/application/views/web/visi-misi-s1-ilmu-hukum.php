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
                        VISI MISI PROGRAM STUDI S1 ILMU HUKUM
                    </h1>
                    <p>“Visi bukan hanya gambaran dari apa yang bisa, itu adalah tentang hal menarik bagi diri kita agar
                        lebih baik, sebuah panggilan untuk menjadi sesuatu yang lebih.”</p>
                    <p>- Rosabeth Moss Kanter</p>
                    <div class="link-nav">
                        <span class="box">
                            <a href="<?= base_url('home')?>">Home </a>
                            <i class="lnr lnr-arrow-right"></i>
                            <a href="#">Program Studi</a>
                            <i class="lnr lnr-arrow-right"></i>
                            <a href="visi-misi-s1-ilmu-hukum.html">Visi Misi Program Studi S1 Ilmu Hukum</a>
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
                            <h3 class="mt-20 mb-20">Visi Dan Misi</h3>

                            <p>VISI&nbsp;</p>

                            <p>Pada tahun&nbsp;2030, menjadi program studi ilmu hukum yang berkualitas tingkat nasional
                                dalam menjunjung tinggi nilai-nilai Pancasila</p>

                            <p>MISI :</p>

                            <ol>
                                <li>1. Menyelenggarakan Pendidikan/Pengajaran dengan menghubungkan teori dan praktik
                                    dibidang Ilmu Hukum yang terampil dengan berdasarkan nilai-nilai Pancasila.</li>
                                <li>2. Melaksanakan kegiatan penelitian dan pengembangan ilmu hukum berdasarkan
                                    kaidah-kaidah ilmiah guna memecahkan persoalan dibidang Ilmu Hukum.</li>
                                <li>3. Melaksanakan Pengabdian kepada masyarakat guna memecahkan
                                    permasalahan-permasalahan
                                    dibidang ilmu hukum dalam masyarakat.</li>
                            </ol>

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