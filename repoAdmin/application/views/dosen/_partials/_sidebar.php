<ul class="nav">
          <li class="nav-item nav-profile">
            <a href="" class="nav-link">
              <div class="nav-profile-image">
                <img src="<?=base_url('repoAdmin/assets/images/admin.png')?>" alt="profile">
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">Admin</span>
                <span class="text-secondary text-small">Administrator</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item <?php echo $this->uri->segment(2) == 'dashboard' ? 'active': '' ?>">
            <a class="nav-link" href="<?=base_url('repoAdmin/admin/dashboard')?>">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item <?php echo $this->uri->segment(2) == 'members' ? 'active': '' ?>">
            <a class="nav-link" href="<?=base_url('repoAdmin/admin/members')?>">
              <span class="menu-title">Members</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
          </li>
          <li class="nav-item <?php echo $this->uri->segment(2) == 'journal' ? 'active': '' ?>">
            <a class="nav-link" href="<?=base_url('repoAdmin/admin/journal')?>">
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
              <a href="<?=base_url('repoAdmin/admin/upload_journal')?>" class="btn btn-block btn-lg btn-gradient-primary mt-4 text-white"> +
                Upload
                Journal</a>
            </span>
          </li>
        </ul>