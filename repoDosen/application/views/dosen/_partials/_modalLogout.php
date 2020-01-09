<div class="modal fade" id="logOutModals" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="<?=base_url('assets/images/log_out.png')?>" class="img-fluid w-50 mx-auto d-block">
                  <h3 class="mt-5">Yakin Ingin <span class="text-danger">Log-Out</span> ?</h3>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a href="<?=base_url('dosen/logout')?>"><button type="button" class="btn btn-danger">Log-Out</button></a>
                </div>
              </div>
            </div>
          </div>