<ul class="nav">
          <li class="nav-item nav-profile">
            <a href="" class="nav-link">
              <div class="nav-profile-image" id="img_foto2">
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column" id="namee">
                
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item <?php echo $this->uri->segment(2) == 'journal' ? 'active': '' ?>">
            <a class="nav-link" href="<?=base_url('dosen/journal')?>">
              <span class="menu-title">Journal</span>
              <i class="mdi mdi-file-document
              menu-icon"></i>
            </a>
          </li>
          <li class="nav-item sidebar-actions">
            <span class="nav-link">
              <div class="border-bottom">
                <h6 class="font-weight-normal mb-3">Upload Journal</h6>
              </div>
              <a href="<?=base_url('dosen/upload_journal')?>" class="btn btn-block btn-lg btn-gradient-primary mt-4 text-white"> +
                Upload
                Journal</a>
            </span>
          </li>
        </ul>