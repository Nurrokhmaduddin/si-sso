<?php $page = 'dashboard_penilaian_bimbingan_ta'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar--.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Dashboard Penilaian Bimbingan Tugas Akhir
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">Ringkasan analitik dan KPI penilaian bimbingan tugas akhir per periode</p>
    </div>
  </section>

  <!-- Main Content -->
  <section class="content">
    <div class="container-fluid">

      <!-- ========== ROW 1: KPI Cards ========== -->
      <div class="row mb-4">
        <div class="col-lg-3 col-md-6">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-chalkboard-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Dosen Pembimbing</span>
              <span class="info-box-number">40</span>
              <small class="text-muted">aktif di periode ini</small>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box">
            <span class="info-box-icon bg-success"><i class="fas fa-check-double"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Dosen Sudah Dinilai</span>
              <span class="info-box-number">28</span>
              <small class="text-muted">(70%)</small>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-hourglass-half"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Belum Dinilai</span>
              <span class="info-box-number">12</span>
              <small class="text-muted">(30%)</small>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="fas fa-chart-pie"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Rata-rata Index</span>
              <span class="info-box-number">4.12</span>
              <small class="text-muted">dari 5.0</small>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">

          <!-- ========== CARD: Filter Periode ========== -->
          <div class="card">
            <div class="card-body">
              <div class="row align-items-end">
                <div class="col-md-4">
                  <label for="filterPeriode" class="form-label"><b>Filter Periode Akademik</b></label>
                  <select class="form-select" id="filterPeriode">
                    <option value="2025-genap" selected>2025 - Genap</option>
                    <option value="2025-ganjil">2025 - Ganjil</option>
                    <option value="2024-genap">2024 - Genap</option>
                    <option value="2024-ganjil">2024 - Ganjil</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label for="filterDepartemen" class="form-label"><b>Filter Departemen</b></label>
                  <select class="form-select" id="filterDepartemen">
                    <option value="">-- Semua Departemen --</option>
                    <option value="manajemen">Manajemen</option>
                    <option value="akuntansi">Akuntansi</option>
                    <option value="ekonomi_syariah">Ekonomi Syariah</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <button class="btn btn-primary w-100" onclick="applyFilter()">
                    <i class="fas fa-filter me-1"></i> Terapkan Filter
                  </button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- ========== ROW 2: Charts ========== -->
      <div class="row mt-4">
        
        <!-- Chart 1: Distribusi Index Kinerja -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header bg-light">
              <h5 class="card-title mb-0"><i class="fas fa-chart-bar"></i> Distribusi Index Kinerja Dosen</h5>
            </div>
            <div class="card-body">
              <div style="position: relative; height: 300px;">
                <canvas id="chartDistribusi"></canvas>
              </div>
              <div class="mt-3">
                <small class="text-muted d-block mb-2"><b>Kategori:</b></small>
                <div class="d-flex gap-3 flex-wrap">
                  <div>
                    <span class="badge bg-success me-1"></span>
                    <small>Sangat Baik (4.5-5.0): <b>8 dosen</b></small>
                  </div>
                  <div>
                    <span class="badge bg-info me-1"></span>
                    <small>Baik (4.0-4.49): <b>15 dosen</b></small>
                  </div>
                  <div>
                    <span class="badge bg-warning me-1"></span>
                    <small>Cukup (3.0-3.99): <b>5 dosen</b></small>
                  </div>
                  <div>
                    <span class="badge bg-danger me-1"></span>
                    <small>Kurang (<3.0): <b>0 dosen</b></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Chart 2: Trend Index Kinerja -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header bg-light">
              <h5 class="card-title mb-0"><i class="fas fa-chart-line"></i> Trend Index Kinerja (6 Periode Terakhir)</h5>
            </div>
            <div class="card-body">
              <div style="position: relative; height: 300px;">
                <canvas id="chartTrend"></canvas>
              </div>
              <div class="mt-3">
                <div class="alert alert-success py-2 mb-0" role="alert" style="font-size: 0.9rem;">
                  <i class="fas fa-arrow-up me-1"></i>
                  <b>Insight:</b> Index kinerja menunjukkan tren positif dengan peningkatan 0.18 poin dari periode sebelumnya
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- ========== ROW 3: More Analytics ========== -->
      <div class="row mt-4">

        <!-- Chart 3: Persentase Penyelesaian -->
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header bg-light">
              <h5 class="card-title mb-0"><i class="fas fa-chart-doughnut"></i> Status Penyelesaian</h5>
            </div>
            <div class="card-body">
              <div style="position: relative; height: 250px;">
                <canvas id="chartStatus"></canvas>
              </div>
            </div>
          </div>
        </div>

        <!-- Chart 4: Top Performers -->
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header bg-light">
              <h5 class="card-title mb-0"><i class="fas fa-star"></i> Top 5 Dosen Terbaik</h5>
            </div>
            <div class="card-body">
              <div class="list-group list-group-flush">
                <div class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                    <small class="d-block text-muted">1. Muafi, Prof., Dr., S.E., M.Si.</small>
                    <strong>Index: 4.59</strong>
                  </div>
                  <span class="badge bg-success rounded-pill">28%</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                    <small class="d-block text-muted">2. Istyakara Muslichah, S.E., MBA.</small>
                    <strong>Index: 4.86</strong>
                  </div>
                  <span class="badge bg-success rounded-pill">27%</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                    <small class="d-block text-muted">3. Raden Roro Ratna Roostika, Ph.D</small>
                    <strong>Index: 4.83</strong>
                  </div>
                  <span class="badge bg-success rounded-pill">24%</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                    <small class="d-block text-muted">4. Andriyastuti Suratman, S.E., M.M.</small>
                    <strong>Index: 4.28</strong>
                  </div>
                  <span class="badge bg-info rounded-pill">20%</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                    <small class="d-block text-muted">5. Fereshti Nurdiana Dihan, S.E., M.M.</small>
                    <strong>Index: 4.22</strong>
                  </div>
                  <span class="badge bg-info rounded-pill">19%</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Chart 5: Bottom Performers / Perhatian -->
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header bg-light">
              <h5 class="card-title mb-0"><i class="fas fa-exclamation-circle"></i> Perlu Perhatian</h5>
            </div>
            <div class="card-body">
              <div class="list-group list-group-flush">
                <div class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                    <small class="d-block text-muted">1. Anjar Priyono, S.E., M.Si., Ph.D.</small>
                    <strong>Belum Ada Penilaian</strong>
                  </div>
                  <span class="badge bg-danger rounded-pill">0/9</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                    <small class="d-block text-muted">2. Abdur Rafik, S.E., M.Sc.</small>
                    <strong>Belum Ada Penilaian</strong>
                  </div>
                  <span class="badge bg-danger rounded-pill">0/5</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                    <small class="d-block text-muted">3. Bagus Panuntun, S.E., M.B.A.</small>
                    <strong>Belum Ada Penilaian</strong>
                  </div>
                  <span class="badge bg-danger rounded-pill">0/8</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                    <small class="d-block text-muted">4. Arif Hartono, S.E., M.Ec., Ph.D.</small>
                    <strong>Index: 4.00</strong>
                  </div>
                  <span class="badge bg-warning rounded-pill">1/10</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                    <small class="d-block text-muted">5. Majang Palupi, Dr., BBA., MBA.</small>
                    <strong>Index: 4.19</strong>
                  </div>
                  <span class="badge bg-warning rounded-pill">2/18</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- ========== ROW 4: Detailed Table ========== -->
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-light">
              <h5 class="card-title mb-0"><i class="fas fa-table"></i> Data Lengkap Penilaian</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">
                  <thead>
                    <tr class="text-uppercase text-center bg-light">
                      <th width="5%">No.</th>
                      <th width="12%">NIDN</th>
                      <th width="25%">Nama Dosen</th>
                      <!-- <th width="12%">Dept</th> -->
                      <th width="13%">Mahasiswa (sudah/belum)</th>
                      <th width="10%">TOtal Score</th>
                      <th width="12%">Index Kinerja Bimbingan</th>
                      <th width="11%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td class="text-center">013110404</td>
                      <td>Majang Palupi, Dr., BBA., MBA.</td>
                      <!-- <td class="text-center"><small>Manajemen</small></td> -->
                      <td class="text-center"><span class="badge bg-info">2/18</span></td>
                      <td class="text-center">151</td>
                      <td class="text-center"><span class="badge bg-success">4.19</span></td>
                      <td class="text-center">
                        <a href="sita-penilaian_pembimbing1.php" class="btn btn-xs btn-info">
                          <i class="fas fa-eye"></i>Detail
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td class="text-center">073110101</td>
                      <td>Anjar Priyono, S.E., M.Si., Ph.D.</td>
                      <!-- <td class="text-center"><small>Manajemen</small></td> -->
                      <td class="text-center"><span class="badge bg-danger">0/9</span></td>
                      <td class="text-center">0</td>
                      <td class="text-center"><span class="badge bg-danger">0.00</span></td>
                      <td class="text-center">
                        <a href="sita-penilaian_pembimbing1.php" class="btn btn-xs btn-info">
                          <i class="fas fa-eye"></i>Detail
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td class="text-center">083110101</td>
                      <td>Arif Hartono, S.E., M.Ec., Ph.D.</td>
                      <!-- <td class="text-center"><small>Akuntansi</small></td> -->
                      <td class="text-center"><span class="badge bg-warning">1/10</span></td>
                      <td class="text-center">72</td>
                      <td class="text-center"><span class="badge bg-info">4.00</span></td>
                      <td class="text-center">
                        <a href="sita-penilaian_pembimbing1.php" class="btn btn-xs btn-info">
                          <i class="fas fa-eye"></i>Detail
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">4</td>
                      <td class="text-center">113110409</td>
                      <td>Raden Roro Ratna Roostika, S.E., MAC., Ph.D</td>
                      <!-- <td class="text-center"><small>Manajemen</small></td> -->
                      <td class="text-center"><span class="badge bg-success">1/11</span></td>
                      <td class="text-center">87</td>
                      <td class="text-center"><span class="badge bg-success">4.83</span></td>
                      <td class="text-center">
                        <a href="sita-penilaian_pembimbing1.php" class="btn btn-xs btn-info">
                          <i class="fas fa-eye"></i>Detail
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">5</td>
                      <td class="text-center">123110101</td>
                      <td>Andriyastuti Suratman, S.E., M.M.</td>
                      <!-- <td class="text-center"><small>Manajemen</small></td> -->
                      <td class="text-center"><span class="badge bg-success">2/13</span></td>
                      <td class="text-center">154</td>
                      <td class="text-center"><span class="badge bg-success">4.28</span></td>
                      <td class="text-center">
                        <a href="sita-penilaian_pembimbing1.php" class="btn btn-xs btn-info">
                          <i class="fas fa-eye"></i>Detail
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">6</td>
                      <td class="text-center">133110105</td>
                      <td>Abdur Rafik, S.E., M.Sc.</td>
                      <!-- <td class="text-center"><small>Syariah</small></td> -->
                      <td class="text-center"><span class="badge bg-danger">0/5</span></td>
                      <td class="text-center">0</td>
                      <td class="text-center"><span class="badge bg-danger">0.00</span></td>
                      <td class="text-center">
                        <a href="sita-penilaian_pembimbing1.php" class="btn btn-xs btn-info">
                          <i class="fas fa-eye"></i>Detail
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">7</td>
                      <td class="text-center">133111102</td>
                      <td>Fereshti Nurdiana Dihan, S.E., M.M.</td>
                      <!-- <td class="text-center"><small>Manajemen</small></td> -->
                      <td class="text-center"><span class="badge bg-success">3/21</span></td>
                      <td class="text-center">228</td>
                      <td class="text-center"><span class="badge bg-success">4.22</span></td>
                      <td class="text-center">
                        <a href="sita-penilaian_pembimbing1.php" class="btn btn-xs btn-info">
                          <i class="fas fa-eye"></i>Detail
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">8</td>
                      <td class="text-center">143110401</td>
                      <td>Muafi, Prof., Dr., S.E., M.Si.</td>
                      <!-- <td class="text-center"><small>Akuntansi</small></td> -->
                      <td class="text-center"><span class="badge bg-success">5/19</span></td>
                      <td class="text-center">413</td>
                      <td class="text-center"><span class="badge bg-success">4.59</span></td>
                      <td class="text-center">
                        <a href="sita-penilaian_pembimbing1.php" class="btn btn-xs btn-info">
                          <i class="fas fa-eye"></i>Detail
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">9</td>
                      <td class="text-center">153110102</td>
                      <td>Istyakara Muslichah, S.E., MBA.</td>
                      <!-- <td class="text-center"><small>Syariah</small></td> -->
                      <td class="text-center"><span class="badge bg-success">2/11</span></td>
                      <td class="text-center">175</td>
                      <td class="text-center"><span class="badge bg-success">4.86</span></td>
                      <td class="text-center">
                        <a href="sita-penilaian_pembimbing1.php" class="btn btn-xs btn-info">
                          <i class="fas fa-eye"></i>Detail
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">10</td>
                      <td class="text-center">153111308</td>
                      <td>Bagus Panuntun, S.E., M.B.A.</td>
                      <!-- <td class="text-center"><small>Manajemen</small></td> -->
                      <td class="text-center"><span class="badge bg-danger">0/8</span></td>
                      <td class="text-center">0</td>
                      <td class="text-center"><span class="badge bg-danger">0.00</span></td>
                      <td class="text-center">
                        <a href="sita-penilaian_pembimbing1.php" class="btn btn-xs btn-info">
                          <i class="fas fa-eye"></i>Detail
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ========== ROW 5: Export & Actions ========== -->
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="card">
            <div class="card-footer">
              <div class="d-flex gap-2 justify-content-end">
                <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalExport">
                  <i class="fas fa-file-download me-1"></i> Export Report
                </button>
                <button class="btn btn-outline-primary btn-sm">
                  <i class="fas fa-print me-1"></i> Print
                </button>
                <a href="laporan-penilaian-bimbingan-ta.php" class="btn btn-primary btn-sm">
                  <i class="fas fa-table me-1"></i> Lihat Data List
                </a>
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

<!-- ========== MODAL: Bantuan ========== -->
<div class="modal fade" id="modalBantuan" tabindex="-1" aria-labelledby="modalBantuanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan - Dashboard Penilaian Bimbingan TA</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6 class="mb-3"><b>Tujuan Dashboard</b></h6>
        <p>
          Dashboard memberikan ringkasan visual dan analitik komprehensif tentang kinerja penilaian bimbingan tugas akhir 
          di seluruh dosen, membantu pengambilan keputusan berbasis data dan monitoring progress evaluasi.
        </p>

        <h6 class="mb-3 mt-4"><b>Komponen Utama Dashboard</b></h6>
        <ul>
          <li><b>KPI Cards</b> - Statistik ringkas: total dosen, sudah/belum dinilai, rata-rata index</li>
          <li><b>Filter Periode & Departemen</b> - Menyaring data berdasarkan periode akademik dan departemen</li>
          <li><b>Chart Distribusi Index</b> - Visualisasi sebaran index kinerja dosen (sangat baik/baik/cukup/kurang)</li>
          <li><b>Trend Index</b> - Grafik garis menunjukkan trend peningkatan/penurunan index dalam 6 periode terakhir</li>
          <li><b>Status Penyelesaian</b> - Pie chart proporsi dosen sudah/belum dinilai</li>
          <li><b>Top Performers</b> - Daftar 5 dosen terbaik berdasarkan index kinerja</li>
          <li><b>Perlu Perhatian</b> - Daftar dosen yang belum dinilai atau dengan performa rendah</li>
          <li><b>Tabel Data Lengkap</b> - Detail semua dosen dengan sortir dan pencarian</li>
        </ul>

        <h6 class="mb-3 mt-4"><b>Cara Menggunakan Filter</b></h6>
        <ol>
          <li>Pilih periode akademik dari dropdown</li>
          <li>Pilih departemen (atau "Semua" untuk menampilkan semua)</li>
          <li>Klik tombol "Terapkan Filter"</li>
          <li>Chart dan tabel akan otomatis di-update sesuai filter yang dipilih</li>
        </ol>

        <h6 class="mb-3 mt-4"><b>Interpretasi Indikator Warna</b></h6>
        <ul>
          <li><span class="badge bg-success">Hijau</span> - Performa Sangat Baik / Selesai</li>
          <li><span class="badge bg-info">Biru</span> - Performa Baik / Dalam Proses</li>
          <li><span class="badge bg-warning">Kuning</span> - Performa Cukup / Pending</li>
          <li><span class="badge bg-danger">Merah</span> - Performa Kurang / Belum Dinilai</li>
        </ul>

        <h6 class="mb-3 mt-4"><b>Fitur Aksi Cepat</b></h6>
        <ul>
          <li><b>Export Report</b> - Mengunduh laporan dalam format Excel/PDF</li>
          <li><b>Print</b> - Mencetak dashboard ke printer</li>
          <li><b>Lihat Data List</b> - Beralih ke tampilan tabel list yang lebih detail</li>
        </ul>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- ========== MODAL: Export Report ========== -->
<div class="modal fade" id="modalExport" tabindex="-1" aria-labelledby="modalExportLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="modalExportLabel">Export Report</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="" method="POST">
        <div class="modal-body">
          <div class="alert alert-info mb-3" role="alert" style="font-size: 0.9rem;">
            <i class="fas fa-info-circle me-1"></i>
            <b>Pilih format export:</b> Data akan diunduh sesuai filter periode dan departemen yang sedang aktif.
          </div>

          <div class="mb-3">
            <label class="form-label"><b>Format File</b></label>
            <div class="btn-group w-100" role="group">
              <input type="radio" class="btn-check" name="format" id="formatExcel" value="excel" checked>
              <label class="btn btn-outline-success" for="formatExcel">
                <i class="fas fa-file-excel me-1"></i> Excel (.xlsx)
              </label>

              <input type="radio" class="btn-check" name="format" id="formatPdf" value="pdf">
              <label class="btn btn-outline-success" for="formatPdf">
                <i class="fas fa-file-pdf me-1"></i> PDF
              </label>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label"><b>Include Komponen</b></label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="includeChart" name="includeChart" checked>
              <label class="form-check-label" for="includeChart">
                Chart & Grafik
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="includeTable" name="includeTable" checked>
              <label class="form-check-label" for="includeTable">
                Tabel Data Lengkap
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="includeAnalysis" name="includeAnalysis" checked>
              <label class="form-check-label" for="includeAnalysis">
                Analisis & Insight
              </label>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">
            <i class="fas fa-download me-1"></i> Download
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>

<!-- Chart.js Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

<script>
// Chart 1: Distribusi Index Kinerja
const ctxDistribusi = document.getElementById('chartDistribusi').getContext('2d');
new Chart(ctxDistribusi, {
  type: 'bar',
  data: {
    labels: ['Sangat Baik\n(4.5-5.0)', 'Baik\n(4.0-4.49)', 'Cukup\n(3.0-3.99)', 'Kurang\n(<3.0)'],
    datasets: [{
      label: 'Jumlah Dosen',
      data: [8, 15, 5, 0],
      backgroundColor: ['#28a745', '#17a2b8', '#ffc107', '#dc3545'],
      borderColor: ['#28a745', '#17a2b8', '#ffc107', '#dc3545'],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: { display: false }
    },
    scales: {
      y: { beginAtZero: true, max: 20 }
    }
  }
});

// Chart 2: Trend Index Kinerja
const ctxTrend = document.getElementById('chartTrend').getContext('2d');
new Chart(ctxTrend, {
  type: 'line',
  data: {
    labels: ['2024-G', '2024-J', '2024-G2', '2025-G', '2025-J', '2025-G2'],
    datasets: [{
      label: 'Average Index',
      data: [3.85, 3.87, 3.94, 4.02, 4.08, 4.12],
      borderColor: '#17a2b8',
      backgroundColor: 'rgba(23, 162, 184, 0.1)',
      tension: 0.4,
      fill: true,
      pointRadius: 5,
      pointBackgroundColor: '#17a2b8'
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: { display: true }
    },
    scales: {
      y: { beginAtZero: false, min: 3.5, max: 4.5 }
    }
  }
});

// Chart 3: Status Penyelesaian
const ctxStatus = document.getElementById('chartStatus').getContext('2d');
new Chart(ctxStatus, {
  type: 'doughnut',
  data: {
    labels: ['Sudah Dinilai (70%)', 'Belum Dinilai (30%)'],
    datasets: [{
      data: [70, 30],
      backgroundColor: ['#28a745', '#ffc107'],
      borderColor: ['#28a745', '#ffc107'],
      borderWidth: 2
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: { position: 'bottom' }
    }
  }
});

function applyFilter() {
  const periode = document.getElementById('filterPeriode').value;
  const departemen = document.getElementById('filterDepartemen').value;
  alert(`Filter diterapkan:\nPeriode: ${periode}\nDepartemen: ${departemen || 'Semua'}`);
  // Di sini bisa melakukan AJAX call untuk update data dan chart
}
</script>
