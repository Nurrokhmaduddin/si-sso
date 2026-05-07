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