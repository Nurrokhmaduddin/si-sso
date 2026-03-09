<?php $page = 'operasional_stok_gudang'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0"> Stok Gudang
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">operation adalah proses fulfillment.</p>
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
                  <b>Tanggal Stock:</b> 09 Mar 2026
                </div>
                <div class="col-md-6">
                  <b>Gudang:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Merek:</b> Semua
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
                </button><!-- 
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button> -->
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>                
                
                <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>     -->
              </div>
            </div>
            
          </div>


         <!-- ========== CARD : Tabel  Granular ========== -->
<div class="card">
  <div class="card-header d-flex align-items-center">
    <h5 class="card-title mb-0">Daftar </h5>    
    
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm datatables1">
        <thead>
                  <tr align="center">
                    <th width="5px">No.</th>
                    <th>Nama produk</th>
                    <th>Merek</th>
                    <th>Kuantitas</th>
                    <th>Satuan</th>
                    <th>Harga Pembelian</th>
                    <th>Harga Jual</th>
                    <th>Jumlah Harga Pembelian</th>
                    <th>Jumlah Harga Penjualan</th>
                  </tr>
                </thead>
                <tbody>
                                        <tr align="center">
                        <td>1</td>
                        <td align="left">LUNCH BOX ARIES 1500 TWLB100 (<small><b>BGY(TW-LB100)</b></small>)</td><td align="left">BYGY</td><td align="center">Baik : 0<br>Rusak : 12 </td><td align="center">PCS</td>                        <td style="text-align: right !important;">4.450,00</td>
                        <td style="text-align: right !important;">6.400,00</td>
                        <td style="text-align: right !important;">0,00</td>
                        <td style="text-align: right !important;">0,00</td>
                      </tr>
                                          <tr align="center">
                        <td>2</td>
                        <td align="left">CANGKIR PLASTIK ELSA CUP (<small><b>HWI(5111)</b></small>)</td><td align="left">HAWAII</td><td align="center">Baik : 60<br>Rusak : 0 </td><td align="center">PCS</td>                        <td style="text-align: right !important;">6.720,00</td>
                        <td style="text-align: right !important;">9.350,00</td>
                        <td style="text-align: right !important;">403.200,00</td>
                        <td style="text-align: right !important;">561.000,00</td>
                      </tr>
                                          <tr align="center">
                        <td>3</td>
                        <td align="left">GELAS TAKAR FAMILY 350 ML (<small><b>HWI(5503)</b></small>)</td><td align="left">HAWAII</td><td align="center">Baik : 86<br>Rusak : 0 </td><td align="center">PCS</td>                        <td style="text-align: right !important;">3.858,00</td>
                        <td style="text-align: right !important;">5.400,00</td>
                        <td style="text-align: right !important;">331.788,00</td>
                        <td style="text-align: right !important;">464.400,00</td>
                      </tr>
                                          <tr align="center">
                        <td>4</td>
                        <td align="left">GELAS TAKAR FAMILY 600 ML (<small><b>HWI(5504)</b></small>)</td><td align="left">HAWAII</td><td align="center">Baik : -2<br>Rusak : 0 </td><td align="center">PCS</td>                        <td style="text-align: right !important;">5.472,00</td>
                        <td style="text-align: right !important;">8.000,00</td>
                        <td style="text-align: right !important;">-10.944,00</td>
                        <td style="text-align: right !important;">-16.000,00</td>
                      </tr>
                                          <tr align="center">
                        <td>5</td>
                        <td align="left">KERANJANG SERBAGUNA CASTALLA S (<small><b>HWI(5790)</b></small>)</td><td align="left">HAWAII</td><td align="center">Baik : 33<br>Rusak : 0 </td><td align="center">PCS</td>                        <td style="text-align: right !important;">7.470,00</td>
                        <td style="text-align: right !important;">10.375,00</td>
                        <td style="text-align: right !important;">246.510,00</td>
                        <td style="text-align: right !important;">342.375,00</td>
                      </tr>
                                          <tr align="center">
                        <td>6</td>
                        <td align="left">LUNCH BOX RICO 8157 (<small><b>HWI(8157)</b></small>)</td><td align="left">HAWAII</td><td align="center">Baik : 2<br>Rusak : 3 </td><td align="center">PCS</td>                        <td style="text-align: right !important;">9.599,00</td>
                        <td style="text-align: right !important;">14.050,00</td>
                        <td style="text-align: right !important;">19.198,00</td>
                        <td style="text-align: right !important;">28.100,00</td>
                      </tr>
                                          <tr align="center">
                        <td>7</td>
                        <td align="left">LUNCH BOX RICO 8155 (<small><b>HWI(8155)</b></small>)</td><td align="left">HAWAII</td><td align="center">Baik : 0<br>Rusak : 3 </td><td align="center">PCS</td>                        <td style="text-align: right !important;">8.903,00</td>
                        <td style="text-align: right !important;">13.025,00</td>
                        <td style="text-align: right !important;">0,00</td>
                        <td style="text-align: right !important;">0,00</td>
                      </tr>
                                          <tr align="center">
                        <td>8</td>
                        <td align="left">MANGKOK PLASTIK AKIKO (<small><b>HWI(5121)</b></small>)</td><td align="left">HAWAII</td><td align="center">Baik : 174<br>Rusak : 0 </td><td align="center">PCS</td>                        <td style="text-align: right !important;">4.470,00</td>
                        <td style="text-align: right !important;">6.225,00</td>
                        <td style="text-align: right !important;">777.780,00</td>
                        <td style="text-align: right !important;">1.083.150,00</td>
                      </tr>
                                          <tr align="center">
                        <td>9</td>
                        <td align="left">MANGKOK PLASTIK MINORI (<small><b>HWI(6804)</b></small>)</td><td align="left">HAWAII</td><td align="center">Baik : 132<br>Rusak : 0 </td><td align="center">PCS</td>                        <td style="text-align: right !important;">6.870,00</td>
                        <td style="text-align: right !important;">9.550,00</td>
                        <td style="text-align: right !important;">906.840,00</td>
                        <td style="text-align: right !important;">1.260.600,00</td>
                      </tr>
                                          <tr align="center">
                        <td>10</td>
                        <td align="left">PEMBERSIH KACA GLOSIS L (<small><b>HWI(7192)</b></small>)</td><td align="left">HAWAII</td><td align="center">Baik : 6<br>Rusak : 0 </td><td align="center">PCS</td>                        <td style="text-align: right !important;">8.178,00</td>
                        <td style="text-align: right !important;">11.400,00</td>
                        <td style="text-align: right !important;">49.068,00</td>
                        <td style="text-align: right !important;">68.400,00</td>
                      </tr>
                                                      </tbody>
                <tfoot>
                  <tr align="center">
                    <th colspan="7">TOTAL Keseluruhan</th>
                    <th style="text-align: right !important;">Rp 1.123.376.856,99</th>
                    <th style="text-align: right !important;">Rp 1.733.329.732,50</th>
                  </tr>
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