<!-- ========================================================= -->
<!-- PAGE : sales-reservation.php -->
<!-- STYLE : Sales Reservation -->
<!-- FOKUS :
     - Reservation CRUD
     - Booking Monitoring
     - Customer Reservation Management
     - Reservation Status Monitoring
-->
<!-- ========================================================= -->

<?php $page = 'sales-reservation'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- ===================================================== -->
  <!-- CONTENT HEADER -->
  <!-- ===================================================== -->
  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Reservation Management

        <button type="button"
                class="btn btn-tool"
                data-bs-toggle="modal"
                data-bs-target="#modalBantuan"
                title="Bantuan">

          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Kelola seluruh data reservasi customer cafe/resto.
      </p>

    </div>
  </section>

  <!-- ===================================================== -->
  <!-- MAIN CONTENT -->
  <!-- ===================================================== -->
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">

          <!-- ================================================= -->
          <!-- FILTER INFORMATION -->
          <!-- ================================================= -->

          <div class="card">

            <div class="card-body">

              <div class="row">

                <div class="col-md-3">
                  <b>Tanggal:</b> 01 Mei 2026 - 31 Mei 2026
                </div>

                <div class="col-md-3">
                  <b>Status:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Shift:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Table Area:</b> Indoor & Outdoor
                </div>

              </div>

            </div>

            <div class="card-footer">

              <div class="card-tools ms-auto">

                <button class="btn btn-outline-info btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#modalFilter">

                  <i class="fas fa-filter me-1"></i>
                  Filter
                </button>

                <button type="button"
                        class="btn btn-outline-primary btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#modalTambahData">

                  <i class="fas fa-plus me-1"></i>
                  Add Reservation
                </button>

                <button type="button"
                        class="btn btn-outline-success btn-sm">

                  <i class="fas fa-file-download me-1"></i>
                  Export
                </button>

                <button type="button"
                        class="btn btn-outline-danger btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#modalResetData">

                  <i class="fas fa-ban me-1"></i>
                  Reset
                </button>

              </div>

            </div>

          </div>

          <!-- ================================================= -->
          <!-- RESERVATION KPI -->
          <!-- ================================================= -->

          <div class="row">

            <div class="col-lg-3 col-md-6">
              <div class="small-box bg-primary">

                <div class="inner">
                  <h3>128</h3>
                  <p>Total Reservation</p>
                </div>

                <div class="icon">
                  <i class="fas fa-calendar-check"></i>
                </div>

              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="small-box bg-success">

                <div class="inner">
                  <h3>84</h3>
                  <p>Confirmed</p>
                </div>

                <div class="icon">
                  <i class="fas fa-check-circle"></i>
                </div>

              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="small-box bg-warning">

                <div class="inner">
                  <h3>21</h3>
                  <p>Pending</p>
                </div>

                <div class="icon">
                  <i class="fas fa-clock"></i>
                </div>

              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="small-box bg-danger">

                <div class="inner">
                  <h3>7</h3>
                  <p>Cancelled</p>
                </div>

                <div class="icon">
                  <i class="fas fa-times-circle"></i>
                </div>

              </div>
            </div>

          </div>

          <!-- ================================================= -->
          <!-- TABLE RESERVATION -->
          <!-- ================================================= -->

          <div class="card">

            <div class="card-header">
              <h3 class="card-title">
                Reservation List
              </h3>
            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered table-striped table-sm datatables1">

                  <thead class="table-dark text-center">

                    <tr>
                      <th>No</th>
                      <th>Kode Reservasi</th>
                      <th>Tanggal Reservasi</th>
                      <th>Jam</th>
                      <th>Nama Customer</th>
                      <th>No HP</th>
                      <th>Jumlah Tamu</th>
                      <th>Meja</th>
                      <th>Area</th>
                      <th>Shift</th>
                      <th>Status</th>
                      <th>DP</th>
                      <th>Total Bill</th>
                      <th>Catatan</th>
                      <th>Aksi</th>
                    </tr>

                  </thead>

                  <tbody>

                    <tr>

                      <td>1</td>
                      <td>RSV-202605-001</td>
                      <td>05 Mei 2026</td>
                      <td>19:00</td>
                      <td>Andi Saputra</td>
                      <td>081234567890</td>
                      <td>6 Orang</td>
                      <td>A12</td>
                      <td>Indoor</td>
                      <td>Malam</td>

                      <td class="text-center">
                        <span class="badge bg-success">
                          Confirmed
                        </span>
                      </td>

                      <td>Rp 300.000</td>
                      <td>Rp 1.250.000</td>

                      <td>
                        Birthday Event
                      </td>

                      <td class="text-center">

                        <button class="btn btn-sm btn-outline-info">
                          <i class="fas fa-eye"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-primary">
                          <i class="fas fa-edit"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-danger">
                          <i class="fas fa-trash"></i>
                        </button>

                      </td>

                    </tr>

                    <tr>

                      <td>2</td>
                      <td>RSV-202605-002</td>
                      <td>05 Mei 2026</td>
                      <td>13:00</td>
                      <td>Siti Rahma</td>
                      <td>081278889999</td>
                      <td>2 Orang</td>
                      <td>B04</td>
                      <td>Outdoor</td>
                      <td>Siang</td>

                      <td class="text-center">
                        <span class="badge bg-warning">
                          Pending
                        </span>
                      </td>

                      <td>Rp 0</td>
                      <td>Rp 350.000</td>

                      <td>
                        Waiting Confirmation
                      </td>

                      <td class="text-center">

                        <button class="btn btn-sm btn-outline-info">
                          <i class="fas fa-eye"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-primary">
                          <i class="fas fa-edit"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-danger">
                          <i class="fas fa-trash"></i>
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

<!-- ========================================================= -->
<!-- MODAL FILTER -->
<!-- ========================================================= -->

<div class="modal fade"
     id="modalFilter"
     tabindex="-1"
     aria-labelledby="modalFilterLabel"
     aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-info text-white">

        <h5 class="modal-title" id="modalFilterLabel">
          Filter Reservation
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>

      </div>

      <form action="" method="GET">

        <div class="modal-body">

          <div class="alert alert-warning mb-3"
               role="alert"
               style="font-size:0.9rem;">

            <b>Informasi:</b>
            Halaman akan menampilkan data reservation berdasarkan filter yang dipilih.

          </div>

          <div class="mb-3">
            <label class="form-label">Periode</label>

            <input type="date"
                   class="form-control mb-2">

            <input type="date"
                   class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Status Reservation</label>

            <select class="form-select">

              <option value="">-- Semua Status --</option>
              <option>Pending</option>
              <option>Confirmed</option>
              <option>Completed</option>
              <option>Cancelled</option>
              <option>No Show</option>

            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Shift</label>

            <select class="form-select">

              <option value="">-- Semua Shift --</option>
              <option>Pagi</option>
              <option>Siang</option>
              <option>Malam</option>

            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Area Meja</label>

            <select class="form-select">

              <option value="">-- Semua Area --</option>
              <option>Indoor</option>
              <option>Outdoor</option>
              <option>VIP Room</option>

            </select>
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

<!-- ========================================================= -->
<!-- MODAL TAMBAH RESERVATION -->
<!-- ========================================================= -->

<div class="modal fade"
     id="modalTambahData"
     tabindex="-1"
     aria-hidden="true">

  <div class="modal-dialog modal-lg">

    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-primary text-white">

        <h5 class="modal-title">
          Tambah Reservation
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>

      </div>

      <form action="" method="POST">

        <div class="modal-body">

          <div class="alert alert-warning mb-3 py-2"
               role="alert"
               style="font-size:0.9rem;">

            <i class="fas fa-info-circle me-1"></i>

            Semua field bertanda
            <span class="text-danger">*</span>
            wajib diisi.

          </div>

          <div class="row">

            <div class="col-md-6 mb-3">
              <label class="form-label">
                Nama Customer <span class="text-danger">*</span>
              </label>

              <input type="text"
                     class="form-control"
                     placeholder="Masukkan nama customer">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">
                Nomor HP <span class="text-danger">*</span>
              </label>

              <input type="text"
                     class="form-control"
                     placeholder="08xxxxxxxxxx">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">
                Tanggal Reservation <span class="text-danger">*</span>
              </label>

              <input type="date"
                     class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">
                Jam Reservation <span class="text-danger">*</span>
              </label>

              <input type="time"
                     class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">
                Jumlah Tamu <span class="text-danger">*</span>
              </label>

              <input type="number"
                     class="form-control"
                     placeholder="Jumlah tamu">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">
                Pilihan Meja
              </label>

              <select class="form-select">
                <option>-- Pilih Meja --</option>
                <option>A01</option>
                <option>A02</option>
                <option>VIP01</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">
                Area
              </label>

              <select class="form-select">
                <option>Indoor</option>
                <option>Outdoor</option>
                <option>VIP Room</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">
                Status Reservation
              </label>

              <select class="form-select">

                <option>Pending</option>
                <option>Confirmed</option>
                <option>Completed</option>
                <option>Cancelled</option>
                <option>No Show</option>

              </select>
            </div>

            <div class="col-md-12 mb-3">
              <label class="form-label">
                Catatan Tambahan
              </label>

              <textarea class="form-control"
                        rows="3"
                        placeholder="Contoh: birthday setup, smoking area, dll"></textarea>
            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal">

            Batal
          </button>

          <button type="submit"
                  class="btn btn-primary">

            Simpan Reservation
          </button>

        </div>

      </form>

    </div>

  </div>

</div>

<!-- ========================================================= -->
<!-- MODAL BANTUAN -->
<!-- ========================================================= -->

<div class="modal fade"
     id="modalBantuan"
     tabindex="-1"
     aria-labelledby="modalBantuanLabel"
     aria-hidden="true">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">

        <h5 class="modal-title" id="modalBantuanLabel">
          Bantuan Halaman Reservation
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>

      </div>

      <div class="modal-body">

        <div class="alert alert-info">
          Halaman ini digunakan untuk mengelola seluruh data reservation customer cafe/restoran mulai dari booking hingga kedatangan customer.
        </div>

        <h6><b>Fungsi Tombol</b></h6>

        <ul>
          <li><b>Filter</b> → Menampilkan reservation berdasarkan periode, status, shift, atau area.</li>
          <li><b>Add Reservation</b> → Menambahkan data booking baru.</li>
          <li><b>Export</b> → Mengunduh data reservation ke Excel/PDF.</li>
          <li><b>Reset</b> → Menghapus filter dan mengembalikan tampilan awal.</li>
        </ul>

        <hr>

        <h6><b>Penjelasan Kolom Tabel</b></h6>

        <ul>
          <li><b>Kode Reservasi</b> → Nomor unik transaksi reservation.</li>
          <li><b>Jumlah Tamu</b> → Total customer yang akan datang.</li>
          <li><b>Meja</b> → Posisi meja yang dipesan.</li>
          <li><b>Shift</b> → Pembagian waktu operasional reservation.</li>
          <li><b>DP</b> → Uang muka reservation.</li>
          <li><b>Total Bill</b> → Estimasi total transaksi customer.</li>
        </ul>

        <hr>

        <h6><b>Penjelasan Status Reservation</b></h6>

        <table class="table table-bordered table-sm">

          <thead class="table-dark text-center">
            <tr>
              <th>Status</th>
              <th>Penjelasan</th>
            </tr>
          </thead>

          <tbody>

            <tr>
              <td>Pending</td>
              <td>Reservation baru dibuat dan menunggu konfirmasi.</td>
            </tr>

            <tr>
              <td>Confirmed</td>
              <td>Reservation sudah dikonfirmasi oleh pihak cafe.</td>
            </tr>

            <tr>
              <td>Completed</td>
              <td>Customer datang dan transaksi selesai.</td>
            </tr>

            <tr>
              <td>Cancelled</td>
              <td>Reservation dibatalkan customer atau cafe.</td>
            </tr>

            <tr>
              <td>No Show</td>
              <td>Customer tidak datang sesuai jadwal reservation.</td>
            </tr>

          </tbody>

        </table>

        <hr>

        <h6><b>Rekomendasi Flow Reservation</b></h6>

        <ol>
          <li>Customer melakukan booking.</li>
          <li>Admin melakukan konfirmasi meja dan jadwal.</li>
          <li>Status diubah menjadi Confirmed.</li>
          <li>Saat customer datang → transaksi sales dibuat.</li>
          <li>Reservation selesai → status Completed.</li>
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

<!-- ========================================================= -->
<!-- MODAL RESET -->
<!-- ========================================================= -->

<div class="modal fade"
     id="modalResetData"
     tabindex="-1"
     aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-danger text-white">

        <h5 class="modal-title">
          Konfirmasi Reset Filter
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>

      </div>

      <div class="modal-body text-center">

        <p class="fs-5">
          Apakah Anda yakin ingin mereset seluruh filter reservation?
        </p>

      </div>

      <div class="modal-footer justify-content-center">

        <button type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal">

          Batal
        </button>

        <button type="button"
                class="btn btn-danger">

          Reset
        </button>

      </div>

    </div>

  </div>

</div>

<?php include('5script.php'); ?>