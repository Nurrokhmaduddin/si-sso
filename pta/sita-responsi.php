<?php $page = 'rekap_nilai_ujian_ta'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar--.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Rekap Nilai Responsi
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">Data rekapitulasi nilai ujian Tugas Akhir mahasiswa per tahun akademik</p>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">
          <!-- ========== CARD : Filter & Export ========== -->
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <b>Tahun Akademik:</b> 2023 - Ganjil &nbsp;
                </div>   
                <div class="col-md-6">
                  <b>Program Studi:</b> Manajemen
                </div>
              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalExport">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalResetData">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>    
              </div>
            </div>
            
          </div>


          <!-- ========== CARD : Tabel Rekap Nilai ========== -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">
                  <thead>
                    <tr class="text-uppercase text-center">
                      <th width="5%">No.</th>
                      <th>Tahun Akademik</th>
                      <th>Mahasiswa</th>
                      <th width="10%">Nilai</th>
                      <th>Tanggal Posting</th>
                      <th width="10%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td class="text-center">1</td>
                      <td class="text-center">2023 - Ganjil</td>
                      <td>
                        <strong>19311342</strong><br>
                        Fathur Rohman
                      </td>
                      <td class="text-center"><span class="badge badge-info">A-</span></td>
                      <td class="text-center">2023-12-22 16:43:22</td>
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView" title="Lihat Detail"><i class="fas fa-eye"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit" title="Edit"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">2</td>
                      <td class="text-center">2023 - Ganjil</td>
                      <td>
                        <strong>19311509</strong><br>
                        Anisya Chaerunisa Sakinah
                      </td>
                      <td class="text-center"><span class="badge badge-warning">A/B</span></td>
                      <td class="text-center">2023-12-04 13:40:53</td>
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView" title="Lihat Detail"><i class="fas fa-eye"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit" title="Edit"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">3</td>
                      <td class="text-center">2023 - Ganjil</td>
                      <td>
                        <strong>19311394</strong><br>
                        Nia Wulan Sari
                      </td>
                      <td class="text-center"><span class="badge badge-secondary">B</span></td>
                      <td class="text-center">2023-12-07 12:10:05</td>
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView" title="Lihat Detail"><i class="fas fa-eye"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit" title="Edit"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">4</td>
                      <td class="text-center">2023 - Ganjil</td>
                      <td>
                        <strong>19311135</strong><br>
                        Muhammad Tegar Baihaqi
                      </td>
                      <td class="text-center"><span class="badge badge-secondary">B</span></td>
                      <td class="text-center">2023-12-13 14:41:12</td>
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView" title="Lihat Detail"><i class="fas fa-eye"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit" title="Edit"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">5</td>
                      <td class="text-center">2023 - Ganjil</td>
                      <td>
                        <strong>19311255</strong><br>
                        Wulandini Az Zahrah
                      </td>
                      <td class="text-center"><span class="badge badge-warning">A/B</span></td>
                      <td class="text-center">2023-12-16 15:36:45</td>
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView" title="Lihat Detail"><i class="fas fa-eye"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit" title="Edit"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">6</td>
                      <td class="text-center">2023 - Ganjil</td>
                      <td>
                        <strong>19311261</strong><br>
                        Bagas Rifqi Hanindya
                      </td>
                      <td class="text-center"><span class="badge badge-success">B+</span></td>
                      <td class="text-center">2023-12-19 21:02:05</td>
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView" title="Lihat Detail"><i class="fas fa-eye"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit" title="Edit"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">7</td>
                      <td class="text-center">2023 - Ganjil</td>
                      <td>
                        <strong>19311492</strong><br>
                        Moh Hishni Alfi Makarim
                      </td>
                      <td class="text-center"><span class="badge badge-warning">A/B</span></td>
                      <td class="text-center">2023-12-19 14:36:18</td>
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView" title="Lihat Detail"><i class="fas fa-eye"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit" title="Edit"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">8</td>
                      <td class="text-center">2023 - Ganjil</td>
                      <td>
                        <strong>19311415</strong><br>
                        Ananda Bagoes Prasetiyo
                      </td>
                      <td class="text-center"><span class="badge badge-success">B+</span></td>
                      <td class="text-center">2024-02-13 11:49:03</td>
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView" title="Lihat Detail"><i class="fas fa-eye"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit" title="Edit"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">9</td>
                      <td class="text-center">2023 - Ganjil</td>
                      <td>
                        <strong>19311324</strong><br>
                        Bayu Hning Kartika Dwitya
                      </td>
                      <td class="text-center"><span class="badge badge-info">A-</span></td>
                      <td class="text-center">2023-12-04 12:12:26</td>
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView" title="Lihat Detail"><i class="fas fa-eye"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit" title="Edit"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">10</td>
                      <td class="text-center">2023 - Ganjil</td>
                      <td>
                        <strong>19311497</strong><br>
                        Dinda Intan Tri Maharani
                      </td>
                      <td class="text-center"><span class="badge badge-info">A-</span></td>
                      <td class="text-center">2023-12-10 17:51:11</td>
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView" title="Lihat Detail"><i class="fas fa-eye"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit" title="Edit"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus"><i class="fas fa-trash"></i></button>
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

<!-- =========================================================================== -->
<!-- MODAL SET BAKU -->
<!-- =========================================================================== -->

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
            <b>Informasi:</b> Halaman ini menampilkan data rekapitulasi nilai ujian TA per tahun akademik. Data awal yang tampil adalah tahun akademik [2023 - Ganjil].
          </div>

          <div class="mb-3">
            <label for="tahunAkademik" class="form-label">Tahun Akademik</label>
            <select name="tahun_akademik" id="tahunAkademik" class="form-select">
              <option value="">-- Pilih Tahun Akademik --</option>
              <option value="2025-Ganjil">2025 - Ganjil</option>
              <option value="2024-Genap">2024 - Genap</option>
              <option value="2024-Ganjil">2024 - Ganjil</option>
              <option value="2023-Genap">2023 - Genap</option>
              <option value="2023-Ganjil" selected>2023 - Ganjil</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="programStudi" class="form-label">Program Studi</label>
            <select name="program_studi" id="programStudi" class="form-select">
              <option value="">-- Pilih Program Studi --</option>
              <option value="Manajemen" selected>Manajemen</option>
              <option value="Akuntansi">Akuntansi</option>
              <option value="Ekonomi">Ekonomi</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="statusNilai" class="form-label">Rentang Nilai</label>
            <select name="status_nilai" id="statusNilai" class="form-select">
              <option value="">-- Semua Nilai --</option>
              <option value="A">A (85-100)</option>
              <option value="B">B (70-84)</option>
              <option value="C">C (60-69)</option>
              <option value="D">D (50-59)</option>
              <option value="E">E (0-49)</option>
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


<!-- Modal View Detail -->
<div class="modal fade" id="modalView" tabindex="-1" aria-labelledby="modalViewLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="modalViewLabel">Detail Nilai Ujian TA</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div class="mb-3">
          <label class="form-label"><strong>NIM</strong></label>
          <p class="form-control-plaintext">19311342</p>
        </div>

        <div class="mb-3">
          <label class="form-label"><strong>Nama Mahasiswa</strong></label>
          <p class="form-control-plaintext">Fathur Rohman</p>
        </div>

        <div class="mb-3">
          <label class="form-label"><strong>Tahun Akademik</strong></label>
          <p class="form-control-plaintext">2023 - Ganjil</p>
        </div>

        <div class="mb-3">
          <label class="form-label"><strong>Nilai</strong></label>
          <p class="form-control-plaintext"><span class="badge badge-info">A-</span></p>
        </div>

        <div class="mb-3">
          <label class="form-label"><strong>Tanggal Posting</strong></label>
          <p class="form-control-plaintext">2023-12-22 16:43:22</p>
        </div>

        <div class="mb-3">
          <label class="form-label"><strong>Catatan</strong></label>
          <p class="form-control-plaintext">Data nilai TA telah diverifikasi oleh pembimbing akademik.</p>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Edit Data -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalEditLabel">Edit Nilai Ujian TA</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="POST">
        <div class="modal-body">

          <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
            <i class="fas fa-info-circle me-1"></i>
            <strong>Catatan:</strong> Semua field yang diberi tanda <span class="text-danger">*</span> wajib diisi.
          </div>

          <div class="mb-3">
            <label for="nimEdit" class="form-label">NIM <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="nimEdit" name="nim" value="19311342" required readonly>
          </div>

          <div class="mb-3">
            <label for="namaEdit" class="form-label">Nama Mahasiswa <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="namaEdit" name="nama" value="Fathur Rohman" required readonly>
          </div>

          <div class="mb-3">
            <label for="tahunEdit" class="form-label">Tahun Akademik <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="tahunEdit" name="tahun_akademik" value="2023 - Ganjil" required readonly>
          </div>

          <div class="mb-3">
            <label for="nilaiEdit" class="form-label">Nilai <span class="text-danger">*</span></label>
            <select name="nilai" id="nilaiEdit" class="form-select" required>
              <option value="">-- Pilih Nilai --</option>
              <option value="A" selected>A (85-100)</option>
              <option value="A-">A- (80-84)</option>
              <option value="B+">B+ (75-79)</option>
              <option value="B">B (70-74)</option>
              <option value="B-">B- (65-69)</option>
              <option value="C+">C+ (60-64)</option>
              <option value="C">C (55-59)</option>
              <option value="D">D (40-54)</option>
              <option value="E">E (0-39)</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="catatanEdit" class="form-label">Catatan</label>
            <textarea name="catatan" id="catatanEdit" class="form-control" rows="3" placeholder="Masukkan catatan (opsional)">Data nilai TA telah diverifikasi oleh pembimbing akademik.</textarea>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Export -->
<div class="modal fade" id="modalExport" tabindex="-1" aria-labelledby="modalExportLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="modalExportLabel">Export Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="proses_export_rekap_nilai.php" method="POST">
        <div class="modal-body">

          <div class="alert alert-info mb-3 py-2" role="alert" style="font-size: 0.9rem;">
            <i class="fas fa-info-circle me-1"></i>
            <strong>Informasi:</strong> Pilih format file untuk export data rekap nilai ujian TA.
          </div>

          <div class="mb-3">
            <label class="form-label">Pilih Format Export</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="format_export" id="formatExcel" value="excel" checked>
              <label class="form-check-label" for="formatExcel">
                <i class="fas fa-file-excel text-success"></i> Excel (.xlsx)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="format_export" id="formatPdf" value="pdf">
              <label class="form-check-label" for="formatPdf">
                <i class="fas fa-file-pdf text-danger"></i> PDF (.pdf)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="format_export" id="formatCsv" value="csv">
              <label class="form-check-label" for="formatCsv">
                <i class="fas fa-file-csv"></i> CSV (.csv)
              </label>
            </div>
          </div>

          <div class="mb-3">
            <label for="includeFilter" class="form-check-label">
              <input class="form-check-input" type="checkbox" id="includeFilter" name="include_filter" checked>
              Gunakan filter yang sedang aktif (Tahun Akademik: 2023 - Ganjil)
            </label>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Download</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Reset Data -->
<div class="modal fade" id="modalResetData" tabindex="-1" aria-labelledby="modalResetDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modalResetDataLabel">Konfirmasi Reset Filter</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="proses_reset_filter.php" method="POST">
        <div class="modal-body text-center">

          <p class="fs-5">Apakah Anda yakin ingin mereset semua filter ke kondisi awal?</p>
          <p class="text-muted mb-0">
            Filter yang diterapkan saat ini akan dihapus dan halaman akan menampilkan semua data.
          </p>

        </div>

        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Reset Filter</button>
        </div>

      </form>
    </div>
  </div>
</div>


<!-- Modal Bantuan -->
<div class="modal fade" id="modalBantuan" tabindex="-1" aria-labelledby="modalBantuanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan - Rekap Nilai Ujian TA</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <h6 class="mt-3 mb-2"><i class="fas fa-info-circle text-primary"></i> Tentang Halaman Ini</h6>
        <p>
          Halaman Rekap Nilai Ujian TA menampilkan daftar rekapitulasi nilai ujian Tugas Akhir (TA) 
          mahasiswa per tahun akademik. Data mencakup informasi NIM, nama mahasiswa, nilai yang 
          diperoleh, dan tanggal posting nilai.
        </p>

        <h6 class="mt-3 mb-2"><i class="fas fa-filter text-info"></i> Cara Menggunakan Filter</h6>
        <p>
          Gunakan tombol <strong>Filter</strong> untuk menyaring data berdasarkan:
        </p>
        <ul>
          <li><strong>Tahun Akademik:</strong> Pilih tahun akademik yang ingin ditampilkan</li>
          <li><strong>Program Studi:</strong> Pilih program studi tertentu</li>
          <li><strong>Rentang Nilai:</strong> Tampilkan data berdasarkan grade nilai (A, B, C, dll)</li>
        </ul>

        <h6 class="mt-3 mb-2"><i class="fas fa-file-download text-success"></i> Cara Export Data</h6>
        <p>
          Gunakan tombol <strong>Export</strong> untuk mengunduh data dalam format:
        </p>
        <ul>
          <li><strong>Excel (.xlsx):</strong> Format spreadsheet untuk analisis lebih lanjut</li>
          <li><strong>PDF (.pdf):</strong> Format laporan untuk mencetak atau distribusi</li>
          <li><strong>CSV (.csv):</strong> Format universal untuk import ke sistem lain</li>
        </ul>

        <h6 class="mt-3 mb-2"><i class="fas fa-edit text-warning"></i> Cara Edit & Hapus</h6>
        <p>
          Setiap baris data memiliki tombol aksi:
        </p>
        <ul>
          <li><i class="fas fa-eye text-info"></i> <strong>Lihat:</strong> Tampilkan detail lengkap nilai</li>
          <li><i class="fas fa-edit text-primary"></i> <strong>Edit:</strong> Ubah nilai yang telah diinput</li>
          <li><i class="fas fa-trash text-danger"></i> <strong>Hapus:</strong> Hapus data nilai dari sistem</li>
        </ul>

        <h6 class="mt-3 mb-2"><i class="fas fa-ban text-danger"></i> Cara Reset Filter</h6>
        <p>
          Gunakan tombol <strong>Reset</strong> untuk mengembalikan filter ke kondisi awal dan 
          menampilkan semua data tanpa filter.
        </p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<?php include('5script.php'); ?>
