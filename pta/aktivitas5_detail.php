<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Riwayat Bimbingan Akademik - Gamification + Helper</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body { background: #f2f4f7; font-family: "Segoe UI", sans-serif; }
    .status-card, .berkas-card, .riwayat-card { 
      background: #fff; padding: 20px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); margin-bottom: 20px; 
    }
    .role-badge { font-size: 0.85rem; font-weight: 500; padding: 0.35em 0.6em; border-radius: 5px; color: #fff; }
    .role-mhs { background-color: #0d6efd; }
    .role-pembimbing { background-color: #198754; }
    .role-penguji { background-color: #6f42c1; }
    .badge-new { background-color: #ffc107; color: #212529; font-weight: 500; }
    .table th, .table td { vertical-align: middle; }
    .form-role-btn { margin-right: 8px; margin-bottom: 5px; }
  </style>
</head>
<body>
<div class="container py-4">

  <!-- BAGIAN 1: IDENTITAS & STATUS -->
  <div class="status-card mb-4">
    <h4>Informasi Mahasiswa</h4>
    <div class="row">
      <div class="col-md-6">
        <p><strong>Nama:</strong> Andi Pratama</p>
        <p><strong>NIM:</strong> 202012345</p>
        <p><strong>Program Studi:</strong> Teknik Informatika</p>
      </div>
      <div class="col-md-6">
        <p><strong>Pembimbing 1:</strong> Dr. Ahmad</p>
        <p><strong>Pembimbing 2:</strong> Dr. Budi</p>
        <p><strong>Penguji:</strong> Dr. Sari</p>
      </div>
      <div class="col-12 mt-2 d-flex align-items-center">
        <p class="me-2 mb-0"><strong>Status Skripsi Terkini:</strong> 
          <span class="badge bg-warning text-dark">Menunggu Verifikasi</span>
        </p>
        <!-- Tombol Helper -->
        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalHelper">
          <i class="fas fa-question-circle"></i>
        </button>
      </div>
    </div>
    <div class="mt-3">
      <!-- Tombol Form Input untuk tiap peran -->
      <button class="btn btn-sm btn-primary form-role-btn">Form Mahasiswa</button>
      <button class="btn btn-sm btn-success form-role-btn">Form Pembimbing</button>
      <button class="btn btn-sm btn-warning form-role-btn">Form Penguji</button>
    </div>
  </div>

  <!-- MODAL TOOL HELPER -->
  <div class="modal fade" id="modalHelper" tabindex="-1" aria-labelledby="modalHelperLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalHelperLabel">Tool Helper: Status Global</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h6>Aturan Sistem</h6>
          <p>Status Global mengindikasikan kondisi terkini riwayat bimbingan mahasiswa. Sistem akan menyesuaikan status berdasarkan aktivitas dan unggahan berkas.</p>
          <h6>Status Global (Enum):</h6>
          <ul>
            <li>Draft / Belum Ada Aktivitas</li>
            <li>Menunggu Tanggapan Dosen</li>
            <li>Perlu Revisi</li>
            <li>Revisi Diajukan</li>
            <li>Menunggu Verifikasi</li>
            <li>Disetujui Sementara</li>
            <li>Selesai / Ditutup</li>
          </ul>
          <p><strong>Catatan:</strong> Status “Selesai” hanya tercapai jika:</p>
          <ul>
            <li>Semua berkas wajib sudah diunggah</li>
            <li>Semua berkas wajib sudah diverifikasi</li>
            <li>Tidak ada status “Ditolak”</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- BAGIAN 1.5: BERKAS SYARAT -->
  <div class="berkas-card mb-4">
    <h5>Berkas Syarat Tahap Bimbingan</h5>
    <div class="progress mb-3">
      <div class="progress-bar bg-success" role="progressbar" style="width: 80%;">4 / 5 Berkas Disetujui</div>
    </div>
    <table class="table table-bordered">
      <thead class="table-light">
        <tr>
          <th>No</th>
          <th>Nama Berkas</th>
          <th>Diunggah Oleh</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Lembar Bimbingan</td>
          <td>Mahasiswa</td>
          <td>✅ <span class="badge bg-success">Disetujui</span></td>
          <td><button class="btn btn-sm btn-outline-primary">Lihat</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Draft Skripsi Final</td>
          <td>Mahasiswa</td>
          <td>⏳ Menunggu Verifikasi</td>
          <td><button class="btn btn-sm btn-outline-primary">Lihat</button></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Persetujuan Pembimbing 1</td>
          <td>Pembimbing 1</td>
          <td>✅ <span class="badge bg-success">Disetujui</span></td>
          <td><button class="btn btn-sm btn-outline-primary">Lihat</button></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- BAGIAN 2: TABEL RIWAYAT BIMBINGAN -->
  <div class="riwayat-card">
    <h5>Riwayat Bimbingan</h5>
    <div class="mb-2">
      <button id="btnTandaiDibaca" class="btn btn-sm btn-success me-2">Tandai Dibaca</button>
      <button id="btnTambahPesan" class="btn btn-sm btn-primary">Tambah Pesan</button>
    </div>
    <table class="table table-striped table-hover">
      <thead class="table-light">
        <tr>
          <th scope="col">#</th>
          <th>Waktu</th>
          <th>Peran</th>
          <th>Aktor</th>
          <th>Jenis Pesan</th>
          <th>Catatan Pesan</th>
        </tr>
      </thead>
      <tbody>
        <tr data-new="true">
          <td><input type="checkbox" class="chk-new"></td>
          <td>01-03-2025 09:10</td>
          <td><span class="role-badge role-mhs">Mahasiswa</span></td>
          <td>Andi Pratama</td>
          <td>Update Progres</td>
          <td>Draft Bab I sudah diunggah <span class="badge badge-new">⭐ NEW</span></td>
        </tr>
        <tr data-new="true">
          <td><input type="checkbox" class="chk-new"></td>
          <td>02-03-2025 10:00</td>
          <td><span class="role-badge role-pembimbing">Pembimbing 1</span></td>
          <td>Dr. Ahmad</td>
          <td>Arahan</td>
          <td>Perjelas gap penelitian <span class="badge badge-new">⭐ NEW</span></td>
        </tr>
        <tr data-new="true">
          <td><input type="checkbox" class="chk-new"></td>
          <td>02-03-2025 11:20</td>
          <td><span class="role-badge role-pembimbing">Pembimbing 2</span></td>
          <td>Dr. Budi</td>
          <td>Arahan</td>
          <td>Tambahkan data pendukung <span class="badge badge-new">⭐ NEW</span></td>
        </tr>
        <tr>
          <td></td>
          <td>05-03-2025 08:45</td>
          <td><span class="role-badge role-mhs">Mahasiswa</span></td>
          <td>Andi Pratama</td>
          <td>Pengajuan Revisi</td>
          <td>Bab I sudah direvisi</td>
        </tr>
        <tr data-new="true">
          <td><input type="checkbox" class="chk-new"></td>
          <td>06-03-2025 14:30</td>
          <td><span class="role-badge role-pembimbing">Pembimbing 1</span></td>
          <td>Dr. Ahmad</td>
          <td>Persetujuan</td>
          <td>Revisi Bab I disetujui <span class="badge badge-new">⭐ NEW</span></td>
        </tr>
        <tr>
          <td></td>
          <td>07-03-2025 09:00</td>
          <td><span class="role-badge role-mhs">Mahasiswa</span></td>
          <td>Andi Pratama</td>
          <td>Update Progres</td>
          <td>Draft Bab II diunggah</td>
        </tr>
        <tr data-new="true">
          <td><input type="checkbox" class="chk-new"></td>
          <td>08-03-2025 13:10</td>
          <td><span class="role-badge role-pembimbing">Pembimbing 2</span></td>
          <td>Dr. Budi</td>
          <td>Arahan</td>
          <td>Perjelas teknik pengambilan sampel <span class="badge badge-new">⭐ NEW</span></td>
        </tr>
        <tr>
          <td></td>
          <td>10-03-2025 15:00</td>
          <td><span class="role-badge role-penguji">Penguji</span></td>
          <td>Dr. Sari</td>
          <td>Catatan Evaluatif</td>
          <td>Layak seminar, perbaiki redaksi</td>
        </tr>
        <tr data-new="true">
          <td><input type="checkbox" class="chk-new"></td>
          <td>12-03-2025 10:20</td>
          <td><span class="role-badge role-pembimbing">Pembimbing 1</span></td>
          <td>Dr. Ahmad</td>
          <td>Persetujuan</td>
          <td>Lanjut revisi Bab II sebelum seminar <span class="badge badge-new">⭐ NEW</span></td>
        </tr>
      </tbody>
    </table>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Tombol "Tandai Dibaca" per checkbox
  const btnTandai = document.getElementById('btnTandaiDibaca');
  btnTandai.addEventListener('click', () => {
    const checkboxes = document.querySelectorAll('.chk-new');
    checkboxes.forEach(chk => {
      if (chk.checked) {
        const row = chk.closest('tr');
        // Hilangkan badge NEW
        const badge = row.querySelector('.badge-new');
        if (badge) badge.remove();
        // Hilangkan checkbox
        chk.remove();
        // Update status new
        row.removeAttribute('data-new');
      }
    });
  });

  // Tombol tambah pesan (simulasi toast)
  const btnTambah = document.getElementById('btnTambahPesan');
  btnTambah.addEventListener('click', () => {
    alert("Simulasi: form tambah pesan muncul");
  });

  // Tombol Form per peran (simulasi)
  document.querySelectorAll('.form-role-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      alert(`Simulasi form input: ${btn.textContent}`);
    });
  });
</script>
</body>
</html>
