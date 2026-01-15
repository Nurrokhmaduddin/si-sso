<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>SI-LOA for OBE | Sistem Informasi Akademik</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Icon -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      scroll-behavior: smooth;
    }
    .hero {
      background: linear-gradient(120deg, #0d6efd, #0a58ca);
      color: white;
      padding: 90px 0;
    }
    .section-padding {
      padding: 80px 0;
    }
    .icon-box i {
      font-size: 32px;
      color: #0d6efd;
    }
    .demo-card:hover {
      transform: translateY(-5px);
      transition: 0.3s;
    }
  </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">SI-LOA</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navMenu" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#problem">Masalah</a></li>
        <li class="nav-item"><a class="nav-link" href="#fitur">Solusi</a></li>
        <li class="nav-item"><a class="nav-link" href="#demo">Demo</a></li>
        <li class="nav-item"><a class="btn btn-primary ms-3" href="#kontak">Hubungi</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero text-center">
  <div class="container">
    <h1 class="fw-bold">SI-LOA for OBE</h1>
    <p class="lead mt-3">
      Sistem Monitoring & Pelaporan Capaian Pembelajaran Berbasis OBE  
      untuk Prodi, Dosen, dan Mahasiswa
    </p>
    <div class="mt-4">
      <a href="#demo" class="btn btn-light btn-lg me-2">
        <i class="bi bi-eye"></i> Jelajahi Demo
      </a>
      <a href="#kontak" class="btn btn-outline-light btn-lg">
        <i class="bi bi-telephone"></i> Hubungi Kami
      </a>
    </div>
  </div>
</section>

<!-- PROBLEM -->
<section id="problem" class="section-padding">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Tantangan Pengelolaan Akademik</h2>
    <div class="row g-4 mt-4">
      <div class="col-md-3 icon-box">
        <i class="bi bi-exclamation-circle"></i>
        <p class="mt-3">Pembimbingan sulit dipantau oleh Prodi</p>
      </div>
      <div class="col-md-3 icon-box">
        <i class="bi bi-folder-x"></i>
        <p class="mt-3">Dokumentasi manual dan lambat</p>
      </div>
      <div class="col-md-3 icon-box">
        <i class="bi bi-graph-down"></i>
        <p class="mt-3">Progres mahasiswa tidak terukur</p>
      </div>
      <div class="col-md-3 icon-box">
        <i class="bi bi-file-earmark-text"></i>
        <p class="mt-3">Pelaporan OBE & akreditasi menyita waktu</p>
      </div>
    </div>
  </div>
</section>

<!-- SOLUSI -->
<section id="fitur" class="bg-light section-padding">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Solusi Terintegrasi</h2>
    <div class="row g-4 mt-4">
      <div class="col-md-4">
        <div class="card h-100 p-4">
          <h5 class="fw-bold">Monitoring Progres</h5>
          <p>Pantau capaian mahasiswa secara real-time dan historis.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 p-4">
          <h5 class="fw-bold">Administrasi Digital</h5>
          <p>Semua proses terdokumentasi rapi dan terstruktur.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 p-4">
          <h5 class="fw-bold">Pelaporan OBE</h5>
          <p>Data siap digunakan untuk evaluasi dan akreditasi.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ROLE BASED -->
<section class="section-padding">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">Dirancang untuk Setiap Peran</h2>

    <ul class="nav nav-pills justify-content-center mb-4">
      <li class="nav-item"><button class="nav-link active" data-bs-toggle="pill" data-bs-target="#mhs">Mahasiswa</button></li>
      <li class="nav-item"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#dsn">Dosen</button></li>
      <li class="nav-item"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#prd">Prodi</button></li>
    </ul>

    <div class="tab-content text-center">
      <div id="mhs" class="tab-pane fade show active">
        <p>Mencatat aktivitas, memantau progres, dan riwayat pembimbingan.</p>
      </div>
      <div id="dsn" class="tab-pane fade">
        <p>Memantau mahasiswa bimbingan dan rekap beban dosen.</p>
      </div>
      <div id="prd" class="tab-pane fade">
        <p>Monitoring keseluruhan dan data siap pelaporan.</p>
      </div>
    </div>
  </div>
</section>

<!-- DEMO -->
<section id="demo" class="bg-light section-padding">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Jelajahi Demo (Read-Only)</h2>
    <div class="row g-4 mt-4">
      <div class="col-md-4">
        <div class="card demo-card p-4">
          <h5>Demo Mahasiswa</h5>
          <a href="#" class="btn btn-outline-primary mt-3">Masuk Demo</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card demo-card p-4">
          <h5>Demo Dosen</h5>
          <a href="#" class="btn btn-outline-primary mt-3">Masuk Demo</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card demo-card p-4">
          <h5>Demo Prodi</h5>
          <a href="#" class="btn btn-outline-primary mt-3">Masuk Demo</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section id="kontak" class="section-padding text-center">
  <div class="container">
    <h2 class="fw-bold">Siap Diterapkan di Prodi Anda?</h2>
    <p class="mt-3">Hubungi kami untuk presentasi dan diskusi implementasi.</p>
    <a href="mailto:info@domainanda.ac.id" class="btn btn-primary btn-lg mt-3">
      Request Presentasi
    </a>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-4">
  <p class="mb-0">© 2025 SI-LOA for OBE | PT Tanjung Mulia Informatika</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
