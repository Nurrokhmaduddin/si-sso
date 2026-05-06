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
    'pages' => ['beranda_admin','beranda_manajer','beranda_kasir'],
    'children' => [
      ['label' => 'Admin', 'url' => 'beranda-admin.php', 'page' => 'beranda_admin'],
      ['label' => 'Manager', 'url' => 'beranda-manajer.php', 'page' => 'beranda_manajer'],
      ['label' => 'Fungsional', 'url' => 'beranda-kasir.php', 'page' => 'beranda_kasir'],
    ]
  ],

  /*
  =========================================================
  🟢 MASTER DATA (Foundation ERP)
  =========================================================
  */
  [
    'title' => 'Master Data',
    'icon' => 'fas fa-database',
    'pages' => [
      'master-item','master-supplier','master-customer',
      'master-lokasi','master-kategori','master-coa'
    ],
    'children' => [

      ['label' => 'Item / Berlian', 'url' => 'master-item.php', 'page' => 'master-item'],
      ['label' => 'Kategori Barang', 'url' => 'master-kategori.php', 'page' => 'master-kategori'],
      ['label' => 'Lokasi / Vault', 'url' => 'master-lokasi.php', 'page' => 'master-lokasi'],

      ['label' => 'Supplier / Pabrik', 'url' => 'master-supplier.php', 'page' => 'master-supplier'],
      ['label' => 'Customer / Buyer', 'url' => 'master-customer.php', 'page' => 'master-customer'],
['label' => 'Sales / Reseller', 'url' => 'master-sales.php', 'page' => 'master-sales'],

      ['label' => 'COA (Chart of Account)', 'url' => 'master-coa.php', 'page' => 'master-coa'],
    ]
  ],

  /*
  =========================================================
  🟡 SALES (Turn Lead into Client)
  =========================================================
  */
  [
    'title' => 'Sales Order',
    'icon' => 'fas fa-cash-register',
    'pages' => [
      'sales-inden','sales-order','sales-repair','sales-retur',
      'sales-monitor','sales-riwayat'
    ],
    'children' => [

      ['label' => 'Order Penjualan', 'url' => 'sales-order.php', 'page' => 'sales-order'],
      ['label' => 'Order Inden (Pre-Order)', 'url' => 'sales-inden.php', 'page' => 'sales-inden'],

      ['label' => 'Order Reparasi', 'url' => 'sales-repair.php', 'page' => 'sales-repair'],

     
      ['label' => 'Monitor Sales', 'url' => 'sales-monitor.php', 'page' => 'sales-monitor'],
      ['label' => 'laporan Sales', 'url' => 'sales-laporan.php', 'page' => 'sales-laporan'],
      ['label' => 'Analisa Sales', 'url' => 'monitor-sales.php', 'page' => 'monitor-sales'],
      ['label' => 'Riwayat Sales', 'url' => 'sales-riwayat.php', 'page' => 'sales-riwayat'],
    ]
  ],

  /*
  =========================================================
  🍽️ OPERATION (Inventory Movement & Delivery)
  =========================================================
  */
  [
    'title' => 'Operation',
    'icon' => 'fas fa-boxes',
    'pages' => [
      'op-pembelian','op-retur-beli','op-retur-jual',
      'op-mutasi','op-konsinyasi','op-stockopname','op-monitor','monitor-stock','monitor-sales','monitor-location',
      'monitor-supplier','monitor-consignment'
    ],
    'children' => [

      ['label' => 'Pembelian Barang', 'url' => 'op-pembelian.php', 'page' => 'op-pembelian'],

      ['label' => 'Retur Pembelian', 'url' => 'op-retur-beli.php', 'page' => 'op-retur-beli'],
      ['label' => 'Retur Penjualan', 'url' => 'op-retur-jual.php', 'page' => 'op-retur-jual'],


      ['label' => 'Konsinyasi', 'url' => 'op-konsinyasi.php', 'page' => 'op-konsinyasi'],

      ['label' => 'Mutasi / Pindah Barang', 'url' => 'op-mutasi.php', 'page' => 'op-mutasi'],
      ['label' => 'Stock Opname / Update', 'url' => 'op-stockopname.php', 'page' => 'op-stockopname'],

      ['label' => 'Monitor Inventory', 'url' => 'op-monitor.php', 'page' => 'op-monitor'],
      ['label' => 'Status Stock Global', 'url' => 'monitor-stock.php', 'page' => 'monitor-stock'],

      ['label' => 'Monitor operation', 'url' => 'operation-monitor.php', 'page' => 'operation-monitor'],
      ['label' => 'Konsinyasi Status', 'url' => 'monitor-consignment.php', 'page' => 'monitor-consignment'],
      ['label' => 'Supplier Inventory', 'url' => 'monitor-supplier.php', 'page' => 'monitor-supplier'],
      ['label' => 'laporan operation', 'url' => 'operation-laporan.php', 'page' => 'operation-laporan'],
      ['label' => 'Riwayat operation', 'url' => 'operation-riwayat.php', 'page' => 'operation-riwayat'],

       ['label' => 'Tracking Lokasi Barang', 'url' => 'monitor-location.php', 'page' => 'monitor-location'],
    ]
  ],

  /*
  =========================================================
  💰 FINANCE (PSAK Accounting Layer)
  =========================================================
  */
  [
    'title' => 'Finance',
    'icon' => 'fas fa-money-bill-wave',
    'pages' => [
      'finance-jurnal-umum','finance-jurnal-khusus',
      'finance-penyesuaian','finance-pembalik',
      'finance-cashbank','finance-report'
    ],
    'children' => [

      ['label' => 'COA Master', 'url' => 'finance-coa.php', 'page' => 'master-coa'],
      ['label' => 'Jurnal Umum', 'url' => 'finance-jurnal-umum.php', 'page' => 'finance-jurnal-umum'],
      ['label' => 'Jurnal Khusus', 'url' => 'finance-jurnal-khusus.php', 'page' => 'finance-jurnal-khusus'],
      ['label' => 'Jurnal Penyesuaian', 'url' => 'finance-penyesuaian.php', 'page' => 'finance-penyesuaian'],
      ['label' => 'Jurnal Pembalik', 'url' => 'finance-pembalik.php', 'page' => 'finance-pembalik'],
      
      ['label' => 'Laporan Keuangan', 'url' => 'finance-report.php', 'page' => 'finance-report'],
    ]
  ],

  /*
  =========================================================
  ⚙️ PENGATURAN SISTEM
  =========================================================
  */
  [
    'title' => 'Pengaturan',
    'icon' => 'fas fa-cog',
    'pages' => ['setting-user','setting-system'],
    'children' => [

      ['label' => 'User Management', 'url' => 'setting-user.php', 'page' => 'setting-user'],
      ['label' => 'System Config', 'url' => 'setting-system.php', 'page' => 'setting-system'],
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