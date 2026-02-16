<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lengkapi Data Diri</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  body {
    background-color: #f4f6f9;
  }
  .card-box {
    max-width: 420px;
    margin: 80px auto;
    border-radius: 12px;
  }
</style>
</head>
<body>

<div class="container">
  <div class="card shadow-sm card-box">
    <div class="card-body p-4">

      <h4 class="text-center mb-3">Lengkapi Data Diri</h4>
      <p class="text-center text-muted small mb-4">
        Untuk keamanan akun, silakan lengkapi email dan nomor WhatsApp Anda.
      </p>

      <form action="verifikasi-otp.php" method="post">

        <div class="mb-3">
          <label class="form-label">Alamat Email</label>
          <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Nomor WhatsApp</label>
          <input type="text" class="form-control" name="no_wa" placeholder="08xxxxxxxxxx" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">
          Simpan & Lanjut Verifikasi
        </button>

      </form>

    </div>
  </div>
</div>

</body>
</html>
