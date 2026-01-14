<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Sistem Informasi</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      margin: 0;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #f5f7fa, #e4e9f0);
    }

    .login-card {
      background: #ffffff;
      width: 100%;
      max-width: 380px;
      padding: 32px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }

    .login-card h1 {
      margin: 0 0 8px;
      font-size: 24px;
      font-weight: 600;
      text-align: center;
      color: #1f2937;
    }

    .login-card p {
      margin: 0 0 24px;
      font-size: 14px;
      text-align: center;
      color: #6b7280;
    }

    .form-group {
      margin-bottom: 16px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-size: 13px;
      color: #374151;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px 14px;
      border-radius: 8px;
      border: 1px solid #d1d5db;
      font-size: 14px;
    }

    input:focus {
      outline: none;
      border-color: #2563eb;
      box-shadow: 0 0 0 3px rgba(37,99,235,0.15);
    }

    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: #2563eb;
      color: #ffffff;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
    }

    button:hover {
      background: #1d4ed8;
    }

    .extra-links {
      margin-top: 16px;
      text-align: center;
      font-size: 13px;
    }

    .extra-links a {
      color: #2563eb;
      text-decoration: none;
      margin: 0 6px;
    }

    .extra-links a:hover {
      text-decoration: underline;
    }

    .footer {
      margin-top: 24px;
      text-align: center;
      font-size: 12px;
      color: #9ca3af;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <h1>Selamat Datang</h1>
    <p>Silakan login untuk melanjutkan</p>

    <form onsubmit="return handleLogin()">
      <div class="form-group">
        <label for="username">Username / Email</label>
        <input type="text" id="username" placeholder="masukkan username" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="masukkan password" required>
      </div>

      <button type="submit">Login</button>
    </form>

    <div class="extra-links">
      <a href="#">Lupa Password</a> |
      <a href="#">Daftar Pengguna</a>
    </div>

    <div class="footer">
      © <?= date('Y') ?> Sistem Informasi
    </div>
  </div>

  <script>
    function handleLogin() {
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;

      if (username === 'admin' && password === 'admin') {
        window.location.href = 'menu.php';
      } else {
        alert('Username atau password salah!');
      }

      return false; // mencegah submit form default
    }
  </script>

</body>
</html>
