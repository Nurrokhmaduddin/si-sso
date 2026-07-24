<?php $page='';?>
<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php include "3sidebar.php"; ?>
<!-- Custom Style -->
<style>
  :root {
    --card-radius: 12px;
    --accent: #0d6efd;
    --accent-dark: #0a4fa0;
    --soft-bg: #f8f9fa;
    --muted-bg: #f1f2f4;
    --muted-text: #6c757d;
    --border-soft: #e9ecef;
  }

  body {
    background: #f5f6f8;
    font-family: Inter, "Segoe UI", Roboto, "Helvetica Neue", Arial;
  }

  .card {
    border-radius: var(--card-radius);
    border: 1px solid var(--border-soft);
    box-shadow: 0 2px 8px rgba(16, 24, 40, 0.05);
  }

  .status-pill {
    font-size: 0.8rem;
    padding: 4px 12px;
    border-radius: 999px;
    font-weight: 600;
  }

  .status-pill.aktif {
    background: #e7f6ec;
    color: #1e7e34;
  }

  .status-pill.nonaktif {
    background: #f1f2f4;
    color: #6c757d;
  }

  .icon-circle {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #eef4ff;
    color: var(--accent);
    flex-shrink: 0;
  }

  /* ====== MENU UTAMA ====== */
  .menu-card {
    background: #ffffff;
    border-radius: var(--card-radius);
    border: 1px solid var(--border-soft);
    text-decoration: none !important;
    height: 150px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    box-shadow: 0 2px 6px rgba(16, 24, 40, 0.05);
    transition: box-shadow 0.2s ease, border-color 0.2s ease;
  }

  .menu-card:hover {
    border-color: var(--accent);
    box-shadow: 0 4px 12px rgba(13, 110, 253, 0.12);
  }

  .menu-card.locked {
    background: #fafafa;
    cursor: not-allowed;
  }

  .menu-card i {
    font-size: 1.9rem;
    color: var(--accent);
    margin-bottom: 8px;
  }

  .menu-card.locked i {
    color: #adb5bd;
  }

  .menu-card h5 {
    margin: 0;
    font-size: 0.95rem;
    font-weight: 600;
    color: #1c2b3a;
    text-align: center;
  }

  .menu-card.locked h5 {
    color: #adb5bd;
  }

  /* ====== STEPPER / MILESTONE (FORMAL) ====== */
  .stepper-wrapper {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    position: relative;
    margin-top: 28px;
  }

  .stepper-wrapper::before {
    content: "";
    position: absolute;
    top: 18px;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--border-soft);
    z-index: 1;
  }

  .stepper-progress {
    position: absolute;
    top: 18px;
    left: 0;
    height: 3px;
    background: var(--accent);
    z-index: 2;
    transition: width .4s ease;
  }

  .activity-card.nonaktif .stepper-progress {
    background: #adb5bd;
  }

  .stepper-step {
    position: relative;
    z-index: 3;
    text-align: center;
    width: 100%;
  }

  .stepper-circle {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    margin: 0 auto 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 0.85rem;
    color: #fff;
    background: #ced4da;
    border: 2px solid #ced4da;
  }

  .stepper-step.completed .stepper-circle {
    background: var(--accent);
    border-color: var(--accent);
  }

  .stepper-step.active .stepper-circle {
    background: #fff;
    color: var(--accent);
    border-color: var(--accent);
  }

  .activity-card.nonaktif .stepper-step.completed .stepper-circle,
  .activity-card.nonaktif .stepper-step.active .stepper-circle {
    background: #adb5bd;
    border-color: #adb5bd;
    color: #fff;
  }

  .stepper-label {
    font-size: 0.8rem;
    font-weight: 600;
    color: #495057;
  }

  .activity-card.nonaktif .stepper-label {
    color: #adb5bd;
  }

  /* ====== INFO TAMBAHAN (pengganti badge/challenge) ====== */
  .info-list {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }

  .info-chip {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 12px;
    border-radius: 8px;
    background: var(--soft-bg);
    border: 1px solid var(--border-soft);
    font-size: 0.82rem;
    color: #495057;
  }

  .info-chip i {
    color: var(--accent);
    font-size: 0.8rem;
  }

  .activity-card.nonaktif .info-chip i {
    color: #adb5bd;
  }

  /* ====== SISA WAKTU (pengganti health bar) ====== */
  .time-info {
    font-size: 0.9rem;
    color: #333;
    margin-top: 12px;
    padding-top: 12px;
    border-top: 1px solid var(--border-soft);
  }

  .time-info strong {
    color: var(--accent-dark);
  }

  .activity-card.nonaktif .time-info strong {
    color: #6c757d;
  }

  .time-info .warning-text {
    color: #b02a37;
    font-weight: 600;
  }
</style>

<!-- Content Wrapper -->
<div class="content-wrapper" style="min-height: 600px;">
  <div class="content-header"></div>
  <section class="content">
    <div class="container-fluid">

      <!-- IDENTITAS MAHASISWA -->
                    BERANDA

      <div class="card p-3 mb-4">
        <div class="d-flex align-items-start">
          <div class="me-3">
            <div class="icon-circle">
              <i class="fas fa-user-graduate"></i>
            </div>
          </div>

          <div class="flex-grow-1">
            <div class="d-flex justify-content-between flex-wrap gap-2">
              <div>
                <!-- <div class="small text-muted">Mahasiswa</div> -->
                <h5 class="mb-0">Harun Nurrokhmaduddin</h5>
                <div class="small text-muted">
                  NIM: 132512345 &bull; Program Studi: Manajemen
                </div>
              </div>

              <div class="text-end">
                <span class="status-pill aktif">Mahasiswa</span>
                <div class="small text-muted mt-1">Reguler/IUP</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- MENU UTAMA -->
              NAVIGASI CEPAT

      <div class="row g-4 justify-content-center mb-4">
        <div class="col-md-2">
          <a href="sso/" class="menu-card">
            <i class="fas fa-check-circle" style="color:seagreen;"></i>
            <h5 style="color:seagreen;"> Magang</h5>
          </a>
        </div>
        <div class="col-md-2">
          <a href="sso/" class="menu-card">
            <i class="fas fa-check-circle" style="color:seagreen;"></i>
            <h5 style="color:seagreen;">Responsi Magang</h5>
          </a>
        </div>
        <div class="col-md-2">
          <a href="#" class="menu-card locked">
             <i class="fas fa-lock"></i>
            <h5> RBB</h5>
          </a>
        </div>
        
        <div class="col-md-2">
          <a href="#" class="menu-card locked">
             <i class="fas fa-lock"></i>
            <h5>Responsi RBB</h5>
          </a>
        </div>

        <div class="col-md-2"> 
          <a href="sso/" class="menu-card" style="background:#dc3545; "> 
            <i class="fas fa-file-alt" style="color:#adb5bd; "></i> 
            <h5 style="color:#adb5bd;" >Bimbingan TA</h5> 
          </a> 
        </div>

        <div class="col-md-2">
          <a href="#" class="menu-card locked">
             <i class="fas fa-lock"></i>
            <h5>Ujian TA</h5>
          </a>
        </div>
        <div class="col-md-2">
          <a href="#" class="menu-card ">
             <i class="fas fa-file-alt" ></i>
            <h5>Publikasi / Diseminasi</h5>
          </a>
        </div>
      </div>
<style>
  .aksi-cepat-wrapper {
  background: linear-gradient(135deg, #0f1419 0%, #1a202c 100%);
  border-radius: 12px;
  border: 1px solid #1e293b;
  padding: 24px;
  margin-bottom: 32px;
}

.aksi-cepat-header {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 20px;
}

.aksi-cepat-header i {
  font-size: 1.5rem;
  color: #fbbf24;
}

.aksi-cepat-header h5 {
  margin: 0;
  font-size: 1.2rem;
  font-weight: 700;
  color: #ffffff;
  letter-spacing: -0.5px;
}

.aksi-cepat-menu {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.menu-item-horizontal {
  display: flex;
  align-items: center;
  gap: 16px;
  padding: 16px 20px;
  background: rgba(30, 41, 59, 0.4);
  border: 1px solid #334155;
  border-radius: 10px;
  text-decoration: none !important;
  transition: all 0.3s ease;
  cursor: pointer;
}

.menu-item-horizontal:hover {
  background: rgba(30, 41, 59, 0.7);
  border-color: #475569;
  transform: translateX(8px);
}

.menu-item-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 8px;
  background: rgba(20, 184, 166, 0.1);
  color: #14b8a6;
  font-size: 1.1rem;
  flex-shrink: 0;
}

.menu-item-label {
  flex: 1;
  font-size: 0.95rem;
  font-weight: 500;
  color: #cbd5e0;
  margin: 0;
}

.menu-item-arrow {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 24px;
  height: 24px;
  color: #9ca3af;
  font-size: 0.9rem;
  flex-shrink: 0;
}

.menu-item-horizontal:hover .menu-item-arrow {
  color: #cbd5e0;
  transform: translateX(4px);
}

.menu-item-horizontal.locked {
  opacity: 0.6;
  cursor: not-allowed;
}

.menu-item-horizontal.locked:hover {
  transform: none;
}
</style>
<!-- MENU UTAMA - AKSI CEPAT -->
<div class="aksi-cepat-wrapper">
  <div class="aksi-cepat-header">
    <i class="fas fa-bolt"></i>
    <h5>NAVIGASI CEPAT</h5>
  </div>

  <div class="aksi-cepat-menu">
    <a href="sso/" class="menu-item-horizontal">
      <div class="menu-item-icon">
        <i class="fas fa-check-circle"></i>
      </div>
      <p class="menu-item-label">Magang</p>
      <div class="menu-item-arrow">
        <i class="fas fa-chevron-right"></i>
      </div>
    </a>

    <a href="sso/" class="menu-item-horizontal">
      <div class="menu-item-icon">
        <i class="fas fa-check-circle"></i>
      </div>
      <p class="menu-item-label">Responsi Magang</p>
      <div class="menu-item-arrow">
        <i class="fas fa-chevron-right"></i>
      </div>
    </a>

    <a href="#" class="menu-item-horizontal locked">
      <div class="menu-item-icon">
        <i class="fas fa-lock"></i>
      </div>
      <p class="menu-item-label">RBB</p>
      <div class="menu-item-arrow">
        <i class="fas fa-chevron-right"></i>
      </div>
    </a>

    <a href="sso/" class="menu-item-horizontal locked">
      <div class="menu-item-icon">
        <i class="fas fa-lock"></i>
      </div>
      <p class="menu-item-label">Responsi RBB</p>
      <div class="menu-item-arrow">
        <i class="fas fa-chevron-right"></i>
      </div>
    </a>

    <a href="#" class="menu-item-horizontal ">
      <div class="menu-item-icon">
        <i class="fas fa-file-alt"></i>
      </div>
      <p class="menu-item-label">Bimbingan TA</p>
      <div class="menu-item-arrow">
        <i class="fas fa-chevron-right"></i>
      </div>
    </a>
    <a href="sso/" class="menu-item-horizontal">
      <div class="menu-item-icon">
         <i class="fas fa-file-alt"></i>
      </div>
      <p class="menu-item-label">Ujian TA</p>
      <div class="menu-item-arrow">
        <i class="fas fa-chevron-right"></i>
      </div>
    </a>

    <a href="#" class="menu-item-horizontal ">
      <div class="menu-item-icon">
        <i class="fas fa-file-alt"></i>
      </div>
      <p class="menu-item-label">Publikasi / Diseminasi</p>
      <div class="menu-item-arrow">
        <i class="fas fa-chevron-right"></i>
      </div>
    </a>
  </div>
</div>
      <!-- ==================================================== -->
      <!-- AKTIVITAS 1: TUGAS AKHIR / SKRIPSI - STATUS AKTIF     -->
      <!-- ==================================================== -->
      <div class="card p-3 mb-4 activity-card">
        <div class="card-header bg-transparent border-0 px-0 d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
            <h5 class="mb-0"><i class="fas fa-file-alt me-1 text-primary"></i> Tugas Akhir / Skripsi</h5>
            <div class="small text-muted">Periode: 2025 - Ganjil</div>
          </div>
          <div class="d-flex align-items-center gap-2">
            <span class="status-pill aktif">Aktif</span>
            <button class="btn btn-sm btn-outline-primary">Lihat Detail <i class="fas fa-arrow-right ms-1"></i></button>
          </div>
        </div>

        <!-- Stepper -->
        <div class="stepper-wrapper">
          <div class="stepper-progress" style="width:60%"></div>

          <div class="stepper-step completed">
            <div class="stepper-circle"><i class="fas fa-check"></i></div>
            <div class="stepper-label">Pendaftaran</div>
          </div>
          <div class="stepper-step completed">
            <div class="stepper-circle"><i class="fas fa-check"></i></div>
            <div class="stepper-label">Penentuan Topik</div>
          </div>
          <div class="stepper-step completed">
            <div class="stepper-circle"><i class="fas fa-check"></i></div>
            <div class="stepper-label">Pembimbing</div>
          </div>
          <div class="stepper-step active">
            <div class="stepper-circle">4</div>
            <div class="stepper-label">Bimbingan</div>
          </div>
          <div class="stepper-step">
            <div class="stepper-circle">5</div>
            <div class="stepper-label">Ujian</div>
          </div>
          <div class="stepper-step">
            <div class="stepper-circle">6</div>
            <div class="stepper-label">Selesai</div>
          </div>
        </div>

        <!-- Info tambahan -->
        <div class="info-list mt-3">
          <div class="info-chip"><i class="fas fa-calendar-check"></i> Konsultasi terakhir: 3 hari lalu</div>
          <div class="info-chip"><i class="fas fa-clipboard-check"></i> Revisi: Tidak ada catatan</div>
          <div class="info-chip"><i class="fas fa-redo"></i> Perpanjangan: Belum pernah diajukan</div>
        </div>

        <!-- Sisa waktu -->
        <?php
          $tugas_akhir_sisa = 137;
          $tugas_akhir_total = 180;
        ?>
        <div class="time-info">
          Sisa Waktu Bimbingan: <strong><?php echo $tugas_akhir_sisa; ?> dari <?php echo $tugas_akhir_total; ?> Hari</strong>
        </div>
      </div>

      <!-- ==================================================== -->
      <!-- AKTIVITAS 2: PUBLIKASI / DISEMINASI - STATUS NONAKTIF -->
      <!-- (masa berlaku habis, menunggu pengajuan perpanjangan) -->
      <!-- ==================================================== -->
      <div class="card p-3 mb-4 activity-card nonaktif">
        <div class="card-header bg-transparent border-0 px-0 d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
            <h5 class="mb-0"><i class="fas fa-file-alt me-1 text-secondary"></i> Publikasi / Diseminasi</h5>
            <div class="small text-muted">Periode: 2025 - Ganjil</div>
          </div>
          <div class="d-flex align-items-center gap-2">
            <span class="status-pill nonaktif">Nonaktif</span>
            <button class="btn btn-sm btn-outline-secondary" disabled>Lihat Detail <i class="fas fa-arrow-right ms-1"></i></button>
          </div>
        </div>

        <!-- Stepper -->
        <div class="stepper-wrapper">
          <div class="stepper-progress" style="width:33%"></div>

          <div class="stepper-step completed">
            <div class="stepper-circle"><i class="fas fa-check"></i></div>
            <div class="stepper-label">Bimbingan Persiapan</div>
          </div>
          <div class="stepper-step active">
            <div class="stepper-circle">2</div>
            <div class="stepper-label">Publikasi / Diseminasi</div>
          </div>
          <div class="stepper-step">
            <div class="stepper-circle">3</div>
            <div class="stepper-label">Konversi Nilai</div>
          </div>
          <div class="stepper-step">
            <div class="stepper-circle">4</div>
            <div class="stepper-label">Selesai</div>
          </div>
        </div>

        <!-- Sisa waktu -->
        <?php
          $publikasi_sisa = 0;
          $publikasi_total = 180;
        ?>
        <div class="time-info">
          Sisa Waktu: <strong><?php echo $publikasi_sisa; ?> dari <?php echo $publikasi_total; ?> Hari</strong>
          &mdash; <span class="warning-text">Masa berlaku telah habis, silakan ajukan perpanjangan.</span>
          <div class="mt-2">
            <button class="btn btn-sm btn-primary"><i class="fas fa-file-signature me-1"></i> Ajukan Perpanjangan</button>
          </div>
        </div>
      </div>

      <!-- ==================================================== -->
      <!-- AKTIVITAS 3: BIMBINGAN TUGAS AKHIR - STATUS AKTIF     -->
      <!-- ==================================================== -->
      <div class="card p-3 mb-4 activity-card">
        <div class="card-header bg-transparent border-0 px-0 d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
            <h5 class="mb-0"><i class="fas fa-file-alt me-1 text-primary"></i> Bimbingan Tugas Akhir</h5>
            <div class="small text-muted">Periode: 2025 - Ganjil</div>
          </div>
          <div class="d-flex align-items-center gap-2">
            <span class="status-pill aktif">Aktif</span>
            <button class="btn btn-sm btn-outline-primary">Lihat Detail <i class="fas fa-arrow-right ms-1"></i></button>
          </div>
        </div>

        <!-- Stepper -->
        <div class="stepper-wrapper">
          <div class="stepper-progress" style="width:50%"></div>

          <div class="stepper-step completed">
            <div class="stepper-circle"><i class="fas fa-check"></i></div>
            <div class="stepper-label">Registrasi</div>
          </div>
          <div class="stepper-step completed">
            <div class="stepper-circle"><i class="fas fa-check"></i></div>
            <div class="stepper-label">Pembayaran</div>
          </div>
          <div class="stepper-step active">
            <div class="stepper-circle">3</div>
            <div class="stepper-label">Bimbingan</div>
          </div>
          <div class="stepper-step">
            <div class="stepper-circle">4</div>
            <div class="stepper-label">Penilaian</div>
          </div>
          <div class="stepper-step">
            <div class="stepper-circle">5</div>
            <div class="stepper-label">Selesai</div>
          </div>
        </div>

        <!-- Info tambahan -->
        <div class="info-list mt-3">
          <div class="info-chip"><i class="fas fa-calendar-check"></i> Konsultasi terakhir: 1 hari lalu</div>
          <div class="info-chip"><i class="fas fa-clipboard-check"></i> Revisi: Tidak ada catatan</div>
          <div class="info-chip"><i class="fas fa-redo"></i> Perpanjangan: 1 kali diajukan</div>
        </div>

        <!-- Sisa waktu -->
        <?php
          $bimbingan_sisa = 69;
          $bimbingan_total = 180;
        ?>
        <div class="time-info">
          Sisa Waktu Bimbingan: <strong><?php echo $bimbingan_sisa; ?> dari <?php echo $bimbingan_total; ?> Hari</strong>
        </div>
      </div>

    </div>
  </section>
</div>
<?php include "4footer.php"; ?>

<!-- Tooltip Init -->
<script>
  document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => {
    new bootstrap.Tooltip(el);
  });
</script>

<?php include "5script.php"; ?>
