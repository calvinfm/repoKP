<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ADMINISTRATOR - Sekolah Tinggi Ilmu Hukum Sumpah Pemuda</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
          <div class="page-header">
            <h3 class="page-title"> Profile Account </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Account Profile</h4>
                  <p class="card-description"> Mohon Mengisi Profil anda dengan benar.</p>
                  <form class="forms-sample" runat="server">
                    <div class="text-center">
                      <img id="blah" src="<?=base_url('assets/images/default.png')?>" alt="your image" class="rounded mx-auto d-block m-3 border border-secondary" style="max-width : 170px;" />
                    </div>
                    <div class="form-group">
                      <label>Upload Gambar</label>
                      <div class="input-group col-xs-12">
                        <input type="file" class="form-control file-upload-info" id="imgInp" required>
                      </div>
                      <label class="font-italic text-danger m-2">Foto Max 2mb.</label>
                    </div>
                    <div class="form-group">
                      <label for="inputJudul">Nama</label>
                      <input type="text" class="form-control" id="inputJudul" placeholder="Nama Lengkap" value="" required>
                    </div>
                    <div class="form-group">
                      <label for="inputAuthors">NIP</label>
                      <input type="text" class="form-control" id="inputAuthors" placeholder="Nomor Induk Pegawai" value="" required>
                    </div>
                    <div class="form-group">
                      <label for="inputAuthors">Tempat Lahir</label>
                      <input type="text" class="form-control" id="inputAuthors" placeholder="Tempat Lahir anda" value="" required>
                    </div>
                    <div class="form-group">
                      <label for="inputAuthors">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="inputAuthors" value="" required>
                    </div>
                    <div class="form-group">
                      <label for="inputAuthors">Email</label>
                      <input type="email" class="form-control" id="inputAuthors" placeholder="Masukan Email Anda" value="" required>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-success m-1">Save Changes</button>
                      <button class="btn btn-light m-1">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Aprove Modals -->
          <!-- Modal -->
          <div class="modal fade" id="aprovedModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="assets/images/user_active.png" class="img-fluid w-50 mx-auto d-block">
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
          <div class="modal fade" id="rejectedModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="assets/images/user_not_active.png" class="img-fluid w-50 mx-auto d-block">
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
  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#imgInp").change(function() {
      readURL(this);
    });
  </script>
  <!-- plugins:js -->
  <?php $this->load->view("admin/_partials/_js.php")?>
  <script src="assets/js/file-upload.js"></script>
  <!-- End custom js for this page -->
</body>

</html>