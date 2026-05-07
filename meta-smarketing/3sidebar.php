<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Brand Logo -->
  <a href="index.php" class="brand-link text-center">
    <span class="brand-text font-weight-light">Marketing</span>
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
🟡 MARKETING (GET LEAD)
  =========================================================
  */
  [
    'title' => 'Marketing ',
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
🟡 MARKETING (GET LEAD)
=========================================================
Tujuan:
- menghasilkan lead
- monitoring funnel
- evaluasi campaign
- tracking histori marketing
=========================================================
*/

[
  'title' => 'Laporan Marketing',
  'icon' => 'fas fa-chart-pie',
  'pages' => [

    // Dashboard
    'marketing-dashboard',

    // Lead Management
    'marketing-lead-masuk',
    'marketing-lead-followup',
    'marketing-lead-qualified',
    'marketing-lead-assignment',

    // Campaign
    'marketing-campaign',
    'marketing-content',
    'marketing-ads',
    'marketing-wa',

    // Monitoring
    'marketing-monitor-lead',
    'marketing-monitor-sla',
    'marketing-monitor-budget',
    'marketing-monitor-traffic',

    // Rekap / Laporan
    'marketing-laporan-lead',
    'marketing-laporan-campaign',
    'marketing-laporan-funnel',
    'marketing-laporan-roi',
    'marketing-laporan-team',

    // Analisa
    'marketing-analisa-conversion',
    'marketing-analisa-source',
    'marketing-analisa-content',

    // Riwayat
    'marketing-riwayat-lead',
    'marketing-riwayat-campaign',
    'marketing-riwayat-komunikasi',
    'marketing-riwayat-assignment',
  ],

  'children' => [

    /*
    =========================================================
    📊 DASHBOARD
    =========================================================
    */
    [
      'label' => 'Dashboard Marketing',
      'url'   => 'marketing-dashboard.php',
      'page'  => 'marketing-dashboard'
    ],

    /*
    =========================================================
    👥 LEAD MANAGEMENT
    =========================================================
    */
    [
      'label' => 'Lead Masuk',
      'url'   => 'marketing-lead-masuk.php',
      'page'  => 'marketing-lead-masuk'
    ],

    [
      'label' => 'Follow Up Lead',
      'url'   => 'marketing-lead-followup.php',
      'page'  => 'marketing-lead-followup'
    ],

    [
      'label' => 'Lead Qualified',
      'url'   => 'marketing-lead-qualified.php',
      'page'  => 'marketing-lead-qualified'
    ],

    [
      'label' => 'Assignment Lead',
      'url'   => 'marketing-lead-assignment.php',
      'page'  => 'marketing-lead-assignment'
    ],

    /*
    =========================================================
    📣 CAMPAIGN & CHANNEL
    =========================================================
    */
    [
      'label' => 'Campaign Marketing',
      'url'   => 'marketing-campaign.php',
      'page'  => 'marketing-campaign'
    ],

    [
      'label' => 'Content Marketing',
      'url'   => 'marketing-content.php',
      'page'  => 'marketing-content'
    ],

    [
      'label' => 'Ads Management',
      'url'   => 'marketing-ads.php',
      'page'  => 'marketing-ads'
    ],

    [
      'label' => 'WA Inquiry',
      'url'   => 'marketing-wa.php',
      'page'  => 'marketing-wa'
    ],

    /*
    =========================================================
    📡 MONITORING
    =========================================================
    */
    [
      'label' => 'Monitor Lead',
      'url'   => 'marketing-monitor-lead.php',
      'page'  => 'marketing-monitor-lead'
    ],

    [
      'label' => 'Monitor SLA Response',
      'url'   => 'marketing-monitor-sla.php',
      'page'  => 'marketing-monitor-sla'
    ],

    [
      'label' => 'Monitor Budget Ads',
      'url'   => 'marketing-monitor-budget.php',
      'page'  => 'marketing-monitor-budget'
    ],

    [
      'label' => 'Monitor Traffic',
      'url'   => 'marketing-monitor-traffic.php',
      'page'  => 'marketing-monitor-traffic'
    ],

    /*
    =========================================================
    📑 REKAP / LAPORAN
    =========================================================
    */
    [
      'label' => 'Laporan Lead',
      'url'   => 'marketing-laporan-lead.php',
      'page'  => 'marketing-laporan-lead'
    ],

    [
      'label' => 'Laporan Campaign',
      'url'   => 'marketing-laporan-campaign.php',
      'page'  => 'marketing-laporan-campaign'
    ],

    [
      'label' => 'Laporan Funnel',
      'url'   => 'marketing-laporan-funnel.php',
      'page'  => 'marketing-laporan-funnel'
    ],

    [
      'label' => 'Laporan ROI Marketing',
      'url'   => 'marketing-laporan-roi.php',
      'page'  => 'marketing-laporan-roi'
    ],

    [
      'label' => 'Laporan Team Marketing',
      'url'   => 'marketing-laporan-team.php',
      'page'  => 'marketing-laporan-team'
    ],

    /*
    =========================================================
    📈 ANALISA
    =========================================================
    */
    [
      'label' => 'Analisa Conversion',
      'url'   => 'marketing-analisa-conversion.php',
      'page'  => 'marketing-analisa-conversion'
    ],

    [
      'label' => 'Analisa Lead Source',
      'url'   => 'marketing-analisa-source.php',
      'page'  => 'marketing-analisa-source'
    ],

    [
      'label' => 'Analisa Content',
      'url'   => 'marketing-analisa-content.php',
      'page'  => 'marketing-analisa-content'
    ],

    /*
    =========================================================
    🕓 RIWAYAT / AUDIT TRAIL
    =========================================================
    */
    [
      'label' => 'Riwayat Lead',
      'url'   => 'marketing-riwayat-lead.php',
      'page'  => 'marketing-riwayat-lead'
    ],

    [
      'label' => 'Riwayat Campaign',
      'url'   => 'marketing-riwayat-campaign.php',
      'page'  => 'marketing-riwayat-campaign'
    ],

    [
      'label' => 'Riwayat Komunikasi',
      'url'   => 'marketing-riwayat-komunikasi.php',
      'page'  => 'marketing-riwayat-komunikasi'
    ],

    [
      'label' => 'Riwayat Assignment',
      'url'   => 'marketing-riwayat-assignment.php',
      'page'  => 'marketing-riwayat-assignment'
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