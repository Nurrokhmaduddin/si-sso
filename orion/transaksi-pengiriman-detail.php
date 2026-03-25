<?php $page = 'transaksi_pengiriman'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0"> Detail Verifikasi Pengiriman 
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

                <table class="table table-sm table-hover table-bordered table-striped deta">
                    <tbody>
                      <tr>
                        <td width="30%"><b> Nama Driver</b></td>
                        <td>ANDRE</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Tanggal Pengiriman</b></td>
                        <td>01-Jan-2025</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Nominal Pengiriman</b></td>
                        <td>939.560,59</td>
                      </tr>
                    
                    </tbody>
                  </table>

              </div>
            </div>

             <div class="card-footer">
              <div class="card-tools ms-auto">
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="window.location.href='transaksi-pengiriman1.php'">
                  <i class="fas fa-reply me-1"></i> Kembali
                </button>
                <!-- <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button> -->
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-check me-1"></i> Verifikasi Semua
                </button>
                <button type="button" class="btn btn-outline-success btn-sm" title="print surat jalan">
                  <i class="fas fa-file-download me-1"></i> Print Semua Surat Jalan
                </button>
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
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">
                  <thead>
                    <tr align="center">
                      <th style="min-width: 40px;">No.</th>
                      <th style="min-width: 80px;">No Faktur</th>
                      <th style="min-width: 150px;">Toko Penerima</th>
                      <th style="min-width: 80px;">Nama Sales</th>
                      <th style="min-width: 100px;">Total Harga Jual (Rp)</th>
                      <th style="min-width: 60px;">Status</th>
                      <th style="min-width: 90px;">Catatan</th>
                      <th style="min-width: 160px;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr align="center">
                      <td>1</td>
                      <td>PJ/004681</td>
                      <td align="left">LARIS KLATEN</td>
                      <td align="left">OFFICE</td>                        <td align="right">15.999.448,50</td>
                      <td align="center">
                        <span class="badge badge-warning">SEDANG KIRIM</span>
                      </td>
                      <td>-</td>
                      <td align="center">
                        <button type="button" class="btn btn-outline-primary btn-sm" ><i class="fas fa-check me-1"></i> Verifikasi</button>
<!-- 
<button class="btn btn-xs btn-outline-primary btn-block">Nota Ditinggal</button>
<button class="btn btn-xs btn-outline-primary btn-block">Nota Dikembalikan</button> 
<button class="btn btn-xs btn-outline-primary btn-block">Kembali dgn Retur</button> -->
                      </td>
                    </tr>
                    <tr align="center">
                      <td>2</td>
                      <td>PJ/004684</td>
                      <td align="left">DEPO PELITA SOKARAJA</td>
                      <td align="left">OFFICE</td>                        <td align="right">1.670.400,00</td>
                      <td align="center">
                            <span class="badge badge-warning">SEDANG KIRIM</span>
                      </td>
                      <td>-</td>
                      <td align="center">
                        <button type="button" class="btn btn-outline-primary btn-sm" ><i class="fas fa-check me-1"></i> Verifikasi- diterima</button>
                        <button type="button" class="btn btn-outline-primary btn-sm" ><i class="fas fa-check me-1"></i> Verifikasi- retur faktur total</button>
                        <button type="button" class="btn btn-outline-primary btn-sm" ><i class="fas fa-check me-1"></i> Verifikasi- kembali ke antrian</button>
                      </td>
                    </tr>
                    <tr align="center">
                      <td>3</td>
                      <td>PJ/004683</td>
                      <td align="left">DEPO PELITA SOKARAJA</td>
                      <td align="left">OFFICE</td>                        <td align="right">21.459.000,00</td>
                      <td align="center">
                        <span class="badge badge-success">TERKIRIM</span>
                      </td>
                      <td>aman semua barangnya</td>
                      <td align="center">
                        <a href="#" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm" title="Print Penjualan" fdprocessedid="lmrrpp"><i class="fas fa-print"></i></button></a>
                        <button type="button" class="btn btn-info btn-sm" title="Detail" ><i class="fas fa-list"></i></button>
                      </td>
                    </tr>
                    <tr align="center">
                      <td>4</td>
                      <td>PJ/004682</td>
                      <td align="left">SURYA TOSERBA CILEDUG</td>
                      <td align="left">ANDRE</td>                        <td align="right">1.048.942,50</td>
                      <td align="center">
                        <span class="badge badge-success">TERKIRIM</span>
                      </td>
                      <td>aman semua barangnya</td>
                      <td align="center">
                        <a href="#" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm" title="Print Penjualan" fdprocessedid="lmrrpp"><i class="fas fa-print"></i></button></a>
                        <button type="button" class="btn btn-info btn-sm" title="Detail" ><i class="fas fa-list"></i></button>
                      </td>
                    </tr>
                    <tr align="center">
                      <td>5</td>
                      <td>PJ/004680</td>
                      <td align="left">LARIS KLATEN</td>
                      <td align="left">OFFICE</td>                        <td align="right">2.268.000,00</td>
                      <td align="center">
                        <span class="badge badge-success">TERKIRIM</span>
                      </td>
                      <td>aman semua barangnya</td>
                      <td align="center">
                        <a href="#" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm" title="Print Penjualan" fdprocessedid="lmrrpp"><i class="fas fa-print"></i></button></a>
                        <button type="button" class="btn btn-info btn-sm" title="Detail" ><i class="fas fa-list"></i></button>
                      </td>
                    </tr>
                    <tr align="center">
                      <td>6</td>
                      <td>PJ/004679</td>
                      <td align="left">TOKO BATES</td>
                      <td align="left">SUPRI</td>                        <td align="right">3.096.865,00</td>
                      <td align="center">
                        <span class="badge badge-success">TERKIRIM</span>
                      </td>
                      <td>beberapa ada yang retur</td>
                      <td align="center">
                        <a href="#" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm" title="Print Penjualan" fdprocessedid="lmrrpp"><i class="fas fa-print"></i></button></a>
                        <button type="button" class="btn btn-info btn-sm" title="Detail" ><i class="fas fa-list"></i></button>
                      </td>
                    </tr>
                    <tr align="center">
                      <td>7</td>
                      <td>PJ/004678</td>
                      <td align="left">JODO SWALAYAN</td>
                      <td align="left">OFFICE</td>                        <td align="right">405.000,00</td>
                      <td align="center">
                        <span class="badge badge-success">TERKIRIM</span>
                      </td>
                      <td>aman semua barangnya</td>
                      <td align="center">
                        <a href="#" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm" title="Print Penjualan" fdprocessedid="lmrrpp"><i class="fas fa-print"></i></button></a>
                        <button type="button" class="btn btn-info btn-sm" title="Detail" ><i class="fas fa-list"></i></button>
                      </td>
                    </tr>
                    <tr align="center">
                      <td>8</td>
                      <td>PJ/004677</td>
                      <td align="left">SUPRI</td>
                      <td align="left">OFFICE</td>                        <td align="right">54.000,00</td>
                      <td align="center">
                        <span class="badge badge-success">TERKIRIM</span>
                      </td>
                      <td>aman semua barangnya</td>
                      <td align="center">
                        <a href="#" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm" title="Print Penjualan" fdprocessedid="lmrrpp"><i class="fas fa-print"></i></button></a>
                        <button type="button" class="btn btn-info btn-sm" title="Detail" ><i class="fas fa-list"></i></button>
                      </td>
                    </tr>
                    <tr align="center">
                      <td>9</td>
                      <td>PJ/004676</td>
                      <td align="left">SUPRI</td>
                      <td align="left">OFFICE</td>                        <td align="right">105.000,00</td>
                      <td align="center">
                        <span class="badge badge-success">TERKIRIM</span>
                      </td>
                      <td>aman semua barangnya</td>
                      <td align="center">
                        <a href="#" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm" title="Print Penjualan" fdprocessedid="lmrrpp"><i class="fas fa-print"></i></button></a>
                        <button type="button" class="btn btn-info btn-sm" title="Detail" ><i class="fas fa-list"></i></button>
                      </td>
                    </tr>
                    <tr align="center">
                      <td>10</td>
                      <td>PJ/004675</td>
                      <td align="left">SURYA TOSERBA KARANGGETAS</td>
                      <td align="left">ANDRE</td>                        <td align="right">5.756.295,50</td>
                      <td align="center">
                        <span class="badge badge-success">TERKIRIM</span>
                      </td>
                      <td>aman semua barangnya</td>
                      <td align="center">
                        <a href="#" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm" title="Print Penjualan" fdprocessedid="lmrrpp"><i class="fas fa-print"></i></button></a>
                        <button type="button" class="btn btn-info btn-sm" title="Detail" ><i class="fas fa-list"></i></button>
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