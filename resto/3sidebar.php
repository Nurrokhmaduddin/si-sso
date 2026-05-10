<!-- ========================================================= -->
<!-- MAIN SIDEBAR -->
<!-- ========================================================= -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- ======================================================= -->
  <!-- BRAND -->
  <!-- ======================================================= -->
  <a href="index.php" class="brand-link text-center">
    <span class="brand-text font-weight-light">
      RESTOMAN
    </span>
  </a>

  <div class="sidebar">

    <!-- ======================================================= -->
    <!-- USER PANEL -->
    <!-- ======================================================= -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center"
         style="border-bottom:1px solid rgba(255,255,255,.2);">

      <div class="image">
        <span class="img-circle elevation-2 d-flex align-items-center justify-content-center"
              style="width:40px;height:40px;background:#fff;">

          <i class="fas fa-user text-dark"></i>

        </span>
      </div>

      <div class="info ml-2">

        <a href="#" class="d-block text-white">
          SuperAdmin
        </a>

        <small class="text-success">
          <i class="fas fa-circle mr-1"></i>
          Online
        </small>

      </div>

    </div>

<?php

/*
=========================================================
RESTOMAN SIDEBAR ARCHITECTURE
=========================================================

LEVEL 1
- BUSINESS DOMAIN
  Dashboard
  Master Data
  Sales
  Operation Kitchen
  Operation Inventory
  Finance
  Pengaturan

LEVEL 2
- BUSINESS PURPOSE
  Dashboard
  Transaction
  Monitoring
  Report
  Analysis
  History

LEVEL 3
- FEATURES / MODULES
=========================================================
*/

$menu = [

  /*
  =========================================================
  DASHBOARD
  =========================================================
  */
  [
    'title' => 'Dashboard',
    'icon'  => 'fas fa-tachometer-alt',

    'pages' => [

      'dashboard-superadmin',
      'dashboard-manager',
      'dashboard-kasir',
      'dashboard-kitchen',
      'dashboard-waiter',

    ],

    'children' => [

      [
        'title' => 'Overview',
        'icon'  => 'fas fa-chart-pie',

        'children' => [

          [
            'label' => 'SuperAdmin Dashboard',
            'url'   => 'index.php',
            'page'  => 'dashboard-superadmin'
          ],

          [
            'label' => 'Manager Dashboard',
            'url'   => 'dashboard-manager.php',
            'page'  => 'dashboard-manager'
          ],

          [
            'label' => 'Kasir Dashboard',
            'url'   => 'dashboard-kasir.php',
            'page'  => 'dashboard-kasir'
          ],

          [
            'label' => 'Kitchen Dashboard',
            'url'   => 'dashboard-kitchen.php',
            'page'  => 'dashboard-kitchen'
          ],

          [
            'label' => 'Waiter Dashboard',
            'url'   => 'dashboard-waiter.php',
            'page'  => 'dashboard-waiter'
          ],

        ]
      ],

    ]
  ],

  /*
  =========================================================
  MASTER DATA
  =========================================================
  */
  [
    'title' => 'Master Data',
    'icon'  => 'fas fa-database',

    'pages' => [

      'master-kitchen',
      'master-menu',
      'master-category',
      'master-recipe',
      'master-raw-material',
      'master-package-menu',
      'master-supplier',
      'master-customer',
      'master-table',
      'master-payment-method',

      'master-coa',

    ],

    'children' => [

      [
        'title' => 'Data Management',
        'icon'  => 'fas fa-folder-open',

        'children' => [


          [
            'label' => 'Raw Materials',
            'url'   => 'master-raw-material.php',
            'page'  => 'master-raw-material'
          ],

          [
            'label' => 'Menu Recipe',
            'url'   => 'master-recipe.php',
            'page'  => 'master-recipe',
            'title'  => 'terdapat Bill of material dari tiap menu recipe'
          ],


          [
            'label' => 'Menu Category',
            'url'   => 'master-category.php',
            'page'  => 'master-category'
          ],



          [
            'label' => 'Package Menu',
            'url'   => 'master-package-menu.php',
            'page'  => 'master-package-menu'
          ],
          [
            'label' => 'Kitchen Area',
            'url'   => 'master-kitchen.php',
            'page'  => 'master-kitchen'
          ],
          [
            'label' => 'Table & Area',
            'url'   => 'master-table.php',
            'page'  => 'master-table'
          ],
          [
            'label' => 'Supplier',
            'url'   => 'master-supplier.php',
            'page'  => 'master-supplier'
          ],

          [
            'label' => 'Customer',
            'url'   => 'master-customer.php',
            'page'  => 'master-customer'
          ],


          [
            'label' => 'Payment Method',
            'url'   => 'master-payment-method.php',
            'page'  => 'master-payment-method'
          ],
          [
            'label' => 'Discount & Promo',
            'url'   => 'master-Discount-Promo.php',
            'page'  => 'master-Discount-Promo'
          ],

          // [
          //   'label' => 'COA / Chart of Account',
          //   'url'   => 'master-coa.php',
          //   'page'  => 'master-coa'
          // ],



        ]
      ],

    ]
  ],

  /*
  =========================================================
  SALES
  =========================================================
  */
  [
    'title' => 'Sales',
    'icon'  => 'fas fa-cash-register',

    'pages' => [

      'sales-pos',
      'sales-self-order',
      'sales-order-list',
      'sales-payment',
      'sales-discount',

      'sales-monitor',

      'sales-report',

      'sales-analysis',

      'sales-history',

    ],

    'children' => [

      /*
      =====================================================
      TRANSACTION
      =====================================================
      */
      [
        'title' => 'Transaction',
        'icon'  => 'fas fa-exchange-alt',

        'children' => [

          [
            'label' => 'Sales (Orders)',
            'url'   => 'sales-order-list.php',
            'page'  => 'sales-order-list'
          ],


          // [
          //   'label' => 'POS / Cashier',
          //   'url'   => 'sales-pos.php',
          //   'page'  => 'sales-pos'
          // ],

          // [
          //   'label' => 'Self Order QR',
          //   'url'   => 'sales-self-order.php',
          //   'page'  => 'sales-self-order'
          // ],

          // [
          //   'label' => 'Payment Transaction',
          //   'url'   => 'sales-payment.php',
          //   'page'  => 'sales-payment'
          // ],

          // [
          //   'label' => 'Discount & Promo',
          //   'url'   => 'sales-discount.php',
          //   'page'  => 'sales-discount'
          // ],

        ]
      ],

      /*
      =====================================================
      MONITORING
      =====================================================
      */
      [
        'title' => 'Monitoring',
        'icon'  => 'fas fa-desktop',

        'children' => [

          [
            'label' => 'Sales Monitoring',
            'url'   => 'sales-monitor.php',
            'page'  => 'sales-monitor'
          ],

        ]
      ],

      /*
      =====================================================
      REPORT
      =====================================================
      */
      [
        'title' => 'Report',
        'icon'  => 'fas fa-folder-open',

        'children' => [

          [
            'label' => 'Sales Report',
            'url'   => 'sales-report.php',
            'page'  => 'sales-report',
            'title' => 'by produk, by nota'
          ],

        ]
      ],

      /*
      =====================================================
      ANALYSIS
      =====================================================
      */
      [
        'title' => 'Analysis',
        'icon'  => 'fas fa-chart-bar',

        'children' => [

          [
            'label' => 'Sales Analysis',
            'url'   => 'sales-analysis.php',
            'page'  => 'sales-analysis'
          ],

        ]
      ],

      /*
      =====================================================
      HISTORY
      =====================================================
      */
      [
        'title' => 'History',
        'icon'  => 'fas fa-history',

        'children' => [

          [
            'label' => 'Sales History',
            'url'   => 'sales-history.php',
            'page'  => 'sales-history'
          ],

        ]
      ],

    ]
  ],

  
  /*
  =========================================================
  OPERATION INVENTORY
  =========================================================
  */
  [
    'title' => 'Operation Inventory',
    'icon'  => 'fas fa-boxes',

    'pages' => [

      'inventory-purchase',
      'inventory-stock-in',
      'inventory-stock-out',
      'inventory-stock-opname',

      'inventory-monitor',

      'inventory-report',

      'inventory-analysis',

      'inventory-history',

    ],

    'children' => [

      [
        'title' => 'Transaction',
        'icon'  => 'fas fa-exchange-alt',

        'children' => [

          [
            'label' => 'Purchase (Raw Material)',
            'url'   => 'inventory-purchase.php',
            'page'  => 'inventory-purchase'
          ],

          // [
          //   'label' => 'Stock In',
          //   'url'   => 'inventory-stock-in.php',
          //   'page'  => 'inventory-stock-in'
          // ],

          // [
          //   'label' => 'Stock Out',
          //   'url'   => 'inventory-stock-out.php',
          //   'page'  => 'inventory-stock-out'
          // ],

          [
            'label' => 'Stock Opname',
            'url'   => 'inventory-stock-opname.php',
            'page'  => 'inventory-stock-opname'
          ],

        ]
      ],

      [
        'title' => 'Monitoring',
        'icon'  => 'fas fa-desktop',

        'children' => [

          [
            'label' => 'Inventory Monitoring',
            'url'   => 'inventory-monitor.php',
            'page'  => 'inventory-monitor'
          ],

        ]
      ],

      [
        'title' => 'Report',
        'icon'  => 'fas fa-folder-open',

        'children' => [

           [
            'label' => 'Purchase Report',
            'url'   => 'inventory-report.php',
            'page'  => 'inventory-report',
            'title' => 'by produk, by supplier'
          ],
          [
            'label' => 'Inventory Report',
            'url'   => 'inventory-report.php',
            'page'  => 'inventory-report',
            'title' => 'LAPORAN KELUAR MASUK BAHAN BAKU by item'
          ],

        ]
      ],

      [
        'title' => 'Analysis',
        'icon'  => 'fas fa-chart-bar',

        'children' => [

          [
            'label' => 'Inventory Analysis',
            'url'   => 'inventory-analysis.php',
            'page'  => 'inventory-analysis'
          ],

        ]
      ],

      [
        'title' => 'History',
        'icon'  => 'fas fa-history',

        'children' => [

          [
            'label' => 'Inventory History',
            'url'   => 'inventory-history.php',
            'page'  => 'inventory-history'
          ],

        ]
      ],

    ]
  ],
/*
  =========================================================
  OPERATION KITCHEN
  =========================================================
  */
  [
    'title' => 'Operation Kitchen',
    'icon'  => 'fas fa-utensils',

    'pages' => [

      'kitchen-order-board',
      'kitchen-production',
      'kitchen-ready-serve',

      'kitchen-monitor',

      'kitchen-report',

      'kitchen-analysis',

      'kitchen-history',

    ],

    'children' => [

      [
        'title' => 'Transaction',
        'icon'  => 'fas fa-exchange-alt',

        'children' => [

          // [
          //   'label' => 'Kitchen Display',
          //   'url'   => 'kitchen-order-board.php',
          //   'page'  => 'kitchen-order-board'
          // ],
 [
            'label' => 'Work in Process',
            'url'   => 'kitchen-production.php',
            'page'  => 'kitchen-production'
          ],
          [
            'label' => 'Production Process',
            'url'   => 'kitchen-production.php',
            'page'  => 'kitchen-production'
          ],

          // [
          //   'label' => 'Ready To Serve',
          //   'url'   => 'kitchen-ready-serve.php',
          //   'page'  => 'kitchen-ready-serve'
          // ],

        ]
      ],

      [
        'title' => 'Monitoring',
        'icon'  => 'fas fa-desktop',

        'children' => [

          [
            'label' => 'Kitchen Monitoring',
            'url'   => 'kitchen-monitor.php',
            'page'  => 'kitchen-monitor',
            'title' => 'tampilan Kitchen Display'
          ],

        ]
      ],

      [
        'title' => 'Report',
        'icon'  => 'fas fa-folder-open',

        'children' => [

          [
            'label' => 'Kitchen Report',
            'url'   => 'kitchen-report.php',
            'page'  => 'kitchen-report'
          ],

        ]
      ],

      [
        'title' => 'Analysis',
        'icon'  => 'fas fa-chart-bar',

        'children' => [

          [
            'label' => 'Kitchen Analysis',
            'url'   => 'kitchen-analysis.php',
            'page'  => 'kitchen-analysis'
          ],

        ]
      ],

      [
        'title' => 'History',
        'icon'  => 'fas fa-history',

        'children' => [

          [
            'label' => 'Kitchen History',
            'url'   => 'kitchen-history.php',
            'page'  => 'kitchen-history'
          ],

        ]
      ],

    ]
  ],

  /*
=========================================================
FINANCE
=========================================================
*/
[
  'title' => 'Finance',
  'icon'  => 'fas fa-wallet',

  'pages' => [    

    /* TRANSACTION */
    'finance-budgeting',
    'finance-cash-in',
    'finance-cash-out',
    'finance-journal',
    'finance-adjustment-journal',

    /* MONITORING */
    'finance-monitor',
    'finance-expense-monitor',
    'finance-profit-monitor',

    /* REPORT */
    'finance-equity-report',
    'finance-profit-loss',
    'finance-balance-sheet',
    'finance-cashflow-report',

    /* ANALYSIS */
    'finance-analysis',
    'finance-expense-analysis',
    'finance-profit-analysis',

    /* HISTORY */
    'finance-ledger',
    'finance-journal-history',
    'finance-budget-history',

  ],

  'children' => [

    
    /*
    =====================================================
    TRANSACTION
    =====================================================
    */
    [
  'title' => 'Transaction',
  'icon'  => 'fas fa-exchange-alt',

  'children' => [

    [
      'label' => 'Cash In',
      'url'   => 'cash-in.php',
      'page'  => 'cash-in',
      'title' => 'Record incoming cash transactions'
    ],

    [
      'label' => 'Cash Out',
      'url'   => 'cash-out.php',
      'page'  => 'cash-out',
      'title' => 'Record outgoing cash transactions'
    ],

    [
      'label' => 'Accounts Receivable (AR)',
      'url'   => 'accounts-receivable.php',
      'page'  => 'accounts-receivable',
      'title' => 'Create invoice, receive payment, write-off, and receivable adjustment, JURNAL PELUNASAN PIUTANG by customer, by nota'
    ],

    [
      'label' => 'Accounts Payable (AP)',
      'url'   => 'accounts-payable.php',
      'page'  => 'accounts-payable',
      'title' => 'Receive bill, supplier payment, and payable adjustment, JURNAL PEMBAYARAN HUTANG by supplier, by nota'
    ],

    [
      'label' => 'Prepaid Expense',
      'url'   => 'prepaid-expense.php',
      'page'  => 'prepaid-expense',
      'title' => 'Cash paid in advance for future benefits such as rent, insurance, or software licenses'
    ],

    [
      'label' => 'Deferred Revenue',
      'url'   => 'deferred-revenue.php',
      'page'  => 'deferred-revenue',
      'title' => 'Cash received before services are fully delivered such as subscriptions or project advances'
    ],

    [
      'label' => 'Fixed Assets',
      'url'   => 'fixed-assets.php',
      'page'  => 'fixed-assets',
      'title' => 'Asset registration, acquisition cost, depreciation, and disposal management'
    ],

    [
      'label' => 'Chart of Accounts',
      'url'   => 'chart-of-accounts.php',
      'page'  => 'chart-of-accounts',
      'title' => 'Master data of all accounting accounts'
    ],

    [
      'label' => 'General Journal',
      'url'   => 'general-journal.php',
      'page'  => 'general-journal',
      'title' => 'Manual journal entry recording'
    ],

    // [
    //   'label' => 'Special Journal',
    //   'url'   => 'special-journal.php',
    //   'page'  => 'special-journal',
    //   'title' => 'Recurring transaction journals such as sales, purchases, cash receipts, and cash payments'
    // ],

    // [
    //   'label' => 'Adjustment Journal',
    //   'url'   => 'adjustment-journal.php',
    //   'page'  => 'adjustment-journal',
    //   'title' => 'Accruals, depreciation, prepaid amortization, and corrections'
    // ],

    // [
    //   'label' => 'Reversing Journal',
    //   'url'   => 'reversing-journal.php',
    //   'page'  => 'reversing-journal',
    //   'title' => 'Reversal of previous adjustment journal entries'
    // ],
  ]
],

    /*
    =====================================================
    MONITORING
    =====================================================
    */
    [
      'title' => 'Monitoring',
      'icon'  => 'fas fa-desktop',

      'children' => [

        [
          'label' => 'Cashflow Monitoring',
          'url'   => 'finance-monitor.php',
          'page'  => 'finance-monitor'
        ],

        [
          'label' => 'Expense Monitoring',
          'url'   => 'finance-expense-monitor.php',
          'page'  => 'finance-expense-monitor'
        ],

        [
          'label' => 'Profit Monitoring',
          'url'   => 'finance-profit-monitor.php',
          'page'  => 'finance-profit-monitor'
        ],

        [
          'label' => ' Over Budget',
          'url'   => 'finance-overbudget-monitor.php',
          'page'  => 'finance-overbudget-monitor'
        ],

        [
          'label' => ' Piutang Jatuh Tempo',
          'url'   => 'finance-ar-due-monitor.php',
          'page'  => 'finance-ar-due-monitor',
          'title' => 'menampilkan saldo piutang by customer'
        ],

        [
          'label' => ' Hutang Jatuh Tempo',
          'url'   => 'finance-ap-due-monitor.php',
          'page'  => 'finance-ap-due-monitor',
          'title' => 'menampilkan saldo hutang by supplier'
        ],

      ]
    ],
    /*
    =====================================================
    REPORT
    =====================================================
    */
    [
      'title' => 'Report',
      'icon'  => 'fas fa-folder-open',

      'children' => [

        [
          'label' => 'Profit & Loss',
          'url'   => 'finance-profit-loss.php',
          'page'  => 'finance-profit-loss'
        ],
        [
          'label' => 'Changes in Equity',
          'url'   => 'finance-equity-report.php',
          'page'  => 'finance-equity-report'
        ],
        [
          'label' => 'Balance Sheet',
          'url'   => 'finance-balance-sheet.php',
          'page'  => 'finance-balance-sheet'
        ],

        [
          'label' => 'Cashflow Report',
          'url'   => 'finance-cashflow-report.php',
          'page'  => 'finance-cashflow-report'
        ],

      ]
    ],

    /*
    =====================================================
    ANALYSIS
    =====================================================
    */
    [
      'title' => 'Analysis',
      'icon'  => 'fas fa-chart-bar',

      'children' => [

        [
          'label' => 'Financial Analysis',
          'url'   => 'finance-analysis.php',
          'page'  => 'finance-analysis'
        ],

        [
          'label' => 'Expense Analysis',
          'url'   => 'finance-expense-analysis.php',
          'page'  => 'finance-expense-analysis'
        ],

        [
          'label' => 'Profitability Analysis',
          'url'   => 'finance-profit-analysis.php',
          'page'  => 'finance-profit-analysis'
        ],

      ]
    ],

    /*
    =====================================================
    HISTORY
    =====================================================
    */
    [
      'title' => 'History',
      'icon'  => 'fas fa-history',

      'children' => [

        [
          'label' => 'General Ledger',
          'url'   => 'finance-ledger.php',
          'page'  => 'finance-ledger'
        ],

        [
          'label' => 'Journal History',
          'url'   => 'finance-journal-history.php',
          'page'  => 'finance-journal-history'
        ],

        [
          'label' => 'Budget History',
          'url'   => 'finance-budget-history.php',
          'page'  => 'finance-budget-history'
        ],

      ]
    ],

  ]
],

  /*
  =========================================================
  PENGATURAN
  =========================================================
  */
  [
    'title' => 'Pengaturan',
    'icon'  => 'fas fa-cogs',

    'pages' => [

      'setting-user',
      'setting-role',
      'setting-audit',

    ],

    'children' => [

      [
        'title' => 'System',
        'icon'  => 'fas fa-tools',

        'children' => [

          [
            'label' => 'Data User',
            'url'   => 'setting-user.php',
            'page'  => 'setting-user'
          ],

          [
            'label' => 'Role & Permission',
            'url'   => 'setting-role.php',
            'page'  => 'setting-role'
          ],

          [
            'label' => 'Audit Log',
            'url'   => 'setting-audit.php',
            'page'  => 'setting-audit'
          ],

        ]
      ],

    ]
  ],

];

?>

    <!-- ======================================================= -->
    <!-- SIDEBAR MENU -->
    <!-- ======================================================= -->
    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="true">

<?php foreach($menu as $lvl1):

  $lvl1Open = in_array($page, $lvl1['pages']);

?>

        <!-- =================================================== -->
        <!-- LEVEL 1 -->
        <!-- =================================================== -->
        <li class="nav-item <?= $lvl1Open ? 'menu-open' : '' ?>">

          <a href="#"
             class="nav-link <?= $lvl1Open ? 'active' : '' ?>">

            <i class="nav-icon <?= $lvl1['icon'] ?>"></i>

            <p>
              <?= $lvl1['title'] ?>
              <i class="right fas fa-angle-left"></i>
            </p>

          </a>

          <!-- LEVEL 2 -->
          <ul class="nav nav-treeview">

<?php foreach($lvl1['children'] as $lvl2): ?>

<?php

$lvl2Open = false;

foreach($lvl2['children'] as $lvl3){

  if($page == $lvl3['page']){
    $lvl2Open = true;
  }

}

?>

            <li class="nav-item <?= $lvl2Open ? 'menu-open' : '' ?>">

              <a href="#"
                 class="nav-link <?= $lvl2Open ? 'active' : '' ?>">

                <i class="nav-icon <?= $lvl2['icon'] ?>"></i>

                <p>
                  <?= $lvl2['title'] ?>
                  <i class="right fas fa-angle-left"></i>
                </p>

              </a>

              <!-- LEVEL 3 -->
              <ul class="nav nav-treeview">

<?php foreach($lvl2['children'] as $lvl3): ?>

                <li class="nav-item">

                  <a href="<?= $lvl3['url'] ?>"
                     class="nav-link <?= ($page == $lvl3['page']) ? 'active' : '' ?>">

                    <i class="far fa-circle nav-icon"></i>

                    <p>
                      <?= $lvl3['label'] ?>
                    </p>

                  </a>

                </li>

<?php endforeach; ?>

              </ul>

            </li>

<?php endforeach; ?>

          </ul>

        </li>

<?php endforeach; ?>

        <!-- =================================================== -->
        <!-- BACK BUTTON -->
        <!-- =================================================== -->
        <li class="nav-item mt-3">

          <a href="../menu.php" class="nav-link">

            <i class="nav-icon fas fa-arrow-left"></i>

            <p>
              Kembali Menu Utama
            </p>

          </a>

        </li>

      </ul>

    </nav>

  </div>

</aside>