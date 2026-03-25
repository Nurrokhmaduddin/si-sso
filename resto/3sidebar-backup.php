<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link text-center">
    <span class="brand-text font-weight-light">RESTOMAN</span>
  </a>

  <div class="sidebar">

    <!-- User Panel -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center"
      style="border-bottom: 1px solid rgba(255,255,255,.2);"
      data-bs-toggle="modal"
      data-bs-target="#modalPilihPeran">

      <div class="image">
        <span class="img-circle elevation-2 d-flex align-items-center justify-content-center"
          style="width:40px;height:40px;background:#ffffff;">
          <i class="fas fa-user text-black"></i>
        </span>
      </div>

      <div class="info ml-2">
        <a href="#" class="d-block">
          <span class="d-block text-white">su</span>
          <small class="text-success">
            <i class="fas fa-circle mr-1"></i> SuperAdmin
          </small>
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">

        <!-- BERANDA -->
        <li class="nav-item">
          <a href="index.php" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>Beranda</p>
          </a>
        </li>

        <!-- MASTER DATA -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>Master Data <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Menu & Kategori</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Bahan Baku</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Resep (BOM)</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Supplier</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Customer</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Meja / Area</p>
              </a>
            </li>

          </ul>
        </li>

        <!-- TRANSAKSI -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-exchange-alt"></i>
            <p>Transaksi <i class="right fas fa-angle-left"></i></p>
          </a>

          <ul class="nav nav-treeview">

            <!-- SALES -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>POS / Kasir</p>
              </a>
            </li>

            <!-- KITCHEN -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Order Masuk (Kitchen)</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Proses Masak</p>
              </a>
            </li>

            <!-- INVENTORY -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Stok Masuk</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Stok Keluar</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Stok Opname</p>
              </a>
            </li>

            <!-- PURCHASE -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pembelian Bahan</p>
              </a>
            </li>

          </ul>
        </li>

        <!-- LAPORAN -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>Laporan <i class="right fas fa-angle-left"></i></p>
          </a>

          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Laporan Penjualan</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Laporan Omset</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Laporan Stok</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Laporan Pembelian</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Laba Rugi</p>
              </a>
            </li>

          </ul>
        </li>

        <!-- KONFIGURASI -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-sliders-h"></i>
            <p>Konfigurasi <i class="right fas fa-angle-left"></i></p>
          </a>

          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Setting Pajak & Service</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Workflow Kitchen</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Notifikasi</p>
              </a>
            </li>

          </ul>
        </li>

        <!-- PENGATURAN -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>Pengaturan <i class="right fas fa-angle-left"></i></p>
          </a>

          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data User</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Role & Hak Akses</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Audit Log</p>
              </a>
            </li>

          </ul>
        </li>

      </ul>
    </nav>
  </div>
</aside>