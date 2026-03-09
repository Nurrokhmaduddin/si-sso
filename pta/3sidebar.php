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
        <li class="nav-item <?php echo in_array($page, ['master_mahasiswa']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['master_mahasiswa']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Master Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="master-mahasiswa.php" class="nav-link <?php echo $page == 'master_mahasiswa' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Mahasiswa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="master-dosen.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dosen & Pembimbing</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="master-dosen.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Admin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="master-dosen.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pejabat Fakultas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="master-dosen.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Language Advisor</p>
              </a>
            </li>
             <li class="nav-item">
              <a href="master-dosen.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sumber Daya</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="master-dosen.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kelompok Peminatan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="master-dosen.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Bidang Keahlian</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="master-dosen.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pengaturan Periode</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="master-dosen.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Media Publikasi/Diseminasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="master-dosen.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rubrik TA (TA Sktipsi, TA RBB, TA Magang, Responsi Magang, Responsi RBB)</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- PROSES AKTIVITAS -->
        <li class="nav-item <?php echo in_array($page, ['taskboard','pengumuman','ta_pendaftaran','ta_bimbingan','ta_pendaftaran_ujian','ta_ujian','ta_publikasi_diseminasi']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['taskboard','pengumuman','ta_pendaftaran','ta_bimbingan','ta_pendaftaran_ujian','ta_ujian','ta_publikasi_diseminasi']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-exchange-alt"></i>
            <p>
              Proses Aktivitas
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <!-- USER (LEVEL 2) -->
            <li class="nav-item"> 
              <a href="taskboard.php" class="nav-link <?php echo $page == 'taskboard' ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-exchange-alt"></i>
                <p>Papan Tugas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pengumuman.php" class="nav-link <?php echo $page == 'pengumuman' ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-exchange-alt"></i>
                <p>Pengumuman</p>
              </a>
            </li>

             <li class="nav-item <?php echo in_array($page, ['ta_pendaftaran']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['ta_pendaftaran','ta_bimbingan','ta_pendaftaran_ujian','ta_ujian','ta_publikasi_diseminasi']) ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-exchange-alt"></i>
                <p>
                  Tugas Akhir
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="ta-pendaftaran.php" class="nav-link <?php echo $page == 'ta_pendaftaran' ? 'active' : ''; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pendaftaran Bimbingan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ta-bimbingan.php" class="nav-link <?php echo $page == 'ta_bimbingan' ? 'active' : ''; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bimbingan TA</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ta-pendaftaran-ujian.php" class="nav-link <?php echo $page == 'ta_pendaftaran_ujian' ? 'active' : ''; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pendaftaran Ujian</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ta-ujian.php" class="nav-link <?php echo $page == 'ta_ujian' ? 'active' : ''; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ujian TA</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ta-publikasi-diseminasi.php" class="nav-link <?php echo $page == 'ta_publikasi_diseminasi' ? 'active' : ''; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Publikasi/Diseminasi</p>
                  </a>
                </li>
              </ul>
            </li>
            

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fas fa-exchange-alt"></i>
                <p>
                  Pelaksanaan Magang
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="aktivitas1-pendaftaran.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pendaftaran Magang</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="aktivitas4-bimbingan-proposal.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bimbingan </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="aktivitas6-pendaftaran-sidang.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pendaftaran Responsi</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="aktivitas7-sidang-ujian.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Responsi Magang</p>
                  </a>
                </li>
              </ul>
            </li>


            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fas fa-exchange-alt"></i>
                <p>
                  Implementasi RBB
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="aktivitas1-pendaftaran.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pendaftaran RBB</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="aktivitas4-bimbingan-proposal.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bimbingan </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="aktivitas6-pendaftaran-sidang.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pendaftaran Responsi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="aktivitas7-sidang-ujian.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Responsi RBB</p>
                  </a>
                </li>
              </ul>
            </li>


          </ul>
        </li>
                


            

      <!-- PROSES AKTIVITAS -->
     <!--  <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fas fa-exchange-alt"></i>
          <p>
            Proses Aktivitas 
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
            <a href="aktivitas3-penentuan-pembimbing.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
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
            <a href="aktivitas5-bimbingan-laporan.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
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
      </li> -->


        <!-- MANAJ AKTIVITAS -->
        <!-- <li class="nav-item">
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
        </li> -->

        <!-- MONITOR AKTIVITAS -->
        <li class="nav-item <?php echo in_array($page, ['monev_ta','monev_penilaian_pembimbing','monev_pustaka_publikasi','monev_pustaka_ta','monev_kinerja_mahasiswa','monev_kinerja_pembimbing','monev_nilai_ujian','monev_nilai_responsi','monev_magang','monev_rbb','monev_ta_publikasi']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['monev_ta','monev_penilaian_pembimbing','monev_pustaka_publikasi','monev_pustaka_ta','monev_kinerja_mahasiswa','monev_kinerja_pembimbing','monev_nilai_ujian','monev_nilai_responsi','monev_magang','monev_rbb','monev_ta_publikasi']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
               Monitoring
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
             <li class="nav-item">
              <a href="monev-ta.php" class="nav-link <?php echo $page == 'monev_ta' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Tugas Akhir</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="monev-ta-publikasi.php" class="nav-link <?php echo $page == 'monev_ta_publikasi' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Publikasi & Diseminasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="monev-magang.php" class="nav-link <?php echo $page == 'monev_magang' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Pelaksanaan Magang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="monev-rbb.php" class="nav-link <?php echo $page == 'monev_rbb' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Implementasi RBB</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="monev-kinerja-pembimbing.php" class="nav-link <?php echo $page == 'monev_kinerja_pembimbing' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>kinerja pembimbing</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="monev-kinerja-mahasiswa.php" class="nav-link <?php echo $page == 'monev_kinerja_mahasiswa' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>kinerja  mahasiswa</p>
              </a>
            </li>
             <!-- <li class="nav-item">
              <a href="monev-pustaka-ta.php" class="nav-link <?php echo $page == 'monev_pustaka_ta' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Pustaka tugas akhir</p>
              </a>
            </li> -->
           <!--  <li class="nav-item">
              <a href="monev-pustaka-publikasi.php" class="nav-link <?php echo $page == 'monev_pustaka_publikasi' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Pustaka publikasi</p>
              </a>
            </li> -->
              <li class="nav-item">
              <a href="monev-penilaian-pembimbing.php" class="nav-link <?php echo $page == 'monev_penilaian_pembimbing' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Penilaian Pembimbing</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="monev-nilai-ujian.php" class="nav-link <?php echo $page == 'monev_nilai_ujian' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>rekap nilai ujian TA</p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="monev-nilai-responsi.php" class="nav-link <?php echo $page == 'monev_nilai_responsi' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>rekap nilai responsi</p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
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
            </li> -->
            






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
        <p>Parameter PTA</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="konfigurasi-loa.php" class="nav-link <?php echo $page == 'konfigurasi_loa' ? 'active' : ''; ?>">
        <i class="far fa-circle nav-icon"></i>
        <p>Template Dokumen (TA,Magang, RBB)</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="konfigurasi-notifikasi.php" class="nav-link <?php echo $page == 'konfigurasi_notifikasi' ? 'active' : ''; ?>">
        <i class="far fa-circle nav-icon"></i>
        <p>Template Notifikasi</p>
      </a>
    </li>
  </ul>
</li>
        <!-- PENGATURAN -->
        <li class="nav-item <?php echo in_array($page, ['pengaturan_user','pengaturan_role']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['pengaturan_user','pengaturan_role']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Pengaturan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- USER (LEVEL 2) -->
             <li class="nav-item <?php echo in_array($page, ['pengaturan_user']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['pengaturan_user']) ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  User
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              <!-- LEVEL 3 -->
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pengaturan-user.php" class="nav-link <?php echo $page == 'pengaturan_user' ? 'active' : ''; ?>">
                    <i class="nav-icon"></i>
                    <p>Data User</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="role-user.php" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Role User</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="reset-password.php" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Reset Password</p>
                  </a>
                </li>
              </ul>

            </li>
            <li class="nav-item">
              <a href="pengaturan-users.php" class="nav-link <?php echo $page == 'pengaturan_user' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pengaturan-roles.php" class="nav-link <?php echo $page == 'pengaturan_role' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Peran & Hak Akses</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="aktivitas-laporan.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Audit Log</p>
              </a>
            </li>
           
            <li class="nav-item">
              <a href="pengaturan-app.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Aplikasi</p>
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