<?php $page = 'master_periode'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Periode Akademik 
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

            <!-- <div class="card-body ">
              <div class="row">
                <div class="col-md-6">
                  <b>Angkatan:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Peminatan:</b> Peminatan B
                </div>
                <div class="col-md-6">
                  <b>Jalur:</b> Reguler
                </div>
                <div class="col-md-6">
                  <b>Status:</b> Aktif
                </div>
              </div>
            </div> -->

            <div class="card-footer">
              <div class="card-tools ms-auto">
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
               <table class="table table1 table-bordered table-striped table-sm datatables1">
                 <thead class="text-uppercase">
                <tr>
                  <th width="20px">No</th>
                  <th>Kode</th>
                  <th>Periode Akademik</th>
                  <th>Semester</th>
                  <th>Berlaku Hingga</th>
                  <th>Nilai Minimum CPMK (LOA)</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td align="center">1</td>
                  <td>KR-01</td>
                  <td>2020/2021</td>
                  <td>Gasal</td>
                  <td>28 September 2020</td>
                  <td>60</td>
                  <td><span class="badge badge-secondary">Tidak Aktif</span></td>
                  <td align="center">
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td align="center">2</td>
                  <td>KR-05</td>
                  <td>2021/2022</td>
                  <td>Gasal</td>
                  <td>27 September 2021</td>
                  <td>60</td>
                  <td><span class="badge badge-secondary">Tidak Aktif</span></td>
                  <td align="center">
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td align="center">3</td>
                  <td>KR-07</td>
                  <td>2022/2023</td>
                  <td>Gasal</td>
                  <td>28 Februari 2023</td>
                  <td>60</td>
                  <td><span class="badge badge-secondary">Tidak Aktif</span></td>
                  <td align="center">
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td align="center">4</td>
                  <td>KR-09</td>
                  <td>2023/2024</td>
                  <td>Gasal</td>
                  <td>29 Februari 2024</td>
                  <td>60</td>
                 <td><span class="badge badge-secondary">Tidak Aktif</span></td>
                  <td align="center">
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td align="center">5</td>
                  <td>KR-11</td>
                  <td>2024/2025</td>
                  <td>Gasal</td>
                  <td>28 Februari 2025</td>
                  <td>60</td>
                  <td><span class="badge badge-secondary">Tidak Aktif</span></td>
                  <td align="center">
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td align="center">6</td>
                  <td>KR-13</td>
                  <td>2025/2026</td>
                  <td>Gasal</td>
                  <td>28 Februari 2026</td>
                  <td>60</td>
                  <td><span class="badge badge-primary">Aktif</span></td>
                  <td align="center">
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td align="center">7</td>
                  <td>KR-03</td>
                  <td>2020/2021</td>
                  <td>Genap</td>
                  <td>01 Maret 2021</td>
                  <td>60</td>
                  <td><span class="badge badge-secondary">Tidak Aktif</span></td>
                  <td align="center">
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td align="center">8</td>
                  <td>KR-06</td>
                  <td>2021/2022</td>
                  <td>Genap</td>
                  <td>07 Maret 2022</td>
                  <td>60</td>
                  <td><span class="badge badge-secondary">Tidak Aktif</span></td>
                  <td align="center">
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td align="center">9</td>
                  <td>KR-08</td>
                  <td>2022/2023</td>
                  <td>Genap</td>
                  <td>31 Agustus 2023</td>
                  <td>60</td>
                  <td><span class="badge badge-secondary">Tidak Aktif</span></td>
                  <td align="center">
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td align="center">10</td>
                  <td>KR-10</td>
                  <td>2023/2024</td>
                  <td>Genap</td>
                  <td>31 Agustus 2024</td>
                  <td>60</td>
                  <td><span class="badge badge-secondary">Tidak Aktif</span></td>
                  <td align="center">
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
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
<?php include('5script.php'); ?>