<?php $page = 'kitchen-production'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- ========================================= -->
  <!-- HEADER -->
  <!-- ========================================= -->
  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Semi-Finished Production Log
        <button class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">
        Catatan produksi barang setengah jadi (source stock ledger)
      </p>
    </div>
  </section>

  <!-- ========================================= -->
  <!-- CONTENT -->
  <!-- ========================================= -->
  <section class="content">
    <div class="container-fluid">

      <!-- ========================================= -->
      <!-- FILTER -->
      <!-- ========================================= -->
      <div class="card mb-3">
        <div class="card-body">

          <div class="row">

            <div class="col-md-3">
              <label>Tanggal Mulai</label>
              <input type="datetime-local" class="form-control">
            </div>

            <div class="col-md-3">
              <label>Tanggal Akhir</label>
              <input type="datetime-local" class="form-control">
            </div>

            <div class="col-md-3">
              <label>Item</label>
              <select class="form-control">
                <option>All</option>
                <option>Sauce Signature</option>
                <option>Dough Pizza</option>
              </select>
            </div>

            <div class="col-md-3">
              <label>Status</label>
              <select class="form-control">
                <option>All</option>
                <option>Draft</option>
                <option>Posted</option>
                <option>Void</option>
              </select>
            </div>

          </div>

          <div class="mt-3 text-end">
            <button class="btn btn-outline-primary btn-sm">Filter</button>
            <button class="btn btn-outline-danger btn-sm">Reset</button>
          </div>

        </div>
      </div>

      <!-- ========================================= -->
      <!-- ACTION BAR -->
      <!-- ========================================= -->
      <div class="mb-2 text-end">
        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahData">
          + New Production
        </button>
      </div>

      <!-- ========================================= -->
      <!-- TABLE -->
      <!-- ========================================= -->
      <div class="card">

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover table-sm">

            <thead class="table-dark text-center">
              <tr>
                <th>No Batch</th>
                <th>Timestamp</th>
                <th>Item</th>
                <th>Qty</th>
                <th>Unit</th>
                <th>Location</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td>PRD-001</td>
                <td>2026-01-22 10:15:00</td>
                <td>Sauce Signature</td>
                <td>10</td>
                <td>Bottle</td>
                <td>Kitchen A</td>
                <td><span class="badge bg-success">Posted</span></td>
                <td>
                  <button class="btn btn-sm btn-info">Detail</button>
                  <button class="btn btn-sm btn-danger">Void</button>
                </td>
              </tr>

              <tr>
                <td>PRD-001</td>
                <td>2026-01-22 10:15:00</td>
                <td>Dough Pizza</td>
                <td>20</td>
                <td>Pcs</td>
                <td>Kitchen A</td>
                <td><span class="badge bg-success">Posted</span></td>
                <td>
                  <button class="btn btn-sm btn-info">Detail</button>
                  <button class="btn btn-sm btn-danger">Void</button>
                </td>
              </tr>

              <tr>
                <td>PRD-002</td>
                <td>2026-01-22 12:30:00</td>
                <td>Espresso Base</td>
                <td>15</td>
                <td>Liter</td>
                <td>Bar</td>
                <td><span class="badge bg-warning">Draft</span></td>
                <td>
                  <button class="btn btn-sm btn-primary">Post</button>
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
<div class="modal fade" id="modalTambahData">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">New Production (Semi-Finished)</h5>
      </div>

      <form>

        <div class="modal-body">

          <div class="mb-3">
            <label>No Batch</label>
            <input type="text" class="form-control" placeholder="auto generate PRD-xxx">
          </div>

          <div class="mb-3">
            <label>Timestamp</label>
            <input type="datetime-local" class="form-control">
          </div>

          <div class="mb-3">
            <label>Item Semi-Finished</label>
            <select class="form-control">
              <option>Sauce Signature</option>
              <option>Dough Pizza</option>
              <option>Espresso Base</option>
            </select>
          </div>

          <div class="mb-3">
            <label>Qty Output</label>
            <input type="number" class="form-control">
          </div>

          <div class="mb-3">
            <label>Unit</label>
            <input type="text" class="form-control">
          </div>

          <div class="mb-3">
            <label>Location</label>
            <select class="form-control">
              <option>Kitchen A</option>
              <option>Bar</option>
              <option>Central Kitchen</option>
            </select>
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button class="btn btn-primary">Save Production</button>
        </div>

      </form>

    </div>
  </div>
</div>

<div class="modal fade" id="modalBantuan">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Panduan Semi-Finished Production</h5>
      </div>

      <div class="modal-body">

        <h6>📌 Fungsi Halaman</h6>
        <p>
          Halaman ini digunakan untuk mencatat produksi barang setengah jadi (semi-finished),
          seperti sauce, dough, atau base minuman. Data ini menjadi sumber utama stok inventory (stock ledger).
        </p>

        <h6>📌 Cara Kerja</h6>
        <ul>
          <li>Setiap produksi akan menghasilkan stok masuk (IN stock movement)</li>
          <li>Satu baris = satu item hasil produksi</li>
          <li>Satu No Batch bisa berisi banyak item</li>
          <li>Data akan otomatis masuk ke inventory ledger</li>
        </ul>

        <h6>📌 Arti Status</h6>
        <ul>
          <li><b>Draft</b> → Produksi belum dikonfirmasi, belum masuk stok</li>
          <li><b>Posted</b> → Produksi sudah valid, stok sudah bertambah</li>
          <li><b>Void</b> → Produksi dibatalkan, tidak mempengaruhi stok</li>
        </ul>

        <h6>📌 Timestamp</h6>
        <p>
          Menunjukkan waktu produksi lengkap (tahun-bulan-hari jam:menit:detik),
          digunakan untuk audit dan tracking batch produksi.
        </p>

        <h6>📌 Penting</h6>
        <p>
          Data ini adalah <b>single source of truth</b> untuk stok semi-finished.
          Semua perubahan stok harus berasal dari halaman ini atau sistem produksi.
        </p>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>
<?php include('5script.php'); ?>