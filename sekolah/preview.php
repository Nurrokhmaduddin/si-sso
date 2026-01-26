<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Preview Perbandingan Font Angka 6 & 8</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Inter:wght@400;600&family=Source+Sans+Pro:wght@400;600&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f8f9fa;
      padding: 30px;
    }

    h1 {
      margin-bottom: 10px;
    }

    p.note {
      color: #555;
      margin-bottom: 30px;
    }

    .font-box {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
    }

    .font-name {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .numbers {
      font-size: 64px;
      letter-spacing: 8px;
    }

    .robot { font-family: 'Roboto', sans-serif; }
    .inter { font-family: 'Inter', sans-serif; }
    .source { font-family: 'Source Sans Pro', sans-serif; }
    .open { font-family: 'Open Sans', sans-serif; }

    .hint {
      margin-top: 8px;
      font-size: 14px;
      color: #666;
    }
  </style>
</head>
<body>

  <h1>Preview Font Angka (Fokus 6 & 8)</h1>
  <p class="note">
    Digunakan untuk menguji keterbacaan angka, khususnya bagi pengguna usia 40+.
    Coba perhatikan perbedaan bentuk angka <strong>6</strong> dan <strong>8</strong>.
  </p>

  <div class="font-box">
    <div class="font-name">Roboto</div>
    <div class="numbers robot">6 8 66 88 6868</div>
    <div class="hint">Rekomendasi utama (jelas & stabil di layar dan cetak)</div>
  </div>

  <div class="font-box">
    <div class="font-name">Inter</div>
    <div class="numbers inter">6 8 66 88 6868</div>
    <div class="hint">Sangat baik untuk UI & data numerik</div>
  </div>

  <div class="font-box">
    <div class="font-name">Source Sans Pro</div>
    <div class="numbers source">6 8 66 88 6868</div>
    <div class="hint">Aman untuk tabel & laporan</div>
  </div>

  <div class="font-box">
    <div class="font-name">Open Sans</div>
    <div class="numbers open">6 8 66 88 6868</div>
    <div class="hint">Netral dan mudah dibaca</div>
  </div>

</body>
</html>
