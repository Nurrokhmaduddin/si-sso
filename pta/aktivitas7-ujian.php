<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penilaian Ujian Skripsi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-4">

  <!-- Card 1: Informasi Umum Mahasiswa -->
  <div class="card mb-4">
    <div class="card-header bg-primary text-white">
      <h5 class="card-title mb-0"><i class="fas fa-user-graduate me-2"></i>Informasi Umum Mahasiswa</h5>
    </div>
    <div class="card-body">
      <p><strong>Nama Mahasiswa:</strong> Ahmad Fauzan</p>
      <p><strong>NIM:</strong> 19312418</p>
      <p><strong>Judul Skripsi:</strong> Sistem Informasi Pembimbingan Tugas Akhir</p>
      <p><strong>Dosen Pembimbing:</strong> Dr. Filza Aliyah Tasya, S.T., M.T.</p>
      <p><strong>Penguji:</strong> Dr. Rina Melati, S.T., M.T.</p>
      <p><strong>Jadwal Ujian:</strong> 2025-12-20, 10:00 WIB</p>
      <p><strong>Tempat:</strong> Ruang Sidang 3, Gedung A</p>
    </div>
  </div>
<div class="row">
  
  <!-- Kolom Kiri: Informasi Umum Mahasiswa -->
  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-header bg-secondary text-white">
        <h5 class="card-title mb-0">
          <i class="fas fa-user-graduate me-2"></i>Informasi Umum
        </h5>
      </div>
      <div class="card-body">
        <p><strong>Judul:</strong> Sistem Informasi Pembimbingan Tugas Akhir</p>
        <p><strong>Mahasiswa:</strong> 19312418 | Ahmad Fauzan</p>
        <p><strong>Jadwal Ujian:</strong> Rabu, 2025-12-20, 10:00 WIB</p>
        <p><strong>Tempat Ujian:</strong> Ruang Sidang 3, Gedung A</p>
        <hr>
        <p><strong>Pembimbing Utama:</strong> Dr. Filza Aliyah Tasya, S.T., M.T.</p>
        <p><strong>Penguji:</strong> Dr. Rina Melati, S.T., M.T.</p>
      </div>
    </div>
  </div>

  <!-- Kolom Kanan: File Dokumen Ujian -->
  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-header bg-secondary text-white">
        <h5 class="card-title mb-0">
          <i class="fas fa-folder-open me-2"></i>File Dokumen Ujian
        </h5>
      </div>
      <div class="card-body">
        <table class="table table-sm table-bordered table-striped mb-0">
          <thead>
            <tr>
              <th width="5%">No</th>
              <th>Nama File</th>
              <th width="30%">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Rubrik Penilaian.pdf</td>
              <td>
                <button class="btn btn-sm btn-outline-info">
                  <i class="fas fa-eye me-1"></i>Preview
                </button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Syarat Pengujian.pdf</td>
              <td>
                <button class="btn btn-sm btn-outline-success">
                  <i class="fas fa-download me-1"></i>Download
                </button>
                <button class="btn btn-sm btn-outline-info">
                  <i class="fas fa-eye me-1"></i>Preview
                </button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Presentasi Skripsi.pptx</td>
              <td>
                <button class="btn btn-sm btn-outline-success">
                  <i class="fas fa-download me-1"></i>Download
                </button>
                <button class="btn btn-sm btn-outline-info">
                  <i class="fas fa-eye me-1"></i>Preview
                </button>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Manuskrip Skripsi.docx</td>
              <td>
                <button class="btn btn-sm btn-outline-success">
                  <i class="fas fa-download me-1"></i>Download
                </button>
                <button class="btn btn-sm btn-outline-info">
                  <i class="fas fa-eye me-1"></i>Preview
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

  <!-- Card 2: Informasi Aksi Penilaian -->
  <div class="card mb-4">
    <div class="card-header bg-success text-white">
      <h5 class="card-title mb-0"><i class="fas fa-clipboard-check me-2"></i>Rubrik Penilaian</h5>
    </div>
    <div class="card-body">
      <table class="table table-sm table-bordered table-striped">
        <thead class="table-dark text-center">
          <tr>
            <th>No</th>
            <th>Kriteria Penilaian</th>
            <th>Nilai</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Kualitas Penulisan</td>
            <td><input type="number" class="form-control form-control-sm" max="100" min="0"></td>
            <td>
              <input type="text" class="form-control form-control-sm mb-1" placeholder="Komentar">
              <button class="btn btn-sm btn-info"><i class="fas fa-comment"></i> Tambah Komentar</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Kelengkapan Materi</td>
            <td><input type="number" class="form-control form-control-sm" max="100" min="0"></td>
            <td>
              <input type="text" class="form-control form-control-sm mb-1" placeholder="Komentar">
              <button class="btn btn-sm btn-info"><i class="fas fa-comment"></i> Tambah Komentar</button>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Penyampaian Presentasi</td>
            <td><input type="number" class="form-control form-control-sm" max="100" min="0"></td>
            <td>
              <input type="text" class="form-control form-control-sm mb-1" placeholder="Komentar">
              <button class="btn btn-sm btn-info"><i class="fas fa-comment"></i> Tambah Komentar</button>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>Penguasaan Materi</td>
            <td><input type="number" class="form-control form-control-sm" max="100" min="0"></td>
            <td>
              <input type="text" class="form-control form-control-sm mb-1" placeholder="Komentar">
              <button class="btn btn-sm btn-info"><i class="fas fa-comment"></i> Tambah Komentar</button>
            </td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-success"><i class="fas fa-paper-plane me-1"></i> Submit Penilaian</button>
    </div>
  </div>

  <!-- Card 3: Informasi Hasil Kesimpulan Penilaian -->
  <div class="card mb-4">
    <div class="card-header bg-warning text-dark">
      <h5 class="card-title mb-0"><i class="fas fa-check-circle me-2"></i>Hasil Kesimpulan Penilaian</h5>
    </div>
    <div class="card-body">
      <p><strong>Rata-rata Nilai:</strong> 88</p>
      <p><strong>Index Kinerja:</strong> A-</p>
      <p><strong>Status:</strong> Lulus</p>
      <p><strong>Catatan:</strong> Mahasiswa sudah menguasai materi dan mampu mempertahankan skripsi dengan baik.</p>
    </div>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html>
