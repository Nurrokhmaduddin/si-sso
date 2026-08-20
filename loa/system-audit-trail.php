<?php $page = 'audit_trail'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>


<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Audit Trail — Riwayat Perubahan Data
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Jejak perubahan data: siapa mengubah, field apa, nilai sebelum & sesudah, kapan, dan alasannya (jika ada).</p>
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
                  <b>Modul:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>User:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Tabel/Entity:</b> Semua
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
                      <th title="Tanggal dan waktu perubahan dilakukan">Waktu</th>
                      <th title="Pengguna yang melakukan perubahan">User</th>
                      <th title="Modul/halaman sumber perubahan">Modul</th>
                      <th title="Tabel/entity data yang diubah">Tabel/Entity</th>
                      <th title="Nama field yang diubah">Field</th>
                      <th title="Nilai sebelum perubahan">Nilai Sebelum</th>
                      <th title="Nilai sesudah perubahan">Nilai Sesudah</th>
                      <th title="Alasan perubahan (opsional)">Alasan</th>
                      <th title="Status persetujuan perubahan, jika berlaku">Status Persetujuan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>2026-03-19 09:12</td>
                      <td>Dewi Anggraini</td>
                      <td>Master Mahasiswa</td>
                      <td>mahasiswa</td>
                      <td>status_aktif</td>
                      <td>Aktif</td>
                      <td>Cuti</td>
                      <td>Pengajuan cuti akademik semester genap</td>
                      <td><span class="badge badge-success">Disetujui</span></td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td>2026-03-19 10:47</td>
                      <td>Andi Prasetyo</td>
                      <td>Pemetaan CPL</td>
                      <td>pemetaan_cpl</td>
                      <td>bobot_ik</td>
                      <td>0.20</td>
                      <td>0.25</td>
                      <td>Penyesuaian bobot indikator kinerja</td>
                      <td><span class="badge badge-warning">Menunggu</span></td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td>2026-03-19 11:05</td>
                      <td>Sistem (Batch)</td>
                      <td>Yudisium</td>
                      <td>yudisium</td>
                      <td>status_kelulusan</td>
                      <td>Proses</td>
                      <td>Lulus</td>
                      <td>—</td>
                      <td><span class="badge badge-success">Disetujui</span></td>
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
        <h5 class="modal-title" id="modalFilterLabel">Filter Audit Trail</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="" method="GET">
        <div class="modal-body">
          <div class="mb-3">
            <label for="modul" class="form-label">Modul</label>
            <select name="modul" id="modul" class="custom-select">
              <option value="">-- Semua Modul --</option>
              <option value="master_mahasiswa">Master Mahasiswa</option>
              <option value="pemetaan_cpl">Pemetaan CPL</option>
              <option value="yudisium">Yudisium</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status_approval" class="form-label">Status Persetujuan</label>
            <select name="status_approval" id="status_approval" class="custom-select">
              <option value="">-- Semua Status --</option>
              <option value="disetujui">Disetujui</option>
              <option value="menunggu">Menunggu</option>
              <option value="ditolak">Ditolak</option>
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
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan Audit Trail</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>
          Audit Trail mencatat jejak perubahan data (bukan aktivitas teknis sistem). Setiap baris menjawab pertanyaan
          "siapa mengubah data ini?" — lengkap dengan nilai sebelum & sesudah, field yang diubah, waktu, dan alasan perubahan (jika ada).
        </p>
        <p>
          Data pada halaman ini bersifat immutable (tidak dapat diubah/dihapus) dan digunakan untuk keperluan governance,
          compliance, dan investigasi perubahan data. Berbeda dengan System Log yang mencatat aktivitas teknis sistem.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>
