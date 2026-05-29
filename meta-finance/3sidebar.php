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
      ['label' => 'POS Anggaran', 'url' => 'master-pos.php', 'page' => 'master-pos'],
      ['label' => 'POS-COA Mapping', 'url' => 'master-map.php', 'page' => 'master-map'],
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
      'f-mata-anggaran',
      'f-budgeting',
      'f-coa',
      'f-jurnal-umum',
      'f-jurnal-khusus',
      'f-jurnal-penyesuaian',
      'f-jurnal-pembalik'
    ],
    'children' => [
      ['label' => 'Mata Anggaran', 'url' => 'f-mata-anggaran.php', 'page' => 'f-mata-anggaran'],
      ['label' => 'Budgeting', 'url' => 'f-budgeting.php', 'page' => 'f-budgeting'],


      ['label' => 'COA Master', 'url' => 'f-coa.php', 'page' => 'f-coa'],
      ['label' => 'Jurnal Umum', 'url' => 'f-jurnal-umum.php', 'page' => 'f-jurnal-umum'],
      ['label' => 'Jurnal Khusus', 'url' => 'f-jurnal-khusus.php', 'page' => 'f-jurnal-khusus'],
      ['label' => 'Jurnal Penyesuaian', 'url' => 'f-jurnal-penyesuaian.php', 'page' => 'f-jurnal-penyesuaian'],
      ['label' => 'Jurnal Pembalik', 'url' => 'f-jurnal-pembalik.php', 'page' => 'f-jurnal-pembalik'],
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
  ⚙️ KONFIGURASI
  =========================================================
  */
  [
    'title' => 'Konfigurasi',
    'icon' => 'fas fa-sliders-h',
    'pages' => ['config-jurnal-khusus','setting-system'],
    'children' => [

      ['label' => 'Jurnal Khusus', 'url' => 'config-jurnal-khusus.php', 'page' => 'config-jurnal-khusus'],
      
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
        <!-- 💰 KEUANGAN -->
        <!-- ========================================================= -->
        <li class="nav-item has-treeview">

          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-wallet"></i>
            <p>
              Keuangan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">

            <!-- ========================================================= -->
            <!-- 📑 DASHBOARD KEUANGAN -->
            <!-- ========================================================= -->
            <li class="nav-item has-treeview">

              <a href="keuangan-dashboard.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Dashboard Keuangan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="akuntansi-dashboard.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard Akuntansi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dashboard-finance.php" class="nav-link" title="Isi:

cash position
current ratio
quick ratio
gross margin
net margin
ROI
DER
operating margin
expense ratio">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard Keuangan</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="akuntansi-dashboard-cashflow.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard Cashflow</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="akuntansi-dashboard-profit.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard Profit</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="akuntansi-dashboard-neraca.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard Neraca</p>
                  </a>
                </li>

              </ul>
            </li>

            <!-- ========================================================= -->
<!-- 📑 FINANCIAL TRANSACTIONS -->
<!-- ========================================================= -->
<li class="nav-item has-treeview">

  <a href="finance-transactions.php" class="nav-link">
    <i class="fas fa-exchange-alt nav-icon"></i>
    <p>
      Transaksi Keuangan
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>

  <ul class="nav nav-treeview">

    <!-- BUDGET STRUCTURE -->
    <li class="nav-item">
      <a href="budget-structure.php"
         class="nav-link"
         title="Struktur mata anggaran / budget account structure, serta mapping POS many to one COA">
        <i class="far fa-circle nav-icon"></i>
        <p>Mata Anggaran</p>
      </a>
    </li>

    <!-- PLAN BUDGETING -->
    <li class="nav-item">
      <a href="plan-budgeting.php"
         class="nav-link"
         title="Budget revenue target and budget expense limit">
        <i class="far fa-circle nav-icon"></i>
        <p>Penyusunan Budgeting</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="plan-budgeting.php"
         class="nav-link"
         title="Budget revenue target and budget expense limit">
        <i class="far fa-circle nav-icon"></i>
        <p>Revisi Budgeting</p>
      </a>
    </li>

    <!-- INVOICE MANAGEMENT -->
    <li class="nav-item">
      <a href="invoice-management.php"
         class="nav-link"
         title="Billing schedule, invoice, due date, collection, and payment management. Commonly used for SaaS, project milestones, subscriptions, maintenance, rentals, and infrastructure services.">
        <i class="far fa-circle nav-icon"></i>
        <p>Invoice Management</p>
      </a>
    </li>

    <!-- EXPENSE MANAGEMENT -->
    <li class="nav-item">
      <a href="expense-management.php"
         class="nav-link"
         title="Expense category, expense request, approval, disbursement, and reimbursement management">
        <i class="far fa-circle nav-icon"></i>
        <p>Expense Management</p>
      </a>
    </li>

    <!-- APPROVAL CENTER -->
    <li class="nav-item">
      <a href="approval-center.php"
         class="nav-link"
         title="Budget approval, expense approval, payment approval, and reimbursement approval">
        <i class="far fa-circle nav-icon"></i>
        <p>Approval Center</p>
      </a>
    </li>

    <!-- CASH IN -->
    <li class="nav-item">
      <a href="cash-in.php"
         class="nav-link"
         title="Record incoming cash transactions">
        <i class="far fa-circle nav-icon"></i>
        <p>Cash In</p>
      </a>
    </li>

    <!-- CASH OUT -->
    <li class="nav-item">
      <a href="cash-out.php"
         class="nav-link"
         title="Record outgoing cash transactions">
        <i class="far fa-circle nav-icon"></i>
        <p>Cash Out</p>
      </a>
    </li>

    <!-- PETTY CASH -->
    <li class="nav-item">
      <a href="petty-cash.php"
         class="nav-link"
         title="Used for small operational expenses that are inefficient to process through bank transfer">
        <i class="far fa-circle nav-icon"></i>
        <p>Petty Cash</p>
      </a>
    </li>

    <!-- BANK MANAGEMENT -->
    <li class="nav-item">
      <a href="bank-management.php"
         class="nav-link"
         title="Bank accounts, balances, bank statements, interbank transfers, and bank reconciliation">
        <i class="far fa-circle nav-icon"></i>
        <p>Bank Management</p>
      </a>
    </li>

    <!-- ACCOUNTS RECEIVABLE -->
    <li class="nav-item">
      <a href="accounts-receivable.php"
         class="nav-link"
         title="Create invoice, receive payment, write-off, and receivable adjustment">
        <i class="far fa-circle nav-icon"></i>
        <p>Accounts Receivable (AR)</p>
      </a>
    </li>

    <!-- ACCOUNTS PAYABLE -->
    <li class="nav-item">
      <a href="accounts-payable.php"
         class="nav-link"
         title="Receive bill, supplier payment, and payable adjustment">
        <i class="far fa-circle nav-icon"></i>
        <p>Accounts Payable (AP)</p>
      </a>
    </li>

    <!-- PREPAID EXPENSE -->
    <li class="nav-item">
      <a href="prepaid-expense.php"
         class="nav-link"
         title="Register prepaid expenses and amortization posting. Cash has been paid but benefits are not fully used yet. Examples: annual rent, insurance, software licenses.">
        <i class="far fa-circle nav-icon"></i>
        <p>Prepaid Expense</p>
      </a>
    </li>

    <!-- DEFERRED REVENUE -->
    <li class="nav-item">
      <a href="deferred-revenue.php"
         class="nav-link"
         title="Register deferred revenue and revenue recognition. Cash has been received but services have not been fully delivered yet. Examples: annual subscriptions, project down payments, maintenance contracts.">
        <i class="far fa-circle nav-icon"></i>
        <p>Deferred Revenue</p>
      </a>
    </li>

    <!-- FIXED ASSET -->
    <li class="nav-item">
      <a href="fixed-assets.php"
         class="nav-link"
         title="Asset registration, acquisition cost, useful life, depreciation, accumulated depreciation, and asset disposal">
        <i class="far fa-circle nav-icon"></i>
        <p>Fixed Assets</p>
      </a>
    </li>

    <!-- COA MASTER -->
    <li class="nav-item">
      <a href="chart-of-accounts.php"
         class="nav-link"
         title="Chart of Accounts (COA) master data management">
        <i class="far fa-circle nav-icon"></i>
        <p>Chart of Accounts</p>
      </a>
    </li>

     <!-- ENTRIES JOURNAL -->
    <li class="nav-item">
      <a href="fi-entries-journal.php"
         class="nav-link"
         title="Manual accounting journal entries">
        <i class="far fa-circle nav-icon"></i>
        <p>Journal Entries</p>
      </a>
    </li>

    <!-- GENERAL JOURNAL -->
    <li class="nav-item">
      <a href="fi-general-journal.php"
         class="nav-link"
         title="Manual accounting journal entries">
        <i class="far fa-circle nav-icon"></i>
        <p>General Journal</p>
      </a>
    </li>

    <!-- SPECIAL JOURNAL -->
    <li class="nav-item">
      <a href="special-journal.php"
         class="nav-link"
         title="Special journals for recurring transaction categories such as sales, purchases, cash receipts, and cash disbursements">
        <i class="far fa-circle nav-icon"></i>
        <p>Special Journal</p>
      </a>
    </li>

    <!-- ADJUSTMENT JOURNAL -->
    <li class="nav-item">
      <a href="adjustment-journal.php"
         class="nav-link"
         title="Adjustment entries for accruals, depreciation, prepaid expense amortization, and corrections">
        <i class="far fa-circle nav-icon"></i>
        <p>Adjustment Journal</p>
      </a>
    </li>

    <!-- REVERSING JOURNAL -->
    <li class="nav-item">
      <a href="reversing-journal.php"
         class="nav-link"
         title="Reverse previous adjustment journal entries in the next accounting period">
        <i class="far fa-circle nav-icon"></i>
        <p>Reversing Journal</p>
      </a>
    </li>

  </ul>
</li>

      <!-- ========================================================= -->
      <!-- 📑 MONITORING KEUANGAN -->
      <!-- ========================================================= -->
      <li class="nav-item has-treeview">

        <a href="keuangan-monitoring.php" class="nav-link">
          <i class="fas fa-desktop nav-icon"></i>
          <p>
            Monitor Keuangan
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>

        <ul class="nav nav-treeview">

          <!-- MONITORING -->
                     <li class="nav-item">
            <a href="akuntansi-monitor-hutang.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>cash position</p>
            </a>
          </li>


          
<li class="nav-item">
            <a href="akuntansi-monitor-overbudget.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Monitor Outstanding Expense</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="akuntansi-monitor-overbudget.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Monitor Over Budget</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="akuntansi-monitor-overbudget.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Monitor Pending Approval</p>
            </a>
          </li>
                  <li class="nav-item">
            <a href="akuntansi-monitor-overbudget.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Monitor Expense Realization</p>
            </a>
          </li>  

          <li class="nav-item">
            <a href="akuntansi-monitor-piutang.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Monitor Piutang Jatuh Tempo</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="akuntansi-monitor-hutang.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Monitor Hutang Jatuh Tempo</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="akuntansi-monitor-hutang.php" class="nav-link" title="Piutang customer overdue">
              <i class="far fa-circle nav-icon"></i>
              <p>Accounts Receivable (AR) overdue</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="akuntansi-monitor-hutang.php" class="nav-link" title="Hutang supplier/vendor. due">
              <i class="far fa-circle nav-icon"></i>
              <p>Accounts Payable (AP) due</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="akuntansi-monitor-hutang.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Monitor Collection</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="akuntansi-monitor-hutang.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Monitor Outstanding Invoice</p>
            </a>
          </li>
          

           <li class="nav-item">
            <a href="akuntansi-monitor-hutang.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Aliquidity warning</p>
            </a>
          </li>
          
          
          
<li class="nav-item">
            <a href="akuntansi-monitor-balance.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Monitor Saldo Tidak Balance</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="akuntansi-monitor-jurnal.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Monitor Jurnal Tidak Balance</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="akuntansi-neraca-saldo.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Neraca Saldo</p>
            </a>
          </li>

          <!-- FIXED ASSET -->
          <li class="nav-item">
            <a href="finance-monitor-asset-position.php" class="nav-link" title="Isi:

            nilai buku,
            umur manfaat,
            akumulasi depresiasi,
            nilai sisa.">
            <i class="far fa-circle nav-icon"></i>
            <p>Asset Position Monitoring</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="finance-monitor-asset-reconciliation.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Asset Reconciliation Monitoring</p>
          </a>
        </li>

        <!-- PREPAID -->
        <li class="nav-item">
          <a href="finance-monitor-prepaid.php" class="nav-link" title="Isi:

          saldo tersisa,
          periode aktif,
          outstanding amortization.">
          <i class="far fa-circle nav-icon"></i>
          <p>Prepaid Expense Monitoring</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="finance-monitor-prepaid-reconciliation.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Prepaid Reconciliation Monitoring</p>
        </a>
      </li>

      <!-- DEFERRED -->
      <li class="nav-item">
        <a href="finance-monitor-deferred-revenue.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Deferred Revenue Monitoring</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="finance-monitor-deferred-reconciliation.php" class="nav-link" title="Isi:

        saldo liability tersisa,
        pending recognition.">
        <i class="far fa-circle nav-icon"></i>
        <p>Deferred Revenue Reconciliation Monitoring</p>
      </a>
    </li>

  </ul>
</li>

<!-- ========================================================= -->
<!-- 📑 LAPORAN KEUANGAN -->
<!-- ========================================================= -->
<li class="nav-item has-treeview">

  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-folder-open"></i>
    <p>
      Laporan Keuangan
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>

  <ul class="nav nav-treeview">

    <!-- LAPORAN -->
    <li class="nav-item">
      <a href="saldo-buku-besar.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Buku Besar Saldo/Rekap</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="akuntansi-laporan-laba-rugi.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Laba Rugi</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="akuntansi-laporan-perubahan-modal.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Perubahan Modal</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="akuntansi-laporan-neraca.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Neraca</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="akuntansi-laporan-arus-kas.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Arus Kas</p>
      </a>
    </li>

    <!-- FIXED ASSET -->
    <li class="nav-item">
      <a href="finance-report-fixed-asset.php" class="nav-link" title="Isi:

      daftar aset,
      nilai perolehan,
      akumulasi,
      nilai buku.">
      <i class="far fa-circle nav-icon"></i>
      <p>Fixed Asset Report</p>
    </a>
  </li>

  <li class="nav-item">
    <a href="finance-report-depreciation.php" class="nav-link" title="Isi:

    penyusutan per periode,
    per akun,
    per aset.">
    <i class="far fa-circle nav-icon"></i>
    <p>Depreciation Report</p>
  </a>
</li>

<!-- PREPAID -->
<li class="nav-item">
  <a href="finance-report-prepaid.php" class="nav-link">
    <i class="far fa-circle nav-icon"></i>
    <p>Prepaid Expense Report</p>
  </a>
</li>

<li class="nav-item">
  <a href="finance-report-prepaid-amortization.php" class="nav-link">
    <i class="far fa-circle nav-icon"></i>
    <p>Prepaid Amortization Report</p>
  </a>
</li>

<!-- DEFERRED -->
<li class="nav-item">
  <a href="finance-report-deferred-revenue.php" class="nav-link">
    <i class="far fa-circle nav-icon"></i>
    <p>Deferred Revenue Report</p>
  </a>
</li>

<li class="nav-item">
  <a href="finance-report-revenue-recognition.php" class="nav-link">
    <i class="far fa-circle nav-icon"></i>
    <p>Revenue Recognition Report</p>
  </a>
</li>


 <!-- Expense Report -->

 <li class="nav-item">
  <a href="finance-report-revenue-recognition.php" class="nav-link" title="Expense Report
Expense by Department
Expense by Project
Expense vs Budget
Reimbursement Report">
    <i class="far fa-circle nav-icon"></i>
    <p>Expense Report</p>
  </a>
</li>


 <li class="nav-item">
  <a href="finance-report-revenue-recognition.php" class="nav-link" title="Expense Report
Expense by Department
Expense by Project
Expense vs Budget
Reimbursement Report">
    <i class="far fa-circle nav-icon"></i>
    <p>Reimbursement Report</p>
  </a>
</li>

<!-- [
  'label' => 'AR Aging Report',
  'url'   => 'finance-report-ar-aging.php',
  'page'  => 'finance-report-ar-aging'
],

[
  'label' => 'AP Aging Report',
  'url'   => 'finance-report-ap-aging.php',
  'page'  => 'finance-report-ap-aging'
],
 -->
 <li class="nav-item">
  <a href="finance-report-ar-aging.php" class="nav-link" title="Karena:

grouped
summarized
periodical
printable">
    <i class="far fa-circle nav-icon"></i>
    <p>AR Aging Report</p>
  </a>
</li>
 <li class="nav-item">
  <a href="finance-report-ap-aging.php" class="nav-link" title="Karena:

grouped
summarized
periodical
printable">
    <i class="far fa-circle nav-icon"></i>
    <p>AP Aging Report</p>
  </a>
</li>

</ul>
</li>

<!-- ========================================================= -->
<!-- 📈 ANALISA KEUANGAN -->
<!-- ========================================================= -->
<li class="nav-item has-treeview">

  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-chart-bar"></i>
    <p>
      Analisa Keuangan
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>

  <ul class="nav nav-treeview">

<!-- [
  'label' => 'Budget vs Actual Analysis',
  'url'   => 'finance-analysis-budget-vs-actual.php',
  'page'  => 'finance-analysis-budget-vs-actual'
], -->
<li class="nav-item">
      <a href="finance-analysis-budget-vs-actual.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Budget vs Actual Analysis</p>
      </a>
    </li>
   <!--  [
  'label' => 'Break Even Point Analysis',
  'url'   => 'finance-analysis-bep.php',
  'page'  => 'finance-analysis-bep'
], -->
<li class="nav-item">
      <a href="finance-analysis-bep.php" class="nav-link" title="BEP simulation sangat powerful.

Contoh:

kalau gaji naik
sewa naik
COGS naik
target margin berubah

langsung hitung:
minimal omzet baru.">
        <i class="far fa-circle nav-icon"></i>
        <p>Break Even Point Analysis</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="akuntansi-analisa-rasio-keuangan.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Analisa Rasio Keuangan</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="akuntansi-analisa-trend.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Analisa Growth</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="akuntansi-analisa-cashflow.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Analisa Cashflow Trend</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="akuntansi-analisa-profit.php" class="nav-link" title="masih terlalu umum:Yang Sebaiknya Ada
A. Product Profitability
margin per menu
margin per category
food cost ratio
B. Customer Profitability
customer paling untung
customer paling rugi
C. Branch Profitability
laba per outlet
D. Channel Profitability
dine in
online delivery
takeaway<br>
Profitability Analysis
 ├── Product Profitability
 ├── Customer Profitability
 ├── Branch Profitability
 ├── Channel Profitability
">
        <i class="far fa-circle nav-icon"></i>
        <p>Analisa Profitabilitas</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="akuntansi-analisa-profit.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Expense Trend</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="akuntansi-analisa-profit.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Expense Growth</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="akuntansi-analisa-profit.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Cost Structure Analysis</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="akuntansi-analisa-profit.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Department Spending Analysis</p>
      </a>
    </li>


  </ul>
</li>

<!-- ========================================================= -->
<!-- 🕓 RIWAYAT / AUDIT TRAIL -->
<!-- ========================================================= -->
<li class="nav-item has-treeview">

  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-history"></i>
    <p>
      Riwayat / Audit Trail
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>

  <ul class="nav nav-treeview">

    <li class="nav-item">
      <a href="akuntansi-riwayat-jurnal.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Audit Jurnal</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="akuntansi-audit-log.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Audit Log Posting</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="akuntansi-riwayat-koreksi.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Riwayat Koreksi</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="riwayat-buku-besar.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Buku Besar Detail</p>
      </a>
    </li>

    <!-- FIXED ASSET -->
    <li class="nav-item">
      <a href="finance-history-asset-ledger.php" class="nav-link" title="Histori: acquisition,adjustment,depreciation,disposal.">
        <i class="far fa-circle nav-icon"></i>
        <p>Asset Ledger</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="finance-ar-subledger-report.php" class="nav-link" title="Kartu Piutang.Fungsi:

histori mutasi piutang per customer
invoice
pembayaran
retur
write off
saldo berjalan">
        <i class="far fa-circle nav-icon"></i>
        <p>Accounts Receivable Ledger</p>
      </a>
    </li>


    <li class="nav-item">
      <a href="finance-ap-subledger-report.php" class="nav-link" title="Kartu Hutang.Sama:

bill
pembayaran
adjustment
saldo hutang berjalan">
        <i class="far fa-circle nav-icon"></i>
        <p>Accounts Payable Ledger</p>
      </a>
    </li>
<!-- [
  'label' => 'Accounts Receivable Ledger',
  'url'   => 'finance-history-ar-ledger.php',
  'page'  => 'finance-history-ar-ledger'
],

[
  'label' => 'Accounts Payable Ledger',
  'url'   => 'finance-history-ap-ledger.php',
  'page'  => 'finance-history-ap-ledger'
], -->
    <!-- PREPAID -->
    <li class="nav-item">
      <a href="finance-history-prepaid-ledger.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Prepaid Expense Ledger</p>
      </a>
    </li>

    <!-- DEFERRED -->
    <li class="nav-item">
      <a href="finance-history-deferred-ledger.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Deferred Revenue Ledger</p>
      </a>
    </li>

 
 <!-- EXPENSE -->
     <li class="nav-item">
      <a href="finance-history-deferred-ledger.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Expense Ledger</p>
      </a>
    </li>


     <li class="nav-item">
      <a href="finance-history-deferred-ledger.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Approval History</p>
      </a>
    </li>


     <li class="nav-item">
      <a href="finance-history-deferred-ledger.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Reimbursement History</p>
      </a>
    </li>


     <li class="nav-item">
      <a href="finance-history-deferred-ledger.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Expense Audit Trail</p>
      </a>
    </li>

  </ul>
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