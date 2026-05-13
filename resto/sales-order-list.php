<?php $page = 'sales-order'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <h3>
        Sales Order
        <button class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted">Transaksi pesanan pelanggan sebelum masuk ke dapur / POS</p>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <!-- FILTER -->
      <div class="card mb-3">
        <div class="card-body row">

          <div class="col-md-4">
            <label>Dari Tanggal</label>
            <input type="datetime-local" class="form-control">
          </div>

          <div class="col-md-4">
            <label>Sampai Tanggal</label>
            <input type="datetime-local" class="form-control">
          </div>

          <div class="col-md-4">
            <label>Status</label>
            <select class="form-select">
              <option>All</option>
              <option>Draft</option>
              <option>Confirmed</option>
              <option>Cooking</option>
              <option>Served</option>
              <option>Done</option>
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
                <th>No Order</th>
                <th>Tanggal</th>
                <th>Meja</th>
                <th>Customer</th>
                <th>Total Item</th>
                <th>Total</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td>SO-001</td>
                <td>2026-01-23 12:10:00</td>
                <td>Meja 7</td>
                <td>Walk-in</td>
                <td>3</td>
                <td>Rp 45.000</td>
                <td><span class="badge bg-warning">Cooking</span></td>
                <td>
                  <button class="btn btn-sm btn-primary">Detail</button>
                  <button class="btn btn-sm btn-success">Serve</button>
                  <button class="btn btn-sm btn-danger">Void</button>
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
<div class="modal fade" id="modalBantuan">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan Sales Order</h5>
      </div>

      <div class="modal-body">

        <p><b>Fungsi halaman:</b> Mencatat semua pesanan customer sebelum masuk ke proses dapur.</p>

        <p><b>Alur status:</b></p>
        <ul>
          <li><b>Draft</b> → pesanan baru masuk</li>
          <li><b>Confirmed</b> → sudah dikirim ke kitchen</li>
          <li><b>Cooking</b> → sedang diproses</li>
          <li><b>Served</b> → siap disajikan</li>
          <li><b>Done</b> → selesai</li>
          <li><b>Cancelled</b> → dibatalkan</li>
        </ul>

        <p><b>Catatan penting:</b></p>
        <ul>
          <li>Sales order hanya trigger transaksi</li>
          <li>Stok belum berkurang sampai status Confirmed / Cooking</li>
          <li>Void = pembatalan transaksi</li>
        </ul>

      </div>

    </div>
  </div>
</div>
<?php include('5script.php'); ?>