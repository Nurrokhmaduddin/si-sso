<?php $page = 'stock-monitor'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Stock Monitoring
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">
        Monitoring operasional stok realtime untuk mendeteksi item yang perlu segera ditindaklanjuti
      </p>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <!-- SUMMARY CARD -->
      <div class="row">

        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>12</h3>
              <p>Stok Kritis</p>
            </div>
            <div class="icon">
              <i class="fas fa-exclamation-triangle"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>7</h3>
              <p>Perlu Restock</p>
            </div>
            <div class="icon">
              <i class="fas fa-box-open"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>4</h3>
              <p>Approval Pending</p>
            </div>
            <div class="icon">
              <i class="fas fa-clock"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>152</h3>
              <p>Item Normal</p>
            </div>
            <div class="icon">
              <i class="fas fa-check-circle"></i>
            </div>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-md-12">

          <!-- FILTER CARD -->
          <div class="card">

            <div class="card-body">
              <div class="row">

                <div class="col-md-3">
                  <b>Gudang:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Status:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Prioritas:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Last Update:</b> 11-May-2026 14:30:11
                </div>

              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">

                <button class="btn btn-outline-info btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>

                <button class="btn btn-outline-primary btn-sm">
                  <i class="fas fa-sync-alt me-1"></i> Refresh
                </button>

                <button class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>

                <button class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-bell me-1"></i> Alert
                </button>

              </div>
            </div>

          </div>

          <!-- TABLE CARD -->
          <div class="card card-outline card-danger">

            <div class="card-header">
              <h3 class="card-title">
                Daftar Monitoring Stok Operasional
              </h3>
            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered table-striped table-sm datatables1">

                  <thead class="table-dark">

                    <tr>
                      <th>No</th>
                      <th>Timestamp</th>
                      <th>Gudang</th>
                      <th>Item</th>
                      <th>Kategori</th>
                      <th>Stok Saat Ini</th>
                      <th>Minimum</th>
                      <th>Status</th>
                      <th>Prioritas</th>
                      <th>Catatan</th>
                      <th>Aksi</th>
                    </tr>

                  </thead>

                  <tbody>

                    <tr>
                      <td>1</td>
                      <td>2026-05-11 14:30:11</td>
                      <td>Kitchen Utama</td>
                      <td>Biji Kopi Arabica</td>
                      <td>Raw Material</td>
                      <td>1 Kg</td>
                      <td>5 Kg</td>
                      <td>
                        <span class="badge bg-danger">
                          Stok Kritis
                        </span>
                      </td>
                      <td>
                        <span class="badge bg-danger">
                          High
                        </span>
                      </td>
                      <td>Perlu pembelian segera</td>
                      <td nowrap>

                        <a href="purchase-order-add.php"
                           class="btn btn-sm btn-warning">
                          <i class="fas fa-shopping-cart"></i>
                        </a>

                        <button class="btn btn-sm btn-success">
                          <i class="fas fa-check"></i>
                        </button>

                      </td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td>2026-05-11 13:05:44</td>
                      <td>Bar Area</td>
                      <td>Susu Fresh Milk</td>
                      <td>Raw Material</td>
                      <td>3 Liter</td>
                      <td>10 Liter</td>
                      <td>
                        <span class="badge bg-warning">
                          Restock Needed
                        </span>
                      </td>
                      <td>
                        <span class="badge bg-warning">
                          Medium
                        </span>
                      </td>
                      <td>Penggunaan meningkat</td>
                      <td nowrap>

                        <a href="purchase-order-add.php"
                           class="btn btn-sm btn-warning">
                          <i class="fas fa-shopping-cart"></i>
                        </a>

                        <button class="btn btn-sm btn-success">
                          <i class="fas fa-check"></i>
                        </button>

                      </td>
                    </tr>

                    <tr>
                      <td>3</td>
                      <td>2026-05-11 12:20:18</td>
                      <td>Central Kitchen</td>
                      <td>Saus Spaghetti</td>
                      <td>Semi Finished</td>
                      <td>0 Batch</td>
                      <td>3 Batch</td>
                      <td>
                        <span class="badge bg-info">
                          Produksi Pending
                        </span>
                      </td>
                      <td>
                        <span class="badge bg-danger">
                          High
                        </span>
                      </td>
                      <td>Belum ada batch produksi hari ini</td>
                      <td nowrap>

                        <a href="production-order-add.php"
                           class="btn btn-sm btn-primary">
                          <i class="fas fa-industry"></i>
                        </a>

                        <button class="btn btn-sm btn-success">
                          <i class="fas fa-check"></i>
                        </button>

                      </td>
                    </tr>

                    <tr>
                      <td>4</td>
                      <td>2026-05-11 11:55:02</td>
                      <td>Outlet Depan</td>
                      <td>Air Mineral Botol</td>
                      <td>Resale</td>
                      <td>120 Pcs</td>
                      <td>30 Pcs</td>
                      <td>
                        <span class="badge bg-success">
                          Normal
                        </span>
                      </td>
                      <td>
                        <span class="badge bg-secondary">
                          Low
                        </span>
                      </td>
                      <td>Stok aman</td>
                      <td nowrap>

                        <button class="btn btn-sm btn-outline-primary">
                          <i class="fas fa-eye"></i>
                        </button>

                      </td>
                    </tr>

                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
      </div>

    </div>
  </section>

</div>

<?php include('4footer.php'); ?>


<!-- MODAL FILTER -->
<div class="modal fade"
     id="modalFilter"
     tabindex="-1"
     aria-labelledby="modalFilterLabel"
     aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="modalFilterLabel">
          Filter Monitoring
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>
      </div>

      <form action="" method="GET">

        <div class="modal-body">

          <div class="alert alert-warning mb-3"
               style="font-size: 0.9rem;">

            <b>Informasi:</b>
            Monitoring digunakan untuk melihat kondisi operasional stok yang perlu segera ditindaklanjuti.

          </div>

          <div class="mb-3">
            <label class="form-label">Gudang</label>

            <select class="form-select" name="warehouse">
              <option value="">-- Semua Gudang --</option>
              <option>Kitchen Utama</option>
              <option>Bar Area</option>
              <option>Central Kitchen</option>
              <option>Outlet Depan</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Status Monitoring</label>

            <select class="form-select" name="status">
              <option value="">-- Semua Status --</option>
              <option>Stok Kritis</option>
              <option>Restock Needed</option>
              <option>Produksi Pending</option>
              <option>Approval Pending</option>
              <option>Normal</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Prioritas</label>

            <select class="form-select" name="priority">
              <option value="">-- Semua Prioritas --</option>
              <option>High</option>
              <option>Medium</option>
              <option>Low</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal Monitoring</label>

            <input type="datetime-local"
                   class="form-control"
                   name="monitoring_date">
          </div>

        </div>

        <div class="modal-footer">
          <button type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal">
            Batal
          </button>

          <button type="submit"
                  class="btn btn-info">
            Terapkan Filter
          </button>
        </div>

      </form>

    </div>
  </div>
</div>



<!-- MODAL BANTUAN -->
<div class="modal fade"
     id="modalBantuan"
     tabindex="-1"
     aria-labelledby="modalBantuanLabel"
     aria-hidden="true">

  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalBantuanLabel">
          Bantuan Stock Monitoring
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-info">
          Halaman ini digunakan untuk monitoring operasional stok secara realtime.
          Fokus utama halaman ini adalah membantu user mengetahui item apa saja
          yang perlu segera ditindaklanjuti.
        </div>

        <h6><b>Fungsi Halaman</b></h6>

        <ul>
          <li>Melihat stok kritis.</li>
          <li>Melihat item yang perlu restock.</li>
          <li>Melihat item semi-finished yang perlu diproduksi.</li>
          <li>Melihat approval atau task operasional yang masih pending.</li>
          <li>Memantau kondisi stok seluruh gudang secara realtime.</li>
        </ul>

        <hr>

        <h6><b>Penjelasan Kolom Tabel</b></h6>

        <table class="table table-bordered table-sm">

          <thead class="table-light">
            <tr>
              <th>Kolom</th>
              <th>Keterangan</th>
            </tr>
          </thead>

          <tbody>

            <tr>
              <td>Timestamp</td>
              <td>
                Waktu terakhir monitoring dicatat sistem
                (tahun-bulan-hari jam:menit:detik).
              </td>
            </tr>

            <tr>
              <td>Gudang</td>
              <td>
                Lokasi penyimpanan item.
              </td>
            </tr>

            <tr>
              <td>Item</td>
              <td>
                Nama barang yang dimonitor.
              </td>
            </tr>

            <tr>
              <td>Stok Saat Ini</td>
              <td>
                Jumlah stok realtime saat monitoring dilakukan.
              </td>
            </tr>

            <tr>
              <td>Minimum</td>
              <td>
                Batas minimum stok aman.
              </td>
            </tr>

            <tr>
              <td>Status</td>
              <td>
                Kondisi operasional item saat ini.
              </td>
            </tr>

            <tr>
              <td>Prioritas</td>
              <td>
                Tingkat urgensi tindakan yang perlu dilakukan.
              </td>
            </tr>

          </tbody>

        </table>

        <hr>

        <h6><b>Penjelasan Status</b></h6>

        <table class="table table-bordered table-sm">

          <thead class="table-light">
            <tr>
              <th>Status</th>
              <th>Makna</th>
            </tr>
          </thead>

          <tbody>

            <tr>
              <td>
                <span class="badge bg-danger">
                  Stok Kritis
                </span>
              </td>
              <td>
                Stok sangat rendah dan perlu tindakan segera.
              </td>
            </tr>

            <tr>
              <td>
                <span class="badge bg-warning">
                  Restock Needed
                </span>
              </td>
              <td>
                Stok mulai menipis dan perlu pembelian ulang.
              </td>
            </tr>

            <tr>
              <td>
                <span class="badge bg-info">
                  Produksi Pending
                </span>
              </td>
              <td>
                Semi-finished atau finished good belum diproduksi.
              </td>
            </tr>

            <tr>
              <td>
                <span class="badge bg-success">
                  Normal
                </span>
              </td>
              <td>
                Kondisi stok masih aman.
              </td>
            </tr>

          </tbody>

        </table>

        <hr>

        <h6><b>Alur Penggunaan</b></h6>

        <ol>
          <li>Buka halaman monitoring.</li>
          <li>Gunakan filter untuk mempersempit data.</li>
          <li>Perhatikan item dengan prioritas tinggi.</li>
          <li>Klik tombol aksi untuk melakukan tindak lanjut.</li>
          <li>Refresh monitoring secara berkala.</li>
        </ol>

      </div>

      <div class="modal-footer">
        <button type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal">
          Tutup
        </button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>