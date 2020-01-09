<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ADMINISTRATOR - Sekolah Tinggi Ilmu Hukum Sumpah Pemuda</title>
    <?php $this->load->view("dosen/_partials/_head.php")?>
</head>

<body>
<script type="text/javascript">
var id2 = "<?php echo $this->session->userdata('id_dosen');?>";
var id = "<?php echo $this->session->userdata('username');?>";  
  </script>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <?php $this->load->view("dosen/_partials/_navbar.php")?>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <?php $this->load->view("dosen/_partials/_sidebar.php")?>
              </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Form Upload Journal </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dosen">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Upload Journal</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Form Upload Journal</h4>
                                    <p class="card-description"> Upload Journal anda di formulir ini. </p>
                                    <form class="forms-sample" id="addJournal" method="PUT" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="inputJudul">Judul</label>
                                            <input type="text" class="form-control" id="inputJudul"
                                                placeholder="Judul Journal" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAuthors">Authors</label>
                                            <input type="text" class="form-control" id="inputAuthors"
                                                placeholder="Authors Journal" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputTahun">Tahun</label>
                                            <select class="form-control" id="inputTahun" required>
                                                <option value="" selected disabled>- Pilih Tahun Journal -</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                            </select>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Publisher</label>
                                            <div class="col-sm-4">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="membershipRadios" value="Dosen" checked> Dosen
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="membershipRadios" value="Mahasiswa"> Mahasiswa
                                                    </label>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="form-group">
                                            <label for="inputEmail">Email</label>
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email"
                                                required>
                                        </div> -->
                                        <div class="form-group">
                                            <label>File upload Journal</label>
                                            <div class="input-group col-xs-12">
                                                <input type="file" class="form-control file-upload-info" id="inputPath" required>
                                            </div>
                                            <label class="font-italic text-danger m-2">File harus berformat PDF.</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAbstrak">Abstrak</label>
                                            <textarea class="form-control" id="inputAbstrak" rows="10"
                                                required></textarea>
                                        </div>
                                        <button type="submit" id="addButtonJournal" class="btn btn-gradient-primary m-1">Submit</button>
                                        <button class="btn btn-light m-1">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Aprove Modals -->
                    <!-- Modal -->
                    <div class="modal fade" id="aprovedModals" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?=base_url('assets/images/user_active.png')?>" class="img-fluid w-50 mx-auto d-block">
                                    <h3 class="mt-5">Ingin <span class="text-success">Meng-Aktifkan</span> Users
                                        Tersebut ?</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Aprove -->
                    <!-- Modal -->
                    <div class="modal fade" id="rejectedModals" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?=base_url('assets/images/user_not_active.png')?>"
                                        class="img-fluid w-50 mx-auto d-block">
                                    <h3 class="mt-5">Ingin <span class="text-danger">Meng-Nonaktifkan</span> User
                                        Tersebut ?</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Rejected -->
                    <!-- Modal -->
                    <?php $this->load->view("dosen/_partials/_modalLogout.php")?>
                    <!--End logOut -->
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                     <?php $this->load->view("dosen/_partials/_footer.php")?>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <?php $this->load->view("dosen/_partials/_js.php")?>
</body>

</html>