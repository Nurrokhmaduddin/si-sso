<?php $page = 'pemetaan_cpmk'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Capaian Pembelajaran Mata Kuliah
      <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
                <i class="fas fa-question-circle"></i>
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
                  <b>Kurikulum:</b> Merdeka Belajar &nbsp;
                </div>                
                <!-- <div class="col-md-6">
                  <b>Set Pemetaan:</b> Peta B
                </div> -->
                <!-- <div class="col-md-6">
                  <b>Mata Kuliah:</b> Semua &nbsp;
                </div> -->
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
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                 <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button> -->
                
              </div>
            </div>
          </div>

<!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='pemetaan-matakuliah2.php'"><a class="nav-link ">Mata Kuliah</a></li>
    <li class="nav-item" onclick="window.location='pemetaan-cpmk2.php'"><a class="nav-link active">CPMK</a></li>
  </ul>

          <!-- ========== CARD : Tabel granular ========== -->
          <div class="card">
           <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-sm datatables1">
                <thead>
                  <tr class="text-uppercase text-center">
                    <th width="5%">No</th>
                    <th>kurikulum </th>
                    <th>Kode CPMK</th>
                    <th>Deskripsi CPMK</th>
                    <th width="12%">Aksi</th>
                  </tr>
                </thead>
                <tbody>

    <tr>
      <td class="text-center">1</td>
      <td class="text-center">SP01-01</td>
      <td class="text-center">STS704-1</td>
      <td>Mampu menjelaskan konsep dasar metode pelaksanaan bangunan.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">2</td>
      <td class="text-center">SP01-01</td>
      <td class="text-center">STS704-2</td>
      <td>Mampu menyusun tahapan pekerjaan konstruksi secara sistematis.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">3</td>
      <td class="text-center">SP01-02</td>
      <td class="text-center">STS913-1</td>
      <td>Mampu memahami perilaku struktur komposit.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">4</td>
      <td class="text-center">SP01-02</td>
      <td class="text-center">STS913-2</td>
      <td>Mampu menghitung kapasitas elemen struktur komposit.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">5</td>
      <td class="text-center">SP01-03</td>
      <td class="text-center">51175111-1</td>
      <td>Mampu merancang elemen struktur bangunan sederhana.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">6</td>
      <td class="text-center">SP01-03</td>
      <td class="text-center">51175111-2</td>
      <td>Mampu menganalisis beban dan kombinasi beban struktur.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">7</td>
      <td class="text-center">SP01-04</td>
      <td class="text-center">STS101-1</td>
      <td>Mampu menerapkan konsep statistik dalam rekayasa.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">8</td>
      <td class="text-center">SP01-04</td>
      <td class="text-center">STS101-2</td>
      <td>Mampu mengolah data eksperimen teknik secara statistik.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">9</td>
      <td class="text-center">SP01-05</td>
      <td class="text-center">STS307-1</td>
      <td>Mampu memahami karakteristik bahan perkerasan jalan.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">10</td>
      <td class="text-center">SP01-05</td>
      <td class="text-center">STS307-2</td>
      <td>Mampu merancang tebal perkerasan jalan.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">11</td>
      <td class="text-center">SP01-06</td>
      <td class="text-center">STS702-1</td>
      <td>Mampu menganalisis struktur baja.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">12</td>
      <td class="text-center">SP01-06</td>
      <td class="text-center">STS702-2</td>
      <td>Mampu merancang sambungan baja.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">13</td>
      <td class="text-center">SP01-07</td>
      <td class="text-center">51195142-1</td>
      <td>Mampu merancang struktur jembatan sederhana.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">14</td>
      <td class="text-center">SP01-07</td>
      <td class="text-center">51195142-2</td>
      <td>Mampu menganalisis beban dinamis pada jembatan.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">15</td>
      <td class="text-center">SP01-08</td>
      <td class="text-center">51155081-1</td>
      <td>Mampu memahami prinsip rekayasa gempa.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">16</td>
      <td class="text-center">SP01-08</td>
      <td class="text-center">51155081-2</td>
      <td>Mampu merancang struktur tahan gempa.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">17</td>
      <td class="text-center">SP01-09</td>
      <td class="text-center">STS904-1</td>
      <td>Mampu menggunakan BIM untuk manajemen konstruksi.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">18</td>
      <td class="text-center">SP01-09</td>
      <td class="text-center">STS904-2</td>
      <td>Mampu mengintegrasikan model BIM dalam perencanaan proyek.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">19</td>
      <td class="text-center">SP01-10</td>
      <td class="text-center">51153061-1</td>
      <td>Mampu merancang bangunan air sederhana.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">20</td>
      <td class="text-center">SP01-10</td>
      <td class="text-center">51153061-2</td>
      <td>Mampu menganalisis stabilitas struktur hidrolik.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">21</td>
      <td class="text-center">SP01-11</td>
      <td class="text-center">STS704-3</td>
      <td>Mampu mengevaluasi metode pelaksanaan proyek konstruksi.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">22</td>
      <td class="text-center">SP01-12</td>
      <td class="text-center">STS702-3</td>
      <td>Mampu mendesain elemen struktur baja lanjutan.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>

    <tr>
      <td class="text-center">23</td>
      <td class="text-center">SP01-13</td>
      <td class="text-center">STS913-3</td>
      <td>Mampu mengevaluasi kinerja struktur komposit.</td>
      <td class="text-center">
        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
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


<!-- ================= MODAL TAMBAH DESKRIPSI CPMK ================= -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahDataLabel">
          ➕ Tambah Deskripsi CPMK
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Form -->
      <form id="formTambahCPMK">
        <div class="modal-body">

          <!-- Informasi -->
          <div class="alert alert-warning mb-4" style="font-size: 0.9rem;">
            <b>Perhatian:</b> Pastikan kurikulum, set pemetaan, dan mata kuliah sudah sesuai sebelum menambahkan deskripsi CPMK.
            Kolom bertanda <span class="text-danger">*</span> wajib diisi.
          </div>

          <!-- Pilih Kurikulum -->
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">
              Kurikulum <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <select class="form-select" name="kurikulum" required>
                <option value="" selected disabled>-- Pilih Kurikulum --</option>
                <option value="2020">Kurikulum 2020</option>
                <option value="2022">Kurikulum 2022</option>
                <option value="2024">Kurikulum 2024</option>
              </select>
            </div>
          </div>

          <!-- Pilih Set Pemetaan -->
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">
              Set Pemetaan <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <select class="form-select" name="set_pemetaan" required>
                <option value="" selected disabled>-- Pilih Set Pemetaan --</option>
                <option value="SET-SP01-01">SET-SP01-01</option>
                <option value="SET-SP01-02">SET-SP01-02</option>
                <option value="SET-SP01-03">SET-SP01-03</option>
              </select>
            </div>
          </div>

          <!-- Pilih Mata Kuliah -->
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">
              Mata Kuliah <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <select class="form-select" name="mata_kuliah" required>
                <option value="" selected disabled>-- Pilih Mata Kuliah --</option>
                <option value="STS704">STS704 - Metode Pelaksanaan Bangunan</option>
                <option value="STS913">STS913 - Struktur Komposit</option>
                <option value="STS702">STS702 - Struktur Baja</option>
              </select>
            </div>
          </div>

          <!-- Pilih CPMK ke- -->
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">
              CPMK ke- <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <select class="form-select" name="cpmk_ke" required>
                <option value="" selected disabled>-- Pilih CPMK ke- --</option>
                <option value="1">CPMK 1</option>
                <option value="2">CPMK 2</option>
                <option value="3">CPMK 3</option>
                <option value="4">CPMK 4</option>
              </select>
            </div>
          </div>

          <!-- Deskripsi CPMK -->
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">
              Deskripsi CPMK <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <textarea class="form-control" name="deskripsi_cpmk" rows="4" placeholder="Masukkan deskripsi CPMK..." required></textarea>
              <small class="text-muted">
                Gunakan kalimat operasional yang terukur (menggunakan kata kerja taksonomi Bloom).
              </small>
            </div>
          </div>

        </div>

        <!-- Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Batal
          </button>
          <button type="submit" class="btn btn-primary">
            💾 Simpan Deskripsi
          </button>
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
          data yang tampil secara default, merupakan daftar mata kuliah di kurikulum yg <i>show</i> dari set pemetaan. Dibuat default, jumlah CPMK 10, namun yg aktif adalah yang di definisikan di kolom 'Jumlah CPMK'
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>