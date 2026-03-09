<?php $page = 'aktivitas_pelayanan'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
<style>
  .progress-steps{
position:relative;
padding-left:30px;
}

.step{
position:relative;
padding-bottom:25px;
border-left:2px solid #e5e5e5;
padding-left:20px;
}

.step:last-child{
border-left:none;
}

.step-icon{
width:14px;
height:14px;
border-radius:50%;
background:#ccc;
position:absolute;
left:-8px;
top:4px;
}

</style>
  <style>
    .step-card{
display:block;
padding:16px;
border-radius:10px;
border:1px solid #e5e5e5;
background:#fff;
text-decoration:none;
color:#333;
transition:all .25s ease;
height:100%;
}

/* TITLE */

.step-title{
font-weight:600;
font-size:15px;
margin-bottom:10px;
display:flex;
justify-content:space-between;
align-items:center;
gap:6px;
}

.step-role{
margin-bottom:10px;
}

.step-date{
font-size:13px;
color:#555;
}

/* STATUS COLOR */

.step-card.success{
background:#eaf7ee;
border-color:#b7e1c2;
}

/*.step-card.ongoing{
background:#fff6da;
border-color:#ffe49c;
}*/
.step-card.ongoing{
background:#e7f1ff;
border-color:#9ec5fe;
}
.step-card.pending{
background:#f3f3f3;
border-color:#ddd;
color:#777;
cursor:default;
}

/* HOVER EFFECT */

.step-card.success:hover,
.step-card.ongoing:hover{
transform:translateY(-6px);
box-shadow:0 8px 18px rgba(0,0,0,0.12);
}

/* pending tidak hover */

.step-card.pending:hover{
transform:none;
box-shadow:none;
}

  </style>
  <style>
    .progress-steps{
display:flex;
flex-direction:column;
gap:14px;
}

/* STEP CARD */

.step{
display:flex;
gap:15px;
padding:16px;
border-radius:10px;
border:1px solid #e5e5e5;
transition:all .25s ease;
background:#fff;
}

/* ICON BULLET */

.step-icon{
width:16px;
height:16px;
border-radius:50%;
margin-top:6px;
flex-shrink:0;
}

/* CONTENT */

.step-content{
flex:1;
}

/* STATUS COLOR */

.step.completed{
background:#eaf7ee;
border-color:#b7e1c2;
}

.step.completed .step-icon{
background:#28a745;
}

/*.step.ongoing{
background:#fff6da;
border-color:#ffe49c;
}*/

/*.step.ongoing .step-icon{
background:#9ec5fe;
}*/

.step.ongoing{
background:#e7f1ff;
border-color:#9ec5fe;
}
.step.ongoing .step-icon{
background:#0d6efd;
}

.step.pending{
background:#f3f3f3;
border-color:#ddd;
color:#777;
}

.step.pending .step-icon{
background:#bdbdbd;
}

/* CLICKABLE */

.step.clickable{
cursor:pointer;
}

/* HOVER EFFECT */

.step.clickable:hover{
transform:translateY(-4px);
box-shadow:0 8px 18px rgba(0,0,0,0.12);
}

/* pending tidak hover */

.step.pending:hover{
transform:none;
box-shadow:none;
cursor:default;
}
  </style>
<div class="content-wrapper" style="min-height: 626.4px;">    
  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Kemajuan Pelayanan
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

        <!-- ========== CARD : col 4 ========== -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
<!-- STEP -->
<a href="aktivitas-pelayanan-tahap1.html" class="step completed clickable text-decoration-none text-dark">
  <div class="step-icon"></div>
  <div class="step-content">
    <div class="d-flex justify-content-between">
      <h6 class="mb-1">Penerbitan Tagihan</h6>
      <span class="badge bg-success">FINISHED</span>
    </div>
    <div class="mb-2">
      <span class="badge bg-success">Admin</span>
    </div>
    <div class="text-muted small">
      Mulai : <strong>15 Jul 2024</strong> |
      Selesai : <strong>15 Jul 2024</strong>
    </div>
  </div>
</a>
<!-- STEP -->
<a href="aktivitas-pelayanan-tahap2.html" class="step completed clickable text-decoration-none text-dark">
  <div class="step-icon"></div>
  <div class="step-content">
    <div class="d-flex justify-content-between">
      <h6 class="mb-1">Penerbitan Instruksi Kerja</h6>
      <span class="badge bg-success">FINISHED</span>
    </div>
    <div class="mb-2">
      <span class="badge bg-success">Kalab</span>
      <span class="badge bg-success">Admin</span>
    </div>
    <div class="text-muted small">
      Mulai : <strong>15 Jul 2024</strong> |
      Selesai : <strong>15 Jul 2024</strong>
    </div>
  </div>
</a>
<!-- STEP -->
<div class="step completed clickable" onclick="window.location='aktivitas-pelayanan-tahap3.html'">
  <div class="step-icon"></div>
  <div class="step-content">
    <div class="d-flex justify-content-between">
      <h6 class="mb-1">Pengujian Sampel</h6>
      <span class="badge bg-success">FINISHED</span>
    </div>
    <div class="mb-2">
      <span class="badge bg-success">Laboran</span>
    </div>
    <div class="text-muted small">
      Mulai : <strong>15 Jul 2024</strong> |
      Selesai : <strong>15 Jul 2024</strong>
    </div>
  </div>
</div>
<!-- STEP -->
<div class="step completed clickable" onclick="window.location='aktivitas-pelayanan-tahap4.html'">
  <div class="step-icon"></div>
  <div class="step-content">
    <div class="d-flex justify-content-between">
      <h6 class="mb-1">Pelaporan Hasil Uji</h6>
      <span class="badge bg-success">FINISHED</span>
    </div>
    <div class="mb-2">
      <span class="badge bg-success">Laboran</span>
      <span class="badge bg-success">M.Teknis</span>
      <span class="badge bg-success">Kalab</span>
    </div>
    <div class="text-muted small">
      Mulai : <strong>15 Jul 2024</strong> |
      Selesai : <strong>15 Jul 2024</strong>
    </div>
  </div>
</div>
<!-- STEP -->
<div class="step completed clickable" onclick="window.location='aktivitas-pelayanan-tahap5.html'">
  <div class="step-icon"></div>
  <div class="step-content">
    <div class="d-flex justify-content-between">
      <h6 class="mb-1">Penerbitan Sertifikat</h6>
      <span class="badge bg-success">FINISHED</span>
    </div>
    <div class="mb-2">
      <span class="badge bg-success">Kalab</span>
      <span class="badge bg-success">Admin</span>
    </div>
    <div class="text-muted small">
      Mulai : <strong>15 Jul 2024</strong> |
      Selesai : <strong>15 Jul 2024</strong>
    </div>
  </div>
</div>
<!-- STEP -->
<div class="step ongoing clickable" onclick="window.location='aktivitas-pelayanan-tahap6.html'">
  <div class="step-icon"></div>
  <div class="step-content">
    <div class="d-flex justify-content-between">
      <h6 class="mb-1">Pelunasan Tagihan & Unduh Sertifikat</h6>
      <span class="badge bg-primary text-dark">ON-GOING</span>
    </div>
    <div class="mb-2">
      <span class="badge bg-primary">Customer</span>
    </div>
    <div class="text-muted small">
      Mulai : <strong>15 Jul 2024</strong> |
      Selesai : -
    </div>
  </div>
</div>
<!-- STEP -->
<div class="step pending" onclick="window.location='aktivitas-pelayanan-tahap7.html'">
  <div class="step-icon"></div>
  <div class="step-content">
    <div class="d-flex justify-content-between">
      <h6 class="mb-1">Survei Kepuasan Pelanggan</h6>
      <span class="badge bg-secondary text-dark">QUEUE</span>
    </div>
    <div class="mb-2">
      <span class="badge bg-secondary">Customer</span>
    </div>
    <div class="text-muted small">
      Mulai : - |
      Selesai : -
    </div>
  </div>
</div>


</div>
</div>

</div>
         <!-- ========== CARD : col 8 ========== -->
      <div class="col-md-8">
        <div class="card card-outline card-info">
          <div class="card-header with-border">
            <h3 class="card-title">Ringkasan Kesepakatan Order No. 00370724</h3>
          </div>
          <div class="card-body">
            <table class="table table-sm table-hover table-bordered table-striped deta">
              <tbody>
                <tr>
                  <th width="30%">No Order:</th>
                  <td>00370724</td>
                </tr>
                <tr>
                  <th>Tanggal Kesepakatan:</th>
                  <td>15-Jul-2024</td>
                </tr>
                <tr>
                  <th>Perkiraan Selesai:</th>
                  <td>05-Aug-2024</td>
                </tr>

                <tr>
                  <th>Pemberi Order:</th>
                  <td>Zhafran Evando</td>
                </tr>
                <tr>
                  <th>Status:</th>
                  <td>Umum</td>
                </tr>
                <tr>
                  <th>Instansi:</th>
                  <td>PT Tanjung Mulia Informatika</td>
                </tr>
                <tr>
                  <th>Nomor HP:</th>
                  <td>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=628895339646">
                      08895339646
                    </a>
                  </td>
                </tr>
                <tr>
                  <th>E-mail:</th>
                  <td>zhafranevando02@gmail.com</td>
                </tr>

                <tr>
                  <th>Nama Pekerjaan/Proyek</th>
                  <td>Mengelola Pembangunan Jalan Gerilya Tanjung di Purwokerto Provinsi Jawa Tengah</td>
                </tr>
                <tr>
                  <th>Owner Pekerjaan/Proyek</th>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="card card-outline card-info">
          <div class="card-header with-border">
            <h3 class="card-title">Personel Petugas Laboratorium</h3>
          </div>
          <div class="card-body">
            <table class="table table-sm table-borderless">
              <tbody><tr>
                <th width="30%">Unit Laboratorium:</th>
                <td>Lab. Jalan Raya</td>
              </tr>
              <tr>
                <th>Manajer Teknis:</th>
                <td>
                  <a href="https://simlabts.tsipil-uii.ac.id/administrasi-layanan/pelayanan/pengujian/9ffd8173-630c-4776-978f-dacec49143e5#" id="manajer" data-type="select" data-name="mgr_id" data-pk="6335" data-source="https://simlabts.tsipil-uii.ac.id/pengguna/pejabat-select/9ffd8173-630c-4776-978f-dacec49143e5/role/5" data-url="https://simlabts.tsipil-uii.ac.id/administrasi-layanan/pelayanan/pengujian/9ffd8173-630c-4776-978f-dacec49143e5/personel" data-original-title="Pilih Manajer Teknis" class="editable editable-click" style="display: inline;">
                    Ir. Berlian Kushari, S.T., M.Eng., IPM, ASEAN Eng.
                  </a>
                </td>
              </tr>
              <tr>
                <th>Kalab:</th>
                <td>
                  <a href="#" >
                    Muhamad Abdul Hadi, S.T., M.T.
                  </a>
                </td>
              </tr>
              <tr>
                <th>Laboran:</th>
                <td>
                  Sukamto H. M., S.T.;Giri Widhiatmoko, S.T.
                </td>
              </tr>
            </tbody></table>
          </div>
        </div>

        <div class="clearfix"></div>


        <div class="form-action pull-right">
          <a class="btn btn-outline-danger btn-block" href="#" data-toggle="modal" data-href="https://simlabts.tsipil-uii.ac.id/administrasi-layanan/pelayanan/pengujian/9ffd8173-630c-4776-978f-dacec49143e5/hentikan-pelayanan">
            <i class="fa fa-times"></i> Hentikan Pelayanan
          </a>
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