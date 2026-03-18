<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link text-center">
    <span class="brand-text font-weight-light">ORION HOUSEWARE</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar User Panel -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center"
    style="border-bottom: 1px solid rgba(255,255,255,.2);"
    data-bs-toggle="modal"
    data-bs-target="#modalPilihPeran"
    >

    <!-- User Icon -->
    <div class="image">
      <span class="img-circle elevation-2 d-flex align-items-center justify-content-center" style="width:40px;height:40px;background:#ffffff;"><i class="fas fa-user text-black"></i>
      </span>
    </div>

    <!-- User Info -->
    <div class="info ml-2" >
      <a href="#" class="d-block" data-toggle="modal" data-target="#modalPilihPeran">
        <span class="d-block text-white">su</span>
        <small class="text-success ">
          <i class="fas fa-circle mr-1"></i> <?= $role; ?>
        </small>
      </a>
    </div>

  </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column"
        data-widget="treeview"
        role="menu"
        data-accordion="false">


<!-- BERANDA -->
<li class="nav-item">
  <a href="index.php" class="nav-link <?php echo $page == '' ? 'active' : ''; ?>">
    <i class="nav-icon fas fa-home"></i>
    <p>
      Beranda
    </p>
  </a>
</li>



      <!-- SALES ORDER -->
      <li class="nav-item <?php echo in_array($page, ['transaksi_preorder','master_toko','master_promo','transaksi_tracking','transaksi_salesorder']) ? 'menu-open' : ''; ?>">
        <a href="#" class="nav-link <?php echo in_array($page, ['transaksi_preorder','master_toko','master_promo','transaksi_tracking','transaksi_salesorder']) ? 'active' : ''; ?>">
          <i class="nav-icon fas fa-handshake"></i>
          <p>
             Pesanan
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
             <a href="master-promo.php<?=$q;?>" class="nav-link <?php echo $page == 'master_promo' ? 'active' : ''; ?>">
                <i class="nav-icon far fa-circle"></i>
                <p>
                  Ketentuan Promo
                </p>
              </a>
            </li>
          <li class="nav-item">
            <a href="transaksi-preorder.php<?php echo $q;?>" class="nav-link <?php echo $page == 'transaksi_preorder' ? 'active' : ''; ?>">
              <i class="nav-icon far fa-circle"></i>
              <p>
                Pre-Order
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="transaksi-salesorder.php<?php echo $q;?>" class="nav-link <?php echo $page == 'transaksi_salesorder' ? 'active' : ''; ?>">
              <i class="nav-icon far fa-circle"></i>
              <p>
                Sales Order
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="transaksi-tracking-order-.php<?php echo $q;?>" class="nav-link <?php echo $page == 'transaksi_tracking' ? 'active' : ''; ?>">
              <i class="nav-icon far fa-circle"></i>
              <p>
               Order Tracking
              </p>
            </a>
          </li>






        </ul>
      </li>


<!-- LAPORAN -->
<li class="nav-item <?php echo in_array($page, ['laporan_penjualan','laporan_pengiriman','laporan_piutang','laporan_pelunasan_piutang','laporan_pembelian','laporan_utang','laporan_pelunasan_utang','laporan_insentif_sales','laporan_faktur_pajak','laporan_laba_rugi','laporan_omset_sales','laporan_retur_penjualan']) ? 'menu-open' : ''; ?>">
  <a href="#" class="nav-link <?php echo in_array($page, ['laporan_penjualan']) ? 'active' : ''; ?>">
    <i class="nav-icon fas fa-chart-pie"></i>
    <p>
      Laporan
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="laporan-penjualan.php<?=$q;?>" class="nav-link <?php echo $page == 'laporan_penjualan' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Penjualan
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="laporan-piutang.php<?=$q;?>" class="nav-link <?php echo $page == 'laporan_piutang' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Piutang Dagang
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="laporan-pelunasan-piutang.php<?=$q;?>" class="nav-link <?php echo $page == 'laporan_pelunasan_piutang' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Pelunasan Piutang
        </p>
      </a>
    </li>

    <li class="nav-item">
      <a href="laporan-insentif-sales.php<?=$q;?>" class="nav-link <?php echo $page == 'laporan_insentif_sales' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Insentif Sales
        </p>
      </a>
    </li>
    
    
    <li class="nav-item">
      <a href="laporan-omset-sales.php<?=$q;?>" class="nav-link <?php echo $page == 'laporan_omset_sales' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Omset Sales
        </p>
      </a>
    </li>
  </ul>
</li>





        <!-- KEMBALI MENU UTAMA -->
        <li class="nav-item mt-3">
          <a href="../menu.php" class="nav-link">
            <i class="nav-icon fas fa-arrow-left"></i>
            <p>Menu Utama</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->

    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>


<!-- Modal Pilih Peran -->
<div class="modal fade" id="modalPilihPeran" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Pilih Peran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">

        <button class="btn btn-outline-primary w-100 mb-2 role-select" data-role="Admin">
          Admin
        </button>

        <button class="btn btn-outline-primary w-100 mb-2 role-select" data-role="Manajer">
          Manajer
        </button>

        <button class="btn btn-outline-primary w-100 mb-2 role-select" data-role="Dosen">
          Dosen
        </button>

        <button class="btn btn-outline-primary w-100 role-select" data-role="sales">
          Sales
        </button>

      </div>

    </div>
  </div>
</div>

