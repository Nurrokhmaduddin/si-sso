<?php $page = 'transaksi_pembelian'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0"> Data Pembelian
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
            <th>Tanggal Pembelian</th>
            <th>No Faktur</th>
            <th width="150px">Supplier</th>
            <th>Total Harga Pembelian (Rp)</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr align="center">
            <td>1</td>
            <td>Purwokerto</td>
            <td>04-Mar-2026</td>
            <td>031</td>
            <td align="left">TIMUR RAYA</td>
            <td align="right">15.433.120,00</td>
            <td align="center">
              <span class="badge badge-warning">DRAF</span>
            </td>
            <td align="center">

              <a href="https://orion-houseware.my.id/pembelian/print/WjJveFF6UlJNbklWT2FVeFlqSWQzYzBtYjgwMDAxMA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi1421 btn-disabled" title="Print Pembelian" fdprocessedid="7wor7k"><i class="fas fa-print"></i> Preview</button></a>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi1421 btn-disabled" onclick="detail(&#39;Y0hka01YZzBsN1d4VFpqSlhNVFF6dG4wMDAwOA&#39;, &#39;1421&#39;, &#39;trx&#39;)" fdprocessedid="i14toq"><i class="fas fa-envelope-open"></i> Draf</button>

              <button type="button" class="btn btn-danger mrg-btn btn-sm btn-aksi1421 btn-disabled" title="Cancel" onclick="cancel(&#39;1421&#39;)" fdprocessedid="aonhom"><i class="fas fa-times"></i> Batal</button>
            </td>
          </tr>
          <tr align="center">
            <td>2</td>
            <td>Purwokerto</td>
            <td>28-Oct-2025</td>
            <td>PS-M</td>
            <td align="left">SEGARA JAYA SUBRON</td>
            <td align="right">159.840,00</td>
            <td align="center">
              <span class="badge badge-warning">DRAF</span>
            </td>
            <td align="center">

              <a href="https://orion-houseware.my.id/pembelian/print/YldvMk1Xc3dwUk1rZGF6TTBNelV6bW4wMDAwOA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi1033 btn-disabled" title="Print Pembelian" fdprocessedid="0l163l"><i class="fas fa-print"></i> Preview</button></a>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi1033 btn-disabled" onclick="detail(&#39;YUc4Mk1Wb3d5MzhHcWRETjRNM0V6bDEwMDAwOA&#39;, &#39;1033&#39;, &#39;trx&#39;)" fdprocessedid="gm1yi"><i class="fas fa-envelope-open"></i> Draf</button>

              <button type="button" class="btn btn-danger mrg-btn btn-sm btn-aksi1033 btn-disabled" title="Cancel" onclick="cancel(&#39;1033&#39;)" fdprocessedid="qf1asn"><i class="fas fa-times"></i> Batal</button>
            </td>
          </tr>
          <tr align="center">
            <td>3</td>
            <td>Purwokerto</td>
            <td>04-Mar-2026</td>
            <td>0027</td>
            <td align="left">TIMUR RAYA</td>
            <td align="right">12.164.000,00</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/pembelian/print/ZHpWek1YbzBjY1JONlJqTlNNVE16YkUwMDAwOA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi1431 btn-disabled" title="Print Pembelian" fdprocessedid="ojjbl9"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi1431 btn-disabled" onclick="detail(&#39;U1V4Nk1XVTBQMHp0b1l6TmxNVVl6clUwMDAwOA&#39;, &#39;1431&#39;, &#39;&#39;)" fdprocessedid="9tlzgf"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi1431 btn-disabled" onclick="edit(&#39;1431&#39;)" fdprocessedid="ml5b1n"><i class="fas fa-edit"></i> Edit</button>
            </td>
          </tr>
          <tr align="center">
            <td>4</td>
            <td>Purwokerto</td>
            <td>07-Mar-2026</td>
            <td>0050</td>
            <td align="left">TIMUR RAYA</td>
            <td align="right">2.970.000,00</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/pembelian/print/VjBoak1UTTBpNFhTZU5UTTRNSGd6ankwMDAwOA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi1430 btn-disabled" title="Print Pembelian" fdprocessedid="7vhoua"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi1430 btn-disabled" onclick="detail(&#39;VGxjeFJUUmFNMEoyZkZJd1VESWQzYzBtNHUwMDAxMA&#39;, &#39;1430&#39;, &#39;&#39;)" fdprocessedid="31anhg"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi1430 btn-disabled" onclick="edit(&#39;1430&#39;)" fdprocessedid="t0x7pzj"><i class="fas fa-edit"></i> Edit</button>
            </td>
          </tr>
          <tr align="center">
            <td>5</td>
            <td>Purwokerto</td>
            <td>04-Mar-2026</td>
            <td>0031</td>
            <td align="left">TIMUR RAYA</td>
            <td align="right">23.726.320,00</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/pembelian/print/VUZkV01YQTB4UkdySGFESjNPV1F6QU8wMDAwOA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi1429 btn-disabled" title="Print Pembelian" fdprocessedid="4g00fs"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi1429 btn-disabled" onclick="detail(&#39;UzNBeU1VODBacjN6eGVUSk9PVzh6dEowMDAwOA&#39;, &#39;1429&#39;, &#39;&#39;)" fdprocessedid="cli0mq"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi1429 btn-disabled" onclick="edit(&#39;1429&#39;)" fdprocessedid="q29zh"><i class="fas fa-edit"></i> Edit</button>
            </td>
          </tr>
          <tr align="center">
            <td>6</td>
            <td>Purwokerto</td>
            <td>06-Mar-2026</td>
            <td>SPS0603260001</td>
            <td align="left">PT.SUBUR PRIMA SELARAS</td>
            <td align="right">8.276.400,00</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/pembelian/print/UzFBeFRUUlJNbXltNDVNNFZESWQzYzBtV28wMDAxMA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi1428 btn-disabled" title="Print Pembelian" fdprocessedid="b2dqta"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi1428 btn-disabled" onclick="detail(&#39;VlZreFR6UnJNajdvMWtBNFN6SWQzYzBtSDcwMDAxMA&#39;, &#39;1428&#39;, &#39;&#39;)" fdprocessedid="qxk908"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi1428 btn-disabled" onclick="edit(&#39;1428&#39;)" fdprocessedid="fd0vcs"><i class="fas fa-edit"></i> Edit</button>
            </td>
          </tr>
          <tr align="center">
            <td>7</td>
            <td>Purwokerto</td>
            <td>04-Mar-2026</td>
            <td>D01-005</td>
            <td align="left">PT DILLIA MITRA INDONESIA</td>
            <td align="right">6.568.624,00</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/pembelian/print/UVZFeE56UmxNbEpZZjdBM05USWQzYzBtTkowMDAxMA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi1427 btn-disabled" title="Print Pembelian" fdprocessedid="0l28t"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi1427 btn-disabled" onclick="detail(&#39;U0ZZeGFqUlBNa204cnRJM1pUSWQzYzBtTlYwMDAxMA&#39;, &#39;1427&#39;, &#39;&#39;)" fdprocessedid="k6wudh"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi1427 btn-disabled" onclick="edit(&#39;1427&#39;)" fdprocessedid="ek6swi"><i class="fas fa-edit"></i> Edit</button>
            </td>
          </tr>
          <tr align="center">
            <td>8</td>
            <td>Purwokerto</td>
            <td>18-Feb-2026</td>
            <td>0157</td>
            <td align="left">SINAR JAYA A PSMA</td>
            <td align="right">14.400.000,00</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/pembelian/print/UlVVeGJEUnBNa2RjM3dRMllUSWQzYzBtbzkwMDAxMA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi1426 btn-disabled" title="Print Pembelian" fdprocessedid="jp4ejm"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi1426 btn-disabled" onclick="detail(&#39;YTBjeGFqUk1NbXNPaWEwMlpqSWQzYzBtMlowMDAxMA&#39;, &#39;1426&#39;, &#39;&#39;)" fdprocessedid="vyqqq7"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi1426 btn-disabled" onclick="edit(&#39;1426&#39;)" fdprocessedid="ax741j"><i class="fas fa-edit"></i> Edit</button>
            </td>
          </tr>
          <tr align="center">
            <td>9</td>
            <td>Purwokerto</td>
            <td>07-Mar-2026</td>
            <td>CM26C10252</td>
            <td align="left">DIKARI</td>
            <td align="right">2.371.500,00</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/pembelian/print/Y2swNU1YSTBjb2hqVVZqSktOVXN6WWkwMDAwOA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi1425 btn-disabled" title="Print Pembelian" fdprocessedid="ilppr"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi1425 btn-disabled" onclick="detail(&#39;VkVFek1WYzBBNmxVVldESnBOVmd6eDQwMDAwOA&#39;, &#39;1425&#39;, &#39;&#39;)" fdprocessedid="kb4yt"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi1425 btn-disabled" onclick="edit(&#39;1425&#39;)" fdprocessedid="qoyi9d"><i class="fas fa-edit"></i> Edit</button>
            </td>
          </tr>
          <tr align="center">
            <td>10</td>
            <td>Purwokerto</td>
            <td>07-Mar-2026</td>
            <td>CM26C10250</td>
            <td align="left">DIKARI</td>
            <td align="right">11.533.000,00</td>
            <td align="center">
              <span class="badge badge-success">SUBMIT</span>
            </td>
            <td align="center">
              <a href="https://orion-houseware.my.id/pembelian/print/ZFZveFJUUmtNa1BPYk5rMGN6SWQzYzBtUGQwMDAxMA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi1424 btn-disabled" title="Print Pembelian" fdprocessedid="2v5zb"><i class="fas fa-print"></i></button></a>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi1424 btn-disabled" onclick="detail(&#39;TjJFeFRqUk9NbUtQbGo4MFNqSWQzYzBtaWYwMDAxMA&#39;, &#39;1424&#39;, &#39;&#39;)" fdprocessedid="aj5iq9"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi1424 btn-disabled" onclick="edit(&#39;1424&#39;)" fdprocessedid="3avnpi"><i class="fas fa-edit"></i> Edit</button>
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