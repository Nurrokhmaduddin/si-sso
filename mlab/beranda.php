<?php $page = 'beranda'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<!-- Content Wrapper -->
<div class="content-wrapper" style="min-height: 600px;">

  <!-- Content Header -->
  <div class="content-header"></div>

  <!-- Main Content -->
  <section class="content">
    <div id="cardsContainer">
      <div class="container-fluid">

        <!-- Welcome Card -->
        <div class="card">
          <div class="card-body">
            <h2 class="mb-0">
              <i class="far fa-smile"></i>
              Selamat Datang, [nama pengguna] <?php echo $q; ?>
            </h2>
            <p class="text-muted">
              Sistem Informasi Learning Outcome Assessment (LOA)
            </p>
          </div>
        </div>

        <!-- Info Cards -->
        <div class="row mb-3">

          <div class="col-md-4">
            <div class="card bg-primary text-white">
              <div class="card-body">
                <h5>Periode Akademik Aktif</h5>
                <h3>2025/2026 - Gasal</h3>
                <p class="mb-0">
                  <i class="fas fa-calendar-alt"></i>
                  Berlaku hingga: 30 Feb 2026
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card bg-success text-white">
              <div class="card-body">
                <h5>Progress Entri Nilai</h5>
                <h3>82%</h3>
                <p class="mb-0">
                  <i class="fas fa-edit"></i>
                  Dari total kelas Mata Kuliah semester ini.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card bg-warning text-white">
              <div class="card-body">
                <h5>Progress Unggah Portofolio</h5>
                <h3>20%</h3>
                <p class="mb-0">
                  <i class="fas fa-check"></i>
                  Dari total kelas Mata Kuliah semester ini.
                </p>
              </div>
            </div>
          </div>

        </div>

        <!-- Chart & Announcement -->
        <div class="row mb-3">

          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">
                  <i class="fas fa-chart-pie"></i>
                  Statistik Capaian LOA Periode Akademik Aktif
                </h5>
              </div>
              <div class="card-body">
                <canvas id="chartLOA" style="min-height: 250px;"></canvas>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">
                  <i class="fas fa-bullhorn"></i>
                  Pengumuman Terbaru
                </h5>
              </div>
              <div class="card-body" style="max-height: 400px; overflow-y:auto;">
                <ul class="list-group">
                  <li class="list-group-item">
                    Pengumuman 1: Jadwal asesmen Gasal 2025/2026
                  </li>
                  <li class="list-group-item">
                    Pengumuman 2: Perubahan format laporan LOA
                  </li>
                  <li class="list-group-item">
                    Pengumuman 3: Update sistem input capaian mahasiswa
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>


👤 ROLE 1: KAPRODI
🎯 Goal:

Mengetahui kesehatan CPL secara global.

STEP 1 — Login

Masuk Dashboard

Lihat:

KPI ringkasan

Heatmap

Tren

STEP 2 — Deteksi Masalah

Melihat:

CPL 4 → warna merah

Klik CPL 4.

STEP 3 — Investigasi

Masuk Detail:

Distribusi nilai

Kelas penyumbang

CPMK terkait

STEP 4 — Identifikasi Penyebab

Klik Kelas B

Lihat:

Distribusi mahasiswa

% ketuntasan rendah

STEP 5 — Action

Masuk menu:
Monitoring CPMK

Lihat CPMK mana yang rendah.

STEP 6 — Tindak Lanjut

Evaluasi RPS

Diskusi dosen

Revisi metode pembelajaran

👨‍🏫 ROLE 2: DOSEN
🎯 Goal:

Mengetahui performa kelasnya.

STEP 1

Masuk Monitoring CPMK.

STEP 2

Filter Mata Kuliah → Kelas A.

STEP 3

Lihat:

Distribusi nilai

% ketuntasan

Mahasiswa yang belum tuntas

STEP 4

Download daftar mahasiswa risiko.

👩‍💼 ROLE 3: ADMIN
🎯 Goal:

Menyiapkan laporan akreditasi.

STEP 1

Masuk menu Laporan.

STEP 2

Pilih:

Tahun Akademik

Snapshot Semester

STEP 3

Generate PDF.

<hr>
🟢 PILAR 1 – Ketercapaian Outcome (CPL & CPMK)

Pertanyaan utama:

Apakah outcome tercapai?

Di level dosen (CPMK)

Rata-rata Final CPMK

% mahasiswa mencapai threshold

Gap Awal vs Final

Distribusi nilai

Di level prodi (CPL)

Rata-rata CPL

% CPL mencapai target

CPL yang lemah

Ini output quality.

🟢 PILAR 2 – Konsistensi & Stabilitas

Pertanyaan utama:

Apakah mutu stabil dan adil?

Meliputi:

a) Antar kelas (dosen berbeda)

Rerata CPMK antar kelas

% tuntas antar kelas

Deviasi antar kelas

b) Antar cohort

CPL antar angkatan

Fluktuasi 3 cohort

Kalau terlalu fluktuatif → sistem tidak stabil.

🟢 PILAR 3 – Struktur & Keseimbangan Kurikulum

Pertanyaan utama:

Apakah kurikulum dirancang dengan proporsional?

Metrik:

Mapping CPL → CPMK → MK

Apakah ada CPL terlalu berat di 1 MK?

Apakah ada CPL jarang disentuh?

Distribusi bobot seimbang?

Ini design quality.

🟢 PILAR 4 – Validitas Assessment & Continuous Improvement

Pertanyaan utama:

Apakah pengukuran valid dan ada siklus perbaikan?

Metrik:

Alignment RPS dengan CPMK

Rubrik jelas?

Instrumen mengukur sesuai level Bloom?

Ada bukti tindakan perbaikan?

Di sinilah masuk:

👉 Catatan evaluasi hasil
👉 Catatan rencana perbaikan

Itu bagian dari Continuous Quality Improvement (CQI).

3️⃣ Catatan Evaluasi & Rencana Perbaikan Masuk ke Mana?

Masuk ke:

🟢 Pilar 4 – Continuous Improvement

Strukturnya bisa seperti ini:

Hasil Evaluasi:
- CPMK 2 hanya 62%
- Banyak mahasiswa lemah di analisis kasus

Rencana Perbaikan:
- Tambah studi kasus
- Rubrik diperjelas
- Perbaikan metode diskusi

Ini membuktikan siklus:

Plan → Do → Check → Act (PDCA)

Tanpa ini, OBE hanya angka.
      </div>
    </div>
  </section>

  </div>

  <?php include('4footer.php'); ?>
  <!-- //modal dan skrip khusus di halaman ini -->
<script>
  const ctx = document.getElementById('chartLOA').getContext('2d');

  const chartLOA = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        'CPL-1', 'CPL-2', 'CPL-3', 'CPL-4',
        'CPL-5', 'CPL-6', 'CPL-7', 'CPL-8',
        'CPL-9', 'CPL-10', 'CPL-11', 'CPL-12'
      ],
      datasets: [{
        label: 'Persentase Capaian (%)',
        data: [85, 78, 90, 72, 88, 65, 70, 80, 60, 55, 92, 75],
        backgroundColor: 'rgba(54, 162, 235, 0.7)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true,
          max: 100,
          title: {
            display: true,
            text: 'Persentase (%)'
          }
        },
        x: {
          title: {
            display: true,
            text: 'Capaian Pembelajaran Lulusan (CPL)'
          }
        }
      },
      plugins: {
        legend: {
          display: true,
          position: 'top'
        },
        tooltip: {
          enabled: true,
          callbacks: {
            label: function(context) {
              return context.parsed.y + '%';
            }
          }
        }
      }
    }
  });
</script>


  <!-- CTA Modal -->
  <button
    type="button"
    class="btn btn-primary d-none"
    id="demoCTAbutton"
    data-toggle="modal"
    data-target="#demoModal">
  </button>

  <div class="modal fade" id="demoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">🔒 Fitur Premium</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>

        <div class="modal-body">
          Fitur ini hanya tersedia di Paket Pro.<br>
          Nikmati akses penuh dengan upgrade sekarang.
        </div>

        <div class="modal-footer">
          <a href="#" class="btn btn-success">Upgrade Sekarang</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Tutup
          </button>
        </div>

      </div>
    </div>
  </div>


</div>
  <?php include('5script.php'); ?>