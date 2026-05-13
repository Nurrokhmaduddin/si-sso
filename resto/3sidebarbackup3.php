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
RESTOMAN ERP SIDEBAR ARCHITECTURE (FINAL REFINED)
=========================================================

LEVEL 1 : DOMAIN
- Dashboard
- Master Data
- Sales
- Operation (Inventory + Production)
- Finance
- Pengaturan

LEVEL 2 : PURPOSE (STRICT STANDARD)
- Transaction
- Monitoring (REALTIME ONLY)
- Report (PERIODIC AGGREGATION)
- Analysis (OPTIONAL MODULE)
- History (LEDGER / AUDIT)

LEVEL 3 : FEATURES (FLAT)
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
          'label' => 'Dashboard Super Admin',
          'url'   => 'index.php',
          'page'  => 'dashboard-superadmin',
          'title' => 'Super Admin Dashboard (Executive Overview)'
        ],

        [
          'label' => 'Dashboard Manager',
          'url'   => 'dashboard-manager.php',
          'page'  => 'dashboard-manager',
          'title' => 'Manager Dashboard (Operational Summary)'
        ],

        [
          'label' => 'Dashboard Kasir',
          'url'   => 'dashboard-kasir.php',
          'page'  => 'dashboard-kasir',
          'title' => 'Cashier Dashboard (POS Overview)'
        ],

        [
          'label' => 'Dashboard Kitchen',
          'url'   => 'dashboard-kitchen.php',
          'page'  => 'dashboard-kitchen',
          'title' => 'Kitchen Dashboard (Production Overview)'
        ],

        [
          'label' => 'Dashboard Waiter',
          'url'   => 'dashboard-waiter.php',
          'page'  => 'dashboard-waiter',
          'title' => 'Waiter Dashboard (Service Overview)'
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
    'master-item',
    'master-kategori',
    'master-recipe',
    'master-raw-material',
    'master-supplier',
    'master-customer',
  ],

  'children' => [

    [
      'title' => 'Data Master',
      'icon'  => 'fas fa-folder-open',

      'children' => [

        [
          'label' => 'Item',
          'url'   => 'master-item.php',
          'page'  => 'master-item',
          'title' => 'Item Master Data (Products & Materials)'
        ],

        [
          'label' => 'Kategori',
          'url'   => 'master-kategori.php',
          'page'  => 'master-kategori',
          'title' => 'Category Master Data'
        ],

        [
          'label' => 'Recipe / BOM',
          'url'   => 'master-recipe.php',
          'page'  => 'master-recipe',
          'title' => 'Bill of Material (Production Formula)'
        ],

        [
          'label' => 'Raw Material',
          'url'   => 'master-raw-material.php',
          'page'  => 'master-raw-material',
          'title' => 'Raw Material Master Data'
        ],

        [
          'label' => 'Supplier',
          'url'   => 'master-supplier.php',
          'page'  => 'master-supplier',
          'title' => 'Supplier Master Data'
        ],

        [
          'label' => 'Customer',
          'url'   => 'master-customer.php',
          'page'  => 'master-customer',
          'title' => 'Customer Master Data'
        ],

      ]
    ],
  ]
],

/*
=========================================================
SALES DOMAIN
=========================================================
*/
[
  'title' => 'Sales (Penjualan)',
  'icon'  => 'fas fa-cash-register',

  'pages' => [
    'sales-pos',
    'sales-order-list',
    'sales-monitor',
    'sales-report',
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
          'label' => 'POS (Kasir)',
          'url'   => 'sales-pos.php',
          'page'  => 'sales-pos',
          'title' => 'Point of Sales Transaction'
        ],

        [
          'label' => 'Order Penjualan',
          'url'   => 'sales-order-list.php',
          'page'  => 'sales-order-list',
          'title' => 'Sales Order Management'
        ],

      ]
    ],

    /*
    =====================================================
    MONITORING (REALTIME ONLY)
    =====================================================
    */
    [
      'title' => 'Monitoring',
      'icon'  => 'fas fa-desktop',

      'children' => [

        [
          'label' => 'Monitoring Penjualan',
          'url'   => 'sales-monitor.php',
          'page'  => 'sales-monitor',
          'title' => 'Realtime: transaksi hari ini, order pending, meja aktif, void, payment status'
        ],

      ]
    ],

    /*
    =====================================================
    REPORT (AGGREGATION)
    =====================================================
    */
    [
      'title' => 'Report',
      'icon'  => 'fas fa-folder-open',

      'children' => [

        [
          'label' => 'Laporan Penjualan',
          'url'   => 'sales-report.php',
          'page'  => 'sales-report',
          'title' => 'Aggregated sales by product, category, time, cashier, table, payment method'
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
          'label' => 'Riwayat Penjualan',
          'url'   => 'sales-history.php',
          'page'  => 'sales-history',
          'title' => 'Sales transaction history & audit trail'
        ],

      ]
    ],

  ]
],

/*
=========================================================
OPERATION (INVENTORY + PRODUCTION)
=========================================================
*/
[
  'title' => 'Operation (Operasional)',
  'icon'  => 'fas fa-boxes',

  'pages' => [
    'inventory-monitor',
    'inventory-report',
    'inventory-history',
    'kitchen-monitor',
    'kitchen-report',
    'kitchen-history',
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
          'label' => 'Pembelian Bahan',
          'url'   => 'inventory-purchase.php',
          'page'  => 'inventory-purchase',
          'title' => 'Purchase of Raw Materials'
        ],

        [
          'label' => 'Stock Opname',
          'url'   => 'inventory-stock-opname.php',
          'page'  => 'inventory-stock-opname',
          'title' => 'Stock Taking & Adjustment'
        ],

        [
          'label' => 'Produksi (Kitchen)',
          'url'   => 'kitchen-production.php',
          'page'  => 'kitchen-production',
          'title' => 'Production Process / Work in Progress'
        ],

      ]
    ],

    /*
    =====================================================
    MONITORING (REALTIME ONLY)
    =====================================================
    */
    [
      'title' => 'Monitoring',
      'icon'  => 'fas fa-desktop',

      'children' => [

        [
          'label' => 'Monitoring Stok',
          'url'   => 'inventory-monitor.php',
          'page'  => 'inventory-monitor',
          'title' => 'Realtime stock, minimum stock, expired, stock out alert'
        ],

        [
          'label' => 'Monitoring Produksi',
          'url'   => 'kitchen-monitor.php',
          'page'  => 'kitchen-monitor',
          'title' => 'Realtime kitchen order, cooking queue, SLA, delay tracking'
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
          'label' => 'Laporan Stok',
          'url'   => 'inventory-report.php',
          'page'  => 'inventory-report',
          'title' => 'Stock movement, purchase, usage report'
        ],

        [
          'label' => 'Laporan Produksi',
          'url'   => 'kitchen-report.php',
          'page'  => 'kitchen-report',
          'title' => 'Production output, waste, efficiency, SLA report'
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
          'label' => 'Kartu Stok',
          'url'   => 'inventory-history.php',
          'page'  => 'inventory-history',
          'title' => 'Stock ledger / movement history'
        ],

        [
          'label' => 'Riwayat Produksi',
          'url'   => 'kitchen-history.php',
          'page'  => 'kitchen-history',
          'title' => 'Production audit trail'
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
  'title' => 'Finance (Keuangan)',
  'icon'  => 'fas fa-wallet',

  'pages' => [
    'finance-monitor',
    'finance-report',
    'finance-history',
  ],

  'children' => [

    [
      'title' => 'Monitoring',
      'icon'  => 'fas fa-desktop',
      'children' => [
        [
          'label' => 'Cashflow',
          'url'   => 'finance-monitor.php',
          'page'  => 'finance-monitor',
          'title' => 'Realtime cash position & financial health'
        ],
      ]
    ],

    [
      'title' => 'Report',
      'icon'  => 'fas fa-folder-open',
      'children' => [
        [
          'label' => 'Laporan Keuangan',
          'url'   => 'finance-profit-loss.php',
          'page'  => 'finance-profit-loss',
          'title' => 'P&L, Balance Sheet, Cashflow'
        ],
      ]
    ],

    [
      'title' => 'History',
      'icon'  => 'fas fa-history',
      'children' => [
        [
          'label' => 'General Ledger',
          'url'   => 'finance-ledger.php',
          'page'  => 'finance-ledger',
          'title' => 'Accounting audit trail'
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
  'title' => 'Pengaturan Sistem',
  'icon'  => 'fas fa-cogs',

  'children' => [

    [
      'title' => 'System',
      'icon'  => 'fas fa-tools',

      'children' => [

        [
          'label' => 'User',
          'url'   => 'setting-user.php',
          'page'  => 'setting-user',
          'title' => 'User Management'
        ],

        [
          'label' => 'Role & Permission',
          'url'   => 'setting-role.php',
          'page'  => 'setting-role',
          'title' => 'Access Control System'
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

$lvl1Open = false;

/*
=====================================================
AUTO DETECT ACTIVE LEVEL 1
=====================================================
*/
if(isset($lvl1['children'])){

  foreach($lvl1['children'] as $lvl2){

    if(isset($lvl2['children'])){

      foreach($lvl2['children'] as $lvl3){

        if(isset($lvl3['page']) && $page == $lvl3['page']){

          $lvl1Open = true;

        }

      }

    }

  }

}

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

            if(isset($lvl2['children'])){

  foreach($lvl2['children'] as $lvl3){

              if($page == $lvl3['page']){
                $lvl2Open = true;
              }

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