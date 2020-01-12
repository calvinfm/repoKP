<header id="header">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="<?= base_url('home')?>">
                        <img src="<?= base_url('assets/img/logo.png')?>" class="img-fluid" style="width: 70%;" alt="" title="" />
                    </a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class=" <?php echo $this->uri->segment(1) == 'home' ? 'menu-active': '' ?>"><a href="<?= base_url('home')?>">Home</a></li>
                        <li class="menu-has-children  <?php echo $this->uri->segment(1) == 'tentang' ? 'menu-active': '' ?>"><a href="#">Tentang Kami</a>
                            <ul>
                                <li ><a class=" <?php echo $this->uri->segment(2) == 'sejarah' ? 'text-info': '' ?>" href="<?= base_url('tentang/sejarah')?>">Sejarah STIHPADA</a></li>
                                <li ><a class=" <?php echo $this->uri->segment(2) == 'visi_misi' ? 'text-info': '' ?>" href="<?= base_url('tentang/visi_misi')?>">Visi & Misi Institusi</a></li>
                                <li ><a class=" <?php echo $this->uri->segment(2) == 'tujuan_dan_saran' ? 'text-info': '' ?>" href="<?= base_url('tentang/tujuan_dan_saran')?>">Tujuan dan Sasaran</a></li>
                                <li ><a class=" <?php echo $this->uri->segment(2) == 'pimpinan_lembaga' ? 'text-info': '' ?>" href="<?= base_url('tentang/pimpinan_lembaga')?>">Pejabat Yayasan dan Struktural</a></li>
                                <li><a class=" <?php echo $this->uri->segment(2) == 'akreditasi' ? 'text-info': '' ?>"  href="<?= base_url('tentang/akreditasi')?>">Akreditasi BAN-PT</a></li>
                            </ul>
                        </li>

                        <li class="menu-has-children <?php echo $this->uri->segment(1) == 'prodi' ? 'menu-active': '' ?>"><a href="#">Program Studi</a>
							<ul>
								<li><a class=" <?php echo $this->uri->segment(2) == 'visi_misi_ilmu_hukum_s1' ? 'text-info': '' ?>" href="<?= base_url('prodi/visi_misi_ilmu_hukum_s1')?>">Visi Misi Program Studi S1 Ilmu Hukum</a>
								</li>
								<li><a class=" <?php echo $this->uri->segment(2) == 'biaya_ilmu_hukum_s1' ? 'text-info': '' ?>" href="<?= base_url('prodi/biaya_ilmu_hukum_s1')?>">Biaya & Persyaratan Prodi S1 Ilmu
										Hukum</a></li>
								<li><a class=" <?php echo $this->uri->segment(2) == 'visi_misi_ilmu_hukum_s2' ? 'text-info': '' ?>" href="<?= base_url('prodi/visi_misi_ilmu_hukum_s2')?>">Visi Misi Program Studi S2 Magister Hukum</a>
								</li>
								<li><a class=" <?php echo $this->uri->segment(2) == 'biaya_ilmu_hukum_s2' ? 'text-info': '' ?>" href="<?= base_url('prodi/biaya_ilmu_hukum_s2')?>">Biaya & Persyaratan Prodi S2
										Magister Hukum</a></li>
								<li><a class=" <?php echo $this->uri->segment(2) == 'pendidikan_profesi_advokat' ? 'text-info': '' ?>" href="<?= base_url('prodi/pendidikan_profesi_advokat')?>">Pendidikan Profesi Advokat</a></li>
							</ul>
						</li>
                        <li class=" <?php echo $this->uri->segment(1) == 'e-journal' ? 'menu-active': '' ?>"><a href="<?= base_url('e-journal')?>">E-Journal</a></li>
                        <li class=" <?php echo $this->uri->segment(1) == 'contact' ? 'menu-active': '' ?>"><a href="<?= base_url('contact')?>">Contact</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header>