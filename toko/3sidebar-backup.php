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

      [
        'title' => 'Beranda',
        'icon' => 'fas fa-home',
        'pages' => ['beranda_admin','beranda_kasir','beranda_customer'],
        'children' => [
          // ['label' => 'Super Admin', 'url' => 'index.php', 'page' => 'beranda_administrator'],
          ['label' => 'Admin', 'url' => 'beranda-admin.php', 'page' => 'beranda_admin'],
           ['label' => 'Manager', 'url' => 'beranda-manajer.php', 'page' => 'beranda_manajer'],
          ['label' => 'Fungsional', 'url' => 'beranda-kasir.php', 'page' => 'beranda_kasir'],
        ]
      ],

      [
        'title' => 'Master Data',
        'icon' => 'fas fa-database',
        'pages' => ['master-menu','master-bahan','master-resep'],
        'children' => [
          ['label' => 'Menu & Kategori', 'url' => 'master-menu.php', 'page' => 'master-menu'],
          ['label' => 'Bahan Baku', 'url' => 'master-bahan.php', 'page' => 'master-bahan'],
          ['label' => 'Resep (BOM)', 'url' => 'master-resep.php', 'page' => 'master-resep'],
        ]
      ],

      [
        'title' => 'Sales',
        'icon' => 'fas fa-cash-register',
        'pages' => ['sales-kasir','sales-order','sales-history'],
        'children' => [
          ['label' => 'POS / Kasir', 'url' => 'sales-kasir.php', 'page' => 'sales-kasir'],
          ['label' => 'Monitor Orders', 'url' => 'sales-order.php', 'page' => 'sales-order'],
          ['label' => 'Riwayat Sales', 'url' => 'sales-riwayat.php', 'page' => 'sales-history'],
        ]
      ],

      [
        'title' => 'Operation',
        'icon' => 'fas fa-utensils',
        'pages' => ['operation-kitchen','operation-stok'],
        'children' => [
          ['label' => 'Kitchen Display', 'url' => 'operation-kitchen.php', 'page' => 'operation-kitchen'],
          ['label' => 'Stok Bahan', 'url' => 'operation-stok-bahan.php', 'page' => 'operation-stok'],
        ]
      ],

      [
        'title' => 'Finance',
        'icon' => 'fas fa-money-bill',
        'pages' => ['finance-jurnal','finance-akun'],
        'children' => [
          ['label' => 'CoA', 'url' => 'finance-akun.php', 'page' => 'finance-akun'],
          ['label' => 'Jurnal Umum', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Jurnal Khusus', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Jurnal Penyesuaian', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Jurnal Pembalik', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Lap Buku Besar', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Lap Laba Rugi', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Lap Perubahan Modal', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Lap Neraca', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Lap Arus Kas', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
        ]
      ],

      [
        'title' => 'Pengaturan',
        'icon' => 'fas fa-cog',
        'pages' => ['finance-jurnal','finance-akun'],
        'children' => [
          ['label' => 'Users', 'url' => 'finance-jurnal.php', 'page' => 'finance-jurnal'],
          ['label' => 'Template', 'url' => 'finance-akun.php', 'page' => 'finance-akun'],
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