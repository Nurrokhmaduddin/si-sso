<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Brand Logo -->
  <a href="index.php" class="brand-link text-center">
    <span class="brand-text font-weight-light">RESTOMAN</span>
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
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">

        <!-- BERANDA -->
        <li class="nav-item <?php echo in_array($page, ['beranda_admin','beranda_kasir','beranda_walimurid','beranda_murid','beranda_administrator','beranda_dapur','beranda_customer','beranda_waiter']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['beranda_admin','beranda_kasir','beranda_walimurid','beranda_murid','beranda_administrator','beranda_dapur','beranda_customer','beranda_waiter']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Beranda
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview"> 
            <li class="nav-item">
              <a href="index.php" class="nav-link <?php echo $page == 'beranda_administrator' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Super Admin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="beranda-admin.php" class="nav-link <?php echo $page == 'beranda_admin' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ADMIN / MANAGER</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="beranda-kasir.php" class="nav-link <?php echo $page == 'beranda_kasir' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>KASIR</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="beranda-dapur.php" class="nav-link <?php echo $page == 'beranda_dapur' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>DAPUR</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="beranda-waiter.php" class="nav-link <?php echo $page == 'beranda_waiter' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>WAITER</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="beranda-customer.php" class="nav-link <?php echo $page == 'beranda_customer' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>CUSTOMER</p>
              </a>
            </li>
            
          </ul>
        </li>


        <!-- Master Data (SuperAdmin & Gudang) -->
        <li class="nav-item <?php echo in_array($page, ['master-menu','master-bahan','master-resep','master-supplier','master-customer','master-meja']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['master-menu','master-bahan','master-resep','master-supplier','master-customer','master-meja']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-database"></i>
            <p>Master Data <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">

<li class="nav-item"><a href="master-menu.php" class="nav-link <?php echo $page == 'master-menu' ? 'active' : ''; ?>">
              <i class="far fa-circle nav-icon"></i><p>Daftar Kitchen(tentukan menu yg digarap tiap kitchen)</p></a></li>

            <li class="nav-item"><a href="master-menu.php" class="nav-link <?php echo $page == 'master-menu' ? 'active' : ''; ?>">
              <i class="far fa-circle nav-icon"></i><p>Menu & Kategori</p></a></li>

            <li class="nav-item"><a href="master-bahan.php" class="nav-link <?php echo $page == 'master-bahan' ? 'active' : ''; ?>">
              <i class="far fa-circle nav-icon"></i><p>Bahan Baku</p></a></li>

            <li class="nav-item"><a href="master-resep.php" class="nav-link <?php echo $page == 'master-resep' ? 'active' : ''; ?>">
              <i class="far fa-circle nav-icon"></i><p>Resep (BOM)</p></a></li>

            <li class="nav-item"><a href="master-supplier.php" class="nav-link <?php echo $page == 'master-supplier' ? 'active' : ''; ?>">
              <i class="far fa-circle nav-icon"></i><p>Supplier</p></a></li>

            <li class="nav-item"><a href="master-customer.php" class="nav-link <?php echo $page == 'master-customer' ? 'active' : ''; ?>">
              <i class="far fa-circle nav-icon"></i><p>Customer</p></a></li>

            <li class="nav-item"><a href="master-meja.php" class="nav-link <?php echo $page == 'master-meja' ? 'active' : ''; ?>">
              <i class="far fa-circle nav-icon"></i><p>Meja / Area</p></a></li>

          </ul>
        </li>

        <!-- MARKETING -->
        <!-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-bullhorn"></i>
            <p>Marketing <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Promo & Diskon</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Campaign</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Customer Loyalty</p></a></li>

          </ul>
        </li> -->

        <!-- Sales (Kasir & SuperAdmin) -->
        <li class="nav-item <?php echo in_array($page, ['sales-kasir','sales-order','sales-qr']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['sales-kasir','sales-order','sales-qr']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-cash-register"></i>
            <p>Sales Orders<i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="sales-qr.php" class="nav-link <?php echo $page == 'sales-qr' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Self Order (QR Table)</p>
              </a>
            </li>

            

            <li class="nav-item">
              <a href="sales-kasir.php" class="nav-link <?php echo $page == 'sales-kasir' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>POS / Kasir</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="sales-kasir2.php" class="nav-link <?php echo $page == 'sales-kasir2' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>POS / Kasir (Alternative)</p>
              </a>
            </li>


            <li class="nav-item">
              <a href="sales-order.php" class="nav-link <?php echo $page == 'sales-order' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Lap.Monitor Orders</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link <?php echo $page == 'sales-report' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Lap.Rekapitulasi Orders</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link <?php echo $page == 'sales-history' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Lap.Riwayat Orders</p>
              </a>
            </li>
            <li class="nav-item"><a href="#" class="nav-link <?php echo $page == 'sales-ooo' ? 'active' : ''; ?>"> <i class="far fa-circle nav-icon"></i><p>Riwayat Penjualan</p></a></li>

          </ul>
        </li>

        <!-- Operation (Kitchen, Gudang, SuperAdmin) -->
        <li class="nav-item <?php echo in_array($page, ['operation-beli-bahan','operation-kitchen','operation-stok-bahan','operation-stok-opname','operation-kitchen-op']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['operation-beli-bahan','operation-kitchen','operation-stok-bahan','operation-stok-opname','operation-kitchen-op']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-utensils"></i>
            <p>Operation <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">


            <li class="nav-item"><a href="operation-kitchen.php" class="nav-link <?php echo $page == 'operation-kitchen' ? 'active' : ''; ?>">  
              <i class="far fa-circle nav-icon"></i><p>Kitchen Display</p></a></li>

              <li class="nav-item"><a href="operation-kitchen-op.php" class="nav-link <?php echo $page == 'operation-kitchen-op' ? 'active' : ''; ?>">  
                <i class="far fa-circle nav-icon"></i><p>Riwayat OP Kitchen </p></a>
              </li>

                <li class="nav-item">
                  <a href="operation-beli-bahan.php" class="nav-link <?php echo $page == 'operation-beli-bahan' ? 'active' : ''; ?>">  <i class="far fa-circle nav-icon"></i><p>Pembelian Bahan</p></a>
                </li>
                <li class="nav-item">
                  <a href="operation-beli-bahan2.php" class="nav-link <?php echo $page == 'operation-beli-bahan' ? 'active' : ''; ?>">  <i class="far fa-circle nav-icon"></i><p>Pembelian Bahan 2</p></a>
                </li>

                <li class="nav-item"><a href="operation-stok-bahan.php" class="nav-link <?php echo $page == 'operation-stok-bahan' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i><p>Stok Bahan</p></a></li>

                  <li class="nav-item"><a href="operation-stok-opname.php" class="nav-link <?php echo $page == 'operation-stok-opname' ? 'active' : ''; ?>">
                    <i class="far fa-circle nav-icon"></i><p>Stok Opname</p></a></li>


                    <li class="nav-item">
                      <a href="sales-order.php" class="nav-link <?php echo $page == 'sales-order' ? 'active' : ''; ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lap.Monitor </p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#" class="nav-link <?php echo $page == 'sales-report' ? 'active' : ''; ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lap.Rekapitulasi </p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#" class="nav-link <?php echo $page == 'sales-history' ? 'active' : ''; ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lap.Riwayat </p>
                      </a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link <?php echo $page == 'sales-ooo' ? 'active' : ''; ?>"> <i class="far fa-circle nav-icon"></i><p>Riwayat Penjualan</p></a></li>

          </ul>
        </li>

        <!-- Finance (Finance, SuperAdmin) -->
        <li class="nav-item <?php echo in_array($page, ['finance-jurnal','finance-akun']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['finance-jurnal','finance-akun']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-money-bill"></i>
            <p>Finance <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item"><a href="#" class="nav-link <?php echo $page == 'operation-stok-opname' ? 'active' : ''; ?>"><i class="far fa-circle nav-icon"></i><p>Kas & Bank</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Pengeluaran</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Pendapatan</p></a></li>
            <li class="nav-item"><a href="finance-akun.php" class="nav-link <?php echo $page == 'finance-akun' ? 'active' : ''; ?>"><i class="far fa-circle nav-icon"></i><p>CoA</p></a></li>
            <li class="nav-item"><a href="finance-jurnal.php" class="nav-link <?php echo $page == 'finance-jurnal' ? 'active' : ''; ?>"><i class="far fa-circle nav-icon"></i><p>Jurnal</p></a></li>

          </ul>
        </li>

        <!-- LAPORAN -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>Laporan <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">


            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Penjualan</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Omset</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Stok</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Pembelian</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Laba Rugi</p></a></li>

          </ul>
        </li>

<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

  <!-- ===================== -->
  <!-- SALES MODULE -->
  <!-- ===================== -->
  <li class="nav-header">SALES</li>

  <li class="nav-item">
    <a href="sales-monitor.php" class="nav-link">
      <i class="nav-icon fas fa-bolt"></i>
      <p>Monitor Sales</p>
    </a>
  </li>

  <li class="nav-item">
    <a href="sales-rekap.php" class="nav-link">
      <i class="nav-icon fas fa-chart-bar"></i>
      <p>Rekap Sales</p>
    </a>
  </li>

  <li class="nav-item">
    <a href="sales-riwayat.php" class="nav-link">
      <i class="nav-icon fas fa-history"></i>
      <p>Riwayat Sales</p>
    </a>
  </li>


  <!-- ===================== -->
  <!-- OPERATION MODULE -->
  <!-- ===================== -->
  <li class="nav-header">OPERATION</li>

  <li class="nav-item">
    <a href="operation-monitor.php" class="nav-link">
      <i class="nav-icon fas fa-fire"></i>
      <p>Monitor Kitchen</p>
    </a>
  </li>

  <li class="nav-item">
    <a href="operation-rekap.php" class="nav-link">
      <i class="nav-icon fas fa-boxes"></i>
      <p>Rekap Operasional</p>
    </a>
  </li>

  <li class="nav-item">
    <a href="operation-riwayat.php" class="nav-link">
      <i class="nav-icon fas fa-clipboard-list"></i>
      <p>Riwayat Produksi</p>
    </a>
  </li>


  <!-- ===================== -->
  <!-- FINANCE MODULE -->
  <!-- ===================== -->
  <li class="nav-header">FINANCE</li>

  <li class="nav-item">
    <a href="finance-monitor.php" class="nav-link">
      <i class="nav-icon fas fa-wallet"></i>
      <p>Monitor Cashflow</p>
    </a>
  </li>

  <li class="nav-item">
    <a href="finance-rekap.php" class="nav-link">
      <i class="nav-icon fas fa-file-invoice-dollar"></i>
      <p>Rekap Keuangan</p>
    </a>
  </li>

  <li class="nav-item">
    <a href="finance-riwayat.php" class="nav-link">
      <i class="nav-icon fas fa-book"></i>
      <p>Riwayat Jurnal</p>
    </a>
  </li>

</ul>
        <!-- KONFIGURASI -->
        <!-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-sliders-h"></i>
            <p>Konfigurasi <i class="right fas fa-angle-left"></i></p>
          </a>

          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Setting Pajak & Service</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Workflow Kitchen</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Notifikasi</p>
              </a>
            </li>

          </ul>
        </li> -->

        <!-- PENGATURAN -->
        <li class="nav-item <?php echo in_array($page, ['pengaturan-roles']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['pengaturan-roles']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-cog"></i>
            <p>Pengaturan <i class="right fas fa-angle-left"></i></p>
          </a>

          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data User</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="pengaturan-roles.php" class="nav-link <?php echo $page == 'pengaturan-roles' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Role & Hak Akses</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Audit Log</p>
              </a>
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