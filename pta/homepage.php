<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>SI-PTA | Sistem Informasi Tugas Akhir</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      scroll-behavior: smooth;
    }
    .hero {
      background: linear-gradient(120deg, #198754, #146c43);
      color: #fff;
      padding: 90px 0;
    }
    .section-padding {
      padding: 80px 0;
    }
    .icon-box i {
      font-size: 32px;
      color: #198754;
    }
    .demo-card:hover {
      transform: translateY(-6px);
      transition: 0.3s;
    }
  </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold text-success" href="#">SI-PTA</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navMenu" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#masalah">Masalah</a></li>
        <li class="nav-item"><a class="nav-link" href="#solusi">Solusi</a></li>
        <li class="nav-item"><a class="nav-link" href="#demo">Demo</a></li>
        <li class="nav-item">
          <a class="btn btn-success ms-3" href="#kontak">Hubungi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero text-center">
  <div class="container">
    <h1 class="fw-bold">SI-PTA</h1>
    <p class="lead mt-3">
      Sistem Informasi Pengelolaan Tugas Akhir  
      untuk Monitoring, Dokumentasi, dan Pelaporan Akademik
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

<!-- MASALAH -->
<section id="masalah" class="section-padding">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Tantangan Pengelolaan Tugas Akhir</h2>
    <div class="row g-4 mt-4">
      <div class="col-md-3 icon-box">
        <i class="bi bi-person-x"></i>
        <p class="mt-3">Progres mahasiswa sulit dipantau secara menyeluruh</p>
      </div>
      <div class="col-md-3 icon-box">
        <i class="bi bi-stack"></i>
        <p class="mt-3">Dokumentasi bimbingan masih manual</p>
      </div>
      <div class="col-md-3 icon-box">
        <i class="bi bi-hourglass-split"></i>
        <p class="mt-3">Perencanaan ujian sering lambat dan bentrok</p>
      </div>
      <div class="col-md-3 icon-box">
        <i class="bi bi-file-earmark-excel"></i>
        <p class="mt-3">Data pelaporan sulit disiapkan saat dibutuhkan</p>
      </div>
    </div>
  </div>
</section>

<!-- SOLUSI -->
<section id="solusi" class="bg-light section-padding">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Solusi Terintegrasi SI-PTA</h2>
    <div class="row g-4 mt-4">
      <div class="col-md-4">
        <div class="card h-100 p-4">
          <h5 class="fw-bold">Monitoring Progres TA</h5>
          <p>Progres mahasiswa tercatat dan dapat dipantau real-time.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 p-4">
          <h5 class="fw-bold">Administrasi & Bimbingan</h5>
          <p>Semua aktivitas bimbingan terdokumentasi rapi.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 p-4">
          <h5 class="fw-bold">Pelaporan & Akreditasi</h5>
          <p>Data siap digunakan untuk evaluasi dan kebutuhan akreditasi.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ROLE BASED -->
<section class="section-padding">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">Satu Sistem, Berbagai Peran</h2>

    <ul class="nav nav-pills justify-content-center mb-4">
      <li class="nav-item">
        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#pta-mhs">
          Mahasiswa
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pta-dsn">
          Dosen
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pta-prd">
          Prodi
        </button>
      </li>
    </ul>

    <div class="tab-content text-center">
      <div id="pta-mhs" class="tab-pane fade show active">
        <p>
          Mengelola progres tugas akhir, riwayat bimbingan, dan status ujian.
        </p>
      </div>
      <div id="pta-dsn" class="tab-pane fade">
        <p>
          Memantau mahasiswa bimbingan dan mengelola catatan akademik.
        </p>
      </div>
      <div id="pta-prd" class="tab-pane fade">
        <p>
          Monitoring keseluruhan progres TA dan rekap data prodi.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- DEMO -->
<section id="demo" class="bg-light section-padding">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Jelajahi Demo SI-PTA (Read-Only)</h2>
    <p class="mb-5">
      Demo tanpa login untuk melihat alur dan tampilan sistem.
    </p>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card demo-card p-4">
          <h5>Demo Mahasiswa</h5>
          <a href="#" class="btn btn-outline-success mt-3">
            Masuk Demo
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card demo-card p-4">
          <h5>Demo Dosen</h5>
          <a href="#" class="btn btn-outline-success mt-3">
            Masuk Demo
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card demo-card p-4">
          <h5>Demo Prodi</h5>
          <a href="#" class="btn btn-outline-success mt-3">
            Masuk Demo
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section id="kontak" class="section-padding text-center">
  <div class="container">
    <h2 class="fw-bold">Siap Menerapkan SI-PTA di Prodi Anda?</h2>
    <p class="mt-3">
      Hubungi kami untuk presentasi, demo lanjutan, dan diskusi implementasi.
    </p>
    <a href="mailto:info@domainanda.ac.id" class="btn btn-success btn-lg mt-3">
      Request Presentasi
    </a>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-4">
  <p class="mb-0">
    © 2025 SI-PTA | PT Tanjung Mulia Informatika
  </p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
