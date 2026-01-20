<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link text-center">
    <span class="brand-text font-weight-light">SI-SSO</span>
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
        <li class="nav-item">
          <a href="beranda.php" class="nav-link active">
            <i class="nav-icon fas fa-home"></i>
            <p>Beranda</p>
          </a>
        </li>



        
 <!-- C. Audit & Aktivitas Lintas Sistem -->
        <?php
        // Daftar halaman yang membuat menu "Users" terbuka
        $userPages = ['log_login', 'log_aktivitas', 'error_log', 'notifikasi_log', 'page_view_log','feature_usage_log'];
        $openUsers = in_array($page, $userPages) ? 'show' : '';
        ?>



        <li class="nav-item ">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>
              Audit & Aktivitas
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- Prinsip Pelacakan -->
            <li class="nav-item">             
              <a href="log_login.php" class="nav-link <?= $page=='log_login'?'active':'' ?>">
                <i class="far fa-circle nav-icon"></i>Log Login
                <span class="text-muted small d-block">Mencatat siapa login, kapan, dan status sukses/gagal</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="log_aktivitas.php" class="nav-link <?= $page=='log_aktivitas'?'active':'' ?>">
                <i class="far fa-circle nav-icon"></i>Log Aktivitas
                <span class="text-muted small d-block">Mencatat aksi pengguna, data yang diubah, waktu, dan status berhasil/gagal</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="error_log.php" class="nav-link <?= $page=='error_log'?'active':'' ?>">
                <i class="far fa-circle nav-icon"></i>Error Log
                <span class="text-muted small d-block">Mencatat semua error atau kegagalan sistem beserta pengguna terkait</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="notifikasi_log.php" class="nav-link <?= $page=='notifikasi_log'?'active':'' ?>">
                <i class="far fa-circle nav-icon"></i>Notifikasi Log
                <span class="text-muted small d-block">Mencatat semua noise atau hambatan penerimaan pesan kepada pengguna terkait</span>
              </a>
            </li>              
            <!-- Prinsip Observe → Measure → Improve -->
            <li class="nav-item">
              <a href="page_view_log.php" class="nav-link <?= $page=='page_view_log'?'active':'' ?>">
                <i class="far fa-circle nav-icon"></i>Page View Log
                <span class="text-muted small d-block">Memonitor halaman yang dikunjungi pengguna untuk analisis penggunaan</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="feature_usage_log.php" class="nav-link <?= $page=='feature_usage_log'?'active':'' ?>">
                <i class="far fa-circle nav-icon"></i>Feature Usage Log
                <span class="text-muted small d-block">Memonitor penggunaan fitur untuk evaluasi dan perbaikan sistem</span>
              </a>
            </li>
          </ul>
        </li>

        <!--Pengumuman Global -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-bell"></i>
            <p>
              Manajemen Notifikasi
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Tipe</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Kategori</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Pesan Notifiaksi</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Pengumuman Global</a></li>
          </ul>
        </li>


        <!-- B. Manajemen Pengguna Global -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Manajemen SSO
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Data Akun</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Role Global</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Assignment Role</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Unit / Organisasi</a></li>
          </ul>
        </li>

        <!-- E. Konfigurasi SSO -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
            <p>
              Konfigurasi SSO
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Integrasi Aplikasi</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Mapping Otoritas</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Branding / Metadata</a></li>
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
