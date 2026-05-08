<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Brand Logo -->
  <a href="index.php" class="brand-link text-center">
    <span class="brand-text font-weight-light">Operation</span>
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
      'master-produk','master-item','master-supplier','master-customer',
      'master-lokasi','master-kategori','master-coa'
    ],
    'children' => [

       ['label' => 'Produk / Barang', 'url' => 'master-produk.php', 'page' => 'master-produk'],
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
🟢 OPERATION (DELIVER PRODUCT / SERVICE)
  =========================================================
  */
  [
    'title' => 'Operation ',
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
🟢 OPERATION (DAGANG - TRANSACTION / CRUD)
=========================================================
Fokus:
- pergerakan barang dagang
- kontrol stok & gudang
- proses pembelian & pengiriman
- transaksi inventory
=========================================================
*/

[
  'title' => 'Operation (Dagang)',
  'icon' => 'fas fa-boxes',

  'pages' => [

    // DASHBOARD OPERATION
    'operation-dashboard',

    // PROCUREMENT (PEMBELIAN)
    'operation-po',
    'operation-grn',
    'operation-supplier-return',

    // INVENTORY / GUDANG
    'operation-stock-in',
    'operation-stock-out',
    'operation-stock-adjustment',
    'operation-stock-opname',
    'operation-stock-transfer',

    // SALES DELIVERY
    'operation-sales-order',
    'operation-picking',
    'operation-packing',
    'operation-delivery-order',
    'operation-shipment-tracking',
    'operation-customer-return',

    // APPROVAL FLOW (OPSIONAL CONTROL)
    'operation-po-approval',
    'operation-do-approval',
  ],

  'children' => [

    // =========================
    // DASHBOARD
    // =========================
    [
      'label' => 'Dashboard Operation',
      'url'   => 'operation-dashboard.php',
      'page'  => 'operation-dashboard'
    ],

    // =========================
    // PROCUREMENT
    // =========================
    [
      'label' => 'Purchase Order (PO)',
      'url'   => 'operation-po.php',
      'page'  => 'operation-po'
    ],
    [
      'label' => 'Goods Receipt (Penerimaan)',
      'url'   => 'operation-grn.php',
      'page'  => 'operation-grn'
    ],
    [
      'label' => 'Supplier Return',
      'url'   => 'operation-supplier-return.php',
      'page'  => 'operation-supplier-return'
    ],

    // =========================
    // INVENTORY / WAREHOUSE
    // =========================
    [
      'label' => 'Stock In',
      'url'   => 'operation-stock-in.php',
      'page'  => 'operation-stock-in'
    ],
    [
      'label' => 'Stock Out',
      'url'   => 'operation-stock-out.php',
      'page'  => 'operation-stock-out'
    ],
    [
      'label' => 'Stock Adjustment',
      'url'   => 'operation-stock-adjustment.php',
      'page'  => 'operation-stock-adjustment'
    ],
    [
      'label' => 'Stock Opname',
      'url'   => 'operation-stock-opname.php',
      'page'  => 'operation-stock-opname'
    ],
    [
      'label' => 'Stock Transfer',
      'url'   => 'operation-stock-transfer.php',
      'page'  => 'operation-stock-transfer'
    ],

    // =========================
    // SALES DELIVERY
    // =========================
    [
      'label' => 'Sales Order',
      'url'   => 'operation-sales-order.php',
      'page'  => 'operation-sales-order'
    ],
    [
      'label' => 'Picking',
      'url'   => 'operation-picking.php',
      'page'  => 'operation-picking'
    ],
    [
      'label' => 'Packing',
      'url'   => 'operation-packing.php',
      'page'  => 'operation-packing'
    ],
    [
      'label' => 'Delivery Order (DO)',
      'url'   => 'operation-delivery-order.php',
      'page'  => 'operation-delivery-order'
    ],
    [
      'label' => 'Shipment Tracking',
      'url'   => 'operation-shipment-tracking.php',
      'page'  => 'operation-shipment-tracking'
    ],
    [
      'label' => 'Customer Return',
      'url'   => 'operation-customer-return.php',
      'page'  => 'operation-customer-return'
    ],
  ]
],

  /*
=========================================================
🟢 OPERATION (DELIVER PRODUCT / SERVICE)
=========================================================
Tujuan:
- memastikan delivery berjalan
- kontrol project & task
- menjaga SLA operasional
- monitoring kualitas layanan
- handling incident & maintenance
=========================================================
*/

[
  'title' => 'Laporan Operation',
  'icon' => 'fas fa-chart-pie',
  'pages' => [

    // Dashboard
    'operation-dashboard',

    // Project & Delivery
    'operation-project',
    'operation-task',
    'operation-ticket',
    'operation-schedule',
    'operation-resource',

    // Quality & SLA
    'operation-sla',
    'operation-qc',
    'operation-client-request',
    'operation-approval',

    // Incident & Maintenance
    'operation-incident',
    'operation-maintenance',
    'operation-deployment',

    // Monitoring
    'operation-monitor-project',
    'operation-monitor-task',
    'operation-monitor-sla',
    'operation-monitor-resource',
    'operation-monitor-incident',

    // Rekap / Laporan
    'operation-laporan-project',
    'operation-laporan-productivity',
    'operation-laporan-sla',
    'operation-laporan-incident',
    'operation-laporan-quality',
    'operation-laporan-client',

    // Analisa
    'operation-analisa-utilization',
    'operation-analisa-productivity',
    'operation-analisa-repeat-issue',
    'operation-analisa-performance',

    // Riwayat
    'operation-riwayat-project',
    'operation-riwayat-task',
    'operation-riwayat-approval',
    'operation-riwayat-incident',
    'operation-riwayat-deployment',
    'operation-riwayat-maintenance',
  ],

  'children' => [

    /*
    =========================================================
    📊 DASHBOARD
    =========================================================
    */
    [
      'label' => 'Dashboard Operation',
      'url'   => 'operation-dashboard.php',
      'page'  => 'operation-dashboard'
    ],

    /*
    =========================================================
    📦 PROJECT & DELIVERY
    =========================================================
    */
    [
      'label' => 'Project Management',
      'url'   => 'operation-project.php',
      'page'  => 'operation-project'
    ],

    [
      'label' => 'Task Management',
      'url'   => 'operation-task.php',
      'page'  => 'operation-task'
    ],

    [
      'label' => 'Ticket Support',
      'url'   => 'operation-ticket.php',
      'page'  => 'operation-ticket'
    ],

    [
      'label' => 'Jadwal Delivery',
      'url'   => 'operation-schedule.php',
      'page'  => 'operation-schedule'
    ],

    [
      'label' => 'Resource Allocation',
      'url'   => 'operation-resource.php',
      'page'  => 'operation-resource'
    ],

    /*
    =========================================================
    🛡️ QUALITY & SLA
    =========================================================
    */
    [
      'label' => 'SLA Management',
      'url'   => 'operation-sla.php',
      'page'  => 'operation-sla'
    ],

    [
      'label' => 'Quality Control (QC)',
      'url'   => 'operation-qc.php',
      'page'  => 'operation-qc'
    ],

    [
      'label' => 'Client Request',
      'url'   => 'operation-client-request.php',
      'page'  => 'operation-client-request'
    ],

    [
      'label' => 'Approval Operasional',
      'url'   => 'operation-approval.php',
      'page'  => 'operation-approval'
    ],

    /*
    =========================================================
    🚨 INCIDENT & MAINTENANCE
    =========================================================
    */
    [
      'label' => 'Incident Management',
      'url'   => 'operation-incident.php',
      'page'  => 'operation-incident'
    ],

    [
      'label' => 'Maintenance',
      'url'   => 'operation-maintenance.php',
      'page'  => 'operation-maintenance'
    ],

    [
      'label' => 'Deployment',
      'url'   => 'operation-deployment.php',
      'page'  => 'operation-deployment'
    ],

    /*
    =========================================================
    📡 MONITORING
    =========================================================
    */
    [
      'label' => 'Monitor Project',
      'url'   => 'operation-monitor-project.php',
      'page'  => 'operation-monitor-project'
    ],

    [
      'label' => 'Monitor Task',
      'url'   => 'operation-monitor-task.php',
      'page'  => 'operation-monitor-task'
    ],

    [
      'label' => 'Monitor SLA',
      'url'   => 'operation-monitor-sla.php',
      'page'  => 'operation-monitor-sla'
    ],

    [
      'label' => 'Monitor Resource',
      'url'   => 'operation-monitor-resource.php',
      'page'  => 'operation-monitor-resource'
    ],

    [
      'label' => 'Monitor Incident',
      'url'   => 'operation-monitor-incident.php',
      'page'  => 'operation-monitor-incident'
    ],

    /*
    =========================================================
    📑 REKAP / LAPORAN
    =========================================================
    */
    [
      'label' => 'Laporan Project',
      'url'   => 'operation-laporan-project.php',
      'page'  => 'operation-laporan-project'
    ],

    [
      'label' => 'Laporan Productivity',
      'url'   => 'operation-laporan-productivity.php',
      'page'  => 'operation-laporan-productivity'
    ],

    [
      'label' => 'Laporan SLA',
      'url'   => 'operation-laporan-sla.php',
      'page'  => 'operation-laporan-sla'
    ],

    [
      'label' => 'Laporan Incident',
      'url'   => 'operation-laporan-incident.php',
      'page'  => 'operation-laporan-incident'
    ],

    [
      'label' => 'Laporan Service Quality',
      'url'   => 'operation-laporan-quality.php',
      'page'  => 'operation-laporan-quality'
    ],

    [
      'label' => 'Laporan Client Satisfaction',
      'url'   => 'operation-laporan-client.php',
      'page'  => 'operation-laporan-client'
    ],

    /*
    =========================================================
    📈 ANALISA
    =========================================================
    */
    [
      'label' => 'Analisa Utilization',
      'url'   => 'operation-analisa-utilization.php',
      'page'  => 'operation-analisa-utilization'
    ],

    [
      'label' => 'Analisa Productivity',
      'url'   => 'operation-analisa-productivity.php',
      'page'  => 'operation-analisa-productivity'
    ],

    [
      'label' => 'Analisa Repeat Issue',
      'url'   => 'operation-analisa-repeat-issue.php',
      'page'  => 'operation-analisa-repeat-issue'
    ],

    [
      'label' => 'Analisa Performance',
      'url'   => 'operation-analisa-performance.php',
      'page'  => 'operation-analisa-performance'
    ],

    /*
    =========================================================
    🕓 RIWAYAT / AUDIT TRAIL
    =========================================================
    */
    [
      'label' => 'Riwayat Project',
      'url'   => 'operation-riwayat-project.php',
      'page'  => 'operation-riwayat-project'
    ],

    [
      'label' => 'Riwayat Task',
      'url'   => 'operation-riwayat-task.php',
      'page'  => 'operation-riwayat-task'
    ],

    [
      'label' => 'Riwayat Approval',
      'url'   => 'operation-riwayat-approval.php',
      'page'  => 'operation-riwayat-approval'
    ],

    [
      'label' => 'Riwayat Incident',
      'url'   => 'operation-riwayat-incident.php',
      'page'  => 'operation-riwayat-incident'
    ],

    [
      'label' => 'Riwayat Deployment',
      'url'   => 'operation-riwayat-deployment.php',
      'page'  => 'operation-riwayat-deployment'
    ],

    [
      'label' => 'Riwayat Maintenance',
      'url'   => 'operation-riwayat-maintenance.php',
      'page'  => 'operation-riwayat-maintenance'
    ],
  ]
],

/*
=========================================================
📑 LAPORAN OPERATION (DAGANG - REPORT / VIEW ONLY)
=========================================================
Fokus:
- konsolidasi pergerakan barang
- analisa stok & distribusi
- laporan pembelian & penjualan barang
- evaluasi gudang & supply chain
=========================================================
*/

// [
//   'title' => 'Laporan Operation (Dagang)',
//   'icon' => 'fas fa-chart-bar',

//   'pages' => [

//     // SUMMARY
//     'operation-laporan-dashboard',

//     // PROCUREMENT REPORT
//     'operation-laporan-pembelian',
//     'operation-laporan-supplier-performance',

//     // INVENTORY REPORT
//     'operation-laporan-stok-gudang',
//     'operation-laporan-mutasi-barang',
//     'operation-laporan-stock-opname',
//     'operation-laporan-stock-aging',
//     'operation-laporan-stock-valuation',

//     // DELIVERY REPORT
//     'operation-laporan-sales-delivery',
//     'operation-laporan-delivery-performance',
//     'operation-laporan-shipment-delay',

//     // RETURN REPORT
//     'operation-laporan-return-barang',

//     // OVERALL ANALYTICS
//     'operation-laporan-fast-moving',
//     'operation-laporan-slow-moving',
//     'operation-laporan-dead-stock',
//   ],

//   'children' => [

//     // =========================
//     // DASHBOARD REPORT
//     // =========================
//     [
//       'label' => 'Dashboard Operation Report',
//       'url'   => 'operation-laporan-dashboard.php',
//       'page'  => 'operation-laporan-dashboard'
//     ],

//     // =========================
//     // PROCUREMENT REPORT
//     // =========================
//     [
//       'label' => 'Laporan Pembelian Barang',
//       'url'   => 'operation-laporan-pembelian.php',
//       'page'  => 'operation-laporan-pembelian'
//     ],
//     [
//       'label' => 'Supplier Performance',
//       'url'   => 'operation-laporan-supplier-performance.php',
//       'page'  => 'operation-laporan-supplier-performance'
//     ],

//     // =========================
//     // INVENTORY REPORT
//     // =========================
//     [
//       'label' => 'Stok Gudang',
//       'url'   => 'operation-laporan-stok-gudang.php',
//       'page'  => 'operation-laporan-stok-gudang'
//     ],
//     [
//       'label' => 'Mutasi Barang',
//       'url'   => 'operation-laporan-mutasi-barang.php',
//       'page'  => 'operation-laporan-mutasi-barang'
//     ],
//     [
//       'label' => 'Stock Opname',
//       'url'   => 'operation-laporan-stock-opname.php',
//       'page'  => 'operation-laporan-stock-opname'
//     ],
//     [
//       'label' => 'Stock Aging',
//       'url'   => 'operation-laporan-stock-aging.php',
//       'page'  => 'operation-laporan-stock-aging'
//     ],
//     [
//       'label' => 'Stock Valuation',
//       'url'   => 'operation-laporan-stock-valuation.php',
//       'page'  => 'operation-laporan-stock-valuation'
//     ],

//     // =========================
//     // DELIVERY REPORT
//     // =========================
//     [
//       'label' => 'Laporan Delivery Sales',
//       'url'   => 'operation-laporan-sales-delivery.php',
//       'page'  => 'operation-laporan-sales-delivery'
//     ],
//     [
//       'label' => 'Delivery Performance',
//       'url'   => 'operation-laporan-delivery-performance.php',
//       'page'  => 'operation-laporan-delivery-performance'
//     ],
//     [
//       'label' => 'Shipment Delay',
//       'url'   => 'operation-laporan-shipment-delay.php',
//       'page'  => 'operation-laporan-shipment-delay'
//     ],

//     // =========================
//     // RETURN
//     // =========================
//     [
//       'label' => 'Laporan Retur Barang',
//       'url'   => 'operation-laporan-return-barang.php',
//       'page'  => 'operation-laporan-return-barang'
//     ],

//     // =========================
//     // ANALYTICS SIMPLE (REPORT STYLE)
//     // =========================
//     [
//       'label' => 'Fast Moving Items',
//       'url'   => 'operation-laporan-fast-moving.php',
//       'page'  => 'operation-laporan-fast-moving'
//     ],
//     [
//       'label' => 'Slow Moving Items',
//       'url'   => 'operation-laporan-slow-moving.php',
//       'page'  => 'operation-laporan-slow-moving'
//     ],
//     [
//       'label' => 'Dead Stock',
//       'url'   => 'operation-laporan-dead-stock.php',
//       'page'  => 'operation-laporan-dead-stock'
//     ],
//   ]
// ],

/*
=========================================================
📑 LAPORAN OPERATION (DAGANG - REPORT / VIEW ONLY)
=========================================================
Fokus:
- konsolidasi pergerakan barang
- analisa stok & distribusi
- laporan pembelian & penjualan barang
- evaluasi gudang & supply chain
=========================================================

KLASIFIKASI MENU:
- Dashboard  : kondisi bisnis cepat & KPI ringkas
- Monitoring : kontrol operasional realtime / actionable
- Rekap      : laporan formal & periodik
- Analisa    : insight & evaluasi strategis
- Riwayat    : audit trail & histori aktivitas
=========================================================
*/

[
  'title' => 'Laporan Operation (Dagang)',
  'icon' => 'fas fa-chart-bar',

  'pages' => [

    // =====================================================
    // 📊 DASHBOARD
    // Fokus:
    // - high level summary
    // - KPI operasional
    // - cepat dibaca management
    // =====================================================
    'operation-laporan-dashboard',

    // =====================================================
    // 📡 MONITORING
    // Fokus:
    // - kontrol operasional berjalan
    // - status aktif
    // - pending / warning / SLA
    // - realtime & actionable
    // =====================================================
    'operation-monitor-stock-alert',
    'operation-monitor-delivery',
    'operation-monitor-pending-receiving',
    'operation-monitor-overstock',
    'operation-monitor-understock',

    // =====================================================
    // 📑 REKAP / LAPORAN
    // Fokus:
    // - laporan formal periodik
    // - summary transaksi
    // - export & dokumentasi
    // =====================================================
    'operation-laporan-pembelian',
    'operation-laporan-supplier-performance',

    'operation-laporan-stok-gudang',
    'operation-laporan-mutasi-barang',
    'operation-laporan-stock-opname',
    'operation-laporan-stock-aging',
    'operation-laporan-stock-valuation',

    'operation-laporan-sales-delivery',
    'operation-laporan-delivery-performance',
    'operation-laporan-shipment-delay',

    'operation-laporan-return-barang',

    // =====================================================
    // 📈 ANALISA
    // Fokus:
    // - insight bisnis
    // - trend & evaluasi
    // - decision support
    // =====================================================
    'operation-laporan-fast-moving',
    'operation-laporan-slow-moving',
    'operation-laporan-dead-stock',

    // =====================================================
    // 🕓 RIWAYAT / AUDIT TRAIL
    // Fokus:
    // - histori aktivitas detail
    // - tracking perubahan data
    // - investigasi & audit
    // =====================================================
    'operation-riwayat-stock-adjustment',
    'operation-riwayat-mutasi-barang',
    'operation-riwayat-delivery',
    'operation-riwayat-retur',
    'operation-riwayat-approval',
  ],

  'children' => [

    // =====================================================
    // 📊 DASHBOARD
    // =====================================================
    [
      'label' => 'Dashboard Operation Report',
      'url'   => 'operation-laporan-dashboard.php',
      'page'  => 'operation-laporan-dashboard'
    ],

    // =====================================================
    // 📡 MONITORING
    // =====================================================
    [
      'label' => 'Monitor Stock Alert',
      'url'   => 'operation-monitor-stock-alert.php',
      'page'  => 'operation-monitor-stock-alert'
    ],

    [
      'label' => 'Monitor Delivery',
      'url'   => 'operation-monitor-delivery.php',
      'page'  => 'operation-monitor-delivery'
    ],

    [
      'label' => 'Pending Receiving',
      'url'   => 'operation-monitor-pending-receiving.php',
      'page'  => 'operation-monitor-pending-receiving'
    ],

    [
      'label' => 'Monitor Overstock',
      'url'   => 'operation-monitor-overstock.php',
      'page'  => 'operation-monitor-overstock'
    ],

    [
      'label' => 'Monitor Understock',
      'url'   => 'operation-monitor-understock.php',
      'page'  => 'operation-monitor-understock'
    ],

    // =====================================================
    // 📑 REKAP / LAPORAN
    // =====================================================
    [
      'label' => 'Laporan Pembelian Barang',
      'url'   => 'operation-laporan-pembelian.php',
      'page'  => 'operation-laporan-pembelian'
    ],

    [
      'label' => 'Supplier Performance',
      'url'   => 'operation-laporan-supplier-performance.php',
      'page'  => 'operation-laporan-supplier-performance'
    ],

    [
      'label' => 'Stok Gudang',
      'url'   => 'operation-laporan-stok-gudang.php',
      'page'  => 'operation-laporan-stok-gudang'
    ],

    [
      'label' => 'Mutasi Barang',
      'url'   => 'operation-laporan-mutasi-barang.php',
      'page'  => 'operation-laporan-mutasi-barang'
    ],

    [
      'label' => 'Stock Opname',
      'url'   => 'operation-laporan-stock-opname.php',
      'page'  => 'operation-laporan-stock-opname'
    ],

    [
      'label' => 'Stock Aging',
      'url'   => 'operation-laporan-stock-aging.php',
      'page'  => 'operation-laporan-stock-aging'
    ],

    [
      'label' => 'Stock Valuation',
      'url'   => 'operation-laporan-stock-valuation.php',
      'page'  => 'operation-laporan-stock-valuation'
    ],

    [
      'label' => 'Laporan Delivery Sales',
      'url'   => 'operation-laporan-sales-delivery.php',
      'page'  => 'operation-laporan-sales-delivery'
    ],

    [
      'label' => 'Delivery Performance',
      'url'   => 'operation-laporan-delivery-performance.php',
      'page'  => 'operation-laporan-delivery-performance'
    ],

    [
      'label' => 'Shipment Delay',
      'url'   => 'operation-laporan-shipment-delay.php',
      'page'  => 'operation-laporan-shipment-delay'
    ],

    [
      'label' => 'Laporan Retur Barang',
      'url'   => 'operation-laporan-return-barang.php',
      'page'  => 'operation-laporan-return-barang'
    ],

    // =====================================================
    // 📈 ANALISA
    // =====================================================
    [
      'label' => 'Fast Moving Items',
      'url'   => 'operation-laporan-fast-moving.php',
      'page'  => 'operation-laporan-fast-moving'
    ],

    [
      'label' => 'Slow Moving Items',
      'url'   => 'operation-laporan-slow-moving.php',
      'page'  => 'operation-laporan-slow-moving'
    ],

    [
      'label' => 'Dead Stock',
      'url'   => 'operation-laporan-dead-stock.php',
      'page'  => 'operation-laporan-dead-stock'
    ],

    // =====================================================
    // 🕓 RIWAYAT / AUDIT TRAIL
    // =====================================================
    [
      'label' => 'Riwayat Stock Adjustment',
      'url'   => 'operation-riwayat-stock-adjustment.php',
      'page'  => 'operation-riwayat-stock-adjustment'
    ],

    [
      'label' => 'Riwayat Mutasi Barang',
      'url'   => 'operation-riwayat-mutasi-barang.php',
      'page'  => 'operation-riwayat-mutasi-barang'
    ],

    [
      'label' => 'Riwayat Delivery',
      'url'   => 'operation-riwayat-delivery.php',
      'page'  => 'operation-riwayat-delivery'
    ],

    [
      'label' => 'Riwayat Retur Barang',
      'url'   => 'operation-riwayat-retur.php',
      'page'  => 'operation-riwayat-retur'
    ],

    [
      'label' => 'Riwayat Approval',
      'url'   => 'operation-riwayat-approval.php',
      'page'  => 'operation-riwayat-approval'
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