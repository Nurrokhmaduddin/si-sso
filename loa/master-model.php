<?php $page = 'master_model'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Tipe Kelas Perkuliahan
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
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
              <div class="card-tools ml-auto">
                               
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
              <div class="card-tools ml-auto">
                <!-- <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-filter mr-1"></i> Filter
                </button> -->
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalTambahData">
                  <i class="fas fa-plus mr-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalImpor">
                  <i class="fas fa-file-upload mr-1"></i> Import
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download mr-1"></i> Export
                </button>
                <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban mr-1"></i> Reset
                </button>  -->   
              </div>
            </div>

          </div>


<!-- ========== CARD 3: Tabel saja ========== -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table1 table-bordered table-striped table-sm datatables1">
                 <thead class="text-uppercase">
                  <tr>
                    <th width="5px">No.</th>
                    <th>Kode </th>
                    <th>Model</th>
                    <th>Deskripsi</th>
                    <th style="text-align: center;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td align="center">1</td>
                    <td>REG</td>                    
                    <td>Kelas Reguler Kohor</td>
                    <td>
                     Satu kelas, banyak mahasiswa, mengikuti satu jadwal, satu silabus, satu penilaian kolektif.
                     <p>Karakter:

Bisa 1 dosen atau team teaching

Mahasiswa dalam satu rombongan belajar

Penilaian berbasis kelas

Ini mencakup:

Single lecturer

Team teaching

Jadi tidak perlu memisahkan berdasarkan jumlah dosen.</p> 
                    </td>
                    <td align="center">
                      <!-- <button type="button" class="btn btn-sm btn-outline-warning">🔑 </button> -->
                      <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                      <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">2</td>
                    <td>IP</td>
                    <td>Kelas Lintas Kohort </td>
                    <td>
                      Satu kelas yang diikuti mahasiswa dari berbagai angkatan/jalur/kelas administratif.
                      <p>Karakter:

Campuran reguler, transfer, RPL, dll

Satu proses pembelajaran

Satu skema penilaian

Ini yang tadi Anda sebut “kelas terbuka”.

Bedanya dengan Regular:

Regular → biasanya satu cohort/angkatan

Cross-cohort → lintas angkatan/jalur</p> 
                    </td>
                    <td align="center">
                      <!-- <button type="button" class="btn btn-sm btn-outline-warning">🔑 </button> -->
                      <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                      <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">3</td>
                    <td>KRW</td>
                    <td>Kelas Supervisi Individual</td>
                    <td>
                      Satu mahasiswa, satu instance kelas, dengan satu atau lebih dosen pembimbing.
                      <p>Ini untuk:

Skripsi

Tesis

Disertasi

Proyek individual.
Karakter:

Tidak berbasis jadwal kolektif

Penilaian individual

Biasanya multi-role dosen (pembimbing/penguji)

Ini bukan “kelas kecil”.
Ini adalah model pedagogik berbeda.</p>
                    </td>
                    <td align="center">
                      <!-- <button type="button" class="btn btn-sm btn-outline-warning">🔑 </button> -->
                      <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                      <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">3</td>
                    <td>KRW</td>
                    <td>Kelas Praktikum Terstruktur</td>
                    <td>
                      Pembelajaran berbasis praktik, studio, lab, atau workshop yang evaluasinya berbasis performa langsung.
                      <p>Karakter:

Biasanya banyak sesi

Rasio dosen–mahasiswa lebih kecil

Penilaian berbasis demonstrasi

Ini masih kolektif, tapi sifat evaluasinya berbeda dari kuliah teori.</p>
                    </td>
                    <td align="center">
                      <!-- <button type="button" class="btn btn-sm btn-outline-warning">🔑 </button> -->
                      <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                      <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                    </td>
                  </tr>
                  <!-- Tambahkan baris lainnya sesuai kebutuhan -->
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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
            <select name="lembaga" id="lembaga" class="custom-select">
              <option value="">-- Pilih --</option>
              <option value="IABEE" >pilihan 1</option>
              <option value="LAM TEKNIK" >pilihan 2</option>
              <option value="BATAP" >pilihan 3</option>
              <option value="EDUSQUAD">pilihan 4</option>
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>
          Jalur adalah variasi penyelenggaraan dari prodi yang sama. Jalur tidak mengubah bidang keahlian, hanya mengubah cara kuliah diatur. Bisa menjadi dasar pengaturan di Jadwal Perkuliahan
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php include('5script.php'); ?>