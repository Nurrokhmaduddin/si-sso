<?php $page = 'yudisium'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Yudisium 
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
            <!-- <div class="card-header bg-secondary">
              <h5 class="card-title mb-0">
                <i class="fas fa-database"></i> Data Produk/Barang        
              </h5>
              <div class="card-tools ms-auto">
                               
              </div>
            </div> -->

            <div class="card-body ">
              <div class="row">
                <div class="col-md-6">
                  <b>Periode:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Status:</b> Aktif
                </div>
              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button type="button" 
                class="btn btn-outline-secondary btn-sm"
                onclick="window.location.href='perkuliahan-yudisium.php'">
                <span class="fas fa-reply me-1"></span> Kembali
              </button>
                <!-- <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button> -->
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>   -->  
              </div>
            </div>

          </div>


<!-- ========== CARD 3: Tabel saja ========== -->
          <div class="card">
            <!-- <div class="card-header d-flex align-items-center">
              <h5 class="card-title mb-0">Judul tabel ini</h5>    
              <div class="ms-auto">                
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm ">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
              </div>
            </div> -->

            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-bordered table-striped datatables1">
  <thead>
    <tr>
      <th>No</th>
      <th>NIM</th>
      <th>Nama Mahasiswa</th>
      <th>Dokumen</th>
      <th>Tanggal Daftar</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>

    <!-- 1 -->
    <tr>
      <td>1</td>
      <td>20521003</td>
      <td>NAFASA CAHYA KHARIMAH</td>
      <td>
        <a href="#" class="d-block text-decoration-none">
          <i class="fas fa-file-alt me-1"></i> Dokumen
        </a>
        <a href="#" class="d-block text-decoration-none">
          <i class="fas fa-receipt me-1"></i> Bukti Bayar SPP
        </a>
      </td>
      <td>
        1 July 2025<br>
        <small class="text-muted">15:37</small>
      </td>
      <td><span class="badge bg-success">Disetujui</span></td>
      <td>
        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
      </td>
    </tr>

    <!-- 2 -->
    <tr>
      <td>2</td>
      <td>20521071</td>
      <td>ULYA NADHATUL SHIFA</td>
      <td>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-file-alt me-1"></i> Dokumen</a>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-receipt me-1"></i> Bukti Bayar SPP</a>
      </td>
      <td>1 July 2025<br><small class="text-muted">15:37</small></td>
      <td><span class="badge bg-success">Disetujui</span></td>
      <td>
        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
      </td>
    </tr>

    <!-- 3 -->
    <tr>
      <td>3</td>
      <td>20521075</td>
      <td>BAGUS RIDWAN WIBISONO</td>
      <td>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-file-alt me-1"></i> Dokumen</a>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-receipt me-1"></i> Bukti Bayar SPP</a>
      </td>
      <td>1 July 2025<br><small class="text-muted">15:37</small></td>
      <td><span class="badge bg-success">Disetujui</span></td>
      <td>
        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
      </td>
    </tr>

    <!-- 4 -->
    <tr>
      <td>4</td>
      <td>20521078</td>
      <td>KHARIS MUSYAFA</td>
      <td>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-file-alt me-1"></i> Dokumen</a>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-receipt me-1"></i> Bukti Bayar SPP</a>
      </td>
      <td>1 July 2025<br><small class="text-muted">15:37</small></td>
      <td><span class="badge bg-success">Disetujui</span></td>
      <td>
        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
      </td>
    </tr>

    <!-- 5 -->
    <tr>
      <td>5</td>
      <td>20521088</td>
      <td>PUTRI IZZATUL AULIA</td>
      <td>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-file-alt me-1"></i> Dokumen</a>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-receipt me-1"></i> Bukti Bayar SPP</a>
      </td>
      <td>1 July 2025<br><small class="text-muted">15:37</small></td>
      <td><span class="badge bg-success">Disetujui</span></td>
      <td>
        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
      </td>
    </tr>

    <!-- 6 -->
    <tr>
      <td>6</td>
      <td>20521092</td>
      <td>SIFA AMELIA RAHAYU</td>
      <td>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-file-alt me-1"></i> Dokumen</a>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-receipt me-1"></i> Bukti Bayar SPP</a>
      </td>
      <td>1 July 2025<br><small class="text-muted">15:37</small></td>
      <td><span class="badge bg-success">Disetujui</span></td>
      <td>
        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
      </td>
    </tr>

    <!-- 7 -->
    <tr>
      <td>7</td>
      <td>20521116</td>
      <td>ASTRI NURISNAENI ANJASMOKO</td>
      <td>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-file-alt me-1"></i> Dokumen</a>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-receipt me-1"></i> Bukti Bayar SPP</a>
      </td>
      <td>1 July 2025<br><small class="text-muted">15:37</small></td>
      <td><span class="badge bg-success">Disetujui</span></td>
      <td>
        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
      </td>
    </tr>

    <!-- 8 -->
    <tr>
      <td>8</td>
      <td>20521121</td>
      <td>HANIFAH DHIYA ULHAQ</td>
      <td>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-file-alt me-1"></i> Dokumen</a>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-receipt me-1"></i> Bukti Bayar SPP</a>
      </td>
      <td>1 July 2025<br><small class="text-muted">15:37</small></td>
      <td><span class="badge bg-success">Disetujui</span></td>
      <td>
        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
      </td>
    </tr>

    <!-- 9 -->
    <tr>
      <td>9</td>
      <td>20521124</td>
      <td>GHAITSA PRAJATANTRI SAHARRANI</td>
      <td>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-file-alt me-1"></i> Dokumen</a>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-receipt me-1"></i> Bukti Bayar SPP</a>
      </td>
      <td>1 July 2025<br><small class="text-muted">15:37</small></td>
      <td><span class="badge bg-success">Disetujui</span></td>
      <td>
        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
      </td>
    </tr>

    <!-- 10 -->
    <tr>
      <td>10</td>
      <td>20521125</td>
      <td>SHAFANISA DESTIARA PUTRI</td>
      <td>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-file-alt me-1"></i> Dokumen</a>
        <a href="#" class="d-block text-decoration-none"><i class="fas fa-receipt me-1"></i> Bukti Bayar SPP</a>
      </td>
      <td>1 July 2025<br><small class="text-muted">15:37</small></td>
      <td><span class="badge bg-success">Disetujui</span></td>
      <td>
        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
      </td>
    </tr>

  </tbody>
</table>


              </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>
  </section>



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

          <!-- Pilihan -->
          <div class="mb-3">
            <label for="lembaga" class="form-label">Status</label>
            <select name="lembaga" id="lembaga" class="form-select">
              <option value="">-- Pilih --</option>
              <option value="IABEE" >pilihan 1</option>
              <option value="LAM TEKNIK" >pilihan 2</option>
              <option value="BATAP" >pilihan 3</option>
              <option value="EDUSQUAD">pilihan 4</option>
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-info">Terapkan Filter</button>
          </div>
        </div>
      </form>
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
          -idealnya: periode aktif trigger karena ketetapan waktu berlaku hingga, bukan trigger update status
          -bagaimana kesiapan masterdata periode yg modular, agar bisa konsolidasi data buat sidebar Progress CPL-IK
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content border-0 shadow">

      <!-- Header -->
      <div class="modal-header bg-light">
        <h5 class="modal-title fw-semibold">
          <i class="fas fa-bullhorn me-2 text-primary"></i>
          Tambah Pengumuman Akademik
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <form action="#" method="POST">

          <!-- Judul -->
          <div class="mb-3">
            <label class="form-label fw-medium">Judul Pengumuman</label>
            <input type="text" class="form-control" placeholder="Masukkan judul pengumuman" required>
          </div>

          <!-- Isi -->
          <div class="mb-3">
            <label class="form-label fw-medium">Isi Pengumuman</label>
            <textarea class="form-control" rows="5" placeholder="Tulis isi pengumuman..." required></textarea>
          </div>

          <!-- Status -->
          <div class="mb-3">
            <label class="form-label fw-medium">Status</label>
            <select class="form-select">
              <option value="publish">Publish</option>
              <option value="draft">Draft</option>
            </select>
          </div>

          <!-- Tanggal Publish -->
          <div class="mb-3">
            <label class="form-label fw-medium">Tanggal Publish</label>
            <input type="date" class="form-control">
            <small class="text-muted">Kosongkan jika status Draft</small>
          </div>

        </form>
      </div>

      <!-- Footer -->
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Batal
        </button>
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-save me-2"></i>Simpan
        </button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>










