<?php $page = 'transaksi_pelunasan_utang'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0"> Data Pelunasan Utang
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
                  <b>Gudang:</b> Semua
                </div><!-- 
                <div class="col-md-6">
                  <b>Toko:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Sales:</b> Semua
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
    <li class="nav-item" onclick="window.location='transaksi-pelunasan-piutang.php'"><a class="nav-link ">Pelunasan</a></li>
    <li class="nav-item" onclick="window.location='transaksi-pelunasan-piutang1.php'"><a class="nav-link active">History</a></li>
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
            <th>Lokasi Gudang</th>
            <th>Tanggal Pembukuan</th>
            <th>Total Terbayar (Rp)</th>
            <th>Total Retur (Rp)</th>
            <th>Total Potongan (Rp)</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr align="center">
            <td>1</td>
            <td>Purwokerto</td>
            <td>09-Mar-2026</td>
            <td align="right">45.379.059,95</td>
            <td align="right">549.780,00</td>
            <td align="right">158.044,50</td>
            <td align="center">
              <a href="https://orion-houseware.my.id/piutang/print/ZUdOVE0xa1c0S0tlNWNqaENNd3lpMDAwMDc" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi398 btn-disabled" title="Print Piutang" fdprocessedid="39zxf"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi398 btn-disabled" title="Detail" onclick="detail(&#39;TXpnelV6dzZ1aWxoT0dveVRlMDAwMDY&#39;, &#39;398&#39;)" fdprocessedid="6810n"><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>2</td>
            <td>Purwokerto</td>
            <td>07-Mar-2026</td>
            <td align="right">83.978.608,40</td>
            <td align="right">16.796.881,50</td>
            <td align="right">701.849,12</td>
            <td align="center">
              <a href="https://orion-houseware.my.id/piutang/print/T1ZjemJqNGNqYWw2TjFJeXZrMDAwMDY" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi397 btn-disabled" title="Print Piutang" fdprocessedid="fvg7nj"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi397 btn-disabled" title="Detail" onclick="detail(&#39;Vmprek5UcHpMbGxsTjNneWl6MDAwMDY&#39;, &#39;397&#39;)" fdprocessedid="t49ir"><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>3</td>
            <td>Purwokerto</td>
            <td>06-Mar-2026</td>
            <td align="right">28.039.526,20</td>
            <td align="right">727.350,00</td>
            <td align="right">2.500,00</td>
            <td align="center">
              <a href="https://orion-houseware.my.id/piutang/print/VUhjeldUaldyQWxOTmpZeTJuMDAwMDY" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi396 btn-disabled" title="Print Piutang" fdprocessedid="djfkz"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi396 btn-disabled" title="Detail" onclick="detail(&#39;VWxnemFqdll1TGw2TmtveXRjMDAwMDY&#39;, &#39;396&#39;)" fdprocessedid="dpjwkc"><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>4</td>
            <td>Purwokerto</td>
            <td>05-Mar-2026</td>
            <td align="right">236.735.405,60</td>
            <td align="right">274.002,00</td>
            <td align="right">488.872,10</td>
            <td align="center">
              <a href="https://orion-houseware.my.id/piutang/print/T0d3emJET3JCRGw2TlZBeTRTMDAwMDY" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi395 btn-disabled" title="Print Piutang" fdprocessedid="dio1ro"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi395 btn-disabled" title="Detail" onclick="detail(&#39;Y0RnemNEYVN1UmxTTlRBeTN6MDAwMDY&#39;, &#39;395&#39;)" fdprocessedid="kymmwnp"><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>5</td>
            <td>Purwokerto</td>
            <td>03-Mar-2026</td>
            <td align="right">190.918.400,90</td>
            <td align="right">12.641.744,65</td>
            <td align="right">202.166,40</td>
            <td align="center">
              <a href="https://orion-houseware.my.id/piutang/print/UWtGak0xRTk3YXZjNU5UUkpNd1hGMDAwMDc" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi394 btn-disabled" title="Print Piutang" fdprocessedid="k0ugzw"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi394 btn-disabled" title="Detail" onclick="detail(&#39;T0RVeE0yNE9HaWY4NVRUUXhNd0hYMDAwMDc&#39;, &#39;394&#39;)" fdprocessedid="1upipx"><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>6</td>
            <td>Purwokerto</td>
            <td>02-Mar-2026</td>
            <td align="right">5.426.106,00</td>
            <td align="right">5.404.800,00</td>
            <td align="right">0,00</td>
            <td align="center">
              <a href="https://orion-houseware.my.id/piutang/print/TVZRemFEVHl4ZWw1TTNFeUhkMDAwMDY" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi393 btn-disabled" title="Print Piutang" fdprocessedid="28dotv"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi393 btn-disabled" title="Detail" onclick="detail(&#39;VVVKRk0wd2hvY0ZpNVpUTXlNd2NxMDAwMDc&#39;, &#39;393&#39;)" fdprocessedid="qkjw4q"><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>7</td>
            <td>Purwokerto</td>
            <td>28-Feb-2026</td>
            <td align="right">316.609.245,20</td>
            <td align="right">7.536.238,10</td>
            <td align="right">2.771.429,60</td>
            <td align="center">
              <a href="https://orion-houseware.my.id/piutang/print/UzJjek5US2ZlSmxqTW5BeXNPMDAwMDY" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi392 btn-disabled" title="Print Piutang" fdprocessedid="dgknyo"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi392 btn-disabled" title="Detail" onclick="detail(&#39;YVhvemFUdTd6cWwyTWpVeWJNMDAwMDY&#39;, &#39;392&#39;)" fdprocessedid="r1dn9"><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>8</td>
            <td>Purwokerto</td>
            <td>23-Feb-2026</td>
            <td align="right">158.144.473,30</td>
            <td align="right">2.928.528,50</td>
            <td align="right">157.250,00</td>
            <td align="center">
              <a href="https://orion-houseware.my.id/piutang/print/Y1djelFUQ3hwZGx5TVdneXJDMDAwMDY" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi391 btn-disabled" title="Print Piutang" fdprocessedid="zuk46l"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi391 btn-disabled" title="Detail" onclick="detail(&#39;VDJRelJEM1NtN2xXTVVreXNxMDAwMDY&#39;, &#39;391&#39;)" fdprocessedid="d34gek"><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>9</td>
            <td>Purwokerto</td>
            <td>21-Feb-2026</td>
            <td align="right">142.961.740,72</td>
            <td align="right">12.249.765,00</td>
            <td align="right">397.178,50</td>
            <td align="center">
              <a href="https://orion-houseware.my.id/piutang/print/VUVnek5EZ2RSZmwxTUZveUVoMDAwMDY" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi390 btn-disabled" title="Print Piutang" fdprocessedid="vwali"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi390 btn-disabled" title="Detail" onclick="detail(&#39;ZFdodE0yZzQ2UzJsNVJ6QldNd3ZHMDAwMDc&#39;, &#39;390&#39;)" fdprocessedid="esrnbw"><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>10</td>
            <td>Purwokerto</td>
            <td>20-Feb-2026</td>
            <td align="right">56.595.050,00</td>
            <td align="right">1.993.950,00</td>
            <td align="right">396.324,40</td>
            <td align="center">
              <a href="https://orion-houseware.my.id/piutang/print/ZG1SeU0xUVJYb3NCNE9UbE5NdzBvMDAwMDc" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi389 btn-disabled" title="Print Piutang" fdprocessedid="3nzzka"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi389 btn-disabled" title="Detail" onclick="detail(&#39;VEZnemJUNHR0Ymd6T1VjeTF4MDAwMDY&#39;, &#39;389&#39;)" fdprocessedid="ydq9bp"><i class="fas fa-list"></i></button>
            </td>
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