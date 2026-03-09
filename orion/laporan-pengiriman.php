<?php $page = 'laporan_pengiriman'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0"> Laporan Pengiriman
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
                  <b>Driver:</b> Semua Sales
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
            <th>No.</th>
            <th>Nama Sales</th>
            <th>Tanggal Insentif</th>
            <th>Total Insentif</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr align="center"><th colspan="3" rowspan="1">Total</th><th style="text-align: right !important;" rowspan="1" colspan="1">10.031.294,88</th><th rowspan="1" colspan="1"></th></tr>
        </tfoot>
        <tbody><tr class="odd"><td class="dtr-control" style="text-align: center;">1</td><td style="text-align: left;">SUPRI</td><td style="text-align: center;">29-Jan-2026</td><td style="text-align: right !important;">1.051.775,16</td><td style="text-align: center;">
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm btn-aksi37" data-toggle="dropdown" fdprocessedid="ubp6dh">
              <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/print_insentif/UmxFelIxNmxvRGQzTWdLTTAwMDA1" target="_blank">PDF</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/ekspor/YW1kRk0wYzNUT1l6ZlNUTWQzYzBtbjMwMDAwOA" target="_blank">Excel</a>
            </div>
          </div>

          <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi37 btn-disabled" title="Detail" onclick="detail(&#39;UldjelRYWHJHRGRQTWdvUzAwMDA1&#39;, &#39;37&#39;)" fdprocessedid="7xwf2p">
            <i class="fas fa-list"></i>
          </button>
        </td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">2</td><td style="text-align: left;">ANDRE</td><td style="text-align: center;">29-Jan-2026</td><td style="text-align: right !important;">4.123.780,63</td><td style="text-align: center;">
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm btn-aksi36" data-toggle="dropdown" fdprocessedid="3kbxvm">
              <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/print_insentif/V0RnemFpc25BVFp5TWdnZDAwMDA1" target="_blank">PDF</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/ekspor/WTNSSU0xazJWN1RBTFN6TWQzYzBtVEkwMDAwOA" target="_blank">Excel</a>
            </div>
          </div>

          <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi36 btn-disabled" title="Detail" onclick="detail(&#39;V1VkaE0wNDJJd1NkVVVqTWQzYzBtNFAwMDAwOA&#39;, &#39;36&#39;)" fdprocessedid="ru4rer">
            <i class="fas fa-list"></i>
          </button>
        </td></tr><tr class="odd"><td class="dtr-control" style="text-align: center;">3</td><td style="text-align: left;">ANDRE</td><td style="text-align: center;">23-Feb-2026</td><td style="text-align: right !important;">3.679.831,85</td><td style="text-align: center;">
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm btn-aksi38" data-toggle="dropdown" fdprocessedid="4nuqhg">
              <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/print_insentif/Y2xBek0wMDRqR3p1NVVqTWQzYzBtNTYwMDAwOA" target="_blank">PDF</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/ekspor/Ym1JemNPaUJFamg0TWdpRTAwMDA1" target="_blank">Excel</a>
            </div>
          </div>

          <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi38 btn-disabled" title="Detail" onclick="detail(&#39;V0RVelFXbTFBemhuTWdIbTAwMDA1&#39;, &#39;38&#39;)" fdprocessedid="blx2jg">
            <i class="fas fa-list"></i>
          </button>
        </td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">4</td><td style="text-align: left;">SUPRI</td><td style="text-align: center;">23-Feb-2026</td><td style="text-align: right !important;">1.175.907,24</td><td style="text-align: center;">
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm btn-aksi39" data-toggle="dropdown" fdprocessedid="gisygf">
              <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/print_insentif/V2s0NU0zUTVrOTlaNWFUTWQzYzBtMVgwMDAwOA" target="_blank">PDF</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/ekspor/WWtzemRKbFpxamxMTWdmQjAwMDA1" target="_blank">Excel</a>
            </div>
          </div>

          <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi39 btn-disabled" title="Detail" onclick="detail(&#39;YWpsRk0yNDVDMUF6amRUTWQzYzBtRFUwMDAwOA&#39;, &#39;39&#39;)" fdprocessedid="x9dd6d">
            <i class="fas fa-list"></i>
          </button>
        </td></tr>
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