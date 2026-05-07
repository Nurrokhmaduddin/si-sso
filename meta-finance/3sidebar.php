<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Brand Logo -->
  <a href="index.php" class="brand-link text-center">
    <span class="brand-text font-weight-light">Finance</span>
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
🟣 FINANCE (MAINTAIN CASHFLOW & PROFITABILITY)
  =========================================================
  */
  [
    'title' => 'Finance ',
    'icon' => 'fas fa-tasks',
    'pages' => [
      'Marketing-inden','Marketing-order','Marketing-repair','Marketing-retur',
      'Marketing-monitor','Marketing-riwayat'
    ],
    'children' => [
      ['label' => 'Mata Anggaran', 'url' => 'Marketing-repair.php', 'page' => 'Marketing-repair'],
      ['label' => 'Budgeting', 'url' => 'Marketing-repair.php', 'page' => 'Marketing-repair'],


      ['label' => 'COA Master', 'url' => 'Marketing-inden.php', 'page' => 'Marketing-inden'],
      ['label' => 'Jurnal Umum', 'url' => 'Marketing-monitor.php', 'page' => 'Marketing-monitor'],
      ['label' => 'Jurnal Khusus', 'url' => 'Marketing-laporan.php', 'page' => 'Marketing-laporan'],
      ['label' => 'Jurnal Penyesuaian', 'url' => 'monitor-Marketing.php', 'page' => 'monitor-Marketing'],
      ['label' => 'Jurnal Pembalik', 'url' => 'Marketing-riwayat.php', 'page' => 'Marketing-riwayat'],
    ]
  ],
    

 /*
=========================================================
🟣 FINANCE (MAINTAIN CASHFLOW & PROFITABILITY)
=========================================================
Tujuan:
- menjaga cashflow perusahaan
- kontrol pemasukan & pengeluaran
- monitoring invoice & pembayaran
- menjaga profitabilitas bisnis
- memastikan laporan keuangan akurat
=========================================================
*/

[
  'title' => 'Laporan Finance',
  'icon' => 'fas fa-chart-pie',
  'pages' => [

    // Dashboard
    'finance-dashboard',

    // Cashflow & Transaction
    'finance-cash-in',
    'finance-cash-out',
    'finance-bank',
    'finance-petty-cash',
    'finance-jurnal',

    // Invoice & Billing
    'finance-invoice',
    'finance-billing',
    'finance-payment',
    'finance-collection',
    'finance-refund',

    // AP / AR
    'finance-ar',
    'finance-ap',
    'finance-aging',

    // Budget & Expense
    'finance-budget',
    'finance-expense',
    'finance-approval',

    // Monitoring
    'finance-monitor-cashflow',
    'finance-monitor-invoice',
    'finance-monitor-overdue',
    'finance-monitor-budget',
    'finance-monitor-profit',

    // Rekap / Laporan
    'finance-laporan-pl',
    'finance-laporan-cashflow',
    'finance-laporan-revenue',
    'finance-laporan-expense',
    'finance-laporan-margin',
    'finance-laporan-collection',

    // Analisa
    'finance-analisa-profit',
    'finance-analisa-client',
    'finance-analisa-cost',
    'finance-analisa-cashflow',

    // Riwayat
    'finance-riwayat-invoice',
    'finance-riwayat-payment',
    'finance-riwayat-expense',
    'finance-riwayat-approval',
    'finance-riwayat-jurnal',
  ],

  'children' => [

    /*
    =========================================================
    📊 DASHBOARD
    =========================================================
    */
    [
      'label' => 'Dashboard Finance',
      'url'   => 'finance-dashboard.php',
      'page'  => 'finance-dashboard'
    ],

    /*
    =========================================================
    💰 CASHFLOW & TRANSACTION
    =========================================================
    */
    [
      'label' => 'Cash In',
      'url'   => 'finance-cash-in.php',
      'page'  => 'finance-cash-in'
    ],

    [
      'label' => 'Cash Out',
      'url'   => 'finance-cash-out.php',
      'page'  => 'finance-cash-out'
    ],

    [
      'label' => 'Bank Management',
      'url'   => 'finance-bank.php',
      'page'  => 'finance-bank'
    ],

    [
      'label' => 'Petty Cash',
      'url'   => 'finance-petty-cash.php',
      'page'  => 'finance-petty-cash'
    ],

    [
      'label' => 'Jurnal Transaksi',
      'url'   => 'finance-jurnal.php',
      'page'  => 'finance-jurnal'
    ],

    /*
    =========================================================
    📄 INVOICE & BILLING
    =========================================================
    */
    [
      'label' => 'Invoice Client',
      'url'   => 'finance-invoice.php',
      'page'  => 'finance-invoice'
    ],

    [
      'label' => 'Billing Schedule',
      'url'   => 'finance-billing.php',
      'page'  => 'finance-billing'
    ],

    [
      'label' => 'Payment Received',
      'url'   => 'finance-payment.php',
      'page'  => 'finance-payment'
    ],

    [
      'label' => 'Collection Piutang',
      'url'   => 'finance-collection.php',
      'page'  => 'finance-collection'
    ],

    [
      'label' => 'Refund & Adjustment',
      'url'   => 'finance-refund.php',
      'page'  => 'finance-refund'
    ],

    /*
    =========================================================
    🧾 ACCOUNT RECEIVABLE / PAYABLE
    =========================================================
    */
    [
      'label' => 'Accounts Receivable',
      'url'   => 'finance-ar.php',
      'page'  => 'finance-ar'
    ],

    [
      'label' => 'Accounts Payable',
      'url'   => 'finance-ap.php',
      'page'  => 'finance-ap'
    ],

    [
      'label' => 'Aging Piutang',
      'url'   => 'finance-aging.php',
      'page'  => 'finance-aging'
    ],

    /*
    =========================================================
    📦 BUDGET & EXPENSE
    =========================================================
    */
    [
      'label' => 'Budget Management',
      'url'   => 'finance-budget.php',
      'page'  => 'finance-budget'
    ],

    [
      'label' => 'Expense Management',
      'url'   => 'finance-expense.php',
      'page'  => 'finance-expense'
    ],

    [
      'label' => 'Approval Finance',
      'url'   => 'finance-approval.php',
      'page'  => 'finance-approval'
    ],

    /*
    =========================================================
    📡 MONITORING
    =========================================================
    */
    [
      'label' => 'Monitor Cashflow',
      'url'   => 'finance-monitor-cashflow.php',
      'page'  => 'finance-monitor-cashflow'
    ],

    [
      'label' => 'Monitor Invoice',
      'url'   => 'finance-monitor-invoice.php',
      'page'  => 'finance-monitor-invoice'
    ],

    [
      'label' => 'Monitor Overdue',
      'url'   => 'finance-monitor-overdue.php',
      'page'  => 'finance-monitor-overdue'
    ],

    [
      'label' => 'Monitor Budget',
      'url'   => 'finance-monitor-budget.php',
      'page'  => 'finance-monitor-budget'
    ],

    [
      'label' => 'Monitor Profitability',
      'url'   => 'finance-monitor-profit.php',
      'page'  => 'finance-monitor-profit'
    ],

    /*
    =========================================================
    📑 REKAP / LAPORAN
    =========================================================
    */
    [
      'label' => 'Laporan Profit & Loss',
      'url'   => 'finance-laporan-pl.php',
      'page'  => 'finance-laporan-pl'
    ],

    [
      'label' => 'Laporan Cashflow',
      'url'   => 'finance-laporan-cashflow.php',
      'page'  => 'finance-laporan-cashflow'
    ],

    [
      'label' => 'Laporan Revenue',
      'url'   => 'finance-laporan-revenue.php',
      'page'  => 'finance-laporan-revenue'
    ],

    [
      'label' => 'Laporan Expense',
      'url'   => 'finance-laporan-expense.php',
      'page'  => 'finance-laporan-expense'
    ],

    [
      'label' => 'Laporan Margin',
      'url'   => 'finance-laporan-margin.php',
      'page'  => 'finance-laporan-margin'
    ],

    [
      'label' => 'Laporan Collection',
      'url'   => 'finance-laporan-collection.php',
      'page'  => 'finance-laporan-collection'
    ],

    /*
    =========================================================
    📈 ANALISA
    =========================================================
    */
    [
      'label' => 'Analisa Profit',
      'url'   => 'finance-analisa-profit.php',
      'page'  => 'finance-analisa-profit'
    ],

    [
      'label' => 'Analisa Client Revenue',
      'url'   => 'finance-analisa-client.php',
      'page'  => 'finance-analisa-client'
    ],

    [
      'label' => 'Analisa Cost',
      'url'   => 'finance-analisa-cost.php',
      'page'  => 'finance-analisa-cost'
    ],

    [
      'label' => 'Analisa Cashflow',
      'url'   => 'finance-analisa-cashflow.php',
      'page'  => 'finance-analisa-cashflow'
    ],

    /*
    =========================================================
    🕓 RIWAYAT / AUDIT TRAIL
    =========================================================
    */
    [
      'label' => 'Riwayat Invoice',
      'url'   => 'finance-riwayat-invoice.php',
      'page'  => 'finance-riwayat-invoice'
    ],

    [
      'label' => 'Riwayat Payment',
      'url'   => 'finance-riwayat-payment.php',
      'page'  => 'finance-riwayat-payment'
    ],

    [
      'label' => 'Riwayat Expense',
      'url'   => 'finance-riwayat-expense.php',
      'page'  => 'finance-riwayat-expense'
    ],

    [
      'label' => 'Riwayat Approval',
      'url'   => 'finance-riwayat-approval.php',
      'page'  => 'finance-riwayat-approval'
    ],

    [
      'label' => 'Riwayat Jurnal',
      'url'   => 'finance-riwayat-jurnal.php',
      'page'  => 'finance-riwayat-jurnal'
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