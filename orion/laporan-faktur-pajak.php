<?php $page = 'laporan_faktur_pajak'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0"> Laporan Faktur Pajak
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
                  <b>Toko:</b> Semua Toko
                </div>


              </div>
            </div>

             <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
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
          <tr align="center" role="row"><th class="sorting_disabled" rowspan="1" colspan="1">No.</th><th class="sorting_disabled" rowspan="1" colspan="1">Alamat Gudang</th><th class="sorting_disabled" rowspan="1" colspan="1">Tanggal</th><th class="sorting_disabled" rowspan="1" colspan="1">Toko</th><th class="sorting_disabled" rowspan="1" colspan="1">No Faktur</th><th class="sorting_disabled" rowspan="1" colspan="1">Total Harga (Rp)</th><th class="sorting_disabled" rowspan="1" colspan="1">Aksi</th></tr>
        </thead>
        <tbody><tr class="odd"><td class="dtr-control" style="text-align: center;">1</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">01-Nov-2025</td><td style="text-align: left;">MIROTA BABARSARI</td><td style="text-align: center;">PJ/003057</td><td style="text-align: right !important;">2.299.320,00</td><td style="text-align: center;">
          <a type="Download" class="btn btn-sm btn-outline-success" href="data-PJ003057.xml" target="_blank"><i class="fas fa-print"></i> XML</a>
          </div>

          
      </td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">2</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">01-Nov-2025</td><td style="text-align: left;">MIROTA SIMANJUTAK</td><td style="text-align: center;">PJ/003058</td><td style="text-align: right !important;">6.679.670,00</td><td style="text-align: center;">
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm btn-aksi3515" data-toggle="dropdown" fdprocessedid="si9ao">
            <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
            </button>
            <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/Ym5remVUVjRNVUxiYWVZMVZUSWQzYzBtaEwwMDAxMA" target="_blank">PDF</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/Y2pJek56VkZNWGZtZGhBMVNESWQzYzBtck8wMDAxMA" target="_blank">Excel</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/YkZZelF6VkZNVmVWUVhFMVZESWQzYzBtWVowMDAxMA" target="_blank">XML</a>
            </div>
          </div>

          <b style="color: gray;" class="hidden loading-aksi3515"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
      </td></tr><tr class="odd"><td class="dtr-control" style="text-align: center;">3</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">01-Nov-2025</td><td style="text-align: left;">MIROTA SIMANJUTAK</td><td style="text-align: center;">PJ/003059</td><td style="text-align: right !important;">6.896.220,00</td><td style="text-align: center;">
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm btn-aksi3516" data-toggle="dropdown" fdprocessedid="zr7txf">
            <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
            </button>
            <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/WTFVek56VkVNWHU3amtNMlNESWQzYzBtNGswMDAxMA" target="_blank">PDF</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/TnpkUE0wSTFIWkU2bGNqRmhOa1V6WmowMDAwOA" target="_blank">Excel</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/VUhVelFqVk9NVHYyUDZnMk9ESWQzYzBtWUgwMDAxMA" target="_blank">XML</a>
            </div>
          </div>

          <b style="color: gray;" class="hidden loading-aksi3516"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
      </td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">4</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">01-Nov-2025</td><td style="text-align: left;">GARDENA JOGJA</td><td style="text-align: center;">PJ/003060</td><td style="text-align: right !important;">3.315.000,00</td><td style="text-align: center;">
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm btn-aksi3517" data-toggle="dropdown" fdprocessedid="tqe8zv">
            <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
            </button>
            <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/TVVwcE0yODFpN3VGMllqRTNOM2t6Q2EwMDAwOA" target="_blank">PDF</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/T1hKVE0zWTFEcEd5TGJURjZOekV6aGMwMDAwOA" target="_blank">Excel</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/Y1V4ck0xWTFGS05yelpqRmxOM016RDMwMDAwOA" target="_blank">XML</a>
            </div>
          </div>

          <b style="color: gray;" class="hidden loading-aksi3517"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
      </td></tr><tr class="odd"><td class="dtr-control" style="text-align: center;">5</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">01-Nov-2025</td><td style="text-align: left;">PRIMA ANUGRAH SRANDAKAN</td><td style="text-align: center;">PJ/003062</td><td style="text-align: right !important;">4.018.500,00</td><td style="text-align: center;">
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm btn-aksi3519" data-toggle="dropdown" fdprocessedid="fvf48j">
            <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
            </button>
            <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/Wm1ST00zRTFDcW9OYmFqRjBPVEl6Z0MwMDAwOA" target="_blank">PDF</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/WkcwemNEVXhNVjc4SnJJNU1ESWQzYzBtMkswMDAxMA" target="_blank">Excel</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/U1VwS016azFzeER0OGN6RjVPVTh6QVMwMDAwOA" target="_blank">XML</a>
            </div>
          </div>

          <b style="color: gray;" class="hidden loading-aksi3519"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
      </td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">6</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">01-Nov-2025</td><td style="text-align: left;">MIROTA SIMANJUTAK</td><td style="text-align: center;">PJ/003063</td><td style="text-align: right !important;">11.555.200,00</td><td style="text-align: center;">
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm btn-aksi3520" data-toggle="dropdown" fdprocessedid="uoi2h">
            <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
            </button>
            <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/YkZJelJ6VnJNbXJuQzNvd1FqSWQzYzBtOTQwMDAxMA" target="_blank">PDF</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/VEZJell6VlVNa1JwV1o0d2RUSWQzYzBtZm8wMDAxMA" target="_blank">Excel</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/VlZRellqVlpNa3o5TElFd056SWQzYzBtd04wMDAxMA" target="_blank">XML</a>
            </div>
          </div>

          <b style="color: gray;" class="hidden loading-aksi3520"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
      </td></tr><tr class="odd"><td class="dtr-control" style="text-align: center;">7</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">01-Nov-2025</td><td style="text-align: left;">DEPO PELITA SOKARAJA</td><td style="text-align: center;">PJ/003066</td><td style="text-align: right !important;">15.206.400,00</td><td style="text-align: center;">
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm btn-aksi3523" data-toggle="dropdown" fdprocessedid="s4zz1b">
            <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
            </button>
            <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/TUhZemJqVldNa3pTcXBzelNUSWQzYzBtajUwMDAxMA" target="_blank">PDF</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/Y2pBelJEVjFNbEdVSDlZemFESWQzYzBtME0wMDAxMA" target="_blank">Excel</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/YVdWck0wYzFqZndrQU16SkRNMU16em8wMDAwOA" target="_blank">XML</a>
            </div>
          </div>

          <b style="color: gray;" class="hidden loading-aksi3523"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
      </td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">8</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">01-Nov-2025</td><td style="text-align: left;">MIROTA SIMANJUTAK</td><td style="text-align: center;">PJ/003069</td><td style="text-align: right !important;">4.072.000,00</td><td style="text-align: center;">
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm btn-aksi3526" data-toggle="dropdown" fdprocessedid="gjawds">
            <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
            </button>
            <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/VjI4elZUVmpNbTJBeVBzMlVESWQzYzBtT0UwMDAxMA" target="_blank">PDF</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/U0U1Tk0xQTFjZ2lIS1FUSkhOa0l6cE8wMDAwOA" target="_blank">Excel</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/VVZrek1EVkhNbDVPY0FBMlpqSWQzYzBtbEgwMDAxMA" target="_blank">XML</a>
            </div>
          </div>

          <b style="color: gray;" class="hidden loading-aksi3526"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
      </td></tr><tr class="odd"><td class="dtr-control" style="text-align: center;">9</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">01-Nov-2025</td><td style="text-align: left;">MIROTA SIMANJUTAK</td><td style="text-align: center;">PJ/003070</td><td style="text-align: right !important;">1.779.048,00</td><td style="text-align: center;">
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm btn-aksi3527" data-toggle="dropdown" fdprocessedid="bg6zia">
            <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
            </button>
            <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/TmtkeE16VTFRT3B6aWJUSm5OMUV6VmMwMDAwOA" target="_blank">PDF</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/YVZjek56VkVNbWVjMFNjM1ZUSWQzYzBtZmEwMDAxMA" target="_blank">Excel</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/UkU5dU0wRTFuNlVUQVZUSjZOelF6MXEwMDAwOA" target="_blank">XML</a>
            </div>
          </div>

          <b style="color: gray;" class="hidden loading-aksi3527"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
      </td></tr><tr class="even"><td class="dtr-control" style="text-align: center;">10</td><td style="text-align: center;">Purwokerto</td><td style="text-align: center;">01-Nov-2025</td><td style="text-align: left;">MIROTA GODEAN</td><td style="text-align: center;">PJ/003071</td><td style="text-align: right !important;">6.419.608,00</td><td style="text-align: center;">
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm btn-aksi3528" data-toggle="dropdown" fdprocessedid="eol14a">
            <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
            </button>
            <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/VURSc00yZzExcUxlVlpqSTFPSGt6RDMwMDAwOA" target="_blank">PDF</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/ZG14bU0wVTFZYzhhWGFUSlRPRzB6c0IwMDAwOA" target="_blank">Excel</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/YWtWcE0zSTFMb2RwV2F6SnRPRGt6MWwwMDAwOA" target="_blank">XML</a>
            </div>
          </div>

          <b style="color: gray;" class="hidden loading-aksi3528"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
      </td></tr></tbody>


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