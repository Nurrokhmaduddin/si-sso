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
          <i class="fas fa-circle mr-1"></i> Admin
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
        <!-- MASTER DATA -->
        <li class="nav-item <?php echo in_array($page, ['master_tahun','master_semester','master_peminatan','master_jenjang','master_jalur','master_dosen','master_mahasiswa']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['master_tahun','master_semester','master_peminatan','master_jenjang','master_jalur','master_dosen','master_mahasiswa']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Master Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="https://orion-houseware.my.id/jenis_biaya" class="nav-link <?php echo $page == 'master_jenis_biaya' ? 'active' : ''; ?>">
                <i class="nav-icon far fa-circle"></i>
                <p>
                  Data Jenis Biaya
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://orion-houseware.my.id/satuan" class="nav-link <?php echo $page == 'transaksi_preorde' ? 'active' : ''; ?>">
                <i class="nav-icon far fa-circle"></i>
                <p>
                  Data Satuan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://orion-houseware.my.id/merk" class="nav-link <?php echo $page == 'transaksi_preorde' ? 'active' : ''; ?>">
                <i class="nav-icon far fa-circle"></i>
                <p>
                  Data Merek
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://orion-houseware.my.id/promo" class="nav-link <?php echo $page == 'transaksi_preorde' ? 'active' : ''; ?>">
                <i class="nav-icon far fa-circle"></i>
                <p>
                  Data Promo
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://orion-houseware.my.id/produk" class="nav-link <?php echo $page == 'transaksi_preorde' ? 'active' : ''; ?>">
                <i class="nav-icon far fa-circle"></i>
                <p>
                  Data Produk/Barang
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://orion-houseware.my.id/administrator" class="nav-link <?php echo $page == 'transaksi_preorde' ? 'active' : ''; ?>">
                <i class="nav-icon far fa-circle"></i>
                <p>
                  Data Administrator
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://orion-houseware.my.id/supplier" class="nav-link <?php echo $page == 'transaksi_preorde' ? 'active' : ''; ?>">
                <i class="nav-icon far fa-circle"></i>
                <p>
                  Data Supplier
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://orion-houseware.my.id/sales" class="nav-link <?php echo $page == 'transaksi_preorde' ? 'active' : ''; ?>">
                <i class="nav-icon far fa-circle"></i>
                <p>
                  Data Sales
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://orion-houseware.my.id/mobil" class="nav-link <?php echo $page == 'transaksi_preorde' ? 'active' : ''; ?>">
                <i class="nav-icon far fa-circle"></i>
                <p>
                  Data Mobil
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://orion-houseware.my.id/toko" class="nav-link <?php echo $page == 'transaksi_preorde' ? 'active' : ''; ?>">
                <i class="nav-icon far fa-circle"></i>
                <p>
                  Data Toko
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://orion-houseware.my.id/area" class="nav-link <?php echo $page == 'transaksi_preorde' ? 'active' : ''; ?>">
                <i class="nav-icon far fa-circle"></i>
                <p>
                  Data Area
                </p>
              </a>
            </li>
            

          </ul>
        </li>

<!-- Marketing

(optional jika nanti berkembang)

Promo

Customer / Toko

Area

Sales -->


      <!-- SALES ORDER -->
      <li class="nav-item <?php echo in_array($page, ['transaksi_preorder']) ? 'menu-open' : ''; ?>">
        <a href="#" class="nav-link <?php echo in_array($page, ['transaksi_preorder']) ? 'active' : ''; ?>">
          <i class="nav-icon fas fa-handshake"></i>
          <p>
             Order
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="transaksi-preorder.php" class="nav-link <?php echo $page == 'transaksi_preorder' ? 'active' : ''; ?>">
              <i class="nav-icon far fa-circle"></i>
              <p>
                Pre-Order
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="transaksi-preorde.php" class="nav-link <?php echo $page == 'transaksi_preorder' ? 'active' : ''; ?>">
              <i class="nav-icon far fa-circle"></i>
              <p>
                Sales Order
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="transaksi-preorde.php" class="nav-link <?php echo $page == 'transaksi_preorder' ? 'active' : ''; ?>">
              <i class="nav-icon far fa-circle"></i>
              <p>
                Project Order
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="transaksi-preorde.php" class="nav-link <?php echo $page == 'transaksi_preorder' ? 'active' : ''; ?>">
              <i class="nav-icon far fa-circle"></i>
              <p>
               Order Tracking
              </p>
            </a>
          </li>






        </ul>
      </li>
<!-- OPERATION -->
 <li class="nav-item <?php echo in_array($page, ['operasional_stok_gudang','operasional_stok_rekap','operasional_stok_opname','operasional_stok_pelacakan']) ? 'menu-open' : ''; ?>">
        <a href="#" class="nav-link <?php echo in_array($page, ['operasional_stok_gudang','operasional_stok_rekap','operasional_stok_opname','operasional_stok_pelacakan']) ? 'active' : ''; ?>">
    <i class="nav-icon fas fa-warehouse"></i>
    <p>
      Operation
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="transaksi-pengiriman.php" class="nav-link <?php echo $page == 'transaksi_pengiriman' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Picking barang
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="transaksi-pengiriman.php" class="nav-link <?php echo $page == 'transaksi_pengiriman' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Packing
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="transaksi-pengiriman.php" class="nav-link <?php echo $page == 'transaksi_pengiriman' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Pengiriman
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="operasional-stok-gudang.php" class="nav-link <?php echo $page == 'operasional_stok_gudang' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Stok Gudang
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="operasional-stok-rekap.php" class="nav-link <?php echo $page == 'operasional_stok_rekap' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Stok Rekap
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="operasional-stok-opname.php" class="nav-link <?php echo $page == 'operasional_stok_opname' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Stok Opname
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    
    <li class="nav-item">
      <a href="operasional-stok-pelacakan.php" class="nav-link <?php echo $page == 'operasional_stok_pelacakan' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Pelacakan
        </p>
      </a>
    </li>
  </ul>
</li>

<!-- FINANACE -->
<li class="nav-item <?php echo in_array($page, ['transaksi_penjualan','transaksi_piutang','transaksi_pelunasan_piutang','transaksi_retur_penjualan','transaksi_pembelian','transaksi_utang','transaksi_pelunasan_utang','transaksi_retur_pembelian','transaksi_faktur_pajak','transaksi_insentif_sales','transaksi_biaya_operasional']) ? 'menu-open' : ''; ?>">
  <a href="#" class="nav-link <?php echo in_array($page, ['transaksi_penjualan','transaksi_piutang','transaksi_pelunasan_piutang','transaksi_retur_penjualan','transaksi_pembelian','transaksi_utang','transaksi_pelunasan_utang','transaksi_retur_pembelian','transaksi_faktur_pajak','transaksi_insentif_sales','transaksi_biaya_operasional']) ? 'active' : ''; ?>">
    <i class="nav-icon fas fa-money-bill"></i>
    <p>
      Finance
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>

  <ul class="nav nav-treeview">
    <!-- <li class="nav-item">
      <a href="transaksi-preorder.php" class="nav-link <?php echo $page == 'transaksi_preorder' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Pre-Order
        </p>
      </a>
    </li> -->
    <li class="nav-item">
      <a href="transaksi-penjualan.php" class="nav-link <?php echo $page == 'transaksi_penjualan' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Penjualan (Invoice)
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="transaksi-piutang.php" class="nav-link <?php echo $page == 'transaksi_piutang' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
           Piutang
        </p>
      </a>
    </li>
    
    <li class="nav-item">
      <a href="transaksi-pelunasan-piutang.php" class="nav-link <?php echo $page == 'transaksi_pelunasan_piutang' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Pelunasan Piutang
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="transaksi-retur-penjualan.php" class="nav-link <?php echo $page == 'transaksi_retur_penjualan' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Retur Penjualan
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="transaksi-pembelian.php" class="nav-link <?php echo $page == 'transaksi_pembelian' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Pembelian (Purchase)
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="transaksi-utang.php" class="nav-link <?php echo $page == 'transaksi_utang' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
           Utang
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="transaksi-pelunasan-utang.php" class="nav-link <?php echo $page == 'transaksi_pelunasan_utang' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Pelunasan Utang
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="transaksi-retur-pembelian.php" class="nav-link <?php echo $page == 'transaksi_retur_pembelian' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Retur Pembelian
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="transaksi-insentif-sales.php" class="nav-link <?php echo $page == 'transaksi_insentif_sales' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Insentif Sales
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="transaksi-faktur-pajak.php" class="nav-link <?php echo $page == 'transaksi_faktur_pajak' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Faktur Pajak
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="transaksi-biaya-operasional.php" class="nav-link <?php echo $page == 'transaksi_biaya_operasional' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Biaya Operasional
        </p>
      </a>
    </li>
  </ul>
</li>


<!-- LAPORAN -->
<li class="nav-item <?php echo in_array($page, ['laporan_penjualan','laporan_pengiriman','laporan_piutang','laporan_pelunasan_piutang','laporan_pembelian','laporan_utang','laporan_pelunasan_utang','laporan_insentif_sales','laporan_faktur_pajak','laporan_laba_rugi','laporan_omset_sales']) ? 'menu-open' : ''; ?>">
  <a href="#" class="nav-link <?php echo in_array($page, ['laporan_penjualan']) ? 'active' : ''; ?>">
    <i class="nav-icon fas fa-chart-pie"></i>
    <p>
      Laporan
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="laporan-penjualan.php" class="nav-link <?php echo $page == 'laporan_penjualan' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Penjualan
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="laporan-pengiriman.php" class="nav-link <?php echo $page == 'laporan_pengiriman' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Pengiriman
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="laporan-piutang.php" class="nav-link <?php echo $page == 'laporan_piutang' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Piutang Dagang
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="laporan-pelunasan-piutang.php" class="nav-link <?php echo $page == 'laporan_pelunasan_piutang' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Pelunasan Piutang
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="laporan-pembelian.php" class="nav-link <?php echo $page == 'laporan_pembelian' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Pembelian
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="laporan-utang.php" class="nav-link <?php echo $page == 'laporan_utang' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Utang Dagang
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="laporan-pelunasan-utang.php" class="nav-link <?php echo $page == 'laporan_pelunasan_utang' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Pelunasan Utang
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="laporan-insentif-sales.php" class="nav-link <?php echo $page == 'laporan_insentif_sales' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Insentif Sales
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="laporan-faktur-pajak.php" class="nav-link <?php echo $page == 'laporan_faktur_pajak' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Faktur Pajak
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="laporan-laba-rugi.php" class="nav-link <?php echo $page == 'laporan_laba_rugi' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Laba Rugi
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="laporan-omset-sales.php" class="nav-link <?php echo $page == 'laporan_omset_sales' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Omset Sales
        </p>
      </a>
    </li>
     <li class="nav-item">
      <a href="laporan-stok.php" class="nav-link <?php echo $page == 'laporan_stok' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Lap. Stok
        </p>
      </a>
    </li>
  </ul>
</li>
<!-- <li class="nav-item has-treeview">
  <a href="https://orion-houseware.my.id/main#" class="nav-link">
    <i class="nav-icon fas fa-book"></i>
    <p>
      Akuntansi
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="https://orion-houseware.my.id/akun" class="nav-link <?php echo $page == 'transaksi_preorde' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Chart of Account
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="https://orion-houseware.my.id/jurnal" class="nav-link <?php echo $page == 'transaksi_preorde' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Jurnal Akuntansi
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="https://orion-houseware.my.id/laba" class="nav-link <?php echo $page == 'transaksi_preorde' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Laporan Laba/Rugi
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="https://orion-houseware.my.id/neraca" class="nav-link <?php echo $page == 'transaksi_preorde' ? 'active' : ''; ?>">
        <i class="nav-icon far fa-circle"></i>
        <p>
          Laporan Neraca
        </p>
      </a>
    </li>
  </ul>
</li> -->


<!-- KONFIGURASI -->
<li class="nav-item <?php echo in_array($page, ['konfigurasi_loa','konfigurasi_notifikasi']) ? 'menu-open' : ''; ?>">
  <a href="#" class="nav-link <?php echo in_array($page, ['konfigurasi_loa','konfigurasi_notifikasi']) ? 'active' : ''; ?>">
    <i class="nav-icon fas fa-sliders-h"></i>
    <p>
      Konfigurasi
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="konfigurasi-loa.php" class="nav-link <?php echo $page == 'konfigurasi_loa' ? 'active' : ''; ?>">
        <i class="far fa-circle nav-icon"></i>
        <p>Parameter ORION</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="konfigurasi-notifikasi.php" class="nav-link <?php echo $page == 'konfigurasi_notifikasi' ? 'active' : ''; ?>">
        <i class="far fa-circle nav-icon"></i>
        <p>Template Notifikasi</p>
      </a>
    </li>
  </ul>
</li>
        <!-- PENGATURAN -->
        <li class="nav-item <?php echo in_array($page, ['pengaturan_user','pengaturan_role','pengaturan_app']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['pengaturan_user','pengaturan_role','pengaturan_app']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Pengaturan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- USER (LEVEL 2) -->
             <li class="nav-item <?php echo in_array($page, ['']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['pengaturan_user','pengaturan_role']) ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  User
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              <!-- LEVEL 3 -->
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pengaturan-users.php" class="nav-link <?php echo $page == 'pengaturan_user' ? 'active' : ''; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Pengguna</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="pengaturan-roles.php" class="nav-link <?php echo $page == 'pengaturan_role' ? 'active' : ''; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Peran & Hak Akses</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="reset-password.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Reset Password</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="reset-password.php" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Reset Password</p>
                  </a>
                </li> -->
              </ul>

            </li>
            <!-- <li class="nav-item">
              <a href="pengaturan-users.php" class="nav-link <?php echo $page == 'pengaturan_users' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>User</p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="pengaturan-roles.php" class="nav-link <?php echo $page == 'pengaturan_role' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Peran & Hak Akses</p>
              </a>
            </li> -->
            
            <li class="nav-item">
              <a href="aktivitas-laporan.php" class="nav-link">
                <i class="fas fa-cog nav-icon"></i>
                <p>Audit Log</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pengaturan-notifikasi.php" class="nav-link">
                <i class="fas fa-cog nav-icon"></i>
                <p>Daftar Notifikasi</p>
              </a>
            </li>
           
            <li class="nav-item">
              <a href="pengaturan-app.php" class="nav-link <?php echo $page == 'pengaturan_app' ? 'active' : ''; ?>">
                <i class="fas fa-cog nav-icon"></i>
                <p>Aplikasi</p>
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

        <button class="btn btn-outline-primary w-100 role-select" data-role="Mahasiswa">
          Mahasiswa
        </button>

      </div>

    </div>
  </div>
</div>

