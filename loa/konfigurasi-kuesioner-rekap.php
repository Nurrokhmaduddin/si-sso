<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Kuesioner</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f6fa;
      margin: 20px;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      gap: 16px;
    }

    .col-12 { grid-column: span 12; }
    .col-6  { grid-column: span 6; }
    .col-4  { grid-column: span 4; }

    @media (max-width: 768px) {
      .col-6, .col-4 {
        grid-column: span 12;
      }
    }

    .card {
      background: #fff;
      padding: 16px;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }

    .title {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .bar {
      height: 10px;
      background: #4CAF50;
      border-radius: 5px;
      margin: 4px 0 8px;
    }

    .small {
      color: #666;
      font-size: 13px;
    }

    .highlight {
      margin-top: 10px;
      font-weight: bold;
      color: #2c3e50;
    }

    .tag {
      display: inline-block;
      background: #eee;
      padding: 4px 8px;
      border-radius: 6px;
      margin: 2px;
      font-size: 12px;
    }

    .type {
      font-size: 12px;
      color: #888;
      margin-bottom: 6px;
    }

    .question {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .summary-line {
      font-size: 14px;
      line-height: 1.6;
    }


  </style>
</head>
<body>

<h2>📊 Dashboard Kuesioner</h2>

<div class="grid">
  <!-- OVERALL INSIGHT -->
  <div class="card col-12">
    <div class="title">📊 Overall Insight</div>
    <p>👥 Total Responden: 10</p>
    <p>🏆 Top Issue: Bug</p>
    <p>⭐ Kepuasan: 4.1 / 5</p>
    <p>🔥 Top Request: Notifikasi</p>
    <div class="highlight">Produk cukup baik, tapi perlu peningkatan performa</div>
  </div>
<!-- RINGKASAN -->
  <div class="card col-12">
    <div class="title">📊 Overall Insight</div>
    <div class="summary-line">
      👥 Total Responden: 10 
    </div>
    <div class="summary-line">
      🏆Top Pilihan Produk: A (4) | 
      🏆Top Channel Favorit: Instagram (5) | 
      🏆Top Metode Pembayaran Favorit: OVO (4) | 
      </div>
    <div class="summary-line">
      ⭐Kepuasan Pengguna: 4.1 / 5 | 
      ⭐Kemudahan Penggunaan: 3.8 / 5 | 
      ⭐Kepuasan Layanan CS: 4.0 / 5 | 
      </div>
    <div class="summary-line">
      🔥Top Issue: Bug (6) | 
      🔥Fitur Diinginkan: Notifikasi (7) | 
      🔥Top Masalah Teknis: Lag (5)
            </div>
    <div class="summary-line">
      🧠 Insight Kendala: Teknis (50%), UX (30%), Lainnya (20%) — Mayoritas masalah di performa & bug
    </div>
    <div class="summary-line">
      📝 Saran Pengguna: Performa, UI redesign, Fitur baru — Fokus ke performa & tampilan
    </div>
    <div class="summary-line">
      🧩 Ide Pengembangan: Dark Mode, Export Data, Integrasi API — Prioritas: Dark Mode & Export
    </div>
  </div>
<div class="card col-12">
  <div class="title">📊 Overall Insight (👥 Total Responden: 10)</div>

  <div class="summary-grid">

    <!-- Selection Top -->
    <div class="summary-item">
      <div class="label">🏆 Top Pilihan Produk</div>
      <div class="value">A (4)</div>
    </div>
    <div class="summary-item">
      <div class="label">📡 Top Channel Favorit</div>
      <div class="value">Instagram (5)</div>
    </div>
    <div class="summary-item">
      <div class="label">💰 Top Metode Pembayaran</div>
      <div class="value">OVO (4)</div>
    </div>

    <!-- Scale -->
    <div class="summary-item scale">
      <div class="label">⭐ Kepuasan Pengguna</div>
      <div class="value">4.1 / 5</div>
    </div>
    <div class="summary-item scale">
      <div class="label">⭐ Kemudahan Penggunaan</div>
      <div class="value">3.8 / 5</div>
    </div>
    <div class="summary-item scale">
      <div class="label">⭐ Kepuasan Layanan CS</div>
      <div class="value">4.0 / 5</div>
    </div>

    <!-- Tagging -->
    <div class="summary-item tagging">
      <div class="label">💡 Top Issue</div>
      <div class="value">Bug (6)</div>
    </div>
    <div class="summary-item tagging">
      <div class="label">💡 Fitur Diinginkan</div>
      <div class="value">Notifikasi (7)</div>
    </div>
    <div class="summary-item tagging">
      <div class="label">⚠ Top Masalah Teknis</div>
      <div class="value">Lag (5)</div>
    </div>

    <!-- Open Text -->
    <div class="summary-item open-text">
      <div class="label">🧠 Insight Kendala</div>
      <div class="value">Teknis (50%), UX (30%), Lainnya (20%) — Mayoritas masalah di performa & bug</div>
    </div>
    <div class="summary-item open-text">
      <div class="label">📝 Saran Pengguna</div>
      <div class="value">Performa, UI redesign, Fitur baru — Fokus ke performa & tampilan</div>
    </div>
    <div class="summary-item open-text">
      <div class="label">🧩 Ide Pengembangan</div>
      <div class="value">Dark Mode, Export Data, Integrasi API — Prioritas: Dark Mode & Export</div>
    </div>
  </div>
</div>

<style>
.summary-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 12px;
  margin-top: 12px;
}

.summary-item {
  background: #f0f4f8;
  border-radius: 10px;
  padding: 10px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.summary-item .label {
  font-size: 13px;
  color: #555;
  margin-bottom: 4px;
}

.summary-item .value {
  font-weight: bold;
  font-size: 16px;
  color: #222;
}

/* warna berbeda per tipe */
.summary-item.scale { background: #fff3e0; }
.summary-item.tagging { background: #e3f2fd; }
.summary-item.open-text { background: #f3e5f5; }

@media (max-width: 768px) {
  .summary-grid { grid-template-columns: repeat(1, 1fr); }
}
</style>

  <!-- REKAP SELECTION -->
  <div class="card col-4">
    <div class="title">Top Pilihan Produk</div>
    A (40%)<div class="bar" style="width:40%"></div>
    B (30%)<div class="bar" style="width:30%"></div>
    C (30%)<div class="bar" style="width:30%"></div>
    <div class="highlight">🏆 Top: A</div>
  </div>

  <div class="card col-4">
    <div class="title">Channel Favorit</div>
    Instagram (50%)<div class="bar" style="width:50%"></div>
    WhatsApp (30%)<div class="bar" style="width:30%"></div>
    Website (20%)<div class="bar" style="width:20%"></div>
    <div class="highlight">🏆 Top: Instagram</div>
  </div>

  <div class="card col-4">
    <div class="title">Metode Pembayaran Favorit</div>
    OVO (40%)<div class="bar" style="width:40%"></div>
    Gopay (35%)<div class="bar" style="width:35%"></div>
    Transfer Bank (25%)<div class="bar" style="width:25%"></div>
    <div class="highlight">🏆 Top: OVO</div>
  </div>

  <!-- REKAP SCALE -->
  <div class="card col-4">
    <div class="title">⭐ Kepuasan Pengguna</div>
    <p>Score: <b>4.1 / 5</b></p>
    <p class="small">Min: 3 | Max: 5</p>
    <div class="small">Distribusi:</div>
    5 ⭐ (3)<div class="bar" style="width:30%"></div>
    4 ⭐ (5)<div class="bar" style="width:50%"></div>
    3 ⭐ (2)<div class="bar" style="width:20%"></div>
  </div>

  <div class="card col-4">
    <div class="title">⭐ Kemudahan Penggunaan</div>
    <p>Score: <b>3.8 / 5</b></p>
    <p class="small">Mayoritas di nilai 4</p>
    <div class="small">Distribusi:</div>
    5 ⭐ (2)<div class="bar" style="width:20%"></div>
    4 ⭐ (4)<div class="bar" style="width:40%"></div>
    3 ⭐ (3)<div class="bar" style="width:30%"></div>
    2 ⭐ (1)<div class="bar" style="width:10%"></div>
  </div>

  <div class="card col-4">
    <div class="title">⭐ Kepuasan Layanan CS</div>
    <p>Score: <b>4.0 / 5</b></p>
    <p class="small">Mayoritas 4-5</p>
    <div class="small">Distribusi:</div>
    5 ⭐ (4)<div class="bar" style="width:40%"></div>
    4 ⭐ (5)<div class="bar" style="width:50%"></div>
    3 ⭐ (1)<div class="bar" style="width:10%"></div>
  </div>

  <!-- REKAP TAGGING -->
  <div class="card col-4">
    <div class="title">💡 Top Issues</div>
    Bug (60%)<div class="bar" style="width:60%"></div>
    Lambat (50%)<div class="bar" style="width:50%"></div>
    UI (30%)<div class="bar" style="width:30%"></div>
    <div class="highlight">Top Issue: Bug</div>
  </div>

  <div class="card col-4">
    <div class="title">💡 Fitur Diinginkan</div>
    Notifikasi (70%)<div class="bar" style="width:70%"></div>
    Dark Mode (40%)<div class="bar" style="width:40%"></div>
    Export (20%)<div class="bar" style="width:20%"></div>
    <div class="highlight">Priority: Notifikasi</div>
  </div>

  <div class="card col-4">
    <div class="title">💡 Masalah Teknis Lainnya</div>
    Lag (50%)<div class="bar" style="width:50%"></div>
    Crash (30%)<div class="bar" style="width:30%"></div>
    Error UI (20%)<div class="bar" style="width:20%"></div>
    <div class="highlight">Top: Lag</div>
  </div>

  <!-- REKAP OPEN TEXT -->
  <div class="card col-4">
    <div class="title">🧠 Insight Kendala</div>
    <p>Teknis (50%)</p>
    <p>UX (30%)</p>
    <p>Lainnya (20%)</p>
    <div class="highlight">Mayoritas masalah di performa & bug</div>
  </div>

  <div class="card col-4">
    <div class="title">📝 Saran Pengguna</div>
    <p>Performa</p>
    <p>UI redesign</p>
    <p>Fitur baru</p>
    <div class="highlight">Fokus ke performa & tampilan</div>
  </div>

  <div class="card col-4">
    <div class="title">🧩 Ide Pengembangan</div>
    <p>Dark Mode</p>
    <p>Export Data</p>
    <p>Integrasi API</p>
    <div class="highlight">Prioritas: Dark Mode & Export</div>
  </div>
</div>

<h2>📝 Daftar Pertanyaan Kuesioner</h2>

<!-- SELECTION -->
<h3>Selection</h3>
<div class="grid">
  <div class="card col-4">
    <div class="type">Closed - Selection</div>
    <div class="question">Q1. Produk mana yang paling sering Anda gunakan?</div>
    <ul>
      <li>A</li><li>B</li><li>C</li>
    </ul>
  </div>

  <div class="card col-4">
    <div class="type">Closed - Selection</div>
    <div class="question">Q2. Channel apa yang paling sering digunakan?</div>
    <ul>
      <li>Instagram</li><li>WhatsApp</li><li>Website</li>
    </ul>
  </div>

  <div class="card col-4">
    <div class="type">Closed - Selection</div>
    <div class="question">Q3. Metode pembayaran favorit Anda?</div>
    <ul>
      <li>OVO</li><li>Gopay</li><li>Transfer Bank</li>
    </ul>
  </div>
</div>

<!-- SCALE -->
<h3>Scale</h3>
<div class="grid">
  <div class="card col-4">
    <div class="type">Closed - Scale</div>
    <div class="question">Q4. Seberapa puas Anda dengan layanan?</div>
    <p>1–5</p>
  </div>

  <div class="card col-4">
    <div class="type">Closed - Scale</div>
    <div class="question">Q5. Seberapa mudah penggunaan aplikasi?</div>
    <p>1–5</p>
  </div>

  <div class="card col-4">
    <div class="type">Closed - Scale</div>
    <div class="question">Q6. Seberapa puas dengan layanan CS?</div>
    <p>1–5</p>
  </div>
</div>

<!-- OPEN TEXT -->
<h3>Open Text</h3>
<div class="grid">
  <div class="card col-4">
    <div class="type">Open Text</div>
    <div class="question">Q7. Kendala utama Anda?</div>
  </div>

  <div class="card col-4">
    <div class="type">Open Text</div>
    <div class="question">Q8. Saran untuk meningkatkan layanan?</div>
  </div>

  <div class="card col-4">
    <div class="type">Open Text</div>
    <div class="question">Q9. Ide pengembangan fitur baru?</div>
  </div>
</div>

</body>
</html>