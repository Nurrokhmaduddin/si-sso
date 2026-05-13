<!-- ========================================================= -->
<!-- PAGE : finance-cashflow-report.php -->
<!-- STYLE : Finance Cash Flow Report -->
<!-- FOKUS :
     - Monitoring arus kas
     - Perubahan saldo kas
     - Rekap akun kas berdasarkan COA
     - Perbandingan saldo awal & saldo akhir
-->
<!-- ========================================================= -->

<?php $page = 'finance-monitoring'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <!-- ========================================================= -->
  <!-- CONTENT HEADER -->
  <!-- ========================================================= -->
  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Laporan Arus Kas

        <button
          type="button"
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
  </section>

  <!-- ========================================================= -->
  <!-- MAIN CONTENT -->
  <!-- ========================================================= -->
  <section class="content">

    <div class="container-fluid">

      <div class="row">

        <div class="col-md-12">

          <!-- ========================================================= -->
          <!-- FILTER -->
          <!-- ========================================================= -->

          <div class="card">

            <div class="card-body">

              <div class="row">

                <div class="col-md-6">
                  <h4 class="mb-0">
                    <b>Lembaga :</b> Semua Lembaga
                  </h4>
                </div>

                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                  <h4 class="mb-0">
                    <b>Periode :</b> 1 Mei 2026 - 31 Mei 2026
                  </h4>
                </div>

              </div>

            </div>

            <div class="card-footer">

              <div class="card-tools ms-auto">

                <button
                  class="btn btn-outline-info"
                  data-bs-toggle="modal"
                  data-bs-target="#modalFilter">

                  <i class="fas fa-filter me-1"></i>
                  Filter

                </button>

                <button
                  type="button"
                  class="btn btn-outline-success">

                  <i class="fas fa-file-download me-1"></i>
                  Export

                </button>

              </div>

            </div>

          </div>

        </div>

      </div>

      <!-- ========================================================= -->
      <!-- TABLE LAPORAN -->
      <!-- ========================================================= -->

      <div class="row">

        <div class="col-md-12">

          <div class="card shadow-sm">

            <div class="card-body p-4">

              <div class="table-responsive">

                <table class="table table-bordered mb-0">

                  <!-- HEADER ORANGE -->
                  <thead>

                    <tr style="background:#eb7d2d;color:#fff;">

                      <th colspan="5"
                          class="text-end py-3"
                          style="font-size:18px;">

                        KAS AWAL PERIODE :
                        -14.008.000

                      </th>

                    </tr>

                    <tr
                      style="
                        background:#f3f3f3;
                        font-size:16px;
                      ">

                      <th width="15%">Kode Akun</th>

                      <th width="35%">Nama Akun</th>

                      <th width="17%" class="text-end">
                        Saldo Awal (Rp)
                      </th>

                      <th width="17%" class="text-end">
                        Saldo Akhir (Rp)
                      </th>

                      <th width="16%" class="text-end">
                        Selisih (Rp)
                      </th>

                    </tr>

                  </thead>

                  <!-- BODY -->
                  <tbody>

                    <tr>

                      <td>111-106</td>

                      <td>Kas BATAP-APK</td>

                      <td class="text-end">
                        -9.008.000
                      </td>

                      <td class="text-end">
                        -9.008.000
                      </td>

                      <td class="text-end">
                        0
                      </td>

                    </tr>

                    <tr>

                      <td>CORP-122</td>

                      <td>Kas Kecil</td>

                      <td class="text-end">
                        -5.000.000
                      </td>

                      <td class="text-end">
                        -5.000.000
                      </td>

                      <td class="text-end">
                        0
                      </td>

                    </tr>

                    <tr>

                      <td>DMY</td>

                      <td>Dummy</td>

                      <td class="text-end">
                        0
                      </td>

                      <td class="text-end">
                        0
                      </td>

                      <td class="text-end">
                        0
                      </td>

                    </tr>

                    <tr>

                      <td>PA07</td>

                      <td>COA Dummy</td>

                      <td class="text-end">
                        0
                      </td>

                      <td class="text-end">
                        0
                      </td>

                      <td class="text-end">
                        0
                      </td>

                    </tr>

                    <!-- TOTAL -->
                    <tr
                      style="
                        background:#f7f7f7;
                        font-weight:bold;
                        font-size:18px;
                      ">

                      <td colspan="4" class="text-center py-3">

                        TOTAL KENAIKAN / PENURUNAN KAS

                      </td>

                      <td class="text-end">

                        0

                      </td>

                    </tr>

                    <!-- FOOTER ORANGE -->
                    <tr
                      style="
                        background:#d9681d;
                        color:#fff;
                        font-size:18px;
                        font-weight:bold;
                      ">

                      <td colspan="5"
                          class="text-end py-3">

                        KAS AKHIR PERIODE :
                        -14.008.000

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
<!-- /.content-wrapper -->

<?php include('4footer.php'); ?>

<!-- ========================================================= -->
<!-- MODAL FILTER -->
<!-- ========================================================= -->

<div
  class="modal fade"
  id="modalFilter"
  tabindex="-1"
  aria-labelledby="modalFilterLabel"
  aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-info text-white">

        <h5 class="modal-title" id="modalFilterLabel">
          Filter Laporan
        </h5>

        <button
          type="button"
          class="btn-close btn-close-white"
          data-bs-dismiss="modal"
          aria-label="Close">
        </button>

      </div>

      <form action="" method="GET">

        <div class="modal-body">

          <div
            class="alert alert-warning mb-3"
            role="alert"
            style="font-size:0.9rem;">

            <b>Informasi:</b>
            Filter digunakan untuk membatasi tampilan laporan arus kas berdasarkan periode dan lembaga tertentu.

          </div>

          <div class="mb-3">

            <label class="form-label">
              Periode
            </label>

            <input
              type="text"
              class="form-control"
              value="1 Mei 2026 - 31 Mei 2026">

          </div>

          <div class="mb-3">

            <label class="form-label">
              Lembaga
            </label>

            <select class="form-select">

              <option value="">
                -- Semua Lembaga --
              </option>

              <option>
                Fakultas Teknik
              </option>

              <option>
                Fakultas Ekonomi
              </option>

              <option>
                Yayasan
              </option>

            </select>

          </div>

        </div>

        <div class="modal-footer">

          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal">

            Batal

          </button>

          <button
            type="submit"
            class="btn btn-info">

            Terapkan Filter

          </button>

        </div>

      </form>

    </div>

  </div>

</div>

<!-- ========================================================= -->
<!-- MODAL BANTUAN -->
<!-- ========================================================= -->

<div
  class="modal fade"
  id="modalBantuan"
  tabindex="-1"
  aria-labelledby="modalBantuanLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">

        <h5 class="modal-title" id="modalBantuanLabel">
          Bantuan Membaca Laporan Arus Kas
        </h5>

        <button
          type="button"
          class="btn-close btn-close-white"
          data-bs-dismiss="modal"
          aria-label="Close">
        </button>

      </div>

      <div class="modal-body">

        <p>
          Laporan Arus Kas digunakan untuk menampilkan perubahan saldo kas pada periode tertentu berdasarkan akun-akun kas yang terdaftar pada Chart of Account (COA).
        </p>

        <p>
          Informasi pada laporan ini membantu pengguna memantau posisi kas awal, perubahan saldo kas selama periode berjalan, serta saldo kas akhir setelah seluruh transaksi diproses.
        </p>

        <hr>

        <h6>
          Penjelasan Kolom:
        </h6>

        <ul>

          <li>
            <b>Kode Akun</b>
            → kode unik akun kas pada COA.
          </li>

          <li>
            <b>Nama Akun</b>
            → nama akun kas atau rekening kas.
          </li>

          <li>
            <b>Saldo Awal</b>
            → saldo kas pada awal periode laporan.
          </li>

          <li>
            <b>Saldo Akhir</b>
            → saldo kas setelah transaksi periode berjalan diproses.
          </li>

          <li>
            <b>Selisih</b>
            → perubahan kenaikan atau penurunan saldo kas.
          </li>

        </ul>

        <hr>

        <p class="mb-0">

          Bagian
          <b>Kas Awal Periode</b>
          menunjukkan total saldo kas sebelum transaksi periode berjalan.

          Sedangkan
          <b>Kas Akhir Periode</b>
          menunjukkan total saldo kas setelah seluruh transaksi pada periode tersebut selesai diproses.

        </p>

      </div>

      <div class="modal-footer">

        <button
          type="button"
          class="btn btn-secondary"
          data-bs-dismiss="modal">

          Tutup

        </button>

      </div>

    </div>

  </div>

</div>

<?php include('5script.php'); ?>