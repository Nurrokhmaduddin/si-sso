<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda | Sistem Informasi</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      margin: 0;
      background: #f4f6f9;
    }

    /* ===== NAVBAR ===== */
    .navbar {
      height: 56px;
      background: #1f2937;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 16px;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
    }

    .navbar-left {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .toggle-btn {
      font-size: 20px;
      cursor: pointer;
      user-select: none;
    }

    .brand {
      font-size: 16px;
      font-weight: 600;
    }

    .user-menu {
      position: relative;
    }

    .user-name {
      cursor: pointer;
      font-size: 14px;
      font-weight: 500;
    }

    .dropdown {
      display: none;
      position: absolute;
      right: 0;
      top: 36px;
      background: #ffffff;
      color: #1f2937;
      border-radius: 8px;
      width: 180px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      overflow: hidden;
    }

    .dropdown a {
      display: block;
      padding: 12px 16px;
      font-size: 14px;
      color: #374151;
      text-decoration: none;
    }

    .dropdown a:hover {
      background: #f3f4f6;
    }

    .user-menu:hover .dropdown {
      display: block;
    }

    /* ===== SIDEBAR ===== */
    .sidebar {
      position: fixed;
      top: 56px;
      left: 0;
      width: 220px;
      height: calc(100vh - 56px);
      background: #111827;
      color: #cbd5e1;
      padding-top: 16px;
      transition: width 0.3s;
      overflow: hidden;
    }

    .sidebar.collapsed {
      width: 60px;
    }

    .sidebar a {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 12px 16px;
      color: inherit;
      text-decoration: none;
      font-size: 14px;
    }

    .sidebar a:hover {
      background: #1f2937;
    }

    .sidebar span {
      transition: opacity 0.2s;
    }

    .sidebar.collapsed span {
      opacity: 0;
    }

    /* ===== CONTENT ===== */
    .content {
      margin-top: 56px;
      margin-left: 220px;
      padding: 24px;
      transition: margin-left 0.3s;
    }

    .content.expanded {
      margin-left: 60px;
    }

    .card {
      background: #ffffff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.08);
      margin-bottom: 20px;
    }

    .card h2 {
      margin: 0 0 8px;
      font-size: 18px;
    }

    .card p {
      font-size: 14px;
      color: #6b7280;
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <div class="navbar">
    <div class="navbar-left">
      <div class="toggle-btn" onclick="toggleSidebar()">☰</div>
      <div class="brand">Sistem Informasi</div>
    </div>

    <div class="user-menu">
      <div class="user-name">Harun Ruddin ▾</div>
      <div class="dropdown">
        <a href="#">Profil</a>
        <a href="#">Log Aktivitas</a>
        <a href="#">Logout</a>
      </div>
    </div>
  </div>

  <!-- SIDEBAR -->
  <div class="sidebar" id="sidebar">
    <a href="#"><span>🏠</span><span>Beranda</span></a>
    <a href="#"><span>📊</span><span>Master Data</span></a>
    <a href="#"><span>📁</span><span>Proses Aktivitas</span></a>
    <a href="#"><span>📁</span><span>Manaj Aktivitas</span></a>
    <a href="#"><span>📁</span><span>Monitor Aktivitas</span></a>
    <a href="#"><span>⚙️</span><span>Pengaturan</span></a>
    <a href="../menu.php"><span>-></span><span>Kembali Menu Utama</span></a>
  </div>

  <!-- CONTENT -->
  <div class="content" id="content">
    <div class="card">
      <h2>Selamat Datang</h2>
      <p>Ini adalah halaman beranda sistem informasi Anda.</p>
    </div>

    <div class="card">
      <h2>Ringkasan</h2>
      <p>Tambahkan widget, grafik, atau informasi penting di sini.</p>
    </div>
  </div>

  <!-- SCRIPT -->
  <script>
    function toggleSidebar() {
      document.getElementById('sidebar').classList.toggle('collapsed');
      document.getElementById('content').classList.toggle('expanded');
    }
  </script>

</body>
</html>
