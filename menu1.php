<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Menu Utama - SSO</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
/* ====== GLOBAL ====== */
body {
  background: #f2f6fc;
  font-family: "Inter", Arial, sans-serif;
  color: #0a2a4c;
}

/* ====== TOP SECTION ====== */
.top-section {
  background: linear-gradient(135deg, #003b88, #0066dd);
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 70px;
  padding: 0 20px;
  position: relative;
  border-bottom-left-radius: 18px;
  border-bottom-right-radius: 18px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.15);
}

.top-section h1 {
  margin: 0;
  font-size: 1.6rem;
  font-weight: 600;
}

.logout-btn {
  position: absolute;
  right: 20px;
  font-weight: 500;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}

/* ====== BOTTOM SECTION ====== */
.bottom-section {
  padding: 50px 20px;
  min-height: 450px;
  text-align: center;
}

.description {
  font-size: 0.95rem;
  color: #4a5568;
}

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

  <!-- Top Section -->
  <div class="top-section">
    <h1>Menu Utama SSO</h1>
    <a href="logout.php" class="btn btn-light logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <!-- Bottom Section -->
  <div class="bottom-section container">
    <p class="description">[Pengguna Aktif] Silahkan pilih sistem informasi atau proses bisnis yang ingin diakses</p>
    <div class="row g-4 justify-content-center">


      <!-- Proses Bisnis A -->
      <div class="col-md-4">
        <a href="dashboard-a.html" class="card menu-card text-center p-4 text-decoration-none text-dark shadow-sm">
          <div class="card-body">
            <i class="fas fa-cogs fa-2x mb-2"></i>
            <h5 class="card-title">Proses Bisnis A</h5>
          </div>
        </a>
      </div>

      <!-- Proses Bisnis B -->
      <div class="col-md-4">
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

</body>
</html>

