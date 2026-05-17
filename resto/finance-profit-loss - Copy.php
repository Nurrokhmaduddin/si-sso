<!-- ========================================================= -->
<!-- PAGE : finance-profit-loss.php -->
<!-- STYLE : Laporan Laba Rugi -->
<!-- FOKUS :
     - Ringkasan laba rugi perusahaan
     - Rekap pendapatan & beban
     - Penyajian berdasarkan COA
-->
<!-- ========================================================= -->

<?php $page = 'finance-profit-loss'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- ===================================================== -->
  <!-- CONTENT HEADER -->
  <!-- ===================================================== -->
  <section class="content-header">
    <div class="container-fluid">

      <div class="d-flex justify-content-between align-items-center">

        <div>
          <h3 class="mb-0">
            Laporan Laba Rugi
            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan"
                    title="Bantuan">
              <i class="fas fa-question-circle"></i>
            </button>
          </h3>
          <p class="text-muted mb-0">
            Ringkasan pendapatan, beban, dan laba/rugi perusahaan berdasarkan akun COA pada periode tertentu.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- ===================================================== -->
  <!-- MAIN CONTENT -->
  <!-- ===================================================== -->
  <section class="content">
    <div class="container-fluid">

      <!-- ================================================= -->
      <!-- FILTER BAR -->
      <!-- ================================================= -->
      <div class="card card-outline card-secondary">
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <b>Periode:</b> 1 Mei 2026 - 31 Mei 2026
            </div>
            <!-- <div class="col-md-4">
              <b>Cabang:</b> Semua Cabang
            </div>
            <div class="col-md-4">
              <b>Mata Uang:</b> Rupiah (IDR)
            </div> -->
          </div>
        </div>
        <div class="card-footer">
          <div class="card-tools ms-auto">
            <button class="btn btn-outline-secondary btn-sm"
                    data-bs-toggle="modal"
                    data-bs-target="#modalFilter">
              <i class="fas fa-filter me-1"></i>
              Filter
            </button>
            <button type="button" class="btn btn-outline-secondary btn-sm">
              <i class="fas fa-file-download me-1"></i>
              Export
            </button>
          </div>
        </div>
      </div>

      <!-- ================================================= -->
      <!-- KPI SUMMARY -->
      <!-- ================================================= -->
      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>Rp 428.500.000</h3>
              <p>Total Pendapatan</p>
            </div>
            <div class="icon"><i class="fas fa-chart-line"></i></div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>Rp 215.700.000</h3>
              <p>Total Beban</p>
            </div>
            <div class="icon"><i class="fas fa-file-invoice-dollar"></i></div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12">
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>Rp 212.800.000</h3>
              <p>Laba Bersih</p>
            </div>
            <div class="icon"><i class="fas fa-wallet"></i></div>
          </div>
        </div>

      </div>

      <!-- ================================================= -->
      <!-- LAPORAN LABA RUGI -->
      <!-- ================================================= -->

      <!-- PENDAPATAN -->
      <div class="card card-outline card-secondary">

        <div class="card-header">
          <h3 class="card-title">Pendapatan</h3>
        </div>

        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-bordered table-sm mb-0">
              <thead class="table-secondary">
                <tr>
                  <th width="15%">Kode Akun</th>
                  <th>Nama Akun</th>
                  <th width="20%" class="text-end">Nominal (Rp)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>411-001</td>
                  <td>Pendapatan Penjualan Produk</td>
                  <td class="text-end">150.000.000</td>
                </tr>
                <tr>
                  <td>411-002</td>
                  <td>Pendapatan Jasa Konsultasi</td>
                  <td class="text-end">85.000.000</td>
                </tr>
                <tr>
                  <td>411-003</td>
                  <td>Pendapatan Maintenance System</td>
                  <td class="text-end">45.000.000</td>
                </tr>
                <tr>
                  <td>412-001</td>
                  <td>Pendapatan Training &amp; Workshop</td>
                  <td class="text-end">38.500.000</td>
                </tr>
                <tr>
                  <td>413-002</td>
                  <td>Pendapatan Pendidikan dan Pelatihan - EDUSquad</td>
                  <td class="text-end">60.000.000</td>
                </tr>
                <tr>
                  <td>414-001</td>
                  <td>Pendapatan Lain-lain</td>
                  <td class="text-end">50.000.000</td>
                </tr>
              </tbody>
              <tfoot>
                <tr class="table-secondary fw-bold">
                  <td colspan="2" class="text-center">TOTAL PENDAPATAN</td>
                  <td class="text-end">428.500.000</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>

      </div>

      <!-- BEBAN -->
      <div class="card card-outline card-secondary">

        <div class="card-header">
          <h3 class="card-title">Beban</h3>
        </div>

        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-bordered table-sm mb-0">
              <thead class="table-secondary">
                <tr>
                  <th width="15%">Kode Akun</th>
                  <th>Nama Akun</th>
                  <th width="20%" class="text-end">Nominal (Rp)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>511-001</td>
                  <td>Beban Gaji dan Tunjangan</td>
                  <td class="text-end">85.000.000</td>
                </tr>
                <tr>
                  <td>511-002</td>
                  <td>Beban Operasional Kantor</td>
                  <td class="text-end">28.000.000</td>
                </tr>
                <tr>
                  <td>512-001</td>
                  <td>Beban Internet dan Hosting</td>
                  <td class="text-end">12.500.000</td>
                </tr>
                <tr>
                  <td>512-002</td>
                  <td>Beban Transportasi</td>
                  <td class="text-end">8.200.000</td>
                </tr>
                <tr>
                  <td>512-400</td>
                  <td>Beban AER/IEM</td>
                  <td class="text-end">14.000.000</td>
                </tr>
                <tr>
                  <td>513-001</td>
                  <td>Beban Marketing &amp; Promosi</td>
                  <td class="text-end">31.000.000</td>
                </tr>
                <tr>
                  <td>514-001</td>
                  <td>Beban Penyusutan Aset</td>
                  <td class="text-end">37.000.000</td>
                </tr>
              </tbody>
              <tfoot>
                <tr class="table-secondary fw-bold">
                  <td colspan="2" class="text-center">TOTAL BEBAN</td>
                  <td class="text-end">215.700.000</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>

      </div>

      <!-- TOTAL LABA RUGI -->
      <div class="card card-outline card-secondary">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold fs-5">TOTAL LABA / RUGI</span>
            <span class="fw-bold fs-5">Rp 212.800.000</span>
          </div>
        </div>
      </div>

    </div>
  </section>

</div>

<?php include('4footer.php'); ?>

<!-- ===================================================== -->
<!-- MODAL FILTER -->
<!-- ===================================================== -->
<div class="modal fade"
     id="modalFilter"
     tabindex="-1"
     aria-labelledby="modalFilterLabel"
     aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-secondary text-white">
        <h5 class="modal-title" id="modalFilterLabel">Filter Laporan</h5>
        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>
      </div>

      <form action="" method="GET">
        <div class="modal-body">

          <div class="alert alert-light border mb-3" style="font-size:0.9rem;">
            <b>Informasi:</b>
            Laporan akan menampilkan data laba rugi berdasarkan periode dan filter yang dipilih.
          </div>

          <div class="mb-3">
            <label class="form-label">Periode Awal</label>
            <input type="date" class="form-control" name="tanggal_awal">
          </div>

          <div class="mb-3">
            <label class="form-label">Periode Akhir</label>
            <input type="date" class="form-control" name="tanggal_akhir">
          </div>

          <div class="mb-3">
            <label class="form-label">Cabang</label>
            <select class="form-select" name="branch">
              <option value="">-- Semua Cabang --</option>
              <option>Jakarta</option>
              <option>Medan</option>
              <option>Surabaya</option>
            </select>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal">
            Batal
          </button>
          <button type="submit" class="btn btn-secondary">
            Terapkan Filter
          </button>
        </div>
      </form>

    </div>
  </div>

</div>

<!-- ===================================================== -->
<!-- MODAL BANTUAN -->
<!-- ===================================================== -->
<div class="modal fade"
     id="modalBantuan"
     tabindex="-1"
     aria-labelledby="modalBantuanLabel"
     aria-hidden="true">

  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-secondary text-white">
        <h5 class="modal-title" id="modalBantuanLabel">
          Bantuan Laporan Laba Rugi
        </h5>
        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>
      </div>

      <div class="modal-body">

        <div class="alert alert-light border">
          Halaman ini menampilkan ringkasan performa keuangan perusahaan berdasarkan data akun COA pada periode tertentu.
        </div>

        <h6><b>Cara Membaca Laporan</b></h6>
        <ul>
          <li>Bagian <b>Pendapatan</b> menampilkan seluruh akun pemasukan perusahaan.</li>
          <li>Bagian <b>Beban</b> menampilkan seluruh akun biaya operasional dan pengeluaran perusahaan.</li>
          <li>Nilai <b>Total Laba / Rugi</b> diperoleh dari total pendapatan dikurangi total beban.</li>
          <li>Gunakan filter periode untuk melihat laporan berdasarkan bulan atau rentang tanggal tertentu.</li>
        </ul>

        <hr>

        <h6><b>Penjelasan Kolom</b></h6>
        <table class="table table-bordered table-sm">
          <thead class="table-secondary">
            <tr><th>Kolom</th><th>Keterangan</th></tr>
          </thead>
          <tbody>
            <tr><td>Kode Akun</td><td>Kode COA yang digunakan dalam pencatatan akuntansi.</td></tr>
            <tr><td>Nama Akun</td><td>Nama akun pendapatan atau beban.</td></tr>
            <tr><td>Nominal</td><td>Total transaksi pada akun tersebut dalam periode laporan.</td></tr>
            <tr><td>Total Pendapatan</td><td>Akumulasi seluruh akun pendapatan.</td></tr>
            <tr><td>Total Beban</td><td>Akumulasi seluruh akun beban.</td></tr>
            <tr><td>Total Laba / Rugi</td><td>Hasil akhir keuntungan atau kerugian perusahaan.</td></tr>
          </tbody>
        </table>

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
