<?php $role = $_SESSION['role']; // contoh: 'kasir', 'gudang', 'kitchen', 'finance', 'superadmin' ?>

<!-- Beranda -->
<li class="nav-item">
  <a href="index.php" class="nav-link <?php echo $page == 'beranda' ? 'active' : ''; ?>">
    <i class="nav-icon fas fa-home"></i>
    <p>Beranda</p>
  </a>
</li>

<!-- Master Data (SuperAdmin & Gudang) -->
<?php if(in_array($role, ['superadmin','gudang'])): ?>
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-database"></i>
    <p>Master Data <i class="right fas fa-angle-left"></i></p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Menu & Kategori</p></a></li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Bahan Baku</p></a></li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Resep (BOM)</p></a></li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Supplier</p></a></li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Customer</p></a></li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Meja / Area</p></a></li>
  </ul>
</li>
<?php endif; ?>

<!-- Sales (Kasir & SuperAdmin) -->
<?php if(in_array($role, ['kasir','superadmin'])): ?>
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-cash-register"></i>
    <p>Sales <i class="right fas fa-angle-left"></i></p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>POS / Kasir</p></a></li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Order Masuk</p></a></li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Riwayat Penjualan</p></a></li>
  </ul>
</li>
<?php endif; ?>

<!-- Operation (Kitchen, Gudang, SuperAdmin) -->
<?php if(in_array($role, ['kitchen','gudang','superadmin'])): ?>
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-utensils"></i>
    <p>Operation <i class="right fas fa-angle-left"></i></p>
  </a>
  <ul class="nav nav-treeview">
    <?php if(in_array($role, ['kitchen','superadmin'])): ?>
      <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Kitchen Display</p></a></li>
      <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Proses Masak</p></a></li>
      <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Resep (BOM)</p></a></li>
    <?php endif; ?>
    <?php if(in_array($role, ['gudang','superadmin'])): ?>
      <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Stok Bahan</p></a></li>
      <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Stok Opname</p></a></li>
      <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Pembelian Bahan</p></a></li>
    <?php endif; ?>
  </ul>
</li>
<?php endif; ?>

<!-- Finance (Finance, SuperAdmin) -->
<?php if(in_array($role, ['finance','superadmin'])): ?>
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-money-bill"></i>
    <p>Finance <i class="right fas fa-angle-left"></i></p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Kas & Bank</p></a></li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Pengeluaran</p></a></li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Pendapatan</p></a></li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Jurnal</p></a></li>
  </ul>
</li>
<?php endif; ?>