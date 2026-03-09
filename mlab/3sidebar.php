<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link text-center">
    <span class="brand-text font-weight-light">SI-MLAB</span>
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
          <a href="beranda.php" class="nav-link ">
            <i class="nav-icon fas fa-home"></i>
            <p>Beranda</p>
          </a>
        </li> -->
        <!-- BERANDA -->
        <li class="nav-item <?php echo in_array($page, ['beranda','beranda_dosen']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['beranda','beranda_dosen']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Beranda
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="beranda.php" class="nav-link <?php echo $page == 'beranda' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Superadmin</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="master-prodi.php" class="nav-link <?php echo $page == 'master_prodi' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Admin</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="master-jenjang.php" class="nav-link <?php echo $page == 'master_jenjang' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Manajer</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="beranda-dosen.php" class="nav-link <?php echo $page == 'beranda_dosen' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Kalab</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="beranda-dosen.php" class="nav-link <?php echo $page == 'beranda_dosen' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Laboran</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="master-mahasiswa.php" class="nav-link <?php echo $page == 'master_mahasiswa' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Pelanggan (in)</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="master-mahasiswa.php" class="nav-link <?php echo $page == 'master_mahasiswa' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Pelanggan (ex)</p>
              </a>
            </li>

          </ul>
        </li>

        <!-- MASTER DATA -->
        <li class="nav-item <?php echo in_array($page, ['master_tahun','master_semester','master_peminatan','master_jenjang','master_jalur','master_dosen','master_mahasiswa']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['master_tahun','master_semester','master_peminatan','master_jenjang','master_jalur','master_dosen','master_mahasiswa']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Master Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
           

            <li class="nav-item">
              <a href="master-laboratorium.php" class="nav-link <?php echo $page == 'master_laboratorium' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Unit Laboratorium</p>
              </a>
            </li>

            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Laboratorium Mitra</p></a></li>

            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Pengguna Sistem</p></a></li>

            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Dokumen Mutu</p></a></li>

<li class="nav-item">
              <a href="master-parameter-uji.php" class="nav-link <?php echo $page == 'master_parameter_uji' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Parameter Uji</p>
              </a>
            </li>


            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Peralatan</p></a></li>

            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Bahan Habis Pakai</p></a></li>

            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Rekening & Tarif</p></a></li>
<li class="nav-item">
              <a href="master-kuesioner.php" class="nav-link <?php echo $page == 'master_kuesioner' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Kuesioner Survei</p>
              </a>
            </li>

          </ul>
        </li>


        <!-- Administrasi Pengujian -->
        <li class="nav-item <?php echo in_array($page, ['aktivitas_order','aktivitas_pelayanan','aktivitas_order_pengguna']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['aktivitas_order','aktivitas_pelayanan','aktivitas_order_pengguna']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-flask"></i>
            <p>
              Administrasi Pengujian
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="aktivitas-order.php" class="nav-link <?php echo $page == 'aktivitas_order' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Order</p>
              </a>
            </li>
<li class="nav-item">
              <a href="aktivitas-order-pengguna.php" class="nav-link <?php echo $page == 'aktivitas_order_pengguna' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Order P</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="aktivitas-pelayanan.php" class="nav-link <?php echo $page == 'aktivitas_pelayanan' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Pelayanan Pengujian</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="aktivitas-pelayanan-pengguna.php" class="nav-link <?php echo $page == 'aktivitas_pelayanan_pengguna' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Pelayanan Pengujian P</p>
              </a>
            </li>

          </ul>
        </li>

        <!-- Administrasi Penyewaan -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-box"></i>
            <p>
              Administrasi Penyewaan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Sewa</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pelayanan Penyewaan</p>
              </a>
            </li>

          </ul>
        </li>

        <!-- Tagihan -->
        <li class="nav-item">
          <a href="tagihan-pembayaran.php" class="nav-link <?php echo $page == 'tagihan_pembayaran' ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-file-invoice"></i>
            <p>Tagihan & Pembayaran</p>
          </a>
        </li>

        <!-- Permintaan Kunjungan -->
        <li class="nav-item">
          <a href="permintaan-kunjungan.php" class="nav-link">
            <i class="nav-icon fas fa-calendar-check"></i>
            <p>Permintaan Kunjungan</p>
          </a>
        </li>


        <!-- Pengaduan -->
        <li class="nav-item">
          <a href="pengaduan-pelanggan.php" class="nav-link <?php echo $page == 'pengaduan_pelanggan' ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-exclamation-circle"></i>
            <p>Pengaduan Pelanggan</p>
          </a>
        </li>


        <!-- MONITORING OBE -->
        <li class="nav-item <?php echo in_array($page, ['monev_laporan','monev_hasil_survei','monev_customer','monev_tagihan','monev_statistik']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['monev_laporan','monev_hasil_survei','monev_customer','monev_tagihan','monev_statistik']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Laporan & Statistik
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="monev-rekap-kelas-.php" class="nav-link <?php echo $page == 'monev_kelas' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Monev Kelas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="monev-laporan.php" class="nav-link <?php echo $page == 'monev_laporan' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Laporan</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="monev-statistik.php" class="nav-link <?php echo $page == 'monev_statistik' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Statistik</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="monev-hasil-survei.php" class="nav-link <?php echo $page == 'monev_hasil_survei' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Hasil Survey</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="monev-customer.php" class="nav-link <?php echo $page == 'monev_customer' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Customer</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sasaran Mutu</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="monev-tagihan.php" class="nav-link <?php echo $page == 'monev_tagihan' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Tagihan Lunas</p>
              </a>
            </li>
          </ul>
        </li>

      


<!-- KONFIGURASI -->
<li class="nav-item <?php echo in_array($page, ['konfigurasi_loa','konfigurasi_notifikasi']) ? 'menu-open' : ''; ?>">
  <a href="#" class="nav-link <?php echo in_array($page, ['konfigurasi_loa','konfigurasi_notifikasi']) ? 'active' : ''; ?>">
    <i class="nav-icon fas fa-sliders-h"></i>
    <p>
      Konfigurasi
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="konfigurasi-loa.php" class="nav-link <?php echo $page == 'konfigurasi_loa' ? 'active' : ''; ?>">
        <i class="far fa-circle nav-icon"></i>
        <p>Parameter SIMLAB</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="konfigurasi-notifikasi.php" class="nav-link <?php echo $page == 'konfigurasi_notifikasi' ? 'active' : ''; ?>">
        <i class="far fa-circle nav-icon"></i>
        <p>Template Notifikasi</p>
      </a>
    </li>
    <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kontak admin</p>
              </a>
            </li>

    <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Atur Hari Libur</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tampilkan Layanan expres</p>
              </a>
            </li>
  </ul>
</li>
        <!-- PENGATURAN -->
        <li class="nav-item <?php echo in_array($page, ['pengaturan_user','pengaturan_role','pengaturan_app']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['pengaturan_user','pengaturan_role','pengaturan_app']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Pengaturan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- USER (LEVEL 2) -->
             <li class="nav-item <?php echo in_array($page, ['']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['pengaturan_user','pengaturan_role']) ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  User
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              <!-- LEVEL 3 -->
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pengaturan-users.php" class="nav-link <?php echo $page == 'pengaturan_user' ? 'active' : ''; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Pengguna</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="pengaturan-roles.php" class="nav-link <?php echo $page == 'pengaturan_role' ? 'active' : ''; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Peran & Hak Akses</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="reset-password.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Reset Password</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="reset-password.php" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Reset Password</p>
                  </a>
                </li> -->
              </ul>

            </li>
            <!-- <li class="nav-item">
              <a href="pengaturan-users.php" class="nav-link <?php echo $page == 'pengaturan_users' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>User</p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="pengaturan-roles.php" class="nav-link <?php echo $page == 'pengaturan_role' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Peran & Hak Akses</p>
              </a>
            </li> -->
            
            <li class="nav-item">
              <a href="aktivitas-laporan.php" class="nav-link">
                <i class="fas fa-cog nav-icon"></i>
                <p>Audit Log</p>
              </a>
            </li>
           
            <li class="nav-item">
              <a href="pengaturan-app.php" class="nav-link <?php echo $page == 'pengaturan_app' ? 'active' : ''; ?>">
                <i class="fas fa-cog nav-icon"></i>
                <p>Aplikasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Slider Login</p>
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

