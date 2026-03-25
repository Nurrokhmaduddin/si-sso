<?php $page = 'beranda_mahasiswa'; ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link text-center">
    <span class="brand-text font-weight-light">SI-LOA</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar User Panel -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center"
    style="border-bottom: 1px solid rgba(255,255,255,.2);"
    data-bs-toggle="modal"
    data-bs-target="#modalPilihPeran"
    >

    <!-- User Icon -->
    <div class="image">
      <span class="img-circle elevation-2 d-flex align-items-center justify-content-center" style="width:40px;height:40px;background:#ffffff;"><i class="fas fa-user text-black"></i>
      </span>
    </div>

    <!-- User Info -->
    <div class="info ml-2" >
      <a href="#" class="d-block" data-toggle="modal" data-target="#modalPilihPeran">
        <span class="d-block text-white">Username</span>
        <small class="text-success ">
          <i class="fas fa-circle mr-1"></i> <?= $role; ?>
        </small>
      </a>
    </div>

  </div>




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column"
        data-widget="treeview"
        role="menu"
        data-accordion="false">

        <!-- BERANDA -->
<!--         <li class="nav-item">
          <a href="beranda.php" class="nav-link ">
            <i class="nav-icon fas fa-home"></i>
            <p>Beranda</p>
          </a>
        </li> -->
<!-- BERANDA -->
        <li class="nav-item <?php echo in_array($page, ['beranda','beranda_admin','beranda_manajer','beranda_dosen','beranda_mahasiswa']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['beranda','beranda_dosen']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Beranda
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">


            <li class="nav-item">
              <a href="beranda-mahasiswa.php" class="nav-link <?php echo $page == 'beranda_mahasiswa' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Mahasiswa</p>
              </a>
            </li>

          </ul>
        </li>

       



        <!-- PERKULIAHAN OBE -->
        <li class="nav-item <?php echo in_array($page, ['kelas_perkuliahan','kelas_konversi','portofolio_kelas','nilai_cpmk','master_periode','pengumuman','yudisium','soal_ujian','rps']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['kelas_perkuliahan','kelas_konversi','portofolio_kelas','nilai_cpmk','master_periode','pengumuman','yudisium','soal_ujian','rps']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>
              Perkuliahan OBE
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
<!-- 
            <li class="nav-item">
              <a href="perkuliahan-portofolio-kelas.php" class="nav-link <?php echo $page == 'portofolio_kelas' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Portofolio Kelas</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="progres-perwalian.php" class="nav-link <?php echo $page == 'progress_perwalian' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Perwalian</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="perkuliahan-yudisium.php" class="nav-link <?php echo $page == 'yudisium' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Yudisium</p>
              </a>
            </li>

          </ul>
        </li>


        <!-- MONITORING OBE -->
        <li class="nav-item <?php echo in_array($page, ['status_mahasiswa','status_pemetaan','monev_individu','monev_kelas','monev_tahunan','monev_angkatan','monev_yudisium','monev_semester','monev_semester3']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['status_mahasiswa','status_pemetaan','monev_individu','monev_kelas','monev_tahunan','monev_angkatan','monev_yudisium','monev_semester','monev_semester3']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Monitoring OBE
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
           
            <li class="nav-item">
              <a href="monev-rekap-individual-.php" class="nav-link <?php echo $page == 'monev_individu' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Monev Individu</p>
              </a>
            </li>

          </ul>
        </li>

      

 
        <!-- KEMBALI MENU UTAMA -->
        <li class="nav-item mt-3">
          <a href="../menu.php" class="nav-link">
            <i class="nav-icon fas fa-arrow-left"></i>
            <p>Menu Utama</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->

    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>


<!-- Modal Pilih Peran -->
<div class="modal fade" id="modalPilihPeran" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Pilih Peran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">

        <button class="btn btn-outline-primary w-100 mb-2 role-select" data-role="Admin">
          Admin
        </button>

        <button class="btn btn-outline-primary w-100 mb-2 role-select" data-role="Manajer">
          Manajer
        </button>

        <button class="btn btn-outline-primary w-100 mb-2 role-select" data-role="Dosen">
          Dosen
        </button>

        <button class="btn btn-outline-primary w-100 role-select" data-role="Mahasiswa">
          Mahasiswa
        </button>

      </div>

    </div>
  </div>
</div>

