<html lang="en" class="no-js">
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
                        E-Journal
                    </h1>
                    <div class="link-nav">
                        <span class="box">
                            <a href="<?= base_url("home")?>">Home </a>
                            <i class="lnr lnr-arrow-right"></i>
                            <a href="<?= base_url('repository')?>" id="tampliEjournale">Repository</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Banner Area -->

    <!-- Start post-content Area -->
    <section class="post-content-area" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-8 posts-list mt-100">
                    <div class="single-post row" id="tampilEjournal">
                       
                    </div>
                </div>
                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget search-widget" >
                                <input placeholder="Search Repository, Authors" name="search" id="searchJournal" type="text"
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Search Repository, Authors'"
                                    value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" >
                                <a id="searchJournale">
                                    <i class="fa fa-search"></i>
                                </a>
                        </div>
                        
                        <div class="single-sidebar-widget popular-post-widget">
                            <h4 class="popular-title">Repository</h4>
                            <div class="popular-post-list" id="ejournalTampil">
                                <!-- <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>Face Detection Mengunakan Metode Citra Konvolusi</h6>
                                        </a>
                                        <p class="font-weight-bold">Authors : Fachri</p>
                                        <p>13 Dec, 2019 </p>
                                    </div>
                                </div>
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>Face Detection Mengunakan Metode Citra Konvolusi</h6>
                                        </a>
                                        <p class="font-weight-bold">Authors : Fachri</p>
                                        <p>13 Dec, 2019 </p>
                                    </div>
                                </div>
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>Face Detection Mengunakan Metode Citra Konvolusi</h6>
                                        </a>
                                        <p class="font-weight-bold">Authors : Fachri</p>
                                        <p>13 Dec, 2019 </p>
                                    </div>
                                </div>
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>Face Detection Mengunakan Metode Citra Konvolusi</h6>
                                        </a>
                                        <p class="font-weight-bold">Authors : Fachri</p>
                                        <p>13 Dec, 2019 </p>
                                    </div>
                                </div>
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>Face Detection Mengunakan Metode Citra Konvolusi</h6>
                                        </a>
                                        <p class="font-weight-bold">Authors : Fachri</p>
                                        <p>13 Dec, 2019 </p>
                                    </div>
                                </div>
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>Face Detection Mengunakan Metode Citra Konvolusi</h6>
                                        </a>
                                        <p class="font-weight-bold">Authors : Fachri</p>
                                        <p>13 Dec, 2019 </p>
                                    </div>
                                </div> -->
                            </div>
                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">
                                                <span class="lnr lnr-chevron-left"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a href="#" class="page-link">01</a></li>
                                    <li class="page-item"><a href="#" class="page-link">02</a></li>
                                    <li class="page-item"><a href="#" class="page-link">03</a></li>
                                    <li class="page-item"><a href="#" class="page-link">04</a></li>
                                    <li class="page-item"><a href="#" class="page-link">09</a></li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <span aria-hidden="true">
                                                <span class="lnr lnr-chevron-right"></span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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
    
    <script src="<?=base_url('assets/js/web.js')?>"></script>
</body>

</html>