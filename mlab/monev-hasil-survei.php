<?php $page = 'monev_hasil_survei'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev Hasil Survey
      <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-info-circle"></i>
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
          <div class="card card-outline card-info">
            <div class="card-body ">
              <div class="row">
                <div class="col-md-6">
                  <b>Awal Periode:</b> Semua &nbsp;
                </div> 
                <div class="col-md-6">
                  <b>Akhir Periode:</b> Semua  &nbsp;
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
                <a href="data-saran.xlsx" class="btn btn-sm btn-outline-success">Download Hasil Survey</a>
                <a href="data-hasil-survei.xlsx" class="btn btn-sm btn-outline-success">Download Saran/Masukan</a>
              </div>
            </div>
          </div>


 <!-- ========== CARD 3: KPI row ========== --> 
 <!--  <style>
    body { background: #f4f6f9; }
    .kpi { border-radius: 10px; padding: 18px; color: #fff; }
    .kpi .big { font-size: 1.6rem; font-weight:700; }
    .kpi .small { font-size: 0.85rem; opacity: .9; }
    .card { border-radius:10px; }
    .status-dot { display:inline-block; width:10px; height:10px; border-radius:50%; margin-right:6px; vertical-align:middle; }
    .status-green { background:#28a745; }
    .status-yellow { background:#ffc107; }
    .status-red { background:#dc3545; }
    .ewstable td, .ewstable th { vertical-align: middle; }
    .table-fixed-height { max-height: 360px; overflow:auto; }
  </style>       
<div class="row g-3 mb-3">

  <div class="col-md-3">
    <div class="kpi bg-primary text-white">
      <div class="small">Jumlah Mahasiswa </div>
      <div class="big" id="mhsTahun1">600</div>
      <div class="small">berlangsung pembimbingan</div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="kpi text-white" style="background:#20c997;">
      <div class="small">Jumlah Dosen </div>
      <div class="big" id="mhsTahun2">52</div>
      <div class="small">berlangsung membimbing</div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="kpi text-white" style="background:#ff7f0e;">
      <div class="small">Mahasiswa Macet</div>
      <div class="big" id="mhsTahun3">7</div>
      <div class="small"> melebihi 1 semester</div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="kpi bg-danger text-white">
      <div class="small">Perpanjangan terbanyak</div>
      <div class="big" id="mhsTahun4">ke-4</div>
      <div class="small">berlangsung pembimbingan</div>
    </div>
  </div>

</div> -->
 <!-- TAB NAV (Semester) -->
           <!-- <ul class="nav nav-tabs">
            <li class="nav-item" onclick="window.location='monev-ta.php'"><a class="nav-link active">Berlangsung</a></li>
            <li class="nav-item" onclick="window.location='monev-ta2.php'"><a class="nav-link ">Selesai</a></li>
          </ul> -->
  <!-- ========== CARD : Chart ========== --> 
<!--   <div class="card">
    <div class="card-header">
      <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i> Sebaran Jumlah Mahasiswa</h5>
      <div class="card-tools">
        <small class="text-muted"> Terpilih</small>
      </div>
    </div>

    <div class="card-body chart-container d-flex flex-column">

      <div class="flex-grow-1">
        <canvas id="chartMasaStudi" height="70"></canvas>
      </div>            

    </div>
  </div> -->
  <!-- ========== CARD : Daftar Dosen ========== --> 
  <div class="card">
    <!-- <div class="card-header">
      <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>Daftar Dosen dan Beban Pembimbingan</h5>
      <div class="card-tools">
        <small class="text-muted">berlangsung</i></h5></small>
      </div>
    </div> -->
    <div class="card-body">
    <!-- <canvas id="chartLulusanBatch"  ></canvas> -->
    <table class="table table-bordered table-striped table-sm datatables1">
  <thead>
    <tr>
      <th>No.</th>
      <th>Nomor Order</th>
      <th>Tanggal Registrasi</th>
      <th>Nama Pemberi Order</th>
      <th>Instansi</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>02500226</td>
      <td>24 February 2026</td>
      <td>Prof. Dr. Is Fatimah S.Si., M.Si.</td>
      <td>Universitas Islam Indonesia</td>
      <td></td>
    </tr>
    <tr>
      <td>2</td>
      <td>02070226</td>
      <td>11 February 2026</td>
      <td>Krisna Marihot Leonardus Sinaga</td>
      <td>UNY</td>
      <td></td>
    </tr>
    <tr>
      <td>3</td>
      <td>01930226</td>
      <td>10 February 2026</td>
      <td>Ganesha Antarnusa</td>
      <td>Untirta</td>
      <td></td>
    </tr>
    <tr>
      <td>4</td>
      <td>01910226</td>
      <td>10 February 2026</td>
      <td>Dr.-Ing. Ir. Kusnanto</td>
      <td>Universitas Gadjah Mada</td>
      <td></td>
    </tr>
    <tr>
      <td>5</td>
      <td>01780226</td>
      <td>08 February 2026</td>
      <td>MOH ALFI MUHAJIRIN</td>
      <td>Universitas Sains Al-Qur'an</td>
      <td></td>
    </tr>
    <tr>
      <td>6</td>
      <td>01720226</td>
      <td>06 February 2026</td>
      <td>Prof. Dr. Is Fatimah S.Si., M.Si.</td>
      <td>Universitas Islam Indonesia</td>
      <td></td>
    </tr>
    <tr>
      <td>7</td>
      <td>01530226</td>
      <td>03 February 2026</td>
      <td>Mohammad Imam Muzaki</td>
      <td>Universitas Diponegoro</td>
      <td></td>
    </tr>
    <tr>
      <td>8</td>
      <td>01480226</td>
      <td>02 February 2026</td>
      <td>Ady Pramasta</td>
      <td>Universitas Jember</td>
      <td></td>
    </tr>
    <tr>
      <td>9</td>
      <td>01450226</td>
      <td>02 February 2026</td>
      <td>Tabina Shannaesha</td>
      <td>Universitas Diponegoro</td>
      <td></td>
    </tr>
    <tr>
      <td>10</td>
      <td>01230126</td>
      <td>27 January 2026</td>
      <td>Januardo Fernandez Saragih</td>
      <td>Universitas Gadjah Mada</td>
      <td></td>
    </tr>
  </tbody>
</table>

  </div>
</div>




<!-- ========== CARD : Tabel  Granular ========== -->
<!-- <div class="card">
  <div class="card-header d-flex align-items-center">
    <h5 class="card-title mb-0">Daftar Mahasiswa Berlangsung TA</h5>    
    
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm datatables1">
        <thead>
          <tr class="text-uppercase text-center">
            <th width="5px">No.</th>
            <th>Username</th>
            <th>DisplayName</th>
            <th>Email/Nomor HP</th>
            <th>Angkatan</th>
            <th>Jalur/Jurusan</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td class="text-center">1</td>
            <td>19312137</td>
            <td>Pramita Widyadari</td>
            <td>pramita.widyadari@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-info">Aktif</span></td>
            <td class="text-center">
              <button type="button" class="btn btn-sm btn-outline-warning"><i class="fas fa-key"></i></button>
              <button type="button" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
              <button type="button" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
            </td>
          </tr>

          <tr>
            <td class="text-center">2</td>
            <td>19312376</td>
            <td>Ho Aldika Novaldy Sumampow</td>
            <td>aldika.sumampow@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-warning">Cuti</span></td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-info" onclick="window.location.href='monev-rekap-individual-detail.php' " ><i class="fas fa-info-circle"></i></button>
              <button class="btn btn-sm btn-outline-primary"><i class="fas fa-upload"></i></button>
              <button class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></button>
            </td>
          </tr>

          <tr>
            <td class="text-center">3</td>
            <td>19312406</td>
            <td>Annisa Regita Sintowati</td>
            <td>annisa.sintowati@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-danger">Skors</span></td>
            <td class="text-center">
              <div class="btn-group">
                <a href="portfolio_cpmk_detail2.php" target="_blank" class="btn btn-sm btn-outline-info">
                  <i class="fas fa-external-link-alt"></i> View
                </a>
                <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-trash text-danger"></i> Hapus</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td class="text-center">4</td>
            <td>19312418</td>
            <td>Claudia Monica Aditama</td>
            <td>claudia.aditama@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-danger">Drop Out</span></td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-warning">🔑</button>
            </td>
          </tr>
          <tr>

            <td class="text-center">5</td>
            <td>19312424</td>
            <td>Filza Aliyah Tasya</td>
            <td>filza.tasya@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering IP</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-danger">Passed Out</span></td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-warning">🔑</button>
            </td>
          </tr>

          <tr>
            <td class="text-center">6</td>
            <td>19312424</td>
            <td>Filza Aliyah Tasya</td>
            <td>filza.tasya@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-success">Lulus</span></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" 
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i> Action
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit Link</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt text-danger"></i> Hapus Data</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-upload text-success"></i> Upload File</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="portfolio_cpmk_detail2.php" target="_blank">
                  <i class="fas fa-external-link-alt text-info"></i> View Link</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-download text-success"></i> Download File</a></li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center">7</td>
            <td>19312424</td>
            <td>Filza Aliyah Tasya</td>
            <td>filza.tasya@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-success">Lulus</span></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" 
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i> Action
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit Link</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt text-danger"></i> Hapus Data</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-upload text-success"></i> Upload File</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="portfolio_cpmk_detail2.php" target="_blank">
                  <i class="fas fa-external-link-alt text-info"></i> View Link</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-download text-success"></i> Download File</a></li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center">8</td>
            <td>19312424</td>
            <td>Filza Aliyah Tasya</td>
            <td>filza.tasya@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-success">Lulus</span></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" 
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i> Action
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit Link</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt text-danger"></i> Hapus Data</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-upload text-success"></i> Upload File</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="portfolio_cpmk_detail2.php" target="_blank">
                  <i class="fas fa-external-link-alt text-info"></i> View Link</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-download text-success"></i> Download File</a></li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center">9</td>
            <td>19312424</td>
            <td>Filza Aliyah Tasya</td>
            <td>filza.tasya@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-success">Lulus</span></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" 
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i> Action
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit Link</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt text-danger"></i> Hapus Data</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-upload text-success"></i> Upload File</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="portfolio_cpmk_detail2.php" target="_blank">
                  <i class="fas fa-external-link-alt text-info"></i> View Link</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-download text-success"></i> Download File</a></li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center">10</td>
            <td>19312424</td>
            <td>Filza Aliyah Tasya</td>
            <td>filza.tasya@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-success">Lulus</span></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" 
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i> Action
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit Link</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt text-danger"></i> Hapus Data</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-upload text-success"></i> Upload File</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="portfolio_cpmk_detail2.php" target="_blank">
                  <i class="fas fa-external-link-alt text-info"></i> View Link</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-download text-success"></i> Download File</a></li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center">11</td>
            <td>19312424</td>
            <td>Filza Aliyah Tasya</td>
            <td>filza.tasya@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-success">Lulus</span></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" 
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i> Action
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit Link</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt text-danger"></i> Hapus Data</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-upload text-success"></i> Upload File</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="portfolio_cpmk_detail2.php" target="_blank">
                  <i class="fas fa-external-link-alt text-info"></i> View Link</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-download text-success"></i> Download File</a></li>
                </ul>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div> -->












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
          Ringkasan capaian CPL per Individu Mahasiswa, perkembangan, peringatan dini (EWS), disajikan dalam bentuk grafik dan tabel (Mockup data statis)
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<script>
const ctx = document.getElementById('chartMasaStudi').getContext('2d');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            'Tahap 6+',
            'Tahap 5',
            'Tahap 4',
            'Tahap 3',
            'Tahap 2',
            'Tahap 1'
        ],
        datasets: [
            {
                label: 'Mahasiswa Aktif',
                data: [8, 20, 50, 40, 20, 8], // contoh data statis
                backgroundColor: 'rgba(13,110,253,0.8)', // primary
                borderColor: 'rgba(13,110,253,1)',
                borderWidth: 1
            },
            {
                label: 'Mahasiswa Pasif',
                data: [6, 15, 20, 15, 3, 1], // contoh data statis
                backgroundColor: 'rgba(255,193,7,0.8)', // warning
                borderColor: 'rgba(255,193,7,1)',
                borderWidth: 1
            },
            {
                label: 'Mahasiswa Macet',
                data: [6, 10, 10, 5, 2, 1], // contoh data statis
                backgroundColor: 'rgba(220,53,69,0.8)', // danger
                borderColor: 'rgba(220,53,69,1)',
                borderWidth: 1
            }
        ]
    },
    options: {
        indexAxis: 'y', // horizontal
        responsive: true,
        plugins: {
            legend: {
                display: true,
                position: 'top'
            },
            tooltip: {
                enabled: true
            }
        },
        scales: {
            x: {
                stacked: true, // WAJIB untuk stacked
                beginAtZero: true,
                title: {
                    display: false
                }
            },
            y: {
                stacked: true // WAJIB untuk stacked
            }
        }
    }
});
</script>
<script>
  var ctx12 = document.getElementById('chartLulusanBatch').getContext('2d');
  new Chart(ctx12, {
    type: 'pie',
    data: {
      labels: ['Angkatan 2020', 'Angkatan 2021', 'Angkatan 2019'],
      datasets: [{
        data: [50, 20, 10], // sesuai tabel

        backgroundColor: [
          '#007bff', // 2020 - biru
          '#28a745', // 2021 - hijau
          '#ffc107'  // 2019 - kuning
        ],

        borderColor: '#ffffff',
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
  maintainAspectRatio: false,
      plugins: {
        legend: {
          position: 'top'
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              return context.label + ': ' + context.raw + ' lulusan';
            }
          }
        }
      }
    }
  });


</script>
<?php include('5script.php'); ?>