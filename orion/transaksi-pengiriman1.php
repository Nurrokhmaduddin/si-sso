<?php $page = 'transaksi_pengiriman'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0"> Data Insentif Sales
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
                  <b>Sales:</b> Semua
                </div>
               <!--  <div class="col-md-6">
                  <b>Status:</b> Semua
                </div> -->

              </div>
            </div>

             <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button> -->
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>     -->
              </div>
            </div>
            
          </div>

  <!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='transaksi-pengiriman.php'"><a class="nav-link ">Penataan</a></li>
    <li class="nav-item" onclick="window.location='transaksi-pengiriman1.php'"><a class="nav-link active">Pengiriman</a></li>
  </ul>

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
            <th>No.</th>
            <th>Tanggal</th>
            <th>Tanggal Lunas</th>
            <th>No Faktur</th>
            <th>Toko Penerima</th>
            <th>Nama Sales</th>
            <th>Total Penjualan (Rp)</th>
            <th>Terbayar (Rp)</th>
            <th>Total Insentif (Rp)</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr align="center">
            <td>1</td>
            <td>03-Aug-2024</td>
            <td>04-Dec-2024</td>
            <td>PJ/03082024/PO-0022/01</td>
            <td>LUWES PALUR</td>
            <td>IWAN</td>                        <td align="right">3.349.934,40</td>
            <td align="right">0,40</td>
            <td align="right">0,00</td>
            <td align="center">
              <span class="badge badge-danger">HANGUS</span>
            </td>
          </tr>
          <tr align="center">
            <td>2</td>
            <td>07-Aug-2024</td>
            <td>07-Aug-2024</td>
            <td>PJ/07082024/PO-0007/01</td>
            <td>PEMBELI</td>
            <td>OFFICE</td>                        <td align="right">627.875,00</td>
            <td align="right">627.875,00</td>
            <td align="right">6.278,75</td>
            <td align="center">
              <span class="badge badge-success">INSENTIF</span>
            </td>
          </tr>
          <tr align="center">
            <td>3</td>
            <td>08-Aug-2024</td>
            <td>01-Oct-2024</td>
            <td>PJ/08082024/PO-0021/03</td>
            <td>VASUJA INTERNASIONAL</td>
            <td>OFFICE</td>                        <td align="right">24.284.400,00</td>
            <td align="right">23.879.200,00</td>
            <td align="right">238.792,00</td>
            <td align="center">
              <span class="badge badge-success">INSENTIF</span>
            </td>
          </tr>
          <tr align="center">
            <td>4</td>
            <td>09-Aug-2024</td>
            <td>09-Aug-2024</td>
            <td>PJ/09082024/PO-0027/01</td>
            <td>PEMBELI</td>
            <td>OFFICE</td>                        <td align="right">132.610,50</td>
            <td align="right">132.610,00</td>
            <td align="right">1.326,10</td>
            <td align="center">
              <span class="badge badge-success">INSENTIF</span>
            </td>
          </tr>
          <tr align="center">
            <td>5</td>
            <td>09-Aug-2024</td>
            <td>11-Oct-2024</td>
            <td>PJ/09082024/PO-0030/01</td>
            <td>ZAM ZAM TALOK</td>
            <td>OFFICE</td>                        <td align="right">29.268.639,60</td>
            <td align="right">29.042.172,60</td>
            <td align="right">290.421,73</td>
            <td align="center">
              <span class="badge badge-success">INSENTIF</span>
            </td>
          </tr>
          <tr align="center">
            <td>6</td>
            <td>09-Aug-2024</td>
            <td>12-Aug-2024</td>
            <td>PJ/09082024/PO-0053/01</td>
            <td>ZAM ZAM KALIWADAS</td>
            <td>OFFICE</td>                        <td align="right">604.500,00</td>
            <td align="right">604.500,00</td>
            <td align="right">6.045,00</td>
            <td align="center">
              <span class="badge badge-success">INSENTIF</span>
            </td>
          </tr>
          <tr align="center">
            <td>7</td>
            <td>10-Aug-2024</td>
            <td>10-Aug-2024</td>
            <td>PJ/10082024/PO-0029/01</td>
            <td>PEMBELI</td>
            <td>OFFICE</td>                        <td align="right">102.600,00</td>
            <td align="right">102.600,00</td>
            <td align="right">1.026,00</td>
            <td align="center">
              <span class="badge badge-success">INSENTIF</span>
            </td>
          </tr>
          <tr align="center">
            <td>8</td>
            <td>10-Aug-2024</td>
            <td>17-Oct-2024</td>
            <td>PJ/10082024/PO-0057/01</td>
            <td>3 RATU</td>
            <td>OFFICE</td>                        <td align="right">7.525.980,00</td>
            <td align="right">7.525.980,00</td>
            <td align="right">75.259,80</td>
            <td align="center">
              <span class="badge badge-success">INSENTIF</span>
            </td>
          </tr>
          <tr align="center">
            <td>9</td>
            <td>10-Aug-2024</td>
            <td>17-Oct-2024</td>
            <td>PJ/10082024/PO-0057/02</td>
            <td>3 RATU</td>
            <td>OFFICE</td>                        <td align="right">6.033.975,00</td>
            <td align="right">6.033.975,00</td>
            <td align="right">60.339,75</td>
            <td align="center">
              <span class="badge badge-success">INSENTIF</span>
            </td>
          </tr>
          <tr align="center">
            <td>10</td>
            <td>10-Aug-2024</td>
            <td>17-Oct-2024</td>
            <td>PJ/10082024/PO-0057/03</td>
            <td>3 RATU</td>
            <td>OFFICE</td>                        <td align="right">5.518.310,00</td>
            <td align="right">5.518.310,00</td>
            <td align="right">55.183,10</td>
            <td align="center">
              <span class="badge badge-success">INSENTIF</span>
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr align="center">
            <th colspan="6">Total</th>
            <th style="text-align: right !important;">12.486.889.269,05</th>
            <th style="text-align: right !important;">11.656.128.165,10</th>
            <th style="text-align: right !important;">100.367.984,27</th>
            <th></th>
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