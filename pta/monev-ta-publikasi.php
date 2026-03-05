<?php $page = 'monev_ta_publikasi'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev Tugas Akhir (Publikasi & Diseminasi)
      <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-info-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Keterangan singkat cara baca informasi halaman ini</p>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">
          <!-- ========== CARD : Filter & Export ========== -->
          <div class="card card-outline card-info">
            <div class="card-body ">
              <div class="row">
                <div class="col-md-6">
                  <b>Periode Akademik:</b> Semua &nbsp;
                </div> 
                <div class="col-md-6">
                  <b>Status:</b> Semua  &nbsp;
                </div> 
                
                
              </div>
            </div>
            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
              </div>
            </div>
          </div>


 <!-- ========== CARD 3: KPI row ========== --> 
  <style>
    body { background: #f4f6f9; }
    .kpi { border-radius: 10px; padding: 18px; color: #fff; }
    .kpi .big { font-size: 1.6rem; font-weight:700; }
    .kpi .small { font-size: 0.85rem; opacity: .9; }
    .card { border-radius:10px; }
    .status-dot { display:inline-block; width:10px; height:10px; border-radius:50%; margin-right:6px; vertical-align:middle; }
    .status-green { background:#28a745; }
    .status-yellow { background:#ffc107; }
    .status-red { background:#dc3545; }
    .ewstable td, .ewstable th { vertical-align: middle; }
    .table-fixed-height { max-height: 360px; overflow:auto; }
  </style>       
<div class="row g-3 mb-3">

  <div class="col-md-3">
    <div class="kpi bg-primary text-white">
      <div class="small">Total mahasiswa </div>
      <div class="big" id="mhsTahun1">124</div>
      <div class="small">pembimbingan TA</div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="kpi text-white" style="background:#20c997;">
      <div class="small">Rata-rata TA (hari)</div>
      <div class="big" id="mhsTahun2">145</div>
      <div class="small">durasi penyelesaian TA</div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="kpi text-white" style="background:#ff7f0e;">
      <div class="small">Mahasiswa Pasif</div>
      <div class="big" id="mhsTahun3">98</div>
      <div class="small">Tidak bimbingan > 30 hari</div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="kpi bg-danger text-white">
      <div class="small">Mahasiswa Macet</div>
      <div class="big" id="mhsTahun4">4</div>
      <div class="small">Melebihi batas periode</div>
    </div>
  </div>

</div>
 <!-- TAB NAV (Semester) -->
           <ul class="nav nav-tabs">
            <li class="nav-item" onclick="window.location='monev-ta.php'"><a class="nav-link active">Berlangsung</a></li>
            <li class="nav-item" onclick="window.location='monev-ta2.php'"><a class="nav-link ">Selesai</a></li>
          </ul>
  <!-- ========== CARD : Chart ========== --> 
  <div class="card">
    <div class="card-header">
      <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i> Sebaran Jumlah Mahasiswa</h5>
      <div class="card-tools">
        <!-- <small class="text-muted"> Terpilih</small> -->
      </div>
    </div>

    <div class="card-body chart-container d-flex flex-column">

      <div class="flex-grow-1">
        <canvas id="chartMasaStudi" height="70"></canvas>
      </div>            

    </div>
  </div>
  <!-- ========== CARD : Chart ========== --> 
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i> Distribusi Mahasiswa Berlangsung TA </h5>
    <div class="card-tools">
      <small class="text-muted">berdasarkan angkatan</i></h5></small>
    </div>
  </div>
  <div class="card-body">

   
    <div class="row">

      <!-- KIRI: Pie Chart -->
      <div class="col-lg-6">
        <canvas id="chartLulusanBatch"  ></canvas>

      </div>
      <!-- KANAN -->
      <div class="col-lg-6 ">
        <!-- <canvas id="chartCPL1" width="100%" height="50" class="mb-4"></canvas> -->
        <!-- <canvas id="stackedCPMKChart" width="100%" height="50" class="mb-4"></canvas> -->
        <br><br>
        <!-- <h6><b>Tabel Performa Batch Yudisium</b></h6> -->
        <table class="table table-bordered table-striped table-sm ">
          <thead class=" text-center">
            <tr>
              <th>No</th>
              <th>Indikator</th>
              <th>Berlangsung</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td>1</td>
              <td >Jumlah Mahasiswa</td>Total jumlah bimbingan
              <td>120</td>
            </tr>
            <tr>
              <td>2</td>
              <td >Jumlah Pembimbing</td>
              <td>40</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Selesai Tepat Waktu (< 90 hari)</td>
              <td>57(72%)</td>
            </tr>     
            Yang sering luput:

Lama dari judul ke seminar proposal

Lama dari proposal ke sidang

Total durasi TA

Perbandingan dengan rata-rata prodi

Ini berguna untuk:

Evaluasi dosen

Evaluasi sistem

Evaluasi beban mahasiswa   
          </tbody>
          <!-- <tfoot>
            <tr>
              <td colspan="4">
                <strong>Cara membaca tabel:</strong><br>
                Remedial tinggi didefinisikan sebagai mahasiswa yang pernah mengulang ≥ 3 Mata Kuliah atau > 20% MK selama masa studi.
                Angka "Persentase" menunjukkan proporsi dari total 80 lulusan pada Batch Jan 2027.<br>
                Rata-rata jumlah remedial per lulusan: <strong>1.8 MK</strong>.
              </td>
            </tr>
          </tfoot> -->
        </table>

      </div>
    </div>
  </div>
</div>

  <!-- ========== CARD : Pustaka ========== --> 
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i> Pustaka Publikasi/Diseminasi </h5>
    <div class="card-tools">
      <small class="text-muted">berdasarkan </i></h5></small>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="tablePublikasi" class="table table-bordered table-striped align-middle">
        <thead class="text-center">
            <tr>
              <th>No</th>
              <th>Tahun Akademik</th>
              <th>Jenis Publikasi/Diseminasi</th>
              <th>Jumlah Publikasi</th>
              <th>Tingkat Keberhasilan</th>
              <th>Media Terpopuler</th>
              <th>Kategori Media Terpopuler</th>
              <th>Sub Kategori Media Terpopuler</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">1</td>
              <td>2025/Ganjil</td>
              <td>Magang</td>
              <td class="text-center">133</td>
              <td class="text-center">0.00 %</td>
              <td class="text-center">-</td>
              <td class="text-center">-</td>
              <td class="text-center">-</td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td>2025/Ganjil</td>
              <td>Magang</td>
              <td class="text-center">3</td>
              <td class="text-center">33.33 %</td>
              <td>Jurnal</td>
              <td>Jurnal Internasional</td>
              <td>Terindeks EBSCO/DOAJ/Proquest/Copernicus/IEEE</td>
            </tr>
            <tr>
              <td class="text-center">3</td>
              <td>2025/Ganjil</td>
              <td>Magang</td>
              <td class="text-center">1</td>
              <td class="text-center">100.00 %</td>
              <td>Jurnal</td>
              <td>Jurnal Nasional</td>
              <td>Sinta 2</td>
            </tr>
            <tr>
              <td class="text-center">4</td>
              <td>2025/Ganjil</td>
              <td>Magang</td>
              <td class="text-center">16</td>
              <td class="text-center">56.25 %</td>
              <td>Jurnal</td>
              <td>Jurnal Nasional</td>
              <td>Sinta 3</td>
            </tr>
            <tr>
              <td class="text-center">5</td>
              <td>2025/Ganjil</td>
              <td>Magang</td>
              <td class="text-center">7</td>
              <td class="text-center">28.57 %</td>
              <td>Jurnal</td>
              <td>Jurnal Nasional</td>
              <td>Sinta 4</td>
            </tr>
            <tr>
              <td class="text-center">6</td>
              <td>2025/Ganjil</td>
              <td>RBB</td>
              <td class="text-center">12</td>
              <td class="text-center">0.00 %</td>
              <td class="text-center">-</td>
              <td class="text-center">-</td>
              <td class="text-center">-</td>
            </tr>
            <tr>
              <td class="text-center">7</td>
              <td>2025/Ganjil</td>
              <td>RBB</td>
              <td class="text-center">1</td>
              <td class="text-center">100.00 %</td>
              <td>Jurnal</td>
              <td>Jurnal Nasional</td>
              <td>Sinta 3</td>
            </tr>
            <tr>
              <td class="text-center">8</td>
              <td>2025/Ganjil</td>
              <td>RBB</td>
              <td class="text-center">1</td>
              <td class="text-center">100.00 %</td>
              <td>Pameran Bisnis/Produk</td>
              <td>Pameran Skala Nasional</td>
              <td>Penjualan/Display Produk/Demonstrasi/Interaksi Bisnis</td>
            </tr>
            <tr>
              <td class="text-center">9</td>
              <td>2025/Ganjil</td>
              <td>Skripsi</td>
              <td class="text-center">118</td>
              <td class="text-center">0.00 %</td>
              <td class="text-center">-</td>
              <td class="text-center">-</td>
              <td class="text-center">-</td>
            </tr>
            <tr>
              <td class="text-center">10</td>
              <td>2025/Ganjil</td>
              <td>Skripsi</td>
              <td class="text-center">1</td>
              <td class="text-center">100.00 %</td>
              <td>Jurnal</td>
              <td>Jurnal Internasional</td>
              <td>Terindeks EBSCO/DOAJ/Proquest/Copernicus/IEEE</td>
            </tr>
          </tbody>
      </table>
    </div>
  </div>
  </div>
</div>

<!-- ========== CARD : Tabel  Granular ========== -->
<div class="container-fluid mt-4">

  <!-- Card -->
  <div class="card shadow-sm border-0">

    <!-- Card Header -->
    <div class="card-header bg-white border-bottom">
      <h5 class="mb-0 fw-semibold">Pustaka Publikasi / Diseminasi</h5>
    </div>

    <!-- Card Body -->
    <div class="card-body">

      <div class="table-responsive">
        <table id="tablePustakaPublikasi" class="table table-bordered table-striped align-middle">

          <thead class="table-light text-center">
            <tr>
              <th>No</th>
              <th>Tahun Akademik</th>
              <th>Judul TA</th>
              <th>Dosen Pembimbing</th>
              <th>Mahasiswa</th>
              <th>Jenis TA</th>
              <th>Media</th>
              <th>Kategori Media</th>
              <th>Sub Kategori Media</th>
              <th>Nama Media</th>
              <th>Dokumen</th>
              <th>Konversi Nilai</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>

            <tr>
              <td class="text-center">711</td>
              <td>2024 - Genap</td>
              <td>Integrating Trust and Engagement to Improve Customer Experience: Advancing Trust Commitment Theory within the Context of Chatbot Industry</td>
              <td>Endy Gunanto Marsasi, Dr., R., M.M.</td>
              <td>21311587<br>Sherly Indira Andaresti</td>
              <td class="text-center">Skripsi</td>
              <td>Jurnal</td>
              <td>Jurnal Nasional</td>
              <td>Sinta 3</td>
              <td>Journal MEC-J (Management and Economics Journal)</td>
              <td class="text-center">-</td>
              <td class="text-center fw-semibold">A</td>
              <td class="text-center">
                <button class="btn btn-sm btn-primary">Detail</button>
              </td>
            </tr>

            <tr>
              <td class="text-center">712</td>
              <td>2024 - Genap</td>
              <td>IMPLEMENTASI STRATEGI PENINGKATAN KOMPETENSI SUMBER DAYA MANUSIA PADA DINAS SOSIAL PROVINSI SULAWESI</td>
              <td>Muhammad Bakr Muhlison, Drs., Dipl.Mgt.</td>
              <td>19311256<br>Wahyu Praja Putra</td>
              <td class="text-center">Magang</td>
              <td colspan="4" class="text-center text-muted">-</td>
              <td class="text-center">-</td>
              <td class="text-center">-</td>
              <td class="text-center">
                <button class="btn btn-sm btn-primary">Detail</button>
              </td>
            </tr>

            <tr>
              <td class="text-center">713</td>
              <td>2024 - Genap</td>
              <td>Job Design Ideal Menurut Generasi X dan Generasi Y: Studi Kombinasi Pandangan Dua Generasi pada Berbagai Tempat Kerja</td>
              <td>Jaya Addin Linando, S.E., MBA., Dr.rer.soc.oec.</td>
              <td>19311535<br>Amellya Candra Dewi Fatma Wardani</td>
              <td class="text-center">Skripsi</td>
              <td>Jurnal</td>
              <td>Jurnal Internasional</td>
              <td>Terindeks EBSCO/DOAJ/Proquest/Copernicus/IEEE</td>
              <td>Asian Journal of Management Entrepreneurship and Social Science (AJMESC)</td>
              <td class="text-center">-</td>
              <td class="text-center fw-semibold">A</td>
              <td class="text-center">
                <button class="btn btn-sm btn-primary">Detail</button>
              </td>
            </tr>

            <tr>
              <td class="text-center">714</td>
              <td>2024 - Genap</td>
              <td>Analisis Strategi Pemasaran pada Efektivitas Penjualan Produk Kredit Perbankan di PT BPR Bhakti Daya Ekonomi KPO Pakem</td>
              <td>Alldila Nadhira Ayu Setyaning, S.E., MBA.</td>
              <td>21311022<br>Rafli Putra Hidayat</td>
              <td class="text-center">Magang</td>
              <td>Jurnal</td>
              <td>Jurnal Nasional</td>
              <td>Sinta 4</td>
              <td>Community Engagement and Emergence Journal (CEEJ)</td>
              <td class="text-center">-</td>
              <td class="text-center fw-semibold">A</td>
              <td class="text-center">
                <button class="btn btn-sm btn-primary">Detail</button>
              </td>
            </tr>

            <tr>
              <td class="text-center">715</td>
              <td>2024 - Genap</td>
              <td>Anslisis Efektivitas Metode Rating dalam Penentuan Lokasi Toko Baru Alfamart di Kabupaten Rembang</td>
              <td>Nabila Kharimah Vedy, S.I.A, M.S.M</td>
              <td>21311342<br>Fadly Mabrurisna</td>
              <td class="text-center">Magang</td>
              <td>Jurnal</td>
              <td>Jurnal Internasional</td>
              <td>Terindeks EBSCO/DOAJ/Proquest/Copernicus/IEEE</td>
              <td>Formosa Journal of Multidisciplinary Research (FJMR)</td>
              <td class="text-center">-</td>
              <td class="text-center fw-semibold">A</td>
              <td class="text-center">
                <button class="btn btn-sm btn-primary">Detail</button>
              </td>
            </tr>

            <tr>
              <td class="text-center">716</td>
              <td>2024 - Genap</td>
              <td>Peranan Kemajuan Teknologi Informasi Dalam Digital Marketing E-Commerce Terhadap Minat Beli Konsumen</td>
              <td>Raden Roro Ratna Roostika, S.E., MAC., Ph.D</td>
              <td>21311341<br>Alwiyatun Syoqifah</td>
              <td class="text-center">Skripsi</td>
              <td colspan="4" class="text-center text-muted">-</td>
              <td class="text-center">-</td>
              <td class="text-center">-</td>
              <td class="text-center">
                <button class="btn btn-sm btn-primary">Detail</button>
              </td>
            </tr>

            <tr>
              <td class="text-center">717</td>
              <td>2024 - Genap</td>
              <td>PERAN FUNGSI HUMAN CAPITAL DALAM MENINGKATKAN SUMBER DAYA MANUSIA PADA PT. PERTAMINA PATRA NIAGA</td>
              <td>Muafi, Prof., Dr., S.E., M.Si.</td>
              <td>21311422<br>Arya Julizar Saputra</td>
              <td class="text-center">Magang</td>
              <td colspan="4" class="text-center text-muted">-</td>
              <td class="text-center">-</td>
              <td class="text-center">-</td>
              <td class="text-center">
                <button class="btn btn-sm btn-primary">Detail</button>
              </td>
            </tr>

            <tr>
              <td class="text-center">718</td>
              <td>2024 - Genap</td>
              <td>Layanan Memikat, Harga Bersahabat Studi Loyalitas Konsumen Mixue</td>
              <td>Alldila Nadhira Ayu Setyaning, S.E., MBA.</td>
              <td>18311282<br>Zidhan Satya Yudha</td>
              <td class="text-center">Skripsi</td>
              <td>Jurnal</td>
              <td>Jurnal Nasional</td>
              <td>Tidak Terindeks Sinta</td>
              <td>Selekta Mahasiswa</td>
              <td class="text-center">-</td>
              <td class="text-center fw-semibold">B+</td>
              <td class="text-center">
                <button class="btn btn-sm btn-primary">Detail</button>
              </td>
            </tr>

            <tr>
              <td class="text-center">719</td>
              <td>2024 - Genap</td>
              <td>IMPLEMENTASI STRATEGI BAURAN PEMASARAN DAN PROGRAM LOYALITAS KONSUMEN UNTUK MENINGKATKAN PENJUALAN PRODUK DAN MEMPERTAHANKAN LOYALITAS KONSUMEN PT SEKAR BENGAWAN</td>
              <td>Arif Hartono, S.E., M.Ec., Ph.D.</td>
              <td>21311001<br>Wirayuda Tamaam Setyo Aji</td>
              <td class="text-center">Magang</td>
              <td>Jurnal</td>
              <td>Jurnal Nasional</td>
              <td>Sinta 3</td>
              <td>IIJSE</td>
              <td class="text-center">-</td>
              <td class="text-center fw-semibold">A</td>
              <td class="text-center">
                <button class="btn btn-sm btn-primary">Detail</button>
              </td>
            </tr>

            <tr>
              <td class="text-center">720</td>
              <td>2024 - Genap</td>
              <td>Analisis Interaksi Media Sosial Terhadap Niat Membeli dan Keterlibatan Perilaku: Peran Mediasi Kredibilitas Sumber, Homofili, dan Kualitas Konten (Studi Pada Konsumen Sepatu Vans)</td>
              <td>Raden Roro Ratna Roostika, S.E., MAC., Ph.D</td>
              <td>19311239<br>Hepy Hendarto</td>
              <td class="text-center">Skripsi</td>
              <td>Jurnal</td>
              <td>Jurnal Nasional</td>
              <td>Sinta 3</td>
              <td>JURNAL LOCUS PENELITIAN DAN PENGABDIAN</td>
              <td class="text-center">-</td>
              <td class="text-center fw-semibold">A</td>
              <td class="text-center">
                <button class="btn btn-sm btn-primary">Detail</button>
              </td>
            </tr>

          </tbody>

        </table>
      </div>

    </div>
  </div>

</div>

<!-- ========== CARD : Tabel  Granular ========== -->
<div class="card">
  <div class="card-header d-flex align-items-center">
    <h5 class="card-title mb-0">Daftar Mahasiswa Berlangsung TA</h5>    
    
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm datatables1">
        <thead>
          <tr class="text-uppercase text-center">
            <th width="5px">No.</th>
            <th>Username</th>
            <th>DisplayName</th>
            <th>Email/Nomor HP</th>
            <th>Angkatan</th>
            <th>Jalur/Jurusan</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td class="text-center">1</td>
            <td>19312137</td>
            <td>Pramita Widyadari</td>
            <td>pramita.widyadari@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-info">Aktif</span></td>
            <td class="text-center">
              <button type="button" class="btn btn-sm btn-outline-warning"><i class="fas fa-key"></i></button>
              <button type="button" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
              <button type="button" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
            </td>
          </tr>

          <tr>
            <td class="text-center">2</td>
            <td>19312376</td>
            <td>Ho Aldika Novaldy Sumampow</td>
            <td>aldika.sumampow@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-warning">Cuti</span></td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-info" onclick="window.location.href='monev-rekap-individual-detail.php' " ><i class="fas fa-info-circle"></i></button>
              <button class="btn btn-sm btn-outline-primary"><i class="fas fa-upload"></i></button>
              <button class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></button>
            </td>
          </tr>

          <tr>
            <td class="text-center">3</td>
            <td>19312406</td>
            <td>Annisa Regita Sintowati</td>
            <td>annisa.sintowati@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-danger">Skors</span></td>
            <td class="text-center">
              <div class="btn-group">
                <a href="portfolio_cpmk_detail2.php" target="_blank" class="btn btn-sm btn-outline-info">
                  <i class="fas fa-external-link-alt"></i> View
                </a>
                <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-trash text-danger"></i> Hapus</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td class="text-center">4</td>
            <td>19312418</td>
            <td>Claudia Monica Aditama</td>
            <td>claudia.aditama@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-danger">Drop Out</span></td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-warning">🔑</button>
            </td>
          </tr>
          <tr>

            <td class="text-center">5</td>
            <td>19312424</td>
            <td>Filza Aliyah Tasya</td>
            <td>filza.tasya@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering IP</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-danger">Passed Out</span></td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-warning">🔑</button>
            </td>
          </tr>

          <tr>
            <td class="text-center">6</td>
            <td>19312424</td>
            <td>Filza Aliyah Tasya</td>
            <td>filza.tasya@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-success">Lulus</span></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" 
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i> Action
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit Link</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt text-danger"></i> Hapus Data</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-upload text-success"></i> Upload File</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="portfolio_cpmk_detail2.php" target="_blank">
                  <i class="fas fa-external-link-alt text-info"></i> View Link</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-download text-success"></i> Download File</a></li>
                </ul>
              </div>
            </td>
          </tr>
<tr>
            <td class="text-center">7</td>
            <td>19312424</td>
            <td>Filza Aliyah Tasya</td>
            <td>filza.tasya@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-success">Lulus</span></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" 
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i> Action
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit Link</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt text-danger"></i> Hapus Data</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-upload text-success"></i> Upload File</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="portfolio_cpmk_detail2.php" target="_blank">
                  <i class="fas fa-external-link-alt text-info"></i> View Link</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-download text-success"></i> Download File</a></li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center">8</td>
            <td>19312424</td>
            <td>Filza Aliyah Tasya</td>
            <td>filza.tasya@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-success">Lulus</span></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" 
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i> Action
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit Link</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt text-danger"></i> Hapus Data</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-upload text-success"></i> Upload File</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="portfolio_cpmk_detail2.php" target="_blank">
                  <i class="fas fa-external-link-alt text-info"></i> View Link</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-download text-success"></i> Download File</a></li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center">9</td>
            <td>19312424</td>
            <td>Filza Aliyah Tasya</td>
            <td>filza.tasya@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-success">Lulus</span></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" 
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i> Action
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit Link</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt text-danger"></i> Hapus Data</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-upload text-success"></i> Upload File</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="portfolio_cpmk_detail2.php" target="_blank">
                  <i class="fas fa-external-link-alt text-info"></i> View Link</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-download text-success"></i> Download File</a></li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center">10</td>
            <td>19312424</td>
            <td>Filza Aliyah Tasya</td>
            <td>filza.tasya@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-success">Lulus</span></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" 
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i> Action
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit Link</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt text-danger"></i> Hapus Data</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-upload text-success"></i> Upload File</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="portfolio_cpmk_detail2.php" target="_blank">
                  <i class="fas fa-external-link-alt text-info"></i> View Link</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-download text-success"></i> Download File</a></li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center">11</td>
            <td>19312424</td>
            <td>Filza Aliyah Tasya</td>
            <td>filza.tasya@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-success">Lulus</span></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" 
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i> Action
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit Link</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt text-danger"></i> Hapus Data</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-upload text-success"></i> Upload File</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="portfolio_cpmk_detail2.php" target="_blank">
                  <i class="fas fa-external-link-alt text-info"></i> View Link</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-download text-success"></i> Download File</a></li>
                </ul>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>












        </div>
      </div>
    </div>
  </section>
  </div>
  <!-- /.content-wrapper -->

<?php include('4footer.php'); ?>

<!-- Modal Filter -->
<div class="modal fade" id="modalFilter" tabindex="-1" aria-labelledby="modalFilterLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="modalFilterLabel">Filter Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="GET">

        <div class="modal-body">
          <!-- Catatan penting -->
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Halaman ini otomatis menampilkan data angkatan terbaru saat pertama dibuka. Data awal yang tampil adalah angkatan [2025].
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
            </select>
          </div>
       
       </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Terapkan Filter</button>
        </div>

      </form>
    </div>
  </div>
</div>



<!-- Modal Bantuan -->
<div class="modal fade" id="modalBantuan" tabindex="-1" aria-labelledby="modalBantuanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan Tabel</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Ringkasan capaian CPL per Individu Mahasiswa, perkembangan, peringatan dini (EWS), disajikan dalam bentuk grafik dan tabel (Mockup data statis)
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<script>
const ctx = document.getElementById('chartMasaStudi').getContext('2d');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            'Tahap 6+',
            'Tahap 5',
            'Tahap 4',
            'Tahap 3',
            'Tahap 2',
            'Tahap 1'
        ],
        datasets: [
            {
                label: 'Mahasiswa Aktif',
                data: [8, 20, 50, 40, 20, 8], // contoh data statis
                backgroundColor: 'rgba(13,110,253,0.8)', // primary
                borderColor: 'rgba(13,110,253,1)',
                borderWidth: 1
            },
            {
                label: 'Mahasiswa Pasif',
                data: [6, 15, 20, 15, 3, 1], // contoh data statis
                backgroundColor: 'rgba(255,193,7,0.8)', // warning
                borderColor: 'rgba(255,193,7,1)',
                borderWidth: 1
            },
            {
                label: 'Mahasiswa Macet',
                data: [6, 10, 10, 5, 2, 1], // contoh data statis
                backgroundColor: 'rgba(220,53,69,0.8)', // danger
                borderColor: 'rgba(220,53,69,1)',
                borderWidth: 1
            }
        ]
    },
    options: {
        indexAxis: 'y', // horizontal
        responsive: true,
        plugins: {
            legend: {
                display: true,
                position: 'top'
            },
            tooltip: {
                enabled: true
            }
        },
        scales: {
            x: {
                stacked: true, // WAJIB untuk stacked
                beginAtZero: true,
                title: {
                    display: false
                }
            },
            y: {
                stacked: true // WAJIB untuk stacked
            }
        }
    }
});
</script>
<script>
  var ctx12 = document.getElementById('chartLulusanBatch').getContext('2d');
  new Chart(ctx12, {
    type: 'pie',
    data: {
      labels: ['Angkatan 2020', 'Angkatan 2021', 'Angkatan 2019'],
      datasets: [{
        data: [50, 20, 10], // sesuai tabel

        backgroundColor: [
          '#007bff', // 2020 - biru
          '#28a745', // 2021 - hijau
          '#ffc107'  // 2019 - kuning
        ],

        borderColor: '#ffffff',
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
  maintainAspectRatio: false,
      plugins: {
        legend: {
          position: 'top'
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              return context.label + ': ' + context.raw + ' lulusan';
            }
          }
        }
      }
    }
  });


</script>
<?php include('5script.php'); ?>