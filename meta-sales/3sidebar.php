<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Brand Logo -->
  <a href="index.php" class="brand-link text-center">
    <span class="brand-text font-weight-light">Sales</span>
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
['label' => 'Marketing / Reseller', 'url' => 'master-Marketing.php', 'page' => 'master-Marketing'],

      ['label' => 'COA (Chart of Account)', 'url' => 'master-coa.php', 'page' => 'master-coa'],
    ]
  ],

  /*
  =========================================================
🔵 SALES (TURN LEAD INTO CLIENT)
  =========================================================
  */
  [
    'title' => 'Sales ',
    'icon' => 'fas fa-tasks',
    'pages' => [
      'Marketing-inden','Marketing-order','Marketing-repair','Marketing-retur',
      'Marketing-monitor','Marketing-riwayat'
    ],
    'children' => [

      ['label' => 'Order Penjualan', 'url' => 'Marketing-order.php', 'page' => 'Marketing-order'],
      ['label' => 'Order Inden (Pre-Order)', 'url' => 'Marketing-inden.php', 'page' => 'Marketing-inden'],

      ['label' => 'Order Reparasi', 'url' => 'Marketing-repair.php', 'page' => 'Marketing-repair'],

     
      ['label' => 'Monitor Marketing', 'url' => 'Marketing-monitor.php', 'page' => 'Marketing-monitor'],
      ['label' => 'laporan Marketing', 'url' => 'Marketing-laporan.php', 'page' => 'Marketing-laporan'],
      ['label' => 'Analisa Marketing', 'url' => 'monitor-Marketing.php', 'page' => 'monitor-Marketing'],
      ['label' => 'Riwayat Marketing', 'url' => 'Marketing-riwayat.php', 'page' => 'Marketing-riwayat'],
    ]
  ],
    
/*
=========================================================
🔵 SALES (TURN LEAD INTO CLIENT)
=========================================================
Tujuan:
- mengubah lead menjadi client
- mengelola pipeline penjualan
- menjaga follow up & closing
- kontrol quotation & kontrak
- monitoring target sales
=========================================================
*/

[
  'title' => 'Laporan Sales',
  'icon' => 'fas fa-chart-pie',
  'pages' => [

    // Dashboard
    'sales-dashboard',

    // Pipeline & Lead
    'sales-pipeline',
    'sales-prospect',
    'sales-followup',
    'sales-meeting',
    'sales-negosiasi',

    // Penawaran
    'sales-quotation',
    'sales-spk',
    'sales-kontrak',
    'sales-price-approval',

    // Monitoring
    'sales-monitor-pipeline',
    'sales-monitor-sla',
    'sales-monitor-target',
    'sales-monitor-outstanding',

    // Rekap / Laporan
    'sales-laporan-closing',
    'sales-laporan-revenue',
    'sales-laporan-conversion',
    'sales-laporan-salesperson',
    'sales-laporan-product',

    // Analisa
    'sales-analisa-winloss',
    'sales-analisa-sales-cycle',
    'sales-analisa-client',
    'sales-analisa-margin',

    // Riwayat
    'sales-riwayat-followup',
    'sales-riwayat-meeting',
    'sales-riwayat-quotation',
    'sales-riwayat-negosiasi',
    'sales-riwayat-kontrak',
  ],

  'children' => [

    /*
    =========================================================
    📊 DASHBOARD
    =========================================================
    */
    [
      'label' => 'Dashboard Sales',
      'url'   => 'sales-dashboard.php',
      'page'  => 'sales-dashboard'
    ],

    /*
    =========================================================
    👥 PIPELINE & PROSPECT
    =========================================================
    */
    [
      'label' => 'Sales Pipeline',
      'url'   => 'sales-pipeline.php',
      'page'  => 'sales-pipeline'
    ],

    [
      'label' => 'Prospect Client',
      'url'   => 'sales-prospect.php',
      'page'  => 'sales-prospect'
    ],

    [
      'label' => 'Follow Up Client',
      'url'   => 'sales-followup.php',
      'page'  => 'sales-followup'
    ],

    [
      'label' => 'Meeting Client',
      'url'   => 'sales-meeting.php',
      'page'  => 'sales-meeting'
    ],

    [
      'label' => 'Negosiasi Deal',
      'url'   => 'sales-negosiasi.php',
      'page'  => 'sales-negosiasi'
    ],

    /*
    =========================================================
    📄 QUOTATION & CONTRACT
    =========================================================
    */
    [
      'label' => 'Quotation',
      'url'   => 'sales-quotation.php',
      'page'  => 'sales-quotation'
    ],

    [
      'label' => 'SPK / PO Client',
      'url'   => 'sales-spk.php',
      'page'  => 'sales-spk'
    ],

    [
      'label' => 'Kontrak Client',
      'url'   => 'sales-kontrak.php',
      'page'  => 'sales-kontrak'
    ],

    [
      'label' => 'Approval Harga',
      'url'   => 'sales-price-approval.php',
      'page'  => 'sales-price-approval'
    ],

    /*
    =========================================================
    📡 MONITORING
    =========================================================
    */
    [
      'label' => 'Monitor Pipeline',
      'url'   => 'sales-monitor-pipeline.php',
      'page'  => 'sales-monitor-pipeline'
    ],

    [
      'label' => 'Monitor SLA Follow Up',
      'url'   => 'sales-monitor-sla.php',
      'page'  => 'sales-monitor-sla'
    ],

    [
      'label' => 'Monitor Target Sales',
      'url'   => 'sales-monitor-target.php',
      'page'  => 'sales-monitor-target'
    ],

    [
      'label' => 'Outstanding Quotation',
      'url'   => 'sales-monitor-outstanding.php',
      'page'  => 'sales-monitor-outstanding'
    ],

    /*
    =========================================================
    📑 REKAP / LAPORAN
    =========================================================
    */
    [
      'label' => 'Laporan Closing',
      'url'   => 'sales-laporan-closing.php',
      'page'  => 'sales-laporan-closing'
    ],

    [
      'label' => 'Laporan Revenue',
      'url'   => 'sales-laporan-revenue.php',
      'page'  => 'sales-laporan-revenue'
    ],

    [
      'label' => 'Laporan Conversion',
      'url'   => 'sales-laporan-conversion.php',
      'page'  => 'sales-laporan-conversion'
    ],

    [
      'label' => 'Laporan Salesperson',
      'url'   => 'sales-laporan-salesperson.php',
      'page'  => 'sales-laporan-salesperson'
    ],

    [
      'label' => 'Laporan Product Sales',
      'url'   => 'sales-laporan-product.php',
      'page'  => 'sales-laporan-product'
    ],

    /*
    =========================================================
    📈 ANALISA
    =========================================================
    */
    [
      'label' => 'Analisa Win/Loss',
      'url'   => 'sales-analisa-winloss.php',
      'page'  => 'sales-analisa-winloss'
    ],

    [
      'label' => 'Analisa Sales Cycle',
      'url'   => 'sales-analisa-sales-cycle.php',
      'page'  => 'sales-analisa-sales-cycle'
    ],

    [
      'label' => 'Analisa Client',
      'url'   => 'sales-analisa-client.php',
      'page'  => 'sales-analisa-client'
    ],

    [
      'label' => 'Analisa Margin',
      'url'   => 'sales-analisa-margin.php',
      'page'  => 'sales-analisa-margin'
    ],

    /*
    =========================================================
    🕓 RIWAYAT / AUDIT TRAIL
    =========================================================
    */
    [
      'label' => 'Riwayat Follow Up',
      'url'   => 'sales-riwayat-followup.php',
      'page'  => 'sales-riwayat-followup'
    ],

    [
      'label' => 'Riwayat Meeting',
      'url'   => 'sales-riwayat-meeting.php',
      'page'  => 'sales-riwayat-meeting'
    ],

    [
      'label' => 'Riwayat Quotation',
      'url'   => 'sales-riwayat-quotation.php',
      'page'  => 'sales-riwayat-quotation'
    ],

    [
      'label' => 'Riwayat Negosiasi',
      'url'   => 'sales-riwayat-negosiasi.php',
      'page'  => 'sales-riwayat-negosiasi'
    ],

    [
      'label' => 'Riwayat Kontrak',
      'url'   => 'sales-riwayat-kontrak.php',
      'page'  => 'sales-riwayat-kontrak'
    ],
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