<?php $page = 'error_log'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>


<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Error Log
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Mencatat semua error atau kegagalan sistem beserta pengguna terkait.</p>
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
                  <b>Level:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Modul/Endpoint:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Status Penanganan:</b> Semua
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
                      <th title="Tanggal dan waktu error terjadi">Waktu</th>
                      <th title="Tingkat keparahan error">Level</th>
                      <th title="Pengguna yang terkait/terdampak, jika ada">User Terkait</th>
                      <th title="Modul atau endpoint API sumber error">Modul/Endpoint</th>
                      <th title="Pesan error singkat">Pesan Error</th>
                      <th title="Status penanganan error">Status Penanganan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>2026-03-19 10:02</td>
                      <td><span class="badge badge-danger">CRITICAL</span></td>
                      <td>—</td>
                      <td>/api/yudisium/batch-process</td>
                      <td>Database connection timeout saat proses batch yudisium</td>
                      <td><span class="badge badge-warning">Investigasi</span></td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td>2026-03-19 10:15</td>
                      <td><span class="badge badge-warning">WARNING</span></td>
                      <td>Budi Santoso</td>
                      <td>perkuliahan-soal-ujian.php</td>
                      <td>Upload file melebihi batas ukuran maksimum (10MB)</td>
                      <td><span class="badge badge-success">Selesai</span></td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td>2026-03-19 11:30</td>
                      <td><span class="badge badge-secondary">ERROR</span></td>
                      <td>Sistem (Cron)</td>
                      <td>job:kirim-notifikasi-harian</td>
                      <td>Gagal mengirim notifikasi: SMTP connection refused</td>
                      <td><span class="badge badge-warning">Investigasi</span></td>
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
        <h5 class="modal-title" id="modalFilterLabel">Filter Error Log</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="" method="GET">
        <div class="modal-body">
          <div class="mb-3">
            <label for="level_error" class="form-label">Level</label>
            <select name="level_error" id="level_error" class="custom-select">
              <option value="">-- Semua Level --</option>
              <option value="critical">Critical</option>
              <option value="error">Error</option>
              <option value="warning">Warning</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status_penanganan" class="form-label">Status Penanganan</label>
            <select name="status_penanganan" id="status_penanganan" class="custom-select">
              <option value="">-- Semua Status --</option>
              <option value="investigasi">Investigasi</option>
              <option value="selesai">Selesai</option>
              <option value="diabaikan">Diabaikan</option>
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
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan Error Log</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>
          Error Log mencatat seluruh error atau kegagalan teknis sistem — baik yang dipicu aksi pengguna maupun proses
          background (cron/batch job). Digunakan oleh developer & DevOps untuk debugging dan troubleshooting, bukan
          untuk informasi bisnis.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>
