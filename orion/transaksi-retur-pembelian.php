<?php $page = 'transaksi_retur_pembelian'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0"> Data Retur Pembelian
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Keterangan singkat cara baca informasi halaman ini.</p>
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
                </div>
                <div class="col-md-6">
                  <b>Status:</b> Semua
                </div>

              </div>
            </div>

             <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
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
            <th>Alamat Gudang</th>
            <th>Nomor Retur</th>
            <th>Tanggal Retur Pembelian</th>
            <th>Supplier</th>
            <th>Total Harga Retur Pembelian (Rp)</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr align="center">
            <td>1</td>
            <td>Purwokerto</td>
            <td>RTB/000090</td>
            <td>28-Oct-2025</td>
            <td align="left">SEGARA JAYA SUBRON</td>
            <td align="right">59.718,00</td>
            <td align="center">
              <span class="badge badge-warning">DRAF</span>
            </td>
            <td align="center">
              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi100 btn-disabled" onclick="detail(&#39;UjFneFRqVXRza0JGTUZNeURUMDAwMDY&#39;, &#39;100&#39;, &#39;trx&#39;)" fdprocessedid="dr63tt"><i class="fas fa-envelope-open"></i> Draf</button>

              <button type="button" class="btn btn-danger mrg-btn btn-sm btn-aksi100 btn-disabled" title="Cancel" onclick="cancel(&#39;100&#39;)" fdprocessedid="f8f5w"><i class="fas fa-times"></i> Batal</button>
            </td>
          </tr>
          <tr align="center">
            <td>2</td>
            <td>Purwokerto</td>
            <td>RTB/000139</td>
            <td>05-Mar-2026</td>
            <td align="left">GUDANG</td>
            <td align="right">1.307.414,00</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/return_pembelian/print/UW5WMU1WUVJQNFd4MVZ6SnZNd3NMMDAwMDc" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi152 btn-disabled" title="Print Retur Pembelian" fdprocessedid="6xw8l9"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi152 btn-disabled" onclick="detail(&#39;UWxkbE1XWTc0T0NaMVV6SjBNd0xlMDAwMDc&#39;, &#39;152&#39;, &#39;&#39;)" fdprocessedid="narhr"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi152 btn-disabled" onclick="edit(&#39;152&#39;)" fdprocessedid="qr3xk"><i class="fas fa-edit"></i> Edit</button>
            </td>
          </tr>
          <tr align="center">
            <td>3</td>
            <td>Purwokerto</td>
            <td>RTB/000138</td>
            <td>04-Mar-2026</td>
            <td align="left">GUDANG</td>
            <td align="right">435.451,30</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/return_pembelian/print/ZDI0eFF6UVppVFZNTVdJeTFXMDAwMDY" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi151 btn-disabled" title="Print Retur Pembelian" fdprocessedid="thsck"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi151 btn-disabled" onclick="detail(&#39;V0dNeFRqb2M2OFU1TVhNeVlCMDAwMDY&#39;, &#39;151&#39;, &#39;&#39;)" fdprocessedid="brzpih"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi151 btn-disabled" onclick="edit(&#39;151&#39;)" fdprocessedid="lauwl9"><i class="fas fa-edit"></i> Edit</button>
            </td>
          </tr>
          <tr align="center">
            <td>4</td>
            <td>Purwokerto</td>
            <td>RTB/000137</td>
            <td>04-Mar-2026</td>
            <td align="left">SEGARA JAYA SUBRON</td>
            <td align="right">3.029.903,00</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/return_pembelian/print/UnpSNU1YY1Q4NG93MVdEQmlNd0xEMDAwMDc" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi150 btn-disabled" title="Print Retur Pembelian" fdprocessedid="d8gwj"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi150 btn-disabled" onclick="detail(&#39;TjNZeGFqQXVqOVZSTUU0eTE4MDAwMDY&#39;, &#39;150&#39;, &#39;&#39;)" fdprocessedid="cbxrz9"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi150 btn-disabled" onclick="edit(&#39;150&#39;)" fdprocessedid="hd6veg"><i class="fas fa-edit"></i> Edit</button>
            </td>
          </tr>
          <tr align="center">
            <td>5</td>
            <td>Purwokerto</td>
            <td>RTB/000136</td>
            <td>03-Mar-2026</td>
            <td align="left">GUDANG</td>
            <td align="right">476.655,00</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/return_pembelian/print/T1dVeGRUTTRoTlJOT1RBeVZrMDAwMDY" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi149 btn-disabled" title="Print Retur Pembelian" fdprocessedid="89wm3"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi149 btn-disabled" onclick="detail(&#39;VWxOek1Wb2YzVWNKMFFUbG5Nd0p2MDAwMDc&#39;, &#39;149&#39;, &#39;&#39;)" fdprocessedid="owctbb"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi149 btn-disabled" onclick="edit(&#39;149&#39;)" fdprocessedid="jvoad"><i class="fas fa-edit"></i> Edit</button>
            </td>
          </tr>
          <tr align="center">
            <td>6</td>
            <td>Purwokerto</td>
            <td>RTB/000135</td>
            <td>03-Mar-2026</td>
            <td align="left">TIMUR RAYA</td>
            <td align="right">578.164,00</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/return_pembelian/print/YmxjeFdqNGlEd1IxT0d3eXRRMDAwMDY" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi148 btn-disabled" title="Print Retur Pembelian" fdprocessedid="csvj9"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi148 btn-disabled" onclick="detail(&#39;YzFobU1VUVVWT3dzME9EaERNd3luMDAwMDc&#39;, &#39;148&#39;, &#39;&#39;)" fdprocessedid="spl1s9"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi148 btn-disabled" onclick="edit(&#39;148&#39;)" fdprocessedid="mqyoou"><i class="fas fa-edit"></i> Edit</button>
            </td>
          </tr>
          <tr align="center">
            <td>7</td>
            <td>Purwokerto</td>
            <td>RTB/000134</td>
            <td>03-Mar-2026</td>
            <td align="left">TIMUR RAYA</td>
            <td align="right">1.922.155,33</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/return_pembelian/print/WjI0eFFqd2gxZlJrTjJzeUc4MDAwMDY" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi147 btn-disabled" title="Print Retur Pembelian" fdprocessedid="lpjitb"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi147 btn-disabled" onclick="detail(&#39;TTFORk1UQUVVUVRjMFRUZEhNdzFjMDAwMDc&#39;, &#39;147&#39;, &#39;&#39;)" fdprocessedid="9v08k6"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi147 btn-disabled" onclick="edit(&#39;147&#39;)" fdprocessedid="lc31g"><i class="fas fa-edit"></i> Edit</button>
            </td>
          </tr>
          <tr align="center">
            <td>8</td>
            <td>Purwokerto</td>
            <td>RTB/000133</td>
            <td>03-Mar-2026</td>
            <td align="left">GUDANG</td>
            <td align="right">1.404.295,60</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/return_pembelian/print/V2xreFFqUWZEWFExTlRVeUtvMDAwMDY" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi145 btn-disabled" title="Print Retur Pembelian" fdprocessedid="sl6ad"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi145 btn-disabled" onclick="detail(&#39;ZDNoek1URWdLT1FwME9EVXdNd0sxMDAwMDc&#39;, &#39;145&#39;, &#39;&#39;)" fdprocessedid="cs9mrl"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi145 btn-disabled" onclick="edit(&#39;145&#39;)" fdprocessedid="2h1ior"><i class="fas fa-edit"></i> Edit</button>
            </td>
          </tr>
          <tr align="center">
            <td>9</td>
            <td>Purwokerto</td>
            <td>RTB/000131</td>
            <td>10-Feb-2026</td>
            <td align="left">GUDANG</td>
            <td align="right">15.432,00</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/return_pembelian/print/T1hsV01YVUR6NVlUME1qSkRNd0lWMDAwMDc" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi142 btn-disabled" title="Print Retur Pembelian" fdprocessedid="d1z43"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi142 btn-disabled" onclick="detail(&#39;WVVJeGFEN3ZEVVI2TW5VeXFxMDAwMDY&#39;, &#39;142&#39;, &#39;&#39;)" fdprocessedid="bit3cm"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi142 btn-disabled" onclick="edit(&#39;142&#39;)" fdprocessedid="rjtovg"><i class="fas fa-edit"></i> Edit</button>
            </td>
          </tr>
          <tr align="center">
            <td>10</td>
            <td>Purwokerto</td>
            <td>RTB/000130</td>
            <td>30-Jan-2026</td>
            <td align="left">GUDANG</td>
            <td align="right">2.110.500,00</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/return_pembelian/print/UTBneFRqY2F2clJyTUZNeWJQMDAwMDY" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi140 btn-disabled" title="Print Retur Pembelian" fdprocessedid="wgfayp"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi140 btn-disabled" onclick="detail(&#39;T0RCTk1XUUh6UVFoMGF6QnpNdzJsMDAwMDc&#39;, &#39;140&#39;, &#39;&#39;)" fdprocessedid="9ro1x"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi140 btn-disabled" onclick="edit(&#39;140&#39;)" fdprocessedid="vfsgj"><i class="fas fa-edit"></i> Edit</button>
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