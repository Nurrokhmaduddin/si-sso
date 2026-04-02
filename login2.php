

<!-- ================= CHANGE PASSWORD PAGE ================= -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Ganti Password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="height:100vh;">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card shadow">
        <div class="card-body">

          <h4 class="text-center mb-3">🔒 Password Anda perlu diperbarui</h4>

          <div class="alert alert-info">
            Password telah kedaluwarsa, terakhir ganti 90 hari.<br>
            Silakan buat password baru untuk melanjutkan.
          </div>

          <form onsubmit="return updatePassword(event)">
            <div class="mb-3">
              <label>Nama</label>
              <input type="text" class="form-control" value="Admin LOA" disabled>
            </div>
            <div class="mb-3">
              <label>Password Lama</label>
              <input type="password" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>Password Baru</label>
              <input type="password" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>Konfirmasi Password</label>
              <input type="password" class="form-control" required>
            </div>

            <small class="text-muted">
              Minimal 8 karakter, kombinasi huruf & angka
            </small>

            <button class="btn btn-warning w-100 mt-3">Simpan Password</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<script>
function updatePassword(e){
  e.preventDefault();
  window.location.href = 'success.html';
}
</script>

</body>
</html>
