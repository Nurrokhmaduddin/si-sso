<?php $page = 'inventory-purchase'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <h3>
        Purchase Order
        <button class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted">Transaksi pembelian bahan baku ke supplier</p>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <!-- FILTER -->
      <div class="card mb-3">
        <div class="card-body row">

          <div class="col-md-4">
            <label>Supplier</label>
            <select class="form-select">
              <option>All Supplier</option>
              <option>PT Kopi Nusantara</option>
              <option>CV Fresh Dairy</option>
            </select>
          </div>

          <div class="col-md-4">
            <label>Dari Tanggal</label>
            <input type="datetime-local" class="form-control">
          </div>

          <div class="col-md-4">
            <label>Status</label>
            <select class="form-select">
              <option>All</option>
              <option>Draft</option>
              <option>Approved</option>
              <option>Ordered</option>
              <option>Received</option>
              <option>Closed</option>
              <option>Cancelled</option>
            </select>
          </div>

        </div>
      </div>

      <!-- TABLE -->
      <div class="card">
        <div class="card-body table-responsive">

          <table class="table table-bordered table-striped">

            <thead class="table-dark">
              <tr>
                <th>No PO</th>
                <th>Tanggal</th>
                <th>Supplier</th>
                <th>Total Item</th>
                <th>Total</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td>PO-001</td>
                <td>2026-01-23 09:00:00</td>
                <td>PT Kopi Nusantara</td>
                <td>5</td>
                <td>Rp 1.250.000</td>
                <td><span class="badge bg-info">Ordered</span></td>
                <td>
                  <button class="btn btn-sm btn-primary">Detail</button>
                  <button class="btn btn-sm btn-success">Receive</button>
                  <button class="btn btn-sm btn-danger">Cancel</button>
                </td>
              </tr>

            </tbody>

          </table>

        </div>
      </div>

    </div>
  </section>
</div>
<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>