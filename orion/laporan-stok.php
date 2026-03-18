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
      <h3 class="mb-0"> Laporan Stok
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
                  <b>Gudang:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Sales:</b>Semua
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
 		<h5>1️⃣ Laporan Posisi Stok (Stock Position)</h5><small>Menampilkan **stok saat ini per barang**.</small>
 		<div class="table-responsive">
 			<table class="table table-bordered table-striped table-sm">
 				<thead>
 					<tr align="center">
 						<th>No</th>
 						<th>Barang</th>
 						<th>Gudang</th>
 						<th>Stok</th>
 					</tr>
 				</thead>
 				<tbody>
 					<tr><td>1</td><td>Semen</td><td>Gudang A</td><td>120</td></tr>
 					<tr><td>2</td><td>Pasir</td><td>Gudang A</td><td>80</td></tr>
 					<tr><td>3</td><td>Batu</td><td>Gudang B</td><td>60</td></tr>
 				</tbody>
 				<tfoot>
 					Biasanya bisa difilter:
 					* per gudang
 					* per kategori barang
 					* per tanggal
 				</tfoot>
 			</table>
 		</div>
 	</div>
 </div>
 <!-- ========== CARD : Tabel  Granular ========== -->
 <div class="card">
 	<div class="card-body">
 		<h5>2️⃣ Laporan Mutasi Stok</h5><small>Menampilkan **pergerakan stok**</small>
 		<div class="table-responsive">
 			<table class="table table-bordered table-striped table-sm">
 				<thead>
 					<tr align="center">
 						<th>Tanggal</th>
 						<th>Barang</th>
 						<th>Masuk</th>
 						<th>Keluar</th>
 						<th>Saldo</th>
 					</tr>
 				</thead>
 				<tbody>
<tr><td>01-01</td><td>Semen</td><td>100</td><td>0</td><td>100</td></tr>
<tr><td>02-01</td><td>Semen</td><td>0</td><td>20</td><td>80</td></tr>
<tr><td>03-01</td><td>Semen</td><td>50</td><td>0</td><td>130</td></tr>
 				</tbody>
 				<tfoot>
 					Sumber mutasi:
 					* pembelian
 					* penjualan
 					* retur
 					* penyesuaian
 					* opname
 				</tfoot>
 			</table>
 		</div>
 	</div>
 </div>
<!-- ========== CARD : Tabel  Granular ========== -->
 <div class="card">
 	<div class="card-body">
 		<h5>3️⃣ Laporan Stok Minimum</h5><small>Menampilkan barang yang **stoknya di bawah batas minimal**.</small>
 		<div class="table-responsive">
 			<table class="table table-bordered table-striped table-sm">
 				<thead>
 					<tr align="center">
 						<th>Barang</th>
 						<th>Stok</th>
 						<th>Minimum</th>
 						<th>Status</th>
 					</tr>
 				</thead>
 				<tbody>
<tr><td>Semen</td><td>20</td><td>50</td><td>Kurang</td></tr>
<tr><td>Semen</td><td>10</td><td>30</td><td>Kurang</td></tr>
 				</tbody>
 				<tfoot>
 					Ini berguna untuk:
* perencanaan pembelian
* restock
 				</tfoot>
 			</table>
 		</div>
 	</div>
 </div>
<!-- ========== CARD : Tabel  Granular ========== -->
 <div class="card">
 	<div class="card-body">
 		<h5>4️⃣ Laporan Stok Opname</h5><small>Menampilkan **hasil pengecekan fisik gudang**.</small>
 		<div class="table-responsive">
 			<table class="table table-bordered table-striped table-sm">
 				<thead>
 					<tr align="center">
 						<th>Barang</th>
 						<th>Sistem</th>
 						<th>Fisik</th>
 						<th>Selisih</th>
 					</tr>
 				</thead>
 				<tbody>
<tr><td>Semen</td><td>100</td><td>95</td><td>-5</td></tr>
<tr><td>Pasir</td><td>80</td><td>82</td><td>+2</td></tr>
 				</tbody>
 				<tfoot>

 				</tfoot>
 			</table>
 		</div>
 	</div>
 </div>
<!-- ========== CARD : Tabel  Granular ========== -->
 <div class="card">
 	<div class="card-body">
 		<h5>5️⃣ Laporan Stok per Gudang)</h5><small></small>
 		<div class="table-responsive">
 			<table class="table table-bordered table-striped table-sm">
 				<thead>
 					<tr align="center">
 						<th>No</th>
 						<th>Barang</th>
 						<th>Gudang A</th>
 						<th>Gudang B</th>
 						<th>Total</th>
 					</tr>
 				</thead>
 				<tbody>
 					<tr><td>1</td><td>Semen</td><td>70</td><td>120</td><td>190</td></tr>
 					<tr><td>2</td><td>Pasir</td><td>30</td><td>80</td><td>110</td></tr>
 					<tr><td>3</td><td>Batu</td><td>30</td><td>60</td><td>90</td></tr>
 				</tbody>
 				<tfoot>
 				</tfoot>
 			</table>
 		</div>
 	</div>
 </div>
<!-- ========== CARD : Tabel  Granular ========== -->
 <div class="card">
 	<div class="card-body">
 		<h5>6️⃣ Laporan Kartu Stok</h5><small>Ini laporan yang sangat detail.</small>
 		<div class="table-responsive">
 			<table class="table table-bordered table-striped table-sm">
 				<thead>
 					<tr align="center">
 						<th>Tanggal</th>
 						<th>Transaksi</th>
 						<th>Masuk</th>
 						<th>Keluar</th>
 						<th>Saldo</th>
 					</tr>
 				</thead>
 				<tbody>
<tr><td>01-01</td><td>Pembelian</td><td>100</td><td>0</td><td>100</td></tr>
<tr><td>02-01</td><td>Penjualan</td><td>0</td><td>20</td><td>80</td></tr>
<tr><td>03-01</td><td>Retur</td><td>10</td><td>0</td><td>90</td></tr>
 				</tbody>
 				<tfoot>
 				</tfoot>
 			</table>
 		</div>
 	</div>
 </div>
<!-- ========== CARD : Tabel  Granular ========== -->
 <div class="card">
 	<div class="card-body">
 		<h5>7️⃣ Laporan Stok Mati (Dead Stock)</h5><small>Menampilkan barang yang **lama tidak bergerak**.</small>
 		<div class="table-responsive">
 			<table class="table table-bordered table-striped table-sm">
 				<thead>
 					<tr align="center">
 						<th>Tanggal</th>
 						<th>Barang</th>
 						<th>Stok</th>
 						<th>Terakhir Transaksi</th>
 					</tr>
 				</thead>
 				<tbody>
<tr><td>01-01</td><td>Keramik A</td><td>40</td><td>120 hari lalu</td></tr>
 				</tbody>
 				<tfoot>
 					Ini penting untuk:
 					* diskon
 					* promo
 					* clearance
 				</tfoot>
 			</table>
 		</div>
 	</div>
 </div>
<!-- ========== CARD : Tabel  Granular ========== -->
 <div class="card">
 	<div class="card-body">
 		<h5>Laporan Ketersediaan Stok vs Order</h5><small></small>
 		<div class="table-responsive">
 			<table class="table table-bordered table-striped table-sm">
 				<thead>
 					<tr align="center">
 						<th>No</th>
 						<th>Barang</th>
 						<th>Stok</th>
 						<th>Total Order</th>
 						<th>Sisa</th>
 					</tr>
 				</thead>
 				<tbody>
<tr><td>01</td><td>Semen A</td><td>100</td><td>80</td><td>20</td></tr>
<tr><td>02</td><td>Besi A</td><td>50</td><td>70</td><td>-20</td></tr>
 				</tbody>
 				<tfoot>
 				</tfoot>
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