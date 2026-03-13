<?php $page = 'transaksi_pengiriman'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0"> Data Pengiriman (Antrian)
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

            <!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='transaksi-pengiriman.php'"><a class="nav-link active">Penugasan</a></li>
    <li class="nav-item" onclick="window.location='transaksi-pengiriman1.php'"><a class="nav-link ">Pengiriman</a></li>
  </ul>
          <!-- ========== CARD : Filter & Export ========== -->
          <div class="card">
            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Toko:</b> Semua
                </div>
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
            <th>Gudang</th>
            <th>Tanggal</th>
            <th>No Faktur</th>
            <th>Toko (kode)</th>
            <th>Sales</th>
            <th>Total Penjualan (Rp)</th>
            <th>Total Terbayar (Rp)</th>
            <th>Piutang Dagang (Rp)</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr align="center">
            <td>1</td>
            <td>Purwokerto</td>
            <td>20-May-2025</td>
            <td>PJ/001593</td>
            <td align="left">MIROTA SIMANJUTAK (E00074)</td>
            <td align="left">ANDRE</td>
            <td align="right">3.613.500,00</td>
            <td align="right">3.545.800,00</td>
            <td align="right">67.700,00</td>
            <td align="center">
              <button type="button" 
              class="btn btn-outline-primary btn-sm" 
              title="Tugas Kirim"
              data-bs-toggle="modal" 
              data-bs-target="#modalTugasKirim">
              <i class="fas fa-truck"></i>
            </button>
            </td>
          </tr>
          <tr align="center">
            <td>2</td>
            <td>Purwokerto</td>
            <td>25-Jun-2025</td>
            <td>PJ/001865</td>
            <td align="left">TOKO ANA ELEKTRO (E00106)</td>
            <td align="left">OFFICE</td>
            <td align="right">9.926.106,00</td>
            <td align="right">5.015.500,00</td>
            <td align="right">4.910.606,00</td>
            <td align="center">
              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi2292 btn-disabled" title="Lunasi" onclick="bayar(&#39;2292&#39;)" fdprocessedid="o9h5y9"><i class="fas fa-truck"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>3</td>
            <td>Purwokerto</td>
            <td>02-Jul-2025</td>
            <td>PJ/001915</td>
            <td align="left">LARIS MUNTILAN (E00077)</td>
            <td align="left">ANDRE</td>
            <td align="right">930.254,25</td>
            <td align="right">788.109,00</td>
            <td align="right">142.145,25</td>
            <td align="center">
              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi2347 btn-disabled" title="Lunasi" onclick="bayar(&#39;2347&#39;)" fdprocessedid="gh4b68"><i class="fas fa-truck"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>4</td>
            <td>Purwokerto</td>
            <td>21-Jul-2025</td>
            <td>PJ/002071</td>
            <td align="left">LARIS TOSERBA PURWOREJO (E00279)</td>
            <td align="left">OFFICE</td>
            <td align="right">14.881.783,00</td>
            <td align="right">14.719.800,00</td>
            <td align="right">161.983,00</td>
            <td align="center">
              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi2506 btn-disabled" title="Lunasi" onclick="bayar(&#39;2506&#39;)" fdprocessedid="e0obo"><i class="fas fa-truck"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>5</td>
            <td>Purwokerto</td>
            <td>26-Jul-2025</td>
            <td>PJ/002155</td>
            <td align="left">LARIS TEMANGGUNG (E00085)</td>
            <td align="left">ANDRE</td>
            <td align="right">2.437.500,00</td>
            <td align="right">2.034.632,00</td>
            <td align="right">402.868,00</td>
            <td align="center">
              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi2592 btn-disabled" title="Lunasi" onclick="bayar(&#39;2592&#39;)" fdprocessedid="hpozg"><i class="fas fa-truck"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>6</td>
            <td>Purwokerto</td>
            <td>28-Jul-2025</td>
            <td>PJ/002170</td>
            <td align="left">JANU PUTRA (E00202)</td>
            <td align="left">ANDRE</td>
            <td align="right">2.001.000,00</td>
            <td align="right">1.244.045,00</td>
            <td align="right">756.955,00</td>
            <td align="center">
              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi2607 btn-disabled" title="Lunasi" onclick="bayar(&#39;2607&#39;)" fdprocessedid="ouzzaa"><i class="fas fa-truck"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>7</td>
            <td>Purwokerto</td>
            <td>20-Aug-2025</td>
            <td>PJ/002377</td>
            <td align="left">LARIS MUNTILAN (E00077)</td>
            <td align="left">ANDRE</td>
            <td align="right">1.419.735,00</td>
            <td align="right">1.278.300,00</td>
            <td align="right">141.435,00</td>
            <td align="center">
              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi2818 btn-disabled" title="Lunasi" onclick="bayar(&#39;2818&#39;)" fdprocessedid="g6m5vr"><i class="fas fa-truck"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>8</td>
            <td>Purwokerto</td>
            <td>30-Aug-2025</td>
            <td>PJ/002498</td>
            <td align="left">SWALAYAN SURYA LAKSANA (E00098)</td>
            <td align="left">ANDRE</td>
            <td align="right">3.963.653,00</td>
            <td align="right">0,00</td>
            <td align="right">3.963.653,00</td>
            <td align="center">
              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi2943 btn-disabled" title="Lunasi" onclick="bayar(&#39;2943&#39;)" fdprocessedid="d3z6ns"><i class="fas fa-truck"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>9</td>
            <td>Purwokerto</td>
            <td>30-Aug-2025</td>
            <td>PJ/002500</td>
            <td align="left">SWALAYAN SURYA LAKSANA (E00098)</td>
            <td align="left">ANDRE</td>
            <td align="right">3.489.048,00</td>
            <td align="right">0,00</td>
            <td align="right">3.489.048,00</td>
            <td align="center">
              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi2945 btn-disabled" title="Lunasi" onclick="bayar(&#39;2945&#39;)" fdprocessedid="g1et1"><i class="fas fa-truck"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>10</td>
            <td>Purwokerto</td>
            <td>30-Aug-2025</td>
            <td>PJ/002505</td>
            <td align="left">SWALAYAN SURYA LAKSANA (E00098)</td>
            <td align="left">ANDRE</td>
            <td align="right">1.557.000,00</td>
            <td align="right">0,00</td>
            <td align="right">1.557.000,00</td>
            <td align="center">
              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi2950 btn-disabled" title="Lunasi" onclick="bayar(&#39;2950&#39;)" fdprocessedid="m5qigs"><i class="fas fa-truck"></i></button>
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

<div class="modal fade" id="modalTugasKirim">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">
          <i class="fas fa-truck"></i> Penugasan Kirim
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>

      <form action="proses-penugasan-kirim.php" method="POST">

        <div class="modal-body">

          <!-- Driver -->
          <div class="form-group">
            <label>Driver</label>
            <select class="form-control" name="driver_id" required>
              <option value="">-- Pilih Driver --</option>
              <option value="1">Budi Santoso</option>
              <option value="2">Andi Wijaya</option>
              <option value="3">Rudi Hartono</option>
            </select>
          </div>

          <!-- Tanggal Kirim -->
          <div class="form-group">
            <label>Tanggal Kirim</label>
            <input type="date" 
                   class="form-control" 
                   name="tanggal_kirim" 
                   required>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Batal
          </button>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Simpan Penugasan
          </button>
        </div>

      </form>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>