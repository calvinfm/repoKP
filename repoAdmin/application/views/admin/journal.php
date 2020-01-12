<!DOCTYPE html>
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
                <a href="<?=base_url('admin/upload_journal')?>"  class="btn btn-gradient-primary ml-auto btn-sm">Upload
                  Journal</a>
                <i class="mdi mdi-close" id="bannerClose"></i>
              </span>
            </div>
          </div>
          <div class="page-header">
            <h3 class="page-title"> Journal Table </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard')?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Journal Table</li>
              </ol>
            </nav>
          </div> 
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tabel Journal</h4>
                  </p>
                  <div class="table-responsive">
                    <table class="table" id="adminJournalTable">
                      <thead>
                        <tr>
                          <th class="font-weight-bold"> Judul </th>
                          <th> Tahun </th>
                          <th> Authors </th>
                          <th> Publisher </th>
                          <th> Email </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      
                    </table>
                  </div>
                </div>
                <!-- <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav> -->
              </div>

              <div class="card" id="cardt">
                <div class="card-body" id="tampilJurnal">
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
                  <img src="<?=base_url('assets/images/check.png')?>" class="img-fluid w-50 mx-auto d-block">
                  <h3 class="mt-5">Ingin <span class="text-success">Aprove</span> Journal Tersebut ?</h3>
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
          <div class="modal fade" id="rejectedModalsJournal" tabindex="-1" role="dialog"
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
                  <button type="button" class="btn btn-danger" data-dismiss="modal" id="rejectedJ">Save changes</button>
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