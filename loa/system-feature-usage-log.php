<?php $page = 'feature_usage_log'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>


<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Feature Usage Log
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Memonitor penggunaan fitur untuk evaluasi dan perbaikan sistem.</p>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <!-- ========== CARD : Filter ========== -->
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <b>Rentang Waktu:</b> 11 Mar 2026 - 19 Mar 2026 &nbsp;
                </div>
                <div class="col-md-6">
                  <b>Fitur:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Modul:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Hasil:</b> Semua
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-tools ml-auto">
                <button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-filter mr-1"></i> Filter
                </button>
              </div>
            </div>
          </div>

          <!-- ========== CARD : Tabel ========== -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table1 table-bordered table-striped table-sm datatables1">
                  <thead class="text-uppercase">
                    <tr class="text-center">
                      <th title="Nomor urut baris data">No</th>
                      <th title="Tanggal dan waktu fitur digunakan">Waktu</th>
                      <th title="Pengguna yang menggunakan fitur">User</th>
                      <th title="Nama fitur yang digunakan">Fitur</th>
                      <th title="Modul tempat fitur berada">Modul</th>
                      <th title="Jumlah penggunaan pada sesi/hari ini">Frekuensi</th>
                      <th title="Hasil eksekusi fitur">Hasil</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>2026-03-19 08:50</td>
                      <td>Andi Prasetyo</td>
                      <td>Export Rekap Nilai (Excel)</td>
                      <td>Perkuliahan</td>
                      <td>3x</td>
                      <td><span class="badge badge-success">Berhasil</span></td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td>2026-03-19 09:20</td>
                      <td>Dewi Anggraini</td>
                      <td>Filter Monev Multi-Kriteria</td>
                      <td>Monitoring & Evaluasi</td>
                      <td>7x</td>
                      <td><span class="badge badge-success">Berhasil</span></td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td>2026-03-19 10:05</td>
                      <td>Budi Santoso</td>
                      <td>Import Soal Ujian (Bulk)</td>
                      <td>Perkuliahan</td>
                      <td>1x</td>
                      <td><span class="badge badge-danger">Gagal</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div><!-- /.card-body -->
          </div>

        </div>
      </div>
    </div>
  </section>
</div>


<?php include('4footer.php'); ?>

<!-- Modal Filter -->
<div class="modal fade" id="modalFilter" tabindex="-1" aria-labelledby="modalFilterLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="modalFilterLabel">Filter Feature Usage Log</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="" method="GET">
        <div class="modal-body">
          <div class="mb-3">
            <label for="fitur_fu" class="form-label">Fitur</label>
            <select name="fitur_fu" id="fitur_fu" class="custom-select">
              <option value="">-- Semua Fitur --</option>
              <option value="export">Export</option>
              <option value="import">Import</option>
              <option value="filter">Filter</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="hasil_fu" class="form-label">Hasil</label>
            <select name="hasil_fu" id="hasil_fu" class="custom-select">
              <option value="">-- Semua Hasil --</option>
              <option value="berhasil">Berhasil</option>
              <option value="gagal">Gagal</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-info">Terapkan Filter</button>
          </div>
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
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan Feature Usage Log</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>
          Feature Usage Log mencatat fitur spesifik apa yang dipakai pengguna (bukan sekadar halaman apa yang dibuka —
          lihat Page View Log untuk itu). Data ini membantu tim produk mengevaluasi fitur mana yang benar-benar
          dipakai, mana yang jarang disentuh, sebagai dasar perbaikan sistem ke depan.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>
