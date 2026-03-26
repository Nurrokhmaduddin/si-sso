<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SIMAK BATAP - Login dengan Carousel</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #f7f8fa;
    }

    .container-fluid {
      height: 100vh;
      padding: 0;
    }

    /* KIRI: Carousel */
    .left-carousel {
      height: 100vh;
      background: #ff7a18; /* fallback */
      overflow: hidden;
    }

    .carousel-inner img {
      object-fit: cover;
      height: 100vh;
      width: 100%;
      user-select: none;
    }

    /* KANAN: Login area */
    .right-login {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 3rem;
      background: white;
      box-shadow: -4px 0 15px rgb(0 0 0 / 0.05);
    }

    .app-title {
      color: #ff7a18;
      font-weight: 700;
      font-size: 2.8rem;
      margin-bottom: 0.2rem;
      user-select: none;
    }

    .app-subtitle {
      font-weight: 300;
      font-size: 1.2rem;
      margin-bottom: 2rem;
      color: #555;
      user-select: none;
    }

    .login-card {
      max-width: 380px;
      width: 100%;
    }

    .btn-login {
      background-color: #ff7a18;
      border: none;
      border-radius: 8px;
      height: 45px;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .btn-login:hover {
      background-color: #e96b10;
    }

    @media (max-width: 992px) {
      .left-carousel {
        display: none;
      }
      .right-login {
        box-shadow: none;
        padding: 2rem;
      }
    }
  </style>
</head>
<body>

<div class="container-fluid d-flex flex-row">

  <!-- KIRI: Carousel -->
  <div class="left-carousel col-lg-7 d-none d-lg-block">
    <div id="carouselExampleIndicators" class="carousel slide h-100" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner h-100">
        <div class="carousel-item active">
          <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="Slide 1" />
        </div>
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80" alt="Slide 2" />
        </div>
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1531545514251-6e9e76f4c6b6?auto=format&fit=crop&w=800&q=80" alt="Slide 3" />
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Berikutnya</span>
      </button>

    </div>
  </div>

  <!-- KANAN: Login -->
  <div class="right-login col-lg-5 col-12 d-flex flex-column align-items-center justify-content-center">
    <img src="logo.jpeg" height="140px">
    <div class="app-title">SIMAK BATAP</div>
    <div class="app-subtitle text-center">Sistem Informasi Manajemen Anggaran & Keuangan</div>

    <div class="login-card">
      <form>
        <div class="mb-3">
          <label for="username" class="form-label fw-semibold">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Masukkan username" required />
        </div>

        <div class="mb-3">
          <label for="password" class="form-label fw-semibold">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Masukkan password" required />
        </div>

        <button type="submit" class="btn btn-login w-100 text-white">Login</button>
      </form>
    </div>

    <small class="text-muted mt-4">&copy; 2026 SIMAK BATAP</small>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>