<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Brand Logo -->
  <a href="index.php" class="brand-link text-center">
    <span class="brand-text font-weight-light">TOKOMAN</span>
  </a>

  <div class="sidebar">

    <!-- User Panel -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center"
      style="border-bottom: 1px solid rgba(255,255,255,.2);">

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
    <?php

    $menu = [

      [
        'title' => 'Beranda',
        'icon' => 'fas fa-home',
        'pages' => ['beranda_admin','beranda_kasir','beranda_customer'],
        'children' => [
          // ['label' => 'Super Admin', 'url' => 'index.php', 'page' => 'beranda_administrator'],
          ['label' => 'Admin', 'url' => 'beranda-admin.php', 'page' => 'beranda_admin'],
           ['label' => 'Manager', 'url' => 'beranda-manajer.php', 'page' => 'beranda_manajer'],
          ['label' => 'Fungsional', 'url' => 'beranda-kasir.php', 'page' => 'beranda_kasir'],
        ]
      ],

      [
        'title' => 'Master Data',
        'icon' => 'fas fa-database',
        'pages' => ['master-menu','master-bahan','master-resep'],
        'children' => [
          ['label' => 'Menu & Kategori', 'url' => 'master-menu.php', 'page' => 'master-menu'],
          ['label' => 'Bahan Baku', 'url' => 'master-bahan.php', 'page' => 'master-bahan'],
          ['label' => 'Resep (BOM)', 'url' => 'master-resep.php', 'page' => 'master-resep'],
        ]
      ],

      [
        'title' => 'Sales',
        'icon' => 'fas fa-cash-register',
        'pages' => ['sales-kasir','sales-order','sales-history'],
        'children' => [
          ['label' => 'POS / Kasir', 'url' => 'sales-kasir.php', 'page' => 'sales-kasir'],
          ['label' => 'Monitor Orders', 'url' => 'sales-order.php', 'page' => 'sales-order'],
          ['label' => 'Riwayat Sales', 'url' => 'sales-riwayat.php', 'page' => 'sales-history'],
        ]
      ],

      [
        'title' => 'Operation',
        'icon' => 'fas fa-utensils',
        'pages' => ['operation-kitchen','operation-stok'],
        'children' => [
          ['label' => 'Kitchen Display', 'url' => 'operation-kitchen.php', 'page' => 'operation-kitchen'],
          ['label' => 'Stok Bahan', 'url' => 'operation-stok-bahan.php', 'page' => 'operation-stok'],
        ]
      ],

      [
        'title' => 'Finance',
        'icon' => 'fas fa-money-bill',
        'pages' => ['finance-jurnal','finance-akun'],
        'children' => [
          ['label' => 'CoA', 'url' => 'finance-akun.php', 'page' => 'finance-akun'],
          ['label' => 'Jurnal Umum', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Jurnal Khusus', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Jurnal Penyesuaian', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Jurnal Pembalik', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Lap Buku Besar', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Lap Laba Rugi', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Lap Perubahan Modal', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Lap Neraca', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Lap Arus Kas', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
        ]
      ],

      [
        'title' => 'Pengaturan',
        'icon' => 'fas fa-cog',
        'pages' => ['finance-jurnal','finance-akun'],
        'children' => [
          ['label' => 'Users', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Template', 'url' => 'finance-akun.php', 'page' => 'finance-akun'],
        ]
      ],

    ];
    ?>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">

        <?php foreach ($menu as $m): 

          $isOpen = in_array($page, $m['pages']);
          ?>

          <li class="nav-item <?= $isOpen ? 'menu-open' : '' ?>">

            <a href="#" class="nav-link <?= $isOpen ? 'active' : '' ?>">
              <i class="nav-icon <?= $m['icon'] ?>"></i>
              <p>
                <?= $m['title'] ?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">

              <?php foreach ($m['children'] as $c): ?>
                <li class="nav-item">
                  <a href="<?= $c['url'] ?>" class="nav-link <?= $page == $c['page'] ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?= $c['label'] ?></p>
                  </a>
                </li>
              <?php endforeach; ?>

            </ul>

          </li>

        <?php endforeach; ?>
            <!-- 1. MASTER DATA -->
    <div class="menu-section">
      <div class="menu-title">1. Master Data</div>
      <ul class="menu">
        <li><a href="#">Customer</a></li>
        <li><a href="#">Supplier</a></li>
        <li><a href="#">Persediaan</a></li>
        <li><a href="#">-Produk</a></li>
        <li><a href="#">-Bahan Baku</a></li>
        <li><a href="#">-Resep / BOM</a></li>
        <li><a href="#">Gudang</a></li>
        <li><a href="#">Kas / Bank</a></li>
        <li><a href="#">COA Akuntansi</a></li>
        <li><a href="#">User & Hak Akses</a></li>
      </ul>
    </div>

    <!-- 2. TRANSAKSI -->
    <div class="menu-section">
      <div class="menu-title">2. Transaksi Operasional</div>

      <ul class="menu">
        <li><a href="#">Penjualan</a></li>
        <li><a href="#">POS / Kasir</a></li>
        <li><a href="#">Penjualan Kredit</a></li>
        <li><a href="#">Retur Penjualan</a></li>
        <li><a href="#">DP Penjualan</a></li>

        <li><a href="#">Pembelian</a></li>
        <li><a href="#">Pembelian Tunai</a></li>
        <li><a href="#">Pembelian Kredit</a></li>
        <li><a href="#">Retur Pembelian</a></li>
        <li><a href="#">Pembayaran Hutang</a></li>

        <li><a href="#">Inventory</a></li>
        <li><a href="#">Mutasi Stok</a></li>
        <li><a href="#">Pemakaian Bahan Baku</a></li>
        <li><a href="#">Produksi Menu</a></li>
        <li><a href="#">Adjustment Stok</a></li>
        <li><a href="#">Stock Opname</a></li>

        <li><a href="#">Kas Masuk</a></li>
        <li><a href="#">Kas Keluar</a></li>
        <li><a href="#">Jurnal Umum</a></li>
        <li><a href="#">Pelunasan Piutang</a></li>
        <li><a href="#">Pelunasan Hutang</a></li>
      </ul>
    </div>

    <!-- 3. MONITORING -->
    <div class="menu-section">
      <div class="menu-title">3. Monitoring</div>

      <ul class="menu">
        <li><a href="#">Monitoring Stok</a></li>
        <li><a href="#">Stok Minimum</a></li>
        <li><a href="#">Fast Moving</a></li>
        <li><a href="#">Slow Moving</a></li>
        <li><a href="#">Nilai Persediaan</a></li>

        <li><a href="#">Monitoring Menu</a></li>
        <li><a href="#">Menu Bisa Diproduksi</a></li>
        <li><a href="#">Kekurangan Bahan</a></li>
        <li><a href="#">Estimasi Produksi</a></li>

        <li><a href="#">Cashflow</a></li>
        <li><a href="#">Hutang Jatuh Tempo</a></li>
        <li><a href="#">Piutang Jatuh Tempo</a></li>
      </ul>
    </div>

    <!-- 4. RIWAYAT -->
    <div class="menu-section">
      <div class="menu-title">4. Riwayat & Ledger</div>

      <ul class="menu">
        <li><a href="#">Riwayat Stok</a></li>
        <li><a href="#">Kartu Stok</a></li>
        <li><a href="#">Ledger Kas</a></li>
        <li><a href="#">Ledger Hutang</a></li>
        <li><a href="#">Ledger Piutang</a></li>
      </ul>
    </div>

    <!-- 5. LAPORAN -->
    <div class="menu-section">
      <div class="menu-title">5. Laporan</div>

      <ul class="menu">
        <li><a href="#">Laba Rugi</a></li>
        <li><a href="#">Neraca</a></li>
        <li><a href="#">Arus Kas</a></li>
        <li><a href="#">Rekap Penjualan</a></li>
        <li><a href="#">Rekap Pembelian</a></li>
        <li><a href="#">Rekap HPP</a></li>
        <li><a href="#">Rekap Stok</a></li>
      </ul>
    </div>
        <!-- KEMBALI MENU UTAMA -->
        <li class="nav-item mt-3">
          <a href="../menu.php" class="nav-link">
            <i class="nav-icon fas fa-arrow-left"></i>
            <p>Kembali Menu Utama</p>
          </a>
        </li>
      </ul>
    </nav>


  </div>
</aside>