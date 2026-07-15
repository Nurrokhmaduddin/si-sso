<?php $page = 'monev_pustaka_publikasi'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar--.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">  Media
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
          <a class="nav-link " href="sita-master-sub-kategori-media.php"><i class="fas fa-list me-1"></i> Daftar Sub Kategori Media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="sita-master-sub-kategori-media1.php"><i class="fas fa-list me-1"></i> Daftar Kategori Media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="sita-master-sub-kategori-media2.php"><i class="fas fa-list me-1"></i> Daftar Media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="sita-master-sub-kategori-media3.php"><i class="fas fa-list me-1"></i> Daftar Bukti Dokumen</a>
        </li>
      </ul>




      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">

          <!-- ========== CARD : Filter & Export ========== -->
          <div class="card">
           <!--  <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <b>Tahun Akademik:</b> 2025/Ganjil
                </div>
                <div class="col-md-4">
                  <b>Jenis Publikasi/Diseminasi:</b> Semua
                </div>
                <div class="col-md-4">
                  <b>Media:</b> Semua
                </div>
              </div>
            </div> -->

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
                      <th>Nama</th>
                      <th>Jenis Media</th>
                      <th width="15%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php

                    $rows = [

                      ['Skripsi','Jurnal'],
                      ['Skripsi','Prosiding'],
                      ['Skripsi','Media Massa'],
                      ['Skripsi','Poster Konferensi'],
                      ['Magang','Jurnal'],
                      ['Magang','Prosiding'],
                      ['Magang','Buku Kasus'],
                      ['Magang','Media Massa'],
                      ['Magang','Poster Konferensi'],
                      ['Magang','Presentasi Konferensi'],

                    ];

                    $no = 1;

                    foreach($rows as $r):

                      ?>

                      <tr>

                        <td class="text-center"><?= $no++; ?></td>

                        <td class="text-center">
                          <strong><?= htmlspecialchars($r[0]); ?></strong>
                        </td>

                        <td>
                          <?= htmlspecialchars($r[1]); ?>
                        </td>

                        <td class="text-center">

                          <a href="#" class="btn btn-xs btn-info">
                            <i class="fas fa-eye"></i>
                          </a>

                          <a href="#" class="btn btn-xs btn-warning">
                            <i class="fas fa-edit"></i>
                          </a>

                          <a href="#" class="btn btn-xs btn-danger">
                            <i class="fas fa-trash"></i>
                          </a>

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
