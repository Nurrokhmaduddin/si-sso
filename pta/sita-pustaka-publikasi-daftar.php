<?php $page = 'monev_pustaka_publikasi'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar--.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Pustaka Publikasi/Desiminasi
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
          <a class="nav-link " href="sita-pustaka-publikasi-dasbor.php"><i class="fas fa-chart-pie me-1"></i> Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="sita-pustaka-publikasi-daftar.php"><i class="fas fa-list me-1"></i> Daftar</a>
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
                  <b>Tahun Akademik:</b> 2025/Ganjil
                </div>
                <div class="col-md-4">
                  <b>Jenis Publikasi/Diseminasi:</b> Semua
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
                      <th width="5px">No.</th>
                      <th>Tahun Akademik</th>
                      <th>Judul TA </th>
                      <th>Dosen Pembimbing</th>
                      <th>Mahasiswa</th>
                      <th>Jenis TA</th>
                      <th>Media</th>
                      <th>Kategori Media</th>
                      <th>Sub Kategori Media</th>
                      <th>Nama Media</th>
                      <th>Dokumen</th>
                      <th>Konnversi Nilai</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php

                    $rows = [

                      [
                        '2024 - Genap',
                        'Pengaruh Influencer Attribute, Live Streaming Marketing, Brand Image dan User Experience Terhadap Purchase Intention Di Tiktok Shop',
                        'Dwi Martutiningrum, S.Pd., M.Sc.',
                        '18311512<br>Tinezia Hairunisya',
                        'Skripsi',
                        'Jurnal',
                        'Jurnal Nasional',
                        'Tidak Terindeks Sinta',
                        'Selekta Manajemen',
                        '',
                        'B+'
                      ],

                      [
                        '2024 - Genap',
                        'PENGARUH SIKAP PADA PRODUK, KONTROL PERILAKU YANG DIRASAKAN, DAN NORMA SUBJEKTIF TERHADAP NIAT MEMBELI KEMBALI PADA PRODUK ORISINIL SEPATU NIKE',
                        'Istyakara Muslichah, S.E., MBA.',
                        '18311324<br>Bianca Fri Amalia',
                        'Skripsi',
                        '',
                        '',
                        '',
                        '',
                        '',
                        ''
                      ],

                      [
                        '2024 - Genap',
                        'Pengaruh Lingkungan Kerja dan Kepemimpinan Transformasional Terhadap Kepuasan Kerja Serta Dampaknya Terhadap Kinerja Karyawan Pada Fakultas Bisnis dan Ekonomika Universitas Islam Indonesia',
                        'Abdur Rafik, S.E., M.Sc.',
                        '18311500<br>Revo Wahyu Wicaksono',
                        'Skripsi',
                        'Jurnal',
                        'Jurnal Nasional',
                        'Tidak Terindeks Sinta',
                        'Selekta Manajemen : Jurnal Mahasiswa Bisnis dan Manajemen',
                        '',
                        'B+'
                      ],

                      [
                        '2024 - Genap',
                        'Analisis Pengaruh Kualitas dan Inovasi Desain Pada Produk Terhadap Kinerja Operasional',
                        "Nursya'bani Purnama, S.E., M.Si.",
                        '18311076<br>Destine Praharsi Dewayani',
                        'Skripsi',
                        'Jurnal',
                        'Jurnal Nasional',
                        'Tidak Terindeks Sinta',
                        'Selekta Manajemen',
                        '',
                        'B+'
                      ],

                      [
                        '2024 - Genap',
                        'Manajemen Keuangan',
                        'Raden Roro Ratna Roostika, S.E., MAC., Ph.D',
                        '18311514<br>Syachrul Rahendra',
                        'Skripsi',
                        '',
                        '',
                        '',
                        '',
                        '',
                        ''
                      ],

                      [
                        '2024 - Genap',
                        'THE DYNAMICS OF SEASONAL EMPLOYMENT: A PHENOMENOLOGICAL STUDY IN THE HAJJ CONTEXT',
                        'Jaya Addin Linando, S.E., MBA., Dr.rer.soc.oec.',
                        '21311641<br>Ramez A M Albatta',
                        'Magang',
                        '',
                        '',
                        '',
                        '',
                        '',
                        ''
                      ],

                      [
                        '2024 - Genap',
                        'Pengaruh Inflasi Dan Nilai Tukar Rupiah Terhadap Kinerja ISSI di BEI',
                        'Katiya Nahda, S.E., M.Sc.',
                        '18311254<br>Hartati Fisamawati',
                        'Skripsi',
                        'Jurnal',
                        'Jurnal Nasional',
                        'Tidak Terindeks Sinta',
                        'Selekta Manajemen',
                        '',
                        'B+'
                      ],

                      [
                        '2024 - Genap',
                        'Implementation of Quality Management System to Achieve Operation Excellence',
                        'Dessy Isfianadewi, Dr., S.E., M.M.',
                        "20311536<br>Jafaruddin Fadhil Ma'Ruf",
                        'Magang',
                        'Jurnal',
                        'Jurnal Internasional',
                        'Terindeks EBSCO/DOAJ/Proquest/Copernicus/IEEE',
                        'IJEBIR',
                        '',
                        ''
                      ],

                      [
                        '2024 - Genap',
                        'THE EFFECTIVENESS OF THE INTERNSHIP: STUDY CASE AT PT ERICK MARSUDI UTOMO',
                        'Jaya Addin Linando, S.E., MBA., Dr.rer.soc.oec.',
                        '21311522<br>Daffa Al Faruq',
                        'Magang',
                        'Jurnal',
                        'Jurnal Nasional',
                        'Sinta 3',
                        'EKOMBIS REVIEW',
                        '',
                        ''
                      ],

                      [
                        '2024 - Genap',
                        'PEREMPUAN BERBAGAI PERAN: ANTARA DOMESTIK DAN BISNIS',
                        'Andriyastuti Suratman, S.E., M.M.',
                        '18311232<br>Alya Hafizhah',
                        'Skripsi',
                        'Jurnal',
                        'Jurnal Nasional',
                        'Tidak Terindeks Sinta',
                        'Selekta Manajemen: Jurnal Mahasiswa Bisnis & Manajemen',
                        '',
                        'B+'
                      ],

                    ];

                    $no=1;

                    foreach($rows as $r):

                      ?>

                      <tr>

                        <td class="text-center"><?= $no++; ?></td>

                        <td><?= $r[0]; ?></td>

                        <td><?= $r[1]; ?></td>

                        <td><?= $r[2]; ?></td>

                        <td><?= $r[3]; ?></td>

                        <td class="text-center"><?= $r[4]; ?></td>

                        <td><?= $r[5] ?: '-'; ?></td>

                        <td><?= $r[6] ?: '-'; ?></td>

                        <td><?= $r[7] ?: '-'; ?></td>

                        <td><?= $r[8] ?: '-'; ?></td>

                        <td class="text-center">
                          <?php if($r[9]==''): ?>
                            <span class="badge badge-success">Download</span>
                          <?php else: ?>
                            <a href="#" class="btn btn-xs btn-outline-primary">
                              <i class="fas fa-file-pdf"></i>
                            </a>
                          <?php endif; ?>
                        </td>

                        <td class="text-center">
                          <?= $r[10] ?: '-'; ?>
                        </td>

                        <td class="text-center">

                          <button class="btn btn-sm btn-info">
                            <i class="fas fa-eye"></i>
                          </button>

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
