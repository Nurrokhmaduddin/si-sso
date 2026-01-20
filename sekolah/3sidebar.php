<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link text-center">
    <span class="brand-text font-weight-light">Sekolah</span>
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
        <i class="fas fa-circle mr-1"></i> Role
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
          <a href="beranda.php" class="nav-link active">
            <i class="nav-icon fas fa-home"></i>
            <p>Beranda</p>
          </a>
        </li> -->

<!-- BERANDA -->
        <li class="nav-item <?php echo in_array($page, ['beranda_pengelola','beranda_walikelas','beranda_walimurid','beranda_murid']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['beranda_pengelola','beranda_walikelas','beranda_walimurid','beranda_murid']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Beranda
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview"> 
            <li class="nav-item">
              <a href="beranda-pengelola.php" class="nav-link <?php echo $page == 'beranda_pengelola' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Pengelola Sekolah</p>
              </a>
            </li>
             <li class="nav-item">
              <a href="beranda-walikelas.php" class="nav-link <?php echo $page == 'beranda_walikelas' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Wali Kelas</p>
              </a>
            </li>            
            <li class="nav-item">
              <a href="beranda-walimurid.php" class="nav-link <?php echo $page == 'beranda_walimurid' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Wali Murid</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="beranda-murid.php" class="nav-link <?php echo $page == 'beranda_murid' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Murid</p>
              </a>
            </li>
            
          </ul>
        </li>


        <?php 
// Misal: master-mahasiswa.php sudah punya
// $page = 'master_mahasiswa';
        ?>

        <!-- MASTER DATA -->
        <li class="nav-item <?php echo in_array($page, ['master_prodi','master_peminatan','master_jurusan','master_jalur','master_dosen','master_mahasiswa']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['master_prodi','master_peminatan','master_jurusan','master_jalur','master_dosen','master_mahasiswa']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Master Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="aktivitas-kurikulum.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kurikulum</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="pemetaan-matakuliah.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar MaPel</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pemetaan-matakuliah.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Aktivitas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="master-prodi.php" class="nav-link <?php echo $page == 'master_prodi' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Tingkatan Kelas</p>
              </a>
            </li>
             <li class="nav-item">
              <a href="master-dosen.php" class="nav-link <?php echo $page == 'master_dosen' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Wali Kelas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="master-dosen.php" class="nav-link <?php echo $page == 'master_dosen' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Fasilitator Mapel</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="master-jalur.php" class="nav-link <?php echo $page == 'master_jalur' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Orangtua Murid</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="master-mahasiswa.php" class="nav-link <?php echo $page == 'master_mahasiswa' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Murid</p>
              </a>
            </li>

            
                        

            
          </ul>
        </li>




        <!-- AKTIVITAS -->
        <li class="nav-item <?php echo in_array($page, ['master_periode','kelas_akademik','plan_daily','master_jurusan','master_jalur','master_dosen','master_mahasiswa']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['master_periode','kelas_akademik','plan_daily','master_jurusan','master_jalur','master_dosen','master_mahasiswa']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-clipboard-list"></i>
            <p>
              Aktivitas
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">

            
            <li class="nav-item">
              <a href="master-periode.php" class="nav-link <?php echo $page == 'master_periode' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Periode Akademik</p>
              </a>
            </li>
           
            <li class="nav-item">
              <a href="monev-kbm-harian.php" class="nav-link <?php echo $page == 'kelas_akademik' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Kelas Akademik</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="monev-kbm-harian-plan.php" class="nav-link <?php echo $page == 'plan_daily' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Daily Plan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Weekly Plan</p>
              </a>
            </li>
          

          </ul>
        </li>

     


        <!-- LAPORAN -->
        <li class="nav-item <?php echo in_array($page, ['report_daily','master_jurusan','master_jalur','master_dosen','master_mahasiswa']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['report_daily','master_jurusan','master_jalur','master_dosen','master_mahasiswa']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Laporan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="monev-kbm-harian-report.php" class="nav-link <?php echo $page == 'report_daily' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Learning Report Daily</p>
              </a>
            </li>

          
            <li class="nav-item">
              <a href="rekap-kelas.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rapot Kelas Akademik</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="rekap-mk.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rapot WaliKelas</p>
              </a>
            </li>

          
            <li class="nav-item">
              <a href="monev-cpl-individual.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rapot Individu</p>
              </a>
            </li>
        
            <li class="nav-item">
              <a href="monev-cpl-angkatan.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rapot Angkatan Kelas</p>
              </a>
            </li>

      

          </ul>
        </li>

      


        <!-- PENGATURAN -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Pengaturan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="aktivitas-manajemen.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="aktivitas-laporan.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Peran</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="aktivitas-laporan.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pengumuman</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="aktivitas-laporan.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Notifikasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pengaturan-aplikasi.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Parameter Aktivitas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pengaturan-aplikasi.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Aplikasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pengaturan-user.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Hak Akses</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- KEMBALI MENU UTAMA -->
        <li class="nav-item mt-3">
          <a href="../menu.php" class="nav-link">
            <i class="nav-icon fas fa-arrow-left"></i>
            <p>Kembali Menu Utama</p>
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
