<?php $page = 'laporan_penjualan'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0"> Laporan Penjualan
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
          <!-- ========== CARD : Filter & Export ========== -->
          <div class="card">
            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Periode Tanggal:</b> 01 Jan 2026 - 09 Mar 2026
                </div>
                <div class="col-md-6">
                  <b>Gudang:</b> Semua Gudang
                </div>
                <div class="col-md-6">
                  <b>Toko:</b> Semua Toko
                </div>
                 <div class="col-md-6">
                  <b>Sales:</b> Semua Sales
                </div>
                <div class="col-md-6">
                  <b>Area:</b> Semua Area
                </div>

              </div>
            </div>

             <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export Tanda Terima Tagihan
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export Database
                </button>
              </div>
            </div>
            
          </div>



         <!-- ========== CARD : Tabel  Granular ========== -->
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm datatables1">
        
       
<thead>
                  <tr class="text-center" role="row"><th class="sorting_disabled" rowspan="1" colspan="1">No.</th><th class="sorting_disabled" rowspan="1" colspan="1">Alamat Gudang</th><th class="sorting_disabled" rowspan="1" colspan="1">Tanggal Penjualan</th><th class="sorting_disabled" rowspan="1" colspan="1">No Faktur</th><th class="sorting_disabled" rowspan="1" colspan="1">Toko</th><th class="sorting_disabled" rowspan="1" colspan="1">Area</th><th class="sorting_disabled" rowspan="1" colspan="1">Sales</th><th class="sorting_disabled" rowspan="1" colspan="1">Total Harga Penjualan</th></tr>
                </thead>
                <tfoot>
                  <tr><th colspan="7" style="text-align: center !important;" rowspan="1">Total Penjualan</th><th style="text-align: right !important;" id="footer-total" rowspan="1" colspan="1">612.547.913,07</th></tr>
                </tfoot>
              <tbody><tr class="odd"><td class="dtr-control" style="text-align: center;">1</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: center;">PJ/004549</td><td style="text-align: left;">E00259 - PEMBELI</td><td style="text-align: left;">PWT</td><td style="text-align: left;">OFFICE</td><td style="text-align: right !important;">66.800,00</td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">2</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: center;">PJ/004550</td><td style="text-align: left;">E00315 - TK ANDA</td><td style="text-align: left;">BANYUMAS</td><td style="text-align: left;">SUPRI</td><td style="text-align: right !important;">1.916.197,50</td></tr><tr class="odd"><td class="dtr-control" style="text-align: center;">3</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: center;">PJ/004551</td><td style="text-align: left;">E00148 - TOKO CERME</td><td style="text-align: left;">PURWOKERTO</td><td style="text-align: left;">OFFICE</td><td style="text-align: right !important;">4.280.437,20</td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">4</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: center;">PJ/004552</td><td style="text-align: left;">E00156 - TOKO MEWAH</td><td style="text-align: left;">SOKARAJA</td><td style="text-align: left;">SUPRI</td><td style="text-align: right !important;">1.288.000,00</td></tr><tr class="odd"><td class="dtr-control" style="text-align: center;">5</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: center;">PJ/004553</td><td style="text-align: left;">E00156 - TOKO MEWAH</td><td style="text-align: left;">SOKARAJA</td><td style="text-align: left;">SUPRI</td><td style="text-align: right !important;">635.550,00</td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">6</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: center;">PJ/004554</td><td style="text-align: left;">E00039 - RUMAH GERABAH</td><td style="text-align: left;">BANYUMAS</td><td style="text-align: left;">SUPRI</td><td style="text-align: right !important;">3.957.364,20</td></tr><tr class="odd"><td class="dtr-control" style="text-align: center;">7</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: center;">PJ/004555</td><td style="text-align: left;">E00079 - ARGO JENE</td><td style="text-align: left;">BANJARNEGARA</td><td style="text-align: left;">OFFICE</td><td style="text-align: right !important;">12.340.160,20</td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">8</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: center;">PJ/004556</td><td style="text-align: left;">E00296 - REMUJUNG</td><td style="text-align: left;">YOGYAKARTA</td><td style="text-align: left;">OFFICE</td><td style="text-align: right !important;">5.317.950,00</td></tr><tr class="odd"><td class="dtr-control" style="text-align: center;">9</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: center;">PJ/004557</td><td style="text-align: left;">E00075 - PROGO</td><td style="text-align: left;">YOGYAKARTA</td><td style="text-align: left;">OFFICE</td><td style="text-align: right !important;">14.085.000,00</td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">10</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: center;">PJ/004558</td><td style="text-align: left;">E00075 - PROGO</td><td style="text-align: left;">YOGYAKARTA</td><td style="text-align: left;">OFFICE</td><td style="text-align: right !important;">6.375.000,00</td></tr></tbody>


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
          <!-- Catatan penting -->
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Halaman ini otomatis menampilkan data angkatan terbaru saat pertama dibuka. Data awal yang tampil adalah angkatan [2025].
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
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



<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahDataLabel">Tambah Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="modal-body">

          <!-- Informasi -->
          <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
            <i class="fas fa-info-circle me-1"></i>
            <strong>Catatan:</strong> Semua field yang diberi tanda <span class="text-danger">*</span> wajib diisi.
          </div>

          <!-- Form Inputs -->
          <div class="mb-3">
            <label for="username" class="form-label">NIM <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
          </div>

          <div class="mb-3">
            <label for="displayname" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="displayname" name="displayname" placeholder="Masukkan Nama Lengkap" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
          </div>

          <div class="mb-3">
            <label for="hp" class="form-label">Nomor HP <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukkan Nomor HP" required>
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Peminatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Peminatan --</option>
              <option value="2025">A</option>
              <option value="2024">B</option>
              <option value="2023">C</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
            <select class="form-select" id="status" name="status" required>
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
              <option value="Cuti">Cuti</option>
              <option value="Skors">Skors</option>
              <option value="PassedOut">Passed Out</option>
              <option value="DropOut">Drop Out</option>
              <option value="Lulus">Lulus</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="foto" class="form-label">Foto <span class="text-danger">*</span></label>
            <input type="file" class="form-control" id="foto" name="foto" required>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Impor -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Impor Data</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">   
        <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
          <i class="fas fa-exclamation-triangle me-1"></i>
          <strong>Penting:</strong> Pastikan file yang akan diimpor menggunakan <strong>template resmi</strong> yang sudah disediakan. Menggunakan file lain atau format berbeda dapat menyebabkan <strong>kesalahan impor</strong>.
        </div>     

        <label class="form-label">Pilih File:</label>
        <input type="file" class="form-control mb-3" accept=".xlsx,.xls">

        <a href="template-impor-mahasiswa.xls" class="btn btn-sm btn-outline-success w-100">Download Template</a>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Impor</button>
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
          Ini adalah penjelasan panjang tentang tabel. Anda bisa menuliskan informasi detail,
          petunjuk penggunaan tombol, cara membaca data, dan tips penting lainnya di sini.
        </p>
        <p>
          Misalnya:  
          - Tombol Filter digunakan untuk memfilter data berdasarkan kolom.  
          - Tombol Impor digunakan untuk memasukkan data dari file Excel.  
          - Tombol Reset akan menghapus semua data di tabel, gunakan dengan hati-hati.  
        </p>
        <p>
          Anda bisa menambahkan banyak paragraf atau daftar sesuai kebutuhan.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalResetData" tabindex="-1" aria-labelledby="modalResetDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Konfirmasi Reset Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form action="proses_hapus_akun.php" method="POST">
        <div class="modal-body text-center">

          <!-- ID disimpan sebagai hidden input -->
          <input type="hidden" name="id_akun" id="hapus_id_akun">

          <p class="fs-5">Apakah Anda yakin ingin menghapus semua data ini?</p>

          <!-- Tampilkan kode dan nama akun -->
         <!--  <p class="text-muted mb-0 d-flex justify-content-center gap-2">
            <span id="hapus_kode_akun"></span>
            <span>|</span>
            <strong id="hapus_nama_akun"></strong>
          </p> -->

        </div>

        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </div>

      </form>
    </div>
  </div>
</div>


<?php include('5script.php'); ?>