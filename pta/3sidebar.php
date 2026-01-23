<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link text-center">
    <span class="brand-text font-weight-light">SI-PTA</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar User Panel -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center"
    style="border-bottom: 1px solid rgba(255,255,255,.2);">

    <!-- User Icon -->
    <div class="image">
      <span class="img-circle elevation-2 d-flex align-items-center justify-content-center" style="width:40px;height:40px;background:#ffffff;"><i class="fas fa-user text-black"></i>
      </span>
    </div>

    <!-- User Info -->
    <div class="info ml-2">
      <span class="d-block text-white">Username</span>
      <small class="text-success">
        <i class="fas fa-circle mr-1"></i> Role
      </small>
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
        <li class="nav-item <?php echo in_array($page, ['beranda_admin','beranda_dosen','beranda_walimurid','beranda_murid','beranda_administrator']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['beranda_admin','beranda_dosen','beranda_walimurid','beranda_murid','beranda_administrator']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Beranda
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview"> 
            <li class="nav-item">
              <a href="index.php" class="nav-link <?php echo $page == 'beranda_administrator' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Super Admin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="beranda-admin.php" class="nav-link <?php echo $page == 'beranda_admin' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Admin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="beranda-dosen.php" class="nav-link <?php echo $page == 'beranda_dosen' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Dosen</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="beranda-mahasiswa.php" class="nav-link <?php echo $page == 'beranda_mahasiswa' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Mahasiswa</p>
              </a>
            </li>
            
          </ul>
        </li>

        <!-- MASTER DATA -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Master Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="master-user.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="master-kategori.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Kategori</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- PROSES AKTIVITAS -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tasks"></i>
            <p>
              Proses Aktivitas TA
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="aktivitas1-pendaftaran.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pendaftaran</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="aktivitas2-penentuan-topik.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Penentuan Topik</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="aktivitas-input.php" class="nav-link">
              <a href="aktivitas3-penentuan-pembimbing.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Input Aktivitas</p>
                <p>Penentuan Pembimbing</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="aktivitas4-bimbingan-proposal.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Bimbingan Proposal</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="aktivitas-verifikasi.php" class="nav-link">
              <a href="aktivitas5-bimbingan-laporan.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Verifikasi</p>
                <p>Bimbingan Laporan</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="aktivitas6-pendaftaran-sidang.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pendaftaran Sidang</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="aktivitas7-sidang-ujian.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sidang Ujian</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="aktivitas8-bimbingan-pasca-ujian.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Bimbingan Pasca Ujian</p>
              </a>
            </li>

          </ul>
        </li>


        <!-- MANAJ AKTIVITAS -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-folder-open"></i>
            <p>
              Manajemen Aktivitas
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
          </ul>
        </li>

        <!-- MONITOR AKTIVITAS -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Monitor Aktivitas
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="monitor-skripsi.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rekap TA</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="monitor-realtime.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Realtime</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="monitor-historis.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Historis</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- PENGATURAN -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
            <p>
              Pengaturan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
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