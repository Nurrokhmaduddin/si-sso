<?php
$page = 'monev_kinerja_pembimbing_detail';

// Ambil identitas dosen dari query string
$nik = isset($_GET['nik']) ? $_GET['nik'] : '';

// TODO: ganti dengan query DB berdasarkan $nik
$dataDosen = [
    'nik'         => '933110102',
    'nama'        => 'Abdul Moin, S.E., M.B.A., Ph.D., CQRM.',
    'kuota'       => 1,
    'sisa_kuota'  => -1,
];
?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar--.php'); ?>


<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Kinerja Pembimbing - Detail
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

          <!-- ========== CARD : Filter & Identitas Dosen ========== -->
          <div class="card">
            <div class="card-body">
              <div class="row">

                <div class="col-md-3">
                  <b>NIK:</b> <?= htmlspecialchars($dataDosen['nik']) ?>
                </div>
                <div class="col-md-6">
                  <b>Nama Dosen:</b> <?= htmlspecialchars($dataDosen['nama']) ?>
                </div>
                <div class="col-md-3">
                  <b>Kuota:</b> <?= htmlspecialchars($dataDosen['kuota']) ?>
                </div>
                <div class="col-md-3">
                  <b>Sisa Kuota Bimbingan:</b> <?= htmlspecialchars($dataDosen['sisa_kuota']) ?>
                </div>
                <div class="col-md-9">
                  <b>Status:</b>
                  <?php if ($dataDosen['sisa_kuota'] < 0): ?>
                    <span class="badge badge-danger">Kuota Terlampaui</span>
                  <?php else: ?>
                    <span class="badge badge-info">Kuota Tersedia</span>
                  <?php endif; ?>
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
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="window.location.href='monev_kinerja_pembimbing.php'">
                  <i class="fas fa-arrow-left me-1"></i> Kembali
                </button>
              </div>
            </div>

          </div>


          <!-- ========== CARD : Tabel Mahasiswa Bimbingan ========== -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">
                  <thead>
                    <tr class="text-uppercase text-center">
                      <th width="5px">No.</th>
                      <th>NIM</th>
                      <th>Nama Mahasiswa</th>
                      <th>Judul</th>
                      <th>Jenis Bimbingan</th>
                      <th>Tanggal Mulai</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td class="text-center">1</td>
                      <td>19312137</td>
                      <td>Pramita Widyadari</td>
                      <td>Analisis Pengaruh Kualitas Pelayanan terhadap Kepuasan Nasabah</td>
                      <td class="text-center">Skripsi</td>
                      <td class="text-center">12-08-2025</td>
                      <td class="text-center"><span class="badge badge-info">Aktif</span></td>
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">2</td>
                      <td>19312376</td>
                      <td>Ho Aldika Novaldy Sumampow</td>
                      <td>Pengaruh Digital Marketing terhadap Keputusan Pembelian</td>
                      <td class="text-center">Skripsi</td>
                      <td class="text-center">03-02-2025</td>
                      <td class="text-center"><span class="badge badge-success">Selesai</span></td>
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">3</td>
                      <td>19312406</td>
                      <td>Annisa Regita Sintowati</td>
                      <td>Evaluasi Kinerja Keuangan UMKM Pasca Pandemi</td>
                      <td class="text-center">Skripsi</td>
                      <td class="text-center">21-11-2024</td>
                      <td class="text-center"><span class="badge badge-danger">Tidak Selesai</span></td>
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
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
          <input type="hidden" name="nik" value="<?= htmlspecialchars($nik) ?>">
          <div class="mb-3">
            <label for="jenis_bimbingan" class="form-label">Jenis Bimbingan</label>
            <select name="jenis_bimbingan" id="jenis_bimbingan" class="form-select">
              <option value="">-- Pilih Jenis Bimbingan --</option>
              <option value="Skripsi">Skripsi</option>
              <option value="KKN">KKN</option>
              <option value="Magang">Magang</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="Selesai">Selesai</option>
              <option value="TidakSelesai">Tidak Selesai</option>
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
        <p>Pilih format export untuk data mahasiswa bimbingan dosen ini.</p>
        <div class="d-grid gap-2">
          <a href="export_kinerja_pembimbing_detail.php?nik=<?= urlencode($nik) ?>&format=excel" class="btn btn-outline-success">
            <i class="fas fa-file-excel me-1"></i> Export Excel
          </a>
          <a href="export_kinerja_pembimbing_detail.php?nik=<?= urlencode($nik) ?>&format=pdf" class="btn btn-outline-danger">
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
          Halaman ini menampilkan daftar mahasiswa yang dibimbing oleh dosen terkait, lengkap
          dengan judul, jenis bimbingan, tanggal mulai, dan status bimbingan.
        </p>
        <p>
          Misalnya:
          - Tombol <i class="fas fa-eye"></i> pada kolom Aksi digunakan untuk melihat detail bimbingan mahasiswa.
          - Tombol Export digunakan untuk mengunduh data dalam format Excel atau PDF.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<?php include('5script.php'); ?>
