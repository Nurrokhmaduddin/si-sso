<?php $page = 'notifikasi_log'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>


<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Notifikasi Log
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Mencatat semua noise atau hambatan penerimaan pesan kepada pengguna terkait.</p>
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
                  <b>Channel:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Status Kirim:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Template:</b> Semua
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
                      <th title="Tanggal dan waktu notifikasi dikirim/dicoba kirim">Waktu</th>
                      <th title="Penerima notifikasi">Penerima</th>
                      <th title="Kanal pengiriman: email, SMS, push, in-app">Channel</th>
                      <th title="Template/judul notifikasi yang dipakai">Template</th>
                      <th title="Status pengiriman">Status Kirim</th>
                      <th title="Alasan gagal, jika status gagal">Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>2026-03-19 06:00</td>
                      <td>Semua Dosen Pembimbing</td>
                      <td>Email</td>
                      <td>Reminder Verifikasi Soal Ujian</td>
                      <td><span class="badge badge-success">Terkirim</span></td>
                      <td>—</td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td>2026-03-19 06:02</td>
                      <td>dewi.anggraini@kampus.ac.id</td>
                      <td>Email</td>
                      <td>Persetujuan Anggaran Menunggu Review</td>
                      <td><span class="badge badge-danger">Gagal</span></td>
                      <td>Mailbox penuh (bounce)</td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td>2026-03-19 07:15</td>
                      <td>mahasiswa2201</td>
                      <td>In-App</td>
                      <td>Status Yudisium Diperbarui</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td>Menunggu antrian pengiriman</td>
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
        <h5 class="modal-title" id="modalFilterLabel">Filter Notifikasi Log</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="" method="GET">
        <div class="modal-body">
          <div class="mb-3">
            <label for="channel_notif" class="form-label">Channel</label>
            <select name="channel_notif" id="channel_notif" class="custom-select">
              <option value="">-- Semua Channel --</option>
              <option value="email">Email</option>
              <option value="sms">SMS</option>
              <option value="push">Push</option>
              <option value="in_app">In-App</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status_kirim" class="form-label">Status Kirim</label>
            <select name="status_kirim" id="status_kirim" class="custom-select">
              <option value="">-- Semua Status --</option>
              <option value="terkirim">Terkirim</option>
              <option value="gagal">Gagal</option>
              <option value="pending">Pending</option>
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
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan Notifikasi Log</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>
          Notifikasi Log mencatat status pengiriman setiap notifikasi ke pengguna — bukan konten/template-nya
          (lihat Konfigurasi Setup > Template Notifikasi untuk itu), tapi catatan teknis apakah pesan berhasil
          sampai, gagal, atau masih dalam antrian.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>
