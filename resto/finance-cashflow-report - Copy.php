<!-- ========================================================= -->
<!-- PAGE : finance-cashflow-report.php -->
<!-- STYLE : Finance Cash Flow Report -->
<!-- FOKUS :
     - Laporan arus kas
     - Perubahan saldo kas
     - Rekap akun kas berdasarkan COA
     - Perbandingan saldo awal & saldo akhir
-->
<!-- ========================================================= -->

<?php $page = 'finance-cashflow-report'; ?>
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
            Laporan Arus Kas
            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan"
                    title="Bantuan">
              <i class="fas fa-question-circle"></i>
            </button>
          </h3>
          <p class="text-muted mb-0">
            Menampilkan perubahan saldo kas berdasarkan akun COA kas pada periode tertentu.
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
           <!--  <div class="col-md-6">
              <b>Lembaga:</b> Semua Lembaga
            </div> -->
            <div class="col-md-6 ">
              <b>Periode:</b> 1 Mei 2026 - 31 Mei 2026
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
      <!-- TABEL LAPORAN ARUS KAS -->
      <!-- ================================================= -->
      <div class="card card-outline card-secondary">

        <div class="card-header">
          <h3 class="card-title">Rincian Perubahan Saldo Kas</h3>
        </div>

        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-bordered table-sm mb-0">

              <!-- KAS AWAL -->
              <thead>
                <tr class="table-secondary">
                  <td colspan="5" class="text-end fw-bold py-2">
                    KAS AWAL PERIODE : &nbsp; (14.008.000)
                  </td>
                </tr>
                <tr class="table-secondary">
                  <th width="15%">Kode Akun</th>
                  <th width="35%">Nama Akun</th>
                  <th width="17%" class="text-end">Saldo Awal (Rp)</th>
                  <th width="17%" class="text-end">Saldo Akhir (Rp)</th>
                  <th width="16%" class="text-end">Selisih (Rp)</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>111-106</td>
                  <td>Kas BATAP-APK</td>
                  <td class="text-end">(9.008.000)</td>
                  <td class="text-end">(9.008.000)</td>
                  <td class="text-end">0</td>
                </tr>
                <tr>
                  <td>CORP-122</td>
                  <td>Kas Kecil</td>
                  <td class="text-end">(5.000.000)</td>
                  <td class="text-end">(5.000.000)</td>
                  <td class="text-end">0</td>
                </tr>
                <tr>
                  <td>DMY</td>
                  <td>Dummy</td>
                  <td class="text-end">0</td>
                  <td class="text-end">0</td>
                  <td class="text-end">0</td>
                </tr>
                <tr>
                  <td>PA07</td>
                  <td>COA Dummy</td>
                  <td class="text-end">0</td>
                  <td class="text-end">0</td>
                  <td class="text-end">0</td>
                </tr>
              </tbody>

              <tfoot>
                <tr class="table-secondary fw-bold">
                  <td colspan="4" class="text-center py-2">
                    TOTAL KENAIKAN / PENURUNAN KAS
                  </td>
                  <td class="text-end">0</td>
                </tr>
                <tr class="table-secondary fw-bold">
                  <td colspan="5" class="text-end py-2">
                    KAS AKHIR PERIODE : &nbsp; (14.008.000)
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
            Filter digunakan untuk membatasi tampilan laporan arus kas berdasarkan periode dan lembaga tertentu.
          </div>

          <div class="mb-3">
            <label class="form-label">Periode</label>
            <input type="text" class="form-control" value="1 Mei 2026 - 31 Mei 2026">
          </div>

          <div class="mb-3">
            <label class="form-label">Lembaga</label>
            <select class="form-select">
              <option value="">-- Semua Lembaga --</option>
              <option>Fakultas Teknik</option>
              <option>Fakultas Ekonomi</option>
              <option>Yayasan</option>
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
          Bantuan Membaca Laporan Arus Kas
        </h5>
        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>
      </div>

      <div class="modal-body">

        <p>
          Laporan Arus Kas menampilkan perubahan saldo kas pada periode tertentu berdasarkan akun-akun kas yang terdaftar pada Chart of Account (COA).
        </p>

        <hr>

        <h6><b>Penjelasan Kolom</b></h6>
        <table class="table table-bordered table-sm">
          <thead class="table-secondary">
            <tr><th>Kolom</th><th>Keterangan</th></tr>
          </thead>
          <tbody>
            <tr><td>Kode Akun</td><td>Kode unik akun kas pada COA.</td></tr>
            <tr><td>Nama Akun</td><td>Nama akun kas atau rekening kas.</td></tr>
            <tr><td>Saldo Awal</td><td>Saldo kas pada awal periode laporan.</td></tr>
            <tr><td>Saldo Akhir</td><td>Saldo kas setelah transaksi periode berjalan diproses.</td></tr>
            <tr><td>Selisih</td><td>Perubahan kenaikan atau penurunan saldo kas.</td></tr>
          </tbody>
        </table>

        <hr>

        <p class="mb-0">
          <b>Kas Awal Periode</b> menunjukkan total saldo kas sebelum transaksi periode berjalan.
          <b>Kas Akhir Periode</b> menunjukkan total saldo kas setelah seluruh transaksi pada periode tersebut selesai diproses.
        </p>

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
