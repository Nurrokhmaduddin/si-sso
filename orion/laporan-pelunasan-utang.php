<?php $page = 'laporan_pelunasan_utang'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php
// Include sidebar sesuai peran
$sidebar_file = "3sidebar-{$role}.php";
if (file_exists($sidebar_file)) {
    include($sidebar_file);
} else {
    include('3sidebar.php');
}
?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0"> Laporan Pelunasan Utang
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
                  <b>Supplier:</b> Semua Toko
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
                  <tr align="center" role="row"><th class="sorting_disabled" rowspan="1" colspan="1">No.</th><th class="sorting_disabled" rowspan="1" colspan="1">Alamat Gudang</th><th class="sorting_disabled" rowspan="1" colspan="1">Tanggal Pembayaran</th><th class="sorting_disabled" rowspan="1" colspan="1">No Faktur</th><th class="sorting_disabled" rowspan="1" colspan="1">Supplier</th><th class="sorting_disabled" rowspan="1" colspan="1">Total Beli</th><th class="sorting_disabled" rowspan="1" colspan="1">Nominal</th><th class="sorting_disabled" rowspan="1" colspan="1">Retur</th><th class="sorting_disabled" rowspan="1" colspan="1">Potongan</th><th class="sorting_disabled" rowspan="1" colspan="1">Ket</th></tr>
                </thead>
                <tfoot>
                  <tr><th style="text-align: center !important;" colspan="5" rowspan="1">Total (Rp)</th><th style="text-align: right !important;" id="totalHpp" rowspan="1" colspan="1">725.396.610,35</th><th style="text-align: right !important;" id="totalNominal" rowspan="1" colspan="1">720.538.610,35</th><th style="text-align: right !important;" id="totalRetur" rowspan="1" colspan="1">0,00</th><th style="text-align: right !important;" id="totalPotongan" rowspan="1" colspan="1">4.858.000,00</th><th rowspan="1" colspan="1"></th></tr>
                </tfoot>
              <tbody><tr class="odd"><td class="dtr-control" style="text-align: center;">1</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: left;">003</td><td style="text-align: left;">SEGARA JAYA SUBRON</td><td style="text-align: right !important;">53.508.516,00</td><td style="text-align: right !important;">53.508.516,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: left;">SUTIKNO LAYARTA</td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">2</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: left;">25955/CG02/26</td><td style="text-align: left;">CENTRAL GEMILANG</td><td style="text-align: right !important;">2.700.000,00</td><td style="text-align: right !important;">2.700.000,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: left;">CALVINO SURYA</td></tr><tr class="odd"><td class="dtr-control" style="text-align: center;">3</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: left;">018</td><td style="text-align: left;">PT SUGGO METAL CEMERLANG</td><td style="text-align: right !important;">10.000.000,00</td><td style="text-align: right !important;">10.000.000,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: left;">suggo</td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">4</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: left;">ESKAN</td><td style="text-align: left;">MEGADANA</td><td style="text-align: right !important;">5.340.000,00</td><td style="text-align: right !important;">5.340.000,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: left;">RYAN PRADANA 24/2 = 20 JT +2/3 = 4.002.100</td></tr><tr class="odd"><td class="dtr-control" style="text-align: center;">5</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: left;">033</td><td style="text-align: left;">MEGADANA</td><td style="text-align: right !important;">675.000,00</td><td style="text-align: right !important;">675.000,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: left;">RYAN PRADANA 24/2 = 20 JT +2/3 = 4.002.100</td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">6</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: left;">034</td><td style="text-align: left;">MEGADANA</td><td style="text-align: right !important;">18.328.968,00</td><td style="text-align: right !important;">18.328.968,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: left;">RYAN PRADANA 24/2 = 20 JT +2/3 = 4.002.100</td></tr><tr class="odd"><td class="dtr-control" style="text-align: center;">7</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: left;">035</td><td style="text-align: left;">MEGADANA</td><td style="text-align: right !important;">548.136,00</td><td style="text-align: right !important;">548.136,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: left;">RYAN PRADANA 24/2 = 20 JT +2/3 = 4.002.100</td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">8</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: left;">5559/LEEWAN</td><td style="text-align: left;">SEGARA JAYA DJP</td><td style="text-align: right !important;">1.830.024,00</td><td style="text-align: right !important;">1.830.024,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: left;">YENNY KOSNEN</td></tr><tr class="odd"><td class="dtr-control" style="text-align: center;">9</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: left;">0668</td><td style="text-align: left;">PT. MUTIARA MAJU SETIA</td><td style="text-align: right !important;">7.560.000,00</td><td style="text-align: right !important;">7.560.000,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: left;">DI LUNASKAN WES LUNAS</td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">10</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">02-Mar-2026</td><td style="text-align: left;">667</td><td style="text-align: left;">PT. MUTIARA MAJU SETIA</td><td style="text-align: right !important;">4.050.000,00</td><td style="text-align: right !important;">4.050.000,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: right !important;">0,00</td><td style="text-align: left;">DI LUNASKAN WES LUNAS</td></tr></tbody>



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