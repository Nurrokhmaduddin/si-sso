<?php include('../includes/header.php'); ?>
<?php include('../includes/topbar.php'); ?>
<?php include('../includes/sidebar.php'); ?>



<!-- Modal Reminder Anggaran -->
<div class="modal fade" id="modalReminderAnggaran" tabindex="-1" role="dialog" aria-labelledby="modalReminderAnggaranLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modalReminderAnggaranLabel">
          ⚠️ Reminder Anggaran Menipis (Top 5)
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <p class="mb-3">
          Berikut <b>5 mata anggaran tipe pengeluaran</b> dengan sisa anggaran paling tipis pada tahun berjalan:
        </p>

        <div class="table-responsive">
          <table class="table table-bordered table-sm">
            <thead class="thead-dark text-center">
              <tr>
                <th>Peringkat</th>
                <th>Lembaga</th>
                <th>Mata Anggaran</th>
                <th>Anggaran Setahun</th>
                <th>Realisasi Berjalan</th>
                <th>%</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">1</td>
                <td>IABEE</td>
                <td>Operasional Laboratorium</td>
                <td class="text-right">500.000.000</td>
                <td class="text-right text-danger">475.000.000</td>
                <td class="text-center text-danger"><b>95%</b></td>
              </tr>
              <tr>
                <td class="text-center">2</td>
                <td>IABEE</td>
                <td>Biaya Sistem & Hosting</td>
                <td class="text-right">300.000.000</td>
                <td class="text-right text-danger">270.000.000</td>
                <td class="text-center text-warning"><b>90%</b></td>
              </tr>
              <tr>
                <td class="text-center">3</td>
                <td>BATAP</td>
                <td>Pelatihan & Sertifikasi</td>
                <td class="text-right">200.000.000</td>
                <td class="text-right text-warning">175.000.000</td>
                <td class="text-center text-warning"><b>87,5%</b></td>
              </tr>
              <tr>
                <td class="text-center">4</td>
                <td>LAM Teknik</td>
                <td>Pemeliharaan Gedung</td>
                <td class="text-right">400.000.000</td>
                <td class="text-right">340.000.000</td>
                <td class="text-center"><b>85%</b></td>
              </tr>
              <tr>
                <td class="text-center">5</td>
                <td>LAM Teknik</td>
                <td>Lisensi Software</td>
                <td class="text-right">150.000.000</td>
                <td class="text-right">120.000.000</td>
                <td class="text-center"><b>80%</b></td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- <small class="text-muted">
          * Persentase = (Realisasi / Anggaran Setahun) × 100%
        </small> -->
      </div>

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <!-- <a href="#" class="btn btn-danger">Lihat Detail Anggaran</a> -->
      </div>

    </div>
  </div>
</div>

<!-- Script agar modal otomatis muncul -->
<script>
  $(document).ready(function () {
    $('#modalReminderAnggaran').modal('show');
  });
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const modal = new bootstrap.Modal(
    document.getElementById('modalReminderAnggaran')
  );
  modal.show();
});
</script>




<div class="content">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <div>
      <h2 class="page-title mb-0">📊 Dashboard</h2>
      <p class="page-description text-muted">Ringkasan kondisi keuangan dan aktivitas sistem perusahaan.</p>
    </div>
    <!-- <button class="btn btn-sm btn-primary shadow-sm">🔄 Refresh Data</button> -->
  </div>

  <!-- Ringkasan Utama -->
  <div class="row g-3 mb-4">
    <div class="col-md-4">
      <div class="card border-0 shadow-sm rounded-3" style="background: linear-gradient(135deg, #1cc88a, #198754); color: white;">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h6 class="text-white-50 mb-1">Total Aset</h6>
              <h3 class="mb-0 fw-bold">Rp 125.000.000</h3>
            </div>
            <div style="font-size:2rem;">💰</div>
          </div>
          <small class="text-white-50">+5% dari bulan lalu</small>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0 shadow-sm rounded-3" style="background: linear-gradient(135deg, #f6c23e, #dda20a); color: white;">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h6 class="text-white-50 mb-1">Total Liabilitas</h6>
              <h3 class="mb-0 fw-bold">Rp 45.000.000</h3>
            </div>
            <div style="font-size:2rem;">📉</div>
          </div>
          <small class="text-white-50">Stabil dibanding bulan lalu</small>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0 shadow-sm rounded-3" style="background: linear-gradient(135deg, #4e73df, #224abe); color: white;">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h6 class="text-white-50 mb-1">Total Equitas</h6>
              <h3 class="mb-0 fw-bold">Rp 80.000.000</h3>
            </div>
            <div style="font-size:2rem;">💼</div>
          </div>
          <small class="text-white-50">+2% dibanding bulan lalu</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Bagian Grafik -->
  <div class="card border-0 shadow-sm rounded-3 mb-4">
    <div class="card-header bg-light d-flex justify-content-between align-items-center">
      <h5 class="mb-0 fw-semibold">📈 Grafik Arus Kas</h5>
      <button class="btn btn-outline-secondary btn-sm">Detail Laporan</button>
    </div>
    <div class="card-body">
      <canvas id="cashFlowChart" style="width:100%; height:320px;"></canvas>
    </div>
  </div>

    <!-- Bagian Anggaran vs Realisasi -->
  <div class="card border-0 shadow-sm rounded-3 mb-4">
    <div class="card-header bg-light d-flex justify-content-between align-items-center">
      <h5 class="mb-0 fw-semibold">📈 Realisasi Anggaran</h5>
      <button class="btn btn-outline-secondary btn-sm">Detail Laporan</button>
    </div>
    <div class="card-body">
      <canvas id="budgetChart" style="width:100%; height:320px;"></canvas>
    </div>
  </div>


  <!-- Script Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('cashFlowChart').getContext('2d');

    // Data dummy contoh arus kas bulanan
    const data = {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt'],
      datasets: [
        {
          label: 'Pemasukan',
          data: [12000000, 15000000, 18000000, 17000000, 21000000, 20000000, 22000000, 24000000, 26000000, 25000000],
          backgroundColor: 'rgba(28, 200, 138, 0.2)',
          borderColor: '#1cc88a',
          borderWidth: 2,
          fill: true,
          tension: 0.3
        },
        {
          label: 'Pengeluaran',
          data: [8000000, 9000000, 10000000, 9500000, 11000000, 10500000, 12000000, 13000000, 14000000, 13500000],
          backgroundColor: 'rgba(231, 74, 59, 0.2)',
          borderColor: '#e74a3b',
          borderWidth: 2,
          fill: true,
          tension: 0.3
        }
      ]
    };

    // Opsi tampilan grafik
    const options = {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: 'top',
          labels: { boxWidth: 15, color: '#444' }
        },
        title: {
          display: true,
          text: 'Arus Kas Bulanan (Contoh Data)',
          font: { size: 14 },
          color: '#333'
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            callback: value => 'Rp ' + value.toLocaleString('id-ID'),
            color: '#555'
          },
          grid: { color: '#eee' }
        },
        x: {
          ticks: { color: '#555' },
          grid: { display: false }
        }
      }
    };

    // Inisialisasi Chart
    new Chart(ctx, {
      type: 'line',
      data: data,
      options: options
    });
  </script>



<script>
const ctx1 = document.getElementById('budgetChart').getContext('2d');

const labels = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'];

const data1 = {
  labels: labels,
  datasets: [
    {
      label: 'Anggaran Pemasukan',
      data: [10000000, 12000000, 11000000, 13000000, 12500000, 14000000],
      backgroundColor: '#a8e6cf' // hijau muda
    },
    {
      label: 'Realisasi Pemasukan',
      data: [9000000, 10000000, 10500000, 12000000, 11500000, 13500000],
      backgroundColor: '#1cc88a' // hijau pekat
    },
    {
      label: 'Anggaran Pengeluaran',
      data: [6000000, 7000000, 6500000, 7500000, 7200000, 8000000],
      backgroundColor: '#f5b7b1' // merah muda
    },
    {
      label: 'Realisasi Pengeluaran',
      data: [5500000, 6800000, 6000000, 7200000, 7000000, 7800000],
      backgroundColor: '#e74a3b' // merah pekat
    }
  ]
};

const options1 = {
  responsive: true,
  maintainAspectRatio: false,
  plugins: {
    title: {
      display: true,
      text: 'Anggaran & Realisasi Keuangan Tahun 2025',
      font: { size: 16 }
    },
    tooltip: {
      callbacks: {
        label: (ctx) => `${ctx.dataset.label}: Rp ${ctx.raw.toLocaleString('id-ID')}`
      }
    },
    legend: {
      position: 'top'
    }
  },
  scales: {
    x: {
      title: {
        display: true,
        text: 'Bulan'
      }
    },
    y: {
      beginAtZero: true,
      title: {
        display: true,
        text: 'Nominal (Rp)'
      },
      ticks: {
        callback: value => 'Rp ' + value.toLocaleString('id-ID')
      }
    }
  }
};

new Chart(ctx1, {
  type: 'bar',
  data: data1,
  options: options1
});
</script>



  <!-- Aktivitas Terbaru -->
  <!-- <div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-light d-flex justify-content-between align-items-center">
      <h5 class="mb-0 fw-semibold">🕓 Aktivitas Terbaru</h5>
      <a href="#" class="btn btn-link btn-sm">Lihat Semua</a>
    </div>
    <div class="card-body">
      <table class="table align-middle mb-0">
        <thead class="table-light">
          <tr>
            <th style="width:40px;">#</th>
            <th>Tanggal</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th>Nominal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>15 Okt 2025</td>
            <td>Pembelian peralatan lab komputer</td>
            <td><span class="badge bg-primary">Aset</span></td>
            <td>Rp 12.500.000</td>
          </tr>
          <tr>
            <td>2</td>
            <td>14 Okt 2025</td>
            <td>Penerimaan dana hibah pendidikan</td>
            <td><span class="badge bg-success">Pendapatan</span></td>
            <td>Rp 25.000.000</td>
          </tr>
          <tr>
            <td>3</td>
            <td>10 Okt 2025</td>
            <td>Pembayaran tagihan listrik kantor</td>
            <td><span class="badge bg-danger">Beban</span></td>
            <td>Rp 1.200.000</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div> -->
</div>


<?php include('../includes/footer.php'); ?>

kasih rekomendasi redaksional untuk deskripsi halaman