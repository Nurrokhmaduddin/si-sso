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

//   /*
//   =========================================================
//   MASTER DATA
//   =========================================================
//   */
//   [
//     'title' => 'Master Data',
//     'icon'  => 'fas fa-database',

//     'pages' => [
//       'master-item',
//       'master-kitchen',
//       'master-menu',
//       'master-category',
//       'master-recipe',
//       'master-raw-material',
//       'master-package-menu',
//       'master-supplier',
//       'master-customer',
//       'master-table',
//       'master-payment-method',

//       'master-coa',

//     ],

//     'children' => [

//       [
//         'title' => 'Data Management',
//         'icon'  => 'far fa-folder-open',

//         'children' => [
//  [
//             'label' => ' Item',
//             'url'   => 'master-item.php',
//             'page'  => 'master-item'
//           ],
//            [
//             'label' => ' Satuan',
//             'url'   => 'master-satuan.php',
//             'page'  => 'master-satuan'
//           ],
//            [
//             'label' => ' Kategori',
//             'url'   => 'master-kategori.php',
//             'page'  => 'master-kategori',
//             'title'  => 'kategori stok dan kategori menu'
//           ],
// [
//             'label' => ' Recipe/BOM',
//             'url'   => 'master-recipe.php',
//             'page'  => 'master-recipe',
//              'title'  => 'terdapat Bill of material dari tiap menu recipe'
//           ],
//           [
//             'label' => 'Package Menu',
//             'url'   => 'master-package-menu.php',
//             'page'  => 'master-package-menu'
//           ],
         
//           [
//             'label' => 'Supplier',
//             'url'   => 'master-supplier.php',
//             'page'  => 'master-supplier'
//           ],

//           [
//             'label' => 'Customer',
//             'url'   => 'master-customer.php',
//             'page'  => 'master-customer'
//           ],
//  [
//             'label' => 'Kitchen Area',
//             'url'   => 'master-kitchen.php',
//             'page'  => 'master-kitchen'
//           ],
//           [
//             'label' => 'Table & Area',
//             'url'   => 'master-table.php',
//             'page'  => 'master-table'
//           ],

//           [
//             'label' => 'Payment Method',
//             'url'   => 'master-payment-method.php',
//             'page'  => 'master-payment-method'
//           ],
//           [
//             'label' => 'Discount & Promo',
//             'url'   => 'master-Discount-Promo.php',
//             'page'  => 'master-Discount-Promo'
//           ],

//           [
//             'label' => 'COA / Chart of Account',
//             'url'   => 'master-coa.php',
//             'page'  => 'master-coa'
//           ],



//         ]
//       ],

//     ]
//   ],

  /*
/*
=========================================================
MASTER DATA - ERP 3 LEVEL SEMANTIC ARCHITECTURE (FIXED)
=========================================================
LEVEL 1 : Master Data
LEVEL 2 : Business Domain Cluster
LEVEL 3 : Entity Master Menu
=========================================================
*/

[
  'title' => 'Master Data',
  'icon'  => 'fas fa-database',

  /*
  =========================================================
  LEVEL 2 - BUSINESS DOMAIN CLUSTER
  =========================================================
  */
  'children' => [

    /*
    =========================================================
    1. PRODUCT & SERVICE
    =========================================================
    */
    [
      'title' => 'Product & Service',
      'icon'  => 'fas fa-box',

      'children' => [

        [
          'label' => 'Item',
          'url'   => 'master-item.php',
          'page'  => 'master-item'
        ],
        [
          'label' => 'Satuan',
          'url'   => 'master-satuan.php',
          'page'  => 'master-satuan'
        ],
        [
          'label' => 'Kategori',
          'url'   => 'master-kategori.php',
          'page'  => 'master-kategori'
        ],
        [
          'label' => 'Recipe / BOM',
          'url'   => 'master-recipe.php',
          'page'  => 'master-recipe'
        ],
        [
          'label' => 'Package Menu',
          'url'   => 'master-package-menu.php',
          'page'  => 'master-package-menu'
        ],
        [
          'label' => 'Menu',
          'url'   => 'master-menu.php',
          'page'  => 'master-menu'
        ],
        [
          'label' => 'Raw Material',
          'url'   => 'master-raw-material.php',
          'page'  => 'master-raw-material'
        ],

      ]
    ],

    /*
    =========================================================
    2. BUSINESS PARTNER
    =========================================================
    */
    [
      'title' => 'Business Partner',
      'icon'  => 'fas fa-users',

      'children' => [

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
          'label' => 'Investor',
          'url'   => 'master-customer.php',
          'page'  => 'master-customer'
        ],
        [
          'label' => 'Employee',
          'url'   => 'master-employee.php',
          'page'  => 'master-employee'
        ],

      ]
    ],

    /*
    =========================================================
    3. OPERATIONAL STRUCTURE
    =========================================================
    */
    [
      'title' => 'Operational Structure',
      'icon'  => 'fas fa-building',

      'children' => [

         [
          'label' => 'Branch',
          'url'   => 'master-kitchen.php',
          'page'  => 'master-kitchen'
        ],
        [
          'label' => 'Division',
          'url'   => 'master-kitchen.php',
          'page'  => 'master-kitchen'
        ],
        [
          'label' => 'Sub Division',
          'url'   => 'master-kitchen.php',
          'page'  => 'master-kitchen'
        ],
        [
          'label' => 'Project',
          'url'   => 'master-kitchen.php',
          'page'  => 'master-kitchen'
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
          'label' => 'Warehouse Location',
          'url'   => 'master-table.php',
          'page'  => 'master-table'
        ],

      ]
    ],

    /*
    =========================================================
    4. FINANCIAL STRUCTURE
    =========================================================
    */
    [
      'title' => 'Financial Structure',
      'icon'  => 'fas fa-wallet',

      'children' => [

        [
          'label' => 'Payment Method',
          'url'   => 'master-payment-method.php',
          'page'  => 'master-payment-method'
        ],
        [
          'label' => 'Discount & Promo',
          'url'   => 'master-discount-promo.php',
          'page'  => 'master-discount-promo'
        ],
        [
          'label' => 'COA / Chart of Account',
          'url'   => 'master-coa.php',
          'page'  => 'master-coa'
        ],
        [
          'label' => 'COA2 / Chart of Account2',
          'url'   => 'master-coa2.php',
          'page'  => 'master-coa2'
        ],
         [
          'label' => 'master subledger',
          'url'   => 'maste-coa2-mastersubledger.php',
          'page'  => 'master_subledger_rules'
        ],
        [
          'label' => 'subledger',
          'url'   => 'maste-coa2-subledger.php',
          'page'  => 'coa_subledger_rules'
        ],

      ]
    ],

  ],

  /*
  =========================================================
  LEVEL 3 ROUTING (SAFE FLAT MAP)
  =========================================================
  */
  'pages' => [
    'master-item',
    'master-satuan',
    'master-kategori',
    'master-recipe',
    'master-package-menu',
    'master-menu',
    'master-raw-material',
    'master-supplier',
    'master-customer',
    'master-kitchen',
    'master-table',
    'master-payment-method',
    'master-discount-promo',
    'master-coa'
  ]

],
// MASTER DATA
// │
// ├── Produk & Persediaan
// │   ├── Item
// │   ├── Satuan
// │   ├── Kategori
// │   ├── Recipe / BOM
// │   └── Package Menu
// │
// ├── Mitra Bisnis
// │   ├── Supplier
// │   └── Customer
// │
// ├── Ref Operasional
// │   ├── Kitchen Area
// │   └── Table & Area
// │
// └── Ref Keuangan 
//     ├── Payment Method
//     └── Discount & Promo

//   versi lengkap:
//   MASTER DATA
// │
// ├── Produk & Persediaan
// │   ├── Menu
// │   ├── Package Menu
// │   ├── Item & Material
// │   ├── Kategori
// │   ├── Satuan
// │   └── Recipe / BOM
// │
// ├── Mitra & SDM
// │   ├── Customer
// │   ├── Supplier
// │   ├── Member / Loyalty
// │   ├── Karyawan
// │   └── Role & Jabatan
// │
// ├── Operasional & Fasilitas
// │   ├── Kitchen Area
// │   ├── Table & Area
// │   ├── Gudang
// │   ├── Shift Operasional
// │   └── Cabang
// │
// ├── Keuangan & Aturan
// │   ├── Payment Method
// │   ├── Discount & Promo
// │   ├── Pajak & Service
// │   └── COA
// │
// └── Konfigurasi Sistem
//     ├── App Setting
//     ├── Printer Setting
//     └── Hak Akses
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
      'sales-reservation',

      'sales-monitoring',

      'sales-report',

      'sales-analysis',

      'sales-history',
      'sales-order'

    ],

    'children' => [

      /*
      =====================================================
      TRANSACTION
      =====================================================
      */
      [
        'title' => 'Transaction',
        'icon'  => 'far fa-folder-open',

        'children' => [

          [
            'label' => 'Sales Orders',
            'url'   => 'sales-order.php',
            'page'  => 'sales-order'
          ],


          [
            'label' => 'POS / Cashier',
            'url'   => 'sales-kasir2.php',
            'page'  => 'sales-pos'
          ],
 // [
 //            'label' => 'Reservation',
 //            'url'   => 'sales-reservation.php',
 //            'page'  => 'sales-reservation'
 //          ],
          // [
          //   'label' => 'Self Order QR',
          //   'url'   => 'sales-self-order.php',
          //   'page'  => 'sales-self-order'
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
        'icon'  => 'far fa-folder-open',

        'children' => [

          [
            'label' => 'Sales Monitoring',
            'url'   => 'sales-monitoring.php',
            'page'  => 'sales-monitoring',
            'title' => 'Bisa Isi:
transaksi hari ini
meja aktif
order pending
unpaid bill
waiting payment
kitchen delay
peak hour
waiter performance
cashier activity
void transaction
discount usage realtime'
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
        'icon'  => 'far fa-folder-open',

        'children' => [

          [
            'label' => 'Sales Report',
            'url'   => 'sales-report.php',
            'page'  => 'sales-report',
            'title' => 'bisa dibuat group by: by produk, by nota...
            By Product
            produk terlaris
            qty terjual
            omzet per menu
            By Category
            beverage vs food
            dessert vs coffee
            By Time
            penjualan harian
            mingguan
            bulanan
            By Shift
            shift pagi
            shift malam
            By Cashier
            performa kasir
            By Table
            meja paling produktif
            By Payment Method
            cash
            QRIS
            debit'
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
        'icon'  => 'far fa-folder-open',

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
  OPERATION 
  =========================================================
  */
  [
    'title' => 'Operation',
    'icon'  => 'fas fa-boxes',

    'pages' => [

      'kitchen-order-board',
      'kitchen-production',
      'kitchen-ready-serve',

      'kitchen-monitor',

      'kitchen-report',

      'kitchen-analysis',

      'kitchen-history',

'inventory-purchase',
      'inventory-stock-in',
      'inventory-stock-out',
      'inventory-stock-opname',

      'inventory-monitor',

      'inventory-report',

      'inventory-analysis',

      'inventory-history',


      'operation-kitchen',

      'stock-monitor',
      'inventory-report-stock-movement-summary',
      'inventory-report-stock-opname',
      'inventory-purchase-report',



      'inventory-stock-ledger',
      'inventory-purchase-history',
      'inventory-supplier-history',
      'inventory-adjustment-history',
      'inventory-opname-history'
    ],

    'children' => [

      [
        'title' => 'Transaction',
        'icon'  => 'far fa-folder-open',

        'children' => [

          [
            'label' => 'Purchase Order',
            'url'   => 'inventory-purchase.php',
            'page'  => 'inventory-purchase'
          ],

          [
            'label' => 'Stock In',
            'url'   => 'inventory-stock-in.php',
            'page'  => 'inventory-stock-in',
            'title' => 'manual catat untuk stok masuk selain dari purchase order'
          ],

          [
            'label' => 'Stock Out',
            'url'   => 'inventory-stock-out.php',
            'page'  => 'inventory-stock-out',
            'title' => 'manual catat untuk stok keluar selain dari production dan penjualan'
          ],

          [
            'label' => 'Stock Opname',
            'url'   => 'inventory-stock-opname.php',
            'page'  => 'inventory-stock-opname'
          ],
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
            'url'   => 'operation-kitchen.php',
            'page'  => 'operation-kitchen'
          ],

        ]
      ],

      [
        'title' => 'Monitoring',
        'icon'  => 'far fa-folder-open',

        'children' => [

 [
            'label' => 'Stock Monitoring',
            'url'   => 'operation-stock-monitor.php',
            'page'  => 'stock-monitor',
            'title' => 'tampilan seperti monitoring realtime stok'
          ],
          [
            'label' => 'Kitchen Monitoring',
            'url'   => 'operation-kitchen-monitor.php',
            'page'  => 'kitchen-monitor',
            'title' => 'tampilan seperti Kitchen Display System'
          ],

        ]
      ],

      [
        'title' => 'Report',
        'icon'  => 'far fa-folder-open',

        'children' => [
// REPORT

// (Analisa & Ringkasan)

// Inventory Report
// Stock Movement Summary
// Purchase Report
// Stock Opname Report



          [
            'label' => 'Purchase Report',
            'url'   => 'inventory-purchase-report.php',
            'page'  => 'inventory-purchase-report',
            'title' => 'by produk, by supplier'
          ],
          [
            'label' => 'Inventory Report',
            'url'   => 'inventory-report.php',
            'page'  => 'inventory-report',
            'title' => 'LAPORAN KELUAR MASUK BAHAN BAKU by item'
          ],
[
            'label' => 'Stock Movement Summary',
            'url'   => 'inventory-report-stock-movement-summary.php',
            'page'  => 'inventory-report-stock-movement-summary'
            
          ],
          [
            'label' => 'Stock Opname Report',
            'url'   => 'inventory-report-stock-opname.php',
            'page'  => 'inventory-report-stock-opname'
            
          ],

           [
            'label' => 'Kitchen Report',
            'url'   => 'kitchen-report.php',
            'page'  => 'kitchen-report'
          ],

        ]
      ],


      [
        'title' => 'History',
        'icon'  => 'far fa-folder-open',

        'children' => [
          // HISTORY
// (Jejak transaksi detail)

// Stock Ledger
// Purchase History
// Supplier Transaction History
// Adjustment History
// Stock Opname History
         
           [
            'label' => 'Stock Ledger',
            'url'   => 'inventory-stock-ledger.php',
            'page'  => 'inventory-stock-ledger',
            'title' =>'Kartu stok = stock ledger.'
          ],
           [
            'label' => 'Purchase History',
            'url'   => 'inventory-purchase-history.php',
            'page'  => 'inventory-purchase-history',
          ],
[
            'label' => 'Supplier Transaction History',
            'url'   => 'inventory-supplier-history.php',
            'page'  => 'inventory-supplier-history',
          ],
          [
            'label' => 'Adjustment History',
            'url'   => 'inventory-adjustment-history.php',
            'page'  => 'inventory-adjustment-history',
          ],
           [
            'label' => 'Stock Opname History',
            'url'   => 'inventory-opname-history.php',
            'page'  => 'inventory-opname-history',
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
    'general-journal',
    'cash-in',
    'cash-out',
    'accounts-receivable',
    'accounts-payable',
    'finance-accounts-receivable',
    'finance-accounts-payable',
    'finance-cash-in',
    'finance-cash-out',
    'finance-fixed-asset',

    /* MONITORING */
    'finance-monitor',
    'finance-expense-monitor',
    'finance-profit-monitor',
    'finance-ar-aging-monitor',
    'finance-ar-customer-monitor',

    /* REPORT */
    'finance-profit-loss',
    'finance-equity-report',
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
    'finance-ar-history',
    'finance-ap-history'

  ],

  'children' => [

    
    /*
    =====================================================
    TRANSACTION
    =====================================================
    */
    [
  'title' => 'Transaction',
  'icon'  => 'far fa-folder-open',

  'children' => [

    // [
    //   'label' => 'Cash In',
    //   'url'   => 'cash-in.php',
    //   'page'  => 'cash-in',
    //   'title' => 'Record incoming cash transactions'
    // ],
     [
      'label' => 'Cash In',
      'url'   => 'finance-cash-in.php',
      'page'  => 'finance-cash-in',
      'title' => 'Record incoming cash transactions'
    ],

    // [
    //   'label' => 'Cash Out',
    //   'url'   => 'cash-out.php',
    //   'page'  => 'cash-out',
    //   'title' => 'Record outgoing cash transactions'
    // ],
     [
      'label' => 'Cash Out',
      'url'   => 'finance-cash-out.php',
      'page'  => 'finance-cash-out',
      'title' => 'Record outgoing cash transactions'
    ],

    // [
    //   'label' => 'Accounts Receivable (AR)',
    //   'url'   => 'accounts-receivable.php',
    //   'page'  => 'accounts-receivable',
    //   'title' => 'Create invoice, receive payment, write-off, and receivable adjustment, JURNAL PELUNASAN PIUTANG by customer, by nota'
    // ],
     [
      'label' => 'Accounts Receivable (AR)',
      'url'   => 'finance-accounts-receivable.php',
      'page'  => 'finance-accounts-receivable',
      'title' => 'Create ar document, receive payment, write-off, and receivable adjustment, JURNAL PELUNASAN PIUTANG by customer, by nota'
    ],

    // [
    //   'label' => 'Accounts Payable (AP)',
    //   'url'   => 'accounts-payable.php',
    //   'page'  => 'accounts-payable',
    //   'title' => 'Receive bill, supplier payment, and payable adjustment, JURNAL PEMBAYARAN HUTANG by supplier, by nota'
    // ],
        [
      'label' => 'Accounts Payable (AP)',
      'url'   => 'finance-accounts-payable.php',
      'page'  => 'finance-accounts-payable',
      'title' => 'Receive bill, supplier payment, and payable adjustment, JURNAL PEMBAYARAN HUTANG by supplier, by nota'
    ],

    // [
    //   'label' => 'Prepaid Expense',
    //   'url'   => 'prepaid-expense.php',
    //   'page'  => 'prepaid-expense',
    //   'title' => 'Cash paid in advance for future benefits such as rent, insurance, or software licenses'
    // ],

  
 
        [
      'label' => 'Prepaid Management',
      'url'   => 'prepaid-management.php',
      'page'  => 'prepaid-management',
      'title' => 'Cash paid in advance for future benefits such as rent, insurance, or software licenses'
    ],   
      [
      'label' => 'Deferred Revenue',
      'url'   => 'deferred-revenue.php',
      'page'  => 'deferred-revenue',
      'title' => 'Cash received before services are fully delivered such as subscriptions or project advances'
    ],
    [
      'label' => 'Inventory Subledger',
      'url'   => 'inventory-subledger.php',
      'page'  => 'inventory-subledger',
      'title' => ''
    ],
    // [
    //   'label' => 'Fixed Assets',
    //   'url'   => 'fixed-assets.php',
    //   'page'  => 'fixed-assets',
    //   'title' => 'Asset registration, acquisition cost, depreciation, and disposal management'
    // ],

       [
      'label' => 'Fixed Assets',
      'url'   => 'finance-fixed-asset.php',
      'page'  => 'finance-fixed-asset',
      'title' => 'Asset registration, acquisition cost, depreciation, and disposal management'
   ],

    // [
    //   'label' => 'Chart of Accounts',
    //   'url'   => 'chart-of-accounts.php',
    //   'page'  => 'chart-of-accounts',
    //   'title' => 'Master data of all accounting accounts'
    // ],

    [
      'label' => 'General Journal',
      'url'   => 'general-journal.php',
      'page'  => 'general-journal',
      'title' => 'Manual journal entry recording'
    ],
        [
      'label' => 'Journal',
      'url'   => 'finance-journal.php',
      'page'  => 'finance-journal',
      'title' => 'all journal entry recording'
    ],
  ]
],

    /*
    =====================================================
    MONITORING
    =====================================================
    */
    [
      'title' => 'Monitoring',
      'icon'  => 'far fa-folder-open',

      'children' => [

        [
          'label' => 'Finance Monitoring',
          'url'   => 'finance-monitor.php',
          'page'  => 'finance-monitor',
          'title' => 'Realtime financial operational monitoring'
        ],
        //  [
        //   'label' => 'Cashflow Monitoring',
        //   'url'   => 'finance-cashflow-monitor.php',
        //   'page'  => 'finance-cashflow-monitor'
        // ],

        // [
        //   'label' => 'Expense Monitoring',
        //   'url'   => 'finance-expense-monitor.php',
        //   'page'  => 'finance-expense-monitor'
        // ],

        // [
        //   'label' => 'Profit Monitoring',
        //   'url'   => 'finance-profit-monitor.php',
        //   'page'  => 'finance-profit-monitor'
        // ],

        // [
        //   'label' => ' Over Budget',
        //   'url'   => 'finance-overbudget-monitor.php',
        //   'page'  => 'finance-overbudget-monitor'
        // ],
        // [
        //   'label' => 'AR Aging',
        //   'url'   => 'finance-ar-aging-monitor.php',
        //   'page'  => 'finance-ar-aging-monitor',
        // ],
        [
          'label' => 'AR Monitor',
          'url'   => 'finance-ar-customer-monitor.php',
          'page'  => 'finance-ar-customer-monitor',
        ],

        // [
        //   'label' => ' Piutang Jatuh Tempo',
        //   'url'   => 'finance-ar-due-monitor.php',
        //   'page'  => 'finance-ar-due-monitor',
        //   'title' => 'menampilkan saldo piutang by customer'
        // ],

        // [
        //   'label' => ' Hutang Jatuh Tempo',
        //   'url'   => 'finance-ap-due-monitor.php',
        //   'page'  => 'finance-ap-due-monitor',
        //   'title' => 'menampilkan saldo hutang by supplier'
        // ],

      ]
    ],
    /*
    =====================================================
    REPORT
    =====================================================
    */
    [
      'title' => 'Report',
      'icon'  => 'far fa-folder-open',

      'children' => [

        [
          'label' => 'Profit & Loss',
          'url'   => 'finance-profit-loss.php',
          'page'  => 'finance-profit-loss'
        ],
        [
          'label' => 'Equity Report',
          'url'   => 'finance-equity-report.php',
          'page'  => 'finance-equity-report'
        ],
        [
          'label' => 'Balance Sheet',
          'url'   => 'finance-balance-sheet.php',
          'page'  => 'finance-balance-sheet'
        ],

        [
          'label' => 'Cash Flow Report',
          'url'   => 'finance-cashflow-report.php',
          'page'  => 'finance-cashflow-report'
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
      'icon'  => 'far fa-folder-open',

      'children' => [
        [
        'label' => 'General Ledger',
        'url'   => 'finance-ledger.php',
        'page'  => 'finance-ledger'
      ],
       [
        'label' => 'AR Ledger',
        'url'   => 'finance-ar-history.php',
        'page'  => 'finance-ar-history'
      ],

      [
        'label' => 'AP Ledger',
        'url'   => 'finance-ap-history.php',
        'page'  => 'finance-ap-history'
      ],

      

      [
        'label' => 'Journal Entry History',
        'url'   => 'finance-journal-history.php',
        'page'  => 'finance-journal-history'
      ],

        // [
        //   'label' => 'Budget History',
        //   'url'   => 'finance-budget-history.php',
        //   'page'  => 'finance-budget-history'
        // ],

          

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
            'label' => 'User Management',
            'url'   => 'setting-user.php',
            'page'  => 'setting-user',
            'title' => '(Identity / Authentication), hanya untuk login.'
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
// MASTER DATA
// ├── Actor Data
// │
// SYSTEM ACCESS
// ├── User Management
// ├── Role Management
// ├── Permission Management
// ├── Actor Mapping
// ├── Context Switching
// └── Session & Audit
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

<!-- DASHBOARD
  ├─ Overview
  ├─ Operational Snapshot
  └─ Financial Snapshot


MASTER DATA

  ├─ Operational Master (Table / Kitchen Area)
  └─ System Configuration
Master Item
Master Satuan
Master Kategori
Master Supplier
Master Customer

Master Gudang/Lokasi
Master Formula Produksi(recipe)
Master Meja
Master Payment Method
Chart Of Accounts
User & Role

SALES (EVENT LAYER / TRANSACTION ORIGIN)
  ├─ Transaction
  │    ├─ POS / Order Entry
  │    ├─ Order Management
  │    └─ Reservation
  │
  ├─ Monitoring (REALTIME ONLY)
  │    ├─ Today Sales Activity
  │    ├─ Order Status (Pending / Cooking / Served)
  │    ├─ Payment Status (Unpaid / Paid / Partial)
  │    ├─ Table Occupancy
  │    └─ Operational Alert (Void / Discount / Delay)
  │
  ├─ Report (AGGREGATED TIME-BASED)
  │    ├─ Sales by Product
  │    ├─ Sales by Category
  │    ├─ Sales by Time (Daily / Monthly)
  │    ├─ Sales by Shift
  │    ├─ Sales by Cashier
  │    ├─ Sales by Table
  │    └─ Sales by Payment Method
  │
  ├─ Analysis (OPTIONAL MODULE / FEATURE FLAG)
  │    ├─ Sales Trend
  │    ├─ Peak Hour Analysis
  │    ├─ Menu Engineering
  │    ├─ Customer Behavior
  │    ├─ Profitability per Product
  │    ├─ Combo Analysis
  │    └─ Seasonal Pattern
  │
  └─ History (AUDIT TRAIL)
       ├─ Invoice History
       ├─ Payment History
       ├─ Void History
       ├─ Discount History
       └─ Order Audit Log


OPERATION (EXECUTION + CONTROL LAYER)
  ├─ Inventory
  │    ├─ Transaction
  │    │    ├─ Purchase
  │    │    ├─ Stock Opname
  │    │    └─ Adjustment
  │    │
  │    ├─ Monitoring (REALTIME ONLY)
  │    │    ├─ Stock Level
  │    │    ├─ Low Stock Alert
  │    │    ├─ Expired / Near Expired
  │    │    ├─ Pending Purchase
  │    │    └─ Stock Anomaly
  │    │
  │    ├─ Report (PURE STOCK MOVEMENT)
  │    │    ├─ Stock Card (Ledger)
  │    │    ├─ Stock Movement Report
  │    │    ├─ Purchase Report
  │    │    ├─ Stock Opname Report
  │    │    └─ Inventory Valuation (FIFO / AVG)
  │    │
  │    ├─ Analysis (OPTIONAL)
  │    │    ├─ Fast / Slow Moving Item
  │    │    ├─ Dead Stock
  │    │    ├─ Usage Pattern
  │    │    ├─ Supplier Performance
  │    │    ├─ Waste Analysis (derived only)
  │    │    └─ Consumption Forecast
  │    │
  │    └─ History (LEDGER)
  │         ├─ Stock Ledger
  │         ├─ Purchase History
  │         ├─ Adjustment History
  │         └─ Stock Opname History
  │
  └─ Production (Kitchen)
       ├─ Transaction (Execution Flow)
       │    ├─ Production Order
       │    ├─ Cooking Queue
       │    └─ Completion
       │
       ├─ Monitoring (REALTIME ONLY)
       │    ├─ Kitchen Display System
       │    ├─ Cooking Status
       │    ├─ SLA Tracking
       │    ├─ Delay Alert
       │    └─ Kitchen Load
       │
       ├─ Report (OPERATIONAL OUTPUT)
       │    ├─ Production Output Report
       │    ├─ Cooking Time Report
       │    ├─ Order Completion Report
       │    ├─ Kitchen Performance Report
       │    └─ Waste Summary (read-only from inventory)
       │
       ├─ Analysis (OPTIONAL)
       │    ├─ Efficiency Analysis
       │    ├─ Bottleneck Analysis
       │    ├─ Staff Productivity
       │    └─ Peak Production Pattern
       │
       └─ History (TRACE ONLY)
            ├─ Production Log
            ├─ Cooking Timeline
            └─ Order Fulfillment History


FINANCE (TRUTH / POSTING LAYER)
  ├─ Transaction (POSTING ENGINE)
  │    ├─ Cash In / Out
  │    ├─ AR / AP
  │    ├─ Journal Entry
  │    ├─ Fixed Assets
  │    └─ Budgeting
  │
  ├─ Monitoring (REALTIME FINANCIAL HEALTH)
  │    ├─ Cash Position
  │    ├─ Daily Cashflow
  │    ├─ AR Due
  │    ├─ AP Due
  │    ├─ Over Budget
  │    └─ Profit Snapshot
  │
  ├─ Report (FINANCIAL STATEMENT)
  │    ├─ Profit & Loss
  │    ├─ Balance Sheet
  │    ├─ Cashflow Statement
  │    ├─ Equity Change
  │    └─ Expense Report
  │
  ├─ Analysis (OPTIONAL)
  │    ├─ Margin Analysis
  │    ├─ ROI
  │    ├─ Break Even Point
  │    ├─ Cost Structure Trend
  │    ├─ Revenue Growth
  │    └─ Financial Forecast
  │
  └─ History (FULL LEDGER SYSTEM)
       ├─ General Ledger
       ├─ Journal History
       ├─ Cash Ledger
       ├─ AR/AP Ledger
       └─ Budget History


SYSTEM SETTINGS
  ├─ User Management
  ├─ Role & Permission
  ├─ Audit Log
  └─ Feature Flags (ANALYSIS ENABLE/DISABLE) -->


  <!-- [
  'title' => 'Master Data',
  'icon'  => 'fas fa-database',

  'children' => [

    /*
    =====================================================
    PRODUK & PERSEDIAAN
    =====================================================
    */
    [
      'title' => 'Produk & Persediaan',
      'icon'  => 'fas fa-box',

      'children' => [

        [
          'label' => 'Menu',
          'url'   => 'master-menu.php',
          'page'  => 'master-menu'
        ],

        [
          'label' => 'Package Menu',
          'url'   => 'master-package-menu.php',
          'page'  => 'master-package-menu'
        ],

        [
          'label' => 'Item & Material',
          'url'   => 'master-item.php',
          'page'  => 'master-item'
        ],

        [
          'label' => 'Kategori',
          'url'   => 'master-kategori.php',
          'page'  => 'master-kategori'
        ],

        [
          'label' => 'Satuan',
          'url'   => 'master-satuan.php',
          'page'  => 'master-satuan'
        ],

        [
          'label' => 'Recipe / BOM',
          'url'   => 'master-recipe.php',
          'page'  => 'master-recipe'
        ],

      ]
    ],

    /*
    =====================================================
    MITRA & SDM
    =====================================================
    */
    [
      'title' => 'Mitra & SDM',
      'icon'  => 'fas fa-users',

      'children' => [

        [
          'label' => 'Customer',
          'url'   => 'master-customer.php',
          'page'  => 'master-customer'
        ],

        [
          'label' => 'Supplier',
          'url'   => 'master-supplier.php',
          'page'  => 'master-supplier'
        ],

        [
          'label' => 'Member / Loyalty',
          'url'   => 'master-membership.php',
          'page'  => 'master-membership'
        ],

        [
          'label' => 'Karyawan',
          'url'   => 'master-employee.php',
          'page'  => 'master-employee'
        ],

        [
          'label' => 'Role & Jabatan',
          'url'   => 'master-role.php',
          'page'  => 'master-role'
        ],

      ]
    ],

    /*
    =====================================================
    OPERASIONAL & FASILITAS
    =====================================================
    */
    [
      'title' => 'Operasional & Fasilitas',
      'icon'  => 'fas fa-store',

      'children' => [

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
          'label' => 'Gudang',
          'url'   => 'master-warehouse.php',
          'page'  => 'master-warehouse'
        ],

        [
          'label' => 'Shift Operasional',
          'url'   => 'master-shift.php',
          'page'  => 'master-shift'
        ],

        [
          'label' => 'Cabang',
          'url'   => 'master-branch.php',
          'page'  => 'master-branch'
        ],

      ]
    ],

    /*
    =====================================================
    KEUANGAN & ATURAN
    =====================================================
    */
    [
      'title' => 'Keuangan & Aturan',
      'icon'  => 'fas fa-wallet',

      'children' => [

        [
          'label' => 'Payment Method',
          'url'   => 'master-payment-method.php',
          'page'  => 'master-payment-method'
        ],

        [
          'label' => 'Discount & Promo',
          'url'   => 'master-discount-promo.php',
          'page'  => 'master-discount-promo'
        ],

        [
          'label' => 'Pajak & Service',
          'url'   => 'master-tax-service.php',
          'page'  => 'master-tax-service'
        ],

        [
          'label' => 'COA',
          'url'   => 'master-coa.php',
          'page'  => 'master-coa'
        ],

      ]
    ],

    /*
    =====================================================
    KONFIGURASI SISTEM
    =====================================================
    */
    [
      'title' => 'Konfigurasi Sistem',
      'icon'  => 'fas fa-cogs',

      'children' => [

        [
          'label' => 'App Setting',
          'url'   => 'setting-app.php',
          'page'  => 'setting-app'
        ],

        [
          'label' => 'Printer Setting',
          'url'   => 'setting-printer.php',
          'page'  => 'setting-printer'
        ],

        [
          'label' => 'Hak Akses',
          'url'   => 'setting-access.php',
          'page'  => 'setting-access'
        ],

      ]
    ],

  ]
], -->