<!-- ========================================================= -->
<!-- PAGE : finance-balance-sheet.php -->
<!-- STYLE : Financial Statement Report -->
<!-- FOKUS :
     - Laporan Neraca / Balance Sheet
     - Posisi Keuangan Periode
     - Aset, Liabilitas, dan Ekuitas
-->
<!-- ========================================================= -->

<?php $page = 'finance-balance-sheet'; ?>
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
            Laporan Neraca
            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan"
                    title="Bantuan">
              <i class="fas fa-question-circle"></i>
            </button>
          </h3>
          <p class="text-muted mb-0">
            Menampilkan posisi keuangan perusahaan berdasarkan saldo akun COA pada periode tertentu.
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
            <div class="col-md-6">
              <b>Periode:</b> hingga - 31 Mei 2026
            </div>
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
      <!-- LAPORAN NERACA — ASET (full width) -->
      <!-- ================================================= -->
      <div class="card card-outline card-secondary">

        <div class="card-header">
          <h3 class="card-title">Aset</h3>
        </div>

        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-bordered table-sm mb-0">
              <thead class="table-secondary text-center">
                <tr>
                  <th width="15%">Kode Akun</th>
                  <th>Nama Akun</th>
                  <th width="25%" class="text-end">Nominal (Rp)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>111-100</td>
                  <td>Kas Besar</td>
                  <td class="text-end">125.000.000</td>
                </tr>
                <tr>
                  <td>111-200</td>
                  <td>Kas Kecil</td>
                  <td class="text-end">5.000.000</td>
                </tr>
                <tr>
                  <td>112-100</td>
                  <td>Bank BCA</td>
                  <td class="text-end">68.500.000</td>
                </tr>
                <tr>
                  <td>113-100</td>
                  <td>Piutang Usaha</td>
                  <td class="text-end">14.750.000</td>
                </tr>
                <tr>
                  <td>114-100</td>
                  <td>Persediaan Barang</td>
                  <td class="text-end">27.300.000</td>
                </tr>
                <tr>
                  <td>121-100</td>
                  <td>Peralatan Café</td>
                  <td class="text-end">45.000.000</td>
                </tr>
                <tr>
                  <td>121-200</td>
                  <td>Akumulasi Penyusutan</td>
                  <td class="text-end">(8.250.000)</td>
                </tr>
              </tbody>
              <tfoot>
                <tr class="table-secondary fw-bold">
                  <td colspan="2" class="text-center">TOTAL ASET</td>
                  <td class="text-end">277.300.000</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>

      </div>

      <!-- LIABILITAS + EKUITAS side by side -->
      <div class="row">

        <!-- LIABILITAS -->
        <div class="col-md-6">
          <div class="card card-outline card-secondary">

            <div class="card-header">
              <h3 class="card-title">Liabilitas</h3>
            </div>

            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-bordered table-sm mb-0">
                  <thead class="table-secondary text-center">
                    <tr>
                      <th width="20%">Kode Akun</th>
                      <th>Nama Akun</th>
                      <th width="30%" class="text-end">Nominal (Rp)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>211-100</td>
                      <td>Hutang Supplier</td>
                      <td class="text-end">18.700.000</td>
                    </tr>
                    <tr>
                      <td>212-100</td>
                      <td>Hutang Operasional</td>
                      <td class="text-end">7.500.000</td>
                    </tr>
                    <tr>
                      <td>213-100</td>
                      <td>Hutang Pajak</td>
                      <td class="text-end">3.200.000</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr class="table-secondary fw-bold">
                      <td colspan="2" class="text-center">TOTAL LIABILITAS</td>
                      <td class="text-end">29.400.000</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

          </div>
        </div>

        <!-- EKUITAS -->
        <div class="col-md-6">
          <div class="card card-outline card-secondary">

            <div class="card-header">
              <h3 class="card-title">Ekuitas</h3>
            </div>

            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-bordered table-sm mb-0">
                  <thead class="table-secondary text-center">
                    <tr>
                      <th width="20%">Kode Akun</th>
                      <th>Nama Akun</th>
                      <th width="30%" class="text-end">Nominal (Rp)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>331-100</td>
                      <td>Modal Disetor / Modal Pemilik</td>
                      <td class="text-end">220.000.000</td>
                    </tr>
                    <tr>
                      <td>331-130</td>
                      <td>Laba Ditahan</td>
                      <td class="text-end">12.500.000</td>
                    </tr>
                    <tr>
                      <td>331-140</td>
                      <td>Laba Berjalan</td>
                      <td class="text-end">15.400.000</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr class="table-secondary fw-bold">
                      <td colspan="2" class="text-center">TOTAL EKUITAS</td>
                      <td class="text-end">247.900.000</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- FOOT SUMMARY -->
      <div class="card card-outline card-secondary">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold fs-5">TOTAL ASET : 277.300.000</span>
            <span class="fw-bold fs-5">TOTAL LIABILITAS &amp; EKUITAS : 277.300.000</span>
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
            Filter digunakan untuk menampilkan laporan neraca berdasarkan periode tertentu sesuai saldo akun COA.
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal Awal</label>
            <input type="date" name="tanggal_awal" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal Akhir</label>
            <input type="date" name="tanggal_akhir" class="form-control">
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
          Bantuan Membaca Laporan Neraca
        </h5>
        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>
      </div>

      <div class="modal-body">

        <p>
          Laporan Neraca menampilkan posisi keuangan perusahaan pada periode tertentu berdasarkan saldo akun COA (Chart of Account).
        </p>

        <hr>

        <h6><b>Penjelasan Bagian Laporan</b></h6>
        <ul>
          <li><b>Aset</b> — harta atau sumber daya yang dimiliki perusahaan: kas, bank, piutang, persediaan, dan aset tetap.</li>
          <li><b>Liabilitas</b> — kewajiban atau hutang perusahaan kepada pihak lain.</li>
          <li><b>Ekuitas</b> — modal pemilik, laba ditahan, dan laba berjalan.</li>
          <li>Kolom <b>Nominal</b> menunjukkan saldo akhir masing-masing akun pada periode yang dipilih.</li>
          <li>Nilai dalam tanda kurung <b>( )</b> menunjukkan saldo negatif atau akun kontra.</li>
          <li>Total Aset harus sama dengan Total Liabilitas dan Ekuitas sebagai indikator keseimbangan laporan neraca.</li>
        </ul>

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
