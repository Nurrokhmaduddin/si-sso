<?php $page = 'monev_pustaka_publikasi'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar--.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Kinerja Mahasiswa
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">Rekap jumlah dan tingkat keberhasilan publikasi/desiminasi mahasiswa per tahun akademik</p>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <!-- Nav Tabs: Dashboard / Daftar -->
      <ul class="nav nav-tabs mb-3">
        <li class="nav-item">
          <a class="nav-link " href="sita-kinerja-mahasiswa-dasbor.php"><i class="fas fa-chart-pie me-1"></i> Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="sita-kinerja-mahasiswa-daftar.php"><i class="fas fa-list me-1"></i> Daftar</a>
        </li>
      </ul>

      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">

          <!-- ========== CARD : Filter & Export ========== -->
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <b>Periode Akademik:</b> 2025/Ganjil
                </div>
                <div class="col-md-4">
                  <b>Jenis TA:</b> Semua
                </div>
                <!-- <div class="col-md-4">
                  <b>Media:</b> Semua
                </div> -->
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
              </div>
            </div>
          </div>

          <!-- ========== CARD : Tabel Rekap ========== -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">
                  <thead>
                    <tr class="text-uppercase text-center">
                      <th width="5%">No.</th>
                      <th>NIM</th>
                      <th>Nama Mahasiswa</th>
                      <th>Jenis TA</th>
                      <th>Aktivitas</th>
                      <th>Nama Dosen</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                      <th>Durasi (Hari)</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php

                    $rows = [

                      [
                        '22311459',
                        'Savaroja Farhan Putra Pradana',
                        'Skripsi',
                        'Bimbingan Tugas Akhir',
                        'Sutrisno, Prof., Dr., Drs., M.M.',
                        '2025-09-15 12:05:21',
                        '',
                        '302 hari (s/d hari ini)',
                        'Berlangsung'
                      ],

                      [
                        '22311312',
                        'Rafi Adil Wirabumi',
                        'RBB',
                        'Bimbingan Tugas Akhir',
                        'Bagus Panuntun, S.E., M.B.A.',
                        '2025-09-13 11:09:30',
                        '',
                        '304 hari (s/d hari ini)',
                        'Berlangsung'
                      ],

                      [
                        '22311366',
                        'Kansa Ashifa Ramadanti',
                        'Skripsi',
                        'Bimbingan Tugas Akhir',
                        'Muafi, Prof., Dr., S.E., M.Si.',
                        '2025-09-15 18:04:04',
                        '',
                        '302 hari (s/d hari ini)',
                        'Berlangsung'
                      ],

                      [
                        '22311208',
                        'Wanda Rachmalia Anung',
                        'Magang',
                        'Ujian Tugas Akhir',
                        'Jaya Addin Linando, S.E., MBA., Dr.rer.soc.oec.<br>Majang Palupi, Dr., BBA., MBA.',
                        '2026-07-03 13:15:39',
                        '',
                        '11 hari (s/d hari ini)',
                        'Berlangsung'
                      ],

                      [
                        '21311353',
                        'Dien Dinasty Widyasari',
                        'Skripsi',
                        'Ujian Tugas Akhir',
                        'Anjar Priyono, S.E., M.Si., Ph.D.<br>Dessy Isfianadewi, Dr., S.E., M.M.',
                        '2026-06-30 11:01:17',
                        '',
                        '14 hari (s/d hari ini)',
                        'Berlangsung'
                      ],

                      [
                        '22311146',
                        'Avita Dwi Agustina',
                        'RBB',
                        'Ujian Tugas Akhir',
                        'Bagus Panuntun, S.E., M.B.A.<br>Dessy Isfianadewi, Dr., S.E., M.M.',
                        '2026-06-29 15:07:02',
                        '2026-07-06 11:41:57',
                        '6 hari',
                        'Selesai'
                      ],

                      [
                        '21311231',
                        "Abdan Tsany Mufid Musyaffa'",
                        'Skripsi',
                        'Bimbingan Tugas Akhir',
                        'Muafi, Prof., Dr., S.E., M.Si.',
                        '2025-03-06 10:26:52',
                        '2026-07-13 12:02:35',
                        '494 hari',
                        'Selesai'
                      ],

                      [
                        '22311318',
                        'Daisuke Bijak Kawashima',
                        'Magang',
                        'Ujian Tugas Akhir',
                        'Al Hasin, Drs., MBA.<br>Anjar Priyono, S.E., M.Si., Ph.D.',
                        '2026-06-28 18:44:58',
                        '2026-07-13 10:24:00',
                        '14 hari',
                        'Selesai'
                      ],

                      [
                        '22311353',
                        'Muhammad Kevin Arsyadurrahman',
                        'Magang',
                        'Ujian Tugas Akhir',
                        'Zaenal Arifin, Dr., M.Si.<br>Sri Mulyati, Dra., M.Si.',
                        '2026-06-27 19:45:11',
                        '',
                        '17 hari (s/d hari ini)',
                        'Berlangsung'
                      ],

                      [
                        '22311393',
                        'Indah Nurfadillah Adytama Faradea',
                        'Skripsi',
                        'Ujian Tugas Akhir',
                        'Muafi, Prof., Dr., S.E., M.Si.<br>Andriyastuti Suratman, S.E., M.M.',
                        '2026-06-27 13:22:11',
                        '',
                        '17 hari (s/d hari ini)',
                        'Berlangsung'
                      ],

                    ];

                    $no = 1;

                    foreach($rows as $r):

                      ?>

                      <tr>

                        <td class="text-center"><?= $no++; ?></td>

                        <td><?= htmlspecialchars($r[0]); ?></td>

                        <td><?= htmlspecialchars($r[1]); ?></td>

                        <td class="text-center"><?= htmlspecialchars($r[2]); ?></td>

                        <td><?= htmlspecialchars($r[3]); ?></td>

                        <td><?= $r[4]; ?></td>

                        <td class="text-center"><?= $r[5]; ?></td>

                        <td class="text-center">
                          <?= $r[6] == '' ? '<span class="badge badge-primary">Berlangsung</span>' : $r[6]; ?>
                        </td>

                        <td class="text-center"><?= $r[7]; ?></td>

                        <td class="text-center">
                          <?php if($r[8]=='Berlangsung'){ ?>
                            <span class="badge badge-primary">Aktif</span>
                          <?php } else { ?>
                            <span class="badge badge-success">Selesai</span>
                          <?php } ?>
                        </td>

                      </tr>

                    <?php endforeach; ?>

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
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="modalFilterLabel">Filter Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="GET">
        <div class="modal-body">
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Halaman ini otomatis menampilkan data tahun akademik terbaru saat pertama dibuka. Data awal yang tampil adalah tahun akademik [2025/Ganjil].
          </div>
          <div class="mb-3">
            <label for="tahun_akademik" class="form-label">Tahun Akademik</label>
            <select name="tahun_akademik" id="tahun_akademik" class="form-select">
              <option value="">-- Pilih Tahun Akademik --</option>
              <option value="2025/Ganjil">2025/Ganjil</option>
              <option value="2024/Genap">2024/Genap</option>
              <option value="2024/Ganjil">2024/Ganjil</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Publikasi/Diseminasi</label>
            <select name="jenis" id="jenis" class="form-select">
              <option value="">-- Pilih Jenis --</option>
              <option value="Magang">Magang</option>
              <option value="RBB">RBB</option>
            </select>
          </div>
          <!-- <div class="mb-3">
            <label for="media" class="form-label">Media</label>
            <select name="media" id="media" class="form-select">
              <option value="">-- Pilih Media --</option>
              <option value="Jurnal">Jurnal</option>
              <option value="Prosiding">Prosiding</option>
              <option value="Event Khusus">Event Khusus</option>
            </select>
          </div> -->
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
        <p class="mb-3">Pilih format export untuk data Pustaka Publikasi/Desiminasi:</p>
        <div class="d-grid gap-2">
          <a href="export-pustaka-publikasi.php?format=excel" class="btn btn-outline-success">
            <i class="fas fa-file-excel me-1"></i> Excel (.xlsx)
          </a>
          <a href="export-pustaka-publikasi.php?format=pdf" class="btn btn-outline-danger">
            <i class="fas fa-file-pdf me-1"></i> PDF
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
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan Halaman</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Halaman ini menampilkan rekap jumlah publikasi/desiminasi mahasiswa beserta tingkat
          keberhasilannya, dikelompokkan per tahun akademik dan jenis kegiatan (Magang/RBB).
        </p>
        <p>
          Misalnya:<br>
          - Kolom <b>Jumlah Publikasi</b> menunjukkan total publikasi yang tercatat pada kombinasi
          tahun akademik dan jenis kegiatan tersebut.<br>
          - Kolom <b>Tingkat Keberhasilan</b> menunjukkan persentase publikasi yang berhasil
          termuat di media resmi.<br>
          - Kolom <b>Media Terpopuler</b>, <b>Kategori</b>, dan <b>Sub Kategori</b> menunjukkan
          media publikasi yang paling banyak dipakai pada baris tersebut. Tanda "-" berarti belum
          ada publikasi yang berhasil termuat di media manapun.
        </p>
        <p>
          Gunakan tombol <b>Filter</b> untuk menyaring data berdasarkan tahun akademik, jenis, atau
          media, dan tombol <b>Export</b> untuk mengunduh data dalam format Excel atau PDF.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>
