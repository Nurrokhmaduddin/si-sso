<nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <!-- A. Dashboard SSO -->
        <li class="nav-item">
          <a href="index.php" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard SSO</p>
          </a>
        </li>


        <!-- C. Audit & Aktivitas Lintas Sistem -->
        <?php
        // Daftar halaman yang membuat menu "Users" terbuka
        $userPages = ['log_login', 'log_aktivitas', 'error_log', 'notifikasi_log', 'page_view_log','feature_usage_log'];
        $openUsers = in_array($page, $userPages) ? 'show' : '';
        ?>
        <li class="nav-item has-treeview">
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



        <li class="nav-item">
          <a href="main-menu1.php" class="nav-link"><i class="fas fa-arrow-left nav-icon"></i> Kembali ke Menu Utama</a>
        </li>         
      </ul>
    </nav>

cek dong, bagaimana agar sidebar saya bisa modular. jika ada yg aktif dan terbuka.
jika bingung, tanya dulu'