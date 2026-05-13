<?php $page='master-item';?>
<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php
// Include sidebar sesuai peran
$sidebar_file = "3sidebar-{$role}.php";
if (file_exists($sidebar_file)) {
    include($sidebar_file);
} else {
    include('3sidebar.php');
}
?>


 <!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Content Wrapper -->
  <div class="content-wrapper" style="min-height: 600px;">
    <div class="content-header">
      <!-- <div class="container-fluid"> -->
        <!-- <h2 class="mb-0"><i class="far fa-smile"></i> Selamat Datang, [nama pengguna]</h2> -->
        <!-- <p class="text-muted">Sistem Informasi - Single Sign On (SSO)</p>         -->
      <!-- </div> -->
    </div>
    <section class="content">
      <div class="container-fluid">

        <style>
  .kpi-card {
  transition: all 0.25s ease;
}

.kpi-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.08);
}

.kpi-icon {
  position: absolute;
  top: 16px;
  right: 16px;
  font-size: 2rem;
  opacity: 0.25;
}
</style>
<style>

body{
  background:#f4f6f9;
}

.item-box{
  border-radius:14px;
  padding:18px;
  color:#fff;
  margin-bottom:20px;
  box-shadow:0 2px 10px rgba(0,0,0,.08);
}

.item-card{
  border-radius:14px;
  overflow:hidden;
  box-shadow:0 2px 10px rgba(0,0,0,.08);
}

.badge-flag{
  font-size:11px;
  padding:6px 8px;
  margin-right:3px;
}

.table td,
.table th{
  vertical-align:middle !important;
}

.action-btn{
  margin:2px;
}

</style>

<div class="content">

  <!-- HEADER -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <h2 class="page-title mb-0"> Master Data Item</h2>
      <p class="page-description text-muted">
        Master referensi seluruh item sistem ERP cafe:
          bahan baku, barang setengah jadi,
          barang jadi, dan item jual.
      </p>
    </div>
    <button class="btn btn-sm btn-outline-primary shadow-sm">🔄 Refresh Data</button>
  </div>










  </div>



    </div>
  </section>
      <!-- ================================================= -->
    <!-- CONTENT -->
    <!-- ================================================= -->
    <section class="content">

      <div class="container-fluid">

        <!-- ============================================= -->
        <!-- KPI -->
        <!-- ============================================= -->
        <div class="row">

          <div class="col-md-3">

            <div class="item-box bg-primary">

              <h3>248</h3>

              <p class="mb-0">
                Total Item
              </p>

            </div>

          </div>

          <div class="col-md-3">

            <div class="item-box bg-success">

              <h3>86</h3>

              <p class="mb-0">
                Saleable Item
              </p>

            </div>

          </div>

          <div class="col-md-3">

            <div class="item-box bg-warning text-dark">

              <h3>42</h3>

              <p class="mb-0">
                Producible Item
              </p>

            </div>

          </div>

          <div class="col-md-3">

            <div class="item-box bg-danger">

              <h3>17</h3>

              <p class="mb-0">
                Low Stock Item
              </p>

            </div>

          </div>

        </div>

        <!-- ============================================= -->
        <!-- TABLE -->
        <!-- ============================================= -->
        <div class="card item-card">

          <div class="card-header bg-dark">

            <h5 class="mb-0">
              Data Master Item
            </h5>

          </div>

          <div class="card-body table-responsive">

            <!--
            ==================================================
            PENJELASAN KOLOM

            ITEM TYPE
            - Raw Material
            - Semi Finished
            - Finished Good
            - Resale

            PURCHASEABLE
            - item muncul di purchasing

            SALEABLE
            - item muncul di POS / menu customer

            PRODUCIBLE
            - item bisa diproduksi

           

            ==================================================
            -->

            <table class="table table-bordered table-hover">

              <thead class="table-dark text-center">

                  <tr>
    <th>Kode</th>
    <th>Nama Item</th>
    <th>Tipe</th>
    <th>Satuan</th>

    <th>Purchase</th>
    <th>Production</th>
    <th>Sale</th>

    <th>Kategori Stok</th>
    <th>Kategori Sales</th>

    <th>HPP Aktif</th>
    <th>Status</th>
    <th>Aksi</th>
  </tr>
        

              </thead>

              <tbody>

        <!-- ====================================== -->
        <!-- RAW MATERIAL -->
        <!-- ====================================== -->
        <tr>
  <td>RM001</td>
  <td>Biji Kopi Arabica</td>
  <td>Raw Material</td>
  <td>Kg</td>

  <td class="text-center"><span class="badge bg-success">YES</span></td>
  <td class="text-center"><span class="badge bg-secondary">NO</span></td>
  <td class="text-center"><span class="badge bg-secondary">NO</span></td>

  <td>Raw Material</td>
  <td>-</td>

  <td>Rp 185.000</td>
  <td class="text-center"><span class="badge bg-success">Active</span></td>

  <td class="text-center">
    <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
    <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
  </td>
</tr>

        <!-- ====================================== -->
        <!-- SEMI FINISHED -->
        <!-- ====================================== -->
        <tr>
  <td>SF001</td>
  <td>Dough Pizza</td>
  <td>Semi Finished</td>
  <td>Pcs</td>

  <td class="text-center"><span class="badge bg-success">YES</span></td>
  <td class="text-center"><span class="badge bg-warning">YES</span></td>
  <td class="text-center"><span class="badge bg-secondary">NO</span></td>

  <td>Food Base</td>
  <td>-</td>

  <td>Rp 18.000</td>
  <td class="text-center"><span class="badge bg-success">Active</span></td>

  <td class="text-center">
    <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
    <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
    <button class="btn btn-sm btn-success"><i class="fas fa-cogs"></i></button>
    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
  </td>
</tr>

        <!-- ====================================== -->
        <!-- FINISHED GOOD -->
        <!-- ====================================== -->
        <tr>
  <td>FG001</td>
  <td>Es Kopi Susu Gula Aren</td>
  <td>Finished Good</td>
  <td>Cup</td>

  <td class="text-center"><span class="badge bg-secondary">NO</span></td>
  <td class="text-center"><span class="badge bg-warning">YES</span></td>
  <td class="text-center"><span class="badge bg-success">YES</span></td>

  <td>Ingredient Based Drink</td>
  <td>Beverage</td>

  <td>Rp 5.800</td>
  <td class="text-center"><span class="badge bg-success">Active</span></td>

  <td class="text-center">
    <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
    <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
    <button class="btn btn-sm btn-success"><i class="fas fa-receipt"></i></button>
    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
  </td>
</tr>

        <!-- ====================================== -->
        <!-- RESALE ITEM -->
        <!-- ====================================== -->
       <tr>
  <td>RS001</td>
  <td>Air Mineral</td>
  <td>Resale</td>
  <td>Bottle</td>

  <td class="text-center"><span class="badge bg-success">YES</span></td>
  <td class="text-center"><span class="badge bg-secondary">NO</span></td>
  <td class="text-center"><span class="badge bg-success">YES</span></td>

  <td>Retail Beverage</td>
  <td>Beverage</td>

  <td>Rp 3.200</td>
  <td class="text-center"><span class="badge bg-success">Active</span></td>

  <td class="text-center">
    <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
    <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
  </td>
</tr>

        <!-- ====================================== -->
        <!-- NEW: RAW MATERIAL 2 -->
        <!-- ====================================== -->
        <tr>
  <td>RM002</td>
  <td>Susu Fresh</td>
  <td>Raw Material</td>
  <td>Liter</td>

  <td class="text-center"><span class="badge bg-success">YES</span></td>
  <td class="text-center"><span class="badge bg-secondary">NO</span></td>
  <td class="text-center"><span class="badge bg-secondary">NO</span></td>

  <td>Dairy</td>
  <td>-</td>

  <td>Rp 14.000</td>
  <td class="text-center"><span class="badge bg-success">Active</span></td>

  <td class="text-center">
    <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
    <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
  </td>
</tr>

        <!-- ====================================== -->
        <!-- NEW: SEMI FINISHED 2 -->
        <!-- ====================================== -->
        <tr>
  <td>SF002</td>
  <td>Sauce Signature</td>
  <td>Semi Finished</td>
  <td>Bottle</td>

  <td class="text-center"><span class="badge bg-success">YES</span></td>
  <td class="text-center"><span class="badge bg-warning">YES</span></td>
  <td class="text-center"><span class="badge bg-secondary">NO</span></td>

  <td>Condiment</td>
  <td>-</td>

  <td>Rp 9.500</td>
  <td class="text-center"><span class="badge bg-success">Active</span></td>

  <td class="text-center">
    <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
    <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
    <button class="btn btn-sm btn-success"><i class="fas fa-cogs"></i></button>
    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
  </td>
</tr>

        <!-- ====================================== -->
        <!-- NEW: FINISHED GOOD 2 -->
        <!-- ====================================== -->
        <tr>
  <td>FG002</td>
  <td>Croissant Butter</td>
  <td>Finished Good</td>
  <td>Pcs</td>

  <td class="text-center"><span class="badge bg-secondary">NO</span></td>
  <td class="text-center"><span class="badge bg-warning">YES</span></td>
  <td class="text-center"><span class="badge bg-success">YES</span></td>

  <td>Bakery</td>
  <td>Food</td>

  <td>Rp 6.200</td>
  <td class="text-center"><span class="badge bg-success">Active</span></td>

  <td class="text-center">
    <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
    <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
    <button class="btn btn-sm btn-success"><i class="fas fa-receipt"></i></button>
    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
  </td>
</tr>
              </tbody>

            </table>

          </div>

        </div>


      </div>

    </section>
</div>

<?php include "4footer.php"; ?>
<?php include "5script.php"; ?>

