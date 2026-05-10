<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Brand Logo -->
  <a href="index.php" class="brand-link text-center">
    <span class="brand-text font-weight-light">TOKOMAN</span>
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

/*
=========================================================
DASHBOARD
=========================================================
*/
[
  'title' => 'Dashboard',
  'icon'  => 'fas fa-home',
  'pages' => [
    'dashboard-admin',
    'dashboard-manager',
    'dashboard-fungsional'
  ],

  'children' => [

    [
      'label' => 'Admin',
      'url'   => 'dashboard-admin.php',
      'page'  => 'dashboard-admin'
    ],

    [
      'label' => 'Manager',
      'url'   => 'dashboard-manager.php',
      'page'  => 'dashboard-manager'
    ],

    [
      'label' => 'Fungsional',
      'url'   => 'dashboard-fungsional.php',
      'page'  => 'dashboard-fungsional'
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
    'master-customer',
    'master-supplier',
    'master-persediaan',
    'master-kategori',
    'master-gudang',
    'master-coa',
    'master-users'
  ],

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
      'label' => 'Persediaan Barang',
      'url'   => 'master-persediaan.php',
      'page'  => 'master-persediaan'
    ],

    [
      'label' => 'Kategori Barang',
      'url'   => 'master-kategori.php',
      'page'  => 'master-kategori'
    ],

    [
      'label' => 'Gudang',
      'url'   => 'master-gudang.php',
      'page'  => 'master-gudang'
    ],

    [
      'label' => 'COA',
      'url'   => 'master-coa.php',
      'page'  => 'master-coa'
    ],

    [
      'label' => 'User & Hak Akses',
      'url'   => 'master-users.php',
      'page'  => 'master-users'
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
    'sales-order',
    'sales-kredit',
    'sales-retur',
    'sales-dp',

    'sales-monitor',
    'sales-piutang',

    'sales-laporan',

    'sales-riwayat'
  ],

  'children' => [

    /*
    =========================================
    LEVEL 2 TANPA TURUNAN
    =========================================
    */
    [
      'label' => 'Dashboard Sales',
      'url'   => 'sales-dashboard.php',
      'page'  => 'sales-dashboard'
    ],

    /*
    =========================================
    TRANSAKSI
    =========================================
    */
    [
      'title' => 'Transaksi',
      'icon'  => 'far fa-folder',

      'children' => [

        [
          'label' => 'Penjualan',
          'url'   => 'sales-order.php',
          'page'  => 'sales-order'
        ],

        [
          'label' => 'POS / Kasir',
          'url'   => 'sales-pos.php',
          'page'  => 'sales-pos'
        ],

        [
          'label' => 'Penjualan Kredit',
          'url'   => 'sales-kredit.php',
          'page'  => 'sales-kredit'
        ],

        [
          'label' => 'Retur Penjualan',
          'url'   => 'sales-retur.php',
          'page'  => 'sales-retur'
        ],

        [
          'label' => 'DP Penjualan',
          'url'   => 'sales-dp.php',
          'page'  => 'sales-dp'
        ],

      ]
    ],

    /*
    =========================================
    MONITORING
    =========================================
    */
    [
      'title' => 'Monitoring',
      'icon'  => 'far fa-folder',

      'children' => [

        [
          'label' => 'Monitoring Sales',
          'url'   => 'sales-monitor.php',
          'page'  => 'sales-monitor'
        ],

        [
          'label' => 'Piutang Customer',
          'url'   => 'sales-piutang.php',
          'page'  => 'sales-piutang'
        ],

      ]
    ],

    /*
    =========================================
    LAPORAN
    =========================================
    */
    [
      'title' => 'Laporan',
      'icon'  => 'far fa-folder',

      'children' => [

        [
          'label' => 'Rekap Penjualan',
          'url'   => 'sales-laporan.php',
          'page'  => 'sales-laporan'
        ],

      ]
    ],

    /*
    =========================================
    RIWAYAT
    =========================================
    */
    [
      'title' => 'Riwayat',
      'icon'  => 'far fa-folder',

      'children' => [

        [
          'label' => 'Riwayat Sales',
          'url'   => 'sales-riwayat.php',
          'page'  => 'sales-riwayat'
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

    'op-pembelian',
    'op-pembelian-tunai',
    'op-pembelian-kredit',
    'op-retur-beli',
    'op-pembayaran-hutang',

    'op-mutasi',
    'op-bahanbaku',
    'op-produksi',
    'op-adjustment',
    'op-stockopname',

    'monitor-stock',
    'monitor-minimum',
    'monitor-fastmoving',
    'monitor-slowmoving',
    'monitor-nilai',
    'monitor-menu',
    'monitor-bahan',
    'monitor-produksi',

    'laporan-pembelian',
    'laporan-hpp',
    'laporan-stock',

    'riwayat-stock',
    'riwayat-kartustock'

  ],

  'children' => [

    /*
    =========================================
    LEVEL 2 TANPA TURUNAN
    =========================================
    */
    [
      'label' => 'Dashboard Operation',
      'url'   => 'operation-dashboard.php',
      'page'  => 'operation-dashboard'
    ],

    /*
    =========================================
    TRANSAKSI
    =========================================
    */
    [
      'title' => 'Transaksi',
      'icon'  => 'far fa-folder',

      'children' => [

        [
          'label' => 'Pembelian',
          'url'   => 'op-pembelian.php',
          'page'  => 'op-pembelian'
        ],

        [
          'label' => 'Pembelian Tunai',
          'url'   => 'op-pembelian-tunai.php',
          'page'  => 'op-pembelian-tunai'
        ],

        [
          'label' => 'Pembelian Kredit',
          'url'   => 'op-pembelian-kredit.php',
          'page'  => 'op-pembelian-kredit'
        ],

        [
          'label' => 'Retur Pembelian',
          'url'   => 'op-retur-beli.php',
          'page'  => 'op-retur-beli'
        ],

        [
          'label' => 'Pembayaran Hutang',
          'url'   => 'op-pembayaran-hutang.php',
          'page'  => 'op-pembayaran-hutang'
        ],

        [
          'label' => 'Mutasi Stok',
          'url'   => 'op-mutasi.php',
          'page'  => 'op-mutasi'
        ],

        [
          'label' => 'Pemakaian Bahan Baku',
          'url'   => 'op-bahanbaku.php',
          'page'  => 'op-bahanbaku'
        ],

        [
          'label' => 'Produksi Menu',
          'url'   => 'op-produksi.php',
          'page'  => 'op-produksi'
        ],

        [
          'label' => 'Adjustment Stok',
          'url'   => 'op-adjustment.php',
          'page'  => 'op-adjustment'
        ],

        [
          'label' => 'Stock Opname',
          'url'   => 'op-stockopname.php',
          'page'  => 'op-stockopname'
        ],

      ]
    ],

    /*
    =========================================
    MONITORING
    =========================================
    */
    [
      'title' => 'Monitoring',
      'icon'  => 'far fa-folder',

      'children' => [

        [
          'label' => 'Monitoring Stok',
          'url'   => 'monitor-stock.php',
          'page'  => 'monitor-stock'
        ],

        [
          'label' => 'Stok Minimum',
          'url'   => 'monitor-minimum.php',
          'page'  => 'monitor-minimum'
        ],

        [
          'label' => 'Fast Moving',
          'url'   => 'monitor-fastmoving.php',
          'page'  => 'monitor-fastmoving'
        ],

        [
          'label' => 'Slow Moving',
          'url'   => 'monitor-slowmoving.php',
          'page'  => 'monitor-slowmoving'
        ],

        [
          'label' => 'Nilai Persediaan',
          'url'   => 'monitor-nilai.php',
          'page'  => 'monitor-nilai'
        ],

        [
          'label' => 'Monitoring Menu',
          'url'   => 'monitor-menu.php',
          'page'  => 'monitor-menu'
        ],

        [
          'label' => 'Kekurangan Bahan',
          'url'   => 'monitor-bahan.php',
          'page'  => 'monitor-bahan'
        ],

        [
          'label' => 'Estimasi Produksi',
          'url'   => 'monitor-produksi.php',
          'page'  => 'monitor-produksi'
        ],

      ]
    ],

    /*
    =========================================
    LAPORAN
    =========================================
    */
    [
      'title' => 'Laporan',
      'icon'  => 'far fa-folder',

      'children' => [

        [
          'label' => 'Rekap Pembelian',
          'url'   => 'laporan-pembelian.php',
          'page'  => 'laporan-pembelian'
        ],

        [
          'label' => 'Rekap HPP',
          'url'   => 'laporan-hpp.php',
          'page'  => 'laporan-hpp'
        ],

        [
          'label' => 'Rekap Stok',
          'url'   => 'laporan-stock.php',
          'page'  => 'laporan-stock'
        ],

      ]
    ],

    /*
    =========================================
    RIWAYAT
    =========================================
    */
    [
      'title' => 'Riwayat',
      'icon'  => 'far fa-folder',

      'children' => [

        [
          'label' => 'Riwayat Stok',
          'url'   => 'riwayat-stock.php',
          'page'  => 'riwayat-stock'
        ],

        [
          'label' => 'Kartu Stok',
          'url'   => 'riwayat-kartustock.php',
          'page'  => 'riwayat-kartustock'
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
  'icon'  => 'fas fa-money-bill-wave',

  'pages' => [

    'finance-kasmasuk',
    'finance-kaskeluar',
    'finance-jurnalumum',
    'finance-piutang',
    'finance-hutang',

    'monitor-cashflow',
    'monitor-hutangtempo',
    'monitor-piutangtempo',

    'laporan-bukubesar',
    'laporan-labarugi',
    'laporan-modal',
    'laporan-neraca',
    'laporan-aruskas',

    'ledger-kas',
    'ledger-hutang',
    'ledger-piutang'
  ],

  'children' => [

    /*
    =========================================
    LEVEL 2 TANPA TURUNAN
    =========================================
    */
    [
      'label' => 'Dashboard Finance',
      'url'   => 'finance-dashboard.php',
      'page'  => 'finance-dashboard'
    ],

    /*
    =========================================
    TRANSAKSI
    =========================================
    */
    [
      'title' => 'Transaksi',
      'icon'  => 'far fa-folder',

      'children' => [

        [
          'label' => 'Kas Masuk',
          'url'   => 'finance-kasmasuk.php',
          'page'  => 'finance-kasmasuk'
        ],

        [
          'label' => 'Kas Keluar',
          'url'   => 'finance-kaskeluar.php',
          'page'  => 'finance-kaskeluar'
        ],

        [
          'label' => 'Jurnal Umum',
          'url'   => 'finance-jurnalumum.php',
          'page'  => 'finance-jurnalumum'
        ],

        [
          'label' => 'Pelunasan Piutang',
          'url'   => 'finance-piutang.php',
          'page'  => 'finance-piutang'
        ],

        [
          'label' => 'Pelunasan Hutang',
          'url'   => 'finance-hutang.php',
          'page'  => 'finance-hutang'
        ],

      ]
    ],

    /*
    =========================================
    MONITORING
    =========================================
    */
    [
      'title' => 'Monitoring',
      'icon'  => 'far fa-folder',

      'children' => [

        [
          'label' => 'Cashflow',
          'url'   => 'monitor-cashflow.php',
          'page'  => 'monitor-cashflow'
        ],

        [
          'label' => 'Hutang Jatuh Tempo',
          'url'   => 'monitor-hutangtempo.php',
          'page'  => 'monitor-hutangtempo'
        ],

        [
          'label' => 'Piutang Jatuh Tempo',
          'url'   => 'monitor-piutangtempo.php',
          'page'  => 'monitor-piutangtempo'
        ],

      ]
    ],

    /*
    =========================================
    LAPORAN
    =========================================
    */
    [
      'title' => 'Laporan',
      'icon'  => 'far fa-folder',

      'children' => [

        [
          'label' => 'Buku Besar',
          'url'   => 'laporan-bukubesar.php',
          'page'  => 'laporan-bukubesar'
        ],

        [
          'label' => 'Laba Rugi',
          'url'   => 'laporan-labarugi.php',
          'page'  => 'laporan-labarugi'
        ],

        [
          'label' => 'Perubahan Modal',
          'url'   => 'laporan-modal.php',
          'page'  => 'laporan-modal'
        ],

        [
          'label' => 'Neraca',
          'url'   => 'laporan-neraca.php',
          'page'  => 'laporan-neraca'
        ],

        [
          'label' => 'Arus Kas',
          'url'   => 'laporan-aruskas.php',
          'page'  => 'laporan-aruskas'
        ],

      ]
    ],

    /*
    =========================================
    RIWAYAT
    =========================================
    */
    [
      'title' => 'Riwayat',
      'icon'  => 'far fa-folder',

      'children' => [

        [
          'label' => 'Ledger Kas',
          'url'   => 'ledger-kas.php',
          'page'  => 'ledger-kas'
        ],

        [
          'label' => 'Ledger Hutang',
          'url'   => 'ledger-hutang.php',
          'page'  => 'ledger-hutang'
        ],

        [
          'label' => 'Ledger Piutang',
          'url'   => 'ledger-piutang.php',
          'page'  => 'ledger-piutang'
        ],

      ]
    ],

  ]
],

];
?>
    <!-- =========================================================
    SIDEBAR MENU LOOPING 3 LEVEL - ADMIN LTE
    Support:
    LEVEL 1 = MODULE
    LEVEL 2 = GROUP / SINGLE MENU
    LEVEL 3 = CHILD MENU
    ========================================================= -->

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="false">

        <?php foreach ($menu as $m): ?>

          <?php
          $isOpenLevel1 = in_array($page, $m['pages'] ?? []);
          ?>

          <!-- =====================================================
          LEVEL 1
          ====================================================== -->
          <li class="nav-item <?= $isOpenLevel1 ? 'menu-open' : '' ?>">

            <a href="#" class="nav-link <?= $isOpenLevel1 ? 'active' : '' ?>">
              <i class="nav-icon <?= $m['icon'] ?>"></i>

              <p>
                <?= $m['title'] ?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">

              <?php foreach ($m['children'] as $c): ?>

                <?php
                /*
                =====================================================
                CEK:
                apakah menu level 2 punya children?
                =====================================================
                */
                $hasChildren = isset($c['children']);

                /*
                =====================================================
                LEVEL 2 OPEN
                =====================================================
                */
                $isOpenLevel2 = false;

                if ($hasChildren) {

                  foreach ($c['children'] as $sub) {
                    if ($page == $sub['page']) {
                      $isOpenLevel2 = true;
                    }
                  }

                }
                ?>

                <!-- =================================================
                LEVEL 2 DENGAN TURUNAN
                ================================================== -->
                <?php if ($hasChildren): ?>

                  <li class="nav-item <?= $isOpenLevel2 ? 'menu-open' : '' ?>">

                    <a href="#"
                       class="nav-link <?= $isOpenLevel2 ? 'active' : '' ?>">

                      <i class="nav-icon <?= $c['icon'] ?>"></i>

                      <p>
                        <?= $c['title'] ?>
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <!-- =============================================
                    LEVEL 3
                    ============================================== -->
                    <ul class="nav nav-treeview">

                      <?php foreach ($c['children'] as $sub): ?>

                        <li class="nav-item">

                          <a href="<?= $sub['url'] ?>"
                             class="nav-link <?= ($page == $sub['page']) ? 'active' : '' ?>">

                            <i class="far fa-circle nav-icon"></i>

                            <p><?= $sub['label'] ?></p>

                          </a>

                        </li>

                      <?php endforeach; ?>

                    </ul>

                  </li>

                <!-- =================================================
                LEVEL 2 TANPA TURUNAN
                ================================================== -->
                <?php else: ?>

                  <li class="nav-item">

                    <a href="<?= $c['url'] ?>"
                       class="nav-link <?= ($page == $c['page']) ? 'active' : '' ?>">

                      <i class="far fa-circle nav-icon"></i>

                      <p><?= $c['label'] ?></p>

                    </a>

                  </li>

                <?php endif; ?>

              <?php endforeach; ?>

            </ul>
          </li>

        <?php endforeach; ?>

        <!-- =====================================================
        KEMBALI MENU UTAMA
        ====================================================== -->
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