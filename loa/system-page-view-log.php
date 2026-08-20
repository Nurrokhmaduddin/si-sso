<?php $page = 'page_view_log'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>


<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Page View Log
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Memonitor halaman yang dikunjungi pengguna untuk analisis penggunaan.</p>
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
                  <b>Peran:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Halaman:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Device:</b> Semua
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
                      <th title="Tanggal dan waktu halaman dikunjungi">Waktu</th>
                      <th title="Pengguna yang mengunjungi halaman">User</th>
                      <th title="Halaman/URL yang dikunjungi">Halaman</th>
                      <th title="Lama waktu pengguna berada di halaman">Durasi</th>
                      <th title="Halaman asal sebelum berpindah ke halaman ini">Referrer</th>
                      <th title="Jenis device yang digunakan">Device</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>2026-03-19 08:31</td>
                      <td>Andi Prasetyo</td>
                      <td>perkuliahan-portofolio-kelas.php</td>
                      <td>4m 12s</td>
                      <td>beranda-dosen.php</td>
                      <td>Desktop</td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td>2026-03-19 08:45</td>
                      <td>Dewi Anggraini</td>
                      <td>monev-rekap-kelas-.php</td>
                      <td>2m 05s</td>
                      <td>beranda-manajer.php</td>
                      <td>Desktop</td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td>2026-03-19 09:02</td>
                      <td>mahasiswa2201</td>
                      <td>progres-perwalian.php</td>
                      <td>1m 40s</td>
                      <td>beranda-mahasiswa.php</td>
                      <td>Mobile</td>
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
        <h5 class="modal-title" id="modalFilterLabel">Filter Page View Log</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="" method="GET">
        <div class="modal-body">
          <div class="mb-3">
            <label for="role_pv" class="form-label">Peran</label>
            <select name="role_pv" id="role_pv" class="custom-select">
              <option value="">-- Semua Peran --</option>
              <option value="admin">Admin</option>
              <option value="manajer">Manajer</option>
              <option value="dosen">Dosen</option>
              <option value="mahasiswa">Mahasiswa</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="device_pv" class="form-label">Device</label>
            <select name="device_pv" id="device_pv" class="custom-select">
              <option value="">-- Semua Device --</option>
              <option value="desktop">Desktop</option>
              <option value="mobile">Mobile</option>
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
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan Page View Log</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>
          Page View Log mencatat halaman apa saja yang dikunjungi pengguna dan berapa lama mereka di halaman tersebut.
          Digunakan untuk analisis pola penggunaan aplikasi — halaman mana yang paling sering diakses per role,
          untuk mendukung keputusan desain navigasi ke depan.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>
