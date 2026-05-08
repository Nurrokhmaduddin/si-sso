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
     
    
    ]
  ],
    
/*
=========================================================
🔵 SALES (DAGANG) (TURN LEAD INTO ORDERS)
=========================================================
*/
[
  'title' => 'Sales (Dagang)',
  'icon'  => 'fas fa-shopping-cart',

  'pages' => [

    // =====================================================
    // 🧾 TRANSAKSI PENJUALAN
    // =====================================================
    'sales-order-penjualan',
    'sales-quotation-penawaran',
    'sales-spk-po-customer',
    'sales-delivery-order',
    'sales-retur-penjualan',
    'sales-invoice-penjualan',

    // =====================================================
    // 📡 PIPELINE & FOLLOW UP
    // =====================================================
    'sales-pipeline',
    'sales-followup-client',
  ],

  'children' => [

    /*
    =========================================================
    🧾 TRANSAKSI PENJUALAN
    =========================================================
    */

    [
      'label' => 'Order Penjualan',
      'url'   => 'sales-order-penjualan.php',
      'page'  => 'sales-order-penjualan'
    ],

    [
      'label' => 'Quotation / Penawaran',
      'url'   => 'sales-quotation-penawaran.php',
      'page'  => 'sales-quotation-penawaran'
    ],

    [
      'label' => 'SPK / PO Customer',
      'url'   => 'sales-spk-po-customer.php',
      'page'  => 'sales-spk-po-customer'
    ],

    [
      'label' => 'Delivery Order',
      'url'   => 'sales-delivery-order.php',
      'page'  => 'sales-delivery-order'
    ],

    [
      'label' => 'Retur Penjualan',
      'url'   => 'sales-retur-penjualan.php',
      'page'  => 'sales-retur-penjualan'
    ],

    [
      'label' => 'Invoice Penjualan',
      'url'   => 'sales-invoice-penjualan.php',
      'page'  => 'sales-invoice-penjualan'
    ],

    /*
    =========================================================
    📡 PIPELINE & FOLLOW UP
    =========================================================
    */

    [
      'label' => 'Pipeline Sales',
      'url'   => 'sales-pipeline.php',
      'page'  => 'sales-pipeline'
    ],

    [
      'label' => 'Follow Up Client',
      'url'   => 'sales-followup-client.php',
      'page'  => 'sales-followup-client'
    ],
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
    'sales-monitor-pipeline1',
    'sales-monitor-sla',
    'sales-monitor-target',
    'sales-monitor-outstanding',

    // Rekap / Laporan
    'sales-laporan-closing',
    'sales-laporan-revenue',
    'sales-laporan-conversion',
    'sales-laporan-salesperson1',
    'sales-laporan-product',

    // Analisa
    'sales-analisa-winloss1',
    'sales-analisa-sales-cycle1',
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

[
  'title' => 'Laporan Sales (Dagang)',
  'icon'  => 'fas fa-chart-bar',

  'pages' => [

    // =====================================================
    // 📊 DASHBOARD (EXECUTIVE VIEW)
    // =====================================================
    'sales-dashboard-sales-kpi',
    'sales-dashboard-revenue-target',
    'sales-dashboard-pipeline',
    'sales-dashboard-top-product',
    'sales-dashboard-customer-insight',

    // =====================================================
    // 📡 MONITORING (OPERATIONAL CONTROL)
    // =====================================================
    'sales-monitor-lead-followup',
    'sales-monitor-pipeline',
    'sales-monitor-quotation-approval',
    'sales-monitor-order-delivery',
    'sales-monitor-ar-overdue',
    'sales-monitor-sla-sales',

    // =====================================================
    // 📑 LAPORAN (FORMAL REPORTING)
    // =====================================================
    'sales-laporan-penjualan-harian',
    'sales-laporan-penjualan-bulanan',
    'sales-laporan-penjualan-produk',
    'sales-laporan-customer',
    'sales-laporan-salesperson',
    'sales-laporan-inventory-movement',
    'sales-laporan-ar-aging',
    'sales-laporan-retur',

    // =====================================================
    // 📈 ANALISA (BUSINESS INTELLIGENCE)
    // =====================================================
    'sales-analisa-product-performance',
    'sales-analisa-margin-profit',
    'sales-analisa-winloss',
    'sales-analisa-sales-cycle',
    'sales-analisa-customer-behavior',
    'sales-analisa-forecast',

    // =====================================================
    // 🕓 RIWAYAT / AUDIT TRAIL
    // =====================================================
    'sales-audit-log-user',
    'sales-audit-sales-order',
    'sales-audit-quotation',
    'sales-audit-price-change',
    'sales-audit-order-status',
    'sales-audit-inventory',
  ],

  'children' => [

    // =====================================================
    // 📊 DASHBOARD (EXECUTIVE VIEW)
    // =====================================================
    [
      'label' => 'Sales KPI',
      'url'   => 'sales-dashboard-sales-kpi.php',
      'page'  => 'sales-dashboard-sales-kpi'
    ],

    [
      'label' => 'Revenue & Target',
      'url'   => 'sales-dashboard-revenue-target.php',
      'page'  => 'sales-dashboard-revenue-target'
    ],

    [
      'label' => 'Pipeline Sales',
      'url'   => 'sales-dashboard-pipeline.php',
      'page'  => 'sales-dashboard-pipeline'
    ],

    [
      'label' => 'Produk Terlaris',
      'url'   => 'sales-dashboard-top-product.php',
      'page'  => 'sales-dashboard-top-product'
    ],

    [
      'label' => 'Customer Insight',
      'url'   => 'sales-dashboard-customer-insight.php',
      'page'  => 'sales-dashboard-customer-insight'
    ],

    // =====================================================
    // 📡 MONITORING (OPERATIONAL CONTROL)
    // =====================================================
    [
      'label' => 'Lead & Follow Up',
      'url'   => 'sales-monitor-lead-followup.php',
      'page'  => 'sales-monitor-lead-followup'
    ],

    [
      'label' => 'Pipeline Aktif',
      'url'   => 'sales-monitor-pipeline.php',
      'page'  => 'sales-monitor-pipeline'
    ],

    [
      'label' => 'Quotation Approval',
      'url'   => 'sales-monitor-quotation-approval.php',
      'page'  => 'sales-monitor-quotation-approval'
    ],

    [
      'label' => 'Order & Delivery',
      'url'   => 'sales-monitor-order-delivery.php',
      'page'  => 'sales-monitor-order-delivery'
    ],

    [
      'label' => 'AR Overdue',
      'url'   => 'sales-monitor-ar-overdue.php',
      'page'  => 'sales-monitor-ar-overdue'
    ],

    [
      'label' => 'SLA Sales Activity',
      'url'   => 'sales-monitor-sla-sales.php',
      'page'  => 'sales-monitor-sla-sales'
    ],

    // =====================================================
    // 📑 LAPORAN (FORMAL REPORTING)
    // =====================================================
    [
      'label' => 'Penjualan Harian',
      'url'   => 'sales-laporan-penjualan-harian.php',
      'page'  => 'sales-laporan-penjualan-harian'
    ],

    [
      'label' => 'Penjualan Bulanan',
      'url'   => 'sales-laporan-penjualan-bulanan.php',
      'page'  => 'sales-laporan-penjualan-bulanan'
    ],

    [
      'label' => 'Penjualan per Produk',
      'url'   => 'sales-laporan-penjualan-produk.php',
      'page'  => 'sales-laporan-penjualan-produk'
    ],

    [
      'label' => 'Penjualan per Customer',
      'url'   => 'sales-laporan-customer.php',
      'page'  => 'sales-laporan-customer'
    ],

    [
      'label' => 'Sales Person',
      'url'   => 'sales-laporan-salesperson.php',
      'page'  => 'sales-laporan-salesperson'
    ],

    [
      'label' => 'Inventory Movement',
      'url'   => 'sales-laporan-inventory-movement.php',
      'page'  => 'sales-laporan-inventory-movement'
    ],

    [
      'label' => 'Piutang (AR Aging)',
      'url'   => 'sales-laporan-ar-aging.php',
      'page'  => 'sales-laporan-ar-aging'
    ],

    [
      'label' => 'Retur Penjualan',
      'url'   => 'sales-laporan-retur.php',
      'page'  => 'sales-laporan-retur'
    ],

    // =====================================================
    // 📈 ANALISA (BUSINESS INTELLIGENCE)
    // =====================================================
    [
      'label' => 'Analisa Produk',
      'url'   => 'sales-analisa-product-performance.php',
      'page'  => 'sales-analisa-product-performance'
    ],

    [
      'label' => 'Analisa Margin Profit',
      'url'   => 'sales-analisa-margin-profit.php',
      'page'  => 'sales-analisa-margin-profit'
    ],

    [
      'label' => 'Win / Loss',
      'url'   => 'sales-analisa-winloss.php',
      'page'  => 'sales-analisa-winloss'
    ],

    [
      'label' => 'Sales Cycle',
      'url'   => 'sales-analisa-sales-cycle.php',
      'page'  => 'sales-analisa-sales-cycle'
    ],

    [
      'label' => 'Customer Behavior',
      'url'   => 'sales-analisa-customer-behavior.php',
      'page'  => 'sales-analisa-customer-behavior'
    ],

    [
      'label' => 'Forecast Penjualan',
      'url'   => 'sales-analisa-forecast.php',
      'page'  => 'sales-analisa-forecast'
    ],

    // =====================================================
    // 🕓 RIWAYAT / AUDIT TRAIL
    // =====================================================
    [
      'label' => 'Log Aktivitas User',
      'url'   => 'sales-audit-log-user.php',
      'page'  => 'sales-audit-log-user'
    ],

    [
      'label' => 'Riwayat Sales Order',
      'url'   => 'sales-audit-sales-order.php',
      'page'  => 'sales-audit-sales-order'
    ],

    [
      'label' => 'Quotation & Approval',
      'url'   => 'sales-audit-quotation.php',
      'page'  => 'sales-audit-quotation'
    ],

    [
      'label' => 'Perubahan Harga / Diskon',
      'url'   => 'sales-audit-price-change.php',
      'page'  => 'sales-audit-price-change'
    ],

    [
      'label' => 'Status Order',
      'url'   => 'sales-audit-order-status.php',
      'page'  => 'sales-audit-order-status'
    ],

    [
      'label' => 'Inventory Movement',
      'url'   => 'sales-audit-inventory.php',
      'page'  => 'sales-audit-inventory'
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
       

        <!-- ========================================================= -->
<!-- 📊 DASHBOARD (EXECUTIVE VIEW) -->
<!-- ========================================================= -->
<li class="nav-item collapse ">

  <a href="#" class="nav-link ">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      Dashboard
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>

  <ul class="nav nav-treeview">

    <li class="nav-item">
      <a href="dashboard-sales-kpi.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Dashboard Sales KPI</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="dashboard-revenue-target.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Dashboard Revenue & Target</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="dashboard-pipeline.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Dashboard Pipeline Sales</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="dashboard-top-product.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Dashboard Produk Terlaris</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="dashboard-customer-insight.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Dashboard Customer Insight</p>
      </a>
    </li>

  </ul>
</li>


<!-- ========================================================= -->
<!-- 📡 MONITORING (OPERATIONAL CONTROL) -->
<!-- ========================================================= -->
<li class="nav-item collapse">

  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-satellite-dish"></i>
    <p>
      Monitoring
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>

  <ul class="nav nav-treeview">

    <li class="nav-item">
      <a href="monitor-lead-followup.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Monitor Lead & Follow Up</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="monitor-pipeline.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Monitor Pipeline Aktif</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="monitor-quotation-approval.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Quotation Pending Approval</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="monitor-order-delivery.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Order & Delivery Status</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="monitor-ar-overdue.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Invoice & Payment (AR Overdue)</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="monitor-sla-sales.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>SLA Sales Activity</p>
      </a>
    </li>

  </ul>
</li>


<!-- ========================================================= -->
<!-- 📑 LAPORAN (FORMAL REPORTING) -->
<!-- ========================================================= -->
<li class="nav-item collapse">

  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-chart-bar"></i>
    <p>
      Laporan
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>

  <ul class="nav nav-treeview">

    <li class="nav-item">
      <a href="laporan-penjualan-harian.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Laporan Penjualan Harian</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="laporan-penjualan-bulanan.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Laporan Penjualan Bulanan</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="laporan-penjualan-produk.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Laporan Penjualan per Produk</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="laporan-customer.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Laporan Penjualan per Customer</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="laporan-salesperson.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Laporan Sales Person</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="laporan-inventory-movement.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Laporan Inventory Movement</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="laporan-ar-aging.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Laporan Piutang (AR Aging)</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="laporan-retur.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Laporan Retur Penjualan</p>
      </a>
    </li>

  </ul>
</li>


<!-- ========================================================= -->
<!-- 📈 ANALISA (BUSINESS INTELLIGENCE) -->
<!-- ========================================================= -->
<li class="nav-item collapse">

  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-chart-line"></i>
    <p>
      Analisa
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>

  <ul class="nav nav-treeview">

    <li class="nav-item">
      <a href="analisa-product-performance.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Analisa Produk</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="analisa-margin-profit.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Analisa Margin Profit</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="analisa-winloss.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Analisa Win / Loss</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="analisa-sales-cycle.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Analisa Sales Cycle</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="analisa-customer-behavior.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Analisa Customer Behavior</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="analisa-forecast.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Forecast Penjualan</p>
      </a>
    </li>

  </ul>
</li>


<!-- ========================================================= -->
<!-- 🕓 RIWAYAT / AUDIT TRAIL -->
<!-- ========================================================= -->
<li class="nav-item collapse">

  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-history"></i>
    <p>
      Riwayat / Audit
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>

  <ul class="nav nav-treeview">

    <li class="nav-item">
      <a href="audit-log-user.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Log Aktivitas User</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="audit-sales-order.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Riwayat Sales Order</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="audit-quotation.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Riwayat Quotation & Approval</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="audit-price-change.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Riwayat Perubahan Harga/Diskon</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="audit-order-status.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Riwayat Status Order</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="audit-inventory.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Audit Inventory Movement</p>
      </a>
    </li>

  </ul>
</li>
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