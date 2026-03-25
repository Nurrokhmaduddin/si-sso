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
              <a href="beranda.php" class="nav-link <?php echo $page == 'beranda' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Superadmin</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="beranda-admin.php" class="nav-link <?php echo $page == 'beranda_admin' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Admin</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="beranda-manajer.php" class="nav-link <?php echo $page == 'beranda_manajer' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Manajer</p>
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

        <?php 
// Misal: master-mahasiswa.php sudah punya
// $page = 'master_mahasiswa';
        ?>

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

            

           <!--  <li class="nav-item">
              <a href="master-prodi.php" class="nav-link <?php echo $page == 'master_prodi' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Program Studi</p>
              </a>
            </li> -->
 <li class="nav-item">
              <a href="master-tahun.php" class="nav-link <?php echo $page == 'master_tahun' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Tahun</p>
              </a>
            </li>
             <li class="nav-item">
              <a href="master-semester.php" class="nav-link <?php echo $page == 'master_semester' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Semester</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="master-jenjang.php" class="nav-link <?php echo $page == 'master_jenjang' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Jenjang</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="master-jalur.php" class="nav-link <?php echo $page == 'master_jalur' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Jalur Kelas</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="master-model.php" class="nav-link <?php echo $page == 'master_model' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Tipe Kelas</p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="master-peminatan.php" class="nav-link <?php echo $page == 'master_peminatan' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Konsentrasi Peminatan</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="master-mahasiswa.php" class="nav-link <?php echo $page == 'master_mahasiswa' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Mahasiswa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="master-dosen.php" class="nav-link <?php echo $page == 'master_dosen' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Dosen</p>
              </a>
            </li>

            

          </ul>
        </li>



        <!-- PEMETAAN OEB -->
       <li class="nav-item <?php echo in_array($page, ['pemetaan_kurikulum','pemetaan_matakuliah','pemetaan_kurikulum_mk','pemetaan_set','pemetaan_cpl','pemetaan_ik','pemetaan_cpmk','pemetaan_zend']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['pemetaan_kurikulum','pemetaan_matakuliah','pemetaan_kurikulum_mk','pemetaan_set','pemetaan_cpl','pemetaan_ik','pemetaan_cpmk','pemetaan_zend']) ? 'active' : ''; ?>">
          
            <i class="nav-icon fas fa-project-diagram"></i>
            <p>
              Pemetaan OBE
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="pemetaan-kurikulum.php" class="nav-link <?php echo $page == 'pemetaan_kurikulum' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Kurikulum</p>
              </a>
            </li>


            <li class="nav-item">
              <a href="pemetaan-matakuliah.php" class="nav-link <?php echo $page == 'pemetaan_matakuliah' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Mata Kuliah</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="pemetaan-matakuliah2.php" class="nav-link <?php echo $page == 'pemetaan_kurikulum_mk' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Mata Kuliah</p>
              </a>
            </li> -->

            

            <li class="nav-item">
              <a href="pemetaan-cpl.php" class="nav-link <?php echo $page == 'pemetaan_cpl' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar CPL</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="pemetaan-ik.php" class="nav-link <?php echo $page == 'pemetaan_ik' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar IK</p>
              </a>
            </li>

            <!-- <li class="nav-item">
              <a href="pemetaan-cpmk.php" class="nav-link <?php echo $page == 'pemetaan_cpmk' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar CPMK</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="pemetaan-cpmk2.php" class="nav-link <?php echo $page == 'pemetaan_cpmk' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar CPMK</p>
              </a>
            </li>
<li class="nav-item">
              <a href="pemetaan-setpemetaan.php" class="nav-link <?php echo $page == 'pemetaan_set' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Set Pemetaan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pemetaan-zend.php" class="nav-link <?php echo $page == 'pemetaan_zend' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Struktur Pemetaan</p>
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

            <li class="nav-item">
              <a href="perkuliahan-pengumuman.php" class="nav-link <?php echo $page == 'pengumuman' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Pengumuman</p>
              </a>
            </li>
<li class="nav-item">
              <a href="master-periode.php" class="nav-link <?php echo $page == 'master_periode' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Periode Akademik</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="perkuliahan-kelas-perkuliahan.php" class="nav-link <?php echo $page == 'kelas_perkuliahan' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Kelas Perkuliahan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="perkuliahan-kelas-konversi.php" class="nav-link <?php echo $page == 'kelas_konversi' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Kelas Konversi</p>
              </a>
            </li>

            <!-- <li class="nav-item">
              <a href="perkuliahan-kelas-remidial.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kelas Remidial</p>
              </a>
            </li> -->

            <!-- <li class="nav-item">
              <a href="perkuliahan-rps.php" class="nav-link <?php echo $page == 'rps' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>RPS Mata Kuliah</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="perkuliahan-soal-ujian.php" class="nav-link <?php echo $page == 'soal_ujian' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Soal Ujian</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="perkuliahan-nilai-cpmk.php" class="nav-link <?php echo $page == 'nilai_cpmk' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Nilai CPMK</p>
              </a>
            </li> -->

            <li class="nav-item">
              <a href="perkuliahan-portofolio-kelas.php" class="nav-link <?php echo $page == 'portofolio_kelas' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Portofolio Kelas</p>
              </a>
            </li>
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

            <!-- <li class="nav-item">
              <a href="monev-status-mahasiswa.php" class="nav-link <?php echo $page == 'status_mahasiswa' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Status Mahasiswa</p>
              </a>
            </li> -->

            <!-- <li class="nav-item">
              <a href="monev-status-pemetaan.php" class="nav-link <?php echo $page == 'status_pemetaan' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Mapping Kurikulum</p>
              </a>
            </li> -->

            <li class="nav-item">
              <a href="monev-rekap-kelas-.php" class="nav-link <?php echo $page == 'monev_kelas' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Monev Kelas</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="monev-rekap-kelas.php" class="nav-link <?php echo $page == 'monev_kelas' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Monev Kelas Setahun</p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="monev-rekap-semester-.php" class="nav-link <?php echo $page == 'monev_semester' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Monev Semester CPMK</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="monev-rekap-semester2-.php" class="nav-link <?php echo $page == 'monev_semester' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Monev Semester IK</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="monev-rekap-semester3-.php" class="nav-link <?php echo $page == 'monev_semester3' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Monev Semester</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="monev-rekap-cpmk.php" class="nav-link <?php echo $page == 'monev_cpmk' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Monev MK Setahun</p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="monev-rekap-cpl.php" class="nav-link <?php echo $page == 'monev_cpl' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Rekapitulasi CPL</p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="monev-rekap-cpl.php" class="nav-link <?php echo $page == 'monev_cpmk' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Monev Semester</p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="monev-rekap-tahunan-.php" class="nav-link <?php echo $page == 'monev_tahunan' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Monev Tahunan</p>
              </a>
            </li> -->

<!-- 
            <li class="nav-item">
              <a href="rekap-cpmk.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rekapitulasi CPMK</p>
              </a>
            </li> -->


           

            <!-- <li class="nav-item">
              <a href="monev-cpl-individual.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Monev CPL Mahasiswa</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="monev-rekap-individual-.php" class="nav-link <?php echo $page == 'monev_individu' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Monev Individu</p>
              </a>
            </li>

           <!--  <li class="nav-item">
              <a href="monev-cpl-angkatan.php" class="nav-link <?php echo $page == 'monev_angkatan' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Monev CPL Angkatan</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="monev-rekap-angkatan-.php" class="nav-link <?php echo $page == 'monev_angkatan' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Monev Angkatan</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="monev-rekap-yudisium-.php" class="nav-link <?php echo $page == 'monev_yudisium' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Monev Yudisium</p>
              </a>
            </li>

            

          </ul>
        </li>

      

 <!-- PENGEMBANGAN OBE -->
        <li class="nav-item <?php echo in_array($page, ['progress_kelas','progress_mk','progress_pemetaan','progress_cpl','evaluasi_rapat','evaluasi_pembelajaran','evaluasi_kemajuan','evaluasi_lulusan','evaluasi_kurikulum','evaluasi_prodi']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['progress_kelas','progress_mk','progress_pemetaan','progress_cpl','evaluasi_rapat','evaluasi_pembelajaran','evaluasi_kemajuan','evaluasi_lulusan','evaluasi_kurikulum','evaluasi_prodi']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-chart-line"></i>
            <p>
              Pengembangan OBE
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <!-- <li class="nav-item">
              <a href="evaluasi-pembelajaran.php" class="nav-link <?php echo $page == 'evaluasi_pembelajaran' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Evaluasi Pembelajaran</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="evaluasi-kemajuan.php" class="nav-link <?php echo $page == 'evaluasi_kemajuan' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Evaluasi Kemajuan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="evaluasi-lulusan.php" class="nav-link <?php echo $page == 'evaluasi_lulusan' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Evaluasi Lulusan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="evaluasi-kurikulum.php" class="nav-link <?php echo $page == 'evaluasi_kurikulum' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Evaluasi Kurikulum</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="evaluasi-prodi.php" class="nav-link <?php echo $page == 'evaluasi_prodi' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Evaluasi & Action Plan</p>
              </a>
            </li>
             <li class="nav-item">
              <a href="evaluasi-rapat.php" class="nav-link <?php echo $page == 'evaluasi_rapat' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Keputusan & Kebijakan</p>
              </a>
            </li>

            <!-- <li class="nav-item">
              <a href="progres-pemetaan.php" class="nav-link <?php echo $page == 'progress_pemetaan' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Progres Pemetaan</p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="progres-kelas-semester.php" class="nav-link <?php echo $page == 'progress_kelas' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Progres kelas</p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="progres-mk-semester.php" class="nav-link <?php echo $page == 'progress_mk' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Progres MK</p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="progres-cpl-semester.php" class="nav-link <?php echo $page == 'progress_cpl' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Progres CPL </p>
              </a>
            </li> -->
            
           

            <!-- <li class="nav-item">
              <a href="rekap-status-mahasiswa.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Eval CPL oleh Prodi</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="rekap-status-pemetaan.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Eval MK oleh Dosen</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="evaluasi-edom.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Eval Dosen oleh Mhs</p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="progres-perwalian.php" class="nav-link <?php echo $page == 'progress_perwalian' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Perwalian</p>
              </a>
            </li> -->
            

          


          </ul>
        </li>

       <!--  <li class="nav-item">
          <a href="../menu.php" class="nav-link">
            <i class="nav-icon fas fa-history"></i>
            <p>Audit Aktivitas</p>
          </a>
        </li> -->

<!-- KONFIGURASI -->
<li class="nav-item <?php echo in_array($page, ['konfigurasi_loa','konfigurasi_notifikasi','konfigurasi_kuesioner']) ? 'menu-open' : ''; ?>">
  <a href="#" class="nav-link <?php echo in_array($page, ['konfigurasi_loa','konfigurasi_notifikasi','konfigurasi_kuesioner']) ? 'active' : ''; ?>">
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
        <p>Parameter LOA</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="konfigurasi-Kuesioner.php" class="nav-link <?php echo $page == 'konfigurasi_kuesioner' ? 'active' : ''; ?>">
        <i class="far fa-circle nav-icon"></i>
        <p>Template Refleksi</p>
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
        <li class="nav-item <?php echo in_array($page, ['pengaturan_user','pengaturan_role','pengaturan_app','pengaturan_feedback','pengaturan_log']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['pengaturan_user','pengaturan_role','pengaturan_app','pengaturan_feedback','pengaturan_log']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Pengaturan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- USER (LEVEL 2) -->
             <li class="nav-item <?php echo in_array($page, ['g']) ? 'menu-open' : ''; ?>">
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
              <a href="pengaturan-log.php" class="nav-link <?php echo $page == 'pengaturan_log' ? 'active' : ''; ?>">
                <i class="fas fa-cog nav-icon"></i>
                <p>Audit Log</p>
              </a>
            </li>
            <!-- USER (LEVEL 2) -->
             <li class="nav-item <?php echo in_array($page, ['g']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['pengaturan_feedback']) ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Audit Feedback
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <!-- LEVEL 3 -->
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pengaturan-feedback.php" class="nav-link <?php echo $page == 'pengaturan_feedback' ? 'active' : ''; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Feedback</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="pengaturan-feedback1.php" class="nav-link <?php echo $page == 'pengaturan_role' ? 'active' : ''; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Analisis Feedback</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pengaturan-feedback2.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Status Penanganan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pengaturan-feedback3.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kategori Feedback</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pengaturan-feedback4.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Rekap Feedback</p>
                  </a>
                </li>
              </ul>

            </li>
            <li class="nav-item">
              <a href="pengaturan-notifikasi.php" class="nav-link">
                <i class="fas fa-cog nav-icon"></i>
                <p>Daftar Notifikasi</p>
              </a>
            </li>
           
            <li class="nav-item">
              <a href="pengaturan-app.php" class="nav-link <?php echo $page == 'pengaturan_app' ? 'active' : ''; ?>">
                <i class="fas fa-cog nav-icon"></i>
                <p>Aplikasi</p>
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

