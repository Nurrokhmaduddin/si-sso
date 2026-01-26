<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Utama</title>

  <!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- AdminLTE CSS (v3 tetap bisa dipakai, tapi JS harus diubah nanti) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<!-- overlayScrollbars -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.3/css/OverlayScrollbars.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

  <style>
    * {
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      margin: 0;
      background: #f5f7fa;
      color: #1f2937;
    }

    /* ===== NAVBAR ===== */
    .navbar {
      height: 64px;
      background: #ffffff;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 24px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.06);
    }

    .navbar-title {
      font-size: 18px;
      font-weight: 600;
    }

    .user-menu {
      position: relative;
    }

    .user-name {
      cursor: pointer;
      font-size: 14px;
      font-weight: 500;
      padding: 8px 12px;
      border-radius: 6px;
    }

    .user-name:hover {
      background: #f3f4f6;
    }

    .dropdown {
      display: none;
      position: absolute;
      right: 0;
      top: 44px;
      background: #ffffff;
      border-radius: 8px;
      width: 180px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      overflow: hidden;
      z-index: 10;
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

    /* ===== CONTENT ===== */
    .container {
      padding: 32px;
      max-width: 1200px;
      margin: auto;
    }

    .menu-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
      gap: 20px;
    }

    .menu-card {
      background: #ffffff;
      border-radius: 12px;
      padding: 24px;
      text-align: center;
      cursor: pointer;
      box-shadow: 0 6px 18px rgba(0,0,0,0.06);
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .menu-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 28px rgba(0,0,0,0.1);
    }

    .menu-card h3 {
      margin: 0;
      font-size: 16px;
      font-weight: 600;
    }

    .menu-card p {
      margin-top: 6px;
      font-size: 13px;
      color: #6b7280;
    }

    /* ===== FOOTER ===== */
    .footer {
      text-align: center;
      padding: 20px;
      font-size: 12px;
      color: #9ca3af;
    }
  </style>
  <style type="text/css">
    .menu-card {
  display: block;
  text-decoration: none;
  color: inherit;
  background: #ffffff;
  border-radius: 12px;
  padding: 24px;
  text-align: center;
  cursor: pointer;
  box-shadow: 0 6px 18px rgba(0,0,0,0.06);
  transition: transform 0.2s, box-shadow 0.2s;
}

.menu-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 10px 28px rgba(0,0,0,0.1);
}

  </style>
</head>
<body>

  <!-- NAVBAR -->
  <div class="navbar">
    <div class="navbar-title">Menu Utama</div>

    <div class="user-menu">
      <div class="user-name">Harun Ruddin ▾</div>
      <div class="dropdown">
        <a href="#">Profil</a>
        <a href="#">Log Aktivitas</a>
        <a href="#">Logout</a>
      </div>
    </div>
  </div>

  <!-- CONTENT -->
  <div class="container">
    <div class="menu-grid">
      <a href="sso/" class="menu-card">
        <h3>SSO</h3>
        <p>Single Sign-On</p>
      </a>
      
      <div class="menu-card"><h3>Proses A</h3><p>Modul Proses A</p></div>
      <div class="menu-card"><h3>Proses B</h3><p>Modul Proses B</p></div>
      <div class="menu-card"><h3>Akad</h3><p>Manajemen Akad</p></div>

      <a href="loa/" class="menu-card">
        <h3>LOA</h3>
        <p>Learning Outcome Assessment</p>
      </a>

      <a href="pta/" class="menu-card">
        <h3>PTA</h3>
        <p>Pengelolaan Tugas Akhir</p>
      </a>

      <div class="menu-card"><h3>LAB</h3><p>Manajemen Laboratorium</p></div>
      <div class="menu-card"><h3>CME</h3><p>Conference Management Eventr</p></div>

      <div class="menu-card"><h3>Marketing</h3><p>Divisi Pemasaran</p></div>
      <div class="menu-card"><h3>Sales</h3><p>Divisi Penjualan</p></div>
      <div class="menu-card"><h3>Operation</h3><p>Operasional</p></div>
      <div class="menu-card"><h3>Finance</h3><p>Keuangan</p></div>

      <div class="menu-card"><h3>Office</h3><p>Administrasi Kantor</p></div>
      <a href="sekolah/" class="menu-card">
        <h3>School</h3>
        <p>Pengelolaan Sekolah</p>
      </a>
    </div>
  </div>

  <div class="footer">
    © 2026 Sistem Informasi Terpadu
  </div>

</body>
</html>
