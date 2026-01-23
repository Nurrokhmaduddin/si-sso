<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Riwayat Bimbingan Akademik - Modal & Validasi</title>
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
      <button class="btn btn-sm btn-primary form-role-btn" data-bs-toggle="modal" data-bs-target="#modalMhs">Form Mahasiswa</button>
      <button class="btn btn-sm btn-success form-role-btn" data-bs-toggle="modal" data-bs-target="#modalPembimbing">Form Pembimbing</button>
      <button class="btn btn-sm btn-warning form-role-btn" data-bs-toggle="modal" data-bs-target="#modalPenguji">Form Penguji</button>
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
          <p>Status Global mengindikasikan kondisi terkini riwayat bimbingan mahasiswa. Sistem menyesuaikan status berdasarkan aktivitas dan unggahan berkas.</p>
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
  </div>

  <!-- BAGIAN 2: TABEL RIWAYAT BIMBINGAN -->
  <div class="riwayat-card">
    <h5>Riwayat Bimbingan</h5>
    <div class="mb-2">
      <button id="btnTandaiDibaca" class="btn btn-sm btn-success me-2">Tandai Dibaca</button>
      <button id="btnTambahPesan" class="btn btn-sm btn-primary">Pesan Bimbingan</button>
    </div>
    <table class="table table-striped table-hover">
      <thead class="table-light">
        <tr>
          <th>#</th>
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
        <!-- ... sisanya tetap statis ... -->
      </tbody>
    </table>
    <table class="table table-bordered table-hover table-sm">
  <thead class="table-dark">
    <tr>
      <th style="width:50px;">#</th>
      <th style="width:50px;">Id</th>
      <th>Riwayat Pembimbingan</th>
    </tr>
  </thead>
  <tbody>

    <!-- RIWAYAT TERBARU -->
    <tr>
      <td></td>
      <td class="text-center">3</td>
      <td>                
        <span class="badge bg-info text-dark cursor-pointer mb-1"
        data-bs-toggle="modal"
        data-bs-target="#modalPesan1"
        title="Klik untuk melihat pesan asal">
      💬 Balasan Pesan #2</span>           
        <strong>Update Progres</strong> <br>
        Draft Bab II sudah diunggah. Lorem ipsum dolor sit amet, consectetur
        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <i class="fas fa-paperclip"></i><br>
        <i>02-03-2025 10:00</i> 
      </td>
    </tr>

    <!-- RIWAYAT PEMBIMBING -->
    <tr class="table-info">
      <td><input type="checkbox" class="chk-new"></td>
      <td class="text-center">2</td>
      <td>
        <span class="badge bg-secondary mb-1">Pembimbing 1</span> | Nama Aktor
        
        <br>
        <span class="badge badge-new">⭐ NEW</span>
<span 
  class="badge bg-info text-dark cursor-pointer"
  data-bs-toggle="modal"
  data-bs-target="#modalPesan1"
  title="Klik untuk melihat pesan asal">
  💬 Balasan Pesan #1
</span>
 – Arahan <button class="btn btn-sm btn-outline-primary"><i class="fas fa-reply"></i> Balas</button><br>
        Perjelas gap penelitian. Lorem ipsum dolor sit amet, consectetur
        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
        <i>01-03-2025 09:10</i>
      </td>
    </tr>

    <!-- RIWAYAT AWAL -->
    <tr>
      <td></td>
      <td class="text-center">1</td>
      <td>
         
        <strong>Update Progres</strong><br>
        Draft Bab I sudah diunggah. Lorem ipsum dolor sit amet, consectetur
        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
        <i>28-02-2025 16:30</i>
      
      </td>
      <td class="text-muted"></td>
    </tr>

  </tbody>
</table>

  </div>

</div>

<!-- MODAL FORM MAHASISWA -->
<div class="modal fade" id="modalMhs" tabindex="-1" aria-labelledby="modalMhsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="formMhs">
        <div class="modal-header">
          <h5 class="modal-title" id="modalMhsLabel">Form Log Bimbingan Mahasiswa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-2"><strong>Mahasiswa:</strong> Andi</div>
          <div class="mb-3"><strong>NIM:</strong> 202012345</div>
          <div class="mb-3">
            <label for="topikMhs" class="form-label">Topik/Bab</label>
            <select id="topikMhs" class="form-select" required>
              <option value="">-- Pilih Topik/Bab --</option>
              <option value="Bab I">Bab I</option>
              <option value="Bab II">Bab II</option>
              <option value="Bab III">Bab III</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="jenisMhs" class="form-label">Jenis Pesan</label>
            <select id="jenisMhs" class="form-select" required>
              <option value="">-- Pilih Jenis Pesan --</option>
              <option value="Update Progres" title="laporan sudah/sedang dikerjakan">Update Progres</option>
              <option value="Pengajuan Revisi" title="hasil perbaikan dari arahan sebelumnya">Pengajuan Revisi</option>
              <option value="Pertanyaan / Klarifikasi" title="minta penjelasan arahan">Pertanyaan / Klarifikasi</option>
              <option value="Permohonan Persetujuan" title="meminta dicek/diverifikasi">Permohonan Persetujuan</option>
              <option value="Informasi Tambahan" title="konteks, kendala, penjelasan non-teknis">Informasi Tambahan</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="catatanMhs" class="form-label">Pesan</label>
            <textarea id="catatanMhs" class="form-control" rows="4" required></textarea>
          </div>
          <div class="mb-3">
            <label for="lampiranMhs" class="form-label">Lampiran</label>
            <input type="file" id="lampiranMhs" class="form-control" accept=".pdf,.doc,.docx" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" disabled>SIMPAN & KIRIM</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- MODAL FORM PEMBIMBING -->
<div class="modal fade" id="modalPembimbing" tabindex="-1" aria-labelledby="modalPembimbingLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="formPembimbing">
        <div class="modal-header">
          <h5 class="modal-title" id="modalPembimbingLabel">Form Pesan Pembimbing</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="jenisPembimbing" class="form-label">Jenis Pesan</label>
            <select id="jenisPembimbing" class="form-select" required>
              <option value="">-- Pilih Jenis Pesan --</option>
              <option value="Arahan" title="instruksi akademik utama">Arahan</option>
              <option value="Klarifikasi" title="meluruskan pemahaman">Klarifikasi</option>
              <option value="Permintaan Revisi" title="menegaskan perlu perbaikan">Permintaan Revisi</option>
              <option value="Persetujuan" title="menyatakan sudah sesuai">Persetujuan</option>
              <option value="Catatan Akademik" title="saran tambahan, tidak wajib ditindaklanjuti">Catatan Akademik</option>
              <option value="Keputusan Sementara" title="lanjut / tahan / fokus ulang">Keputusan Sementara</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="catatanPembimbing" class="form-label">Catatan Pesan</label>
            <textarea id="catatanPembimbing" class="form-control" rows="4" required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" disabled>SIMPAN & KIRIM</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- MODAL FORM PENGUJI -->
<div class="modal fade" id="modalPenguji" tabindex="-1" aria-labelledby="modalPengujiLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="formPenguji">
        <div class="modal-header">
          <h5 class="modal-title" id="modalPengujiLabel">Form Pesan Penguji</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="jenisPenguji" class="form-label">Jenis Pesan</label>
            <select id="jenisPenguji" class="form-select" required>
              <option value="">-- Pilih Jenis Pesan --</option>
              <option value="Catatan Evaluatif" title="penilaian umum">Catatan Evaluatif</option>
              <option value="Rekomendasi Perbaikan" title="saran sebelum lanjut">Rekomendasi Perbaikan</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="catatanPenguji" class="form-label">Catatan Pesan</label>
            <textarea id="catatanPenguji" class="form-control" rows="4" required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-warning" disabled>SIMPAN & KIRIM</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modalPesan1" tabindex="-1" aria-labelledby="modalPesan1Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header bg-secondary text-white">
        <h5 class="modal-title" id="modalPesan1Label">
          💬 Detail Pesan #1
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <div class="mb-2">
          <span class="badge bg-primary">Update Progres</span>
          <span class="badge bg-light text-dark">Mahasiswa</span>
        </div>

        <p class="mb-1"><strong>Dikirim oleh:</strong> Ahmad Fauzan</p>
        <p class="mb-3"><strong>Waktu:</strong> 01-03-2025 09:10</p>

        <hr>

        <p>
          Draft Bab I sudah diunggah.  
          Mohon arahan terkait struktur pendahuluan dan perumusan masalah.
        </p>
      </div>

      <div class="modal-footer">
        <button class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Tutup
        </button>
      </div>

    </div>
  </div>
</div>


<script>
  // Fungsi validasi interaktif untuk tiap modal
  function setupFormValidation(formId, selectId, textareaId, fileId=null) {
    const form = document.getElementById(formId);
    const select = document.getElementById(selectId);
    const textarea = document.getElementById(textareaId);
    const submitBtn = form.querySelector('button[type="submit"]');
    const fileInput = fileId ? document.getElementById(fileId) : null;

    function validate() {
      let valid = select.value && textarea.value.trim();
      if (fileInput) valid = valid && fileInput.files.length > 0;
      submitBtn.disabled = !valid;
    }

    select.addEventListener('change', validate);
    textarea.addEventListener('input', validate);
    if(fileInput) fileInput.addEventListener('change', validate);

    form.addEventListener('submit', e => {
      e.preventDefault();
      alert('Form disubmit (simulasi, data statis)');
      form.reset();
      submitBtn.disabled = true;
    });
  }

  setupFormValidation('formMhs', 'jenisMhs', 'catatanMhs', 'lampiranMhs');
  setupFormValidation('formPembimbing', 'jenisPembimbing', 'catatanPembimbing');
  setupFormValidation('formPenguji', 'jenisPenguji', 'catatanPenguji');
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Fungsi validasi form: enable submit jika select dan textarea diisi
  function setupFormValidation(formId, selectId, textareaId) {
    const form = document.getElementById(formId);
    const select = document.getElementById(selectId);
    const textarea = document.getElementById(textareaId);
    const submitBtn = form.querySelector('button[type="submit"]');

    function validate() {
      submitBtn.disabled = !(select.value && textarea.value.trim());
    }

    select.addEventListener('change', validate);
    textarea.addEventListener('input', validate);

    form.addEventListener('submit', e => {
      e.preventDefault();
      alert('Form disubmit (simulasi, data statis)');
      form.reset();
      submitBtn.disabled = true;
      // Modal tetap bisa ditutup manual
    });
  }

  setupFormValidation('formMhs', 'jenisMhs', 'catatanMhs');
  setupFormValidation('formPembimbing', 'jenisPembimbing', 'catatanPembimbing');
  setupFormValidation('formPenguji', 'jenisPenguji', 'catatanPenguji');

  // Tombol "Tandai Dibaca" per checkbox
  const btnTandai = document.getElementById('btnTandaiDibaca');
  btnTandai.addEventListener('click', () => {
    const checkboxes = document.querySelectorAll('.chk-new');
    checkboxes.forEach(chk => {
      if (chk.checked) {
        const row = chk.closest('tr');
        const badge = row.querySelector('.badge-new');
        if (badge) badge.remove();
        chk.remove();
        row.removeAttribute('data-new');
      }
    });
  });
</script>
</body>
</html>
