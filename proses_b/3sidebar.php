<!-- ========================================================= -->
<!-- MAIN SIDEBAR -->
<!-- ========================================================= -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- ======================================================= -->
  <!-- BRAND -->
  <!-- ======================================================= -->
  <a href="index.php" class="brand-link text-center">
    <span class="brand-text font-weight-light">
      ERP SYSTEM
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
          superadmin
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
ERP GENERIC SIDEBAR ARCHITECTURE
=========================================================

LEVEL 1
- BUSINESS DOMAIN
  Sales
  Operation
  Finance

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
      'dashboard-executive',
      'dashboard-sales',
      'dashboard-operational',
      'dashboard-finance'
    ],

    'children' => [

      [
        'title' => 'Overview',
        'icon'  => 'fas fa-chart-pie',

        'children' => [

          [
            'label' => 'Executive Dashboard',
            'url'   => 'index.php',
            'page'  => 'dashboard-executive'
          ],
           [
            'label' => 'Sales Dashboard',
            'url'   => 'dashboard-sales.php',
            'page'  => 'dashboard-sales'
          ],

          [
            'label' => 'Operational Dashboard',
            'url'   => 'dashboard-operational.php',
            'page'  => 'dashboard-operational'
          ],

          [
            'label' => 'Finance Dashboard',
            'url'   => 'dashboard-finance.php',
            'page'  => 'dashboard-finance'
          ],

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
    'icon'  => 'fas fa-shopping-cart',

    'pages' => [

      'sales-dashboard',

      'sales-order',
      'sales-invoice',
      'sales-return',

      'sales-monitor',

      'sales-report',

      'sales-analysis',

      'sales-history'
    ],

    'children' => [

      /*
      =====================================================
      DASHBOARD
      =====================================================
      */
      // [
      //   'title' => 'Dashboard',
      //   'icon'  => 'fas fa-chart-line',

      //   'children' => [

      //     [
      //       'label' => 'Sales Dashboard',
      //       'url'   => 'sales-dashboard.php',
      //       'page'  => 'sales-dashboard'
      //     ],

      //   ]
      // ],

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
            'label' => 'Sales Order',
            'url'   => 'sales-order.php',
            'page'  => 'sales-order'
          ],

          [
            'label' => 'Sales Invoice',
            'url'   => 'sales-invoice.php',
            'page'  => 'sales-invoice'
          ],

          [
            'label' => 'Sales Return',
            'url'   => 'sales-return.php',
            'page'  => 'sales-return'
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
            'page'  => 'sales-report'
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
  OPERATION
  =========================================================
  */
  [
    'title' => 'Operation',
    'icon'  => 'fas fa-boxes',

    'pages' => [

      'operation-dashboard',

      'purchase',
      'purchase-return',
      'stock-movement',
      'stock-opname',

      'inventory-monitor',

      'inventory-report',

      'inventory-analysis',

      'stock-ledger'
    ],

    'children' => [

      /*
      =====================================================
      DASHBOARD
      =====================================================
      */
        // [
        //   'title' => 'Dashboard',
        //   'icon'  => 'fas fa-chart-line',

        //   'children' => [

        //     [
        //       'label' => 'Operation Dashboard',
        //       'url'   => 'operation-dashboard.php',
        //       'page'  => 'operation-dashboard'
        //     ],

        //   ]
        // ],

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
            'label' => 'Purchase',
            'url'   => 'purchase.php',
            'page'  => 'purchase'
          ],

          [
            'label' => 'Purchase Return',
            'url'   => 'purchase-return.php',
            'page'  => 'purchase-return'
          ],

          [
            'label' => 'Stock Movement',
            'url'   => 'stock-movement.php',
            'page'  => 'stock-movement'
          ],

          [
            'label' => 'Stock Opname',
            'url'   => 'stock-opname.php',
            'page'  => 'stock-opname'
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
        'icon'  => 'fas fa-desktop',

        'children' => [

          [
            'label' => 'Inventory Monitoring',
            'url'   => 'inventory-monitor.php',
            'page'  => 'inventory-monitor'
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
            'label' => 'Inventory Report',
            'url'   => 'inventory-report.php',
            'page'  => 'inventory-report'
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
            'label' => 'Inventory Analysis',
            'url'   => 'inventory-analysis.php',
            'page'  => 'inventory-analysis'
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
            'label' => 'Stock Ledger',
            'url'   => 'stock-ledger.php',
            'page'  => 'stock-ledger'
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

      'finance-dashboard',

      'cash-in',
      'cash-out',
      'journal',

      'cashflow-monitor',

      'financial-report',

      'financial-analysis',

      'general-ledger'
    ],

    'children' => [

      /*
      =====================================================
      DASHBOARD
      =====================================================
      */
      // [
      //   'title' => 'Dashboard',
      //   'icon'  => 'fas fa-chart-line',

      //   'children' => [

      //     [
      //       'label' => 'Finance Dashboard',
      //       'url'   => 'finance-dashboard.php',
      //       'page'  => 'finance-dashboard'
      //     ],

      //   ]
      // ],

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
            'page'  => 'cash-in'
          ],

          [
            'label' => 'Cash Out',
            'url'   => 'cash-out.php',
            'page'  => 'cash-out'
          ],

          [
            'label' => 'Journal Entry',
            'url'   => 'journal.php',
            'page'  => 'journal'
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
        'icon'  => 'fas fa-desktop',

        'children' => [

          [
            'label' => 'Cashflow Monitoring',
            'url'   => 'cashflow-monitor.php',
            'page'  => 'cashflow-monitor'
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
            'label' => 'Financial Report',
            'url'   => 'financial-report.php',
            'page'  => 'financial-report'
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
            'url'   => 'financial-analysis.php',
            'page'  => 'financial-analysis'
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
            'url'   => 'general-ledger.php',
            'page'  => 'general-ledger'
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