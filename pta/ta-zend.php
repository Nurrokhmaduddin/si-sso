<?php $page = 'monev_kelas'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
<style>

 .berkas-card, .riwayat-card { 
    background: #fff; padding: 20px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); margin-bottom: 20px; 
  }
  .badge-new { background-color: #ffc107; color: #212529; font-weight: 500; }
  .table th, .table td { vertical-align: middle; }
</style>

<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Tugas Akhir
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

    



          <!-- TAB NAV (Semester) -->
           <ul class="nav nav-tabs">
            <li class="nav-item" onclick="window.location='ta-zend1.php'"><a class="nav-link ">Detail</a></li>
            <li class="nav-item" onclick="window.location='ta-zend.php'"><a class="nav-link active">Bimbingan TA</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail3.php'"><a class="nav-link ">Ujian TA</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail2.php'"><a class="nav-link ">Pasca Ujian TA</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail5.php'"><a class="nav-link ">Download</a></li>
          </ul>
     <!-- ========== CARD : Filter & Export ========== -->
<div class="card">
  <div class="card-body ">
    <table class="table table-sm table-hover table-bordered table-striped deta">
      <tbody>
        <tr>
          <td width="15%"><b> Mahasiswa </b></td>
          <td>202012345 - Andi Pratama</td>
        </tr>
        <tr>
          <td width="15%"><b> Judul</b></td>
          <td>Analisis Implementasi Metode Employee Referral sebagai Strategi Efisiensi Rekrutmen di Departemen Human Capital PT X </td>
        </tr>
        <tr>
          <td width="15%"><b> Status Terkini</b></td>
          <td><span class="badge bg-warning text-dark">Menunggu Verifikasi</span> / Perpanjang ke-0</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="card-footer">
    <div class="card-tools ms-auto">
     <button type="button" 
     class="btn btn-outline-secondary btn-sm"
     onclick="window.location.href='monev-rekap-kelas.php'">
     <span class="fas fa-reply me-1"></span> Kembali
   </button>
   <button class="btn btn-sm btn-outline-primary " data-bs-toggle="modal" data-bs-target="#modalMhs">Form Mahasiswa</button>
   <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalPembimbing">Form Pembimbing</button>
   <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalPenguji">Form Penguji</button>
   <button type="button" class="btn btn-outline-success btn-sm">
    <i class="fas fa-file-download me-1"></i> Export
  </button>
  <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalHelper">
    <i class="fas fa-question-circle"></i>
  </button>
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
  <div class="card">
    <!-- <div class="card-header">
    <h5>Riwayat Bimbingan</h5>
    </div> -->
    <div class="card-body">
      <button id="btnTandaiDibaca" class="btn btn-sm btn-outline-primary ">Tandai Dibaca</button>
      <table class="table table-bordered table-hover table-sm ">
        <thead class="table-dark">
          <tr>
            <th><input type="checkbox"></th>
            <th>#</th>
            <th>Riwayat Pembimbingan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td class="text-center">3</td>
            <td >                
              <span class="badge bg-info text-dark cursor-pointer mb-1"
              data-bs-toggle="modal"
              data-bs-target="#modalPesan1"
              title="Klik untuk melihat pesan asal">
            💬 Balasan #2</span>           
            <strong>Update Progres</strong><br>
            Draft Bab II sudah diunggah. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <button class="btn btn-info btn-xs"><i class="fas fa-paperclip"></i> Lampiran</button><br>
            <small><i>02-03-2025 10:00</i></small> 
          </td>
        </tr>
        <tr class="table-info">
          <td><input type="checkbox" class="chk-new"></td>
          <td class="text-center">2</td>
          <td>
            <button class="btn btn-xs btn-outline-primary " data-bs-toggle="modal" data-bs-target="#modalMhs"><i class="fas fa-reply"></i> Balas</button>
            Pembimbing TA #1 | Nama Aktor 
            <br>
            <span class="badge badge-new">⭐ NEW</span>
            <span 
            class="badge bg-info text-dark cursor-pointer"
            data-bs-toggle="modal"
            data-bs-target="#modalPesan1"
            title="Klik untuk melihat pesan asal">
            💬 Balasan #1
          </span>
          <strong>Arahan</strong> <br>
          Perjelas gap penelitian. Lorem ipsum dolor sit amet, consectetur
          adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
          <small><i>01-03-2025 09:10</i></small> 
        </td>
      </tr>
      <tr>
        <td></td>
        <td class="text-center">1</td>
        <td >
          <strong>Update Progres</strong><br>
          Draft Bab I sudah diunggah. Lorem ipsum dolor sit amet, consectetur
          adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
          <small><i>28-02-2025 16:30</i></small>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</div>





      </div>
    </div>
  </div>
</section>
</div>
<!-- ./content-wrapper -->

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
            <label for="lembaga" class="form-label">Periode Akademik</label>
            <select name="lembaga" id="lembaga" class="form-select">
              <option value="PA019" selected>2024/2025 - Gasal - (Aktif)</option><option value="PA018" >2023/2024 - Genap</option><option value="PA017" >2023/2024 - Gasal</option><option value="PA016" >2022/2023 - Genap</option><option value="PA015" >2022/2023 - Gasal</option><option value="PA014" >2021/2022 - Genap</option><option value="PA013" >2021/2022 - Gasal</option><option value="PA012" >2020/2021 - Genap</option><option value="PA011" >2020/2021 - Gasal</option><option value="PA010" >2019/2020 - Genap</option><option value="PA009" >2019/2020 - Gasal</option><option value="PA008" >2018/2019 - Genap</option><option value="PA007" >2018/2019 - Gasal</option><option value="PA006" >2017/2018 - Genap</option><option value="PA005" >2017/2018 - Gasal</option><option value="PA004" >2016/2017 - Genap</option><option value="PA003" >2016/2017 - Gasal</option><option value="PA002" >2015/2016 - Genap</option><option value="PA001" >2015/2016 - Gasal</option> 
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
          Ideal hasil ekspor kelas berdasarkan:
kurikulum, set pemetaan, mata kuliah(satu,beberapa, semua)
kolom: kode MK, mata kuliah, mahasiswa, nilai akhir(huruf),nilai akhir(angka), cpmk 1,2,3,4,5
jika ada kesamaan NIM di satu mata kuliah(artinya mahasiswa tempuh >1 kali MK tsb) ambil nilai tertinggi
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
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
<!-- MODAL PESAN -->
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
<?php include('5script.php'); ?>

