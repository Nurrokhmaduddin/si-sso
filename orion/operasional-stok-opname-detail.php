<?php $page = 'operasional_stok_opname'; ?>
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
      <h3 class="mb-0"> Detail Stok Opname
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">...........</p>
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
              <table class="table table-bordered table-striped table-sm">
                <tbody>
                  <tr>
                    <td>Gudang  </td>
                    <td>: Purwokerto</td>
                  </tr>
                   <tr>
                    <td>Tanggal </td>
                    <td>: 17-March-2026</td>
                  </tr>
                   <tr>
                    <td>Penanggung Jawab  </td>
                    <td>: RIVAL JENAL</td>
                  </tr>
                </tbody>
              </table>
            </div>

             <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-secondary btn-sm " onclick="window.location='transaksi-tracking-order-.php<?=$q;?>'">
                  <i class="fas fa-reply me-1"></i> Kembali
                </button>
                <!-- <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button> -->
                <a href="data-stok-opname.xlsx" download class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </a>
              </div>
            </div>
            
          </div>

          <!-- ========== CARD : Tabel  Granular ========== -->
          <div class="card">
           <!--  <div class="card-header d-flex align-items-center">
              <h5 class="card-title mb-0">Daftar Faktur Penjualan</h5>    
              
            </div> -->

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">
                  
                 
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Merek</th>
            <th>Stok Baik</th>
            <th>Stok Rusak</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>FOLDING HANGER 24 STICK (LS(GB-22))</td>
            <td>LIONSTAR</td>
            <td>30</td>
            <td>0</td>
        </tr>
        <tr>
            <td>2</td>
            <td>FOLDING HANGER 30 STICK (LS(GB-23))</td>
            <td>LIONSTAR</td>
            <td>28</td>
            <td>0</td>
        </tr>
        <tr>
            <td>3</td>
            <td>BOTOL AIR HYDRO 400 ML (LS(NH-75))</td>
            <td>LIONSTAR</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>4</td>
            <td>ICE TRAY 002 (LS(IT-6))</td>
            <td>LIONSTAR</td>
            <td>15</td>
            <td>0</td>
        </tr>
        <tr>
            <td>5</td>
            <td>BOTOL AIR OLIF 600 ML (LS(NH-90))</td>
            <td>LIONSTAR</td>
            <td>26</td>
            <td>0</td>
        </tr>
        <tr>
            <td>6</td>
            <td>SELLY ROUND BASIN NO.10 (LS(BA-38))</td>
            <td>LIONSTAR</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>7</td>
            <td>SELLY ROUND BASIN NO.12 (LS(BA-39))</td>
            <td>LIONSTAR</td>
            <td>22</td>
            <td>0</td>
        </tr>
        <tr>
            <td>8</td>
            <td>LIVINA TOILET BRUSH NO 131 (LS(BO-41))</td>
            <td>LIONSTAR</td>
            <td>108</td>
            <td>0</td>
        </tr>
        <tr>
            <td>9</td>
            <td>LIVINA TOILET BRUSH NO 120 (LS(BO-31))</td>
            <td>LIONSTAR</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>10</td>
            <td>TOPLES HUGO ROUND JAR 100 3 LTR (LS(PP-30))</td>
            <td>LIONSTAR</td>
            <td>0</td>
            <td>0</td>
        </tr>
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