<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Verifikasi OTP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  body {
    background-color: #f4f6f9;
  }
  .card-box {
    max-width: 420px;
    margin: 100px auto;
    border-radius: 12px;
  }
  .otp-input {
    text-align: center;
    font-size: 20px;
    letter-spacing: 8px;
  }
</style>
</head>
<body>

<div class="container">
  <div class="card shadow-sm card-box">
    <div class="card-body p-4 text-center">

      <h4 class="mb-3">Verifikasi Kode OTP</h4>
      <p class="text-muted small mb-4">
        Masukkan 6 digit kode yang telah dikirim ke email / WhatsApp Anda.
      </p>

      <form action="menu.php" method="post">

        <div class="mb-3">
          <input type="text" maxlength="6" class="form-control otp-input" name="kode_otp" placeholder="______" required>
        </div>

        <button type="submit" class="btn btn-primary w-100 mb-2">
          Verifikasi & Login
        </button>

        <div class="small">
          <a href="#" class="text-decoration-none">Kirim ulang kode</a>
        </div>

      </form>

    </div>
  </div>
</div>

</body>
</html>
