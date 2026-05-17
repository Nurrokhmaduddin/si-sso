<!-- ========================================================= -->
<!-- PAGE : finance-equity-report.php -->
<!-- STYLE : Financial Statement Report -->
<!-- FOKUS :
     - Laporan Perubahan Modal
     - Mutasi akun ekuitas
     - Ringkasan modal awal & akhir
     - Berdasarkan COA Ekuitas
-->
<!-- ========================================================= -->

<?php $page = 'finance-equity-report'; ?>
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
            Laporan Perubahan Modal
            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan"
                    title="Bantuan">
              <i class="fas fa-question-circle"></i>
            </button>
          </h3>
          <p class="text-muted mb-0">
            Menampilkan perubahan saldo modal perusahaan berdasarkan akun ekuitas (COA) pada periode tertentu.
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
              <b>Periode:</b> 1 Mei 2026 - 31 Mei 2026
            </div>
            <!-- <div class="col-md-6 text-md-end">
              <b>Status Data:</b> Final Posting
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
      <!-- LAPORAN PERUBAHAN MODAL -->
      <!-- ================================================= -->
      <div class="card card-outline card-secondary">

        <div class="card-header">
          <h3 class="card-title">Rincian Perubahan Modal</h3>
        </div>

        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-bordered table-sm mb-0">

              <!-- MODAL AWAL -->
              <thead>
                <tr class="table-secondary">
                  <td colspan="3" class="text-end fw-bold py-2">
                    MODAL AWAL PERIODE : &nbsp; Rp 190.980.000
                  </td>
                </tr>
                <tr class="table-secondary text-center">
                  <th width="15%">Kode Akun</th>
                  <th>Nama Akun</th>
                  <th width="20%">Nominal (Rp)</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>331-100</td>
                  <td>Modal Disetor / Modal Pemilik</td>
                  <td class="text-end">25.000.000</td>
                </tr>
                <tr>
                  <td>331-120</td>
                  <td>Tambahan Investasi Pemilik</td>
                  <td class="text-end">10.000.000</td>
                </tr>
                <tr>
                  <td>331-130</td>
                  <td>Laba Ditahan (Retained Earnings)</td>
                  <td class="text-end">18.500.000</td>
                </tr>
                <tr>
                  <td>331-140</td>
                  <td>Prive Pemilik</td>
                  <td class="text-end text-danger">(5.000.000)</td>
                </tr>
              </tbody>

              <tfoot>
                <tr class="table-secondary fw-bold">
                  <td colspan="2" class="text-center py-2">TOTAL PERUBAHAN</td>
                  <td class="text-end">48.500.000</td>
                </tr>
                <tr class="table-secondary fw-bold">
                  <td colspan="3" class="text-end py-2">
                    MODAL AKHIR PERIODE : &nbsp; Rp 239.480.000
                  </td>
                </tr>
              </tfoot>

            </table>
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
            Laporan akan menampilkan perubahan saldo modal berdasarkan transaksi pada akun ekuitas (COA) selama periode yang dipilih.
          </div>

          <div class="mb-3">
            <label for="periode" class="form-label">Periode</label>
            <select name="periode" id="periode" class="form-select">
              <option value="">-- Pilih Periode --</option>
              <option value="mei-2026">Mei 2026</option>
              <option value="april-2026">April 2026</option>
              <option value="maret-2026">Maret 2026</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="status" class="form-label">Status Posting</label>
            <select name="status" id="status" class="form-select">
              <option value="">-- Pilih Status --</option>
              <option value="final">Final Posting</option>
              <option value="draft">Draft</option>
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
          Bantuan Laporan Perubahan Modal
        </h5>
        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>
      </div>

      <div class="modal-body">

        <p>
          Laporan Perubahan Modal menampilkan perubahan nilai modal perusahaan dalam suatu periode akuntansi. Informasi bersumber dari akun-akun ekuitas (COA Ekuitas) seperti modal pemilik, laba ditahan, tambahan investasi, dan prive.
        </p>

        <hr>

        <h6><b>Cara Membaca Laporan</b></h6>
        <ul>
          <li><b>Modal Awal Periode</b> — total saldo modal pada awal periode sebelum terjadi transaksi atau penyesuaian.</li>
          <li>Tabel utama menampilkan rincian akun ekuitas beserta nominal perubahan selama periode berjalan.</li>
          <li>Nilai positif menandakan penambahan modal; nilai dalam tanda kurung <b>( )</b> menunjukkan pengurangan modal.</li>
          <li><b>Total Perubahan</b> — akumulasi seluruh mutasi akun modal selama periode.</li>
          <li><b>Modal Akhir Periode</b> diperoleh dari: Modal Awal + Total Perubahan = Modal Akhir.</li>
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
