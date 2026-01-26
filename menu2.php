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
  <style>
    /* ====== MENU CARD ====== */
.menu-card {
  background: #f8faff;
  border-radius: 20px;
  border: none;
  text-decoration: none !important;
  height: 180px;                 /* tinggi seragam */
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;

  /* Neumorphism */
  box-shadow:
  8px 8px 15px rgba(0, 0, 0, 0.07),
  -8px -8px 15px rgba(255, 255, 255, 0.9);
  transition: all 0.25s ease;
}

.menu-card:hover {
  transform: translateY(-6px);
  background: #ffffff;
  box-shadow:
  10px 10px 20px rgba(0, 0, 0, 0.15),
  -10px -10px 20px rgba(255, 255, 255, 0.75);
}

.menu-card i {
  font-size: 2.2rem;
  color: #005bcf;
  margin-bottom: 10px;
}

.menu-card h5 {
  margin-top: 10px;
  font-weight: 600;
  color: #0a2a4c;
  min-height: 48px;       /* menjaga agar judul sejajar */
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

/* ====== RESPONSIVE ====== */
@media (max-width: 768px) {
  .top-section h1 {
    font-size: 1.3rem;
  }

  .menu-card {
    height: 160px;
    padding: 25px 10px;
  }

  .menu-card h5 {
    font-size: 0.95rem;
  }
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
   <!-- Bottom Section -->
  <div class="bottom-section container">
    <p class="description">[Pengguna Aktif] Silahkan pilih sistem informasi atau proses bisnis yang ingin diakses</p>
    <div class="row g-4 justify-content-center">

      <!-- Proses Bisnis A -->
      <div class="col-md-3">
        <a href="dashboard-a.html" class="card menu-card text-center p-4 text-decoration-none text-dark shadow-sm">
          <div class="card-body">
            <i class="fas fa-cogs fa-2x mb-2"></i>
            <h5 class="card-title">Proses Bisnis A</h5>
          </div>
        </a>
      </div>
      <!-- Proses Bisnis B -->
      <div class="col-md-3">
        <a href="dashboard-b.html" class="card menu-card text-center p-4 text-decoration-none text-dark shadow-sm">
          <div class="card-body">
            <i class="fas fa-project-diagram fa-2x mb-2"></i>
            <h5 class="card-title">Proses Bisnis B</h5>
          </div>
        </a>
      </div>
      <!-- SI-Odoo -->
      <div class="col-md-3">
        <a href="odoo-sales.html" class="card menu-card text-center p-4 text-decoration-none text-dark shadow-sm">
          <div class="card-body">
            <i class="fas fa-cogs fa-2x mb-2"></i>
            <h5 class="card-title">Odoo-Sales (Penjualan)</h5>
          </div>
        </a>
      </div>
      <!-- SI-Odoo -->
      <div class="col-md-3">
        <a href="odoo-inventory.html" class="card menu-card text-center p-4 text-decoration-none text-dark shadow-sm">
          <div class="card-body">
            <i class="fas fa-cogs fa-2x mb-2"></i>
            <h5 class="card-title">Odoo-Inventory (Persediaan/Gudang)</h5>
          </div>
        </a>
      </div>
      <!-- SI-Odoo -->
      <div class="col-md-3">
        <a href="odoo-akuntansi.html" class="card menu-card text-center p-4 text-decoration-none text-dark shadow-sm">
          <div class="card-body">
            <i class="fas fa-cogs fa-2x mb-2"></i>
            <h5 class="card-title">Odoo-Accounting/ Invoicing </h5>
          </div>
        </a>
      </div>
      <!-- SI-Odoo -->
      <div class="col-md-3">
        <a href="odoo-purchase.html" class="card menu-card text-center p-4 text-decoration-none text-dark shadow-sm">
          <div class="card-body">
            <i class="fas fa-cogs fa-2x mb-2"></i>
            <h5 class="card-title">Odoo-Purchase (Pembelian)</h5>
          </div>
        </a>
      </div>
      <!-- SI-Odoo -->
      <div class="col-md-3">
        <a href="odoo-hrd.html" class="card menu-card text-center p-4 text-decoration-none text-dark shadow-sm">
          <div class="card-body">
            <i class="fas fa-cogs fa-2x mb-2"></i>
            <h5 class="card-title">Odoo-SDM Karyawan (HRD)</h5>
          </div>
        </a>
      </div>
      <!-- SI-Odoo -->
      <div class="col-md-3">
        <a href="odoo-projek.html" class="card menu-card text-center p-4 text-decoration-none text-dark shadow-sm">
          <div class="card-body">
            <i class="fas fa-cogs fa-2x mb-2"></i>
            <h5 class="card-title">Odoo-Project / Tasks</h5>
          </div>
        </a>
      </div>
      <!-- SI-Odoo -->
      <div class="col-md-3">
        <a href="odoo-website.html" class="card menu-card text-center p-4 text-decoration-none text-dark shadow-sm">
          <div class="card-body">
            <i class="fas fa-cogs fa-2x mb-2"></i>
            <h5 class="card-title">Odoo-Website / eCommerce</h5>
          </div>
        </a>
      </div>
      
    </div>
  </div>
  </div>

  <div class="footer">
    © 2026 Sistem Informasi Terpadu
  </div>

</body>
</html>
