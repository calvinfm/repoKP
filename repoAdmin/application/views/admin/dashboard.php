
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ADMINISTRATOR - Sekolah Tinggi Ilmu Hukum Sumpah Pemuda</title>
  <?php $this->load->view("admin/_partials/_head.php")?>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <?php $this->load->view("admin/_partials/_navbar.php")?>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <?php $this->load->view("admin/_partials/_sidebar.php")?>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" id="proBanner">
            <div class="col-12">
              <span class="d-flex align-items-center purchase-popup">
                <p>Ingin Menambah Journal ? Tinggal Klik saja.</p>
                <a href="<?=base_url('admin/upload_journal')?>" 
                  class="btn btn-gradient-primary ml-auto btn-sm">Upload Journal</a>
                <i class="mdi mdi-close" id="bannerClose"></i>
              </span>
            </div>
          </div>
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>
              </span> Dashboard </h3>
          </div>
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body" id="jurnal_upload">
                  
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body" id="jumlah_jurnal">
                  <!-- <img src="<?=base_url('assets/images/dashboard/circle.svg')?>" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Published Journal
                    <i class="mdi mdi-book-open-page-variant mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">45,6334</h2> -->
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body" id="active_user">
                  <!-- <img src="<?=base_url('assets/images/dashboard/circle.svg')?>" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Active User
                    
                  </h4>
                  <h2 class="mb-5">95</h2> -->
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    Approval Table</h4>
                  <div class="table-responsive">
                    <table class="table" id="adminDashboardTable">
                      <thead>
                        <tr>
                          <th> Nama </th>
                          <th> Subject </th>
                          <th> Status </th>
                          <th> Tahun </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Aprove Modals -->
          <!-- Modal -->
          <div class="modal" id="aprovedModalsJournal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="<?=base_url('assets/images/check.png')?>" class="img-fluid w-50 mx-auto d-block">
                  <h3 class="mt-5">Ingin <span class="text-success">Aprove</span> Journal Tersebut ?</h3>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success" id="aprovedJ" data-dismiss="modal" >Aprove</button>
                </div>
              </div>
            </div>
          </div>
          <!--End Aprove -->
          <!-- Modal -->
          <div class="modal" id="rejectedModalsJournal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="<?=base_url('assets/images/rejected.png')?>" class="img-fluid w-50 mx-auto d-block">
                  <h3 class="mt-5">Ingin <span class="text-danger">Reject Journal</span> Tersebut ?</h3>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success" id="rejectedJ" data-dismiss="modal">Tolak</button>
                </div>
              </div>
            </div>
          </div>
          <!--End Rejected -->
          <!-- Modal -->
          <?php $this->load->view("admin/_partials/_modalLogout.php")?>
          <!--End logOut -->
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
        <?php $this->load->view("admin/_partials/_footer.php")?>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <?php $this->load->view("admin/_partials/_js.php")?>
  
</body>

</html>