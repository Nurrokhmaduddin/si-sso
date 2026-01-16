<?php $page = 'master_mahasiswa'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Rekap Skripsi</h3>
        <p class="text-muted mb-0">Ringkasan rekapitulasi kelas per semester, performa dosen, dan kelengkapan eviden per mata kuliah. (Mockup data statis)</p>
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
            <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-filter "></i> Judul Tabel yang terdampak tombol aksi ini<button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
                <i class="fas fa-question-circle"></i>
              </button> </h5>
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
                 <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>
                <a href="https://tsipil-loa.tmidev.my.id/loa/portofolio_cpmk/ekspor_hasil_assessmen_data/ZFVwUVMwRnZNd1ZVRUVneFZ6bEZNZ3dGMDAwMDk" type="button" class="btn btn-sm btn-success"><i class="fas fa-file-excel"></i> Ekspor Hasil Assessmen</a>
                <a href="https://tsipil-loa.tmidev.my.id/loa/portofolio_cpmk/ekspor_data_hasil_evaluasi/UWpoalVHVkJSekJWQkNPTGpNVWM1ZWpNZDNjMG1wdzAwMDEy" target="_blank" type="button" class="btn btn-sm btn-success"><i class="fas fa-file-excel"></i> Ekspor Hasil Evaluasi</a>

              </div>
            </div>


            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Kurikulum:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Set Pemetaan A:</b> v1.0
                </div>
                <div class="col-md-6">
                  <b>Set Pemetaan B:</b> v2.0
                </div>
                
              </div>
            </div>
          </div>

 <!-- ========== KPI Row (Ringkasan Jumlah Total) ========== -->

  <div class="row mb-3">

    <!-- Total Mahasiswa -->
    <div class="col-md-3 col-sm-6">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>120</h3>
          <p>Total Mahasiswa Aktif</p>
        </div>
        <div class="icon">
          <i class="fas fa-users"></i>
        </div>
      </div>
    </div>

    

    <!-- Jumlah Mahasiswa Aktif -->
    <div class="col-md-3 col-sm-6">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>15</h3>
          <p>Beban Bimbingan per Dosen (avg)</p>
        </div>
        <div class="icon">
          <i class="fas fa-user-check"></i>
        </div>
      </div>
    </div>

    <!-- Jumlah Mahasiswa Cuti -->
    <div class="col-md-3 col-sm-6">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>120 hari</h3>
          <p>Durasi Penyelesaian (avg)</p>
        </div>
        <div class="icon">
          <i class="fas fa-pause-circle"></i>
        </div>
      </div>
    </div>

<!-- Mahasiswa Aktif Tertua -->
    <div class="col-md-3 col-sm-6">
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>5 Macet</h3>
          <p>Mahasiswa Belum Perpanjangan</p>
        </div>
        <div class="icon">
          <i class="fas fa-user-clock"></i>
        </div>
      </div>
    </div>

  </div>


<!-- ========== CARD 4: Stacked Bar Chart — Proporsi ========== -->
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0">
      <i class="fas fa-chart-bar me-2"></i>
      Stacked Bar Chart — Proporsi (%)
    </h5>
    <div class="card-tools">
      <small class="text-muted">Semester Terpilih</small>
    </div>
  </div>

  <div class="card-body chart-container d-flex flex-column">
    <!-- Bagian Chart -->
    <div class="chart-container"> <canvas id="chartProgressStage" ></canvas> </div> 
    <script> 
    $(document).ready(function() { 
    // DataTable 
    $('.datatables1').DataTable({ "pageLength": 10, "lengthChange": true, "autoWidth": false, "order": [[ 9, "desc" ]] 
    // urut berdasarkan Last Activity 
}); 
    // ChartJS Progress Stage 
    const ctx = document.getElementById('chartProgressStage').getContext('2d'); const chartProgressStage = new Chart(ctx, { type: 'bar', data: { labels: ['Stage 1', 'Stage 2', 'Stage 3', 'Stage 4'], datasets: [ { label: 'Periode 2024', data: [20,25,30,15], backgroundColor: '#0d6efd' }, { label: 'Periode 2025', data: [15,20,25,10], backgroundColor: '#ffc107' } ] }, options: { responsive: true, plugins: { legend: { position: 'top' }, tooltip: { mode: 'index', intersect: false } }, scales: { x: { stacked: true }, y: { stacked: true, beginAtZero: true } } } }); }); 
</script>




    <!-- Bagian Tombol -->
    <div class="row text-center mt-3">
      <div class="col">
        <button
          class="btn btn-outline-info btn-sm w-100"
          data-bs-toggle="collapse"
          data-bs-target="#daftarIKCPL41">
          Rangking Performa
        </button>
      </div>

      <div class="col">
        <button
          class="btn btn-outline-info btn-sm w-100"
          data-bs-toggle="collapse"
          data-bs-target="#daftarIKCPL43">
          Overview Kelas
        </button>
      </div>

      <div class="col">
        <button
          class="btn btn-outline-danger btn-sm w-100"
          onclick="openAllRisikoPreview()">
          Performa Risiko
        </button>
      </div>
    </div>
  </div>
</div>

<!-- ========== TABEL GRANULAR ========== -->
<div class="card">
  <div class="card-header">
    <strong>Tabel Granular</strong>
    <!-- Tombol Filter -->
    <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-sm table-bordered table-striped datatables1">
        <thead class="table-dark text-center">
          <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Aktivitas</th>
            <th>Stage Saat Ini</th>
            <th>Status</th>
            <th>Durasi</th>
            <th>Perpanjangan</th>
            <th>Dokumen Lengkap</th>
            <th>Last Activity</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1</td>
            <td>19312418</td>
            <td>Claudia Monica Aditama</td>
            <td>Skripsi</td>
            <td>Stage 2</td>
            <td>Aktif</td>
            <td>3 bln</td>
            <td>0</td>
            <td>Ya</td>
            <td>2025-12-01</td>
          </tr>

          <tr>
            <td>2</td>
            <td>19312479</td>
            <td>Asep Sunandar</td>
            <td>Magang</td>
            <td>Stage 3</td>
            <td>Macet</td>
            <td>6 bln</td>
            <td>1</td>
            <td>Tidak</td>
            <td>2025-11-28</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div><!-- /.container-fluid -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->



       


       
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

      		<!-- 1. Periode Semester -->
      		<div class="mb-3">
      			<label class="form-label">Periode Semester</label>
      			<select id="filterPeriode" class="form-select">
      				<option value="2024-1">2024-1 (Ganjil)</option>
      				<option value="2024-2">2024-2 (Genap)</option>
      			</select>
      		</div>

      		<!-- 2. Aktivitas -->
      		<div class="mb-3">
      			<label class="form-label">Jenis Aktivitas</label>
      			<select id="filterAktivitas" class="form-select">
      				<option value="ta-standar">Standar Tugas Akhir</option>
      				<option value="skripsi">Skripsi</option>
      				<option value="magang">Magang</option>
      				<option value="rbb">RBB (Riset Berbasis Bimbingan)</option>
      				<option value="kapita">Kapita Selekta</option>
      			</select>
      		</div>

      		<!-- 3. Stage -->
      		<div class="mb-3">
      			<label class="form-label">Tahap / Stage</label>
      			<select id="filterStage" class="form-select">
      				<option value="pendaftaran">Pendaftaran</option>
      				<option value="pembimbingan">Pembimbingan</option>
      				<option value="pengujian">Pengujian</option>
      			</select>
      		</div>

      		<!-- 4. Status -->
      		<div class="mb-3">
      			<label class="form-label">Status</label>
      			<select id="filterStatus" class="form-select">
      				<option value="aktif">Aktif</option>
      				<option value="macet">Macet</option>
      				<option value="dihentikan">Dihentikan Dosen</option>
      				<option value="selesai">Selesai</option>
      				<option value="semua">Semua Status</option>
      			</select>
      		</div>

      		<!-- 5. Perpanjangan -->
      		<div class="mb-3">
      			<label class="form-label">Jumlah Perpanjangan</label>
      			<input type="number" min="0" id="filterPerpanjangan" class="form-control" placeholder="Contoh: 1">
      		</div>

      		<div class="alert alert-info small mb-0">
      			Filter pada contoh ini bekerja secara dummy. Pada implementasi nyata, filter akan melakukan request ke server (API).
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
          Halaman ini menampilkan rekapitulasi satu set pemetaan OBE yang telah dirancang, menyoroti kelengkapan pemetaan (mapping completeness) untuk memeriksa apakah CPL, IK, CPMK, dan MK telah terhubung secara lengkap, sekaligus keserataan beban pemetaan (mapping balance) untuk menilai distribusi dukungan dan mengidentifikasi gap antara elemen terkuat dan terlemah di tiap level.
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>



