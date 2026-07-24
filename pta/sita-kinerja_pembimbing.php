<?php $page = 'monev_kinerja_pembimbing'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar--.php'); ?>


<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Kinerja Pembimbing
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
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
          <div class="card">
            <div class="card-body">
              <div class="row">

                <div class="col-md-4">
                  <b>Tahun Akademik:</b> Semua &nbsp;
                </div>
                <div class="col-md-4">
                  <b>Program Studi:</b> Manajemen
                </div>
                <div class="col-md-4">
                  <b>Status Kuota:</b> Semua
                </div>

              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
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


          <!-- ========== CARD : Tabel Granular ========== -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">
                  <thead>
                    <tr class="text-uppercase text-center">
                      <th width="5px" rowspan="2">No.</th>
                      <th rowspan="2">NIK</th>
                      <th rowspan="2">Nama Dosen</th>
                      <th rowspan="2">Kuota</th>
                      <th rowspan="2">Sisa Kuota Bimbingan</th>
                      <th colspan="4">Bimbingan</th>
                      <th rowspan="2">Aksi</th>
                    </tr>
                    <tr class="text-uppercase text-center">
                      <th>Aktif</th>
                      <th>Selesai</th>
                      <th>Tidak Selesai</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td class="text-center">1</td>
                      <td>933110102</td>
                      <td>Abdul Moin, S.E., M.B.A., Ph.D., CQRM.</td>
                      <td class="text-center">1</td>
                      <td class="text-center">-1</td>
                      <td class="text-center">2</td>
                      <td class="text-center">7</td>
                      <td class="text-center">0</td>
                      <td class="text-center">9</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='sita-kinerja_pembimbing_detail.php?nik=933110102'"><i class="fas fa-info-circle"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">2</td>
                      <td>133110105</td>
                      <td>Abdur Rafik, S.E., M.Sc.</td>
                      <td class="text-center">1</td>
                      <td class="text-center">-1</td>
                      <td class="text-center">2</td>
                      <td class="text-center">14</td>
                      <td class="text-center">0</td>
                      <td class="text-center">16</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='sita-kinerja_pembimbing_detail.php?nik=133110105'"><i class="fas fa-info-circle"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">3</td>
                      <td>243111201</td>
                      <td>Achmad Rizal, SE., MSc. Fin.</td>
                      <td class="text-center">1</td>
                      <td class="text-center">0</td>
                      <td class="text-center">1</td>
                      <td class="text-center">3</td>
                      <td class="text-center">0</td>
                      <td class="text-center">4</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='sita-kinerja_pembimbing_detail.php?nik=243111201'"><i class="fas fa-info-circle"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">4</td>
                      <td>903110104</td>
                      <td>Agus Abdurrahman, Drs., M.M.</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">18</td>
                      <td class="text-center">0</td>
                      <td class="text-center">18</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='sita-kinerja_pembimbing_detail.php?nik=903110104'"><i class="fas fa-info-circle"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">5</td>
                      <td>873110104</td>
                      <td>Al Hasin, Drs., MBA.</td>
                      <td class="text-center">1</td>
                      <td class="text-center">-4</td>
                      <td class="text-center">5</td>
                      <td class="text-center">25</td>
                      <td class="text-center">0</td>
                      <td class="text-center">30</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='sita-kinerja_pembimbing_detail.php?nik=873110104'"><i class="fas fa-info-circle"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">6</td>
                      <td>883110103</td>
                      <td>Albari, Dr., Drs., M.Si.</td>
                      <td class="text-center">1</td>
                      <td class="text-center">-6</td>
                      <td class="text-center">7</td>
                      <td class="text-center">55</td>
                      <td class="text-center">0</td>
                      <td class="text-center">62</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='sita-kinerja_pembimbing_detail.php?nik=883110103'"><i class="fas fa-info-circle"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">7</td>
                      <td>193110102</td>
                      <td>Alldila Nadhira Ayu Setyaning, S.E., MBA.</td>
                      <td class="text-center">1</td>
                      <td class="text-center">-4</td>
                      <td class="text-center">5</td>
                      <td class="text-center">65</td>
                      <td class="text-center">0</td>
                      <td class="text-center">70</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='sita-kinerja_pembimbing_detail.php?nik=193110102'"><i class="fas fa-info-circle"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">8</td>
                      <td>883110102</td>
                      <td>Anas Hidayat, Prof., Drs., M.B.A., Ph.D.</td>
                      <td class="text-center">1</td>
                      <td class="text-center">-1</td>
                      <td class="text-center">2</td>
                      <td class="text-center">68</td>
                      <td class="text-center">0</td>
                      <td class="text-center">70</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='sita-kinerja_pembimbing_detail.php?nik=883110102'"><i class="fas fa-info-circle"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">9</td>
                      <td>123110101</td>
                      <td>Andriyastuti Suratman, S.E., M.M.</td>
                      <td class="text-center">1</td>
                      <td class="text-center">-6</td>
                      <td class="text-center">7</td>
                      <td class="text-center">38</td>
                      <td class="text-center">0</td>
                      <td class="text-center">45</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='sita-kinerja_pembimbing_detail.php?nik=123110101'"><i class="fas fa-info-circle"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">10</td>
                      <td>073110101</td>
                      <td>Anjar Priyono, S.E., M.Si., Ph.D.</td>
                      <td class="text-center">1</td>
                      <td class="text-center">-3</td>
                      <td class="text-center">4</td>
                      <td class="text-center">26</td>
                      <td class="text-center">0</td>
                      <td class="text-center">30</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='sita-kinerja_pembimbing_detail.php?nik=073110101'"><i class="fas fa-info-circle"></i></button>
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
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalFilterLabel">Filter Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="GET">

        <div class="modal-body">
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Halaman ini otomatis menampilkan data seluruh dosen pembimbing pada program studi berjalan.
          </div>
          <div class="mb-3">
            <label for="tahun_akademik" class="form-label">Tahun Akademik</label>
            <select name="tahun_akademik" id="tahun_akademik" class="form-select">
              <option value="">-- Pilih Tahun Akademik --</option>
              <option value="2025/2026">2025/2026</option>
              <option value="2024/2025">2024/2025</option>
              <option value="2023/2024">2023/2024</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="program_studi" class="form-label">Program Studi</label>
            <select name="program_studi" id="program_studi" class="form-select">
              <option value="">-- Pilih Program Studi --</option>
              <option value="Manajemen">Manajemen</option>
              <option value="Akuntansi">Akuntansi</option>
              <option value="Ekonomi">Ekonomi</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status_kuota" class="form-label">Status Kuota</label>
            <select name="status_kuota" id="status_kuota" class="form-select">
              <option value="">-- Pilih Status Kuota --</option>
              <option value="Tersedia">Tersedia</option>
              <option value="Terlampaui">Terlampaui</option>
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


<!-- Modal Export -->
<div class="modal fade" id="modalExport" tabindex="-1" aria-labelledby="modalExportLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="modalExportLabel">Export Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Pilih format export untuk data Kinerja Pembimbing yang sedang ditampilkan.</p>
        <div class="d-grid gap-2">
          <a href="export_kinerja_pembimbing.php?format=excel" class="btn btn-outline-success">
            <i class="fas fa-file-excel me-1"></i> Export Excel
          </a>
          <a href="export_kinerja_pembimbing.php?format=pdf" class="btn btn-outline-danger">
            <i class="fas fa-file-pdf me-1"></i> Export PDF
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
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
          Halaman ini menampilkan rekap kinerja dosen pembimbing, meliputi kuota bimbingan,
          sisa kuota, dan jumlah mahasiswa bimbingan berdasarkan status (Aktif, Selesai, Tidak Selesai).
        </p>
        <p>
          Misalnya:
          - Kolom <b>Sisa Kuota Bimbingan</b> bernilai negatif menandakan dosen sudah melebihi kuota yang ditetapkan.
          - Tombol <i class="fas fa-info-circle"></i> pada kolom Aksi digunakan untuk melihat detail mahasiswa bimbingan per dosen.
          - Tombol Export digunakan untuk mengunduh data dalam format Excel atau PDF.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Reset Data -->
<div class="modal fade" id="modalResetData" tabindex="-1" aria-labelledby="modalResetDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Konfirmasi Reset Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form action="proses_reset_kinerja_pembimbing.php" method="POST">
        <div class="modal-body text-center">
          <p class="fs-5">Apakah Anda yakin ingin mereset filter pada halaman ini?</p>
        </div>

        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Reset</button>
        </div>

      </form>
    </div>
  </div>
</div>


<?php include('5script.php'); ?>
