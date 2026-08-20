<?php $page = 'log_login'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>


<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Log Login
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Mencatat siapa login, kapan, dan status sukses/gagal.</p>
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
                  <b>Status:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Peran:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>User:</b> Semua
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
                      <th title="Tanggal dan waktu percobaan login">Waktu</th>
                      <th title="Username/akun yang mencoba login">User Login</th>
                      <th title="Peran aktif akun saat login">Role</th>
                      <th title="Status login: sukses atau gagal">Status</th>
                      <th title="Alasan gagal (jika status gagal)">Keterangan</th>
                      <th title="IP address perangkat">IP Address</th>
                      <th title="Jenis device & browser">Device/Browser</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>2026-03-19 07:58</td>
                      <td>andi.prasetyo</td>
                      <td>Dosen</td>
                      <td><span class="badge badge-success">Sukses</span></td>
                      <td>—</td>
                      <td>103.24.56.12</td>
                      <td>Chrome / Windows 10</td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td>2026-03-19 08:03</td>
                      <td>dewi.anggraini</td>
                      <td>Manajer</td>
                      <td><span class="badge badge-danger">Gagal</span></td>
                      <td>Password salah (percobaan ke-2)</td>
                      <td>36.75.90.14</td>
                      <td>Edge / Windows 11</td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td>2026-03-19 08:10</td>
                      <td>mahasiswa2201</td>
                      <td>Mahasiswa</td>
                      <td><span class="badge badge-success">Sukses</span></td>
                      <td>—</td>
                      <td>182.4.11.90</td>
                      <td>Safari / iOS 17</td>
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
        <h5 class="modal-title" id="modalFilterLabel">Filter Log Login</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="" method="GET">
        <div class="modal-body">
          <div class="mb-3">
            <label for="status_login" class="form-label">Status</label>
            <select name="status_login" id="status_login" class="custom-select">
              <option value="">-- Semua Status --</option>
              <option value="sukses">Sukses</option>
              <option value="gagal">Gagal</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="role_login" class="form-label">Role</label>
            <select name="role_login" id="role_login" class="custom-select">
              <option value="">-- Semua Role --</option>
              <option value="admin">Admin</option>
              <option value="manajer">Manajer</option>
              <option value="dosen">Dosen</option>
              <option value="mahasiswa">Mahasiswa</option>
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
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan Log Login</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>
          Log Login mencatat setiap percobaan masuk ke sistem — siapa yang login, kapan, dan apakah berhasil atau gagal.
          Bagian dari System Log (aktivitas teknis sistem), digunakan untuk monitoring keamanan akses dan troubleshooting
          masalah login pengguna.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>
